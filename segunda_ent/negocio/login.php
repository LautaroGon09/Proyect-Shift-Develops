<?php include('../../includes/header.php') ?>

      
      <h2 >Hola buenas</h2>
   



<?php include('../../includes/footer.php') ?>
  
<?php
require_once("miapp.php");
if (isset($_POST['ingresar'])) {

    if (isset($_POST['mail'])  && isset($_POST['pass'])) {

        $email = $_POST['mail'];
        $pass = $_POST['pass'];

        if (empty($_POST['mail'])) {
            echo "<p style='color:red;'>Es necesario agregar un  email </p>";
        }
        if (empty($_POST['pass'])) {
            echo "<p style='color:red;'>Es necesario agregar una contraseña </p>";
        }
        if( empty($_POST['mail']) || empty($_POST['pass'])) { 

            return ;
        } else{

        

        if (login($email, $pass) == true) {
            if (existe_cliente($email, $pass) == true) {
                header('refresh: 1; url=../dise/cliente.php');
            } else if (existe_jefe($email, $pass) == true) {
                header('refresh: 1; url=../dise/accion.php');
            }
            else if (existe_vendedor($email, $pass) == true) {
                header('refresh: 1; url=../dise/vendedor.php');
            }
            else if (existe_comprador($email, $pass) == true) {
                header('refresh: 1; url=../dise/comprador.php');
            }
        } else {
            echo "<p style='color:red;'>Usuario o contraseña incorrecta </p>";
        }
    }
}
}
?>
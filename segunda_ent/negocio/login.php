
     <?php include("../../includes/header.php")?>
     <div class="flex bg">
        <form name="formulario" method="post" action="" class='bg-sleat-800 h-12'>

            <input placeholder="Email" type="email" name="mail" maxlength="30" size="40">

            <input placeholder="Contraseña" type="password" name="pass" maxlength="30" size="40">

            <input type="submit" value="Ingresar" name="ingresar">
        
        </form> 

    </div>

    
 
    

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
    <?php include("../../includes/footer.php"); ?>

    
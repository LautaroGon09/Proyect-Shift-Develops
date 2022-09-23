<?php
$nom = null;
$ape = null;
$mail = null;
$tel = null;
ob_start();
require_once("../../dato/conexion.php");
require_once("miapp_user.php");
$ID = $_GET["ID"];

$consultas = mysqli_query($con, "SELECT * FROM usuario WHERE IdUsuario='" . $ID . "'") or die(mysqli_error($con));

while ($filax = mysqli_fetch_array($consultas)) {
    $nom = $filax['Nombre'];
    $ape = $filax['Apellido'];
    $pass = $filax['Contraseña'];
    $mail = $filax['Email'];
}
$cons = mysqli_query($con, "SELECT * FROM telusr WHERE IdUsuario='" . $ID . "'") or die(mysqli_error($con));

while ($filam = mysqli_fetch_array($cons)) {
    $tel = $filam['Telefono'];
}
if (isset($_POST['modificar'])) {

    if (isset($_POST['nom2'])  && isset($_POST['ape2']) && isset($_POST['mail2'])  && isset($_POST['pass']) && isset($_POST['tel2'])) {

        $patron = '/[0-9]/';

        if (preg_match("$patron", ($_POST['nom2']))) {
            echo '<script language="javascript">alert("Solo letras en el nombre");</script>';
            header('refresh: 1; ');
            die;
        }
        if (preg_match("$patron", ($_POST['ape2']))) {
            echo '<script language="javascript">alert("Solo letras en el apellido");</script>';
            header('refresh: 1; ');
            die;
        }


        if (empty($_POST['nom2']) || empty($_POST['ape2']) || empty($_POST['mail2']) || empty($_POST['pass']) || empty($_POST['tel2'])) {

            return;
        }


        $nom2 = $_POST['nom2'];
        $ape2 = $_POST['ape2'];
        $pass = $_POST['pass'];
        $mail2 = $_POST['mail2'];
        $tel2 = $_POST['tel2'];
        if (actualizar($nom2, $ape2, $pass, $mail2, $tel2, $ID)  == true) {
            echo '<script language="javascript">alert("Se ha modificado correctamente");</script>';
            header('refresh: 1; url=modificar.php');
        }
    }
}


?>

<form name="formulario" method="post" action="">

    <input placeholder="" type="text" name="nom2" value="<?php echo $nom; ?>" required maxlength="30" size="40">

    <input placeholder="" type="text" name="ape2" value="<?php echo $ape ?>" required maxlength="30" size="40">

    <input placeholder="Ingrese nueva contraseña" value="" type="password" name="pass" required maxlength="30" size="40">

    <input placeholder="" type="email" name="mail2" value="<?php echo $mail; ?>" required maxlength="30" size="40">

    <input placeholder="" type="number" name="tel2" value="<?php echo $tel; ?>" required maxlength="30" size="40">


    <input type="submit" value="Modificar" name="modificar">

</form>
<br />
<a href="modificar.php">Regresar</a>

<head>
    <meta charset="UTF-8">

    <title>Modificar usuario </title>
</head>
</body>

</html>
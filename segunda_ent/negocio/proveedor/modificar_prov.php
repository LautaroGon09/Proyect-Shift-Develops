<?php
$mail = null;
$dir = null;
$tel = null;
ob_start();
require_once("../../dato/conexion.php");
require_once("miapp_prov.php");
$ID = $_GET["ID"];

$consultas = mysqli_query($con, "SELECT * FROM proveedor WHERE IdEmpresa='" . $ID . "'") or die(mysqli_error($con));

while ($filax = mysqli_fetch_array($consultas)) {
    $mail = $filax['Email'];
    $dir = $filax['Direccion'];
}

$cons = mysqli_query($con, "SELECT * FROM telproveedor WHERE IdEmpresa='" . $ID . "'") or die(mysqli_error($con));

while ($filam = mysqli_fetch_array($cons)) {
    $tel = $filam['Num_Telefono'];
}
if (isset($_POST['modificar'])) {

    if (isset($_POST['mail2'])  && isset($_POST['dir2']) && isset($_POST['tel2'])) {

        $patron = '/[0-9]/';

        if (empty($_POST['mail2'])) {
            echo "<p style='color:red;'>Es necesario agregar un  email </p>";
            header('refresh: 2; ');
        }
        if (empty($_POST['dir2'])) {
            echo "<p style='color:red;'>Es necesario agregar una direccion </p>";
            header('refresh: 2; ');
        }


        if (empty($_POST['tel2'])) {
            echo "<p style='color:red;'>Es necesario agregar un telefono </p>";
            header('refresh: 2; ');
        }
        if (empty($_POST['mail2']) || empty($_POST['dir2']) || empty($_POST['tel2'])) {

            return;
        }


        $mail2 = $_POST['mail2'];
        $dir2 = $_POST['dir2'];
        $tel2 = $_POST['tel2'];
        if (actualizar_prov($mail2, $dir2, $tel2, $ID)  == true) {
            echo "<p style='color:green;'>Se ha actualizado correctamente</p>";
            header('refresh: 1; url=../../dise/accion.php');
        }
    }
}


?>

<form name="formulario" method="post" action="">

    <input placeholder="" type="email" name="mail2" value="<?php echo $mail; ?>" maxlength="30" size="40">

    <input placeholder="" value="<?php echo $dir; ?>" type="text" name="dir2" maxlength="30" size="40">

    <input placeholder="" type="number" name="tel2" value="<?php echo $tel; ?>" maxlength="30" size="40">


    <input type="submit" value="Modificar" name="modificar">

</form>
<br />
<br> <a href="../../dise/accion.php">Regresar</a> <br>

<head>
    <meta charset="UTF-8">

    <title>Modificar usuario </title>
</head>
</body>

</html>
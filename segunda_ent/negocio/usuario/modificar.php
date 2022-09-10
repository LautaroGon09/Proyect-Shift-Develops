<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <title>Modificar</title>
</head>

<body>
    <form name="formulario" method="post" action="">

        <input placeholder="Email" type="email" name="mail" maxlength="30" size="40">

        <input type="submit" value="Buscar Usuario" name="buscar">

    </form>
    <table width="40%" border="1">
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Email</th>
            <th>Telefono</th>
            <th>Accion</th>
        </tr>
        <?php
        $IDu = null;
        $nom = null;
        $ape = null;
        $mail = null;
        $tel = null;


        require_once("../../dato/conexion.php");
        require_once("miapp_user.php");

        
        if (isset($_POST['buscar'])) {
            ?>
                 <?php
            if (isset($_POST['mail'])) {
                if (empty($_POST['mail'])) {
                    echo "<p style='color:red;'>Es necesario agregar un  email </p>";
                    header('refresh: 2; ');
                } else {


                    $email = $_POST['mail'];

                    if (buscar_datos($email) == true) {
                        $consulta = mysqli_query($con, "SELECT * FROM usuario WHERE Email='" . $email . "'") or die(mysqli_error($con));

                        while ($filas = mysqli_fetch_array($consulta)) {
                            $IDu = $filas['IdUsuario'];
                            $nom = $filas['Nombre'];
                            $ape = $filas['Apellido'];
                            $mail = $filas['Email'];
                        }
                        $cons = mysqli_query($con, "SELECT * FROM telusr WHERE IdUsuario='" . $IDu . "'") or die(mysqli_error($con));

                        while ($filam = mysqli_fetch_array($cons)) {
                            $tel = $filam['Telefono'];
                        }
                    } else {
                        echo "<p style='color:red;'>El usuario ingresado no existe </p>";
                    }
                }
            }
            ?>
        <tr>
            <td><?php echo "<p style='color:black;'>" . $IDu . "</p>"; ?></td>
            <td><?php echo "<p style='color:black;'>" . $nom . "</p>"; ?></td>
            <td><?php echo "<p style='color:black;'>" . $ape . "</p>"; ?></td>
            <td><?php echo "<p style='color:black;'>" . $mail . "</p>"; ?></td>
            <td><?php echo "<p style='color:black;'>" . $tel . "</p>"; ?></td>
            <td><a href="modificar_usuario.php?ID=<?php echo $IDu; ?>">Modificar </a></td>
        
            <?php }?>
        </tr>

        <br>
        <br> <a href="../../dise/accion.php">Regresar</a> <br>
</body>

</html>
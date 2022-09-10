<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <title>Modificar Proveedor</title>
</head>

<body>
    <form name="formulario" method="post" action="">

        <input placeholder="Email" type="email" name="mail" maxlength="30" size="40">

        <input type="submit" value="Buscar Usuario" name="buscar">

    </form>
    <table width="40%" border="1">
        <tr>
            <th>Id Empresa</th>
            <th>Email</th>
            <th>Direccion</th>
            <th>Telefono</th>
            <th>Accion</th>
        </tr>
        <?php
        $IDe = null;
        $mail = null;
        $dir = null;
        $tel= null;
        require_once("../../dato/conexion.php");
        require_once("miapp_prov.php");

        if (isset($_POST['buscar'])) {
            ?>
                 <?php
            if (isset($_POST['mail'])) {
                if (empty($_POST['mail'])) {
                    echo "<p style='color:red;'>Es necesario agregar un  email </p>";
                    header('refresh: 2; ');
                } else {
                $email = $_POST['mail'];

                if (buscar_datos_prov($email) == true) {
                    $consulta = mysqli_query($con, "SELECT * FROM proveedor WHERE Email='" . $email . "'") or die(mysqli_error($con));

                    while ($filas = mysqli_fetch_array($consulta)) {
                        $IDe = $filas['IdEmpresa'];
                        $mail = $filas['Email'];
                        $dir = $filas['Direccion'];
                    }
                    $cons = mysqli_query($con, "SELECT * FROM telproveedor WHERE IdEmpresa='" . $IDe . "'") or die(mysqli_error($con));

                    while ($filam = mysqli_fetch_array($cons)) {
                        $tel = $filam['Num_Telefono'];
                    }
                } else {
                    echo "<p style='color:red;'>El usuario ingresado no existe </p>";
                }
            }
        }
        
        ?>
        <tr>
            <td><?php echo "<p style='color:black;'>" . $IDe . "</p>"; ?></td>
            <td><?php echo "<p style='color:black;'>" . $mail . "</p>"; ?></td>
            <td><?php echo "<p style='color:black;'>" . $dir . "</p>"; ?></td>
            <td><?php echo "<p style='color:black;'>" . $tel . "</p>"; ?></td>
            <td><a href="modificar_prov.php?ID=<?php echo $IDe; ?>">Modificar </a></td>
            
            <?php }?>
        </tr>

        <br>
        <br> <a href="../../dise/accion.php">Regresar</a> <br>
</body>
</html>
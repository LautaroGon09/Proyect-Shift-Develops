<?php
    ob_start();
    require_once("../../dato/conexion.php");
    require_once("miapp_prov.php");

    $consulta = mysqli_query($con, "SELECT * FROM proveedor") or die(mysqli_error($con));

    ?>

    <table width="40%" border="1">
        <tr>
            <th>Id Empresa</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Direccion</th>
            <th>Accion</th>
        </tr>
        <?php
        $IDe = null;
        $nombre = null;
        $mail = null;
        $dir = null;
        $tel = null;
        while ($filas = mysqli_fetch_array($consulta)) {
            $IDe = $filas['IdEmpresa'];
            $nom = $filas['Nombre'];
            $mail = $filas['Email'];
            $dir = $filas['Direccion'];

            if (isset($_POST['buscar'])) {
                if (isset($_POST['mail'])) {
                    
                    if (empty($_POST['mail'])) {

                        return;
                    }

                    $email = $_POST['mail'];

                    if (buscar_datos_prov($email) == true) {
                        $consulta = mysqli_query($con, "SELECT * FROM proveedor WHERE Email='" . $email . "'") or die(mysqli_error($con));

                        while ($filas = mysqli_fetch_array($consulta)) {
                            $IDe = $filas['IdEmpresa'];
                            $nom = $filas['Nombre'];
                            $mail = $filas['Email'];
                            $dir = $filas['Direccion'];

                        }
                       
                    } else {
                        $email = null;
                        echo '<script language="javascript">alert("El usuario ingresado no existe");</script>';
                        header('refresh: 1; ');
                        die;
                    }
                }
            }
        ?>
            <tr>
            <td><?php echo "<p style='color:black;'>" . $IDe . "</p>"; ?></td>
            <td><?php echo "<p style='color:black;'>" . $nom . "</p>"; ?></td>
            <td><?php echo "<p style='color:black;'>" . $mail . "</p>"; ?></td>
            <td><?php echo "<p style='color:black;'>" . $dir . "</p>"; ?></td>
                <td>
                    <form method="post" action="">
                        <input type="submit" value="Eliminar" name="eliminar" />
                    </form>
                </td>
            </tr>
        <?php


        }


        if (isset($_POST['eliminar']))
            if (eliminar_prov($mail)  == true) {
                echo '<script language="javascript">alert("Se ha eliminado correctamente");</script>';
                header('refresh: 1;');
            }


        ?>
    </table>
    <br />
   

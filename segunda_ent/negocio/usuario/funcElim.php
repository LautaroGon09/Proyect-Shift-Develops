

    <?php
    ob_start();
    require_once("../../dato/conexion.php");
    require_once("miapp_user.php");

    $consulta = mysqli_query($con, "SELECT * FROM usuario") or die(mysqli_error($con));

    ?>

    <table width="40%" border="1">
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Email</th>
            <th>Accion</th>
        </tr>
        <?php

        while ($filas = mysqli_fetch_array($consulta)) {
            $IDu = $filas['IdUsuario'];
            $nom = $filas['Nombre'];
            $ape = $filas['Apellido'];
            $email = $filas['Email'];

            if (isset($_POST['buscar'])) {
                if (isset($_POST['mail'])) {
                 
                    if (empty($_POST['mail'])) {

                        return;
                    }

                    $email = $_POST['mail'];

                    if (buscar_datos($email) == true) {
                        $consulta = mysqli_query($con, "SELECT * FROM usuario WHERE Email='" . $email . "'") or die(mysqli_error($con));

                        while ($filas = mysqli_fetch_array($consulta)) {
                            $IDu = $filas['IdUsuario'];
                            $nom = $filas['Nombre'];
                            $ape = $filas['Apellido'];
                            $email = $filas['Email'];
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
                <td><?php echo "<p style='color:black;'>" . $IDu . "</p>"; ?></td>
                <td><?php echo "<p style='color:black;'>" . $nom . "</p>"; ?></td>
                <td><?php echo "<p style='color:black;'>" . $ape . "</p>"; ?></td>
                <td><?php echo "<p style='color:black;'>" . $email . "</p>"; ?></td>
                <td>
                    <form method="post" action="">
                        <input type="submit" value="Eliminar" name="eliminar" />
                    </form>
                </td>
            </tr>
        <?php


        }


        if (isset($_POST['eliminar']))
            if (eliminar($email)  == true) {
                echo '<script language="javascript">alert("Se ha eliminado correctamente");</script>';
                header('refresh: 1;');
            }


        ?>
    </table>
    
    
    
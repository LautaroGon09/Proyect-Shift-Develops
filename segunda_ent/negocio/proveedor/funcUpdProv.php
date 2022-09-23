<?php
        $IDe = null;
        $nombre = null;
        $mail = null;
        $dir = null;
        $tel = null;
        require_once("../../dato/conexion.php");
        require_once("miapp_prov.php");

        if (isset($_POST['buscar'])) {
        ?>
            <?php
            if (isset($_POST['mail'])) {

                $email = $_POST['mail'];

                if (buscar_datos_prov($email) == true) {
                    $consulta = mysqli_query($con, "SELECT * FROM proveedor WHERE Email='" . $email . "'") or die(mysqli_error($con));

                    while ($filas = mysqli_fetch_array($consulta)) {
                        $IDe = $filas['IdEmpresa'];
                        $nom = $filas['Nombre'];
                        $mail = $filas['Email'];
                        $dir = $filas['Direccion'];
                    }
                    $cons = mysqli_query($con, "SELECT * FROM telproveedor WHERE IdEmpresa='" . $IDe . "'") or die(mysqli_error($con));

                    while ($filam = mysqli_fetch_array($cons)) {
                        $tel = $filam['Num_Telefono'];
                    }
                } else {
                    echo '<script language="javascript">alert("El usuario ingresado no existe");</script>';
                    header('refresh: 1; ');
                    die;
                }
            }

            ?>
            <tr>
                <td><?php echo "<p style='color:black;'>" . $IDe . "</p>"; ?></td>
                <td><?php echo "<p style='color:black;'>" . $nom . "</p>"; ?></td>
                <td><?php echo "<p style='color:black;'>" . $mail . "</p>"; ?></td>
                <td><?php echo "<p style='color:black;'>" . $dir . "</p>"; ?></td>
                <td><?php echo "<p style='color:black;'>" . $tel . "</p>"; ?></td>
                <td><a href="modificar_prov.php?ID=<?php echo $IDe; ?>">Modificar </a></td>

            <?php } ?>
            </tr>

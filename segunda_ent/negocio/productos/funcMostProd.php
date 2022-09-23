<?php
    ob_start();
    require_once("../../dato/conexion.php");
    require_once("miapp_productos.php");

    $consulta = mysqli_query($con, "SELECT * FROM productos") or die(mysqli_error($con));

    ?>

    <table width="40%" border="1">
        <tr>
         <th>Id Producto</th>
         <th>Nombre</th>
            <th>Stock</th>
            <th>Precio</th>
            <th>Descripcion</th>
            <th>Foto</th>
            <th>Editar</th>
            <th>Eliminar</th>


        </tr>
        <?php

        while ($filas = mysqli_fetch_array($consulta)) {
            $IDp = $filas['IdProducto'];
            $nom = $filas['Nombre'];
            $sto = $filas['Stock'];
            $pre = $filas['Precio'];
            $desc = $filas['Descripcion'];

            // $cons = mysqli_query($con, "SELECT * FROM telproveedor WHERE IdEmpresa='" . $IDp . "'") or die(mysqli_error($con));

            //             while ($filam = mysqli_fetch_array($cons)) {
            //                 $tel = $filam['Num_Telefono'];
                        

            if (isset($_POST['buscar'])) {
                if (isset($_POST['nom'])) {
                 
                    if (empty($_POST['nom'])) {

                        return;
                    }

                    $nombre = $_POST['nom'];

                    if (buscar_datos_prod($nom) == true) {
                        $consulta = mysqli_query($con, "SELECT * FROM productos WHERE Nombre='" . $nombre . "'") or die(mysqli_error($con));

                        while ($filas = mysqli_fetch_array($consulta)) {
                            $IDp = $filas['IdProducto'];
                            $nom = $filas['Nombre'];
                            $sto = $filas['Stock'];
                            $pre = $filas['Precio'];
                            $desc = $filas['Descripcion'];
                        }
                        // $cons = mysqli_query($con, "SELECT * FROM telproveedor WHERE IdEmpresa='" . $IDp . "'") or die(mysqli_error($con));

                        // while ($filam = mysqli_fetch_array($cons)) {
                        //     $tel = $filam['Num_Telefono'];
                        
                        // }
                    } else {
                        $nombre = null;
                        echo '<script language="javascript">alert("El Producto ingresado no existe");</script>';
                        header('refresh: 1; ');
                        die;

                    }
                }
            }
        ?>
            <tr>
                <td><?php echo "<p style='color:black;'>" . $IDp . "</p>"; ?></td>
                <td><?php echo "<p style='color:black;'>" . $nom . "</p>"; ?></td>
                <td><?php echo "<p style='color:black;'>" . $sto . "</p>"; ?></td>
                <td><?php echo "<p style='color:black;'>" . $pre . "</p>"; ?></td>
                <td><?php echo "<p style='color:black;'>" . $desc . "</p>"; ?></td>
                <td><?php echo "<p style='color:black;'>" . "aca va una foto" . "</p>"; ?></td>
                <td><a href="editar_prod.php?ID=<?php echo $IDp; ?>">Modificar </a></td>
                <td><a href="eliminar_prod.php?ID=<?php echo $IDp; ?>">Eliminar </a></td>


            </tr>
        <?php

        }
        // }


        ?>
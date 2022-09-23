<?php

function existe_prod($nombre)
{
    $con = mysqli_connect("localhost", "root", "Mateobarsa04", "shiftdevelops");
    $query = mysqli_query($con, "SELECT IdProducto FROM productos WHERE Nombre='" . $nombre . "'") or die(mysqli_error($con));

    $row = $query->fetch_assoc();
    mysqli_close($con);

    if ($row == null) {
        return false;
    }

    return true;
}

function buscar_datos_prod($nombre)
{
    $con = mysqli_connect("localhost", "root", "Mateobarsa04", "shiftdevelops");
    $query = mysqli_query($con, "SELECT * FROM productos WHERE Nombre='" . $nombre . "'") or die(mysqli_error($con));

    $row = $query->fetch_assoc();
    mysqli_close($con);

    if ($row == null) {
        return false;
    }

    return true;
}




function agregar_prod($Nombre, $stock, $precio,$descripcion,$foto,$id_p)
{
    $con =   mysqli_connect("localhost", "root", "Mateobarsa04", "shiftdevelops");
    mysqli_query($con, "insert into productos (Nombre,Stock,Tipo, Precio, Descripcion, Foto)
    VALUES('$Nombre', '$stock', 'null', '$precio', '$descripcion', '$foto' )") or die;
         $id = mysqli_insert_id($con);
         mysqli_query($con, "insert into provee(IdEmpresa,IdProducto) values (" . $id_p . ", '$id')");

    mysqli_close($con);

    return true;
}

function eliminar_prod($nombre)
{
    $con =   mysqli_connect("localhost", "root", "Mateobarsa04", "shiftdevelops");
    mysqli_query($con, "DELETE FROM productos  WHERE Nombre='" . $nombre . "'") or die;
    (mysqli_error($con));
    mysqli_close($con);

    return true;
}

function actualizar_prov($email, $direccion, $telefono, $ID)
{
    $con =   mysqli_connect("localhost", "root", "Mateobarsa04", "shiftdevelops");
    mysqli_query($con, "UPDATE proveedor SET email = '$email', Direccion = '$direccion'
        WHERE IdEmpresa = '$ID'") or die(mysqli_error($con));
    mysqli_query($con, "UPDATE telproveedor SET Num_Telefono = '$telefono' WHERE IdEmpresa = '$ID'") or die(mysqli_error($con));
    return true;
}

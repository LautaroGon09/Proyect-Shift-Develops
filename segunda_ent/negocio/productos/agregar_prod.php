<!DOCTYPE html>
<html lang="en">

<link rel="stylesheet" type="text/css" href="../../css/style.css">
<head>
    <meta charset="UTF-8">

    <title>Agregar Producto</title>
</head>

<body>
    <form name="formulario" method="post" action="">
        <br> <select name="proveedor" onchange="" id="proveedor"> <br>
            <br>
            <option value="0">Ingrese proveedor</option>
            <option value="1">Sony</option>
        </select>
        <br>
        <br> <input placeholder="Nombre del producto" type="text" name="prod" maxlength="30" size="40"> <br>

        <br> <input placeholder="Precio del producto" type="number" name="pre" maxlength="30" size="40"> <br>

        <br> <input placeholder="Cantidad adquirida" type="text" name="cant" maxlength="30" size="40"> <br>

        <div class="photo">
            <label for="foto">Foto</label>
            <div class="prevPhoto">
            <span class="delPhoto notBlock">X</span>
            <label for="foto"></label>
            </div>
            <div class="upimg">
            <input type="file" name="foto" id="foto">
            </div>
            <div id="form_alert"></div>
        </div>

        <br>
        <br> <button type="submit" class="btn_save"><i class="far fa-save fa-lg"> </i> Guardar Producto </button> <br>

        <script  src="../../js/jquery-3.6.0.min.js"></script>
        <script  src="../../js/functions.js"></script>
    </form>

    <!-- <?php
            require_once("miapp_user.php");
            if (isset($_POST['agregar'])) {

                if (isset($_POST['nom'])  && isset($_POST['ape']) && isset($_POST['mail'])  && isset($_POST['pass'])) {

                    $patron = '/[0-9]/';

                    if (preg_match("$patron", ($_POST['nom']))) {
                        echo "<p style='color:red;'>Solo letras en el nombre </p>";
                        header('refresh: 1; ');
                    }
                    if (preg_match("$patron", ($_POST['ape']))) {
                        echo "<p style='color:red;'>Solo letras en el apellido </p>";
                        header('refresh: 1; ');
                    }

                    if (empty($_POST['nom'])) {
                        echo "<p style='color:red;'>Es necesario agregar un nombre </p>";
                        header('refresh: 1; ');
                    }
                    if (empty($_POST['ape'])) {
                        echo "<p style='color:red;'>Es necesario agregar un apellido </p>";
                        header('refresh: 1; ');
                    }
                    if (empty($_POST['mail'])) {
                        echo "<p style='color:red;'>Es necesario agregar un  email </p>";
                        header('refresh: 1; ');
                    }
                    if (empty($_POST['pass'])) {
                        echo "<p style='color:red;'>Es necesario agregar una contraseña </p>";
                        header('refresh: 1; ');
                    }
                    if (($_POST['rol']) == "0") {
                        echo "<p style='color:red;'>Es necesario agregar un rol </p>";
                        header('refresh: 1; ');
                    } else {


                        if (empty($_POST['nom']) || empty($_POST['ape']) || empty($_POST['mail']) || empty($_POST['pass'])) {

                            return;
                        }


                        $nombre = $_POST['nom'];
                        $apellido = $_POST['ape'];
                        $email = $_POST['mail'];
                        $password = $_POST['pass'];
                        $rango = $_POST['rol'];

                        if (existe($email) == true) {
                            echo "<p style='color:red;'>Email ya existente, ingrese otro email</p>";
                        } else {
                            if (($_POST['rol']) == "1") {
                                if (agregar_vendedor($nombre, $apellido, $email, $password)  == true) {
                                    echo "<p style='color:green;'>Se ha registrado correctamente</p>";
                                    header('refresh: 1; url=../../dise/accion.php');
                                }
                            } else if (($_POST['rol']) == "2") {
                                if (agregar_comprador($nombre, $apellido, $email, $password)  == true) {
                                    echo "<p style='color:green;'>Se ha registrado correctamente</p>";
                                    header('refresh: 1; url=../../dise/accion.php');
                                }
                            }
                        }
                    }
                }
            }
            ?> -->
    <br> <a href="../../dise/accion.php">Regresar</a> <br>
</body>

</html
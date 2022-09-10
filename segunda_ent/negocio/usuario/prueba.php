<?php
    require_once("miapp_user.php");
    if (isset($_POST['registrarse'])) {

        if (isset($_POST['nom'])  && isset($_POST['ape']) && isset($_POST['tel']) && isset($_POST['mail'])  && isset($_POST['pass'])) {

            $patron = '/0-9]/';

            if (preg_match("$patron", ($_POST['nom']))) {
                echo "<p style='color:red;'>Solo letras en el nombre </p>";
            }
            if (preg_match("$patron", ($_POST['ape']))) {
                echo "<p style='color:red;'>Solo letras en el apellido </p>";
            }

            if (empty($_POST['nom'])) {
                echo "<p style='color:red;'>Es necesario agregar un nombre </p>";
            }
            if (empty($_POST['ape'])) {
                echo "<p style='color:red;'>Es necesario agregar un apellido </p>";
            }
            if (empty($_POST['tel'])) {
                echo "<p style='color:red;'>Es necesario agregar un telefono </p>";
            }
            if (empty($_POST['mail'])) {
                echo "<p style='color:red;'>Es necesario agregar un  email </p>";
            }
            if (empty($_POST['pass'])) {
                echo "<p style='color:red;'>Es necesario agregar una contraseña </p>";
            }
            if(empty($_POST['nom'])|| empty($_POST['ape']) || empty($_POST['tel']) || empty($_POST['mail']) || empty($_POST['pass'])) {

                return ;
            }


            $nombre = $_POST['nom'];
            $apellido = $_POST['ape'];
            $email = $_POST['mail'];
            $password = $_POST['pass'];
            $telefono = $_POST['tel'];
            if (existe($email) == true) {
                echo "<p style='color:red;'>Email ya existente, ingrese otro email</p>";
            } else {

                
                if (reg_clin($nombre, $apellido, $email, $password,$telefono)  == true) {
                    echo "<p style='color:green;'>Se ha registrado correctamente</p>";
                    header('refresh: 1; url=../dise/index.php');
                }
            } 
        }
    }
    ?>
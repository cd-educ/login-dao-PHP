<?php

    session_start();
    require("./daos/usuarios.php");

    if(isset($_POST["username"]) && isset($_POST["password"])){
        
        if(existeUsuario($_POST["username"], $_POST["password"])){
            
            $_SESSION["username"] = $_POST["username"];
            header("location:home.php");

        } else {

            $_SESSION["error"] = "Credenciales incorrectas";
            header("location:index.php");

        }

    } else {

        $_SESSION["error"] = "Campos vacios";
        header("location:index.php");

    }

?>
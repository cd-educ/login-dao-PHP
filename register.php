<?php

    session_start();
    require("./daos/usuarios.php");

    if(isset($_POST["username"]) && isset($_POST["password"])){
        
        crearUsuario($_POST["username"], $_POST["password"]);
            
        $_SESSION["error"] = "Usuario creado correctamente";
        header("location:index.php");

    } else {

        $_SESSION["error"] = "Campos vacios";
        header("location:index.php");

    }

?>
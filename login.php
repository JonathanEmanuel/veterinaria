<?php
    require_once('app/model/Usuario.php');
    // Conectarme a la Base de Datos
    $usuario = new Usuario();

    if(  !isset( $_POST['email'] ) && !isset($_POST['password']) ) {
        echo "Datos ivalido";
        return;
    }

    $email = $_POST['email'];
    $password = $_POST['password'];

    $respuesta = $usuario->loguear($email, $password);

    if( count($respuesta) > 0 ){
        echo "Log Ok";
        // llamar a una funcion para el login
        session_start();
        $_SESSION['user'] = $email;

        header('location: privada.php');
    } else {
        echo "Email o pass Invalidos";
    }





?>
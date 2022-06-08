<?php

    if(  !isset( $_POST['email'] ) && !isset($_POST['password']) ) {
        echo "Datos ivalido";
        return;
    }

    $email = $_POST['email'];
    $password = $_POST['password'];

    $email_system = 'admin@gmail.com';
    $pass_system = '123';

    if( $email == $email_system && $password == $pass_system ){
        echo "Log Ok";
        // llamar a una funcion para el login
        session_start();
        $_SESSION['user'] = $email;

        header('location: privada.php');
    } else {
        echo "Email o pass Invalidos";
    }





?>
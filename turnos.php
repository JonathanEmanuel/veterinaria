<?php
    session_start();
    require_once('partes/header.html');
    require_once('partes/modalLogin.html');

    if( isset( $_SESSION['user'])){
        require_once('pages/turnos.html');

        echo "Panel de admin " . $_SESSION['user'];
        echo "<a href='logout.php'> Salir </a>";
    
    } else {

        echo "No autenticado;";
        echo "<a href='index.php'>Volver</a>";
    }


?>
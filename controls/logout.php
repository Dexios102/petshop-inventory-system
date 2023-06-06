<?php
    session_start();

    if($_SESSION['priv'] != ''){
        session_destroy();
        header('Location: ../components/auth/login.php');
    }
    else{
        header('Location: ../components/auth/login.php');
    }
?>
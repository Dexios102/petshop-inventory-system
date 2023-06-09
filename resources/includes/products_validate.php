<?php 
    session_start();

    if($_SESSION['fullname'] == ''){
        header('Location: components/auth/login.php');
    }
    elseif($_SESSION['priv'] == 2){
        header('Location: controls/route.php');
    }
?>
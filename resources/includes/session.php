<?php
    session_start();
    if($_SESSION['fullname'] == ''){
        header('Location: components/auth/login.php');
    }
?>
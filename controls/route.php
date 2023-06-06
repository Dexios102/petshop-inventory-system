<?php
    session_start();
    
    if($_SESSION['priv'] == 1){
        header('Location: ../index.php');
    }
?>
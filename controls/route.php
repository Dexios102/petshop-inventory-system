<?php
    session_start();
    
    if($_SESSION['priv'] == 1){
        header('Location: ../app/products.php');
    }
    else{
        header('Location: ../index.php');
    }
?>
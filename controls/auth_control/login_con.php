<?php
    include '../../controls/conn.php';
    session_start();
    $msg = "";
    
    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $pass = $_POST['password'];

        $selectemail = "SELECT * FROM tbl_users WHERE email = :email LIMIT 1";
        $selectstatement = $pdo -> prepare($selectemail);
        $selectstatement->bindParam(':email', $email, PDO::PARAM_STR);
        $selectstatement->execute();
        $result = $selectstatement->fetch(PDO::FETCH_ASSOC);
        if ($result) {
            if($result['password'] == $pass){
                $_SESSION['priv'] = $result['priv'];
                $_SESSION['fullname'] = $result['fullname'];
                $_SESSION['email'] = $result['email'];
    
                header('Location: ../../controls/route.php');
            }
            else{
                $msg = '<h3 class="font-bold mb-5 bg-red-100 p-2 rounded-sm">Email or password is incorrect</h3>';
            }
        } 
        else {
            $msg = '<h3 class="font-bold mb-5 bg-red-100 p-2 rounded-sm">Email or password is incorrect</h3>';
        }
    }
?>
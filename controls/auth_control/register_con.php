<?php
    include '../../controls/conn.php';
    $msg = "";
    if(isset($_POST['signup'])){
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        if($fullname == ''){
            $msg = '<h3 class="font-bold mb-5 bg-red-100 p-2 rounded-sm">Fullname is required!</h3>';
        }
        elseif($email == ''){
            $msg = '<h3 class="font-bold mb-5 bg-red-100 p-2 rounded-sm">Email is required!</h3>';
        }
        elseif($password == ''){
            $msg = '<h3 class="font-bold mb-5 bg-red-100 p-2 rounded-sm">Password is required!</h3>';
        }
        else{
            $selectemail = "SELECT * FROM tbl_users WHERE email = :email";
            $selectstatement = $pdo -> prepare($selectemail);
            $selectstatement->bindParam(':email', $email, PDO::PARAM_STR);
            $selectstatement->execute();
            $emailresult = $selectstatement->fetch(PDO::FETCH_ASSOC);
            if ($emailresult) {
                $msg = '<h3 class="font-bold mb-5 bg-red-100 p-2 rounded-sm">Email Already exist!</h3>';
            } 
            else {
                $sql = "INSERT INTO tbl_users(priv, fullname, email, password)
                VALUES (:priv, :fullname, :email, :pass)";
                $result = $pdo -> prepare($sql);

                $result->execute([
                    ':priv' => 1,
                    ':fullname' => $fullname,
                    ':email' => $email,
                    ':pass' => $password
                ]);

                if($result){
                    $msg = '<h3 class="font-bold mb-5 bg-green-100 p-2 rounded-sm">Successfully Registered!</h3>';
                }
            }
        }
    }
?>
<?php
    include '../controls/conn.php';
    $msg = "";

    if(isset($_POST['save'])){
        $product_name = $_POST['product_name'];
        $description = $_POST['description'];
        $quantity = $_POST['quantity'];
        $price = $_POST['price'];
        $img = $_FILES['image']['name'];

        $targetDirectory = '../controls/media/';
        
        if (move_uploaded_file($_FILES['image']['tmp_name'], $targetDirectory.$img)) {
            $sql = "INSERT INTO tbl_inventory(product_name, description, quantity, price, img)
            VALUES (:product_name, :descrip, :quantity, :price, :img)";
            $result = $pdo -> prepare($sql);

            $result->execute([
                ':product_name' => $product_name,
                ':descrip' => $description,
                ':quantity' => $quantity,
                ':price' => $price,
                ':img' => $img
            ]);

            if($result){
                $msg = '<h3 class="font-bold mb-5 bg-green-100 p-2 rounded-sm">New product added!</h3>';
            }
        } else {
            $msg = '<h3 class="font-bold mb-5 bg-green-100 p-2 rounded-sm">Error uploading file.</h3>';
        }
        


    }
?>
<?php
    include '../conn.php';

    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $product_name = $_POST['product'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $total = $_POST['total'];


    $select = "SELECT * FROM tbl_orders WHERE inv_id = :id LIMIT 1";
    $selectstatement = $pdo -> prepare($select);
    $selectstatement->bindParam(':id', $id, PDO::PARAM_INT);
    $selectstatement->execute();
    $result = $selectstatement->fetch(PDO::FETCH_ASSOC);
    if ($result) { 
            $new_order = $quantity + $result['order_quantity'];        
                $sql = "UPDATE tbl_orders SET  order_quantity = :new_order WHERE inv_id = :id LIMIT 1";
                $statement = $pdo->prepare($sql);

                $statement->bindParam(':id',  $id, PDO::PARAM_INT);
                $statement->bindParam(':new_order', $new_order);

            if($statement->execute()){
                $select = "SELECT * FROM tbl_inventory WHERE inv_id = :id LIMIT 1";
                $selectstatement = $pdo -> prepare($select);
                $selectstatement->bindParam(':id', $id, PDO::PARAM_INT);
                $selectstatement->execute();
                $result = $selectstatement->fetch(PDO::FETCH_ASSOC);
                if ($result) {
                        $newquant = $result['quantity'] - $quantity;
                        $sql = "UPDATE tbl_inventory SET quantity = :quantity WHERE inv_id = :inv_id";
                        $statement = $pdo->prepare($sql);
                    
                        $statement->bindParam(':inv_id', $id, PDO::PARAM_INT);
                        $statement->bindParam(':quantity', $newquant);
                        if ($statement->execute()) {
                            echo 'success!';
                        }
            } 
            }
    } 
else{
    $sql = "INSERT INTO tbl_orders(inv_id, name, email, product_name, order_quantity, price_perunit, total_price)
    VALUES (:in_id, :name, :email, :product, :order_quantity, :price, :total)";
    $result = $pdo -> prepare($sql);

    $result->execute([
            ':in_id' => $id,
            ':name' => $name,
            ':email' => $email,
            ':product' => $product_name,
            ':order_quantity' => $quantity,
            ':price' => $price,
            ':total' => $total
        ]);

    if($result){
    $select = "SELECT * FROM tbl_inventory WHERE inv_id = :id LIMIT 1";
    $selectstatement = $pdo -> prepare($select);
    $selectstatement->bindParam(':id', $id, PDO::PARAM_INT);
    $selectstatement->execute();
    $result = $selectstatement->fetch(PDO::FETCH_ASSOC);
    if ($result) {
            $newquant = $result['quantity'] - $quantity;
            $sql = "UPDATE tbl_inventory SET quantity = :quantity WHERE inv_id = :inv_id";
            $statement = $pdo->prepare($sql);
        
            $statement->bindParam(':inv_id', $id, PDO::PARAM_INT);
            $statement->bindParam(':quantity', $newquant);
            if ($statement->execute()) {
                echo 'success!';
            }
    } 
    }
}
?>
<?php
    include '../conn.php';

    $id = $_POST['id'];
    $quantity = $_POST['quantity'];
    $arr = [
        'inv_id' => $id,
        'quantity' => $quantity
    ];

    $sql = "UPDATE tbl_inventory SET quantity = :quantity WHERE inv_id = :inv_id";
    $statement = $pdo->prepare($sql);

    $statement->bindParam(':inv_id', $arr['inv_id'], PDO::PARAM_INT);
    $statement->bindParam(':quantity', $arr['quantity']);

    if ($statement->execute()) {
        echo 'success!';
    }
    else{
        echo 'error';
    }
?>

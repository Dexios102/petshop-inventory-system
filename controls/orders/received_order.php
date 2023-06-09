<?php
    include '../conn.php';

    $id = $_GET['a'];
    $stat = 'Received';
    $arr = [
        'id' => $id,
        'status' => $stat
    ];

    $sql = "UPDATE tbl_orders SET status = :status WHERE order_id = :id";
    $statement = $pdo->prepare($sql);

    $statement->bindParam(':id', $arr['id'], PDO::PARAM_INT);
    $statement->bindParam(':status', $arr['status']);

    if ($statement->execute()) {
        header('Location: ../../app/check_outs.php');
    }
    else{
        echo 'error';
    }
?>

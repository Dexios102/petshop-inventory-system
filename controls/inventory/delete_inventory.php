<?php
    include '../conn.php';

    $id = $_GET['a'];

    $sql = 'DELETE FROM tbl_inventory
    WHERE inv_id = :inv_id';

    $statement = $pdo->prepare($sql);
    $statement->bindParam(':inv_id', $id, PDO::PARAM_INT);

    if ($statement->execute()) {
        header('Location: ../../app/inventory.php');
    }
?>
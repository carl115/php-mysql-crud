<?php

    require_once('../../../Connection.php');

    $stmt = $conn->prepare("DELETE FROM product WHERE id = :id;");
    $stmt->bindParam('id', $_POST['id']);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if($stmt->rowCount() > 0) {
        header('Location: ../src/products_product_name.php');
    }
    
?>
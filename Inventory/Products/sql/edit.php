<?php

    require_once('../../../Connection.php');

    $stmt = $conn->prepare(
        "UPDATE product SET
        product_name = :product_name, 
        category = :category, 
        units = :units, 
        unit_price = :unit_price
        WHERE id = :id;"
    );
    $stmt->bindParam('id', $_POST['id']);
    $stmt->bindParam('product_name', $_POST['product_name']);
    $stmt->bindParam('category', $_POST['category']);
    $stmt->bindParam('units', $_POST['units']);
    $stmt->bindParam('unit_price', $_POST['unit_price']);
    $stmt->execute();

    if($stmt->execute()) {
        header('Location: ../src/products_product_name.php');
    }
    
?>
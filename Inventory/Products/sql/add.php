<?php
    require_once('../../../Connection.php');

    if($_POST) {
        $stmt = $conn->prepare(
            "INSERT INTO product(product_name, category, units, unit_price) 
            VALUES(:product_name, :category, :units, :unit_price);"
        );
        $stmt->bindParam('product_name', $_POST['product_name']);
        $stmt->bindParam('category', $_POST['category']);
        $stmt->bindParam('units', $_POST['units']);
        $stmt->bindParam('unit_price', $_POST['unit_price']);
        
        if($stmt->execute()) {
            header('Location: ../src/products_product_name.php');
        }
    }
?>
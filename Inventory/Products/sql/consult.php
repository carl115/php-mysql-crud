<?php
    if($_POST) {
        switch ($_POST['filterProduct']) {
            case 'category':
                header('Location: ../src/products_category.php');
                break;
            case 'product_name':
                header('Location: ../src/products_product_name.php');
                break;
            case 'unit_price':
                header('Location: ../src/products_unit_price.php');
                break;
            case 'units':
                header('Location: ../src/products_units.php');
                break;
            default:
                die('NO FUNCIONA');
                break;
        }
    }
?>
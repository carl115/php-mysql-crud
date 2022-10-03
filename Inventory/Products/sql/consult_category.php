<?php
    require_once('../../../Connection.php');

    if(!isset($_POST['searchProduct'])) {
        $_POST['searchProduct'] = '';
    }

    if(empty($_POST['searchProduct'])) {
        $stmt = $conn->prepare("SELECT * FROM product");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    else {
        $searchProduct = $_POST['searchProduct'];

        $stmt = $conn->prepare("SELECT * FROM product WHERE category LIKE ?");
        $stmt->bindValue(1, $searchProduct .'%', PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    if($stmt->rowCount() > 0) {
        foreach($result as $row) {
            echo "<tr>";
                echo "<td>" . $row['product_name'] . "</td>";
                echo "<td>" . $row['category'] . "</td>";
                echo "<td>" . $row['units'] . "</td>";
                echo "<td>" . $row['unit_price'] . "</td>";
                echo "<td class='d-flex align-items-center justify-content-center'>";
                    echo "<a onclick='editWindow(" . $row['id'] . ")' class='btn-product btn btn-primary mx-2' title='Editar'>";
                        echo "<ion-icon name='create'></ion-icon>";
                    echo "</a>";
                    echo "<a onclick='alertDelete(" . $row['id'] . ")' class='btn-product btn btn-danger' title='Eliminar'>";
                        echo "<ion-icon name='trash'></ion-icon>";
                    echo "</a>";
                echo "</td>";
            echo "</tr>";
        }
    }
    else {
        echo "<td colspan='6' class='alert-line'>";
            echo "<div class='alert alert-primary'>";
                echo "There are not information registered";
            echo "</div>";
        echo "</td>";
    }
?>
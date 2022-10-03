<?php
    require_once('../../../../../Connection.php');

    if(!empty($_POST['id'])) {
        $id = $_POST['id'];

        $stmt = $conn->prepare("SELECT * FROM product WHERE id = :id;");
        $stmt->bindParam('id', $id);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_OBJ);

        echo json_encode($result);
    }
?>
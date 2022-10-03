<?php
    session_start();

    require_once('../../../Connection.php');

    if(isset($_SESSION['id'])) {
        $stmt = $conn->prepare("SELECT id, fullname FROM user WHERE id = :id;");
        $stmt->bindParam('id', $_SESSION['id']);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if(count($result) > 0) {
            $user = $result;
        }
    }
?>
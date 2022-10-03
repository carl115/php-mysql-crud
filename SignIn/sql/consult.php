<?php
    session_start();

    require_once('Connection.php');

    $alert = NULL;

    if($_POST) {
        $stmt = $conn->prepare("SELECT * FROM user WHERE username = :username");
        $stmt->bindParam('username', $_POST['username']);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        /*
        if($stmt->rowCount() == 1 && password_verify($_POST['password'], $result['password'])) {
            $_SESSION['id'] = $result['id'];
            $_SESSION['fullname'] = $result['fullname'];
            header('Location: ../../Inventario/pages/Ventas/src/ventas_producto.php');
        } 
        else {
            $alert = TRUE;
        }
        */
        if($stmt->rowCount() == 1 && $_POST['password'] === $result['password']) {
            $_SESSION['id'] = $result['id'];
            $_SESSION['fullname'] = $result['fullname'];
            header('Location: ../../Inventario/pages/Ventas/src/ventas_producto.php');
        } 
        else {
            $alert = TRUE;
        }
    }
?>
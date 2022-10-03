<?php
    $host = 'localhost';
    $userName = 'root';
    $password = '';
    $db = 'inventory';

    try {
        $conn = new PDO("mysql:host=$host;dbname=$db;", $userName, $password);
    } catch(PDOException $e) {
        echo "Error connecting to database" . $e->getMessage();
    }
?>
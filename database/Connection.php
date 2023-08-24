<?php
try {
    $username = "root";
    $password = "";
    $host = "localhost";
    $dbname = "medallion";

    $conn = new PDO("mysql:host={$host};dbname={$dbname};charset=utf8", $username, $password);
    echo "Connected successfully!";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
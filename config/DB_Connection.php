<?php
$host = 'localhost';
$db_name = 'ism';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host; dbname= $db_name;, $username, $password");
} catch (PDOException $e) {
    echo "<script>alert('데이터베이스 연결 실패 ". addslashes($e->getMessage())."');</script>";
}
?>
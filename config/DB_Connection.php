<?php
$host = 'localhost';
$db_name = 'ism';
$username = 'root';
$password = '';

try { // $username, $password) 여기 부분 "로 안감싸게 조심
    $pdo = new PDO("mysql:host=$host;dbname=$db_name;charset=utf8", $username, $password); //charset=utf8는 한국어 파일이 꺠지지 않도록 하는거
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //버그 추척이 쉬워짐 
} catch (PDOException $e) {
    echo "<script>alert('데이터베이스 연결 실패 ". addslashes($e->getMessage())."');</script>";
}
?>
<?php
header('Content-Type: application/json');

if($_SERVER['REQUEST_METHOD'] == "POST") {
    $user_id = $_POST['user_id'];
    $sql = "SELECT * FROM users WHERE user_id = :user_id";
    
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":user_id", $user_id);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    $response = [
        "message" => $user ? "이 아이디는 사용불가능합니다." : "이 아이디는 사용가능합니다.",
        "available" => !$user
    ];

    echo json_encode($response, JSON_UNESCAPED_UNICODE);
    exit;
}
?>
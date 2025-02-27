<?php
header('Content-Type: application/json');

if($_SERVER['REQUEST_METHOD'] == "POST") {
    $user_name = $_POST['user_name'];
    $user_id = $_POST['user_id'];
    $user_email = $_POST['user_email'];
    $user_pw = $_POST['user_pw'];
    $captcha = $_POST['captcha'];

    if($_SESSION['captcha'] === $captcha) {
        try {
            $sql = "INSERT INTO users (user_name, user_id, user_email, user_pw) VALUES (?,?,?,?)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$user_name, $user_id, $user_email, $user_pw]);

            $response = [
                "message" => "관리자 승인 대기중입니다.",
                "success" => true
            ];

            echo json_encode($response, JSON_UNESCAPED_UNICODE);
            exit;
        } catch (PDOException $e) {
            $response = [
                "message" => "데이터베이스 오류 발생",
                "error" => $e->getMessage(),
                "success" => false
            ];
            echo json_encode($response, JSON_UNESCAPED_UNICODE);
            exit;
        }
    } else {
        $response = [
            "message" => "캡챠인증이 잘못됨",
            "success" =>false
        ];

        echo json_encode($response, JSON_UNESCAPED_UNICODE);
        exit;
    }
};
?>
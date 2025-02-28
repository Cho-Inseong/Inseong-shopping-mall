<?php
header('Content-Type: application/json');

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $user_id = $_POST['user_id'];
    $user_pw = $_POST['user_pw'];
    $user_tier = $_POST['user_tier'];

    try {
        $sql = "SELECT * FROM users WHERE user_id = :user_id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(":user_id", $user_id);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if(!$user) {
            $response = [
                "message" => "아이디를 찾을 수 없습니다.",
                "error" => "병신아 아이디 없엉ㅎ",
                "success" => false
            ];
            echo json_encode($response, JSON_UNESCAPED_UNICODE);
            exit;
        }

        if($user['user_tier'] == $user_tier) {
            if($user['user_pw'] == $user_pw) {
                $_SESSION['user_id'] = $user_id;
                $_SESSION['user_idx'] = $user['user_idx'];
                $_SESSION['user_tier'] = $user['user_tier'];
    
                $response = [
                    "message" => "로그인 성공!",
                    "success" => true
                ];
    
                echo json_encode($response, JSON_UNESCAPED_UNICODE);
                exit;
            } else {
                $response = [
                    "message" => "비밀번호가 잘못되었습니다.",
                    "success" => false
                ];
    
                echo json_encode($response, JSON_UNESCAPED_UNICODE);
                exit;
            }
        }else {
            $response = [
                "message" => "유저 등급이 잘못되었습니다.",
                "error" => "병신아 등급 잘못됨",
                "success" => false
            ];
            echo json_encode($response, JSON_UNESCAPED_UNICODE);
            exit;
        }

    } catch(PDOException $e) {
        $response = [
            "message" => "데이터 베이스 오류",
            "error" => $e->getMessage(),
            "success" => false
        ];
        echo json_encode($response, JSON_UNESCAPED_UNICODE);
        exit;
    };
}
?>
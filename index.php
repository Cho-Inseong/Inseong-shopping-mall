<?php
include("./config/DB_Connection.php");
session_start();
$_SESSION['captcha'] = "G1U7N";

$request = $_SERVER['REQUEST_URI'];
$path = explode("?", $request);
$path[1] = isset($path[1]) ? $path[1] : null;
$resource = explode("/", $path[0]);

$pages = '';
switch ($resource[1]) {
    case '':
        $pages = './views/index.php';
        break;
    case 'sign_up':
        $pages = './views/sign_up.php';
        break;
    case 'sign_in':
        $pages = './views/sign_in.php';
        break;
    case 'mypage':
        $pages = './views/mypage.php';
        break;
    case 'add_goods':
        $pages = './views/add_goods.php';
        break;
    // api
    case 'overlap':
        include('./api/overlap_api.php');
        exit();
        break;
    case 'sign_up_api':
        include('./api/sign_up_api.php');
        exit();
        break;
    case 'sign_in_api':
        include('./api/sign_ip_api.php');
        exit();
        break;
    case 'logout_api':
        include('./api/logout_api.php');
        exit();
        break;
    default:
        http_response_code(404);
        echo "경로잘못됨";
        exit;
}
?>
<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <?php include('./views/components/header.php') ?>
    <?php include($pages) ?>
    <?php include('./views/components/footer.php') ?>
    <script src="./script.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="crossorigin="anonymous"></script>
</body>

</html>
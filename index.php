<?php
include("./config/DB_Connection.php");
session_start();

$request = $_SERVER['REQUEST_URI'];
$path = explode("?", $request);
$path[1] = isset($path[1]) ? $path[1] : null;
$resource = explode("/", $path[0]);

$pages = '';
switch ($resource[1]) {
    case '':
        $pages = './views/index.php';
        break;
}
include($pages);
?>
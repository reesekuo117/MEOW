<?php

session_start();

unset($_SESSION['user']);  //清除某個session 變數
$comeFrom = 'login.php';
if(! empty($_SERVER['HTTP_REFERER'])){
    $comeFrom = $_SERVER['HTTP_REFERER'];
}

session_destroy();

header('Location: login.php');
exit;

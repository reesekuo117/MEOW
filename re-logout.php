<?php

session_start();

unset($_SESSION['user']);
$comeFrom = 'login_.php';
if(! empty($_SERVER['HTTP_REFERER'])){
    $comeFrom = $_SERVER['HTTP_REFERER'];
}

header('Location: login_.php'); 
exit;

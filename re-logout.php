<?php

session_start(); 
// unset($_SESSION['user']);
// header('Location: index_.php');
// exit;



unset($_SESSION['user']);
$comeFrom = 'member.php';
if(! empty($_SERVER['HTTP_REFERER'])){
    $comeFrom = $_SERVER['HTTP_REFERER'];
}

header('Location: index_.php');
exit;
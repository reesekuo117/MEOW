<?php

session_start();

unset($_SESSION['user']);
$comeFrom = 'index_.php';
if(! empty($_SERVER['HTTP_REFERER'])){
    $comeFrom = $_SERVER['HTTP_REFERER'];
}

header('Location: index_.php'); 
exit;

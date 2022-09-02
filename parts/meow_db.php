<?php
$db_host = '192.168.33.78';
$db_user = 'meow';
$db_pass = 'meow';
$db_name = 'meow';

$dsn = "mysql:host={$db_host};dbname={$db_name};charset=utf8"; //data source name

$pdo_options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];
// 

try{
    $pdo = new PDO($dsn, $db_user, $db_pass, $pdo_options);
}catch(PDOException $ex){
    echo "Exception:". $ex->getMessage();
    //Exception 可自定義 get出現的訊息
}
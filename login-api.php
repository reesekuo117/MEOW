<?php
require __DIR__. '/parts/meow_db.php';

$output = [
    'success' => false,
    'error' => '',
    'code' => 0,
];
//1.檢查欄位資料是否足夠
if(empty($_POST['signinemail']) or empty($_POST['signinpassword'])){
    $output['error'] = '資料未填寫完整 請重新輸入!';
    echo json_encode($output, JSON_UNESCAPED_UNICODE);
    exit;
}
$sql = "SELECT * FROM member WHERE email=?";
$stmt = $pdo->prepare($sql);
$stmt->execute(([ $_POST['signinemail']]));
$row =$stmt->fetch();

//2.依email去查詢資料
if(empty($row)){
    $output['error'] = '帳號或密碼錯誤 請重新輸入!';
    $output['code'] = 400;
    echo json_encode($output, JSON_UNESCAPED_UNICODE);
    exit;
}
//3.驗證密碼
if(password_verify($_POST['signinpassword'], $row['password'])){
    // 密碼正確
    $output['success'] = true;
    $_SESSION['user'] = [
        'id' => $row['id'],
        'email' => $row['email'],
    ];
}else{
    // 密碼錯誤
    $output['error'] = '帳號或密碼錯誤 請重新輸入!';
    $output['code'] = 420;
}
echo json_encode($output, JSON_UNESCAPED_UNICODE);
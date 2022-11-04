<?php
require __DIR__. '/parts/meow_db.php';

$output = [
    'success' => false, // 是否新增成功
    'error' => '', // 錯誤訊息
    'code' => 0,
    'postData' => $_POST,
];
if(empty($_POST['oldpassword_re']) or empty($_POST['newpassword_re'])or empty($_POST['againpassword_re'])){
    $output['error'] = '請輸入正確的帳號密碼!';
    echo json_encode($output, JSON_UNESCAPED_UNICODE);
    exit;
}

$sql = "UPDATE `member` SET 
    `password`=?
    WHERE `id`=?";

$stmt = $pdo->prepare($sql);
$stmt->execute([
    // $_POST['newpassword_re'],
    password_hash($_POST['newpassword_re'], PASSWORD_DEFAULT),
    $_POST['id'],
]);


if($stmt->rowCount()){
    $output['success'] = true;
} else {
    $output['error'] = '密碼未修改成功';
}

echo json_encode($output, JSON_UNESCAPED_UNICODE);

<?php
require __DIR__. '/parts/meow_db.php';

$output = [
    'success' => false, // 是否新增成功
    'error' => '', // 錯誤訊息
    'code' => 0,
    'postData' => $_POST,
];
if(empty($_POST['member_name_re']) or empty($_POST['member_phone_re'])){
    $output['error'] = '請輸入正確的帳號密碼!';
    echo json_encode($output, JSON_UNESCAPED_UNICODE);
    exit;
}
if(strtotime($_POST['member_birthday_re'])===false){
    $birthday = null;
}else {
    $birthday = date('Y-m-d', strtotime($_POST['member_birthday_re']));
}

$sql = "UPDATE `member` SET 
    `name`=?,
    `mobile`=?,
    `birthday`=?,
    `address_city`=?,
    `address_region`=?,
    `address`=? 
    WHERE `id`=?";

$stmt = $pdo->prepare($sql);
$stmt->execute([
    $_POST['member_name_re'],
    $_POST['member_phone_re'],
    $birthday,
    $_POST['address_city_re'],
    $_POST['address_region_re'],
    $_POST['member_address_re'],
    $_POST['id'],
]);


if($stmt->rowCount()){
    $output['success'] = true;
} else {
    $output['error'] = '資料未修改';
}

echo json_encode($output, JSON_UNESCAPED_UNICODE);
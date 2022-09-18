<?php
require __DIR__. '/parts/meow_db.php';

$output = [
    'success' => false, // 是否新增成功
    'error' => '', // 錯誤訊息
    'code' => 0,
    'postData' => $_POST,
];

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
    $_POST['name'],
    $_POST['mobile'],
    $birthday,
    $_POST['address_city'],
    $_POST['address_region'],
    $_POST['address'],
    $_POST['id'],
]);


if($stmt->rowCount()){
    $output['success'] = true;
} else {
    $output['error'] = '資料未修改';
}

echo json_encode($output, JSON_UNESCAPED_UNICODE);
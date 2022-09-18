<?php
require __DIR__. '/parts/meow_db.php';

$output = [
    'success' => false, // 是否新增成功
    'error' => '', // 錯誤訊息
    'code' => 0,
    'postData' => $_POST,
];

$sql = "UPDATE `member` SET 
    -- `email`=?,
    `password`=?,
    -- `picture`=?,
    -- `name`=?,
    -- `mobile`=?,
    -- `birthday`=?,
    -- `address_city`=?,
    -- `address_region`=?,
    -- `address`=? 
    -- `created_at`=? 
    WHERE `id`=?";

$stmt = $pdo->prepare($sql);
$stmt->execute([
    $_POST['password'],
]);


if($stmt->rowCount()){
    $output['success'] = true;
} else {
    $output['error'] = '資料未修改';
}

echo json_encode($output, JSON_UNESCAPED_UNICODE);
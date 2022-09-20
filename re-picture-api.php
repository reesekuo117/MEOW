<?php
require __DIR__. '/parts/meow_db.php';

$output = [
    'success' => false, // 是否新增成功
    'error' => '', // 錯誤訊息
    'code' => 0,
    'postData' => $_POST,
];

if(empty($_SESSION['user']['id']) or empty($_POST['picture_re'])){
    $output['error'] = 'no params';
    echo json_encode($output, JSON_UNESCAPED_UNICODE);
    exit;
}
$sql = "UPDATE `member` SET 
    `picture`=?
    WHERE `id`=?";

$stmt = $pdo->prepare($sql);
$stmt->execute([
    $_POST['picture_re'],
    $_SESSION['user']['id'],
]);


if($stmt->rowCount()){
    $output['success'] = true;
} else {
    $output['error'] = '錯誤';
}

echo json_encode($output, JSON_UNESCAPED_UNICODE);
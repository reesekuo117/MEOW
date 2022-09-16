<?php
require __DIR__. '/parts/meow_db.php';

$output = [
    'success' => false, // 是否新增成功
    'error' => '', // 錯誤訊息
    'code' => 0,
    'postData' => $_POST,
];

// $id = var_dump( $_SESSION['user'];
$id = $_SESSION['user'];

$sql = "UPDATE `member` SET 
        `name`=?,
        `mobile`=?,
        `birthday`=?,
        `address_city`=?,
        `address_region`=?,
        `address`=? 
        WHERE `sid`=?";

$stmt = $pdo->prepare($sql);
echo $_POST['name'];
echo $_POST['mobile'];
echo $_POST['birthday'];
echo $_POST['address_city'];
echo $_POST['address_region'];
echo $_POST['address'];

$stmt->execute([
    $_POST['name'],
    $_POST['mobile'],
    $_POST['birthday'],
    $_POST['address_city'],
    $_POST['address_region'],
    $_POST['address'],
    $id,
]);


if($stmt->rowCount()){
    $output['success'] = true;
} else {
    $output['error'] = '資料未修改';
}

echo json_encode($output, JSON_UNESCAPED_UNICODE);
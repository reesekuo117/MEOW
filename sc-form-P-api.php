<?php
require __DIR__. '/parts/meow_db.php';

$output = [
    'success' => false, // 是否新增成功
    'error' => '', // 錯誤訊息
    'code' => 0,
    'postData' => $_POST,
];

if(empty($_POST['ordername-yu']) or empty($_POST['orderphone-yu']) or empty($_POST['orderaddress1-yu'])or empty($_POST['orderaddress2-yu'])or empty($_POST['orderaddress3-yu'])or empty($_POST['order-email-yu'])){
    $output['error'] = '請填寫正確資料!';
    echo json_encode($output, JSON_UNESCAPED_UNICODE);
    exit;
}

$sql = "INSERT INTO `member`(
        `name`, 
        `mobile`, 
        `address_city`, 
        `address_region`,
        `address`,
        `created_at`,
        `email`
    ) VALUES (
        ?,
        ?,
        ?,
        ?,
        ?,
        ?,
        ?,
        NOW()
    )";


$sql = "SELECT * FROM product_oder WHERE member_id=$member_id ";
$row = $pdo->query($sql)->fetch();


// $stmt = $pdo->prepare($sql);
// $stmt->execute([
//     $_POST['ordername-yu'],
//     password_hash($_POST['orderphone-yu'], PASSWORD_DEFAULT)
// ]);

// if($stmt->rowCount()){
//     $output['success'] = true;
// } else {
//     $output['error'] = '資料填寫不正確!';
// }

// echo json_encode($output, JSON_UNESCAPED_UNICODE);




<?php
require __DIR__. '/parts/meow_db.php';

$output = [
    'success' => false, // 是否新增成功
    'error' => '', // 錯誤訊息
    'code' => 0,
    'postData' => $_POST,
];

// if(empty($_POST['signup_email']) or empty($_POST['signup_password']) or empty($_POST['signup_again'])){
//     $output['error'] = '請輸入正確的帳號密碼!';
//     echo json_encode($output, JSON_UNESCAPED_UNICODE);
//     exit;
// }

$sql = "INSERT INTO `review`(
        -- `sid`, 
        -- `members_id`, 
        `target_type`, 
        `collect_id`, 
        `star`, 
        `content`, 
        `tags_sid`, 
        `created_at`,
    ) VALUES (
        -- ?,
        -- ?,
        ?,
        ?,
        ?,
        ?,
        ?,
        NOW()
    )";

$stmt = $pdo->prepare($sql);
$stmt->execute([
    // $_POST['signup_email'],
    // $_POST['signup_password'],
    $_POST[''],
    $_POST[''],
    $_POST[''],
    $_POST[''],
    $_POST[''],
]);

if($stmt->rowCount()){
    $output['success'] = true;
} else {
    $output['error'] = '錯誤';
}

echo json_encode($output, JSON_UNESCAPED_UNICODE);
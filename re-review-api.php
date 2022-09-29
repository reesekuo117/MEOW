<?php
require __DIR__. '/parts/meow_db.php';

$output = [
    'success' => false, // 是否新增成功
    'error' => '', // 錯誤訊息
    'code' => 0,
    'postData' => $_POST,
];
if(empty($_SESSION['user']['id'])){
    echo json_encode($output);
    exit;
}

$member_id = $_SESSION['user']['id'];

if(empty($_POST['target_type']) or empty($_POST['product_sid'])){
    $output['error'] = 'params !!';
    echo json_encode($output);
    exit;
}

$target_type = intval($_POST['target_type']);
$product_sid = intval($_POST['product_sid']);
$star_num = intval($_POST['star_num']);
$tag_re = empty($_POST['tag_re']) ? '[]' : json_encode($_POST['tag_re']);


$sql = "INSERT INTO `review`(
        `members_id`, 
        `target_type`, 
        `collect_sid`, 
        `star`, 
        `content`, 
        `tags_sid`, 
        `created_at`
    ) VALUES (
        ?,
        ?,
        ?,
        ?,
        ?,
        ?,
        NOW()
    )";

$stmt = $pdo->prepare($sql);
$stmt->execute([
    $member_id,
    $target_type,
    $product_sid,
    $star_num,
    $_POST['content_p'],
    $tag_re,
]);

if($stmt->rowCount()){
    $output['success'] = true;
} else {
    $output['error'] = '錯誤';
}

echo json_encode($output, JSON_UNESCAPED_UNICODE);
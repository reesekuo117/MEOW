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

// if(empty($_GET['target_type']) or empty($_GET['product_sid'])){
//     $output['error'] = 'params !!';
//     echo json_encode($output);
//     exit;
// }

// $product_sid = intval($_GET['product_sid']);
// $target_type = intval($_GET['target_type']);
// $star_num = intval($_GET['star_num']);


// $sql = "INSERT INTO `review`(
//         `members_id`, 
//         `target_type`, 
//         `collect_sid`, 
//         `star`, 
//         `content`, 
//         `tags_sid`, 
//         `created_at`
//     ) VALUES (
//         ?,
//         ?,
//         ?,
//         ?,
//         ?,
//         ?,
//         NOW()
//     )";

// $stmt = $pdo->prepare($sql);
// $stmt->execute([
//     $member_id,
//     $target_type,
//     $product_sid ,
//     $star_num,
//     $_POST['content_p'],
//     $_POST['tag_re[]'],
// ]);

// if($stmt->rowCount()){
//     $output['success'] = true;
// } else {
//     $output['error'] = '錯誤';
// }

echo json_encode($output, JSON_UNESCAPED_UNICODE);
<?php
require __DIR__. '/parts/meow_db.php';

$output = [
    'success' => false,
    'handle' => '',
    'error' => '跳出光箱',
];

if(empty($_SESSION['user']['id'])){
    echo json_encode($output);
    exit;
}

$member_id = $_SESSION['user']['id'];

if(empty($_GET['target_type']) or empty($_GET['collect_sid'])){
    $output['error'] = 'params !!';
    echo json_encode($output);
    exit;
}
$target_type = intval($_GET['target_type']);
$collect_sid = intval($_GET['collect_sid']);

// toggle
$sql = "SELECT * FROM love WHERE member_id=$member_id AND target_type=$target_type AND collect_sid=$collect_sid";
$row = $pdo->query($sql)->fetch();

if(empty($row)){
    // insert
    $sql = "INSERT INTO `love`(`member_id`, `target_type`, `collect_sid`, `created_at`) VALUES(
    $member_id,
    $target_type,
    $collect_sid, NOW())";
    $stmt = $pdo->query($sql);
    $output['handle'] = 'insert';
    $output['success'] = $stmt->rowCount() ? true : false;
    $output['error'] = '';

} else{
    // delete
    $sql = "DELETE FROM `love` WHERE sid=". $row['sid'];
    $stmt = $pdo->query(($sql));
    $output['handle'] = 'delete';
    $output['success'] = $stmt->rowCount() ? true : false;
    $output['error'] = '';
}

echo json_encode($output);
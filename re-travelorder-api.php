<?php
require __DIR__. '/parts/meow_db.php';

if(empty($_SESSION['user']) or empty($_SESSION['tcart'])){
    // header('Location: product-list.php');
    // exit;
}
if(empty($_SESSION['user']['id'])){
    echo json_encode($output);
    exit;
}
$member_id = $_SESSION['user']['id'];

$total = 0;
foreach($_SESSION['tcart'] as $i=>$j){
    $total += $j['price']*$j['qty'];
}

$to_sql = "INSERT INTO `travel_order`(
            `member_id`, 
            `travel_sid`, 
            `state`, 
            `price`, 
            `quantity`, 
            `totle`, 
            `name`, 
            `phone`, 
            `address_city`, 
            `address_region`, 
            `address`, 
            `payment`, 
            `payment_state`,
            `created_at`
) VALUES(
    ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,
        NOW()
    )";
$stmt = $pdo->prepare($to_sql);
$stmt->execute([
    $_SESSION['user']['id'],
    $j['sid'],
    $_POST['state'],
    $j['price'],
    $j['qty'],
    $total,
    $_POST['travelname'],
    $_POST['travelphone'],
    $_POST['traveladdress1'],
    $_POST['traveladdress2'],
    $_POST['traveladdress3'],
    $_POST['payment'],
    $_POST['payment_state']
]);


//清除購物車內容
unset($_SESSION['pcart']);

if($stmt->rowCount()){
    $output['success'] = true;
} else {
    $output['error'] = '資料未修改';
}

echo json_encode($output, JSON_UNESCAPED_UNICODE);



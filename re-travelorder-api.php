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

// 寫入訂單
$to_sql = sprintf( "INSERT INTO `travel_order`(
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
        )", $_SESSION['user']['id'], $total );
$stmt = $pdo->query($to_sql);
$order_sid = $pdo->lastInsertId();

// //訂單明細
// $tod_sql = "INSERT INTO `product_details`(`order_sid`, `product_sid`, `quantity`, `price`) VALUES(?, ?, ?, ?)";
// $stmt = $pdo->prepare($pod_sql);

foreach($_SESSION['pcart'] as $i=>$j){
    $stmt->execute([
        $member_id,
        $j['sid'],
        $order_sid,
        $j['sid'],
        $j['price'],
        $j['qty'],


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
    ]);
}

//清除購物車內容
unset($_SESSION['pcart']);

if($stmt->rowCount()){
    $output['success'] = true;
} else {
    $output['error'] = '資料未修改';
}

echo json_encode($output, JSON_UNESCAPED_UNICODE);



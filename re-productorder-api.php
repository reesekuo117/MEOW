<?php
require __DIR__. '/parts/meow_db.php';


if(empty($_SESSION['user']) or empty($_SESSION['pcart'])){
    // header('Location: product-list.php');
    // exit;
}
$total = 0;
foreach($_SESSION['pcart'] as $k=>$v){
    $total += $v['product_price']*$v['qty'];
}

// 寫入訂單
$po_sql ="INSERT INTO `product_order`(
    `member_id`, 
    `state`, 
    `total`, 
    `name`, 
    `phone`, 
    `address_city`, 
    `address_region`, 
    `address`, 
    `delivery`, 
    `payment`, 
    `payment_state`, 
    `created_at`
    ) VALUES(
        ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,
        NOW()
    )";
$stmt = $pdo->prepare($po_sql);
$stmt->execute([
    $_SESSION['user']['id'],
    $_POST['state'],
    $total,
    $_POST['consigneename'],
    $_POST['consigneephone'],
    $_POST['consigneeaddress1'],
    $_POST['consigneeaddress2'],
    $_POST['consigneeaddress3'],
    $_POST['delivery'],
    $_POST['payment'],
    $_POST['payment_state']
]);



$order_sid = $pdo->lastInsertId();

//訂單明細
$pod_sql = "INSERT INTO `product_details`(`order_sid`, `product_sid`, `quantity`, `price`) VALUES(?, ?, ?, ?)";
$stmt = $pdo->prepare($pod_sql);

foreach($_SESSION['pcart'] as $k=>$v){
    $stmt->execute([
        $order_sid,
        $v['sid'],
        $v['qty'],
        $v['product_price']
    ]);
}

//清除購物車內容
unset($_SESSION['pcart']);

if($stmt->rowCount()){
    $output['success'] = true;
} else {
    $output['error'] = '購買未成功';
}

echo json_encode($output, JSON_UNESCAPED_UNICODE);
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
$po_sql = sprintf( "INSERT INTO `product_order`(
        `member_id`, 
        -- `staxte`, 
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
            ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,
            NOW()
        )", 
        $_SESSION['user']['id'], 
        $total,
        $_POST['consigneename'],
        $_POST['consigneephone'],
        $_POST['consigneeaddress1'],
        $_POST['consigneeaddress2'],
        $_POST['consigneeaddress3'],
        $delivery,
        $payment,
        $payment_state
        
    );
$stmt = $pdo->query($po_sql);

$order_sid = $pdo->lastInsertId();

//訂單明細
$pod_sql = "INSERT INTO `product_details`(`order_sid`, `product_sid`, `quantity`, `price`) VALUES(?, ?, ?, ?)";
$stmt = $pdo->prepare($pod_sql);

foreach($_SESSION['pcart'] as $k=>$v){
    $stmt->execute([
        $order_sid,
        $v['sid'],
        $v['price'],
        $v['qty'],
    ]);
}

//清除購物車內容
unset($_SESSION['pcart']);

?>
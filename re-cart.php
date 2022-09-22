<?php
require __DIR__ . '/parts/connect_db.php';
if(!isset($_SESSION['cart'])){
    $_SESSION['cart'] = [];
}

$sid = isset($_GET['sid']) ? intval($_GET['sid']) : 0;
$qty = isset($_GET['qty']) ? intval($_GET['qty']) : 0;

//C:加到購物車, 需要有這兩筆資料 產品id及數量 sid, qty
//R:查看購物車,
//U:更新, sid, qty
//D:移除項目, sid

//判斷有沒給商品id 和數量qty
if(!empty($_GET['sid'])){
    if(!empty($_GET['qty'])){
        //新增或變更

        //不做這個
        if(!empty($_SESSION['cart']['sid'])){
            //已存在 做變更
            $_SESSION['cart'][$sid]['qty'] = $qty;
        }else{
            //新增
            //TODO:檢查資料表是不有這個商品
            $row = $pdo->query("SELECT * FROM products WHERE sid=$sid")->fetch();
            if(! empty($row)){
                $row['qty'] = $qty; //先把數量放進去
                $_SESSION['cart'][$sid] = $row;
            }
        }
    }else{
        //刪除項目
        unset($_SESSION['cart'][$sid]);
    }
}
echo json_encode(($_SESSION['cart']));

//在網址列設定商品名稱和數量 ?sid=6&qty=3


<?php
require __DIR__ . "/parts/connect_db.php";

if (!isset($_SESSION["cart"])) {
    $_SESSION["cart"] = [];
}

$sid = isset($_GET["sid"]) ? intval($_GET["sid"]) : 0;
$qty = isset($_GET["qty"]) ? intval($_GET["qty"]) : 0;


// C: 加到購物車, sid, qty
// R: 查看購物車內容
// U: 更新, sid, qty
// D: 移除項目, sid

if (!empty($sid)) {

    if (!empty($qty)) { //再查看是否有此商品數量已在購物車內
        // 新增或變更

        if (!empty($_SESSION['cart'][$sid])) {
            $_SESSION['cart'][$sid]['qty'] = $qty;
            // 如果已存在, 就變更
        } else {
            // 新增商品
            // TODO: 檢查資料表是不是有這個商品

            $row = $pdo->query("SELECT * FROM products WHERE sid=$sid ")->fetch();
            if (!empty($row)) {
                $row["qty"] = $qty; //先把數量放進去
                $_SESSION["cart"][$sid] = $row;
            }
        }
    } else {
        // 刪除項目
        unset($_SESSION['cart'][$sid]);
    }
}

echo json_encode($_SESSION['cart']);

// 測試的時候在網址後面打 ?sid=2(商品的sid) &qty=2 (數量)
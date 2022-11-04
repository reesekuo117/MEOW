<?php

if(! isset($_SESSION['btnactive'])){
    $_SESSION['btnactive'] = [];
}

$btn_ba = isset($_GET['btnactive']) ? intval($_GET['btnactive']) : 0;

$_SESSION['btnactive'] = [
    'btn_ba' => $btn_ba
];


// C: 加到購物車, sid, qty
// R: 查看購物車內容
// U: 更新, sid, qty
// D: 移除項目, sid

// if(! empty($sid)) { // 先查看有沒有此商品的 sid

//     if(! empty($qty)) { // 再查看有沒有此商品的數量
//         // 新增或變更

//         if(!empty($_SESSION['cart'][$sid])){
//             // 若已存在 sid, 變更數量
//             $_SESSION['cart'][$sid]['qty'] = $qty;
//         } else {
//             // 若不存在 sid, 新增
//             // TODO: 檢查資料表是不是有這個商品
//             $row = $pdo->query("SELECT * FROM `products` WHERE sid=$sid")->fetch();
//             if(! empty($row)){
//                 $row['qty'] = $qty; // 先把數量放進去
//                 $_SESSION['cart'][$sid] = $row; // 再讓他給 $sid
//             }
//         }

//     } else {
//         // 刪除項目
//         unset($_SESSION['cart'][$sid]);
//     }
// }

echo json_encode($_SESSION['btnactive']);
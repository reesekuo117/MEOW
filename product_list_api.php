<?php
require __DIR__ . '/parts/meow_db.php'; 
$pageName = 'product_list'; //頁面名稱
$perPage = 9;  // 每頁最多有幾筆
$page = isset($_GET['page']) ? intval($_GET['page']) : 1; 
if ($page < 1) {
    header('Location: ?page=1');
    exit;
}
$cate = isset($_GET['cate']) ? intval($_GET['cate']) : 0; 
// $lowp = isset($_GET['lowp']) ? intval($_GET['lowp']) : 0; // 低價
// $highp = isset($_GET['highp']) ? intval($_GET['highp']) : 0; // 高價
$hotp = isset($_GET['hotp']) ? intval($_GET['hotp']) : 0; // 熱門

$qsp = []; // query string parameters

// 取得商品分類資料
$cates = $pdo->query("SELECT * FROM product_category WHERE 1") //1表示全部，也等於true
    ->fetchAll();


// 取得商品熱門程度
$hotp = $pdo->query("SELECT `product_popular` FROM `product` GROUP BY `product_popular` DESC") 
    ->fetchAll();


// 取得價格由低到高
$lowerp = $pdo->query("SELECT `product_price` FROM `product` GROUP BY `product_price` ASC") 
    ->fetchAll();

//取得價格由高到低
$lowerp = $pdo->query("SELECT `product_price` FROM `product` GROUP BY `product_price` DESC") 
    ->fetchAll();


$where = ' WHERE 1 '; // 起頭，1是true
if ($cate) {
    $where .= "AND category_sid = $cate ";
    $qsp['cate'] = $cate;
}


// 取得資料的總筆數
$t_sql = "SELECT COUNT(1) FROM product $where";
// $t_sql = "SELECT * FROM `product` WHERE 1";
$totalRows = $pdo->query($t_sql)->fetch(PDO::FETCH_NUM)[0];
// echo json_encode([
//         'totalRows' => $totalRows,
    
//     ]);
//     exit;


// 計算總頁數
$totalPages = ceil($totalRows / $perPage);

$rows = [];  // 預設值
// 有資料才執行
if ($totalRows > 0) {
    if ($page < 1) {
        header('Location: ?page=1');
        exit;
    }
    if ($page > $totalPages) {
        header('Location: ?page=' . $totalPages);
        exit;
    }
    // 取得該頁面的資料
    $sql = sprintf(
        "SELECT * FROM `product` %s ORDER BY `sid` ASC LIMIT %s, %s",
        $where,
        ($page - 1) * $perPage,
        $perPage
    );
    $rows = $pdo->query($sql)->fetchAll();
}
    $p_sql = sprintf(
        "SELECT `product_popular` FROM `product` GROUP BY `product_popular` DESC %s, %s",
        ($page - 1) * $perPage,
        $perPage
    );
    
    $pl_sql = sprintf(
        "SELECT * FROM `product` GROUP BY `product`.`product_price` ASC %s, %s",
        ($page - 1) * $perPage,
        $perPage
    );
echo json_encode([
    'totalRows' => $totalRows,
    'totalPages' => $totalPages,
    'perPage' => $perPage,
    'page' => $page,
    // 'rows' => $rows,
    // 'hotp' => $hotp,
    'pl_sql' => $pl_sql,
]);
// exit;

?>


<?php
require __DIR__ . '/parts/meow_db.php';  // /開頭
$pageName = 'product_list'; //頁面名稱
$perPage = 9;  // 每頁最多有幾筆
$page = isset($_GET['page']) ? intval($_GET['page']) : 1; // 用戶沒有指定第幾頁，預設就會出現第一頁
if ($page < 1) {
    header('Location: ?page=1');
    exit;
}
$cate = isset($_GET['cate']) ? intval($_GET['cate']) : 0; // 用戶要指定哪個分類，intval($_GET['cate']是變成整數的意思，0表示所有產品
// $lowp = isset($_GET['lowp']) ? intval($_GET['lowp']) : 0; // 低價
// $highp = isset($_GET['highp']) ? intval($_GET['highp']) : 0; // 高價
// $hotp = isset($_GET['hotp']) ? intval($_GET['hotp']) : 0; // 熱門

$qsp = []; // query string parameters

// 取得商品分類資料
$cates = $pdo->query("SELECT * FROM product_category WHERE 1") //1表示全部，也等於true
    ->fetchAll();
//     echo json_encode([
//     'cates' => $cates,

// ]);
// exit;

$where = ' WHERE 1 '; // 起頭，1是true
if ($cate) {
    $where .= "AND category_sid = $cate ";
    $qsp['cate'] = $cate;
}


// 取得資料的總筆數
$t_sql = "SELECT COUNT(1) FROM product $where";
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


// 取得商品熱門程度
// $hotp = $pdo->query("SELECT `product_popular` FROM `product` GROUP BY `product_popular` DESC") 
//    ->fetchAll();
// 取得價格由低到高
//$lowerp = $pdo->query("SELECT `product_price` FROM `product` GROUP BY `product_price` ASC") 
//    ->fetchAll();

//取得價格由高到低
// $lowerp = $pdo->query("SELECT `product_price` FROM `product` GROUP BY `product_price` DESC") 
//    ->fetchAll();
$dataSql = "SELECT * FROM `product` GROUP BY ";
$dataSort = '';
// SQL語法前面都一樣，所以將一樣的部分"SELECT * FROM `product` GROUP BY "設定成變數
// 但是GROUP BY之後的東西都不一樣，所以設變數空字串，在if內再給空字串不一樣的內容
if(isset($_GET['sort'])){
    if($_GET['sort'] === 'hotp'){
        // 設定hotp變數和$dataSort的內容
        $dataSort = "`product_popular` DESC";
    }
    
    if($_GET['sort'] === 'lowerp'){
        $dataSort = "`product_price` ASC";
    }
    
    if($_GET['sort'] === 'higherp'){
        $dataSort = "`product_price` DESC";
    }
    $sqlSearchStr = $dataSql.$dataSort;
    // 將兩個變數的內容相加

    if($dataSort != ''){
        // 因為上面有定義過rows的內容，但又加上新的變數了，所以要將兩個結合，如果$dataSort的內容不是空字串，就要讓$rows執行用新條件$sqlSearchStr再重新執行一次
        $rows = $pdo->query($sqlSearchStr)->fetchAll();
    }
}

// echo json_encode([
//     'totalRows' => $totalRows,
//     'totalPages' => $totalPages,
//     'perPage' => $perPage,
//     'page' => $page,
//     // 'rows' => $rows,
//     // 'hotp' => $hotp,
//     'pl_sql' => $pl_sql,
// ]);
// exit;

?>

<?php include __DIR__ . '/parts/html-head.php'; ?>
<link rel="stylesheet" href="./product_list_style.css">
<?php include __DIR__ . '/parts/navbar.php'; ?>
<div class="product_list_07">
    <div class="product_search d-flex">
        <div class="search_bar">
            <h3>月老喵精選商品</h3>
            <!-- <div class="input_search d-flex">
                        <input type="text" placeholder="請輸入關鍵字搜尋">
                        
                        
                        <div class="btn">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </div>
                    </div> -->
            <!-- TODO: 救命關鍵字功能要怎麼寫→套PHP -->
            <!-- https://webdesign.tutsplus.com/zh-hant/tutorials/css-experiments-with-a-search-form-input-and-button--cms-22069 -->
            <div class="input_search">
                <div class="container-1">
                    <span class="icon"><i class="fa fa-search"></i></span>
                    <input type="search" id="search" placeholder="請輸入關鍵字搜尋" />
                </div>
            </div>
            <div class="search_btn">
                <button>#手鍊</button>
                <button>#霞海</button>
                <button>#祈願</button>
            </div>
        </div>
    </div>
    <!-- -----------------------------------搜尋欄結束------------------------------------ -->

    <!-- 桌機版排序 -->
    <div class="sort d-md-block d-none">
        <div class="container">
            <div class="product_sort d-md-flex justify-content-center align-items-center">
                <!-- <div class="col"></div> -->
                <div class="col offset-1">
                    <!-- 用a連結記得JQ要加e.preventDefault(); -->
                    <h5 style="color: var(--color-text87);"><i class="fa-regular fa-hourglass-half px-1"></i>排序方式</h5>
                </div>
                <div class="col">
                    <a href="#">
                        <h5>最新上架</h5>
                    </a>
                </div>
                <div class="col">
                    <a href="?sort=hotp">
                        <!-- 先設定要連到哪裡，再往上設定變數 -->
                        <h5>熱門程度</h5>
                    </a>
                </div>
                <div class="col">
                    <a href="?sort=higherp">
                        <h5>價格高 → 低</h5>
                    </a>
                </div>
                <div class="col">
                    <a href="?sort=lowerp">
                        <h5>價格低 → 高</h5>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- 手機版排序 -->
    <div class="sort_mb d-block d-md-none">
        <div class="container">
            <div class="product_sort d-flex justify-content-around align-items-center">
                <!-- <div class="col"></div> -->
                <div class="col px-2">
                    <button class="psort_mb">
                        <small class="mb-0"><i class="fa-regular fa-hourglass-half px-3"></i>排序</small>
                    </button>
                </div>
                <div class="col px-1">
                    <!-- 用a連結記得JQ要加e.preventDefault(); -->
                    <a href="?cate=1">
                        <small class="mb-0">品牌聯名</small>
                    </a>
                </div>
                <div class="col px-1">
                    <a href="?cate=2">
                        <small class="mb-0">文創商品</small>
                    </a>
                </div>
                <div class="col px-1">
                    <a href="?cate=3">
                        <small class="mb-0">甜蜜供品</small>
                    </a>
                </div>
                <div class="col px-1">
                    <a href="?cate=4">
                        <small class="mb-0">獨家商品</small>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="timesort_mb d-none d-md-none ">
        <div class="col py-1">
            <a href="#">
                <small>最新上架</small>
            </a>
        </div>
        <div class="col py-1">
            <a href="#">
                <small>熱門程度</small>
            </a>
        </div>
        <div class="col py-1">
            <a href="#">
                <small>價格高 → 低</small>
            </a>
        </div>
        <div class="col py-1">
            <a href="#">
                <small>價格低 → 高</small>
            </a>
        </div>
    </div> -->

    <div class="product_section">
        <div class="container d-flex">
            <!-- <div class="col-1"></div> -->
            <div class="aside d-none d-md-block pr-3">
                <div class="col">
                    <div class="cate_filter">
                        <div class="product_cate btncolor_default">
                            <a type="button" href="?" >
                                <h5>－全部商品</h5>
                            </a>
                        </div>
                        <!-- 分類壞掉了QQ因為用e.preventDefault();才會壞掉 -->
                        <?php foreach ($cates as $c): ?> 
                        <div class="product_cate btncolor_default">
                            <!-- 用a連結記得JQ要加e.preventDefault(); -->
                            <a type="button" href="?cate=<?= $qsp['cate']=$c['sid'] ?>">
                                <h5>－<?= $c['category_name'] ?></h5>
                            </a>
                        </div>
                        <?php endforeach ?>
                        
                    </div>
                    <!-- TODO:價格篩選怎麼寫 -->
                    <!-- https://codepen.io/AlexM91/pen/BaYoaWY -->
                    <div class="price_filter">
                        <div class="filter-content__element">
                            <div class="filter-element-heading">
                                <h5>價格範圍</h5>
                            </div>
                            <div class="filter-element-content">
                                <div class="filter-range-values">
                                    <span class="range-1-value">NT$0</span>
                                    <span class="range-2-value">NT$8000</span>
                                </div>
                                <div class="filter-range-content">
                                    <div class="filter-range-track"></div>
                                    <input class="filter-range filter-range-1" type="range" min="0" max="8000" value="0" id="slider-1" step="100">
                                    <input class="filter-range filter-range-2" type="range" min="0" max="8000" value="8000" id="slider-2" step="100">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="product_list w-100">
                <!-- --------------------卡片---------------------- -->
                <div class="row">
                    <?php foreach ($rows as $r) : ?>
                        <div class="col-12 col-md-4">
                            <div class="card" data-sid="<?= $r['id'] ?>">
                                <a href="product_detail.php">
                                    <div class="p_img">
                                        <img src="./imgs/product/cards/<?= $r['product_card_img'] ?>.jpg" class="card-img-top" alt="...">
                                    </div>
                                </a>
                                <div class="card-body">
                                    <a href="product_detail.php">
                                        <div class="card_title pb-1">
                                            <h5 class="card-text" style="height: 56px;">
                                            <!-- ${product_name} -->

                                                <?= $r['product_name'] ?>
                                            </h5>
                                        </div>
                                    </a>
                                    <div class="icon_heart">
                                        <svg class="heart_line" width="32" height="32" viewBox="0 0 32 32" fill="none" stroke="#fff" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M15.2855 9.22197C12.9704 6.90689 9.21692 6.90689 6.90184 9.22197C4.58676 11.537 4.58676 15.2905 6.90184 17.6056L13.2503 23.9532C14.8378 25.5407 17.4116 25.5407 18.9991 23.9532L24.5083 18.444L24.5074 18.4431L25.3449 17.6056C27.66 15.2905 27.66 11.5371 25.3449 9.22197C23.0298 6.90689 19.2763 6.90689 16.9612 9.22197L16.1234 10.0598L15.2855 9.22197Z" stroke-width="2.66667" />
                                        </svg>
                                    </div>
                                    <div class="d-flex card_under justify-content-between align-items-baseline">
                                        <small class="xs card-text d-flex align-items-center pr-0">
                                            <div class="icon_star pr-1">
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                            <span><?= $r['product_comment'] ?></span>
                                        </small>
                                        <small class="xs card-text d-flex align-items-center">
                                            <div class="icon_fire pr-1">
                                                <i class="fa-solid fa-fire"></i>
                                            </div>
                                            <span><?= $r['product_popular'] ?>K+個已訂購</span>
                                        </small>
                                        <h4 class="card-text price">
                                            <?= $r['product_price'] ?>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </div>
    </div>

    <div class="pages">
        <div class="container">
            <div class="row">
                <nav aria-label="Page navigation example" class="">
                    <ul class="pagination">
                        <li class="page-item <?= $page == 1 ? 'disabled' : '' ?>">
                            <a class="page-link" href="?<?php $qsp['page']=$page == 1;
                            echo http_build_query($qsp); ?>">
                                <i class="fa-solid fa-angles-left"></i>
                            </a>
                        </li>
                        <?php for ($i = $page - 2; $i <= $page + 2; $i++) :
                        if ($i >= 1 and $i <= $totalPages) :
                            $qsp['page']=$i;
                    ?>
                        <li class="page-item <?= $page == $i ? 'active' : '' ?>">
                            <a class="page-link" href="?<?= http_build_query($qsp); ?>"><?= $i ?></a>
                        </li>
                    <?php endif;
                    endfor; ?>
                    <li class="page-item <?= $page == $totalPages ? 'disabled' : '' ?>">
                        <a class="page-link" href="?<?php $qsp['page']=$page == $totalPages;
                        echo http_build_query($qsp); ?>">
                            <i class="fa-solid fa-angles-right"></i>
                        </a>
                    </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <div class="notlogin d-none">
        <!-- 1.背景用黑色半透明做光箱效果，視窗FIXED(原本就在用show，沒有要讓它出現用append) -->
        <div class="">
            <div class="alert d-flex justify-content-center align-items-center">
                <div class="alert_head"><i class="fa-solid fa-triangle-exclamation"></i></div>
                <div class="alert_title">
                    <h4>請先登入再收藏商品喔！</h4>
                </div>
                <div class="btn_ok">
                    <button>好的喵</button>
                </div>
                <div class="alert_img">
                    <img class="w-100" src="./imgs/17.png" alt="">
                </div>
            </div>
        </div>
    </div>

</div>
<script>
    const productData = <?php echo json_encode($rows); ?>;
    console.log('productData',productData);
</script>
<?php include __DIR__ . '/parts/scripts.php'; ?>
<script src="./product_list.js"></script>
<?php include __DIR__ . '/parts/html-foot.php'; ?>
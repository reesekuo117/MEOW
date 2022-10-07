<?php
require __DIR__ . '/parts/meow_db.php';  // /開頭
$pageName = '獨家商品'; //頁面名稱
$title = '獨家商品';

$perPage = 9;  // 每頁最多有幾筆
$page = isset($_GET['page']) ? intval($_GET['page']) : 1; // 用戶沒有指定第幾頁，預設就會出現第一頁
if ($page < 1) {
    header('Location: ?page=1');
    exit;
}
$cate = isset($_GET['cate']) ? intval($_GET['cate']) : 0; // 用戶要指定哪個分類，intval($_GET['cate']是變成整數的意思，0表示所有產品

//$cate=用戶指定的分類
$lowp = isset($_GET['lowp']) ? intval($_GET['lowp']):0;//低價
$highp = isset($_GET['highp']) ? intval($_GET['highp']):0;//高價
$sort = isset($_GET['sort']) ? $_GET['sort'] : ''; 
$search = isset($_GET['search']) ? $_GET['search'] : '';   //搜尋關鍵字

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
    $where .= " AND category_sid = $cate ";
    $qsp['cate'] = $cate;
}

//搜尋關鍵字
if (!empty($search)) {
    $where .= sprintf(" AND product_name LIKE %s ", $pdo->quote('%'. $search. '%'));
    
    $qsp['search'] = $search;
}

if ($lowp){
    $where .=" AND product_price>=$lowp ";
    $qsp["lowp"] = $lowp;
}


if ($highp){
    $where .=" AND product_price<=$highp ";
    $qsp["highp"] = $highp;
}

// echo json_encode([
//     'lowp' => $lowp,
//     'highp' => $highp,

// ]);
// exit;




// 排序
$dataSort = '';
if(!empty($sort)){
    $qsp['sort'] = $sort;
    switch($sort){
        case 'hotp':
            $dataSort = ' ORDER BY product_popular DESC ';
            break;
        case 'newp':
            $dataSort = ' ORDER BY created_at DESC ';
            break;
        case 'pricehigh':
            $dataSort = ' ORDER BY product_price DESC ';
            break;
        case 'pricelow':
            $dataSort = ' ORDER BY product_price ASC ';
            break;
    }
}

/*
if(isset($_GET['sort'])){
        if($_GET['sort'] === 'hotp'){
            // 設定hotp變數和$dataSort的內容
            $dataSort .= " `product_popular` DESC ";
        }
        
        if($_GET['sort'] === 'lowerp'){
            $dataSort .= " `product_price` ASC ";
        }
        
        if($_GET['sort'] === 'higherp'){
            $dataSort .= " `product_price` DESC ";
        }
        if($_GET['sort'] === 'newp'){
            $dataSort .= " `created_at` DESC ";
        }
        // $sqlSearchStr = $dataSql. $dataSort. sprintf(" LIMIT %s, %s ",
        // ($page - 1) * $perPage,
        // $perPage
        // ) ;
        // $qsp['sqlSearchStr'] = $sqlSearchStr;
        // 將兩個變數的內容相加
    
        // if($dataSort != ''){
        //     // 因為上面有定義過rows的內容，但又加上新的變數了，所以要將兩個結合，如果$dataSort的內容不是空字串，就要讓$rows執行用新條件$sqlSearchStr再重新執行一次
        //     $rows = $pdo->query($sqlSearchStr)->fetchAll();
        // }
    }
    else{
        $dataSort .=  " `sid` ASC";
    }    

*/

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
       "SELECT * FROM `product` %s %s LIMIT %s, %s",
        $where,
        $dataSort,
        // $serach,
        ($page - 1) * $perPage,
        $perPage
    );
    $rows = $pdo->query($sql)->fetchAll();
}


// 取得商品熱門程度
// $hotp = $pdo->query("SELECT `product_popular` FROM `product` ORDER BY `product_popular` DESC") 
//    ->fetchAll();
// 取得價格由低到高
//$lowerp = $pdo->query("SELECT `product_price` FROM `product` ORDER BY `product_price` ASC") 
//    ->fetchAll();
//取得價格由高到低
// $lowerp = $pdo->query("SELECT `product_price` FROM `product` ORDER BY `product_price` DESC") 
//    ->fetchAll();
// $dataSql = "SELECT * FROM `product` ORDER BY ";
// $dataSort = '';
// SQL語法前面都一樣，所以將一樣的部分"SELECT * FROM `product` GROUP BY "設定成變數
// 但是GROUP BY之後的東西都不一樣，所以設變數空字串，在if內再給空字串不一樣的內容
// if(isset($_GET['sort'])){
//     if($_GET['sort'] === 'hotp'){
//         // 設定hotp變數和$dataSort的內容
//         $dataSort = " `product_popular` DESC ";
//     }
    
//     if($_GET['sort'] === 'lowerp'){
//         $dataSort = " `product_price` ASC ";
//     }
    
//     if($_GET['sort'] === 'higherp'){
//         $dataSort = " `product_price` DESC ";
//     }
//     if($_GET['sort'] === 'newp'){
//         $dataSort = " `created_at` DESC ";
//     }
//     $sqlSearchStr = $dataSql. $dataSort. sprintf(" LIMIT %s, %s ",
//     ($page - 1) * $perPage,
//     $perPage
//     ) ;
//     // $qsp['sqlSearchStr'] = $sqlSearchStr;
//     // 將兩個變數的內容相加

//     if($dataSort != ''){
//         // 因為上面有定義過rows的內容，但又加上新的變數了，所以要將兩個結合，如果$dataSort的內容不是空字串，就要讓$rows執行用新條件$sqlSearchStr再重新執行一次
//         $rows = $pdo->query($sqlSearchStr)->fetchAll();
//     }
// }
$member_id = $_SESSION['user']['id'];
$user_id = "SELECT * FROM `member` WHERE id=$member_id";
$r_re = $pdo->query($user_id)->fetch();

$sid = isset($_GET['sid']) ? intval($_GET['sid']) : 0;
$sql = "SELECT * FROM product  WHERE sid=$sid";
$plove_sql = "
    SELECT 
        collect_sid         
    FROM love
        WHERE target_type=1 AND member_id=$member_id";
        // echo $plove_sql; exit;
$plove_rows = $pdo->query($plove_sql)->fetchAll();
$plove_dict = [];
foreach($plove_rows as $p){
    $plove_dict[$p['collect_sid']] = 1;
}



// echo json_encode([
//     // 'totalRows' => $totalRows,
//     // 'totalPages' => $totalPages,
//     // 'perPage' => $perPage,
//     // 'page' => $page,
//     // 'rows' => $rows,
//     // 'hotp' => $hotp,
//     // 'plove_dict' => $plove_dict,
//     'plove_rows' => $plove_rows,
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
            <!-- 搜尋START-->
            <form name="search_form" class="input_search">
                <div class="container-1">
                    <!-- <span class="icon"><i class="fa fa-search"></i></span> -->
                    
                    <label for="">
                        <input type="text" id="search" name="search" placeholder="請輸入關鍵字搜尋" value="<?= empty($search) ? '' : htmlentities($search) ?>" />
                    </label>
                    <button class="icon" type="submit"><i class="fa fa-search"></i></button>
                </div>
            </form>
            <div class="search_btn">
                <button onclick="$('#search').val('月老喵')">#月老喵</button>
                <button onclick="$('#search').val('霞海')">#霞海</button>
                <button  onclick="$('#search').val('祈願')">#祈願</button>
            </div>
             <!-- 搜尋END -->
        </div>
    </div>
    <!-- -----------------------------------搜尋欄結束------------------------------------ -->

    <!-- 桌機版排序 -->
    <div id="desktopSort" class="sort d-md-block d-none">
        <div class="container">
            <div class="product_sort d-md-flex justify-content-center align-items-center">
                <!-- <div class="col"></div> -->
                <div class="col offset-1">
                    <!-- 用a連結記得JQ要加e.preventDefault(); -->
                    <h5 style="color: var(--color-text87);"><i class="fa-regular fa-hourglass-half px-1"></i>排序方式</h5>
                </div>
                <div class="col">
                    <a href="?<?= $cate ? "cate={$cate}&" : '' ?>sort=newp#desktopSort" class="<?= $sort==='newp' ? "sort_active" : "" ?>">
                        <h5>最新上架</h5>
                    </a>
                </div>
                <div class="col">
                    <a href="?<?= $cate ? "cate={$cate}&" : '' ?>sort=hotp#desktopSort" class="<?= $sort==='hotp' ? "sort_active" : "" ?>">
                        <!-- 先設定要連到哪裡，再往上設定變數 -->
                        <h5>熱門程度</h5>
                    </a>
                </div>
                <div class="col">
                    <a href="?<?= $cate ? "cate={$cate}&" : '' ?>sort=pricehigh#desktopSort" class="<?= $sort==='pricehigh' ? "sort_active" : "" ?>">
                        <h5>價格高 → 低</h5>
                    </a>
                </div>
                <div class="col">
                    <a href="?<?= $cate ? "cate={$cate}&" : '' ?>sort=pricelow#desktopSort" class="<?= $sort==='pricelow' ? "sort_active" : "" ?>">
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
                    <a href="?cate=1#desktopSort" class="product_cate <?php echo ($cate)? "btncolor_default" : "btncolor_active" ?>">
                        <small class="mb-0">品牌聯名</small>
                    </a>
                </div>
                <div class="col px-1">
                    <a href="?cate=2#desktopSort">
                        <small class="mb-0">文創商品</small>
                    </a>
                </div>
                <div class="col px-1">
                    <a href="?cate=3#desktopSort">
                        <small class="mb-0">甜蜜供品</small>
                    </a>
                </div>
                <div class="col px-1">
                    <a href="?cate=4#desktopSort">
                        <small class="mb-0">獨家商品</small>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="timesort_mb ptsmbhz d-md-none pt-3">
            <div class="col">
                <a href="#">
                    <p>最新上架</p>
                </a>
            </div>
            <div class="col">
                <a href="#">
                    <p>熱門程度</p>
                </a>
            </div>
            <div class="col">
                <a href="#">
                    <p>價格高→低</p>
                </a>
            </div>
            <div class="col">
                <a href="#">
                    <p class="mb-2">價格低→高</p>
                </a>
            </div>
    </div>

    <div class="product_section">
        <div class="container d-flex product_section_bottom">
            <!-- <div class="col-1"></div> -->
            <div class="aside d-none d-md-block pr-3">
                <div class="col">
                    <div class="cate_filter">
                        <div class="product_cate <?php echo ($cate)? "btncolor_default" : "btncolor_active" ?>">
                            <a type="button" href="?<?php 
                            $tmp = $qsp; //複製
                            unset($tmp['cate']); //清空類別
                            unset($tmp['lowp']); //清空低價
                            unset($tmp['highp']);//清空高價
                            echo http_build_query($tmp); ?>?#desktopSort">
                                <h5>－全部商品</h5>
                            </a>
                        </div>
                        <!-- qsp2?? -->
                        <?php $qsp2 = $qsp;
                        foreach ($cates as $c): ?> 
                        <div class="product_cate <?php echo ($cate==$c['sid'])? "btncolor_active" : "btncolor_default" ?>">
                            <!-- 用a連結記得JQ要加e.preventDefault(); -->
                            <a type="button" href="?cate=<?= $qsp2['cate']=$c['sid']; echo http_build_query($tmp);  ?>#desktopSort">
                                <h5>－<?= $c['category_name'] ?></h5>
                            </a>
                        </div>
                        <?php endforeach ?>
                        
                    </div>
                    <!-- https://codepen.io/AlexM91/pen/BaYoaWY -->
                    <div class="price_filter">
                        <div class="filter-content__element">
                            <div class="filter-element-heading">
                                <h5>價格範圍</h5>
                            </div>
                            <div class=" moneyYU d-flex p">
                                <?php $btnStyle = (!$lowp && $highp==500 ) ? "btncolor_active" : "btncolor_default"  ?>
                                    <a type="button" class=" <?= $btnStyle ?>"
                                    href="?<?php
                                            $tmp = $qsp;  // 複製
                                            unset($tmp['lowp']);  //unset() 刪除
                                            $tmp['highp']=500;
                                            echo http_build_query($tmp); ?>?#desktopSort">NT$500以下</a>

                                <?php $btnStyle = ($lowp==500 && $highp==1000) ? "btncolor_active" : "btncolor_default"  ?>
                                    <a type="button" class=" <?= $btnStyle ?>"
                                    href="?<?php $tmp['lowp']=500;  
                                            $tmp['highp']=1000;
                                            echo http_build_query($tmp); ?>?#desktopSort">NT$500 ~ NT$1000</a>

                                <?php $btnStyle = ($lowp==1000 && !$highp) ? "btncolor_active" : "btncolor_default"  ?>
                                    <a type="button" class=" <?= $btnStyle ?>"
                                    href="?<?php unset($tmp['highp']);  //unset() 刪除 
                                            $tmp['lowp']=1000;
                                            echo http_build_query($tmp); ?>?#desktopSort">NT$1000以上</a>
                                <!-- <a type="button" class=" "
                                    href="?highp=400">0~400</a>
                                <a type="button" class=""
                                    href="?lowp=400&highp=500">400~500</a>
                                <a type="button" class=""
                                    href="?lowp=500">500~1000</a> -->
                                <!-- <div class="filter-range-values my-3">
                                    <span class="range-1-value">NT$0</span>
                                    <span class="range-2-value">NT$2000</span>
                                </div>
                                <div class="filter-range-content">
                                    <div class="filter-range-track"></div>
                                    <input class="filter-range filter-range-1" type="range" min="0" max="2000" value="0" id="slider-1" step="100">
                                    <input class="filter-range filter-range-2" type="range" min="0" max="2000" value="8000" id="slider-2" step="100">
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="product_list w-100">
                <?php if (empty($rows)) : ?>
                        <!-- 桌機 -->
                        <div class="notfind_yu text-center d-none d-md-block">
                            <div>
                                <img src="./imgs/18.png" alt="">
                            </div>
                            <div class=" h6">
                                找不到相關結果
                                <br>
                                請嘗試其它關鍵字喵！
                                <br>
                                <div class="search_btn">
                                    <a href="product_list.php?search=月老喵#desktopSort">
                                        <button onclick="">#月老喵</button>
                                    </a>
                                    <a href="product_list.php?search=霞海#desktopSort">
                                        <button onclick="">#霞海</button>
                                    </a>
                                    <a href="product_list.php?search=祈願#desktopSort">
                                        <button onclick="">#祈願</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- 手機 -->
                        <div class="notfindmb_yu text-center d-block d-md-none">
                            <div>
                                <img src="./imgs/18s.png" alt="">
                            </div>
                            <div class=" h6">
                                找不到相關結果
                                <br>
                                請嘗試其它關鍵字喵！
                                <br>
                                <div class="search_btn">
                                    <a href="product_list.php?search=月老喵#desktopSort">
                                        <button onclick="">#月老喵</button>
                                    </a>
                                    <a href="product_list.php?search=霞海#desktopSort">
                                        <button onclick="">#霞海</button>
                                    </a>
                                    <a href="product_list.php?search=祈願#desktopSort">
                                        <button onclick="">#祈願</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                <?php else : ?>
                <!-- --------------------卡片---------------------- -->
                    <div class="row">
                        <?php
                        foreach ($rows as $r) : ?>
                            <div class="col-12 col-md-4">
                                <div class="card" data-sid="<?= $r['id'] ?>">
                                <!-- 要用localstorage -->
                                    <a href="./product_detail.php?sid=<?= $r['sid'] ?>">
                                        <div class="p_img">
                                            <img src="./imgs/product/cards/<?= $r['product_card_img'] ?>.jpg" class="card-img-top" alt="...">
                                        </div>
                                    </a>
                                    <div class="card-body">
                                        <a href="./product_detail.php?sid=<?= $r['sid'] ?>">
                                            <div class="card_title pb-1">
                                                <h5 class="card-text" style="height: 56px;">
                                                    <?= $r['product_name'] ?>
                                                </h5>
                                            </div>
                                        </a>
                                        <div class="icon_heart  <?= !empty($plove_dict[$r['sid']]) ? 'color' : '' ?>" data-sid="<?= $r["sid"] ?>" onclick="addToFav_P_07(event)">
                                            
                                            <svg class="heart_line" width="32" height="32" viewBox="0 0 32 32" stroke="#432A0F" xmlns="http://www.w3.org/2000/svg">
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
                                                <span><?= $r['product_popular'] ?>個已訂購</span>
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
                <?php endif ?>
            </div>
        </div>
    </div>



<?php if (empty($rows)) : ?>

<?php else : ?>
    <div class="pages">
        <div class="container">
            <div class="row">
                <nav aria-label="Page navigation example" class="">
                    <ul class="pagination">
                        <li class="page-item <?= $page == 1 ? 'disabled' : '' ?>">
                        <!-- <a href="?< ?php echo ($cate)? "cate=".$cate."&" : '' ?>sort=higherp#desktopSort" class="< ?php echo (isset($_GET['sort']) && $_GET['sort'] ==='higherp')? "sort_active" : "" ?>">
                        <h5>價格高 → 低</h5>
                        </a> -->
                            <a class="page-link" href="?<?php $qsp['page']=1;
                            echo http_build_query($qsp); ?>#desktopSort">
                                <i class="fa-solid fa-angles-left"></i>
                            </a>
                        </li>
                        <?php for ($i = $page - 2; $i <= $page + 2; $i++) :
                        if ($i >= 1 and $i <= $totalPages) :
                            $qsp['page']=$i;
                    ?>
                        <li class="page-item <?= $page == $i ? 'active' : '' ?>">
                            <a class="page-link" href="?<?= http_build_query($qsp); ?>#desktopSort"><?= $i ?></a>
                        </li>
                    <?php endif;
                    endfor; ?>
                    <li class="page-item <?= $page == $totalPages ? 'disabled' : '' ?>">
                        <a class="page-link" href="?<?php $qsp['page']=$totalPages;
                        echo http_build_query($qsp); ?>#desktopSort">
                            <i class="fa-solid fa-angles-right"></i>
                        </a>
                    </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
<?php endif ?>
    <!-- <div class="notlogin d-none"> -->
        <!-- 1.背景用黑色半透明做光箱效果，視窗FIXED(原本就在用show，沒有要讓它出現用append) -->
        <!-- <div class="">
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
    </div> -->

</div>
<script>
    // const productData = < ?php echo json_encode($rows); ?>;
        // console.log('productData',productData);

    function addToFav_P_07(event) {
  

        const heartbtn = $(event.currentTarget); // 監聽
        const collect_sid = heartbtn.attr('data-sid');
        console.log('hiheart', heartbtn);
        console.log('hisid', collect_sid);
        $.get(
            'favorite_api.php', {
                collect_sid,
                target_type: 1,
            },
            function(){
                heartbtn.toggleClass('color');
            },
            'json');
        
    };

// function SearchFormData() {
//   const inputValue = document.getElementById('search').value;
//     console.log('inputValue',inputValue)
// };
// // SearchFormData()


    
</script>
<?php include __DIR__ . '/parts/scripts.php'; ?>
<script src="./product_list.js"></script>
<?php include __DIR__ . '/parts/html-foot.php'; ?>
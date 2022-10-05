<?php
require __DIR__ . '/parts/meow_db.php';  // /開頭
$pageName = '獨家商品'; //頁面名稱
$title = '商品詳情';

// if (!isset($_GET['sid'])){
//     header('Location: product_list.php');
//     exit;
// }
$sid = isset($_GET['sid']) ? intval($_GET['sid']) : 0;
$sql = "SELECT * FROM product WHERE sid=$sid";
// $sql = "SELECT * FROM product WHERE sid=localstorage的變數";



//大圖

$b = $pdo->query($sql)->fetch();
if (empty($b)) {
    exit;
}
$photos_b = explode(',', $b['product_card_smallimg']);

//小圖

$s = $pdo->query($sql)->fetch();
if (empty($s)) {
    exit;
}
$photos_s = explode(',', $s['product_card_bigimg']);




$r = $pdo->query($sql)->fetch();
if (empty($r)) {
    exit;
}
$photos = explode(',', $r['product_introimgfirst']);


$s = $pdo->query($sql)->fetch();
if (empty($s)) {
    exit;
}
$photos_sec = explode(',', $s['product_introimgsec']);



//月老推薦卡片
$sqlArea = sprintf("SELECT * FROM `address`");
$areaRows = $pdo->query($sqlArea)->fetchAll();

$p1_sql = "SELECT * FROM `product` WHERE  sid IN(6,19,5,12,38)";
$product_1 = $pdo->query($p1_sql)->fetchAll();
$p2_sql = "SELECT * FROM `product` WHERE  sid IN(79,60,33)";
$product_2 = $pdo->query($p2_sql)->fetchAll();
// $photos = explode(',', $r['travel_img']);

// echo json_encode([
//     '$rows'=>$rows,
// ]);
// exit;

// 取得當前網頁的商品
$currentProductUrl = $_SERVER['QUERY_STRING'];
$currentProductSid = substr($currentProductUrl, 4);

// 取得會員
// $member_id = $_SESSION['user']['id'];
// $user_id = "SELECT * FROM `member` WHERE id=$member_id";
// $uId = $pdo->query($user_id)->fetch();

// 取得所有會員資料
$allMember = $pdo->query("SELECT * FROM `member` WHERE 1")->fetchAll();

// 取得評論的全部
$sqlReview = sprintf("SELECT * FROM `review` WHERE `target_type`=1 AND  `collect_sid`=$currentProductSid");
$review = $pdo->query($sqlReview)->fetchAll();


$reviewTagsKen = $pdo->query("SELECT * FROM `review_tags_rel` WHERE 1")->fetchAll();
// echo json_encode($reviewTagsKen);
// exit;




// $sql_r = $pdo->query($sqlReview)->fetch();
// if (empty($sql_r)) {
//     exit;
// }
// $ts = explode(',', $sql_r['tags_sid']);

// 取得評論的review_tags所有
$reviewTags = $pdo->query("SELECT * FROM `review_tags`")->fetchAll();


$sqlreviewTags = "SELECT r.* , t.`tags` FROM `review_tags`t LEFT JOIN `review` r ON r.tags_sid = t.sid";
$re = $pdo->query($sqlreviewTags)->fetchAll();



// echo json_encode([
//     // 'sqlReview ' => $sqlReview ,
//     // 'sqlreviewTags ' => $sqlreviewTags ,
//     // 'reviewTags' => $reviewTags,
//     // 'uId' => $uId,
//     // 'review' => $review,
//     're' => $re,
// ]);
// exit;

?>

<?php include __DIR__ . '/parts/html-head.php'; ?>
<link rel="stylesheet" href="./product_detail_style.css">
<?php include __DIR__ . '/parts/navbar.php'; ?>
<div class="product_detail_07">

    <!-- computer head -->
    <!-- < ?php foreach ($rows as $r) : ?> -->
    <div class="container">
        <div class="ml-md-3 mt-md-5 mt-3 d-flex">
            <h6 id="backtoProductList" class="p-0"> ＜　商品列表頁 </h6>
        </div>
    </div>
    <div class="pd_head d-none d-md-block mt-md-3" id="pd_title">

        <div class="container d-flex">

            <div class="product_carousel col">
                <div class="row">
                    <div class="col">
                        <!-- https://codepen.io/RetinaInc/details/MWEygq -->
                        <div class="img-demo d-flex justify-content-center">
                            <!-- <img class="p1" src="./imgs/product/big/P19_1_b.jpg" alt=""> -->
                            <?php
                            $i = 0;
                            // for ($i = 1; $i < 5; $i++) {
                            //     echo $i;
                            // };
                            foreach ($photos_b as $b) : $i++
                            ?>
                                <img src="imgs/product/big/<?= $b ?>" class="p<?= $i ?>" alt="...">
                                <!-- < ?php endfor ?> -->
                            <?php endforeach ?>
                            <!-- <img class="p2" src="./imgs/product/big/P19_2_b.jpg" alt="">
                                <img class="p3" src="./imgs/product/big/P19_3_b.jpg" alt="">
                                <img class="p4" src="./imgs/product/big/P19_4_b.jpg" alt="">
                                <img class="p5" src="./imgs/product/big/P19_5_b.jpg" alt=""> -->
                            <!-- 輪播牆php -->
                            <!-- < ?php
                                    $first = 0;
                                    foreach ($photos as $p) : ?>
                                        <div class="carousel-item 
                                        < ?php if ($first == 0) {echo 'active'; $first = 1;}?>">
                                            <img src="imgs/travel/wall/< ?= $p ?>" class="d-block w-100" alt="...">
                                        </div>
                                    < ?php endforeach ?> -->
                            <div class="icon_heart" data-sid="<?= $r["sid"] ?>" onclick="addToFav_P_07(event)">
                                <svg class="heart_line" width="32" height="32" viewBox="0 0 32 32" fill="none" stroke="#fff" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.2855 9.22197C12.9704 6.90689 9.21692 6.90689 6.90184 9.22197C4.58676 11.537 4.58676 15.2905 6.90184 17.6056L13.2503 23.9532C14.8378 25.5407 17.4116 25.5407 18.9991 23.9532L24.5083 18.444L24.5074 18.4431L25.3449 17.6056C27.66 15.2905 27.66 11.5371 25.3449 9.22197C23.0298 6.90689 19.2763 6.90689 16.9612 9.22197L16.1234 10.0598L15.2855 9.22197Z" stroke-width="2.66667" />
                                </svg>
                            </div>
                        </div>
                        <div class="top_carousel">
                            <a class="carousel-control-prev" href="" data-slide="prev">
                                <i class="fa-solid fa-caret-left"></i>
                            </a>
                            <a class="carousel-control-next" href="" data-slide="next">
                                <i class="fa-solid fa-caret-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="img-selector-area d-flex">
                            <?php
                            foreach ($photos_s as $s) :
                            ?>
                                <div class="img-wrap">

                                    <img src="imgs/product/small/<?= $s ?>" alt="...">
                                    <!-- < ?php endfor ?> -->
                                </div>
                            <?php endforeach ?>
                            <!-- <div class="img-wrap">
                                <img src="./imgs/product/small/P19_2_s.jpg" alt="">
                            </div>
                            <div class="img-wrap">
                                <img src="./imgs/product/small/P19_3_s.jpg" alt="">
                            </div>
                            <div class="img-wrap">
                                <img src="./imgs/product/small/P19_4_s.jpg" alt="">
                            </div>
                            <div class="img-wrap">
                                <img src="./imgs/product/small/P19_5_s.jpg" alt="">
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="detail col-6">
                <div class="detail_title" id="purchasep">
                    <div class="row">
                        <div class="col">
                            <div class="pd_t">
                                <h2><?= $r['product_name'] ?></h2>
                                <p><?= $r['product_subtitle'] ?></p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="evaluation">
                                <div class="star d-flex">
                                    <div class="icon_fivestar pr-0">
                                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                    </div>
                                    <p>（50+則評價）</p>
                                </div>
                                <div class="fire d-flex justify-content-center align-self-end">
                                    <div class="icon_fire" style="color: var(--color-orange);">
                                        <i class="fa-solid fa-fire pr-2"></i>
                                    </div>
                                    <p>已賣出<?= $r['product_popular'] ?>個</p>
                                </div>
                            </div>
                        </div>
                        <div class="col mt-5">
                            <div class="price">
                                <h2>
                                    <?= $r['product_price'] ?>
                                </h2>
                            </div>
                        </div>
                        <!-- <div class="col">
                                <div class="size">
                                    <p>請選擇商品規格</p>
                                    <select name="" id="size">
                                        <option value="0">甜作之盒單入組</option>
                                        <option value="1">甜作之盒&棉布御守單入組</option>
                                        <option value="2">甜作之盒&棉布御守&紙膠帶單入組</option>
                                    </select>
                                </div>
                            </div> -->
                        <div class="col">
                            <!-- TODO:還沒做按鈕功能 -->
                            <div class="number">
                                <p>請選擇商品數量</p>
                                <div class="choice d-flex">
                                    <div class="quantity">
                                        <button class="minus disabled">－</button>
                                    </div>
                                    <div class="product_q  product_qq px-2">
                                        1
                                    </div>
                                    <div class="quantity">
                                        <button class="plus">＋</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="buy_btn">
                                <button class="buy d-flex justify-content-center align-items-center" data-sid="<?= $r["sid"] ?>" onclick="addToCart_P_Yu(event)">
                                    <a href="shopping-cart.php">
                                        <div class="icon_buy">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <mask id="path-1-outside-1_1834_25020-499429" maskUnits="userSpaceOnUse" x="1.58203" y="3.25" width="20" height="17" fill="black">
                                                    <rect fill="white" x="1.58203" y="3.25" width="20" height="17" />
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.09827 5.25C6.79605 5.25 5.69918 6.22304 5.54392 7.51597L4.60073 15.3706C4.41683 16.902 5.61261 18.25 7.15508 18.25H16.8382C18.3888 18.25 19.587 16.8885 19.39 15.3504L18.384 7.49584C18.2195 6.21184 17.1266 5.25 15.8321 5.25H8.09827ZM8.71466 7.7029C8.72994 7.64444 8.73801 7.58365 8.73801 7.52123C8.73801 7.06458 8.30622 6.69438 7.77357 6.69438C7.24093 6.69438 6.80914 7.06458 6.80914 7.52123C6.80914 7.97789 7.24093 8.34808 7.77357 8.34808C7.79553 8.34808 7.81732 8.34745 7.8389 8.34622C8.15888 9.67663 8.49438 10.7885 9.00121 11.593C9.29939 12.0664 9.66702 12.4516 10.1401 12.7147C10.6133 12.9779 11.1586 13.1005 11.7832 13.1005C12.4 13.1005 12.9498 12.9926 13.4372 12.7522C13.9264 12.511 14.3243 12.1505 14.6566 11.6873C15.228 10.8908 15.6217 9.76455 15.9734 8.34596C15.9964 8.34736 16.0196 8.34808 16.0431 8.34808C16.5757 8.34808 17.0075 7.97789 17.0075 7.52123C17.0075 7.06458 16.5757 6.69438 16.0431 6.69438C15.5104 6.69438 15.0786 7.06458 15.0786 7.52123C15.0786 7.58194 15.0863 7.64112 15.1008 7.6981C14.7244 9.30618 14.3468 10.4037 13.8441 11.1044C13.5917 11.4562 13.3141 11.6979 12.9949 11.8553C12.674 12.0136 12.2825 12.1005 11.7832 12.1005C11.2918 12.1005 10.9216 12.0051 10.6263 11.8408C10.3309 11.6766 10.0771 11.4248 9.84731 11.06C9.38935 10.3331 9.06972 9.23377 8.71466 7.7029Z" />
                                                </mask>
                                                <path d="M5.54392 7.51597L3.55819 7.27752L5.54392 7.51597ZM4.60073 15.3706L6.58647 15.609L4.60073 15.3706ZM19.39 15.3504L17.4062 15.6045V15.6045L19.39 15.3504ZM18.384 7.49584L16.4002 7.74994V7.74994L18.384 7.49584ZM8.71466 7.7029L6.77972 7.19693L6.65491 7.6742L6.76637 8.15477L8.71466 7.7029ZM7.8389 8.34622L9.78346 7.87854L9.3927 6.25381L7.72438 6.3495L7.8389 8.34622ZM9.00121 11.593L7.30901 12.6591L7.30901 12.6591L9.00121 11.593ZM10.1401 12.7147L9.16794 14.4625L9.16794 14.4625L10.1401 12.7147ZM13.4372 12.7522L12.5527 10.9584L12.5527 10.9584L13.4372 12.7522ZM14.6566 11.6873L16.2817 12.8531L16.2817 12.8531L14.6566 11.6873ZM15.9734 8.34596L16.0956 6.34969L14.433 6.24796L14.0322 7.86464L15.9734 8.34596ZM15.1008 7.6981L17.0481 8.15382L17.1594 7.67853L17.0391 7.20543L15.1008 7.6981ZM13.8441 11.1044L12.219 9.93851L12.219 9.93851L13.8441 11.1044ZM12.9949 11.8553L12.1105 10.0615L12.1105 10.0615L12.9949 11.8553ZM10.6263 11.8408L11.5985 10.093L11.5985 10.093L10.6263 11.8408ZM9.84731 11.06L8.15511 12.1261L8.15511 12.1261L9.84731 11.06ZM7.52966 7.75442C7.56422 7.4666 7.80839 7.25 8.09827 7.25V3.25C5.78371 3.25 3.83414 4.97947 3.55819 7.27752L7.52966 7.75442ZM6.58647 15.609L7.52966 7.75442L3.55819 7.27752L2.615 15.1321L6.58647 15.609ZM7.15508 16.25C6.81172 16.25 6.54553 15.9499 6.58647 15.609L2.615 15.1321C2.28813 17.8542 4.4135 20.25 7.15508 20.25V16.25ZM16.8382 16.25H7.15508V20.25H16.8382V16.25ZM17.4062 15.6045C17.4501 15.9469 17.1834 16.25 16.8382 16.25V20.25C19.5942 20.25 21.724 17.8301 21.3738 15.0963L17.4062 15.6045ZM16.4002 7.74994L17.4062 15.6045L21.3738 15.0963L20.3678 7.24175L16.4002 7.74994ZM15.8321 7.25C16.1203 7.25 16.3636 7.46411 16.4002 7.74994L20.3678 7.24175C20.0754 4.95956 18.1329 3.25 15.8321 3.25V7.25ZM8.09827 7.25H15.8321V3.25H8.09827V7.25ZM6.73801 7.52123C6.73801 7.41029 6.75247 7.30111 6.77972 7.19693L10.6496 8.20887C10.7074 7.98777 10.738 7.757 10.738 7.52123H6.73801ZM7.77357 8.69438C7.58102 8.69438 7.35565 8.628 7.15377 8.45492C6.9477 8.27825 6.73801 7.95436 6.73801 7.52123H10.738C10.738 5.68227 9.1109 4.69438 7.77357 4.69438V8.69438ZM8.80914 7.52123C8.80914 7.95436 8.59945 8.27825 8.39337 8.45492C8.1915 8.628 7.96613 8.69438 7.77357 8.69438V4.69438C6.43624 4.69438 4.80914 5.68227 4.80914 7.52123H8.80914ZM7.77357 6.34808C7.96613 6.34808 8.1915 6.41447 8.39337 6.58754C8.59945 6.76422 8.80914 7.0881 8.80914 7.52123H4.80914C4.80914 9.36019 6.43624 10.3481 7.77357 10.3481V6.34808ZM7.72438 6.3495C7.74093 6.34855 7.75733 6.34808 7.77357 6.34808V10.3481C7.83373 10.3481 7.8937 10.3464 7.95343 10.3429L7.72438 6.3495ZM10.6934 10.527C10.3805 10.0302 10.1044 9.21291 9.78346 7.87854L5.89435 8.81389C6.21338 10.1404 6.60829 11.5468 7.30901 12.6591L10.6934 10.527ZM11.1124 10.9669C10.995 10.9016 10.8549 10.7834 10.6934 10.527L7.30901 12.6591C7.74383 13.3493 8.33905 14.0015 9.16794 14.4625L11.1124 10.9669ZM11.7832 11.1005C11.4249 11.1005 11.2296 11.0322 11.1124 10.9669L9.16794 14.4625C9.99699 14.9237 10.8923 15.1005 11.7832 15.1005V11.1005ZM12.5527 10.9584C12.3983 11.0346 12.1652 11.1005 11.7832 11.1005V15.1005C12.6349 15.1005 13.5012 14.9506 14.3217 14.546L12.5527 10.9584ZM13.0316 10.5214C12.859 10.762 12.7018 10.8849 12.5527 10.9584L14.3217 14.546C15.1509 14.1371 15.7897 13.5389 16.2817 12.8531L13.0316 10.5214ZM14.0322 7.86464C13.6901 9.24447 13.3676 10.053 13.0316 10.5214L16.2817 12.8531C17.0884 11.7286 17.5533 10.2846 17.9146 8.82728L14.0322 7.86464ZM16.0431 6.34808C16.0606 6.34808 16.0781 6.34862 16.0956 6.34969L15.8513 10.3422C15.9147 10.3461 15.9787 10.3481 16.0431 10.3481V6.34808ZM15.0075 7.52123C15.0075 7.0881 15.2172 6.76422 15.4233 6.58754C15.6251 6.41447 15.8505 6.34808 16.0431 6.34808V10.3481C17.3804 10.3481 19.0075 9.36019 19.0075 7.52123H15.0075ZM16.0431 8.69438C15.8505 8.69438 15.6251 8.628 15.4233 8.45492C15.2172 8.27825 15.0075 7.95436 15.0075 7.52123H19.0075C19.0075 5.68227 17.3804 4.69438 16.0431 4.69438V8.69438ZM17.0786 7.52123C17.0786 7.95436 16.8689 8.27825 16.6629 8.45492C16.461 8.628 16.2356 8.69438 16.0431 8.69438V4.69438C14.7057 4.69438 13.0786 5.68227 13.0786 7.52123H17.0786ZM17.0391 7.20543C17.065 7.3071 17.0786 7.41336 17.0786 7.52123H13.0786C13.0786 7.75052 13.1076 7.97514 13.1624 8.19077L17.0391 7.20543ZM15.4691 12.2702C16.2241 11.2179 16.6698 9.77071 17.0481 8.15382L13.1534 7.24238C12.7791 8.84166 12.4695 9.58943 12.219 9.93851L15.4691 12.2702ZM13.8794 13.6491C14.5384 13.3242 15.0568 12.8449 15.4691 12.2702L12.219 9.93851C12.169 10.0083 12.1356 10.0405 12.1224 10.0522C12.1156 10.0582 12.112 10.0606 12.1113 10.061C12.1108 10.0614 12.1108 10.0614 12.1105 10.0615L13.8794 13.6491ZM11.7832 14.1005C12.5177 14.1005 13.2257 13.9715 13.8794 13.6491L12.1105 10.0615C12.1101 10.0617 12.1065 10.0635 12.098 10.0664C12.0894 10.0693 12.0741 10.0739 12.0503 10.0788C12.0024 10.0888 11.9175 10.1005 11.7832 10.1005V14.1005ZM9.65404 13.5886C10.3048 13.9506 11.025 14.1005 11.7832 14.1005V10.1005C11.6664 10.1005 11.6052 10.0891 11.5841 10.0842C11.5661 10.08 11.5756 10.0803 11.5985 10.093L9.65404 13.5886ZM8.15511 12.1261C8.52185 12.7082 9.00335 13.2267 9.65405 13.5886L11.5985 10.093C11.6213 10.1058 11.6313 10.1163 11.6263 10.1113C11.619 10.104 11.5883 10.0715 11.5395 9.99398L8.15511 12.1261ZM6.76637 8.15477C7.11148 9.64276 7.49022 11.0706 8.15511 12.1261L11.5395 9.99398C11.2885 9.59549 11.0279 8.82479 10.6629 7.25103L6.76637 8.15477Z" fill="#432A0F" mask="url(#path-1-outside-1_1834_25020-499429)" />
                                            </svg>
                                            立即購買
                                        </div>
                                    </a>
                                </button>
                                <button class="cart d-flex justify-content-center align-items-center" data-sid="<?= $r["sid"] ?>" onclick="addToCart_P_Yu(event)">
                                    <div class="icon_cart">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M4 3C3.44772 3 3 3.44772 3 4C3 4.55228 3.44772 5 4 5H5.20504L5.71394 7.19844L6.98368 14.5122C6.38575 14.969 6 15.6894 6 16.5C6 17.8807 7.11929 19 8.5 19H10C9.44772 19 9 19.4477 9 20C9 20.5523 9.44772 21 10 21C10.5523 21 11 20.5523 11 20C11 19.4477 10.5523 19 10 19H17C16.4477 19 16 19.4477 16 20C16 20.5523 16.4477 21 17 21C17.5523 21 18 20.5523 18 20C18 19.4477 17.5523 19 17 19H19C19.5523 19 20 18.5523 20 18C20 17.4477 19.5523 17 19 17H8.5C8.22386 17 8 16.7761 8 16.5C8 16.2239 8.22386 16 8.5 16H18.9167C19.4171 16 19.8405 15.6301 19.9076 15.1342L20.991 7.13419C21.0297 6.84818 20.943 6.55939 20.7531 6.34205C20.5632 6.1247 20.2886 6 20 6H7.48941L6.97424 3.77448C6.86928 3.32107 6.4654 3 6 3H4ZM8.92468 14L7.88301 8H18.8555L18.043 14H8.92468Z" fill="#432A0F" />
                                        </svg>
                                    </div>
                                    加入購物車
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- < ?php endforeach; ?> -->

    <!-- mobile head 手機板輪播牆 -->
    <div class="pd_head_mb d-block d-md-none w-100">
        <div id="carouselExampleIndicators" class="carousel slide m-0 p-0 w-100" data-ride="carousel">
            <!-- <div class="goback">
                <a type="button" href="./product_list.php"><i class="fa-solid fa-chevron-left"></i></a>
            </div> -->
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./imgs/product/big/P19_1_b.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./imgs/product/big/P19_2_b.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./imgs/product/big/P19_3_b.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./imgs/product/big/P19_4_b.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./imgs/product/big/P19_5_b.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            </a>
        </div>
        <div class="pb_headtitle_mb">
            <div class="container">
                <h5 class="mt-2"><?= $r['product_name'] ?></h5>
                <small><?= $r['product_subtitle'] ?></small>
                <div class="row justify-content-around align-items-center">
                    <div class="evaluation">
                        <div class="star d-flex">
                            <div class="icon_fivestar xs">
                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                            </div>
                            <small class="xs">（50+則評價）</small>
                        </div>
                        <div class="fire d-flex justify-content-center align-self-end">
                            <div class="icon_fire xs pr-1">
                                <i class="fa-solid fa-fire"></i>
                            </div>
                            <small class="xs">已賣出<?= $r['product_popular'] ?>個</small>
                        </div>
                    </div>
                    <div class="price">
                        <h4><?= $r['product_price'] ?></h4>
                    </div>
                </div>
                <!-- <div class="size mt-2">
                    <p>請選擇商品規格</p>
                    <select name="" id="size" class="w-100">
                        <option value="0">甜作之盒單入組</option>
                        <option value="1">甜作之盒&棉布御守單入組</option>
                        <option value="2">甜作之盒&棉布御守&紙膠帶單入組</option>
                    </select>
                </div> -->
                <div class="number">
                    <p>請選擇商品數量</p>
                    <div class="choice d-flex">
                        <div class="quantity">
                            <button class="minus disabled">－</button>
                        </div>
                        <div class="product_q px-2">1</div>
                        <div class="quantity">
                            <button class="plus">＋</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 手機上方列 -->
    <div class="pdnav_mb mt-2 d-block d-md-none">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col px-3">
                    <a href="#pay"><small>寄送與付款</small></a>
                </div>
                <div class="col pr-3 pl-0">
                    <a href="#intro"><small>商品介紹</small></a>
                </div>
                <div class="col pr-3 pl-0">
                    <a href="#back"><small>退換貨方式</small></a>
                </div>
                <div class="col px-0">
                    <a href="#comment"><small>商品評價</small></a>
                </div>
            </div>
        </div>
    </div>

    <!-- 桌機下方列 -->
    <div class="undernav d-none d-md-block">
        <div class="  container d-flex justify-content-between align-items-center">
            <div class="row justify-content-center">
                <div class="left_title">
                    <div class="col">
                        <p><?= $r['product_name'] ?></p>
                        <h2><?= $r['product_price'] ?></h2>
                    </div>
                </div>

            </div>
            <div class="btns">
                <div class="row align-items-center">
                    <div class="col">
                        <button class="favorite d-flex justify-content-center align-items-center" data-sid="<?= $r["sid"] ?>" onclick="addToFav_P_07(event)">
                            <div class="icon_heart_nav">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.2746 6.4197C9.38169 4.52677 6.31264 4.52677 4.4197 6.4197C2.52677 8.31264 2.52677 11.3817 4.4197 13.2746L9.61052 18.4648C10.9085 19.7628 13.0131 19.7628 14.3111 18.4648L18.8157 13.9601L18.815 13.9594L19.4997 13.2746C21.3927 11.3817 21.3927 8.31264 19.4997 6.4197C17.6068 4.52677 14.5377 4.52677 12.6448 6.4197L11.9597 7.10479L11.2746 6.4197Z" stroke="#432A0F" stroke-width="2" />
                                </svg>
                            </div>
                            加入最愛
                        </button>
                    </div>
                    <div class="col">
                        <button class="cart d-flex justify-content-center align-items-center" data-sid="<?= $r["sid"] ?>" onclick="addToCart_PF_Yu(event)">
                            <!-- 跳轉頁面所以button還要再包a連結? -->
                            <div class="icon_cart">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M4 3C3.44772 3 3 3.44772 3 4C3 4.55228 3.44772 5 4 5H5.20504L5.71394 7.19844L6.98368 14.5122C6.38575 14.969 6 15.6894 6 16.5C6 17.8807 7.11929 19 8.5 19H10C9.44772 19 9 19.4477 9 20C9 20.5523 9.44772 21 10 21C10.5523 21 11 20.5523 11 20C11 19.4477 10.5523 19 10 19H17C16.4477 19 16 19.4477 16 20C16 20.5523 16.4477 21 17 21C17.5523 21 18 20.5523 18 20C18 19.4477 17.5523 19 17 19H19C19.5523 19 20 18.5523 20 18C20 17.4477 19.5523 17 19 17H8.5C8.22386 17 8 16.7761 8 16.5C8 16.2239 8.22386 16 8.5 16H18.9167C19.4171 16 19.8405 15.6301 19.9076 15.1342L20.991 7.13419C21.0297 6.84818 20.943 6.55939 20.7531 6.34205C20.5632 6.1247 20.2886 6 20 6H7.48941L6.97424 3.77448C6.86928 3.32107 6.4654 3 6 3H4ZM8.92468 14L7.88301 8H18.8555L18.043 14H8.92468Z" fill="#432A0F" />
                                </svg>
                            </div>
                            加入購物車
                        </button>
                    </div>
                    <div class="col">
                        <button class="buy d-flex justify-content-center align-items-center" data-sid="<?= $r["sid"] ?>" onclick="addToCart_PF_Yu(event)">
                            <a class="d-flex" href="shopping-cart.php">
                                <div class="icon_buy">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <mask id="path-1-outside-1_1834_25020-499429" maskUnits="userSpaceOnUse" x="1.58203" y="3.25" width="20" height="17" fill="black">
                                            <rect fill="white" x="1.58203" y="3.25" width="20" height="17" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.09827 5.25C6.79605 5.25 5.69918 6.22304 5.54392 7.51597L4.60073 15.3706C4.41683 16.902 5.61261 18.25 7.15508 18.25H16.8382C18.3888 18.25 19.587 16.8885 19.39 15.3504L18.384 7.49584C18.2195 6.21184 17.1266 5.25 15.8321 5.25H8.09827ZM8.71466 7.7029C8.72994 7.64444 8.73801 7.58365 8.73801 7.52123C8.73801 7.06458 8.30622 6.69438 7.77357 6.69438C7.24093 6.69438 6.80914 7.06458 6.80914 7.52123C6.80914 7.97789 7.24093 8.34808 7.77357 8.34808C7.79553 8.34808 7.81732 8.34745 7.8389 8.34622C8.15888 9.67663 8.49438 10.7885 9.00121 11.593C9.29939 12.0664 9.66702 12.4516 10.1401 12.7147C10.6133 12.9779 11.1586 13.1005 11.7832 13.1005C12.4 13.1005 12.9498 12.9926 13.4372 12.7522C13.9264 12.511 14.3243 12.1505 14.6566 11.6873C15.228 10.8908 15.6217 9.76455 15.9734 8.34596C15.9964 8.34736 16.0196 8.34808 16.0431 8.34808C16.5757 8.34808 17.0075 7.97789 17.0075 7.52123C17.0075 7.06458 16.5757 6.69438 16.0431 6.69438C15.5104 6.69438 15.0786 7.06458 15.0786 7.52123C15.0786 7.58194 15.0863 7.64112 15.1008 7.6981C14.7244 9.30618 14.3468 10.4037 13.8441 11.1044C13.5917 11.4562 13.3141 11.6979 12.9949 11.8553C12.674 12.0136 12.2825 12.1005 11.7832 12.1005C11.2918 12.1005 10.9216 12.0051 10.6263 11.8408C10.3309 11.6766 10.0771 11.4248 9.84731 11.06C9.38935 10.3331 9.06972 9.23377 8.71466 7.7029Z" />
                                        </mask>
                                        <path d="M5.54392 7.51597L3.55819 7.27752L5.54392 7.51597ZM4.60073 15.3706L6.58647 15.609L4.60073 15.3706ZM19.39 15.3504L17.4062 15.6045V15.6045L19.39 15.3504ZM18.384 7.49584L16.4002 7.74994V7.74994L18.384 7.49584ZM8.71466 7.7029L6.77972 7.19693L6.65491 7.6742L6.76637 8.15477L8.71466 7.7029ZM7.8389 8.34622L9.78346 7.87854L9.3927 6.25381L7.72438 6.3495L7.8389 8.34622ZM9.00121 11.593L7.30901 12.6591L7.30901 12.6591L9.00121 11.593ZM10.1401 12.7147L9.16794 14.4625L9.16794 14.4625L10.1401 12.7147ZM13.4372 12.7522L12.5527 10.9584L12.5527 10.9584L13.4372 12.7522ZM14.6566 11.6873L16.2817 12.8531L16.2817 12.8531L14.6566 11.6873ZM15.9734 8.34596L16.0956 6.34969L14.433 6.24796L14.0322 7.86464L15.9734 8.34596ZM15.1008 7.6981L17.0481 8.15382L17.1594 7.67853L17.0391 7.20543L15.1008 7.6981ZM13.8441 11.1044L12.219 9.93851L12.219 9.93851L13.8441 11.1044ZM12.9949 11.8553L12.1105 10.0615L12.1105 10.0615L12.9949 11.8553ZM10.6263 11.8408L11.5985 10.093L11.5985 10.093L10.6263 11.8408ZM9.84731 11.06L8.15511 12.1261L8.15511 12.1261L9.84731 11.06ZM7.52966 7.75442C7.56422 7.4666 7.80839 7.25 8.09827 7.25V3.25C5.78371 3.25 3.83414 4.97947 3.55819 7.27752L7.52966 7.75442ZM6.58647 15.609L7.52966 7.75442L3.55819 7.27752L2.615 15.1321L6.58647 15.609ZM7.15508 16.25C6.81172 16.25 6.54553 15.9499 6.58647 15.609L2.615 15.1321C2.28813 17.8542 4.4135 20.25 7.15508 20.25V16.25ZM16.8382 16.25H7.15508V20.25H16.8382V16.25ZM17.4062 15.6045C17.4501 15.9469 17.1834 16.25 16.8382 16.25V20.25C19.5942 20.25 21.724 17.8301 21.3738 15.0963L17.4062 15.6045ZM16.4002 7.74994L17.4062 15.6045L21.3738 15.0963L20.3678 7.24175L16.4002 7.74994ZM15.8321 7.25C16.1203 7.25 16.3636 7.46411 16.4002 7.74994L20.3678 7.24175C20.0754 4.95956 18.1329 3.25 15.8321 3.25V7.25ZM8.09827 7.25H15.8321V3.25H8.09827V7.25ZM6.73801 7.52123C6.73801 7.41029 6.75247 7.30111 6.77972 7.19693L10.6496 8.20887C10.7074 7.98777 10.738 7.757 10.738 7.52123H6.73801ZM7.77357 8.69438C7.58102 8.69438 7.35565 8.628 7.15377 8.45492C6.9477 8.27825 6.73801 7.95436 6.73801 7.52123H10.738C10.738 5.68227 9.1109 4.69438 7.77357 4.69438V8.69438ZM8.80914 7.52123C8.80914 7.95436 8.59945 8.27825 8.39337 8.45492C8.1915 8.628 7.96613 8.69438 7.77357 8.69438V4.69438C6.43624 4.69438 4.80914 5.68227 4.80914 7.52123H8.80914ZM7.77357 6.34808C7.96613 6.34808 8.1915 6.41447 8.39337 6.58754C8.59945 6.76422 8.80914 7.0881 8.80914 7.52123H4.80914C4.80914 9.36019 6.43624 10.3481 7.77357 10.3481V6.34808ZM7.72438 6.3495C7.74093 6.34855 7.75733 6.34808 7.77357 6.34808V10.3481C7.83373 10.3481 7.8937 10.3464 7.95343 10.3429L7.72438 6.3495ZM10.6934 10.527C10.3805 10.0302 10.1044 9.21291 9.78346 7.87854L5.89435 8.81389C6.21338 10.1404 6.60829 11.5468 7.30901 12.6591L10.6934 10.527ZM11.1124 10.9669C10.995 10.9016 10.8549 10.7834 10.6934 10.527L7.30901 12.6591C7.74383 13.3493 8.33905 14.0015 9.16794 14.4625L11.1124 10.9669ZM11.7832 11.1005C11.4249 11.1005 11.2296 11.0322 11.1124 10.9669L9.16794 14.4625C9.99699 14.9237 10.8923 15.1005 11.7832 15.1005V11.1005ZM12.5527 10.9584C12.3983 11.0346 12.1652 11.1005 11.7832 11.1005V15.1005C12.6349 15.1005 13.5012 14.9506 14.3217 14.546L12.5527 10.9584ZM13.0316 10.5214C12.859 10.762 12.7018 10.8849 12.5527 10.9584L14.3217 14.546C15.1509 14.1371 15.7897 13.5389 16.2817 12.8531L13.0316 10.5214ZM14.0322 7.86464C13.6901 9.24447 13.3676 10.053 13.0316 10.5214L16.2817 12.8531C17.0884 11.7286 17.5533 10.2846 17.9146 8.82728L14.0322 7.86464ZM16.0431 6.34808C16.0606 6.34808 16.0781 6.34862 16.0956 6.34969L15.8513 10.3422C15.9147 10.3461 15.9787 10.3481 16.0431 10.3481V6.34808ZM15.0075 7.52123C15.0075 7.0881 15.2172 6.76422 15.4233 6.58754C15.6251 6.41447 15.8505 6.34808 16.0431 6.34808V10.3481C17.3804 10.3481 19.0075 9.36019 19.0075 7.52123H15.0075ZM16.0431 8.69438C15.8505 8.69438 15.6251 8.628 15.4233 8.45492C15.2172 8.27825 15.0075 7.95436 15.0075 7.52123H19.0075C19.0075 5.68227 17.3804 4.69438 16.0431 4.69438V8.69438ZM17.0786 7.52123C17.0786 7.95436 16.8689 8.27825 16.6629 8.45492C16.461 8.628 16.2356 8.69438 16.0431 8.69438V4.69438C14.7057 4.69438 13.0786 5.68227 13.0786 7.52123H17.0786ZM17.0391 7.20543C17.065 7.3071 17.0786 7.41336 17.0786 7.52123H13.0786C13.0786 7.75052 13.1076 7.97514 13.1624 8.19077L17.0391 7.20543ZM15.4691 12.2702C16.2241 11.2179 16.6698 9.77071 17.0481 8.15382L13.1534 7.24238C12.7791 8.84166 12.4695 9.58943 12.219 9.93851L15.4691 12.2702ZM13.8794 13.6491C14.5384 13.3242 15.0568 12.8449 15.4691 12.2702L12.219 9.93851C12.169 10.0083 12.1356 10.0405 12.1224 10.0522C12.1156 10.0582 12.112 10.0606 12.1113 10.061C12.1108 10.0614 12.1108 10.0614 12.1105 10.0615L13.8794 13.6491ZM11.7832 14.1005C12.5177 14.1005 13.2257 13.9715 13.8794 13.6491L12.1105 10.0615C12.1101 10.0617 12.1065 10.0635 12.098 10.0664C12.0894 10.0693 12.0741 10.0739 12.0503 10.0788C12.0024 10.0888 11.9175 10.1005 11.7832 10.1005V14.1005ZM9.65404 13.5886C10.3048 13.9506 11.025 14.1005 11.7832 14.1005V10.1005C11.6664 10.1005 11.6052 10.0891 11.5841 10.0842C11.5661 10.08 11.5756 10.0803 11.5985 10.093L9.65404 13.5886ZM8.15511 12.1261C8.52185 12.7082 9.00335 13.2267 9.65405 13.5886L11.5985 10.093C11.6213 10.1058 11.6313 10.1163 11.6263 10.1113C11.619 10.104 11.5883 10.0715 11.5395 9.99398L8.15511 12.1261ZM6.76637 8.15477C7.11148 9.64276 7.49022 11.0706 8.15511 12.1261L11.5395 9.99398C11.2885 9.59549 11.0279 8.82479 10.6629 7.25103L6.76637 8.15477Z" fill="#432A0F" mask="url(#path-1-outside-1_1834_25020-499429)" />
                                    </svg>
                                </div>
                                立即購買
                            </a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="detail_box">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="details">
                        <div class="intro_bg" id="pay">
                            <h5>寄送與付款方式</h5>
                            <small>可選擇宅配取貨或超商取貨，寄送範圍為：
                                台灣、蘭嶼、綠島、澎湖、金門、馬祖。 <br>
                                付款方式：
                                信用卡、ATM匯款、超商取貨付款、宅配取貨付款。</small>
                        </div>
                        <div class="intro_bg" id="intro">
                            <h5>商品介紹</h5>
                            <div class="intro_img">
                                <?php
                                // $first = 0;
                                foreach ($photos as $p) : ?>
                                    <img src="./imgs/product/<?= $p ?>" class="d-block w-100" alt="...">
                                    <!-- </div> -->
                                <?php endforeach ?>
                                <p><?= $r['product_introfirst'] ?></p>
                            </div>
                            <!-- <p>【最甜最完整的參拜體驗！】 <br>
                                    幫你把月老參拜體驗濃縮在這一盒中！ <br>
                                    真命甜子小抄讓你 #釐清想要的愛情 <br>
                                    內附最甜供品，不用再煩惱要帶什麼供品參拜月老 <br>
                                    拜完還有時光棉布愛情御守與和紙膠帶，持續保佑你的愛情！ <br>
                                    希望在這個愛情的時節裡，每個人都能獲得月老的庇佑，擁抱滿滿的幸福 <br>
                                    <br>
                                    最甜最貼心的月老參拜全方位組合 <br>
                                    擁有這一盒，享受一場最甜的參拜體驗 <br>
                                    甜蜜哲學 寫出你的真命甜子 <br>
                                    「你說你都喝無糖？那...感情裡至少放三分糖吧！不對，這裡指的『甜』明明就不是手搖飲料那種，你先往下看嘛！」 <br>

                                    「甜不只是一種味道，更是一種戀愛哲學！」 <br>
                                    既然月老最愛吃甜的，為什麼不用「甜密哲學」向月老訴說自己的感情觀和人生觀呢！ <br>
                                    <br>
                                    清香甜、芳醇甜、辛嗆甜...... <br>
                                    甜蜜哲學甜小卡幫你發展了17種不同的甜，17種不同的感情模式，希望在和月老稟報前，先清楚的描繪屬於你內心嚮往的感情模式，發展出第18種，屬於你自己的甜。 <br> -->
                            <!-- <p>< ?= $r['product_introfirst'] ?></p> -->
                            <!-- </p> -->
                            <div class="intro_img">
                                <?php
                                foreach ($photos_sec as $s) : ?>
                                    <img src="./imgs/product/<?= $s ?>" class="d-block w-100" alt="...">
                                <?php endforeach ?>
                                <!-- <img class="w-100" src="./imgs/product/< ?= $r['product_introimgsec'] ?>" alt=""> -->
                                <p><?= $r['product_introsec'] ?></p>
                            </div>
                            <!-- <p>「拜完然後呢？」 <br>
                                    你的問題，也曾經是我們最大的煩惱， <br>
                                    除了保持「平常心」之外，我們為你整理了醞釀緣分的小技巧： <br>
                                    <br>
                                    ● 時時配掛『加持愛情御守』，如果想念月老，也可以打開盒子，與紙雕月老說說話，不受時空限制，和藹的月老一直都在。 <br>
                                    ● 收藏『真命甜子小抄』，將自己寫下的甜密哲學放在心上，提醒自己朝著對的方向前進，這點很重要，不要因為一時誘惑或心軟，做出違背本心的決定。 <br>
                                    ● 善用『好運詩籤和紙』，妝點自己的生活日記或手帳，每次讀籤詩都覺得能量滿滿！ <br>
                                    ●
                                    分享月老的祝福：透過分送加持『參拜過的牛奶糖』廣結福緣，說不定就能遇見更多機會，自己留下一盒，還可以和3-30個朋友分享，這可就是3-30個機會啊！（直接送一整盒的話可以送3人，拆開來一人分一顆就可以分給30個人）
                                    <br> -->
                            <!-- <p>< ?= $r['product_introsec'] ?></p>
                            <img class="w-100" src="./imgs/product/< ?= $r['product_introimgsec'] ?>" alt=""> -->
                            <!-- </p> -->
                        </div>
                        <div class="intro_bg" id="back">
                            <h5>退換貨方式</h5>
                            <small>1.退款申請 <br>
                                須於收到商品後隔日起算 7 日內提出，若申請逾時或不符合退貨政策條件範圍，月老喵有權拒絕退貨 。 <br>
                                以下商品類型不接受客人因個人因素申請退款：客製化商品、已拆封個人衛生商品、保存期限短的商品 <br>
                                2.退款流程 <br>
                                月老喵會在收到申請後的 2 個工作天內聯繫客人，通過退換換申請後，請在 3
                                個工作天內將完整商品寄回，並以Email通知我們（請將使用物流單位及寄件編號一併附上，避免增加來回溝通的時間）。 <br>
                                在收到商品後的 3 個工作天內會確認商品狀態並完成退款程序。 <br>
                            </small>
                        </div>
                        <div class="intro_bg" id="comment">
                            <h5>商品評價</h5>
                            <div class="row align-items-center">
                                <div class="col col-md-9">
                                    <div class="c_star d-flex align-items-center">
                                        <h3 class="d-none d-md-block mr-3">5</h3>
                                        <small class="d-flex xs">
                                            <div class="icon_fivestar px-0">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <span class="xs d-md-none">(50 + 則評價)</span>
                                            </div>
                                            <div class="xs d-none d-md-block ml-2">(50 + 則評價)</div>
                                        </small>
                                    </div>
                                </div>
                                <!-- <div class="col col-md-3">
                                    <div class="time_sort">
                                        <select name="" id="">
                                            <option value="">最新</option>
                                            <option value="">評價高→低</option>
                                            <option value="">評價低→高</option>
                                        </select>
                                    </div>
                                </div> -->
                            </div>
                            <div class="cd">
                                <!-- computer comment -->
                                <!-- computer comment -->
                                <div class="row d-none d-md-flex detail_comment">
                                    <?php foreach ($review as $w) : ?>
                                        <div class="col col-md-3 mt-2">
                                            <div class="profile_img">
                                                <img class="w-100" src="<?php $contentMember = $w['members_id'];
                                                                        $memberiswho = $pdo->query("SELECT * FROM `member` WHERE `id` = $contentMember")->fetchAll();
                                                                        echo $memberiswho[0]['picture']; ?>" alt="">
                                            </div>
                                        </div>
                                        <div class="col col-md-9 mt-2">
                                            <div class="detail_comment">
                                                <h6 class="name" value=""><?php
                                                                            echo $memberiswho[0]['name'];
                                                                            ?></h6>
                                                <div class="star_date d-flex align-items-center my-1">
                                                    <div class="icon_fivestar">
                                                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                                    </div>
                                                    <small class="date"><?= $w['created_at'] ?></small>

                                                </div>
                                                <?php
                                                $reviewsidken = $w['sid'];
                                                $getreviewtagken = $pdo->query("SELECT * FROM `review_tags_rel` WHERE `review_sid` = $reviewsidken")->fetchAll();
                                                ?>
                                                <?php foreach ($getreviewtagken as $ken) : ?>
                                                    <span class="c_tags tags tagbutton-re tag-re text-14-re py-1 mt-5">
                                                        <?php
                                                        $getreview = $ken['tags_sid'];
                                                        $tagiswhat = $pdo->query("SELECT * FROM `review_tags` WHERE `sid` = $getreview")->fetchAll();
                                                        echo $tagiswhat[0]['tags'];
                                                        ?>
                                                    </span>
                                                <?php endforeach; ?>
                                                <div class="p_comment ">

                                                    <p class="mt-3">
                                                        <?= $w['content'] ?>
                                                    </p>

                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach ?>
                                </div>
                                <!-- <div class="row d-none d-md-flex">
                                    <div class="col col-md-3">
                                        <div class="profile_img">
                                            <img class="w-100" src="./imgs/member/picture01.png" alt="">
                                        </div>
                                    </div>
                                    <div class="col col-md-9">
                                        <div class="detail_comment">
                                            <p class="name">黃八張</p>
                                            <div class="star_date d-flex align-items-center">
                                                <div class="icon_fivestar">
                                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                                </div>
                                                <small class="date">2022/8/31</small>
                                            </div>
                                            <div class="c_tags py-1">
                                                <small class="tags">商品超可愛</small>
                                                <small class="tags">CP值超高</small>
                                            </div>
                                            <div class="p_comment">
                                                <p>很可愛的商品！超讚的聯名企劃，替第一次參拜月老的人準備周全的商品，設計也很有質感，有保存的價值和意義。</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row d-none d-md-flex">
                                    <div class="col col-md-3">
                                        <div class="profile_img">
                                            <img class="w-100" src="./imgs/member/picture01.png" alt="">
                                        </div>
                                    </div>
                                    <div class="col col-md-9">
                                        <div class="detail_comment">
                                            <p class="name">黃八張</p>
                                            <div class="star_date d-flex align-items-center">
                                                <div class="icon_fivestar">
                                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                                </div>
                                                <small class="date">2022/8/31</small>
                                            </div>
                                            <div class="c_tags py-1">
                                                <small class="tags">商品超可愛</small>
                                                <small class="tags">CP值超高</small>
                                            </div>
                                            <div class="p_comment">
                                                <p>很可愛的商品！超讚的聯名企劃，替第一次參拜月老的人準備周全的商品，設計也很有質感，有保存的價值和意義。</p>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                            <!-- mobile comment -->
                            <div class="cd_mb d-block d-md-none">
                                <div class="row justify-content-center align-items-center p-0">
                                    <div class="col-3">
                                        <div class="profile_img" style="width: 70px;">
                                            <img class="w-100" src="./imgs/member/picture01.png" alt="">
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <p class="name">黃八張</p>
                                        <div class="star_date d-flex align-items-center ">
                                            <div class="icon_fivestar px-0">
                                                <small class="date xs d-flex align-items-center">
                                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star pr-1"></i>
                                            </div>
                                            2022/8/31
                                            </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pt-0">
                                    <div class="detail_comment">
                                        <div class="c_tags py-1">
                                            <small class="tags">商品超可愛</small>
                                            <small class="tags">CP值超高</small>
                                        </div>
                                        <div class="p_comment">
                                            <p>很可愛的商品！超讚的聯名企劃，替第一次參拜月老的人準備周全的商品，設計也很有質感，有保存的價值和意義。</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cd_mb d-block d-md-none">
                                <div class="row justify-content-center align-items-center p-0">
                                    <div class="col-3">
                                        <div class="profile_img" style="width: 70px;">
                                            <img class="w-100" src="./imgs/member/picture01.png" alt="">
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <p class="name">黃八張</p>
                                        <div class="star_date d-flex align-items-center ">
                                            <div class="icon_fivestar px-0">
                                                <small class="date xs d-flex align-items-center">
                                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star pr-1"></i>
                                            </div>
                                            2022/8/31
                                            </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pt-0">
                                    <div class="detail_comment">
                                        <div class="c_tags py-1">
                                            <small class="tags">商品超可愛</small>
                                            <small class="tags">CP值超高</small>
                                        </div>
                                        <div class="p_comment">
                                            <p>很可愛的商品！超讚的聯名企劃，替第一次參拜月老的人準備周全的商品，設計也很有質感，有保存的價值和意義。</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cd_mb d-block d-md-none">
                                <div class="row justify-content-center align-items-center p-0">
                                    <div class="col-3">
                                        <div class="profile_img" style="width: 70px;">
                                            <img class="w-100" src="./imgs/member/picture01.png" alt="">
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <p class="name">黃八張</p>
                                        <div class="star_date d-flex align-items-center ">
                                            <div class="icon_fivestar px-0">
                                                <small class="date xs d-flex align-items-center">
                                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star pr-1"></i>
                                            </div>
                                            2022/8/31
                                            </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pt-0">
                                    <div class="detail_comment">
                                        <div class="c_tags py-1">
                                            <small class="tags">商品超可愛</small>
                                            <small class="tags">CP值超高</small>
                                        </div>
                                        <div class="p_comment">
                                            <p>很可愛的商品！超讚的聯名企劃，替第一次參拜月老的人準備周全的商品，設計也很有質感，有保存的價值和意義。</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="cd_mb d-block d-md-none">
                                <a href="">看更多評論</a> 
                                </div> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-none d-md-block">
                    <div class="links d-flex pl-3">
                        <a href="#pay">－寄送與付款方式</a>
                        <a href="#intro">－商品介紹</a>
                        <a href="#back">－退換貨方式</a>
                        <a href="#comment">－商品評價</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 瀏覽其他商品＆下方列固定 -->
    <!-- https://rainbowfun.ispan.com.tw/course/JavaScript -->
    <div class="otherp d-none d-md-block">
        <div class="container">
            <h4>瀏覽此商品的人，也看了...</h4>
            <!-- https://www.tutorialrepublic.com/codelab.php?topic=bootstrap&file=thumbnail-carousel-with-content -->
            <div class="row">
                <div class="col mx-auto">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row_07 d-flex">
                                    <?php foreach ($product_1 as $p) : ?>
                                        <div class="col-md-4">
                                            <a href="">
                                                <div class="thumb-wrapper mx-3">
                                                    <div class="img-box">
                                                        <img src="./imgs/product/cards/<?= $p['product_card_img'] ?>.jpg" class="img-fluid" alt="">
                                                        <div class="icon_heart">
                                                            <svg class="heart_line" width="32" height="32" viewBox="0 0 32 32" fill="none" stroke="#fff" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M15.2855 9.22197C12.9704 6.90689 9.21692 6.90689 6.90184 9.22197C4.58676 11.537 4.58676 15.2905 6.90184 17.6056L13.2503 23.9532C14.8378 25.5407 17.4116 25.5407 18.9991 23.9532L24.5083 18.444L24.5074 18.4431L25.3449 17.6056C27.66 15.2905 27.66 11.5371 25.3449 9.22197C23.0298 6.90689 19.2763 6.90689 16.9612 9.22197L16.1234 10.0598L15.2855 9.22197Z" stroke-width="2.66667" />
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div class="pit_mb pb-2">
                                                        <h6 class="p-2"><?= $p['product_name'] ?></h6>
                                                    </div>
                                                    <div class="thumb-content">
                                                        <div class="card_under d-flex justify-content-between align-items-center">
                                                            <small class="xs card-text d-flex pr-2">
                                                                <div class="icon_star pr-1" style="color: var(--color-yellow);">
                                                                    <i class="fa-solid fa-star"></i>
                                                                </div><?= $p['product_comment'] ?>
                                                            </small>
                                                            <small class="xs card-text d-flex">
                                                                <div class="icon_fire pr-1" style="color: var(--color-orange);">
                                                                    <i class="fa-solid fa-fire"></i>
                                                                </div>
                                                                <?= $p['product_popular'] ?>個已訂購
                                                            </small>
                                                            <h5 class="m-0 ml-auto"><?= $p['product_price'] ?></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row_07 d-flex">
                                    <?php foreach ($product_2 as $p) : ?>
                                        <div class="col-md-4">
                                            <a href="">
                                                <div class="thumb-wrapper mx-3">
                                                    <div class="img-box">
                                                        <img src="./imgs/product/cards/<?= $p['product_card_img'] ?>.jpg" class="img-fluid" alt="">
                                                        <div class="icon_heart">
                                                            <svg class="heart_line" width="32" height="32" viewBox="0 0 32 32" fill="none" stroke="#fff" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M15.2855 9.22197C12.9704 6.90689 9.21692 6.90689 6.90184 9.22197C4.58676 11.537 4.58676 15.2905 6.90184 17.6056L13.2503 23.9532C14.8378 25.5407 17.4116 25.5407 18.9991 23.9532L24.5083 18.444L24.5074 18.4431L25.3449 17.6056C27.66 15.2905 27.66 11.5371 25.3449 9.22197C23.0298 6.90689 19.2763 6.90689 16.9612 9.22197L16.1234 10.0598L15.2855 9.22197Z" stroke-width="2.66667" />
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div class="pit_mb pb-2">
                                                        <h6 class="p-2"><?= $p['product_name'] ?></h6>
                                                    </div>
                                                    <div class="thumb-content">
                                                        <div class="card_under d-flex justify-content-between align-items-center">
                                                            <small class="xs card-text d-flex pr-2">
                                                                <div class="icon_star pr-1" style="color: var(--color-yellow);">
                                                                    <i class="fa-solid fa-star"></i>
                                                                </div><?= $p['product_comment'] ?>
                                                            </small>
                                                            <small class="xs card-text d-flex">
                                                                <div class="icon_fire pr-1" style="color: var(--color-orange);">
                                                                    <i class="fa-solid fa-fire"></i>
                                                                </div>
                                                                <?= $p['product_popular'] ?>個已訂購
                                                            </small>
                                                            <h5 class="m-0 ml-auto"><?= $p['product_price'] ?></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                        <!-- Carousel controls -->
                        <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                            <i class="fa-solid fa-caret-left"></i>
                        </a>
                        <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                            <i class="fa-solid fa-caret-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 手機版footer -->
    <div class="pd_footer_mb d-block d-md-none">
        <div class="row justify-content-center align-items-center">
            <div class="col-2">
                <div class="icon_heart_mb ml-3">
                    <svg class="heart_line" width="32" height="32" viewBox="0 0 32 32" fill="none" stroke="var(--color-text87)" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.2855 9.22197C12.9704 6.90689 9.21692 6.90689 6.90184 9.22197C4.58676 11.537 4.58676 15.2905 6.90184 17.6056L13.2503 23.9532C14.8378 25.5407 17.4116 25.5407 18.9991 23.9532L24.5083 18.444L24.5074 18.4431L25.3449 17.6056C27.66 15.2905 27.66 11.5371 25.3449 9.22197C23.0298 6.90689 19.2763 6.90689 16.9612 9.22197L16.1234 10.0598L15.2855 9.22197Z" stroke-width="2.66667" />
                    </svg>
                </div>
            </div>
            <div class="col">
                <button class="cart btn-l d-flex justify-content-center align-items-center w-100 my-3" data-sid="<?= $r["sid"] ?>" onclick="addToCart_P_Yu(event)">
                    <div class="icon_cart">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M4 3C3.44772 3 3 3.44772 3 4C3 4.55228 3.44772 5 4 5H5.20504L5.71394 7.19844L6.98368 14.5122C6.38575 14.969 6 15.6894 6 16.5C6 17.8807 7.11929 19 8.5 19H10C9.44772 19 9 19.4477 9 20C9 20.5523 9.44772 21 10 21C10.5523 21 11 20.5523 11 20C11 19.4477 10.5523 19 10 19H17C16.4477 19 16 19.4477 16 20C16 20.5523 16.4477 21 17 21C17.5523 21 18 20.5523 18 20C18 19.4477 17.5523 19 17 19H19C19.5523 19 20 18.5523 20 18C20 17.4477 19.5523 17 19 17H8.5C8.22386 17 8 16.7761 8 16.5C8 16.2239 8.22386 16 8.5 16H18.9167C19.4171 16 19.8405 15.6301 19.9076 15.1342L20.991 7.13419C21.0297 6.84818 20.943 6.55939 20.7531 6.34205C20.5632 6.1247 20.2886 6 20 6H7.48941L6.97424 3.77448C6.86928 3.32107 6.4654 3 6 3H4ZM8.92468 14L7.88301 8H18.8555L18.043 14H8.92468Z" fill="#432A0F" />
                        </svg>
                    </div>
                    加入購物車
                </button>

            </div>
            <div class="col mr-3">
                <button class="buy btn-l d-flex justify-content-center align-items-center w-100 my-3" data-sid="<?= $r["sid"] ?>" onclick="addToCart_P_Yu(event)">
                    <div class="icon_buy pr-1">
                        <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <mask id="path-1-outside-1_2793_16617-140835" maskUnits="userSpaceOnUse" x="-0.961914" y="0.75" width="20" height="17" fill="black">
                                <rect fill="white" x="-0.961914" y="0.75" width="20" height="17" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.55433 2.75C4.2521 2.75 3.15523 3.72304 2.99998 5.01597L2.05679 12.8706C1.87289 14.402 3.06866 15.75 4.61114 15.75H14.2942C15.8449 15.75 17.0431 14.3885 16.8461 12.8504L15.84 4.99584C15.6756 3.71184 14.5827 2.75 13.2882 2.75H5.55433ZM6.17071 5.2029C6.186 5.14444 6.19406 5.08365 6.19406 5.02123C6.19406 4.56458 5.76227 4.19438 5.22963 4.19438C4.69699 4.19438 4.26519 4.56458 4.26519 5.02123C4.26519 5.47789 4.69699 5.84808 5.22963 5.84808C5.25159 5.84808 5.27337 5.84745 5.29496 5.84622C5.61493 7.17663 5.95043 8.28851 6.45727 9.09305C6.75544 9.56636 7.12307 9.95156 7.5962 10.2147C8.06937 10.4779 8.61461 10.6005 9.23929 10.6005C9.85609 10.6005 10.4058 10.4926 10.8932 10.2522C11.3824 10.011 11.7804 9.65046 12.1127 9.18729C12.6841 8.39081 13.0777 7.26455 13.4295 5.84596C13.4525 5.84736 13.4757 5.84808 13.4991 5.84808C14.0318 5.84808 14.4636 5.47789 14.4636 5.02123C14.4636 4.56458 14.0318 4.19438 13.4991 4.19438C12.9665 4.19438 12.5347 4.56458 12.5347 5.02123C12.5347 5.08194 12.5423 5.14112 12.5568 5.1981C12.1805 6.80618 11.8028 7.90367 11.3001 8.60436C11.0477 8.95617 10.7702 9.19793 10.451 9.35532C10.1301 9.51358 9.73858 9.60049 9.23929 9.60049C8.74787 9.60049 8.37761 9.5051 8.08231 9.34084C7.78697 9.17656 7.53316 8.92479 7.30337 8.56002C6.8454 7.83306 6.52577 6.73377 6.17071 5.2029Z" />
                            </mask>
                            <path d="M2.99998 5.01597L4.98571 5.25442L4.98571 5.25442L2.99998 5.01597ZM2.05679 12.8706L4.04252 13.109L4.04252 13.109L2.05679 12.8706ZM16.8461 12.8504L18.8299 12.5963L18.8299 12.5963L16.8461 12.8504ZM15.84 4.99584L13.8562 5.24994L13.8562 5.24994L15.84 4.99584ZM6.17071 5.2029L4.23577 4.69693L4.11097 5.1742L4.22243 5.65477L6.17071 5.2029ZM5.29496 5.84622L7.23951 5.37854L6.84875 3.75381L5.18043 3.8495L5.29496 5.84622ZM6.45727 9.09305L4.76507 10.1591L4.76507 10.1591L6.45727 9.09305ZM7.5962 10.2147L6.62399 11.9625L6.624 11.9625L7.5962 10.2147ZM10.8932 10.2522L11.7777 12.046L11.7777 12.046L10.8932 10.2522ZM12.1127 9.18729L13.7377 10.3531L13.7377 10.3531L12.1127 9.18729ZM13.4295 5.84596L13.5516 3.84969L11.8891 3.74796L11.4882 5.36464L13.4295 5.84596ZM12.5568 5.1981L14.5042 5.65382L14.6154 5.17851L14.4952 4.7054L12.5568 5.1981ZM11.3001 8.60436L9.67508 7.43851L9.67508 7.43851L11.3001 8.60436ZM10.451 9.35532L11.3355 11.1491L11.3355 11.1491L10.451 9.35532ZM8.08231 9.34084L7.1101 11.0886L7.1101 11.0886L8.08231 9.34084ZM7.30337 8.56002L8.99557 7.49398L8.99557 7.49398L7.30337 8.56002ZM4.98571 5.25442C5.02027 4.9666 5.26444 4.75 5.55433 4.75V0.75C3.23976 0.75 1.29019 2.47947 1.01424 4.77752L4.98571 5.25442ZM4.04252 13.109L4.98571 5.25442L1.01424 4.77752L0.0710536 12.6321L4.04252 13.109ZM4.61114 13.75C4.26777 13.75 4.00159 13.4499 4.04252 13.109L0.0710537 12.6321C-0.255811 15.3542 1.86955 17.75 4.61114 17.75V13.75ZM14.2942 13.75H4.61114V17.75H14.2942V13.75ZM14.8623 13.1045C14.9062 13.4469 14.6394 13.75 14.2942 13.75V17.75C17.0503 17.75 19.18 15.3301 18.8299 12.5963L14.8623 13.1045ZM13.8562 5.24994L14.8623 13.1045L18.8299 12.5963L17.8238 4.74175L13.8562 5.24994ZM13.2882 4.75C13.5763 4.75 13.8196 4.96412 13.8562 5.24994L17.8238 4.74175C17.5315 2.45956 15.589 0.75 13.2882 0.75V4.75ZM5.55433 4.75H13.2882V0.75H5.55433V4.75ZM4.19406 5.02123C4.19406 4.91029 4.20853 4.80111 4.23577 4.69693L8.10565 5.70888C8.16347 5.48777 8.19406 5.257 8.19406 5.02123H4.19406ZM5.22963 6.19438C5.03707 6.19438 4.8117 6.128 4.60983 5.95492C4.40376 5.77825 4.19406 5.45436 4.19406 5.02123H8.19406C8.19406 3.18227 6.56696 2.19438 5.22963 2.19438V6.19438ZM6.26519 5.02123C6.26519 5.45436 6.0555 5.77825 5.84943 5.95492C5.64755 6.128 5.42219 6.19438 5.22963 6.19438V2.19438C3.8923 2.19438 2.26519 3.18227 2.26519 5.02123H6.26519ZM5.22963 3.84808C5.42219 3.84808 5.64755 3.91447 5.84943 4.08754C6.0555 4.26422 6.26519 4.5881 6.26519 5.02123H2.26519C2.26519 6.86019 3.8923 7.84808 5.22963 7.84808V3.84808ZM5.18043 3.8495C5.19698 3.84855 5.21339 3.84808 5.22963 3.84808V7.84808C5.28978 7.84808 5.34976 7.84636 5.40949 7.84293L5.18043 3.8495ZM8.14947 8.027C7.83652 7.53023 7.56044 6.71291 7.23951 5.37854L3.35041 6.31389C3.66943 7.64036 4.06435 9.0468 4.76507 10.1591L8.14947 8.027ZM8.56841 8.46694C8.45103 8.40165 8.311 8.28341 8.14947 8.027L4.76507 10.1591C5.19989 10.8493 5.79511 11.5015 6.62399 11.9625L8.56841 8.46694ZM9.23929 8.60049C8.88091 8.60049 8.68569 8.53217 8.56841 8.46694L6.624 11.9625C7.45305 12.4237 8.34831 12.6005 9.23929 12.6005V8.60049ZM10.0088 8.45843C9.85437 8.53455 9.62121 8.60049 9.23929 8.60049V12.6005C10.091 12.6005 10.9573 12.4506 11.7777 12.046L10.0088 8.45843ZM10.4876 8.02144C10.315 8.26201 10.1579 8.38491 10.0088 8.45843L11.7777 12.046C12.6069 11.6371 13.2457 11.0389 13.7377 10.3531L10.4876 8.02144ZM11.4882 5.36464C11.1461 6.74447 10.8237 7.55301 10.4876 8.02144L13.7377 10.3531C14.5445 9.22862 15.0093 7.78463 15.3707 6.32728L11.4882 5.36464ZM13.4991 3.84808C13.5166 3.84808 13.5342 3.84862 13.5516 3.84969L13.3073 7.84222C13.3708 7.84611 13.4348 7.84808 13.4991 7.84808V3.84808ZM12.4636 5.02123C12.4636 4.5881 12.6733 4.26422 12.8793 4.08754C13.0812 3.91447 13.3066 3.84808 13.4991 3.84808V7.84808C14.8365 7.84808 16.4636 6.86019 16.4636 5.02123H12.4636ZM13.4991 6.19438C13.3066 6.19438 13.0812 6.128 12.8793 5.95493C12.6733 5.77825 12.4636 5.45436 12.4636 5.02123H16.4636C16.4636 3.18227 14.8365 2.19438 13.4991 2.19438V6.19438ZM14.5347 5.02123C14.5347 5.45436 14.325 5.77825 14.1189 5.95492C13.9171 6.128 13.6917 6.19438 13.4991 6.19438V2.19438C12.1618 2.19438 10.5347 3.18227 10.5347 5.02123H14.5347ZM14.4952 4.7054C14.521 4.80709 14.5347 4.91336 14.5347 5.02123H10.5347C10.5347 5.25052 10.5636 5.47515 10.6184 5.6908L14.4952 4.7054ZM12.9252 9.77021C13.6801 8.71791 14.1258 7.27071 14.5042 5.65382L10.6094 4.74238C10.2352 6.34165 9.92552 7.08943 9.67508 7.43851L12.9252 9.77021ZM11.3355 11.1491C11.9944 10.8242 12.5129 10.3449 12.9252 9.77021L9.67508 7.43851C9.62501 7.5083 9.59168 7.54047 9.57842 7.55215C9.57161 7.55815 9.56801 7.5606 9.56738 7.56102C9.56681 7.5614 9.56681 7.56139 9.56651 7.56153L11.3355 11.1491ZM9.23929 11.6005C9.97379 11.6005 10.6818 11.4715 11.3355 11.1491L9.56652 7.56153C9.5662 7.56169 9.56253 7.56351 9.55408 7.56637C9.5455 7.56928 9.53014 7.5739 9.50637 7.57882C9.45843 7.58875 9.37355 7.60049 9.23929 7.60049V11.6005ZM7.1101 11.0886C7.7609 11.4506 8.48102 11.6005 9.23929 11.6005V7.60049C9.12247 7.60049 9.06124 7.58912 9.04011 7.58421C9.02211 7.58002 9.03161 7.58029 9.05451 7.59304L7.1101 11.0886ZM5.61117 9.62607C5.97791 10.2082 6.45941 10.7267 7.1101 11.0886L9.05451 7.59304C9.07738 7.60576 9.08738 7.61631 9.08236 7.61129C9.07502 7.60395 9.0444 7.57149 8.99557 7.49398L5.61117 9.62607ZM4.22243 5.65477C4.56754 7.14276 4.94627 8.57064 5.61117 9.62607L8.99557 7.49398C8.74453 7.09549 8.484 6.32479 8.119 4.75103L4.22243 5.65477Z" fill="#432A0F" mask="url(#path-1-outside-1_2793_16617-140835)" />
                        </svg>
                    </div>
                    立即購買
                </button>
            </div>
        </div>
    </div>
    <!-- 加入最愛 -->
    <div class="modal fade" id="favModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content-fav modal-content position-relative mx-auto">
                <div class="modal-header-fav">
                    <div class="favOK mx-auto d-flex justify-content-center my-3">
                        <img class="w-100" src="./imgs/favOK.png" alt="">
                    </div>
                </div>
                <div class="modal-body-fav pt-0">
                    已將商品加入最愛！
                </div>
            </div>
        </div>
    </div>
    <!-- 加入購物車光箱 -->
    <div class="modal fade" id="cartModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content-fav modal-content position-relative mx-auto">
                <div class="modal-header-fav">
                    <div class="favOK mx-auto d-flex justify-content-center my-3">
                        <img class="w-100" src="./imgs/cartOK.png" alt="">
                    </div>
                </div>
                <div class="modal-body-fav pt-0">
                    已將商品加入購物車！
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="notlogin d-none" id="favnotlogin"> -->
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
<?php include __DIR__ . '/parts/scripts.php'; ?>
<script src="./product_detail.js"></script>


<script>
    // const isLogined = < ?= !empty($_SESSION['user']) ? 'true' : 'false' ?>;


    function addToCart_P_Yu(event) {
        const btn = $(event.currentTarget);
        const qty = btn.closest(".row").find(".product_q").text();
        // const qty=1;
        // console.log(btn);
        // console.log('hihi');
        const sid = btn.attr('data-sid');
        console.log({
            sid,
            qty
        });
        $.get(
            're-cart-p-api.php', {
                sid,
                qty
            },
            function(data) {
                showCartCount(data);
            },
            'json');
    }

    function addToCart_PF_Yu(event) {
        const btnF = $(event.currentTarget);
        const qty = btnF.closest(".product_detail_07").find(".product_qq").text().trim();
        // const qty=1;
        // console.log(btnF);
        console.log('hihi', qty);
        const sid = btnF.attr('data-sid');
        // console.log({
        //     sid,
        //     qty
        // });
        $.get(
            're-cart-p-api.php', {
                sid,
                qty
            },
            function(data) {
                showCartCount(data);
            },
            'json');
    }

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
            'json');

    };

    // 加入最愛光箱
    $('.favorite').click(function() {
        $("#favModal").modal("show");
        setTimeout(() => {
            $("#favModal").fadeOut(600, function() {
                $("#favModal").modal("hide")
            });
        }, 600);

    })

    $('.icon_heart').click(function() {
        $("#favModal").modal("show");
        setTimeout(() => {
            $("#favModal").fadeOut(600, function() {
                $("#favModal").modal("hide")
            });
        }, 600);

    })

    // 加入購物車光箱
    $('.cart').click(function() {
        $("#cartModal").modal("show");
        setTimeout(() => {
            $("#cartModal").fadeOut(600, function() {
                $("#cartModal").modal("hide")
            });
        }, 600);

    })
</script>
<?php include __DIR__ . '/parts/html-foot.php'; ?>
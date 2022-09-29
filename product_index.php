<?php
require __DIR__. '/parts/meow_db.php';  // 開頭
$pageName ='獨家商品'; //頁面名稱
$title = '獨家商品';

$sql_1 ="SELECT * FROM `product` WHERE  sid IN(6,11,12)";
$products_1 = $pdo->query($sql_1)->fetchAll();
$sql_2 ="SELECT * FROM `product` WHERE  sid IN(1,7,8)";
$products_2 = $pdo->query($sql_2)->fetchAll();

?>

<?php include __DIR__. '/parts/html-head.php'; ?>
<link rel="stylesheet" href="./product_index_style.css">
<!-- <link rel="stylesheet" href="./product_index.js"> -->
<?php include __DIR__. '/parts/navbar.php'; ?>

<div class="product_07">
        <div class="product_head" id="product_head">
            <!-- mobile -->
            <div class="mb_head d-block d-md-none">
                <div class="product_title mb_title">
                    <h6>
                        好想談戀愛？ <br>
                        好想擺脫噁男搭訕？ <br>
                        好想和另一半長長久久？ <br>
                        你的心願我們都聽到了！<br>
                    </h6>
                    <button class="mb_btn btn-m">
                        <a href="./product_list.php?sort=hotp">看更多熱門商品！</a>
                    </button>
                </div>
            </div>
            <!-- computer -->
            <div id="carouselExampleControls" class="carousel slide d-none d-md-block" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active w-100">
                        <img src="./imgs/product/P26_3_big.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item w-100">
                        <img src="./imgs/product/P12_big.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item w-100">
                        <img src="./imgs/product/P35_1_big.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item w-100">
                        <img src="./imgs/product/P45_1_big.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                <div class="product_title pc_title d-flex">
                    <h1 class="d-none d-md-block ">
                        好想談戀愛？ <br>
                        好想擺脫噁男搭訕？ <br>
                        好想和另一半長長久久？ <br>
                        你的心願我們都聽到了！<br>
                    </h1>
                    <button class="pc_btn btn-l d-none d-md-block">
                        <a href="./product_list.php?sort=hotp">看更多熱門商品！</a> 
                    </button>
                </div>
            </div>

        </div>
        <!-- -------------------------輪播牆結束------------------------- -->

        <div class="product_midcontrol">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-3">
                        <div class="midicon">
                            <a href="#product_brand">
                                <div class="midimg d-none d-md-block">
                                    <img class="h-100" src="./imgs/product/cate1.png" alt="">
                                </div>
                                <h3 class="d-none d-md-block">
                                    品牌聯名
                                </h3>
                                <div class="midimg_mb d-block d-md-none">
                                    <img class="h-100" src="./imgs/product/cate1.png" alt="">
                                </div>
                                <p class="d-md-none d-block">品牌聯名</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="midicon">
                            <a href="#product_young">
                                <div class="midimg d-none d-md-block">
                                    <img class="h-100" src="./imgs/product/cate2.png" alt="">
                                </div>
                                <h3 class="d-none d-md-block">
                                    文創商品
                                </h3>
                                <div class="midimg_mb d-block d-md-none">
                                    <img class="h-100" src="./imgs/product/cate2.png" alt="">
                                </div>
                                <p class="d-md-none d-block">文創商品</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="midicon">
                            <a href="#product_sweet">
                                <div class="midimg d-none d-md-block">
                                    <img class="h-100" src="./imgs/product/cate3.png" alt="">
                                </div>
                                <h3 class="d-none d-md-block">
                                    甜蜜供品
                                </h3>
                                <div class="midimg_mb d-block d-md-none">
                                    <img class="h-100" src="./imgs/product/cate3.png" alt="">
                                </div>
                                <p class="d-md-none d-block">甜蜜供品</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="midicon">
                            <a href="#product_meow">
                                <div class="midimg paw d-none d-md-block">
                                    <img class="h-100" src="./imgs/product/cate4.png" alt="">
                                </div>
                                <h3 class="d-none d-md-block">
                                    月老喵獨家
                                </h3>
                                <div class="midimg_mb paw_mb d-block d-md-none">
                                    <img class="h-100" src="./imgs/product/cate4.png" alt="">
                                </div>
                                <p class="d-md-none d-block pt-1">月老喵獨家</p>
                            </a>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <!-- -------------------------中間選單結束------------------------- -->
        <div id="product_brand" class="product_brand">
            <!-- mobile -->
            <div class="p_mb d-block d-md-none">
                <h6>
                    月老喵 X 霞海城隍廟加持， <br>
                    讓你感情升溫、幸福加分！
                </h6>
                <div class="p_img d-flex scroll-snap_07">
                    <div class="brand_1_mb">
                        <img class="h-100" src="./imgs/product/P26_3.png" alt="">
                    </div>
                    <div class="brand_2_mb">
                        <img class="h-100" src="./imgs/product/P24_1.jpg" alt="">
                    </div>
                    <div class="brand_3_mb">
                        <img class="h-100" src="./imgs/product/P18_1_small.jpg" alt="">
                    </div>
                </div>
                <small>
                    台北霞海城隍廟是網友公認台灣最靈驗月老廟， <br>
                    更被日韓旅遊書推薦為亞洲最強結緣神， <br>
                    月老喵與亞洲最強月老聯名，網羅所有結緣必備元素， <br>
                    達成你的所有戀愛願望！
                </small>
                <button class="mb_btn btn-l d-block d-md-none mt-3">
                    <a href="./product_list.php?cate=1">看更多品牌聯名</a> 
                </button>
            </div>
            <!-- computer -->
            <div class="pb_pc d-none d-md-block">
                <div class="brand_1">
                    <img class="w-100" src="./imgs/product/P20_big.png" alt="">
                </div>
                <div class="brand_2">
                    <img class="w-100" src="./imgs/product/P24_1.jpg" alt="">
                </div>
                <div class="brand_3">
                    <img class="w-100" src="./imgs/product/P18_1_small.jpg" alt="">
                </div>
                <div class="pb_sec">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="pb_title d-md-flex d-none">
                                    <h2>
                                        月老喵 X 霞海城隍廟加持， <br>
                                        讓你感情升溫、幸福加分！
                                    </h2>
                                    <h6>
                                        台北霞海城隍廟是網友公認台灣最靈驗月老廟， <br>
                                        更被日韓旅遊書推薦為亞洲最強結緣神， <br>
                                        月老喵與亞洲最強月老聯名，網羅所有結緣必備元素， <br>
                                        達成你的所有戀愛願望！
                                    </h6>
                                    <button class="btn-l">
                                        <a href="./product_list.php?cate=1">看更多品牌聯名</a> 
                                    </button>
                                </div>
                            </div>
                            <div class="col"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- -------------------------品牌聯名結束------------------------- -->
        <div id="product_young" class="product_young">
            <!-- mobile -->
            <div class="p_mb d-block d-md-none mt-5">
                <h6>
                    可愛又精緻的結緣小物， <br>
                    幫你牽起美好緣分！
                </h6>
                <div class="p_img d-flex scroll-snap_07">
                    <div class="young_1_mb">
                        <img class="h-100" src="./imgs/product/P06_1.jpg" alt="">
                    </div>
                    <div class="young_2_mb">
                        <img class="h-100" src="./imgs/product/P01_1.jpg" alt="">
                    </div>
                    <div class="young_3_mb">
                        <img class="h-100" src="./imgs/product/P08_2.jpg" alt="">
                    </div>
                </div>
                <small>
                    月老喵精選台灣在地文創店家， <br>
                    攜手打造可愛又精緻的結緣商品， <br>
                    無論是手鍊、香氛精油、愛情御守通通都有， <br>
                    精心為你打造質感生活與戀情守護。 <br>
                </small>
                <button class="mb_btn btn-l d-block d-md-none mt-3">
                    <a href="./product_list.php?cate=2">看更多文創商品</a> 
                </button>
            </div>
            <!-- computer -->
            <div class="container py_pc d-none d-md-block">
                <div class="row">
                    <div class="col">
                        <div class="young_1">
                            <img class="w-100 d-none d-md-flex" src="./imgs/product/P06_1.jpg" alt="">
                        </div>
                    </div>
                    <div class="col">
                        <div class="young_2">
                            <img class="w-100 d-none d-md-flex" src="./imgs/product/P01_1.jpg" alt="">
                        </div>
                    </div>
                    <div class="col">
                        <div class="young_3">
                            <img class="w-100 d-none d-md-flex" src="./imgs/product/P08_2.jpg" alt="">
                        </div>
                    </div>

                    <div class="py_title d-flex">
                        <!-- <div class="col"></div> -->
                        <div class="py_btn offset-md-5">
                            <div class="col d-flex">
                                <h2>
                                    可愛又精緻的結緣小物， <br>
                                    幫你牽起美好緣分！
                                </h2>
                                <h6>
                                    月老喵精選台灣在地文創店家， <br>
                                    攜手打造可愛又精緻的結緣商品， <br>
                                    無論是手鍊、香氛精油、愛情御守通通都有， <br>
                                    精心為你打造質感生活與戀情守護。 <br>
                                </h6>
                                <button class="btn-l">
                                    <a href="./product_list.php?cate=2">看更多文創商品</a> 
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="product_sweet" id="product_sweet">
            <!-- mobile -->
            <div class="p_mb d-block d-md-none mt-5">
                <h6>
                    不論是拜月老的供品， <br>
                    還是送伴侶的甜品， <br>
                    我們都幫你準備好了！
                </h6>
                <div class="ps_img mb-3">
                    <div class="sweet_mb mx-auto">
                        <img class="w-100" src="./imgs/product/sweet_main.jpg" alt="">
                    </div>
                </div>
                <small>
                    你知道嗎？月老很喜歡吃甜食喔！ <br>
                    拜月老的供品除了傳統經典的紅棗、枸杞和桂圓之外， <br>
                    月老喵也有巧克力、糖果、甜麻糬等禮盒， <br>
                    幫你解決準備供品的煩惱。 <br>
                    包裝精美又美味的禮盒也適合送給另一半， <br>
                    讓你們的感情更甜蜜！
                </small>
                <button class="mb_btn btn-l d-block d-md-none mt-3">
                    <a href="./product_list.php?cate=3">看更多甜蜜供品</a> 
                </button>
            </div>

            <!-- computer -->
            <div class="row ps_pc d-none d-md-flex">
                <div class="col-md-8 mx-0">
                    <div class="ps_img">
                        <img class="w-100" src="./imgs/product/sweet_main.jpg" alt="">
                    </div>
                </div>
                <div class="ps_title col-md-4">
                    <div class="">
                        <h2>
                            不論是拜月老的供品， <br>
                            還是送伴侶的甜品， <br>
                            我們都幫你準備好了！
                        </h2>
                        <h6>
                            你知道嗎？月老很喜歡吃甜食喔！ <br>
                            拜月老的供品除了傳統經典的紅棗、枸杞和桂圓之外， <br>
                            月老喵也有巧克力、糖果、甜麻糬等禮盒， <br>
                            幫你解決準備供品的煩惱。 <br>
                            包裝精美又美味的禮盒也適合送給另一半， <br>
                            讓你們的感情更甜蜜！
                        </h6>
                        <button class="btn-l">
                            <a href="./product_list.php?cate=3">看更多甜蜜供品</a> 
                        </button>
                    </div>
                </div>
            </div>

        </div>

        <div class="product_meow" id="product_meow">
            <!-- mobile -->
            <div class="p_mb d-block d-md-none mt-5">
                <h6>
                    還有最可靠的小幫手小玉、 <br>
                    小黑和金寶守護你的愛情！
                </h6>
                <div class="pm_img mb-3">
                    <div class="meow_mb mx-auto">
                        <img class="w-100" src="./imgs/product/P45_1.jpg" alt="">
                    </div>
                </div>
                <small>
                    有感情上的煩惱嗎？ <br>
                    別擔心！ <br>
                    小玉、小黑和金寶都在月老身邊修煉了好幾千年， <br>
                    三隻喵都有不同的本領！熱心助人的小玉擅長牽紅線， <br>
                    帥氣的小黑是斬斷爛桃花的高手， <br>
                    而個性和善的金寶則是讓戀情幸福美滿、 <br>
                    長長久久的最大功臣， <br>
                    交給他們準沒錯！
                </small>
                <button class="mb_btn btn-l d-block d-md-none mt-3">
                    <a href="./product_list.php?cate=4">看更多月老喵獨家</a> 
                </button>
            </div>

            <!-- computer -->
            <div class="pm_pc d-none d-md-flex">
                <div class="meow_test w-100">
                    <div class="meow_img">
                        <img class="w-100" src="./imgs/product/meow_main.png" alt="">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="pm_title d-flex">
                                    <h2>
                                        還有最可靠的小幫手小玉、 <br>
                                        小黑和金寶守護你的愛情！
                                    </h2>
                                    <h6>
                                        有感情上的煩惱嗎？ <br>
                                        別擔心！ <br>
                                        小玉、小黑和金寶都在月老身邊修煉了好幾千年， <br>
                                        三隻喵都有不同的本領！熱心助人的小玉擅長牽紅線， <br>
                                        帥氣的小黑是斬斷爛桃花的高手， <br>
                                        而個性和善的金寶則是讓戀情幸福美滿、 <br>
                                        長長久久的最大功臣， <br>
                                        交給他們準沒錯！
                                    </h6>
                                    <button class="btn-l">
                                        <a href="./product_list.php?cate=4">看更多月老喵獨家</a> 
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="meow_1">
                    <img src="./imgs/product/meow_1.png" alt="">
                </div>
                <div class="meow_2">
                    <img src="./imgs/product/meow_2.png" alt="">
                </div>
                <div class="meow_3">
                    <img class="w-100" src="./imgs/product/meow_3.png" alt="">
                </div>
            </div>
        </div>

        <div class="product_card">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="card_title mb-0">
                            <h2 class="d-none d-md-block">快來瞧瞧熱門商品吧！</h2>
                            <h3 class="d-md-none d-block mt-5">快來瞧瞧熱門商品吧！</h3>
                        </div>
                    </div>

                </div>
                <!-- 桌機卡片 -->
                <!-- 瀏覽其他商品＆下方列固定 -->
                <!-- https://rainbowfun.ispan.com.tw/course/JavaScript -->
                <div class="otherp d-md-block d-none">
                    <div class="container">
                        <!-- https://www.tutorialrepublic.com/codelab.php?topic=bootstrap&file=thumbnail-carousel-with-content -->
                        <div class="row">
                            <div class="col mx-auto">
                                <div id="myCarousel" class="carousel carousel_card slide" data-ride="carousel"
                                    data-interval="0">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <div class="row">
                                                <?php foreach ($products_1  as $p) : ?>   
                                                    <div class="col-md-4">
                                                        <a href="">
                                                            <div class="thumb-wrapper mx-3">
                                                                <div class="img-box">
                                                                    <img src="./imgs/product/cards/<?= $p['product_card_img'] ?>.jpg" class="img-fluid"
                                                                        alt="">
                                                                    <div class="icon_heart">
                                                                        <svg class="heart_line" width="32" height="32"
                                                                            viewBox="0 0 32 32" fill="none" stroke="#fff"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M15.2855 9.22197C12.9704 6.90689 9.21692 6.90689 6.90184 9.22197C4.58676 11.537 4.58676 15.2905 6.90184 17.6056L13.2503 23.9532C14.8378 25.5407 17.4116 25.5407 18.9991 23.9532L24.5083 18.444L24.5074 18.4431L25.3449 17.6056C27.66 15.2905 27.66 11.5371 25.3449 9.22197C23.0298 6.90689 19.2763 6.90689 16.9612 9.22197L16.1234 10.0598L15.2855 9.22197Z"
                                                                                stroke-width="2.66667" />
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                                <div class="thumb-content">
                                                                    <h6><?= $p['product_name'] ?></h6>

                                                                    <div
                                                                        class="card_under d-flex justify-content-around align-items-center">
                                                                        <small class="xs card-text d-flex pr-1">
                                                                            <div class="icon_star">
                                                                                <span><i class="fa-solid fa-star"></i></span>
                                                                            </div><?= $p['product_comment']?>
                                                                        </small>
                                                                        <small class="xs card-text d-flex">
                                                                            <div class="icon_fire">
                                                                                <span><i class="fa-solid fa-fire"></i></span>
                                                                            </div>
                                                                            <?= $p['product_popular']?>個已訂購
                                                                        </small>
                                                                        <h5 class="m-0 ml-auto"><?= $p['product_price']?></h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>

                                                    </div>
                                                <?php endforeach; ?>   
                                                <!-- <div class="col-md-4">
                                                    <a href="">
                                                        <div class="thumb-wrapper mx-3">
                                                            <div class="img-box">
                                                                <img src="./imgs/product/P20_4.jpg" class="img-fluid"
                                                                    alt="">
                                                                <div class="icon_heart">
                                                                    <svg class="heart_line" width="32" height="32"
                                                                        viewBox="0 0 32 32" fill="none" stroke="#fff"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M15.2855 9.22197C12.9704 6.90689 9.21692 6.90689 6.90184 9.22197C4.58676 11.537 4.58676 15.2905 6.90184 17.6056L13.2503 23.9532C14.8378 25.5407 17.4116 25.5407 18.9991 23.9532L24.5083 18.444L24.5074 18.4431L25.3449 17.6056C27.66 15.2905 27.66 11.5371 25.3449 9.22197C23.0298 6.90689 19.2763 6.90689 16.9612 9.22197L16.1234 10.0598L15.2855 9.22197Z"
                                                                            stroke-width="2.66667" />
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                            <div class="thumb-content">
                                                                <h6>霞海城隍廟 X 護手霜禮盒</h6>

                                                                <div
                                                                    class="card_under d-flex justify-content-between align-items-center">
                                                                    <small class="xs card-text d-flex pr-1">
                                                                        <div class="icon_star">
                                                                            <span><i
                                                                                    class="fa-solid fa-star"></i></span>
                                                                        </div> 4.7(50)
                                                                    </small>
                                                                    <small class="xs card-text d-flex">
                                                                        <div class="icon_fire ">
                                                                            <span><i
                                                                                    class="fa-solid fa-fire"></i></span>
                                                                        </div>
                                                                        3K個已訂購
                                                                    </small>
                                                                    <h5 class="m-0 ml-auto">850</h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>

                                                </div> -->
                                                <!-- <div class="col-md-4">
                                                    <a href="">
                                                        <div class="thumb-wrapper mx-3">
                                                            <div class="img-box">
                                                                <img src="./imgs/product/P20_4.jpg" class="img-fluid"
                                                                    alt="">
                                                                <div class="icon_heart">
                                                                    <svg class="heart_line" width="32" height="32"
                                                                        viewBox="0 0 32 32" fill="none" stroke="#fff"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M15.2855 9.22197C12.9704 6.90689 9.21692 6.90689 6.90184 9.22197C4.58676 11.537 4.58676 15.2905 6.90184 17.6056L13.2503 23.9532C14.8378 25.5407 17.4116 25.5407 18.9991 23.9532L24.5083 18.444L24.5074 18.4431L25.3449 17.6056C27.66 15.2905 27.66 11.5371 25.3449 9.22197C23.0298 6.90689 19.2763 6.90689 16.9612 9.22197L16.1234 10.0598L15.2855 9.22197Z"
                                                                            stroke-width="2.66667" />
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                            <div class="thumb-content">
                                                                <h6>霞海城隍廟 X 護手霜禮盒</h6>

                                                                <div
                                                                    class="card_under d-flex justify-content-between align-items-center">
                                                                    <small class="xs card-text d-flex pr-1">
                                                                        <div class="icon_star">
                                                                            <span><i
                                                                                    class="fa-solid fa-star"></i></span>
                                                                        </div> 4.7(50)
                                                                    </small>
                                                                    <small class="xs card-text d-flex">
                                                                        <div class="icon_fire ">
                                                                            <span><i
                                                                                    class="fa-solid fa-fire"></i></span>
                                                                        </div>
                                                                        3K個已訂購
                                                                    </small>
                                                                    <h5 class="m-0 ml-auto">850</h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>

                                                </div> -->
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="row">
                                                <?php foreach ($products_2 as $p) : ?>   
                                                    <div class="col-md-4">
                                                        <a href="">
                                                            <div class="thumb-wrapper mx-3">
                                                                <div class="img-box">
                                                                    <img src="./imgs/product/cards/<?= $p['product_card_img'] ?>.jpg" class="img-fluid"
                                                                        alt="">
                                                                    <div class="icon_heart">
                                                                        <svg class="heart_line" width="32" height="32"
                                                                            viewBox="0 0 32 32" fill="none" stroke="#fff"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M15.2855 9.22197C12.9704 6.90689 9.21692 6.90689 6.90184 9.22197C4.58676 11.537 4.58676 15.2905 6.90184 17.6056L13.2503 23.9532C14.8378 25.5407 17.4116 25.5407 18.9991 23.9532L24.5083 18.444L24.5074 18.4431L25.3449 17.6056C27.66 15.2905 27.66 11.5371 25.3449 9.22197C23.0298 6.90689 19.2763 6.90689 16.9612 9.22197L16.1234 10.0598L15.2855 9.22197Z"
                                                                                stroke-width="2.66667" />
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                                <div class="thumb-content">
                                                                    <h6><?= $p['product_name'] ?></h6>

                                                                    <div
                                                                        class="card_under d-flex justify-content-around align-items-center">
                                                                        <small class="xs card-text d-flex pr-1">
                                                                            <div class="icon_star">
                                                                                <span><i class="fa-solid fa-star"></i></span>
                                                                            </div><?= $p['product_comment']?>
                                                                        </small>
                                                                        <small class="xs card-text d-flex">
                                                                            <div class="icon_fire">
                                                                                <span><i class="fa-solid fa-fire"></i></span>
                                                                            </div>
                                                                            <?= $p['product_popular']?>個已訂購
                                                                        </small>
                                                                        <h5 class="m-0 ml-auto"><?= $p['product_price']?></h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                <?php endforeach; ?> 
                                                    <!-- <div class="col-md-4">
                                                        <a href="">
                                                            <div class="thumb-wrapper mx-3">
                                                                <div class="img-box">
                                                                    <img src="./imgs/product/P20_4.jpg" class="img-fluid"
                                                                        alt="">
                                                                    <div class="icon_heart">
                                                                        <svg class="heart_line" width="32" height="32"
                                                                            viewBox="0 0 32 32" fill="none" stroke="#fff"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M15.2855 9.22197C12.9704 6.90689 9.21692 6.90689 6.90184 9.22197C4.58676 11.537 4.58676 15.2905 6.90184 17.6056L13.2503 23.9532C14.8378 25.5407 17.4116 25.5407 18.9991 23.9532L24.5083 18.444L24.5074 18.4431L25.3449 17.6056C27.66 15.2905 27.66 11.5371 25.3449 9.22197C23.0298 6.90689 19.2763 6.90689 16.9612 9.22197L16.1234 10.0598L15.2855 9.22197Z"
                                                                                stroke-width="2.66667" />
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                                <div class="thumb-content">
                                                                    <h6>霞海城隍廟 X 護手霜禮盒</h6>

                                                                    <div
                                                                        class="card_under d-flex justify-content-between align-items-center">
                                                                        <small class="xs card-text d-flex pr-1">
                                                                            <div class="icon_star">
                                                                                <span><i
                                                                                        class="fa-solid fa-star"></i></span>
                                                                            </div> 4.7(50)
                                                                        </small>
                                                                        <small class="xs card-text d-flex">
                                                                            <div class="icon_fire ">
                                                                                <span><i
                                                                                        class="fa-solid fa-fire"></i></span>
                                                                            </div>
                                                                            3K個已訂購
                                                                        </small>
                                                                        <h5 class="m-0 ml-auto">850</h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>

                                                    </div>
                                                    <div class="col-md-4">
                                                        <a href="">
                                                            <div class="thumb-wrapper mx-3">
                                                                <div class="img-box">
                                                                    <img src="./imgs/product/P20_4.jpg" class="img-fluid"
                                                                        alt="">
                                                                    <div class="icon_heart">
                                                                        <svg class="heart_line" width="32" height="32"
                                                                            viewBox="0 0 32 32" fill="none" stroke="#fff"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M15.2855 9.22197C12.9704 6.90689 9.21692 6.90689 6.90184 9.22197C4.58676 11.537 4.58676 15.2905 6.90184 17.6056L13.2503 23.9532C14.8378 25.5407 17.4116 25.5407 18.9991 23.9532L24.5083 18.444L24.5074 18.4431L25.3449 17.6056C27.66 15.2905 27.66 11.5371 25.3449 9.22197C23.0298 6.90689 19.2763 6.90689 16.9612 9.22197L16.1234 10.0598L15.2855 9.22197Z"
                                                                                stroke-width="2.66667" />
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                                <div class="thumb-content">
                                                                    <h6>霞海城隍廟 X 護手霜禮盒</h6>

                                                                    <div
                                                                        class="card_under d-flex justify-content-between align-items-center">
                                                                        <small class="xs card-text d-flex pr-1">
                                                                            <div class="icon_star">
                                                                                <span><i
                                                                                        class="fa-solid fa-star"></i></span>
                                                                            </div> 4.7(50)
                                                                        </small>
                                                                        <small class="xs card-text d-flex">
                                                                            <div class="icon_fire ">
                                                                                <span><i
                                                                                        class="fa-solid fa-fire"></i></span>
                                                                            </div>
                                                                            3K個已訂購
                                                                        </small>
                                                                        <h5 class="m-0 ml-auto">850</h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>

                                                    </div> --> 
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


                <!-- https://codepen.io/WillyW/details/wZebow -->
                <!-- https://codepen.io/rblinzler/pen/abVGzNM -->
                <!-- 手機卡片 -->
                <div class="container carousel_mb d-block d-md-none pt-3 pb-5">
                    <div class="card-carousel">
                        <div class="card" id="1">
                            <div class="image-container"></div>
                            <div class="pit_mb">
                            <p class="mb-2">霞海城隍廟 X 護手霜禮盒</p>
                            </div>
                            <div class="piu_mb d-flex justify-content-between align-items-center mb-2">
                                <div class="star">
                                <small class="xs d-flex">
                                    <div class="icon_fivestar" style="color: var(--color-yellow);">
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    （5）
                                </small>
                                </div>
                                <div class="fire justify-content-center align-items-center mr-2">
                                <small class="xs d-flex">
                                    <div class="icon_fire xs">
                                        <i class="fa-solid fa-fire pr-1"></i>
                                    </div>
                                    已賣出3K + 個
                                </small>
                                </div>
                                <div class="price">
                                    <h4>707</h4>
                                </div>
                            </div>
                        </div>
                        <div class="card" id="2">
                            <div class="image-container"></div>
                            <div class="pit_mb">
                                <p class="mb-2">霞海城隍聯名 X 姻緣簿茶蜜組</p>
                            </div>
                            <div class="piu_mb d-flex justify-content-between align-items-center mb-2">
                                <div class="star">
                                <small class="xs d-flex">
                                    <div class="icon_fivestar" style="color: var(--color-yellow);">
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    （5）
                                </small>
                                </div>
                                <div class="fire justify-content-center align-items-center mr-2">
                                <small class="xs d-flex">
                                    <div class="icon_fire xs">
                                        <i class="fa-solid fa-fire pr-1"></i>
                                    </div>
                                    已賣出3K + 個
                                </small>
                                </div>
                                <div class="price">
                                    <h4>707</h4>
                                </div>
                            </div>
                        </div>
                        <div class="card" id="3">
                            <div class="image-container"></div>
                            <div class="pit_mb">
                                <p class="mb-2">霞海城隍廟 X 扣式真皮中夾禮盒</p>
                            </div>
                            <div class="piu_mb d-flex justify-content-between align-items-center mb-2">
                                <div class="star">
                                <small class="xs d-flex">
                                    <div class="icon_fivestar" style="color: var(--color-yellow);">
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    （5）
                                </small>
                                </div>
                                <div class="fire justify-content-center align-items-center mr-2">
                                <small class="xs d-flex">
                                    <div class="icon_fire xs">
                                        <i class="fa-solid fa-fire pr-1"></i>
                                    </div>
                                    已賣出3K + 個
                                </small>
                                </div>
                                <div class="price">
                                    <h4>707</h4>
                                </div>
                            </div>
                        </div>
                        <div class="card" id="4">
                            <div class="image-container"></div>
                            <div class="pit_mb">
                                <p class="mb-2">霞海城隍廟聯名 X 月老牽線絹印組</p>
                            </div>
                            <div class="piu_mb d-flex justify-content-between align-items-center mb-2">
                                <div class="star">
                                <small class="xs d-flex">
                                    <div class="icon_fivestar" style="color: var(--color-yellow);">
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    （5）
                                </small>
                                </div>
                                <div class="fire justify-content-center align-items-center mr-2">
                                <small class="xs d-flex">
                                    <div class="icon_fire xs">
                                        <i class="fa-solid fa-fire pr-1"></i>
                                    </div>
                                    已賣出3K + 個
                                </small>
                                </div>
                                <div class="price">
                                    <h4>707</h4>
                                </div>
                            </div>
                        </div>
                        <div class="card" id="5">
                            <div class="image-container"></div>
                            <div class="pit_mb">
                                <p class="mb-2">月老喵療癒你盥洗組</p>
                            </div>
                            <div class="piu_mb d-flex justify-content-between align-items-center mb-2">
                                <div class="star">
                                <small class="xs d-flex">
                                    <div class="icon_fivestar" style="color: var(--color-yellow);">
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    （5）
                                </small>
                                </div>
                                <div class="fire justify-content-center align-items-center mr-2">
                                <small class="xs d-flex">
                                    <div class="icon_fire xs">
                                        <i class="fa-solid fa-fire pr-1"></i>
                                    </div>
                                    已賣出3K + 個
                                </small>
                                </div>
                                <div class="price">
                                    <h4>707</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="visuallyhidden card-controller">Carousel controller</a>
                </div>
            </div>

        </div>
</div>

<?php include __DIR__. '/parts/scripts.php'; ?>
<script src="./product_index.js"></script>
<?php include __DIR__. '/parts/html-foot.php'; ?>
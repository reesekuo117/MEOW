<?php
require __DIR__ . '/parts/meow_db.php';  // /開頭
$pageName = '月老喵'; //頁面名稱
?>

<?php include __DIR__ . '/parts/html-head.php'; ?>

<link rel="stylesheet" href="./index.css">
<!-- <link rel="stylesheet" href="product_index_style.css"> -->
<!-- <link rel="stylesheet" href="travel_list_style.css"> -->
<!-- <link rel="stylesheet" href="./travel_detail_style.css"> -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


<?php include __DIR__ . '/parts/navbar.php'; ?>
<div class="body_ba">
    <div class="d-md-block d-none">
        <div class="section1_ba position-relative">
            <h1 class="outline-white position-absolute moonOld">
                <span class="moonOldSay h1"></span>
            </h1>
            <h1 class="outline-white position-absolute meowMeow">
                <span class="meowSay h1"></span>
            </h1>
            <svg class="slide-down-r position-absolute" width="50" height="63" viewBox="0 0 50 63" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4 4L25 25L46 4" stroke="white" stroke-width="8" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M4 38L25 59L46 38" stroke="white" stroke-width="8" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <svg class="slide-down-l position-absolute" width="50" height="63" viewBox="0 0 50 63" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4 4L25 25L46 4" stroke="white" stroke-width="8" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M4 38L25 59L46 38" stroke="white" stroke-width="8" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <div class="bg1_ba d-flex">
                <div class="left position-relative">
                    <div class="cloud-left position-absolute">
                        <img class="cloud-left-animation" src="./imgs/index/cloud-l.png" alt="">
                        <svg class="svg1 position-absolute" width="465" height="948" viewBox="0 0 465 948" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path class="path" d="M462 100L390 7" stroke="white" stroke-width="6" stroke-linecap="round" />
                            <path class="path" d="M458 183L283 11" stroke="white" stroke-width="6" stroke-linecap="round" />
                            <path class="path" d="M361 179L133 3" stroke="white" stroke-width="6" stroke-linecap="round" />
                            <path class="path" d="M133 118L3 43" stroke="white" stroke-width="6" stroke-linecap="round" />
                            <path class="path" d="M312 368L247 352" stroke="white" stroke-width="6" stroke-linecap="round" />
                            <path class="path" d="M377 428L62 384" stroke="white" stroke-width="6" stroke-linecap="round" />
                            <path class="path" d="M326 601L37 721" stroke="white" stroke-width="6" stroke-linecap="round" />
                            <path class="path" d="M292 689L52 826" stroke="white" stroke-width="6" stroke-linecap="round" />
                            <path class="path" d="M377 709L247 826" stroke="white" stroke-width="6" stroke-linecap="round" />
                        </svg>
                    </div>
                    <div class="flower-left position-absolute">
                        <img class="flower-left1" src="./imgs/index/flower-l.png" alt="">
                    </div>
                </div>
                <div class="right position-relative">
                    <div class="cloud-right position-absolute">
                        <img class="cloud-right-animation" src="./imgs/index/cloud-r.png" alt="">
                        <svg class="svg2 position-absolute" width="465" height="829" viewBox="0 0 465 829" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path class="path" d="M3 100L75 7" stroke="white" stroke-width="6" stroke-linecap="round" />
                            <path class="path" d="M7 183L182 11" stroke="white" stroke-width="6" stroke-linecap="round" />
                            <path class="path" d="M104 179L332 3" stroke="white" stroke-width="6" stroke-linecap="round" />
                            <path class="path" d="M332 118L462 43" stroke="white" stroke-width="6" stroke-linecap="round" />
                            <path class="path" d="M153 368L218 352" stroke="white" stroke-width="6" stroke-linecap="round" />
                            <path class="path" d="M88 428L403 384" stroke="white" stroke-width="6" stroke-linecap="round" />
                            <path class="path" d="M139 601L428 721" stroke="white" stroke-width="6" stroke-linecap="round" />
                            <path class="path" d="M173 689L413 826" stroke="white" stroke-width="6" stroke-linecap="round" />
                            <path class="path" d="M88 709L218 826" stroke="white" stroke-width="6" stroke-linecap="round" />
                        </svg>
                    </div>
                    <div class="flower-right position-absolute">
                        <img class="flower-right1" src="./imgs/index/flower-r.png" alt="">
                    </div>
                </div>
            </div>


        </div>
        <div class="section2_ba bg2_ba position-relative">
            <div class="section2_title position-absolute">
                <h1 data-aos="fade-up" data-aos-anchor-placement="center-bottom" class="outline-white">
                    月老的大小事我們幫你收集好了！
                </h1>
            </div>

            <div data-aos="fade-right" data-aos-anchor-placement="center-bottom" class="position-absolute cloud cloud01">
                <img src="./imgs/index/cloud_9.png" alt="">
            </div>
            <div data-aos="fade-right" data-aos-anchor-placement="center-bottom" class="position-absolute cloud cloud02">
                <img src="./imgs/index/cloud_10.png" alt="">
            </div>
            <div data-aos="fade-left" data-aos-anchor-placement="center-bottom" class="position-absolute cloud cloud03">
                <img src="./imgs/index/cloud_9.png" alt="">
            </div>
            <div data-aos="fade-left" data-aos-anchor-placement="center-bottom" class="position-absolute cloud cloud04">
                <img src="./imgs/index/cloud_10.png" alt="">
            </div>
            <div data-aos="fade-right" data-aos-anchor-placement="center-bottom" class="position-absolute cloud cloud05">
                <img src="./imgs/index/cloud_9.png" alt="">
            </div>
            <div data-aos="fade-up" data-aos-anchor-placement="center-bottom" class="position-absolute cloud cloud06">
                <img src="./imgs/index/cloud_5.png" alt="">
            </div>
            <div data-aos="fade-up" data-aos-anchor-placement="center-bottom" class="position-absolute cloud cloud07">
                <img src="./imgs/index/cloud_1.png" alt="">
            </div>
            <div data-aos="fade-up" data-aos-anchor-placement="center-bottom" class="position-absolute cloud cloud08">
                <img src="./imgs/index/cloud_2.png" alt="">
            </div>
            <div data-aos="fade-left" data-aos-anchor-placement="center-bottom" class="position-absolute cloud cloud08-1">
                <img src="./imgs/index/cloud_10.png" alt="">
            </div>


            <div data-aos="fade-up" class="container-fluid meowTemple">

            </div>
            <div type="button" class="position-absolute btn btn-xl h4 btn01_ba">
                <a href="culture.php">
                    月老參拜全攻略
                </a>
            </div>


        </div>
        <div class="section3_ba position-relative">
            <div class="position-absolute cloud09">
                <img data-aos="fade-up" data-aos-anchor-placement="center-bottom" src="./imgs/index/cloud_11.png" alt="">
            </div>
            <div data-aos="fade-right" data-aos-anchor-placement="center-bottom" class="position-absolute cloud cloud10">
                <img src="./imgs/index/cloud_9.png" alt="">
            </div>
            <div data-aos="fade-right" data-aos-anchor-placement="center-bottom" class="position-absolute cloud cloud11">
                <img src="./imgs/index/cloud_10.png" alt="">
            </div>

            <div data-aos="fade-left" data-aos-anchor-placement="center-bottom" class="position-absolute cloud cloud12">
                <img src="./imgs/index/cloud_10.png" alt="">
            </div>
            <div class="container-fluid">
                <div data-aos="fade-up" data-aos-anchor-placement="center-bottom" class="leftCat flex-row position-absolute">
                    <h2 class="text-align">斬桃花高手 —— 小黑</h2>
                    <h6 class="text-align">「感情破壞」戲法人人會變，巧妙各有不同，<br>
                        讓本喵變一齣感情大魔術，<br>
                        斬除所有爛桃花，驅逐小三小四小五！</h6>
                    <div class="leftCatImg">
                        <img src="./imgs/index/8.png" alt="">
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-anchor-placement="center-bottom" class="middleCat flex-row m-auto">
                    <h2 class="text-align">牽紅線專家 —— 小玉</h2>
                    <h6 class="text-align">身邊的朋友都有另一半，<br>
                        今年過節又剩你一個人落單，<br>
                        另一半到底還要迷路多久！<br>
                        如果你有這個煩惱，<br>
                        就讓我來幫你牽線，讓好緣份快來！
                        <div class="middleCatImg">
                            <img src="./imgs/index/10.png" alt="">
                        </div>
                </div>
                <div data-aos="fade-up" data-aos-anchor-placement="center-bottom" class="rightCat flex-row position-absolute">
                    <h2 class="text-align">幸福美滿導師 —— 金寶</h2>
                    <h6 class="text-align">願天下有情人終成眷屬，<br>
                        望世間眷屬全是有情人。<br>
                        讓本胖來賜予你：<br>
                        婚姻路上相互扶持，白首不離～</h6>
                    <div class="rightCatImg">
                        <img src="./imgs/index/12.png" alt="">
                    </div>
                </div>
            </div>
            <div type="button" class="position-absolute btn btn-xl h4 btn02_ba">
                <a href="draw01.php">
                    開始線上求籤！
                </a>
            </div>

        </div>
        <div class="section4_ba position-relative">
            <div data-aos="fade-right" data-aos-anchor-placement="center-bottom" class="position-absolute cloud cloud13">
                <img src="./imgs/index/cloud_9.png" alt="">
            </div>
            <div data-aos="fade-right" data-aos-anchor-placement="center-bottom" class="position-absolute cloud cloud14">
                <img src="./imgs/index/cloud_10.png" alt="">
            </div>
            <div data-aos="fade-left" data-aos-anchor-placement="center-bottom" class="position-absolute cloud cloud15">
                <img src="./imgs/index/cloud_9.png" alt="">
            </div>
            <div data-aos="fade-left" data-aos-anchor-placement="center-bottom" class="position-absolute cloud cloud16">
                <img src="./imgs/index/cloud_10.png" alt="">
            </div>
            <div data-aos="fade-right" data-aos-anchor-placement="center-bottom" class="yusoulCat position-absolute">
                <img class="" src="./imgs/index/13.png" alt="">
            </div>
            <div class="container">
                <div class="row_ba d-flex">
                    <div class="col-6 flex-row justify-content-center">
                        <h1>線上求籤還不夠！</h1>
                        <h6>身邊朋友都出雙入對，過得甜甜蜜蜜，身為單身狗的你是不是常常被閃瞎，狗糧都快吃飽啦？好險近年過節都能用防疫當藉口，躲在家裡偷偷流眼淚⋯⋯但是疫情期間就無法親自拜月老求紅線，理想對象到底要迷路到什麼時候？<br><br>

                            別擔心！你的心聲月老喵都聽到啦！<br><br>

                            月老喵與台北霞海城隍攜手合作，以「結緣」為概念聯手打造各式各樣質感好物，不只有牽起愛情、友情和親情緣分的功效，也能幫忙傳遞你火熱的心意！</h6>
                        <div type="button" class=" btn btn-xl h4 btn03_ba flex-wrap">
                            <a href="product_index.php">
                                看更多結緣商品！
                            </a>
                        </div>
                    </div>
                    <div class="col-6">
                        <div data-aos="fade-left" data-aos-anchor-placement="center-bottom" class="cartCat">
                            <img src="./imgs/index/14.png" alt="">
                        </div>
                    </div>

                </div>
                <div class="row_ba">
                    <h1 class="m-auto">快讓月老喵幫你加持！</h1>
                    <!-- TODO: 07卡片 -->
                    <div class="otherp d-md-block d-none">
                        <div class="container">
                            <!-- https://www.tutorialrepublic.com/codelab.php?topic=bootstrap&file=thumbnail-carousel-with-content -->
                            <div class="row_07 d-flex">
                                <div class="col mx-auto">
                                    <div id="myCarousel" class="carousel carousel_card slide d-flex " data-ride="carousel" data-interval="0">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <div class="row_07 d-flex">
                                                    <div class="col-md-4">
                                                        <a href="">
                                                            <div class="thumb-wrapper mx-3">
                                                                <div class="img-box">
                                                                    <img src="./imgs/product/P20_4.jpg" class="img-fluid" alt="">
                                                                    <div class="icon_heart">
                                                                        <svg class="heart_line" width="32" height="32" viewBox="0 0 32 32" fill="none" stroke="#fff" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M15.2855 9.22197C12.9704 6.90689 9.21692 6.90689 6.90184 9.22197C4.58676 11.537 4.58676 15.2905 6.90184 17.6056L13.2503 23.9532C14.8378 25.5407 17.4116 25.5407 18.9991 23.9532L24.5083 18.444L24.5074 18.4431L25.3449 17.6056C27.66 15.2905 27.66 11.5371 25.3449 9.22197C23.0298 6.90689 19.2763 6.90689 16.9612 9.22197L16.1234 10.0598L15.2855 9.22197Z" stroke-width="2.66667" />
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                                <div class="thumb-content">
                                                                    <h6>霞海城隍廟 X 護手霜禮盒</h6>

                                                                    <div class="card_under d-flex justify-content-around align-items-center">
                                                                        <small class="xs card-text d-flex pr-1">
                                                                            <div class="icon_star">
                                                                                <span><i class="fa-solid fa-star"></i></span>
                                                                            </div>4.7(50)
                                                                        </small>
                                                                        <small class="xs card-text d-flex">
                                                                            <div class="icon_fire">
                                                                                <span><i class="fa-solid fa-fire"></i></span>
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
                                                                    <img src="./imgs/product/P20_4.jpg" class="img-fluid" alt="">
                                                                    <div class="icon_heart">
                                                                        <svg class="heart_line" width="32" height="32" viewBox="0 0 32 32" fill="none" stroke="#fff" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M15.2855 9.22197C12.9704 6.90689 9.21692 6.90689 6.90184 9.22197C4.58676 11.537 4.58676 15.2905 6.90184 17.6056L13.2503 23.9532C14.8378 25.5407 17.4116 25.5407 18.9991 23.9532L24.5083 18.444L24.5074 18.4431L25.3449 17.6056C27.66 15.2905 27.66 11.5371 25.3449 9.22197C23.0298 6.90689 19.2763 6.90689 16.9612 9.22197L16.1234 10.0598L15.2855 9.22197Z" stroke-width="2.66667" />
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                                <div class="thumb-content">
                                                                    <h6>霞海城隍廟 X 護手霜禮盒</h6>

                                                                    <div class="card_under d-flex justify-content-between align-items-center">
                                                                        <small class="xs card-text d-flex pr-1">
                                                                            <div class="icon_star">
                                                                                <span><i class="fa-solid fa-star"></i></span>
                                                                            </div> 4.7(50)
                                                                        </small>
                                                                        <small class="xs card-text d-flex">
                                                                            <div class="icon_fire ">
                                                                                <span><i class="fa-solid fa-fire"></i></span>
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
                                                                    <img src="./imgs/product/P20_4.jpg" class="img-fluid" alt="">
                                                                    <div class="icon_heart">
                                                                        <svg class="heart_line" width="32" height="32" viewBox="0 0 32 32" fill="none" stroke="#fff" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M15.2855 9.22197C12.9704 6.90689 9.21692 6.90689 6.90184 9.22197C4.58676 11.537 4.58676 15.2905 6.90184 17.6056L13.2503 23.9532C14.8378 25.5407 17.4116 25.5407 18.9991 23.9532L24.5083 18.444L24.5074 18.4431L25.3449 17.6056C27.66 15.2905 27.66 11.5371 25.3449 9.22197C23.0298 6.90689 19.2763 6.90689 16.9612 9.22197L16.1234 10.0598L15.2855 9.22197Z" stroke-width="2.66667" />
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                                <div class="thumb-content">
                                                                    <h6>霞海城隍廟 X 護手霜禮盒</h6>

                                                                    <div class="card_under d-flex justify-content-between align-items-center">
                                                                        <small class="xs card-text d-flex pr-1">
                                                                            <div class="icon_star">
                                                                                <span><i class="fa-solid fa-star"></i></span>
                                                                            </div> 4.7(50)
                                                                        </small>
                                                                        <small class="xs card-text d-flex">
                                                                            <div class="icon_fire ">
                                                                                <span><i class="fa-solid fa-fire"></i></span>
                                                                            </div>
                                                                            3K個已訂購
                                                                        </small>
                                                                        <h5 class="m-0 ml-auto">850</h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="row_07 d-flex">
                                                    <div class="col-md-4">
                                                        <a href="">
                                                            <div class="thumb-wrapper mx-3">
                                                                <div class="img-box">
                                                                    <img src="./imgs/product/P20_4.jpg" class="img-fluid" alt="">
                                                                    <div class="icon_heart">
                                                                        <svg class="heart_line" width="32" height="32" viewBox="0 0 32 32" fill="none" stroke="#fff" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M15.2855 9.22197C12.9704 6.90689 9.21692 6.90689 6.90184 9.22197C4.58676 11.537 4.58676 15.2905 6.90184 17.6056L13.2503 23.9532C14.8378 25.5407 17.4116 25.5407 18.9991 23.9532L24.5083 18.444L24.5074 18.4431L25.3449 17.6056C27.66 15.2905 27.66 11.5371 25.3449 9.22197C23.0298 6.90689 19.2763 6.90689 16.9612 9.22197L16.1234 10.0598L15.2855 9.22197Z" stroke-width="2.66667" />
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                                <div class="thumb-content">
                                                                    <h6>霞海城隍廟 X 護手霜禮盒</h6>

                                                                    <div class="card_under d-flex justify-content-between align-items-center">
                                                                        <small class="xs card-text d-flex pr-1">
                                                                            <div class="icon_star">
                                                                                <span><i class="fa-solid fa-star"></i></span>
                                                                            </div> 4.7(50)
                                                                        </small>
                                                                        <small class="xs card-text d-flex">
                                                                            <div class="icon_fire ">
                                                                                <span><i class="fa-solid fa-fire"></i></span>
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
                                                                    <img src="./imgs/product/P20_4.jpg" class="img-fluid" alt="">
                                                                    <div class="icon_heart">
                                                                        <svg class="heart_line" width="32" height="32" viewBox="0 0 32 32" fill="none" stroke="#fff" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M15.2855 9.22197C12.9704 6.90689 9.21692 6.90689 6.90184 9.22197C4.58676 11.537 4.58676 15.2905 6.90184 17.6056L13.2503 23.9532C14.8378 25.5407 17.4116 25.5407 18.9991 23.9532L24.5083 18.444L24.5074 18.4431L25.3449 17.6056C27.66 15.2905 27.66 11.5371 25.3449 9.22197C23.0298 6.90689 19.2763 6.90689 16.9612 9.22197L16.1234 10.0598L15.2855 9.22197Z" stroke-width="2.66667" />
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                                <div class="thumb-content">
                                                                    <h6>霞海城隍廟 X 護手霜禮盒</h6>

                                                                    <div class="card_under d-flex justify-content-between align-items-center">
                                                                        <small class="xs card-text d-flex pr-1">
                                                                            <div class="icon_star">
                                                                                <span><i class="fa-solid fa-star"></i></span>
                                                                            </div> 4.7(50)
                                                                        </small>
                                                                        <small class="xs card-text d-flex">
                                                                            <div class="icon_fire ">
                                                                                <span><i class="fa-solid fa-fire"></i></span>
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
                                                                    <img src="./imgs/product/P20_4.jpg" class="img-fluid" alt="">
                                                                    <div class="icon_heart">
                                                                        <svg class="heart_line" width="32" height="32" viewBox="0 0 32 32" fill="none" stroke="#fff" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M15.2855 9.22197C12.9704 6.90689 9.21692 6.90689 6.90184 9.22197C4.58676 11.537 4.58676 15.2905 6.90184 17.6056L13.2503 23.9532C14.8378 25.5407 17.4116 25.5407 18.9991 23.9532L24.5083 18.444L24.5074 18.4431L25.3449 17.6056C27.66 15.2905 27.66 11.5371 25.3449 9.22197C23.0298 6.90689 19.2763 6.90689 16.9612 9.22197L16.1234 10.0598L15.2855 9.22197Z" stroke-width="2.66667" />
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                                <div class="thumb-content">
                                                                    <h6>霞海城隍廟 X 護手霜禮盒</h6>

                                                                    <div class="card_under d-flex justify-content-between align-items-center">
                                                                        <small class="xs card-text d-flex pr-1">
                                                                            <div class="icon_star">
                                                                                <span><i class="fa-solid fa-star"></i></span>
                                                                            </div> 4.7(50)
                                                                        </small>
                                                                        <small class="xs card-text d-flex">
                                                                            <div class="icon_fire ">
                                                                                <span><i class="fa-solid fa-fire"></i></span>
                                                                            </div>
                                                                            3K個已訂購
                                                                        </small>
                                                                        <h5 class="m-0 ml-auto">850</h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>

                                                    </div>
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
                </div>
            </div>

        </div>
        <div class="section5_ba position-relative">
            <div data-aos="fade-right" data-aos-anchor-placement="center-bottom" class="position-absolute cloud cloud13">
                <img src="./imgs/index/cloud_9.png" alt="">
            </div>
            <div data-aos="fade-right" data-aos-anchor-placement="center-bottom" class="position-absolute cloud cloud14">
                <img src="./imgs/index/cloud_10.png" alt="">
            </div>
            <div data-aos="fade-left" data-aos-anchor-placement="center-bottom" class="position-absolute cloud cloud15">
                <img src="./imgs/index/cloud_9.png" alt="">
            </div>
            <div data-aos="fade-left" data-aos-anchor-placement="center-bottom" class="position-absolute cloud cloud16">
                <img src="./imgs/index/cloud_10.png" alt="">
            </div>
            <div class="container">
                <div class="row_ba d-flex">
                    <div class="col-6">
                        <div class="catPhotoGroup position-absolute">
                            <div class="catPhoto1 position-absolute" data-aos="flip-left" data-aos-anchor-placement="top-bottom">
                                <img class="" src="./imgs/index/2.png" alt="">
                            </div>
                            <div class="catPhoto2 position-absolute" data-aos="flip-right" data-aos-anchor-placement="top-center">
                                <img class="" src="./imgs/index/3.png" alt="">
                            </div>
                            <div class="catPhoto3 position-absolute" data-aos="flip-left" data-aos-anchor-placement="center-center">
                                <img class="" src="./imgs/index/1.png" alt="">
                            </div>
                        </div>



                    </div>
                    <div class="col-6 flex-row justify-content-center">
                        <h1>月老廟一網打盡！</h1>
                        <h6>你常常拎著簡單的行囊開始說走就走的旅行，享受在旅途的過程中瞭解當地歷史，以及認識新朋友嗎？<br><br>

                            又或是交友和工作圈單純，很難認識優質對象，討厭相親的尷尬，又害怕用交友軟體只遇到騙財騙色嗎？<br><br>

                            月老喵特地為了喜歡旅遊，或是想自然地認識新朋友的你，規劃了實際參拜月老的行程，不僅安排專業導遊詳細介紹月老廟的歷史文化，再加上遊覽周邊特色景點的旅遊活動，知性行旅、快樂旅遊與擴大交友圈一次三重滿足！
                        </h6>
                        <div type="button" class="btn btn-xl h4 btn04_ba">
                            <a href="travel_index.php">
                                看更多旅遊行程！
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row_ba flex">
                    <h1 class="m-auto">
                        熱門旅遊都在等你！
                    </h1>
                    <!-- TODO: 07卡片 -->
                    <div class="otherp d-md-block d-none">
                        <div class="container">
                            <!-- https://www.tutorialrepublic.com/codelab.php?topic=bootstrap&file=thumbnail-carousel-with-content -->
                            <div class="row_07 d-flex">
                                <div class="col mx-auto">
                                    <div id="myCarousel2" class="carousel carousel_card slide d-flex justify-content-center" data-ride="carousel" data-interval="0">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <div class="row_07 d-flex">
                                                    <div class="col-md-4">
                                                        <a href="">
                                                            <div class="thumb-wrapper mx-3">
                                                                <div class="img-box">
                                                                    <img src="./imgs/travel/cards/T01_1S.jpg" class="img-fluid" alt="">
                                                                    <div class="icon_heart">
                                                                        <svg class="heart_line" width="32" height="32" viewBox="0 0 32 32" fill="none" stroke="#fff" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M15.2855 9.22197C12.9704 6.90689 9.21692 6.90689 6.90184 9.22197C4.58676 11.537 4.58676 15.2905 6.90184 17.6056L13.2503 23.9532C14.8378 25.5407 17.4116 25.5407 18.9991 23.9532L24.5083 18.444L24.5074 18.4431L25.3449 17.6056C27.66 15.2905 27.66 11.5371 25.3449 9.22197C23.0298 6.90689 19.2763 6.90689 16.9612 9.22197L16.1234 10.0598L15.2855 9.22197Z" stroke-width="2.66667" />
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                                <div class="thumb-content">
                                                                    <h6 class="mb-0">大稻埕霞海城廟深度漫步文化之旅</h6>
                                                                    <div class="card_small_mb d-flex justify-content-between mb-1">
                                                                        <small class="xs card-text d-flex">
                                                                            <div class="icon_location">
                                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M12 21.2445C11.7379 21.0503 11.4043 20.8032 11.4043 20.8032L12 21.2445Z" fill="#432A0F" fill-opacity="0.6" />
                                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 7C10.3431 7 9 8.34315 9 10C9 11.6569 10.3431 13 12 13C13.6569 13 15 11.6569 15 10C15 8.34315 13.6569 7 12 7ZM11 10C11 9.44772 11.4477 9 12 9C12.5523 9 13 9.44772 13 10C13 10.5523 12.5523 11 12 11C11.4477 11 11 10.5523 11 10Z" fill="#432A0F" fill-opacity="0.6" />
                                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.4043 20.8032L12 21.2445C12.33 21 12.5964 20.8027 12.5964 20.8027L12.5981 20.8014L12.6032 20.7976L12.6198 20.7851C12.6337 20.7747 12.6531 20.7599 12.6777 20.741C12.7268 20.7031 12.7968 20.6484 12.8845 20.5779C13.0599 20.4368 13.307 20.2317 13.6019 19.9696C14.1903 19.4466 14.976 18.6902 15.7643 17.756C17.314 15.9193 19 13.246 19 10.2222C19 6.26809 15.9 3 12 3C8.10004 3 5 6.26809 5 10.2222C5 13.246 6.68605 15.9193 8.23571 17.756C9.02395 18.6902 9.8097 19.4466 10.3981 19.9696C10.693 20.2317 10.9401 20.4368 11.1155 20.5779C11.2032 20.6484 11.2732 20.7031 11.3223 20.741C11.3469 20.7599 11.3663 20.7747 11.3802 20.7851L11.3968 20.7976L11.4019 20.8014L11.4043 20.8032ZM7 10.2222C7 7.30348 9.27254 5 12 5C14.7275 5 17 7.30348 17 10.2222C17 12.5317 15.686 14.7473 14.2357 16.4662C13.524 17.3098 12.8097 17.9979 12.2731 18.4748C12.1756 18.5615 12.0842 18.641 12 18.713C11.9158 18.641 11.8244 18.5615 11.7269 18.4748C11.1903 17.9979 10.4761 17.3098 9.76429 16.4662C8.31395 14.7473 7 12.5317 7 10.2222Z" fill="#432A0F" fill-opacity="0.6" />
                                                                                </svg>
                                                                                <span>台北</span>
                                                                            </div>
                                                                        </small>
                                                                        <small class="xs card-text d-flex">
                                                                            <div class="icon_clock pl-3">
                                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M13 7C13 6.44772 12.5523 6 12 6C11.4477 6 11 6.44772 11 7V11H7C6.44772 11 6 11.4477 6 12C6 12.5523 6.44772 13 7 13H12C12.5523 13 13 12.5523 13 12V7Z" fill="#432A0F" fill-opacity="0.6" />
                                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3ZM5 12C5 8.13401 8.13401 5 12 5C15.866 5 19 8.13401 19 12C19 15.866 15.866 19 12 19C8.13401 19 5 15.866 5 12Z" fill="#432A0F" fill-opacity="0.6" />
                                                                                </svg>
                                                                                <span>出發日期：2022/10/20</span>
                                                                            </div>
                                                                        </small>
                                                                    </div>
                                                                    <div class="card_intro_mb card-text">
                                                                        <small style="color: var(--color-text100);">旅遊勢必能夠左右未來。可是，即使是這樣，旅遊的出現仍然代表了一定的意義。從這個角度來看旅遊的出現仍然代...</small>
                                                                    </div>
                                                                    <div class="card_under d-flex justify-content-between align-items-center">
                                                                        <small class="xs card-text d-flex pr-2">
                                                                            <div class="icon_star pr-1" style="color: var(--color-yellow);">
                                                                                <i class="fa-solid fa-star"></i>
                                                                            </div> 4.7(50)
                                                                        </small>
                                                                        <small class="xs card-text d-flex">
                                                                            <div class="icon_fire pr-1" style="color: var(--color-orange);">
                                                                                <i class="fa-solid fa-fire"></i>
                                                                            </div>
                                                                            3K個已訂購
                                                                        </small>
                                                                        <h5 class="m-0 ml-auto">1500</h5>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </a>

                                                    </div>
                                                    <div class="col-md-4">
                                                        <a href="">
                                                            <div class="thumb-wrapper mx-3">
                                                                <div class="img-box">
                                                                    <img src="./imgs/travel/cards/T01_1S.jpg" class="img-fluid" alt="">
                                                                    <div class="icon_heart">
                                                                        <svg class="heart_line" width="32" height="32" viewBox="0 0 32 32" fill="none" stroke="#fff" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M15.2855 9.22197C12.9704 6.90689 9.21692 6.90689 6.90184 9.22197C4.58676 11.537 4.58676 15.2905 6.90184 17.6056L13.2503 23.9532C14.8378 25.5407 17.4116 25.5407 18.9991 23.9532L24.5083 18.444L24.5074 18.4431L25.3449 17.6056C27.66 15.2905 27.66 11.5371 25.3449 9.22197C23.0298 6.90689 19.2763 6.90689 16.9612 9.22197L16.1234 10.0598L15.2855 9.22197Z" stroke-width="2.66667" />
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                                <div class="thumb-content">
                                                                    <h6 class="mb-0">大稻埕霞海城廟深度漫步文化之旅</h6>
                                                                    <div class="card_small_mb d-flex justify-content-between mb-1">
                                                                        <small class="xs card-text d-flex">
                                                                            <div class="icon_location">
                                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M12 21.2445C11.7379 21.0503 11.4043 20.8032 11.4043 20.8032L12 21.2445Z" fill="#432A0F" fill-opacity="0.6" />
                                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 7C10.3431 7 9 8.34315 9 10C9 11.6569 10.3431 13 12 13C13.6569 13 15 11.6569 15 10C15 8.34315 13.6569 7 12 7ZM11 10C11 9.44772 11.4477 9 12 9C12.5523 9 13 9.44772 13 10C13 10.5523 12.5523 11 12 11C11.4477 11 11 10.5523 11 10Z" fill="#432A0F" fill-opacity="0.6" />
                                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.4043 20.8032L12 21.2445C12.33 21 12.5964 20.8027 12.5964 20.8027L12.5981 20.8014L12.6032 20.7976L12.6198 20.7851C12.6337 20.7747 12.6531 20.7599 12.6777 20.741C12.7268 20.7031 12.7968 20.6484 12.8845 20.5779C13.0599 20.4368 13.307 20.2317 13.6019 19.9696C14.1903 19.4466 14.976 18.6902 15.7643 17.756C17.314 15.9193 19 13.246 19 10.2222C19 6.26809 15.9 3 12 3C8.10004 3 5 6.26809 5 10.2222C5 13.246 6.68605 15.9193 8.23571 17.756C9.02395 18.6902 9.8097 19.4466 10.3981 19.9696C10.693 20.2317 10.9401 20.4368 11.1155 20.5779C11.2032 20.6484 11.2732 20.7031 11.3223 20.741C11.3469 20.7599 11.3663 20.7747 11.3802 20.7851L11.3968 20.7976L11.4019 20.8014L11.4043 20.8032ZM7 10.2222C7 7.30348 9.27254 5 12 5C14.7275 5 17 7.30348 17 10.2222C17 12.5317 15.686 14.7473 14.2357 16.4662C13.524 17.3098 12.8097 17.9979 12.2731 18.4748C12.1756 18.5615 12.0842 18.641 12 18.713C11.9158 18.641 11.8244 18.5615 11.7269 18.4748C11.1903 17.9979 10.4761 17.3098 9.76429 16.4662C8.31395 14.7473 7 12.5317 7 10.2222Z" fill="#432A0F" fill-opacity="0.6" />
                                                                                </svg>
                                                                                <span>台北</span>
                                                                            </div>
                                                                        </small>
                                                                        <small class="xs card-text d-flex">
                                                                            <div class="icon_clock pl-3">
                                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M13 7C13 6.44772 12.5523 6 12 6C11.4477 6 11 6.44772 11 7V11H7C6.44772 11 6 11.4477 6 12C6 12.5523 6.44772 13 7 13H12C12.5523 13 13 12.5523 13 12V7Z" fill="#432A0F" fill-opacity="0.6" />
                                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3ZM5 12C5 8.13401 8.13401 5 12 5C15.866 5 19 8.13401 19 12C19 15.866 15.866 19 12 19C8.13401 19 5 15.866 5 12Z" fill="#432A0F" fill-opacity="0.6" />
                                                                                </svg>
                                                                                <span>出發日期：2022/10/20</span>
                                                                            </div>
                                                                        </small>
                                                                    </div>
                                                                    <div class="card_intro_mb card-text">
                                                                        <small style="color: var(--color-text100);">旅遊勢必能夠左右未來。可是，即使是這樣，旅遊的出現仍然代表了一定的意義。從這個角度來看旅遊的出現仍然代...</small>
                                                                    </div>
                                                                    <div class="card_under d-flex justify-content-between align-items-center">
                                                                        <small class="xs card-text d-flex pr-2">
                                                                            <div class="icon_star pr-1" style="color: var(--color-yellow);">
                                                                                <i class="fa-solid fa-star"></i>
                                                                            </div> 4.7(50)
                                                                        </small>
                                                                        <small class="xs card-text d-flex">
                                                                            <div class="icon_fire pr-1" style="color: var(--color-orange);">
                                                                                <i class="fa-solid fa-fire"></i>
                                                                            </div>
                                                                            3K個已訂購
                                                                        </small>
                                                                        <h5 class="m-0 ml-auto">1500</h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>

                                                    </div>
                                                    <div class="col-md-4">
                                                        <a href="">
                                                            <div class="thumb-wrapper mx-3">
                                                                <div class="img-box">
                                                                    <img src="./imgs/travel/cards/T01_1S.jpg" class="img-fluid" alt="">
                                                                    <div class="icon_heart">
                                                                        <svg class="heart_line" width="32" height="32" viewBox="0 0 32 32" fill="none" stroke="#fff" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M15.2855 9.22197C12.9704 6.90689 9.21692 6.90689 6.90184 9.22197C4.58676 11.537 4.58676 15.2905 6.90184 17.6056L13.2503 23.9532C14.8378 25.5407 17.4116 25.5407 18.9991 23.9532L24.5083 18.444L24.5074 18.4431L25.3449 17.6056C27.66 15.2905 27.66 11.5371 25.3449 9.22197C23.0298 6.90689 19.2763 6.90689 16.9612 9.22197L16.1234 10.0598L15.2855 9.22197Z" stroke-width="2.66667" />
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                                <div class="thumb-content">
                                                                    <h6 class="mb-0">大稻埕霞海城廟深度漫步文化之旅</h6>
                                                                    <div class="card_small_mb d-flex justify-content-between mb-1">
                                                                        <small class="xs card-text d-flex">
                                                                            <div class="icon_location">
                                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M12 21.2445C11.7379 21.0503 11.4043 20.8032 11.4043 20.8032L12 21.2445Z" fill="#432A0F" fill-opacity="0.6" />
                                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 7C10.3431 7 9 8.34315 9 10C9 11.6569 10.3431 13 12 13C13.6569 13 15 11.6569 15 10C15 8.34315 13.6569 7 12 7ZM11 10C11 9.44772 11.4477 9 12 9C12.5523 9 13 9.44772 13 10C13 10.5523 12.5523 11 12 11C11.4477 11 11 10.5523 11 10Z" fill="#432A0F" fill-opacity="0.6" />
                                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.4043 20.8032L12 21.2445C12.33 21 12.5964 20.8027 12.5964 20.8027L12.5981 20.8014L12.6032 20.7976L12.6198 20.7851C12.6337 20.7747 12.6531 20.7599 12.6777 20.741C12.7268 20.7031 12.7968 20.6484 12.8845 20.5779C13.0599 20.4368 13.307 20.2317 13.6019 19.9696C14.1903 19.4466 14.976 18.6902 15.7643 17.756C17.314 15.9193 19 13.246 19 10.2222C19 6.26809 15.9 3 12 3C8.10004 3 5 6.26809 5 10.2222C5 13.246 6.68605 15.9193 8.23571 17.756C9.02395 18.6902 9.8097 19.4466 10.3981 19.9696C10.693 20.2317 10.9401 20.4368 11.1155 20.5779C11.2032 20.6484 11.2732 20.7031 11.3223 20.741C11.3469 20.7599 11.3663 20.7747 11.3802 20.7851L11.3968 20.7976L11.4019 20.8014L11.4043 20.8032ZM7 10.2222C7 7.30348 9.27254 5 12 5C14.7275 5 17 7.30348 17 10.2222C17 12.5317 15.686 14.7473 14.2357 16.4662C13.524 17.3098 12.8097 17.9979 12.2731 18.4748C12.1756 18.5615 12.0842 18.641 12 18.713C11.9158 18.641 11.8244 18.5615 11.7269 18.4748C11.1903 17.9979 10.4761 17.3098 9.76429 16.4662C8.31395 14.7473 7 12.5317 7 10.2222Z" fill="#432A0F" fill-opacity="0.6" />
                                                                                </svg>
                                                                                <span>台北</span>
                                                                            </div>
                                                                        </small>
                                                                        <small class="xs card-text d-flex">
                                                                            <div class="icon_clock pl-3">
                                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M13 7C13 6.44772 12.5523 6 12 6C11.4477 6 11 6.44772 11 7V11H7C6.44772 11 6 11.4477 6 12C6 12.5523 6.44772 13 7 13H12C12.5523 13 13 12.5523 13 12V7Z" fill="#432A0F" fill-opacity="0.6" />
                                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3ZM5 12C5 8.13401 8.13401 5 12 5C15.866 5 19 8.13401 19 12C19 15.866 15.866 19 12 19C8.13401 19 5 15.866 5 12Z" fill="#432A0F" fill-opacity="0.6" />
                                                                                </svg>
                                                                                <span>出發日期：2022/10/20</span>
                                                                            </div>
                                                                        </small>
                                                                    </div>
                                                                    <div class="card_intro_mb card-text">
                                                                        <small style="color: var(--color-text100);">旅遊勢必能夠左右未來。可是，即使是這樣，旅遊的出現仍然代表了一定的意義。從這個角度來看旅遊的出現仍然代...</small>
                                                                    </div>
                                                                    <div class="card_under d-flex justify-content-between align-items-center">
                                                                        <small class="xs card-text d-flex pr-2">
                                                                            <div class="icon_star pr-1" style="color: var(--color-yellow);">
                                                                                <i class="fa-solid fa-star"></i>
                                                                            </div> 4.7(50)
                                                                        </small>
                                                                        <small class="xs card-text d-flex">
                                                                            <div class="icon_fire pr-1" style="color: var(--color-orange);">
                                                                                <i class="fa-solid fa-fire"></i>
                                                                            </div>
                                                                            3K個已訂購
                                                                        </small>
                                                                        <h5 class="m-0 ml-auto">1500</h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="row_07 d-flex">
                                                    <div class="col-md-4">
                                                        <a href="">
                                                            <div class="thumb-wrapper mx-3">
                                                                <div class="img-box">
                                                                    <img src="./imgs/travel/cards/T01_1S.jpg" class="img-fluid" alt="">
                                                                    <div class="icon_heart">
                                                                        <svg class="heart_line" width="32" height="32" viewBox="0 0 32 32" fill="none" stroke="#fff" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M15.2855 9.22197C12.9704 6.90689 9.21692 6.90689 6.90184 9.22197C4.58676 11.537 4.58676 15.2905 6.90184 17.6056L13.2503 23.9532C14.8378 25.5407 17.4116 25.5407 18.9991 23.9532L24.5083 18.444L24.5074 18.4431L25.3449 17.6056C27.66 15.2905 27.66 11.5371 25.3449 9.22197C23.0298 6.90689 19.2763 6.90689 16.9612 9.22197L16.1234 10.0598L15.2855 9.22197Z" stroke-width="2.66667" />
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                                <div class="thumb-content">
                                                                    <h6 class="mb-0">大稻埕霞海城廟深度漫步文化之旅</h6>
                                                                    <div class="card_small_mb d-flex justify-content-between mb-1">
                                                                        <small class="xs card-text d-flex">
                                                                            <div class="icon_location">
                                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M12 21.2445C11.7379 21.0503 11.4043 20.8032 11.4043 20.8032L12 21.2445Z" fill="#432A0F" fill-opacity="0.6" />
                                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 7C10.3431 7 9 8.34315 9 10C9 11.6569 10.3431 13 12 13C13.6569 13 15 11.6569 15 10C15 8.34315 13.6569 7 12 7ZM11 10C11 9.44772 11.4477 9 12 9C12.5523 9 13 9.44772 13 10C13 10.5523 12.5523 11 12 11C11.4477 11 11 10.5523 11 10Z" fill="#432A0F" fill-opacity="0.6" />
                                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.4043 20.8032L12 21.2445C12.33 21 12.5964 20.8027 12.5964 20.8027L12.5981 20.8014L12.6032 20.7976L12.6198 20.7851C12.6337 20.7747 12.6531 20.7599 12.6777 20.741C12.7268 20.7031 12.7968 20.6484 12.8845 20.5779C13.0599 20.4368 13.307 20.2317 13.6019 19.9696C14.1903 19.4466 14.976 18.6902 15.7643 17.756C17.314 15.9193 19 13.246 19 10.2222C19 6.26809 15.9 3 12 3C8.10004 3 5 6.26809 5 10.2222C5 13.246 6.68605 15.9193 8.23571 17.756C9.02395 18.6902 9.8097 19.4466 10.3981 19.9696C10.693 20.2317 10.9401 20.4368 11.1155 20.5779C11.2032 20.6484 11.2732 20.7031 11.3223 20.741C11.3469 20.7599 11.3663 20.7747 11.3802 20.7851L11.3968 20.7976L11.4019 20.8014L11.4043 20.8032ZM7 10.2222C7 7.30348 9.27254 5 12 5C14.7275 5 17 7.30348 17 10.2222C17 12.5317 15.686 14.7473 14.2357 16.4662C13.524 17.3098 12.8097 17.9979 12.2731 18.4748C12.1756 18.5615 12.0842 18.641 12 18.713C11.9158 18.641 11.8244 18.5615 11.7269 18.4748C11.1903 17.9979 10.4761 17.3098 9.76429 16.4662C8.31395 14.7473 7 12.5317 7 10.2222Z" fill="#432A0F" fill-opacity="0.6" />
                                                                                </svg>
                                                                                <span>台北</span>
                                                                            </div>
                                                                        </small>
                                                                        <small class="xs card-text d-flex">
                                                                            <div class="icon_clock pl-3">
                                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M13 7C13 6.44772 12.5523 6 12 6C11.4477 6 11 6.44772 11 7V11H7C6.44772 11 6 11.4477 6 12C6 12.5523 6.44772 13 7 13H12C12.5523 13 13 12.5523 13 12V7Z" fill="#432A0F" fill-opacity="0.6" />
                                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3ZM5 12C5 8.13401 8.13401 5 12 5C15.866 5 19 8.13401 19 12C19 15.866 15.866 19 12 19C8.13401 19 5 15.866 5 12Z" fill="#432A0F" fill-opacity="0.6" />
                                                                                </svg>
                                                                                <span>出發日期：2022/10/20</span>
                                                                            </div>
                                                                        </small>
                                                                    </div>
                                                                    <div class="card_intro_mb card-text">
                                                                        <small style="color: var(--color-text100);">旅遊勢必能夠左右未來。可是，即使是這樣，旅遊的出現仍然代表了一定的意義。從這個角度來看旅遊的出現仍然代...</small>
                                                                    </div>
                                                                    <div class="card_under d-flex justify-content-between align-items-center">
                                                                        <small class="xs card-text d-flex pr-2">
                                                                            <div class="icon_star pr-1" style="color: var(--color-yellow);">
                                                                                <i class="fa-solid fa-star"></i>
                                                                            </div> 4.7(50)
                                                                        </small>
                                                                        <small class="xs card-text d-flex">
                                                                            <div class="icon_fire pr-1" style="color: var(--color-orange);">
                                                                                <i class="fa-solid fa-fire"></i>
                                                                            </div>
                                                                            3K個已訂購
                                                                        </small>
                                                                        <h5 class="m-0 ml-auto">1500</h5>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </a>

                                                    </div>
                                                    <div class="col-md-4">
                                                        <a href="">
                                                            <div class="thumb-wrapper mx-3">
                                                                <div class="img-box">
                                                                    <img src="./imgs/travel/cards/T01_1S.jpg" class="img-fluid" alt="">
                                                                    <div class="icon_heart">
                                                                        <svg class="heart_line" width="32" height="32" viewBox="0 0 32 32" fill="none" stroke="#fff" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M15.2855 9.22197C12.9704 6.90689 9.21692 6.90689 6.90184 9.22197C4.58676 11.537 4.58676 15.2905 6.90184 17.6056L13.2503 23.9532C14.8378 25.5407 17.4116 25.5407 18.9991 23.9532L24.5083 18.444L24.5074 18.4431L25.3449 17.6056C27.66 15.2905 27.66 11.5371 25.3449 9.22197C23.0298 6.90689 19.2763 6.90689 16.9612 9.22197L16.1234 10.0598L15.2855 9.22197Z" stroke-width="2.66667" />
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                                <div class="thumb-content">
                                                                    <h6 class="mb-0">大稻埕霞海城廟深度漫步文化之旅</h6>
                                                                    <div class="card_small_mb d-flex justify-content-between mb-1">
                                                                        <small class="xs card-text d-flex">
                                                                            <div class="icon_location">
                                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M12 21.2445C11.7379 21.0503 11.4043 20.8032 11.4043 20.8032L12 21.2445Z" fill="#432A0F" fill-opacity="0.6" />
                                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 7C10.3431 7 9 8.34315 9 10C9 11.6569 10.3431 13 12 13C13.6569 13 15 11.6569 15 10C15 8.34315 13.6569 7 12 7ZM11 10C11 9.44772 11.4477 9 12 9C12.5523 9 13 9.44772 13 10C13 10.5523 12.5523 11 12 11C11.4477 11 11 10.5523 11 10Z" fill="#432A0F" fill-opacity="0.6" />
                                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.4043 20.8032L12 21.2445C12.33 21 12.5964 20.8027 12.5964 20.8027L12.5981 20.8014L12.6032 20.7976L12.6198 20.7851C12.6337 20.7747 12.6531 20.7599 12.6777 20.741C12.7268 20.7031 12.7968 20.6484 12.8845 20.5779C13.0599 20.4368 13.307 20.2317 13.6019 19.9696C14.1903 19.4466 14.976 18.6902 15.7643 17.756C17.314 15.9193 19 13.246 19 10.2222C19 6.26809 15.9 3 12 3C8.10004 3 5 6.26809 5 10.2222C5 13.246 6.68605 15.9193 8.23571 17.756C9.02395 18.6902 9.8097 19.4466 10.3981 19.9696C10.693 20.2317 10.9401 20.4368 11.1155 20.5779C11.2032 20.6484 11.2732 20.7031 11.3223 20.741C11.3469 20.7599 11.3663 20.7747 11.3802 20.7851L11.3968 20.7976L11.4019 20.8014L11.4043 20.8032ZM7 10.2222C7 7.30348 9.27254 5 12 5C14.7275 5 17 7.30348 17 10.2222C17 12.5317 15.686 14.7473 14.2357 16.4662C13.524 17.3098 12.8097 17.9979 12.2731 18.4748C12.1756 18.5615 12.0842 18.641 12 18.713C11.9158 18.641 11.8244 18.5615 11.7269 18.4748C11.1903 17.9979 10.4761 17.3098 9.76429 16.4662C8.31395 14.7473 7 12.5317 7 10.2222Z" fill="#432A0F" fill-opacity="0.6" />
                                                                                </svg>
                                                                                <span>台北</span>
                                                                            </div>
                                                                        </small>
                                                                        <small class="xs card-text d-flex">
                                                                            <div class="icon_clock pl-3">
                                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M13 7C13 6.44772 12.5523 6 12 6C11.4477 6 11 6.44772 11 7V11H7C6.44772 11 6 11.4477 6 12C6 12.5523 6.44772 13 7 13H12C12.5523 13 13 12.5523 13 12V7Z" fill="#432A0F" fill-opacity="0.6" />
                                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3ZM5 12C5 8.13401 8.13401 5 12 5C15.866 5 19 8.13401 19 12C19 15.866 15.866 19 12 19C8.13401 19 5 15.866 5 12Z" fill="#432A0F" fill-opacity="0.6" />
                                                                                </svg>
                                                                                <span>出發日期：2022/10/20</span>
                                                                            </div>
                                                                        </small>
                                                                    </div>
                                                                    <div class="card_intro_mb card-text">
                                                                        <small style="color: var(--color-text100);">旅遊勢必能夠左右未來。可是，即使是這樣，旅遊的出現仍然代表了一定的意義。從這個角度來看旅遊的出現仍然代...</small>
                                                                    </div>
                                                                    <div class="card_under d-flex justify-content-between align-items-center">
                                                                        <small class="xs card-text d-flex pr-2">
                                                                            <div class="icon_star pr-1" style="color: var(--color-yellow);">
                                                                                <i class="fa-solid fa-star"></i>
                                                                            </div> 4.7(50)
                                                                        </small>
                                                                        <small class="xs card-text d-flex">
                                                                            <div class="icon_fire pr-1" style="color: var(--color-orange);">
                                                                                <i class="fa-solid fa-fire"></i>
                                                                            </div>
                                                                            3K個已訂購
                                                                        </small>
                                                                        <h5 class="m-0 ml-auto">1500</h5>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </a>

                                                    </div>
                                                    <div class="col-md-4">
                                                        <a href="">
                                                            <div class="thumb-wrapper mx-3">
                                                                <div class="img-box">
                                                                    <img src="./imgs/travel/cards/T01_1S.jpg" class="img-fluid" alt="">
                                                                    <div class="icon_heart">
                                                                        <svg class="heart_line" width="32" height="32" viewBox="0 0 32 32" fill="none" stroke="#fff" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M15.2855 9.22197C12.9704 6.90689 9.21692 6.90689 6.90184 9.22197C4.58676 11.537 4.58676 15.2905 6.90184 17.6056L13.2503 23.9532C14.8378 25.5407 17.4116 25.5407 18.9991 23.9532L24.5083 18.444L24.5074 18.4431L25.3449 17.6056C27.66 15.2905 27.66 11.5371 25.3449 9.22197C23.0298 6.90689 19.2763 6.90689 16.9612 9.22197L16.1234 10.0598L15.2855 9.22197Z" stroke-width="2.66667" />
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                                <div class="thumb-content">
                                                                    <h6 class="mb-0">大稻埕霞海城廟深度漫步文化之旅</h6>
                                                                    <div class="card_small_mb d-flex justify-content-between mb-1">
                                                                        <small class="xs card-text d-flex">
                                                                            <div class="icon_location">
                                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M12 21.2445C11.7379 21.0503 11.4043 20.8032 11.4043 20.8032L12 21.2445Z" fill="#432A0F" fill-opacity="0.6" />
                                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 7C10.3431 7 9 8.34315 9 10C9 11.6569 10.3431 13 12 13C13.6569 13 15 11.6569 15 10C15 8.34315 13.6569 7 12 7ZM11 10C11 9.44772 11.4477 9 12 9C12.5523 9 13 9.44772 13 10C13 10.5523 12.5523 11 12 11C11.4477 11 11 10.5523 11 10Z" fill="#432A0F" fill-opacity="0.6" />
                                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.4043 20.8032L12 21.2445C12.33 21 12.5964 20.8027 12.5964 20.8027L12.5981 20.8014L12.6032 20.7976L12.6198 20.7851C12.6337 20.7747 12.6531 20.7599 12.6777 20.741C12.7268 20.7031 12.7968 20.6484 12.8845 20.5779C13.0599 20.4368 13.307 20.2317 13.6019 19.9696C14.1903 19.4466 14.976 18.6902 15.7643 17.756C17.314 15.9193 19 13.246 19 10.2222C19 6.26809 15.9 3 12 3C8.10004 3 5 6.26809 5 10.2222C5 13.246 6.68605 15.9193 8.23571 17.756C9.02395 18.6902 9.8097 19.4466 10.3981 19.9696C10.693 20.2317 10.9401 20.4368 11.1155 20.5779C11.2032 20.6484 11.2732 20.7031 11.3223 20.741C11.3469 20.7599 11.3663 20.7747 11.3802 20.7851L11.3968 20.7976L11.4019 20.8014L11.4043 20.8032ZM7 10.2222C7 7.30348 9.27254 5 12 5C14.7275 5 17 7.30348 17 10.2222C17 12.5317 15.686 14.7473 14.2357 16.4662C13.524 17.3098 12.8097 17.9979 12.2731 18.4748C12.1756 18.5615 12.0842 18.641 12 18.713C11.9158 18.641 11.8244 18.5615 11.7269 18.4748C11.1903 17.9979 10.4761 17.3098 9.76429 16.4662C8.31395 14.7473 7 12.5317 7 10.2222Z" fill="#432A0F" fill-opacity="0.6" />
                                                                                </svg>
                                                                                <span>台北</span>
                                                                            </div>
                                                                        </small>
                                                                        <small class="xs card-text d-flex">
                                                                            <div class="icon_clock pl-3">
                                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M13 7C13 6.44772 12.5523 6 12 6C11.4477 6 11 6.44772 11 7V11H7C6.44772 11 6 11.4477 6 12C6 12.5523 6.44772 13 7 13H12C12.5523 13 13 12.5523 13 12V7Z" fill="#432A0F" fill-opacity="0.6" />
                                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3ZM5 12C5 8.13401 8.13401 5 12 5C15.866 5 19 8.13401 19 12C19 15.866 15.866 19 12 19C8.13401 19 5 15.866 5 12Z" fill="#432A0F" fill-opacity="0.6" />
                                                                                </svg>
                                                                                <span>出發日期：2022/10/20</span>
                                                                            </div>
                                                                        </small>
                                                                    </div>
                                                                    <div class="card_intro_mb card-text">
                                                                        <small style="color: var(--color-text100);">旅遊勢必能夠左右未來。可是，即使是這樣，旅遊的出現仍然代表了一定的意義。從這個角度來看旅遊的出現仍然代...</small>
                                                                    </div>
                                                                    <div class="card_under d-flex justify-content-between align-items-center">
                                                                        <small class="xs card-text d-flex pr-2">
                                                                            <div class="icon_star pr-1" style="color: var(--color-yellow);">
                                                                                <i class="fa-solid fa-star"></i>
                                                                            </div> 4.7(50)
                                                                        </small>
                                                                        <small class="xs card-text d-flex">
                                                                            <div class="icon_fire pr-1" style="color: var(--color-orange);">
                                                                                <i class="fa-solid fa-fire"></i>
                                                                            </div>
                                                                            3K個已訂購
                                                                        </small>
                                                                        <h5 class="m-0 ml-auto">1500</h5>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Carousel controls -->
                                        <a class="carousel-control-prev" href="#myCarousel2" data-slide="prev">
                                            <i class="fa-solid fa-caret-left"></i>
                                        </a>
                                        <a class="carousel-control-next" href="#myCarousel2" data-slide="next">
                                            <i class="fa-solid fa-caret-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </div>
        <div class="section6_ba bg3_ba position-relative">

            <div data-aos="fade-up" data-aos-anchor-placement="top-bottom" class="ballon ballon01 position-absolute">
                <img src="./imgs/index/22.png" alt="">
            </div>
            <div data-aos="fade-up" data-aos-anchor-placement="top-bottom" class="ballon ballon02 position-absolute">
                <img src="./imgs/index/23.png" alt="">
            </div>
            <div data-aos="fade-up" data-aos-anchor-placement="top-bottom" class="ballon ballon03 position-absolute">
                <img src="./imgs/index/24.png" alt="">
            </div>
            <div data-aos="fade-up" data-aos-anchor-placement="top-bottom" class="ballon ballon04 position-absolute">
                <img src="./imgs/index/25.png" alt="">
            </div>
            <div data-aos="fade-up" data-aos-anchor-placement="top-bottom" class="ballon ballon05 position-absolute">
                <img src="./imgs/index/25.png" alt="">
            </div>
            <div data-aos="fade-up" data-aos-anchor-placement="top-bottom" class="ballon ballon06 position-absolute">
                <img src="./imgs/index/24.png" alt="">
            </div>
            <div data-aos="fade-up" data-aos-anchor-placement="top-bottom" class="ballon ballon07 position-absolute">
                <img src="./imgs/index/22.png" alt="">
            </div>
            <div data-aos="fade-up" data-aos-anchor-placement="top-bottom" class="ballon ballon08 position-absolute">
                <img src="./imgs/index/23.png" alt="">
            </div>

            <div class="rainbowGroup d-flex">
                <div class="leftRainbow" data-aos="fade-right" data-aos-anchor-placement="center-bottom">
                    <img src="./imgs/index/left21.png" alt="">
                </div>
                <div class="rightRainbow" data-aos="fade-left" data-aos-anchor-placement=" center-bottom">
                    <img src="./imgs/index/right21.png" alt="">
                </div>
            </div>
            <div class="memberCat">
                <div class="memberCat1 position-absolute" data-aos="fade-left" data-aos-anchor-placement="center-bottom">
                    <img src="./imgs/index/26.png" alt="">
                </div>
                <div class="memberCat2 position-absolute" data-aos="fade-right" data-aos-anchor-placement="center-bottom">
                    <img src="./imgs/index/27.png" alt="">
                </div>
                <div class="memberCat3 position-absolute" data-aos="fade-right" data-aos-anchor-placement="center-bottom">
                    <img src="./imgs/index/28.png" alt="">
                </div>
            </div>
            <div class="row_ba reel">
                <div class="middleReel position-absolute d-flex justify-content-center ">
                    <img src="./imgs/index/卷軸中.png" alt="">
                </div>
                <div class="leftReel position-absolute">
                    <img src="./imgs/index/卷軸左.png" alt="">
                </div>
                <div class="rightReel position-absolute">
                    <img src="./imgs/index/卷軸右.png" alt="">
                </div>
            </div>
            <div class="container position-relative">
                <div data-aos="fade-up" data-aos-anchor-placement="center-center" class="row_ba d-flex">
                    <h1 class="m-auto welfare position-absolute">會員獨享福利</h1>
                </div>
                <div class="memberContent text-align">
                    <h4 class="m-auto" data-aos="fade-right" data-aos-anchor-placement="top-bottom">＊每日運勢占卜＊</h4>
                    <h4 class="m-auto" data-aos="fade-right" data-aos-anchor-placement="top-bottom">＊商品、行程不定期優惠＊</h4>
                    <h4 class="m-auto" data-aos="fade-right" data-aos-anchor-placement="top-bottom">＊生日好禮大放送＊</h4>
                    <h4 class="m-auto" data-aos="fade-right" data-aos-anchor-placement="top-bottom">＊全館免運中＊</h4>

                </div>
            </div>

            <div data-aos="fade-up" class="container-fluid ">

            </div>
            <div type="button" class="position-absolute btn btn-xl h4 btn05_ba">
                <a href="member.php">
                    馬上成為月老喵的一員！
                </a>
            </div>


        </div>


    </div>



</div>
<!-- 手機板 -->
<div class="index_m_ba d-md-none">
    <div class="msection1_ba  position-relative text-align">
        <div class="center_m">
            <h4 class="m_title_ba position-absolute moonOld_m d-block mx-auto">
                <span class="moonOldSay_m h4"></span>
            </h4>
        </div>

        <div class="center_m w-100">
            <h4 class="m_title_ba position-absolute meowMeow_m d-block mx-auto">
                <span class="meowSay_m h4"></span>
            </h4>
        </div>
    </div>

    <div class="msection2_ba position-relative text-align">
        <div data-aos="fade-left" data-aos-anchor-placement="center-bottom" class="position-absolute cloud cloudm03">
            <img src="./imgs/index/cloudm_9.png" alt="">
        </div>
        <div data-aos="fade-left" data-aos-anchor-placement="center-bottom" class="position-absolute cloud cloudm04">
            <img src="./imgs/index/cloudm_10.png" alt="">
        </div>

        <div class="section2_m_title">
            <h4 data-aos="fade-up" data-aos-anchor-placement="center-bottom" class="m_title_ba">
                月老的大小事<br>
                我們幫你收集好了！
            </h4>
        </div>

        <div data-aos="fade-up" data-aos-anchor-placement="center-bottom" class="position-absolute cloud cloudm06">
            <img src="./imgs/index/cloudm_5.png" alt="">
        </div>
        <div data-aos="fade-up" data-aos-anchor-placement="center-bottom" class="position-absolute cloud cloudm07">
            <img src="./imgs/index/cloudm_1.png" alt="">
        </div>
        <div data-aos="fade-up" data-aos-anchor-placement="center-bottom" class="position-absolute cloud cloudm08">
            <img src="./imgs/index/cloudm_2.png" alt="">
        </div>
        <div data-aos="fade-right" data-aos-anchor-placement="center-bottom" class="position-absolute cloud cloudm01">
            <img src="./imgs/index/cloudm_9.png" alt="">
        </div>
        <div data-aos="fade-right" data-aos-anchor-placement="center-bottom" class="position-absolute cloud cloudm02">
            <img src="./imgs/index/cloudm_10.png" alt="">
        </div>

        <div data-aos="fade-up" data-aos-anchor-placement="center-bottom" class="container-fluid meowTemple_m">
        </div>
        <div type="button" class="position-absolute btn indexbtn_m btn01_m_ba mx-auto">
            <div class="btn-l">
                <a href="culture.php">
                月老參拜全攻略
                </a>
            </div>
        </div>
    </div>

    <div class="msection3_ba position-relative text-align">

        <div class="section2_m_title">
            <h4 data-aos="fade-up" data-aos-anchor-placement="center-bottom" class="m_title_ba">
                讓月老喵來解決你的戀愛煩惱！
            </h4>
        </div>

        <div class="firstCat d-flex mt-3 ml-3" data-aos="fade-left" data-aos-anchor-placement="center-bottom">
            <div class="firstCatImg pr-0">
                <img class="w-100" src="./imgs/index/8.png" alt="">
            </div>

            <div class="firstCatContent my-auto">
                <h6>斬桃花高手 — 小黑</h6>
                <div class="xs">
                    「感情破壞」戲法人人會變，巧妙各有不同，讓本喵變一齣感情大魔術，斬除所有爛桃花，驅逐小三小四小五！
                </div>
            </div>
        </div>
        <div class="secondCat d-flex mt-3 ml-4" data-aos="fade-right" data-aos-anchor-placement="center-bottom">
            <div class="secondCatContent my-auto">
                <h6>牽紅線專家 — 小玉</h6>
                <div class="xs">
                    身邊的朋友都有另一半，
                    今年過節又剩你一個人落單，
                    另一半到底還要迷路多久！
                    如果你有這個煩惱，
                    就讓我來幫你牽線，讓好緣份快來！
                </div>
            </div>

            <div class="secondCatImg pl-0">
                <img class="w-100" src="./imgs/index/10.png" alt="">
            </div>
        </div>
        <div class="thirdCat d-flex mt-3 ml-3" data-aos="fade-left" data-aos-anchor-placement="center-bottom">
            <div class="thirdCatImg pr-0">
                <img class="w-100" src="./imgs/index/12.png" alt="">
            </div>

            <div class="thirdCatContent my-auto">
                <h6>幸福美滿 — 金寶</h6>
                <div class="xs">
                    「感情破壞」戲法人人會變，巧妙各有不同，讓本喵變一齣感情大魔術，斬除所有爛桃花，驅逐小三小四小五！
                </div>
            </div>
        </div>


        <div type="button" class="position-absolute btn indexbtn_m btn01_m_ba mx-auto mt-3">
            <div class="btn-l">
                <a href="draw01.php">
                開始線上求籤！
                </a>
            </div>
        </div>

    </div>

    <div class="msection4_ba position-relative text-align">

        <div class="section2_m_title">
            <h4 data-aos="fade-up" data-aos-anchor-placement="center-bottom" class="m_title_ba">
                線上求籤還不夠！
            </h4>
        </div>

        <div class="msection4Content mx-auto mt-3" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
            <h6>
                月老喵與台北霞海城隍攜手合作，以「結緣」為概念聯手打造各式各樣質感好物，不只有牽起愛情、友情和親情緣分的功效，也能幫忙傳遞你火熱的心意！
            </h6>
        </div>

        <div class="msection4Img mt-5 mx-auto" data-aos="fade-left" data-aos-anchor-placement="center-bottom">
            <img class="w-100" src="./imgs/index/14.png" alt="">
        </div>

        <div class="msection4Card">
            <div class="container carousel_mb d-block d-md-none pb-5">
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

        <!-- TODO: 07卡片 -->

        <div type="button" class="position-absolute btn indexbtn_m btn01_m_ba mx-auto mt-3">
            <div class="btn-l">
                <a href="product_index.php">
                快讓月老喵幫你加持！
                </a>
            </div>
        </div>

    </div>

    <div class="msection5_ba position-relative text-align">

        <div class="section2_m_title">
            <h4 data-aos="fade-up" data-aos-anchor-placement="center-bottom" class="m_title_ba">
                全台月老廟一網打盡！
            </h4>
        </div>

        <div class="msection5Content mx-auto mt-3" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
            <h6>
                月老喵特地為了喜歡旅遊，或是想自然地認識新朋友的你，規劃了實際參拜月老的行程，不僅安排專業導遊詳細介紹月老廟的歷史文化，再加上遊覽周邊特色景點的旅遊活動，知性行旅、快樂旅遊與擴大交友圈一次三重滿足！
            </h6>
        </div>

        <div class="msection5Photo position-relative">
            <div class="msection5FirstPhoto position-absolute mt-5" data-aos="flip-right" data-aos-anchor-placement="center-bottom">
                <img class="w-100" src="./imgs/index/3.png" alt="">
            </div>
            <div class="msection5SecondPhoto position-absolute mt-5" data-aos="flip-left" data-aos-anchor-placement="center-bottom">
                <img class="w-100" src="./imgs/index/2.png" alt="">
            </div>
            <div class="msection5ThirdPhoto position-absolute mt-5" data-aos="flip-right" data-aos-anchor-placement="center-bottom">
                <img class="w-100" src="./imgs/index/1.png" alt="">
            </div>
        </div>


        <div class="msection5Card">

            <div class="container carousel_mb d-block d-md-none pb-5">
                <div class="card-carousel ">
                    <div class="card" id="6">
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
                    <div class="card" id="7">
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
                    <div class="card" id="8">
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
                    <div class="card" id="9">
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
                    <div class="card" id="10">
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

        <!-- TODO: 07卡片 -->


        <div type="button" class="position-absolute btn indexbtn_m btn01_m_ba mx-auto mt-3">
            <div class="btn-l">
                <a href="travel_index.php">
                熱門旅遊都在等你！
                </a>
            </div>
        </div>

    </div>

    <div class="msection6_ba position-relative text-align">

        <div class="row_ba reelm mt-3">
            <div class="middleReelm position-absolute d-flex justify-content-center ">
                <img src="./imgs/index/卷軸中.png" alt="">
            </div>
            <div class="leftReelm position-absolute">
                <img src="./imgs/index/卷軸左.png" alt="">
            </div>
            <div class="rightReelm position-absolute">
                <img src="./imgs/index/卷軸右.png" alt="">
            </div>
        </div>

        <div class="section2_m_title">
            <h4 data-aos="fade-up" data-aos-anchor-placement="center-bottom" class="m_title_ba mt-5">
                會員獨享福利
            </h4>
        </div>

        <div class="msection5Content mx-auto mt-3" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
            <p>
                ＊每日運勢占卜＊<br>
                ＊商品、行程不定期優惠＊<br>
                ＊生日好禮大放送＊<br>
                ＊全館免運中＊
            </p>
        </div>

        <div class="memberCatm">
            <div class="memberCat1m position-absolute" data-aos="fade-left" data-aos-anchor-placement="center-bottom">
                <img src="./imgs/index/26.png" alt="">
            </div>
            <div class="memberCat2m position-absolute" data-aos="fade-right" data-aos-anchor-placement="center-bottom">
                <img src="./imgs/index/27.png" alt="">
            </div>
            <div class="memberCat3m position-absolute" data-aos="fade-right" data-aos-anchor-placement="top-bottom">
                <img src="./imgs/index/28.png" alt="">
            </div>
        </div>


        <div type="button" class="position-absolute btn indexbtn_m btn02_m_ba mx-auto">
            <div class="btn-l">
                <a href="member.php">
                馬上成為月老喵的一員！
                </a>
            </div>
        </div>

    </div>
</div>
</div>
<?php include __DIR__ . '/parts/scripts.php'; ?>
<!-- 打字 js -->
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<!-- jQ
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"
 integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" 
 crossorigin="anonymous"></script> -->
<!-- 我的 -->
<script src="index.js"></script>
<!-- 07 -->
<script src="product_index.js"></script>

<!-- AOS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({

        // Global settings:

        disable: false,
        startEvent: 'DOMContentLoaded',
        initClassName: 'aos-init',
        animatedClassName: 'aos-animate',
        useClassNames: false,
        disableMutationObserver: false,
        debounceDelay: 50,
        throttleDelay: 99,

        // 透過 data-aos 來設定相關元素

        offset: 1000, // 移動距離 (單位為像素)
        delay: 0, // 延遲時間，範圍從 0-3000
        duration: 1000, // 完成動畫所需的時間，範圍從 0-3000
        easing: 'ease', // 動畫曲線
        once: false, // 動畫是否只跑一次
        mirror: false,
        anchorPlacement: 'center-bottom', // 動畫觸發的位置
    });
</script>
<?php include __DIR__ . '/parts/html-foot.php'; ?>
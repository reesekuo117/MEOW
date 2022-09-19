<?php
require __DIR__ . '/parts/meow_db.php';  // /開頭
$pageName = 'home'; //頁面名稱
?>

<?php include __DIR__ . '/parts/html-head.php'; ?>

<link rel="stylesheet" href="./index.css">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<?php
header("Refresh:180");
?>

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
            <svg class="slide-down-r position-absolute" width="50" height="63" viewBox="0 0 50 63" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M4 4L25 25L46 4" stroke="white" stroke-width="8" stroke-linecap="round"
                    stroke-linejoin="round" />
                <path d="M4 38L25 59L46 38" stroke="white" stroke-width="8" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
            <svg class="slide-down-l position-absolute" width="50" height="63" viewBox="0 0 50 63" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M4 4L25 25L46 4" stroke="white" stroke-width="8" stroke-linecap="round"
                    stroke-linejoin="round" />
                <path d="M4 38L25 59L46 38" stroke="white" stroke-width="8" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
            <div class="bg1_ba d-flex">
                <div class="left position-relative">
                    <div class="cloud-left position-absolute">
                        <img class="cloud-left-animation" src="./imgs/index/cloud-l.png" alt="">
                        <svg class="svg1 position-absolute" width="465" height="948" viewBox="0 0 465 948" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path class="path" d="M462 100L390 7" stroke="white" stroke-width="6"
                                stroke-linecap="round" />
                            <path class="path" d="M458 183L283 11" stroke="white" stroke-width="6"
                                stroke-linecap="round" />
                            <path class="path" d="M361 179L133 3" stroke="white" stroke-width="6"
                                stroke-linecap="round" />
                            <path class="path" d="M133 118L3 43" stroke="white" stroke-width="6"
                                stroke-linecap="round" />
                            <path class="path" d="M312 368L247 352" stroke="white" stroke-width="6"
                                stroke-linecap="round" />
                            <path class="path" d="M377 428L62 384" stroke="white" stroke-width="6"
                                stroke-linecap="round" />
                            <path class="path" d="M326 601L37 721" stroke="white" stroke-width="6"
                                stroke-linecap="round" />
                            <path class="path" d="M292 689L52 826" stroke="white" stroke-width="6"
                                stroke-linecap="round" />
                            <path class="path" d="M377 709L247 826" stroke="white" stroke-width="6"
                                stroke-linecap="round" />
                        </svg>
                    </div>
                    <div class="flower-left position-absolute">
                        <img class="flower-left1" src="./imgs/index/flower-l.png" alt="">
                    </div>
                </div>
                <div class="right position-relative">
                    <div class="cloud-right position-absolute">
                        <img class="cloud-right-animation" src="./imgs/index/cloud-r.png" alt="">
                        <svg class="svg2 position-absolute" width="465" height="829" viewBox="0 0 465 829" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path class="path" d="M3 100L75 7" stroke="white" stroke-width="6" stroke-linecap="round" />
                            <path class="path" d="M7 183L182 11" stroke="white" stroke-width="6"
                                stroke-linecap="round" />
                            <path class="path" d="M104 179L332 3" stroke="white" stroke-width="6"
                                stroke-linecap="round" />
                            <path class="path" d="M332 118L462 43" stroke="white" stroke-width="6"
                                stroke-linecap="round" />
                            <path class="path" d="M153 368L218 352" stroke="white" stroke-width="6"
                                stroke-linecap="round" />
                            <path class="path" d="M88 428L403 384" stroke="white" stroke-width="6"
                                stroke-linecap="round" />
                            <path class="path" d="M139 601L428 721" stroke="white" stroke-width="6"
                                stroke-linecap="round" />
                            <path class="path" d="M173 689L413 826" stroke="white" stroke-width="6"
                                stroke-linecap="round" />
                            <path class="path" d="M88 709L218 826" stroke="white" stroke-width="6"
                                stroke-linecap="round" />
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

            <div data-aos="fade-right" data-aos-anchor-placement="center-bottom"
                class="position-absolute cloud cloud01">
                <img src="./imgs/index/cloud_9.png" alt="">
            </div>
            <div data-aos="fade-right" data-aos-anchor-placement="center-bottom"
                class="position-absolute cloud cloud02">
                <img src="./imgs/index/cloud_10.png" alt="">
            </div>
            <div data-aos="fade-left" data-aos-anchor-placement="center-bottom" class="position-absolute cloud cloud03">
                <img src="./imgs/index/cloud_9.png" alt="">
            </div>
            <div data-aos="fade-left" data-aos-anchor-placement="center-bottom" class="position-absolute cloud cloud04">
                <img src="./imgs/index/cloud_10.png" alt="">
            </div>
            <div data-aos="fade-right" data-aos-anchor-placement="center-bottom"
                class="position-absolute cloud cloud05">
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
            <div data-aos="fade-left" data-aos-anchor-placement="center-bottom"
                class="position-absolute cloud cloud08-1">
                <img src="./imgs/index/cloud_10.png" alt="">
            </div>


            <div data-aos="fade-up" class="container-fluid meowTemple">

            </div>
            <div type="button" class="position-absolute btn btn-xl h4 btn01_ba">
                月老參拜全攻略
            </div>


        </div>
        <div class="section3_ba position-relative">
            <div class="position-absolute cloud09">
                <img data-aos="fade-up" data-aos-anchor-placement="center-bottom" src="./imgs/index/cloud_11.png"
                    alt="">
            </div>
            <div data-aos="fade-right" data-aos-anchor-placement="center-bottom"
                class="position-absolute cloud cloud10">
                <img src="./imgs/index/cloud_9.png" alt="">
            </div>
            <div data-aos="fade-right" data-aos-anchor-placement="center-bottom"
                class="position-absolute cloud cloud11">
                <img src="./imgs/index/cloud_10.png" alt="">
            </div>

            <div data-aos="fade-left" data-aos-anchor-placement="center-bottom" class="position-absolute cloud cloud12">
                <img src="./imgs/index/cloud_10.png" alt="">
            </div>
            <div class="container-fluid">
                <div data-aos="fade-up" data-aos-anchor-placement="center-bottom"
                    class="leftCat flex-row position-absolute">
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
                <div data-aos="fade-up" data-aos-anchor-placement="center-bottom"
                    class="rightCat flex-row position-absolute">
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
                開始線上求籤！
            </div>

        </div>
        <div class="section4_ba position-relative">
            <div data-aos="fade-right" data-aos-anchor-placement="center-bottom"
                class="position-absolute cloud cloud13">
                <img src="./imgs/index/cloud_9.png" alt="">
            </div>
            <div data-aos="fade-right" data-aos-anchor-placement="center-bottom"
                class="position-absolute cloud cloud14">
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
                <div class="row">
                    <div class="col-6 flex-row justify-content-center">
                        <h1>線上求籤還不夠！</h1>
                        <h6>身邊朋友都出雙入對，過得甜甜蜜蜜，身為單身狗的你是不是常常被閃瞎，狗糧都快吃飽啦？好險近年過節都能用防疫當藉口，躲在家裡偷偷流眼淚⋯⋯但是疫情期間就無法親自拜月老求紅線，理想對象到底要迷路到什麼時候？<br><br>

                            別擔心！你的心聲月老喵都聽到啦！<br><br>

                            月老喵與台北霞海城隍攜手合作，以「結緣」為概念聯手打造各式各樣質感好物，不只有牽起愛情、友情和親情緣分的功效，也能幫忙傳遞你火熱的心意！</h6>
                        <div type="button" class=" btn btn-xl h4 btn03_ba flex-wrap">
                            看更多結緣商品！
                        </div>
                    </div>
                    <div class="col-6">
                        <div data-aos="fade-left" data-aos-anchor-placement="center-bottom" class="cartCat">
                            <img src="./imgs/index/14.png" alt="">
                        </div>
                    </div>

                </div>
                <div class="row">
                    <h1 class="m-auto">快讓月老喵幫你加持！</h1>
                    <!-- TODO: 07卡片 -->
                </div>
            </div>

        </div>
        <div class="section5_ba position-relative">
            <div data-aos="fade-right" data-aos-anchor-placement="center-bottom"
                class="position-absolute cloud cloud13">
                <img src="./imgs/index/cloud_9.png" alt="">
            </div>
            <div data-aos="fade-right" data-aos-anchor-placement="center-bottom"
                class="position-absolute cloud cloud14">
                <img src="./imgs/index/cloud_10.png" alt="">
            </div>
            <div data-aos="fade-left" data-aos-anchor-placement="center-bottom" class="position-absolute cloud cloud15">
                <img src="./imgs/index/cloud_9.png" alt="">
            </div>
            <div data-aos="fade-left" data-aos-anchor-placement="center-bottom" class="position-absolute cloud cloud16">
                <img src="./imgs/index/cloud_10.png" alt="">
            </div>
            <div class="container">
                <div class="row">

                    <div class="col-6">
                        <div class="catPhotoGroup position-absolute">
                            <div class="catPhoto1 position-absolute" data-aos="flip-left"
                                data-aos-anchor-placement="top-bottom">
                                <img class="" src="./imgs/index/2.png" alt="">
                            </div>
                            <div class="catPhoto2 position-absolute" data-aos="flip-right"
                                data-aos-anchor-placement="top-center">
                                <img class="" src="./imgs/index/3.png" alt="">
                            </div>
                            <div class="catPhoto3 position-absolute" data-aos="flip-left"
                                data-aos-anchor-placement="center-center">
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
                            看更多旅遊行程！
                        </div>
                    </div>
                </div>
                <div class="row">
                    <h1 class="m-auto">熱門旅遊都在等你！</h1>
                    <!-- TODO: 07卡片 -->
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
                <div class="memberCat1 position-absolute" data-aos="fade-left"
                    data-aos-anchor-placement="center-bottom">
                    <img src="./imgs/index/26.png" alt="">
                </div>
                <div class="memberCat2 position-absolute" data-aos="fade-right"
                    data-aos-anchor-placement="center-bottom">
                    <img src="./imgs/index/27.png" alt="">
                </div>
                <div class="memberCat3 position-absolute" data-aos="fade-right"
                    data-aos-anchor-placement="center-bottom">
                    <img src="./imgs/index/28.png" alt="">
                </div>
            </div>
            <div class="row reel">
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
                <div data-aos="fade-up" data-aos-anchor-placement="center-center" class="row">
                    <h1 class="m-auto welfare position-absolute">會員獨享福利</h1>
                </div>
                <div class="memberContent text-align">
                    <h4 class="m-auto" data-aos="fade-right" data-aos-anchor-placement="top-bottom">＊每日運勢占卜＊</h4>
                    <h4 class="m-auto" data-aos="fade-right" data-aos-anchor-placement="top-bottom">＊商品、行程不定期優惠＊</h4>
                    <h4 class="m-auto" data-aos="fade-right" data-aos-anchor-placement="top-bottom">＊生日好禮大放送＊</h4>
                </div>
            </div>

            <div data-aos="fade-up" class="container-fluid ">

            </div>
            <div type="button" class="position-absolute btn btn-xl h4 btn05_ba">
                馬上成為月老喵的一員！
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
            <div data-aos="fade-left" data-aos-anchor-placement="center-bottom"
                class="position-absolute cloud cloudm03">
                <img src="./imgs/index/cloudm_9.png" alt="">
            </div>
            <div data-aos="fade-left" data-aos-anchor-placement="center-bottom"
                class="position-absolute cloud cloudm04">
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
            <div data-aos="fade-right" data-aos-anchor-placement="center-bottom"
                class="position-absolute cloud cloudm01">
                <img src="./imgs/index/cloudm_9.png" alt="">
            </div>
            <div data-aos="fade-right" data-aos-anchor-placement="center-bottom"
                class="position-absolute cloud cloudm02">
                <img src="./imgs/index/cloudm_10.png" alt="">
            </div>

            <div data-aos="fade-up" data-aos-anchor-placement="center-bottom" class="container-fluid meowTemple_m">
            </div>
            <div type="button" class="position-absolute btn indexbtn_m btn01_m_ba mx-auto">
                <div class="btn-l">
                    月老參拜全攻略
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
                    開始線上求籤！
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

            </div>

            <!-- TODO: 07卡片 -->

            <div type="button" class="position-absolute btn indexbtn_m btn01_m_ba mx-auto mt-3">
                <div class="btn-l">
                    快讓月老喵幫你加持！
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
                <div class="msection5FirstPhoto position-absolute mt-5" data-aos="flip-right"
                    data-aos-anchor-placement="center-bottom">
                    <img class="w-100" src="./imgs/index/3.png" alt="">
                </div>
                <div class="msection5SecondPhoto position-absolute mt-5" data-aos="flip-left"
                    data-aos-anchor-placement="center-bottom">
                    <img class="w-100" src="./imgs/index/2.png" alt="">
                </div>
                <div class="msection5ThirdPhoto position-absolute mt-5" data-aos="flip-right"
                    data-aos-anchor-placement="center-bottom">
                    <img class="w-100" src="./imgs/index/1.png" alt="">
                </div>
            </div>


            <div class="msection5Card">

            </div>

            <!-- TODO: 07卡片 -->

            <div type="button" class="position-absolute btn indexbtn_m btn01_m_ba mx-auto mt-3">
                <div class="btn-l">
                    熱門旅遊都在等你！
                </div>
            </div>

        </div>

        <div class="msection6_ba position-relative text-align">

            <div class="row reelm mt-3">
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
                <h4 data-aos="fade-up" data-aos-anchor-placement="center-bottom" class="m_title_ba">
                    會員獨享福利
                </h4>
            </div>

            <div class="msection5Content mx-auto mt-3" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
                <p>
                    ＊每日運勢占卜＊<br>
                    ＊商品、行程不定期優惠＊<br>
                    ＊生日好禮大放送＊
                </p>
            </div>

            <div class="memberCatm">
                <div class="memberCat1m position-absolute" data-aos="fade-left"
                    data-aos-anchor-placement="center-bottom">
                    <img src="./imgs/index/26.png" alt="">
                </div>
                <div class="memberCat2m position-absolute" data-aos="fade-right"
                    data-aos-anchor-placement="center-bottom">
                    <img src="./imgs/index/27.png" alt="">
                </div>
                <div class="memberCat3m position-absolute" data-aos="fade-right" data-aos-anchor-placement="top-bottom">
                    <img src="./imgs/index/28.png" alt="">
                </div>
            </div>


            <div type="button" class="position-absolute btn indexbtn_m btn02_m_ba mx-auto">
                <div class="btn-l">
                    馬上成為月老喵的一員！
                </div>
            </div>

        </div>
    </div>
</div>
<?php include __DIR__ . '/parts/scripts.php'; ?>
<!-- 打字 js -->
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<!-- jQ -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<!-- 我的 -->
<script src="index.js"></script>
<!-- bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
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
<?php
require __DIR__. '/parts/meow_db.php';  // /開頭
$pageName = '月老文化'; //頁面名稱
$title = '月老文化';

$area = isset($_GET['area']) ? intval($_GET['area']):0; //用戶指定哪個區域
$item = isset($_GET['item']) ? intval($_GET['item']):0; //用戶指定哪個項目
$cate= isset($_GET['cate']) ? intval($_GET['cate']):0; //用戶指定分類


$qsp = []; // query string parameters

$where = 'WHERE 1';
if($cate){
    $where.="AND category_tag=$cate";
    $qsp['cate']=$cate;
};
//取得分類
$tag_sql= sprintf(
   "SELECT * FROM `temple` %s ORDER BY `sid` DESC",
   $where,
);
$t_rows =  $pdo->query($tag_sql)->fetchAll(); 

// var_dump([
//     't_rows' => $t_rows,
// ]);
// exit;

//取得廟宇資料表
$sql = "SELECT * FROM `temple` WHERE 1";
$temples = $pdo->query($tag_sql)->fetchAll(); 



// var_dump([
//     '$temps' => $temples,
// ]);
// exit;


//取得地區資料
$a_sql = "SELECT * FROM `address` WHERE parent=0 AND sid < 4";
$areas = $pdo->query($a_sql)->fetchAll();


// echo json_encode([ 
//     'areas' => $areas,
// ]);
// exit;



$temple_sql = "SELECT a.sid area_sid, t.* FROM
(SELECT * FROM `address` WHERE sid<4) a
JOIN (SELECT * FROM `address` WHERE sid>=5 AND sid<=23) b
ON a.sid=b.parent
JOIN temple t ON t.address_sid=b.sid";
$temples = $pdo->query($temple_sql)->fetchAll();

// var_dump([ 
//     'temples' => $temples,
// ]);
// exit;



?>



<?php include __DIR__ . '/parts/html-head.php'; ?>
<link rel="stylesheet" href="./culture.css">

<?php include __DIR__ . '/parts/navbar.php'; ?>

<div class="body_lb">
    <!-- kv-pc -->
    <div class="d-none d-md-block">
        <div class="temp_bg"></div>
    </div>
    <!-- kv-mb -->
    <div class="mb_kv_lb d-md-none"></div>

    <!-- sidebar-pc -->
    <div class="sidebar_lb d-none d-md-block">
        <ul>
            <li class="pb-1 list-unstyled sideBtn1_lb">
                <a class="active_lb" href="#moonold_lb">
                    <span>－ 關於月老</span>
                </a>
            </li>
            <li class="pb-1 list-unstyled">
                <a href="#byebye_lb">
                    <span>－ 參拜流程</span>
                </a>
            </li>
            <li class="pb-1 list-unstyled">
                <a href="#notice_lb">
                    <span>－ 參拜月老禁忌</span>
                </a>
            </li>
            <li class="pb-1 list-unstyled">
                <a href="#givebk_lb">
                    <span>－ 如何還願</span>
                </a>
            </li>
            <li class="pb-1 list-unstyled">
                <a href="#selected-temple_lb">
                    <span>－ 全台精選月老廟</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- sidebar-mb -->
    <div class="container mbnavbar_lb p-0 d-md-none">
        <div class="row m-0">
            <ul class="w-100 mb-0 list-unstyled d-flex justify-content-center links-group_lb">
                <li class="mx-1 my-1 ">
                    <a class=" mbactive_lb" href="#mbmoonold_lb">
                        <p class="s_lb mb-0 py-1">關於月老</p>
                    </a>
                </li>
                <li class="mx-1 my-1">
                    <a class="" href="#byebye_lb">
                        <p class="s_lb mb-0 py-1">參拜流程</p>
                    </a>
                </li>
                <li class="mx-1 my-1">
                    <a href="#mbnotice_lb">
                        <p class="s_lb mb-0 py-1">參拜禁忌</p>
                    </a>
                </li>
                <li class="mx-1 my-1">
                    <a href="#mbsection4_lb">
                        <p class="s_lb mb-0 py-1">如何還願</p>
                    </a>
                </li>
                <li class="mx-1 my-1">
                    <a href="#mbselected-temple_lb">
                        <p class="s_lb mb-0 py-1">精選月老廟</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>


    <!-- 關於月老-pc -->
    <div class="position-relative container-fluid section1_lb targetScrollSection d-none d-md-block p-0" id="moonold_lb">
        <h1 class="title_lb text-center about_title_lb">關於月老</h1>
        <div class="row section1-content_lb position-relative m-0">
            <div class="position-absolute cloud_left_lb">
                <img class="w-100" src="./imgs/culture/cloud_left.png" alt="">
            </div>
            <div class="col-4 offset-1 left-pic_lb">
                <img class="w-100" src="./imgs/culture/section1-1.png" alt="">
            </div>
            <div class="position-absolute section1-cat1_lb">
                <img class="w-100" src="./imgs/culture/section1-cat1.png" alt="">
            </div>
            <div class="col-4 top-content_lb">
                <h6 class="cul-text87">
                    月下老人，簡稱月老，是道教的神祇之一，為掌管男女姻緣之神。形象常被塑造成白鬍長鬚，臉泛紅光的慈祥老者；左持姻緣簿，右拄拐杖。
                    <br><br>
                    傳說唐代韋固曾在客棧遇到一位老人，在夜光下翻著簿子，好奇詢問，才知道是姻緣簿，又問他自己將來婚配為誰？老人回說為店北頭賣菜瞎老太太三歲的小女兒。韋固一氣之下，派僕人刺殺小女兒，僕人心虛只刺傷她的額頭。十多年後，該女被刺史收為義女，並將其許配給韋固，新婚之後發現妻子額上常貼花黃是因幼年被刺，這才知月下老人所配的姻緣奇準無比，其神蹟從此廣為流傳。
                </h6>
            </div>
        </div>

        <div class="row section1-content2_lb position-relative m-0 justify-content-center">
            <div class="col-4 bottom-content_lb">
                <h6 class="cul-text87">
                    直到現今對月老的形象便是左手拿著姻緣簿，右手拄著拐杖，將姻緣簿中有姻緣關係的未婚男女以紅絲線綁住，使得有情人終成眷屬，因此不少到了適婚年齡的民眾們，便會前去參拜月老，求取姻緣。
                    <br> <br>
                    傳統民間信仰中，月老是一個專門掌管人們姻緣的神。然而最初的月下老人其實只負責保管姻緣簿，並無幫人媒合的神力在。但百姓相傳月老有著成人之美，撒嬌一下便會幫忙協助撮合。
                </h6>
            </div>

            <div class="position-absolute cloud_right_lb d-none d-md-block">
                <img class="w-100" src="./imgs/culture/cloud_right.png" alt="">
            </div>

            <div class=" col-5 right-pic_lb position-relative">
                <img class="w-100" src="./imgs/culture/section1-2.png" alt="">
            </div>
            <div class="position-absolute section1-cat2_lb">
                <img class="w-100" src="./imgs/culture/section1-cat2.png" alt="">
            </div>
        </div>
        <div class="position-relative tempic-group_lb d-none d-md-block">
            <div class="position-absolute s1-circleBg2">
                <img class="w-100" src="./imgs/culture/s1-circlebg2.png" alt="">
            </div>
            <div class="position-absolute s1-circleBg d-none d-md-block">
                <img src="./imgs/culture/s1-circlebg.png" alt="">
            </div>
            <div class="position-absolute s1-bg">
                <img class="w-100" src="./imgs/culture/s1-bg.png" alt="">
            </div>
            <div class="pic-group_lb">
                <div class="row tmp-pic1_lb">
                    <div class="offset-3 col-3 text-center tmp-pic1_lb">
                        <img class="w-100" src="./imgs/culture/temple group1.png" alt="">
                        <p class="py-1 m-0 s-title_lb">台灣祀典武廟</p>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="offset-1 col-4 text-center tmp-pic2_lb">
                        <img class="w-100" src="./imgs/culture/temple group2.png" alt="">
                        <p class="py-1 m-0 s-title_lb">龍山寺</p>
                    </div>
                </div>
                <div class="row mt-2 tmp-pic3_lb">
                    <div class="offset-3 col-3 text-center tmp-pic3_lb">
                        <img class="w-100" src="./imgs/culture/temple group3.png" alt="">
                        <p class="py-1 m-0 s-title_lb">鹿港天后宮</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 關於月老-mb -->
    <div class="container d-md-none pt-4 mbtargetScrollSection mb-section1_lb" id="mbmoonold_lb">
        <h1 class="text-center mb-title_lb pt-4">關於月老</h1>
        <div class="mb-section1-top_lb">
            <p class="mt-3 mb-p_lb">
                月下老人，簡稱月老，是道教的神祇之一，為掌管男女姻緣之神。形象常被塑造成白鬍長鬚，臉泛紅光的慈祥老者；左持姻緣簿，右拄拐杖。
            </p>
            <div class="mbleft_pic_lb">
                <img class="w-100" src="./imgs/culture/section1-1.png" alt="">
            </div>
        
            <p class="mt-2 mb-p_lb">
            傳說唐代韋固曾在客棧遇到一位老人，在夜光下翻著簿子，好奇請問，才知是姻緣簿，又問他自己將來婚配為誰？老人回說為店北頭賣菜瞎老太太三歲的小女兒。韋固一氣之下，派僕人刺殺小女兒，誰知僕人心虛只刺傷她的額頭。
            <br>
            十多年後，該女被刺史收為義女，並將其許配給韋固，新婚之後發現妻子額上常貼花黃是因幼年被刺，這才知月下老人所配的姻緣奇準無比，其神蹟從此廣為流傳
            </p>
        </div>
        <div class="mb-section1-bottom_lb mt-5">
            <div class="mbright_pic_lb">
                <img class="w-100" src="./imgs/culture/section1-2.png" alt="">
            </div>
            <p class="mt-2 mb-p_lb">
                直到現今對月老的形象便是左手拿著姻緣簿，右手拄著拐杖，將姻緣簿中有姻緣關係的未婚男女以紅絲線綁住，使得有情人終成眷屬，因此不少到了適婚年齡的民眾們，便會前去參拜月老，求取姻緣。
                <br>
                傳統民間信仰中，月老是一個專門掌管人們姻緣的神。然而最初的月下老人其實只負責保管姻緣簿，並無幫人媒合的神力在。但百姓相傳月老有著成人之美，撒嬌一下便會幫忙協助撮合。
            </p>
        </div>
    </div>


    <!--參拜流程-->
    <div class="section2_box position-relative pt-5">
        <div class="container mbtargetScrollSection targetScrollSection section2_lb" id="byebye_lb">
            <div class="parallaxbg_lb d-md-none"></div>
            <h1 class="text-center  mb-title_lb d-md-none pt-5">參拜流程</h1>
            <h1 class="text-center mt-md-5 d-none d-md-block ">參拜流程</h1>
            <!-- <svg id="rdLine-1" class="d-none " width="522" height="333" viewBox="0 0 522 333" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M520 2C449 4.16667 290.4 38.5 224 158.5C157.6 278.5 48.3333 323.833 2 331.5" stroke="#CD562F" stroke-width="3" stroke-linecap="round"/>
                </svg> -->
            <!-- 準備供品 -->
            <div class="step1_lb worship-card row d-flex justify-content-center align-items-center">
                <div class="col-12 col-md-5 ">
                    <h4 class="worship-card-title">
                        01
                        <br>
                        準備供品
                    </h4>
                    <p class="wcard-p_lb text-cneter">
                        備香、金紙與2份供品一份給廟宇主神，一份給月老。
                        <br>
                        給月老供品需要「雙數」及「甜食」。
                        月老喜歡吃甜甜、軟軟的食物，供品可以準備巧克力、糖果、甜麻糬等。此外，也可以準備諧音特殊的供品，例如：花生（花生好事）、紅棗（早日實現）、枸杞（人氣爆棚）、桂圓（圓圓滿滿）、鮮花水果（開花結果），以及網路上很夯的求姻緣組合「筷子＋來一客泡麵＝（桃花快來）」等。
                    </p>
                </div>
                <div class=" col-12 col-md-4">
                    <div class="bimg-wrap_lb">
                        <img class="w-100" src="./imgs/culture/供品.png" alt="">
                    </div>
                </div>
            </div>
            <svg id="rdLine-2" class="rdLine-2 d-none" width="170" height="180" viewBox="0 0 170 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M168.5 2C134.333 10.5 58.9999 39.8 30.9999 89C2.99991 138.2 0.666578 169.167 2.99991 178.5" stroke="#CD562F" stroke-width="3" stroke-linecap="round" />
            </svg>
            <div class="s2-leftcloud_lb position-absolute ">
                <img class="w-100" src="./imgs/culture/cloud_7.png" alt="">
            </div>
            <!-- 參拜廟宇眾神 -->
            <div class="step2_lb worship-card row d-flex justify-content-center align-items-center ">
                <div class="col-12 col-md-4 order-1 order-md-0">
                    <div class="img-wrap_lb">
                        <img class="w-100" src="./imgs/culture/參拜眾神.png" alt="">
                    </div>
                </div>

                <div class="col-12 col-md-5 order-0 order-md-1">
                    <h4 class="worship-card-title">
                        02
                        <br>
                        參拜廟宇眾神
                    </h4>
                    <p class="wcard-p_lb">
                        點香後，有些廟先拜天公，有些先拜主神，依據每間廟的插香順序，也許你只想求感情，但還是要向每尊神打過招呼喔。拜每尊神時，心中都要默念名字、農曆生日、家裡地址，讓神明知道你是誰。
                    </p>
                </div>
            </div>
            <svg id="rdLine-3" class="rdLine-3 d-none" width="282" height="208" viewBox="0 0 282 208" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2 2C10.6667 35.8333 47.2 107.3 124 122.5C200.8 137.7 260.333 184.833 280.5 206.5" stroke="#CD562F" stroke-width="3" stroke-linecap="round" />
            </svg>


            <!-- 向月老祈願-->
            <div class="step3_lb worship-card row d-flex justify-content-center align-items-center ">
                <div class="col-12 col-md-5">
                    <h4 class="worship-card-title ">
                        03
                        <br>
                        向月老祈願
                    </h4>
                    <p class="wcard-p_lb">
                        拜月老時，可以跟月老「盡量清楚」說明自己喜歡的類型、條件，從外觀長相、職業、個性，講得越詳細越好，讓月老不會鎖定目標錯誤，也可更快幫你找到適合的對象；而若是已經有目標對象，也可以直接跟月老說對方的姓名、生日。
                    </p>
                </div>
                <div class="col-12 col-md-4">
                    <div class="img-wrap_lb">
                        <img class="w-100" src="./imgs/culture/月下老人2.png" alt="">
                    </div>
                </div>
            </div>
            <svg id="rdLine-4" class="rdLine-4 d-none " width="204" height="217" viewBox="0 0 204 217" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M196 1.5C230 43.5 95.5 46 121 148C136.679 210.717 20.6667 194 1.5 215.5" stroke="#CD562F" stroke-width="3" stroke-linecap="round" />
            </svg>

            <div class="s2-rightcloud_lb d-none d-md-block position-absolute ">
                <img class="w-100" src="./imgs/culture/cloud_8.png" alt="">
            </div>
            <div class="s2-leftBg position-absolute ">
                <img class="w-100" src="./imgs/culture/s2-leftbg2.png" alt="">
            </div>
            <div class="s2-rightBg position-absolute ">
                <img class="w-100" src="./imgs/culture/s2-rightbg.png" alt="">
            </div>
            <!--  天公爐-->
            <div class="step4_lb worship-card row d-flex justify-content-center align-items-center">
                <div class="col-12 col-md-4 order-1 order-md-0">
                    <div class="img-wrap_lb ">
                        <img class="w-100" src="./imgs/culture/香爐.png" alt="">
                    </div>
                </div>
                <div class="col-12 col-md-5 order-0 order-md-1">
                    <h4 class="worship-card-title">
                        04
                        <br>
                        天公爐插香
                    </h4>
                    <p class="wcard-p_lb">
                        祭拜月老結束，回到天公爐三拜，插香在天公爐上，再次合掌三拜。
                    </p>
                </div>
            </div>
            <svg id="rdLine-5" class="rdLine-5 d-none" width="275" height="172" viewBox="0 0 275 172" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2 2C10 24.6667 45.3 69.5 122.5 67.5C199.7 65.5 255.333 135 273.5 170" stroke="#CD562F" stroke-width="3" stroke-linecap="round" />
            </svg>



            <!-- 擲筊求紅線 -->
            <div class="step5_lb worship-card row d-flex justify-content-center align-items-center">
                <div class="col-12 col-md-5 ">
                    <h4 class="worship-card-title">
                        05
                        <br>
                        擲筊求紅線
                    </h4>
                    <p class="wcard-p_lb">
                        如果想和月老求紅線，需要先詢問月老，連擲三次聖筊才可以帶走紅線，再帶著紅線至天公爐順時鐘過三圈；如果遲遲無法連續三次聖筊，也可能是對象資訊不夠清楚或是緣分未到，那就不要強求紅線以免招來爛桃花。
                    </p>
                </div>
                <div class="col-12 col-md-4">
                    <div class="img-wrap_lb ">
                        <img class="w-100" src="./imgs/culture/擲筊.png" alt="">
                    </div>
                </div>
            </div>
            <svg id="rdLine-6" class="rdLine-6 d-none " width="184" height="459" viewBox="0 0 184 459" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M182 1.5C155.833 18.8333 103.8 76.4 105 168C106.5 282.5 75.5 337.5 40.5 378C5.5 418.5 1.5 446 1.5 457.5" stroke="#CD562F" stroke-width="3" stroke-linecap="round" />
            </svg>

            <div class="cp-cat-move">
                <div class="heart-animation_lb  d-flex">
                    <img class="w-100" src="./imgs/culture/couple cat-heart.png" alt="">
                </div>
                <div class="d-flex justify-content-between">
                    <div class="left-cat-animation_lb  mb-leftmove_lb d-flex">
                        <img class="w-100" src="./imgs/culture/couple cat-left.png" alt="">
                    </div>
                    <div class="right-cat-animation_lb   mb-rightmove_lb d-flex">
                        <img class="w-100" src="./imgs/culture/couple cat-right.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 參拜月老禁忌-pc -->
    <section class=" section3_lb  position-relative">
        <div class="s3-leftcloud_lb position-absolute">
            <img class="w-100" src="./imgs/culture/cloud_6.png" alt="">
        </div>
       
        <div class="s3-rightcloud_lb position-absolute">
            <img class="w-100" src="./imgs/culture/cloud_8.png" alt="">
        </div>
        <div class="container targetScrollSection d-none d-md-block" id="notice_lb">
            <h1 class="cul-text100 text-center">參拜月老禁忌</h1>
            <div class="row pt-5 d-flex justify-content-center">
                <div class="ban-card col-4 ">
                    <div class="face_lb face1_lb ">
                        <div class="ban-card-content">
                            <div class="ban-img-wrap">
                                <img class="w-100" src="./imgs/culture/遮蔽臉面.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="face_lb face2_lb">
                        <div class="ban-card-content">
                            <h3>遮蔽臉面</h3>
                            <p>進入廟宇勿著拖鞋涼鞋，服裝整潔不暴露；拜拜時先把帽子和太陽眼鏡取下，才不會讓月老看不到面容。</p>
                        </div>
                    </div>
                </div>
                <div class="ban-card col-4">
                    <div class="face_lb face1_lb">
                        <div class="ban-card-content">
                            <div class="ban-img-wrap">
                                <img class="w-100" src="./imgs/culture/紅線多拿.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="face_lb face2_lb">
                        <div class="ban-card-content">
                            <h3>紅線多拿</h3>
                            <p>多數廟宇的紅線都要向月老擲筊求得，連擲三次聖筊才能帶走，請不要多拿紅線，容易會有感情糾紛。</p>
                        </div>
                    </div>
                </div>
                <div class="ban-card col-4">
                    <div class="face_lb face1_lb">
                        <div class="ban-card-content">
                            <div class="ban-img-wrap">
                                <img class="w-100" src="./imgs/culture/雨傘.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="face_lb face2_lb">
                        <div class="ban-card-content">
                            <h3>雨傘不進廟</h3>
                            <p>傘諧音「散」，怕姻緣會「散」，如果帶摺疊傘記得收到包包裡，旁邊有人拿傘記得遠離，以免姻緣散掉。</p>
                        </div>
                    </div>
                </div>
                <div class="ban-card col-4">
                    <div class="face_lb face1_lb">
                        <div class="ban-card-content">
                            <div class="ban-img-wrap">
                                <img class="w-100" src="./imgs/culture/挑喜糖.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="face_lb face2_lb">
                        <div class="ban-card-content">
                            <h3>挑喜糖</h3>
                            <p>月老廟會放置喜糖，讓大家拜完月老可以吃甜沾喜氣，拿喜糖時別左挑右選，太挑月老會不知道怎麼幫你牽紅線。</p>
                        </div>
                    </div>
                </div>
                <div class="ban-card col-4">
                    <div class="face_lb face1_lb">
                        <div class="ban-card-content">
                            <div class="ban-img-wrap">
                                <img class="w-100" src="./imgs/culture/結緣茶.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="face_lb face2_lb">
                        <div class="ban-card-content">
                            <h3>別吹結緣茶</h3>
                            <p>通常月老廟會提供結緣熱茶，供香客拜完後飲用，可求平安和緣分，喝結緣茶時千萬別吹它，免得把緣分吹了。</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 參拜月老禁忌-mb -->
    <div class="mbnotice_lb py-5 d-md-none mbtargetScrollSection " id="mbnotice_lb">
        <h1 class="text-center mb-title_lb pt-5">參拜月老禁忌</h1>
        <div class="scroll-snap_lb mt-4">
            <div class="col">
                <div class="mb-ban-card text-center px-3 py-2">
                    <div class="mb-ban-img-wrap">
                        <img class="w-100" src="./imgs/culture/遮蔽臉面.png" alt="">
                    </div>
                    <h5 class="mt-3 mb-notice-title_lb">遮蔽臉面</h5>
                    <p class="mb-content_lb">
                        進入廟宇勿著拖鞋涼鞋，服裝整潔不暴露；拜拜時先把帽子和太陽眼鏡取下，才不會讓月老看不到面容。
                    </p>
                </div>
            </div>
            <div class="col">
                <div class="mb-ban-card text-center px-3 py-2">
                    <div class="mb-ban-img-wrap">
                        <img class="w-100" src="./imgs/culture/紅線多拿.png" alt="">
                    </div>
                    <h5 class="mt-3 mb-notice-title_lb">紅線多拿</h5>
                    <p class="mb-content_lb">
                        多數廟宇的紅線都要向月老擲筊求得，連擲三次聖筊才能帶走，請不要多拿紅線，容易會有感情糾紛。
                    </p>
                </div>
            </div>
            <div class="col">
                <div class="mb-ban-card text-center px-3 py-2">
                    <div class="mb-ban-img-wrap">
                        <img class="w-100" src="./imgs/culture/雨傘.png" alt="">
                    </div>
                    <h5 class="mt-3 mb-notice-title_lb">雨傘不進廟</h5>
                    <p class="mb-content_lb">
                        傘諧音「散」，怕姻緣會「散」，如果帶摺疊傘記得收到包包裡，旁邊有人拿傘記得遠離，以免姻緣散掉。
                    </p>
                </div>
            </div>
            <div class="col">
                <div class="mb-ban-card text-center px-3 py-2">
                    <div class="mb-ban-img-wrap">
                        <img class="w-100" src="./imgs/culture/挑喜糖.png" alt="">
                    </div>
                    <h5 class="mt-3 mb-notice-title_lb">挑喜糖</h5>
                    <p class="mb-content_lb">
                        月老廟都會放置喜糖，讓大家拜完月老後也可以吃甜、沾喜氣，在拿喜糖時別左挑右選找自己喜歡的，太挑的話，月老會不知道該如何幫你牽紅線。
                    </p>
                </div>
            </div>
            <div class="col">
                <div class="mb-ban-card text-center px-3 py-2">
                    <div class="mb-ban-img-wrap">
                        <img class="w-100" src="./imgs/culture/結緣茶.png" alt="">
                    </div>
                    <h5 class="mt-3 mb-notice-title_lb">別吹結緣茶</h5>
                    <p class="mb-content_lb">
                        通常月老廟會提供結緣熱茶，供香客拜完後飲用，可求平安和緣分，喝結緣茶的時候千萬別吹它，免得把緣分「吹了」。
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- 如何還願-pc -->
    <section class="position-relative">
        <div class="s4-bg-1_lb position-absolute d-none">
            <img class="w-100" src="./imgs/culture/s4-bg-1.png" alt="">
        </div>
        <div class="s3-rightbg position-absolute d-none">
            <img src="./imgs/culture/s3-rightbg.png" alt="">
        </div>
        <div class="container section4_lb position-relative targetScrollSection d-none d-md-block" id="givebk_lb">
            <div class="devotion-title position-absolute">
                <img class="w-100" src="./imgs/culture/Devotion title.png" alt="">
            </div>
            <div class="devotion-bg">
                <img class="w-100" src="./imgs/culture/devotion bg.png" alt="">
                <h3 class="devo-content text-center position-absolute">
                    向月老求得紅線，將來有成功訂婚或結婚，
                    <br>
                    記得一定要帶著喜餅到月老前，稟明身分與還願之意，
                    <br>
                    並到廟方辦事處登記，將喜餅留給後續香客嚐喜氣~
                </h3>
            </div>
            <div class="cp-cat position-absolute">
                <img class="w-100" src="./imgs/culture/cp cat.png" alt="">
            </div>
        </div>
    </section>

    <!-- 如何還願-mb -->
    <div id="mbsection4_lb" class="container mbsection4_lb position-relative  d-md-none  mbtargetScrollSection">
       
        <div class="mb-devotion-title  position-absolute">
                <img class="w-100" src="./imgs/culture/Devotion title.png" alt="">
        </div>
     
        <div class="mb-devotion-bg ">
            <img class="w-100" src="./imgs/culture/devotion bg.png" alt="">
            <h3 class="mb-devo-content text-center position-absolute">
                向月老求得紅線，將來有成功訂婚或結婚，
                <br>
                記得一定要帶著喜餅到月老前，稟明身分與
                <br>
                還願之意，並到廟方辦事處登記，將喜餅留
                <br>
                給後續香客嚐喜氣~
            </h3>
            <div class="mb-cp-cat position-absolute">
            <img class="w-100" src="./imgs/culture/cp cat.png" alt="">
        </div>
        </div>
       

    </div>

    <!------- 全台精選月老廟-pc ------->
    <div class="container-fluid targetScrollSection selected-temple_lb d-none d-md-block" id="selected-temple_lb">
        <div class="d-flex">
            <div class="map-wrap position-relative col-6">
                <div id="north-group_lb" class="active">
                    <div class="C01 landmark_lb d-inline-block text-center position-absolute" data-id="1" data-tag="祈求姻緣">
                        <h6 class="m-0 loation_lb py-2 ">台北市</h6>
                        <p class="m-0 temname_lb px-2 py-2">霞海城隍廟</p>
                    </div>
                    <div class="C06 landmark_lb d-inline-block text-center position-absolute" data-id="6" data-tag="祈求姻緣">
                        <h6 class="m-0 loation_lb py-2">台北市</h6>
                        <p class="m-0 temname_lb px-2 py-2">龍山寺</p>
                    </div>
                    <div class="C07 landmark_lb d-inline-block text-center position-absolute" data-id="7" data-tag="斬桃花、小三">
                        <h6 class="m-0 loation_lb py-2" >台北市</h6>
                        <p class="m-0 temname_lb px-2 py-2">指南宮</p>
                    </div>
                    <div class="C10 landmark_lb d-inline-block text-center position-absolute" data-id="10" data-tag="祈求姻緣">
                        <h6 class="m-0 loation_lb py-2">新北市</h6>
                        <p class="m-0 temname_lb px-2 py-2">兔兒神廟</p>
                    </div>
                </div>
                <div id="middle-group_lb" class="d-none">
                    <div class="C03 landmark_lb d-inline-block text-center position-absolute" data-id="3" data-tag="祈求姻緣">
                        <h6 class="m-0 loation_lb py-2 ">台中市</h6>
                        <p class="m-0 temname_lb px-2 py-2">樂成宮</p>
                    </div>
                    <div class="C04 landmark_lb d-inline-block text-center position-absolute" data-id="4" data-tag="祈求姻緣">
                        <h6 class="m-0 loation_lb py-2">彰化縣</h6>
                        <p class="m-0 temname_lb px-2 py-2">鹿港天后宮</p>
                    </div>
                    <div class="C08 landmark_lb d-inline-block text-center position-absolute" data-id="8" data-tag="祈求姻緣">
                        <h6 class="m-0 loation_lb py-2">南投縣</h6>
                        <p class="m-0 temname_lb px-2 py-2">月下老人祠</p>
                    </div>
                </div>
                <div id="south-group_lb" class="d-none">
                    <div class="C02 landmark_lb d-inline-block text-center position-absolute" data-id="2" data-tag="斬桃花、小三">
                        <h6 class="m-0 loation_lb py-2 ">台南市</h6>
                        <p class="m-0 temname_lb px-2 py-2">祀典武廟</p>
                    </div>
                    <div class="C05 landmark_lb d-inline-block text-center position-absolute" data-id="5" data-tag="幸福美滿">
                        <h6 class="m-0 loation_lb py-2">台南市</h6>
                        <p class="m-0 temname_lb px-2 py-2">祀典大天后宮</p>
                    </div>
                    <div class="C09 landmark_lb d-inline-block text-center position-absolute" data-id="9" data-tag="斬桃花、小三">
                        <h6 class="m-0 loation_lb py-2">台南市</h6>
                        <p class="m-0 temname_lb px-2 py-2">重慶寺</p>
                    </div>
                    <div class="C11 landmark_lb d-inline-block text-center position-absolute" data-id="11" data-tag="祈求姻緣">
                        <h6 class="m-0 loation_lb py-2">台南市</h6>
                        <p class="m-0 temname_lb px-2 py-2">大觀音亭</p>
                    </div>
                    <div class="C12 landmark_lb d-inline-block text-center position-absolute" data-id="12" data-tag="祈求姻緣">
                        <h6 class="m-0 loation_lb py-2">高雄市</h6>
                        <p class="m-0 temname_lb px-2 py-2">關帝廟</p>
                    </div>
                </div>
                <svg class="mapsvg_lb" version="1.1" id="cf503461-00bd-459a-aeb5-062ebc913211" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 595.3 841.9" style="enable-background:new 0 0 595.3 841.9;" xml:space="preserve">
                    <style type="text/css">
                        .st0 {
                            fill: #F5DFC2;
                            stroke: #FFFFFF;
                            stroke-miterlimit: 10;
                        }

                        .st1 {
                            display: none;
                            fill: none;
                        }

                        .st2 {
                            fill: #F5DFC2;
                        }
                    </style>
                    <path id="_x32_b6aac2d-ce2d-4c48-89d5-ff2a81000e07" class="st0" d="M193.2,485l-0.1-1.1l-1.1-0.4h-2.6l-0.3-1l0.1-3.5l2-4.7l1,0.1
                    l2.5-1l0.9-3.4l0.7-1.1l-0.2-2.4l-0.4-0.6l-1,0.9l-0.9-0.7l-0.5-1l-0.1-1.3l0.7-2.2v-1.1l-1-0.3l0.1-1.2l1.5-2.9h-1.1l-1.1-0.6
                    L192,454l0.5-1v-1.4l0.6-0.8l0.3-1.2l0.5-0.9v-1.3l-1-0.4l-3.9,0.3l-1.2-0.4l-0.6-1l0.3-6.2l1.1-0.6l2.6,0.1l4,1.5h2.6l1,1.5h2.6
                    l1.9-0.9l4.3,1.5l2.6,0.3l1.6-1.2l1.2-1.5l0.2-2.4l-0.5-2.1l1.4-1.4h2.2v2.2l2.4,0.9l0.7-1.9l3.3-1.9l0.5-2.4l1.2-1.4l4.3-1.7l1.9,1
                    l1.2-4.1l1-1.7l2.8,0.2l1.7-0.9l0.7-2.1l4-1.2l0.7-1.9l1.6-1.2l1.2-1.5l1.9,0.9l1.6,1.2l1.9,0.7l4-1.5h5.2l3.6-1.9l3.4,0.8l1,3.5
                    l2.9,2.4l1,1.5l1.7,1l2.4,0.2l1.5,1.2l2.1,0.7l9.5,1l1.9-1l1.2-1.4l3.8,0.2l-0.3,2.6l1.4,2.2l1.4-1.4l2.2-0.5l1.4,1.4l2.1-0.2
                    l1.9-0.7l2.4,0.2l1.9,1l2.4,0.3l0.9-1.7v-2.4l-0.5-2.1l-1-1.5l1.1-1.6l4.4-0.4l7.9,2.9h2.6l2.2,0.5l0.9,1.7l0.2,5.9l-0.5,2.2
                    l-1.9,1.5v2.6l1,1.7l1.5,1.4l0.3,5l1.7,4l1.4,1.5l7.8,0.9l3.8-1.5l7.6,0.7l1.9,0.7l5.8,0.1l-0.8,0.2l-1.7,0.9l-4.5,0.7l-1.5,1
                    l-4.3,0.9l-2.9,2.4l-1,1.7l-1.9,0.9l-1.5,1.2l-2.2,0.4l-1.5,1.7l-1.2,2.9l-1.2,1l-0.7,1.9l-1.2,1.4l-0.2,2.4l-1.9,0.7h-2.6l-1.3,1.5
                    l-1,1.7l-2.8,2.8l-4.8,0.3l-1.5,4l-3.5,1.7l-0.7,1.9l-4.5,0.3l-0.9,4.5l-5.5-0.2l-1.5-1.4l-5.4-0.2l-0.9,7.9l0.9,1.9l1.4,1.7v2.6
                    l-1.4,1.2l-1.7-0.9l-4.3,0.9l-2.1-0.7l-2.4-1.7l-2.6,3.8l-2.1,0.5l-2.2-0.2l-2.9-2.1l-4.1-1.2l-0.7-1.7l2.2-3.3l-0.5-1.7l-1.4-2.2
                    l-0.4-1.7l0.9-1.7l-0.7-1.9l-0.2-2.4l1-1.9l1.5-1.2l0.2-2.1l-0.7-1.9l-2.4-0.2l-2.6-0.9l-0.7-1.5l1.7-1.2l-0.2-2.2l-5.4-0.3v-2.2
                    l1.7-1.2l1-1.5l-1.3-1.2l-1.5,0.9l-2.1-0.5l-1.7-1.4l-2.2-0.7l-1.2-1.5l-2.6-0.7l-0.2,0.3l-1.6,1l-2.2,0.2l-1.4-1.4l-2.2,0.4
                    l-3.6,1.7h-5.2l-4.1,2.4l-0.2,0.2l-1,1.7l-4.3-0.2l0.2,2.1l-4.8,0.3l-0.3,2.2l-0.9,1.7l-1.2,1l-1.7-1l-1.4,1.4l0.7,1.9l-0.3,1.2
                    l-6.6,3.3l-0.5,2.1l-2.2,3.3L206,491l-3.1-0.9l-0.9-1.4v1.9l-1.7-0.2l-1.6-1.4l-0.7-2.1l-2.6-0.5L193.2,485L193.2,485z" />
                    <path id="_x31_e42a38a-74d1-495e-b9b2-11b728815577" class="st0" d="M242.9,444.9l0.3,2.2l2.1,2.1l-1.4,3.1l6.9,1l0.7,1.9l1.4,1.9
                    l1.7,0.9l1.7-1l0.9-1.7l3.1-2.4l1.4,1.2l3.1,1l0.5-1.7l2.4-2.9l-1.4-1.4l-0.5-2.1l-2.1-0.5l-0.9-1.7l-1.5-1l-1.9,0.7l-1.4-1.2
                    l-1.2-1.7l-1.7-0.9l-2.1,0.5l-4.8,3.5l-2.1-0.5L242.9,444.9L242.9,444.9L242.9,444.9z" />
                    <path id="_x32_1535635-db1e-4831-a63f-263ab3ed4b79" class="st0" d="M532.4,80.7v-0.8l-0.7-0.8l0.3-2.3l-1.2,0.1l-1.6,1l-1.5-1.4
                    l-1.3-0.1l-0.6-0.4v-1.4l-1.1-0.3l-0.5,1l-1,0.3l-0.3-1H522l0.3,1l1,1.4l-1.2,1.5l-1.9,1.4l-0.8,0.1l1.6-1.5l-0.5-0.9v-2.2l-1-0.1
                    l-0.9-0.5l-1.2-0.2l-1.4-1.4h-2.7l-0.8-0.5l0.2-0.9l-0.3-0.6l-1.3,0.8l-1.3,0.5l-0.7,1.1l-1.6,0.4l-0.9,1.1l-2.8,1.2l-1.7,0.1
                    l-1.3,0.5l-1.2,0.8l-3.3,0.4v1.8l0.7,1.3l1.6,0.5l1,1.1l0.1,1.7l2.1,4.6l1.6,1.1l1.1,1.5l1.6,0.4l1-0.8v1.3l1.1,1.2l4.7,1.3l3.7,3.2
                    l3.5,0.2l3.2-1.6l1.7-0.1l0.7-1.2L526,94l-3.2-3v-3.4l-0.4-1.5l1.6-0.4l2-2.1l1.7,0.4l1.3,1l0.6,0.1l1.2-1.9l1-1L532.4,80.7
                    L532.4,80.7L532.4,80.7z" />
                    <path id="_x32_1c4ba33-d057-42c1-9c71-be6061fc73cf" class="st0" d="M346.8,725.1l-2.1,0.7l-1.4,1.2l-2.2,0.9l-1.9-3.3l-2.1-0.5
                    h-2.8l-0.9-1.9l-1.9-0.7l-1.5-1l-2.9,0.2l-0.3-1.5l0.5-2.2l1.2-0.7l-1.9-0.7l-0.7-1.8l-3.3-1.9l1.2-1.5l1.7-0.9l-0.2-5.2l-1.7-1
                    l-0.9-1.7H321l-2.6-2.8l-2.4-1.3l3.3-10l4.5-0.7l0.9-1.9l-0.5-2.2l-1.9-1.4l-1.7-3.6l-2.8-1.7l-0.2-2.1l-0.7-2.1l2.9-2.2V667
                    l-2.8-5.5l-0.4-2.9l-1.2-0.7l-0.7-2.1l0.3-2.4l1.9-3.5L316,648l1-1.5l0.7-1.9l-0.2-2.4l0.7-1.7l1.4-1.4l0.5-2.1l1.2-1.4l0.2-0.7
                    l2.8-3.8l0.2-2.4l1.2-1.5l0.2-1.7l2.2,0.3l2.4-1.2l4.1-0.9l2.1-4.3l7.6-0.3l1.4-1.5l0.2-2.4l1.2-1.4l0.3-6.7l1.4-1.4l-0.7-1.5v-2.6
                    l-0.7-2.2l-1.7-0.9l-2.2-0.2l-1.9-1.7l-0.5-1l-0.7-5.7l-2.6-1.8l-1.5,0.5l-0.2-0.9l-1.7-0.9l-0.7-0.2h-2.2l-1,1.5l-3.5,1.7l-1.2,1.5
                    l-1.9,1l-1.9-1l-4.3-5.2l-5.9-3.6h-2.6l-2.1,0.5l-2.2,3.3l-2.1,0.5l-0.7,0.7h-1.9l-1.9-0.9V584l-1.2-1.4l-2.1-0.9l-2.1,0.5l-1.9,1.4
                    l-2.4,0.2l-4.5,3.1l-0.9,0.3l-2.8,2.2l-0.2,0.9l-1.7,2.2l-1.6,1.2l-2.4,0.2l-4.1-1l-1.9,0.9h-2.6l-1-1.5l-3.1-0.2l-1.2-0.5l-1.7,0.9
                    l-1,6.7l-0.9,1.7l-0.3,2.2l-0.9,1.9l0.2,10.3l-0.5,0.9l0.2,3.1l-1.2,4.7l-1.2,1.5l-1.4,4.1l-0.2,12.4l2.4,2.9l-1.9,11.2l-0.9,1.9
                    l-1.7,1.5l-0.1,1.3l-0.5,0.8l-0.1,2.6l-0.3,0.9l0.5,1.2l0.1,6.2l2,0.2l1.4,1.3l-0.1,1.2l-0.6,0.2l1.2,1.6l3.4,2.5l0.6,0.8l0.9,0.4
                    l0.4,0.1h-0.1l0.1,0.3l2.1,0.9l0.8,0.8l1,0.7l2,0.7l0.8,0.7l1,0.5l0.7,0.6l1.1,0.5l0.8,0.7l6.5,3.5l0.8,0.9l1.1,0.4l7.4,5.9l0.6,0.9
                    l1.4,3.7l-0.3,0.5l3.7,2.5l4,5l0.3,1v3.3l1.2,2l0.5,2.3l-0.1,1.2l-0.3,1l0.1,1l2.8,2.3l0.6,0.8l0.9,0.7l0.5,0.8l0.7,2.4l2.2,2.3
                    l-0.6,1.2v1.3l0.3,1.2l0.8,0.8l1.1,3.4l0.1,3.8l0.7,2.2v1.3l0.5,0.8l0.3,1.5l0.9,0.8l0.5,0.8l0.2,1.2l0.9,0.9l0.2,2.4l0.5,0.8
                    l-0.1,1.3l-0.5,0.8l-3.5,1l0.2,1.1l1.2,0.3l0.3,0.9l-0.1,0.4l0.3,1.1l0.4,0.9l-0.4,0.8l-0.6,0.7l-1.7,1l-0.2,1.1l0.7,0.8l-2.6,2.4
                    v2.5l1,0.6v1.4l0.9,0.8l-0.3,1l2.7,2.3l0.3,0.9l0.9,0.9l0.5,0.8l0.3,1.7l-0.6,2.1l0.1,4.1l-0.8,1.8l0.6,0.8l1.2,0.2l0.6,2.2l0.7,1.1
                    l2.7,0.3l1-1.6l0.8-0.6l0.2-1.1l-0.5-2.2l0.4-0.9l1-0.4l1.4-1.5l0.9-0.4h1.3l0.3,0.9l2.9,2l0.3,0.1l1.6-0.1l1.1,0.3l0.4,0.9l1,0.3
                    l0.9,0.6l1.3,0.4l1.3,0.1l2.6,2.6l0.1,1.2l1.3,0.4l0.6,0.5l0.4,0.8l0.1,1.2l1.8,1.7h1.3l0.9-0.6l-0.2-1.1l-0.7-0.6l-0.3-1.1l0.1-1.2
                    l-0.3-0.9l-3.4-5.1v-5l0.3-1l-0.4-0.9l0.3-2.1l0.7-0.3l0.1-1.1l2.3-0.3l1.1-0.4l0.4-0.8l1-0.3l0.9-0.7l0.3-1l0.1-1.2l0.6-0.7
                    l1.2-0.1l0.3-2.3l2.5-1.6l0.3-1l-1.3-1.6l-0.1-6.4l-0.8-1.1v-1.3l1.8-3l0.7-0.7v-1l-1-0.4l-1.4-1.5l-0.4-1.1l-0.2-3.3l0.2-0.5h0.6
                    l0.3-0.4l0.5-0.3l0.2-0.5l-0.6-0.9v-2.5l-0.6-0.9l0.2-0.4l0.4-0.4l0.2-0.4l0.1-0.5l-0.1-0.5v-1.4l-0.2-0.7l-0.3-0.4V737l-0.4-0.6
                    l-0.2-0.6l0.1-1.1l1-0.8l0.3-0.4l0.1-0.5v-1.3l-0.2-0.6v-0.5l0.2-0.4l-0.6-0.7l0.5-2.2l0.7-0.8l0.3-0.9l-0.7-0.8l-0.1-0.6" />
                    <g>
                        <polygon class="st1" points="478,68.1 478.5,67 478.5,67 	" />
                        <polygon class="st1" points="474.8,71.2 475.3,69.8 475.3,69.8 	" />
                        <polygon class="st1" points="468,76.6 468.5,75.2 468.5,75.2 	" />
                        <polygon class="st1" points="465.9,78.1 465.4,79.1 465.5,79 	" />
                        <polygon class="st1" points="490.7,82.6 490.7,82.6 491.7,81.5 491.6,81.3 490.8,82.2 	" />
                        <polygon class="st1" points="494.8,98.2 494.1,99 494.1,99 	" />
                        <polygon class="st1" points="494.4,94.9 493.8,95.6 493.8,95.6 494.3,95.1 	" />
                        <polygon class="st1" points="463.5,83.1 463.5,81.3 464.4,80.3 464.6,79.8 464.5,79.9 464.3,80.4 463.4,81.4 463.4,83.2 	" />
                        <polygon class="st1" points="498.5,104.7 497,105.1 495.9,105.8 492.5,105.6 491.3,106.3 490.4,107.6 490.4,107.6 491.1,106.6
                        492.3,105.9 495.7,106.1 496.8,105.4 498.3,105 502.9,105.2 503,104.9 	" />
                        <polygon class="st1" points="492.6,118 491.1,118.6 484.3,117.9 481.7,116.2 481,113.3 479.3,113.2 477.7,112.1 476.8,110.6
                        476.8,108.8 476.3,107.5 475.2,106.7 473.2,105.9 472.3,106 472.2,106.2 473,106.1 475,106.9 476.1,107.7 476.6,109 476.6,110.9
                        477.5,112.4 479.1,113.5 480.8,113.6 481.5,116.5 484.1,118.2 490.9,118.9 492.4,118.3 494.4,118.3 494.4,118 	" />
                        <polygon class="st1" points="462.3,83.8 462.2,83.9 462,85.2 	" />
                        <polygon class="st1" points="470.1,107.9 468.6,108 467.9,106.5 467.5,103 468.1,101.7 468,101.8 467.4,103.1 467.8,106.6
                        468.5,108.1 470,108 471.2,107.4 471.3,107.2 	" />
                        <polygon class="st1" points="469.9,90.7 470.9,92.5 471,98.1 469.2,100.7 469.3,100.6 471.1,98 471,92.4 470,90.6 467.6,88.3
                        463.7,87.8 462.5,87 462,85.4 462,85.5 462.4,87.1 463.6,87.9 467.5,88.4 	" />
                        <path class="st2 north path_lb" d="M571.7,105.8l-1,0.1l-0.8,0.7l-0.8-1.5l-0.9-0.3l-0.6-0.7l-1-0.2h-1.2l-0.6,0.6l-1.2,0.7l-2.8-0.3l-3.4-2.8
                        l-0.3-1v-3.8l-0.4-0.5l0.9-0.7l-0.2-0.4l-2.8-2.9l-0.8-2.1l1-3.1l1-0.7l0.3-1l-0.4-0.8l-0.7-0.6l-0.4-0.6l0.5-0.8l0.8-0.5v-1.3
                        l-1.2-0.1l-1.1,0.3l-0.7,0.7l-2.3,0.8h-1.3l-4-0.9l-1,0.4l-1-0.4l-3-0.1l-2-0.6l-0.9,0.5l-0.9,0.8h-1.1l-0.7-0.8l0.3-1.1l0.5-0.9
                        l0.4-0.4h-1.3l-1.1,0.4h-1.2v0.8l-0.6,1.5l-1,1l-1.2,1.9l-0.6-0.1l-1.2-0.8l-1.7-0.3l-2,2.1l-1.6,0.4l0.4,1.5v3.3L526,94l-0.5,1.5
                        l-0.7,1.2l-1.7,0.1l-3.1,1.6l-3.5-0.2l-3.7-3.2l-4.8-1.2l-1.1-1.2v-1.3l-1,0.8l-1.6-0.4l-1.1-1.5l-1.6-1.1l-2.1-4.6l-0.1-1.7
                        l-1-1.1l-1.6-0.5l-0.7-1.3V78l3.3-0.4l1.2-0.8l1.3-0.5l1.7-0.1l2.8-1.2l0.9-1.1l1.6-0.4l0.7-1.1l1.3-0.5l1-0.8l-2-1.4l-1-0.3
                        l-1.1-0.8l-0.4-0.9l0.5-1l2-1l-0.2-0.5l-0.8-0.7l0.7-0.8l1-0.5l0.9-0.8l-0.3-0.8l-3.1,2.7l-4.3,0.3l-3.4-3.5l-0.2-0.8l0.9-0.9
                        l-0.4-0.8h-1.4l-1-0.4l-1.4-1.4l0.4-2.6l-0.2-1.2l-0.5-0.8l-0.8-0.7l-2.5-3.5l-2.2-0.7l-1.2-1.6l-0.9-0.5h-1.3l-0.9-0.6l-0.7-0.8
                        l-0.9-0.5l-0.3-0.1l-0.9,0.2l-0.7,0.8l-0.3,1h-4.1l-1.3-1.4l-0.8,0.5v1.3l-0.8,0.5l-3.5,0.5l-0.4-1.1l-0.4,0.4l-0.2,1.2l-1,0.8
                        l-2.3,0.6l-0.9,0.7l-1.1,0.3l-2.4,5.1l-0.4,0.1l-2.5-0.3L460,55v1.2l-0.7,0.8l-0.3,1l-0.9,1.7l-0.2,1.3l-0.6,0.9l-0.9,0.5l-1.5,1.5
                        l-0.2,1.3l-1.4,2.6l-1.3,0.4l-0.8-0.1l0.2,0.8l2.3,2.2l1.3,0.1l2.4,1.1l1,1.8l1,0.7l0.7,0.8l1.5,3l0.2,5.2l-0.6,0.5l-0.2-1.1
                        l-0.5-1.1l-0.2-1.1l-1.4-1.8L459,78l-0.5-1.2l-1.5-1.6l-4-2.6h-1.3l-0.8,0.7l-0.4,1.7l-2.5,2.4l-1.1,0.3l-2,1.1l-1,0.3l-2.8,1.9
                        l-3.5,1.1l-0.9,0.6l-8.2,0.1l-1.6,1.6l-0.6,1l1.2,1.7l0.9,0.2l0.9,1.1l3.4,0.4l6.3,3l-0.4,2.4l1.4,1.2l3.5,0.8h3.7l0.9,0.6l1.2,1.5
                        l0.4,1.6v0.5l-0.6,1.2l0.2,1.6l0.9,1l1.6,1.1l-0.6,1.1l-1.3,0.8l-1.3,0.5l1.5,1.1l0.1,1.5l-1.1,0.7l-1.5,0.5L446,114l-2,1.3
                        l-7.7-0.2l-1.2,0.6l-0.4,1.5l0.7,1.3l-0.4,3.4l-1,1l-0.6,1.3l0.9,1.6l1.5,0.1l1.1,0.8l-1.5,1l-0.9,1l-0.6,1.3l0.6,2.9l3,1.8
                        l2.3,3.5l-0.9,1.1l0.2,1.5l0.1,0.1l1.7,1.1l-1.1,0.9l-3.2,0.6l-0.1,1.5l1.7,0.2l1.1-0.9l1.1,1.1l1.2,0.7l2,0.5l1.8-0.1l1.3-0.7
                        l3.7-0.2l0.9,0.5l0.2,0.6l1,1l0.5,1.3l2,2l1.1,0.6l1.1,1.2l0.1,1.7l0.6,1.7l1.6,0.5v1.8l-1.1,0.7l-0.7,1.1l-2.2,1.8l-0.7,1.3
                        l0.2,1.6l0.6,1.2v0.7l1.3,3.4l2.2,2.1l-0.4,1.2l1.7,0.7l0.1,1.2l1.7,0.5l1,1.3l1.3,1l0.4,3.4l1,0.4l3.3,0.2l1.6-1l3.2-0.5l3.5-2.3
                        l0.4-1.7l4-2.2l1.8-0.1l1.5-0.5l0.7-1.1l1.1-0.9l1.6-0.2l1-2.9v-1.8l-0.5-1.5l-1-1l-0.2-1.7l1.3-1.1l0.2-1.6l-0.1-1.7l0.6-1.3
                        l1.5-0.4l1.2-0.7l1.7,0.5l1.6-1.2l0.4-1.5l-1-0.9l7.2-0.9l2.4-1.2l1.1,1.2l0.5-1.3l1.5-0.5l0.7-1.2l1.2-1.1l0.4-1.2l3.3-1.8
                        l1.8-2.2l1.3-0.7l1.6-0.2l5.1,0.7l1.2-0.6l1.7-0.4l-0.1-0.9l0.1-1.5l1-1.2l0.1-1.5l-0.4-1.6l1.7-2.2l2.1-1.7l1.6-0.2l3.7,0.2l4-2.7
                        l1-2.9l-2.8-4l0.6-1.2l0.4-1.5l1.2-1l3.5,0.2l1.6,0.6h2l1-1.1l4.6-3.3l3.7-0.2l4.3-1.6l1.7-0.1l2.5,0.5l0.8-0.3l0.5-1l1.2-0.1
                        l0.5-0.8l1.9-0.9l0.5-0.9l1.3-0.1l0.5-1v-1L571.7,105.8z M462.3,83.8l-0.3,1.4L462.3,83.8L462.3,83.8z M463.6,87.9l-1.2-0.8
                        l-0.4-1.6v-0.1l0.5,1.6L463.6,87.9l4,0.4l2.4,2.3l1,1.8l0.1,5.6l-1.8,2.6l-0.1,0.1l1.8-2.6l-0.1-5.6l-1-1.8l-2.4-2.3L463.6,87.9z
                         M470,108l-1.5,0.1l-0.7-1.5l-0.4-3.5l0.6-1.3l0.1-0.1l-0.6,1.3l0.4,3.5l0.7,1.5l1.5-0.1l1.2-0.7l-0.1,0.2L470,108z M492.4,118.3
                        l-1.5,0.6l-6.8-0.7l-2.6-1.7l-0.7-2.9l-1.7-0.1l-1.6-1.1l-0.9-1.5V109l-0.5-1.3l-1.1-0.8l-2-0.8l-0.8,0.1l0.1-0.2l0.9-0.1l2,0.8
                        l1.1,0.8l0.5,1.3v1.8l0.9,1.5l1.6,1.1l1.7,0.1l0.7,2.9l2.6,1.7l6.8,0.7l1.5-0.6h1.8v0.3H492.4z" />
                    </g>
                    <path id="f8107e5f-0c12-4631-aed9-d525f4e8558d" class="st0" d="M466,182.6l-0.3,0.8l-1.1,0.3l-2.4,0.2l-0.9,0.5l-1.2,1.6l-0.4,3.4
                    l-1.5,2.1l-0.3,1l-0.4,0.9l-0.3,1l-2.3,3.6l-0.2,1.1h-1.2l-1,0.4l-0.8,0.6l-0.3,0.5l-0.6,0.6l0.1,0.4l0.8,0.5l0.4,0.9l0.1,1.2
                    l0.3,0.9l-0.9,0.8l-0.3,0.2l-0.3,0.5l-0.9,0.5l-1,1l-0.3,1.3l0.4,0.9l0.1,5l-0.5,1.2l-0.8,0.9l-1,0.7l-1.1,1.7l-1.2,0.9l-0.3,0.9
                    l-1-0.1l-2.3,3.4l-0.9,0.5l-1.3-0.3l-1,1.9l-1,0.5l-0.8,2l-0.6,0.8l-1,0.9l-0.9,1.7l0.1,1.1l-0.5,0.7l1,1.1l0.6,1.2l0.4,1.5
                    l-0.6,4.9l1.8,1.8l1.3,0.5h3.3l2.8,4.8l1.2,0.6l1.8-0.2l0.9-1.1l1.1-0.9l1.6-0.2l1.2-0.6l4.9-0.6l1.5,0.7l0.7,1.2l1.1,0.7l0.9,1.4
                    l8.2,5.3h5.5l2.1,0.9l2.8,0.3l5.5,3.8l5.7,0.7l2.1-0.5l-2.1-1.7l0.5-2.1l2.2-0.5l1.5-1l1.5,0.7l1.4-1.2l-0.5-1l-1.4-1.2l0.2-2.2
                    l1.4-0.5l2.9,2.6l3.3,1l3.1,2.4l6.2,2.6l5,0.3l5.5,2.8l2.8,0.3l-0.2-2.8l-0.5-0.9l0.1-2.5l1.7-3.3l0.3-1l1-1.7l0.3-7.4l0.3-1.1
                    l0.6-0.8v-1.4l0.7-2.4l1.2-1.6l0.3-1.2l1.8-1.1l0.7-0.8l0.9-1.8l0.1-1.2l3.1-2.9l3.1-1.3h1.3l0.4-0.2l-1-0.5l-0.7-0.7l-0.5-0.9v-1.3
                    l-1.7-1l-0.3-3.4l1.2-0.8l0.6-0.9l2.2-0.4l1.9-1.2l1.1-0.3l0.3-1.1l-0.1-1l-0.4-1.2l-0.1-1.2l-0.5-0.8l-0.2-2.4l0.5-0.8l-0.6-1
                    l0.5-1h1.3l-0.2-1l-0.7-0.6l-0.2-0.3l1-0.4l-0.8,0.2l-1.2-0.4l-0.1-0.9l-1.6-1.5l0.3-1.1l1.2-0.1l1,0.6l0.2,1.2l1.2-0.1l1-0.5
                    l-2.5-2.5l-2.1-0.7l-0.3-0.5l-0.3-0.1l-1.1-1.5l0.4-0.8l-2.5-6.2l-0.1-2.6l-0.5-0.8l0.3-0.4v-1.4l-0.3-1.1l0.3-7l-2-2.1l-0.6-1v-1.1
                    l-0.9-1.1l-0.4-2.3l0.1-1.2l-0.7-0.7l0.3-9.6l0.5-1.5v-1.3l0.8-1.9l-0.2-2.5l0.7-2.1l0.1-1.2l1.6-3.5l0.2-1.2l0.9-1.5l1-0.5l0.7-2
                    l0.6-0.8l0.9-0.3l2.6-3l0.9-0.4l2.2-2.5l0.2-2.4l0.3-1l1.9-1.1l1-0.3l1-1.5l0.8-0.7l0.8-0.4l1.7-2.4l0.2-1.3l1.2-0.7l1.2-0.2
                    l0.8-0.3l0.8-0.8l1.1-0.2l0.8-0.5l1.3-0.1l1.8-0.8L563,113l-1.7,0.1l-4.3,1.6l-3.7,0.2l-4.3,3.2l-1,1.1h-2l-1.6-0.6l-3.5-0.2l-1.2,1
                    l-0.4,1.5l-0.6,1.2l2.8,4l-1,2.9l-4,2.7l-3.7-0.2l-1.6,0.2l-2.1,1.7l-1.7,2.2l0.4,1.6l-0.1,1.5l-1,1.2l-0.1,1.5l0.1,0.9l-1.7,0.4
                    l-1.2,0.6l-5.1-0.7l-1.6,0.2l-1.3,0.7l-1.7,2.2l-3.3,1.8l-0.4,1.2l-1.2,1.1l-0.7,1.2l-1.5,0.5l-0.5,1.3l-1.1-1.2l-2.4,1.2l-7.2,0.9
                    l1,0.9l-0.4,1.5l-1.6,1.2l-1.7-0.5l-1.2,0.7l-1.5,0.4l-0.6,1.3l0.1,1.7l-0.2,1.6l-1.3,1.1l0.2,1.7l1,1l0.5,1.5v1.8l-1,2.9l-1.6,0.2
                    l-1.1,0.9l-0.7,1.1l-1.5,0.5l-1.8,0.1l-4,2.2L478,179l-3.5,2.3l-3.2,0.5l-1.6,1l-3.5-0.2l0,0H466z" />
                    <path id="_x36_5175d47-0a21-4bf1-abfb-b58e4d3069a0" class="st0" d="M466.1,182.6l-0.4,0.8l-1.1,0.3l-2.4,0.2l-0.9,0.5l-1.2,1.6
                    l-0.4,3.4l-1.5,2.1l-0.3,1l-0.4,0.9l-0.3,1l-2.3,3.6l-0.2,1.1h-1.2l-1,0.4l-0.8,0.6l-1,1.3l-0.5,0.3L449,202l-2.5-0.3l-1-0.6
                    l-0.9-1.3H444l-0.5-0.7l-0.3-1l-1-0.3v-2.7l0.5-0.9l0.3-1.2l-1-0.5l-1.1-0.2l-0.9-0.5l-0.1-2.6l0.7-0.7l0.1-1.3l0.4-1l-0.2-1.3
                    l-1.1-0.5h-1.3l-0.4-0.9l-0.2-1.2l-0.5-0.9l-0.8-0.6l-1.5-2l-2-0.9l-2.1,0.7l-1-0.3v-2.6l0.8-0.8l0.4-0.9v-2.6l-1.5-0.3l0.1-3
                    l0.3-0.9l0.6-0.9l0.3-1.1l-0.9-0.9l-0.4-1l-1.2-0.3l-0.9-0.9l-1-0.4l-1.2-0.1l-0.4-0.5l0,0l-1.1-0.6l-0.7-0.9l-1-0.6l-0.3-0.4
                    l-0.1-0.8l-0.6-1.6l-1-0.4l-1.5-0.3v-1.3l-1-0.3l-2.7,1.2h-1l-3.9-3.1l-1-0.4l-0.8-0.8l-1.4-0.5v-0.9l-1.3-0.2l-1.2-0.4l-2.4-1.9
                    l-0.4-0.6l-2.1-1.3l0.3-1.1l1.2-1.9l-0.3-3.8l-1-0.7l-8-0.7l-0.5-1l-0.2-1.3l0.7-0.6l-1-0.5l-0.9,0.6l-1.1,0.4l-1.3,0.1l-1.1-0.9
                    l-1.4-0.4h-1.3l-0.9-0.9l-2.1-0.8l0.1-2.5l0.4-1l-0.8-2.1l-0.1-1.2l-1.2-0.1l-1.5-1.5l-2.5-0.2l-2.9,0.9l-1.5-1l-2.9,1.7l-2.1-0.6
                    l0.3-0.5l0.9-0.7l2.1-2.8l0.4-0.9l0.9-0.9l0.9-0.5l1.2-1.3V114l-0.6-0.8l0.1-1.2l2.1-2.6l0.7-2l0.8-0.6l1.6-2.4l3.2-2.8l2.7-1.2
                    l1.1-0.2l0.8-0.8l1-0.3l1.7-1.1l0.9-1l1.1-0.7l1.2-0.3l1.9-1.5l1-0.4h1.4l8.3-2.2l1-0.9l2.4-1.1l2.5-2.5l1.1-0.7l1.5-0.1l5.7-2.3
                    h1.3l0.7-0.7l2.4-0.5l1,0.3l1.7,1.4l1.6,0.1l0.5,1.3l0.9,1l0.9,0.2l0.9,1.1l3.4,0.4l6.3,3l-0.4,2.4l1.3,1.2l3.5,0.8h3.7L448,97
                    l1.2,1.5l0.4,1.6v0.5l-0.6,1.2l0.2,1.6l0.9,1l1.6,1.1l-0.6,1.1l-1.3,0.8l-1.3,0.5l1.5,1.1l0.1,1.5l-1.1,0.7l-1.5,0.5L446,114l-2,1.3
                    l-7.7-0.2l-1.2,0.6l-0.4,1.5l0.7,1.3l-0.4,3.4l-1,1l-0.6,1.3l0.9,1.6l1.5,0.1l1.1,0.8l-1.5,1l-0.9,1l-0.6,1.3l0.6,2.9l3,1.8l2.3,3.5
                    l-0.9,1.1l0.2,1.5l1.8,1.2l-1.1,0.9l-3.2,0.6l-0.1,1.5l1.7,0.2l1.1-0.9l1.1,1.1l1.2,0.7l2,0.5l1.8-0.1l1.3-0.7l3.7-0.2l0.9,0.5
                    l0.2,0.6l1,1l0.5,1.3l2,2l1.1,0.6l1.1,1.2l0.1,1.7l0.6,1.7l1.6,0.5v1.8l-1.1,0.7l-0.7,1.1l-2.2,1.8l-0.8,1.1l0.2,1.6l0.6,1.2v0.7
                    l1.3,3.4l2.2,2.1v1.8l1.7,0.7l0.1,1.2l1.7,0.5l1,1.3l1.3,1l0.4,3.4L466.1,182.6L466.1,182.6L466.1,182.6z" />
                    <path id="_x33_50fa9bc-d25e-4c61-ae4b-b5c60b1a74b6" class="st0" d="M344.7,169l0.1,0.7l0.9,0.4h1.4l1-0.3l0.8-0.6l1,0.3l1.3,1.6
                    l0.3,1.1v1l3.3,0.9l0.5-0.3l1.4-1.6l0.3-2.5l0.9-2l1.1-0.3l0.7-1l1-0.4l0.8-0.6l0.3-1l0.6-0.9l3.7-0.9l-0.3-0.9l0.8-1.2l1-0.4h1.3
                    l4.8,4.9l1-0.7v-2.6l-2.2-7.6l-1.3-1.8l-2.3-2l-2.5-0.3l-0.1-0.4l-0.4-0.7l-1-0.6h-1.3l-5.2-1.2l-1.3-1.8l-0.3-0.9l-1.1-0.8
                    l-0.7,0.5l-1,0.4l-3.5,4.8l-0.9,0.8l0.4,2.1l-0.2,0.7l0.3,0.4l1.3,0.1l0.2,1.1l-0.5,1l-0.3,2.4l-0.5,0.8l-0.1,2.7l-1.3,1.7l-0.3,1
                    l0.9,0.8l-0.5,0.7l-0.4,1.2L347,168l-1.2,0.7L344.7,169L344.7,169L344.7,169z" />
                    <path id="ea41be52-3728-49f2-aa36-b90633ee55f6" class="st0" d="M433.4,234.9l-1.2,0.6l-0.4,0.9L431,237l-4-0.1l-0.9,0.4l-3.9-0.1
                    l-0.6-0.7l-0.1-1.5l0.2-0.9l-0.4-0.5V231l-0.6-0.9l-1-0.6l-0.8-0.9l-0.4-1l-1.5-1.7l-0.4-1l-1-0.5l-0.5-0.8L414,223l-0.3-0.9l0.2-2
                    l-0.8-1l-2.5-0.2l-1,0.4l-1.8,1.2h-2.9l-1,0.5h-1.3l-0.9-0.8l-5.2-0.3l-1,0.3l-1-0.3h-1.3l-1.5,1.3l-2.3,0.9L387,222h-4v-1.5
                    l-0.6-1.3v-1.4l0.5-1l1.5-1.6l0.3-1l-0.1-1.3l-1-2l-1.8-1.5l1.4-2.2l0.8-2.9l0.8-0.9l0.1-1.2l0.6-0.9l0.3-1.1l-1-0.5l-0.8-2.3
                    l-1.3-0.3l-1-2.2l-0.6-0.3l-1.4,0.3l-1,0.6l-1.7-1.3l-0.6-1l-1.1-0.3l-0.9-0.6l-1.4-2.2l-1.2-0.2l-1.2-0.5l-0.1-1.2l-0.8-0.9
                    l-1.2-0.2l-2.2-1.5l-0.6-1l-1-0.9l-1.1-2l-0.2-1.2L362,180l0.3-0.9l0.6-0.9l0.2-1.1l0.7-0.9l-1-0.5l0.6-0.8l-2.4,0.2l-0.9,0.7
                    l-1,0.4l-0.6-0.8h-2l-1-0.5l-0.7-0.8l1.7-2.1l0.3-2.5l0.9-2l1.1-0.3l0.7-1l1-0.4l0.8-0.6l0.3-1l0.6-0.9l3.7-0.9l-0.3-0.9l0.8-1.2
                    l1-0.3h1.3l4.8,4.9l1-0.7v-2.6l-2.2-7.7l-1.3-1.8l-2.3-2l-2.5-0.3l-0.1-0.4l-0.4-0.7l-1-0.6h-1.3l-5.2-1.2l-1.3-1.8l-0.4-0.9
                    l-1.1-0.9l0.4-1l1.4-1.7l0.3-1.2l0.7-0.6l0.4-2.3l3.8-4.7l-0.5-1l-0.3-1.3l3.7-5.4l2.1,0.6l2.9-1.7l1.5,1l2.9-0.9l2.5,0.2l1.5,1.5
                    l1.2,0.1l0.1,1.2l0.8,2.1l-0.4,1l-0.1,2.5l2.1,0.8l0.9,0.9h1.3l1.4,0.4l1.1,0.9l1.3-0.1l1.1-0.4l0.9-0.6l1,0.5l-0.7,0.6l0.2,1.3
                    l0.5,1l8,0.7l1,0.7l0.3,3.8l-1.2,1.9l-0.3,1.1l2.1,1.3l0.4,0.6l2.4,1.9l1.2,0.4l1.3,0.2v0.9l1.4,0.5l5.6,4.3h1.1l2.7-1.2l1,0.3v1.3
                    l1.5,0.3l1,0.4l0.6,1.6l0.1,0.8l0.3,0.4l1,0.6l0.7,0.9l1.1,0.6h0.2l0.4,0.5l1.2,0.1l1,0.4l0.9,0.9l1.2,0.3l0.4,1l0.9,0.9l-0.3,1.1
                    l-0.6,0.9l-0.3,0.9l-0.1,3l1.5,0.3v2.6l-0.4,0.9l-0.8,0.8v2.6l1,0.3l2.1-0.7l2,0.9l1.5,2l0.8,0.6l0.5,0.9l0.2,1.2l0.4,0.9h1.3
                    l1.1,0.5l0.2,1.3l-0.4,1l-0.1,1.3l-0.7,0.7l0.1,2.6l0.9,0.5l1.1,0.2l1,0.5l-0.3,1.2l-0.5,0.9v2.7l1,0.3l0.3,1l0.5,0.7h0.6l0.9,1.3
                    l1,0.6l2.5,0.4l1.8-0.5l1,0.7l0.4,0.9l0.1,1.2l0.3,0.9l-0.9,0.8l-0.3,0.2L451,207l-0.9,0.5l-1,1l-0.1,1.3l0.4,0.9l0.1,5l-0.5,1.2
                    l-0.8,0.9l-1,0.7l-1.1,1.7l-1.2,1l-0.3,0.9l-1-0.1l-2.3,3.4l-0.9,0.5l-1.3-0.3l-1,1.9l-1,0.5l-0.8,2l-0.6,0.8l-1,0.9l-0.9,1.7
                    l-0.1,1.2L433.4,234.9" />
                    <path id="ffd01e75-6ce2-4cfa-af98-bc61479c68ed" class="st0" d="M355.5,175.1l1,0.5h2l0.6,0.8l1-0.4l0.9-0.7l2.4-0.2l-0.6,0.8l1,0.5
                    l-0.7,0.9l-0.2,1.1l-0.6,0.9l-0.3,0.9l1.4,0.5l0.2,1.2l1.1,2l1,0.9l0.6,1l2.2,1.5l1.2,0.2l0.8,0.9l0.1,1.2l1.2,0.5l1.2,0.2l1.4,2.2
                    l0.9,0.6l1.1,0.3l0.6,1l1.6,1.3l1-0.6l1.4-0.3l0.6,0.3l1,2.2l1.3,0.3l0.8,2.3l1,0.5l-0.3,1.1l-0.6,0.9l-0.1,1.2l-0.8,0.9l-0.8,2.9
                    l-1.4,2.2l1.8,1.5l1,2l0.1,1.3l-0.3,1l-1.5,1.6l-0.5,1v1.4l0.6,1.3v1.5h4.2l2.3,0.5l2.3-0.9l1.5-1.3h1.3l1,0.3l1-0.3l5.2,0.3
                    l0.9,0.8h1.3l1-0.5h2.9l1.8-1.2l1-0.4l2.5,0.2l0.8,1l-0.2,2l0.3,0.9l1.1,0.6l0.5,0.8l1,0.5l0.4,1l1.5,1.6l0.4,1l0.8,0.9l1,0.6
                    l0.6,0.9v2.6l0.4,0.5l-0.2,0.9l0.1,2.6l-1.2,0.6l-1.3,1.1l-1,1.2l0.1,1.8l-2.3,3.8v1.8l-1.5,0.4h-1.8l-1.2-1.7l0.6-1l-2-1.1
                    l-1.3,0.6l-0.5,1.5l-0.9,1.2l-1.6,0.5l-3.3,4.6l-1.3,0.5h-3.7l-1.2,0.9l-0.5,1.3l-0.5,0.1l-1.3,1.5l-0.2,1.7l-1.5,0.4l-2.3,2
                    l-1.5,0.4l-3.4-0.4l-3,1.1l-3.7,4.6l-1.8,0.1l-1.3-0.7l-2.2-2.1l-0.2-1.7l-1.2-0.9l-1.8-2.7l-1.1,0.2h-1.8l-1.3-0.6l-3.4-0.2
                    l-4.1-1.5l-3.3-0.1l-1.5,0.6l-1,1v1.8l0.6,1.3l0.2,3.4l-0.6,1.3l-1.2,1l-1.5,0.5l-7.1-0.2l-1.3,0.6h-3.7l-3.5-1.1l-2.2-2.1l-0.7-1.3
                    l-1.1-0.9l-7.7-1.5l-2.3-2l-1.7-0.5l-1-1.3l-2.4-1.3l-1-1.1l-1.5-0.5l-0.9-1.1l-0.6-0.2l-2.1-0.2l-0.9-1.2l-2.2-1.5l-5.1-6.6h-0.2
                    L300,243l-3-1.2l-1.6-2.6l-0.2-1.3l-2.6-3.2l1.1-0.5l2.5-2.2l2.1-2.7l0.4-0.9l3.5-4.6l0.9-2.1l1-1.3l6.5-19.2l1.5-2l0.1-0.5l0.8-0.9
                    l2.2-0.5l1.8,1.6l0.8,1.1l0.3-1l-0.3-1.4l1.8-1.1h0.9l0.7,0.2l-0.1-1.1l-1.1-0.5l-1-0.8l0.7-0.6l0.4-2.2l2.1-3.6l1.1-0.2l1.4-1.6
                    l3.8-0.2l3-1.4h1.6l2.7,1l0.7,0.7l1.5,0.3l0.9-0.5l-0.5-0.7l-1.3-0.2l-1-0.4l-0.5-1.1l-1.2-0.2l0.1-1.2l0.7-0.8l1-0.5l3.8-3.2
                    l0.4-1.1l0.6-0.8l0.3-1v-1.3l0.9-1.9l0.9-0.8l0.6-0.9l1.3-0.6l0.3,0.7l0.9,0.4h1.4l1-0.3l0.8-0.6l1,0.3l1.3,1.6l0.3,1.1v1l2.8,0.8
                    L355.5,175.1L355.5,175.1L355.5,175.1z" />
                    <path id="_x34_eed8214-870d-46ff-b77b-49234479d430" class="st0" d="M313.2,420v-2.1l-1.5-1.4l-2.2-0.3l-0.7,1.9l-1.9,0.4l-2.2-0.5
                    l-0.5,2.1l-2.1,0.3l-2.4-0.2l-1.5-1l-1-1.9l-0.5-2.1l-3.3,2.4l-0.2-5l1.4-4l0.2-0.2l1.2-2.8l0.3-2.2L296,401l-1-1.7l-0.2-5l0.5-2.1
                    l1.9,0.3l0.4-4.8l-3.5-7.4l-14.1-2.1l-2.6-1L276,377l-7.1,0.7l-9.8-3.8l-2.9-0.3l-0.5-0.9l-3.4-1.9l-1.7,0.9l-10-0.2l-5.2,1.4
                    l-7.8-0.2l-4-1.2l-2.6-0.2l-4.4-1.5h-2.7l-0.9-0.5l-1-0.2l-0.3,1l-1.2,0.1l-4.1,7.4l-0.1,0.5l-1.5-0.1l-0.9,0.5l-1.4,1.6l-0.4,1.1
                    L202,384l-0.7,0.8l-0.2,1.1l1.1,1.6l-0.2,1.2l-1.1,1.6l-2.2,0.1l-0.3,1v1.3l-1.5,0.8v1.6l-0.1-0.1l-0.3,0.2l-0.3,1.1v1.3l0.3,0.9
                    l1.3,0.1l0.9,1.4l-1.6,1.9l-0.9,1.9l-0.3,1l-1.3,2.2l-0.7,2.4l-0.9,1.3l-1.8,5.1l0.2,5.1l-0.3,1l0.1,1l1.2,0.6l-0.1,1.1l-1,0.4
                    l-1.5,1.1l0.3,1.5l0.8,0.4l1,0.2l0.1,1.3l-0.7,0.9v2.6l0.9,0.6l1.4,1.9l0.9,0.8l-0.9,0.5l-0.6,1.1l-1.2,0.1l-0.3-1l-0.7-0.6l-1,0.6
                    l-1.5,1.7l2.6,0.1l4,1.5h2.6l1,1.5h2.6l1.9-0.9l4.3,1.5l2.6,0.4l1.6-1.2l1.2-1.5l0.2-2.4l-0.5-2.1l1.4-1.4h2.2v2.2l2.4,0.9l0.7-1.9
                    l3.3-1.9l0.5-2.4l1.2-1.4l4.3-1.7l1.9,1l1.2-4.1l1-1.7l2.8,0.2l1.7-0.9l0.7-2.1l4-1.2l0.7-1.9l1.6-1.2l1.2-1.5l1.9,0.9l1.6,1.2
                    l1.9,0.7l4-1.5h5.2l3.6-1.9l3.4,1l1,3.5l2.9,2.4l1,1.5l1.7,1l2.4,0.2l1.5,1.2l2.1,0.7l9.5,1l1.9-1l1.2-1.4l3.8,0.2l-0.3,2.6l1.4,2.2
                    l1.4-1.4l2.2-0.5l1.4,1.4l2.1-0.2l1.9-0.7l2.4,0.2l1.9,1l2.4,0.3l0.9-1.7v-2.4L313,423l-1-1.5L313.2,420L313.2,420L313.2,420z" />
                    <path id="e468a7aa-2bdf-4501-b48d-35483b7c8ccc" class="st0" d="M469.8,460.3l-2.3-0.6l-1.5-1.2l-2.1-0.5h-2.6l-1.9,0.7l-2.9,2.4
                    l-5,9l-0.2,0.2l0.4,3.1l1.4,1.5l2.2,1.2v0.2l-8.3,12.6l-0.3,6l-1.2,1.5l-1.5,1l-0.9,1.7l-1,4.1l-1.5,1.2v2.6l-1,1.9l-0.2,1.9l-2.1,4
                    l-2.9,2.4l-0.7,1.9l0.5,2.4v7.8l-0.7,1.9l-6.7,1l-1.7,1.3l-1.4-0.2l-0.2-2.4l-1.2-2.2l-1.4-1.2l-3.1-0.2l-0.7-0.5l-1.2-1.5l-2.1-0.7
                    l-1.7-1v-1.9l-2.6-3.6v-3l-0.9-1.9l-1.2-1.5l-3.5-2.2l-3.6,1.7l-0.3,0.9h-0.7l-1.9-0.9l-0.9-1.7l-2.4-2.8l-2.4-0.2l-3.7-2.2h-2.9
                    l-0.9-1.7l-0.5-0.5l-2.6-6.2l0.2-2.6l-2.6-3.3l-0.5-1.7l0.5-2.1l-0.2-2.4l-10.5-7.2l-2.1-0.5l0.7-2.4l1.2-1.7l2.2-0.7l-0.3-1.5
                    l1-1.5l2.2-0.4l1-1.5v-4.8l-1.5-1l-0.4-1.1l0.9-0.8l2.1-0.5l2.1-1.4l2.1-0.5l0.5-2.4l-0.7-2.1l-1.5-1.2l1.2-1.4l0.5-2.2l1.4-1.5
                    l1.5-1l0.5-2.1l1.5-1l2.4,0.2l1.9-0.9h2.6l0.9-0.4l1.7,1l2.1,0.5l3.3-2.8v-5.2l0.5-2.1l1.5-1l-1.4-4.5l1.7-0.9l2.6,0.7l1.9-0.9
                    l1-1.5l2.2-1l3.1-0.2l2.6-5.7l0.9-7.1l0.9-1.7v-2.6l1.4-3.8V395l-1.7-1.5L416,391l0.5-1.9l-5.5-4l0.2-2.4l2.2-0.5l2.1-1.5v-1
                    l-0.5-2.1l0.3-2.4l1.5-1l0.7-2.2l0.2-2.6l0.7-2.1l1.4-1.7l0.2-2.6l1.5-1.5l2.1-0.5l-0.3-3.8L422,355l2.9-2.6l-0.2-2.1l-0.7-2.2v-2.6
                    l0.5-1.4v-5.2l-1.4-1.7l-0.7-0.2v-2.4l4.1-8.8l0.2-5l1.5-1.5l1.7-0.9l1-1.7l1.7-0.9l1.4-2.4l0.5-1.7l0.2-2.4l-1-1.5l-2.4-0.3
                    l-0.7-1.9l-1.2-1.4l-2.6-0.9l-0.5-0.7l-0.2-4.3l1.9-4.5l2.1-0.5l1.4-1.2l1.9-0.9l2.6-2.6h2.6l1-1.5l-1.2-3.8l1.4-1.1l0.6-1.2
                    l-0.1-1.7l2.6-1.1l0.7-1.1l1.8,0.1l1-0.9l0.4-1.6l-0.6-3.2l0.9-1.3l1.6-0.6l1.1-0.7l1.2-2.8l1-1.1h1.8l1.2-0.9l1-1.2l1.5-2.9l0.5-5
                    l0.6-1.3l1.6-0.9l0.9-1l8.2,5.3h5.5l2.1,0.9l2.8,0.3l5.5,3.8l5.7,0.7l2.1-0.5l-2.1-1.7l0.5-2.1l2.2-0.5l1.5-1l1.5,0.7l1.4-1.2
                    l-0.5-1l-1.4-1.2l0.2-2.2l1.4-0.5l2.9,2.6l3.3,1l3.1,2.4l6.2,2.6l5,0.3l5.5,2.8l2.8,0.3l-0.1,0.9l-0.4,0.9l-1,0.5l-0.6,1l-1.6,1.4
                    L521,271l-0.1,3.8l-0.8,0.6l-0.8,1.8l-1,0.4l-0.5,1.3l-0.2,0.1l-2.4,0.3l-2.1,3.7l-0.8,0.7l-1.1,0.2l-2.2,2l-1,0.3l-0.6,0.8
                    l-0.9,0.5l-2.7,3.6l-0.7,2.2v3.9l1.6,3l-0.5,0.5l-0.3,3.5l-0.2,0.3l-0.3-0.2l-1,1.7l-0.9,0.3l-2.2,2.5l-1,0.6l-3,3.2l-0.4,0.9
                    l0.1,8.1l0.4,0.9l0.3,2.2l4.9,5.1v1.3l-0.7,2.3l-1-0.3l-0.3,1.1l0.5,0.9l-1,0.3l-0.8,1.7h1.1l-0.5,2.1l-1.3,0.1l-0.5-0.8h-1
                    l-0.7,0.6l-0.5,1.1l-0.8,0.8l-0.7,2.1l1,2.1l0.1,3.8l-0.5,2l-0.1,3.6l-0.4,1.1l-0.1,3.8l-0.4,0.9l-0.3,2.3l-1.3,3v1.3l-0.4,1
                    l-0.2,1.1l-1.3,2.7l-0.2,1.2l-2.2,3.3l-0.4,1.5v7.2l0.3,0.9l-0.9,4.4l-2.4,3.7l-1.1,0.8v1.2l-0.4,0.9l-0.1,1.2l0.6,0.4l0.5,1.7
                    l-0.6,0.8l-0.2,1.1L481,403l-0.6,4.7l-0.6,0.7l0.1,0.9l0.5,0.8l-0.7,0.8l-1,0.4l-0.3,2.3l-0.9,1l-0.1,8.7l-0.6,1.2l-0.1,2.7
                    l-0.6,2.1l-1,0.9l-0.3,1.1l-1.1,1.6l-0.1,1.3l-0.9,2.2l-0.1,2.5l-0.6,1l-0.2,1.5l0.3,0.3l0.4,1.1v2.6l1.1,1.7l-0.1,2.5l-0.4,1
                    l-0.7,0.8l-1,0.4l-1.2,0.1l0.3,0.3l1.1,0.7l-0.5,1v1.3l-0.6,2.2v1.3l-0.4,1L469.8,460.3L469.8,460.3L469.8,460.3z" />
                    <path class="st0 middle path_lb" d="M460.3,250.9l-1.1-0.7l-0.7-1.2l-1.5-0.8l-4.9,0.6l-1.2,0.6l-1.6,0.2l-1.1,0.9l-0.9,1.1l-1.8,0.3l-1.2-0.6
                    l-2.8-4.8h-3.3l-1.3-0.5l-1.7-1.7l0.6-4.9l-0.4-1.4l-0.6-1.2l-0.9-1l-0.3-0.1l-1.2,0.6l-0.5,0.9L431,237l-4-0.1l-0.9,0.4l-4.5-0.2
                    v0.6l-1.2,0.6l-1.3,1.1l-1,1.2l-0.1,1.7l-2.3,3.8v1.8l-1.5,0.4h-1.8l-1.2-1.7l0.6-1l-1.8-0.7l-1.3,0.6l-0.5,1.5l-0.9,1.2l-1.6,0.5
                    l-3.3,4.6l-1.3,0.5h-3.6l-1.2,0.9l-0.5,1.3l-0.5,0.1l-1.3,1.5l-0.3,1.7l-1.5,0.4l-2.3,1.9l-1.5,0.4l-3.4-0.4l-3,1.1l-3.7,4.6
                    l-1.8,0.1l-1.3-0.8l-2.2-2.1l-0.3-1.7l-1.2-0.9l-1.8-2.7l-1.1,0.2h-1.8l-1.3-0.6l-3.4-0.2l-4.2-1.5l-3.3-0.1l-1.5,0.6l-1,1v1.8
                    l0.6,1.3l0.3,3.4l-0.6,1.3l-1.2,1l-1.5,0.5l-7-0.2l-1.3,0.6h-3.6l-3.5-1.1l-2.2-2.1l-0.8-1.3l-1.1-0.9l-7.7-1.5l-2.3-1.9l-1.7-0.5
                    l-1-1.3l-2.4-1.3l-1-1.1l-1.5-0.5l-0.9-1.1l-0.6-0.3l-2.1-0.2l-0.9-1.2l-2.2-1.5l-5.1-6.6h-0.2l-0.6-1.2l-3-1.2l-1.6-2.6l-0.3-1.3
                    l-2.6-3l-1.2,0.3l-0.2,1.6l-6.2,8.6l-1.3,3.2l0.2,2.6l-0.1,0.3l-0.9,1.1l-0.4,1l-1.9,0.9l-0.7,1.2l-3.2,2.2l0.1,0.9l0.3,0.8l0.1,1.5
                    l-0.6,0.7l-1.6-0.5l1.9,0.9l0.3,0.9l-0.7,1l-0.6,0.5l-1.5-2l-0.6,0.3l-0.8,0.9l-1.5,0.8l0.1,1.2l-0.5,0.9l-1.9,1.1l-0.6,1l2.8,3.9
                    l-0.1,1.1l-0.6,0.9l-0.3,1l-0.7-1.3l0.1-1.1l-1,1.1l-1-0.1l-0.3-1.3l0.6-1.2l-0.1-1.2l-0.9,0.9l-1.5,4.4l1.1,0.9l0.4,0.9l0.4,0.3
                    l0.1-0.2l1.2,0.8v1.3l-0.4,1l-2.6,3.9l-0.8,0.6l-1,2.6l0.1,1.1l-0.8,0.2l0.3,1l0.5,0.6l-1,0.5l-2.2,2.8v0.1l-1.8,2.9l-0.9,0.5
                    l-3.8,0.1l0.2,1l1,0.9l-0.1,2.5l-0.7,0.6l-0.4,0.9l-0.3,1.2l-0.6,0.9l-0.1,2.6l-0.1,0.3l-0.7,1v1.3l0.4,0.9l-0.2,1.3l-0.9,0.9
                    l-2.1,0.8l-0.5,1.2l-1.6,1.6l-0.2,2.4l-0.4,1l-1.8,0.3l-1,0.8l-1.1,0.2l-1.6,1.2l-0.9,0.3l-0.3,1.1l-2.8,2.1L237,329v1.5l-0.6,1
                    l-0.2,1.1l-0.9,0.6l-0.4,2.2l-1.6,0.1l-1.3-0.2l-1,0.8l-0.7,3.4l0.3,0.8h2.6v0.6l-3.3,4.9l-0.2-0.1l-0.3,1.4l-0.6,0.8l-0.3,1
                    l-0.7,0.7l-0.9,3.3l-1.4,1.6l-0.4,1.3l-1.2,1.8l-0.4,1l-0.6,0.7l-0.2,1.5l-0.9,0.5L221,362l-1,0.5l-0.6,0.9l-1,0.5v0.9l0.6,0.9
                    l-0.4,0.3h-1.3l-0.6,0.9l-0.2,2.5l-0.3,0.7l0.4-0.3l4.3,1.5l2.6,0.2l4,1.2l11-0.5l1.9-0.7l10,0.2l1.7-0.9l3.4,1.9l0.5,0.9l2.9,0.3
                    l5.5,2.8l4.3,1l5-0.2l2.1-0.5l19,3.2l-0.8,0.1l3.5,7.4l-0.3,4.8l-1.9-0.3l-0.5,2.1l0.2,5l1,1.7l0.2,2.4l-1,4.1l-0.5,0.9l-0.2,0.2
                    l-1.4,4l0.2,5l3.3-2.4l0.5,2.1l1,1.9l1.5,1l2.4,0.2l2.1-0.3l0.5-2.1l2.2,0.5l1.9-0.4l0.7-1.9l2.2,0.3l1.5,1.4l0.1,2.1l4.4-0.5
                    l7.9,2.9h2.6l2.2,0.5l0.9,1.7l0.2,5.9l-0.5,2.2l-1.9,1.5v2.6l1,1.7l1.5,1.4l0.3,5l1.7,4l1.4,1.5l7.8,0.9l3.8-1.5l7.6,0.7l1.9,0.7
                    l8.1,0.5l4.3,1.5h0.3l1.7,1.2l0.9,4.3l0.7,0.4l0.9-0.9l2.1-0.5l2.1-1.4l2.1-0.5l0.5-2.4l-0.7-2.1l-1.5-1.2l1.2-1.4l0.5-2.2l1.4-1.5
                    l1.5-1l0.5-2.1l1.5-1l2.4,0.2l1.9-0.9h2.6l0.9-0.3l1.7,1l2.1,0.5l3.3-2.8v-5.2l0.5-2.1l1.5-1l-1.4-4.4l1.7-0.9l2.6,0.7l1.9-0.9
                    l1-1.5l2.2-1l3.1-0.2l2.6-5.7l0.9-7.1l0.9-1.7V405l1.4-3.8V395l-1.7-1.5L416,391l0.5-1.9l-5.5-4l0.2-2.4l2.2-0.5l2.1-1.5v-1
                    l-0.5-2.1l0.3-2.4l1.5-1l0.7-2.2l0.2-2.6l0.7-2.1l1.4-1.7l0.2-2.6l1.5-1.5l2.1-0.5l-0.3-3.8L422,355l2.9-2.6l-0.2-2.1l-0.7-2.2v-2.6
                    l0.5-1.4V339l-1.4-1.7l-0.7-0.2v-2.4l4.1-8.8l0.2-5l1.5-1.5l1.7-0.9l1-1.7l1.7-0.9l1.4-2.4l0.5-1.7l0.2-2.4l-1-1.5l-2.4-0.3
                    l-0.7-1.9l-1.2-1.4l-2.6-0.9l-0.5-0.7l-0.2-4.3l1.9-4.5l2.1-0.5l1.4-1.2l1.9-0.9l2.6-2.6h2.6l1-1.5l-1-3.4l0.2,0.1l1.2-1l0.6-1.2
                    l-0.1-1.7l2.6-1.1l0.7-1.1l1.8,0.1l1-0.9l0.4-1.6l-0.6-3.2l0.9-1.3l1.6-0.6l1.1-0.7l1.1-2.9l1-1.1h1.8l1.2-0.9l1-1.2l1.5-3l0.5-5
                    l0.6-1.3l1.6-0.9l0.9-1L460.3,250.9z" />
                    <path id="ae9239f1-7686-4c40-a5f8-f322391c7328" class="st0" d="M469.8,460.4l-1.5,4.6v1.3l-1,0.6l-1.2,4.8v3.9l-1.2,2.6l0.1,3.8
                    l-0.8,3.8l-1,0.7h-1.3l-1,0.3l-0.9,0.7l-0.8,2.2l-0.5,0.9l-0.9,0.9l-0.4,0.9l-0.1,1.1l-0.8,0.8l-0.3,2.8l-0.7,0.9l-1.6,6.6l0.6,0.8
                    l0.4,1l-0.5,0.9l-1,0.8l-1-0.2l-0.6-1l-0.8,0.3l0.7,0.7l0.1,0.9l-2,1.4l0.2,5.4l1.3,2.6l0.3,1.2l-0.2,2.5l-1,1l0.1,3.7l2.1,2.2
                    l-0.6,2l-2.5,0.1l-0.9,0.7l-1.5,2.8l-0.9,0.4l-2.6,0.1l-0.6,0.8l-1,0.5v1.3l-0.5,0.8v1.3l-1.4,2l-1,3.4l-0.7,0.9l-0.6,3.9l-0.8,1.1
                    l-0.2,1.1l-0.8,0.5l-0.7,0.8l-0.7,2l-0.7,1.1l-0.9,3.5l-0.5,0.6l-0.3,1v1.3L430,565l-0.3,0.9l-1.2,0.1l-0.8,0.7l-0.6,1l-0.5,0.2
                    l-0.1,2.1l-2.3,5.1l-1.5,1.4l-1.5,3l-0.4,2.2l-0.8,0.7l-1,0.3l-1.6,1.7l-0.1,2.1l-2.2-0.5l-1,0.4l-2.3,0.3l-4,3.3l-0.5,0.8l-0.2,1.1
                    l0.4,0.9l1.2,1.4l0.3,0.9h-1.3l-0.5,0.8l0.4,0.8l0.9,0.5l0.7,0.8l-0.2,1l0.8,1.9l-0.3,1.1l-1.5,1.3l-1.1,0.2l-0.9,0.9l-0.9,5.4
                    l-1.5,1.4l-1.9,0.8l-0.8,0.7l-0.5,0.8l-1.7,1.5l-0.5,0.8l-0.8,0.5l-1,0.4l-2.6,3.1l-1.8,1l-1,0.3l-0.7,0.6l-0.9,0.4l-1.3,0.2
                    l-0.7,0.7l-1.2,0.1l-0.6,0.8l-1.6,1l-0.7,0.7l-1.8,0.8l-0.3,1l-0.7,0.8l-1.2,0.1l-0.8,0.7l-2.8,1.2l-0.8,0.7l-1.1,1.8l-0.6,2.2
                    l-0.8,0.9l-0.2,1.1l-0.6,0.8l-0.1,1.2l-0.5,1l0.1,1.2l-0.1,0.4l-0.1,3.6l-0.5,1v0.9l-1.3,1.9l-2.4,2.2l-0.6,0.9l-1.1,0.6l-0.5,0.8
                    l-0.2,1.1l-0.6,0.8l-0.1,1.2l-0.5,1.1v1.3l-0.9,0.5v1.7l-2,4.7v1.3l-0.6,0.6v2.6l-1.6,2.9l0.1,1.5l-0.9,1.1l-0.4,2.4l-0.6,0.8
                    l-0.2,2.4l-0.7,0.9l-0.3,1.2l-1.3,1.7l-0.3,1l-0.6,0.8l-2.4,6.9l-0.6,0.9l-0.3,3.4l-1.7,1.7l-2,6.2v2.4l-0.4,1l0.2,3.7l0.9,1.1v5.3
                    l0.6,2.2l0.1,3.2l-2.4,0.8l-1.3,1.2l-2.2,0.9l-1.9-3.3l-2.1-0.5h-2.8l-0.9-1.9l-1.9-0.7l-1.5-1l-2.9,0.2l-0.3-1.5l0.5-2.2l1.2-0.7
                    l-1.9-0.7l-0.7-1.7l-3.3-1.9l1.2-1.5l1.7-0.9l-0.2-5.2l-1.7-1l-0.9-1.7H321l-2.6-2.8l-2.4-1.3l3.3-10l4.5-0.7l0.9-1.9l-0.5-2.2
                    l-1.9-1.4l-1.7-3.6l-2.8-1.7l-0.2-2.1l-0.7-2.1l2.9-2.2v-2.6l-2.8-5.5l-0.4-2.9l-1.2-0.7l-0.7-2.1l0.3-2.4l1.9-3.5l-0.9-1.9l1-1.5
                    l0.7-1.9l-0.2-2.4l0.7-1.7l1.4-1.4l0.5-2.1l1.2-1.4l0.2-0.7l2.8-3.8l0.2-2.4l1.2-1.5l0.2-1.7l2.2,0.3l2.4-1.2l4.1-0.9l2.1-4.3
                    l7.6-0.3l1.4-1.5l0.2-2.5l1.2-1.4l0.3-6.7l1.4-1.4l-0.7-1.5v-2.6l-0.7-2.2l-1.7-0.9l-2.2-0.2l-1.9-1.7l-0.5-1l-0.5-2.1v-2.6l0.3-0.7
                    l0.5-4.6l-2-2.7l-3.7-0.2l-2-5.8l0.2-3.4l-1-1l-1.2-2.7v-3.7l0.7-2.9l6.8-8.8l0.6-1.2v-2.7l4.4-3.2l-1-2.9l-1.7-1.7l1.2-2.9l2.4-2.7
                    l-0.7-15.4l2.2-1.5l1.5-3.4l2.4-1.2l-0.7-2.7v-2.7l1-2.7l-0.2-1.2l-0.7-0.5l2-2.4l2.4-1l4.6-3.9l3.4-4.4h2.7l5.4-1.5l2-2l5.7-2.4
                    l0.6,1.7l2.6,3.3l-0.2,2.6l2.6,6.2l0.5,0.5l0.9,1.7h2.9l3.6,2.2l2.4,0.2l2.4,2.8l0.9,1.7l1.9,0.9h0.6l0.3-0.9l3.6-1.7l3.5,2.2
                    l1.2,1.5l0.9,1.9v2.9l2.6,3.6v1.9l1.7,1l2.1,0.7l1.2,1.5l0.7,0.5l3.1,0.2l1.4,1.2l1.2,2.2l0.2,2.4l1.4,0.2l1.7-1.2l6.7-1l0.7-1.9
                    v-7.8l-0.5-2.4l0.7-1.9l2.9-2.4l2.1-4l0.2-1.9l1-1.9v-2.6l1.5-1.2l1-4.1l0.9-1.7l1.5-1l1.2-1.5l0.3-6l8.3-12.6V476l-2.2-1.2
                    l-1.4-1.5l-0.4-3.1l0.2-0.2l5-9l2.9-2.4l1.9-0.7h2.6l2.1,0.5l1.5,1.2L469.8,460.4L469.8,460.4L469.8,460.4z" />
                    <path class="st0 south path_lb" d="M378.6,484.1l-10.4-7.2l-2.1-0.5l0.7-2.4l1.2-1.7l2.2-0.7l-0.3-1.5l1-1.5l2.2-0.4l1-1.5v-4.8l-1.5-1L372,459
                    l-0.6-0.2l-0.9-4.3l-1.7-1.2h-0.3l-6.7-1.9l-0.7,0.2l-1.7,0.9l-4.5,0.7l-1.5,1L349,455l-2.9,2.4l-1,1.7l-1.9,0.9l-1.5,1.2l-2.2,0.3
                    l-1.5,1.7l-1.2,2.9l-1.2,1l-0.7,1.9l-1.2,1.4l-0.2,2.4l-1.9,0.7H329l-1.3,1.4l-1,1.7l-2.8,2.8l-4.8,0.3l-1.5,4l-3.5,1.7l-0.7,1.9
                    l-4.5,0.3l-0.9,4.5l-5.5-0.2l-1.5-1.4l-5.4-0.2l-0.9,7.9l0.9,1.9l1.4,1.7v2.6l-0.4,0.3l-0.1-0.2l-0.7,0.5l-1.7-0.9l-4.3,0.9
                    l-2.1-0.7l-2.4-1.7l-2.6,3.8l-2.1,0.5l-2.2-0.2l-2.9-2.1l-4.1-1.2l-0.7-1.7l2.2-3.3l-0.5-1.7l-1.4-2.2l-0.4-1.7l0.9-1.7l-0.7-1.9
                    l-0.2-2.4l1-1.9l1.6-1.2l0.2-2.1l-0.7-1.9l-2.4-0.2l-2.6-0.9L267,477l1.7-1.2l-0.2-2.2l-5.3-0.4V471l1.7-1.2l1-1.6l-1.4-1.2l-1.5,1
                    l-2.1-0.5l-1.7-1.4l-2.2-0.7l-1.2-1.6l-3,0.2l-0.2,0.3l-1.6,1l-2.2,0.2l-1.4-1.4l-2.2,0.3l-3.6,1.7h-5.2l-4.1,2.4l-0.2,0.2l-1,1.7
                    l-4.3-0.2l0.2,2.1l-4.8,0.4l-0.4,2.2l-0.9,1.7l-1.2,1l-1.7-1l-1.4,1.4l0.7,1.9l-0.3,1.2l-6.6,3.3l-0.5,2.1l-2.2,3.3l-2.1,0.9
                    l-3.1-0.9l-0.9-1.4v1.9l-1.7-0.2l-1.6-1.4l-0.7-2.1l-2.6-0.5l-1.9-1.2l-0.5-0.7l-4.9-0.9l-2.7,4.6l0.4,0.9l0.7,0.1l-0.4,1.3
                    l-0.9,0.6l-0.2,1.2l1.9,1.1l0.8,0.2l1.1-0.3l-1.5,2.1l-2.3,0.9l-0.6,0.9l0.2,1.2l0.5,1l-1.7,1.6l-0.2,1.2l-0.5,0.9l-1.6-0.4
                    l-0.4,0.9l-0.5,2.3l0.1,2.6l-3.4,6.3l-0.3,2.4l-1,1.7l0.8-1l1-0.4l1-0.1l0.4,5.4l0.8,0.6l1,0.4l-0.6,3.6l-2.2,0.9h-0.2l-2.4,0.8
                    l-2.2,2l-2.2,1l-0.2,2.4l0.2,0.3l0.2,2.5l0.5,0.6h1.3l-0.1,4l0.5,1.6l1.4,1.7l0.2,0.5l1.3-0.5l0.9-0.6l0.7-0.7l0.2,1.1l-0.2,1.2
                    l3.2,1.9l0.6,0.2l1.2,1.1l2.2,1.1l2.7,2.8l1,0.5l3.6,3.4l0.1,0.3l2.4,2.3l1.6,2.5l1.1-0.3l1.6-1.5l0.9-0.5l-0.7,1.5l-0.6,0.8v0.9
                    l2.2,0.6l-1.1,1l-1.3-0.1l-0.7-1l-0.6-0.3l0.5,1.3l0.8,1l0.3,1.1L198,573l-0.4,0.9l0.7,1.4l0.9-0.5l1.4-1.4l1-0.4l5.8,2.1l1.7-0.9
                    l1.2,0.7l2.6,2.8h2.4l0.4-0.5l1.9,0.8l1.4,0.2l1-1.4l3.8,0.9l-4-0.4l-1,1.4l-1.4-0.2l-1.9-0.9l-0.3,0.5H213l-2.6-2.8l-1.2-0.7
                    l-1.7,0.9l-5.8-2.2l-1.1,0.5l-2.2,2l0.8,1l0.5,2.9l2.1,4.3v1.3h0.4l0.2-1.1l0.4-0.9l1.3-0.1l1.4,3.5l-0.2,1.1L204,588l-1-0.6
                    l-0.5-0.8l-0.3,0.6l0.1,1.2l0.6,1.5l0.1,1.2l1.2,2.3v0.9l6.1,14.4l0.1,1.2l1,2.3l0.9,1.2l2.1,4.5l1.2,2.6l3.1,3.8l-1.4,1.7l-2.7-2.7
                    l1.7,4.1l-2.8,2.7l-0.2,2.9l-0.3,1.1l0.3,1.2l1.9,1.7l0.6,0.9v1.3l0.6,0.7l-0.1,1.3l-0.8,0.5l0.5,0.8l1,0.5l0.9,2.3l1.8,1.8l0.4,1
                    l0.9,1.2l0.8,0.5l0.7,0.8l0.4,0.9l0.7,0.7l1.9,3.1l-1.8,0.3l-0.3,0.5v0.4l1.1,0.3l2.3-0.2l0.4,0.1l2.3,2.4l0.9,0.5l1.6,1.7l0.4,1
                    l2.7,2.2l1.2,1l4.7,3.8l1.2,0.5l1.9,1.7l3.7,1.1l0.2-0.4l-0.6-9.9l0.6-2l0.6-0.8l1.3,0.3l1.7-1.5l1.4-4l0.2-2.3l1.2-4.1v-2.6
                    l-2.4-2.9l0.2-12.4l1.4-4.1l1.2-1.5l1.2-4.7l-0.2-3.1l0.5-0.9l-0.2-10.3l0.9-1.9l0.3-2.2l0.9-1.7l1-6.7l1.7-0.9l1.2,0.5l3.1,0.2
                    l1,1.5h2.6l1.9-0.9l4.1,1l2.4-0.2l1.5-1.2l1.7-2.2l0.2-0.9l2.8-2.2l0.9-0.3l4.5-3.1l2.4-0.2l1.9-1.4l2.1-0.5l2.1,0.9l1.2,1.4v2.6
                    l1.9,0.9h1.9l0.7-0.7l2.1-0.5l2.2-3.3l2.1-0.5h2.6l5.9,3.6l4.3,5.2l1.9,1l1.9-1l1.2-1.5l3.5-1.7l1-1.5h2.2l0.7,0.2l1.7,0.9l0.2,0.9
                    l1.5-0.5l3.1,2.1l0.5-4.6l-2-2.7l-3.7-0.2l-2-5.8l0.2-3.4l-1-1l-1.2-2.7v-3.7l0.7-2.9l6.8-8.8l0.5-1.2v-2.7l4.4-3.2l-1-2.9l-1.7-1.7
                    l1.2-2.9l2.4-2.7l-0.7-15.4l2.2-1.5l1.5-3.4l2.4-1.2l-0.7-2.7v-2.7l1-2.7l-0.2-1.2l-0.7-0.5l2-2.4l2.4-1l4.6-3.9l3.4-4.4h2.7
                    l5.4-1.5l2-2l5.8-2.4l0.5-2.1L378.6,484.1z M288.9,522.2l-1.2,0.2l-3.8,4.7l-0.2,2.4l-0.9,1.7l-0.3,2.4l-0.9,0.5l-0.2,0.2l-0.3,2.1
                    l-11.2,8.1l-2.4,3.8l-6.3,4.5l-0.2,2.4l-3.8,0.2l-0.2,2.4l-0.7,2.1l-2.1,0.5l-2.6,6l-0.3,2.2l-0.7,0.9l-1,0.5l-1,4.3h-2.1l-1.7-1
                    l-2.4,0.2l-2.1,0.7l-5.6,5.6l-2.6,0.2l-4.7-1.5l4.8,1.1l2.6-0.2l4.3-4l1.2-1.7l2.1-0.7l2.4-0.2l1.7,1h2.1l1-4.3l1-0.5l0.7-0.9
                    l0.3-2.2l2.6-6l2.1-0.5l0.7-2.1l0.2-2.4l3.8-0.2l0.2-2.4l6.2-4.5l2.4-3.8l7.1-4.8l1.5-1.7l2.6-1.6l0.4-2.1l0.2-0.2l0.9-0.5l0.3-2.4
                    l0.9-1.7l0.2-2.4l3.8-4.7l1.2-0.2l5.5-7v0.1L288.9,522.2z M294.9,511.8v-0.1l2.5-3.2v0.2L294.9,511.8z" />
                    <path id="ae28d47a-650c-43d9-aedc-c1d11a068993" class="st0" d="M243.1,445l0.3,2.2l2.1,2.1l-1.4,3.1l6.9,1l0.7,1.9l1.4,1.9l1.7,0.9
                    l1.7-1l0.9-1.7l3.1-2.4l1.4,1.2l3.1,1l0.5-1.7l2.4-2.9l-1.4-1.4l-0.5-2l-2.1-0.5L263,445l-1.5-1l-1.9,0.7l-1.4-1.2l-1.2-1.7
                    l-1.7-0.9l-2.1,0.5l-4.8,3.5l-2.1-0.5L243.1,445L243.1,445L243.1,445z" />
                </svg>
            </div>
            <div class="col-6 mt-5">
                <div class="row d-flex align-items-center">
                    <div class="col-4 d-flex">
                        <h1 class="title_lb mb-0">全台精選月老廟</h1>
                    </div>
                    <div class="col-4">
                        <div class="row d-flex justify-content-center">
                            <div class="form-group mr-4 my-auto">
                                <select class="select_lb" name="area_lb" id="area_lb" onchange="getCate()">
                                    <!-- 改option樣式 -->
                                    <option selected="selected" class="selectnorth_lb" value="1">北部</option>
                                    <option value="2">中部</option>
                                    <option value="3">南部</option>
                                </select>
                            </div>
                            <div class="form-group my-auto">
                                <select class="select_lb" name="item_lb" id="item_lb" >
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
<!-- pc廟宇卡片 -->
                <div id="c01-info-card_lb" class="info-card_lb  mt-5" ></div>
            </div>
        </div>
    </div>
    <!--全台精選月老廟-mb-->
    <div id="mbselected-temple_lb" class=" container mbtargetScrollSection mbselected-temple_lb  d-md-none p-0">
        <h1 class="text-center mb-title_lb py-4">全台精選月老廟</h1>
        <div class="row d-flex justify-content-center m-0">
            <div class="form-group mr-4 my-auto">
                <select class="mbselect_lb" name="mbarea_lb" id="mbarea_lb" onchange="mbgetCate()">
                    <!-- 改option樣式 -->
                    <option selected="selected" class="mbselectnorth_lb" value="1">北部</option>
                    <option value="2">中部</option>
                    <option value="3">南部</option>
                </select>
            </div>
            <div class="form-group my-auto">
                <select class="mbselect_lb" name="mbitem_lb" id="mbitem_lb">
                    <!-- 改option樣式 -->
                    <!-- <option value="1">幸福美滿</option>
                    <option selected="selected" value="0">祈求姻緣</option>
                    <option value="2">斬桃花、小三</option> -->
                </select>
            </div>
        </div>
        <!-- 手機廟卡片 -->
        <div class="temScroll-snap_lb">
            <div class="row flex-nowrap m-0">
                <?php foreach ($temples as $t) : ?>
                    <div class="p-0">
                        <div id="mbTemCard-c01" class="mbTemCard pt-3" data-id="<?= $t['sid'] ?>">
                            <div class="mx-auto c01-mbTemImg-wrap">
                                <img class="w-100" src="./imgs/culture/temple/<?=$t['img']?>_s.jpg" alt="">
                            </div>
                            <h6 class="text-center mt-3 text-white"><?= $t['name'] ?></h6>
                            <p class="xs mbdetail-info_lb mb-0 text-white">
                                <span class="ml-3"><?= $t['address'] ?>
                                </span>
                                <span class="ml-3"><?= $t['opening_hours'] ?></span>
                            </p>
                        </div>
                    </div>
                    <!-- <div class="col p-0">
                        <div class="mbTemCard pt-3">
                            <div id="mbTemCard-c06"   class="mx-auto c06-mbTemImg-wrap">
                            </div>
                            <h6 class="text-center mt-3 text-white">龍山寺</h6>
                            <p class="xs mbdetail-info_lb mb-0 text-white">
                                <span class="ml-3">台北市萬華區廣州街211號
                                </span>
                                <span class="ml-3">07:00 - 21:30</span>
                            </p>
                        </div>
                    </div> -->
                <?php endforeach; ?>
            </div>
            
        </div>
        <div class="row position-relative m-0">
            <div id="mbdetail-card" class="mbdetail-card_lb hidden_lb">
                <!-- <div class="prepage_lb pl-2 pt-3">
                    <svg width="28" height="34" viewBox="0 0 28 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M21.9936 4.73409C22.3313 5.28285 22.1602 6.00145 21.6115 6.33914L8.05941 14.6789L21.6115 23.0186C22.1602 23.3563 22.3313 24.0749 21.9936 24.6237C21.6559 25.1724 20.9373 25.3435 20.3886 25.0058L6.83651 16.6661C5.35593 15.7549 5.35593 13.6028 6.83651 12.6917L20.3886 4.35194C20.9373 4.01425 21.6559 4.18534 21.9936 4.73409Z" fill="white" />
                    </svg>
                </div> -->
                <div class="row mbTemCard-top_lb py-3 m-0">
                    <div class="col-7 p-0 pl-3">
                        <div class="prepage_lb pl-2 pt-3">
                            <svg width="28" height="34" viewBox="0 0 28 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M21.9936 4.73409C22.3313 5.28285 22.1602 6.00145 21.6115 6.33914L8.05941 14.6789L21.6115 23.0186C22.1602 23.3563 22.3313 24.0749 21.9936 24.6237C21.6559 25.1724 20.9373 25.3435 20.3886 25.0058L6.83651 16.6661C5.35593 15.7549 5.35593 13.6028 6.83651 12.6917L20.3886 4.35194C20.9373 4.01425 21.6559 4.18534 21.9936 4.73409Z" fill="white" />
                            </svg>
                        </div>
                        <h6 class="m-0 text-white">台北市霞海城隍廟</h6>
                        <p class="xs mbdetail-info_lb mb-0 text-white">
                            <span class="ml-1">台北市大同區迪化街一段61號
                            </span>
                            <span class="ml-1">06:17 - 07:47</span>
                        </p>
                    </div>
                    <div class="col-3 p-0 mx-2">
                        <div class="mx-auto c01-mbDetailTemImg-wrap">
                            <img class="w-100" src="./imgs/culture/temple/C01_1.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div  class="mbTemCard-bottom_lb px-3">
                    <div class="text-center pb-2">
                        <p class="s temnotice_lb my-auto px-3 py-1">參拜步驟</p>
                    </div>
                    <small class=" mt-3 steptext_lb ">
                        1. 購入金紙、線香、供品
                        <br>
                        2. 點三支香，先於天公稟明姓名、年齡、地址並作三拜禮
                        <br>
                        3. 對正殿城隍爺、月老以及眾神稟明姓名、年齡、地址以及心目中理想對象的類型和條件
                        <br>
                        4. 參拜義勇公(祈求趕走小人、諸事平安順利) - 城隍夫人(保佑家庭幸福）- 菩薩（保佑開啟智慧、心境平和）
                        <br>
                        5. 吃喜餅、喜糖沾喜氣，喝平安茶保平安
                        <br>
                        6. 將鉛錢、紅線在香爐中過火，並放至皮包中妥善保存
                    </small>
                    <div class="text-center py-2">
                        <p class="temnotice_lb my-auto px-3 py-1">注意事項</p>
                    </div>
                    <small class="mt-3 temnoticetext_lb">
                        1. 需先向主神觀世音菩薩說明來意後，再依序參拜
                        <br>
                        2. 紅線務必隨身攜帶，可放置皮包或綁至手腕，建議盡量本人求紅線
                    </small>
                </div>
            </div> 
            
           <!-- <div id="c06-mbdetail-card"  class="mbdetail-card_lb d-none">
                    <div class="prepage_lb pl-2 pt-3">
                        <svg width="28" height="34" viewBox="0 0 28 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M21.9936 4.73409C22.3313 5.28285 22.1602 6.00145 21.6115 6.33914L8.05941 14.6789L21.6115 23.0186C22.1602 23.3563 22.3313 24.0749 21.9936 24.6237C21.6559 25.1724 20.9373 25.3435 20.3886 25.0058L6.83651 16.6661C5.35593 15.7549 5.35593 13.6028 6.83651 12.6917L20.3886 4.35194C20.9373 4.01425 21.6559 4.18534 21.9936 4.73409Z" fill="white" />
                        </svg>
                    </div>
                    <div class="row mbTemCard-top_lb py-3 m-0">
                        <div class="col-7 p-0 pl-3">
                            <h6 class="m-0 text-white">龍山寺</h6>
                            <p class="xs mbdetail-info_lb mb-0 text-white">
                                <span class="ml-1">台北市萬華區廣州街211號
                                </span>
                                <span class="ml-1">07:00 - 21:30</span>
                            </p>
                        </div>
                        <div class="col-3 p-0 mx-2">
                            <div class="mx-auto c06-mbDetailTemImg-wrap">
                            </div>
                        </div>
                    </div>
                    <div  class="mbTemCard-bottom_lb px-3">

                        <div class="text-center pb-2">
                            <p class="s temnotice_lb my-auto px-3 py-1">參拜步驟</p>
                        </div>
                        <small class=" mt-3 steptext_lb ">
                        1. 前殿:釋迦牟尼佛、藥師佛與阿彌陀佛<br>
                        2. 正殿:先向外拜天公，再向內拜觀世音菩薩、文殊菩薩、普賢菩薩<br>
                        3. 後殿中央:天上聖母<br>
                        4. 後殿右方:水仙尊王、城隍爺、龍爺、福德正神<br>
                        5. 後殿左方:註生娘娘、池頭夫人、十二婆者<br>
                        6. 後殿右側:文昌帝君、大魁星君、紫陽夫子、華陀仙師<br>
                        7. 後殿左側:關聖帝君、三官大帝、地藏王菩薩、月老神君<br>
                        8. 向月老稟明生辰八字、姓名、住址、理想對象類型及條件，擲三次聖筊後可索取一條紅線，並在月老香爐上過火
                        </small>


                        <div class="text-center pb-2">
                            <p class="temnotice_lb my-auto px-3 py-1">注意事項</p>
                        </div>
                        <small class="mt-3 temnoticetext_lb">
                        1. 需先向主神觀世音菩薩說明來意後，再依序參拜 <br>
                        2. 紅線務必隨身攜帶，可放置皮包或綁至手腕，建議盡量本人求紅線
                            </p>
                    </div>
            </div> -->
        </div>
    </div>

<!-- 月老喵誠心推薦 -->
    <div class="d-none d-md-block recommand_lb">
        <h2 class="text-center cul-text100">月老喵誠心推薦</h2>
        <div class="otherp">
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



<?php include __DIR__ . '/parts/scripts.php'; ?>
<script src="./culture.js"></script>

<script>
//把撈出的資料轉為字串
const areas = <?= json_encode($areas); ?>;
const temples = <?= json_encode($temples); ?>;

//pc
const area_lb = $('#area_lb'); //區域
const item_lb = $('#item_lb'); //選項

//拿區域
function getCate() {
    const area_sid = area_lb.val();
        
    // console.log('area_sid',area_sid)

    //拿到區域後把重複的item篩掉
    //ES6 中如果希望「陣列（Array）」的元素不會重複，可以使用 Set；如果是希望物件（Object）的鍵不會重複，則可以使用 Map。
    console.log('temples',temples);
    const t = temples.filter(el=>area_sid==el.area_sid);
    console.log('temple',t);
    const t2 = t.map(el=>el.category_tag);
   
    console.log('item',t2);
    const mySet = new Set(t2);
    console.log('new Set(t2)',new Set(t2));

    let str = '';
    for(let i of mySet){
        str += `<option value="${i}">${i}</option>`
    };

    item_lb.html(str);

}

getCate();


//地圖預設：北部
$(".path_lb").eq(0).css({
  fill: "#E5A62A",
  "-webkit-transform": "translate(-5px,-5px)",
});

//地圖北部被點擊
const northClicked = function () {
  $(".path_lb").removeAttr("style");
  $(".north").css({
    fill: "#E5A62A",
    "-webkit-transform": "translate(-5px,-5px)",
  });
  $("#north-group_lb").removeClass("d-none");
  $("#middle-group_lb").addClass("d-none");
  $("#south-group_lb").addClass("d-none");
  $("#area_lb").val("1");
  getCate();
};

$(".north").click(northClicked);

//地圖中部被點擊
const middleClicked = function () {
  $(".path_lb").removeAttr("style");
  $(".middle").css({
    fill: "#E5A62A",
    "-webkit-transform": "translate(-5px,-5px)",
  });
  $("#north-group_lb").addClass("d-none");
  $("#middle-group_lb").removeClass("d-none");
  $("#south-group_lb").addClass("d-none");
  $("#area_lb").val("2");
  getCate();
};

$(".middle").click(middleClicked);

//地圖南部被點擊
const southClicked = function () {
  $(".path_lb").removeAttr("style");
  $(".south").css({
    fill: "#E5A62A",
    "-webkit-transform": "translate(-5px,-5px)",
  });
  $("#north-group_lb").addClass("d-none");
  $("#middle-group_lb").addClass("d-none");
  $("#south-group_lb").removeClass("d-none");
  $("#area_lb").val("3");
  getCate();
};
$(".south").click(southClicked);

//區域被改變時
$("#area_lb").on("change", function () {
const val = $(this).val() - 1;
    // console.log({val});
const areas = [northClicked, middleClicked, southClicked];
areas[val]();
});



//TODO:求籤項目被改變的時候 地標卡片要篩選
//如果該區域的廟(landmark)的category_tag不等於el.category_tag 就會隱藏
$("#item_lb").on("change",function () {
    // console.log('HI', $(this).val());
    const targetTag = $(this).val();
    const area_sid = area_lb.val();
    // console.log('area',area_sid);

    const areaDomIdArray = ["#north-group_lb","#middle-group_lb","#south-group_lb"]

    $(`${areaDomIdArray[area_sid-1]} .landmark_lb`).each((index, item)=>{
        console.log('item value', $(item).data('tag'));
        if($(item).data('tag') === targetTag){
            // $(item).show();
            $(item).removeClass('d-none').addClass('d-inline-block');
        }
        else{
            // $(item).hide();
            $(item).removeClass('d-inline-block').addClass('d-none');
        }   
    })
    

    // const tag = $('.landmark').attr('data-value');
//     const [marks] = temples.filter(el=>{
//     return el.category_tag==tag;

// });
// console.log('[marks]',[marks]);
// marks[val]();
});


 //點擊地標出現廟宇卡片
 $('.landmark_lb').on('click', function(){

const id = $(this).attr('data-id');
const [item] = temples.filter(el=>{
    return el.sid==id;
});
console.log('[item]',item);
$('.info-card_lb').html(card_tpl_func(item));
$(this).addClass('landmarkActive_lb').siblings().removeClass('landmarkActive_lb');
});

//pc廟宇卡片
const card_tpl_func = ({hashtag,name,address,opening_hours,img,step,notice})=>{
    return `
        <div class="row">
            <div class="col-4">
                <div class="title-box_lb">
                    <h5 class="templetag_lb">#${hashtag}</h5>
                    <h2 class="templename_lb">${name}</h2>
                    <p class="detail-info_lb mb-0">
                        <span class="ml-3">地址</span>：${address}<br>
                        <span class="ml-3">開放時間</span>： ${opening_hours}
                    </p>
                </div>
            </div>
            <div class="col-4 p-0 c01-tem-wrap_lb">
                <img class="w-100" src="./imgs/culture/temple/${img}.jpg" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-8 cardhead_lb">
            </div>
            <div class="col-8">
                <div class="mt-4">
                    <h6 class="step_lb my-auto px-3 py-1">參拜步驟</h6>
                    <p class="mt-3 steptext_lb">${step}</p>
                </div>
                <div class="mt-4">
                    <h6 class="temnotice_lb my-auto px-3 py-1"> 注意事項</h6>
                    <p class="mt-3 temnoticetext_lb">${notice}</p>
                </div>
            </div>
        </div>`;
};

//桌機預設一開始出現的廟
const  mapDefault = function () {
const defaultId = $(this).attr('data-id');
const [item] = temples.filter(el=>{
    return el.sid === '6';
});

$('.info-card_lb').html(card_tpl_func(item));
};

mapDefault();



//mb
const mbarea_lb = $('#mbarea_lb'); 
const mbitem_lb = $('#mbitem_lb');

function mbgetCate() {
    const mbarea_sid = mbarea_lb.val();
    
    const mt = temples.filter(el=>mbarea_sid==el.area_sid);
    console.log('mbtemple',mt);

    const mt2 = mt.map(el=>el.category_tag);
    console.log('mbitem',mt2);
    const mbmySet = new Set(mt2);
    console.log('new Set(mt2)',new Set(mt2));


    let mbstr = '';
    for(let i of mbmySet){
        mbstr += `<option value="${i}">${i}</option>`
    };

    mbitem_lb.html(mbstr);

    let mtStr = '';
    mt.forEach((item)=>{
            mtStr += `<div class="p-0">
                        <div id="mbTemCard-c01" class="mbTemCard pt-3" data-id="${item.sid}">
                            <div class="mx-auto c01-mbTemImg-wrap">
                                <img class="w-100" src="./imgs/culture/temple/${item.img}_s.jpg" alt="">
                            </div>
                            <h6 class="text-center mt-3 text-white">${item.name}</h6>
                            <p class="xs mbdetail-info_lb mb-0 text-white">
                                <span class="ml-3">${item.address}</span>
                                <span class="ml-3">${item.opening_hours}</span>
                            </p>
                        </div>
                    </div>`
    })
    $('.temScroll-snap_lb .row').html(mtStr)

}

mbgetCate();


//mb卡片
const mbcard_tpl_func = ({name,address,opening_hours,img,step,notice})=>{
    return ` <div class="row mbTemCard-top_lb py-3 m-0">
                     <div class="col-12 prepage_lb pl-2 pt-3">
                        <svg width="28" height="34" viewBox="0 0 28 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M21.9936 4.73409C22.3313 5.28285 22.1602 6.00145 21.6115 6.33914L8.05941 14.6789L21.6115 23.0186C22.1602 23.3563 22.3313 24.0749 21.9936 24.6237C21.6559 25.1724 20.9373 25.3435 20.3886 25.0058L6.83651 16.6661C5.35593 15.7549 5.35593 13.6028 6.83651 12.6917L20.3886 4.35194C20.9373 4.01425 21.6559 4.18534 21.9936 4.73409Z" fill="white" />
                        </svg>
                    </div>
                    <div class="col-7 p-0 pl-3">
                        <h6 class="m-0 text-white">${name}</h6>
                        <p class="xs mbdetail-info_lb mb-0 text-white">
                            <span class="ml-1">${address}
                            </span>
                            <span class="ml-1">${opening_hours}</span>
                        </p>
                    </div>
                    <div class="col-3 p-0 mx-2">
                        <div class="mx-auto c01-mbDetailTemImg-wrap">
                            <img class="w-100" src="./imgs/culture/temple/${img}_s.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div  class="mbTemCard-bottom_lb px-3">
                    <div class="text-center pb-2">
                        <p class="s temnotice_lb my-auto px-3 py-1">參拜步驟</p>
                    </div>
                    <small class=" mt-3 steptext_lb ">
                    ${step}
                    </small>
                    <div class="text-center py-2">
                        <p class="temnotice_lb my-auto px-3 py-1">注意事項</p>
                    </div>
                    <small class="mt-3 temnoticetext_lb">
                    ${notice}
                    </small>
                </div>`
                // <div class="prepage_lb pl-2 pt-3">
                //     <svg width="28" height="34" viewBox="0 0 28 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                //         <path fill-rule="evenodd" clip-rule="evenodd" d="M21.9936 4.73409C22.3313 5.28285 22.1602 6.00145 21.6115 6.33914L8.05941 14.6789L21.6115 23.0186C22.1602 23.3563 22.3313 24.0749 21.9936 24.6237C21.6559 25.1724 20.9373 25.3435 20.3886 25.0058L6.83651 16.6661C5.35593 15.7549 5.35593 13.6028 6.83651 12.6917L20.3886 4.35194C20.9373 4.01425 21.6559 4.18534 21.9936 4.73409Z" fill="white"/>
                //     </svg>
                // </div>
                // <div class="row mbTemCard-top_lb py-3 m-0">
                //     <div class="col-7 p-0 pl-3">
                //         <h6 class="m-0 text-white">${name}</h6>
                //         <p class="xs mbdetail-info_lb mb-0 text-white">
                //             <span class="ml-1">${address}
                //             </span>
                //             <span class="ml-1"> ${opening_hours}</span>
                //         </p>
                //     </div>
                //     <div class="col-3 p-0 mx-2">
                //         <div class="mx-auto c01-mbDetailTemImg-wrap">
                //             <img class="w-100" src="./imgs/culture/temple/${img}.jpg" alt="">
                //         </div>
                //     </div>
                // </div>
                // <div  class="mbTemCard-bottom_lb px-3">

                //     <div class="text-center pb-2">
                //         <p class="s temnotice_lb my-auto px-3 py-1">參拜步驟</p>
                //     </div>
                //     <small class=" mt-3 steptext_lb ">${step}</small>
                //     <div class="text-center py-2">
                //         <p class="temnotice_lb my-auto px-3 py-1">注意事項</p>
                //     </div>
                //     <small class="mt-3 temnoticetext_lb">
                //     ${notice}
                //         </p>
                // </div>`




};


$('.temScroll-snap_lb').on('click','.mbTemCard',function(){
const mbid = $(this).attr('data-id');
const [mbitem] = temples.filter(el=>{
    return el.sid == mbid;
});
console.log('[mbitem]',[mbitem]);
$('.mbdetail-card_lb').html(mbcard_tpl_func(mbitem));
$('.mbdetail-card_lb').removeClass('hidden_lb');
$("html, body").animate({ scrollTop: $('#mbdetail-card').offset().top - 36 }, 500);
});


//卡片返回鍵
  $(".mbdetail-card_lb").on('click','.prepage_lb',function () {
    console.log('hi');
  $(".mbdetail-card_lb").addClass('hidden_lb');
});



$('#mbarea_lb').change(function(){
    console.log('mbarea_lb changed');
})



</script>
<?php include __DIR__ . '/parts/html-foot.php'; ?>
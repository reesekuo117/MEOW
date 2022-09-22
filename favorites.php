<?php
require __DIR__. '/parts/meow_db.php';  // /開頭
$pageName ='我的最愛'; //頁面名稱

    if(empty($_SESSION['user'])){
        header('Location: index_.php');
        exit;
    }
    $member_id = $_SESSION['user']['id'];
    $user_id = "SELECT * FROM `member` WHERE id=$member_id";
    $r_re = $pdo->query($user_id)->fetch();

    // echo $member_id;
    // var_dump($r_re);

    // if(empty($r_re)){
    //     header('Location: index_.php');
    //     exit;
    // }
    // 如果沒有資料會拿到ture轉到首頁

    //int isset(mixed var); 說明: 若參數var存在則傳回true，否則傳回false
    //intval -- 取得變量的整數值
    $perPage = 8;  //每頁最多有幾筆
    $page = isset($_GET['page']) ? intval($_GET['page']) : 1; //使用者決定看第幾頁
    // $cate = isset($_GET['cate']) ? intval($_GET['cate']) : 0;

    // $qsp = []; //query string parameters 查詢字串的參數

    // 取得分類資料
    // $cates = $pdo->query("SELECT * FROM love_type WHERE 1")
    // ->fetchAll();

    // $where = 'where 1';  //起頭
    // if($cate){
    //     $where .= " AND love_type_sid=$cate ";
    //     $qsp['cate'] = $cate;
    // } // .= 相加.

    //取得資料的總筆數  
    $p_sql = "SELECT COUNT(1) FROM product";   
    $totalRows = $pdo->query($p_sql)->fetch(PDO::FETCH_NUM)[0];  //PDO::FETCH_NUM — 數字索引陣列形式

    //計算總頁數
    $totalPages = ceil($totalRows/$perPage);  //ceil無條件進位

    $rows = []; //預設
    //有資料才執行 >0
    if($totalRows > 0){
    if($page<1){
        header('Location: ?page=1');
        exit;
    }
    if($page>$totalPages){
        header('Location: ?page='. $totalPages);
        exit;
    }
    // $page<1 ? ($page=1) : null;  //三元運算子
    //$page>$totalPages ? ($page=$totalPages) : null; 

    //TODO:取得該頁面的資料
    //sql外層通常用雙引號 內層用單引號就不需要跳脫
    $sql = sprintf("SELECT * FROM `product` ORDER BY `sid` DESC LIMIT %s, %s", ($page - 1) * $perPage, $perPage);
    // ORDER BY `sid` DESC 降冪 講義41頁
    // LIMIT %s, %s ==> [索引][筆數]
    $rows = $pdo->query($sql)->fetchAll();
    }



// json_encode判斷型別輸出JSON 數字型態
// echo json_encode([ 
//    '$rows' => $rows,
// ]);
// exit;
?>

<?php include __DIR__. '/parts/html-head.php'; ?>
<link rel="stylesheet" href="./reese.css">
<!-- <link rel="stylesheet" href="./reese.js"> -->
<?php include __DIR__. '/parts/navbar.php'; ?>
<div class="background-re">
<div class="container-re">
    <div class="tab row m-0">
        <div class=" d-none d-md-block col-md-3">
            <div class="picturewarp-re mx-auto my-4 position-relative">
                <img id="blah_md_re" class="w-100" src="<?= $r_re['picture'] ?>" alt="">
                <div class="pictureicon-re position-absolute" onclick="document.getElementById('pictureChange_re').style.display='block'" style="width:auto;">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="4" y="8" width="24" height="17.3333" rx="4" stroke="#432A0F" stroke-width="2.66667"/>
                        <path d="M6.82947 20.6949C6.47686 21.3413 6.71507 22.1512 7.36153 22.5039C8.00799 22.8565 8.81791 22.6183 9.17053 21.9718L6.82947 20.6949ZM18.1818 21.3333L17.0113 21.9718C17.2383 22.388 17.6692 22.6523 18.1431 22.6661C18.617 22.6799 19.0625 22.441 19.3133 22.0387L18.1818 21.3333ZM22.8685 22.0387C23.2581 22.6636 24.0804 22.8544 24.7053 22.4648C25.3302 22.0753 25.521 21.2529 25.1315 20.628L22.8685 22.0387ZM9.17053 21.9718L13.0909 14.7844L10.7499 13.5075L6.82947 20.6949L9.17053 21.9718ZM13.0909 14.7844L17.0113 21.9718L19.3523 20.6949L15.432 13.5075L13.0909 14.7844ZM19.3133 22.0387L21.0909 19.1871L18.8279 17.7764L17.0503 20.628L19.3133 22.0387ZM21.0909 19.1871L22.8685 22.0387L25.1315 20.628L23.3539 17.7764L21.0909 19.1871ZM21.0909 19.1871L21.0909 19.1871L23.3539 17.7764C22.31 16.1018 19.8719 16.1018 18.8279 17.7764L21.0909 19.1871ZM13.0909 14.7844L13.0909 14.7844L15.432 13.5075C14.4213 11.6545 11.7606 11.6545 10.7499 13.5075L13.0909 14.7844Z" fill="#432A0F"/>
                        <circle cx="21.3333" cy="13.3333" r="1.33333" fill="#432A0F"/>
                    </svg>
                </div>
            </div>
            <ul class="tab_list_re m-0 p-0 text-center">
                <li class="tablist-meowli01_re text-20-re py-2 col-6 mx-auto" data-val="member-data">
                    <img class="tablist-meowsvg01_re" src="./imgs/member/cate.png" alt="">會員資料</li>
                <li class="tablist-meowli02_re text-20-re py-2 col-6 mx-auto" data-val="modify-password">
                    <img class="tablist-meowsvg02_re d-none" src="./imgs/member/cate.png" alt="">修改密碼</li>
                <li class="tablist-meowli03_re text-20-re py-2 col-6 mx-auto" data-val="my-favorites">
                    <img class="tablist-meowsvg03_re d-none" src="./imgs/member/cate.png" alt="">我的最愛</li>
                <li class="tablist-meowli04_re text-20-re py-2 col-6 mx-auto" data-val="member-order">
                    <img class="tablist-meowsvg04_re d-none" src="./imgs/member/cate.png" alt="">查詢訂單</li>
                <label class="signupbutton my-2"><input class="btn-re btn200-re phonewidth330-re" type="button" value="登出" onclick="location.href='re-logout.php'"></label>
            </ul>
        </div>
<!-- 會員頭像----------------------------------------------------- -->
        <div id="pictureChange_re" class="pictureChange_re">
            <form name="from_picture_re" class="pictureChangePage_re pictureChangePage-animate_re col-12 col-md-6" method="post">
                <h4 class="text-center position-relative">選擇喜歡的頭像<br>或上傳一張美照吧～
                    <div class="picturePageClose-re d-inline-block position-absolute" onclick="document.getElementById('pictureChange_re').style.display='none'">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.66663 6.66666L25.3333 25.3333" stroke="#432A0F" stroke-width="2.66667" stroke-linecap="round"/>
                            <path d="M25.3333 6.66666L6.66659 25.3333" stroke="#432A0F" stroke-width="2.66667" stroke-linecap="round"/>
                        </svg>
                    </div>
                </h4>
                <p class="text-center py-2 mb-0 text-14-re">選擇預設頭像</p>
                <div class="d-flex flex-wrap justify-content-center my-2">
                    <div class="picturewarpChange-re col-4 col-md-2">
                        <img class="w-100" src="./imgs/member/picture01.png" alt="">
                        <!-- <input id=""  name="" type="checkbox" value="" /> -->
                    </div>
                    <div class="picturewarpChange-re col-4 col-md-2">
                        <img class="w-100" src="./imgs/member/picture02.png" alt="">
                        <!-- <input id=""  name="" type="checkbox" value="" /> -->
                    </div>
                    <div class="picturewarpChange-re col-4 col-md-2">
                        <img class="w-100" src="./imgs/member/picture03.png" alt="">
                        <!-- <input id=""  name="" type="checkbox" value="" /> -->
                    </div>
                </div>
                <div class="picturewarp-re col-12 col-md-8 mx-auto">
                    <img class="w-100" id="blah_re" src="<?= $r_re['picture'] ?>" alt="">
                </div>
                <div class="d-flex justify-content-center">
                    <label class="btn-re col-6 col-md-3 mx-1 mb-0 text-center">
                    <input type="file" id="mypicture-re" name="mypicture-re" style="display:none;" onchange="readURL_re(this);"><span class="picturetext-re">新增頭像</span></label>
                    <button id="picture_btn_re" class="btn-re col-6 col-md-3 mx-1" type="button" onclick="saveAvatar()">儲存</button>
                </div>
            </form>
        </div>
<!-- ------------------------------------------------------------ -->
        <div class="allright-re col-12 col-md-9 p-0">
        <div class="tab_con_re">
<!-- p3-like---------------------------------------------------------------------------------------- -->
            <div id="like-page-re" class="item_re">
                <div>
                    <ul class="tab-liketitle-re liketitle-all-re d-flax p-0">
                        <li class="col-3 textphone-16-re d-inline-block liketitle-re text-center active-re"><a href="#tab01-re">收藏商品</a></li><li class="col-3 textphone-16-re d-inline-block liketitle-re text-center "><a href="#tab02-re">收藏行程</a></li><li class="col-3 textphone-16-re d-inline-block liketitle-re text-center "><a href="#tab03-re">收藏詩籤</a></li><li class="col-3 textphone-16-re d-inline-block liketitle-re text-center "><a href="#tab04-re">收藏運勢</a></li>
                    </ul>
                </div>
    <!-- p3-P------------------------------------------------------------------ -->
                <div id="tab01-re" class="tab-inner-re ">
                    <div class="row mx-0 likehight-re">
                    <?php foreach($rows as $r): ?>
                        <div class="col-6 col-md-3 px-2 pb-3">
                            <div class="card-re">
                                <div class="position-relative ">
                                    <div class="cardimg-re">
                                        <img src="./imgs/product/cards/<?= $r['product_card_img'] ?>.jpg" class="card-img-top" alt="">
                                    </div>
                                    <div class="position-absolute likeicon-re">
                                        <svg class="likeiconsvg-re" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path  fill="#CD562F" stroke="#432A0F" d="M15.2855 9.22197C12.9704 6.90689 9.21692 6.90689 6.90184 9.22197C4.58676 11.537 4.58676 15.2905 6.90184 17.6056L13.2503 23.9532C14.8378 25.5407 17.4116 25.5407 18.9991 23.9532L24.5083 18.444L24.5074 18.4431L25.3449 17.6056C27.66 15.2905 27.66 11.5371 25.3449 9.22197C23.0298 6.90689 19.2763 6.90689 16.9612 9.22197L16.1234 10.0598L15.2855 9.22197Z" stroke-width="2.66667"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="card-body-re">
                                    <p class="card-title-re textphone-14-re mb-2"><?= $r['product_name'] ?></p>
                                    <div class="d-flex">
                                        <p class="text-20-re price-re col-9 p-0 my-auto"><?= $r['product_price'] ?></p>
                                        <button class="btn-re btn200-re col-3 p-0"  onclick="addToCartRe(event)">
                                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.53845 5.57208H8.09615L8.98424 9.40863M8.98424 9.40863L10.7604 19.6394H24.6146L26 9.40863H8.98424Z" stroke="#432A0F" stroke-width="2.5577" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M24.7212 24.7548C25.4275 24.7548 26 24.1822 26 23.476C26 22.7697 25.4275 22.1971 24.7212 22.1971V24.7548ZM11.2933 22.1971C10.9401 22.1971 10.6538 21.9108 10.6538 21.5577H8.09615C8.09615 23.3234 9.52755 24.7548 11.2933 24.7548V22.1971ZM10.6538 21.5577C10.6538 21.2045 10.9401 20.9183 11.2933 20.9183V18.3606C9.52755 18.3606 8.09615 19.792 8.09615 21.5577H10.6538ZM11.2933 24.7548H24.7212V22.1971H11.2933V24.7548Z" fill="#432A0F"/>
                                                <circle cx="13.2115" cy="26.0336" r="1.27885" fill="#432A0F"/>
                                                <circle cx="22.1634" cy="26.0336" r="1.27885" fill="#432A0F"/>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                        <!-- <div class="col-6 col-md-3 px-2 pb-3">
                            <div class="card-re">
                                <div class="position-relative ">
                                    <div class="cardimg-re">
                                        <img src="./imgs/購物車-商品(測試用).png" class="card-img-top" alt="">
                                    </div>
                                    <div class="position-absolute likeicon-re">
                                        <svg class="likeiconsvg-re" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path  fill="#CD562F" stroke="#432A0F" d="M15.2855 9.22197C12.9704 6.90689 9.21692 6.90689 6.90184 9.22197C4.58676 11.537 4.58676 15.2905 6.90184 17.6056L13.2503 23.9532C14.8378 25.5407 17.4116 25.5407 18.9991 23.9532L24.5083 18.444L24.5074 18.4431L25.3449 17.6056C27.66 15.2905 27.66 11.5371 25.3449 9.22197C23.0298 6.90689 19.2763 6.90689 16.9612 9.22197L16.1234 10.0598L15.2855 9.22197Z" stroke-width="2.66667"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="card-body-re">
                                    <p class="card-title-re textphone-14-re mb-2">台北霞海城隍廟獨家聯名--七夕月老供品組-甜作之盒</p>
                                    <div class="d-flex">
                                        <p class="text-20-re price-re col-9 p-0 my-auto">520</p>
                                        <button class="btn-re btn200-re col-3 p-0"  onclick="addToCartRe(event)">
                                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.53845 5.57208H8.09615L8.98424 9.40863M8.98424 9.40863L10.7604 19.6394H24.6146L26 9.40863H8.98424Z" stroke="#432A0F" stroke-width="2.5577" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M24.7212 24.7548C25.4275 24.7548 26 24.1822 26 23.476C26 22.7697 25.4275 22.1971 24.7212 22.1971V24.7548ZM11.2933 22.1971C10.9401 22.1971 10.6538 21.9108 10.6538 21.5577H8.09615C8.09615 23.3234 9.52755 24.7548 11.2933 24.7548V22.1971ZM10.6538 21.5577C10.6538 21.2045 10.9401 20.9183 11.2933 20.9183V18.3606C9.52755 18.3606 8.09615 19.792 8.09615 21.5577H10.6538ZM11.2933 24.7548H24.7212V22.1971H11.2933V24.7548Z" fill="#432A0F"/>
                                                <circle cx="13.2115" cy="26.0336" r="1.27885" fill="#432A0F"/>
                                                <circle cx="22.1634" cy="26.0336" r="1.27885" fill="#432A0F"/>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3 px-2 pb-3">
                            <div class="card-re">
                                <div class="position-relative ">
                                    <div class="cardimg-re">
                                        <img src="./imgs/購物車-商品(測試用).png" class="card-img-top" alt="">
                                    </div>
                                    <div class="position-absolute likeicon-re">
                                        <svg class="likeiconsvg-re" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path  fill="#CD562F" stroke="#432A0F" d="M15.2855 9.22197C12.9704 6.90689 9.21692 6.90689 6.90184 9.22197C4.58676 11.537 4.58676 15.2905 6.90184 17.6056L13.2503 23.9532C14.8378 25.5407 17.4116 25.5407 18.9991 23.9532L24.5083 18.444L24.5074 18.4431L25.3449 17.6056C27.66 15.2905 27.66 11.5371 25.3449 9.22197C23.0298 6.90689 19.2763 6.90689 16.9612 9.22197L16.1234 10.0598L15.2855 9.22197Z" stroke-width="2.66667"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="card-body-re">
                                    <p class="card-title-re textphone-14-re mb-2">台北霞海城隍廟獨家聯名--七夕月老供品組-甜作之盒</p>
                                    <div class="d-flex">
                                        <p class="text-20-re price-re col-9 p-0 my-auto">520</p>
                                        <button class="btn-re btn200-re col-3 p-0"  onclick="addToCartRe(event)">
                                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.53845 5.57208H8.09615L8.98424 9.40863M8.98424 9.40863L10.7604 19.6394H24.6146L26 9.40863H8.98424Z" stroke="#432A0F" stroke-width="2.5577" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M24.7212 24.7548C25.4275 24.7548 26 24.1822 26 23.476C26 22.7697 25.4275 22.1971 24.7212 22.1971V24.7548ZM11.2933 22.1971C10.9401 22.1971 10.6538 21.9108 10.6538 21.5577H8.09615C8.09615 23.3234 9.52755 24.7548 11.2933 24.7548V22.1971ZM10.6538 21.5577C10.6538 21.2045 10.9401 20.9183 11.2933 20.9183V18.3606C9.52755 18.3606 8.09615 19.792 8.09615 21.5577H10.6538ZM11.2933 24.7548H24.7212V22.1971H11.2933V24.7548Z" fill="#432A0F"/>
                                                <circle cx="13.2115" cy="26.0336" r="1.27885" fill="#432A0F"/>
                                                <circle cx="22.1634" cy="26.0336" r="1.27885" fill="#432A0F"/>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3 px-2 pb-3">
                            <div class="card-re">
                                <div class="position-relative ">
                                    <div class="cardimg-re">
                                        <img src="./imgs/購物車-商品(測試用).png" class="card-img-top" alt="">
                                    </div>
                                    <div class="position-absolute likeicon-re">
                                        <svg class="likeiconsvg-re" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path  fill="#CD562F" stroke="#432A0F" d="M15.2855 9.22197C12.9704 6.90689 9.21692 6.90689 6.90184 9.22197C4.58676 11.537 4.58676 15.2905 6.90184 17.6056L13.2503 23.9532C14.8378 25.5407 17.4116 25.5407 18.9991 23.9532L24.5083 18.444L24.5074 18.4431L25.3449 17.6056C27.66 15.2905 27.66 11.5371 25.3449 9.22197C23.0298 6.90689 19.2763 6.90689 16.9612 9.22197L16.1234 10.0598L15.2855 9.22197Z" stroke-width="2.66667"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="card-body-re">
                                    <p class="card-title-re textphone-14-re mb-2">台北霞海城隍廟獨家聯名--七夕月老供品組-甜作之盒</p>
                                    <div class="d-flex">
                                        <p class="text-20-re price-re col-9 p-0 my-auto">520</p>
                                        <button class="btn-re btn200-re col-3 p-0"  onclick="addToCartRe(event)">
                                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.53845 5.57208H8.09615L8.98424 9.40863M8.98424 9.40863L10.7604 19.6394H24.6146L26 9.40863H8.98424Z" stroke="#432A0F" stroke-width="2.5577" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M24.7212 24.7548C25.4275 24.7548 26 24.1822 26 23.476C26 22.7697 25.4275 22.1971 24.7212 22.1971V24.7548ZM11.2933 22.1971C10.9401 22.1971 10.6538 21.9108 10.6538 21.5577H8.09615C8.09615 23.3234 9.52755 24.7548 11.2933 24.7548V22.1971ZM10.6538 21.5577C10.6538 21.2045 10.9401 20.9183 11.2933 20.9183V18.3606C9.52755 18.3606 8.09615 19.792 8.09615 21.5577H10.6538ZM11.2933 24.7548H24.7212V22.1971H11.2933V24.7548Z" fill="#432A0F"/>
                                                <circle cx="13.2115" cy="26.0336" r="1.27885" fill="#432A0F"/>
                                                <circle cx="22.1634" cy="26.0336" r="1.27885" fill="#432A0F"/>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3 px-2 pb-3">
                            <div class="card-re">
                                <div class="position-relative ">
                                    <div class="cardimg-re">
                                        <img src="./imgs/購物車-商品(測試用).png" class="card-img-top" alt="">
                                    </div>
                                    <div class="position-absolute likeicon-re">
                                        <svg class="likeiconsvg-re" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path  fill="#CD562F" stroke="#432A0F" d="M15.2855 9.22197C12.9704 6.90689 9.21692 6.90689 6.90184 9.22197C4.58676 11.537 4.58676 15.2905 6.90184 17.6056L13.2503 23.9532C14.8378 25.5407 17.4116 25.5407 18.9991 23.9532L24.5083 18.444L24.5074 18.4431L25.3449 17.6056C27.66 15.2905 27.66 11.5371 25.3449 9.22197C23.0298 6.90689 19.2763 6.90689 16.9612 9.22197L16.1234 10.0598L15.2855 9.22197Z" stroke-width="2.66667"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="card-body-re">
                                    <p class="card-title-re textphone-14-re mb-2">台北霞海城隍廟獨家聯名--七夕月老供品組-甜作之盒</p>
                                    <div class="d-flex">
                                        <p class="text-20-re price-re col-9 p-0 my-auto">520</p>
                                        <button class="btn-re btn200-re col-3 p-0"  onclick="addToCartRe(event)">
                                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.53845 5.57208H8.09615L8.98424 9.40863M8.98424 9.40863L10.7604 19.6394H24.6146L26 9.40863H8.98424Z" stroke="#432A0F" stroke-width="2.5577" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M24.7212 24.7548C25.4275 24.7548 26 24.1822 26 23.476C26 22.7697 25.4275 22.1971 24.7212 22.1971V24.7548ZM11.2933 22.1971C10.9401 22.1971 10.6538 21.9108 10.6538 21.5577H8.09615C8.09615 23.3234 9.52755 24.7548 11.2933 24.7548V22.1971ZM10.6538 21.5577C10.6538 21.2045 10.9401 20.9183 11.2933 20.9183V18.3606C9.52755 18.3606 8.09615 19.792 8.09615 21.5577H10.6538ZM11.2933 24.7548H24.7212V22.1971H11.2933V24.7548Z" fill="#432A0F"/>
                                                <circle cx="13.2115" cy="26.0336" r="1.27885" fill="#432A0F"/>
                                                <circle cx="22.1634" cy="26.0336" r="1.27885" fill="#432A0F"/>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div> -->


                    </div> 
                    <div class="pagebtngroup-re text-center mb-3">
                        <button type="button" class="pagebtn-re ">
                            <svg width="16" height="21" viewBox="0 0 16 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.12603 11.3113C0.572142 10.9122 0.572141 10.0878 1.12603 9.68867L13.4396 0.816415C14.1011 0.339827 15.0242 0.812491 15.0242 1.62775L15.0242 19.3723C15.0242 20.1875 14.1011 20.6602 13.4396 20.1836L1.12603 11.3113Z" fill="#432A0F" fill-opacity="0.38"/>
                            </svg>
                        </button>
                        <?php for($i=$page - 2; $i<=$page + 2; $i++): 
                            if($i>=1 and $i <= $totalPages) : ?>
                            <button type="button" class="pagebtn-re" <?= $page==$i ? 'active' : '' ?>>
                                <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
                            </button>
                        <?php endif; endfor; ?>
                        <!-- <button type="button" class="pagebtn-re">1</button>
                        <button type="button" class="pagebtn-re">2</button>
                        <button type="button" class="pagebtn-re">3</button> -->
                        <button type="button" class="pagebtn-re">
                            <svg width="15" height="21" viewBox="0 0 15 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.9062 9.68867C14.4601 10.0878 14.4601 10.9122 13.9062 11.3113L1.59262 20.1836C0.931172 20.6602 0.00803278 20.1875 0.00803282 19.3722L0.00803359 1.62775C0.00803363 0.812489 0.931174 0.339829 1.59262 0.816417L13.9062 9.68867Z" fill="#432A0F" fill-opacity="0.38"/>
                            </svg>
                        </button>
                    </div>
                    <!-- <ul class="pagebtngroup-re text-center mb-3">
                        <li class="pagebtn-re < ?= $page==1 ? 'disabled' : '' ?>">
                            <a href="?page=<?= $page-1 ?>">
                                <svg width="16" height="21" viewBox="0 0 16 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.12603 11.3113C0.572142 10.9122 0.572141 10.0878 1.12603 9.68867L13.4396 0.816415C14.1011 0.339827 15.0242 0.812491 15.0242 1.62775L15.0242 19.3723C15.0242 20.1875 14.1011 20.6602 13.4396 20.1836L1.12603 11.3113Z" fill="#432A0F" fill-opacity="0.38"/>
                                </svg>
                            </a>
                        </li>
                        < ?php for($i=$page - 2; $i<=$page + 2; $i++): 
                            if($i>=1 and $i <= $p_totalPages) : ?>
                        <li class="pagebtn-re"  ?= $page==$i ? 'active' : '' ?>>
                            <a href="?page=< ?= $i ?>">< ?= $i ?></a>
                        </li>
                        < ?php endif; endfor; ?>
                        <li class="pagebtn-re" < ?= $page==$p_totalPages ? 'disabled' : '' ?>>
                            <a href="?page=<?= $page+1 ?>">
                                <svg width="15" height="21" viewBox="0 0 15 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.9062 9.68867C14.4601 10.0878 14.4601 10.9122 13.9062 11.3113L1.59262 20.1836C0.931172 20.6602 0.00803278 20.1875 0.00803282 19.3722L0.00803359 1.62775C0.00803363 0.812489 0.931174 0.339829 1.59262 0.816417L13.9062 9.68867Z" fill="#432A0F" fill-opacity="0.38"/>
                                </svg>
                            </a>
                        </li>
                    </ul> -->
                </div>
    <!-- p3-T------------------------------------------------------------------ -->
                <div id="tab02-re" class="tab-inner-re">
                <div class="row mx-0 likehight-re">
                        <div class="col-6 col-md-3 px-2 pb-3">
                            <div class="card">
                                <div class="position-relative">
                                    <img src="./imgs/購物車-行程(測試用).png" class="card-img-top" alt="">
                                    <div class="position-absolute likeicon-re">
                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill="#CD562F" stroke="#432A0F" d="M15.2855 9.22197C12.9704 6.90689 9.21692 6.90689 6.90184 9.22197C4.58676 11.537 4.58676 15.2905 6.90184 17.6056L13.2503 23.9532C14.8378 25.5407 17.4116 25.5407 18.9991 23.9532L24.5083 18.444L24.5074 18.4431L25.3449 17.6056C27.66 15.2905 27.66 11.5371 25.3449 9.22197C23.0298 6.90689 19.2763 6.90689 16.9612 9.22197L16.1234 10.0598L15.2855 9.22197Z" stroke-width="2.66667"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="card-body-re">
                                    <p class="card-title-re text-16-re">台北霞海城隍廟獨家行程一日遊</p>
                                    <div class="d-flex">
                                        <p class="text-20-re price-re col-9 p-0 my-auto">5520</p>
                                        <button class="btn-re btn200-re col-3 p-0"  onclick="addToCartRe(event)">
                                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.53845 5.57208H8.09615L8.98424 9.40863M8.98424 9.40863L10.7604 19.6394H24.6146L26 9.40863H8.98424Z" stroke="#432A0F" stroke-width="2.5577" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M24.7212 24.7548C25.4275 24.7548 26 24.1822 26 23.476C26 22.7697 25.4275 22.1971 24.7212 22.1971V24.7548ZM11.2933 22.1971C10.9401 22.1971 10.6538 21.9108 10.6538 21.5577H8.09615C8.09615 23.3234 9.52755 24.7548 11.2933 24.7548V22.1971ZM10.6538 21.5577C10.6538 21.2045 10.9401 20.9183 11.2933 20.9183V18.3606C9.52755 18.3606 8.09615 19.792 8.09615 21.5577H10.6538ZM11.2933 24.7548H24.7212V22.1971H11.2933V24.7548Z" fill="#432A0F"/>
                                                <circle cx="13.2115" cy="26.0336" r="1.27885" fill="#432A0F"/>
                                                <circle cx="22.1634" cy="26.0336" r="1.27885" fill="#432A0F"/>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="pagebtngroup-re text-center mb-3">
                        <button type="button" class="pagebtn-re ">
                        <svg width="16" height="21" viewBox="0 0 16 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.12603 11.3113C0.572142 10.9122 0.572141 10.0878 1.12603 9.68867L13.4396 0.816415C14.1011 0.339827 15.0242 0.812491 15.0242 1.62775L15.0242 19.3723C15.0242 20.1875 14.1011 20.6602 13.4396 20.1836L1.12603 11.3113Z" fill="#432A0F" fill-opacity="0.38"/>
                        </svg>
                        </button>
                        <button type="button" class="pagebtn-re">1</button>
                        <button type="button" class="pagebtn-re">2</button>
                        <button type="button" class="pagebtn-re">3</button>
                        <button type="button" class="pagebtn-re">
                        <svg width="15" height="21" viewBox="0 0 15 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.9062 9.68867C14.4601 10.0878 14.4601 10.9122 13.9062 11.3113L1.59262 20.1836C0.931172 20.6602 0.00803278 20.1875 0.00803282 19.3722L0.00803359 1.62775C0.00803363 0.812489 0.931174 0.339829 1.59262 0.816417L13.9062 9.68867Z" fill="#432A0F" fill-opacity="0.38"/>
                        </svg>
                        </button>
                    </div>
                </div>
    <!-- p3-D------------------------------------------------------------------ -->
                <div id="tab03-re" class="tab-inner-re">
                    <div class="row mb-3 mx-0 likehight-re">
                        <div class="col-12 col-md-4 likecard-re position-relative pb-3">
                            <img class="w-100" src="./imgs/testre.jpg" alt="">
                            <div class="position-absolute likeicon2-re">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="#CD562F" stroke="#432A0F" d="M15.2855 9.22197C12.9704 6.90689 9.21692 6.90689 6.90184 9.22197C4.58676 11.537 4.58676 15.2905 6.90184 17.6056L13.2503 23.9532C14.8378 25.5407 17.4116 25.5407 18.9991 23.9532L24.5083 18.444L24.5074 18.4431L25.3449 17.6056C27.66 15.2905 27.66 11.5371 25.3449 9.22197C23.0298 6.90689 19.2763 6.90689 16.9612 9.22197L16.1234 10.0598L15.2855 9.22197Z" stroke-width="2.66667"/>
                                </svg>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 likecard-re position-relative pb-3">
                            <img class="w-100" src="./imgs/testre.jpg" alt="">
                            <div class="position-absolute likeicon2-re">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="#CD562F" stroke="#432A0F" d="M15.2855 9.22197C12.9704 6.90689 9.21692 6.90689 6.90184 9.22197C4.58676 11.537 4.58676 15.2905 6.90184 17.6056L13.2503 23.9532C14.8378 25.5407 17.4116 25.5407 18.9991 23.9532L24.5083 18.444L24.5074 18.4431L25.3449 17.6056C27.66 15.2905 27.66 11.5371 25.3449 9.22197C23.0298 6.90689 19.2763 6.90689 16.9612 9.22197L16.1234 10.0598L15.2855 9.22197Z" stroke-width="2.66667"/>
                                </svg>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 likecard-re position-relative pb-3">
                            <img class="w-100" src="./imgs/testre.jpg" alt="">
                            <div class="position-absolute likeicon2-re">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="#CD562F" stroke="#432A0F" d="M15.2855 9.22197C12.9704 6.90689 9.21692 6.90689 6.90184 9.22197C4.58676 11.537 4.58676 15.2905 6.90184 17.6056L13.2503 23.9532C14.8378 25.5407 17.4116 25.5407 18.9991 23.9532L24.5083 18.444L24.5074 18.4431L25.3449 17.6056C27.66 15.2905 27.66 11.5371 25.3449 9.22197C23.0298 6.90689 19.2763 6.90689 16.9612 9.22197L16.1234 10.0598L15.2855 9.22197Z" stroke-width="2.66667"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="pagebtngroup-re text-center mb-3">
                        <button type="button" class="pagebtn-re ">
                        <svg width="16" height="21" viewBox="0 0 16 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.12603 11.3113C0.572142 10.9122 0.572141 10.0878 1.12603 9.68867L13.4396 0.816415C14.1011 0.339827 15.0242 0.812491 15.0242 1.62775L15.0242 19.3723C15.0242 20.1875 14.1011 20.6602 13.4396 20.1836L1.12603 11.3113Z" fill="#432A0F" fill-opacity="0.38"/>
                        </svg>
                        </button>
                        <button type="button" class="pagebtn-re">1</button>
                        <button type="button" class="pagebtn-re">2</button>
                        <button type="button" class="pagebtn-re">3</button>
                        <button type="button" class="pagebtn-re">
                        <svg width="15" height="21" viewBox="0 0 15 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.9062 9.68867C14.4601 10.0878 14.4601 10.9122 13.9062 11.3113L1.59262 20.1836C0.931172 20.6602 0.00803278 20.1875 0.00803282 19.3722L0.00803359 1.62775C0.00803363 0.812489 0.931174 0.339829 1.59262 0.816417L13.9062 9.68867Z" fill="#432A0F" fill-opacity="0.38"/>
                        </svg>
                        </button>
                    </div>
                    
                </div>
    <!-- p3-F------------------------------------------------------------------ -->
                <div id="tab04-re" class="tab-inner-re">
                    <div class="row mb-3 mx-0 likehight-re">
                    <div class="col-12 col-md-4 likecard-re position-relative pb-3">
                        <img class="w-100" src="./imgs/testre.jpg" alt="">
                        <div class="position-absolute likeicon2-re">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill="#CD562F" stroke="#432A0F" d="M15.2855 9.22197C12.9704 6.90689 9.21692 6.90689 6.90184 9.22197C4.58676 11.537 4.58676 15.2905 6.90184 17.6056L13.2503 23.9532C14.8378 25.5407 17.4116 25.5407 18.9991 23.9532L24.5083 18.444L24.5074 18.4431L25.3449 17.6056C27.66 15.2905 27.66 11.5371 25.3449 9.22197C23.0298 6.90689 19.2763 6.90689 16.9612 9.22197L16.1234 10.0598L15.2855 9.22197Z" stroke-width="2.66667"/>
                            </svg>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 likecard-re position-relative pb-3">
                        <img class="w-100" src="./imgs/testre.jpg" alt="">
                        <div class="position-absolute likeicon2-re">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill="#CD562F" stroke="#432A0F" d="M15.2855 9.22197C12.9704 6.90689 9.21692 6.90689 6.90184 9.22197C4.58676 11.537 4.58676 15.2905 6.90184 17.6056L13.2503 23.9532C14.8378 25.5407 17.4116 25.5407 18.9991 23.9532L24.5083 18.444L24.5074 18.4431L25.3449 17.6056C27.66 15.2905 27.66 11.5371 25.3449 9.22197C23.0298 6.90689 19.2763 6.90689 16.9612 9.22197L16.1234 10.0598L15.2855 9.22197Z" stroke-width="2.66667"/>
                            </svg>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 likecard-re position-relative pb-3">
                        <img class="w-100" src="./imgs/testre.jpg" alt="">
                        <div class="position-absolute likeicon2-re">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill="#CD562F" stroke="#432A0F" d="M15.2855 9.22197C12.9704 6.90689 9.21692 6.90689 6.90184 9.22197C4.58676 11.537 4.58676 15.2905 6.90184 17.6056L13.2503 23.9532C14.8378 25.5407 17.4116 25.5407 18.9991 23.9532L24.5083 18.444L24.5074 18.4431L25.3449 17.6056C27.66 15.2905 27.66 11.5371 25.3449 9.22197C23.0298 6.90689 19.2763 6.90689 16.9612 9.22197L16.1234 10.0598L15.2855 9.22197Z" stroke-width="2.66667"/>
                            </svg>
                        </div>
                    </div>
                    </div>
                    <div class="pagebtngroup-re text-center mb-3">
                        <button type="button" class="pagebtn-re ">
                        <svg width="16" height="21" viewBox="0 0 16 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.12603 11.3113C0.572142 10.9122 0.572141 10.0878 1.12603 9.68867L13.4396 0.816415C14.1011 0.339827 15.0242 0.812491 15.0242 1.62775L15.0242 19.3723C15.0242 20.1875 14.1011 20.6602 13.4396 20.1836L1.12603 11.3113Z" fill="#432A0F" fill-opacity="0.38"/>
                        </svg>
                        </button>
                        <button type="button" class="pagebtn-re">1</button>
                        <button type="button" class="pagebtn-re">2</button>
                        <button type="button" class="pagebtn-re">3</button>
                        <button type="button" class="pagebtn-re">
                        <svg width="15" height="21" viewBox="0 0 15 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.9062 9.68867C14.4601 10.0878 14.4601 10.9122 13.9062 11.3113L1.59262 20.1836C0.931172 20.6602 0.00803278 20.1875 0.00803282 19.3722L0.00803359 1.62775C0.00803363 0.812489 0.931174 0.339829 1.59262 0.816417L13.9062 9.68867Z" fill="#432A0F" fill-opacity="0.38"/>
                        </svg>
                        </button>
                    </div>
                </div>
            </div>


            </div>
        </div>
        </div>
    </div>
</div>
</div>
<?php include __DIR__. '/parts/scripts.php'; ?>
<script src="./reese.js"></script>
<?php include __DIR__. '/parts/html-foot.php'; ?>
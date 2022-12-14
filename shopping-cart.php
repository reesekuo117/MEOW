<?php
require __DIR__ . '/parts/meow_db.php';  // /開頭
$pageName = 'cart'; //頁面名稱

?>

<?php include __DIR__ . '/parts/html-head.php'; ?>
<link rel="stylesheet" href="./shopping-cart.css">

<?php include __DIR__ . '/parts/navbar.php'; ?>

<!-- ------------------桌機----------------------- -->
<section class="d-none d-md-block">
    <!-- 購物車訂單的進度條progress-bar -->
    <div class=" container-fluid p-0 ">
        <div class="line-box-yu"></div>
        <div class="progress-bar-yu">
            <div class=" d-flex justify-content-around ">

                <span class="row circle-1-yu ">
                    <div class="circle-light">
                        <h5 class="page-light-number">1</h5>
                    </div>
                    <div class="page-yu ">
                        <h5 class=" m-0 page-yu-one">購物車訂單</h5>
                    </div>
                    <div class=" pageline-yu "></div>
                </span>

                <span class="row circle-2-yu">
                    <div class="circle">
                        <h5>2</h5>
                    </div>
                    <div class="page-yu ">
                        <h5 class="m-0 page-yu-two ">填寫資料</h5>
                    </div>
                </span>

                <span class="row circle-3-yu">
                    <div class="circle">
                        <h5>3</h5>
                    </div>
                    <div class="page-yu ">
                        <h5 class="m-0 page-yu-three">完成訂單</h5>
                    </div>
                </span>
            </div>
        </div>
        <!-- 獨家商品 旅遊行程分頁標籤 -->
        <!-- href="#uniqui-yu" data-toggle="tab" -->
        <!-- href="#travel-yu" data-toggle="tab" role="button -->
        <div class=" pagination-yu btn-group myTab nav nav-tabs">
            <a id="uniqui-a-yu" href="#" data-toggle="tab" class="px-0 m-auto btn active" role="button">獨家商品</a>
            <a id="travel-a-yu" href="#" data-toggle="tab" class=" px-0 m-auto btn" role="button">旅遊行程</a>
        </div>
    </div>
    <!--  購物車商品清單 -->
<!-- 商品 --------------------------------------------------------------------->
    <!-- 已給 #myTabContent-P-yu{max-width: 1450px;} -->
    <div id="myTabContent-P-yu" class="px-1 tab-content container">
        <?php if (empty($_SESSION['pcart'])) : ?>
            <div class="alert alert-danger" role="alert">
                購物車內沒有獨家商品
            </div>
        <?php else : ?>
            <!-- 獨家商品 -->
            <div id="uniqui-yu">
                <div class="px-0 col-auto justify-content-around text-center">
                    <div id="form-yu">
                        <table id="tabYu" class="table ">
                            <thead class="thead">
                                <tr class="checkall-yu">
                                    <!-- <th scope="col" class="m-auto checkbox-yu ">
                                        <input name="ckbox" class="mx-1 d-none" type="checkbox" id="check1AllYu" aria-label="Checkbox for following text input">
                                        <label class="mb-0 ">
                                            <h6 class="mb-0 d-none">全選</h6>
                                        </label>

                                    </th> -->
                                    <!-- <th> 
                                        <h6 class="mb-0 ">ID</h6>
                                    </th> -->
                                    <th class="col formThwYu">
                                        <h6 class="mb-0 ">商品照片</h6>
                                    </th>
                                    <th scope="col" class="formThwYu">
                                        <h6 class="mb-0 ">商品名稱</h6>
                                    </th>
                                    <!-- <th scope="col" class="formThwYu">
                                        <h6 class="mb-0 ">規格</h6>
                                    </th> -->
                                    <th scope="col" class="formThwYu">
                                        <h6 class="mb-0 ">單價</h6>
                                    </th>
                                    <th scope="col" class="formThwYu">
                                        <h6 class="mb-0 ">數量</h6>
                                    </th>
                                    <th scope="col" class="sub-total formThwYu">
                                        <h6 class="mb-0 ">小計</h6>
                                    </th>
                                    <th scope="col" class="formThwYu ">
                                        <h6 class="mb-0 ">刪除</h6>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class=" tbody">
                                <?php
                                $total = 0;
                                foreach ($_SESSION["pcart"] as $k => $v) :  $total += $v['product_price'] * $v['qty']; ?>
                                    <tr data-sid="<?= $v['sid'] ?>" class="pcart-item">
                                        <!-- <th scope="col m-auto ">
                                            <div class=" m-auto p-1 checkbox-yu d-none">
                                                <input id="checkboxInputYu" class=" mx-2" type="checkbox" name="oneCheck1Yu" aria-label="Checkbox for following text input" checked>
                                            </div>
                                        </th> -->
                                        <!-- 商品照片 -->
                                        <td class="imgsCardYu">
                                            <img class="w-100" src="imgs/product/cards/<?= $v['product_card_img'] ?>.jpg" alt="...">
                                        </td>
                                        <!-- 商品名稱 -->
                                        <td>
                                            <h6 class="m-0">
                                                <?= $v["product_name"] ?>
                                            </h6>
                                        </td>
                                        <!-- 商品規格 -->
                                        <!-- <td>
                                            <div class="">
                                                <select class="form-select-yu" id="autosizing-yu">
                                                    <option value="0">< ?= $v["product_size"] ?></option>
                                                    <option value="1">< ?=$v["product_size"] ?></option>
                                                    <option value="2">< ?=$v["product_size"] ?></option>
                                                </select>
                                            </div>
                                        </td>  -->
                                        <!-- 單價 -->
                                        <td name="priceYu" class="price-yu m-0 ">
                                            <h6 class="onePriceinputYu price" data-val="<?= $v['product_price'] ?>">
                                                <?= $v["product_price"] ?>
                                            </h6>
                                        </td>
                                        <!-- 數量 -->
                                        <td class="PqtyYU">
                                            <form method='POST' action='#'>
                                                <input name="btnleft" type='button' value='-' class='qtyminus' field='quantity'/>
                                                <span type='text' name='txt' class=' PqtyYu px-1 qty-yu numberTotalYu'>
                                                    <?= $v['qty'] ?>
                                                </span>
                                                <input name="btnright" type='button' value='+' class='qtyplus' field='quantity'/>
                                            </form>
                                        </td>
                                        <!-- 小計 -->
                                        <td name="priceYu" class="sub-total total_price_yu p-2">
                                            <h6 id="totalprice_yu" class="littlePriceYu mx-auto sub-total" name="priceYu"><?= $v['product_price'] * $v['qty'] ?></h6>
                                        </td>
                                        <!-- 刪除 -->
                                        <th scope="col" class="form-delete-yu">
                                            <a data-name="<?= $v["product_name"] ?>" onclick="delete_p(event)" data-sid="<?= $v['sid']?>" data-onclick="event.currentTarget.closest('tr').remove()">
                                                <i id="deleteIYu" class="fa-solid fa-trash-can"></i>
                                            </a>
                                            <!-- 光箱 -->
                                            <div class="modal fade" id="DEL_P" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content position-relative">
                                                        <div class="modal-header">
                                                            <div class="errorSign">
                                                                <img src="./imgs/Errorsign.png" alt="">
                                                            </div>
                                                            <h5 class="modal-title" id="exampleModalLabel"></h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                        </div>
                                                        
                                                        <div class="modal-footer">
                                                            <div class="errorMeow position-absolute">
                                                                <img src="./imgs/errorMeow.png" alt="">
                                                            </div>
                                                            <button type="button" class="btn ml-auto del-no" data-dismiss="modal">再想想</button>
                                                            <button type="button" class="btn-del btn ml-3 del-yes del-ba" data-dismiss="modal">
                                                                <a href="javascript:">
                                                                忍痛刪除嗚嗚
                                                                </a>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 
                                        </th>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- <h6>總金額</h6>
                                <h6 class="total_price" id="total_price_ba">
                                    <span >
                                        < ?=$r['travel_price'] ?>
                                    </span>
                                </h6> -->
                <!-- 修改總金額 -->
                <!--  <span>總計: </span><span id="total-price" ></span> 元 -->
                <div class=" alert alert-succes totalprice-uniqui-yu " role="alert">
                    <span class=" d-flex price-uniqui-yu">
                        <h6 id="AllTotal_P_Yu">
                            <!-- <span>總計: </span> -->
                            <span id="total-price"></span> 元
                        </h6>
                    </span>
                </div>
                <div class=" d-md-flex justify-content-md-end">
                    <!-- 如果使用者還未登入 -->
                    <?php if (empty($_SESSION["user"])) : ?>
                        <!-- 跳出提示框提醒用戶先登入會員 -->
                        <div class="alert alert-danger" role="alert">
                            請先登入會員，再結帳
                        </div>
                        <!-- 如果以登入會員點選結帳 跳轉至結帳頁 -->
                        <!-- a href="#buy1.php" -->
                    <?php else : ?>
                        <a href="./shopping-cart-productdetails.php" class="btn unique-nextbutton-yu">
                            <button class=" unique-btn-yu  mb-md-5" type="button" data-sid="<?= $v["sid"] ?>">
                                <p class="m-0 text-center">
                                    下一步
                                </p>
                            </button>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>

<!-- 行程 --------------------------------------------------------------------->
    <!-- 已給 #myTabContent-T-yu{max-width: 1450px;} -->
    <div id="myTabContent-T-yu" class="px-1 tab-content container">
        <!-- 旅遊行程 -->
        <?php if (empty($_SESSION['tcart'])) : ?>
            <div class="alert alert-danger" role="alert">
                購物車內沒有旅遊行程
            </div>
        <?php else : ?>
            <div id="travel-yu">
                <div class="tab-content justify-content-around">
                    <div id="travel-form-yu">
                        <table class="table">
                            <thead class="thead text-center">
                                <tr>
                                    <!-- <th scope="" class="m-auto checkbox-yu d-none">
                                        <input id="check2AllYu" class="mx-1 " type="checkbox" aria-label="Checkbox for following text input">
                                        <label class="mb-0" for="">
                                            <h6 class="mb-0 ">
                                                全選
                                            </h6>
                                        </label>
                                    </th> -->
                                    <th scope="col" class="">
                                        <h6 class="mb-0 thWidth">行程照片</h6>
                                    </th>
                                    <th scope="col" class="">
                                        <h6 class="mb-0 thWidth">行程名稱</h6>
                                    </th>
                                    <th scope="col" class="">
                                        <h6 class="mb-0">單價</h6>
                                    </th>
                                    <th scope="col" class="">
                                        <h6 class="mb-0 thWidth">數量</h6>
                                    </th>
                                    <th scope="col" class=" Tsub-total">
                                        <h6 class="mb-0 thWidth">小計</h6>
                                    </th>
                                    <th scope="col" class="">
                                        <h6 class="mb-0 thWidthD">刪除</h6>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class=" tbody">
                                <?php
                                $total = 0;
                                foreach ($_SESSION["tcart"] as $i => $j) : 
                                $total += $j['travel_price'] * $j['qty']; ?>
                                    <tr data-sid="<?= $j['sid'] ?>" class="tcart-item">
                                        <!-- <th scope="col ">
                                                <div class="row m-auto p-1 checkbox-yu ">
                                                    <input class=" mx-2 " type="checkbox" name="oneCheck2Yu" aria-label="Checkbox for following text input" checked>
                                                </div>
                                            </th> -->
                                        <!-- 行程照片 -->
                                        <td class="imgsCardYu">
                                            <img class="w-100" src="imgs/travel/cards/<?= $j['travelcard_img'] ?>" alt="...">
                                        </td>
                                        <!-- 行程名稱 -->
                                        <td>
                                            <h6 class="m-0">
                                                <?= $j['travel_name'] ?>
                                            </h6>
                                        </td>
                                        <!-- 單價 -->
                                        <td class="price-yu h6">
                                            <h6 class="onePriceinputYu Tprice" name="priceYu"
                                            data-val="<?= $j['travel_price'] ?>">
                                                <?= $j['travel_price'] ?>
                                            </h6>
                                        </td>
                                        <!-- 數量 -->
                                        <td class="TqtyYU">
                                            <form class="text-center" id='myform' method='POST' action='#'>
                                                <input name="btnleft" type='button' value='-' class='tqtyminus disabled' field='quantity' />
                                                <span type='text' name='txt' class=' qtyYu px-1 Tqty-yu tnumberTotalYu'>
                                                    <?= $j['qty'] ?>
                                                </span>
                                                <input name="btnright" type='button' value='+' class='tqtyplus' field='quantity' />
                                            </form>
                                        </td>
                                        <!-- 小計 -->
                                        <td name="tpriceYu" class="Tsub-total total_price_yu h6  text-center">
                                            <h6 class="tlittlePriceYu Tsub-total" name="tpriceYu">
                                                <?= $j['travel_price'] * $j['qty'] ?>
                                            </h6>
                                        </td>
                                        <!-- 刪除 -->
                                        <th scope="col" class="form-delete-yu">
                                            <a data-name="<?= $j["travel_name"] ?>" onclick="delete_t(event)" data-sid="<?= $j['sid']?>" data-onclick="event.currentTarget.closest('tr').remove()">
                                                <i id="deleteIYu" class="fa-solid fa-trash-can"></i>
                                            </a>
                                            <!-- 光箱 -->
                                            <div class="modal fade" id="DEL_T" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content position-relative">
                                                        <div class="modal-header">
                                                            <div class="errorSign">
                                                                <img src="./imgs/Errorsign.png" alt="">
                                                            </div>
                                                            <h5 class="modal-title" id="exampleModalLabel"></h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                        </div>
                                                        
                                                        <div class="modal-footer">
                                                            <div class="errorMeow position-absolute">
                                                                <img src="./imgs/errorMeow.png" alt="">
                                                            </div>
                                                            <button type="button" class="btn ml-auto del-no" data-dismiss="modal">再想想</button>
                                                            <button type="button" class="btn-del btn ml-3 del-yes del-ba" data-dismiss="modal">
                                                                <a href="javascript:">
                                                                忍痛刪除嗚嗚
                                                                </a>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 
                                        </th>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- 總價 -->
                <div class="h6 alert alert-succes totalprice-travel-yu " role="alert">
                    <span id="total-amount" class=" d-flex price-travel-yu">
                        <h6 id="AllTotal_T_Yu">
                            <span id="total-price2"></span> 元
                        </h6>
                    </span>
                </div>
                <div class=" d-md-flex justify-content-md-end">
                    <!-- 如果使用者還未登入 -->
                    <?php if (empty($_SESSION["user"])) : ?>
                        <!-- 跳出提示框提醒用戶先登入會員 -->
                        <div class="alert alert-danger" role="alert">
                            請先登入會員，再結帳
                        </div>
                        <!-- 如果以登入會員點選結帳 跳轉至結帳頁 -->
                        <!-- a href="#buy1.php" -->
                    <?php else : ?>
                        <a href="shopping-cart-travellist.php" class="btn unique-nextbutton-yu">
                            <button class=" unique-btn-yu  me-md-2" type="button" 
                            data-sid="<?= $j["sid"] ?>">
                                <p class="m-0 text-center">
                                    下一步
                                </p>
                            </button>
                        </a>
                    <?php endif; ?>
                </div>

            </div>
        <?php endif; ?>
    </div>

    <!-- 獨家商品訂單下一步之後的填寫資料 -->
</section>

<!-- ------------------手機 ------------------------>

<section class=" min-hYu  d-block d-md-none">
    <div class=" mdpagination-yu btn-group myTab nav nav-tabs">
        <a id="mduniqui-a-yu" href="#" data-toggle="tab" class="px-0 m-auto btn active" role="button">獨家商品</a>
        <a id="mdtravel-a-yu" href="#" data-toggle="tab" class=" px-0 m-auto btn" role="button">旅遊行程</a>
    </div>
    <!-- 手機購物車訂單的進度條progress-bar -->
    <div class=" p-0">
        <div class="mdprogress-bar-yu">
            <div class=" mdjustify-yu ">
                <span class="mdcircle-yu ">
                    <div class="circle-light m-auto">
                        <h5 class="page-light-number">1</h5>
                    </div>
                    <div class="page-yu ">
                        <p class=" m-0 page-yu-one pt-1">購物車訂單</p>
                    </div>
                    <div class=" pageline-yu "></div>
                </span>

                <span class="mdcircle-2-yu">
                    <div class="circle m-auto">
                        <h5>2</h5>
                    </div>
                    <div class="page-yu ">
                        <p class="m-0 page-yu-two pt-1 ">填寫資料</p>
                    </div>
                </span>

                <span class="mdcircle-3-yu">
                    <div class="circle m-auto">
                        <h5>3</h5>
                    </div>
                    <div class="page-yu ">
                        <p class="m-0 page-yu-three pt-1">完成訂單</p>
                    </div>
                </span>
            </div>
        </div>
    </div>
    <!--  手機購物車商品清單卡片 -->
    <div id="mdmyTabContent-yu" class="  tab-content container">
        <?php if (empty($_SESSION['pcart'])) : ?>
            <div class="alert alert-danger" role="alert">
                購物車內沒有獨家商品
            </div>
        <?php else : ?>
            <div id="mduniqui-yu" class=" container-fluid">
            <?php
                $total = 0;
                foreach ($_SESSION["pcart"] as $k => $v) : 
                $total += $v['product_price'] * $v['qty']; ?>
                <div class="card-yu">
                    <!-- flex-nowrap -->
                    <div class=" d-flex  mdP-img">
                        <!-- <input type="checkbox" class="largerCheckbox-yu"> -->
                        <img class=" w-100" src="imgs/product/cards/<?= $v['product_card_img'] ?>.jpg" alt="...">
                    </div>
                    <div class="cardlist-Yu pl-4">
                        <div class="mdcardlist-yu">
                            <p class="m-0">
                                <?= $v["product_name"] ?>
                            </p>
                        </div>
                        <!-- 單價 -->
                        <h5 class="mdprice-yu">
                            <?= $v["product_price"] ?>
                        </h5>
                        <!-- 數量 -->
                        <form class="d-flex" method='POST' action='#'>
                            <input type='button' value='-' class='qtyminus' field='quantity' />

                            <span type='text' name='txt' value='1' class=' px-1 qty-yu numberTotalYu'>
                                <?= $v['qty'] ?>
                            </span>

                            <input type='button' value='+' class='qtyplus' field='quantity' />
                        </form>
                    </div>
                </div>
            <?php endforeach; ?>  
                <div>
                        <!-- <h6 class=" MDtotalItemsYu text-center px-5">
                            1
                    </h6> -->
                    <h5 class=" MDtatalpriceYu text-center px-5 pt-4 ">
                        <?= $total ?>
                    </h5>
                </div>
                <!-- 未登入 -->
                <?php if (empty($_SESSION["user"])) : ?>
                    <!-- 跳出提示框提醒用戶先登入會員 -->
                    <div class="alert alert-danger" role="alert">
                        請先登入會員，再結帳
                    </div>
                    <!-- 如果以登入會員點選結帳 跳轉至結帳頁 -->
                <?php else : ?>
                    <div class=" d-flex justify-content-center mdH_yu">
                        <a href="./shopping-cart-productdetails.php" class="btn mdunique-nextbutton-yu">
                            <button class=" mdunique-btn-yu " type="button">
                                <p class="m-0 text-center">
                                    下一步
                                </p>
                            </button>
                        </a>
                    </div>
                <?php endif; ?>
                
            </div>
            <!-- <div>
                <h6 class=" MDtotalItemsYu text-center px-5">
                < ?= $v['qty'] ?>
                </h6>
                <h6 class=" MDtatalpriceYu text-center px-5">
                    < ?= $v['product_price'] * $v['qty'] ?>
                </h6>
            </div> -->
            <!-- 未登入 -->
            <!-- <div class=" d-flex justify-content-center">
                <a href="./shopping-cart-productdetails.php" class="btn mdunique-nextbutton-yu">
                    <button class=" mdunique-btn-yu " type="button">
                        <p class="m-0 text-center">
                            下一步
                        </p>
                    </button>
                </a>
            </div> -->
        </div>
        <?php endif; ?>
    </div>

    <!--  手機購物車行程清單卡片 -->
    <div id="mdmyTabCount-T-yu"  class="  tab-content container">
        <?php if (empty($_SESSION['tcart'])) : ?>
            <div class="alert alert-danger" role="alert">
                購物車內沒有旅遊行程
            </div>
        <?php else : ?>
            <div id="mdtravel-yu" class="container-fluid">
                <?php
                    $total = 0;
                    foreach ($_SESSION["tcart"] as $i => $j) : 
                    $total += $j['travel_price'] * $j['qty']; ?>
                    <div class="d-flex tcard">
                        <!-- flex-nowrap -->
                        <div class=" d-flex" style="justify-content: center">
                            <img class=" w-75" src="imgs/travel/cards/<?= $j['travelcard_img'] ?>" alt="...">
                        </div>
                        <div class="px-1">
                            <div class="mdcardlist-yu  Tmdcardlist-yu">
                                <p class="m-0 " >
                                    <?= $j['travel_name'] ?>
                                </p>
                            </div>
                            <!-- 單價 -->
                            <h5 class="mdprice-yu onePriceinputYu" name="priceYu">
                                <?= $j['travel_price'] ?>
                            </h5>
                            <!-- 數量 -->
                            <form class="d-flex" method='POST' action='#'>
                            <input name="btnleft" type='button' value='-' class='qtyminus disabled' field='quantity' />

                            <span type='text' name='txt' value='1' class=' TqtyYu px-1 qty-yu numberTotalYu'>
                            <?= $j['qty'] ?>
                            </span>

                            <input name="btnright" type='button' value='+' class='qtyplus' field='quantity'  />
                            </form>
                        </div>
                    </div>
                <?php endforeach; ?>
                <div class="">
                    <!-- <h6 class=" MDtotalItemsYu text-center px-5">
                        1
                    </h6> -->
                    <h5 class=" MDtatalpriceYu text-center px-5">
                        <?= $j["travel_price"] ?>
                    </h5>
                </div>
                <!-- 未登入 -->
                <!-- 如果使用者還未登入 -->
                <?php if (empty($_SESSION["user"])) : ?>
                    <!-- 跳出提示框提醒用戶先登入會員 -->
                    <div class="alert alert-danger" role="alert">
                        請先登入會員，再結帳
                    </div>
                    <!-- 如果以登入會員點選結帳 跳轉至結帳頁 -->
                <?php else : ?>
                    <div class=" d-flex justify-content-center mdH_yu">
                        <a href="./shopping-cart-travellist.php" class="btn mdunique-nextbutton-yu">
                            <button class=" mdunique-btn-yu " type="button">
                                <p class="m-0 text-center">
                                    下一步
                                </p>
                            </button>
                        </a>
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>

</section>





<?php include __DIR__ . '/parts/scripts.php'; ?>

<script src="./shopping-cart.js"></script>

<?php include __DIR__ . '/parts/html-foot.php'; ?>
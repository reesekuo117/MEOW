<?php
require __DIR__. '/parts/meow_db.php';  // /開頭
$pageName =''; //頁面名稱
?>

<?php include __DIR__. '/parts/html-head.php'; ?>
<link rel="stylesheet" href="./shopping-cart-index.css">

<?php include __DIR__. '/parts/navbar.php'; ?>

    <!-- ------------------桌機----------------------- -->
    <section  class="d-none d-md-block" >
        <!-- 購物車訂單的進度條progress-bar -->
        <div class="container-fluid p-0">
            <div class="line-box-yu"></div>
            <div class="progress-bar-yu" >
                <div class=" d-flex justify-content-around ">

                    <span class="row circle-1-yu ">
                        <div class="circle-light">
                            <h5 class="page-light-number">1</h5>
                        </div>
                        <div class="page-yu ">
                            <h5 class=" m-0 page-yu-one" >購物車訂單</h5>
                        </div>
                        <div class=" pageline-yu "></div>
                    </span>

                    <!-- <span class="pageline"></span> -->

                    
                    <span class="row circle-2-yu">
                        <div class="circle">
                            <h5>2</h5>
                        </div>
                        <div class="page-yu ">
                            <h5 class="m-0 page-yu-two " >填寫資料</h5>
                        </div>
                    </span>
                    
                    <span class="row circle-3-yu">
                        <div class="circle">
                            <h5>3</h5>
                        </div>
                        <div class="page-yu ">
                            <h5 class="m-0 page-yu-three" >完成訂單</h5>
                        </div>
                    </span>
                </div>
            </div>

            <!-- 獨家商品 旅遊行程分頁標籤 -->
            <!-- href="#uniqui-yu" data-toggle="tab" -->
            <!-- href="#travel-yu" data-toggle="tab" role="button -->
            <div  class=" pagination-yu btn-group myTab nav nav-tabs" >
                <a href="#uniqui-yu" data-toggle="tab" class="px-0 m-auto btn active"  role="button">獨家商品</a>
                <a href="#travel-yu" data-toggle="tab" class=" px-0 m-auto btn"  role="button">旅遊行程</a>
            </div>
        </div>

        <!--  購物車商品清單 -->
        <!-- 已給 #myTabContent-yu{max-width: 1450px;} -->
        <div id="myTabContent-yu" class=" px-1 tab-content container">
            <!-- 獨家商品 -->
            <div class="tab-pane in active " id="uniqui-yu" >
                <div class=" px-0 col-auto justify-content-around text-center">
                    <div id="form-yu">
                        <table class="table ">
                            <thead class=" thead" >
                                <tr class=" checkall-yu" >
                                    <th scope="col" class="m-auto checkbox-yu ">
                                            <input class="mx-1" type="checkbox" id="select-all-1-yu"aria-label="Checkbox for following text input">
                                            <label class="mb-0  ">
                                                <h6 class="mb-0 ">全選</h6>
                                            </label>
                                        
                                    </th>
                                    <th scope="col" src="imgs/small/< ?= $v['product_id'] ?>.jpg" alt="< ?= $v['productname'] ?>">
                                        <h6 class="mb-0 ">商品照片</h6>
                                    </th>
                                    <th scope="col">
                                        <h6 class="mb-0 ">商品名稱</h6>
                                    </th>
                                    <th scope="col">
                                        <h6 class="mb-0 ">規格</h6>
                                    </th>
                                    <th scope="col">
                                        <h6 class="mb-0 ">單價</h6>
                                    </th>
                                    <th scope="col">
                                        <h6 class="mb-0 ">數量</h6>
                                    </th>
                                    <th scope="col" class="sub-total">
                                        <h6 class="mb-0 ">小計</h6>
                                    </th>
                                    <th scope="col" class="sub-total">
                                        <h6 class="mb-0 ">刪除</h6>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class=" tbody">
                                <tr class="">
                                    <th scope="col ">
                                        <div class="row m-auto p-1 checkbox-yu">
                                            <input class=" mx-2" type="checkbox" name="vehicle-1-yu" aria-label="Checkbox for following text input">
                                        </div>
                                    </th>
                                    <!-- 商品照片 -->
                                    <td>
                                        <img src="imgs/購物車-商品(測試用).png" alt="">
                                    </td>
                                    <!-- 商品名稱 -->
                                    <td>
                                        <h6 class="m-0">
                                            台北霞海城隍廟獨家聯名
                                            <br>
                                            -七夕月老供品組-甜作之盒
                                        </h6>
                                    </td>
                                    <!-- 商品規格 -->
                                    <td>
                                        <div class="">
                                            <!-- <td>< ?= $v["uniquiname"] ?></td>
                                            <td class="price" data-val="<?= $v["price"] ?>"></td> -->
                                            <select class="form-select-yu" id="autosizing-yu"  >
                                                    <option value="0">甜作之盒單入組</option>
                                                    <option value="1">甜作之盒&棉布御守單入組</option>
                                                    <option value="2">棉布御守</option>
                                            </select>
                                        </div>
                                    </td>
                                    <!-- 單價 -->
                                    <td class="price-yu" >
                                            <p>
                                                707
                                            </p>
                                    </td>
                                    <!-- 數量 -->
                                    <td>
                                        <form id='myform' method='POST' action='#'>
                                            <label for=""> </label>
                                            <input type='button' value='-' class='qtyminus' field='quantity' />
                                            <input type='text' name='quantity' value='0' class='qty-yu' />
                                            <input type='button' value='+' class='qtyplus' field='quantity' />
                                        </form>
                                    </td>
                                    <!-- 小計 -->
                                    <td class="prive-yu">
                                        707
                                    </td>
                                    <!-- 刪除 -->
                                    <th scope="col" class="form-delete-yu">
                                        <i class="fa-solid fa-trash-can"></i>
                                    </th>
                                </tr>
                                <tr>
                                    <th scope=" col">
                                        <div class="row m-auto p-1 checkbox-yu">
                                            <input class=" mx-2" type="checkbox" name="vehicle-1-yu" aria-label="Checkbox for following text input">
                                        </div>
                                    </th>
                                    <!-- 商品照片 -->
                                    <td>
                                        <img src="imgs/購物車-商品(測試用).png" alt="">
                                    </td>
                                    <!-- 商品名稱 -->
                                    <td>
                                        <h6 class="m-0">
                                            台北霞海城隍廟獨家聯名
                                            <br>
                                            -七夕月老供品組-甜作之盒
                                        </h6>
                                    </td>
                                    <!-- 商品規格 -->
                                    <td>
                                        <!-- <div class="btn-group">
                                            <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Small button
                                            </button>
                                            <ul class="dropdown-menu">
                                                ...
                                            </ul>
                                        </div> -->
                                        <div class="">
                                            <!-- <label class="visually-hidden" for="autoSizingSelect">Preference</label> -->
                                            <select class="form-select-yu" id="autosizing-yu"  >
                                                <option value="0">甜作之盒單入組</option>
                                                <option value="1">甜作之盒&棉布御守單入組</option>
                                                <option value="2">棉布御守</option>
                                        </select>
                                        </div>
                                    </td>
                                    <!-- 單價 -->
                                    <td class="price-yu">
                                        707
                                    </td>
                                    <!-- 數量 -->
                                    <td>
                                        <form id='myform' method='POST' action='#'>
                                            <label for=""> </label>
                                            <input type='button' value='-' class='qtyminus' field='quantity' />
                                            <input type='text' name='quantity' value='0' class='qty-yu' />
                                            <input type='button' value='+' class='qtyplus' field='quantity' />
                                        </form>
                                    </td>
                                    <!-- 小計 -->
                                    <td  class="price-yu">
                                        707
                                    </td>
                                    <!-- 刪除 -->
                                    <th scope="col" class="form-delete-yu">
                                        <i class="fa-solid fa-trash-can"></i>
                                    </th>
                                </tr>
                                <tr>
                                    <th scope="col ">
                                        <div class="row m-auto p-1 checkbox-yu">
                                            <input class=" mx-2" type="checkbox" name="vehicle-1-yu" aria-label="Checkbox for following text input">
                                        </div>
                                    </th>
                                    <!-- 商品照片 -->
                                    <td>
                                        <img src="imgs/購物車-商品(測試用).png" alt="">
                                    </td>
                                    <!-- 商品名稱 -->
                                    <td>
                                        <h6 class="m-0">
                                            台北霞海城隍廟獨家聯名
                                            <br>
                                            -七夕月老供品組-甜作之盒
                                        </h6>
                                    </td>
                                    <!-- 商品規格 -->
                                    <td>
                                        <!-- <div class="btn-group">
                                            <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Small button
                                            </button>
                                            <ul class="dropdown-menu">
                                                ...
                                            </ul>
                                        </div> -->
                                        <div class="">
                                            <!-- <label class="visually-hidden" for="autoSizingSelect">Preference</label> -->
                                            <select class="form-select-yu" id="autosizing-yu"  >
                                                <option value="0">甜作之盒單入組</option>
                                                <option value="1">甜作之盒&棉布御守單入組</option>
                                                <option value="2">棉布御守</option>
                                        </select>
                                        </div>
                                    </td>
                                    <!-- 單價 -->
                                    <td  class="price-yu">
                                        707
                                    </td>
                                    <!-- 數量 -->
                                    <td>
                                        <form id='myform' method='POST' action='#'>
                                            <label for=""> </label>
                                            <input type='button' value='-' class='qtyminus' field='quantity' />
                                            <input type='text' name='quantity' value='0' class='qty-yu' />
                                            <input type='button' value='+' class='qtyplus' field='quantity' />
                                        </form>
                                    </td>
                                    <!-- 小計 -->
                                    <td class="price-yu">
                                        707
                                    </td>
                                    <!-- 刪除 -->
                                    <th scope="col" class="form-delete-yu">
                                        <i class="fa-solid fa-trash-can"></i>
                                    </th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="h6 alert alert-succes totalprice-uniqui-yu "  role="alert">
                        <span >訂單金額:  <span  class="price-yu"></span> 1000</span>
                        <span>運費金額:  <span  class="price-yu"></span>60</span>
                        <span id="total-price-yu" class="price-uniqui-yu">總金額: </span>
                        <span id="total-price" ></span>
                        元
                </div>
                <!-- <div> -->
                    <!-- 如果使用者還未登入 -->
                    <!-- < ?php if(empty($_SESSION["user"])) : ? >   -->
                        <!-- 跳出提示框提醒用戶先登入會員 -->
                        <!-- <div class="alert alert-danger" role="alert">
                            請先登入會員，再結帳
                        </div> -->
                    <!-- 如果以登入會員點選結帳 跳轉至結帳頁 -->
                <!-- </div> -->
                <div class=" d-md-flex justify-content-md-end">
                    <!-- a href="#buy1.php" -->
                    <a href="shopping-cart-productdetails-index.html" class="btn unique-nextbutton-yu">
                        <button class=" unique-btn-yu  me-md-2" type="button">
                            <p class="m-0 text-center">
                                下一步
                            </p>
                        </button>
                    </a>
                </div>
            </div>
            <!-- 旅遊行程 -->
            <div class="tab-pane fade" id="travel-yu">
                <div class=" col-auto justify-content-around text-center">
                    <div id="travel-form-yu">
                        <table class="table">
                            <thead class="thead" >
                                <tr>
                                    <th scope="col" class="m-auto checkbox-yu">
                                        <input id="select-all-2-yu" class="mx-1 " type="checkbox" aria-label="Checkbox for following text input">
                                            <label class="mb-0" for="">
                                                <h6 class="mb-0 ">
                                                    全選
                                                </h6>
                                            </label>
                                    </th>
                                    <th scope="col" src="imgs/small/<?= $v['product_id'] ?>.jpg" alt="<?= $v['productname'] ?>">
                                        <h6 class="mb-0 ">行程照片</h6>
                                    </th>
                                    <th scope="col">
                                        <h6 class="mb-0 ">行程名稱</h6>
                                    </th>
                                    <th scope="col">
                                        <h6 class="mb-0 ">單價</h6>
                                    </th>
                                    <th scope="col">
                                        <h6 class="mb-0 ">數量</h6>
                                    </th>
                                    <th scope="col" class="sub-total">
                                        <h6 class="mb-0 ">小計</h6>
                                    </th>
                                    <th scope="col" class="sub-total">
                                        <h6 class="mb-0 ">刪除</h6>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class=" tbody">
                                <tr class="">
                                    <th scope="col ">
                                        <div class="row m-auto p-1 checkbox-yu ">
                                            <input class=" mx-2 " type="checkbox" name="vehicle-2-yu" aria-label="Checkbox for following text input">
                                        </div>
                                    </th>
                                    <!-- 行程照片 -->
                                    <td>
                                        <img src="imgs/購物車-行程(測試用).png" alt="">
                                    </td>
                                    <!-- 行程名稱 -->
                                    <td>
                                        <h6 class="m-0">
                                            大稻埕霞海城廟深度漫步文化之旅
                                        </h6>
                                    </td>
                                    <!-- 單價 -->
                                    <td class="price-yu">
                                        1500
                                    </td>
                                    <!-- 數量 -->
                                    <td>
                                        <form id='myform' method='POST' action='#'>
                                            <label for=""> </label>
                                            <input type='button' value='-' class='qtyminus' field='quantity' />
                                            <input type='text' name='quantity' value='0' class='qty-yu' />
                                            <input type='button' value='+' class='qtyplus' field='quantity' />
                                        </form>
                                    </td>
                                    <!-- 小計 -->
                                    <td class="price-yu">
                                        1500
                                    </td>
                                    <!-- 刪除 -->
                                    <th scope="col" class="form-delete-yu">
                                        <i class="fa-solid fa-trash-can"></i>
                                    </th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="h6 alert alert-succes totalprice-uniqui-yu "  role="alert">
                    <span >訂單金額:  NT$1500</span>
                    <span id="total-price-yu" class="price-uniqui-yu">總金額: </span>
                    <span id="total-price" ></span>
                    元
            </div>
            
            <div class=" d-md-flex justify-content-md-end">
                <a href="shopping-cart-travellist-index.html" class="btn unique-nextbutton-yu">
                    <button class=" unique-btn-yu  me-md-2" type="button">
                        <p class="m-0 text-center">
                            下一步
                        </p>
                    </button>
                </a>
            </div>
            </div>
        </div>
        <!-- 獨家商品訂單下一步之後的填寫資料 -->
    </section>

    <!-- ------------------手機 ------------------------>
    <section class=" d-block d-md-none">
        <!-- 返回icon -->
        <div class="mdicon-back-yu">
            <img src="/imgs/icon/返回32x32.png" alt="">
        </div>
        <!-- 手機獨家商品 旅遊行程分頁標籤 -->
        <div  class=" mdpagination-yu btn-group myTab nav nav-tabs" >
            <a href="#mduniqui-yu" data-toggle="tab" class="px-0 m-auto btn active"  role="button">獨家商品</a>
            <a href="#mdtravel-yu" data-toggle="tab" class=" px-0 m-auto btn"  role="button">旅遊行程</a>
        </div>
        <!-- 手機購物車訂單的進度條progress-bar -->
        <div class=" p-0">
            <div class="mdprogress-bar-yu" >
                <div class=" mdjustify-yu ">
                    <span class="mdcircle-yu ">
                        <div class="circle-light m-auto">
                            <h5 class="page-light-number">1</h5>
                        </div>
                        <div class="page-yu ">
                            <p class=" m-0 page-yu-one" >購物車訂單</p>
                        </div>
                        <div class=" pageline-yu "></div>
                    </span>

                    <span class="mdcircle-2-yu">
                        <div class="circle m-auto">
                            <h5>2</h5>
                        </div>
                        <div class="page-yu ">
                            <p class="m-0 page-yu-two " >填寫資料</p>
                        </div>
                    </span>
                    
                    <span class="mdcircle-3-yu">
                        <div class="circle m-auto">
                            <h5>3</h5>
                        </div>
                        <div class="page-yu ">
                            <p class="m-0 page-yu-three" >完成訂單</p>
                        </div>
                    </span>
                </div>
            </div>
            <div class="cardcheckall-yu mx-2 row d-flex align-items-center">
                <input type="checkbox" class="">
                <h6 class="pl m-0">全選</h6>
            </div>
        </div>
        <div id="mdmyTabContent-yu" class=" px-1 tab-content container">
            <!--  手機購物車商品清單卡片 -->
            <div id="mduniqui-yu" class=" container-fluid tab-pane in active">
                <div class="card-yu row">
                    <!-- flex-nowrap -->
                    <div class=" d-flex px-1">
                        <input type="checkbox" class="largerCheckbox-yu">
                        <img class="" src="imgs/購物車手機版-商品(測試用 大).png" alt="">
                    </div>
                    <div class="px-1">
                        <div class="mdcardlist-yu">
                            <p class="m-0">台北霞海城隍廟獨家聯名-七夕月老供品組</p>
                        </div>
                        <select class="mdform-select-yu" id="autosizing-yu"  >
                            <option value="0">甜作之盒單入組</option>
                            <option value="1">甜作之盒&棉布御守單入組</option>
                            <option value="2">棉布御守</option>
                        </select>
                        <!-- 單價 -->
                        <h5 class="price-yu">707</h5>
                        <!-- 數量 -->
                        <form class="d-flex" id='myform' method='POST' action='#'>
                            <label for=""> </label>
                            <input type='button' value='-' class='qtyminus' field='quantity'/>
                            <input type='text' name='quantity' value='0' class='qty-yu' />
                            <input type='button' value='+' class='qtyplus' field='quantity' />
                        </form>
                    </div>
                </div>
                <div class="card-yu row">
                    <!-- flex-nowrap -->
                    <div class=" d-flex px-1">
                        <input type="checkbox" class="largerCheckbox-yu">
                        <img class="" src="imgs/購物車手機版-商品(測試用 大).png" alt="">
                    </div>
                    <div class="px-1">
                        <div class="mdcardlist-yu">
                            <p class="m-0">台北霞海城隍廟獨家聯名-七夕月老供品組</p>
                        </div>
                        <select class="mdform-select-yu" id="autosizing-yu"  >
                            <option value="0">甜作之盒單入組</option>
                            <option value="1">甜作之盒&棉布御守單入組</option>
                            <option value="2">棉布御守</option>
                        </select>
                        <!-- 單價 -->
                        <h5 class="price-yu">707</h5>
                        <!-- 數量 -->
                        <form class="d-flex" id='myform' method='POST' action='#'>
                            <label for=""> </label>
                            <input type='button' value='-' class='qtyminus' field='quantity'/>
                            <input type='text' name='quantity' value='0' class='qty-yu' />
                            <input type='button' value='+' class='qtyplus' field='quantity' />
                        </form>
                    </div>
                </div>
                <div>
                    <h6 class="text-center px-5">2 件商品合計 </h6>
                    <h6 class="text-center px-5">總金額: <span class="price-yu">1414</span> </h6>
                </div>
                <!-- 未登入 -->
                <div class=" d-flex justify-content-center">
                    <a href="shopping-cart-productdetails-index.html" class="btn mdunique-nextbutton-yu">
                        <button class=" mdunique-btn-yu " type="button">
                            <p class="m-0 text-center">
                                下一步
                            </p>
                        </button>
                    </a>
                </div>
            </div>
            <!--  手機購物車行程清單卡片 -->
            <div id="mdtravel-yu" class="  container-fluid tab-pane fade ">
                <div class="card-yu row">
                    <!-- flex-nowrap -->
                    <div class=" d-flex px-1">
                        <input type="checkbox" class="largerCheckbox-yu">
                        <img class="" src="imgs/購物車手機版-行程(測試用 大).png" alt="">
                    </div>
                    <div class="px-1">
                        <div class="mdcardlist-yu">
                            <p class="m-0">
                                大稻埕霞海城廟深度漫步文化之旅
                            </p>
                        </div>
                        <!-- 數量 -->
                        <p>X1</p>
                        <!-- 單價 -->
                        <h5>$707</h5>
                    </div>
                </div>
                <div>
                    <h6 class="text-center px-5">1件商品合計 </h6>
                    <h6 class="text-center px-5">總金額: <span>NT$1500</span> </h6>
                </div>
                <!-- 未登入 -->
                <div class=" d-flex justify-content-center">
                    <a href="shopping-cart-travellist-index.html" class="btn mdunique-nextbutton-yu">
                        <button class=" mdunique-btn-yu " type="button">
                            <p class="m-0 text-center">
                                下一步
                            </p>
                        </button>
                    </a>
                </div>
            </div>
        </div>
        
    </section>



<?php include __DIR__. '/parts/scripts.php'; ?>

<script>
    //數量增加按鈕
    $(function() {
    // This button will increment the value
    $('.qtyplus').click(function(e) {
    // Stop acting like a button
    e.preventDefault();
    // Get the field name
    fieldName = $(this).attr('field');
    // Get its current value
    var currentVal = parseInt($('input[name=' + fieldName + ']').val());
    // If is not undefined
    if (!isNaN(currentVal)) {
      // Increment
        $('input[name=' + fieldName + ']').val(currentVal + 1);
    } else {
      // Otherwise put a 0 there
        $('input[name=' + fieldName + ']').val(0);
    }
    });

    // This button will decrement the value till 0
        $(".qtyminus").click(function(e) {
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        fieldName = $(this).attr('field');
        // Get its current value
        var currentVal = parseInt($('input[name=' + fieldName + ']').val());
        // If it isn't undefined or its greater than 0
        if (!isNaN(currentVal) && currentVal > 0) {
        // Decrement one
            $('input[name=' + fieldName + ']').val(currentVal - 1);
        } else {
        // Otherwise put a 0 there
            $('input[name=' + fieldName + ']').val(0);
        }
        });
    });
        //獨家商品清單全選 
        document.getElementById('select-all-1-yu').onclick = function() {
        var checkboxes = document.getElementsByName('vehicle-1-yu');
        for (var checkbox of checkboxes) {
        checkbox.checked = this.checked;
        }
    }

        //旅遊行程清單全選 
        document.getElementById('select-all-2-yu').onclick = function() {
        var checkboxes = document.getElementsByName('vehicle-2-yu');
        for (var checkbox of checkboxes) {
        checkbox.checked = this.checked;
        }
    }


    </script>

<?php include __DIR__. '/parts/html-foot.php'; ?>
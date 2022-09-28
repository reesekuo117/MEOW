<?php
require __DIR__ . '/parts/meow_db.php';  // /開頭
$pageName = '購物車行程'; //頁面名稱



$sql = "SELECT * FROM travel WHERE 1";
$temples = $pdo->query($sql)->fetchAll(); 

// 取得會員
$member_id = $_SESSION['user']['id'];
$sqlmember = "SELECT * FROM `member` WHERE id=$member_id";
$sm = $pdo->query($sqlmember)->fetch();

?>

<?php include __DIR__ . '/parts/html-head.php'; ?>
<link rel="stylesheet" href="./shopping-cart-travellist.css">
<?php
header("Refresh:180");
?>

<?php include __DIR__ . '/parts/navbar.php'; ?>

    <!-- ------------------桌機----------------------- -->
    <section class="d-none d-md-block">
        <div class=" d-none d-md-block container-fluid p-0">
            <div class="line-box-yu"></div>
            <div class="progress-bar-yu">
                <div class="d-flex justify-content-around">
                    <span class="row circle-1-yu">
                        <div class="circle">
                            <h5 class="page-light-number">
                                1
                            </h5>
                        </div>
                        <div class="page-yu">
                            <h5 class="m-0 page-yu-one">
                                購物車訂單
                            </h5>
                        </div>
                        <div class="pageline-yu"></div>
                    </span>

                    <span class="row circle-2-yu">
                        <div class="circle-light">
                            <h5 class="page-light-number">
                                2
                            </h5>
                        </div>
                        <div class="page-yu">
                            <h5 class="m-0 page-yu-two">
                                填寫資料
                            </h5>
                        </div>
                    </span>

                    <span class="row circle-3-yu">
                        <div class="circle">
                            <h5>3</h5>
                        </div>
                        <div class="page-yu">
                            <h5 class="m-0 page-yu-three">
                                完成訂單
                            </h5>
                        </div>
                    </span>
                </div>
            </div>
        </div>
    <!-- 訂單明細 -->

    <!-- 記得這邊的action要連到另一隻php -->
    <?php if(empty($_POST)):  ?> 
        <form  name="desktop_form" action="next.php" method="post">
            <div id="myTabContent-yu" class="container">
                <!-- 訂單明細 -->
                <div class="listinfo-yu">
                    <main class="section-0-yu">
                        <h3 class="listinfo-title-yu m-0">
                            訂單明細
                        </h3>
                        <h6 class="listinfo-number-yu">
                        訂單編號: <span>M20221234567</span>
                        </h6>
                        
                        <div class="panel-group-yu"id="accordion"role="tablist"aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h6 class="panel-title-yu">
                                        <a class="panel-title-a-yu" data-toggle="collapse" href="#listinfo-details-yu" role="button">
                                            訂單明細
                                            <svg width="24" height="24" viewBox="0 0 24 24"fill="none"xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4 9L11.3415 15.4238C11.7185 15.7537 12.2815 15.7537 12.6585 15.4238L20 9"stroke="#432A0F"stroke-opacity="0.6"stroke-width="2"stroke-linecap="round"/>
                                            </svg>
                                        </a>
                                    </h6>
                                </div>
                                <div id="listinfo-details-yu" class="collapse show panel-collapse collapse-yu">
                                    <div class="panel-body-yu">
                                        <div class="px-0 col-auto justify-content-around text-center">
                                            <table class="table">
                                                <thead class="thead">
                                                    <tr>
                                                        <th scope="col" src="" alt="">
                                                            <h6 class="mb-0">
                                                                行程照片
                                                            </h6>
                                                        </th>
                                                        <th scope="col">
                                                            <h6 class="mb-0">
                                                                行程名稱
                                                            </h6>
                                                        </th>
                                                        <th scope="col">
                                                            <h6 class="mb-0">
                                                                單價
                                                            </h6>
                                                        </th>
                                                        <th scope="col">
                                                            <h6 class="mb-0">
                                                                數量
                                                            </h6>
                                                        </th>
                                                        <th scope="col" class="sub-total">
                                                            <h6 class="mb-0">
                                                                小計
                                                            </h6>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody class="tbody">
                                                <?php
                                                    foreach ($_SESSION["tcart"] as $i => $j) : ?>
                                                    <tr class="">
                                                        <!-- 商品照片 -->
                                                        <td>
                                                        <img class="" src="imgs/travel/cards/<?= $j['travelcard_img'] ?>" alt="...">
                                                        </td>
                                                        <!-- 商品名稱 -->
                                                        <td>
                                                            <h6 class="m-0">
                                                            <?= $j['travel_name'] ?>
                                                            </h6>
                                                        </td>
                                                        <!-- 單價 -->
                                                        <td class="OnnPriceYu">
                                                        <?= $j['travel_price'] ?>
                                                        </td>
                                                        <!-- 數量 -->
                                                        <td>
                                                        <?= $j['qty'] ?>
                                                        </td>
                                                        <!-- 小計 -->
                                                        <td class="littlePriceYu">
                                                        <?= $j['travel_price'] * $j['qty'] ?>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                    <div class="h6 alert alert-succes listinfo-details-totalprice-yu m-0"role="alert">
                        <h6 id="total-price-yu" class="price-uniqui-yu">
                        <?= $j['travel_price'] ?>
                        </h6>
                        <h6 id="total-price"></h6>
                    </div>
                </div>
                <!-- 訂購人資料 -->
                <div class="section-1-yu position-relative">
                    <div class="section-1-title-yu">
                        <h3 class="listinfo-title-yu m-0">訂購人資料</h3>
                    </div>
                    <!-- 訂購人填寫資料 -->
                    <div class="AllinputValueYu" id="clickme" onclick="clickme()"></div>
                    <div id="form1-yu" name="bajohn"  class=" form1-yu order-list-yu" method="post" action="">
                        <div class="field order-name-yu p-3 ">
                            <label for="name" class="">
                                姓名
                                <span style="color: #963c38">*</span>
                            </label>
                            <br/>
                            <input class="ordername-yu requiredYu" type="text" placeholder="請輸入姓名 " id="name-yu" name="name" required  value="<?=htmlentities($sm['name']) ?>"/>
                            <i class="right fa-regular fa-circle-check"></i>
                            <i class="wrong fa-solid fa-triangle-exclamation">
                                <small>請輸入正確姓名</small>
                            </i>
                        </div>
                        <div class="field order-phone-yu p-3">
                            <label for="mobile" class="">
                                聯絡電話
                                <span style="color: #963c38">*</span>
                            </label>
                            <br/>
                            <input class="orderphone-yu  requiredYu" type="text" placeholder="請輸入聯絡電話" id="mobile-yu" name="phone"  required  value="<?=htmlentities($sm['mobile']) ?>"/>
                            <i class="right fa-regular fa-circle-check"></i>
                            <i class="wrong fa-solid fa-triangle-exclamation">
                                <small>請輸入正確的聯絡電話</small>
                            </i>
                        </div>
                        <div class=" field order-address-yu p-3">
                            <label for="address" class="">
                                地址
                                <span style="color: #963c38">*</span>
                            </label>
                            <br/>
                            <div class="d-flex align-items-center">
                                <div class="form-group m-0">
                                    <select class="orderaddress1-yu" name="address" id="city1-yu" required value="<?=htmlentities($sm['address_city_re']) ?>">
                                        <option class="" value="0">臺北市</option>
                                        <option value="1">新北市</option>
                                        <option value="2">基隆市</option>
                                        <option value="3">宜蘭縣</option>
                                        <option value="4">桃園市</option>
                                        <option value="5">新竹市</option>
                                        <option value="6">新竹縣</option>
                                        <option value="7">苗栗縣</option>
                                        <option value="8">彰化縣</option>
                                        <option value="9">臺中市</option>
                                        <option value="10">南投縣</option>
                                        <option value="11">雲林縣</option>
                                        <option value="12">嘉義市</option>
                                        <option value="13">嘉義縣</option>
                                        <option value="14">臺南市</option>
                                        <option value="15">高雄市</option>
                                        <option value="16">屏東縣</option>
                                        <option value="17">花蓮縣</option>
                                        <option value="18">臺東縣</option>
                                    </select>
                                </div>
                                <div class="form-group m-0">
                                    <select class="orderaddress2-yu"name="address"id="district1-yu" value="<?=htmlentities($sm['address_region_re']) ?>">
                                        <option class="" value="0">中正區</option>
                                        <option value="1">板橋區</option>
                                        <option value="2">仁愛區</option>
                                    </select>
                                </div>
                                <input class="orderaddress3-yu  requiredYu" name="address" placeholder=" 請輸入詳細地址" id="address-yu" name="address" value="<?=htmlentities($sm['address']) ?>"/>
                                <i class="right fa-regular fa-circle-check"></i>
                                <i class="wrong fa-solid fa-triangle-exclamation">
                                    <small>請輸入正確的地址</small>
                                </i>
                            </div>
                        </div>
                        <div class="field order-email-yu p-3">
                            <label for="email" class="">
                                Email<span style="color: #963c38">*</span>
                            </label>
                            <br />
                            <input type="email" class="email-yu  requiredYu"  id="email-yu" name="email"  value="<?=htmlentities($sm['email']) ?>"  />
                            <i class="right fa-regular fa-circle-check"></i>
                                <i class="wrong fa-solid fa-triangle-exclamation">
                                    <small>請輸入正確的Email</small>
                                </i>
                        </div>
                    </div>
                </div>
                <!-- 旅客代表人資料 -->
                <section class="section-2-yu ">
                    <div class="section-2-title-yu d-flex justify-content-between">
                        <h3 class="listinfo-title-yu m-0">
                            旅客代表人資料
                        </h3>
                        <label for="name" class=" m-0 mr-3">
                            <input type="checkbox"name="listinfo-title-radio-yu"id="btnAutoInput-yu"/>
                            同訂購人
                        </label>
                    </div>
                    <div class="receiver-list-yu">
                        <div class=" field2 receiver-name-yu p-3">
                            <label for="name" class="">
                                姓名
                                <span style="color: #963c38">*</span>
                            </label>
                            <br />
                            <input class="receivername-yu  requiredYu"type="text"placeholder=" 請輸入姓名"class=""id="username-yu"name="receivername" required/>
                            <i class="right fa-regular fa-circle-check"></i>
                            <i class="wrong fa-solid fa-triangle-exclamation">
                                <small>請輸入正確姓名</small>
                            </i>
                        </div>
                        <div class="field2 receiver-phone-yu p-3">
                            <label for="mobile" class="">
                                聯絡電話
                                <span style="color: #963c38">*</span>
                            </label>
                            <br />
                            <input class="receiverphone-yu  requiredYu"type="text"placeholder=" 請輸入聯絡電話"id="usermobile-yu" name="receiverphone" required/>
                            <i class="right fa-regular fa-circle-check"></i>
                            <i class="wrong fa-solid fa-triangle-exclamation">
                                <small>請輸入正確聯絡電話</small>
                            </i>
                        </div>
                        <div class="field2 receiver-idnumber-yu p-3">
                            <label for="idnumber" class="">
                                出生年月日
                                <span style="color: #963c38">*</span>
                            </label>
                            <br/>
                            <input class="userBirthdayYu  requiredYu"  type="birthday" id="userbirthday-yu" name="receiverbirthday" placeholder="年 / 月 / 日" />
                            <i class="right fa-regular fa-circle-check"></i>
                            <i class="wrong fa-solid fa-triangle-exclamation">
                                <small>請輸入出生年月日</small>
                            </i>
                        </div>
                        <div class="field2 receiver-idnumber-yu p-3">
                            <label for="idnumber" class="">
                                身份證字號
                                <span style="color: #963c38">*</span>
                            </label>
                            <br/>
                            <input type="text" class="userIDyu  requiredYu" id="userid-yu" name="receiveridnumber" />
                            <i class="right fa-regular fa-circle-check"></i>
                            <i class="wrong fa-solid fa-triangle-exclamation">
                                <small>請輸入身分證字號</small>
                            </i>
                        </div>
                        <div class="field2 receiver-email-yu p-3">
                            <label for="email">
                                Email
                                <span style="color: #963c38">*</span>
                            </label>
                            <br/>
                            <input class="receiveremail-yu  requiredYu" type="email " id="useremail-yu" name="receiveremail" />
                            <i class="right fa-regular fa-circle-check"></i>
                            <i class="wrong fa-solid fa-triangle-exclamation">
                                <small>請輸入正確的email</small>
                            </i>
                        </div>
                    </div>
                </section>
                <!-- 付款方式 -->
                <section id="section-3-yu" class="section-3-yu">
                    <div class="section-3-title-yu">
                        <h3 class="listinfo-title-yu m-0">付款方式</h3>
                    </div>
                    <div class="p-3">
                        <div class="pt-2">
                            <input type="radio" name="listinfo-title-radio-yu" id="creditcard-radio-yu" checked/>
                            <label for="name" class="m-0"> 
                                信用卡 
                            </label>
                            <div class=" visacard-yu d-flex justify-content-start my-4 mx-3">
                                <div class="creditcard-style-yu">
                                    <div class="creditcard-yu  position-relative">
                                        <div class="frontcreditcard-yu">
                                            <div class=" card-group-yu ">
                                                <!-- 信用卡正面 -->
                                                <div class="frontcreditcardsimg-yu d-flex justify-content-center filter1-yu">
                                                    <img src="imgs/shopping-cart/信用卡的前面png.png" alt="">
                                                </div>
                                                <div class=" creditcardnumber-yu d-flex" id="creditcardnumber-yu">

                                                    <input id="creditcardnumber1-yu" class=" text-center" type="text"name="test" placeholder="0000" maxlength="4">

                                                    <input id="creditcardnumber2-yu" class=" text-center"  type="text"name="test" placeholder="0000" maxlength="4">

                                                    <input id="creditcardnumber3-yu" class=" text-center"  type="text"name="test" placeholder="0000" maxlength="4">

                                                    <input id="creditcardnumber4-yu" class=" text-center"  type="text"name="test" placeholder="0000" maxlength="4">
                                                </div>
                                                <div class="creditcarddate-yu d-flex" id="creditcarddate-yu">
                                                    <input class="text-center"  type="text"name="test" placeholder="月" maxlength="2" id="creditcardmonth-yu" >
                                                    <h6>
                                                        /
                                                    </h6>
                                                    <input class="text-center"  type="text" name="test"placeholder="年" maxlength="2" id="creditcardyear-yu"  >
                                                </div>
                                                <!-- <div class="ring"></div> -->
                                            </div>
                                        </div>
                                        <div class="backcreadidcard-yu ">
                                            <div class="backcreditcardsimg-yu d-flex justify-content-center filter2-yu">
                                                <img src="imgs/shopping-cart/信用卡的背面png.png" alt="">
                                                
                                            </div>
                                            <div class="creditcardcvc-yu" id="creditcardcvc-yu">
                                                <input class="text-center"  type="text" placeholder="cvc" maxlength="3" id="creditcardid-yu">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- -------------信用卡輸入input----------- -->
                                <div class="creadidcardform-yu py-2 col-6">
                                    <div class="pt-1">
                                        <div class=" usercreditcardinput-yu">
                                            <label class="pt-1 m-0"  for="">
                                                信用卡卡號
                                            </label>
                                            <br>
                                            <div class=" usercdinputYu  d-flex justify-content-start align-items-start"> 
                                                <div class=" field3 mx-1 ">
                                                    <input class="usercdnumber3  usercdnumber4  requiredYu text-center m-0" type="" name="test"id="usercreditcardnumber1-yu" placeholder="0000 " maxlength="4" onkeyPress="autoTab()" onkeyUp="autoTab()">
                                                </div>
                                                <div class=" field3 mx-1">
                                                    <input class=" usercdnumber3 usercdnumber4  requiredYu text-center m-0" type="" name="test" placeholder="0000 " maxlength="4" id="usercreditcardnumber2-yu" >
                                                    <!-- onkeyup="value=value.replace(/[^\d]/g,'') " -->
                                                </div>
                                                <div class=" field3 mx-1">
                                                    <input class=" usercdnumber3 usercdnumber4  requiredYu text-center m-0" type="" name="test"placeholder="0000 " maxlength="4" id="usercreditcardnumber3-yu" >
                                                </div>
                                                <div class=" field3 mx-1  d-flex align-items-center">
                                                    <input class=" usercdnumber3 usercdnumber4  requiredYu text-center m-0" type="" name="test" placeholder="0000 " maxlength="4" id="usercreditcardnumber4-yu">
                                                    <i class="right fa-regular fa-circle-check"></i>
                                                    <i class="wrong fa-solid fa-triangle-exclamation">
                                                        <small>請輸入正確的信用卡卡號</small>
                                                    </i>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div class="usercreditcardinput-yu  mt-3">
                                            <label class=" m-0"  for="" > 
                                                有效 / 月年
                                            </label>
                                            <br>
                                            <div class=" d-flex justify-content-start align-items-start "> 
                                                <div class="field3 mx-1 ">
                                                    <input class=" usercdMonthYu  requiredYu text-center m-0" type="" name="test" placeholder="月 " maxlength="2" id="usercreditcardmonth-yu" onkeyup="value=value.replace(/[^\d]/g,'') ; if(value>12)value=12">
                                                </div>
                                                <div class="field3 mx-1">
                                                    <input class=" usercdYearYu  requiredYu text-center m-0" type="" name="test"placeholder="年" maxlength="2" id="usercreditcardyear-yu" onkeyup="value=value.replace(/[^\d]/g,'') ; if(value>29)value=29">
                                                    <i class="right fa-regular fa-circle-check"></i>
                                                    <i class="wrong fa-solid fa-triangle-exclamation">
                                                        <small>請輸入正確的信用卡卡號</small>
                                                    </i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" usercreditcardinput-yu  mt-3">
                                            <label class="m-0"  for="">
                                                背面末三碼
                                            </label>
                                            <br>
                                            <div class=" d-flex justify-content-start align-items-start "> 
                                                <div class=" field3  mx-1 ">
                                                    <input class=" cardCVC text-center  requiredYu m-0" type="" name="test" placeholder="000 " maxlength="3" id="usercreditcardid-yu" onkeyup="value=value.replace(/[^\d]/g,'') ">
                                                    <i class="right fa-regular fa-circle-check"></i>
                                                    <i class="wrong fa-solid fa-triangle-exclamation">
                                                        <small>請輸入正確的信用卡後三碼</small>
                                                    </i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-3">
                        <input type="radio" name="listinfo-title-radio-yu" id="" />
                        <label for="name" class="m-0"> ATM轉帳 </label>
                    </div>
                </section>
                <div class=" d-md-flex justify-content-md-end">
                    <!-- a href="#buy1.php" -->
                    <div href="" class="btn unique-nextbutton-yu p-0">
                        <a href="shopping-cart-creditcard-travel.php">
                            <button class=" Allsubmit unique-btn-yu  me-md-2 que-btn-yu  btn_disabled_ba" type="button"  name=ok value="送出">
                                    <p class="m-0 text-center">
                                        確認訂購
                                    </p>
                                </button>
                        </a>
                    </div>
                </div>
            </div>
        </form>
        <?php else: ?>
            <pre>
                <?php print_r($_post); ?>
            <pre>
    <?php endif; ?>    
    </section>

    <!-- ------------------手機 ------------------------>
    <section class=" d-block d-md-none">
        <!-- 購物車訂單的進度條progress-bar -->
        <div class=" p-0">
            <div class="mdprogress-bar-yu" >
                <div class=" mdjustify-yu ">
                    <span class="mdcircle-yu ">
                        <div class="circle m-auto">
                            <h5 >1</h5>
                        </div>
                        <div class="page-yu ">
                            <p class=" m-0 page-yu-one" >購物車訂單</p>
                        </div>
                        <div class=" pageline-yu "></div>
                    </span>

                    <span class="mdcircle-2-yu">
                        <div class="circle-light m-auto">
                            <h5 class="page-light-number">2</h5>
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
        </div>
        <!-- 訂單明細 -->
        <div id="myTabContent-yu" class="container">
            <!-- 訂單明細 -->
            <div class="mdlistinfo-yu">
                <main class="section-0-yu">
                    <h6 class="listinfo-title-yu m-0">
                        訂單明細
                    </h6>
                    <h6 class="listinfo-number-yu ">
                    訂單編號: <span>M20221234567</span>
                    </h6>
                    
                    <div class="panel-group-yu"id="accordion"role="tablist"aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h6 class="mdpanel-title-yu">
                                    <aclass="panel-title-a-yu" data-toggle="collapse" href="#listinfo-details-yu" role="button">
                                    訂單明細
                                        <svg width="24" height="24" viewBox="0 0 24 24"fill="none"xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4 9L11.3415 15.4238C11.7185 15.7537 12.2815 15.7537 12.6585 15.4238L20 9"stroke="#432A0F"stroke-opacity="0.6"stroke-width="2"stroke-linecap="round"/>
                                        </svg>
                                    </aclass=>
                                </h6>
                            </div>
                            <div id="listinfo-details-yu" class="collapse show panel-collapse collapse-yu">
                                <div class="panel-body-yu">
                                    <div class="">
                                        <div class="card-yu d-flex px-1 py-3">
                                            <!-- flex-nowrap -->
                                            <div class="  px-1">
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
                                                <p class="OnnPriceYu">
                                                    1500
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <!-- 結帳明細 -->
            <div class="mdsection-1-yu">
                <main class="">
                    <h6 class="listinfo-title-yu m-0">
                        結帳明細
                    </h6>
                    <div class=" d-flex justify-content-between align-items-center">
                        <h6 class="listinfo-number-yu"></h6>
                        <h6 class="listinfoYu">
                            1500
                        </h6>
                    </div>
                </main>
            </div>
            <!-- 訂購人資料 -->
            <section class="mdsection-2-yu">
                <h6 class="listinfo-title-yu m-0">
                    訂購人資料
                </h6>
                <!-- 訂購人填寫資料 -->
                <div class="mdorder-list-yu">
                    <div class="order-name-yu p-3">
                        <label for="name" class="">
                            姓名
                            <span style="color: #963c38">*</span>
                        </label>
                        <br/>
                        <input class="mdordername-yu"type="text"placeholder="請輸入姓名 "class=""id="name-yu" name="nameYU"required/>
                    </div>
                    <div class="mdorder-phone-yu p-3">
                        <label for="mobile" class="">
                            聯絡電話
                            <span style="color: #963c38">*</span>
                        </label>
                        <br/>
                        <input class="orderaddress3-yu"type="text"placeholder="請輸入聯絡電話 "class=""id="mobile-yu"name="mobile"required/>
                    </div>
                    <div class="mdorder-address-yu p-3">
                        <label for="address" class="">
                            地址
                            <span style="color: #963c38">*</span>
                        </label>
                        <br />
                        <div>
                            <div class="d-flex justify-content-center align-items-center">
                                <div class="form-group mdorderaddress1-yu">
                                    <select class=""name="city"id="city-yu"required>
                                        <option class="" value="0">臺北市</option>
                                        <option value="1">新北市</option>
                                        <option value="2">基隆市</option>
                                        <option value="3">宜蘭縣</option>
                                        <option value="4">桃園市</option>
                                        <option value="5">新竹市</option>
                                        <option value="6">新竹縣</option>
                                        <option value="7">苗栗縣</option>
                                        <option value="8">彰化縣</option>
                                        <option value="9">臺中市</option>
                                        <option value="10">南投縣</option>
                                        <option value="11">雲林縣</option>
                                        <option value="12">嘉義市</option>
                                        <option value="13">嘉義縣</option>
                                        <option value="14">臺南市</option>
                                        <option value="15">高雄市</option>
                                        <option value="16">屏東縣</option>
                                        <option value="17">花蓮縣</option>
                                        <option value="18">臺東縣</option>
                                    </select>
                                </div>
                                <div class="form-group mdorderaddress2-yu">
                                    <select class=""name="district"id="district">
                                        <option class="" value="0">中正區</option>
                                        <option value="1">板橋區</option>
                                        <option value="2">仁愛區</option>
                                    </select>
                                </div>
                            </div>
                            <input class="mdorderaddress3-yu mt-3" type="text"placeholder=" 請輸入詳細地址"class=""id="address-yu"name="address"/>
                        </div>
                    </div>
                    <div class="mdorder-email-yu p-3">
                        <label for="email" class=""
                            >Email<span style="color: #963c38">*</span>
                        </label>
                        <br />
                        <input class="" type="text" class="" id="email-yu" name="email" />
                    </div>
                </div>
            </section>
            <!-- 旅客代表人資料 -->
            <section class="mdsection-3-yu">
                    <div class="mdsection-2-title-yu d-flex justify-content-between">
                        <h6 class="listinfo-title-yu m-0">
                            旅客代表人資料
                        </h6>
                        <label for="name" class="m-0">
                            <input   type="checkbox"name="listinfo-title-radio-yu"id="btnAutoInput-yu"/>
                            同訂購人
                        </label>
                    </div>
                <!-- 訂購人填寫資料 -->
                <div class="mdorder-list-yu">
                    <div class="order-name-yu p-3">
                        <label for="name" class="">
                            姓名
                            <span style="color: #963c38">*</span>
                        </label>
                        <br/>
                        <input class="mdordername-yu"type="text"placeholder="請輸入姓名 "class=""id="name-yu" name="nameYU"required/>
                    </div>
                    <div class="mdorder-phone-yu p-3">
                        <label for="mobile" class="">
                            聯絡電話
                            <span style="color: #963c38">*</span>
                        </label>
                        <br/>
                        <input class="mdorderphone-yu"type="text"placeholder="請輸入聯絡電話 "class=""id="mobile-yu"name="mobile"required/>
                    </div>
                    <div class="mdorder-birthday-yu p-3">
                        <label  for="birthday" class="">
                            出生年月日
                            <span style="color: #963c38">*</span>
                        </label>
                        <br/>
                        <input class="receiver-idnumber-yu"type="birthday"placeholder="年/月/日 "class=""id="birthday-yu"name="birthday"required/>
                    </div>
                    <div class="mdorder-phone-yu p-3">
                        <label for="birthday" class="">
                            身分證字號
                            <span style="color: #963c38">*</span>
                        </label>
                        <br/>
                        <input class=""type="text"placeholder="年/月/日 "class=""id=""name="" required/>
                    </div>
                    <div class="mdorder-email-yu p-3">
                        <label for="email" class=""
                            >Email<span style="color: #963c38">*</span>
                        </label>
                        <br />
                        <input class="" type="text" class="" id="email-yu" name="email" />
                    </div>
                </div>
            </section>
            <!-- 付款方式 -->
            <section class="mdsection-4-yu">
                <div class="">
                    <h6 class="listinfo-title-yu m-0">付款方式</h6>
                </div>
                <div class="p-3">
                    <input type="checkbox" name="listinfo-title-checkbox-yu" id="" />
                    <label for="name" class="m-0"> 
                        信用卡付款 
                    </label>
                    <div class="mdditcard-numberinput-yu">
                        <label class="pt-2 m-0"  for="">
                            信用卡卡號
                        </label>
                        <br>
                        <div class=" mdcreditcard-number-yu d-flex justify-content-center align-items-center "> 
                            <div class=" mdcreditcard-number-backgroundcolor-yu ">
                                <input class="text-center m-0" type="" name="" id="" placeholder="0000 ">
                            </div>
                            <div class=" mdcreditcard-number-backgroundcolor-yu">
                                <input class="text-center m-0" type="" name="" id="" placeholder="0000 ">
                            </div>
                            <div class=" mdcreditcard-number-backgroundcolor-yu">
                                <input class="text-center m-0" type="" name="" id="" placeholder="0000 ">
                            </div>
                            <div class=" mdcreditcard-number-backgroundcolor-yu">
                                <input class="text-center m-0" type="" name="" id="" placeholder="0000 ">
                            </div>
                        </div>
                        <div class="mdcreditcard-numberbox "></div>
                    </div>
                    <div class="pt-5 mdditcard-numberinput-yu">
                        <label class=" m-0"  for="">
                            有效 / 年月
                        </label>
                        <br>
                        <div class=" mdcreditcard-number-yu d-flex justify-content-start align-items-start "> 
                            <div class=" mdcreditcard-number-backgroundcolor-yu ">
                                <input class="text-center m-0" type="" name="" id="" placeholder="0000 ">
                            </div>
                            <div class=" mdcreditcard-number-backgroundcolor-yu">
                                <input class="text-center m-0" type="" name="" id="" placeholder="0000 ">
                            </div>
                            <div class=" mdcreditcard-number-backgroundcolor1-yu">
                                <input class="text-center m-0" type="" name="" id="" placeholder="0000 ">
                            </div>
                            <div class=" mdcreditcard-number-backgroundcolor2-yu">
                                <input class="text-center m-0" type="" name="" id="" placeholder="0000 ">
                            </div>
                        </div>
                        <div class="mdcreditcard2-numberbox "></div>
                    </div>
                    <div class="pt-5 mdditcard-numberinput-yu">
                        <label class="m-0"  for="">
                            背面末三碼
                        </label>
                        <br>
                        <div class=" mdcreditcard-number-yu d-flex justify-content-start align-items-start "> 
                            <div class=" mdcreditcard-number-backgroundcolor-yu ">
                                <input class="text-center m-0" type="" name="" id="" placeholder="0000 ">
                            </div>
                            <div class=" mdcreditcard-number-backgroundcolor1-yu">
                                <input class="text-center m-0" type="" name="" id="" placeholder="0000 ">
                            </div>
                            <div class=" mdcreditcard-number-backgroundcolor2-yu">
                                <input class="text-center m-0" type="" name="" id="" placeholder="0000 ">
                            </div>
                            <div class=" mdcreditcard-number-backgroundcolor3-yu">
                                <input class="text-center m-0" type="" name="" id="" placeholder="000 ">
                            </div>
                        </div>
                    </div>
                    <input type="checkbox" name="listinfo-title-checkbox-yu" id="" />
                    <label for="name" class="m-0 p-3"> 
                        ATM轉帳 
                    </label>
                </div>
            </section>
            <div class="">
                <!-- 訂單明細 -->
                <div class="mdlistinfo-yu">
                    <main class="section-0-yu">
                        <div class="panel-group-yu"id="accordion"role="tablist"aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="listinfo-title-yu  panel-heading" role="tab" id="headingOne">
                                    <h6 class="mdpanel-title-yu p-0 m-0">
                                        <a class="panel-title-a-yu" data-toggle="collapse" href="#listinfo-details-yu" role="button">
                                        訂單明細
                                            <svg width="24" height="24" viewBox="0 0 24 24"fill="none"xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4 9L11.3415 15.4238C11.7185 15.7537 12.2815 15.7537 12.6585 15.4238L20 9"stroke="#432A0F"stroke-opacity="0.6"stroke-width="2"stroke-linecap="round"/>
                                            </svg>
                                        </a>
                                    </h6>
                                </div>
                                <div id="listinfo-details-yu" class="collapse show panel-collapse collapse-yu">
                                    <div class="panel-body-yu">
                                        <div class="">
                                            <div class="card-yu d-flex px-1 py-3">
                                                <!-- flex-nowrap -->
                                                <div class="  px-1">
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
                                                    <p class="OnnPriceYu">
                                                        1500
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
                <!-- 結帳明細 -->
                <div class="mdsection-1-yu mb-4">
                    <main class="">
                        <h6 class="listinfo-title-yu m-0">
                            結帳明細
                        </h6>
                        <div class=" d-flex justify-content-between align-items-center">
                            <h6 class="listinfo-number-yu"></h6>
                            <h6 class="listinfoYu">
                                1500
                            </h6>
                        </div>
                    </main>
                </div>
            </div>
            <div class=" d-flex justify-content-center">
                <!-- a href="#buy1.php" -->
                <a href="shopping-cart-creditcard-travel.php" class="btn mdunique-nextbutton-yu">
                    <button class=" mdunique-btn-yu  me-md-2" type="button">
                        <p class="m-0 text-center">
                            確認訂購
                        </p>
                    </button>
                </a>
            </div>
        </div>
    </section>



<?php include __DIR__ . '/parts/scripts.php'; ?>

<script src="./shopping-cart-travellist.js"></script>

<?php include __DIR__ . '/parts/html-foot.php'; ?>
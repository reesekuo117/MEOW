<?php
require __DIR__. '/parts/meow_db.php';  // /開頭
$pageName ='購物車商品'; //頁面名稱


$sql = "SELECT * FROM product WHERE 1";
$temples = $pdo->query($sql)->fetchAll(); 

// 取得會員
$member_id = $_SESSION['user']['id'];
$sqlmember = "SELECT * FROM `member` WHERE id=$member_id";
$sm = $pdo->query($sqlmember)->fetch();


?>

<?php include __DIR__. '/parts/html-head.php'; ?>
<link rel="stylesheet" href="./shopping-cart-productdetails.css">
<?php
// header("Refresh:180");
?>
<?php include __DIR__. '/parts/navbar.php'; ?>


        <!-- ------------------桌機-------------------- -->
        <!-- 購物車訂單的進度條progress-bar -->
        <section class="d-none d-md-block">
            <div class="container-fluid p-0">
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
            <div id="myTabContent-yu" class="container">
                <!-- 訂單明細 -->
                <div class="listinfo-yu">
                    <main class="section-0-yu">
                        <h3 class="listinfo-title-yu m-0">
                            訂單明細
                        </h3>
                        <!-- <h6 class="listinfo-number-yu">
                        訂單編號: <span>M20221234567</span>
                        </h6> -->
                        <div class="panel-group-yu"id="accordion"role="tablist"aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h6 class="panel-title-yu">
                                        <aclass="panel-title-a-yu" data-toggle="collapse" href="#listinfo-details-yu" role="button">
                                        訂單明細
                                            <svg class="panel-titlesvg-yu" width="24" height="24" viewBox="0 0 24 24"fill="none"xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4 9L11.3415 15.4238C11.7185 15.7537 12.2815 15.7537 12.6585 15.4238L20 9"stroke="#432A0F"stroke-opacity="0.6"stroke-width="2"stroke-linecap="round" />
                                            </svg>
                                        </aclass=>
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
                                                                商品照片
                                                            </h6>
                                                        </th>
                                                        <th scope="col">
                                                            <h6 class="mb-0">
                                                                商品名稱
                                                            </h6>
                                                        </th>
                                                        <!-- <th scope="col">
                                                            <h6 class="mb-0">
                                                                規格
                                                            </h6>
                                                        </th> -->
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
                                                    foreach ($_SESSION["pcart"] as $k => $v) : ?>
                                                        <tr class="">
                                                            <!-- 商品照片 -->
                                                            <td class="imgsCardYu">
                                                                <img class=" w-100" src="imgs/product/cards/<?= $v['product_card_img'] ?>.jpg" alt="...">
                                                            </td>
                                                            <!-- 商品名稱 -->
                                                            <td>
                                                                <h6 class="m-0">
                                                                    <?= $v["product_name"] ?>
                                                                </h6>
                                                            </td>
                                                            <!-- 商品規格 -->
                                                            <!-- <td>規格</td> -->
                                                            <!-- 單價 -->
                                                            <td class="OnePriceYu">
                                                                <?= $v["product_price"] ?>
                                                            </td>
                                                            <!-- 數量 -->
                                                            <td>
                                                            <?= $v['qty'] ?>
                                                            </td>
                                                            <!-- 小計 -->
                                                            <td class="LittlePriceYu">
                                                            <?= $v['product_price'] * $v['qty'] ?>
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
                    <div class=" h6 priceNT-yu alert alert-succes listinfo-details-totalprice-yu m-0"role="alert">
                        <h6 id="total-price-yu" class="price-uniqui-yu">
                        <?= $v['product_price'] * $v['qty'] ?>
                        </h6>
                    </div>
                </div>
                <!-- 訂購人資料 -->
                <!-- 記得這邊的action要連到另一隻php -->
                <form name="product_form" method="post" action="shopping-cart-ATM-product.php" onsubmit="checkFormProduct(); return false;">
                    <div class="section-1-yu position-relative">
                        <div class="section-1-title-yu">
                            <h3 class="listinfo-title-yu m-0">訂購人資料</h3>
                        </div>
                        <!-- 訂購人填寫資料 -->
                        <div class="AllinputValueYu"></div>
                        <div id="form1-yu" name="bajohn"  class=" form1-yu order-list-yu">
                            <div class="field order-name-yu p-3 ">
                                <label for="name" class="">
                                    姓名
                                    <span style="color: #963c38">*</span>
                                </label>
                                <br/>
                                <input class="ordername-yu  requiredYu" type="name" placeholder="請輸入姓名 " id="name-yu" name="ordername-yu" required value="<?=htmlentities($sm['name']) ?>"/>
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
                                <input class="orderphone-yu  requiredYu" type="mobile" placeholder="請輸入聯絡電話" id="mobile-yu" name="orderphone-yu"  required value="<?=htmlentities($sm['mobile']) ?>"/>
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
                                        <select class="orderaddress1-yu" name="orderaddress1-yu" id="city1-yu" 
                                        type="address_city" 
                                        required value="<?=htmlentities($sm['address_city_re']) ?>">
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
                                        <select class="orderaddress2-yu"name="orderaddress2-yu"id="district1-yu" type="address_region" value="<?=htmlentities($sm['address_region_re']) ?>" >
                                            <option class="" value="0">中正區</option>
                                            <option value="1">板橋區</option>
                                            <option value="2">仁愛區</option>
                                        </select>
                                    </div>
                                    <input class="orderaddress3-yu  requiredYu" name="orderaddress3-yu" placeholder=" 請輸入詳細地址" id="address-yu" name="address" type="address" value="<?=htmlentities($sm['address']) ?>"/>
                                    <i class="right fa-regular fa-circle-check"></i>
                                    <i class="wrong fa-solid fa-triangle-exclamation">
                                        <small>請輸入正確的地址</small>
                                    </i>
                                </div>
                            </div>
                            <div class="field order-email-yu p-3">
                                <label for="email" >
                                    Email<span style="color: #963c38">*</span>
                                </label>
                                <br />
                                <input type="email" class="email-yu  requiredYu"  id="email-yu" name="order-email-yu" value="<?=htmlentities($sm['email']) ?>" />
                                <i class="right fa-regular fa-circle-check"></i>
                                    <i class="wrong fa-solid fa-triangle-exclamation">
                                        <small>請輸入正確的Email</small>
                                    </i>
                            </div>
                        </div>
                    </div>
                    <!-- 收件人資料 -->
                    <div class=" from2-yu section-2-yu" method="post" action="">
                        <div class="section-2-title-yu d-flex justify-content-between">
                            <h3 class="listinfo-title-yu m-0">
                                收件人資料
                            </h3>
                            <label for="name" class="m-0 mr-3">
                                <input type="checkbox"  id="btnAutoInput-yu"/>
                                同訂購人
                            </label>
                        </div>
                        <!-- 收件人填寫資料 -->
                        <div class="receiver-list-yu">
                            <div class=" field2 receiver-name-yu p-3">
                                <label for="name">
                                    姓名
                                    <span style="color: #963c38">*</span>
                                </label>
                                <br />
                                <input class="receivername-yu requiredYu" type="text" placeholder="請輸入姓名" id="username-yu" name="consigneename"  required/>
                                <i class="right fa-regular fa-circle-check"></i>
                                <i class="wrong fa-solid fa-triangle-exclamation">
                                    <small>請輸入正確姓名</small>
                                </i>
                            </div>
                            <div class="field2 receiver-phone-yu p-3">
                                <label for="mobile" >
                                    聯絡電話
                                    <span style="color: #963c38">*</span>
                                </label>
                                <br />
                                <input class="receiverphone-yu  requiredYu" type="text" placeholder="請輸入聯絡電話" id="usermobile-yu" name="consigneephone" required/>
                                <i class="right fa-regular fa-circle-check"></i>
                                <i class="wrong fa-solid fa-triangle-exclamation">
                                    <small>請輸入正確聯絡電話</small>
                                </i>
                            </div>
                            <div class="receiver-deliver-yu p-3">
                                <input type="hidden" name="delivery" value="宅配">
                                <label for="" class="">
                                    配送方式
                                    <span style="color: #963c38">*</span>
                                </label>
                                <br/>
                                <button type="button" class="tohomebtn btn receiver-deliverbtn1-yu h6">
                                    宅配
                                </button>
                                <button id="rdbtn-yu" type="button" class="btn receiver-deliverbtn2-yu h6" >
                                    超商取貨
                                </button>
                                <div class="familyinput-yu">
                                    <div class="d-flex align-items-center ">
                                        <input type="radio" name="listinfo-title-radio-yu" id="eleveninput-yu"/>
                                        <label for="" class="m-0"> 
                                            <p class="m-0 pl-2">
                                                7-11取貨運60單筆訂單滿199,即享免運費優惠。 
                                                <a href="https://emap.pcsc.com.tw/ecmap/default.aspx" class="familya-yu">
                                                    選擇取貨門市
                                                </a>
                                            </p>
                                        </label>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <input type="radio" name="listinfo-title-radio-yu"  id=""/>
                                        <label for="" class="m-0"> 
                                            <p class="m-0 pl-2">
                                                全家取貨费60元·單筆訂單滿199,即享免運費優惠。
                                                <a href="https://www.famiport.com.tw/Web_Famiport/page/ShopQuery.aspx" class="familya-yu">
                                                    選擇取貨門市
                                                </a>
                                            </p>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="field2 receiver-email-yu p-3">
                                <label for="email" class="">
                                    Email
                                    <span style="color: #963c38">*</span>
                                </label>
                                <br/>
                                <input class="receiveremail-yu  requiredYu" type="email " id="useremail-yu"  />
                                <i class="right fa-regular fa-circle-check"></i>
                                <i class="wrong fa-solid fa-triangle-exclamation">
                                    <small>請輸入正確姓名</small>
                                </i>
                            </div> -->
                            <div class="field2 receiver-address-yu p-3">
                                <label for="address" class="">
                                    地址
                                    <span style="color: #963c38">*</span>
                                </label>
                                <br/>
                                <div class="d-flex align-items-center">
                                    <div class="form-group m-0">
                                        <select class="receiveraddress1-yu" name="consigneeaddress1" id="usercity-yu"required>
                                            <option class="" value="5">臺北市</option>
                                            <option value="6">新北市</option>
                                            <option value="7">基隆市</option>
                                            <option value="8">宜蘭縣</option>
                                            <option value="9">桃園市</option>
                                            <option value="10">新竹市</option>
                                            <option value="11">新竹縣</option>
                                            <option value="12">苗栗縣</option>
                                            <option value="13">彰化縣</option>
                                            <option value="14">臺中市</option>
                                            <option value="15">南投縣</option>
                                            <option value="16">雲林縣</option>
                                            <option value="17">嘉義市</option>
                                            <option value="18">嘉義縣</option>
                                            <option value="19">臺南市</option>
                                            <option value="20">高雄市</option>
                                            <option value="21">屏東縣</option>
                                            <option value="22">花蓮縣</option>
                                            <option value="23">臺東縣</option>
                                        </select>
                                    </div>
                                    <div class="form-group m-0">
                                        <select class="receiveraddress2-yu" name="consigneeaddress2" id="userdistrict-yu">
                                            <option class="" value="24">中正區</option>
                                            <option value="25">大同區</option>
                                            <option value="26">中山區</option>
                                            <option value="27">萬華區</option>
                                            <option value="28">信義區</option>
                                            <option value="29">松山區</option>
                                            <option value="30">大安區</option>
                                            <option value="31">南港區</option>
                                            <option value="32">北投區</option>
                                            <option value="33">內湖區</option>
                                            <option value="34">士林區</option>
                                            <option value="35">文山區</option>
                                            <option value="36">板橋區</option>
                                            <option value="37">新莊區</option>
                                            <option value="38">泰山區</option>
                                            <option value="39">林口區</option>
                                            <option value="40">淡水區</option>
                                            <option value="41">金山區</option>
                                            <option value="42">八里區</option>
                                            <option value="43">萬里區</option>
                                            <option value="44">石門區</option>
                                            <option value="45">三芝區</option>
                                            <option value="46">瑞芳區</option>
                                            <option value="47">汐止區</option>
                                            <option value="48">平溪區</option>
                                            <option value="49">貢寮區</option>
                                            <option value="50">雙溪區</option>
                                            <option value="51">深坑區</option>
                                            <option value="52">石碇區</option>
                                            <option value="53">新店區</option>
                                            <option value="54">坪林區</option>
                                            <option value="55">烏來區</option>
                                            <option value="56">中和區</option>
                                            <option value="57">永和區</option>
                                            <option value="58">土城區</option>
                                            <option value="59">三峽區</option>
                                            <option value="60">樹林區</option>
                                            <option value="61">鶯歌區</option>
                                            <option value="62">三重區</option>
                                            <option value="63">蘆洲區</option>
                                            <option value="64">五股區</option>
                                            <option value="65">仁愛區</option>
                                            <option value="66">中正區</option>
                                            <option value="67">信義區</option>
                                            <option value="68">中山區</option>
                                            <option value="69">安樂區</option>
                                            <option value="70">暖暖區</option>
                                            <option value="71">七堵區</option>
                                        </select>
                                    </div>
                                    <input class="receiveraddress3-yu  requiredYu" type="text" placeholder=" 請輸入詳細地址" id="useraddress-yu" name="consigneeaddress3"/>
                                    <i class="right fa-regular fa-circle-check"></i>
                                    <i class="wrong fa-solid fa-triangle-exclamation">
                                        <small>請輸入正確地址</small>
                                    </i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 付款方式 -->
                    <div class=" section-3-yu">
                        <section class="section-3-yu">
                            <div class="section-3-title-yu">
                                <h3 class="listinfo-title-yu m-0">付款方式</h3>
                            </div>
                            <div class="p-3">
                                <div class="pt-2">
                                    <input type="radio" name="listinfo-title-radio-yu" id="creditcard-radio-yu"/>
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
            
                                                            <input id="creditcardnumber1-yu" class=" text-center" type="text" placeholder="0000" maxlength="4">
            
                                                            <input id="creditcardnumber2-yu" class=" text-center"  type="text" placeholder="0000" maxlength="4">
            
                                                            <input id="creditcardnumber3-yu" class=" text-center"  type="text" placeholder="0000" maxlength="4">
            
                                                            <input id="creditcardnumber4-yu" class=" text-center"  type="text" placeholder="0000" maxlength="4">
                                                        </div>
                                                        <div class="creditcarddate-yu d-flex" id="creditcarddate-yu">
                                                            <input class="text-center"  type="text" placeholder="月" maxlength="2" id="creditcardmonth-yu" >
                                                            <h6>
                                                                /
                                                            </h6>
                                                            <input class="text-center"  type="text" placeholder="年" maxlength="2" id="creditcardyear-yu"  >
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
                                                            <input class="usercdnumber3  usercdnumber4 requiredYu text-center m-0" type="" id="usercreditcardnumber1-yu" placeholder="0000 " maxlength="4" onkeyPress="autoTab()" onkeyUp="autoTab()">
                                                        </div>
                                                        <div class=" field3 mx-1">
                                                            <input class=" usercdnumber3 usercdnumber4 requiredYu text-center m-0" type=""  placeholder="0000 " maxlength="4" id="usercreditcardnumber2-yu" >
                                                            <!-- onkeyup="value=value.replace(/[^\d]/g,'') " -->
                                                        </div>
                                                        <div class=" field3 mx-1">
                                                            <input class=" usercdnumber3 usercdnumber4 requiredYu text-center m-0" type="" placeholder="0000 " maxlength="4" id="usercreditcardnumber3-yu" >
                                                        </div>
                                                        <div class=" field3 mx-1  d-flex align-items-center">
                                                            <input class=" usercdnumber3 usercdnumber4 requiredYu text-center m-0" type=""  placeholder="0000 " maxlength="4" id="usercreditcardnumber4-yu">
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
                                                            <input class=" usercdMonthYu  requiredYu text-center m-0" placeholder="月 " maxlength="2" id="usercreditcardmonth-yu" onkeyup="value=value.replace(/[^\d]/g,'') ; if(value>12)value=12">
                                                        </div>
                                                        <div class="field3 mx-1">
                                                            <input class=" usercdYearYu  requiredYu text-center m-0" placeholder="年" maxlength="2" id="usercreditcardyear-yu" onkeyup="value=value.replace(/[^\d]/g,'') ; if(value>29)value=29">
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
                                                            <input class=" cardCVC text-center requiredYu m-0" placeholder="000 " maxlength="3" id="usercreditcardid-yu" onkeyup="value=value.replace(/[^\d]/g,'') ">
                                                            <i class="right fa-regular fa-circle-check"></i>
                                                            <i class="wrong fa-solid fa-triangle-exclamation">
                                                            requiredYu                                 <small>請輸入正確的信用卡後三碼</small>
                                                            </i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-3 ATMradioYu " >
                                <input class="ATMradioYu" type="radio" name="listinfo-title-radio-yu" checked/>
                                <label for="name" class="m-0"> ATM轉帳 </label>
                            </div>
                        </section>
                    </div>
                    <input type="hidden" name="state" value="訂單未完成">
                    <input type="hidden" name="delivery" value="宅配">
                    <input type="hidden" name="payment" value="ATM轉帳">
                    <input type="hidden" name="payment_state" value="未付款">
                    <div class=" d-md-flex justify-content-md-end">
                        <!-- a href="#buy1.php" -->
                        <div class="btn unique-nextbutton-yu p-0">
                            <!-- <a href="shopping-cart-ATM-product.php"></a> -->
                                <button class=" Allsubmit unique-btn-yu  me-md-2 que-btn-yu  btn_disabled_ba" type="submit"  name=ok value="送出">
                                    <p class="m-0 text-center">
                                        確認訂購
                                    </p>
                                </button>
                            
                        </div>
                    </div>
                </form>
            </div>
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
                        <h6 class="listinfo-number-yu">
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
                                            <div class="card-yu d-flex px-1 py-3 mdcardColorYu">
                                                <!-- flex-nowrap -->
                                                <div class="  px-1">
                                                    <img class="" src="imgs/購物車手機版-商品(測試用 大).png" alt="">
                                                </div>
                                                <div class="px-1">
                                                    <div class="mdcardlist-yu">
                                                        <p class="m-0">
                                                            台北霞海城隍廟獨家聯名-七夕月老供品組...
                                                        </p>
                                                    </div>
                                                    <br>
                                                    <!-- 數量 -->
                                                    <p>完美禮包X1</p>
                                                    <!-- 單價 -->
                                                    <p class="OnePriceYu">
                                                        707
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="listinfo-details-yu" class="collapse show panel-collapse collapse-yu">
                                    <div class="panel-body-yu">
                                        <div class="">
                                            <div class="card-yu d-flex px-1 py-3">
                                                <!-- flex-nowrap -->
                                                <div class="  px-1">
                                                    <img class="" src="imgs/購物車手機版-商品(測試用 大).png" alt="">
                                                </div>
                                                <div class="px-1 mdcardColorYu">
                                                    <div class="mdcardlist-yu">
                                                        <p class="m-0">
                                                            台北霞海城隍廟獨家聯名-七夕月老供品組...
                                                        </p>
                                                    </div>
                                                    <br>
                                                    <!-- 數量 -->
                                                    <p>完美禮包X1</p>
                                                    <!-- 單價 -->
                                                    <p class="OnePriceYu">
                                                        707
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
                                1414
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
                            <input class="mdordername-yu"type="text"placeholder="請輸入姓名 "class=""id="name-yu" required/>
                        </div>
                        <div class="mdorder-phone-yu p-3">
                            <label for="mobile" class="">
                                聯絡電話
                                <span style="color: #963c38">*</span>
                            </label>
                            <br/>
                            <input class="orderaddress3-yu"type="text"placeholder="請輸入聯絡電話 "class=""id="mobile-yu"required/>
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
                                        <select class=""id="city-yu"required>
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
                                        <select class=""id="district">
                                            <option class="" value="0">中正區</option>
                                            <option value="1">板橋區</option>
                                            <option value="2">仁愛區</option>
                                        </select>
                                    </div>
                                </div>
                                <input class="mdorderaddress3-yu mt-1" type="text"placeholder=" 請輸入詳細地址"class=""id="address-yu"/>
                            </div>
                        </div>
                        <div class="mdorder-email-yu p-3">
                            <label for="email" class=""
                                >Email<span style="color: #963c38">*</span>
                            </label>
                            <br />
                            <input class="" type="text" class="" id="email-yu"  />
                        </div>
                    </div>
                </section>
                <!-- 收件人資料 -->
                <section class="mdsection-3-yu">
                        <div class="mdsection-2-title-yu d-flex justify-content-between">
                            <h6 class="listinfo-title-yu m-0">
                                收件人資料:
                            </h6>
                            <label for="name" class="m-0">
                                <input   type="checkbox"name="listinfo-title-checkbox-yu"id="btnAutoInput-yu"/>
                                同訂購人
                            </label>
                        </div>
                    <!-- 收件人人填寫資料 -->
                    <div class="mdorder-list-yu">
                        <div class="order-name-yu p-3">
                            <label for="name" class="">
                                姓名
                                <span style="color: #963c38">*</span>
                            </label>
                            <br/>
                            <input class="mdordername-yu"type="text"placeholder="請輸入姓名 "class=""id="name-yu" required/>
                        </div>
                        <div class="mdorder-phone-yu p-3">
                            <label for="mobile" class="">
                                聯絡電話
                                <span style="color: #963c38">*</span>
                            </label>
                            <br/>
                            <input class="mdorderphone-yu"type="text"placeholder="請輸入聯絡電話 "class=""id="mobile-yu"required/>
                        </div>
                        <div class="receiver-deliver-yu p-3">
                            <label for="" class="">
                                配送方式
                                <span style="color: #963c38">*</span>
                            </label>
                            <br />
                            <button type="button" class="btn mdreceiver-deliverbtn1-yu p">
                                宅配
                            </button>
                            <button type="button" class="btn mdreceiver-deliverbtn2-yu p">
                                超商取貨
                            </button>
                        </div>
                        <div class="mdorder-address-yu p-3">
                            <label for="address" class="">
                                配送地址
                                <span style="color: #963c38">*</span>
                            </label>
                            <br />
                            <div>
                                <div class="d-flex justify-content-center align-items-center">
                                    <div class="form-group mdorderaddress1-yu">
                                        <select class=""id="city-yu"required>
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
                                        <select class=""id="district">
                                            <option class="" value="0">中正區</option>
                                            <option value="1">板橋區</option>
                                            <option value="2">仁愛區</option>
                                        </select>
                                    </div>
                                </div>
                                <input class="mdorderaddress3-yu mt-1" type="text"placeholder=" 請輸入詳細地址"class=""id="address-yu"/>
                            </div>
                        </div>
                        <div class="mdorder-email-yu p-3">
                            <label for="email" class=""
                                >Email<span style="color: #963c38">*</span>
                            </label>
                            <br />
                            <input class="" type="text" class="" id="email-yu"  />
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
                        <div class="pt-1">
                            <div class="mdditcard-numberinput-yu">
                                <label class="pt-1 m-0"  for="">
                                    信用卡卡號
                                </label>
                                <br>
                                <div class=" mdcreditcard-number-yu d-flex justify-content-center align-items-center "> 
                                    <div class=" mdcreditcard-number-backgroundcolor-yu ">
                                        <input class="text-center m-0" type=""  id="" placeholder="0000 ">
                                    </div>
                                    <div class=" mdcreditcard-number-backgroundcolor-yu">
                                        <input class="text-center m-0" type=""  id="" placeholder="0000 ">
                                    </div>
                                    <div class=" mdcreditcard-number-backgroundcolor-yu">
                                        <input class="text-center m-0" type=""  id="" placeholder="0000 ">
                                    </div>
                                    <div class=" mdcreditcard-number-backgroundcolor-yu">
                                        <input class="text-center m-0" type=""  id="" placeholder="0000 ">
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
                                        <input class="text-center m-0" type=""  id="" placeholder="0000 ">
                                    </div>
                                    <div class=" mdcreditcard-number-backgroundcolor-yu">
                                        <input class="text-center m-0" type=""  id="" placeholder="0000 ">
                                    </div>
                                    <div class=" mdcreditcard-number-backgroundcolor1-yu">
                                        <input class="text-center m-0" type=""  id="" placeholder="0000 ">
                                    </div>
                                    <div class=" mdcreditcard-number-backgroundcolor2-yu">
                                        <input class="text-center m-0" type=""  id="" placeholder="0000 ">
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
                                        <input class="text-center m-0" type=""  id="" placeholder="0000 ">
                                    </div>
                                    <div class=" mdcreditcard-number-backgroundcolor1-yu">
                                        <input class="text-center m-0" type=""  id="" placeholder="0000 ">
                                    </div>
                                    <div class=" mdcreditcard-number-backgroundcolor2-yu">
                                        <input class="text-center m-0" type=""  id="" placeholder="0000 ">
                                    </div>
                                    <div class=" mdcreditcard-number-backgroundcolor3-yu">
                                        <input class="text-center m-0" type=""  id="" placeholder="000 ">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pt-4">
                            <input type="checkbox"  id="" />
                            <label for="name" class="m-0 "> 
                                ATM匯款
                            </label>
                            <!-- <div class="pt-2 fontweight-yu ">
                                <p class=" d-flex justify-content-between">
                                    銀行代號: <span>54684</span>
                                </p>
                                <p class=" d-flex justify-content-between">
                                    專屬帳號: <span>548-986-355-655</span>
                                </p>
                                <p class=" d-flex justify-content-between">
                                    繳費期限: <span>2022/10/15  23:59前</span>
                                </p>
                            </div> -->
                        </div>
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
                                                        <img class="" src="imgs/購物車手機版-商品(測試用 大).png" alt="">
                                                    </div>
                                                    <div class="px-1 mdcardColorYu">
                                                        <div class="mdcardlist-yu">
                                                            <p class="m-0">
                                                                台北霞海城隍廟獨家聯名-七夕月老供品組...
                                                            </p>
                                                        </div>
                                                        <br>
                                                        <!-- 數量 -->
                                                        <p>完美禮包X1</p>
                                                        <!-- 單價 -->
                                                        <p class="OnePriceYu">
                                                            707
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="">
                                                <div class="card-yu d-flex px-1 py-3 mdcardColorYu">
                                                    <!-- flex-nowrap -->
                                                    <div class="  px-1">
                                                        <img class="" src="imgs/購物車手機版-商品(測試用 大).png" alt="">
                                                    </div>
                                                    <div class="px-1">
                                                        <div class="mdcardlist-yu">
                                                            <p class="m-0">
                                                                台北霞海城隍廟獨家聯名-七夕月老供品組...
                                                            </p>
                                                        </div>
                                                        <br>
                                                        <!-- 數量 -->
                                                        <p>完美禮包X1</p>
                                                        <!-- 單價 -->
                                                        <p class="OnePriceYu">
                                                            707
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
                                    1414
                                </h6>
                            </div>
                        </main>
                    </div>
                </div>
                <div class=" d-flex justify-content-center">
                    <!-- a href="#buy1.php" -->
                    <a href="shopping-cart-ATM-product.php" class="btn mdunique-nextbutton-yu">
                        <button class=" mdunique-btn-yu  me-md-2" type="button" type="submit"  name=ok value="送出"
                        onclick="if(confirm('您確定送出嗎?')) return true;else return false">
                            <p class="m-0 text-center">
                                確認訂購
                            </p>
                        </button>
                    </a>
                </div>
            </div>
        </section>



<?php include __DIR__. '/parts/scripts.php'; ?>

<script src="shopping-cart-productdetails.js" ></script>

<script>


</script>


<?php include __DIR__. '/parts/html-foot.php'; ?>
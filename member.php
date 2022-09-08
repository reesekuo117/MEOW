<?php
require __DIR__. '/parts/meow_db.php';  // /開頭
$pageName ='member'; //頁面名稱
?>

<?php include __DIR__. '/parts/html-head.php'; ?>
<link rel="stylesheet" href="./reese.css">
<?php include __DIR__. '/parts/navbar.php'; ?>
<div class="container-re">
    <div class="tab row m-0">
        <div class="tab_list_re col-3">
            <div class="picturewarp-re mx-auto"><img class="w-100" src="./imgs/member/picture01.png" alt=""></div>
            <ul class="m-0 p-0 text-center">
                <li class="current_re text-20-re mb-2" id="">會員資料</li>
                <li class="text-20-re mb-2" id="">修改密碼</li>
                <li class="text-20-re mb-2" id="" onclick="addToCartRe(event)">我的最愛</li>
                <li class="text-20-re mb-2" id="">查詢訂單</li>
                <li class="signupbutton "><input class="btn-re btn200-re" type="submit" value="登出"></li>
            </ul>
        </div>
        <div class="col-9 p-0">
        <div class="tab_con_re">
<!-- p1-member----------------------------------------------------------------------------------------------------------- -->
            <div id="member-page-re" class="item_re" style="display: block;">
                <h5 class="card-title">會員資料</h5>
                <form name='form1-re' onsubmit=" checkForm(); return false;">  
                <!-- novalidate 不要驗證表單 -->
                <!-- https://www.wfublog.com/2021/04/html5-validator.html -->
                    <div class="mb-3">
                        <label for="name" class="form-label-re text-18-re">姓名<span style="color:#963C38">*</span></label><br>
                        <input class="input-re noline-re" type="text" placeholder=" 請輸入姓名" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="mobile" class="form-label-re text-18-re">聯絡電話<span style="color:#963C38">*</span></label><br>
                        <input class="input-re noline-re" type="text" placeholder=" 請輸入聯絡電話" class="form-control" id="mobile" name="mobile" required>
                        <!-- 手機驗證<input type="text" required="required" maxlength="11" pattern="09\d{2}-\d{6}"/> -->
                    </div>
                    <div class="mb-3">
                        <label for="birthday" class="form-label-re text-18-re">出生日期</label><br>
                        <input class="input-re noline-re" type="date" placeholder=" 請輸入出生日期" class="form-control" id="birthday" name="birthday">
                    </div>
                    <div class="">
                        <label for="address" class="form-label-re text-18-re">通訊地址</label><br>
                        <div class="address-re d-flex">
                            <div class="form-group mr-2">
                                <select class="select-re" name="city" id="city">
                                    <option class="option-re text-16-re" value="0">臺北市</option>
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
                            <div class="form-group mr-2">
                                <select class="select-re" name="district" id="district">
                                    <option class="option-re text-16-re" value="0">中正區</option>
                                    <option value="1">板橋區</option>
                                    <option value="2">仁愛區</option>
                                </select>
                            </div>
                            <input class="input-re noline-re" type="text" placeholder=" 請輸入詳細地址" class="form-control right-0" id="address" name="address">
                        </div>
                        <!-- <input type="text">
                        <textarea class="form-control" id="address" name="address" 
                            cols="30" rows="1"></textarea> -->
                            <!-- textarea /textarea 之間不能換行 裡面的所有值會在頁面上顯示 -->
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label-re text-18-re">信箱帳號<span style="color:#963C38">*</span></label><br>
                        <input class="inputdisabled-re noline-re" type="text" class="form-control" id="email" name="email" disabled="disabled">
                    </div>
                    <div class="d-flex justify-content-end"><input class="btn-re btn200-re" type="submit" value="儲存"></div>
                    <!-- <button type="submit" class="btn btn200-re">儲存</button> -->
                </form>
            </div>
<!-- p2-password--------------------------------------------------------------------------------------------------------- -->
            <div class="item_re">
                <h5 class="card-title">修改密碼</h5>
                <form name='form1-re' onsubmit=" checkForm(); return false;">  
                <!-- novalidate 不要驗證表單 -->
                <!-- https://www.wfublog.com/2021/04/html5-validator.html -->
                    <div class="mb-3">
                        <label for="account" class="form-label-re text-18-re">舊密碼<span style="color:#963C38">*</span></label><br>
                        <input class="input-re noline-re" type="password" placeholder=" 請輸入舊密碼" required>
                    </div>
                    <div class="mb-3">
                        <label for="account" class="form-label-re text-18-re">新密碼<span style="color:#963C38">*</span></label><br>
                        <input class="input-re noline-re" type="password" placeholder=" 請輸入新密碼" required>
                    </div>
                    <div class="mb-3">
                        <label for="account" class="form-label-re text-18-re">請再次確認新密碼<span style="color:#963C38">*</span></label><br>
                        <input class="input-re noline-re" type="password" placeholder=" 請輸入新密碼" required>
                    </div>
                    <div class="d-flex justify-content-end"><input class="btn-re btn200-re" type="submit" value="儲存"></div>
                    <!-- <button type="submit" class="btn btn-l">儲存</button> -->
                </form>
            </div>
<!-- p3-like------------------------------------------------------------------------------------------------------------- -->
            <div id="like-page-re" class="item_re">
                <div>
                    <ul class="tab-title-re liketitle-all-re d-flax p-0">
                        <li class="col-3 text-20-re d-inline-block liketitle-re text-center active-re"><a href="#tab01-re">獨家商品</a></li><li class="col-3 text-20-re d-inline-block liketitle-re text-center "><a href="#tab02-re">旅遊行程</a></li><li class="col-3 text-20-re d-inline-block liketitle-re text-center "><a href="#tab03-re">收藏詩籤</a></li><li class="col-3 text-20-re d-inline-block liketitle-re text-center "><a href="#tab04-re">每日運勢</a></li>
                    </ul>
                </div>
    <!-- p3-T------------------------------------------------------------------ -->
                <div id="tab01-re" class="tab-inner-re">
                    <div class="row my-3">
                        <div class="col-3">
                            <div class="card">
                                <img src="./imgs/購物車-商品(測試用).png" class="card-img-top" alt="">
                                <div class="card-body text-center">
                                    <h5 class="card-title text-20-re">Card title</h5>
                                    <p class="text-18-re price-re">520</p>
                                    <button class="btn-re btn200-re"  onclick="addToCartRe(event)">加入購物車</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card">
                                <img src="./imgs/購物車-商品(測試用).png" class="card-img-top" alt="">
                                <div class="card-body text-center">
                                    <h5 class="card-title text-20-re">Card title</h5>
                                    <p class="text-18-re price-re">520</p>
                                    <button class="btn-re btn200-re"  onclick="addToCartRe(event)">加入購物車</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card">
                                <img src="./imgs/購物車-商品(測試用).png" class="card-img-top" alt="">
                                <div class="card-body text-center">
                                    <h5 class="card-title text-20-re">Card title</h5>
                                    <p class="text-18-re price-re">520</p>
                                    <button class="btn-re btn200-re"  onclick="addToCartRe(event)">加入購物車</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card">
                                <img src="./imgs/購物車-商品(測試用).png" class="card-img-top" alt="">
                                <div class="card-body text-center">
                                    <h5 class="card-title text-20-re">Card title</h5>
                                    <p class="text-18-re price-re">520</p>
                                    <button class="btn-re btn200-re"  onclick="addToCartRe(event)">加入購物車</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="row my-3">
                        <div class="col-4">
                            <div class="card">
                                <img src="./imgs/購物車-商品(測試用).png" class="card-img-top" alt="">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Card title</h5>
                                    <p>NT$ 520</p>
                                    <button class="btn-re btn200-re"  onclick="addToCartRe(event)">加入購物車</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card">
                                <img src="./imgs/購物車-商品(測試用).png" class="card-img-top" alt="">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Card title</h5>
                                    <p>NT$ 520</p>
                                    <button class="btn-re btn200-re"  onclick="addToCartRe(event)">加入購物車</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card">
                                <img src="./imgs/購物車-商品(測試用).png" class="card-img-top" alt="">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Card title</h5>
                                    <p>NT$ 520</p>
                                    <button class="btn-re btn200-re"  onclick="addToCartRe(event)">加入購物車</button>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
    <!-- p3-P------------------------------------------------------------------ -->
                <div id="tab02-re" class="tab-inner-re">
                <div class="row my-3">
                        <div class="col-3">
                            <div class="card">
                                <img src="./imgs/購物車-行程(測試用).png" class="card-img-top" alt="">
                                <div class="card-body text-center">
                                    <h5 class="card-title text-20-re">Card title</h5>
                                    <p class="text-18-re price-re">520</p>
                                    <button class="btn-re btn200-re"  onclick="addToCartRe(event)">加入購物車</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card">
                                <img src="./imgs/購物車-行程(測試用).png" class="card-img-top" alt="">
                                <div class="card-body text-center">
                                    <h5 class="card-title text-20-re">Card title</h5>
                                    <p class="text-18-re price-re">520</p>
                                    <button class="btn-re btn200-re"  onclick="addToCartRe(event)">加入購物車</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card">
                                <img src="./imgs/購物車-行程(測試用).png" class="card-img-top" alt="">
                                <div class="card-body text-center">
                                    <h5 class="card-title text-20-re">Card title</h5>
                                    <p class="text-18-re price-re">520</p>
                                    <button class="btn-re btn200-re"  onclick="addToCartRe(event)">加入購物車</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card">
                                <img src="./imgs/購物車-行程(測試用).png" class="card-img-top" alt="">
                                <div class="card-body text-center">
                                    <h5 class="card-title text-20-re">Card title</h5>
                                    <p class="text-18-re price-re">520</p>
                                    <button class="btn-re btn200-re"  onclick="addToCartRe(event)">加入購物車</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    <!-- p3-D------------------------------------------------------------------ -->
                <div id="tab03-re" class="tab-inner-re">
                    詩籤
                    <div class="row">
                        <div class="col-4 likecard-re">
                            <img src="" alt="">
                        </div>
                        <div class="col-4 likecard-re"></div>
                        <div class="col-4 likecard-re"></div>
                    </div>
                </div>
    <!-- p3-F------------------------------------------------------------------ -->
                <div id="tab04-re" class="tab-inner-re">
                    運勢
                    <div class="row">
                        <div class="col-4 likecard-re"></div>
                        <div class="col-4 likecard-re"></div>
                        <div class="col-4 likecard-re"></div>
                    </div>
                </div>
            </div>
<!-- p4-orderlist-------------------------------------------------------------------------------------------------------- -->
            <div id="orderlist-page-re" class="item_re">
                <ul class="ordertab-title-re liketitle-all-re d-flax p-0">
                    <li class="col-6 d-inline-block liketitle-re text-20-re text-center active-re"><a class="active activetext-re" href="#tab05-re">獨家商品</a></li><li class="col-6 d-inline-block liketitle-re text-20-re text-center "><a href="#tab06-re">旅遊行程</a></li>
                </ul>
    <!-- p4-T------------------------------------------------------------------ -->
                <div id="tab05-re" class="ordertab-inner-re">
                    <table class="tablehover text-center w-100" >
                        <thead class="">
                            <tr class="orderlist-title-re">
                                <th class="col-2 text-20-re">訂單日期</th>
                                <th class="col-3 text-20-re">訂單編號</th>
                                <th class="col-2 text-20-re">訂單金額</th>
                                <th class="col-2 text-20-re">訂單狀態</th>
                                <th class="col-2 text-20-re"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="orderlist-re">
                                <td>2022/09/07</td>
                                <td>OR202209071200</td>
                                <td class="price-re">520</td>
                                <td>訂單完成</td>
                                <td><button class="orderbtn-re">查詢訂單</button></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="slide-re">
                        <table class="tablehover text-center w-100" >
                            <thead class="">
                                <tr class="orderlist-title-re">
                                    <th class="col-2 text-18-re">商品圖片</th>
                                    <th class="col-2 text-18-re">商品名稱</th>
                                    <th class="col-1 text-18-re">規格</th>
                                    <th class="col-1 text-18-re">單價</th>
                                    <th class="col-1 text-18-re">數量</th>
                                    <th class="col-1 text-18-re">小計</th>
                                    <th class="col-1 text-18-re"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="orderlist-re">
                                    <td>圖</td>
                                    <td class="text-16-re">台北霞海城隍廟獨家聯名--七夕月老供品組-甜作之盒</td>
                                    <td class="text-16-re">紅</td>
                                    <td class="ext-16-re price-re">520</td>
                                    <td class="text-16-re">1</td>
                                    <td class="ext-16-re price-re">520</td>
                                    <td><button class="btn-re ext-16-re">給予評價</button></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="d-flex">
                            <div class="col-6">
                                <p>收件人資訊</p>
                                <p>收件人姓名</p>
                                <p>收件人電話</p>
                                <p>收件人地址</p>
                            </div>
                            <div class="col-6">
                                <p>物流及付款資訊</p>
                                <p>收件方式</p>
                                <p>付款方式</p>
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
    <!-- p4-P------------------------------------------------------------------ -->
                <div id="tab06-re" class="ordertab-inner-re">
                    2
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
<?php include __DIR__. '/parts/scripts.php'; ?>
<script>
    // 側邊欄切換
    $(function(){
		//點擊上部的li，當前li添加current類，其餘兄弟移除類
		$(".tab_list_re li").click(function(){
			//鏈式編程操作
			$(this).addClass("current_re").siblings().removeClass("current_re");
			//點擊的同時，得到當前li的索引號
			var index = $(this).index();
			//讓下部裏面相應索引號的item顯示，其餘的item隱藏
			$(".tab_con_re .item_re").eq(index).show().siblings().hide();
		})
	})
    // like標籤切換
    $(function(){
    var $li = $('ul.tab-title-re li');
        $($li. eq(0) .addClass('active-re').find('a').attr('href')).siblings('.tab-inner-re').hide();
    
        $li.click(function(){
            $($(this).find('a'). attr ('href')).show().siblings ('.tab-inner-re').hide();
            $(this).addClass('active-re'). siblings ('.active-re').removeClass('active-re');
        });
    });
    // order標籤切換
    $(function(){
    var $li = $('ul.ordertab-title-re li');
        $($li. eq(0) .addClass('active-re').find('a').attr('href')).siblings('.ordertab-inner-re').hide();
    
        $li.click(function(){
            $($(this).find('a'). attr ('href')).show().siblings ('.ordertab-inner-re').hide();
            $(this).addClass('active-re'). siblings ('.active-re').removeClass('active-re');
        });
    });
    // 查詢訂單
        $('.orderbtn-re').click(function(){
        $('.slide-re').slideToggle('normal');
    })
    // 

    // 加入購物車
    // function addToCartRe(event) {
    //     const btn = $(event.currentTarget);
    //     //currentTarget 事件屬性返回其事件偵聽器觸發事件的元素
    //     const qty = btn.closest('.card-body').find('select').val();
    //     const sid = btn.attr('data-sid');
    //     //使用attr叫出自定屬性 data-sid
    //     // console.log(btn.closest('.card-body').find('select'));
    //     console.log({sid, qty});
    //     // $(selector).get(url,data,success(response,status,xhr),dataType)
    //     $.get(
    //         'handle-cart.php', 
    //         {sid, qty}, 
    //         function(data){
    //             showCartCount(data);
    //         }, 
    //         'json');
    // }

    // 
    let districtArray = [
        ['中正區', '大同區', '中山區', '萬華區', '信義區', '松山區', '大安區', '南港區', '北投區', '內湖區', '士林區', '文山區'],
        ['板橋區', '新莊區', '泰山區', '林口區', '淡水區', '金山區', '八里區', '萬里區', '石門區', '三芝區', '瑞芳區', '汐止區', '平溪區', '貢寮區', '雙溪區', '深坑區', '石碇區', '新店區', '坪林區', '烏來區', '中和區', '永和區', '土城區', '三峽區', '樹林區', '鶯歌區', '三重區', '蘆洲區', '五股區'],
        ['仁愛區', '中正區', '信義區', '中山區', '安樂區', '暖暖區', '七堵區'],
    ];
    $('#city').change(function () {
        const cityNumber = $(this).val();
        const districtData = districtArray[cityNumber];
        // 用迴圈會更方便
        // $('#district option').eq(0).text(districtData[0])
        // $('#district option').eq(1).text(districtData[1])
        // $('#district option').eq(2).text(districtData[2])

        // 迴圈 一直要做重複的動作，裡面的索引值可能會改變
        // 1.自己寫規則，for 迴圈，次數自己決定
        // 2.用陣列的方法來寫迴圈，次數就是陣列的資料數量

        console.log('districtData:', districtData.length);
        $('#district').empty();
        $(districtData).each(function (index, item) {
        console.log('JQ item:', item);
        console.log('JQ index:', index);
        $('#district').append(`<option value="${index}">${item}</option>`)
        })
    });

</script>

<?php include __DIR__. '/parts/html-foot.php'; ?>
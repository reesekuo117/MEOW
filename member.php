

<?php include __DIR__. '/parts/html-head.php'; ?>
<link rel="stylesheet" href="./reese.css">
<?php include __DIR__. '/parts/navbar.php'; ?>
<div class="background-re">
<div class="container-re">
    <div class="tab row m-0">
        <div class="tab_list_re d-none d-md-block col-md-3">
            <div class="picturewarp-re mx-auto my-4 position-relative">
                <img class="w-100" src="./imgs/member/picture01.png" alt="">
            </div>
            <div class="pictureicon-re position-absolute">
                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="4" y="8" width="24" height="17.3333" rx="4" stroke="#432A0F" stroke-width="2.66667"/>
                    <path d="M6.82947 20.6949C6.47686 21.3413 6.71507 22.1512 7.36153 22.5039C8.00799 22.8565 8.81791 22.6183 9.17053 21.9718L6.82947 20.6949ZM18.1818 21.3333L17.0113 21.9718C17.2383 22.388 17.6692 22.6523 18.1431 22.6661C18.617 22.6799 19.0625 22.441 19.3133 22.0387L18.1818 21.3333ZM22.8685 22.0387C23.2581 22.6636 24.0804 22.8544 24.7053 22.4648C25.3302 22.0753 25.521 21.2529 25.1315 20.628L22.8685 22.0387ZM9.17053 21.9718L13.0909 14.7844L10.7499 13.5075L6.82947 20.6949L9.17053 21.9718ZM13.0909 14.7844L17.0113 21.9718L19.3523 20.6949L15.432 13.5075L13.0909 14.7844ZM19.3133 22.0387L21.0909 19.1871L18.8279 17.7764L17.0503 20.628L19.3133 22.0387ZM21.0909 19.1871L22.8685 22.0387L25.1315 20.628L23.3539 17.7764L21.0909 19.1871ZM21.0909 19.1871L21.0909 19.1871L23.3539 17.7764C22.31 16.1018 19.8719 16.1018 18.8279 17.7764L21.0909 19.1871ZM13.0909 14.7844L13.0909 14.7844L15.432 13.5075C14.4213 11.6545 11.7606 11.6545 10.7499 13.5075L13.0909 14.7844Z" fill="#432A0F"/>
                    <circle cx="21.3333" cy="13.3333" r="1.33333" fill="#432A0F"/>
                </svg>
            </div>
            <ul class="m-0 p-0 text-center">
                <li class="current_re text-20-re mb-2" id="">會員資料</li>
                <li class="text-20-re mb-2" id="">修改密碼</li>
                <li class="text-20-re mb-2" id="" onclick="addToCartRe(event)">我的最愛</li>
                <li class="text-20-re mb-2" id="">查詢訂單</li>
                <li class="signupbutton "><input class="btn-re btn200-re" type="submit" value="登出"></li>
            </ul>
        </div>
        <div class="allright-re col-12 col-md-9 p-0">
        <div class="tab_con_re">
<!-- p1-member----------------------------------------------------------------------------------------------------------- -->
            <div id="member-page-re" class="item_re" style="display: block;">
                <div class="d-flex tab_phonelist_re">
                <h5 class="membertitle-re col-6 p-0 d-inline-block">會員資料</h5>
                <h5 class="membertitle-re col-6 d-md-none p-0 d-inline-block">修改密碼</h5>
                </div>
                <form name='form1-re' class="padding225-re" onsubmit=" checkForm(); return false;">  
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
                        <div class="address-re d-flex flex-wrap">
                            <div class="form-group d-inline-block col-6 col-md-2 p-0">
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
                            <div class="form-group d-inline-block col-6 col-md-2 p-0">
                                <select class="select-re" name="district" id="district">
                                    <option class="option-re text-16-re" value="0">中正區</option>
                                    <option value="1">板橋區</option>
                                    <option value="2">仁愛區</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-4 d-inline-block p-0">
                                <input class="input-re addressarea-re col-12 col-md-4 noline-re" type="text" placeholder=" 請輸入詳細地址" class="form-control right-0" id="address" name="address">
                            </div>
                        </div>
                        <!-- <input type="text">
                        <textarea class="form-control" id="address" name="address" 
                            cols="30" rows="1"></textarea> -->
                            <!-- textarea /textarea 之間不能換行 裡面的所有值會在頁面上顯示 -->
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label-re text-18-re">信箱帳號<span style="color:#963C38">*</span></label><br>
                        <input class="inputdisabled-re col-8 noline-re" type="text" class="form-control" id="email" name="email" disabled="disabled">
                    </div>
                    <div class="d-flex justify-content-end"><input class="btn-re btn200-re phonewidth330-re mb-3" type="submit" value="儲存"></div>
                    <!-- <button type="submit" class="btn btn200-re">儲存</button> -->
                </form>
            </div>
<!-- p2-password--------------------------------------------------------------------------------------------------------- -->
            <div class="item_re">
                <div class="d-flex tab_phonelist_re">
                    <h5 class="membertitle-re col-6 d-md-none p-0 d-inline-block">會員資料</h5>
                    <h5 class="membertitle-re col-6 p-0 d-inline-block">修改密碼</h5>
                </div>
                <form name='form1-re' class="padding225-re" onsubmit=" checkForm(); return false;">  
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
                    <div class="d-flex justify-content-end"><input class="btn-re btn200-re phonewidth330-re mb-3" type="submit" value="儲存"></div>
                    <!-- <button type="submit" class="btn btn-l">儲存</button> -->
                </form>
            </div>
<!-- p3-like------------------------------------------------------------------------------------------------------------- -->
            <div id="like-page-re" class="item_re">
                <div>
                    <ul class="tab-liketitle-re liketitle-all-re d-flax p-0">
                        <li class="col-3 text-20-re d-inline-block liketitle-re text-center active-re"><a href="#tab01-re">獨家商品</a></li><li class="col-3 text-20-re d-inline-block liketitle-re text-center "><a href="#tab02-re">旅遊行程</a></li><li class="col-3 text-20-re d-inline-block liketitle-re text-center "><a href="#tab03-re">收藏詩籤</a></li><li class="col-3 text-20-re d-inline-block liketitle-re text-center "><a href="#tab04-re">每日運勢</a></li>
                    </ul>
                </div>
    <!-- p3-P------------------------------------------------------------------ -->
                <div id="tab01-re" class="tab-inner-re ">
                    <div class="row my-3 mx-0">
                        <div class="col-6 col-md-4 px-2 pb-3">
                            <div class="card">
                                <div class="position-relative">
                                    <img src="./imgs/購物車-商品(測試用).png" class="card-img-top" alt="">
                                </div>
                                <div class="position-absolute likeicon-re">
                                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path  fill="#CD562F" stroke="#432A0F" d="M15.2855 9.22197C12.9704 6.90689 9.21692 6.90689 6.90184 9.22197C4.58676 11.537 4.58676 15.2905 6.90184 17.6056L13.2503 23.9532C14.8378 25.5407 17.4116 25.5407 18.9991 23.9532L24.5083 18.444L24.5074 18.4431L25.3449 17.6056C27.66 15.2905 27.66 11.5371 25.3449 9.22197C23.0298 6.90689 19.2763 6.90689 16.9612 9.22197L16.1234 10.0598L15.2855 9.22197Z" stroke-width="2.66667"/>
                                    </svg>
                                </div>
                                <div class="card-body-re text-center">
                                    <h5 class="card-title-re text-20-re">台北霞海城隍廟獨家聯名--七夕月老供品組-甜作之盒</h5>
                                    <p class="text-18-re price-re">520</p>
                                    <button class="btn-re btn200-re col-12"  onclick="addToCartRe(event)">加入購物車</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 px-2 pb-3">
                            <div class="card">
                                <div class="position-relative">
                                    <img src="./imgs/購物車-商品(測試用).png" class="card-img-top" alt="">
                                </div>
                                <div class="position-absolute likeicon-re">
                                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path  fill="#CD562F" stroke="#432A0F" d="M15.2855 9.22197C12.9704 6.90689 9.21692 6.90689 6.90184 9.22197C4.58676 11.537 4.58676 15.2905 6.90184 17.6056L13.2503 23.9532C14.8378 25.5407 17.4116 25.5407 18.9991 23.9532L24.5083 18.444L24.5074 18.4431L25.3449 17.6056C27.66 15.2905 27.66 11.5371 25.3449 9.22197C23.0298 6.90689 19.2763 6.90689 16.9612 9.22197L16.1234 10.0598L15.2855 9.22197Z" stroke-width="2.66667"/>
                                    </svg>
                                </div>
                                <div class="card-body-re text-center">
                                    <h5 class="card-title-re text-20-re">台北霞海城隍廟獨家聯名--七夕月老供品組-甜作之盒</h5>
                                    <p class="text-18-re price-re">520</p>
                                    <button class="btn-re btn200-re col-12"  onclick="addToCartRe(event)">加入購物車</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 px-2 pb-3">
                            <div class="card">
                                <div class="position-relative">
                                    <img src="./imgs/購物車-商品(測試用).png" class="card-img-top" alt="">
                                </div>
                                <div class="position-absolute likeicon-re">
                                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="#CD562F" stroke="#432A0F" d="M15.2855 9.22197C12.9704 6.90689 9.21692 6.90689 6.90184 9.22197C4.58676 11.537 4.58676 15.2905 6.90184 17.6056L13.2503 23.9532C14.8378 25.5407 17.4116 25.5407 18.9991 23.9532L24.5083 18.444L24.5074 18.4431L25.3449 17.6056C27.66 15.2905 27.66 11.5371 25.3449 9.22197C23.0298 6.90689 19.2763 6.90689 16.9612 9.22197L16.1234 10.0598L15.2855 9.22197Z" stroke-width="2.66667"/>
                                    </svg>
                                </div>
                                <div class="card-body-re text-center">
                                    <h5 class="card-title-re text-20-re">台北霞海城隍廟獨家聯名--七夕月老供品組-甜作之盒</h5>
                                    <p class="text-18-re price-re">520</p>
                                    <button class="btn-re btn200-re col-12"  onclick="addToCartRe(event)">加入購物車</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 px-2">
                            <div class="card">
                                <div class="position-relative">
                                    <img src="./imgs/購物車-商品(測試用).png" class="card-img-top" alt="">
                                </div>
                                <div class="position-absolute likeicon-re">
                                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="#CD562F" stroke="#432A0F" d="M15.2855 9.22197C12.9704 6.90689 9.21692 6.90689 6.90184 9.22197C4.58676 11.537 4.58676 15.2905 6.90184 17.6056L13.2503 23.9532C14.8378 25.5407 17.4116 25.5407 18.9991 23.9532L24.5083 18.444L24.5074 18.4431L25.3449 17.6056C27.66 15.2905 27.66 11.5371 25.3449 9.22197C23.0298 6.90689 19.2763 6.90689 16.9612 9.22197L16.1234 10.0598L15.2855 9.22197Z" stroke-width="2.66667"/>
                                    </svg>
                                </div>
                                <div class="card-body-re text-center">
                                    <h5 class="card-title-re text-20-re">台北霞海城隍廟獨家聯名--七夕月老供品組-甜作之盒</h5>
                                    <p class="text-18-re price-re">520</p>
                                    <button class="btn-re btn200-re col-12"  onclick="addToCartRe(event)">加入購物車</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 px-2">
                            <div class="card">
                                <div class="position-relative">
                                    <img src="./imgs/購物車-商品(測試用).png" class="card-img-top" alt="">
                                </div>
                                <div class="position-absolute likeicon-re">
                                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="#CD562F" stroke="#432A0F" d="M15.2855 9.22197C12.9704 6.90689 9.21692 6.90689 6.90184 9.22197C4.58676 11.537 4.58676 15.2905 6.90184 17.6056L13.2503 23.9532C14.8378 25.5407 17.4116 25.5407 18.9991 23.9532L24.5083 18.444L24.5074 18.4431L25.3449 17.6056C27.66 15.2905 27.66 11.5371 25.3449 9.22197C23.0298 6.90689 19.2763 6.90689 16.9612 9.22197L16.1234 10.0598L15.2855 9.22197Z" stroke-width="2.66667"/>
                                    </svg>
                                </div>
                                <div class="card-body-re text-center">
                                    <h5 class="card-title-re text-20-re">台北霞海城隍廟獨家聯名--七夕月老供品組-甜作之盒</h5>
                                    <p class="text-18-re price-re">520</p>
                                    <button class="btn-re btn200-re col-12"  onclick="addToCartRe(event)">加入購物車</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 px-2">
                            <div class="card">
                                <div class="position-relative">
                                    <img src="./imgs/購物車-商品(測試用).png" class="card-img-top" alt="">
                                </div>
                                <div class="position-absolute likeicon-re">
                                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="#CD562F" stroke="#432A0F" d="M15.2855 9.22197C12.9704 6.90689 9.21692 6.90689 6.90184 9.22197C4.58676 11.537 4.58676 15.2905 6.90184 17.6056L13.2503 23.9532C14.8378 25.5407 17.4116 25.5407 18.9991 23.9532L24.5083 18.444L24.5074 18.4431L25.3449 17.6056C27.66 15.2905 27.66 11.5371 25.3449 9.22197C23.0298 6.90689 19.2763 6.90689 16.9612 9.22197L16.1234 10.0598L15.2855 9.22197Z" stroke-width="2.66667"/>
                                    </svg>
                                </div>
                                <div class="card-body-re text-center">
                                    <h5 class="card-title-re text-20-re">台北霞海城隍廟獨家聯名--七夕月老供品組-甜作之盒</h5>
                                    <p class="text-18-re price-re">520</p>
                                    <button class="btn-re btn200-re col-12"  onclick="addToCartRe(event)">加入購物車</button>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="pagebtngroup-re text-center">
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
    <!-- p3-T------------------------------------------------------------------ -->
                <div id="tab02-re" class="tab-inner-re">
                <div class="row my-3 mx-0">
                        <div class="col-6 col-md-4 px-2 pb-3">
                            <div class="card">
                                <div class="position-relative">
                                    <img src="./imgs/購物車-行程(測試用).png" class="card-img-top" alt="">
                                </div>
                                <div class="position-absolute likeicon-re">
                                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="#CD562F" stroke="#432A0F" d="M15.2855 9.22197C12.9704 6.90689 9.21692 6.90689 6.90184 9.22197C4.58676 11.537 4.58676 15.2905 6.90184 17.6056L13.2503 23.9532C14.8378 25.5407 17.4116 25.5407 18.9991 23.9532L24.5083 18.444L24.5074 18.4431L25.3449 17.6056C27.66 15.2905 27.66 11.5371 25.3449 9.22197C23.0298 6.90689 19.2763 6.90689 16.9612 9.22197L16.1234 10.0598L15.2855 9.22197Z" stroke-width="2.66667"/>
                                    </svg>
                                </div>
                                <div class="card-body-re text-center">
                                    <h5 class="card-title-re text-20-re">台北霞海城隍廟獨家行程一日遊</h5>
                                    <p class="text-18-re price-re">5520</p>
                                    <button class="btn-re btn200-re col-12"  onclick="addToCartRe(event)">加入購物車</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 px-2 pb-3">
                            <div class="card">
                                <div class="position-relative">
                                    <img src="./imgs/購物車-行程(測試用).png" class="card-img-top" alt="">
                                </div>
                                <div class="position-absolute likeicon-re">
                                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="#CD562F" stroke="#432A0F" d="M15.2855 9.22197C12.9704 6.90689 9.21692 6.90689 6.90184 9.22197C4.58676 11.537 4.58676 15.2905 6.90184 17.6056L13.2503 23.9532C14.8378 25.5407 17.4116 25.5407 18.9991 23.9532L24.5083 18.444L24.5074 18.4431L25.3449 17.6056C27.66 15.2905 27.66 11.5371 25.3449 9.22197C23.0298 6.90689 19.2763 6.90689 16.9612 9.22197L16.1234 10.0598L15.2855 9.22197Z" stroke-width="2.66667"/>
                                    </svg>
                                </div>
                                <div class="card-body-re text-center">
                                    <h5 class="card-title-re text-20-re">台北霞海城隍廟獨家行程一日遊</h5>
                                    <p class="text-18-re price-re">5520</p>
                                    <button class="btn-re btn200-re col-12"  onclick="addToCartRe(event)">加入購物車</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-6  col-md-4 px-2 pb-3">
                            <div class="card">
                                <div class="position-relative">
                                    <img src="./imgs/購物車-行程(測試用).png" class="card-img-top" alt="">
                                </div>
                                <div class="position-absolute likeicon-re">
                                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="#CD562F" stroke="#432A0F" d="M15.2855 9.22197C12.9704 6.90689 9.21692 6.90689 6.90184 9.22197C4.58676 11.537 4.58676 15.2905 6.90184 17.6056L13.2503 23.9532C14.8378 25.5407 17.4116 25.5407 18.9991 23.9532L24.5083 18.444L24.5074 18.4431L25.3449 17.6056C27.66 15.2905 27.66 11.5371 25.3449 9.22197C23.0298 6.90689 19.2763 6.90689 16.9612 9.22197L16.1234 10.0598L15.2855 9.22197Z" stroke-width="2.66667"/>
                                    </svg>
                                </div>
                                <div class="card-body-re text-center">
                                    <h5 class="card-title-re text-20-re">台北霞海城隍廟獨家行程一日遊</h5>
                                    <p class="text-18-re price-re">5520</p>
                                    <button class="btn-re btn200-re col-12"  onclick="addToCartRe(event)">加入購物車</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-6  col-md-4 px-2">
                            <div class="card">
                                <div class="position-relative">
                                    <img src="./imgs/購物車-行程(測試用).png" class="card-img-top" alt="">
                                </div>
                                <div class="position-absolute likeicon-re">
                                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="#CD562F" stroke="#432A0F" d="M15.2855 9.22197C12.9704 6.90689 9.21692 6.90689 6.90184 9.22197C4.58676 11.537 4.58676 15.2905 6.90184 17.6056L13.2503 23.9532C14.8378 25.5407 17.4116 25.5407 18.9991 23.9532L24.5083 18.444L24.5074 18.4431L25.3449 17.6056C27.66 15.2905 27.66 11.5371 25.3449 9.22197C23.0298 6.90689 19.2763 6.90689 16.9612 9.22197L16.1234 10.0598L15.2855 9.22197Z" stroke-width="2.66667"/>
                                    </svg>
                                </div>
                                <div class="card-body-re text-center">
                                    <h5 class="card-title-re text-20-re">台北霞海城隍廟獨家行程一日遊</h5>
                                    <p class="text-18-re price-re">5520</p>
                                    <button class="btn-re btn200-re col-12"  onclick="addToCartRe(event)">加入購物車</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 px-2">
                            <div class="card">
                                <div class="position-relative">
                                    <img src="./imgs/購物車-行程(測試用).png" class="card-img-top" alt="">
                                </div>
                                <div class="position-absolute likeicon-re">
                                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="#CD562F" stroke="#432A0F" d="M15.2855 9.22197C12.9704 6.90689 9.21692 6.90689 6.90184 9.22197C4.58676 11.537 4.58676 15.2905 6.90184 17.6056L13.2503 23.9532C14.8378 25.5407 17.4116 25.5407 18.9991 23.9532L24.5083 18.444L24.5074 18.4431L25.3449 17.6056C27.66 15.2905 27.66 11.5371 25.3449 9.22197C23.0298 6.90689 19.2763 6.90689 16.9612 9.22197L16.1234 10.0598L15.2855 9.22197Z" stroke-width="2.66667"/>
                                    </svg>
                                </div>
                                <div class="card-body-re text-center">
                                    <h5 class="card-title-re text-20-re">台北霞海城隍廟獨家行程一日遊</h5>
                                    <p class="text-18-re price-re">5520</p>
                                    <button class="btn-re btn200-re col-12"  onclick="addToCartRe(event)">加入購物車</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 px-2">
                            <div class="card">
                                <div class="position-relative">
                                    <img src="./imgs/購物車-行程(測試用).png" class="card-img-top" alt="">
                                </div>
                                <div class="position-absolute likeicon-re">
                                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="#CD562F" stroke="#432A0F" d="M15.2855 9.22197C12.9704 6.90689 9.21692 6.90689 6.90184 9.22197C4.58676 11.537 4.58676 15.2905 6.90184 17.6056L13.2503 23.9532C14.8378 25.5407 17.4116 25.5407 18.9991 23.9532L24.5083 18.444L24.5074 18.4431L25.3449 17.6056C27.66 15.2905 27.66 11.5371 25.3449 9.22197C23.0298 6.90689 19.2763 6.90689 16.9612 9.22197L16.1234 10.0598L15.2855 9.22197Z" stroke-width="2.66667"/>
                                    </svg>
                                </div>
                                <div class="card-body-re text-center">
                                    <h5 class="card-title-re text-20-re">台北霞海城隍廟獨家行程一日遊</h5>
                                    <p class="text-18-re price-re">5520</p>
                                    <button class="btn-re btn200-re col-12"  onclick="addToCartRe(event)">加入購物車</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pagebtngroup-re text-center">
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
                    <div class="row mb-3 mx-0">
                        <div class="col-12 col-md-4 likecard-re position-relative">
                            <img class="w-100" src="./imgs/testre.jpg" alt="">
                            <div class="position-absolute likeicon2-re">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="#CD562F" stroke="#432A0F" d="M15.2855 9.22197C12.9704 6.90689 9.21692 6.90689 6.90184 9.22197C4.58676 11.537 4.58676 15.2905 6.90184 17.6056L13.2503 23.9532C14.8378 25.5407 17.4116 25.5407 18.9991 23.9532L24.5083 18.444L24.5074 18.4431L25.3449 17.6056C27.66 15.2905 27.66 11.5371 25.3449 9.22197C23.0298 6.90689 19.2763 6.90689 16.9612 9.22197L16.1234 10.0598L15.2855 9.22197Z" stroke-width="2.66667"/>
                                </svg>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 likecard-re position-relative">
                            <img class="w-100" src="./imgs/testre.jpg" alt="">
                            <div class="position-absolute likeicon2-re">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="#CD562F" stroke="#432A0F" d="M15.2855 9.22197C12.9704 6.90689 9.21692 6.90689 6.90184 9.22197C4.58676 11.537 4.58676 15.2905 6.90184 17.6056L13.2503 23.9532C14.8378 25.5407 17.4116 25.5407 18.9991 23.9532L24.5083 18.444L24.5074 18.4431L25.3449 17.6056C27.66 15.2905 27.66 11.5371 25.3449 9.22197C23.0298 6.90689 19.2763 6.90689 16.9612 9.22197L16.1234 10.0598L15.2855 9.22197Z" stroke-width="2.66667"/>
                                </svg>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 likecard-re position-relative">
                            <img class="w-100" src="./imgs/testre.jpg" alt="">
                            <div class="position-absolute likeicon2-re">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="#CD562F" stroke="#432A0F" d="M15.2855 9.22197C12.9704 6.90689 9.21692 6.90689 6.90184 9.22197C4.58676 11.537 4.58676 15.2905 6.90184 17.6056L13.2503 23.9532C14.8378 25.5407 17.4116 25.5407 18.9991 23.9532L24.5083 18.444L24.5074 18.4431L25.3449 17.6056C27.66 15.2905 27.66 11.5371 25.3449 9.22197C23.0298 6.90689 19.2763 6.90689 16.9612 9.22197L16.1234 10.0598L15.2855 9.22197Z" stroke-width="2.66667"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="pagebtngroup-re text-center">
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
                    <div class="row mb-3 mx-0">
                    <div class="col-12 col-md-4 likecard-re position-relative">
                        <img class="w-100" src="./imgs/testre.jpg" alt="">
                        <div class="position-absolute likeicon2-re">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill="#CD562F" stroke="#432A0F" d="M15.2855 9.22197C12.9704 6.90689 9.21692 6.90689 6.90184 9.22197C4.58676 11.537 4.58676 15.2905 6.90184 17.6056L13.2503 23.9532C14.8378 25.5407 17.4116 25.5407 18.9991 23.9532L24.5083 18.444L24.5074 18.4431L25.3449 17.6056C27.66 15.2905 27.66 11.5371 25.3449 9.22197C23.0298 6.90689 19.2763 6.90689 16.9612 9.22197L16.1234 10.0598L15.2855 9.22197Z" stroke-width="2.66667"/>
                            </svg>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 likecard-re position-relative">
                        <img class="w-100" src="./imgs/testre.jpg" alt="">
                        <div class="position-absolute likeicon2-re">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill="#CD562F" stroke="#432A0F" d="M15.2855 9.22197C12.9704 6.90689 9.21692 6.90689 6.90184 9.22197C4.58676 11.537 4.58676 15.2905 6.90184 17.6056L13.2503 23.9532C14.8378 25.5407 17.4116 25.5407 18.9991 23.9532L24.5083 18.444L24.5074 18.4431L25.3449 17.6056C27.66 15.2905 27.66 11.5371 25.3449 9.22197C23.0298 6.90689 19.2763 6.90689 16.9612 9.22197L16.1234 10.0598L15.2855 9.22197Z" stroke-width="2.66667"/>
                            </svg>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 likecard-re position-relative">
                        <img class="w-100" src="./imgs/testre.jpg" alt="">
                        <div class="position-absolute likeicon2-re">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill="#CD562F" stroke="#432A0F" d="M15.2855 9.22197C12.9704 6.90689 9.21692 6.90689 6.90184 9.22197C4.58676 11.537 4.58676 15.2905 6.90184 17.6056L13.2503 23.9532C14.8378 25.5407 17.4116 25.5407 18.9991 23.9532L24.5083 18.444L24.5074 18.4431L25.3449 17.6056C27.66 15.2905 27.66 11.5371 25.3449 9.22197C23.0298 6.90689 19.2763 6.90689 16.9612 9.22197L16.1234 10.0598L15.2855 9.22197Z" stroke-width="2.66667"/>
                            </svg>
                        </div>
                    </div>
                    </div>
                    <div class="pagebtngroup-re text-center">
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
<!-- p4-orderlist-------------------------------------------------------------------------------------------------------- -->
            <div id="orderlist-page-re" class="item_re">
                <ul class="ordertab-title-re liketitle-all-re d-flax p-0">
                    <li class="col-6 d-inline-block liketitle-re text-20-re text-center active-re"><a class="active activetext-re" href="#tab05-re">獨家商品</a></li><li class="col-6 d-inline-block liketitle-re text-20-re text-center "><a href="#tab06-re">旅遊行程</a></li>
                </ul>
    <!-- p4-P------------------------------------------------------------------ -->
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
                                <td class="text-16-re">2022/09/07</td>
                                <td class="text-16-re">OR202209071200</td>
                                <td class="text-16-re price-re">520</td>
                                <td class="text-16-re">訂單完成</td>
                                <td class="orderbtn-re">
                                    查詢訂單
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4 9L11.3415 15.4238C11.7185 15.7537 12.2815 15.7537 12.6585 15.4238L20 9" stroke="#432A0F" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round"/>
                                    </svg>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="slide-re px-3 py-3">
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
                                    <td class="orderimgwarp-re"><img src="./imgs/購物車-商品(測試用).png" alt=""></td>
                                    <td class="text-16-re">台北霞海城隍廟獨家聯名--七夕月老供品組-甜作之盒</td>
                                    <td class="text-16-re">紅</td>
                                    <td class="ext-16-re price-re">520</td>
                                    <td class="text-16-re">1</td>
                                    <td class="ext-16-re price-re">520</td>
                                    <td><button id="evaluation-btn-re" class="btn-re ext-16-re py-2">給予評價</button></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="d-flex pt-3">
                            <div class="col-6 px-3">
                                <table class="w-100">
                                    <tr>
                                        <th colspan="2" class="text-16-re text-center">收件人資訊</th>
                                    </tr>
                                    <tr>
                                        <th class="text-16-re w-25">收件人姓名</th>
                                        <td class="text-16-re">皮卡丘</td>
                                    </tr>
                                    <tr>
                                        <th class="text-16-re">收件人電話</th>
                                        <td class="text-16-re">0987654321</td>
                                    </tr>
                                    <tr>
                                        <th class="text-16-re">收件人地址</th>
                                        <td class="text-16-re">xxxxxxxxxxxxxxxxxxxx</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-6 px-3">
                                <table class="w-100">
                                    <tr>
                                        <th colspan="2" class="text-16-re text-center">物流及付款資訊</th>
                                    </tr>
                                    <tr>
                                        <th class="text-16-re w-25">收件方式</th>
                                        <td class="text-16-re">宅配</td>
                                    </tr>
                                    <tr>
                                        <th class="text-16-re">付款方式</th>
                                        <td class="text-16-re">信用卡</td>
                                    </tr>
                                    <tr>
                                        <th class="text-16-re">付款狀態</th>
                                        <td class="text-16-re">訂單完成</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="slide2-re px-3 py-3">
                        <div class="ordercross-re d-inline-block position-absolute">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.66663 6.66666L25.3333 25.3333" stroke="#432A0F" stroke-width="2.66667" stroke-linecap="round"/>
                                <path d="M25.3333 6.66666L6.66659 25.3333" stroke="#432A0F" stroke-width="2.66667" stroke-linecap="round"/>
                            </svg>
                        </div>
                        <h6 class="mb-3 position-relative">請給這次的體驗打個分數吧！</h6>
                            <div class="pb-3">
                                <svg class="star-re mx-1" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#E5A62A" stroke-width="2.66667" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.7617 3.3816C12.9756 1.88483 10.6717 1.99174 10.1024 3.70234L8.69513 7.93109H4.27626C2.32724 7.93109 1.52943 10.4347 3.1191 11.5623L6.65256 14.0689L5.27732 18.2013C4.66691 20.0356 6.75544 21.5826 8.33216 20.4641L12.0001 17.8622L15.668 20.4641C17.2447 21.5826 19.3333 20.0356 18.7228 18.2013L17.3476 14.0689L20.8811 11.5623C22.4707 10.4347 21.6729 7.93109 19.7239 7.93109H15.305L13.8978 3.70234C13.8598 3.5883 13.8141 3.48139 13.7617 3.3816Z"/>
                                </svg>
                                <svg class="star-re  mx-1" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#E5A62A" stroke-width="2.66667" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.7617 3.3816C12.9756 1.88483 10.6717 1.99174 10.1024 3.70234L8.69513 7.93109H4.27626C2.32724 7.93109 1.52943 10.4347 3.1191 11.5623L6.65256 14.0689L5.27732 18.2013C4.66691 20.0356 6.75544 21.5826 8.33216 20.4641L12.0001 17.8622L15.668 20.4641C17.2447 21.5826 19.3333 20.0356 18.7228 18.2013L17.3476 14.0689L20.8811 11.5623C22.4707 10.4347 21.6729 7.93109 19.7239 7.93109H15.305L13.8978 3.70234C13.8598 3.5883 13.8141 3.48139 13.7617 3.3816Z"/>
                                </svg>
                                <svg class="star-re  mx-1" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#E5A62A" stroke-width="2.66667" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.7617 3.3816C12.9756 1.88483 10.6717 1.99174 10.1024 3.70234L8.69513 7.93109H4.27626C2.32724 7.93109 1.52943 10.4347 3.1191 11.5623L6.65256 14.0689L5.27732 18.2013C4.66691 20.0356 6.75544 21.5826 8.33216 20.4641L12.0001 17.8622L15.668 20.4641C17.2447 21.5826 19.3333 20.0356 18.7228 18.2013L17.3476 14.0689L20.8811 11.5623C22.4707 10.4347 21.6729 7.93109 19.7239 7.93109H15.305L13.8978 3.70234C13.8598 3.5883 13.8141 3.48139 13.7617 3.3816Z"/>
                                </svg>
                                <svg class="star-re  mx-1" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#E5A62A" stroke-width="2.66667" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.7617 3.3816C12.9756 1.88483 10.6717 1.99174 10.1024 3.70234L8.69513 7.93109H4.27626C2.32724 7.93109 1.52943 10.4347 3.1191 11.5623L6.65256 14.0689L5.27732 18.2013C4.66691 20.0356 6.75544 21.5826 8.33216 20.4641L12.0001 17.8622L15.668 20.4641C17.2447 21.5826 19.3333 20.0356 18.7228 18.2013L17.3476 14.0689L20.8811 11.5623C22.4707 10.4347 21.6729 7.93109 19.7239 7.93109H15.305L13.8978 3.70234C13.8598 3.5883 13.8141 3.48139 13.7617 3.3816Z"/>
                                </svg>
                                <svg class="star-re  mx-1" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#E5A62A" stroke-width="2.66667" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.7617 3.3816C12.9756 1.88483 10.6717 1.99174 10.1024 3.70234L8.69513 7.93109H4.27626C2.32724 7.93109 1.52943 10.4347 3.1191 11.5623L6.65256 14.0689L5.27732 18.2013C4.66691 20.0356 6.75544 21.5826 8.33216 20.4641L12.0001 17.8622L15.668 20.4641C17.2447 21.5826 19.3333 20.0356 18.7228 18.2013L17.3476 14.0689L20.8811 11.5623C22.4707 10.4347 21.6729 7.93109 19.7239 7.93109H15.305L13.8978 3.70234C13.8598 3.5883 13.8141 3.48139 13.7617 3.3816Z"/>
                                </svg>
                            </div>
                        <p class="">請告訴我們您的想法</p>
                        <textarea class="evaluation-textarea-re" cols="121" rows="3" maxlength="250" style="OVERFLOW:hidden"></textarea>
                        <div class="d-flex py-2">
                            <div id="tag-re" class="tag-re text-14-re px-2 mr-2">出貨超快速</div>
                            <div id="tag-re" class="tag-re text-14-re px-2 mr-2">ＣＰ值超高</div>
                            <div id="tag-re" class="tag-re text-14-re px-2 mr-2">商品超可愛</div>
                            <div id="tag-re" class="tag-re text-14-re px-2 mr-2">商品品質爆表</div>
                            <div id="tag-re" class="tag-re text-14-re px-2 mr-2">服務態度超好</div>
                        </div>
                        <div class="d-flex justify-content-end"><input class="btn-re btn200-re" type="submit" value="儲存"></div>
                    </div>
                </div>
    <!-- p4-T------------------------------------------------------------------ -->
                <div id="tab06-re" class="ordertab-inner-re">
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
                                <td class="text-16-re">2022/09/05</td>
                                <td class="text-16-re">OR202209052000</td>
                                <td class="text-16-re price-re">5220</td>
                                <td class="text-16-re">訂單完成</td>
                                <td class="orderbtn02-re">
                                    查詢訂單
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4 9L11.3415 15.4238C11.7185 15.7537 12.2815 15.7537 12.6585 15.4238L20 9" stroke="#432A0F" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round"/>
                                    </svg>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="rightslide01-re px-3 py-3">
                        <table class="tablehover text-center w-100" >
                            <thead class="">
                                <tr class="orderlist-title-re">
                                    <th class="col-2 text-18-re">行程圖片</th>
                                    <th class="col-2 text-18-re">行程名稱</th>
                                    <th class="col-1 text-18-re">單價</th>
                                    <th class="col-1 text-18-re">數量</th>
                                    <th class="col-1 text-18-re">小計</th>
                                    <th class="col-1 text-18-re"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="orderlist-re">
                                    <td class="orderimgwarp-re"><img src="./imgs/購物車-行程(測試用).png" alt=""></td>
                                    <td class="text-16-re">台北霞海城隍廟獨家行程一日遊</td>
                                    <td class="ext-16-re price-re">5220</td>
                                    <td class="text-16-re">1</td>
                                    <td class="ext-16-re price-re">5220</td>
                                    <td><button id="evaluation02-btn-re" class="btn-re ext-16-re py-2">給予評價</button></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="d-flex pt-3">
                            <div class="col-6 px-3">
                                <table class="w-100">
                                    <tr>
                                        <th colspan="2" class="text-16-re text-center">收件人資訊</th>
                                    </tr>
                                    <tr>
                                        <th class="text-16-re w-25">收件人姓名</th>
                                        <td class="text-16-re">皮卡丘</td>
                                    </tr>
                                    <tr>
                                        <th class="text-16-re">收件人電話</th>
                                        <td class="text-16-re">0987654321</td>
                                    </tr>
                                    <tr>
                                        <th class="text-16-re">收件人地址</th>
                                        <td class="text-16-re">xxxxxxxxxxxxxxxxxxxx</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-6 px-3">
                                <table class="w-100">
                                    <tr>
                                        <th colspan="2" class="text-16-re text-center">物流及付款資訊</th>
                                    </tr>
                                    <tr>
                                        <th class="text-16-re w-25">付款方式</th>
                                        <td class="text-16-re">信用卡</td>
                                    </tr>
                                    <tr>
                                        <th class="text-16-re">付款狀態</th>
                                        <td class="text-16-re">訂單完成</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="rightslide02-re px-3 py-3">
                        <div class="ordercross-re d-inline-block position-absolute">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.66663 6.66666L25.3333 25.3333" stroke="#432A0F" stroke-width="2.66667" stroke-linecap="round"/>
                                <path d="M25.3333 6.66666L6.66659 25.3333" stroke="#432A0F" stroke-width="2.66667" stroke-linecap="round"/>
                            </svg>
                        </div>
                        <h6 class="mb-3 position-relative">請給這次的體驗打個分數吧！</h6>
                            <div class="pb-3">
                                <svg class="rightstar-re mx-1" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#E5A62A" stroke-width="2.66667"  xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.7617 3.3816C12.9756 1.88483 10.6717 1.99174 10.1024 3.70234L8.69513 7.93109H4.27626C2.32724 7.93109 1.52943 10.4347 3.1191 11.5623L6.65256 14.0689L5.27732 18.2013C4.66691 20.0356 6.75544 21.5826 8.33216 20.4641L12.0001 17.8622L15.668 20.4641C17.2447 21.5826 19.3333 20.0356 18.7228 18.2013L17.3476 14.0689L20.8811 11.5623C22.4707 10.4347 21.6729 7.93109 19.7239 7.93109H15.305L13.8978 3.70234C13.8598 3.5883 13.8141 3.48139 13.7617 3.3816Z"/>
                                </svg>
                                <svg class="rightstar-re  mx-1" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#E5A62A" stroke-width="2.66667" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.7617 3.3816C12.9756 1.88483 10.6717 1.99174 10.1024 3.70234L8.69513 7.93109H4.27626C2.32724 7.93109 1.52943 10.4347 3.1191 11.5623L6.65256 14.0689L5.27732 18.2013C4.66691 20.0356 6.75544 21.5826 8.33216 20.4641L12.0001 17.8622L15.668 20.4641C17.2447 21.5826 19.3333 20.0356 18.7228 18.2013L17.3476 14.0689L20.8811 11.5623C22.4707 10.4347 21.6729 7.93109 19.7239 7.93109H15.305L13.8978 3.70234C13.8598 3.5883 13.8141 3.48139 13.7617 3.3816Z"/>
                                </svg>
                                <svg class="rightstar-re  mx-1" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#E5A62A" stroke-width="2.66667" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.7617 3.3816C12.9756 1.88483 10.6717 1.99174 10.1024 3.70234L8.69513 7.93109H4.27626C2.32724 7.93109 1.52943 10.4347 3.1191 11.5623L6.65256 14.0689L5.27732 18.2013C4.66691 20.0356 6.75544 21.5826 8.33216 20.4641L12.0001 17.8622L15.668 20.4641C17.2447 21.5826 19.3333 20.0356 18.7228 18.2013L17.3476 14.0689L20.8811 11.5623C22.4707 10.4347 21.6729 7.93109 19.7239 7.93109H15.305L13.8978 3.70234C13.8598 3.5883 13.8141 3.48139 13.7617 3.3816Z"/>
                                </svg>
                                <svg class="rightstar-re  mx-1" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#E5A62A" stroke-width="2.66667" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.7617 3.3816C12.9756 1.88483 10.6717 1.99174 10.1024 3.70234L8.69513 7.93109H4.27626C2.32724 7.93109 1.52943 10.4347 3.1191 11.5623L6.65256 14.0689L5.27732 18.2013C4.66691 20.0356 6.75544 21.5826 8.33216 20.4641L12.0001 17.8622L15.668 20.4641C17.2447 21.5826 19.3333 20.0356 18.7228 18.2013L17.3476 14.0689L20.8811 11.5623C22.4707 10.4347 21.6729 7.93109 19.7239 7.93109H15.305L13.8978 3.70234C13.8598 3.5883 13.8141 3.48139 13.7617 3.3816Z"/>
                                </svg>
                                <svg class="rightstar-re  mx-1" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#E5A62A" stroke-width="2.66667" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.7617 3.3816C12.9756 1.88483 10.6717 1.99174 10.1024 3.70234L8.69513 7.93109H4.27626C2.32724 7.93109 1.52943 10.4347 3.1191 11.5623L6.65256 14.0689L5.27732 18.2013C4.66691 20.0356 6.75544 21.5826 8.33216 20.4641L12.0001 17.8622L15.668 20.4641C17.2447 21.5826 19.3333 20.0356 18.7228 18.2013L17.3476 14.0689L20.8811 11.5623C22.4707 10.4347 21.6729 7.93109 19.7239 7.93109H15.305L13.8978 3.70234C13.8598 3.5883 13.8141 3.48139 13.7617 3.3816Z"/>
                                </svg>
                            </div>
                        <p class="">請告訴我們您的想法</p>
                        <textarea class="evaluation-textarea-re" cols="121" rows="3" maxlength="250" style="OVERFLOW:hidden"></textarea>
                        <div class="d-flex py-2">
                            <div id="tag-re" class="tag-re text-14-re px-2 mr-2">出貨超快速</div>
                            <div id="tag-re" class="tag-re text-14-re px-2 mr-2">ＣＰ值超高</div>
                            <div id="tag-re" class="tag-re text-14-re px-2 mr-2">商品超可愛</div>
                            <div id="tag-re" class="tag-re text-14-re px-2 mr-2">商品品質爆表</div>
                            <div id="tag-re" class="tag-re text-14-re px-2 mr-2">服務態度超好</div>
                        </div>
                        <div class="d-flex justify-content-end"><input class="btn-re btn200-re" type="submit" value="儲存"></div>
                    </div>
                </div>
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
    //手機會員/修改
    $(function(){
		$(".tab_phonelist_re h5").click(function(){
			$(this).addClass("current_re").siblings().removeClass("current_re");
			var index = $(this).index();
			$(".tab_con_re .item_re").eq(index).show().siblings().hide();
		})
	})
    // like標籤切換
    $(function(){
    let $li = $('ul.tab-liketitle-re li');
        $($li. eq(0) .addClass('active-re').find('a').attr('href')).siblings('.tab-inner-re').hide();
    
        $li.click(function(){
            $($(this).find('a'). attr ('href')).show().siblings ('.tab-inner-re').hide();
            $(this).addClass('active-re'). siblings ('.active-re').removeClass('active-re');
        });
    });
    // order標籤切換
    $(function(){
    let $li = $('ul.ordertab-title-re li');
        $($li. eq(0) .addClass('active-re').find('a').attr('href')).siblings('.ordertab-inner-re').hide();
    
        $li.click(function(){
            $($(this).find('a'). attr ('href')).show().siblings ('.ordertab-inner-re').hide();
            $(this).addClass('active-re'). siblings ('.active-re').removeClass('active-re');
        });
    });
    // 查詢訂單
    $('.orderbtn-re').click(function(){
        $('.slide-re').slideToggle('normal');
        $('.slide2-re').slideUp('normal');
    })
    $('.orderbtn02-re').click(function(){
        $('.rightslide01-re').slideToggle('normal');
        $('.rightslide02-re').slideUp('normal');
    })
    // 給予評價
    $('#evaluation-btn-re').click(function(){
        $('.slide-re').slideUp('normal');
        $('.slide2-re').slideDown('normal');
    })
    $('#evaluation02-btn-re').click(function(){
        $('.rightslide01-re').slideUp('normal');
        $('.rightslide02-re').slideDown('normal');
    })
    // 星星
    $('.star-re').click(function(){
        console.log('hi',$(this).index());
        for(let i = 0; i < 5; i++ ){
            const color = ($(this).index() >= i)? '#E5A62A' : 'none';
            // let color1 ;
            // if($(this).index() >= i){
            //     color1 = yellow
            // }
            // else{
            //     color1 = none 
            // }
            $('.star-re').eq(i).css('fill',color)
        }
        // if($(this).index() === 0){
        //     $('.star-re').eq(0).css('fill','#E5A62A')
        //     $('.star-re').eq(1).css('fill','none')
        //     $('.star-re').eq(2).css('fill','none')
        //     $('.star-re').eq(3).css('fill','none')
        //     $('.star-re').eq(4).css('fill','none')
        // }
    })
    $('.rightstar-re').click(function(){
        console.log('hi',$(this).index());
        for(let i = 0; i < 5; i++ ){
            const color = ($(this).index() >= i)? '#E5A62A' : 'none';
            $('.rightstar-re').eq(i).css('fill',color)
        }
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
        //console.log('districtData:', districtData.length);
        $('#district').empty();
        $(districtData).each(function (index, item) {
        console.log('JQ item:', item);
        console.log('JQ index:', index);
        $('#district').append(`<option value="${index}">${item}</option>`)
        })
    });
    

</script>

<?php include __DIR__. '/parts/html-foot.php'; ?>
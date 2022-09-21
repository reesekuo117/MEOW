<?php
require __DIR__ . '/parts/meow_db.php';  // /開頭
$pageName = 'home'; //頁面名稱
?>

<?php include __DIR__ . '/parts/html-head.php'; ?>
<link rel="stylesheet" href="./product_list_style.css">
<?php include __DIR__ . '/parts/navbar.php'; ?>
<div class="product_list_07">
    <div class="product_search d-flex">
        <div class="search_bar">
            <h3>月老喵精選商品</h3>
            <!-- <div class="input_search d-flex">
                        <input type="text" placeholder="請輸入關鍵字搜尋">
                        
                        
                        <div class="btn">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </div>
                    </div> -->
            <!-- TODO: 救命關鍵字功能要怎麼寫→套PHP -->
            <!-- https://webdesign.tutsplus.com/zh-hant/tutorials/css-experiments-with-a-search-form-input-and-button--cms-22069 -->
            <div class="input_search">
                <div class="container-1">
                    <span class="icon"><i class="fa fa-search"></i></span>
                    <input type="search" id="search" placeholder="請輸入關鍵字搜尋" />
                </div>
            </div>
            <div class="search_btn">
                <button>#手鍊</button>
                <button>#霞海</button>
                <button>#祈願</button>
            </div>
        </div>
    </div>
    <!-- -----------------------------------搜尋欄結束------------------------------------ -->

    <!-- 桌機版排序 -->
    <div class="sort d-md-block d-none">
        <div class="container">
            <div class="product_sort d-md-flex justify-content-center align-items-center">
                <!-- <div class="col"></div> -->
                <div class="col offset-1">
                    <!-- 用a連結記得JQ要加e.preventDefault(); -->
                    <p style="color: var(--color-text87);"><i class="fa-regular fa-hourglass-half px-1"></i>排序方式</p>
                </div>
                <div class="col">
                    <a href="#">
                        <p>最新上架</p>
                    </a>
                </div>
                <div class="col">
                    <a href="#">
                        <p>熱門程度</p>
                    </a>
                </div>
                <div class="col">
                    <a href="#">
                        <p>價格高 → 低</p>
                    </a>
                </div>
                <div class="col">
                    <a href="#">
                        <p>價格低 → 高</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- 手機版排序 -->
    <div class="sort_mb d-block d-md-none">
        <div class="container">
            <div class="product_sort d-flex justify-content-around align-items-center">
                <!-- <div class="col"></div> -->
                <div class="col px-2">
                    <button class="psort_mb">
                        <small class="mb-0"><i class="fa-regular fa-hourglass-half px-3"></i>排序</small>
                    </button>
                </div>
                <div class="col px-1">
                    <!-- 用a連結記得JQ要加e.preventDefault(); -->
                    <a href="#">
                        <small class="mb-0">品牌聯名</small>
                    </a>
                </div>
                <div class="col px-1">
                    <a href="#">
                        <small class="mb-0">文創商品</small>
                    </a>
                </div>
                <div class="col px-1">
                    <a href="#">
                        <small class="mb-0">甜蜜供品</small>
                    </a>
                </div>
                <div class="col px-1">
                    <a href="#">
                        <small class="mb-0">獨家商品</small>
                    </a>
                </div>

            </div>
        </div>
    </div>
    <div class="timesort_mb d-none d-md-none ">
        <!-- <div class="d-flex"> -->
        <div class="col py-1">
            <a href="#">
                <small>最新上架</small>
            </a>
        </div>
        <div class="col py-1">
            <a href="#">
                <small>熱門程度</small>
            </a>
        </div>
        <div class="col py-1">
            <a href="#">
                <small>價格高 → 低</small>
            </a>
        </div>
        <div class="col py-1">
            <a href="#">
                <small>價格低 → 高</small>
            </a>
        </div>
        <!-- </div> -->
    </div>

    <div class="product_section">
        <div class="container d-flex">
            <!-- <div class="col-1"></div> -->
            <div class="aside d-none d-md-block">
                <div class="col">
                    <div class="cate_filter">
                        <div class="product_cate">
                            <!-- 用a連結記得JQ要加e.preventDefault(); -->
                            <a href="#">
                                <h5>－品牌聯名</h5>
                            </a>
                        </div>
                        <div class="product_cate">
                            <a href="#">
                                <h5>－文創商品</h5>
                            </a>
                        </div>
                        <div class="product_cate">
                            <a href="#">
                                <h5>－甜蜜供品</h5>
                            </a>
                        </div>
                        <div class="product_cate">
                            <a href="#">
                                <h5>－月老喵獨家</h5>
                            </a>
                        </div>
                    </div>
                    <!-- TODO:價格篩選怎麼寫 -->
                    <!-- https://codepen.io/AlexM91/pen/BaYoaWY -->
                    <div class="price_filter">
                        <div class="filter-content__element">
                            <div class="filter-element-heading">
                                <h5>價格範圍</h5>
                            </div>
                            <div class="filter-element-content">
                                <div class="filter-range-values">
                                    <span class="range-1-value">NT$100</span>
                                    <span class="range-2-value">NT$3000</span>
                                </div>
                                <div class="filter-range-content">
                                    <div class="filter-range-track"></div>
                                    <input class="filter-range filter-range-1" type="range" min="100" max="3000" value="100" id="slider-1" step="100">
                                    <input class="filter-range filter-range-2" type="range" min="100" max="3000" value="3000" id="slider-2" step="100">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="product_list">
                <!-- --------------------卡片---------------------- -->
                <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="card">
                            <a href="product_detail.php">
                                <div class="p_img">
                                    <img src="./imgs/product/cards/P01_1.jpg" class="card-img-top" alt="...">
                                </div>
                            </a>
                            <div class="card-body">
                                <a href="product_detail.php">
                                    <div class="card_title pb-1">
                                        <h5 class="card-text" style="height: 56px;">
                                        月老系祈福戀人手繩月老系祈福戀人手繩
                                        </h5>
                                    </div>
                                </a>
                                <div class="icon_heart">
                                    <svg class="heart_line" width="32" height="32" viewBox="0 0 32 32" fill="none" stroke="#fff" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.2855 9.22197C12.9704 6.90689 9.21692 6.90689 6.90184 9.22197C4.58676 11.537 4.58676 15.2905 6.90184 17.6056L13.2503 23.9532C14.8378 25.5407 17.4116 25.5407 18.9991 23.9532L24.5083 18.444L24.5074 18.4431L25.3449 17.6056C27.66 15.2905 27.66 11.5371 25.3449 9.22197C23.0298 6.90689 19.2763 6.90689 16.9612 9.22197L16.1234 10.0598L15.2855 9.22197Z" stroke-width="2.66667" />
                                    </svg>
                                </div>
                                <div class="row card_under justify-content-between align-items-baseline">
                                    <small class="xs card-text d-flex align-items-center">
                                        <div class="icon_star">
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                        <span>4.7(50)</span>
                                    </small>
                                    <small class="xs card-text d-flex align-items-center">
                                        <div class="icon_fire">
                                            <i class="fa-solid fa-fire"></i>
                                        </div>
                                        <span>3K個已訂購</span>
                                    </small>
                                    <h4 class="card-text price">
                                        2280
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                </div>

                <!-- --------------------手機版卡片---------------------- -->
                <!-- <div class="row d-flex d-md-none">
                    <div class="p_card_mb col">
                        <div class="card" style="width: 300px;">
                            <div class="p_img_mb">
                                <a href="">
                                    <img src="./imgs/product/P24_2.jpg" class="card-img-top w-100" alt="...">
                                </a>
                                <div class="icon_heart_mb">
                                    <svg class="heart_line" width="32" height="32" viewBox="0 0 32 32" fill="none" stroke="#fff"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M15.2855 9.22197C12.9704 6.90689 9.21692 6.90689 6.90184 9.22197C4.58676 11.537 4.58676 15.2905 6.90184 17.6056L13.2503 23.9532C14.8378 25.5407 17.4116 25.5407 18.9991 23.9532L24.5083 18.444L24.5074 18.4431L25.3449 17.6056C27.66 15.2905 27.66 11.5371 25.3449 9.22197C23.0298 6.90689 19.2763 6.90689 16.9612 9.22197L16.1234 10.0598L15.2855 9.22197Z" 
                                                    stroke-width="2.66667" />
                                    </svg>
                                </div>
                            </div>
                                <div class="card-body_mb">
                                    <a href="#">
                                        <div class="card_title_mb">
                                            <h5 class="card-text">
                                                霞海城隍廟 X 扣式真皮中夾禮盒
                                            </h5>
                                        </div>
                                    </a>

                                    <div class="card_small_mb d-flex justify-content-between align-items-center">
                                        <small class="xs card-text d-flex">
                                            <div class="icon_fivestar">
                                                <i class="fa-solid fa-star"></i>
                                            </div> <span>4.7(50)</span> 
                                        </small>
                                        <small class="xs card-text d-flex pl-3">
                                            <div class="icon_fire">
                                                <i class="fa-solid fa-fire"></i>
                                            </div>
                                            <span>3K個已訂購</span> 
                                        </small>
                                        <h5 class="card-text price align-self-end">
                                            2280
                                        </h5>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="p_card_mb col">
                        <div class="card" style="width: 300px;">
                            <div class="p_img_mb">
                                <a href="">
                                    <img src="./imgs/product/P24_2.jpg" class="card-img-top w-100" alt="...">
                                </a>
                                <div class="icon_heart_mb">
                                    <svg class="heart_line" width="32" height="32" viewBox="0 0 32 32" fill="none" stroke="#fff"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M15.2855 9.22197C12.9704 6.90689 9.21692 6.90689 6.90184 9.22197C4.58676 11.537 4.58676 15.2905 6.90184 17.6056L13.2503 23.9532C14.8378 25.5407 17.4116 25.5407 18.9991 23.9532L24.5083 18.444L24.5074 18.4431L25.3449 17.6056C27.66 15.2905 27.66 11.5371 25.3449 9.22197C23.0298 6.90689 19.2763 6.90689 16.9612 9.22197L16.1234 10.0598L15.2855 9.22197Z" 
                                                    stroke-width="2.66667" />
                                    </svg>
                                </div>
                            </div>
                                <div class="card-body_mb">
                                    <a href="#">
                                        <div class="card_title_mb">
                                            <h5 class="card-text">
                                                霞海城隍廟 X 扣式真皮中夾禮盒
                                            </h5>
                                        </div>
                                    </a>

                                    <div class="card_small_mb d-flex justify-content-between align-items-center">
                                        <small class="xs card-text d-flex">
                                            <div class="icon_fivestar">
                                                <i class="fa-solid fa-star"></i>
                                            </div> <span>4.7(50)</span> 
                                        </small>
                                        <small class="xs card-text d-flex pl-3">
                                            <div class="icon_fire">
                                                <i class="fa-solid fa-fire"></i>
                                            </div>
                                            <span>3K個已訂購</span> 
                                        </small>
                                        <h5 class="card-text price align-self-end">
                                            2280
                                        </h5>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="p_card_mb col">
                        <div class="card" style="width: 300px;">
                            <div class="p_img_mb">
                                <a href="">
                                    <img src="./imgs/product/P24_2.jpg" class="card-img-top w-100" alt="...">
                                </a>
                                <div class="icon_heart_mb">
                                    <svg class="heart_line" width="32" height="32" viewBox="0 0 32 32" fill="none" stroke="#fff"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M15.2855 9.22197C12.9704 6.90689 9.21692 6.90689 6.90184 9.22197C4.58676 11.537 4.58676 15.2905 6.90184 17.6056L13.2503 23.9532C14.8378 25.5407 17.4116 25.5407 18.9991 23.9532L24.5083 18.444L24.5074 18.4431L25.3449 17.6056C27.66 15.2905 27.66 11.5371 25.3449 9.22197C23.0298 6.90689 19.2763 6.90689 16.9612 9.22197L16.1234 10.0598L15.2855 9.22197Z" 
                                                    stroke-width="2.66667" />
                                    </svg>
                                </div>
                            </div>
                                <div class="card-body_mb">
                                    <a href="#">
                                        <div class="card_title_mb">
                                            <h5 class="card-text">
                                                霞海城隍廟 X 扣式真皮中夾禮盒
                                            </h5>
                                        </div>
                                    </a>

                                    <div class="card_small_mb d-flex justify-content-between align-items-center">
                                        <small class="xs card-text d-flex">
                                            <div class="icon_fivestar">
                                                <i class="fa-solid fa-star"></i>
                                            </div> <span>4.7(50)</span> 
                                        </small>
                                        <small class="xs card-text d-flex pl-3">
                                            <div class="icon_fire">
                                                <i class="fa-solid fa-fire"></i>
                                            </div>
                                            <span>3K個已訂購</span> 
                                        </small>
                                        <h5 class="card-text price align-self-end">
                                            2280
                                        </h5>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="p_card_mb col">
                        <div class="card" style="width: 300px;">
                            <div class="p_img_mb">
                                <a href="">
                                    <img src="./imgs/product/P24_2.jpg" class="card-img-top w-100" alt="...">
                                </a>
                                <div class="icon_heart_mb">
                                    <svg class="heart_line" width="32" height="32" viewBox="0 0 32 32" fill="none" stroke="#fff"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M15.2855 9.22197C12.9704 6.90689 9.21692 6.90689 6.90184 9.22197C4.58676 11.537 4.58676 15.2905 6.90184 17.6056L13.2503 23.9532C14.8378 25.5407 17.4116 25.5407 18.9991 23.9532L24.5083 18.444L24.5074 18.4431L25.3449 17.6056C27.66 15.2905 27.66 11.5371 25.3449 9.22197C23.0298 6.90689 19.2763 6.90689 16.9612 9.22197L16.1234 10.0598L15.2855 9.22197Z" 
                                                    stroke-width="2.66667" />
                                    </svg>
                                </div>
                            </div>
                                <div class="card-body_mb">
                                    <a href="#">
                                        <div class="card_title_mb">
                                            <h5 class="card-text">
                                                霞海城隍廟 X 扣式真皮中夾禮盒
                                            </h5>
                                        </div>
                                    </a>

                                    <div class="card_small_mb d-flex justify-content-between align-items-center">
                                        <small class="xs card-text d-flex">
                                            <div class="icon_fivestar">
                                                <i class="fa-solid fa-star"></i>
                                            </div> <span>4.7(50)</span> 
                                        </small>
                                        <small class="xs card-text d-flex pl-3">
                                            <div class="icon_fire">
                                                <i class="fa-solid fa-fire"></i>
                                            </div>
                                            <span>3K個已訂購</span> 
                                        </small>
                                        <h5 class="card-text price align-self-end">
                                            2280
                                        </h5>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="p_card_mb col">
                        <div class="card" style="width: 300px;">
                            <div class="p_img_mb">
                                <a href="">
                                    <img src="./imgs/product/P24_2.jpg" class="card-img-top w-100" alt="...">
                                </a>
                                <div class="icon_heart_mb">
                                    <svg class="heart_line" width="32" height="32" viewBox="0 0 32 32" fill="none" stroke="#fff"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M15.2855 9.22197C12.9704 6.90689 9.21692 6.90689 6.90184 9.22197C4.58676 11.537 4.58676 15.2905 6.90184 17.6056L13.2503 23.9532C14.8378 25.5407 17.4116 25.5407 18.9991 23.9532L24.5083 18.444L24.5074 18.4431L25.3449 17.6056C27.66 15.2905 27.66 11.5371 25.3449 9.22197C23.0298 6.90689 19.2763 6.90689 16.9612 9.22197L16.1234 10.0598L15.2855 9.22197Z" 
                                                    stroke-width="2.66667" />
                                    </svg>
                                </div>
                            </div>
                                <div class="card-body_mb">
                                    <a href="#">
                                        <div class="card_title_mb">
                                            <h5 class="card-text">
                                                霞海城隍廟 X 扣式真皮中夾禮盒
                                            </h5>
                                        </div>
                                    </a>

                                    <div class="card_small_mb d-flex justify-content-between align-items-center">
                                        <small class="xs card-text d-flex">
                                            <div class="icon_fivestar">
                                                <i class="fa-solid fa-star"></i>
                                            </div> <span>4.7(50)</span> 
                                        </small>
                                        <small class="xs card-text d-flex pl-3">
                                            <div class="icon_fire">
                                                <i class="fa-solid fa-fire"></i>
                                            </div>
                                            <span>3K個已訂購</span> 
                                        </small>
                                        <h5 class="card-text price align-self-end">
                                            2280
                                        </h5>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div> -->

            </div>
        </div>
    </div>

    <div class="pages">
        <div class="container">
            <div class="row">
                <div class="btn"><a href=""><i class="fa-solid fa-angles-left"></i></a></div>
                <div class="btn"><a href="">1</a></div>
                <div class="btn"><a href="">2</a></div>
                <div class="btn"><a href="">3</a></div>
                <div class="btn"><a href="">4</a></div>
                <div class="btn"><a href="">5</a></div>
                <div class="btn"><a href="">6</a></div>
                <div class="btn"><a href="">7</a></div>
                <div class="btn"><a href="">8</a></div>
                <div class="btn"><a href="">9</a></div>
                <div class="btn"><a href=""><i class="fa-solid fa-angles-right"></i></a></div>

            </div>
        </div>
    </div>

    <div class="notlogin d-none">
        <!-- 1.背景用黑色半透明做光箱效果，視窗FIXED(原本就在用show，沒有要讓它出現用append) -->
        <div class="">
            <div class="alert d-flex justify-content-center align-items-center">
                <div class="alert_head"><i class="fa-solid fa-triangle-exclamation"></i></div>
                <div class="alert_title">
                    <h4>請先登入再收藏商品喔！</h4>
                </div>
                <div class="btn_ok">
                    <button>好的喵</button>
                </div>
                <div class="alert_img">
                    <img class="w-100" src="./imgs/17.png" alt="">
                </div>
            </div>
        </div>
    </div>

</div>
<?php include __DIR__ . '/parts/scripts.php'; ?>
<script src="./product_list.js"></script>
<?php include __DIR__ . '/parts/html-foot.php'; ?>
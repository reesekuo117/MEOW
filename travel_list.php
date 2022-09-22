<?php
require __DIR__. '/parts/meow_db.php';  // /開頭
$pageName ='旅遊行程'; //頁面名稱
$perPage = 6;  // 每頁最多有幾筆
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;


// 取得資料的總筆數
$t_sql = "SELECT COUNT(1) FROM travel";
// $t_sql = "SELECT * FROM `product` WHERE 1";
$totalRows = $pdo->query($t_sql)->fetch(PDO::FETCH_NUM)[0];

// 計算總頁數
$totalPages = ceil($totalRows / $perPage);

$rows = [];  // 預設值
// 有資料才執行
if ($totalRows > 0) {
    if ($page < 1) {
        header('Location: ?page=1');
        exit;
    }
    if ($page > $totalPages) {
        header('Location: ?page=' . $totalPages);
        exit;
    }
    // 取得該頁面的資料
    $sql = sprintf("SELECT * FROM `travel` ORDER BY `sid` LIMIT %s, %s", ($page - 1) * $perPage, $perPage);
    $rows = $pdo->query($sql)->fetchAll();
}


?>

<?php include __DIR__. '/parts/html-head.php'; ?>
<link rel="stylesheet" href="./travel_list_style.css">
<?php
header("Refresh:180");
?>
<?php include __DIR__. '/parts/navbar.php'; ?>


<div class="travel_search d-flex">
        <div class="search_bar">
            <h3>旅遊行程</h3>
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
                <button>#聯誼</button>
                <button>#霞海</button>
                <button>#七夕</button>
            </div>
        </div>
</div>
    <!-- ----------------------搜尋欄結束------------------------ -->

    <!-- TODO:篩選列表 -->
    <div class="sort">
        <div class="container">
            <!-- 電腦排序 -->
            <div class="travel_sort d-none d-md-flex justify-content-center align-items-center">
                <!-- <div class="col"></div> -->
                <div class="col offset-1">
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
        <!-- 手機篩選 -->
        <div class="travel_sortbtn_mb d-block d-md-none">
            <button><i class="fa-regular fa-hourglass-half px-1"></i>行程篩選</button>
        </div>
        <div class="travel_cate_mb d-none d-md-none">
            <fieldset class="travel_filter_mb">
                <legend>
                    <h6 class="mt-3">依活動地區</h6>
                </legend>
                    <section>
                        <form action="" class="location">
                            <ul>
                                <li class="list-unstyled">
                                    <input type="checkbox" class="form-check-input" value="0" name="northCheck">
                                    <label for="northCheck">
                                        <span>北部</span>
                                    </label>
                                </li>
                                <li class="list-unstyled">
                                    <input type="checkbox" class="form-check-input" value="1" name="middleCheck">
                                    <label for="middleCheck">
                                        <span>中部</span>
                                    </label>
                                </li>
                                <li class="list-unstyled">
                                    <input type="checkbox" class="form-check-input" value="2" name="southCheck">
                                    <label for="southCheck">
                                        <span>南部</span>
                                    </label>
                                </li>
                                <li class="list-unstyled">
                                    <input type="checkbox" class="form-check-input" value="3" name="eastCheck">
                                    <label for="eastCheck">
                                        <span>東部</span>
                                    </label>
                                </li>
                            </ul>
                        </form>
                    </section>
                <legend>
                    <h6>依活動類型</h6>
                </legend>
                    <section>
                        <form action="" class="location">
                            <ul>
                                <li class="list-unstyled">
                                    <input type="checkbox" class="form-check-input" value="0" name="matchCheck">
                                    <label for="matchCheck">
                                        <span>交友聯誼</span>
                                    </label>
                                </li>
                                <li class="list-unstyled">
                                    <input type="checkbox" class="form-check-input" value="1" name="cultureCheck">
                                    <label for="cultureCheck">
                                        <span>文化之旅</span>
                                    </label>
                                </li>
                            </ul>
                        </form>
                    </section>
                <legend>
                    <h6>依旅遊時間分類</h6>
                </legend>
                    <section>
                        <form action="" class="location">
                            <ul>
                                <li class="list-unstyled">
                                    <input type="checkbox" class="form-check-input" value="0" name="onedCheck">
                                    <label for="onedCheck">
                                        <span>一日遊</span>
                                    </label>
                                </li>
                                <li class="list-unstyled">
                                    <input type="checkbox" class="form-check-input" value="1" name="towdCheck">
                                    <label for="towdCheck">
                                        <span>兩天一夜</span>
                                    </label>
                                </li>
                            </ul>
                        </form>
                    </section>
                    <legend>
                        <h6>依時間排序</h6>
                    </legend>
                        <section>
                            <form action="" class="location">
                                <ul>
                                    <li class="list-unstyled">
                                        <input type="checkbox" class="form-check-input" value="0" name="onedCheck">
                                        <label for="onedCheck">
                                            <span>最新上架</span>
                                        </label>
                                    </li>
                                    <li class="list-unstyled">
                                        <input type="checkbox" class="form-check-input" value="1" name="towdCheck">
                                        <label for="towdCheck">
                                            <span>熱門程度</span>
                                        </label>
                                    </li>
                                    <li class="list-unstyled">
                                        <input type="checkbox" class="form-check-input" value="1" name="towdCheck">
                                        <label for="towdCheck">
                                            <span>評價高 → 低</span>
                                        </label>
                                    </li>
                                    <li class="list-unstyled">
                                        <input type="checkbox" class="form-check-input" value="1" name="towdCheck">
                                        <label for="towdCheck">
                                            <span>評價低 → 高</span>
                                        </label>
                                    </li>
                                </ul>
                            </form>
                        </section>            
            </fieldset>
        </div>
    </div>

    <div class="travel_section">
        <div class="container-fluid d-flex">
            <!-- <div class="col-1"></div> -->
            <!-- 電腦篩選 -->
            <div class="aside offset-1 d-none d-md-block">
                <div class="col">
                    <div class="cate_filter">
                        <div class="travel_cate location">
                            <h5>－依活動地區</h5>
                            <div class="form-check">
                                <!-- 如果單選type要改radio，並設name，且同一類的name要取一樣的，因為後端要抓name的值 -->
                                <input class="form-check-input" type="checkbox" value="0" name="northCheck" id="northCheck" checked="checked">
                                <label class="form-check-label" for="northCheck">
                                北部
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" name="middleCheck" id="middleCheck">
                                <label class="form-check-label" for="middleCheck">
                                中部
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="2" name="southCheck" id="southCheck">
                                <label class="form-check-label" for="southCheck">
                                南部
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="3" name="eastCheck" id="eastCheck">
                                <label class="form-check-label" for="eastCheck">
                                東部
                                </label>
                            </div>
                        </div>
                        <div class="travel_cate category">
                                <h5>－依活動類型</h5>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="0" name="matchCheck" id="matchCheck" checked="checked">
                                    <label class="form-check-label" for="matchCheck">
                                    交友聯誼
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" name="cultureCheck" id="cultureCheck">
                                    <label class="form-check-label" for="cultureCheck">
                                    文化之旅
                                    </label>
                                </div>
                            
                        </div>
                        <div class="travel_cate time">
                                <h5>－依旅遊時間分類</h5>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="0" id="onedCheck" name="onedCheck" checked="checked">
                                    <label class="form-check-label" for="onedCheck">
                                    一日遊
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" name="towdCheck" id="towdCheck" >
                                    <label class="form-check-label" for="towdCheck">
                                    兩天一夜
                                    </label>
                                </div>
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
                                    <span class="range-1-value">NT$1000</span>
                                    <span class="range-2-value">NT$6000</span>
                                </div>
                                <div class="filter-range-content">
                                    <div class="filter-range-track"></div>
                                    <input class="filter-range filter-range-1" type="range" min="1000" max="6000"
                                        value="1000" id="slider-1" step="500">
                                    <input class="filter-range filter-range-2" type="range" min="1000" max="6000"
                                        value="6000" id="slider-2" step="500">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- --------------------卡片怎麼會這麼難---------------------- -->
            <div class="travel_list">
            <?php foreach ($rows as $r) : ?>
                <div class="t_card col-12 col-md-9">
                    <div class="card_row d-block d-md-flex align-items-center ">
                        <div class="t_img col col-md-4 px-0">
                            <a href="#">
                                <img class="w-100" src="imgs/travel/small/ <?= $r['travelcard_img'] ?>" alt="...">
                            </a>
                        </div>
                        <div class="card-body col-md-8">
                            <div class="card_title">
                                <div class="icon_heart">
                                    <svg class="heart_line" width="32" height="32" viewBox="0 0 32 32" fill="none" stroke=""
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M15.2855 9.22197C12.9704 6.90689 9.21692 6.90689 6.90184 9.22197C4.58676 11.537 4.58676 15.2905 6.90184 17.6056L13.2503 23.9532C14.8378 25.5407 17.4116 25.5407 18.9991 23.9532L24.5083 18.444L24.5074 18.4431L25.3449 17.6056C27.66 15.2905 27.66 11.5371 25.3449 9.22197C23.0298 6.90689 19.2763 6.90689 16.9612 9.22197L16.1234 10.0598L15.2855 9.22197Z" 
                                                stroke-width="2.66667" />
                                    </svg>
                                </div>
                                <a href="#">
                                    <h6 class="card-text d-inline">
                                        <?= $r['travel_name'] ?>
                                    </h6>
                                </a>
                                
                            </div>
                            <div class="card_under">
                                <div class="card_small d-md-none d-flex justify-content-between ">
                                    <div class="icon_location">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 21.2445C11.7379 21.0503 11.4043 20.8032 11.4043 20.8032L12 21.2445Z" fill="#432A0F" fill-opacity="0.6"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 7C10.3431 7 9 8.34315 9 10C9 11.6569 10.3431 13 12 13C13.6569 13 15 11.6569 15 10C15 8.34315 13.6569 7 12 7ZM11 10C11 9.44772 11.4477 9 12 9C12.5523 9 13 9.44772 13 10C13 10.5523 12.5523 11 12 11C11.4477 11 11 10.5523 11 10Z" fill="#432A0F" fill-opacity="0.6"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.4043 20.8032L12 21.2445C12.33 21 12.5964 20.8027 12.5964 20.8027L12.5981 20.8014L12.6032 20.7976L12.6198 20.7851C12.6337 20.7747 12.6531 20.7599 12.6777 20.741C12.7268 20.7031 12.7968 20.6484 12.8845 20.5779C13.0599 20.4368 13.307 20.2317 13.6019 19.9696C14.1903 19.4466 14.976 18.6902 15.7643 17.756C17.314 15.9193 19 13.246 19 10.2222C19 6.26809 15.9 3 12 3C8.10004 3 5 6.26809 5 10.2222C5 13.246 6.68605 15.9193 8.23571 17.756C9.02395 18.6902 9.8097 19.4466 10.3981 19.9696C10.693 20.2317 10.9401 20.4368 11.1155 20.5779C11.2032 20.6484 11.2732 20.7031 11.3223 20.741C11.3469 20.7599 11.3663 20.7747 11.3802 20.7851L11.3968 20.7976L11.4019 20.8014L11.4043 20.8032ZM7 10.2222C7 7.30348 9.27254 5 12 5C14.7275 5 17 7.30348 17 10.2222C17 12.5317 15.686 14.7473 14.2357 16.4662C13.524 17.3098 12.8097 17.9979 12.2731 18.4748C12.1756 18.5615 12.0842 18.641 12 18.713C11.9158 18.641 11.8244 18.5615 11.7269 18.4748C11.1903 17.9979 10.4761 17.3098 9.76429 16.4662C8.31395 14.7473 7 12.5317 7 10.2222Z" fill="#432A0F" fill-opacity="0.6"/>
                                        </svg>
                                        <small>
                                            <!-- 這邊要另外寫 -->
                                            <?= $r['travel_area'] ?>
                                        </small>
                                    </div>
                                    <div class="icon_clock pl-3">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13 7C13 6.44772 12.5523 6 12 6C11.4477 6 11 6.44772 11 7V11H7C6.44772 11 6 11.4477 6 12C6 12.5523 6.44772 13 7 13H12C12.5523 13 13 12.5523 13 12V7Z" fill="#432A0F" fill-opacity="0.6"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3ZM5 12C5 8.13401 8.13401 5 12 5C15.866 5 19 8.13401 19 12C19 15.866 15.866 19 12 19C8.13401 19 5 15.866 5 12Z" fill="#432A0F" fill-opacity="0.6"/>
                                        </svg>
                                        <small>出發日期：<?= $r['travel_date']  ?></small>
                                    </div>
                                </div>
                                <div class="card_intro card-text">
                                    <p><?= $r['travel_introduction'] ?></p>
                                </div>
                                <div class="card_small d-md-flex d-none  ">
                                    <div class="icon_location">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 21.2445C11.7379 21.0503 11.4043 20.8032 11.4043 20.8032L12 21.2445Z" fill="#432A0F" fill-opacity="0.6"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 7C10.3431 7 9 8.34315 9 10C9 11.6569 10.3431 13 12 13C13.6569 13 15 11.6569 15 10C15 8.34315 13.6569 7 12 7ZM11 10C11 9.44772 11.4477 9 12 9C12.5523 9 13 9.44772 13 10C13 10.5523 12.5523 11 12 11C11.4477 11 11 10.5523 11 10Z" fill="#432A0F" fill-opacity="0.6"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.4043 20.8032L12 21.2445C12.33 21 12.5964 20.8027 12.5964 20.8027L12.5981 20.8014L12.6032 20.7976L12.6198 20.7851C12.6337 20.7747 12.6531 20.7599 12.6777 20.741C12.7268 20.7031 12.7968 20.6484 12.8845 20.5779C13.0599 20.4368 13.307 20.2317 13.6019 19.9696C14.1903 19.4466 14.976 18.6902 15.7643 17.756C17.314 15.9193 19 13.246 19 10.2222C19 6.26809 15.9 3 12 3C8.10004 3 5 6.26809 5 10.2222C5 13.246 6.68605 15.9193 8.23571 17.756C9.02395 18.6902 9.8097 19.4466 10.3981 19.9696C10.693 20.2317 10.9401 20.4368 11.1155 20.5779C11.2032 20.6484 11.2732 20.7031 11.3223 20.741C11.3469 20.7599 11.3663 20.7747 11.3802 20.7851L11.3968 20.7976L11.4019 20.8014L11.4043 20.8032ZM7 10.2222C7 7.30348 9.27254 5 12 5C14.7275 5 17 7.30348 17 10.2222C17 12.5317 15.686 14.7473 14.2357 16.4662C13.524 17.3098 12.8097 17.9979 12.2731 18.4748C12.1756 18.5615 12.0842 18.641 12 18.713C11.9158 18.641 11.8244 18.5615 11.7269 18.4748C11.1903 17.9979 10.4761 17.3098 9.76429 16.4662C8.31395 14.7473 7 12.5317 7 10.2222Z" fill="#432A0F" fill-opacity="0.6"/>
                                        </svg>
                                        <small>台北</small>
                                    </div>
                                    <div class="icon_clock pl-3">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13 7C13 6.44772 12.5523 6 12 6C11.4477 6 11 6.44772 11 7V11H7C6.44772 11 6 11.4477 6 12C6 12.5523 6.44772 13 7 13H12C12.5523 13 13 12.5523 13 12V7Z" fill="#432A0F" fill-opacity="0.6"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3ZM5 12C5 8.13401 8.13401 5 12 5C15.866 5 19 8.13401 19 12C19 15.866 15.866 19 12 19C8.13401 19 5 15.866 5 12Z" fill="#432A0F" fill-opacity="0.6"/>
                                        </svg>
                                        <small>出發日期：2022/10/20</small>
                                    </div>
                                </div>
                                <div class="card_small d-flex align-items-center">
                                    <small class="xs card-text d-flex align-items-center pr-2">
                                        <div class="icon_fivestar"></div>
                                        <span>4.7(50)</span> 
                                    </small>
                                    <small class="xs card-text d-flex align-items-center">
                                        <div class="icon_fire">
                                            <i class="fa-solid fa-fire"></i>
                                        </div>
                                        3K個已訂購
                                    </small>
                                    
                                </div>
                                <h4 class="card-text price d-flex">
                                        1500
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
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
                    <h4>請先登入再收藏行程喔！</h4>
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
<?php include __DIR__. '/parts/scripts.php'; ?>
<script src="./travel_list.js"></script>
<?php include __DIR__. '/parts/html-foot.php'; ?>
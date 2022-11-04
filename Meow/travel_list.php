<?php
require __DIR__ . '/parts/meow_db.php';  // /開頭
$pageName = '旅遊行程'; //頁面名稱
$title = '旅遊行程';

// if(!isset($_GET['sid'])){
//     header('Location: travel_list.php');
//     exit;
// }



$perPage = 6;  // 每頁最多有幾筆
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
if ($page < 1) {
    header('Location: ?page=1');
    exit;
}

$qsp = []; // query string parameters

$selectedCity = isset($_GET['city']) ? intval($_GET['city']) : 0; //依活動地區分類
$cate = isset($_GET['cate']) ? intval($_GET['cate']) : 0; //沒有找到的話就會回到全部分類
$sort = isset($_GET['sort']) ? $_GET['sort'] : 0;
$selectedKind = isset($_GET['kind']) ? intval($_GET['kind']) : 0; //依活動類型
$selectedDaytime = isset($_GET['daytime']) ? intval($_GET['daytime']) : 0; //依活動時間類型
$search = isset($_GET['search']) ? $_GET['search'] : 0;   //搜尋關鍵字

$where = " WHERE 1 "; //起頭

if ($selectedCity) {
    $where .= " AND  travel_area=$selectedCity ";
    $qsp['city'] = $selectedCity;
}

if ($selectedKind) {
    $where .= " AND  travel_kind=$selectedKind ";
    $qsp['kind'] = $selectedKind;
}

if ($selectedDaytime) {
    $where .= " AND  travel_daytime=$selectedDaytime ";
    $qsp['daytime'] = $selectedDaytime;
}


if ($cate) {
    $where .= " AND category_sid =$cate ";
    $qsp['cate'] = $cate;
}

//搜尋關鍵字
if (!empty($search)) {
    $where .= sprintf(" AND travel_name LIKE %s ", $pdo->quote('%' . $search . '%'));

    $qsp['search'] = $search;
}



// 排序
$dataSort = '';
if (!empty($sort)) {
    $qsp['sort'] = $sort;
    switch ($sort) {
        case 'hotp':
            $dataSort = ' ORDER BY travel_popular DESC ';
            break;
        case 'newp':
            $dataSort = ' ORDER BY travel_date ASC ';
            break;
        case 'pricehigh':
            $dataSort = ' ORDER BY travel_price DESC ';
            break;
        case 'pricelow':
            $dataSort = ' ORDER BY travel_price ASC ';
            break;
    } 
}

//取得活動地區類型
$city = $pdo->query("SELECT * FROM address WHERE parent=0")->fetchAll();

//取得活動類型
$kind = $pdo->query("SELECT * FROM `travel_kind` WHERE travel_kind=travel_kind")->fetchAll();


//取得活動類型
$daytime = $pdo->query("SELECT * FROM `travel_daytime` WHERE travel_daytime=travel_daytime")->fetchAll();


// 旅遊商品  取得資料的總筆數
$t_sql = "SELECT COUNT(1) FROM travel $where ";
$totalRows = $pdo->query($t_sql)->fetch(PDO::FETCH_NUM)[0];

// 計算總頁數
$totalPages = ceil($totalRows / $perPage);

$rows = [];  // 預設值
// 有資料才執行
if ($totalRows > 0) {
    if ($page < 1) {

        header('Location: ?page=1'); //設定擋頭
        //?page=1 總頁數的第1頁  轉向到相同的頁面 
        exit;
    }
    if ($page > $totalPages) {
        header('Location: ?page=' . $totalPages);
        //?page= 輸入第幾頁 只要輸入大於的頁數就會自動跳轉到最後一頁
        exit;
    }

    // 取得該頁面的資料
    $sql = sprintf(
        "SELECT * FROM `travel` %s %s LIMIT %s, %s",
        $where,
        $dataSort,
        ($page - 1) * $perPage,
        $perPage
    );
    // echo $sql;
    // exit;
    $rows = $pdo->query($sql)->fetchAll();

    // echo json_encode([
    //     '$rows' => $rows,
    //     '$city' => $city,
    //     '$kind' => $kind,
    //     '$daytime' => $daytime,
    // ]);
    // exit;

    // 取得address
    $sqlArea = sprintf("SELECT * FROM `address`");
    $areaRows = $pdo->query($sqlArea)->fetchAll();




    // 愛心
    $isLogin = false;
    if(! empty($_SESSION['user']['id'])){
        $isLogin = true;
        $member_id = $_SESSION['user']['id'];
        $user_id = "SELECT * FROM `member` WHERE id=$member_id";
        $r_re = $pdo->query($user_id)->fetch();
    
        $sid = isset($_GET['sid']) ? intval($_GET['sid']) : 0;
        $sql = "SELECT * FROM travel  WHERE sid=$sid";
        $plove_sql = "
            SELECT 
                collect_sid         
            FROM love
                WHERE target_type=2 AND member_id=$member_id";
                // echo $plove_sql; exit;
        $plove_rows = $pdo->query($plove_sql)->fetchAll();
        $plove_dict = [];
        foreach($plove_rows as $t){
            $plove_dict[$t['collect_sid']] = 1;
        }
    }





    // if(empty($rows)){
    //     header('Location: travel_list.php');
    //     exit;
    //     }

}

// echo json_encode([
//     '$rows' => $rows,
// ]);
// exit;
?>

<?php include __DIR__ . '/parts/html-head.php'; ?>
<link rel="stylesheet" href="./travel_list_style.css">

<?php include __DIR__ . '/parts/navbar.php'; ?>


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
        <form name="search_form" class="input_search">
            <div class="container-1">
                <label for="">
                    <input type="text" id="search" name="search" placeholder="請輸入關鍵字搜尋" value="<?= empty($search) ? '' : htmlentities($search) ?>" />
                </label>
                <button class="icon" type="submit"><i class="fa fa-search"></i></button>
            </div>
        </form>
        <div class="search_btn">
            <button onclick="$('#search').val('月老')">#月老</button>
            <button onclick="$('#search').val('體驗')">#體驗</button>
            <button onclick="$('#search').val('一日')">#一日</button>
        </div>
    </div>
</div>
<!-- ----------------------搜尋欄結束------------------------ -->

<!-- TODO:篩選列表 -->
<div id="travelDesktopSort" class="sort">
    <div class="container">
        <!-- 電腦排序 -->
        <div class="travel_sort d-none d-md-flex justify-content-center align-items-center">
            <!-- <div class="col"></div> -->
            <div class="col offset-1">
                <h5 style="color: var(--color-text87);"><i class="fa-regular fa-hourglass-half px-1"></i>排序方式</h5>
            </div>
            <div class="col">
                <a href="?<?php
                            $tmp = $qsp;
                            // $tmp['kind'] = $k['sid'];
                            echo http_build_query($tmp);
                            ?>&sort=newp#travelDesktopSort" class="<?= $sort === 'newp' ? "sort_active" : "" ?>">
                    <h5>出發日期</h5>
                </a>
            </div>
            <div class="col">
                <a href="?<?php
                            $tmp = $qsp;
                            // $tmp['kind'] = $k['sid'];
                            echo http_build_query($tmp);
                            ?>&sort=hotp#travelDesktopSort" class="<?= $sort === 'hotp' ? "sort_active" : "" ?>">
                    <h5>熱門程度</h5>
                </a>
            </div>
            <div class="col">
                <a href="?<?php
                            $tmp = $qsp;
                            // $tmp['kind'] = $k['sid'];
                            echo http_build_query($tmp);
                            ?>&sort=pricehigh#travelDesktopSort" class="<?= $sort === 'pricehigh' ? "sort_active" : "" ?>">
                    <h5>價格高 → 低</h5>
                </a>
            </div>
            <div class="col">
                <a href="?<?php
                            $tmp = $qsp;
                            // $tmp['kind'] = $k['sid'];
                            echo http_build_query($tmp);
                            ?>&sort=pricelow#travelDesktopSort" class="<?= $sort === 'pricelow' ? "sort_active" : "" ?>">
                    <h5>價格低 → 高</h5>
                </a>
            </div>


        </div>
    </div>
    <!-- 手機篩選 -->
    <div class="travel_sortbtn_mb d-block d-md-none">
        <button class="tsbtnmbb"><i class="fa-regular fa-hourglass-half px-1"></i>行程篩選</button>
    </div>
    <div class="travel_cate_mb d-none d-md-none">
        <fieldset class="travel_filter_mb">
            <legend>
                <h6 class="mt-3">依活動地區</h6>
            </legend>
            <section>
                <form action="" class="location">
                    <ul>
                        <p class=" mb-0 form-check light ">
                            <a type="button" href="?#travelDesktopSort" class="<?= empty($selectedCity) ? "btncolor_active" : "btncolor_default" ?>">
                                全台地區
                            </a>
                        </p>
                        <?php foreach ($city as $c) : ?>
                            <div class=" form-check ">
                                <!-- 如果單選type要改radio，並設name，且同一類的name要取一樣的，因為後端要抓name的值 -->
                                <a class="<?= $c['sid'] == $selectedCity ? "btncolor_active " : "btncolor_default" ?> " id="form-check-ca" type="button" 
                                href="?<?php
                                        $tmp = $qsp;
                                        $tmp['city'] = $c['sid'];
                                        echo http_build_query($tmp);
                                        ?>#travelDesktopSort">
                                    <?= $c['city'] ?>
                                </a>
                            </div>
                        <?php endforeach ?>
                    </ul>
                </form>
            </section>
            <legend>
                <h6>依活動類型</h6>
            </legend>
            <section>
                <form action="" class="location s_category">
                    <ul>
                        <?php foreach ($kind as $k) : ?>
                            <div class="form-check">
                                <a class="<?= $k['sid'] == $selectedKind ? "btncolor_active " : "btncolor_default" ?>" id="form-check-ka" type="button" 
                                href="?<?php
                                        $tmp = $qsp;
                                        $tmp['kind'] = $k['sid'];
                                        echo http_build_query($tmp);
                                        ?>#travelDesktopSort">
                                    <?= $k['travel_kind'] ?>
                                </a>
                            </div>
                        <?php endforeach ?>
                    </ul>
                </form>
            </section>
            <legend>
                <h6>依旅遊時間分類</h6>
            </legend>
            <section>
                <form action="" class="location">
                    <ul>
                    <?php foreach ($daytime as $t) : ?>
                            <div class="form-check">
                                <a class="<?= $t['sid'] == $selectedDaytime ? "btncolor_active " : "btncolor_default" ?>" type="button" 
                                href="?<?php
                                        $tmp = $qsp;
                                        $tmp['daytime'] = $t['sid'];
                                        echo http_build_query($tmp);
                                        ?>#travelDesktopSort">
                                    <?= $t['travel_daytime'] ?>
                                </a>
                            </div>
                        <?php endforeach ?>
                    </ul>
                </form>
            </section>
            <legend>
            <h6>依時間排序</h6>
            </legend>
            <section>
                <form action="" class="location s_time">
                    <ul>
                        <li class="list-unstyled">
                            <a href="?<?php
                                        $tmp = $qsp;
                                        // $tmp['kind'] = $k['sid'];
                                        echo http_build_query($tmp);
                                        ?>&sort=newp#travelDesktopSort" class="<?= $sort === 'newp' ? "sort_active" : "" ?>">
                                <p>出發日期</p>
                            </a>
                        </li>
                        <li class="list-unstyled">
                            <a href="?<?php
                                        $tmp = $qsp;
                                        // $tmp['kind'] = $k['sid'];
                                        echo http_build_query($tmp);
                                        ?>&sort=hotp#travelDesktopSort" class="<?= $sort === 'hotp' ? "sort_active" : "" ?>">
                                <p>熱門程度</p>
                            </a>
                        </li>
                        <li class="list-unstyled">
                            <a href="?<?php
                                        $tmp = $qsp;
                                        // $tmp['kind'] = $k['sid'];
                                        echo http_build_query($tmp);
                                        ?>&sort=pricehigh#travelDesktopSort" class="<?= $sort === 'pricehigh' ? "sort_active" : "" ?>">
                                <p>價格高 → 低</p>
                            </a>
                        </li>
                        <li class="list-unstyled">
                            <a href="?<?php
                                        $tmp = $qsp;
                                        // $tmp['kind'] = $k['sid'];
                                        echo http_build_query($tmp);
                                        ?>&sort=pricelow#travelDesktopSort" class="<?= $sort === 'pricelow' ? "sort_active" : "" ?>">
                                <p>價格低 → 高</p>
                            </a>
                        </li>
                    </ul>
                </form>
            </section>
        </fieldset>
    </div>
</div>

<div class="travel_section">
    <div class="container-fluid d-flex travel_section_bottom">
        <!-- 電腦篩選 -->
        <div class="aside offset-1 d-none d-md-block">
            <div class="col">
                <div class="cate_filter">
                    <div class="travel_cate location ">
                        <h5>－依活動地區</h5>
                        <p class=" mb-0 form-check light ">
                            <a type="button" href="?#travelDesktopSort" class="<?= empty($selectedCity) ? "btncolor_active" : "btncolor_default" ?>">
                                全台地區
                            </a>
                        </p>
                        <?php foreach ($city as $c) : ?>
                            <div class=" form-check ">
                                <!-- 如果單選type要改radio，並設name，且同一類的name要取一樣的，因為後端要抓name的值 -->
                                <a class="<?= $c['sid'] == $selectedCity ? "btncolor_active " : "btncolor_default" ?> " type="button" 
                                href="?<?php
                                        $tmp = $qsp;
                                        $tmp['city'] = $c['sid'];
                                        echo http_build_query($tmp);
                                        ?>#travelDesktopSort">
                                    <?= $c['city'] ?>
                                </a>
                            </div>
                        <?php endforeach ?>
                    </div>
                    <div class="travel_cate category">
                        <h5>－依活動類型</h5>

                        <?php foreach ($kind as $k) : ?>
                            <div class="form-check">
                                <a class="<?= $k['sid'] == $selectedKind ? "btncolor_active " : "btncolor_default" ?>" type="button" 
                                href="?<?php
                                        $tmp = $qsp;
                                        $tmp['kind'] = $k['sid'];
                                        echo http_build_query($tmp);
                                        ?>#travelDesktopSort">
                                    <?= $k['travel_kind'] ?>
                                </a>
                            </div>
                        <?php endforeach ?>

                    </div>
                    <div class="travel_cate time">
                        <h5>－依旅遊時間分類</h5>
                        <?php foreach ($daytime as $t) : ?>
                            <div class="form-check">
                                <a class="<?= $t['sid'] == $selectedDaytime ? "btncolor_active " : "btncolor_default" ?>" type="button" 
                                href="?<?php
                                        $tmp = $qsp;
                                        $tmp['daytime'] = $t['sid'];
                                        echo http_build_query($tmp);
                                        ?>#travelDesktopSort">
                                    <?= $t['travel_daytime'] ?>
                                </a>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- --------------------卡片怎麼會這麼難---------------------- -->
        <div class="travel_list m-auto">
            <?php if (empty($rows)) : ?>
                <!-- 桌機 -->
                <div class="notfind_yu text-center d-none d-md-block">
                    <div>
                        <img src="./imgs/18.png" alt="">
                    </div>
                    <div class=" h6">
                        找不到相關結果
                        <br>
                        請嘗試其它關鍵字喵！
                        <br>
                        <div class="search_btn">
                            <a href="travel_list.php?search=月老#travelDesktopSort">
                                <button onclick="">#月老</button>
                            </a>
                            <a href="travel_list.php?search=體驗#travelDesktopSort">
                                <button onclick="">#體驗</button>
                            </a>
                            <a href="travel_list.php?search=一日#travelDesktopSort">
                                <button onclick="">#一日</button>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- 手機 -->
                <div class="notfindmb_yu text-center d-block d-md-none">
                    <div>
                        <img src="./imgs/18s.png" alt="">
                    </div>
                    <div class=" h6">
                        找不到相關結果
                        <br>
                        請嘗試其它關鍵字喵！
                        <br>
                        <div class="search_btn">
                            <a href="travel_list.php?search=月老#travelDesktopSort">
                                <button onclick="">#月老</button>
                            </a>
                            <a href="travel_list.php?search=體驗#travelDesktopSort">
                                <button onclick="">#體驗</button>
                            </a>
                            <a href="travel_list.php?search=一日#travelDesktopSort">
                                <button onclick="">#一日</button>
                            </a>
                        </div>
                    </div>
                </div>
            <?php else : ?>

                <?php foreach ($rows as $r) : ?>
                    <div class="t_card col-12 col-md-9 position-relative">
                        <a href="travel_detail.php?sid=<?= $r['sid'] ?>">
                            <div class="card_row d-block d-md-flex align-items-center ">
                                <div class="t_img col col-md-4 p-0">
                                    <!-- 卡片圖的大小 -->
                                    <img class="w-100" src="imgs/travel/cards/<?= $r['travelcard_img'] ?>" alt="...">
                                </div>
                                <div class="card-body col-md-8">
                                    <div class="card_title">

                                        <h6 class="card-text d-inline">
                                            <?= $r['travel_name'] ?>
                                        </h6>
                                    </div>
                                    <!-- <a href="travel_detail.php?sid=<?= $r['sid'] ?>"> -->
                                        <div class="card_under ">
                                            <div class="card_small d-md-none d-flex justify-content-between ">
                                                <div class="icon_location">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M12 21.2445C11.7379 21.0503 11.4043 20.8032 11.4043 20.8032L12 21.2445Z" fill="#432A0F" fill-opacity="0.6" />
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12 7C10.3431 7 9 8.34315 9 10C9 11.6569 10.3431 13 12 13C13.6569 13 15 11.6569 15 10C15 8.34315 13.6569 7 12 7ZM11 10C11 9.44772 11.4477 9 12 9C12.5523 9 13 9.44772 13 10C13 10.5523 12.5523 11 12 11C11.4477 11 11 10.5523 11 10Z" fill="#432A0F" fill-opacity="0.6" />
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.4043 20.8032L12 21.2445C12.33 21 12.5964 20.8027 12.5964 20.8027L12.5981 20.8014L12.6032 20.7976L12.6198 20.7851C12.6337 20.7747 12.6531 20.7599 12.6777 20.741C12.7268 20.7031 12.7968 20.6484 12.8845 20.5779C13.0599 20.4368 13.307 20.2317 13.6019 19.9696C14.1903 19.4466 14.976 18.6902 15.7643 17.756C17.314 15.9193 19 13.246 19 10.2222C19 6.26809 15.9 3 12 3C8.10004 3 5 6.26809 5 10.2222C5 13.246 6.68605 15.9193 8.23571 17.756C9.02395 18.6902 9.8097 19.4466 10.3981 19.9696C10.693 20.2317 10.9401 20.4368 11.1155 20.5779C11.2032 20.6484 11.2732 20.7031 11.3223 20.741C11.3469 20.7599 11.3663 20.7747 11.3802 20.7851L11.3968 20.7976L11.4019 20.8014L11.4043 20.8032ZM7 10.2222C7 7.30348 9.27254 5 12 5C14.7275 5 17 7.30348 17 10.2222C17 12.5317 15.686 14.7473 14.2357 16.4662C13.524 17.3098 12.8097 17.9979 12.2731 18.4748C12.1756 18.5615 12.0842 18.641 12 18.713C11.9158 18.641 11.8244 18.5615 11.7269 18.4748C11.1903 17.9979 10.4761 17.3098 9.76429 16.4662C8.31395 14.7473 7 12.5317 7 10.2222Z" fill="#432A0F" fill-opacity="0.6" />
                                                    </svg>
                                                    <?php foreach ($areaRows as $Yr) : ?>
                                                        <?php if ($Yr['sid'] === $r['travel_area']) : ?>
                                                            <small>
                                                                <!-- 這邊要另外寫 -->
                                                                <?= $Yr['city'] ?>
                                                            </small>
                                                        <?php endif ?>
                                                    <?php endforeach ?>
                                                </div>
                                                <div class="icon_clock pl-3">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M13 7C13 6.44772 12.5523 6 12 6C11.4477 6 11 6.44772 11 7V11H7C6.44772 11 6 11.4477 6 12C6 12.5523 6.44772 13 7 13H12C12.5523 13 13 12.5523 13 12V7Z" fill="#432A0F" fill-opacity="0.6" />
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3ZM5 12C5 8.13401 8.13401 5 12 5C15.866 5 19 8.13401 19 12C19 15.866 15.866 19 12 19C8.13401 19 5 15.866 5 12Z" fill="#432A0F" fill-opacity="0.6" />
                                                    </svg>
                                                    <!-- 資料庫還沒進去 -->
                                                    <small class="travel_dateYu">
                                                        出發日期：<?= $r['travel_date']  ?>
                                                    </small>
                                                </div>
                                            </div>
                                            <div class="card_intro card-text">
                                                <p class=" webkitlineYu ">
                                                    <?= $r['travel_introduction'] ?>
                                                </p>
                                            </div>
                                            <div class="card_small d-md-flex d-none  ">
                                                <div class="icon_location">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M12 21.2445C11.7379 21.0503 11.4043 20.8032 11.4043 20.8032L12 21.2445Z" fill="#432A0F" fill-opacity="0.6" />
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12 7C10.3431 7 9 8.34315 9 10C9 11.6569 10.3431 13 12 13C13.6569 13 15 11.6569 15 10C15 8.34315 13.6569 7 12 7ZM11 10C11 9.44772 11.4477 9 12 9C12.5523 9 13 9.44772 13 10C13 10.5523 12.5523 11 12 11C11.4477 11 11 10.5523 11 10Z" fill="#432A0F" fill-opacity="0.6" />
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.4043 20.8032L12 21.2445C12.33 21 12.5964 20.8027 12.5964 20.8027L12.5981 20.8014L12.6032 20.7976L12.6198 20.7851C12.6337 20.7747 12.6531 20.7599 12.6777 20.741C12.7268 20.7031 12.7968 20.6484 12.8845 20.5779C13.0599 20.4368 13.307 20.2317 13.6019 19.9696C14.1903 19.4466 14.976 18.6902 15.7643 17.756C17.314 15.9193 19 13.246 19 10.2222C19 6.26809 15.9 3 12 3C8.10004 3 5 6.26809 5 10.2222C5 13.246 6.68605 15.9193 8.23571 17.756C9.02395 18.6902 9.8097 19.4466 10.3981 19.9696C10.693 20.2317 10.9401 20.4368 11.1155 20.5779C11.2032 20.6484 11.2732 20.7031 11.3223 20.741C11.3469 20.7599 11.3663 20.7747 11.3802 20.7851L11.3968 20.7976L11.4019 20.8014L11.4043 20.8032ZM7 10.2222C7 7.30348 9.27254 5 12 5C14.7275 5 17 7.30348 17 10.2222C17 12.5317 15.686 14.7473 14.2357 16.4662C13.524 17.3098 12.8097 17.9979 12.2731 18.4748C12.1756 18.5615 12.0842 18.641 12 18.713C11.9158 18.641 11.8244 18.5615 11.7269 18.4748C11.1903 17.9979 10.4761 17.3098 9.76429 16.4662C8.31395 14.7473 7 12.5317 7 10.2222Z" fill="#432A0F" fill-opacity="0.6" />
                                                    </svg>
                                                    <?php foreach ($areaRows as $Yr) : ?>
                                                        <?php if ($Yr['sid'] === $r['travel_area']) : ?>
                                                            <small>
                                                                <!-- 這邊要另外寫 -->
                                                                <?= $Yr['city'] ?>
                                                            </small>
                                                        <?php endif ?>
                                                    <?php endforeach ?>
                                                </div>
                                                <div class="icon_clock pl-3">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M13 7C13 6.44772 12.5523 6 12 6C11.4477 6 11 6.44772 11 7V11H7C6.44772 11 6 11.4477 6 12C6 12.5523 6.44772 13 7 13H12C12.5523 13 13 12.5523 13 12V7Z" fill="#432A0F" fill-opacity="0.6" />
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3ZM5 12C5 8.13401 8.13401 5 12 5C15.866 5 19 8.13401 19 12C19 15.866 15.866 19 12 19C8.13401 19 5 15.866 5 12Z" fill="#432A0F" fill-opacity="0.6" />
                                                    </svg>
                                                    <small>
                                                        出發日期：
                                                        <?= $r['travel_date']  ?>
                                                    </small>
                                                </div>
                                            </div>
                                            <div class="d-flex d-md-block">
                                                <div class="card_small d-flex align-items-center pt-2">
                                                    <div class="xs card-text d-flex align-items-center align-self-end pr-3">
                                                        <img class="d-none d-md-block w-75" src="imgs/star/<?= $r['travel_star'] ?>.png" alt="...">
                                                        <img class="d-md-none w-75" src="imgs/star/only-one.png" alt="...">
                                                        <span class="starNum pl-1">
                                                            <?= $r['travel_star'] ?>
                                                        </span>
                                                    </div>
                                                    <div class="my-auto xs text-center boughtNum d-flex ">
                                                        <i class="my-auto icon_fire fa-solid fa-fire" style="color: var(--color-orange);font-size:15px"></i>
                                                        <span class="starNum pl-1"><?= $r['travel_popular'] ?>個已訂購 </span>
                                                    </div>
                                                </div>
                                                <h4 class="card-text price d-flex mdpriceYu pb-md-1 pb-0">
                                                    <?= $r['travel_price'] ?>
                                                </h4>
                                            </div>

                                        </div>
                                    <!-- </a> -->
                                </div>
                            </div>

                        </a>
                        <div class="icon_heart position-absolute <?= !empty($plove_dict[$r['sid']]) ? 'color' : '' ?>" data-sid="<?= $r["sid"] ?>" onclick="addToFav_T_07(event)">
                                <svg class="heart_line" width="32" height="32" viewBox="0 0 32 32"  stroke="" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.2855 9.22197C12.9704 6.90689 9.21692 6.90689 6.90184 9.22197C4.58676 11.537 4.58676 15.2905 6.90184 17.6056L13.2503 23.9532C14.8378 25.5407 17.4116 25.5407 18.9991 23.9532L24.5083 18.444L24.5074 18.4431L25.3449 17.6056C27.66 15.2905 27.66 11.5371 25.3449 9.22197C23.0298 6.90689 19.2763 6.90689 16.9612 9.22197L16.1234 10.0598L15.2855 9.22197Z" stroke-width="2.66667" />
                                </svg>
                            </div>
                    </div>
                <?php endforeach; ?>
            <?php endif ?>
        </div>
    </div>
</div>

<?php if (empty($rows)) : ?>

<?php else : ?>
    <div class="pages">
        <div class="container">
            <div class="row">
                <nav aria-label="Page navigation example">
                    <ul class="pagination d-none d-md-flex ">
                        <li class="page-item <?= $page == 1 ? 'disabled' : '' ?>">
                            <!-- <a href="?< ?php echo ($cate)? "cate=".$cate."&" : '' ?>sort=higherp#desktopSort" class="< ?php echo (isset($_GET['sort']) && $_GET['sort'] ==='higherp')? "sort_active" : "" ?>">
                        <h5>價格高 → 低</h5>
                        </a> -->
                            <a class="page-link" 
                            href="?<?php $qsp['page'] = 1;
                                    echo http_build_query($qsp); ?>#travelDesktopSort">
                                <i class="fa-solid fa-angles-left"></i>
                            </a>
                        </li>
                        <?php for ($i = $page - 2; $i <= $page + 2; $i++) :
                            if ($i >= 1 and $i <= $totalPages) :
                                $qsp['page'] = $i;
                        ?>
                                <li class="page-item <?= $page == $i ? 'active' : '' ?>">
                                    <a class="page-link" href="?<?= http_build_query($qsp); ?>#travelDesktopSort"><?= $i ?></a>
                                </li>
                        <?php endif;
                        endfor; ?>
                        <li class="page-item <?= $page == $totalPages ? 'disabled' : '' ?>">
                            <a class="page-link" 
                            href="?<?php $qsp['page'] = $totalPages;
                                    echo http_build_query($qsp); ?>#travelDesktopSort">
                                <i class="fa-solid fa-angles-right"></i>
                            </a>
                        </li>
                    </ul>


                    <ul class="pagination d-flex d-md-none ">
                        <li class="page-item <?= $page == 1 ? 'disabled' : '' ?>">
                            <a class="page-link" 
                            href="?<?php $qsp['page'] = 1;
                                    echo http_build_query($qsp); ?>#travelDesktopSort">
                                <i class="fa-solid fa-angles-left"></i>
                            </a>
                        </li>
                        <?php for ($i = $page - 2; $i <= $page + 2; $i++) :
                            if ($i >= 1 and $i <= $totalPages) :
                                $qsp['page'] = $i;
                        ?>
                                <li class="page-item <?= $page == $i ? 'active' : '' ?>">
                                    <a class="page-link" href="?<?= http_build_query($qsp); ?>#travelDesktopSort"><?= $i ?></a>
                                </li>
                        <?php endif;
                        endfor; ?>
                        <li class="page-item <?= $page == $totalPages ? 'disabled' : '' ?>">
                            <a class="page-link" href="?<?php $qsp['page'] = $totalPages;
                                                        echo http_build_query($qsp); ?>#travelDesktopSort">
                                <i class="fa-solid fa-angles-right"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>

        </div>
    </div>
<?php endif ?>
<!-- <div class="notlogin d-none"> -->
<!-- 1.背景用黑色半透明做光箱效果，視窗FIXED(原本就在用show，沒有要讓它出現用append) -->
<!-- <div class="">
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
</div> -->
<?php include __DIR__ . '/parts/scripts.php'; ?>

<script>
    const isLogin = <?= json_encode($isLogin) ?>;
    function addToFav_T_07(event) {
        if(! isLogin){
            alert(' login first !!')
            return;
        }
        const heartbtn = $(event.currentTarget); // 監聽
        const collect_sid = heartbtn.attr('data-sid');
        console.log('hiheart', heartbtn);
        console.log('hisid', collect_sid);
        $.get(
            'favorite_api.php', {
                collect_sid,
                target_type: 2,
            },
            function(){
                heartbtn.toggleClass('color');
            },
            'json');
    };
</script>

<script src="./travel_list.js"></script>
<?php include __DIR__ . '/parts/html-foot.php'; ?>
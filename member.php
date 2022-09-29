<?php
require __DIR__. '/parts/meow_db.php';  // /開頭
$pageName ='會員中心'; //頁面名稱

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





    $p_sql = "SELECT * FROM `love` Inner join product on target_type = 1 and product.sid = love.collect_sid WHERE love.member_id=$member_id";
    $t_sql = "SELECT * FROM `love` Inner join travel on target_type = 2 and travel.sid = love.collect_sid WHERE love.member_id=$member_id";
    $f_sql = "SELECT * FROM `love` Inner join forturn on target_type = 3 and forturn.sid = love.collect_sid WHERE love.member_id=$member_id";
    $d_sql = "SELECT * FROM `love` Inner join draw on target_type = 4 and draw.sid = love.collect_sid WHERE love.member_id=$member_id";

    $p_rows = $pdo->query($p_sql)->fetchAll();
    $t_rows = $pdo->query($t_sql)->fetchAll();
    $f_rows = $pdo->query($f_sql)->fetchAll();
    $d_rows = $pdo->query($d_sql)->fetchAll();

    // $polist_sql = "SELECT product.*, product_list.product_sid FROM  WHERE member_id=$member_id";

    // 錯誤
    // $polist_sql = "SELECT o.*, od.price, od.quantity, p.bookname FROM `orders` o
    // JOIN order_details od ON o.sid = od.order_sid
    // JOIN products p ON p.sid = od.product_sid
    // WHERE o.sid = 11";

    // $polist_sql = "SELECT po.*, pod.total, pod.quantity, p.product_name, p.product_card_img, ad.city FROM `product_order` po
    // JOIN product_details pod ON po.sid = pod.order_sid
    // JOIN product p ON p.sid = pod.product_sid
    // JOIN address ad ON ad.sid = po.address_city
    // JOIN address ad ON ad.sid = ad.parent AND ad.city = po.address_region
    // -- JOIN (
    // --     SELECT * FROM address join product_order on address_parent = address_sid WHERE po.address_region
    // --     )
    // WHERE member_id=$member_id";
    // 商品
    $po_sql = "SELECT * FROM `product_order`WHERE member_id=$member_id";
    $po_rows = $pdo->query($po_sql)->fetchAll();
    $polist_sql = "
        SELECT 
            po.*, 
            pod.product_sid,
            pod.total, 
            pod.quantity,
            p.product_name, 
            p.product_card_img, 
            ad.city,
            ad2.city region
        FROM product_order po
            JOIN product_details pod ON po.sid = pod.order_sid
            JOIN product p ON p.sid = pod.product_sid
            JOIN address ad ON ad.sid = po.address_city
            JOIN address ad2 ON ad2.sid = po.address_region
            WHERE member_id=$member_id";
    $polist_rows = $pdo->query($polist_sql)->fetchAll();
    // 旅遊行程
    $to_sql = "SELECT * FROM `travel_order` WHERE member_id=$member_id";
    $to_rows = $pdo->query($to_sql)->fetchAll();
    $tolist_sql = "
        SELECT 
            tod.*, 
            t.travel_name,
            t.travelcard_img, 
            ad.city,
            ad2.city region
        FROM travel_order tod
            JOIN travel t ON t.sid = tod.travel_sid
            JOIN address ad ON ad.sid = tod.address_city
            JOIN address ad2 ON ad2.sid = tod.address_region
            WHERE member_id=$member_id";
    $tolist_rows = $pdo->query($tolist_sql)->fetchAll();

    // $po_rows = $pdo->query($sql)->fetchAll();


// // json_encode判斷型別輸出JSON 數字型態
// echo json_encode([ 
//     // '$prows' => $p_rows,
//     // '$trows' => $t_rows,
//     // '$po_rows' => $po_rows,
//     '$polist_rows' => $polist_rows,
//     // '$to_rows' => $to_rows,
//     // '$tolist_rows' => $tolist_rows,
// ]);
// exit;
// ?>

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
                <li class="signupbutton my-2  text-20-re" type="button" value="登出" onclick="location.href='re-logout.php'">登出</li>
                <!-- <label class="signupbutton my-2"><input class="btn-re btn200-re phonewidth330-re" type="button" value="登出" onclick="location.href='re-logout.php'"></label> -->
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
<!-- p1-member-------------------------------------------------------------------------------------- -->
            <div id="member-page-re position-relative" class="item_re" style="display: block;">
                <div class="divination-re d-none d-md-block">
                    <svg width="187" height="218" viewBox="0 0 187 218" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <rect width="187" height="218" fill="url(#pattern0-466769)"/>
                        <defs>
                        <pattern id="pattern0-466769" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0_1149_26929" transform="translate(0 -0.000382263) scale(0.00228311 0.00195844)"/>
                        </pattern>
                        <image id="image0_1149_26929" width="438" height="511" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAbYAAAH/CAYAAAA7XvjUAAAACXBIWXMAAC4jAAAuIwF4pT92AAAJfWlUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS42LWMxNDggNzkuMTY0MDM2LCAyMDE5LzA4LzEzLTAxOjA2OjU3ICAgICAgICAiPiA8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPiA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtbG5zOmRjPSJodHRwOi8vcHVybC5vcmcvZGMvZWxlbWVudHMvMS4xLyIgeG1sbnM6cGhvdG9zaG9wPSJodHRwOi8vbnMuYWRvYmUuY29tL3Bob3Rvc2hvcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RFdnQ9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZUV2ZW50IyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIDIxLjAgKFdpbmRvd3MpIiB4bXA6Q3JlYXRlRGF0ZT0iMjAyMi0wOC0zMFQwMDowMjozNiswODowMCIgeG1wOk1vZGlmeURhdGU9IjIwMjItMDgtMzBUMDA6MzE6NDArMDg6MDAiIHhtcDpNZXRhZGF0YURhdGU9IjIwMjItMDgtMzBUMDA6MzE6NDArMDg6MDAiIGRjOmZvcm1hdD0iaW1hZ2UvcG5nIiBwaG90b3Nob3A6Q29sb3JNb2RlPSIzIiBwaG90b3Nob3A6SUNDUHJvZmlsZT0ic1JHQiBJRUM2MTk2Ni0yLjEiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6MmMzMDUzZDYtMzBkYS02ZjRmLTg0NWEtMjJmZTIyMjg0Nzg2IiB4bXBNTTpEb2N1bWVudElEPSJhZG9iZTpkb2NpZDpwaG90b3Nob3A6YmUyYWIyNjAtZjdhMC03ZjQ0LWE2OWItNzEwNDA1ZmQwMjU5IiB4bXBNTTpPcmlnaW5hbERvY3VtZW50SUQ9InhtcC5kaWQ6NDQyNDg1ODEtNWEwOC1iYjQyLTk3NzUtMzRkZDRmZDVlZTc4Ij4gPHhtcE1NOkhpc3Rvcnk+IDxyZGY6U2VxPiA8cmRmOmxpIHN0RXZ0OmFjdGlvbj0iY3JlYXRlZCIgc3RFdnQ6aW5zdGFuY2VJRD0ieG1wLmlpZDo0NDI0ODU4MS01YTA4LWJiNDItOTc3NS0zNGRkNGZkNWVlNzgiIHN0RXZ0OndoZW49IjIwMjItMDgtMzBUMDA6MDI6MzYrMDg6MDAiIHN0RXZ0OnNvZnR3YXJlQWdlbnQ9IkFkb2JlIFBob3Rvc2hvcCAyMS4wIChXaW5kb3dzKSIvPiA8cmRmOmxpIHN0RXZ0OmFjdGlvbj0ic2F2ZWQiIHN0RXZ0Omluc3RhbmNlSUQ9InhtcC5paWQ6NjZmYzFjMTItYTFlYy02OTQ3LTg2YTktY2FkM2IyZmU3N2FlIiBzdEV2dDp3aGVuPSIyMDIyLTA4LTMwVDAwOjMxOjIxKzA4OjAwIiBzdEV2dDpzb2Z0d2FyZUFnZW50PSJBZG9iZSBQaG90b3Nob3AgMjEuMCAoV2luZG93cykiIHN0RXZ0OmNoYW5nZWQ9Ii8iLz4gPHJkZjpsaSBzdEV2dDphY3Rpb249InNhdmVkIiBzdEV2dDppbnN0YW5jZUlEPSJ4bXAuaWlkOjQxNzY4ODQxLTZjNzQtYTg0YS04MTZmLWJlNGU3NmY5NjQzNiIgc3RFdnQ6d2hlbj0iMjAyMi0wOC0zMFQwMDozMTo0MCswODowMCIgc3RFdnQ6c29mdHdhcmVBZ2VudD0iQWRvYmUgUGhvdG9zaG9wIDIxLjAgKFdpbmRvd3MpIiBzdEV2dDpjaGFuZ2VkPSIvIi8+IDxyZGY6bGkgc3RFdnQ6YWN0aW9uPSJjb252ZXJ0ZWQiIHN0RXZ0OnBhcmFtZXRlcnM9ImZyb20gYXBwbGljYXRpb24vdm5kLmFkb2JlLnBob3Rvc2hvcCB0byBpbWFnZS9wbmciLz4gPHJkZjpsaSBzdEV2dDphY3Rpb249ImRlcml2ZWQiIHN0RXZ0OnBhcmFtZXRlcnM9ImNvbnZlcnRlZCBmcm9tIGFwcGxpY2F0aW9uL3ZuZC5hZG9iZS5waG90b3Nob3AgdG8gaW1hZ2UvcG5nIi8+IDxyZGY6bGkgc3RFdnQ6YWN0aW9uPSJzYXZlZCIgc3RFdnQ6aW5zdGFuY2VJRD0ieG1wLmlpZDoyYzMwNTNkNi0zMGRhLTZmNGYtODQ1YS0yMmZlMjIyODQ3ODYiIHN0RXZ0OndoZW49IjIwMjItMDgtMzBUMDA6MzE6NDArMDg6MDAiIHN0RXZ0OnNvZnR3YXJlQWdlbnQ9IkFkb2JlIFBob3Rvc2hvcCAyMS4wIChXaW5kb3dzKSIgc3RFdnQ6Y2hhbmdlZD0iLyIvPiA8L3JkZjpTZXE+IDwveG1wTU06SGlzdG9yeT4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6NDE3Njg4NDEtNmM3NC1hODRhLTgxNmYtYmU0ZTc2Zjk2NDM2IiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjQ0MjQ4NTgxLTVhMDgtYmI0Mi05Nzc1LTM0ZGQ0ZmQ1ZWU3OCIgc3RSZWY6b3JpZ2luYWxEb2N1bWVudElEPSJ4bXAuZGlkOjQ0MjQ4NTgxLTVhMDgtYmI0Mi05Nzc1LTM0ZGQ0ZmQ1ZWU3OCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Pm4qBzUAAPrVSURBVHja7F0HeBRVF01I770npHcSSAKhhN4RpQgC0kFQBOkoTZoUkSZVkCpFwIIoRaWIlSJSLOhvB3tDkSY9739nsgubzb43M7uzJcm7n/cLJrs7dd+Ze++55zo5CRPGNlcPD490d3f3Hm5ubsPoz+4uLi6dqHek3tnV1bUBfY2HOE3ChAkTJsyRzZ0CVkPqO6j/Tv0G9WLqxITfpH6Wgt4qCoAp9L3O4vQJEyZMmDBHsmAKUuspWF1lABnPL1N/mn6GnziNwoQJ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"/>
                        </defs>
                    </svg>
                </div>
                <!-- xs -->
                <div class="col-12 d-md-none">
                    <div class="picturewarp-re mx-auto my-4 position-relative">
                        <img id="blah_xs01_re" class="w-100" src="<?= $r_re['picture'] ?>" alt="">
                        <div class="pictureicon-re position-absolute" onclick="document.getElementById('pictureChange_re').style.display='block'" style="width:auto;">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="4" y="8" width="24" height="17.3333" rx="4" stroke="#432A0F" stroke-width="2.66667"/>
                                <path d="M6.82947 20.6949C6.47686 21.3413 6.71507 22.1512 7.36153 22.5039C8.00799 22.8565 8.81791 22.6183 9.17053 21.9718L6.82947 20.6949ZM18.1818 21.3333L17.0113 21.9718C17.2383 22.388 17.6692 22.6523 18.1431 22.6661C18.617 22.6799 19.0625 22.441 19.3133 22.0387L18.1818 21.3333ZM22.8685 22.0387C23.2581 22.6636 24.0804 22.8544 24.7053 22.4648C25.3302 22.0753 25.521 21.2529 25.1315 20.628L22.8685 22.0387ZM9.17053 21.9718L13.0909 14.7844L10.7499 13.5075L6.82947 20.6949L9.17053 21.9718ZM13.0909 14.7844L17.0113 21.9718L19.3523 20.6949L15.432 13.5075L13.0909 14.7844ZM19.3133 22.0387L21.0909 19.1871L18.8279 17.7764L17.0503 20.628L19.3133 22.0387ZM21.0909 19.1871L22.8685 22.0387L25.1315 20.628L23.3539 17.7764L21.0909 19.1871ZM21.0909 19.1871L21.0909 19.1871L23.3539 17.7764C22.31 16.1018 19.8719 16.1018 18.8279 17.7764L21.0909 19.1871ZM13.0909 14.7844L13.0909 14.7844L15.432 13.5075C14.4213 11.6545 11.7606 11.6545 10.7499 13.5075L13.0909 14.7844Z" fill="#432A0F"/>
                                <circle cx="21.3333" cy="13.3333" r="1.33333" fill="#432A0F"/>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="d-flex tab_phonelist_re">
                    <h5 class="membertitle-re col-6 p-0 d-inline-block px-3">會員資料</h5>
                    <h5 class="membertitle-re col-6 d-md-none p-0 d-inline-block px-3">修改密碼</h5>
                </div>
                <form id="form_member_re" name='form_member_re' class="padding225-re" method="post" onsubmit="checkFormMember(); return false;"> 
                <input type="hidden" name="id" value="<?= $r_re['id'] ?>">
                <!-- novalidate 不要驗證表單 -->
                <!-- https://www.wfublog.com/2021/04/html5-validator.html -->
                    <div class="mb-3">
                        <label for="name" class="form-label-re text-18-re">姓名<span style="color:#963C38">*</span></label><br>
                        <input id="member_name_re" name="member_name_re" class="input-re noline-re" type="text" placeholder=" 請輸入姓名" class="form-control" required value="<?=htmlentities($r_re['name']) ?>">
                    </div>
                    <div class="mb-3">
                        <label for="mobile" class="form-label-re text-18-re">聯絡電話<span style="color:#963C38">*</span></label><br>
                        <input id="member_phone_re" name="member_phone_re" class="input-re noline-re" type="text" placeholder=" 請輸入聯絡電話" class="form-control" required value="<?=htmlentities($r_re['mobile']) ?>">
                        <!-- 手機驗證<input type="text" required="required" maxlength="11" pattern="09\d{2}-\d{6}"/> -->
                    </div>
                    <div class="mb-3">
                        <label for="birthday" class="form-label-re text-18-re">出生日期</label><br>
                        <input id="member_birthday_re" name="member_birthday_re" class="input-re noline-re" type="date" placeholder=" 請輸入出生日期" class="form-control" value="<?=htmlentities($r_re['birthday']) ?>">
                    </div>
                    <div>
                        <label for="address" class="form-label-re text-18-re">通訊地址</label><br>
                        <div class="address-re d-flex flex-wrap">
                            <div class="form-group d-inline-block col-6 col-md-2 p-0">
                                <select class="select-re" name="address_city_re" id="member_city_re" value="<?=htmlentities($r_re['address_city_re']) ?>">
                                    <option class="option-re text-16-re" value="5">臺北市</option>
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
                            <div class="form-group d-inline-block col-6 col-md-2 p-0">
                                <select class="select-re" name="address_region_re" id="member_district_re" value="<?=htmlentities($r_re['address_region_re']) ?>">
                                    <option class="option-re text-16-re" value="24">中正區</option>
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
                            <div class="col-12 col-md-4 d-inline-block p-0">
                                <input id="member_address_re" name="member_address_re" class="input-re addressarea-re col-12 col-md-4 noline-re" type="text" placeholder=" 請輸入詳細地址" class="form-control right-0" value="<?=htmlentities($r_re['address']) ?>">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label-re text-18-re">信箱帳號<span style="color:#963C38">*</span></label><br>
                        <input id="member_email_re" class="inputdisabled-re col-8 noline-re" type="text" class="form-control" disabled="disabled" value="<?=htmlentities($r_re['email']) ?>">
                    </div>
                    <div id="member_msgContainer" class="col-8 p-0"></div>
                    <div class="position-absolute fixedbtn_re"><input class="btn-re btn200-re phonewidth330-re mb-3" type="submit" value="儲存"></div>
                </form>
            </div>
<!-- p2-password------------------------------------------------------------------------------------ -->

            <div id="password-page-re" class="item_re">
                <!-- phone -->
                <div class="col-12 d-md-none">
                    <div class="picturewarp-re mx-auto my-4 position-relative">
                        <img id="blah_xs02_re" class="w-100" src="<?= $r_re['picture'] ?>" alt="">
                        <div class="pictureicon-re position-absolute" onclick="document.getElementById('pictureChange_re').style.display='block'" style="width:auto;">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="4" y="8" width="24" height="17.3333" rx="4" stroke="#432A0F" stroke-width="2.66667"/>
                                <path d="M6.82947 20.6949C6.47686 21.3413 6.71507 22.1512 7.36153 22.5039C8.00799 22.8565 8.81791 22.6183 9.17053 21.9718L6.82947 20.6949ZM18.1818 21.3333L17.0113 21.9718C17.2383 22.388 17.6692 22.6523 18.1431 22.6661C18.617 22.6799 19.0625 22.441 19.3133 22.0387L18.1818 21.3333ZM22.8685 22.0387C23.2581 22.6636 24.0804 22.8544 24.7053 22.4648C25.3302 22.0753 25.521 21.2529 25.1315 20.628L22.8685 22.0387ZM9.17053 21.9718L13.0909 14.7844L10.7499 13.5075L6.82947 20.6949L9.17053 21.9718ZM13.0909 14.7844L17.0113 21.9718L19.3523 20.6949L15.432 13.5075L13.0909 14.7844ZM19.3133 22.0387L21.0909 19.1871L18.8279 17.7764L17.0503 20.628L19.3133 22.0387ZM21.0909 19.1871L22.8685 22.0387L25.1315 20.628L23.3539 17.7764L21.0909 19.1871ZM21.0909 19.1871L21.0909 19.1871L23.3539 17.7764C22.31 16.1018 19.8719 16.1018 18.8279 17.7764L21.0909 19.1871ZM13.0909 14.7844L13.0909 14.7844L15.432 13.5075C14.4213 11.6545 11.7606 11.6545 10.7499 13.5075L13.0909 14.7844Z" fill="#432A0F"/>
                                <circle cx="21.3333" cy="13.3333" r="1.33333" fill="#432A0F"/>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="d-flex tab_phonelist_re">
                    <h5 class="membertitle-re col-6 d-md-none p-0 d-inline-block px-3">會員資料</h5>
                    <h5 class="membertitle-re col-6 p-0 d-inline-block px-3">修改密碼</h5>
                </div>
                <form name='form_forget_re' class="padding225-re" method="post" onsubmit=" checkFormPassword(); return false;"> 
                <input type="hidden" name="id" value="<?= $r_re['id'] ?>">
                    <div class="mb-3">
                        <label for="account" class="form-label-re text-18-re">舊密碼<span style="color:#963C38">*</span></label><br>
                        <input id="oldpassword_re" name="oldpassword_re" class="input-re noline-re" type="password" placeholder=" 請輸入舊密碼" required>
                    </div>
                    <div class="mb-3">
                        <label for="account" class="form-label-re text-18-re">新密碼<span style="color:#963C38">*</span></label><br>
                        <input id="newpassword_re" name="newpassword_re" class="input-re noline-re" type="password" placeholder=" 請輸入新密碼" required>
                    </div>
                    <div class="mb-3">
                        <label for="account" class="form-label-re text-18-re">請再次確認新密碼<span style="color:#963C38">*</span></label><br>
                        <input id="againpassword_re" name="againpassword_re" class="input-re noline-re" type="password" placeholder=" 請輸入新密碼" required>
                    </div>
                    <div id="password_msgContainer" style="width: 330px;"></div>
                    <div class="position-absolute fixedbtn_re"><input class="btn-re btn200-re phonewidth330-re mb-3" type="submit" value="儲存" ></div>
                </form>
            </div>

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
                    <?php foreach($p_rows as $r): ?>
                        <div class="col-6 col-md-3 px-2 pb-3">
                            <div class="card-re">
                                <div class="position-relative ">
                                    <div class="cardimg-re">
                                        <img src="./imgs/product/cards/<?= $r['product_card_img'] ?>.jpg" alt="">
                                    </div>
                                    <div class="position-absolute likeicon-re">
                                        <a href="javascript: removeItem_p(<?= $r['sid'] ?>)" data-onclick="event.currentTarget.closest('.card-re').remove()">
                                            <svg class="likeiconsvg-re" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path  fill="#CD562F" stroke="#432A0F" d="M15.2855 9.22197C12.9704 6.90689 9.21692 6.90689 6.90184 9.22197C4.58676 11.537 4.58676 15.2905 6.90184 17.6056L13.2503 23.9532C14.8378 25.5407 17.4116 25.5407 18.9991 23.9532L24.5083 18.444L24.5074 18.4431L25.3449 17.6056C27.66 15.2905 27.66 11.5371 25.3449 9.22197C23.0298 6.90689 19.2763 6.90689 16.9612 9.22197L16.1234 10.0598L15.2855 9.22197Z" stroke-width="2.66667"/>
                                            </svg>
                                        </a>
                                        
                                    </div>
                                </div>
                                <div class="card-body-re">
                                    <p class="card-title-re textphone-14-re mb-2 word-wrap-re"><?= $r['product_name'] ?></p>
                                    <div class="d-flex">
                                        <p class="text-20-re price-re col-9 p-0 my-auto"><?= $r['product_price'] ?></p>
                                        <button class="btn-re btn200-re col-3 p-0"  data-sid="<?= $r['sid']?>" onclick="addToCartP_re(event)">
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
                    </div> 
                    <!-- <div class="pagebtngroup-re text-center mb-3">
                        <button type="button" class="pagebtn-re ">
                            <svg width="16" height="21" viewBox="0 0 16 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.12603 11.3113C0.572142 10.9122 0.572141 10.0878 1.12603 9.68867L13.4396 0.816415C14.1011 0.339827 15.0242 0.812491 15.0242 1.62775L15.0242 19.3723C15.0242 20.1875 14.1011 20.6602 13.4396 20.1836L1.12603 11.3113Z" fill="#432A0F" fill-opacity="0.38"/>
                            </svg>
                        </button>
                        < ?php for($i=$page - 2; $i<=$page + 2; $i++): 
                            if($i>=1 and $i <= $totalPages) : ?>
                            <button type="button" class="pagebtn-re" < ?= $page==$i ? 'active' : '' ?>>
                                <a class="page-link" href="?page=< ?= $i ?>">< ?= $i ?></a>
                            </button>
                        < ?php endif; endfor; ?>
                        <button type="button" class="pagebtn-re">1</button>
                        <button type="button" class="pagebtn-re">2</button>
                        <button type="button" class="pagebtn-re">3</button>
                        <button type="button" class="pagebtn-re">
                            <svg width="15" height="21" viewBox="0 0 15 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.9062 9.68867C14.4601 10.0878 14.4601 10.9122 13.9062 11.3113L1.59262 20.1836C0.931172 20.6602 0.00803278 20.1875 0.00803282 19.3722L0.00803359 1.62775C0.00803363 0.812489 0.931174 0.339829 1.59262 0.816417L13.9062 9.68867Z" fill="#432A0F" fill-opacity="0.38"/>
                            </svg>
                        </button>
                    </div> -->
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
                    <?php foreach($t_rows as $r): ?>
                        <div class="col-6 col-md-3 px-2 pb-3">
                            <div class="card-re">
                                <div class="position-relative">
                                    <div class="cardimg-re">
                                    <img src="./imgs/travel/cards/<?= $r['travelcard_img'] ?>" alt="">
                                    </div>
                                    <div class="position-absolute likeicon-re">
                                        <a href="javascript: removeItem_t(<?= $r['sid'] ?>)" data-onclick="event.currentTarget.closest('.card-re').remove()">
                                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill="#CD562F" stroke="#432A0F" d="M15.2855 9.22197C12.9704 6.90689 9.21692 6.90689 6.90184 9.22197C4.58676 11.537 4.58676 15.2905 6.90184 17.6056L13.2503 23.9532C14.8378 25.5407 17.4116 25.5407 18.9991 23.9532L24.5083 18.444L24.5074 18.4431L25.3449 17.6056C27.66 15.2905 27.66 11.5371 25.3449 9.22197C23.0298 6.90689 19.2763 6.90689 16.9612 9.22197L16.1234 10.0598L15.2855 9.22197Z" stroke-width="2.66667"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="card-body-re">
                                    <p class="card-title-re textphone-14-re word-wrap-re"><?= $r['travel_name'] ?></p>
                                    <div class="d-flex">
                                        <p class="text-20-re price-re col-9 p-0 my-auto"><?= $r['travel_price'] ?></p>
                                        <button class="btn-re btn200-re col-3 p-0" data-sid="<?= $r['sid']?>" onclick="addToCartT_re(event)">
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
                    </div>
                    <!-- <div class="pagebtngroup-re text-center mb-3">
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
                    </div> -->
                </div>
    <!-- p3-D------------------------------------------------------------------ -->
                <div id="tab03-re" class="tab-inner-re">
                    <div class="row mb-3 mx-0 likehight-re">
                        <?php foreach($d_rows as $r): ?>
                        <div class="col-6 col-md-4 likecard-re position-relative pb-3">
                            <img class="w-100" src="./imgs/love/<?= $r['img'] ?>" alt="">
                            <div class="position-absolute likeicon2-re">
                                <a href="javascript: removeItem_d(<?= $r['sid'] ?>)" data-onclick="event.currentTarget.closest('.card-re').remove()">
                                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="#CD562F" stroke="#432A0F" d="M15.2855 9.22197C12.9704 6.90689 9.21692 6.90689 6.90184 9.22197C4.58676 11.537 4.58676 15.2905 6.90184 17.6056L13.2503 23.9532C14.8378 25.5407 17.4116 25.5407 18.9991 23.9532L24.5083 18.444L24.5074 18.4431L25.3449 17.6056C27.66 15.2905 27.66 11.5371 25.3449 9.22197C23.0298 6.90689 19.2763 6.90689 16.9612 9.22197L16.1234 10.0598L15.2855 9.22197Z" stroke-width="2.66667"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <?php endforeach ?>
                    </div>
                    <!-- <div class="pagebtngroup-re text-center mb-3">
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
                    </div> -->
                </div>
    <!-- p3-F------------------------------------------------------------------ -->
                <div id="tab04-re" class="tab-inner-re">
                    <div class="row mb-3 mx-0 likehight-re">
                    <?php foreach($f_rows as $r): ?>
                    <div class="col-6 col-md-4 likecard-re position-relative pb-3">
                        <img class="w-100" src="./imgs/love/<?= $r['img'] ?>" alt="">
                        <div class="position-absolute likeicon2-re">
                            <a href="javascript: removeItem_f(<?= $r['sid'] ?>)" data-onclick="event.currentTarget.closest('.card-re').remove()">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="#CD562F" stroke="#432A0F" d="M15.2855 9.22197C12.9704 6.90689 9.21692 6.90689 6.90184 9.22197C4.58676 11.537 4.58676 15.2905 6.90184 17.6056L13.2503 23.9532C14.8378 25.5407 17.4116 25.5407 18.9991 23.9532L24.5083 18.444L24.5074 18.4431L25.3449 17.6056C27.66 15.2905 27.66 11.5371 25.3449 9.22197C23.0298 6.90689 19.2763 6.90689 16.9612 9.22197L16.1234 10.0598L15.2855 9.22197Z" stroke-width="2.66667"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <?php endforeach ?>


                    </div>
                    <!-- <div class="pagebtngroup-re text-center mb-3">
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
                    </div> -->
                </div>
            </div>
<!-- p4-orderlist----------------------------------------------------------------------------------- -->
            <div id="orderlist-page-re" class="item_re">
                <ul class="ordertab-title-re liketitle-all-re d-flax p-0">
                    <li class="col-6 d-inline-block liketitle-re text-20-re text-center active-re"><a class="active activetext-re" href="#tab05-re">獨家商品</a></li><li class="col-6 d-inline-block liketitle-re text-20-re text-center "><a href="#tab06-re">旅遊行程</a></li>
                </ul>
    <!-- p4-P------------------------------------------------------------------ -->
                <div id="tab05-re" class="ordertab-inner-re">
                        <div class="d-md-flex flex-nowrap orderlist-title-re p-0 ">
                            <div class="col-md textphone-16-re text-center">訂單日期</div>
                            <div class="col-md textphone-16-re text-center">訂單編號</div>
                            <div class="col-md textphone-16-re text-center">訂單金額</div>
                            <div class="col-md textphone-16-re text-center">訂單狀態</div>
                            <div class="col-md textphone-16-re text-center">訂單備註</div>
                        </div>
                    <?php foreach($po_rows as $r): ?>
                        <!-- 訂單查詢 -->
                        <div class="d-md-flex orderlist-re py-3">
                            <div class="col text-16-re text-center"><?= $r['created_at'] ?></div>
                            <div class="col text-16-re text-center">PO2022<?= $r['sid'] ?></div>
                            <div class="col text-16-re text-center price-re"><?= $r['price'] ?></div>
                            <div class="col text-16-re text-center"><?= $r['state'] ?></div>
                            <div class="col text-center orderbtn-re orderbtnP-re">
                                查詢訂單
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 9L11.3415 15.4238C11.7185 15.7537 12.2815 15.7537 12.6585 15.4238L20 9" stroke="#432A0F" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round"/>
                                </svg>
                            </div>
                        </div>
                        <!-- 訂單明細內容 -->
                        <div class="listslide-re px-3 py-3 ">
                            <?php foreach($polist_rows as $rList): ?>
                                <?php if($rList['sid'] === $r['sid']) :?>
                                    <table class="inside-orderlisttable-re tablehover text-center w-100" >
                                        <thead class="col-3 p-0">
                                            <tr class="orderlist-title-re orderlisttitle-inside-re">
                                                <th class="col-12 col-md-3 text-18-re text-center ordertitle-pic-re">商品圖片</th>
                                                <th class="col-12 col-md-3 text-18-re text-center ordertitle-name-re">商品名稱</th>
                                                <!-- <th class="col-12 col-md-2 text-18-re text-center ordertitle-other-re">規格</th> -->
                                                <th class="col-12 col-md-2 text-18-re text-center ordertitle-other-re">單價</th>
                                                <th class="col-12 col-md-2 text-18-re text-center ordertitle-other-re">數量</th>
                                                <th class="col-12 col-md-2 text-18-re text-center ordertitle-other-re">小計</th>
                                                <!-- <th class="col-12 col-md-1 text-18-re text-center ordertitle-other2-re"></th> -->
                                            </tr>
                                        </thead>
                                        <tbody class="col-9 p-0">
                                            <tr class="orderlist-re col-12 p-0">
                                                <td class="orderimgwarp-re text-center px-3"><img class="w-100" src="./imgs/product/cards/<?= $rList['product_card_img'] ?>.jpg" alt=""></td>
                                                <td class="productname-re text-16-re text-center m-0"><?= $rList['product_name'] ?></td>
                                                <!-- <td class="text-16-re text-center ordertitle-other-re">< ?= $rList['product_name'] ?></td> -->
                                                <td class="ext-16-re text-center ordertitle-other-re price-re"><?= $r['price'] ?></td>
                                                <td class="text-16-re text-center ordertitle-other-re"><?= $rList['quantity'] ?></td>
                                                <td class="ext-16-re text-center ordertitle-other-re price-re"><?= $rList['total'] ?></td>
                                                <td class="text-center ordertitle-other2-re ">
                                                    <button class="evaluation-btn-re btn-re phonewidth250-re text-16-re py-2" data-pid="<?= $rList['product_sid'] ?>" data-form="orderForm<?= $r['sid'] ?>">給予評價</button></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                <?php endif ?>
                            <?php endforeach ?>
                            <div class="d-flex flex-wrap pt-3">
                                <div class="col-12 col-md-6 px-2">
                                    <table class="w-100">
                                        <tr>
                                            <th colspan="2" class="text-16-re text-center bgcolor-re">收件人資訊</th>
                                        </tr>
                                        <tr>
                                            <th class="text-16-re py-1 widht30-re">收件人姓名</th>
                                            <td class="text-16-re py-1"><?= $rList['name'] ?></td>
                                        </tr>
                                        <tr>
                                            <th class="text-16-re py-1">收件人電話</th>
                                            <td class="text-16-re py-1"><?= $rList['phone'] ?></td>
                                        </tr>
                                        <tr>
                                            <th class="text-16-re py-1">收件人地址</th>
                                            <td class="text-16-re py-1"><?= $rList['city'] ?><?= $rList['region'] ?><?= $rList['address'] ?></td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-12 col-md-6 px-2">
                                    <table class="w-100">
                                        <tr>
                                            <th colspan="2" class="text-16-re text-center bgcolor-re">物流及付款資訊</th>
                                        </tr>
                                        <tr>
                                            <th class="text-16-re py-1 widht30-re">收件方式</th>
                                            <td class="text-16-re py-1"><?= $r['delivery'] ?></td>
                                        </tr>
                                        <tr>
                                            <th class="text-16-re py-1">付款方式</th>
                                            <td class="text-16-re py-1"><?= $r['payment'] ?></td>
                                        </tr>
                                        <tr>
                                            <th class="text-16-re py-1">付款狀態</th>
                                            <td class="text-16-re py-1"><?= $r['state'] ?></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    
                        <!-- 評論 -->
                        <form class="commentslide-re px-3 py-3 position-relative" id='orderForm<?= $r['sid'] ?>' method="post" onsubmit="checkFormReviewP(event); return false;">
                            <input type="hidden" name="product_sid">
                            <input type="hidden" name="star_num" value="">
                            <input type="hidden" name="target_type" value="1">
                            <h6 class="mb-3">請給這次的體驗打個分數吧！</h6>
                            <div class="ordercross-re ordercross01-re d-inline-block position-absolute">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.66663 6.66666L25.3333 25.3333" stroke="#432A0F" stroke-width="2.66667" stroke-linecap="round"/>
                                    <path d="M25.3333 6.66666L6.66659 25.3333" stroke="#432A0F" stroke-width="2.66667" stroke-linecap="round"/>
                                </svg>
                            </div>
                                <div class="pb-3">
                                    <svg data-val="1" class="star-re mx-1" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#E5A62A" stroke-width="2.66667" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.7617 3.3816C12.9756 1.88483 10.6717 1.99174 10.1024 3.70234L8.69513 7.93109H4.27626C2.32724 7.93109 1.52943 10.4347 3.1191 11.5623L6.65256 14.0689L5.27732 18.2013C4.66691 20.0356 6.75544 21.5826 8.33216 20.4641L12.0001 17.8622L15.668 20.4641C17.2447 21.5826 19.3333 20.0356 18.7228 18.2013L17.3476 14.0689L20.8811 11.5623C22.4707 10.4347 21.6729 7.93109 19.7239 7.93109H15.305L13.8978 3.70234C13.8598 3.5883 13.8141 3.48139 13.7617 3.3816Z"/>
                                    </svg>
                                    <svg data-val="2" class="star-re  mx-1" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#E5A62A" stroke-width="2.66667" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.7617 3.3816C12.9756 1.88483 10.6717 1.99174 10.1024 3.70234L8.69513 7.93109H4.27626C2.32724 7.93109 1.52943 10.4347 3.1191 11.5623L6.65256 14.0689L5.27732 18.2013C4.66691 20.0356 6.75544 21.5826 8.33216 20.4641L12.0001 17.8622L15.668 20.4641C17.2447 21.5826 19.3333 20.0356 18.7228 18.2013L17.3476 14.0689L20.8811 11.5623C22.4707 10.4347 21.6729 7.93109 19.7239 7.93109H15.305L13.8978 3.70234C13.8598 3.5883 13.8141 3.48139 13.7617 3.3816Z"/>
                                    </svg>
                                    <svg data-val="3" class="star-re  mx-1" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#E5A62A" stroke-width="2.66667" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.7617 3.3816C12.9756 1.88483 10.6717 1.99174 10.1024 3.70234L8.69513 7.93109H4.27626C2.32724 7.93109 1.52943 10.4347 3.1191 11.5623L6.65256 14.0689L5.27732 18.2013C4.66691 20.0356 6.75544 21.5826 8.33216 20.4641L12.0001 17.8622L15.668 20.4641C17.2447 21.5826 19.3333 20.0356 18.7228 18.2013L17.3476 14.0689L20.8811 11.5623C22.4707 10.4347 21.6729 7.93109 19.7239 7.93109H15.305L13.8978 3.70234C13.8598 3.5883 13.8141 3.48139 13.7617 3.3816Z"/>
                                    </svg>
                                    <svg data-val="4" class="star-re  mx-1" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#E5A62A" stroke-width="2.66667" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.7617 3.3816C12.9756 1.88483 10.6717 1.99174 10.1024 3.70234L8.69513 7.93109H4.27626C2.32724 7.93109 1.52943 10.4347 3.1191 11.5623L6.65256 14.0689L5.27732 18.2013C4.66691 20.0356 6.75544 21.5826 8.33216 20.4641L12.0001 17.8622L15.668 20.4641C17.2447 21.5826 19.3333 20.0356 18.7228 18.2013L17.3476 14.0689L20.8811 11.5623C22.4707 10.4347 21.6729 7.93109 19.7239 7.93109H15.305L13.8978 3.70234C13.8598 3.5883 13.8141 3.48139 13.7617 3.3816Z"/>
                                    </svg>
                                    <svg data-val="5" class="star-re  mx-1" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#E5A62A" stroke-width="2.66667" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.7617 3.3816C12.9756 1.88483 10.6717 1.99174 10.1024 3.70234L8.69513 7.93109H4.27626C2.32724 7.93109 1.52943 10.4347 3.1191 11.5623L6.65256 14.0689L5.27732 18.2013C4.66691 20.0356 6.75544 21.5826 8.33216 20.4641L12.0001 17.8622L15.668 20.4641C17.2447 21.5826 19.3333 20.0356 18.7228 18.2013L17.3476 14.0689L20.8811 11.5623C22.4707 10.4347 21.6729 7.93109 19.7239 7.93109H15.305L13.8978 3.70234C13.8598 3.5883 13.8141 3.48139 13.7617 3.3816Z"/>
                                    </svg>
                                </div>
                            <p class="">請告訴我們您的想法</p>
                            <textarea class="evaluation-textarea-re" cols="121" rows="3" name="content_p" maxlength="250" style="OVERFLOW:hidden"></textarea>
                            <div id="tagall-re" class="d-flex py-2 scroll-snap-re">
                                <label><input id="tag-re-1" type="checkbox" name="tag_re[]" value="1" /><span class="tagbutton-re tag-re text-14-re px-2 mr-2">出貨超快速</span></label>
                                <label><input id="tag-re-2" type="checkbox" name="tag_re[]" value="2" /><span class="tagbutton-re tag-re text-14-re px-2 mr-2">ＣＰ值超高</span></label>
                                <label><input id="tag-re-3" type="checkbox" name="tag_re[]" value="3" /><span class="tagbutton-re tag-re text-14-re px-2 mr-2">商品超可愛</span></label>
                                <label><input id="tag-re-4" type="checkbox" name="tag_re[]" value="4" /><span class="tagbutton-re tag-re text-14-re px-2 mr-2">商品品質爆表</span></label>
                                <label><input id="tag-re-5" type="checkbox" name="tag_re[]" value="5" /><span class="tagbutton-re tag-re text-14-re px-2 mr-2">服務態度超好</span></label>
                            </div>
                            <div class="d-flex justify-content-end"><input class="btn-re btn200-re phonewidth330-re" type="submit" value="儲存"></div>
                        </form>
                    <?php endforeach ?>
                    <!-- 評論 -->
                    <!-- <form class="commentslide-re px-3 py-3 position-relative" id='orderForm< ?= $r['sid'] ?>' method="post" onsubmit="checkFormReviewP(event); return false;">
                            <input type="hidden" name="product_sid">
                            <input type="hidden" name="star_num" value="">
                            <input type="hidden" name="target_type" value="1">
                            <h6 class="mb-3">請給這次的體驗打個分數吧！</h6>
                            <div class="ordercross-re ordercross01-re d-inline-block position-absolute">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.66663 6.66666L25.3333 25.3333" stroke="#432A0F" stroke-width="2.66667" stroke-linecap="round"/>
                                    <path d="M25.3333 6.66666L6.66659 25.3333" stroke="#432A0F" stroke-width="2.66667" stroke-linecap="round"/>
                                </svg>
                            </div>
                                <div class="pb-3">
                                    <svg data-val="1" class="star-re mx-1" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#E5A62A" stroke-width="2.66667" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.7617 3.3816C12.9756 1.88483 10.6717 1.99174 10.1024 3.70234L8.69513 7.93109H4.27626C2.32724 7.93109 1.52943 10.4347 3.1191 11.5623L6.65256 14.0689L5.27732 18.2013C4.66691 20.0356 6.75544 21.5826 8.33216 20.4641L12.0001 17.8622L15.668 20.4641C17.2447 21.5826 19.3333 20.0356 18.7228 18.2013L17.3476 14.0689L20.8811 11.5623C22.4707 10.4347 21.6729 7.93109 19.7239 7.93109H15.305L13.8978 3.70234C13.8598 3.5883 13.8141 3.48139 13.7617 3.3816Z"/>
                                    </svg>
                                    <svg data-val="2" class="star-re  mx-1" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#E5A62A" stroke-width="2.66667" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.7617 3.3816C12.9756 1.88483 10.6717 1.99174 10.1024 3.70234L8.69513 7.93109H4.27626C2.32724 7.93109 1.52943 10.4347 3.1191 11.5623L6.65256 14.0689L5.27732 18.2013C4.66691 20.0356 6.75544 21.5826 8.33216 20.4641L12.0001 17.8622L15.668 20.4641C17.2447 21.5826 19.3333 20.0356 18.7228 18.2013L17.3476 14.0689L20.8811 11.5623C22.4707 10.4347 21.6729 7.93109 19.7239 7.93109H15.305L13.8978 3.70234C13.8598 3.5883 13.8141 3.48139 13.7617 3.3816Z"/>
                                    </svg>
                                    <svg data-val="3" class="star-re  mx-1" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#E5A62A" stroke-width="2.66667" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.7617 3.3816C12.9756 1.88483 10.6717 1.99174 10.1024 3.70234L8.69513 7.93109H4.27626C2.32724 7.93109 1.52943 10.4347 3.1191 11.5623L6.65256 14.0689L5.27732 18.2013C4.66691 20.0356 6.75544 21.5826 8.33216 20.4641L12.0001 17.8622L15.668 20.4641C17.2447 21.5826 19.3333 20.0356 18.7228 18.2013L17.3476 14.0689L20.8811 11.5623C22.4707 10.4347 21.6729 7.93109 19.7239 7.93109H15.305L13.8978 3.70234C13.8598 3.5883 13.8141 3.48139 13.7617 3.3816Z"/>
                                    </svg>
                                    <svg data-val="4" class="star-re  mx-1" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#E5A62A" stroke-width="2.66667" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.7617 3.3816C12.9756 1.88483 10.6717 1.99174 10.1024 3.70234L8.69513 7.93109H4.27626C2.32724 7.93109 1.52943 10.4347 3.1191 11.5623L6.65256 14.0689L5.27732 18.2013C4.66691 20.0356 6.75544 21.5826 8.33216 20.4641L12.0001 17.8622L15.668 20.4641C17.2447 21.5826 19.3333 20.0356 18.7228 18.2013L17.3476 14.0689L20.8811 11.5623C22.4707 10.4347 21.6729 7.93109 19.7239 7.93109H15.305L13.8978 3.70234C13.8598 3.5883 13.8141 3.48139 13.7617 3.3816Z"/>
                                    </svg>
                                    <svg data-val="5" class="star-re  mx-1" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#E5A62A" stroke-width="2.66667" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.7617 3.3816C12.9756 1.88483 10.6717 1.99174 10.1024 3.70234L8.69513 7.93109H4.27626C2.32724 7.93109 1.52943 10.4347 3.1191 11.5623L6.65256 14.0689L5.27732 18.2013C4.66691 20.0356 6.75544 21.5826 8.33216 20.4641L12.0001 17.8622L15.668 20.4641C17.2447 21.5826 19.3333 20.0356 18.7228 18.2013L17.3476 14.0689L20.8811 11.5623C22.4707 10.4347 21.6729 7.93109 19.7239 7.93109H15.305L13.8978 3.70234C13.8598 3.5883 13.8141 3.48139 13.7617 3.3816Z"/>
                                    </svg>
                                </div>
                            <p class="">請告訴我們您的想法</p>
                            <textarea class="evaluation-textarea-re" cols="121" rows="3" name="content_p" maxlength="250" style="OVERFLOW:hidden"></textarea>
                            <div id="tagall-re" class="d-flex py-2 scroll-snap-re">
                                <label><input id="tag-re-1" type="checkbox" name="tag_re[]" value="1" /><span class="tagbutton-re tag-re text-14-re px-2 mr-2">出貨超快速</span></label>
                                <label><input id="tag-re-2" type="checkbox" name="tag_re[]" value="2" /><span class="tagbutton-re tag-re text-14-re px-2 mr-2">ＣＰ值超高</span></label>
                                <label><input id="tag-re-3" type="checkbox" name="tag_re[]" value="3" /><span class="tagbutton-re tag-re text-14-re px-2 mr-2">商品超可愛</span></label>
                                <label><input id="tag-re-4" type="checkbox" name="tag_re[]" value="4" /><span class="tagbutton-re tag-re text-14-re px-2 mr-2">商品品質爆表</span></label>
                                <label><input id="tag-re-5" type="checkbox" name="tag_re[]" value="5" /><span class="tagbutton-re tag-re text-14-re px-2 mr-2">服務態度超好</span></label>
                            </div>
                            <div class="d-flex justify-content-end"><input class="btn-re btn200-re phonewidth330-re" type="submit" value="儲存"></div>
                    </form> -->
                </div>
    <!-- p4-T------------------------------------------------------------------ -->
                <div id="tab06-re" class="ordertab-inner-re">
                        <div class="d-md-flex flex-nowrap orderlist-title-re">
                            <div class="col-md textphone-16-re text-center">訂單日期</div>
                            <div class="col-md textphone-16-re text-center">訂單編號</div>
                            <div class="col-md textphone-16-re text-center">訂單金額</div>
                            <div class="col-md textphone-16-re text-center">訂單狀態</div>
                            <div class="col-md textphone-16-re text-center">訂單備註</div>
                        </div>
                    <?php foreach($to_rows as $t): ?>
                        <!-- 訂單查詢 -->
                        <div class="d-md-flex orderlist-re py-3">
                            <div class="col text-16-re text-center"><?= $t['created_at'] ?></div>
                            <div class="col text-16-re text-center">TO2022<?= $t['sid'] ?></div>
                            <div class="col text-16-re text-center price-re"><?= $t['price'] ?></div>
                            <div class="col text-16-re text-center"><?= $t['state'] ?></div>
                            <div class="col orderbtn-re orderbtnT-re text-center">
                                查詢訂單
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 9L11.3415 15.4238C11.7185 15.7537 12.2815 15.7537 12.6585 15.4238L20 9" stroke="#432A0F" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round"/>
                                </svg>
                            </div>
                        </div>
                        <!-- 訂單明細內容 -->
                        <div class="listslideT-re px-3 py-3">
                            <?php foreach($tolist_rows as $tList): ?>
                                <?php if($tList['sid'] === $t['sid']) :?>
                            <table class="inside-orderlisttable-re tablehover text-center w-100" >
                                <thead class="col-3 p-0">
                                    <tr class="orderlist-title-re orderlisttitle-inside-re">
                                        <th class="col-12 col-md-3 text-18-re text-center ordertitle-pic-re">行程圖片</th>
                                        <th class="col-12 col-md-3 text-18-re text-center ordertitle-name-re">行程名稱</th>
                                        <th class="col-12 col-md-2 text-18-re text-center ordertitle-other-re">單價</th>
                                        <th class="col-12 col-md-2 text-18-re text-center ordertitle-other-re">數量</th>
                                        <th class="col-12 col-md-2 text-18-re text-center ordertitle-other-re">小計</th>
                                        <!-- <th class="col-1 text-18-re"></th> -->
                                    </tr>
                                </thead>
                                <tbody class="col-9 p-0">
                                    <tr class="orderlist-re col-12 p-0">
                                        <td class="orderimgwarp-re text-center px-3"><img class="w-100" src="./imgs/travel/cards/<?= $tList['travelcard_img'] ?>" alt=""></td>
                                        <td class="productname-re text-16-re text-center m-0"><?= $tList['travel_name'] ?></td>
                                        <td class="ext-16-re text-center ordertitle-other-re price-re"><?= $t['price'] ?></td>
                                        <td class="text-16-re text-center ordertitle-other-re"><?= $tList['quantity'] ?></td>
                                        <td class="ext-16-re text-center ordertitle-other-re price-re"><?= $tList['total'] ?></td>
                                        <td class="text-center ordertitle-other2-re "><button class="evaluationT-btn-re btn-re phonewidth250-re text-16-re py-2">給予評價</button></td>
                                    </tr>
                                </tbody>
                            </table>
                            <?php endif ?>
                            <?php endforeach ?>
                            <div class="d-flex flex-wrap pt-3">
                                <div class="col-12 col-md-6 px-2">
                                    <table class="w-100">
                                        <tr>
                                            <th colspan="2" class="text-16-re text-center bgcolor-re">收件人資訊</th>
                                        </tr>
                                        <tr>
                                            <th class="text-16-re py-1 widht30-re">訂購人姓名</th>
                                            <td class="text-16-re py-1"><?= $tList['name'] ?></td>
                                        </tr>
                                        <tr>
                                            <th class="text-16-re py-1">訂購人電話</th>
                                            <td class="text-16-re py-1"><?= $tList['phone'] ?></td>
                                        </tr>
                                        <tr>
                                            <th class="text-16-re py-1">訂購人地址</th>
                                            <td class="text-16-re py-1"><?= $tList['city'] ?><?= $tList['region'] ?><?= $tList['address'] ?></td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-12 col-md-6 px-2">
                                    <table class="w-100">
                                        <tr>
                                            <th colspan="2" class="text-16-re text-center bgcolor-re">物流及付款資訊</th>
                                        </tr>
                                        <tr>
                                            <th class="text-16-re py-1 widht30-re">付款方式</th>
                                            <td class="text-16-re py-1">信用卡</td>
                                        </tr>
                                        <tr>
                                            <th class="text-16-re py-1">付款狀態</th>
                                            <td class="text-16-re py-1">訂單完成</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- 評論 -->
                        <form class="commentslideT-re px-3 py-3 position-relative">
                            <h6 class="mb-3">請給這次的體驗打個分數吧！</h6>
                            <div class="ordercross-re ordercrossT-re d-inline-block position-absolute">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.66663 6.66666L25.3333 25.3333" stroke="#432A0F" stroke-width="2.66667" stroke-linecap="round"/>
                                    <path d="M25.3333 6.66666L6.66659 25.3333" stroke="#432A0F" stroke-width="2.66667" stroke-linecap="round"/>
                                </svg>
                            </div>
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
                            <div id="tagall-re" class="d-flex py-2 scroll-snap-re">
                                <!-- <div id="tag-re" class="tag-re text-14-re px-2 mr-2" type="checkbox">出貨超快速</div>
                                <div id="tag-re" class="tag-re text-14-re px-2 mr-2" type="checkbox">ＣＰ值超高</div>
                                <div id="tag-re" class="tag-re text-14-re px-2 mr-2">商品超可愛</div>
                                <div id="tag-re" class="tag-re text-14-re px-2 mr-2">商品品質爆表</div>
                                <div id="tag-re" class="tag-re text-14-re px-2 mr-2">服務態度超好</div> -->
                                
                                <label><input id="tag-re" type="checkbox" name="tag-re" value="1" /><span class="tagbutton-re tag-re text-14-re px-2 mr-2">出貨超快速</span></label>
                                <label><input id="tag-re" type="checkbox" name="tag-re" value="2" /><span class="tagbutton-re tag-re text-14-re px-2 mr-2">ＣＰ值超高</span></label>
                                <label><input id="tag-re" type="checkbox" name="tag-re" value="3" /><span class="tagbutton-re tag-re text-14-re px-2 mr-2">商品超可愛</span></label>
                                <label><input id="tag-re" type="checkbox" name="tag-re" value="4" /><span class="tagbutton-re tag-re text-14-re px-2 mr-2">商品品質爆表</span></label>
                                <label><input id="tag-re" type="checkbox" name="tag-re" value="5" /><span class="tagbutton-re tag-re text-14-re px-2 mr-2">服務態度超好</span></label>
                            </div>
                            <div class="d-flex justify-content-end"><input class="btn-re btn200-re phonewidth330-re" type="submit" value="儲存" data-sid="<? $t['travel_sid'] ?>"></div>
                        </form>
                    <?php endforeach ?>
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
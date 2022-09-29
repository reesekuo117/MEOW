<?php
require __DIR__. '/parts/meow_db.php';  // /開頭
$pageName = '線上求籤'; //頁面名稱
$title = '線上求籤';

//月老推薦卡片
$sqlArea = sprintf("SELECT * FROM `address`");
$areaRows = $pdo->query($sqlArea)->fetchAll();

$t1_sql ="SELECT * FROM `travel` WHERE  sid IN(6,19,1,73,39)";
$travel_1 = $pdo->query($t1_sql )->fetchAll();
$t2_sql ="SELECT * FROM `travel` WHERE  sid IN(73,39,65)";
$travel_2 = $pdo->query($t2_sql )->fetchAll();

?>

<?php include __DIR__. '/parts/html-head.php'; ?>

<link rel="stylesheet" href="draw.css">
<!-- <link rel="stylesheet" href="product_index_style.css"> -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<?php include __DIR__. '/parts/navbar.php'; ?>


    <div class="body_draw23 d-none d-md-block">
        <div class="drawSection23 position-relative ">
            <a id="backtodraw19" class="position-absolute backto d-none" href="draw12.php">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M18.8518 3.47604C19.1413 3.9464 18.9946 4.56235 18.5243 4.8518L6.9082 12.0001L18.5243 19.1485C18.9946 19.4379 19.1413 20.0539 18.8518 20.5242C18.5624 20.9946 17.9464 21.1413 17.4761 20.8518L5.86001 13.7035C4.59094 12.9225 4.59093 11.0778 5.86001 10.2968L17.4761 3.14848C17.9464 2.85903 18.5624 3.00569 18.8518 3.47604Z"
                        fill="#432A0F" fill-opacity="0.38" />
                </svg>
            </a>
            <!-- <a id="musicSwitch" class="position-absolute musicSwitch" href="#">
                <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M4.93934 4.93934C5.52513 4.35355 6.47487 4.35355 7.06066 4.93934L12.612 10.4906L18.6398 6.27116C19.098 5.95041 19.6966 5.91124 20.1927 6.16954C20.6888 6.42783 21 6.94069 21 7.5V18.8787L23.3897 21.2684L23.1288 20.6596C23.2077 20.5769 23.2898 20.475 23.3731 20.3499C23.7302 19.8143 23.9999 18.9878 23.9999 18C23.9999 17.0122 23.7302 16.1858 23.3731 15.6501C23.2898 15.525 23.2077 15.4232 23.1288 15.3404L24.3425 12.5083C24.9665 12.8742 25.4814 13.4043 25.8693 13.986C26.5979 15.079 26.9999 16.5025 26.9999 18C26.9999 19.4975 26.5979 20.9211 25.8693 22.014C25.6448 22.3507 25.3778 22.6701 25.0717 22.9504L26.4066 24.2853C26.6087 24.0659 26.8055 23.8152 26.9944 23.5319C27.8944 22.1819 28.4998 20.2304 28.4998 18C28.4998 15.7695 27.8944 13.8181 26.9944 12.4681C26.4134 11.5966 25.7581 11.0341 25.0994 10.7423L26.2822 7.98244C27.5792 8.55058 28.6708 9.57439 29.4905 10.804C30.7621 12.7113 31.4998 15.2599 31.4998 18C31.4998 20.7401 30.7621 23.2887 29.4905 25.196C29.2022 25.6285 28.8802 26.0355 28.5275 26.4062L31.0607 28.9393C31.6464 29.5251 31.6464 30.4749 31.0607 31.0607C30.4749 31.6464 29.5251 31.6464 28.9393 31.0607L4.93934 7.06066C4.35355 6.47487 4.35355 5.52513 4.93934 4.93934ZM18 15.8787V10.381L14.7661 12.6447L18 15.8787Z"
                        fill="#432A0F" fill-opacity="0.38" />
                    <path
                        d="M7.33873 11.3994C5.63464 12.4578 4.5 14.3464 4.5 16.5V19.5C4.5 22.8137 7.18629 25.5 10.5 25.5H12.5986L18.6398 29.7289C19.098 30.0496 19.6966 30.0888 20.1927 29.8305C20.6888 29.5722 21 29.0593 21 28.5V25.0607L18 22.0607V25.619L13.5 22.469V17.5607L10.5 14.5607V22.5C8.84315 22.5 7.5 21.1569 7.5 19.5V16.5C7.5 15.1632 8.37432 14.0307 9.5823 13.643L7.33873 11.3994Z"
                        fill="#432A0F" fill-opacity="0.38" />
                </svg>
            </a> -->
            <!-- <a class="position-absolute youcantseeme" href="draw01.php"></a> -->

            <div class="lightfix position-relative">
                <div class="light_ba position-absolute">
                </div>
            </div>

            <div class="grain_ba position-absolute"></div>


            <div class="container">
                <h1 class=""></h1>
                <div class="drawJade">
                    <div class="drawJadeImg position-absolute">
                        <img class="w-100" src="./imgs/draw/55.png" alt="">
                    </div>
                    <div class="jadeTophand position-absolute">
                        <img src="./imgs/draw/56.png" alt="">
                    </div>
                    <div class="drawCard position-absolute d-flex align-items-center">
                        <img class="w-100 " src="./imgs/draw/draw64.png" alt="">
                    </div>
                    <div class="jadeDownhand position-absolute">
                        <img src="./imgs/draw/57.png" alt="">
                    </div>
                    <div class="jadeSay mx-auto">
                        <div class="jadeSayBorder w-100 h-100">
                            <div class="jadeSaycontent overflow-hidden">
                                <h2 class="overflow-hidden mt-1">小玉的貼心提醒</h2>
                                <p class="overflow-hidden">
                                    如果願望成真，<br>
                                    記得帶一份喜餅到霞海城隍廟向月老還願，<br>
                                    若是在祈願時有另外向月老約定其他還願方式，<br>
                                    也要記得遵守和月老的承諾喔！
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
                <h2 class="recommendm_ba">月老喵誠心推薦</h2>

                <!-- 桌機卡片 -->

                        <!--  PC 月老喵推薦卡片  -->
        <div class="otherp">
            <div class="container">
                <!-- https://www.tutorialrepublic.com/codelab.php?topic=bootstrap&file=thumbnail-carousel-with-content -->
                <div class="row_07 d-flex">
                    <div class="col mx-auto">
                        <div id="myCarousel2" class="carousel carousel_card slide d-flex justify-content-center" data-ride="carousel" data-interval="0">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row_07 d-flex">
                                        <?php foreach ($travel_1 as $t) : ?>   
                                            <div class="col-md-4">
                                                <a href="">
                                                    <div class="thumb-wrapper mx-3">
                                                        <div class="img-box">
                                                            <img src="./imgs/travel/cards/<?= $t['travelcard_img'] ?>" class="img-fluid" alt="">
                                                            <div class="icon_heart">
                                                                <svg class="heart_line" width="32" height="32" viewBox="0 0 32 32" fill="none" stroke="#fff" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M15.2855 9.22197C12.9704 6.90689 9.21692 6.90689 6.90184 9.22197C4.58676 11.537 4.58676 15.2905 6.90184 17.6056L13.2503 23.9532C14.8378 25.5407 17.4116 25.5407 18.9991 23.9532L24.5083 18.444L24.5074 18.4431L25.3449 17.6056C27.66 15.2905 27.66 11.5371 25.3449 9.22197C23.0298 6.90689 19.2763 6.90689 16.9612 9.22197L16.1234 10.0598L15.2855 9.22197Z" stroke-width="2.66667" />
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <div class="thumb-content">
                                                            <h6 class="mb-0" style="height: 50px"><?= $t['travel_name'] ?></h6>
                                                            <div class="card_small_mb d-flex justify-content-between mb-1">
                                                                <div class="small xs card-text d-flex">
                                                                    <div class="icon_location">
                                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M12 21.2445C11.7379 21.0503 11.4043 20.8032 11.4043 20.8032L12 21.2445Z" fill="#432A0F" fill-opacity="0.6" />
                                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 7C10.3431 7 9 8.34315 9 10C9 11.6569 10.3431 13 12 13C13.6569 13 15 11.6569 15 10C15 8.34315 13.6569 7 12 7ZM11 10C11 9.44772 11.4477 9 12 9C12.5523 9 13 9.44772 13 10C13 10.5523 12.5523 11 12 11C11.4477 11 11 10.5523 11 10Z" fill="#432A0F" fill-opacity="0.6" />
                                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.4043 20.8032L12 21.2445C12.33 21 12.5964 20.8027 12.5964 20.8027L12.5981 20.8014L12.6032 20.7976L12.6198 20.7851C12.6337 20.7747 12.6531 20.7599 12.6777 20.741C12.7268 20.7031 12.7968 20.6484 12.8845 20.5779C13.0599 20.4368 13.307 20.2317 13.6019 19.9696C14.1903 19.4466 14.976 18.6902 15.7643 17.756C17.314 15.9193 19 13.246 19 10.2222C19 6.26809 15.9 3 12 3C8.10004 3 5 6.26809 5 10.2222C5 13.246 6.68605 15.9193 8.23571 17.756C9.02395 18.6902 9.8097 19.4466 10.3981 19.9696C10.693 20.2317 10.9401 20.4368 11.1155 20.5779C11.2032 20.6484 11.2732 20.7031 11.3223 20.741C11.3469 20.7599 11.3663 20.7747 11.3802 20.7851L11.3968 20.7976L11.4019 20.8014L11.4043 20.8032ZM7 10.2222C7 7.30348 9.27254 5 12 5C14.7275 5 17 7.30348 17 10.2222C17 12.5317 15.686 14.7473 14.2357 16.4662C13.524 17.3098 12.8097 17.9979 12.2731 18.4748C12.1756 18.5615 12.0842 18.641 12 18.713C11.9158 18.641 11.8244 18.5615 11.7269 18.4748C11.1903 17.9979 10.4761 17.3098 9.76429 16.4662C8.31395 14.7473 7 12.5317 7 10.2222Z" fill="#432A0F" fill-opacity="0.6" />
                                                                        </svg>
                                                                        <?php foreach ($areaRows as $Yr) : ?>
                                                                            <?php if($Yr['sid']=== $t['travel_area']) : ?>
                                                                                <span>
                                                                                    <?= $Yr['city'] ?>
                                                                                </span>
                                                                            <?php endif ?>
                                                                        <?php endforeach ?>
                                                                    </div>
                                                                </div>
                                                                <div class="small xs card-text d-flex">
                                                                    <div class="icon_clock">
                                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M13 7C13 6.44772 12.5523 6 12 6C11.4477 6 11 6.44772 11 7V11H7C6.44772 11 6 11.4477 6 12C6 12.5523 6.44772 13 7 13H12C12.5523 13 13 12.5523 13 12V7Z" fill="#432A0F" fill-opacity="0.6" />
                                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3ZM5 12C5 8.13401 8.13401 5 12 5C15.866 5 19 8.13401 19 12C19 15.866 15.866 19 12 19C8.13401 19 5 15.866 5 12Z" fill="#432A0F" fill-opacity="0.6" />
                                                                        </svg>
                                                                        <span>出發日期：<?= $t['travel_date'] ?></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card_intro_mb card-text">
                                                                <small style="color: var(--color-text100);"><?= $t['travel_subheading']?></small>
                                                            </div>
                                                            <div class="card_under d-flex justify-content-between align-items-center">
                                                                <small class="xs card-text d-flex pr-2">
                                                                    <div class="icon_star pr-1" style="color: var(--color-yellow);">
                                                                        <i class="fa-solid fa-star"></i>
                                                                    </div><?= $t['travel_star']?>
                                                                </small>
                                                                <small class="xs card-text d-flex">
                                                                    <div class="icon_fire pr-1" style="color: var(--color-orange);">
                                                                        <i class="fa-solid fa-fire"></i>
                                                                    </div>
                                                                    <?= $t['travel_popular']?>個已訂購
                                                                </small>
                                                                <h5 class="m-0 ml-auto"><?= $t['travel_price']?></h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        <?php endforeach; ?>    
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="row_07 d-flex">
                                    <?php foreach ($travel_2 as $t) : ?>   
                                            <div class="col-md-4">
                                                <a href="">
                                                    <div class="thumb-wrapper mx-3">
                                                        <div class="img-box">
                                                            <img src="./imgs/travel/cards/<?= $t['travelcard_img'] ?>" class="img-fluid" alt="">
                                                            <div class="icon_heart">
                                                                <svg class="heart_line" width="32" height="32" viewBox="0 0 32 32" fill="none" stroke="#fff" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M15.2855 9.22197C12.9704 6.90689 9.21692 6.90689 6.90184 9.22197C4.58676 11.537 4.58676 15.2905 6.90184 17.6056L13.2503 23.9532C14.8378 25.5407 17.4116 25.5407 18.9991 23.9532L24.5083 18.444L24.5074 18.4431L25.3449 17.6056C27.66 15.2905 27.66 11.5371 25.3449 9.22197C23.0298 6.90689 19.2763 6.90689 16.9612 9.22197L16.1234 10.0598L15.2855 9.22197Z" stroke-width="2.66667" />
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <div class="thumb-content">
                                                            <h6 class="mb-0" style="height: 50px"><?= $t['travel_name'] ?></h6>
                                                            <div class="card_small_mb d-flex justify-content-between mb-1">
                                                                <small class="xs card-text d-flex">
                                                                    <div class="icon_location">
                                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M12 21.2445C11.7379 21.0503 11.4043 20.8032 11.4043 20.8032L12 21.2445Z" fill="#432A0F" fill-opacity="0.6" />
                                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 7C10.3431 7 9 8.34315 9 10C9 11.6569 10.3431 13 12 13C13.6569 13 15 11.6569 15 10C15 8.34315 13.6569 7 12 7ZM11 10C11 9.44772 11.4477 9 12 9C12.5523 9 13 9.44772 13 10C13 10.5523 12.5523 11 12 11C11.4477 11 11 10.5523 11 10Z" fill="#432A0F" fill-opacity="0.6" />
                                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.4043 20.8032L12 21.2445C12.33 21 12.5964 20.8027 12.5964 20.8027L12.5981 20.8014L12.6032 20.7976L12.6198 20.7851C12.6337 20.7747 12.6531 20.7599 12.6777 20.741C12.7268 20.7031 12.7968 20.6484 12.8845 20.5779C13.0599 20.4368 13.307 20.2317 13.6019 19.9696C14.1903 19.4466 14.976 18.6902 15.7643 17.756C17.314 15.9193 19 13.246 19 10.2222C19 6.26809 15.9 3 12 3C8.10004 3 5 6.26809 5 10.2222C5 13.246 6.68605 15.9193 8.23571 17.756C9.02395 18.6902 9.8097 19.4466 10.3981 19.9696C10.693 20.2317 10.9401 20.4368 11.1155 20.5779C11.2032 20.6484 11.2732 20.7031 11.3223 20.741C11.3469 20.7599 11.3663 20.7747 11.3802 20.7851L11.3968 20.7976L11.4019 20.8014L11.4043 20.8032ZM7 10.2222C7 7.30348 9.27254 5 12 5C14.7275 5 17 7.30348 17 10.2222C17 12.5317 15.686 14.7473 14.2357 16.4662C13.524 17.3098 12.8097 17.9979 12.2731 18.4748C12.1756 18.5615 12.0842 18.641 12 18.713C11.9158 18.641 11.8244 18.5615 11.7269 18.4748C11.1903 17.9979 10.4761 17.3098 9.76429 16.4662C8.31395 14.7473 7 12.5317 7 10.2222Z" fill="#432A0F" fill-opacity="0.6" />
                                                                        </svg>
                                                                        <?php foreach ($areaRows as $Yr) : ?>
                                                                            <?php if($Yr['sid']=== $t['travel_area']) : ?>
                                                                                <span>
                                                                                    <?= $Yr['city'] ?>
                                                                                </span>
                                                                            <?php endif ?>
                                                                        <?php endforeach ?>
                                                                    </div>
                                                                </small>
                                                                <small class="xs card-text d-flex">
                                                                    <div class="icon_clock">
                                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M13 7C13 6.44772 12.5523 6 12 6C11.4477 6 11 6.44772 11 7V11H7C6.44772 11 6 11.4477 6 12C6 12.5523 6.44772 13 7 13H12C12.5523 13 13 12.5523 13 12V7Z" fill="#432A0F" fill-opacity="0.6" />
                                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3ZM5 12C5 8.13401 8.13401 5 12 5C15.866 5 19 8.13401 19 12C19 15.866 15.866 19 12 19C8.13401 19 5 15.866 5 12Z" fill="#432A0F" fill-opacity="0.6" />
                                                                        </svg>
                                                                        <span>出發日期：<?= $t['travel_date'] ?></span>
                                                                    </div>
                                                                </small>
                                                            </div>
                                                            <div class="card_intro_mb card-text">
                                                                <small style="color: var(--color-text100);"><?= $t['travel_subheading']?></small>
                                                            </div>
                                                            <div class="card_under d-flex justify-content-between align-items-center">
                                                                <small class="xs card-text d-flex pr-2">
                                                                    <div class="icon_star pr-1" style="color: var(--color-yellow);">
                                                                        <i class="fa-solid fa-star"></i>
                                                                    </div><?= $t['travel_star']?>
                                                                </small>
                                                                <small class="xs card-text d-flex">
                                                                    <div class="icon_fire pr-1" style="color: var(--color-orange);">
                                                                        <i class="fa-solid fa-fire"></i>
                                                                    </div>
                                                                    <?= $t['travel_popular']?>個已訂購
                                                                </small>
                                                                <h5 class="m-0 ml-auto"><?= $t['travel_price']?></h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        <?php endforeach; ?>  
                                    </div>
                                </div>
                            </div>
                            <!-- Carousel controls -->
                            <a class="carousel-control-prev" href="#myCarousel2" data-slide="prev">
                                <i class="fa-solid fa-caret-left"></i>
                            </a>
                            <a class="carousel-control-next" href="#myCarousel2" data-slide="next">
                                <i class="fa-solid fa-caret-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                <div class="drawSection23btngroup">
                    <a href="product_index.php">
                        <button class="btn-xl">
                            <h4>
                                看更多商品
                            </h4>
                        </button>
                    </a>
                    <a href="travel_index.php">
                        <button class="btn-xl">
                            <h4>
                                看更多行程
                            </h4>
                        </button>
                    </a>
                </div>

                




            </div>

        </div>
            </div>
        </div>

    </div>

    <div class="body_draw01m d-md-none">
        <div class="mdrawSection23 position-relative flex-row justify-content-center mb-5">
            <a id="" class="position-absolute musicSwitch d-none" href="#">
                <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M3.84171 3.84171C4.29732 3.3861 5.03601 3.3861 5.49162 3.84171L9.80931 8.15939L14.4976 4.87757C14.854 4.6281 15.3196 4.59763 15.7054 4.79853C16.0913 4.99943 16.3333 5.39832 16.3333 5.83334V14.6834L18.192 16.5421L17.9891 16.0686C18.0505 16.0042 18.1143 15.925 18.1791 15.8277C18.4569 15.4111 18.6666 14.7683 18.6666 14C18.6666 13.2317 18.4569 12.5889 18.1791 12.1723C18.1143 12.075 18.0505 11.9958 17.9891 11.9315L18.9331 9.72871C19.4184 10.0133 19.8189 10.4255 20.1205 10.878C20.6873 11.7281 20.9999 12.8353 20.9999 14C20.9999 15.1647 20.6873 16.2719 20.1205 17.122C19.946 17.3839 19.7383 17.6323 19.5002 17.8503L20.5384 18.8885C20.6957 18.7179 20.8487 18.523 20.9956 18.3026C21.6956 17.2526 22.1665 15.7348 22.1665 14C22.1665 12.2652 21.6956 10.7474 20.9956 9.6974C20.5438 9.0196 20.034 8.58206 19.5217 8.35509L20.4417 6.20856C21.4505 6.65045 22.2995 7.44675 22.9371 8.4031C23.9261 9.88658 24.4999 11.8688 24.4999 14C24.4999 16.1312 23.9261 18.1134 22.9371 19.5969C22.7128 19.9333 22.4624 20.2498 22.1881 20.5382L24.1583 22.5084C24.6139 22.964 24.6139 23.7027 24.1583 24.1583C23.7027 24.6139 22.964 24.6139 22.5084 24.1583L3.84171 5.49162C3.3861 5.03601 3.3861 4.29732 3.84171 3.84171ZM14 12.3501V8.0741L11.4847 9.8348L14 12.3501Z"
                        fill="#432A0F" fill-opacity="0.38" />
                    <path
                        d="M5.7079 8.86619C4.38249 9.6894 3.5 11.1583 3.5 12.8333V15.1667C3.5 17.744 5.58934 19.8333 8.16667 19.8333H9.7989L14.4976 23.1224C14.854 23.3719 15.3196 23.4024 15.7054 23.2015C16.0913 23.0006 16.3333 22.6017 16.3333 22.1667V19.4916L14 17.1583V19.9259L10.5 17.4759V13.6583L8.16667 11.325V17.5C6.878 17.5 5.83333 16.4553 5.83333 15.1667V12.8333C5.83333 11.7936 6.51336 10.9127 7.4529 10.6112L5.7079 8.86619Z"
                        fill="#432A0F" fill-opacity="0.38" />
                </svg>
            </a>
            <a class="position-absolute youcantseeme" href="draw01.php"></a>

            <div class="lightfix position-relative">
                <div class="light_ba position-absolute">
                </div>
            </div>

            <div class="grain_ba position-absolute"></div>

            <div class="drawCard d-flex align-items-center position-absolute">
                <img class="w-100 " src="./imgs/draw/draw64.png" alt="">
            </div>

            <div class="jadeSaym mx-auto">
                <div class="jadeSaymBorder w-100 h-100">
                    <div class="jadeSaymcontent overflow-hidden">
                        <h4 class="overflow-hidden mt-1">小玉的貼心提醒</h4>
                        <h6 class="overflow-hidden">
                            如果願望成真，<br>
                            記得帶一份喜餅<br>
                            到霞海城隍廟向月老還願，<br>
                            若是在祈願時有另外<br>
                            向月老約定其他還願方式，<br>
                            也要記得遵守和月老的承諾喔！
                        </h6>
                    </div>

                </div>
            </div>

            <h4 class="recommendm_ba">月老喵誠心推薦</h4>

                <!-- https://codepen.io/WillyW/details/wZebow -->
                <!-- https://codepen.io/rblinzler/pen/abVGzNM -->
                <!-- 手機卡片 -->
                        <!--  MB 月老喵推薦卡片  -->
        <div class="container carousel_mb pb-0">
            <div class="card-carousel">
                <?php foreach ($travel_1 as $t) : ?> 
                    <div class="card" id="1">
                        <div class="image-container">
                            <img class="" src="./imgs/travel/cards/<?= $t['travelcard_img'] ?>" alt="">
                        </div>
                        <div class="pit_mb pb-2">
                            <h6 class="px-2"><?= $t['travel_name'] ?></h6>
                        </div>
                        <div class="piu_mb d-flex justify-content-between align-items-center mb-2">
                            <div class="star">
                                <small class="xs d-flex">
                                    <div class="icon_fivestar mx-1" style="color: var(--color-yellow);">
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    (<?= $t['travel_star'] ?>)
                                </small>
                            </div>
                            <div class="fire justify-content-center align-items-center mx-2">
                                <small class="xs d-flex">
                                    <div class="icon_fire xs">
                                        <i class="fa-solid fa-fire pr-1"></i>
                                    </div>
                                    已賣出<?= $t['travel_popular'] ?>個
                                </small>
                            </div>
                            <div class="price">
                                <h4><?= $t['travel_price'] ?></h4>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?> 
            </div>
            <a href="#" class="visuallyhidden card-controller"></a>
        </div>

        <button class="btn-mobile mx-auto mb-5">
            <div class="btn-l">
                看更多行程
            </div>
        </button>

        </div>
    </div>



    <footer class="footer-md d-none d-md-block">
        <div class="text-white text-center py-1">
            <p class="mb-0">
                <span class="font-weight-light"> © </span>
                <small>2022 MoonOldMeow</small>
            </p>
        </div>
    </footer>



<?php include __DIR__. '/parts/scripts.php'; ?>
    <!-- 我的 -->
<script src="draw.js"></script>
    <!-- 卡片 -->
<script src="product_index.js"></script>
<!-- AOS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({

            // Global settings:

            disable: false,
            startEvent: 'DOMContentLoaded',
            initClassName: 'aos-init',
            animatedClassName: 'aos-animate',
            useClassNames: false,
            disableMutationObserver: false,
            debounceDelay: 50,
            throttleDelay: 99,

            // 透過 data-aos 來設定相關元素

            offset: 1000,        // 移動距離 (單位為像素)
            delay: 0,            // 延遲時間，範圍從 0-3000
            duration: 1000,   // 完成動畫所需的時間，範圍從 0-3000
            easing: 'ease',   // 動畫曲線
            once: false,       // 動畫是否只跑一次
            mirror: false,
            anchorPlacement: 'center-bottom',  // 動畫觸發的位置
        });
    </script>

<?php include __DIR__. '/parts/html-foot.php'; ?>
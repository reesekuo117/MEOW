<?php
require __DIR__. '/parts/meow_db.php';  // /開頭
$pageName = 'draw20'; //頁面名稱
?>

<?php include __DIR__. '/parts/html-head.php'; ?>

<link rel="stylesheet" href="draw.css">
<link rel="stylesheet" href="product_index_style.css">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<?php include __DIR__. '/parts/navbar.php'; ?>

    <div class="body_draw01 d-none d-md-block">
    <div class="body_draw23 d-none d-md-block">
        <div class="drawSection23 position-relative ">
            <a id="backtodraw19" class="position-absolute backto d-none" href="draw12.php">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M18.8518 3.47604C19.1413 3.9464 18.9946 4.56235 18.5243 4.8518L6.9082 12.0001L18.5243 19.1485C18.9946 19.4379 19.1413 20.0539 18.8518 20.5242C18.5624 20.9946 17.9464 21.1413 17.4761 20.8518L5.86001 13.7035C4.59094 12.9225 4.59093 11.0778 5.86001 10.2968L17.4761 3.14848C17.9464 2.85903 18.5624 3.00569 18.8518 3.47604Z"
                        fill="#432A0F" fill-opacity="0.38" />
                </svg>
            </a>
            <a id="musicSwitch" class="position-absolute musicSwitch" href="#">
                <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M4.93934 4.93934C5.52513 4.35355 6.47487 4.35355 7.06066 4.93934L12.612 10.4906L18.6398 6.27116C19.098 5.95041 19.6966 5.91124 20.1927 6.16954C20.6888 6.42783 21 6.94069 21 7.5V18.8787L23.3897 21.2684L23.1288 20.6596C23.2077 20.5769 23.2898 20.475 23.3731 20.3499C23.7302 19.8143 23.9999 18.9878 23.9999 18C23.9999 17.0122 23.7302 16.1858 23.3731 15.6501C23.2898 15.525 23.2077 15.4232 23.1288 15.3404L24.3425 12.5083C24.9665 12.8742 25.4814 13.4043 25.8693 13.986C26.5979 15.079 26.9999 16.5025 26.9999 18C26.9999 19.4975 26.5979 20.9211 25.8693 22.014C25.6448 22.3507 25.3778 22.6701 25.0717 22.9504L26.4066 24.2853C26.6087 24.0659 26.8055 23.8152 26.9944 23.5319C27.8944 22.1819 28.4998 20.2304 28.4998 18C28.4998 15.7695 27.8944 13.8181 26.9944 12.4681C26.4134 11.5966 25.7581 11.0341 25.0994 10.7423L26.2822 7.98244C27.5792 8.55058 28.6708 9.57439 29.4905 10.804C30.7621 12.7113 31.4998 15.2599 31.4998 18C31.4998 20.7401 30.7621 23.2887 29.4905 25.196C29.2022 25.6285 28.8802 26.0355 28.5275 26.4062L31.0607 28.9393C31.6464 29.5251 31.6464 30.4749 31.0607 31.0607C30.4749 31.6464 29.5251 31.6464 28.9393 31.0607L4.93934 7.06066C4.35355 6.47487 4.35355 5.52513 4.93934 4.93934ZM18 15.8787V10.381L14.7661 12.6447L18 15.8787Z"
                        fill="#432A0F" fill-opacity="0.38" />
                    <path
                        d="M7.33873 11.3994C5.63464 12.4578 4.5 14.3464 4.5 16.5V19.5C4.5 22.8137 7.18629 25.5 10.5 25.5H12.5986L18.6398 29.7289C19.098 30.0496 19.6966 30.0888 20.1927 29.8305C20.6888 29.5722 21 29.0593 21 28.5V25.0607L18 22.0607V25.619L13.5 22.469V17.5607L10.5 14.5607V22.5C8.84315 22.5 7.5 21.1569 7.5 19.5V16.5C7.5 15.1632 8.37432 14.0307 9.5823 13.643L7.33873 11.3994Z"
                        fill="#432A0F" fill-opacity="0.38" />
                </svg>
            </a>
            <a class="position-absolute youcantseeme" href="draw01.php"></a>

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
                <div class="otherp d-md-block d-none">
                    <div class="container">
                        <!-- https://www.tutorialrepublic.com/codelab.php?topic=bootstrap&file=thumbnail-carousel-with-content -->
                        <div class="row">
                            <div class="col mx-auto">
                                <div id="myCarousel" class="carousel carousel_card slide" data-ride="carousel"
                                    data-interval="0">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <a href="">
                                                        <div class="thumb-wrapper mx-3">
                                                            <div class="img-box">
                                                                <img src="./imgs/product/P20_4.jpg" class="img-fluid"
                                                                    alt="">
                                                                <div class="icon_heart">
                                                                    <svg class="heart_line" width="32" height="32"
                                                                        viewBox="0 0 32 32" fill="none" stroke="#fff"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M15.2855 9.22197C12.9704 6.90689 9.21692 6.90689 6.90184 9.22197C4.58676 11.537 4.58676 15.2905 6.90184 17.6056L13.2503 23.9532C14.8378 25.5407 17.4116 25.5407 18.9991 23.9532L24.5083 18.444L24.5074 18.4431L25.3449 17.6056C27.66 15.2905 27.66 11.5371 25.3449 9.22197C23.0298 6.90689 19.2763 6.90689 16.9612 9.22197L16.1234 10.0598L15.2855 9.22197Z"
                                                                            stroke-width="2.66667" />
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                            <div class="thumb-content">
                                                                <h6>霞海城隍廟 X 護手霜禮盒</h6>

                                                                <div
                                                                    class="card_under d-flex justify-content-around align-items-center">
                                                                    <small class="xs card-text d-flex pr-1">
                                                                        <div class="icon_star">
                                                                            <span><i class="fa-solid fa-star"></i></span>
                                                                        </div>4.7(50)
                                                                    </small>
                                                                    <small class="xs card-text d-flex">
                                                                        <div class="icon_fire">
                                                                            <span><i class="fa-solid fa-fire"></i></span>
                                                                        </div>
                                                                        3K個已訂購
                                                                    </small>
                                                                    <h5 class="m-0 ml-auto">850</h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>

                                                </div>
                                                <div class="col-md-4">
                                                    <a href="">
                                                        <div class="thumb-wrapper mx-3">
                                                            <div class="img-box">
                                                                <img src="./imgs/product/P20_4.jpg" class="img-fluid"
                                                                    alt="">
                                                                <div class="icon_heart">
                                                                    <svg class="heart_line" width="32" height="32"
                                                                        viewBox="0 0 32 32" fill="none" stroke="#fff"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M15.2855 9.22197C12.9704 6.90689 9.21692 6.90689 6.90184 9.22197C4.58676 11.537 4.58676 15.2905 6.90184 17.6056L13.2503 23.9532C14.8378 25.5407 17.4116 25.5407 18.9991 23.9532L24.5083 18.444L24.5074 18.4431L25.3449 17.6056C27.66 15.2905 27.66 11.5371 25.3449 9.22197C23.0298 6.90689 19.2763 6.90689 16.9612 9.22197L16.1234 10.0598L15.2855 9.22197Z"
                                                                            stroke-width="2.66667" />
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                            <div class="thumb-content">
                                                                <h6>霞海城隍廟 X 護手霜禮盒</h6>

                                                                <div
                                                                    class="card_under d-flex justify-content-between align-items-center">
                                                                    <small class="xs card-text d-flex pr-1">
                                                                        <div class="icon_star">
                                                                            <span><i
                                                                                    class="fa-solid fa-star"></i></span>
                                                                        </div> 4.7(50)
                                                                    </small>
                                                                    <small class="xs card-text d-flex">
                                                                        <div class="icon_fire ">
                                                                            <span><i
                                                                                    class="fa-solid fa-fire"></i></span>
                                                                        </div>
                                                                        3K個已訂購
                                                                    </small>
                                                                    <h5 class="m-0 ml-auto">850</h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>

                                                </div>
                                                <div class="col-md-4">
                                                    <a href="">
                                                        <div class="thumb-wrapper mx-3">
                                                            <div class="img-box">
                                                                <img src="./imgs/product/P20_4.jpg" class="img-fluid"
                                                                    alt="">
                                                                <div class="icon_heart">
                                                                    <svg class="heart_line" width="32" height="32"
                                                                        viewBox="0 0 32 32" fill="none" stroke="#fff"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M15.2855 9.22197C12.9704 6.90689 9.21692 6.90689 6.90184 9.22197C4.58676 11.537 4.58676 15.2905 6.90184 17.6056L13.2503 23.9532C14.8378 25.5407 17.4116 25.5407 18.9991 23.9532L24.5083 18.444L24.5074 18.4431L25.3449 17.6056C27.66 15.2905 27.66 11.5371 25.3449 9.22197C23.0298 6.90689 19.2763 6.90689 16.9612 9.22197L16.1234 10.0598L15.2855 9.22197Z"
                                                                            stroke-width="2.66667" />
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                            <div class="thumb-content">
                                                                <h6>霞海城隍廟 X 護手霜禮盒</h6>

                                                                <div
                                                                    class="card_under d-flex justify-content-between align-items-center">
                                                                    <small class="xs card-text d-flex pr-1">
                                                                        <div class="icon_star">
                                                                            <span><i
                                                                                    class="fa-solid fa-star"></i></span>
                                                                        </div> 4.7(50)
                                                                    </small>
                                                                    <small class="xs card-text d-flex">
                                                                        <div class="icon_fire ">
                                                                            <span><i
                                                                                    class="fa-solid fa-fire"></i></span>
                                                                        </div>
                                                                        3K個已訂購
                                                                    </small>
                                                                    <h5 class="m-0 ml-auto">850</h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <a href="">
                                                        <div class="thumb-wrapper mx-3">
                                                            <div class="img-box">
                                                                <img src="./imgs/product/P20_4.jpg" class="img-fluid"
                                                                    alt="">
                                                                <div class="icon_heart">
                                                                    <svg class="heart_line" width="32" height="32"
                                                                        viewBox="0 0 32 32" fill="none" stroke="#fff"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M15.2855 9.22197C12.9704 6.90689 9.21692 6.90689 6.90184 9.22197C4.58676 11.537 4.58676 15.2905 6.90184 17.6056L13.2503 23.9532C14.8378 25.5407 17.4116 25.5407 18.9991 23.9532L24.5083 18.444L24.5074 18.4431L25.3449 17.6056C27.66 15.2905 27.66 11.5371 25.3449 9.22197C23.0298 6.90689 19.2763 6.90689 16.9612 9.22197L16.1234 10.0598L15.2855 9.22197Z"
                                                                            stroke-width="2.66667" />
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                            <div class="thumb-content">
                                                                <h6>霞海城隍廟 X 護手霜禮盒</h6>

                                                                <div
                                                                    class="card_under d-flex justify-content-between align-items-center">
                                                                    <small class="xs card-text d-flex pr-1">
                                                                        <div class="icon_star">
                                                                            <span><i
                                                                                    class="fa-solid fa-star"></i></span>
                                                                        </div> 4.7(50)
                                                                    </small>
                                                                    <small class="xs card-text d-flex">
                                                                        <div class="icon_fire ">
                                                                            <span><i
                                                                                    class="fa-solid fa-fire"></i></span>
                                                                        </div>
                                                                        3K個已訂購
                                                                    </small>
                                                                    <h5 class="m-0 ml-auto">850</h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>

                                                </div>
                                                <div class="col-md-4">
                                                    <a href="">
                                                        <div class="thumb-wrapper mx-3">
                                                            <div class="img-box">
                                                                <img src="./imgs/product/P20_4.jpg" class="img-fluid"
                                                                    alt="">
                                                                <div class="icon_heart">
                                                                    <svg class="heart_line" width="32" height="32"
                                                                        viewBox="0 0 32 32" fill="none" stroke="#fff"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M15.2855 9.22197C12.9704 6.90689 9.21692 6.90689 6.90184 9.22197C4.58676 11.537 4.58676 15.2905 6.90184 17.6056L13.2503 23.9532C14.8378 25.5407 17.4116 25.5407 18.9991 23.9532L24.5083 18.444L24.5074 18.4431L25.3449 17.6056C27.66 15.2905 27.66 11.5371 25.3449 9.22197C23.0298 6.90689 19.2763 6.90689 16.9612 9.22197L16.1234 10.0598L15.2855 9.22197Z"
                                                                            stroke-width="2.66667" />
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                            <div class="thumb-content">
                                                                <h6>霞海城隍廟 X 護手霜禮盒</h6>

                                                                <div
                                                                    class="card_under d-flex justify-content-between align-items-center">
                                                                    <small class="xs card-text d-flex pr-1">
                                                                        <div class="icon_star">
                                                                            <span><i
                                                                                    class="fa-solid fa-star"></i></span>
                                                                        </div> 4.7(50)
                                                                    </small>
                                                                    <small class="xs card-text d-flex">
                                                                        <div class="icon_fire ">
                                                                            <span><i
                                                                                    class="fa-solid fa-fire"></i></span>
                                                                        </div>
                                                                        3K個已訂購
                                                                    </small>
                                                                    <h5 class="m-0 ml-auto">850</h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>

                                                </div>
                                                <div class="col-md-4">
                                                    <a href="">
                                                        <div class="thumb-wrapper mx-3">
                                                            <div class="img-box">
                                                                <img src="./imgs/product/P20_4.jpg" class="img-fluid"
                                                                    alt="">
                                                                <div class="icon_heart">
                                                                    <svg class="heart_line" width="32" height="32"
                                                                        viewBox="0 0 32 32" fill="none" stroke="#fff"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M15.2855 9.22197C12.9704 6.90689 9.21692 6.90689 6.90184 9.22197C4.58676 11.537 4.58676 15.2905 6.90184 17.6056L13.2503 23.9532C14.8378 25.5407 17.4116 25.5407 18.9991 23.9532L24.5083 18.444L24.5074 18.4431L25.3449 17.6056C27.66 15.2905 27.66 11.5371 25.3449 9.22197C23.0298 6.90689 19.2763 6.90689 16.9612 9.22197L16.1234 10.0598L15.2855 9.22197Z"
                                                                            stroke-width="2.66667" />
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                            <div class="thumb-content">
                                                                <h6>霞海城隍廟 X 護手霜禮盒</h6>

                                                                <div
                                                                    class="card_under d-flex justify-content-between align-items-center">
                                                                    <small class="xs card-text d-flex pr-1">
                                                                        <div class="icon_star">
                                                                            <span><i
                                                                                    class="fa-solid fa-star"></i></span>
                                                                        </div> 4.7(50)
                                                                    </small>
                                                                    <small class="xs card-text d-flex">
                                                                        <div class="icon_fire ">
                                                                            <span><i
                                                                                    class="fa-solid fa-fire"></i></span>
                                                                        </div>
                                                                        3K個已訂購
                                                                    </small>
                                                                    <h5 class="m-0 ml-auto">850</h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Carousel controls -->
                                    <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                                        <i class="fa-solid fa-caret-left"></i>
                                    </a>
                                    <a class="carousel-control-next" href="#myCarousel" data-slide="next">
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
        <div class="mdrawSection23 position-relative flex-row justify-content-center">
            <a id="musicSwitch" class="position-absolute musicSwitch" href="#">
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
            <div class="carousel_mb d-block d-md-none pb-5">
                <div class="card-carousel ">
                    <div class="card" id="1">
                        <div class="image-container"></div>
                        <div class="pit_mb">
                        <p class="mb-2">霞海城隍廟 X 護手霜禮盒</p>
                        </div>
                        <div class="piu_mb d-flex justify-content-between align-items-center mb-2">
                            <div class="star">
                            <small class="xs d-flex">
                                <div class="icon_fivestar" style="color: var(--color-yellow);">
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                （5）
                            </small>
                            </div>
                            <div class="fire justify-content-center align-items-center mr-2">
                            <small class="xs d-flex">
                                <div class="icon_fire xs">
                                    <i class="fa-solid fa-fire pr-1"></i>
                                </div>
                                已賣出3K + 個
                            </small>
                            </div>
                            <div class="price">
                                <h4>707</h4>
                            </div>
                        </div>
                    </div>
                    <div class="card" id="2">
                        <div class="image-container"></div>
                        <div class="pit_mb">
                            <p class="mb-2">霞海城隍聯名 X 姻緣簿茶蜜組</p>
                        </div>
                        <div class="piu_mb d-flex justify-content-between align-items-center mb-2">
                            <div class="star">
                            <small class="xs d-flex">
                                <div class="icon_fivestar" style="color: var(--color-yellow);">
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                （5）
                            </small>
                            </div>
                            <div class="fire justify-content-center align-items-center mr-2">
                            <small class="xs d-flex">
                                <div class="icon_fire xs">
                                    <i class="fa-solid fa-fire pr-1"></i>
                                </div>
                                已賣出3K + 個
                            </small>
                            </div>
                            <div class="price">
                                <h4>707</h4>
                            </div>
                        </div>
                    </div>
                    <div class="card" id="3">
                        <div class="image-container"></div>
                        <div class="pit_mb">
                            <p class="mb-2">霞海城隍廟 X 扣式真皮中夾禮盒</p>
                        </div>
                        <div class="piu_mb d-flex justify-content-between align-items-center mb-2">
                            <div class="star">
                            <small class="xs d-flex">
                                <div class="icon_fivestar" style="color: var(--color-yellow);">
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                （5）
                            </small>
                            </div>
                            <div class="fire justify-content-center align-items-center mr-2">
                            <small class="xs d-flex">
                                <div class="icon_fire xs">
                                    <i class="fa-solid fa-fire pr-1"></i>
                                </div>
                                已賣出3K + 個
                            </small>
                            </div>
                            <div class="price">
                                <h4>707</h4>
                            </div>
                        </div>
                    </div>
                    <div class="card" id="4">
                        <div class="image-container"></div>
                        <div class="pit_mb">
                            <p class="mb-2">霞海城隍廟聯名 X 月老牽線絹印組</p>
                        </div>
                        <div class="piu_mb d-flex justify-content-between align-items-center mb-2">
                            <div class="star">
                            <small class="xs d-flex">
                                <div class="icon_fivestar" style="color: var(--color-yellow);">
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                （5）
                            </small>
                            </div>
                            <div class="fire justify-content-center align-items-center mr-2">
                            <small class="xs d-flex">
                                <div class="icon_fire xs">
                                    <i class="fa-solid fa-fire pr-1"></i>
                                </div>
                                已賣出3K + 個
                            </small>
                            </div>
                            <div class="price">
                                <h4>707</h4>
                            </div>
                        </div>
                    </div>
                    <div class="card" id="5">
                        <div class="image-container"></div>
                        <div class="pit_mb">
                            <p class="mb-2">月老喵療癒你盥洗組</p>
                        </div>
                        <div class="piu_mb d-flex justify-content-between align-items-center mb-2">
                            <div class="star">
                            <small class="xs d-flex">
                                <div class="icon_fivestar" style="color: var(--color-yellow);">
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                （5）
                            </small>
                            </div>
                            <div class="fire justify-content-center align-items-center mr-2">
                            <small class="xs d-flex">
                                <div class="icon_fire xs">
                                    <i class="fa-solid fa-fire pr-1"></i>
                                </div>
                                已賣出3K + 個
                            </small>
                            </div>
                            <div class="price">
                                <h4>707</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#" class="visuallyhidden card-controller">Carousel controller</a>
            </div>
            <button class="btn-mobile">
                <div class="btn-l">
                    看更多行程
                </div>
            </button>
            <div class="carousel_mb d-block d-md-none pb-5">
                <div class="card-carousel ">
                    <div class="card" id="6">
                        <div class="image-container"></div>
                        <div class="pit_mb">
                        <p class="mb-2">霞海城隍廟 X 護手霜禮盒</p>
                        </div>
                        <div class="piu_mb d-flex justify-content-between align-items-center mb-2">
                            <div class="star">
                            <small class="xs d-flex">
                                <div class="icon_fivestar" style="color: var(--color-yellow);">
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                （5）
                            </small>
                            </div>
                            <div class="fire justify-content-center align-items-center mr-2">
                            <small class="xs d-flex">
                                <div class="icon_fire xs">
                                    <i class="fa-solid fa-fire pr-1"></i>
                                </div>
                                已賣出3K + 個
                            </small>
                            </div>
                            <div class="price">
                                <h4>707</h4>
                            </div>
                        </div>
                    </div>
                    <div class="card" id="7">
                        <div class="image-container"></div>
                        <div class="pit_mb">
                            <p class="mb-2">霞海城隍聯名 X 姻緣簿茶蜜組</p>
                        </div>
                        <div class="piu_mb d-flex justify-content-between align-items-center mb-2">
                            <div class="star">
                            <small class="xs d-flex">
                                <div class="icon_fivestar" style="color: var(--color-yellow);">
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                （5）
                            </small>
                            </div>
                            <div class="fire justify-content-center align-items-center mr-2">
                            <small class="xs d-flex">
                                <div class="icon_fire xs">
                                    <i class="fa-solid fa-fire pr-1"></i>
                                </div>
                                已賣出3K + 個
                            </small>
                            </div>
                            <div class="price">
                                <h4>707</h4>
                            </div>
                        </div>
                    </div>
                    <div class="card" id="8">
                        <div class="image-container"></div>
                        <div class="pit_mb">
                            <p class="mb-2">霞海城隍廟 X 扣式真皮中夾禮盒</p>
                        </div>
                        <div class="piu_mb d-flex justify-content-between align-items-center mb-2">
                            <div class="star">
                            <small class="xs d-flex">
                                <div class="icon_fivestar" style="color: var(--color-yellow);">
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                （5）
                            </small>
                            </div>
                            <div class="fire justify-content-center align-items-center mr-2">
                            <small class="xs d-flex">
                                <div class="icon_fire xs">
                                    <i class="fa-solid fa-fire pr-1"></i>
                                </div>
                                已賣出3K + 個
                            </small>
                            </div>
                            <div class="price">
                                <h4>707</h4>
                            </div>
                        </div>
                    </div>
                    <div class="card" id="9">
                        <div class="image-container"></div>
                        <div class="pit_mb">
                            <p class="mb-2">霞海城隍廟聯名 X 月老牽線絹印組</p>
                        </div>
                        <div class="piu_mb d-flex justify-content-between align-items-center mb-2">
                            <div class="star">
                            <small class="xs d-flex">
                                <div class="icon_fivestar" style="color: var(--color-yellow);">
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                （5）
                            </small>
                            </div>
                            <div class="fire justify-content-center align-items-center mr-2">
                            <small class="xs d-flex">
                                <div class="icon_fire xs">
                                    <i class="fa-solid fa-fire pr-1"></i>
                                </div>
                                已賣出3K + 個
                            </small>
                            </div>
                            <div class="price">
                                <h4>707</h4>
                            </div>
                        </div>
                    </div>
                    <div class="card" id="10">
                        <div class="image-container"></div>
                        <div class="pit_mb">
                            <p class="mb-2">月老喵療癒你盥洗組</p>
                        </div>
                        <div class="piu_mb d-flex justify-content-between align-items-center mb-2">
                            <div class="star">
                            <small class="xs d-flex">
                                <div class="icon_fivestar" style="color: var(--color-yellow);">
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                （5）
                            </small>
                            </div>
                            <div class="fire justify-content-center align-items-center mr-2">
                            <small class="xs d-flex">
                                <div class="icon_fire xs">
                                    <i class="fa-solid fa-fire pr-1"></i>
                                </div>
                                已賣出3K + 個
                            </small>
                            </div>
                            <div class="price">
                                <h4>707</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#" class="visuallyhidden card-controller">Carousel controller</a>
            </div>
            <button class="btn-mobile">
                <div class="btn-l">
                    看更多商品
                </div>
            </button>
        </div>
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
<?php
require __DIR__. '/parts/meow_db.php';  // /開頭
$pageName = '線上求籤'; //頁面名稱
?>

<?php include __DIR__. '/parts/html-head.php'; ?>

<link rel="stylesheet" href="draw.css">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<?php include __DIR__. '/parts/navbar.php'; ?>

    <div class="body_draw01 d-none d-md-block">
    <div class="drawSection07 flex-row position-relative justify-content-center">
        <a id="backtodraw06" class="position-absolute backto d-none" href="draw06.html">
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
        <a class="position-absolute youcantseeme" href="draw01.html"></a>

        <div class="container flex-row justify-content-center ">
            <h1 class="">請告訴月老你最在意的五個條件</h1>
            <h5 class="multipleChoice">(多選最多五個)</h5>

            <div class="drawSection07Cat position-relative">
                <div class="drawSection07Img position-relative">
                    <img src="./imgs/draw/39.png" alt="">
                    <div class="eye">
                        <div class="eye-white"></div>
                        <div class="eye-black"></div>
                    </div>
                    <div class="eye" style="left:600px;top:200px">
                        <div class="eye-white"></div>
                        <div class="eye-black"></div>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="drawSection07btnGroup drawSection07btnGroup1 d-flex justify-content-between align-items-center mx-auto position-absolute">
            <button class="wantbtn btn-round d-flex align-items-center my-0">
                <h2 class="mx-auto mb-0">年齡</h2>
            </button>
            <button class="wantbtn btn-round d-flex align-items-center my-0">
                <h2 class="mx-auto mb-0">外型</h2>
            </button>
        </div>
        <div
            class="drawSection07btnGroup drawSection07btnGroup2 d-flex justify-content-between align-items-center mx-auto position-absolute">
            <button class="wantbtn btn-round d-flex align-items-center my-0">
                <h2 class="mx-auto mb-0">星座</h2>
            </button>
            <button class="wantbtn btn-round d-flex align-items-center my-0">
                <h2 class="mx-auto mb-0">經濟能力</h2>
            </button>
        </div>
        <div
            class="drawSection07btnGroup drawSection07btnGroup3 d-flex justify-content-between align-items-center mx-auto position-absolute">
            <button class="wantbtn btn-round d-flex align-items-center my-0">
                <h2 class="mx-auto mb-0">個性</h2>
            </button>
            <button class="wantbtn btn-round d-flex align-items-center my-0">
                <h2 class="mx-auto mb-0">生活習慣</h2>
            </button>
        </div>
        <div
            class="drawSection07btnGroup drawSection07btnGroup4 d-flex justify-content-between align-items-center mx-auto position-absolute">
            <button class="wantbtn btn-round d-flex align-items-center my-0">
                <h2 class="mx-auto mb-0">寵物</h2>
            </button>
            <button class="wantbtn btn-round d-flex align-items-center my-0">
                <h2 class="mx-auto mb-0">興趣</h2>
            </button>
        </div>
        <div
            class="drawSection07btnGroup drawSection07btnGroup5 d-flex justify-content-between align-items-center mx-auto position-absolute">
            <button class="wantbtn btn-round d-flex align-items-center my-0">
                <h2 class="mx-auto mb-0">感情觀</h2>
            </button>
            <button class="wantbtn btn-round d-flex align-items-center my-0">
                <h2 class="mx-auto mb-0">家庭</h2>
            </button>
        </div>

        <a class="clearAll_ba position-absolute text-decoration-none" href="#">
            <div class=" justify-content-center d-flex">
                <div class="restart_ba">
                    <img src="./imgs/draw/Restart.png" alt="">
                </div>
                <h5 class="ml-1">全部重選</h5>
            </div>
        </a>

    </div>
    <button class="btn_md_next btn_disabled_ba position-absolute disabled">
        <a class="m-0 disabled text-decoration-none" href="#">
            <p class="m-0">
                下一步
            </p>
        </a>
    </button>
    </div>



<?php include __DIR__. '/parts/scripts.php'; ?>
    <!-- 我的 -->
<script src="draw.js"></script>
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
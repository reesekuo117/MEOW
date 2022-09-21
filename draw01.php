<?php
require __DIR__. '/parts/meow_db.php';  // /開頭
$pageName = '線上求籤'; //頁面名稱
?>

<?php include __DIR__. '/parts/html-head.php'; ?>

<link rel="stylesheet" href="draw.css">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<?php include __DIR__. '/parts/navbar.php'; ?>

    <div class="body_draw01 d-none d-md-flex">
        <div class="drawSection01">
            <div class="container flex-row ">
                <h1 class="">歡迎來月老喵線上求籤！</h1>
                <h4>
                    為了讓體驗更完善，<br>
                    求籤過程會播放能讓你放鬆、專注的音樂，<br>
                    請問你要開啟背景音樂嗎？
                </h4>
                <h5>＊求籤過程中也能選擇是否開啟背景音樂</h5>
                <div class="musicBlack">
                    <img src="./imgs/draw/46.png" alt="">
                </div>
                <div class="sound-icon disabled justify-content-center ">
                    <div class="sound-wave">
                        <i class="bar"></i>
                        <i class="bar"></i>
                        <i class="bar"></i>
                        <i class="bar"></i>
                        <i class="bar"></i>
                        <i class="bar"></i>
                        <i class="bar"></i>
                        <i class="bar"></i>
                        <i class="bar"></i>
                        <i class="bar"></i>
                        <i class="bar"></i>
                        <i class="bar"></i>
                        <i class="bar"></i>
                        <i class="bar"></i>
                        <i class="bar"></i>
                        <i class="bar"></i>
                        <i class="bar"></i>
                        <i class="bar"></i>
                        <i class="bar"></i>
                        <i class="bar"></i>
                    </div>
                </div>
                <div class="onOff d-flex justify-content-center ">
                    <a class="text-decoration-none" href="draw02.php">
                        <div class="musicOn d-flex justify-content-center align-items-center">
                            <h1>開</h1>
                        </div>
                    </a>

                    <a class="text-decoration-none" href="draw02.php">
                        <div class="musicOff d-flex justify-content-center align-items-center">
                            <h1>關</h1>

                        </div>
                    </a>

                </div>
            </div>


        </div>
    </div>

    <div class="body_draw01m d-md-none">
        <div class="mdrawSection01">
            <h4>歡迎來月老喵求籤！</h4>
            <h6>
                為了讓體驗更完善，<br>
                求籤過程會播放能讓你放鬆、<br>
                專注的音樂，<br>
                請問你要開啟背景音樂嗎？
            </h6>
            <small>＊求籤過程中也能選擇是否開啟背景音樂</small>

            <div class="musicBlack mx-auto">
                <img class="w-100" src="./imgs/draw/46.png" alt="">
            </div>

            <div class="sound-icon disabled justify-content-center ">
                <div class="sound-wave">
                    <i class="bar"></i>
                    <i class="bar"></i>
                    <i class="bar"></i>
                    <i class="bar"></i>
                    <i class="bar"></i>
                    <i class="bar"></i>
                    <i class="bar"></i>
                    <i class="bar"></i>
                    <i class="bar"></i>
                    <i class="bar"></i>
                    <i class="bar"></i>
                    <i class="bar"></i>
                    <i class="bar"></i>
                    <i class="bar"></i>
                    <i class="bar"></i>
                    <i class="bar"></i>
                    <i class="bar"></i>
                    <i class="bar"></i>
                    <i class="bar"></i>
                    <i class="bar"></i>
                </div>
            </div>
            <div class="onOff d-flex justify-content-center ">
                <a class="text-decoration-none" href="draw02.html">
                    <div class="musicOn d-flex justify-content-center align-items-center">
                        <h3>開</h3>
                    </div>
                </a>

                <a class="text-decoration-none" href="draw02.html">
                    <div class="musicOff d-flex justify-content-center align-items-center">
                        <h3>關</h3>

                    </div>
                </a>

            </div>
        </div>
    </div>


<?php include __DIR__. '/parts/scripts.php'; ?>
<?php include __DIR__. '/parts/html-foot.php'; ?>
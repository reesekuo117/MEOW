<?php
require __DIR__. '/parts/meow_db.php';  // /開頭
$pageName ='home'; //頁面名稱
?>

<?php include __DIR__. '/parts/html-head.php'; ?>
<link rel="stylesheet" href="./travel_detail_style.css">
<?php include __DIR__. '/parts/navbar.php'; ?>
<div class="travel_detail_07">
    <div class="travel_carousel">
        <div id="carouselExampleIndicators" class="carousel slide m-0 px-0" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./imgs/travel/T01_4.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./imgs/travel/T01_3.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./imgs/travel/T01_5.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./imgs/travel/T01_6.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./imgs/travel/T01_9.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <div class="travel_head" id="travel_title">
        <div class="container">
            <div class="detail">
                <div class="detail_title">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="travel_t">
                                <h2 class="mt-5 d-none d-md-block">大稻埕霞海城廟深度漫步文化之旅</h2>
                                <h5 class="mt-3 d-block d-md-none">大稻埕霞海城廟深度漫步文化之旅</h5>
                                <p>深度漫步文化之旅</p>
                                <div class="small_top d-flex">
                                    <div class="icon_location">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 21.2445C11.7379 21.0503 11.4043 20.8032 11.4043 20.8032L12 21.2445Z"
                                                fill="#432A0F" fill-opacity="0.6" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M12 7C10.3431 7 9 8.34315 9 10C9 11.6569 10.3431 13 12 13C13.6569 13 15 11.6569 15 10C15 8.34315 13.6569 7 12 7ZM11 10C11 9.44772 11.4477 9 12 9C12.5523 9 13 9.44772 13 10C13 10.5523 12.5523 11 12 11C11.4477 11 11 10.5523 11 10Z"
                                                fill="#432A0F" fill-opacity="0.6" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M11.4043 20.8032L12 21.2445C12.33 21 12.5964 20.8027 12.5964 20.8027L12.5981 20.8014L12.6032 20.7976L12.6198 20.7851C12.6337 20.7747 12.6531 20.7599 12.6777 20.741C12.7268 20.7031 12.7968 20.6484 12.8845 20.5779C13.0599 20.4368 13.307 20.2317 13.6019 19.9696C14.1903 19.4466 14.976 18.6902 15.7643 17.756C17.314 15.9193 19 13.246 19 10.2222C19 6.26809 15.9 3 12 3C8.10004 3 5 6.26809 5 10.2222C5 13.246 6.68605 15.9193 8.23571 17.756C9.02395 18.6902 9.8097 19.4466 10.3981 19.9696C10.693 20.2317 10.9401 20.4368 11.1155 20.5779C11.2032 20.6484 11.2732 20.7031 11.3223 20.741C11.3469 20.7599 11.3663 20.7747 11.3802 20.7851L11.3968 20.7976L11.4019 20.8014L11.4043 20.8032ZM7 10.2222C7 7.30348 9.27254 5 12 5C14.7275 5 17 7.30348 17 10.2222C17 12.5317 15.686 14.7473 14.2357 16.4662C13.524 17.3098 12.8097 17.9979 12.2731 18.4748C12.1756 18.5615 12.0842 18.641 12 18.713C11.9158 18.641 11.8244 18.5615 11.7269 18.4748C11.1903 17.9979 10.4761 17.3098 9.76429 16.4662C8.31395 14.7473 7 12.5317 7 10.2222Z"
                                                fill="#432A0F" fill-opacity="0.6" />
                                        </svg>
                                        <small>台北</small>
                                    </div>
                                    <div class="icon_clock pl-3">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M13 7C13 6.44772 12.5523 6 12 6C11.4477 6 11 6.44772 11 7V11H7C6.44772 11 6 11.4477 6 12C6 12.5523 6.44772 13 7 13H12C12.5523 13 13 12.5523 13 12V7Z"
                                                fill="#432A0F" fill-opacity="0.6" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3ZM5 12C5 8.13401 8.13401 5 12 5C15.866 5 19 8.13401 19 12C19 15.866 15.866 19 12 19C8.13401 19 5 15.866 5 12Z"
                                                fill="#432A0F" fill-opacity="0.6" />
                                        </svg>
                                        <small>出發日期：2022/08/05</small>
                                    </div>
                                </div>
                                <div class="evaluation d-md-none d-flex mt-2">
                                    <div class="star d-flex">
                                        <div class="icon_fivestar small">
                                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                                class="fa-solid fa-star"></i>
                                                <span style="color: var(--color-text60);">（50+）</span> 
                                        </div>
                                        
                                    </div>
                                    <div class="fire small">
                                        <div class="icon_fire" style="color: var(--color-orange);">
                                            <i class="fa-solid fa-fire"></i>
                                        <span style="color: var(--color-text60);">已賣出3K + 個</span>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="price_mb mt-2 offset-8">
                                    <h4>345</h4>
                                </div>
                                <p class="my-5 d-none d-md-block">
                                    •專業導覽員帶您閱讀大稻埕的歷史印記，濃濃的古式文化風情與屬於大稻埕的點滴故事。<br>
                                    <br>
                                    •漫步在大稻埕的傳統商家街道，拜訪許多知名老店，獨特回憶點滴湧上心頭。 <br>
                                    <br>
                                    •行程結束於大稻埕碼頭，可以享受微風徐徐的河畔風光，也能明白當時『一府二路三艋舺』的美名。 <br>
                                </p>
                                <div class="travel_intro_mb intro_bg d-block d-md-none">
                                    <h5 class="mb-4">行程資訊</h5>
                                    <small>
                                        •專業導覽員帶您閱讀大稻埕的歷史印記，濃濃的古式文化風情與屬於大稻埕的點滴故事。<br>
                                        <br>
                                        •漫步在大稻埕的傳統商家街道，拜訪許多知名老店，獨特回憶點滴湧上心頭。 <br>
                                        <br>
                                        •行程結束於大稻埕碼頭，可以享受微風徐徐的河畔風光，也能明白當時『一府二路三艋舺』的美名。 <br>
                                    </small>
                                </div>
                            </div>
                            <div class="evaluation d-none d-md-flex">
                                <div class="star d-flex">
                                    <div class="icon_fivestar">
                                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                            class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                            class="fa-solid fa-star"></i>
                                    </div>
                                    <p>（50+則評價）</p>
                                </div>
                                <!-- 火和字不能對齊 -->
                                <div class="fire d-flex justify-content-center align-self-end">
                                    <div class="icon_fire">
                                        <svg width="25" height="24" viewBox="0 0 18 17" fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <rect width="18" height="17" fill="url(#pattern0-946095)" />
                                            <defs>
                                                <pattern id="pattern0-946095" patternContentUnits="objectBoundingBox"
                                                    width="1" height="1">
                                                    <use xlink:href="#image0_1808_23036"
                                                        transform="translate(0.0277778) scale(0.0104938 0.0111111)" />
                                                </pattern>
                                                <image id="image0_1808_23036" width="90" height="90"
                                                    xlink:href="data:image/png;base64,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" />
                                            </defs>
                                        </svg>
                                    </div>
                                    <p>已賣出3K + 個</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 d-none d-md-block">
                            <small>出發前 1 天可免費取消</small>
                            <div class="price">
                                <h2>
                                    345
                                </h2>
                            </div>
                            <div class="buy_btn">
                                <button class="buy d-flex justify-content-center align-items-center">
                                    <div class="icon_buy">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <mask id="path-1-outside-1_1834_25020-499429" maskUnits="userSpaceOnUse"
                                                x="1.58203" y="3.25" width="20" height="17" fill="black">
                                                <rect fill="white" x="1.58203" y="3.25" width="20" height="17" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M8.09827 5.25C6.79605 5.25 5.69918 6.22304 5.54392 7.51597L4.60073 15.3706C4.41683 16.902 5.61261 18.25 7.15508 18.25H16.8382C18.3888 18.25 19.587 16.8885 19.39 15.3504L18.384 7.49584C18.2195 6.21184 17.1266 5.25 15.8321 5.25H8.09827ZM8.71466 7.7029C8.72994 7.64444 8.73801 7.58365 8.73801 7.52123C8.73801 7.06458 8.30622 6.69438 7.77357 6.69438C7.24093 6.69438 6.80914 7.06458 6.80914 7.52123C6.80914 7.97789 7.24093 8.34808 7.77357 8.34808C7.79553 8.34808 7.81732 8.34745 7.8389 8.34622C8.15888 9.67663 8.49438 10.7885 9.00121 11.593C9.29939 12.0664 9.66702 12.4516 10.1401 12.7147C10.6133 12.9779 11.1586 13.1005 11.7832 13.1005C12.4 13.1005 12.9498 12.9926 13.4372 12.7522C13.9264 12.511 14.3243 12.1505 14.6566 11.6873C15.228 10.8908 15.6217 9.76455 15.9734 8.34596C15.9964 8.34736 16.0196 8.34808 16.0431 8.34808C16.5757 8.34808 17.0075 7.97789 17.0075 7.52123C17.0075 7.06458 16.5757 6.69438 16.0431 6.69438C15.5104 6.69438 15.0786 7.06458 15.0786 7.52123C15.0786 7.58194 15.0863 7.64112 15.1008 7.6981C14.7244 9.30618 14.3468 10.4037 13.8441 11.1044C13.5917 11.4562 13.3141 11.6979 12.9949 11.8553C12.674 12.0136 12.2825 12.1005 11.7832 12.1005C11.2918 12.1005 10.9216 12.0051 10.6263 11.8408C10.3309 11.6766 10.0771 11.4248 9.84731 11.06C9.38935 10.3331 9.06972 9.23377 8.71466 7.7029Z" />
                                            </mask>
                                            <path
                                                d="M5.54392 7.51597L3.55819 7.27752L5.54392 7.51597ZM4.60073 15.3706L6.58647 15.609L4.60073 15.3706ZM19.39 15.3504L17.4062 15.6045V15.6045L19.39 15.3504ZM18.384 7.49584L16.4002 7.74994V7.74994L18.384 7.49584ZM8.71466 7.7029L6.77972 7.19693L6.65491 7.6742L6.76637 8.15477L8.71466 7.7029ZM7.8389 8.34622L9.78346 7.87854L9.3927 6.25381L7.72438 6.3495L7.8389 8.34622ZM9.00121 11.593L7.30901 12.6591L7.30901 12.6591L9.00121 11.593ZM10.1401 12.7147L9.16794 14.4625L9.16794 14.4625L10.1401 12.7147ZM13.4372 12.7522L12.5527 10.9584L12.5527 10.9584L13.4372 12.7522ZM14.6566 11.6873L16.2817 12.8531L16.2817 12.8531L14.6566 11.6873ZM15.9734 8.34596L16.0956 6.34969L14.433 6.24796L14.0322 7.86464L15.9734 8.34596ZM15.1008 7.6981L17.0481 8.15382L17.1594 7.67853L17.0391 7.20543L15.1008 7.6981ZM13.8441 11.1044L12.219 9.93851L12.219 9.93851L13.8441 11.1044ZM12.9949 11.8553L12.1105 10.0615L12.1105 10.0615L12.9949 11.8553ZM10.6263 11.8408L11.5985 10.093L11.5985 10.093L10.6263 11.8408ZM9.84731 11.06L8.15511 12.1261L8.15511 12.1261L9.84731 11.06ZM7.52966 7.75442C7.56422 7.4666 7.80839 7.25 8.09827 7.25V3.25C5.78371 3.25 3.83414 4.97947 3.55819 7.27752L7.52966 7.75442ZM6.58647 15.609L7.52966 7.75442L3.55819 7.27752L2.615 15.1321L6.58647 15.609ZM7.15508 16.25C6.81172 16.25 6.54553 15.9499 6.58647 15.609L2.615 15.1321C2.28813 17.8542 4.4135 20.25 7.15508 20.25V16.25ZM16.8382 16.25H7.15508V20.25H16.8382V16.25ZM17.4062 15.6045C17.4501 15.9469 17.1834 16.25 16.8382 16.25V20.25C19.5942 20.25 21.724 17.8301 21.3738 15.0963L17.4062 15.6045ZM16.4002 7.74994L17.4062 15.6045L21.3738 15.0963L20.3678 7.24175L16.4002 7.74994ZM15.8321 7.25C16.1203 7.25 16.3636 7.46411 16.4002 7.74994L20.3678 7.24175C20.0754 4.95956 18.1329 3.25 15.8321 3.25V7.25ZM8.09827 7.25H15.8321V3.25H8.09827V7.25ZM6.73801 7.52123C6.73801 7.41029 6.75247 7.30111 6.77972 7.19693L10.6496 8.20887C10.7074 7.98777 10.738 7.757 10.738 7.52123H6.73801ZM7.77357 8.69438C7.58102 8.69438 7.35565 8.628 7.15377 8.45492C6.9477 8.27825 6.73801 7.95436 6.73801 7.52123H10.738C10.738 5.68227 9.1109 4.69438 7.77357 4.69438V8.69438ZM8.80914 7.52123C8.80914 7.95436 8.59945 8.27825 8.39337 8.45492C8.1915 8.628 7.96613 8.69438 7.77357 8.69438V4.69438C6.43624 4.69438 4.80914 5.68227 4.80914 7.52123H8.80914ZM7.77357 6.34808C7.96613 6.34808 8.1915 6.41447 8.39337 6.58754C8.59945 6.76422 8.80914 7.0881 8.80914 7.52123H4.80914C4.80914 9.36019 6.43624 10.3481 7.77357 10.3481V6.34808ZM7.72438 6.3495C7.74093 6.34855 7.75733 6.34808 7.77357 6.34808V10.3481C7.83373 10.3481 7.8937 10.3464 7.95343 10.3429L7.72438 6.3495ZM10.6934 10.527C10.3805 10.0302 10.1044 9.21291 9.78346 7.87854L5.89435 8.81389C6.21338 10.1404 6.60829 11.5468 7.30901 12.6591L10.6934 10.527ZM11.1124 10.9669C10.995 10.9016 10.8549 10.7834 10.6934 10.527L7.30901 12.6591C7.74383 13.3493 8.33905 14.0015 9.16794 14.4625L11.1124 10.9669ZM11.7832 11.1005C11.4249 11.1005 11.2296 11.0322 11.1124 10.9669L9.16794 14.4625C9.99699 14.9237 10.8923 15.1005 11.7832 15.1005V11.1005ZM12.5527 10.9584C12.3983 11.0346 12.1652 11.1005 11.7832 11.1005V15.1005C12.6349 15.1005 13.5012 14.9506 14.3217 14.546L12.5527 10.9584ZM13.0316 10.5214C12.859 10.762 12.7018 10.8849 12.5527 10.9584L14.3217 14.546C15.1509 14.1371 15.7897 13.5389 16.2817 12.8531L13.0316 10.5214ZM14.0322 7.86464C13.6901 9.24447 13.3676 10.053 13.0316 10.5214L16.2817 12.8531C17.0884 11.7286 17.5533 10.2846 17.9146 8.82728L14.0322 7.86464ZM16.0431 6.34808C16.0606 6.34808 16.0781 6.34862 16.0956 6.34969L15.8513 10.3422C15.9147 10.3461 15.9787 10.3481 16.0431 10.3481V6.34808ZM15.0075 7.52123C15.0075 7.0881 15.2172 6.76422 15.4233 6.58754C15.6251 6.41447 15.8505 6.34808 16.0431 6.34808V10.3481C17.3804 10.3481 19.0075 9.36019 19.0075 7.52123H15.0075ZM16.0431 8.69438C15.8505 8.69438 15.6251 8.628 15.4233 8.45492C15.2172 8.27825 15.0075 7.95436 15.0075 7.52123H19.0075C19.0075 5.68227 17.3804 4.69438 16.0431 4.69438V8.69438ZM17.0786 7.52123C17.0786 7.95436 16.8689 8.27825 16.6629 8.45492C16.461 8.628 16.2356 8.69438 16.0431 8.69438V4.69438C14.7057 4.69438 13.0786 5.68227 13.0786 7.52123H17.0786ZM17.0391 7.20543C17.065 7.3071 17.0786 7.41336 17.0786 7.52123H13.0786C13.0786 7.75052 13.1076 7.97514 13.1624 8.19077L17.0391 7.20543ZM15.4691 12.2702C16.2241 11.2179 16.6698 9.77071 17.0481 8.15382L13.1534 7.24238C12.7791 8.84166 12.4695 9.58943 12.219 9.93851L15.4691 12.2702ZM13.8794 13.6491C14.5384 13.3242 15.0568 12.8449 15.4691 12.2702L12.219 9.93851C12.169 10.0083 12.1356 10.0405 12.1224 10.0522C12.1156 10.0582 12.112 10.0606 12.1113 10.061C12.1108 10.0614 12.1108 10.0614 12.1105 10.0615L13.8794 13.6491ZM11.7832 14.1005C12.5177 14.1005 13.2257 13.9715 13.8794 13.6491L12.1105 10.0615C12.1101 10.0617 12.1065 10.0635 12.098 10.0664C12.0894 10.0693 12.0741 10.0739 12.0503 10.0788C12.0024 10.0888 11.9175 10.1005 11.7832 10.1005V14.1005ZM9.65404 13.5886C10.3048 13.9506 11.025 14.1005 11.7832 14.1005V10.1005C11.6664 10.1005 11.6052 10.0891 11.5841 10.0842C11.5661 10.08 11.5756 10.0803 11.5985 10.093L9.65404 13.5886ZM8.15511 12.1261C8.52185 12.7082 9.00335 13.2267 9.65405 13.5886L11.5985 10.093C11.6213 10.1058 11.6313 10.1163 11.6263 10.1113C11.619 10.104 11.5883 10.0715 11.5395 9.99398L8.15511 12.1261ZM6.76637 8.15477C7.11148 9.64276 7.49022 11.0706 8.15511 12.1261L11.5395 9.99398C11.2885 9.59549 11.0279 8.82479 10.6629 7.25103L6.76637 8.15477Z"
                                                fill="#432A0F" mask="url(#path-1-outside-1_1834_25020-499429)" />
                                        </svg>
                                    </div>
                                    立即購買
                                </button>
                                <button class="favorite d-flex justify-content-center align-items-center">
                                    <div class="icon_heart_nav">
                                        <svg class="heart_line" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11.2746 6.4197C9.38169 4.52677 6.31264 4.52677 4.4197 6.4197C2.52677 8.31264 2.52677 11.3817 4.4197 13.2746L9.61052 18.4648C10.9085 19.7628 13.0131 19.7628 14.3111 18.4648L18.8157 13.9601L18.815 13.9594L19.4997 13.2746C21.3927 11.3817 21.3927 8.31264 19.4997 6.4197C17.6068 4.52677 14.5377 4.52677 12.6448 6.4197L11.9597 7.10479L11.2746 6.4197Z"
                                                stroke="#432A0F" stroke-width="2" />
                                        </svg>
                                    </div>
                                    加入最愛
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 手機上方列 -->
    <div class="tdnav_mb mt-2 d-block d-md-none">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col px-2">
                    <a href="#intro_mb"><small>行程介紹</small></a>
                </div>
                <div class="col px-2">
                    <a href="#notice"><small>購買須知</small></a>
                </div>
                <div class="col px-2">
                    <a href="#map"><small>集合地點</small></a>
                </div>
                <div class="col px-2">
                    <a href="#back"><small>取消政策</small></a>
                </div>
                <div class="col px-2">
                    <a href="#comment"><small>旅客評論</small></a>
                </div>
            </div>
        </div>
    </div>
    <div class="purchase_travel d-none d-md-block">
        <div class="container">
            <div class="tnotice_title">
                <h5>訂購行程</h5>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="tnotice_info">
                        <h6>行程重點資訊提醒</h6>
                        <small>•集合地點：捷運北門站2號出口 <br>
                            （請找穿黃色衣服的導遊） <br>
                            •結束地點：大稻埕碼頭（原地解散） <br>
                            •行程長度：2小時 <br>
                            •捷運北門站2號出口出發 <br>
                            <br>
                            ＊途經景點： <br>
                            •迪化街口 <br>
                            •青草茶 <br>
                            •永樂市場 <br>
                            •屈臣氏大藥房 <br>
                            •迪化街郵局 <br>
                            •大稻埕遊客中心 <br>
                            •台北霞海城隍廟 <br>
                            以上景點視當天天候或行程安排調整</small>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="signup">
                        <h6>報名場次</h6>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1"
                                value="option1">
                            <label class="form-check-label" for="exampleRadios1">
                                2022/10/30（六）16:30<small class="xs">（剩餘名額：5位）</small>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2"
                                value="option2">
                            <label class="form-check-label" for="exampleRadios2">
                                2022/11/03（一）16:30<small class="xs">（剩餘名額：2位）</small> 
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3"
                                value="option3" disabled>
                            <label class="form-check-label" for="exampleRadios3">
                                2022/11/13（一）16:30<small class="xs">（已額滿）</small> 
                            </label>
                        </div>

                        <h6 class="mt-3">報名人數</h6>
                        <div class="number">
                            <div class="choice d-flex align-items-center">
                                <div class="quantity">
                                    <button class="minus disabled">－</button>
                                </div>
                                <div class="people">1</div>
                                <div class="quantity">
                                    <button class="plus">＋</button>
                                </div>
                            </div>
                            <div class="total d-flex justify-content-center">
                                <h6>總金額</h6>
                                <h6 class="total_price"></h6>
                            </div>
                            <div class="buy_btn">
                                <button class="buy d-flex justify-content-center align-items-center">
                                    <div class="icon_buy">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <mask id="path-1-outside-1_1834_25020-499429" maskUnits="userSpaceOnUse"
                                                x="1.58203" y="3.25" width="20" height="17" fill="black">
                                                <rect fill="white" x="1.58203" y="3.25" width="20" height="17" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M8.09827 5.25C6.79605 5.25 5.69918 6.22304 5.54392 7.51597L4.60073 15.3706C4.41683 16.902 5.61261 18.25 7.15508 18.25H16.8382C18.3888 18.25 19.587 16.8885 19.39 15.3504L18.384 7.49584C18.2195 6.21184 17.1266 5.25 15.8321 5.25H8.09827ZM8.71466 7.7029C8.72994 7.64444 8.73801 7.58365 8.73801 7.52123C8.73801 7.06458 8.30622 6.69438 7.77357 6.69438C7.24093 6.69438 6.80914 7.06458 6.80914 7.52123C6.80914 7.97789 7.24093 8.34808 7.77357 8.34808C7.79553 8.34808 7.81732 8.34745 7.8389 8.34622C8.15888 9.67663 8.49438 10.7885 9.00121 11.593C9.29939 12.0664 9.66702 12.4516 10.1401 12.7147C10.6133 12.9779 11.1586 13.1005 11.7832 13.1005C12.4 13.1005 12.9498 12.9926 13.4372 12.7522C13.9264 12.511 14.3243 12.1505 14.6566 11.6873C15.228 10.8908 15.6217 9.76455 15.9734 8.34596C15.9964 8.34736 16.0196 8.34808 16.0431 8.34808C16.5757 8.34808 17.0075 7.97789 17.0075 7.52123C17.0075 7.06458 16.5757 6.69438 16.0431 6.69438C15.5104 6.69438 15.0786 7.06458 15.0786 7.52123C15.0786 7.58194 15.0863 7.64112 15.1008 7.6981C14.7244 9.30618 14.3468 10.4037 13.8441 11.1044C13.5917 11.4562 13.3141 11.6979 12.9949 11.8553C12.674 12.0136 12.2825 12.1005 11.7832 12.1005C11.2918 12.1005 10.9216 12.0051 10.6263 11.8408C10.3309 11.6766 10.0771 11.4248 9.84731 11.06C9.38935 10.3331 9.06972 9.23377 8.71466 7.7029Z" />
                                            </mask>
                                            <path
                                                d="M5.54392 7.51597L3.55819 7.27752L5.54392 7.51597ZM4.60073 15.3706L6.58647 15.609L4.60073 15.3706ZM19.39 15.3504L17.4062 15.6045V15.6045L19.39 15.3504ZM18.384 7.49584L16.4002 7.74994V7.74994L18.384 7.49584ZM8.71466 7.7029L6.77972 7.19693L6.65491 7.6742L6.76637 8.15477L8.71466 7.7029ZM7.8389 8.34622L9.78346 7.87854L9.3927 6.25381L7.72438 6.3495L7.8389 8.34622ZM9.00121 11.593L7.30901 12.6591L7.30901 12.6591L9.00121 11.593ZM10.1401 12.7147L9.16794 14.4625L9.16794 14.4625L10.1401 12.7147ZM13.4372 12.7522L12.5527 10.9584L12.5527 10.9584L13.4372 12.7522ZM14.6566 11.6873L16.2817 12.8531L16.2817 12.8531L14.6566 11.6873ZM15.9734 8.34596L16.0956 6.34969L14.433 6.24796L14.0322 7.86464L15.9734 8.34596ZM15.1008 7.6981L17.0481 8.15382L17.1594 7.67853L17.0391 7.20543L15.1008 7.6981ZM13.8441 11.1044L12.219 9.93851L12.219 9.93851L13.8441 11.1044ZM12.9949 11.8553L12.1105 10.0615L12.1105 10.0615L12.9949 11.8553ZM10.6263 11.8408L11.5985 10.093L11.5985 10.093L10.6263 11.8408ZM9.84731 11.06L8.15511 12.1261L8.15511 12.1261L9.84731 11.06ZM7.52966 7.75442C7.56422 7.4666 7.80839 7.25 8.09827 7.25V3.25C5.78371 3.25 3.83414 4.97947 3.55819 7.27752L7.52966 7.75442ZM6.58647 15.609L7.52966 7.75442L3.55819 7.27752L2.615 15.1321L6.58647 15.609ZM7.15508 16.25C6.81172 16.25 6.54553 15.9499 6.58647 15.609L2.615 15.1321C2.28813 17.8542 4.4135 20.25 7.15508 20.25V16.25ZM16.8382 16.25H7.15508V20.25H16.8382V16.25ZM17.4062 15.6045C17.4501 15.9469 17.1834 16.25 16.8382 16.25V20.25C19.5942 20.25 21.724 17.8301 21.3738 15.0963L17.4062 15.6045ZM16.4002 7.74994L17.4062 15.6045L21.3738 15.0963L20.3678 7.24175L16.4002 7.74994ZM15.8321 7.25C16.1203 7.25 16.3636 7.46411 16.4002 7.74994L20.3678 7.24175C20.0754 4.95956 18.1329 3.25 15.8321 3.25V7.25ZM8.09827 7.25H15.8321V3.25H8.09827V7.25ZM6.73801 7.52123C6.73801 7.41029 6.75247 7.30111 6.77972 7.19693L10.6496 8.20887C10.7074 7.98777 10.738 7.757 10.738 7.52123H6.73801ZM7.77357 8.69438C7.58102 8.69438 7.35565 8.628 7.15377 8.45492C6.9477 8.27825 6.73801 7.95436 6.73801 7.52123H10.738C10.738 5.68227 9.1109 4.69438 7.77357 4.69438V8.69438ZM8.80914 7.52123C8.80914 7.95436 8.59945 8.27825 8.39337 8.45492C8.1915 8.628 7.96613 8.69438 7.77357 8.69438V4.69438C6.43624 4.69438 4.80914 5.68227 4.80914 7.52123H8.80914ZM7.77357 6.34808C7.96613 6.34808 8.1915 6.41447 8.39337 6.58754C8.59945 6.76422 8.80914 7.0881 8.80914 7.52123H4.80914C4.80914 9.36019 6.43624 10.3481 7.77357 10.3481V6.34808ZM7.72438 6.3495C7.74093 6.34855 7.75733 6.34808 7.77357 6.34808V10.3481C7.83373 10.3481 7.8937 10.3464 7.95343 10.3429L7.72438 6.3495ZM10.6934 10.527C10.3805 10.0302 10.1044 9.21291 9.78346 7.87854L5.89435 8.81389C6.21338 10.1404 6.60829 11.5468 7.30901 12.6591L10.6934 10.527ZM11.1124 10.9669C10.995 10.9016 10.8549 10.7834 10.6934 10.527L7.30901 12.6591C7.74383 13.3493 8.33905 14.0015 9.16794 14.4625L11.1124 10.9669ZM11.7832 11.1005C11.4249 11.1005 11.2296 11.0322 11.1124 10.9669L9.16794 14.4625C9.99699 14.9237 10.8923 15.1005 11.7832 15.1005V11.1005ZM12.5527 10.9584C12.3983 11.0346 12.1652 11.1005 11.7832 11.1005V15.1005C12.6349 15.1005 13.5012 14.9506 14.3217 14.546L12.5527 10.9584ZM13.0316 10.5214C12.859 10.762 12.7018 10.8849 12.5527 10.9584L14.3217 14.546C15.1509 14.1371 15.7897 13.5389 16.2817 12.8531L13.0316 10.5214ZM14.0322 7.86464C13.6901 9.24447 13.3676 10.053 13.0316 10.5214L16.2817 12.8531C17.0884 11.7286 17.5533 10.2846 17.9146 8.82728L14.0322 7.86464ZM16.0431 6.34808C16.0606 6.34808 16.0781 6.34862 16.0956 6.34969L15.8513 10.3422C15.9147 10.3461 15.9787 10.3481 16.0431 10.3481V6.34808ZM15.0075 7.52123C15.0075 7.0881 15.2172 6.76422 15.4233 6.58754C15.6251 6.41447 15.8505 6.34808 16.0431 6.34808V10.3481C17.3804 10.3481 19.0075 9.36019 19.0075 7.52123H15.0075ZM16.0431 8.69438C15.8505 8.69438 15.6251 8.628 15.4233 8.45492C15.2172 8.27825 15.0075 7.95436 15.0075 7.52123H19.0075C19.0075 5.68227 17.3804 4.69438 16.0431 4.69438V8.69438ZM17.0786 7.52123C17.0786 7.95436 16.8689 8.27825 16.6629 8.45492C16.461 8.628 16.2356 8.69438 16.0431 8.69438V4.69438C14.7057 4.69438 13.0786 5.68227 13.0786 7.52123H17.0786ZM17.0391 7.20543C17.065 7.3071 17.0786 7.41336 17.0786 7.52123H13.0786C13.0786 7.75052 13.1076 7.97514 13.1624 8.19077L17.0391 7.20543ZM15.4691 12.2702C16.2241 11.2179 16.6698 9.77071 17.0481 8.15382L13.1534 7.24238C12.7791 8.84166 12.4695 9.58943 12.219 9.93851L15.4691 12.2702ZM13.8794 13.6491C14.5384 13.3242 15.0568 12.8449 15.4691 12.2702L12.219 9.93851C12.169 10.0083 12.1356 10.0405 12.1224 10.0522C12.1156 10.0582 12.112 10.0606 12.1113 10.061C12.1108 10.0614 12.1108 10.0614 12.1105 10.0615L13.8794 13.6491ZM11.7832 14.1005C12.5177 14.1005 13.2257 13.9715 13.8794 13.6491L12.1105 10.0615C12.1101 10.0617 12.1065 10.0635 12.098 10.0664C12.0894 10.0693 12.0741 10.0739 12.0503 10.0788C12.0024 10.0888 11.9175 10.1005 11.7832 10.1005V14.1005ZM9.65404 13.5886C10.3048 13.9506 11.025 14.1005 11.7832 14.1005V10.1005C11.6664 10.1005 11.6052 10.0891 11.5841 10.0842C11.5661 10.08 11.5756 10.0803 11.5985 10.093L9.65404 13.5886ZM8.15511 12.1261C8.52185 12.7082 9.00335 13.2267 9.65405 13.5886L11.5985 10.093C11.6213 10.1058 11.6313 10.1163 11.6263 10.1113C11.619 10.104 11.5883 10.0715 11.5395 9.99398L8.15511 12.1261ZM6.76637 8.15477C7.11148 9.64276 7.49022 11.0706 8.15511 12.1261L11.5395 9.99398C11.2885 9.59549 11.0279 8.82479 10.6629 7.25103L6.76637 8.15477Z"
                                                fill="#432A0F" mask="url(#path-1-outside-1_1834_25020-499429)" />
                                        </svg>
                                    </div>
                                    立即購買
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="undernav d-none d-md-block">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="row justify-content-center">
                <div class="left_title">
                    <div class="col">
                        <p>大稻埕霞海城廟深度漫步文化之旅</p>
                        <h2>345</h2>
                    </div>
                </div>

            </div>
            <div class="btns">
                <div class="row align-items-center">
                    <div class="col">
                        <button class="favorite d-flex justify-content-center align-items-center">
                            <div class="icon_heart_nav">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11.2746 6.4197C9.38169 4.52677 6.31264 4.52677 4.4197 6.4197C2.52677 8.31264 2.52677 11.3817 4.4197 13.2746L9.61052 18.4648C10.9085 19.7628 13.0131 19.7628 14.3111 18.4648L18.8157 13.9601L18.815 13.9594L19.4997 13.2746C21.3927 11.3817 21.3927 8.31264 19.4997 6.4197C17.6068 4.52677 14.5377 4.52677 12.6448 6.4197L11.9597 7.10479L11.2746 6.4197Z"
                                        stroke="#432A0F" stroke-width="2" />
                                </svg>
                            </div>
                            加入最愛
                        </button>
                    </div>
                    <div class="col">
                        <button class="buy d-flex justify-content-center align-items-center">
                            <div class="icon_buy">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <mask id="path-1-outside-1_1834_25020-499429" maskUnits="userSpaceOnUse" x="1.58203"
                                        y="3.25" width="20" height="17" fill="black">
                                        <rect fill="white" x="1.58203" y="3.25" width="20" height="17" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M8.09827 5.25C6.79605 5.25 5.69918 6.22304 5.54392 7.51597L4.60073 15.3706C4.41683 16.902 5.61261 18.25 7.15508 18.25H16.8382C18.3888 18.25 19.587 16.8885 19.39 15.3504L18.384 7.49584C18.2195 6.21184 17.1266 5.25 15.8321 5.25H8.09827ZM8.71466 7.7029C8.72994 7.64444 8.73801 7.58365 8.73801 7.52123C8.73801 7.06458 8.30622 6.69438 7.77357 6.69438C7.24093 6.69438 6.80914 7.06458 6.80914 7.52123C6.80914 7.97789 7.24093 8.34808 7.77357 8.34808C7.79553 8.34808 7.81732 8.34745 7.8389 8.34622C8.15888 9.67663 8.49438 10.7885 9.00121 11.593C9.29939 12.0664 9.66702 12.4516 10.1401 12.7147C10.6133 12.9779 11.1586 13.1005 11.7832 13.1005C12.4 13.1005 12.9498 12.9926 13.4372 12.7522C13.9264 12.511 14.3243 12.1505 14.6566 11.6873C15.228 10.8908 15.6217 9.76455 15.9734 8.34596C15.9964 8.34736 16.0196 8.34808 16.0431 8.34808C16.5757 8.34808 17.0075 7.97789 17.0075 7.52123C17.0075 7.06458 16.5757 6.69438 16.0431 6.69438C15.5104 6.69438 15.0786 7.06458 15.0786 7.52123C15.0786 7.58194 15.0863 7.64112 15.1008 7.6981C14.7244 9.30618 14.3468 10.4037 13.8441 11.1044C13.5917 11.4562 13.3141 11.6979 12.9949 11.8553C12.674 12.0136 12.2825 12.1005 11.7832 12.1005C11.2918 12.1005 10.9216 12.0051 10.6263 11.8408C10.3309 11.6766 10.0771 11.4248 9.84731 11.06C9.38935 10.3331 9.06972 9.23377 8.71466 7.7029Z" />
                                    </mask>
                                    <path
                                        d="M5.54392 7.51597L3.55819 7.27752L5.54392 7.51597ZM4.60073 15.3706L6.58647 15.609L4.60073 15.3706ZM19.39 15.3504L17.4062 15.6045V15.6045L19.39 15.3504ZM18.384 7.49584L16.4002 7.74994V7.74994L18.384 7.49584ZM8.71466 7.7029L6.77972 7.19693L6.65491 7.6742L6.76637 8.15477L8.71466 7.7029ZM7.8389 8.34622L9.78346 7.87854L9.3927 6.25381L7.72438 6.3495L7.8389 8.34622ZM9.00121 11.593L7.30901 12.6591L7.30901 12.6591L9.00121 11.593ZM10.1401 12.7147L9.16794 14.4625L9.16794 14.4625L10.1401 12.7147ZM13.4372 12.7522L12.5527 10.9584L12.5527 10.9584L13.4372 12.7522ZM14.6566 11.6873L16.2817 12.8531L16.2817 12.8531L14.6566 11.6873ZM15.9734 8.34596L16.0956 6.34969L14.433 6.24796L14.0322 7.86464L15.9734 8.34596ZM15.1008 7.6981L17.0481 8.15382L17.1594 7.67853L17.0391 7.20543L15.1008 7.6981ZM13.8441 11.1044L12.219 9.93851L12.219 9.93851L13.8441 11.1044ZM12.9949 11.8553L12.1105 10.0615L12.1105 10.0615L12.9949 11.8553ZM10.6263 11.8408L11.5985 10.093L11.5985 10.093L10.6263 11.8408ZM9.84731 11.06L8.15511 12.1261L8.15511 12.1261L9.84731 11.06ZM7.52966 7.75442C7.56422 7.4666 7.80839 7.25 8.09827 7.25V3.25C5.78371 3.25 3.83414 4.97947 3.55819 7.27752L7.52966 7.75442ZM6.58647 15.609L7.52966 7.75442L3.55819 7.27752L2.615 15.1321L6.58647 15.609ZM7.15508 16.25C6.81172 16.25 6.54553 15.9499 6.58647 15.609L2.615 15.1321C2.28813 17.8542 4.4135 20.25 7.15508 20.25V16.25ZM16.8382 16.25H7.15508V20.25H16.8382V16.25ZM17.4062 15.6045C17.4501 15.9469 17.1834 16.25 16.8382 16.25V20.25C19.5942 20.25 21.724 17.8301 21.3738 15.0963L17.4062 15.6045ZM16.4002 7.74994L17.4062 15.6045L21.3738 15.0963L20.3678 7.24175L16.4002 7.74994ZM15.8321 7.25C16.1203 7.25 16.3636 7.46411 16.4002 7.74994L20.3678 7.24175C20.0754 4.95956 18.1329 3.25 15.8321 3.25V7.25ZM8.09827 7.25H15.8321V3.25H8.09827V7.25ZM6.73801 7.52123C6.73801 7.41029 6.75247 7.30111 6.77972 7.19693L10.6496 8.20887C10.7074 7.98777 10.738 7.757 10.738 7.52123H6.73801ZM7.77357 8.69438C7.58102 8.69438 7.35565 8.628 7.15377 8.45492C6.9477 8.27825 6.73801 7.95436 6.73801 7.52123H10.738C10.738 5.68227 9.1109 4.69438 7.77357 4.69438V8.69438ZM8.80914 7.52123C8.80914 7.95436 8.59945 8.27825 8.39337 8.45492C8.1915 8.628 7.96613 8.69438 7.77357 8.69438V4.69438C6.43624 4.69438 4.80914 5.68227 4.80914 7.52123H8.80914ZM7.77357 6.34808C7.96613 6.34808 8.1915 6.41447 8.39337 6.58754C8.59945 6.76422 8.80914 7.0881 8.80914 7.52123H4.80914C4.80914 9.36019 6.43624 10.3481 7.77357 10.3481V6.34808ZM7.72438 6.3495C7.74093 6.34855 7.75733 6.34808 7.77357 6.34808V10.3481C7.83373 10.3481 7.8937 10.3464 7.95343 10.3429L7.72438 6.3495ZM10.6934 10.527C10.3805 10.0302 10.1044 9.21291 9.78346 7.87854L5.89435 8.81389C6.21338 10.1404 6.60829 11.5468 7.30901 12.6591L10.6934 10.527ZM11.1124 10.9669C10.995 10.9016 10.8549 10.7834 10.6934 10.527L7.30901 12.6591C7.74383 13.3493 8.33905 14.0015 9.16794 14.4625L11.1124 10.9669ZM11.7832 11.1005C11.4249 11.1005 11.2296 11.0322 11.1124 10.9669L9.16794 14.4625C9.99699 14.9237 10.8923 15.1005 11.7832 15.1005V11.1005ZM12.5527 10.9584C12.3983 11.0346 12.1652 11.1005 11.7832 11.1005V15.1005C12.6349 15.1005 13.5012 14.9506 14.3217 14.546L12.5527 10.9584ZM13.0316 10.5214C12.859 10.762 12.7018 10.8849 12.5527 10.9584L14.3217 14.546C15.1509 14.1371 15.7897 13.5389 16.2817 12.8531L13.0316 10.5214ZM14.0322 7.86464C13.6901 9.24447 13.3676 10.053 13.0316 10.5214L16.2817 12.8531C17.0884 11.7286 17.5533 10.2846 17.9146 8.82728L14.0322 7.86464ZM16.0431 6.34808C16.0606 6.34808 16.0781 6.34862 16.0956 6.34969L15.8513 10.3422C15.9147 10.3461 15.9787 10.3481 16.0431 10.3481V6.34808ZM15.0075 7.52123C15.0075 7.0881 15.2172 6.76422 15.4233 6.58754C15.6251 6.41447 15.8505 6.34808 16.0431 6.34808V10.3481C17.3804 10.3481 19.0075 9.36019 19.0075 7.52123H15.0075ZM16.0431 8.69438C15.8505 8.69438 15.6251 8.628 15.4233 8.45492C15.2172 8.27825 15.0075 7.95436 15.0075 7.52123H19.0075C19.0075 5.68227 17.3804 4.69438 16.0431 4.69438V8.69438ZM17.0786 7.52123C17.0786 7.95436 16.8689 8.27825 16.6629 8.45492C16.461 8.628 16.2356 8.69438 16.0431 8.69438V4.69438C14.7057 4.69438 13.0786 5.68227 13.0786 7.52123H17.0786ZM17.0391 7.20543C17.065 7.3071 17.0786 7.41336 17.0786 7.52123H13.0786C13.0786 7.75052 13.1076 7.97514 13.1624 8.19077L17.0391 7.20543ZM15.4691 12.2702C16.2241 11.2179 16.6698 9.77071 17.0481 8.15382L13.1534 7.24238C12.7791 8.84166 12.4695 9.58943 12.219 9.93851L15.4691 12.2702ZM13.8794 13.6491C14.5384 13.3242 15.0568 12.8449 15.4691 12.2702L12.219 9.93851C12.169 10.0083 12.1356 10.0405 12.1224 10.0522C12.1156 10.0582 12.112 10.0606 12.1113 10.061C12.1108 10.0614 12.1108 10.0614 12.1105 10.0615L13.8794 13.6491ZM11.7832 14.1005C12.5177 14.1005 13.2257 13.9715 13.8794 13.6491L12.1105 10.0615C12.1101 10.0617 12.1065 10.0635 12.098 10.0664C12.0894 10.0693 12.0741 10.0739 12.0503 10.0788C12.0024 10.0888 11.9175 10.1005 11.7832 10.1005V14.1005ZM9.65404 13.5886C10.3048 13.9506 11.025 14.1005 11.7832 14.1005V10.1005C11.6664 10.1005 11.6052 10.0891 11.5841 10.0842C11.5661 10.08 11.5756 10.0803 11.5985 10.093L9.65404 13.5886ZM8.15511 12.1261C8.52185 12.7082 9.00335 13.2267 9.65405 13.5886L11.5985 10.093C11.6213 10.1058 11.6313 10.1163 11.6263 10.1113C11.619 10.104 11.5883 10.0715 11.5395 9.99398L8.15511 12.1261ZM6.76637 8.15477C7.11148 9.64276 7.49022 11.0706 8.15511 12.1261L11.5395 9.99398C11.2885 9.59549 11.0279 8.82479 10.6629 7.25103L6.76637 8.15477Z"
                                        fill="#432A0F" mask="url(#path-1-outside-1_1834_25020-499429)" />
                                </svg>
                            </div>
                            立即購買
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="detail_box">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="details">
                        <div class="intro_bg" id="intro">
                            <div class="intro_pc d-none d-md-block">
                                <h5>行程介紹</h5>
                                <p>行程時間：2小時</p>
                                <small>漫步在古色古香的大稻埕街上，宗教常成為聚落發展的中心，街上充斥著各式各樣的藥材、乾貨店，您知道為什麼嗎？ <br>
                                    從大稻埕看到台北歷史發展的演進，它真的是功不可沒！
                                    大稻埕也有豐富的南北貨資源，其中有名的就是茶葉與中藥材，歡迎來大稻埕走走晃晃
                                    讓專業的導遊帶您認識這塊台北古城發展的中心吧！
                                </small>
                            </div>
                            <div class="intro_mb d-md-none d-block" id="intro_mb">
                                <div class="tnotice_title">
                                    <h5>行程介紹</h5>
                                </div>
                                <div class="tnotice_info">
                                    <small>•集合地點：捷運北門站2號出口 <br>
                                        （請找穿黃色衣服的導遊） <br>
                                        •結束地點：大稻埕碼頭（原地解散） <br>
                                        •行程長度：2小時 <br>
                                        •捷運北門站2號出口出發 <br>
                                        <br>
                                        ＊途經景點： <br>
                                        •迪化街口 <br>
                                        •青草茶 <br>
                                        •永樂市場 <br>
                                        •屈臣氏大藥房 <br>
                                        •迪化街郵局 <br>
                                        •大稻埕遊客中心 <br>
                                        •台北霞海城隍廟 <br>
                                        以上景點視當天天候或行程安排調整</small>
                                </div>
                            </div>
                        </div>
                        
                        <div class="intro_bg" id="notice">
                            <h5>購買須知 + 注意事項</h5>
                            <small>此行程為全程步行，請斟酌自身身體狀況後報名
                                如需申請改期，請於至少5天前通知並獲得確認，否則將不免費改期；體驗活動當日則不接受任何更改或取消。
                            </small>
                        </div>
                        <div class="intro_bg" id="map">
                            <h5>集合地點</h5>
                            <small>集合地點：捷運北門站2號出口（請找穿黃色衣服的導遊）</small>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3614.5585112552744!2d121.50972401500663!3d25.049052483965454!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442a90d8dc0a879%3A0xfcbd3d1c0637312e!2z5o236YGL5YyX6ZaA56uZ!5e0!3m2!1szh-TW!2stw!4v1663159026541!5m2!1szh-TW!2stw"
                                width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <div class="intro_bg" id="back">
                            <h5>取消政策</h5>
                            <small>如需取消預訂，請於至少5天前通知並獲得確認，否則將不獲全額退款；如於1 - 4天前取消預訂，將退款訂單金額的70%；體驗活動當日不接受任何更改或取消。
                            </small>
                        </div>
                        <div class="intro_bg" id="comment">
                            <h5>旅客評論</h5>
                            <div class="row align-items-center">
                                <div class="col col-md-9">
                                    <div class="c_star d-flex align-items-center">
                                        <h3 class="d-none d-md-block mr-3">5</h3>
                                        <small class="d-flex xs">
                                        <div class="icon_fivestar px-0">
                                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                            <div class="small xs d-md-none">(50 + 則評價)</div>
                                        </div>
                                        <div class="xs d-none d-md-block ml-2">(50 + 則評價)</div>
                                    </small>
                                    </div>
                                </div>
                                <div class="col col-md-3">
                                    <div class="time_sort">
                                        <select name="" id="">
                                            <option value="">最新</option>
                                            <option value="">評價高→低</option>
                                            <option value="">評價低→高</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="cd">
                                <!-- computer comment -->
                                <div class="row d-none d-md-flex">
                                    <div class="col col-md-3">
                                        <div class="profile_img">
                                            <img class="w-100" src="./imgs/member/picture01.png" alt="">
                                        </div>
                                    </div>
                                    <div class="col col-md-9">
                                        <div class="detail_comment">
                                            <p class="name">黃八張</p>
                                            <div class="star_date d-flex align-items-center">
                                                <div class="icon_fivestar">
                                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                                </div>
                                                <small class="date">2022/8/31</small>
                                            </div>
                                            <div class="c_tags py-1">
                                                <small class="tags">商品超可愛</small>
                                                <small class="tags">CP值超高</small>
                                            </div>
                                            <div class="p_comment">
                                                <p>很可愛的商品！超讚的聯名企劃，替第一次參拜月老的人準備周全的商品，設計也很有質感，有保存的價值和意義。</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row d-none d-md-flex">
                                    <div class="col col-md-3">
                                        <div class="profile_img">
                                            <img class="w-100" src="./imgs/member/picture01.png" alt="">
                                        </div>
                                    </div>
                                    <div class="col col-md-9">
                                        <div class="detail_comment">
                                            <p class="name">黃八張</p>
                                            <div class="star_date d-flex align-items-center">
                                                <div class="icon_fivestar">
                                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                                </div>
                                                <small class="date">2022/8/31</small>
                                            </div>
                                            <div class="c_tags py-1">
                                                <small class="tags">商品超可愛</small>
                                                <small class="tags">CP值超高</small>
                                            </div>
                                            <div class="p_comment">
                                                <p>很可愛的商品！超讚的聯名企劃，替第一次參拜月老的人準備周全的商品，設計也很有質感，有保存的價值和意義。</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row d-none d-md-flex">
                                    <div class="col col-md-3">
                                        <div class="profile_img">
                                            <img class="w-100" src="./imgs/member/picture01.png" alt="">
                                        </div>
                                    </div>
                                    <div class="col col-md-9">
                                        <div class="detail_comment">
                                            <p class="name">黃八張</p>
                                            <div class="star_date d-flex align-items-center">
                                                <div class="icon_fivestar">
                                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                                </div>
                                                <small class="date">2022/8/31</small>
                                            </div>
                                            <div class="c_tags py-1">
                                                <small class="tags">商品超可愛</small>
                                                <small class="tags">CP值超高</small>
                                            </div>
                                            <div class="p_comment">
                                                <p>很可愛的商品！超讚的聯名企劃，替第一次參拜月老的人準備周全的商品，設計也很有質感，有保存的價值和意義。</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- mobile comment -->
                            <div class="cd_mb  d-block d-md-none">
                                <div class="row justify-content-center align-items-center p-0">
                                    <div class="col-3">
                                        <div class="profile_img" style="width: 70px;">
                                            <img class="w-100" src="./imgs/member/picture01.png" alt="">
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <p class="name">黃八張</p>
                                            <div class="star_date d-flex align-items-center ">
                                                <div class="icon_fivestar px-0">
                                                    <small class="date xs d-flex align-items-center">
                                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star pr-1"></i>
                                                </div>
                                                2022/8/31
                                            </small>
                                            </div>
                                    </div>
                                </div>
                                <div class="row pt-0">
                                    <div class="detail_comment">
                                        <div class="c_tags py-1">
                                            <small class="tags">商品超可愛</small>
                                            <small class="tags">CP值超高</small>
                                        </div>
                                        <div class="p_comment">
                                            <p>很可愛的商品！超讚的聯名企劃，替第一次參拜月老的人準備周全的商品，設計也很有質感，有保存的價值和意義。</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cd_mb d-block d-md-none">
                                <div class="row justify-content-center align-items-center p-0">
                                    <div class="col-3">
                                        <div class="profile_img" style="width: 70px;">
                                            <img class="w-100" src="./imgs/member/picture01.png" alt="">
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <p class="name">黃八張</p>
                                            <div class="star_date d-flex align-items-center ">
                                                <div class="icon_fivestar px-0">
                                                    <small class="date xs d-flex align-items-center">
                                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star pr-1"></i>
                                                </div>
                                                2022/8/31
                                            </small>
                                            </div>
                                    </div>
                                </div>
                                <div class="row pt-0">
                                    <div class="detail_comment">
                                        <div class="c_tags py-1">
                                            <small class="tags">商品超可愛</small>
                                            <small class="tags">CP值超高</small>
                                        </div>
                                        <div class="p_comment">
                                            <p>很可愛的商品！超讚的聯名企劃，替第一次參拜月老的人準備周全的商品，設計也很有質感，有保存的價值和意義。</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cd_mb d-block d-md-none">
                                <div class="row justify-content-center align-items-center p-0">
                                    <div class="col-3">
                                        <div class="profile_img" style="width: 70px;">
                                            <img class="w-100" src="./imgs/member/picture01.png" alt="">
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <p class="name">黃八張</p>
                                            <div class="star_date d-flex align-items-center ">
                                                <div class="icon_fivestar px-0">
                                                    <small class="date xs d-flex align-items-center">
                                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star pr-1"></i>
                                                </div>
                                                2022/8/31
                                            </small>
                                            </div>
                                    </div>
                                </div>
                                <div class="row pt-0">
                                    <div class="detail_comment">
                                        <div class="c_tags py-1">
                                            <small class="tags">商品超可愛</small>
                                            <small class="tags">CP值超高</small>
                                        </div>
                                        <div class="p_comment">
                                            <p>很可愛的商品！超讚的聯名企劃，替第一次參拜月老的人準備周全的商品，設計也很有質感，有保存的價值和意義。</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="cd_mb d-block d-md-none">
                                <a href="">看更多評論</a> 
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-none d-md-block">
                    <div class="links d-flex pl-3">
                        <a href="#intro">－行程介紹</a>
                        <a href="#notice">－購買須知 + 注意事項</a>
                        <a href="#map">－集合地點</a>
                        <a href="#back">－取消政策</a>
                        <a href="#comment">－旅客評論</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 瀏覽其他商品＆下方列固定 -->
    <!-- https://rainbowfun.ispan.com.tw/course/JavaScript -->
    <div class="otherp d-none d-md-block">
        <div class="container">
            <h4>瀏覽此商品的人，也看了...</h4>
            <!-- https://www.tutorialrepublic.com/codelab.php?topic=bootstrap&file=thumbnail-carousel-with-content -->
            <div class="row">
                <div class="col mx-auto">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
                        <!-- Wrapper for carousel items -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col col-md-4">
                                        <a href="">
                                            <div class="thumb-wrapper mx-3">
                                                <div class="img-box">
                                                    <img src="./imgs/product/P20_4.jpg" class="img-fluid" alt="">
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
                                                        <small class="xs card-text d-flex">
                                                            <div class="icon_star">
                                                                <svg width="20" height="20" viewBox="0 0 20 20"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M9.04894 2.92705C9.3483 2.00574 10.6517 2.00574 10.9511 2.92705L12.0206 6.21885C12.1545 6.63087 12.5385 6.90983 12.9717 6.90983H16.4329C17.4016 6.90983 17.8044 8.14945 17.0207 8.71885L14.2205 10.7533C13.87 11.0079 13.7234 11.4593 13.8572 11.8713L14.9268 15.1631C15.2261 16.0844 14.1717 16.8506 13.388 16.2812L10.5878 14.2467C10.2373 13.9921 9.7627 13.9921 9.41221 14.2467L6.61204 16.2812C5.82833 16.8506 4.77385 16.0844 5.0732 15.1631L6.14277 11.8713C6.27665 11.4593 6.12999 11.0079 5.7795 10.7533L2.97933 8.71885C2.19562 8.14945 2.59839 6.90983 3.56712 6.90983H7.02832C7.46154 6.90983 7.8455 6.63087 7.97937 6.21885L9.04894 2.92705Z"
                                                                        fill="#E5A62A" />
                                                                </svg>
                                                            </div> 4.7(50)
                                                        </small>
                                                        <small class="xs card-text d-flex">
                                                            <div class="icon_fire ">
                                                                <svg width="18" height="17" viewBox="0 0 18 17"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                    <rect width="18" height="17"
                                                                        fill="url(#pattern0-946095)" />
                                                                    <defs>
                                                                        <pattern id="pattern0-946095"
                                                                            patternContentUnits="objectBoundingBox"
                                                                            width="1" height="1">
                                                                            <use xlink:href="#image0_1808_23036"
                                                                                transform="translate(0.0277778) scale(0.0104938 0.0111111)" />
                                                                        </pattern>
                                                                        <image id="image0_1808_23036" width="90"
                                                                            height="90"
                                                                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAABmJLR0QA/wD/AP+gvaeTAAAI90lEQVR4nO2dfWxbVxnGn/faTtKuiTsB1dYNVNq1K4TE8XXCxGhLmSZtlG6ErDeJ2LIGhDpNFZrWQmkZbGVjAzGKqqkIqCpYC6Kx7zpQJy1AgfK5lmHHdrIMSqMOpoGQULek7Rw3cc7LH+1KlMSOfc65HyD//mp87vu8b56enJx7zrk3QJUqVapUqVKlihuQ1wXMZNhqrMlT8DEAPQCYCIdqReGRRnt4wuvaVAh6XcBMxin4KAE73vqaGTvzFHwnAz0EsJe1qWB4XcBMCLh3jo/vHrBavuB6MRrx1dCR7Wm+qnCRLhRpZhA2xeLZZ10tShP+6tF5LCnRSmAcTN7VtNq1ejTiK6MnAyWNBoBFCBiHj/cuq3OlII34ymhDUHS+awhoaciFv+FGPTrxldEgXlvmlVtTnc13OFqLZnxjNO+GwUzry4+g76TbWxY7V5FefGN0+uXoLQCWVhCyVNTwN52qRze+MVqAPyUR9smU1Xy79mIcwBfz6GRH7FoKFs4AqHg2wcAr5xeOvffDT/8t70Bp2vBFj6bg5A5ImAwABLy7PtfwoOaStON5j37RarwmQMEzABYoyJyf4sKq99vD/9JVl24879GGEfwK1EwGgPrLOr7F0x6d7G6+iQS9AD3/4QKBqWjs8EuDGrS041mPTlhWgKawT2MNBkTAtyt8nhm9Aqe3gahVqyhjU/qulpVaNTXhidGZrsgqEH/ZAemACPB2B3SVcd3ohGUFBON7UP8FWIzeZEfsWoe0pXHd6BV06vMMfNDBFLUUmtzqoL4Urhqd7Go2AXrE8USMHt7t/dR1Oq4Vc7x3WR0xHQRQ43w2eld6OFrukqsruGZ0Q65hD4D3uZVPGKLHrVzl4MoNS8pqvh1Ez7uV7zJj5xaOXVNqsSm5JRYyRgtf5UtnSAwCDorFwV2t+1OTuotxvEen21sWg+gA3L8LDTeMhzeUuoDGJh9nYDuAJQDezsB2jBW+5kQxjhvNNWIvgOuczlOE24o1JLfEQmD69MzPiXG/Ezs3jhqd6opsZNBmJ3PMw63FGoxzk+sAXD1H0wIR4nt0F+KY0YOfaLoajO86pV8WjOUZKzL3TxOj+I4OYVZPV8UxoycLxlOobA/QEdiYvZ7yx4+vfhszdZQIi6S7Wtp01uGI0amuyEYA2n/8ZGCwOfOzUKj2Acyzo8OMLTrr0G708d5ldWDaq1tXHr5h+lcZK3IdA/NufTG4c9hq1HZzpd3ocC78WYBX6NaVhQUtm/71FGEfgEVlhDbkEPqQrjq0Gj3QHV3KwE6dmsoQX//WPwesyDYA7WWHEms7DaXVaGaxC8BVOjXVoXoASHVGOpnwZIXBG7VVoUso29F8fSFIIwBqdWlqYoKZdxDRHgCBSoMFcVNbfPAl1SK09ehCkHbCfyYDQA0R7YWEyQBADC3Dhxajk1YsDKBXh5bfIPjIaMMo3Avfjc26oLbf33ljvaqKFqN1T+59RrBuQd0HVEWUjb60PeXegr4XEHidqoZ6jxakbQrkV0iQ8maystEEfZN6v8IEkxWnwkpGD1jRd4Bo1qLN/yENA5aptKygZLQwRFRV438FvvS9SqNkEgmKqMSXlQP4AzFrX4ivFIP5RqV4pezEThqdA9N90UR2LZPh+QOcTPBu6ADjhvkvkhJ+VRhYE7Mz+y+90YCL7v25BtNylXC110gQtO8WM/CaUQisa3s2/ff/fkjLQV6/QYKVtuXUxmhoN/oNg43bzOkmAwAJr44rTCesEqxkNOs2mrDdtNMvz9HgdXcGgAaVYNWpmUYD+DdmPPt0kcaz+vJI490NC4A3FOOvYJDxuWKv8iHADw8AvakS7A+jmZPReOZPxZoF8c+15FGj2JtxykJtjGY+rRJ/RYfoaMkLRMgGMKYjlyysOHwp3rBQSin+ShHGiVLtrXZqDMT7dOSShRhnVOKVjDZIJFXir+iw+PN813Au9ASAER35pCDyzui8WPRrKI5dAFDIB+cd61ufS+VA3APgomo+KYjnmHaWj5LRN9snxhn0nIoGAEzU1ZQ1TYzFB0+CcL9qPhm4IEoOb/OhvMTJwA9VNULiQtnPBcbi2e+D6YuqOSuDz8aODJ1SUVA2ujWR6QegdsDECFS0MhazM48TwZFHIOaGjqm+rlPDVhaYGF9XKoIqX50z49ldAD2hkrcCfqwqoGV3ZASrfgRgQDaeGR+ViYslMg8R8Jhs3jLJjefz/aoiWozutO0pEG8FIGTiidCY6m6WegDTTGQfdtJsJhxec/TUeVUdbft9sfjgSQLkbyoEPSAbaiayDwP4lnTuEpAQ39aho3Vjtf78mzvASEuGd6g8N2Imsp8h8EHZ+Lkg4FjMHtJ096uRlf0jFwMGugl4XSKchOA9sucnCOBantoC4Gcy8XNqGrRbl5b2owIt8exf2eB2yNzBEdamOyP3yeZutIcnjAnqZuAVWY1pHIn2ZV7QoAPAoTMZsb7B3xHzPQAKlcYy8KTK63qiP8mMMqNbJvc0cszBbQrxs3Ds8ItpDz5D4G4AlT7AvkgE+ejJu2+S3jpqs7MvMuEp2Xgi7Gy1U6/Kxs+Fo6eMzMTgEQFqR6ULT4zVwYnxQ8fXr5fepc+P53cD+GelcQQci8az2pdkHT/O1ZbIPG8wrWXgtUriiOhj4SWvH0hYltQjEZfnvpW90JtwOs+Fbif+OoYr5+aidiZjsGEC+GklcQzavJxO98n27PF8/gCA0TIvH+WCuPNme1hmxjQvrh1QNO30v81EdgOIHgRQ9p0WgTeFl4w+KpNzzdFT5xnoK+PSPBm8qfXI0F9k8pSDqydBCeBYPLM3wHgPg54pP5Klp3wGidL7kUCOYNxh9g3+UjZHWXU4KV6MFjv7j9ZExiISG5gxPN/1DEi/G7r+3PivUHRjl88SxEfMRPoXsvrl4unZZjM+1B+zs01EYgMYRXsUEQ7J5ljZP3IRxPtnNTDSQUabmRj6rax2JXj+t7IIYMSH+gH0J62mJoMMC8AtDDQBuMDAD+pEQeldeRwOPURjkwDTZgBEwKE8Fn4pZp8Y1/E9VKlSpUqVKlWq+If/ANnfn19op2weAAAAAElFTkSuQmCC" />
                                                                    </defs>
                                                                </svg>
                                                            </div>
                                                            3K個已訂購
                                                        </small>
                                                        <h5 class="m-0 ml-auto">850</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                    <div class="col col-md-4">
                                        <a href="">
                                            <div class="thumb-wrapper mx-3">
                                                <div class="img-box">
                                                    <img src="./imgs/product/P20_4.jpg" class="img-fluid" alt="">
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
                                                        <small class="xs card-text d-flex">
                                                            <div class="icon_star">
                                                                <svg width="20" height="20" viewBox="0 0 20 20"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M9.04894 2.92705C9.3483 2.00574 10.6517 2.00574 10.9511 2.92705L12.0206 6.21885C12.1545 6.63087 12.5385 6.90983 12.9717 6.90983H16.4329C17.4016 6.90983 17.8044 8.14945 17.0207 8.71885L14.2205 10.7533C13.87 11.0079 13.7234 11.4593 13.8572 11.8713L14.9268 15.1631C15.2261 16.0844 14.1717 16.8506 13.388 16.2812L10.5878 14.2467C10.2373 13.9921 9.7627 13.9921 9.41221 14.2467L6.61204 16.2812C5.82833 16.8506 4.77385 16.0844 5.0732 15.1631L6.14277 11.8713C6.27665 11.4593 6.12999 11.0079 5.7795 10.7533L2.97933 8.71885C2.19562 8.14945 2.59839 6.90983 3.56712 6.90983H7.02832C7.46154 6.90983 7.8455 6.63087 7.97937 6.21885L9.04894 2.92705Z"
                                                                        fill="#E5A62A" />
                                                                </svg>
                                                            </div> 4.7(50)
                                                        </small>
                                                        <small class="xs card-text d-flex">
                                                            <div class="icon_fire ">
                                                                <svg width="18" height="17" viewBox="0 0 18 17"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                    <rect width="18" height="17"
                                                                        fill="url(#pattern0-946095)" />
                                                                    <defs>
                                                                        <pattern id="pattern0-946095"
                                                                            patternContentUnits="objectBoundingBox"
                                                                            width="1" height="1">
                                                                            <use xlink:href="#image0_1808_23036"
                                                                                transform="translate(0.0277778) scale(0.0104938 0.0111111)" />
                                                                        </pattern>
                                                                        <image id="image0_1808_23036" width="90"
                                                                            height="90"
                                                                            xlink:href="data:image/png;base64,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" />
                                                                    </defs>
                                                                </svg>
                                                            </div>
                                                            3K個已訂購
                                                        </small>
                                                        <h5 class="m-0 ml-auto">850</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                    <div class="col col-md-4">
                                        <a href="">
                                            <div class="thumb-wrapper mx-3">
                                                <div class="img-box">
                                                    <img src="./imgs/product/P20_4.jpg" class="img-fluid" alt="">
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
                                                        <small class="xs card-text d-flex">
                                                            <div class="icon_star">
                                                                <svg width="20" height="20" viewBox="0 0 20 20"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M9.04894 2.92705C9.3483 2.00574 10.6517 2.00574 10.9511 2.92705L12.0206 6.21885C12.1545 6.63087 12.5385 6.90983 12.9717 6.90983H16.4329C17.4016 6.90983 17.8044 8.14945 17.0207 8.71885L14.2205 10.7533C13.87 11.0079 13.7234 11.4593 13.8572 11.8713L14.9268 15.1631C15.2261 16.0844 14.1717 16.8506 13.388 16.2812L10.5878 14.2467C10.2373 13.9921 9.7627 13.9921 9.41221 14.2467L6.61204 16.2812C5.82833 16.8506 4.77385 16.0844 5.0732 15.1631L6.14277 11.8713C6.27665 11.4593 6.12999 11.0079 5.7795 10.7533L2.97933 8.71885C2.19562 8.14945 2.59839 6.90983 3.56712 6.90983H7.02832C7.46154 6.90983 7.8455 6.63087 7.97937 6.21885L9.04894 2.92705Z"
                                                                        fill="#E5A62A" />
                                                                </svg>
                                                            </div> 4.7(50)
                                                        </small>
                                                        <small class="xs card-text d-flex">
                                                            <div class="icon_fire ">
                                                                <svg width="18" height="17" viewBox="0 0 18 17"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                    <rect width="18" height="17"
                                                                        fill="url(#pattern0-946095)" />
                                                                    <defs>
                                                                        <pattern id="pattern0-946095"
                                                                            patternContentUnits="objectBoundingBox"
                                                                            width="1" height="1">
                                                                            <use xlink:href="#image0_1808_23036"
                                                                                transform="translate(0.0277778) scale(0.0104938 0.0111111)" />
                                                                        </pattern>
                                                                        <image id="image0_1808_23036" width="90"
                                                                            height="90"
                                                                            xlink:href="data:image/png;base64,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" />
                                                                    </defs>
                                                                </svg>
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
                                    <div class="col col-md-4">
                                        <a href="">
                                            <div class="thumb-wrapper mx-3">
                                                <div class="img-box">
                                                    <img src="./imgs/product/P20_4.jpg" class="img-fluid" alt="">
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
                                                        <small class="xs card-text d-flex">
                                                            <div class="icon_star">
                                                                <svg width="20" height="20" viewBox="0 0 20 20"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M9.04894 2.92705C9.3483 2.00574 10.6517 2.00574 10.9511 2.92705L12.0206 6.21885C12.1545 6.63087 12.5385 6.90983 12.9717 6.90983H16.4329C17.4016 6.90983 17.8044 8.14945 17.0207 8.71885L14.2205 10.7533C13.87 11.0079 13.7234 11.4593 13.8572 11.8713L14.9268 15.1631C15.2261 16.0844 14.1717 16.8506 13.388 16.2812L10.5878 14.2467C10.2373 13.9921 9.7627 13.9921 9.41221 14.2467L6.61204 16.2812C5.82833 16.8506 4.77385 16.0844 5.0732 15.1631L6.14277 11.8713C6.27665 11.4593 6.12999 11.0079 5.7795 10.7533L2.97933 8.71885C2.19562 8.14945 2.59839 6.90983 3.56712 6.90983H7.02832C7.46154 6.90983 7.8455 6.63087 7.97937 6.21885L9.04894 2.92705Z"
                                                                        fill="#E5A62A" />
                                                                </svg>
                                                            </div> 4.7(50)
                                                        </small>
                                                        <small class="xs card-text d-flex">
                                                            <div class="icon_fire ">
                                                                <svg width="18" height="17" viewBox="0 0 18 17"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                    <rect width="18" height="17"
                                                                        fill="url(#pattern0-946095)" />
                                                                    <defs>
                                                                        <pattern id="pattern0-946095"
                                                                            patternContentUnits="objectBoundingBox"
                                                                            width="1" height="1">
                                                                            <use xlink:href="#image0_1808_23036"
                                                                                transform="translate(0.0277778) scale(0.0104938 0.0111111)" />
                                                                        </pattern>
                                                                        <image id="image0_1808_23036" width="90"
                                                                            height="90"
                                                                            xlink:href="data:image/png;base64,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" />
                                                                    </defs>
                                                                </svg>
                                                            </div>
                                                            3K個已訂購
                                                        </small>
                                                        <h5 class="m-0 ml-auto">850</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                    <div class="col col-md-4">
                                        <a href="">
                                            <div class="thumb-wrapper mx-3">
                                                <div class="img-box">
                                                    <img src="./imgs/product/P20_4.jpg" class="img-fluid" alt="">
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
                                                        <small class="xs card-text d-flex">
                                                            <div class="icon_star">
                                                                <svg width="20" height="20" viewBox="0 0 20 20"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M9.04894 2.92705C9.3483 2.00574 10.6517 2.00574 10.9511 2.92705L12.0206 6.21885C12.1545 6.63087 12.5385 6.90983 12.9717 6.90983H16.4329C17.4016 6.90983 17.8044 8.14945 17.0207 8.71885L14.2205 10.7533C13.87 11.0079 13.7234 11.4593 13.8572 11.8713L14.9268 15.1631C15.2261 16.0844 14.1717 16.8506 13.388 16.2812L10.5878 14.2467C10.2373 13.9921 9.7627 13.9921 9.41221 14.2467L6.61204 16.2812C5.82833 16.8506 4.77385 16.0844 5.0732 15.1631L6.14277 11.8713C6.27665 11.4593 6.12999 11.0079 5.7795 10.7533L2.97933 8.71885C2.19562 8.14945 2.59839 6.90983 3.56712 6.90983H7.02832C7.46154 6.90983 7.8455 6.63087 7.97937 6.21885L9.04894 2.92705Z"
                                                                        fill="#E5A62A" />
                                                                </svg>
                                                            </div> 4.7(50)
                                                        </small>
                                                        <small class="xs card-text d-flex">
                                                            <div class="icon_fire ">
                                                                <svg width="18" height="17" viewBox="0 0 18 17"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                    <rect width="18" height="17"
                                                                        fill="url(#pattern0-946095)" />
                                                                    <defs>
                                                                        <pattern id="pattern0-946095"
                                                                            patternContentUnits="objectBoundingBox"
                                                                            width="1" height="1">
                                                                            <use xlink:href="#image0_1808_23036"
                                                                                transform="translate(0.0277778) scale(0.0104938 0.0111111)" />
                                                                        </pattern>
                                                                        <image id="image0_1808_23036" width="90"
                                                                            height="90"
                                                                            xlink:href="data:image/png;base64,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" />
                                                                    </defs>
                                                                </svg>
                                                            </div>
                                                            3K個已訂購
                                                        </small>
                                                        <h5 class="m-0 ml-auto">850</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                    <div class="col col-md-4">
                                        <a href="">
                                            <div class="thumb-wrapper mx-3">
                                                <div class="img-box">
                                                    <img src="./imgs/product/P20_4.jpg" class="img-fluid" alt="">
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
                                                        <small class="xs card-text d-flex">
                                                            <div class="icon_star">
                                                                <svg width="20" height="20" viewBox="0 0 20 20"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M9.04894 2.92705C9.3483 2.00574 10.6517 2.00574 10.9511 2.92705L12.0206 6.21885C12.1545 6.63087 12.5385 6.90983 12.9717 6.90983H16.4329C17.4016 6.90983 17.8044 8.14945 17.0207 8.71885L14.2205 10.7533C13.87 11.0079 13.7234 11.4593 13.8572 11.8713L14.9268 15.1631C15.2261 16.0844 14.1717 16.8506 13.388 16.2812L10.5878 14.2467C10.2373 13.9921 9.7627 13.9921 9.41221 14.2467L6.61204 16.2812C5.82833 16.8506 4.77385 16.0844 5.0732 15.1631L6.14277 11.8713C6.27665 11.4593 6.12999 11.0079 5.7795 10.7533L2.97933 8.71885C2.19562 8.14945 2.59839 6.90983 3.56712 6.90983H7.02832C7.46154 6.90983 7.8455 6.63087 7.97937 6.21885L9.04894 2.92705Z"
                                                                        fill="#E5A62A" />
                                                                </svg>
                                                            </div> 4.7(50)
                                                        </small>
                                                        <small class="xs card-text d-flex">
                                                            <div class="icon_fire ">
                                                                <svg width="18" height="17" viewBox="0 0 18 17"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                    <rect width="18" height="17"
                                                                        fill="url(#pattern0-946095)" />
                                                                    <defs>
                                                                        <pattern id="pattern0-946095"
                                                                            patternContentUnits="objectBoundingBox"
                                                                            width="1" height="1">
                                                                            <use xlink:href="#image0_1808_23036"
                                                                                transform="translate(0.0277778) scale(0.0104938 0.0111111)" />
                                                                        </pattern>
                                                                        <image id="image0_1808_23036" width="90"
                                                                            height="90"
                                                                            xlink:href="data:image/png;base64,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" />
                                                                    </defs>
                                                                </svg>
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
    <!-- 手機版下方列 -->
    <div class="choiceandbuy_mb d-md-none hidden_choicemb">
        <div class="signup">
            <h6>報名場次</h6>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1"
                    value="option1">
                <label class="form-check-label" for="exampleRadios1">
                    2022/10/30（六）16:30<small class="xs">（剩餘名額：5位）</small>
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2"
                    value="option2">
                <label class="form-check-label" for="exampleRadios2">
                    2022/11/03（一）16:30<small class="xs">（剩餘名額：2位）</small> 
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3"
                    value="option3" disabled>
                <label class="form-check-label" for="exampleRadios3">
                    2022/11/13（一）16:30<small class="xs">（已額滿）</small> 
                </label>
            </div>

            <h6 class="mt-3">報名人數</h6>
            <div class="number">
                <div class="choice d-flex align-items-center">
                    <div class="quantity">
                        <button class="minus disabled">－</button>
                    </div>
                    <div class="people">1</div>
                    <div class="quantity">
                        <button class="plus">＋</button>
                    </div>
                </div>
                <div class="total d-flex justify-content-center">
                    <h6>總金額</h6>
                    <h6 class="total_price"></h6>
                </div>
                <div class="buy_btn">
                    <button class="buy d-flex justify-content-center align-items-center">
                        <div class="icon_buy pr-1">
                            <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <mask id="path-1-outside-1_2793_16617-140835" maskUnits="userSpaceOnUse" x="-0.961914" y="0.75" width="20" height="17" fill="black">
                                <rect fill="white" x="-0.961914" y="0.75" width="20" height="17"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.55433 2.75C4.2521 2.75 3.15523 3.72304 2.99998 5.01597L2.05679 12.8706C1.87289 14.402 3.06866 15.75 4.61114 15.75H14.2942C15.8449 15.75 17.0431 14.3885 16.8461 12.8504L15.84 4.99584C15.6756 3.71184 14.5827 2.75 13.2882 2.75H5.55433ZM6.17071 5.2029C6.186 5.14444 6.19406 5.08365 6.19406 5.02123C6.19406 4.56458 5.76227 4.19438 5.22963 4.19438C4.69699 4.19438 4.26519 4.56458 4.26519 5.02123C4.26519 5.47789 4.69699 5.84808 5.22963 5.84808C5.25159 5.84808 5.27337 5.84745 5.29496 5.84622C5.61493 7.17663 5.95043 8.28851 6.45727 9.09305C6.75544 9.56636 7.12307 9.95156 7.5962 10.2147C8.06937 10.4779 8.61461 10.6005 9.23929 10.6005C9.85609 10.6005 10.4058 10.4926 10.8932 10.2522C11.3824 10.011 11.7804 9.65046 12.1127 9.18729C12.6841 8.39081 13.0777 7.26455 13.4295 5.84596C13.4525 5.84736 13.4757 5.84808 13.4991 5.84808C14.0318 5.84808 14.4636 5.47789 14.4636 5.02123C14.4636 4.56458 14.0318 4.19438 13.4991 4.19438C12.9665 4.19438 12.5347 4.56458 12.5347 5.02123C12.5347 5.08194 12.5423 5.14112 12.5568 5.1981C12.1805 6.80618 11.8028 7.90367 11.3001 8.60436C11.0477 8.95617 10.7702 9.19793 10.451 9.35532C10.1301 9.51358 9.73858 9.60049 9.23929 9.60049C8.74787 9.60049 8.37761 9.5051 8.08231 9.34084C7.78697 9.17656 7.53316 8.92479 7.30337 8.56002C6.8454 7.83306 6.52577 6.73377 6.17071 5.2029Z"/>
                                </mask>
                                <path d="M2.99998 5.01597L4.98571 5.25442L4.98571 5.25442L2.99998 5.01597ZM2.05679 12.8706L4.04252 13.109L4.04252 13.109L2.05679 12.8706ZM16.8461 12.8504L18.8299 12.5963L18.8299 12.5963L16.8461 12.8504ZM15.84 4.99584L13.8562 5.24994L13.8562 5.24994L15.84 4.99584ZM6.17071 5.2029L4.23577 4.69693L4.11097 5.1742L4.22243 5.65477L6.17071 5.2029ZM5.29496 5.84622L7.23951 5.37854L6.84875 3.75381L5.18043 3.8495L5.29496 5.84622ZM6.45727 9.09305L4.76507 10.1591L4.76507 10.1591L6.45727 9.09305ZM7.5962 10.2147L6.62399 11.9625L6.624 11.9625L7.5962 10.2147ZM10.8932 10.2522L11.7777 12.046L11.7777 12.046L10.8932 10.2522ZM12.1127 9.18729L13.7377 10.3531L13.7377 10.3531L12.1127 9.18729ZM13.4295 5.84596L13.5516 3.84969L11.8891 3.74796L11.4882 5.36464L13.4295 5.84596ZM12.5568 5.1981L14.5042 5.65382L14.6154 5.17851L14.4952 4.7054L12.5568 5.1981ZM11.3001 8.60436L9.67508 7.43851L9.67508 7.43851L11.3001 8.60436ZM10.451 9.35532L11.3355 11.1491L11.3355 11.1491L10.451 9.35532ZM8.08231 9.34084L7.1101 11.0886L7.1101 11.0886L8.08231 9.34084ZM7.30337 8.56002L8.99557 7.49398L8.99557 7.49398L7.30337 8.56002ZM4.98571 5.25442C5.02027 4.9666 5.26444 4.75 5.55433 4.75V0.75C3.23976 0.75 1.29019 2.47947 1.01424 4.77752L4.98571 5.25442ZM4.04252 13.109L4.98571 5.25442L1.01424 4.77752L0.0710536 12.6321L4.04252 13.109ZM4.61114 13.75C4.26777 13.75 4.00159 13.4499 4.04252 13.109L0.0710537 12.6321C-0.255811 15.3542 1.86955 17.75 4.61114 17.75V13.75ZM14.2942 13.75H4.61114V17.75H14.2942V13.75ZM14.8623 13.1045C14.9062 13.4469 14.6394 13.75 14.2942 13.75V17.75C17.0503 17.75 19.18 15.3301 18.8299 12.5963L14.8623 13.1045ZM13.8562 5.24994L14.8623 13.1045L18.8299 12.5963L17.8238 4.74175L13.8562 5.24994ZM13.2882 4.75C13.5763 4.75 13.8196 4.96412 13.8562 5.24994L17.8238 4.74175C17.5315 2.45956 15.589 0.75 13.2882 0.75V4.75ZM5.55433 4.75H13.2882V0.75H5.55433V4.75ZM4.19406 5.02123C4.19406 4.91029 4.20853 4.80111 4.23577 4.69693L8.10565 5.70888C8.16347 5.48777 8.19406 5.257 8.19406 5.02123H4.19406ZM5.22963 6.19438C5.03707 6.19438 4.8117 6.128 4.60983 5.95492C4.40376 5.77825 4.19406 5.45436 4.19406 5.02123H8.19406C8.19406 3.18227 6.56696 2.19438 5.22963 2.19438V6.19438ZM6.26519 5.02123C6.26519 5.45436 6.0555 5.77825 5.84943 5.95492C5.64755 6.128 5.42219 6.19438 5.22963 6.19438V2.19438C3.8923 2.19438 2.26519 3.18227 2.26519 5.02123H6.26519ZM5.22963 3.84808C5.42219 3.84808 5.64755 3.91447 5.84943 4.08754C6.0555 4.26422 6.26519 4.5881 6.26519 5.02123H2.26519C2.26519 6.86019 3.8923 7.84808 5.22963 7.84808V3.84808ZM5.18043 3.8495C5.19698 3.84855 5.21339 3.84808 5.22963 3.84808V7.84808C5.28978 7.84808 5.34976 7.84636 5.40949 7.84293L5.18043 3.8495ZM8.14947 8.027C7.83652 7.53023 7.56044 6.71291 7.23951 5.37854L3.35041 6.31389C3.66943 7.64036 4.06435 9.0468 4.76507 10.1591L8.14947 8.027ZM8.56841 8.46694C8.45103 8.40165 8.311 8.28341 8.14947 8.027L4.76507 10.1591C5.19989 10.8493 5.79511 11.5015 6.62399 11.9625L8.56841 8.46694ZM9.23929 8.60049C8.88091 8.60049 8.68569 8.53217 8.56841 8.46694L6.624 11.9625C7.45305 12.4237 8.34831 12.6005 9.23929 12.6005V8.60049ZM10.0088 8.45843C9.85437 8.53455 9.62121 8.60049 9.23929 8.60049V12.6005C10.091 12.6005 10.9573 12.4506 11.7777 12.046L10.0088 8.45843ZM10.4876 8.02144C10.315 8.26201 10.1579 8.38491 10.0088 8.45843L11.7777 12.046C12.6069 11.6371 13.2457 11.0389 13.7377 10.3531L10.4876 8.02144ZM11.4882 5.36464C11.1461 6.74447 10.8237 7.55301 10.4876 8.02144L13.7377 10.3531C14.5445 9.22862 15.0093 7.78463 15.3707 6.32728L11.4882 5.36464ZM13.4991 3.84808C13.5166 3.84808 13.5342 3.84862 13.5516 3.84969L13.3073 7.84222C13.3708 7.84611 13.4348 7.84808 13.4991 7.84808V3.84808ZM12.4636 5.02123C12.4636 4.5881 12.6733 4.26422 12.8793 4.08754C13.0812 3.91447 13.3066 3.84808 13.4991 3.84808V7.84808C14.8365 7.84808 16.4636 6.86019 16.4636 5.02123H12.4636ZM13.4991 6.19438C13.3066 6.19438 13.0812 6.128 12.8793 5.95493C12.6733 5.77825 12.4636 5.45436 12.4636 5.02123H16.4636C16.4636 3.18227 14.8365 2.19438 13.4991 2.19438V6.19438ZM14.5347 5.02123C14.5347 5.45436 14.325 5.77825 14.1189 5.95492C13.9171 6.128 13.6917 6.19438 13.4991 6.19438V2.19438C12.1618 2.19438 10.5347 3.18227 10.5347 5.02123H14.5347ZM14.4952 4.7054C14.521 4.80709 14.5347 4.91336 14.5347 5.02123H10.5347C10.5347 5.25052 10.5636 5.47515 10.6184 5.6908L14.4952 4.7054ZM12.9252 9.77021C13.6801 8.71791 14.1258 7.27071 14.5042 5.65382L10.6094 4.74238C10.2352 6.34165 9.92552 7.08943 9.67508 7.43851L12.9252 9.77021ZM11.3355 11.1491C11.9944 10.8242 12.5129 10.3449 12.9252 9.77021L9.67508 7.43851C9.62501 7.5083 9.59168 7.54047 9.57842 7.55215C9.57161 7.55815 9.56801 7.5606 9.56738 7.56102C9.56681 7.5614 9.56681 7.56139 9.56651 7.56153L11.3355 11.1491ZM9.23929 11.6005C9.97379 11.6005 10.6818 11.4715 11.3355 11.1491L9.56652 7.56153C9.5662 7.56169 9.56253 7.56351 9.55408 7.56637C9.5455 7.56928 9.53014 7.5739 9.50637 7.57882C9.45843 7.58875 9.37355 7.60049 9.23929 7.60049V11.6005ZM7.1101 11.0886C7.7609 11.4506 8.48102 11.6005 9.23929 11.6005V7.60049C9.12247 7.60049 9.06124 7.58912 9.04011 7.58421C9.02211 7.58002 9.03161 7.58029 9.05451 7.59304L7.1101 11.0886ZM5.61117 9.62607C5.97791 10.2082 6.45941 10.7267 7.1101 11.0886L9.05451 7.59304C9.07738 7.60576 9.08738 7.61631 9.08236 7.61129C9.07502 7.60395 9.0444 7.57149 8.99557 7.49398L5.61117 9.62607ZM4.22243 5.65477C4.56754 7.14276 4.94627 8.57064 5.61117 9.62607L8.99557 7.49398C8.74453 7.09549 8.484 6.32479 8.119 4.75103L4.22243 5.65477Z" fill="#432A0F" mask="url(#path-1-outside-1_2793_16617-140835)"/>
                                </svg>
                        </div>
                        前往結帳
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- 手機版footer -->
    <div class="td_footer_mb d-block d-md-none">
        <div class="row justify-content-center align-items-center">
            <div class="col ml-2">
                <button class="favorite d-flex justify-content-center align-items-center w-100">
                    <div class="icon_heart_nav">
                        <svg class="heart_line" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M11.2746 6.4197C9.38169 4.52677 6.31264 4.52677 4.4197 6.4197C2.52677 8.31264 2.52677 11.3817 4.4197 13.2746L9.61052 18.4648C10.9085 19.7628 13.0131 19.7628 14.3111 18.4648L18.8157 13.9601L18.815 13.9594L19.4997 13.2746C21.3927 11.3817 21.3927 8.31264 19.4997 6.4197C17.6068 4.52677 14.5377 4.52677 12.6448 6.4197L11.9597 7.10479L11.2746 6.4197Z"
                                stroke="#432A0F" stroke-width="2" />
                        </svg>
                    </div>
                    加入最愛
                </button>
            </div>
            <div class="col ml-0 mr-2">
                <button class="buy btn-l d-flex justify-content-center align-items-center w-100 my-3">
                    <div class="icon_buy pr-1">
                        <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <mask id="path-1-outside-1_2793_16617-140835" maskUnits="userSpaceOnUse" x="-0.961914" y="0.75" width="20" height="17" fill="black">
                            <rect fill="white" x="-0.961914" y="0.75" width="20" height="17"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M5.55433 2.75C4.2521 2.75 3.15523 3.72304 2.99998 5.01597L2.05679 12.8706C1.87289 14.402 3.06866 15.75 4.61114 15.75H14.2942C15.8449 15.75 17.0431 14.3885 16.8461 12.8504L15.84 4.99584C15.6756 3.71184 14.5827 2.75 13.2882 2.75H5.55433ZM6.17071 5.2029C6.186 5.14444 6.19406 5.08365 6.19406 5.02123C6.19406 4.56458 5.76227 4.19438 5.22963 4.19438C4.69699 4.19438 4.26519 4.56458 4.26519 5.02123C4.26519 5.47789 4.69699 5.84808 5.22963 5.84808C5.25159 5.84808 5.27337 5.84745 5.29496 5.84622C5.61493 7.17663 5.95043 8.28851 6.45727 9.09305C6.75544 9.56636 7.12307 9.95156 7.5962 10.2147C8.06937 10.4779 8.61461 10.6005 9.23929 10.6005C9.85609 10.6005 10.4058 10.4926 10.8932 10.2522C11.3824 10.011 11.7804 9.65046 12.1127 9.18729C12.6841 8.39081 13.0777 7.26455 13.4295 5.84596C13.4525 5.84736 13.4757 5.84808 13.4991 5.84808C14.0318 5.84808 14.4636 5.47789 14.4636 5.02123C14.4636 4.56458 14.0318 4.19438 13.4991 4.19438C12.9665 4.19438 12.5347 4.56458 12.5347 5.02123C12.5347 5.08194 12.5423 5.14112 12.5568 5.1981C12.1805 6.80618 11.8028 7.90367 11.3001 8.60436C11.0477 8.95617 10.7702 9.19793 10.451 9.35532C10.1301 9.51358 9.73858 9.60049 9.23929 9.60049C8.74787 9.60049 8.37761 9.5051 8.08231 9.34084C7.78697 9.17656 7.53316 8.92479 7.30337 8.56002C6.8454 7.83306 6.52577 6.73377 6.17071 5.2029Z"/>
                            </mask>
                            <path d="M2.99998 5.01597L4.98571 5.25442L4.98571 5.25442L2.99998 5.01597ZM2.05679 12.8706L4.04252 13.109L4.04252 13.109L2.05679 12.8706ZM16.8461 12.8504L18.8299 12.5963L18.8299 12.5963L16.8461 12.8504ZM15.84 4.99584L13.8562 5.24994L13.8562 5.24994L15.84 4.99584ZM6.17071 5.2029L4.23577 4.69693L4.11097 5.1742L4.22243 5.65477L6.17071 5.2029ZM5.29496 5.84622L7.23951 5.37854L6.84875 3.75381L5.18043 3.8495L5.29496 5.84622ZM6.45727 9.09305L4.76507 10.1591L4.76507 10.1591L6.45727 9.09305ZM7.5962 10.2147L6.62399 11.9625L6.624 11.9625L7.5962 10.2147ZM10.8932 10.2522L11.7777 12.046L11.7777 12.046L10.8932 10.2522ZM12.1127 9.18729L13.7377 10.3531L13.7377 10.3531L12.1127 9.18729ZM13.4295 5.84596L13.5516 3.84969L11.8891 3.74796L11.4882 5.36464L13.4295 5.84596ZM12.5568 5.1981L14.5042 5.65382L14.6154 5.17851L14.4952 4.7054L12.5568 5.1981ZM11.3001 8.60436L9.67508 7.43851L9.67508 7.43851L11.3001 8.60436ZM10.451 9.35532L11.3355 11.1491L11.3355 11.1491L10.451 9.35532ZM8.08231 9.34084L7.1101 11.0886L7.1101 11.0886L8.08231 9.34084ZM7.30337 8.56002L8.99557 7.49398L8.99557 7.49398L7.30337 8.56002ZM4.98571 5.25442C5.02027 4.9666 5.26444 4.75 5.55433 4.75V0.75C3.23976 0.75 1.29019 2.47947 1.01424 4.77752L4.98571 5.25442ZM4.04252 13.109L4.98571 5.25442L1.01424 4.77752L0.0710536 12.6321L4.04252 13.109ZM4.61114 13.75C4.26777 13.75 4.00159 13.4499 4.04252 13.109L0.0710537 12.6321C-0.255811 15.3542 1.86955 17.75 4.61114 17.75V13.75ZM14.2942 13.75H4.61114V17.75H14.2942V13.75ZM14.8623 13.1045C14.9062 13.4469 14.6394 13.75 14.2942 13.75V17.75C17.0503 17.75 19.18 15.3301 18.8299 12.5963L14.8623 13.1045ZM13.8562 5.24994L14.8623 13.1045L18.8299 12.5963L17.8238 4.74175L13.8562 5.24994ZM13.2882 4.75C13.5763 4.75 13.8196 4.96412 13.8562 5.24994L17.8238 4.74175C17.5315 2.45956 15.589 0.75 13.2882 0.75V4.75ZM5.55433 4.75H13.2882V0.75H5.55433V4.75ZM4.19406 5.02123C4.19406 4.91029 4.20853 4.80111 4.23577 4.69693L8.10565 5.70888C8.16347 5.48777 8.19406 5.257 8.19406 5.02123H4.19406ZM5.22963 6.19438C5.03707 6.19438 4.8117 6.128 4.60983 5.95492C4.40376 5.77825 4.19406 5.45436 4.19406 5.02123H8.19406C8.19406 3.18227 6.56696 2.19438 5.22963 2.19438V6.19438ZM6.26519 5.02123C6.26519 5.45436 6.0555 5.77825 5.84943 5.95492C5.64755 6.128 5.42219 6.19438 5.22963 6.19438V2.19438C3.8923 2.19438 2.26519 3.18227 2.26519 5.02123H6.26519ZM5.22963 3.84808C5.42219 3.84808 5.64755 3.91447 5.84943 4.08754C6.0555 4.26422 6.26519 4.5881 6.26519 5.02123H2.26519C2.26519 6.86019 3.8923 7.84808 5.22963 7.84808V3.84808ZM5.18043 3.8495C5.19698 3.84855 5.21339 3.84808 5.22963 3.84808V7.84808C5.28978 7.84808 5.34976 7.84636 5.40949 7.84293L5.18043 3.8495ZM8.14947 8.027C7.83652 7.53023 7.56044 6.71291 7.23951 5.37854L3.35041 6.31389C3.66943 7.64036 4.06435 9.0468 4.76507 10.1591L8.14947 8.027ZM8.56841 8.46694C8.45103 8.40165 8.311 8.28341 8.14947 8.027L4.76507 10.1591C5.19989 10.8493 5.79511 11.5015 6.62399 11.9625L8.56841 8.46694ZM9.23929 8.60049C8.88091 8.60049 8.68569 8.53217 8.56841 8.46694L6.624 11.9625C7.45305 12.4237 8.34831 12.6005 9.23929 12.6005V8.60049ZM10.0088 8.45843C9.85437 8.53455 9.62121 8.60049 9.23929 8.60049V12.6005C10.091 12.6005 10.9573 12.4506 11.7777 12.046L10.0088 8.45843ZM10.4876 8.02144C10.315 8.26201 10.1579 8.38491 10.0088 8.45843L11.7777 12.046C12.6069 11.6371 13.2457 11.0389 13.7377 10.3531L10.4876 8.02144ZM11.4882 5.36464C11.1461 6.74447 10.8237 7.55301 10.4876 8.02144L13.7377 10.3531C14.5445 9.22862 15.0093 7.78463 15.3707 6.32728L11.4882 5.36464ZM13.4991 3.84808C13.5166 3.84808 13.5342 3.84862 13.5516 3.84969L13.3073 7.84222C13.3708 7.84611 13.4348 7.84808 13.4991 7.84808V3.84808ZM12.4636 5.02123C12.4636 4.5881 12.6733 4.26422 12.8793 4.08754C13.0812 3.91447 13.3066 3.84808 13.4991 3.84808V7.84808C14.8365 7.84808 16.4636 6.86019 16.4636 5.02123H12.4636ZM13.4991 6.19438C13.3066 6.19438 13.0812 6.128 12.8793 5.95493C12.6733 5.77825 12.4636 5.45436 12.4636 5.02123H16.4636C16.4636 3.18227 14.8365 2.19438 13.4991 2.19438V6.19438ZM14.5347 5.02123C14.5347 5.45436 14.325 5.77825 14.1189 5.95492C13.9171 6.128 13.6917 6.19438 13.4991 6.19438V2.19438C12.1618 2.19438 10.5347 3.18227 10.5347 5.02123H14.5347ZM14.4952 4.7054C14.521 4.80709 14.5347 4.91336 14.5347 5.02123H10.5347C10.5347 5.25052 10.5636 5.47515 10.6184 5.6908L14.4952 4.7054ZM12.9252 9.77021C13.6801 8.71791 14.1258 7.27071 14.5042 5.65382L10.6094 4.74238C10.2352 6.34165 9.92552 7.08943 9.67508 7.43851L12.9252 9.77021ZM11.3355 11.1491C11.9944 10.8242 12.5129 10.3449 12.9252 9.77021L9.67508 7.43851C9.62501 7.5083 9.59168 7.54047 9.57842 7.55215C9.57161 7.55815 9.56801 7.5606 9.56738 7.56102C9.56681 7.5614 9.56681 7.56139 9.56651 7.56153L11.3355 11.1491ZM9.23929 11.6005C9.97379 11.6005 10.6818 11.4715 11.3355 11.1491L9.56652 7.56153C9.5662 7.56169 9.56253 7.56351 9.55408 7.56637C9.5455 7.56928 9.53014 7.5739 9.50637 7.57882C9.45843 7.58875 9.37355 7.60049 9.23929 7.60049V11.6005ZM7.1101 11.0886C7.7609 11.4506 8.48102 11.6005 9.23929 11.6005V7.60049C9.12247 7.60049 9.06124 7.58912 9.04011 7.58421C9.02211 7.58002 9.03161 7.58029 9.05451 7.59304L7.1101 11.0886ZM5.61117 9.62607C5.97791 10.2082 6.45941 10.7267 7.1101 11.0886L9.05451 7.59304C9.07738 7.60576 9.08738 7.61631 9.08236 7.61129C9.07502 7.60395 9.0444 7.57149 8.99557 7.49398L5.61117 9.62607ZM4.22243 5.65477C4.56754 7.14276 4.94627 8.57064 5.61117 9.62607L8.99557 7.49398C8.74453 7.09549 8.484 6.32479 8.119 4.75103L4.22243 5.65477Z" fill="#432A0F" mask="url(#path-1-outside-1_2793_16617-140835)"/>
                            </svg>
                    </div>
                    立即購買
                </button>
            </div>
        </div>
    </div>
</div>
<?php include __DIR__. '/parts/scripts.php'; ?>
<script src="./travel_detail.js"></script>
<?php include __DIR__. '/parts/html-foot.php'; ?>
<?php
session_start();
// 如果已經登入會員
if (!empty($_SESSION['user'])) {
    header('Location: ./');
    exit;
}
?>


<?php include __DIR__ . '/parts/html-head.php'; ?>
<link rel="stylesheet" href="./reese.css">
<?php include __DIR__ . '/parts/navbar.php'; ?>
<div class="background-re">
<!-- 登入註冊視窗 -->
<div id="loginCard_re" class="loginmodal-re paddingtop-0-re">
    <div class="loginanimate-re">
        <div class="row loginwarp-re  justify-content-center m-0" id="tab-demo">
            <div class="loginimgwarp-re d-none d-lg-block col-3 p-0">
                <img class="" src="./imgs/member/loginbg.jpg" alt="">
            </div>
            <div class="logincard-re col-12 col-md-3">
                <div class="d-flex justify-content-end py-1">
                    <svg class="closeicon-re" onclick="document.getElementById  ('loginCard_re').style.display='none'" class="close" title="Close Modal" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.66663 6.66666L25.3333 25.3333" stroke="#432A0F" stroke-width="2.66667" stroke-linecap="round" />
                        <path d="M25.3333 6.66666L6.66659 25.3333" stroke="#432A0F" stroke-width="2.66667" stroke-linecap="round" />
                    </svg>
                </div>
                <div class="logincardtitle-re mb-3">
                    <ul class="buttonbox-re tab-title d-flex p-0 m-0 position-relative">
                        <li class="signinBtn-re btntitle-re border-0 d-inline-block text-center pt-1 active-re col-6"><a href="#tab01">登入</a></li>
                        <li class="signoutBtn-re btntitle-re border-0 d-inline-block text-center pt-1 col-6"><a href="#tab02">註冊</a></li>
                    </ul>
                </div>
                <!-- 登入 ----------------------------------------------------------------------------------------->
                <div id="tab01" class="tab-inner formcard-re formBx px-4">
                    <div class="form signin-form">
                        <form name="login_form" class="m-0 mb-3" method="post" onsubmit="checkFormSignin(); return false;">
                            <div class="mb-2">
                                <label for="account" class="form-label" required>信箱<span style="color:#963C38">*</span></label>
                                <input id="signin_email" name="signin_email" class="logininput-re noline" type="email" placeholder=" 請輸入信箱">
                            </div>
                            <div class="mb-2">
                                <label for="account" class="form-label" required>密碼<span style="color:#963C38">*</span></label>
                                <input id="signin_password" name="signin_password" class="logininput-re noline" type="password" placeholder=" 請輸入密碼">
                            </div>
                            <div class="forget-re float-right">
                                <a href="#">
                                    <svg class="pb-1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="8" cy="8" r="7" stroke="#432A0F" stroke-width="2" />
                                        <path d="M6 5.50504C6.1745 5.0484 6.50859 4.51968 6.94386 4.2782C7.41947 4.0051 7.88786 3.95163 8.38114 4.03779C8.87442 4.12395 9.32084 4.37589 9.64237 4.74956C10.003 5.16864 10.2229 6 9.64237 6.61201C9.0618 7.22402 7.98726 7.61538 7.98726 9" stroke="#432A0F" stroke-width="2" stroke-linecap="round" />
                                        <circle cx="8" cy="12" r="1" fill="#432A0F" />
                                    </svg>
                                    忘記密碼</a>
                            </div>
                            <div id="signin_msgContainer"></div>
                            <div class="loginbutton-re"><input class="loginbtn-re" type="submit" value="登入"></div>
                        </form>
                    </div>
                </div>
                <!-- 註冊 ----------------------------------------------------------------------------------------->
                <div id="tab02" class="tab-inner formcard-re formBx px-4">
                    <div class="form signup-form">
                        <form name="register_form" method="post" onsubmit="checkFormSignup(); return false;">
                            <div class="mb-2">
                                <label for="account" class="form-label" required>信箱<span style="color:#963C38">*</span></label>
                                <input id="signup_email" name="signup_email" class="logininput-re noline" type="email" placeholder=" 請輸入信箱">
                            </div>
                            <div class="mb-2">
                                <label for="account" class="form-label" required>密碼<span style="color:#963C38">*</span></label>
                                <input id="signup_password" name="signup_password" class="logininput-re noline" type="password" placeholder=" 請輸入密碼">
                            </div>
                            <div class="">
                                <label for="account" class="form-label" required>確認密碼<span style="color:#963C38">*</span></label>
                                <input id="signup_again" name="signup_again" class="logininput-re noline" type="password" placeholder=" 請再次輸入密碼">
                            </div>
                            <div id="signup_msgContainer"></div>
                            <div class="signupbutton-re"><input class="loginbtn-re" type="submit" value="註冊"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<?php include __DIR__ . '/parts/scripts.php'; ?>
<script src="./main.js"></script>
<?php include __DIR__ . '/parts/html-foot.php'; ?>
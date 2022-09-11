<?php
session_start();
// 如果已經登入會員
if (!empty($_SESSION['user'])) {
    header('Location: ./');
    exit;
}
?>
<style>
*{
    /* outline: 1px solid #FFF; */
}
.noline {
    outline:none;
}
ul li {
    list-style: none;
}
.loginbg-re {
    background-color: rgba(205, 86, 47, .8);
    height: calc(100vh - 134px);
}
.loginwarp-re {
    padding-top: 100px;
}

.logincardtitle-re {
    background-color: #F5DFC2;
    border-bottom: 2px solid #432A0F;
}
/* right --------------------------------------*/
.logincard-re {
    width: 500px;
    padding: 85px 85px 0px 85px;
    background-color: #F5DFC2;
}
.logincard-re button {
    box-shadow: none;
}

/* 登入 註冊列表樣式 --------------------------------*/
.btntitle-re {
    /* box-shadow:none; */
    /* outline-style: none; */
    width: 165px;
    height: 41px;
    background-color: #F5DFC2;
    border: 2px solid #432A0F;
    border-radius: 8px 8px 0 0;
}
.btntitle-re:active-re {
    background-color: #E5A62A;
}
.btntitle-re li {
    list-style: none;
}
.btntitle-re a {
    /* list-style: none; */
    font-size: 20px;
    color: #432A0F;
}
.btntitle-re a:hover {
    text-decoration:none;
    list-style: none;
    color: #432A0F;
}
.btntitle-re:hover {
    background-color: #E5A62A;
    border: 2px solid #432A0F;
}
.active-re {
    background-color: #E5A62A;
}
/* --------------------------------------------- */
.btn-re {
    /* box-shadow:none; */
    outline-style: none;
    width: 330px;
    height: 41px;
    background-color: #E5A62A;
    border: 2px solid var(--color-brown-dark);
    border-radius: 8px;
}
.btn-re:hover {
    background-color: #FFFCF7;
    border-radius: 8px;
    box-shadow: 2px 2px 0px var(--color-brown-dark);
}
.btn-re:active-re {
    outline-style: none;
    background-color: #E5A62A;
}
/* --------------------------------------------- */
.input-re {
    border: none;
    box-shadow: none;
    /* outline-style: none; */
    border: 2px solid var(--color-brown-dark);
    border-radius: 8px;
    width: 330px;
    height: 41px;
    font-size: 16px;
    color: #432A0F;
}
.input-re[type=email]:hover, .input-re[type=password]:hover {
    box-shadow: 2px 2px 0px var(--color-brown-dark);
}
.input-re[type=email]:focus, .input-re[type=password]:focus {
    /* border: 4px solid var(--color-brown-dark); */
    background-color: var(--color-lightcreamy);
}
.input-re[type=email]:active-re {
    border: 4px solid var(--color-brown-dark);
}
/* --------------------------------------------- */
.forget-re a {
    list-style: none;
    color: #432A0F;
    font-size: 14px;
    padding: 2px 5px;
    border-radius: 8px;
}
.forget-re a:hover {
    text-decoration:none;
    color: #432A0F;
    background-color: #E5A62A;
}
.loginbutton-re {
    margin-top: 180px;
}
.signupbutton-re {
    margin-top: 100px;
}



</style>
<?php include __DIR__ . '/parts/html-head.php'; ?>
<?php include __DIR__ . '/parts/navbar.php'; ?>
<div class="loginbg-re">
<div class="container">
    <div class="row loginwarp-re justify-content-center" id="tab-demo">
        <div class="loginimgwarp-re d-none d-lg-block">
            <img src="./imgs/member/loginbg.jpg" alt="">
        </div>
        <div class="logincard-re">
            <div class="logincardtitle-re d-flax mb-3">
                <ul class="buttonbox-re tab-title d-flax p-0 m-0">
                    <li class="signinBtn-re btntitle-re border-0 d-inline-block text-center pt-1 active-re"><a href="#tab01">登入</a></li><li class="signoutBtn-re btntitle-re border-0 d-inline-block text-center pt-1"><a href="#tab02">註冊</a></li>
                </ul>
                <!-- <div class="buttonbox-re tab-title">
                    <button class="signinBtn btntitle-re border-0"><a href="#tab01">登入</a></button>
                    <button class="signoutBtn btntitle-re border-0"><a href="#tab02">註冊</a></button>
                </div> -->
            </div>
            <div id="tab01" class="tab-inner formcard-re formBx">
                <div class="form signin-form">
                    <form class="m-0 mb-3" method="post" onsubmit="checkForm();">
                        <div class="mb-2">
                            <label for="account" class="form-label">信箱<span style="color:#963C38">*</span></label>
                            <input class="input-re noline" type="email" placeholder=" 請輸入信箱">
                        </div>
                        <div class="mb-2">
                            <label for="account" class="form-label">密碼<span style="color:#963C38">*</span></label>
                            <input class="input-re noline" type="password" placeholder=" 請輸入密碼">
                        </div>
                        <div class="forget-re float-right">
                            <a href="#">
                                <svg class="pb-1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="8" cy="8" r="7" stroke="#432A0F" stroke-width="2"/>
                                <path d="M6 5.50504C6.1745 5.0484 6.50859 4.51968 6.94386 4.2782C7.41947 4.0051 7.88786 3.95163 8.38114 4.03779C8.87442 4.12395 9.32084 4.37589 9.64237 4.74956C10.003 5.16864 10.2229 6 9.64237 6.61201C9.0618 7.22402 7.98726 7.61538 7.98726 9" stroke="#432A0F" stroke-width="2" stroke-linecap="round"/>
                                <circle cx="8" cy="12" r="1" fill="#432A0F"/>
                                </svg>
                                忘記密碼</a></div>
                        <div class="loginbutton-re"><input class="btn-re" type="submit" value="登入"></div>
                    </form>
                </div>
            </div>
            <div id="tab02" class="tab-inner formcard-re formBx">
                <div class="form signup-form">
                    <form onsubmit=" checkFormSignu(); return false;">
                        <div class="mb-2">
                            <label for="account" class="form-label">信箱<span style="color:#963C38">*</span></label>
                            <input class="input-re noline" type="email" placeholder=" 請輸入信箱">
                        </div>
                        <div class="mb-2">
                            <label for="account" class="form-label">密碼<span style="color:#963C38">*</span></label>
                            <input class="input-re noline" type="password" placeholder=" 請輸入密碼">
                        </div>
                        <div class="">
                            <label for="account" class="form-label">確認密碼<span style="color:#963C38">*</span></label>
                            <input class="input-re noline" type="password" placeholder=" 請再次輸入密碼">
                        </div>
                        <div class="signupbutton-re"><input class="btn-re" type="submit" value="註冊"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> 

</div>





<?php include __DIR__ . '/parts/scripts.php'; ?>
<script>
    $(function(){
    var $li = $('ul.tab-title li');
        $($li. eq(0) .addClass('active-re').find('a').attr('href')).siblings('.tab-inner').hide();
    
        $li.click(function(){
            $($(this).find('a'). attr ('href')).show().siblings ('.tab-inner').hide();
            $(this).addClass('active-re'). siblings ('.active-re').removeClass('active-re');
        });
    });
    // ---------------------------------------------------------------------------------------
    function checkForm() {
        // TODO: 欄位檢查
        if (!$('#email').val()) {
            alert('請填寫正確的信箱帳號');
            return;
        }
        if (!$('#password').val()) {
            alert('請填寫正確密碼');
            return;
        }
        $.post(
            'login-api.php',
            $(document.form1).serialize(),
            function(data) {
                if(data.success){
                    location.href = './';
                } else {
                    alert(data.error);
                }
            },
            'json'
        );
    }
    // ---------------------------------------------------------------------------------------
    

</script>
<?php include __DIR__ . '/parts/html-foot.php'; ?>
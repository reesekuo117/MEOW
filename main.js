// nav
let lastScroll = 0;
$(window).scroll(function(){
let scrollNow =  $(window).scrollTop();
// console.log('lastScroll:', lastScroll);
// console.log('scrollNow', scrollNow);
if(scrollNow > lastScroll){
$('.header-fixed ').addClass('hidden')
$('.header-xs-fixed').addClass('hidden')
}
else{
$('.header-fixed ').removeClass('hidden')
$('.header-xs-fixed').removeClass('hidden')
}
lastScroll = scrollNow;
})


//漢堡
$('#menuToggle input').click(function(){
    $('#menu').css('transform','translate(0%, 0)')
    //  console.log($('#menu').css('transform'))
    if($('#menu').css('transform') == ('matrix(1, 0, 0, 1, 0, 0)')) {
    //console.log('hi');
    $('#menu').css('transform','translate(-500%, 0)')
    }
})
$('#menu a').click(function(){
    $('#menu').css('transform','translate(-1000%, 0)');
    // console.log('HEREEEEEEE', $('#menuToggle input').prop('checked'));
    $('#menuToggle input').prop('checked',false)
})
//TOP
$('.back-button').click(function(){
    $('html, body').animate({scrollTop:0},10)
})

// 登入視窗
let modal = document.getElementById('loginCard_re');
window.onclick = function(event) {
    
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
// 登入視窗分頁切換
$(function(){
var $li = $('ul.tab-title li');
    $($li. eq(0) .addClass('active-re').find('a').attr('href')).siblings('.tab-inner').hide();

    $li.click(function(){
        $($(this).find('a'). attr ('href')).show().siblings ('.tab-inner').hide();
        $(this).addClass('active-re'). siblings ('.active-re').removeClass('active-re');

    });
});

// 登入換圖
$('.signoutBtn-re').click(function () {
    // console.log('change');
    $('.signoutBtn-re').closest('.loginwarp-re').find('.loginimgwarp-re').html('<img class="loginimg-ba" src="./imgs/member/loginbg.jpg" alt="">')
})

$('.signinBtn-re').click(function () {
    // console.log('change');
    $('.signoutBtn-re').closest('.loginwarp-re').find('.loginimgwarp-re').html('<img class="loginimg-ba" src="./imgs/member/loginbg2.jpg" alt="">')
})

// 登入欄位錯誤狀態
const msgc_signin = $('#signin_msgContainer');
    function genAlert(msg1, type='danger'){
        const a = $(`
        <div class="alert alert-${type}" role="alert">
            ${msg1}
        </div>
        `);
        msgc_signin.append(a);
        // setTimeout(()=>{
        //     $(window).click(function(){
        //         a.remove();
        //     })
        // }, 2000);
    }
    $('#loginCard_re').click(function(){
        $('.alert').remove();
    })
// 登入頁面欄位檢查
function checkFormSignin() {
    console.log('send');
    if (!$('#signin_email').val()) {
        genAlert('請填寫正確的帳號密碼');
        return;
    }
    if (!$('#signin_password').val()) {
        genAlert('請填寫正確的帳號密碼');
        return;
    }
    $.post(
        're-login-api.php',
        $(document.login_form).serialize(),
        function(data) {
            console.log('data',data);
            if(data.success){
                setTimeout(() => {
                    location.href = './member.php';
                }, 750);
            } else {
                console.log(data);
                // genAlert(data.error);
            }
        },
        'json'
    );
}
// 註冊欄位錯誤狀態
const msgc_signup = $('#signup_msgContainer');
    function genAlert2(msg2, type='danger'){
        const a = $(`
        <div class="alert alert-${type}" role="alert">
            ${msg2}
        </div>
        `);
        msgc_signup.append(a);
    }
    $('#loginCard_re').click(function(){
        $('.alert').remove();
    })
//註冊頁面欄位檢查
function checkFormSignup(){
    //TODO: 檢查欄位資料格式是不是符合
    let isPass = true; //預設表單的資料是沒問題的
    if (!$('#signup_email').val()) {
        genAlert2('請填寫正確的帳號密碼');
        return;
    }else if (!$('#signup_password').val()) {
        genAlert2('請填寫正確的帳號密碼');
        return;
    }else if (!$('#signup_again').val()) {
        genAlert2('請填寫正確的帳號密碼');
        return;
    }else if ($('#signup_password').val() != $('#signup_again').val()){
        genAlert2('資料不符請重新輸入！');
        return;
    }
    if(isPass){
        $.post(
            're-register-api.php', 
            $(document.register_form).serialize(),
            function(data){
                console.log(data);
                if(data.success){
                    genAlert('註冊成功', 'success');
                    setTimeout(() => {
                        location.href = './index_.php';
                    }, 1500);
                    
                }else{
                    genAlert(data.error);
                }
        }, 'json');
    }
}

//按了加入購物車 會改變購物車數量
function showCartCount(obj){
    let count = 0;
    
    for(let k in obj){
        const item= obj[k];
        count += +item.qty; //+是讓字串轉型態

    }
    $("#cartCountYu").html(count);
}

$.get(
    "re-cart-p-api.php",
    function(data){
        showCartCount(data);
    },
    "json");



    // function showCartCount(obj){
    //     let count = 0;
        
    //     for(let t in obj){
    //         const item= obj[t];
    //         count += +item.qty; //+是讓字串轉型態
    
    //     }
    //     $("#cartCountYu").html(count);
    // }
    
    // $.get(
    //     "re-cart-t-api.php",
    //     function(data){
    //         showCartCount(data);
    //     },
    //     "json");
// 註冊光箱
$('.signupbutton-re').click(function () {
    $("#signUpModal").modal("show");
    setTimeout(()=>{
        $("#signUpModal").fadeOut(2500,function () {
            $("#signUpModal").modal("hide")
        });
    }, 1500);

}) 

// 登入光箱
$('.loginbutton-re').click(function () {
    console.log('OK');
    $("#loginModal").modal("show");
    setTimeout(()=>{
        $("#loginModal").fadeOut(2500,function () {
            $("#loginModal").modal("hide")
        });
    }, 750);

})

// 一鍵輸入(註冊信箱)
$('#onekey3').click(function () {
    $("#signup_email").val("pikachu1212@gmail.com");
})
// 一鍵輸入(登入信箱)
$('#onekey4').click(function () {
    $("#signin_email").val("pikachu1212@gmail.com");
})
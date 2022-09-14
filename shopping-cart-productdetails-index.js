// nav
let lastScroll = 0;
$(window).scroll(function () {
    let scrollNow = $(window).scrollTop();
    //console.log('lastScroll:', lastScroll);
    //console.log('scrollNow', scrollNow);
    if (scrollNow > lastScroll) {
    $("header").addClass("hidden");
    } else {
    $("header").removeClass("hidden");
    }
    lastScroll = scrollNow;
});
//漢堡
$("#menuToggle input").click(function () {
    $("#menu").css("transform", "translate(0%, 0)");
    //  console.log($('#menu').css('transform'))
    if ($("#menu").css("transform") == "matrix(1, 0, 0, 1, 0, 0)") {
    //console.log('hi');
    $("#menu").css("transform", "translate(-500%, 0)");
    }
});
$("#menu a").click(function () {
    $("#menu").css("transform", "translate(-1000%, 0)");
    // console.log('HEREEEEEEE', $('#menuToggle input').prop('checked'));
    $("#menuToggle input").prop("checked", false);
});
//TOP
$(".back-button").click(function () {
    $("html, body").animate({ scrollTop: 0 }, 10);
});




//-------------------------訂購人地址--------------------------
    let districtArray1 = [
    ['中正區', '大同區', '中山區', '萬華區', '信義區', '松山區', '大安區', '南港區', '北投區', '內湖區', '士林區', '文山區'],
    ['板橋區', '新莊區', '泰山區', '林口區', '淡水區', '金山區', '八里區', '萬里區', '石門區', '三芝區', '瑞芳區', '汐止區', '平溪區', '貢寮區', '雙溪區', '深坑區', '石碇區', '新店區', '坪林區', '烏來區', '中和區', '永和區', '土城區', '三峽區', '樹林區', '鶯歌區', '三重區', '蘆洲區', '五股區'],
    ['仁愛區', '中正區', '信義區', '中山區', '安樂區', '暖暖區', '七堵區'],
];
$('#city1-yu').change(function () {
    const cityNumber1 = $(this).val();
    const districtData1 = districtArray1[cityNumber1];
    // 用迴圈會更方便
    // $('#district option').eq(0).text(districtData[0])
    // $('#district option').eq(1).text(districtData[1])
    // $('#district option').eq(2).text(districtData[2])

    // 迴圈 一直要做重複的動作，裡面的索引值可能會改變
    // 1.自己寫規則，for 迴圈，次數自己決定 
    // 2.用陣列的方法來寫迴圈，次數就是陣列的資料數量

    console.log('districtData1:', districtData1.length);
    $('#district1-yu').empty();
    $(districtData1).each(function (index, item) {
    console.log('JQ item:', item);
    console.log('JQ index:', index);
    $('#district1-yu').append(`<option value="${index}">${item}</option>`)
    })
});


//----------------------收件人地址-------------------
let districtArray2 = [
    ['中正區', '大同區', '中山區', '萬華區', '信義區', '松山區', '大安區', '南港區', '北投區', '內湖區', '士林區', '文山區'],
    ['板橋區', '新莊區', '泰山區', '林口區', '淡水區', '金山區', '八里區', '萬里區', '石門區', '三芝區', '瑞芳區', '汐止區', '平溪區', '貢寮區', '雙溪區', '深坑區', '石碇區', '新店區', '坪林區', '烏來區', '中和區', '永和區', '土城區', '三峽區', '樹林區', '鶯歌區', '三重區', '蘆洲區', '五股區'],
    ['仁愛區', '中正區', '信義區', '中山區', '安樂區', '暖暖區', '七堵區'],
];
$('#usercity-yu').change(function () {
    const cityNumber2 = $(this).val();
    const districtData2 = districtArray2[cityNumber2];
    // 用迴圈會更方便
    // $('#district option').eq(0).text(districtData[0])
    // $('#district option').eq(1).text(districtData[1])
    // $('#district option').eq(2).text(districtData[2])

    // 迴圈 一直要做重複的動作，裡面的索引值可能會改變
    // 1.自己寫規則，for 迴圈，次數自己決定 
    // 2.用陣列的方法來寫迴圈，次數就是陣列的資料數量

    console.log('districtData2:', districtData2.length);
    $('#userdistrict-yu').empty();
    $(districtData2).each(function (index, item) {
    console.log('JQ item:', item);
    console.log('JQ index:', index);
    $('#userdistrict-yu').append(`<option value="${index}">${item}</option>`)
    })
});


//-----------------表單驗證---------------------------
function CheckForm(){  
    if   (document.form1.test.value.length   ==   '')  
    {  
    alert("不得為空!");
    document.from1-yu.test.focus();
    return  false;
    }
    return  true;
}

//---------------------input:radio 能取消點選--------------
$(document).ready(function () {
    $("#btnAutoInput-yu").click(function () {
    $(
        "input:text[name=listinfo-title-radio-yu]:checked"
    )[0].checked = false;
    });
});

//------------------------同訂購人 取值------------------------
//姓名
$("#btnAutoInput-yu").click(function () {
$("#username-yu").val ($("#name-yu").val()) ;
});
//電話
$("#btnAutoInput-yu").click(function () {
$("#usermobile-yu").val ($("#mobile-yu").val()) ;
});
//email
$("#btnAutoInput-yu").click(function () {
$("#useremail-yu").val ($("#email-yu").val()) ;
});
//地址(有問題)
$("#btnAutoInput-yu").click(function () {
$("#usercity-yu").val ($("#city1-yu ").val()) ;
});
$("#btnAutoInput-yu").click(function () {
$("#userdistrict-yu").val ($("#district1-yu").val()) ;
});
$("#btnAutoInput-yu").click(function () {
$("#useraddress-yu").val ($("#address-yu").val()) ;
});



//----------信用卡動態--------//

$('.creditcard-yu').mouseenter(function(){
    $('.creditcard-yu').css("animation" , "mouseenter-yu 2s cubic-bezier(.37,-0.37,.64,1.34) forwards")
});
$(".creditcard-yu").mouseleave(function(){
    $('.creditcard-yu').css("animation" , " mouseleave-yu 2s cubic-bezier(.37,-0.37,.64,1.34) forwards")
});


//-------------信用卡number--------------
//keyup paste 印在另一邊
$("#usercreditcardnumber1-yu").bind("keyup paste" , function(){
    $("#creditcardnumber1-yu").val($(this).val());
});
$("#usercreditcardnumber2-yu").bind("keyup paste" , function(){
    $("#creditcardnumber2-yu").val($(this).val());
});
$("#usercreditcardnumber3-yu").bind("keyup paste" , function(){
    $("#creditcardnumber3-yu").val($(this).val());
});
$("#usercreditcardnumber4-yu").bind("keyup paste" , function(){
    $("#creditcardnumber4-yu").val($(this).val());
});

//信用卡年月
$("#usercreditcardmonth-yu").bind("keyup paste" , function(){
    $("#creditcardmonth-yu").val($(this).val());
});
$("#usercreditcardyear-yu").bind("keyup paste" , function(){
    $("#creditcardyear-yu").val($(this).val());
});

//cvc
$("#usercreditcardid-yu").bind("keyup paste" , function(){
    $("#creditcardid-yu").val($(this).val());
});

//信用卡下拉
$('input[type="radio"]').click(function(){
    if($("#creditcard-radio-yu").prop("checked")){
    console.log("hi");
    $(".visacard-yu").css("height" , "275px")
}
else{
    $(".visacard-yu").css("height" , "0px")
}
});



//button 偵測欄位是否有填寫
//     function checkForm() {
//     // TODO: 欄位檢查
//     if (!$('#email').val()) {
//         alert('請填寫帳號');
//         return;
//     }
//     if (!$('#password').val()) {
//         alert('請填寫密碼');
//         return;
//     }
// }

//------email驗證 (失敗)
function checkForm(){
var eValue = document.getElementById("email").value;
if(!/^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(.[a-zA-Z0-9_-])+/.test(eValue)){
alert("郵箱地址不對!");
return false;
}
}




// var result = "";




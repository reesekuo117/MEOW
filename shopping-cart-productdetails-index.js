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
  [
    "中正區",
    "大同區",
    "中山區",
    "萬華區",
    "信義區",
    "松山區",
    "大安區",
    "南港區",
    "北投區",
    "內湖區",
    "士林區",
    "文山區",
  ],
  [
    "板橋區",
    "新莊區",
    "泰山區",
    "林口區",
    "淡水區",
    "金山區",
    "八里區",
    "萬里區",
    "石門區",
    "三芝區",
    "瑞芳區",
    "汐止區",
    "平溪區",
    "貢寮區",
    "雙溪區",
    "深坑區",
    "石碇區",
    "新店區",
    "坪林區",
    "烏來區",
    "中和區",
    "永和區",
    "土城區",
    "三峽區",
    "樹林區",
    "鶯歌區",
    "三重區",
    "蘆洲區",
    "五股區",
  ],
  ["仁愛區", "中正區", "信義區", "中山區", "安樂區", "暖暖區", "七堵區"],
];
$("#city1-yu").change(function () {
  const cityNumber1 = $(this).val();
  const districtData1 = districtArray1[cityNumber1];
  // 用迴圈會更方便
  // $('#district option').eq(0).text(districtData[0])
  // $('#district option').eq(1).text(districtData[1])
  // $('#district option').eq(2).text(districtData[2])

  // 迴圈 一直要做重複的動作，裡面的索引值可能會改變
  // 1.自己寫規則，for 迴圈，次數自己決定
  // 2.用陣列的方法來寫迴圈，次數就是陣列的資料數量

  console.log("districtData1:", districtData1.length);
  $("#district1-yu").empty();
  $(districtData1).each(function (index, item) {
    console.log("JQ item:", item);
    console.log("JQ index:", index);
    $("#district1-yu").append(`<option value="${index}">${item}</option>`);
  });
});

//----------------------收件人地址-------------------
let districtArray2 = [
  [
    "中正區",
    "大同區",
    "中山區",
    "萬華區",
    "信義區",
    "松山區",
    "大安區",
    "南港區",
    "北投區",
    "內湖區",
    "士林區",
    "文山區",
  ],
  [
    "板橋區",
    "新莊區",
    "泰山區",
    "林口區",
    "淡水區",
    "金山區",
    "八里區",
    "萬里區",
    "石門區",
    "三芝區",
    "瑞芳區",
    "汐止區",
    "平溪區",
    "貢寮區",
    "雙溪區",
    "深坑區",
    "石碇區",
    "新店區",
    "坪林區",
    "烏來區",
    "中和區",
    "永和區",
    "土城區",
    "三峽區",
    "樹林區",
    "鶯歌區",
    "三重區",
    "蘆洲區",
    "五股區",
  ],
  ["仁愛區", "中正區", "信義區", "中山區", "安樂區", "暖暖區", "七堵區"],
];
$("#usercity-yu").change(function () {
  const cityNumber2 = $(this).val();
  const districtData2 = districtArray2[cityNumber2];
  // 用迴圈會更方便
  // $('#district option').eq(0).text(districtData[0])
  // $('#district option').eq(1).text(districtData[1])
  // $('#district option').eq(2).text(districtData[2])

  // 迴圈 一直要做重複的動作，裡面的索引值可能會改變
  // 1.自己寫規則，for 迴圈，次數自己決定
  // 2.用陣列的方法來寫迴圈，次數就是陣列的資料數量

  console.log("districtData2:", districtData2.length);
  $("#userdistrict-yu").empty();
  $(districtData2).each(function (index, item) {
    console.log("JQ item:", item);
    console.log("JQ index:", index);
    $("#userdistrict-yu").append(`<option value="${index}">${item}</option>`);
  });
});

// -----------------表單驗證---------------------------

$("input").focus(function () {
  console.log("hihi");
});

// 姓名
const ordername_yu = $(".ordername-yu");

//input在這邊是一個事件
ordername_yu.on("input", function () {
  console.log(this.value);
  const field = $(this).closest(".field"); //定義field
  const wi = field.find("i.wrong");
  const ri = field.find("i.right");
  if (/\d/g.test(this.value) || this.value.length >= 20 || !this.value) {
    // wrong
    wi.css("visibility", "visible");
    ri.css("visibility", "hidden");
  } else {
    // right
    ri.css("visibility", "visible");
    wi.css("visibility", "hidden");
  }
});

ordername_yu.on("blur", function () {
    console.log(this.value);
  const field = $(this).closest(".field"); //定義field
  const wi = field.find("i.wrong");
  const ri = field.find("i.right");
  if (!this.value) {
    wi.css("visibility", "visible");
    ri.css("visibility", "hidden");
  } else {
    ri.css("visibility", "visible");
    wi.css("visibility", "hidden");
  }
});

//電話
const orderphone_yu = $(".orderphone-yu");

orderphone_yu.on("input", function () {
  console.log(this.value);
  const field = $(this).closest(".field");
  const wi = field.find("i.wrong");
  const ri = field.find("i.right");
  console.log({ field, wi, ri });
  console.log(/^09\d{8}$/.test(this.value));
  //!如果不符合/^09\d{8}$/.test(this.value)//
  if (!/^09\d{8}$/.test(this.value)) {
    // wrong
    wi.css("visibility", "visible");
    ri.css("visibility", "hidden");
  } else {
    // right
    ri.css("visibility", "visible");
    wi.css("visibility", "hidden");
  }
});

orderphone_yu.on("blur", function () {
    console.log(this.value);
  const field = $(this).closest(".field"); //定義field
  const wi = field.find("i.wrong");
  const ri = field.find("i.right");
  if (!this.value) {
    wi.css("visibility", "visible");
    ri.css("visibility", "hidden");
  } else {
    ri.css("visibility", "visible");
    wi.css("visibility", "hidden");
  }
});

//地址
const orderaddress3_yu = $(".orderaddress3-yu");

orderaddress3_yu.on("input", function () {
  console.log(this.value);
  const field = $(this).closest(".field");
  const wi = field.find("i.wrong");
  const ri = field.find("i.right");
  console.log({ field, wi, ri });
  console.log(!this.value);
  if (!/[^\a-\z\A-\Z0-9]/g.test(this.value) || !this.value) {
    // wrong
    wi.css("visibility", "visible");
    ri.css("visibility", "hidden");
  } else {
    // right
    ri.css("visibility", "visible");
    wi.css("visibility", "hidden");
  }
});

orderaddress3_yu.on("blur", function () {
    console.log(this.value);
  const field = $(this).closest(".field"); //定義field
  const wi = field.find("i.wrong");
  const ri = field.find("i.right");
  if (!this.value) {
    wi.css("visibility", "visible");
    ri.css("visibility", "hidden");
  } else {
    ri.css("visibility", "visible");
    wi.css("visibility", "hidden");
  }
});

//email

//emailRule = /^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z]+$/;
// ^\w+：@ 之前必須以一個以上的文字&數字開頭，例如 abc
// ((-\w+)：@ 之前可以出現 1 個以上的文字、數字或「-」的組合，例如 -abc-
// (\.\w+))：@ 之前可以出現 1 個以上的文字、數字或「.」的組合，例如 .abc.
// ((-\w+)|(\.\w+))*：以上兩個規則以 or 的關係出現，並且出現 0 次以上 (所以不能 –. 同時出現)
// @：中間一定要出現一個 @
// [A-Za-z0-9]+：@ 之後出現 1 個以上的大小寫英文及數字的組合
// (\.|-)：@ 之後只能出現「.」或是「-」，但這兩個字元不能連續時出現
// ((\.|-)[A-Za-z0-9]+)*：@ 之後出現 0 個以上的「.」或是「-」配上大小寫英文及數字的組合
// \.[A-Za-z]+$/：@ 之後出現 1 個以上的「.」配上大小寫英文及數字的組合，結尾需為大小寫英文

const email_yu = $(".email-yu");

email_yu.on("input", function () {
  console.log(this.value);
  const field = $(this).closest(".field");
  const wi = field.find("i.wrong");
  const ri = field.find("i.right");
  console.log({ field, wi, ri });
  console.log(!this.value);
  if (!/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z]+$/g.test(this.value) || !this.value) {
    // wrong
    wi.css("visibility", "visible");
    ri.css("visibility", "hidden");
  } else {
    // right
    ri.css("visibility", "visible");
    wi.css("visibility", "hidden");
  }
});

email_yu.on("blur", function () {
    console.log(this.value);
  const field = $(this).closest(".field"); //定義field
  const wi = field.find("i.wrong");
  const ri = field.find("i.right");
  if (!this.value) {
    wi.css("visibility", "visible");
    ri.css("visibility", "hidden");
  } else {
    ri.css("visibility", "visible");
    wi.css("visibility", "hidden");
  }
});

//測試
// $(document).ready(function(){
//     $("input").focus(function(){
//     $(this).css("background-color","#FFFFCC");
//     });
//     $("input").blur(function(){
//     $(this).css("background-color","#D6D6FF");
//     });
//   });
// input.blur = function() {
//     if (!input.value.includes('@')) { // not email
//     input.classList.add('invalid');
//     error.innerHTML = 'Please enter a correct email.'
//     }
//     };

//.contains
// input.blur = function() {
//     if (input.value == ""('invalid')) {
//     this.classList.remove('invalid');
//     error.innerHTML = "";
//     }
// };
// function addColor(){
//     this.style.background="red";
// }
// var form = document.forms['form1-yu'];
//   if (form.addEventListener) { // 非 IE 浏览器
//     form.addEventListener('focus', addColor, true);
//   }else{  // IE
//     form.onfocusin = addColor
// }

//-----------------input:radio 能取消點選--------------
$(document).ready(function () {
  $("#btnAutoInput-yu").click(function () {
    $("input:text[name=listinfo-title-radio-yu]:checked")[0].checked = false;
  });
});

//--------------------同訂購人 取值-----------------
//姓名
$("#btnAutoInput-yu").click(function () {
  $("#username-yu").val($("#name-yu").val());
});
//電話
$("#btnAutoInput-yu").click(function () {
  $("#usermobile-yu").val($("#mobile-yu").val());
});
//mobile_yu
$("#btnAutoInput-yu").click(function () {
  $("#usermobile_yu-yu").val($("#mobile_yu-yu").val());
});
//地址(有問題)
$("#btnAutoInput-yu").click(function () {
  $("#usercity-yu").val($("#city1-yu ").val());
});
$("#btnAutoInput-yu").click(function () {
  $("#userdistrict-yu").val($("#district1-yu").val());
});
$("#btnAutoInput-yu").click(function () {
  $("#useraddress-yu").val($("#address-yu").val());
});
$("#btnAutoInput-yu").click(function(){
    $("#useremail-yu").val($("#email-yu").val());
});

//----------信用卡動態--------

$(".creditcard-yu").mouseenter(function () {
  $(".creditcard-yu").css(
    "animation",
    "mouseenter-yu 2s cubic-bezier(.37,-0.37,.64,1.34) forwards"
  );
});
$(".creditcard-yu").mouseleave(function () {
  $(".creditcard-yu").css(
    "animation",
    " mouseleave-yu 2s cubic-bezier(.37,-0.37,.64,1.34) forwards"
  );
});

//-------------信用卡number--------------
//keyup paste 印在另一邊
$("#usercreditcardnumber1-yu").bind("keyup paste", function () {
  $("#creditcardnumber1-yu").val($(this).val());
});
$("#usercreditcardnumber2-yu").bind("keyup paste", function () {
  $("#creditcardnumber2-yu").val($(this).val());
});
$("#usercreditcardnumber3-yu").bind("keyup paste", function () {
  $("#creditcardnumber3-yu").val($(this).val());
});
$("#usercreditcardnumber4-yu").bind("keyup paste", function () {
  $("#creditcardnumber4-yu").val($(this).val());
});

//信用卡年月
$("#usercreditcardmonth-yu").bind("keyup paste", function () {
  $("#creditcardmonth-yu").val($(this).val());
});
$("#usercreditcardyear-yu").bind("keyup paste", function () {
  $("#creditcardyear-yu").val($(this).val());
});

//cvc
$("#usercreditcardid-yu").bind("keyup paste", function () {
  $("#creditcardid-yu").val($(this).val());
});

//信用卡下拉
$('input[type="radio"]').click(function () {
  if ($("#creditcard-radio-yu").prop("checked")) {
    console.log("hi");
    $(".visacard-yu").css("height", "275px");
  } else {
    $(".visacard-yu").css("height", "0px");
  }
});
  //信用卡輸入欄位直接跳下一個
//   var tablist = ["autotab-yu"];

//   //特殊功能鍵 防止修改時按了 ctrl shift alt 方向鍵、del 之類的被跳到下一格
//   var functionkey = [8, 9, 16, 17, 18, 20, 33, 34, 35, 36, 37, 38, 39, 40, 45, 46, 93, 144];
//   tablist.forEach(function(element){
//     $("." + element).on("keydown" , function(event){
//         //next
//         if($(this).attr("maxLength") == $(this).val().length && (functionkey.indexOf(event.keyCode)  == -1))
//         $(this).nextAll("." + element).first().focus();
//         //prev
//         if($(this).var().length == 0 && event.keyCode == 8){
//             $(this).prevAll("." + element).first().focus();
//         }
//     });
//   });

// $(function(){
//     $("#usercreditcardnumber1-yu").focus();
//     function device_verify(){
//         console.log($("#usercreditcardnumber1-yu").val()+$("#usercreditcardnumber2-yu").val()+$("#usercreditcardnumber3-yu").val()+$("#usercreditcardnumber4-yu").val());
//     }
//     //自动跳到下一个输入框
//     $("input[name^='test']").each(function(){
//         $(this).keyup(function(e){
//             if($(this).val().length < 1){
//                 $(this).prev().focus();
//             }else{
//                 if($(this).val().length >= 1){
//                     $(this).next().focus();
//                 }
//             }
//         });
//     });
//     $("input[type='text'][id^='usercreditcardnumber']").bind('keyup',
//     function() {
//         var len = $("#usercreditcardnumber1-yu").val().length + $("#usercreditcardnumber2-yu").val().length + $("#usercreditcardnumber3-yu").val().length + $("#usercreditcardnumber4-yu").val().length;
//         if (len == 4) device_verify();
//     });
// });


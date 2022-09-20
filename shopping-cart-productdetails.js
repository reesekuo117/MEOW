
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

// -----------------訂購人表單驗證---------------------------

// ----------姓名
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
    $(ordername_yu).css({
      outline: "2px solid #963C38",
      border: "0px solid transparent",
    });
  } else {
    // right
    ri.css("visibility", "visible");
    wi.css("visibility", "hidden");

    $(ordername_yu).css({
      outline: "2px solid #e5a62a",
      border: "0px solid transparent",
    });
  }
});

ordername_yu.on("blur", function () {
  console.log(this.value);
  const field = $(this).closest(".field"); //定義field
  const wi = field.find("i.wrong");
  const ri = field.find("i.right");
  if (/\d/g.test(this.value) || this.value.length >= 20 || !this.value) {
    wi.css("visibility", "visible");
    ri.css("visibility", "hidden");
    $(ordername_yu).css({
      outline: "2px solid #963C38",
      border: "0px solid transparent",
    });
  } else {
    ri.css("visibility", "visible");
    wi.css("visibility", "hidden");
    $(ordername_yu).css({
      outline: "2px solid #e5a62a",
      border: "0px solid transparent",
    });
  }
});

ordername_yu.on("focus", function () {
  // console.log("this.value", this.value);
  // console.log("this.value", !this.value);
  if (!this.value) {
    $(ordername_yu).css({
      outline: "2px solid #e5a62a",
      border: "0px solid transparent",
    });
  }
});

//----------電話--------
const orderphone_yu = $(".orderphone-yu");

orderphone_yu.on("input", function () {
  console.log(this.value);
  const field = $(this).closest(".field");
  const wi = field.find("i.wrong");
  const ri = field.find("i.right");
  console.log({ field, wi, ri });
  console.log(!/^09\d{8}$/.test(this.value));
  //!如果不符合/^09\d{8}$/.test(this.value)//
  if (!/^09\d{8}$/.test(this.value)) {
    // wrong
    wi.css("visibility", "visible");
    ri.css("visibility", "hidden");

    $(orderphone_yu).css({
      outline: "2px solid #963C38",
      border: "0px solid transparent",
    });
  } else {
    // right
    ri.css("visibility", "visible");
    wi.css("visibility", "hidden");

    $(orderphone_yu).css({
      outline: "2px solid #e5a62a",
      border: "0px solid transparent",
    });
  }
});

orderphone_yu.on("blur", function () {
  console.log(this.value);
  const field = $(this).closest(".field"); //定義field
  const wi = field.find("i.wrong");
  const ri = field.find("i.right");
  if (!/^09\d{8}$/.test(this.value)) {
    wi.css("visibility", "visible");
    ri.css("visibility", "hidden");
    $(orderphone_yu).css({
      outline: "2px solid #963C38",
      border: "0px solid transparent",
    });
  } else {
    ri.css("visibility", "visible");
    wi.css("visibility", "hidden");
    $(orderphone_yu).css({
      outline: "2px solid #e5a62a",
      border: "0px solid transparent",
    });
  }
});

orderphone_yu.on("focus", function () {
  // console.log("this.value", this.value);
  // console.log("this.value", !this.value);
  if (!this.value) {
    $(orderphone_yu).css({
      outline: "2px solid #e5a62a",
      border: "0px solid transparent",
    });
  }
});

//-------------地址-------------
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
    $(orderaddress3_yu).css({
      outline: "2px solid #963C38",
      border: "0px solid transparent",
    });
  } else {
    // right
    ri.css("visibility", "visible");
    wi.css("visibility", "hidden");
    $(orderaddress3_yu).css({
      outline: "2px solid #e5a62a",
      border: "0px solid transparent",
    });
  }
});

orderaddress3_yu.on("blur", function () {
  console.log(this.value);
  const field = $(this).closest(".field"); //定義field
  const wi = field.find("i.wrong");
  const ri = field.find("i.right");
  if (!/[^\a-\z\A-\Z0-9]/g.test(this.value) || !this.value) {
    wi.css("visibility", "visible");
    ri.css("visibility", "hidden");

    $(orderaddress3_yu).css({
      outline: "2px solid #963C38",
      border: "0px solid transparent",
    });
  } else {
    ri.css("visibility", "visible");
    wi.css("visibility", "hidden");

    $(orderaddress3_yu).css({
      outline: "2px solid #e5a62a",
      border: "0px solid transparent",
    });
  }
});

orderaddress3_yu.on("focus", function () {
  // console.log("this.value", this.value);
  // console.log("this.value", !this.value);
  if (!this.value) {
    $(orderaddress3_yu).css({
      outline: "2px solid #e5a62a",
      border: "0px solid transparent",
    });
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
  if (
    !/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z]+$/g.test(
      this.value
    ) ||
    !this.value
  ) {
    // wrong
    wi.css("visibility", "visible");
    ri.css("visibility", "hidden");
    $(orderaddress3_yu).css({
      outline: "2px solid #963C38",
      border: "0px solid transparent",
    });
  } else {
    // right
    ri.css("visibility", "visible");
    wi.css("visibility", "hidden");

    $(email_yu).css({
      outline: "2px solid #e5a62a",
      border: "0px solid transparent",
    });
  }
});

email_yu.on("blur", function () {
  console.log(this.value);
  const field = $(this).closest(".field"); //定義field
  const wi = field.find("i.wrong");
  const ri = field.find("i.right");
  if (
    !/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z]+$/g.test(
      this.value
    ) ||
    !this.value
  ) {
    wi.css("visibility", "visible");
    ri.css("visibility", "hidden");

    $(email_yu).css({
      outline: "2px solid #963C38",
      border: "0px solid transparent",
    });
  } else {
    ri.css("visibility", "visible");
    wi.css("visibility", "hidden");

    $(email_yu).css({
      outline: "2px solid #e5a62a",
      border: "0px solid transparent",
    });
  }
});

email_yu.on("focus", function () {
  // console.log("this.value", this.value);
  // console.log("this.value", !this.value);
  if (!this.value) {
    $(email_yu).css({
      outline: "2px solid #e5a62a",
      border: "0px solid transparent",
    });
  }
});

//-----------收件人input----------------
//姓名
const receivername_yu = $(".receivername-yu");
//input在這邊是一個事件
receivername_yu.on("input", function () {
  console.log(this.value);
  const field = $(this).closest(".field2"); //定義field
  const wi = field.find("i.wrong");
  const ri = field.find("i.right");
  if (/\d/g.test(this.value) || this.value.length >= 20 || !this.value) {
    // wrong
    wi.css("visibility", "visible");
    ri.css("visibility", "hidden");
    $(receivername_yu).css({
      outline: "2px solid #963C38",
      border: "0px solid transparent",
    });
  } else {
    // right
    ri.css("visibility", "visible");
    wi.css("visibility", "hidden");

    $(receivername_yu).css({
      outline: "2px solid #e5a62a",
      border: "0px solid transparent",
    });
  }
});

receivername_yu.on("blur", function () {
  console.log(this.value);
  const field = $(this).closest(".field2"); //定義field
  const wi = field.find("i.wrong");
  const ri = field.find("i.right");
  if (/\d/g.test(this.value) || this.value.length >= 20 || !this.value) {
    wi.css("visibility", "visible");
    ri.css("visibility", "hidden");
    $(receivername_yu).css({
      outline: "2px solid #963C38",
      border: "0px solid transparent",
    });
  } else {
    ri.css("visibility", "visible");
    wi.css("visibility", "hidden");

    $(receivername_yu).css({
      outline: "2px solid #e5a62a",
      border: "0px solid transparent",
    });
  }
});

receivername_yu.on("focus", function () {
  // console.log("this.value", this.value);
  // console.log("this.value", !this.value);
  if (!this.value) {
    $(receivername_yu).css({
      outline: "2px solid #e5a62a",
      border: "0px solid transparent",
    });
  }
});


//-------電話--------------
const receiverphone_yu = $(".receiverphone-yu");

receiverphone_yu.on("input", function () {
  console.log(this.value);
  const field = $(this).closest(".field2");
  const wi = field.find("i.wrong");
  const ri = field.find("i.right");
  console.log({ field, wi, ri });
  console.log(/^09\d{8}$/.test(this.value));
  //!如果不符合/^09\d{8}$/.test(this.value)//
  if (!/^09\d{8}$/.test(this.value)) {
    // wrong
    wi.css("visibility", "visible");
    ri.css("visibility", "hidden");

    $(receiverphone_yu).css({
      outline: "2px solid #963C38",
      border: "0px solid transparent",
    });
  } else {
    // right
    ri.css("visibility", "visible");
    wi.css("visibility", "hidden");

    $(receiverphone_yu).css({
      outline: "2px solid #e5a62a",
      border: "0px solid transparent",
    });
  }
});

receiverphone_yu.on("blur", function () {
  console.log(this.value);
  const field = $(this).closest(".field2"); //定義field
  const wi = field.find("i.wrong");
  const ri = field.find("i.right");
  if  (!/^09\d{8}$/.test(this.value)) {
    wi.css("visibility", "visible");
    ri.css("visibility", "hidden");

    $(receiverphone_yu).css({
      outline: "2px solid #963C38",
      border: "0px solid transparent",
    });
  } else {
    ri.css("visibility", "visible");
    wi.css("visibility", "hidden");

    $(receiverphone_yu).css({
      outline: "2px solid #e5a62a",
      border: "0px solid transparent",
    });
  }
});

receiverphone_yu.on("focus", function () {
  // console.log("this.value", this.value);
  // console.log("this.value", !this.value);
  if (!this.value) {
    $(receiverphone_yu).css({
      outline: "2px solid #e5a62a",
      border: "0px solid transparent",
    });
  }
});


//-------------email-----------------
const receiveremail_yu = $(".receiveremail-yu");

receiveremail_yu.on("input", function () {
  console.log(this.value);
  const field = $(this).closest(".field2");
  const wi = field.find("i.wrong");
  const ri = field.find("i.right");
  console.log({ field, wi, ri });
  console.log(!this.value);
  if (
    !/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z]+$/g.test(
      this.value
    ) ||
    !this.value
  ) {
    // wrong
    wi.css("visibility", "visible");
    ri.css("visibility", "hidden");

    $(receiveremail_yu).css({
      outline: "2px solid #963C38",
      border: "0px solid transparent",
    });
  } else {
    // right
    ri.css("visibility", "visible");
    wi.css("visibility", "hidden");

    $(receiveremail_yu).css({
      outline: "2px solid #e5a62a",
      border: "0px solid transparent",
    });
  }
});

receiveremail_yu.on("blur", function () {
  console.log(this.value);
  const field = $(this).closest(".field2"); //定義field
  const wi = field.find("i.wrong");
  const ri = field.find("i.right");
  if (
    !/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z]+$/g.test(
      this.value
    ) ||
    !this.value
  ) {
    wi.css("visibility", "visible");
    ri.css("visibility", "hidden");

    $(receiveremail_yu).css({
      outline: "2px solid #963C38",
      border: "0px solid transparent",
    });

  } else {
    ri.css("visibility", "visible");
    wi.css("visibility", "hidden");

    $(receiveremail_yu).css({
      outline: "2px solid #e5a62a",
      border: "0px solid transparent",
    });
  }
});


receiveremail_yu.on("focus", function () {
  // console.log("this.value", this.value);
  // console.log("this.value", !this.value);
  if (!this.value) {
    $(receiveremail_yu).css({
      outline: "2px solid #e5a62a",
      border: "0px solid transparent",
    });
  }
});



//-------------地址-------------------
const receiveraddress3_yu = $(".receiveraddress3-yu");

receiveraddress3_yu.on("input", function () {
  console.log(this.value);
  const field = $(this).closest(".field2");
  const wi = field.find("i.wrong");
  const ri = field.find("i.right");
  console.log({ field, wi, ri });
  console.log(!this.value);
  if (!/[^\a-\z\A-\Z0-9]/g.test(this.value) || !this.value) {
    // wrong
    wi.css("visibility", "visible");
    ri.css("visibility", "hidden");

    $(receiveraddress3_yu).css({
      outline: "2px solid #963C38",
      border: "0px solid transparent",
    });
  } else {
    // right
    ri.css("visibility", "visible");
    wi.css("visibility", "hidden");

    $(receiveraddress3_yu).css({
      outline: "2px solid #e5a62a",
      border: "0px solid transparent",
    });
  }
});
receiveraddress3_yu.on("blur", function () {
  console.log(this.value);
  const field = $(this).closest(".field2"); //定義field
  const wi = field.find("i.wrong");
  const ri = field.find("i.right");
  if (!/[^\a-\z\A-\Z0-9]/g.test(this.value) || !this.value) {
    wi.css("visibility", "visible");
    ri.css("visibility", "hidden");

    $(receiveraddress3_yu).css({
      outline: "2px solid #963C38",
      border: "0px solid transparent",
    });
  } else {
    ri.css("visibility", "visible");
    wi.css("visibility", "hidden");

    $(receiveraddress3_yu).css({
      outline: "2px solid #e5a62a",
      border: "0px solid transparent",
    });
  }
});

receiveraddress3_yu.on("focus", function () {
  // console.log("this.value", this.value);
  // console.log("this.value", !this.value);
  if (!this.value) {
    $(receiveraddress3_yu).css({
      outline: "2px solid #e5a62a",
      border: "0px solid transparent",
    });
  }
});





//測試

// $(document).ready(function(){
//     $("input").on( "focus" , function(){
//     $(this).css("border","1px solid #E5A62A");
//     });
//     // $("input").blur(function(){
//     // $(this).css("border","1px solid #E5A62A");
//     // });
//   });
// input.blur = function() {
//     if (!input.value.includes('@')) { // not email
//     input.classList.add('invalid');
//     error.innerHTML = 'Please enter a correct email.'
//     }
//     };

//-----------------input:radio 能取消點選--------------
// $(document).ready(function () {
//   $("#btnAutoInput-yu").click(function () {
//     $("input:text[name=listinfo-title-radio-yu]:checked")[0].checked = false;
//   });
// });

// //--------------------同訂購人 取值-----------------
// //姓名
// $("#btnAutoInput-yu").click(function () {
//   $("#username-yu").val($("#name-yu").val());
// });
// //電話
// $("#btnAutoInput-yu").click(function () {
//   $("#usermobile-yu").val($("#mobile-yu").val());
// });
// //mobile_yu
// $("#btnAutoInput-yu").click(function () {
//   $("#usermobile_yu-yu").val($("#mobile_yu-yu").val());
// });
// //地址(有問題)
// $("#btnAutoInput-yu").click(function () {
//   $("#usercity-yu").val($("#city1-yu ").val());
// });
// $("#btnAutoInput-yu").click(function () {
//   $("#userdistrict-yu").val($("#district1-yu").val());
// });
// $("#btnAutoInput-yu").click(function () {
//   $("#useraddress-yu").val($("#address-yu").val());
// });
// $("#btnAutoInput-yu").click(function () {
//   $("#useremail-yu").val($("#email-yu").val());
// });

//---------超商取貨門市------------

const rdbtn_yu = $("#rdbtn-yu");

$(rdbtn_yu).click(function () {
  if ($(".familyinput-yu").css("height", "0px")) {
    $(".familyinput-yu").css("height", "60px");
    $(rdbtn_yu).toggleClass("familyinputFocus-yu");
    $(".tohomebtn").removeClass("familyinputFocus-yu");
  } else {
    $(".familyinput-yu").css("height", "0px");
    $(rdbtn_yu).toggleClass("familyinputFocus-yu");
    $(".tohomebtn").toggleClass("familyinputFocus-yu");
  }
});

$(".tohomebtn").click(function () {
  if ($(".familyinput-yu").css("height", "60px")) {
    $(".familyinput-yu").css("height", "0px");
    $(rdbtn_yu).toggleClass("familyinputFocus-yu");
    $(".tohomebtn").toggleClass("familyinputFocus-yu");
  } else {
    $(rdbtn_yu).toggleClass("familyinputFocus-yu");
    $(".tohomebtn").toggleClass("familyinputFocus-yu");
  }
});

//------------3信用卡輸入欄位驗證--------------
const usercdnumber3 = $(".usercdnumber3");

usercdnumber3.on("input", function () {
  console.log(this.value);
  const field = $(this).closest(".field3");
  const wi = field.find("i.wrong");
  const ri = field.find("i.right");
  console.log({ field, wi, ri });
  console.log(!this.value);
  if (!/^\d$/.test(this.value) || this.value.length >= 4  ) {
    // wrong
    $(cusercdnumber3 ).css({
      outline: "2px solid #963C38",
      border: "0px solid transparent",
    });
  } else {
    // right
    $(usercdnumber3 ).css({
      outline: "2px solid #e5a62a",
      border: "0px solid transparent",
    });
  }
});
usercdnumber3.on("blur", function () {
  console.log(this.value);
  const field = $(this).closest(".field3"); //定義field
  const wi = field.find("i.wrong");
  const ri = field.find("i.right");
  if (!/^\d$/.test(this.value) || this.value.length >= 4  ) {
    $(usercdnumber3 ).css({
      outline: "2px solid #963C38",
      border: "0px solid transparent",
    });
  } else {
    $(usercdnumber3 ).css({
      outline: "2px solid #e5a62a",
      border: "0px solid transparent",
    });
  }
});

usercdnumber3.on("focus", function () {
  if (!this.value) {
    $(usercdnumber3).css({
      outline: "2px solid #e5a62a",
      border: "0px solid transparent",
    });
  }
});


//------------4信用卡輸入欄位驗證--------------
const usercdnumber4 = $(".usercdnumber4");

usercdnumber4.on("input", function () {
  console.log(this.value);
  const field = $(this).closest(".field3");
  const wi = field.find("i.wrong");
  const ri = field.find("i.right");
  console.log({ field, wi, ri });
  console.log(!this.value);
  if (!this.value) {
    // wrong
    wi.css("visibility", "visible");
    ri.css("visibility", "hidden");

    $(cusercdnumber4 ).css({
      outline: "2px solid #963C38",
      border: "0px solid transparent",
    });
  } else {
    // right
    ri.css("visibility", "visible");
    wi.css("visibility", "hidden");

    $(usercdnumber4 ).css({
      outline: "2px solid #e5a62a",
      border: "0px solid transparent",
    });
  }
});
usercdnumber4.on("blur", function () {
  console.log(this.value);
  const field = $(this).closest(".field3"); //定義field
  const wi = field.find("i.wrong");
  const ri = field.find("i.right");
  if (!this.value) {
    wi.css("visibility", "visible");
    ri.css("visibility", "hidden");

    $(usercdnumber4 ).css({
      outline: "2px solid #963C38",
      border: "0px solid transparent",
    });
  } else {
    ri.css("visibility", "visible");
    wi.css("visibility", "hidden");

    $(usercdnumber4 ).css({
      outline: "2px solid #e5a62a",
      border: "0px solid transparent",
    });
  }
});

usercdnumber4.on("focus", function () {
  if (!this.value) {
    $(usercdnumber4).css({
      outline: "2px solid #e5a62a",
      border: "0px solid transparent",
    });
  }
});


// -----有效年月---------
// 月
const usercdMonthYu = $(".usercdMonthYu");

usercdMonthYu.on("input", function () {
  console.log(this.value);
  const field = $(this).closest(".field3");
  const wi = field.find("i.wrong");
  const ri = field.find("i.right");
  console.log({ field, wi, ri });
  console.log(!this.value);
  if (!/^\d/g.test(this.value)) {
    // wrong
    $(usercdMonthYu).css({
      outline: "2px solid #963C38",
      border: "0px solid transparent",
    });
  } else {
    // right
    $(usercdMonthYu).css({
      outline: "2px solid #e5a62a",
      border: "0px solid transparent",
    });
  }
});
usercdMonthYu.on("blur", function () {
  console.log(this.value);
  const field = $(this).closest(".field3"); //定義field
  const wi = field.find("i.wrong");
  const ri = field.find("i.right");
  if (!/^\d/g.test(this.value)) {
    $(usercdMonthYu).css({
      outline: "2px solid #963C38",
      border: "0px solid transparent",
    });
  } else {
    $(usercdMonthYu).css({
      outline: "2px solid #e5a62a",
      border: "0px solid transparent",
    });
  }
});

usercdMonthYu.on("focus", function () {
  // console.log("this.value", this.value);
  // console.log("this.value", !this.value);
  if (!this.value) {
    $(usercdMonthYu).css({
      outline: "2px solid #e5a62a",
      border: "0px solid transparent",
    });
  }
});

// 年
const usercdYearYu = $(".usercdYearYu");

usercdYearYu.on("input", function () {
  console.log(this.value);
  const field = $(this).closest(".field3");
  const wi = field.find("i.wrong");
  const ri = field.find("i.right");
  console.log({ field, wi, ri });
  console.log(!this.value);
  if (!/^\d/g.test(this.value)) {
    // wrong
    wi.css("visibility", "visible");
    ri.css("visibility", "hidden");

    $(usercdYearYu).css({
      outline: "2px solid #963C38",
      border: "0px solid transparent",
    });
  } else {
    // right
    ri.css("visibility", "visible");
    wi.css("visibility", "hidden");
    $(usercdYearYu).css({
      outline: "2px solid #e5a62a",
      border: "0px solid transparent",
    });
  }
});
usercdYearYu.on("blur", function () {
  console.log(this.value);
  const field = $(this).closest(".field3"); //定義field
  const wi = field.find("i.wrong");
  const ri = field.find("i.right");
  if (!/^\d/g.test(this.value)) {
    wi.css("visibility", "visible");
    ri.css("visibility", "hidden");
    $(usercdYearYu).css({
      outline: "2px solid #963C38",
      border: "0px solid transparent",
    });
  } else {
    ri.css("visibility", "visible");
    wi.css("visibility", "hidden");
    $(usercdYearYu).css({
      outline: "2px solid #e5a62a",
      border: "0px solid transparent",
    });
  }
});

usercdYearYu.on("focus", function () {
  // console.log("this.value", this.value);
  // console.log("this.value", !this.value);
  if (!this.value) {
    $(usercdYearYu).css({
      outline: "2px solid #e5a62a",
      border: "0px solid transparent",
    });
  }
});

//CVC
const cardCVC = $(".cardCVC");

cardCVC.on("input", function () {
  console.log(this.value);
  const field = $(this).closest(".field3");
  const wi = field.find("i.wrong");
  const ri = field.find("i.right");
  console.log({ field, wi, ri });
  console.log(!this.value);
  if (!/^\d/g.test(this.value)) {
    // wrong
    wi.css("visibility", "visible");
    ri.css("visibility", "hidden");

    $(cardCVC).css({
      outline: "2px solid #963C38",
      border: "0px solid transparent",
    });
  } else {
    // right
    ri.css("visibility", "visible");
    wi.css("visibility", "hidden");
    $(cardCVC).css({
      outline: "2px solid #e5a62a",
      border: "0px solid transparent",
    });
  }
});

cardCVC.on("blur", function () {
  console.log(this.value);
  const field = $(this).closest(".field3"); //定義field
  const wi = field.find("i.wrong");
  const ri = field.find("i.right");
  if (!/^\d/g.test(this.value)) {
    wi.css("visibility", "visible");
    ri.css("visibility", "hidden");
    $(cardCVC).css({
      outline: "2px solid #963C38",
      border: "0px solid transparent",
    });
  } else {
    ri.css("visibility", "visible");
    wi.css("visibility", "hidden");
    $(cardCVC).css({
      outline: "2px solid #e5a62a",
      border: "0px solid transparent",
    });
  }
});

cardCVC.on("focus", function () {
  // console.log("this.value", this.value);
  // console.log("this.value", !this.value);
  if (!this.value) {
    $(cardCVC).css({
      outline: "2px solid #e5a62a",
      border: "0px solid transparent",
    });
  }
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

// 一健帶入 要用迴圈
//#字號是因為回圈內的是id名稱
$(".AllinputValueYu").click(function () {
  const fields = ["name-yu", "mobile-yu", "email-yu", "address-yu"];

  $("#name-yu").val("皮卡丘");
  $("#mobile-yu").val("0924568756");
  $("#email-yu").val("elena456@gmail.com");
  $("#address-yu").val(" 復興南路一段390號2樓");

  fields.forEach(function (el) {
    $("#" + el).trigger("input");
  });
});

//同訂購人帶入
$("#btnAutoInput-yu").click(function () {
  const fields = [
    "username-yu",
    "usermobile-yu",
    "userbirthday-yu",
    "userid-yu",
    "useremail-yu",
    "useraddress-yu",
  ];

  $("#username-yu").val($("#name-yu").val());
  $("#usermobile-yu").val($("#mobile-yu").val());
  $("#useremail-yu").val($("#email-yu").val());
  $("#userbirthday-yu").val("82/05/23");
  $("#userid-yu").val("A22145687");
  $("#useraddress-yu").val($("#address-yu").val());

  fields.forEach(function (el) {
    $("#" + el).trigger("input");
  });
});

// 確認訂購按鈕
$(".Allsubmit").click(function (event) {
  let isPass = true;
  if (!$(".cardCVC").val()) {
    console.log("123:", $(".cardCVC").val());
    // 不送
    alert("沒填完");
    event.preventDefault();
    // $(".Allsubmit").addClass("btn_disabled_ba");
    // $("a").attr("href", "#section-3-yu");
  } else {
    console.log("fff");
    // 送
    // $(".Allsubmit").removeClass("btn_disabled_ba");
    $("a").attr("href", "shopping-cart-creditcard-travel.html");
    confirm("您確定送出嗎?");

    document.desktop_form.submit();
  }
});


function checkFormPass() {
  const Allsubmit = $(".Allsubmit");
  let isPass = true;
  $(".requiredYu").each(function () {
    if (!$(this).val()) {
      isPass = false;
    }
  });
  if (isPass) {
    Allsubmit.removeClass("btn_disabled_ba");
  } else {
    Allsubmit.addClass("btn_disabled_ba");
  }
}

$(".requiredYu").on("input", checkFormPass);

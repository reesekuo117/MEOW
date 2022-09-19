
//----------刪除商品清單()--------------
// const deleteIYu = $("#deleteIYu");
$("i").click(function () {
  console.log("yes");
  $(this).closest("tr").remove();
  updateTotalPrice();
});
function del() {
  var msg = "您真的確定要刪除嗎喵?";
  if (confirm(msg) === true) {
    return true;
  } else {
    return false;
  }
}

//--------數量遞增按鈕--------------

const priceUnit = 707; //一定要寫死嗎
const qtyminus = $("input.qtyminus");
const qtyplus = $("input.qtyplus");
const numbertotal_yu = $("#numbertotal_yu");

const littlePrice = $("h6.littlePriceYu");
console.log("littlePrice", littlePrice);

qtyplus.on("click", function () {
  console.log("this", $(this).prev().text().trim());
  // 可以用function也可以用箭頭函式，用箭頭函不能用this
  let num = +$(this).prev().text().trim();
  // +numbertotal_yu.html()→將numbertotal_yu裡面的文字轉換為數值，原生的用法是將.html()改成.innerText()
  // numbertotal_yu.html(num+1);
  //   ?????? 裡面的字 要改成 num+1
  //   要改值的人在$(this)的哪裡?

  $(this)
    .prev()
    .text(num + 1);

  console.log(
    "要修改的h6",
    $(this).closest("td").next().find("h6").text().trim()
  );
  console.log(
    "要乘數量的h6",
    $(this).closest("td").prev().find("h6").text().trim()
  );

  //   修改小計
  const total =
    $(this).closest("td").prev().find("h6").text().trim() * (num + 1);

  $(this).closest("td").next().find("h6").text(total);

  //   修改總金額

  // 拿到要改的dom
  $("#total-amount").find("h6").text("1111");
  // 拿到要改的數值

  // numChanged();
});

qtyminus.on("click" , function(){
  let num = +$(this).next().text().trim();
  if( num >1 ){
    $(this).next().text( num - 1 );
    console.log(
      "要修改的h6",
      $(this).closest("td").next().find("h6").text().trim()
    );
    console.log(
      "要乘數量的h6",
      $(this).closest("td").prev().find("h6").text().trim()
    );
    //   修改小計
    const total =
      $(this).closest("td").prev().find("h6").text().trim() * (num - 1);

    $(this).closest("td").next().find("h6").text(total);
  }
});




// qtyminus.on("click", function () {
//   let num = +numbertotal_yu.html();
//   if (num > 1) {
//     numbertotal_yu.html(num - 1);
//   }
//   num = +numbertotal_yu.html();
//   //為了知道值到底是多少，所以要呼叫num = +numbertotal_yu.html();
//   numChanged();
// });

// function numChanged() {
//   let num = +numbertotal_yu.html();
//   totalPriceYu.html(num * priceUnit);
// }
// numChanged();
// // 一進來就計算人數*金額

//全選的checkbox
//獨家商品清單全選
document.getElementById("check1AllYu").onclick = function () {
  var checkboxes = document.getElementsByName("oneCheck1Yu");
  for (var checkbox of checkboxes) {
    checkbox.checked = this.checked;
  }
};

//旅遊行程清單全選
document.getElementById("check2AllYu").onclick = function () {
  var checkboxes = document.getElementsByName("oneCheck2Yu");
  for (var checkbox of checkboxes) {
    checkbox.checked = this.checked;
  }
};

// //計算操作
// function setTotal(){
//     $("#totalprice_yu").html((t.val()) * 707);
//     //toFixed()是保留小數點的函式
// $(".total_price_yu").html((t.val()) * ( $('input[name="priceYu"]').val()) ); //toFixed()是保留小數點的函式
// }
// //初始化
// setTotal();

//訂單總金額
// function setTotal(){
//     var sum = 0;
//     $("#tabYu td").each(function(){
//     var num = parseInt($(this).find("input[class*=numberTotalYu]").val());
//     var price = parseFloat($(this).find("span[class*=priceYu]").text());
//     sum  = num*price;
//     })
//     totalpriceuniqui.html(sum);
//     }
// setTotal();

//訂單金額
// $("#checkboxInputYu").click(function () {
//   console.log("hihi");
//   $("#totalprice_yu").val === $("#TotalpriceYu").val($(this).val());
// });

//獨家商品 旅遊行程分頁標籤切換

$(".CartYu").click(function () {
  // console.log("yes");
  $("#myTabContent-P-yu").show();
  $("#myTabContent-T-yu").css("display", "none !important");
});

$("#uniqui-a-yu").click(function () {
  // console.log("yes");
  $("#myTabContent-P-yu").show();
  $("#myTabContent-T-yu").hide();
});

$("#travel-a-yu").click(function () {
  $("#myTabContent-T-yu").show();
  $("#myTabContent-P-yu").hide();
});

//-----手機獨家商品 旅遊行程分頁標籤切換----------

$("#mduniqui-a-yu").click(function () {
  console.log("yes");
  $("#mdmyTabContent-yu").show();
  $("#mdmyTabCount-T-yu").hide();
});

$("#mdtravel-a-yu").click(function () {
  $("#mdmyTabCount-T-yu").show();
  $("#mdmyTabContent-yu").hide();
});

//----------刪除商品清單()--------------

function removePItem(event) {
  const tr = $(event.currentTarget).closest("tr");
  const sid = tr.attr("data-sid");

  $.get(
    "re-cart-p-api.php",
    { sid },
    function (data) {
      console.log(data);
      showCartCount(data); // 購物車總數量
      tr.remove();

      // TODO: 更新小計, 總計,
      //TODO:總計,

      updatePrices(); //刪除後要呼叫函式
    },
    "json"
  );
}


//----------刪除旅遊清單()--------------
function removeTItem(event) {
  const tr = $(event.currentTarget).closest("tr");
  const sid = tr.attr("data-sid");


  $.get(
    "re-cart-t-api.php",
    { sid },
    function (data) {
      console.log(data);
      showCartCount(data); // 購物車總數量
      tr.remove();

      // TODO: 更新小計, 總計,
      //TODO:總計,

      updatePrices(); //刪除後要呼叫函式
    },
    "json"
  );
}

// const deleteIYu = $("#deleteIYu");
// $("i").click(function () {
//   console.log("yes");
//   $(this).closest("tr").remove();
//   updateTotalPrice();
// });
// function del() {
//   var msg = "您確定要刪除嗎喵?";
//   if (confirm(msg) === true) {
//     return true;
//   } else {
//     return false;
//   }
// }

//--------數量遞增按鈕--------------

// const priceUnit = $('#total_price_ba').text().trim();

const priceUnit = 707; //一定要寫死嗎
const qtyminus = $("input.qtyminus");
const qtyplus = $("input.qtyplus");
const numbertotal_yu = $("#numbertotal_yu");

const littlePrice = $("h6.littlePriceYu");
// console.log("littlePrice", littlePrice);

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

  calTotal(); //呼叫

});
//總價計算商品
function calTotal() {
  let total = 0;
  //訂單總金額
  $(".littlePriceYu").each(function () {
    total += +$(this).text();
    // console.log($(this).text());
  });
  $("#AllTotal_P_Yu").text(total);
  console.log({ total });
}

//總價計算行程
function calTotal() {
  let total = 0;
  //訂單總金額
  $(".littlePriceYu").each(function () {
    total += +$(this).text();
    // console.log($(this).text());
  });
  $("#AllTotal_T_Yu").text(total);
  console.log({ total });
}





qtyminus.on("click", function () {
  let num = +$(this).next().text().trim();
  if (num > 1) {
    $(this)
      .next()
      .text(num - 1);
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
// if (document.getElementById("check1AllYu")) {
//   document.getElementById("check1AllYu").onclick = function () {
//     var checkboxes = document.getElementsByName("oneCheck1Yu");
//     for (var checkbox of checkboxes) {
//       checkbox.checked = this.checked;
//     }
//   };
// }

//旅遊行程清單全選
// document.getElementById("check2AllYu").onclick = function () {
//   var checkboxes = document.getElementsByName("oneCheck2Yu");
//   for (var checkbox of checkboxes) {
//     checkbox.checked = this.checked;
//   }
// };


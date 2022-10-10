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
  // console.log("yes");
  $("#mdmyTabContent-yu").show();
  $("#mdmyTabCount-T-yu").hide();
});

$("#mdtravel-a-yu").click(function () {
  $("#mdmyTabCount-T-yu").show();
  $("#mdmyTabContent-yu").hide();
});


//沒有商品之後要出現購物車內沒有商品
// $("#uniqui-yu").empty(function{
//   $("#uniqui-yu").a
// })





// 商品---------------------------------------------------------------------------------
//--------數量遞增按鈕--------------

// const priceUnit = $('#total_price_ba').text().trim();

const priceUnit = 707; //一定要寫死嗎
const qtyminus = $("input.qtyminus");
const qtyplus = $("input.qtyplus");
const numbertotal_yu = $("#numbertotal_yu");

const littlePrice = $("h6.littlePriceYu");
// console.log("littlePrice", littlePrice);

qtyplus.on("click", function () {
  // console.log("this", $(this).prev().text().trim());
  // 可以用function也可以用箭頭函式，用箭頭函不能用this
  let num = +$(this).prev().text().trim();
  // +numbertotal_yu.html()→將numbertotal_yu裡面的文字轉換為數值，原生的用法是將.html()改成.innerText()
  // numbertotal_yu.html(num+1);
  //   ?????? 裡面的字 要改成 num+1
  //   要改值的人在$(this)的哪裡?

  $(this)
    .prev()
    .text(num + 1);

  // console.log(
  //   "要修改的h6",
  //   $(this).closest("td").next().find("h6").text().trim()
  // );
  // console.log(
  //   "要乘數量的h6",
  //   $(this).closest("td").prev().find("h6").text().trim()
  // );

  //   修改小計
  const total =
    $(this).closest("td").prev().find("h6").text().trim() * (num + 1);

  $(this).closest("td").next().find("h6").text(total);

  // calTotal(); //呼叫
  updatePrices();
  updataPItem(this);

});
// //總價計算商品
// function calTotal() {
//   let total = 0;
//   //訂單總金額
//   $(".littlePriceYu").each(function () {
//     total += +$(this).text();
//     // console.log($(this).text());
//   });
//   $("#AllTotal_P_Yu").text(total);
//   // console.log({ total });
// }

// //總價計算行程
// function calTotal() {
//   let total = 0;
//   //訂單總金額
//   $(".littlePriceYu").each(function () {
//     total += +$(this).text();
//     // console.log($(this).text());
//   });
//   $("#AllTotal_T_Yu").text(total);
//   // console.log({ total });
// }


qtyminus.on("click", function () {
  let num = +$(this).next().text().trim();
  if (num > 1) {
    $(this)
      .next()
      .text(num - 1);
    // console.log(
    //   "要修改的h6",
    //   $(this).closest("td").next().find("h6").text().trim()
    // );
    // console.log(
    //   "要乘數量的h6",
    //   $(this).closest("td").prev().find("h6").text().trim()
    // );
    //   修改小計
    const total =
      $(this).closest("td").prev().find("h6").text().trim() * (num - 1);

    $(this).closest("td").next().find("h6").text(total);
      updatePrices();
      updataPItem(this);

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

//----------刪除商品清單()--------------

// 移除確認(商品)
function delete_p(event) {
  const a = $(event.currentTarget);
  const name = a.attr('data-name')
  const sid = a.attr('data-sid')

  $("#DEL_P").modal("show");
  $('.modal-body').html(`是否要刪除<br> 「 ${name} 」？`);
  
  $('.del-ba').click(function() {
      console.log(sid,'被按了');
      return removePItem(sid, a) 
  })
  
}

function removePItem(sid, a_el){
  // const tr = $(event.currentTarget).closest("tr");
  // console.log(event);
  // console.log('tr',tr);
  $.get(
    "re-cart-p-api.php",
    { sid },
    function (data) {
      console.log(data);
      const modal_backdrop = $('.modal-backdrop');
      if(modal_backdrop.length){
        modal_backdrop.remove();
      }

      // modal-backdrop
      // $("#DEL_P").modal("hide");
      // showCartCount(data); // 購物車總數量
      // tr.remove();
      a_el.closest('tr').remove();
      updatePrices(); //刪除後要呼叫函式
    },
    "json"
  );

}

// function removePItem(event) {
//   const tr = $(event.currentTarget).closest("tr");
//   const sid = tr.attr("data-sid");
//   console.log('pcart', sid);

//   $.get(
//     're-cart-p-api.php',
//     {sid,qty},
//     function(data){
//         console.log(data);
//         // showCartCount(data);
//         // updatePrices();
//     },
//     'json');
// }

function updataPItem(btn){
  const sid = $(btn).closest('tr').attr('data-sid');
  const qty = $(btn).parent().find('.qty-yu').text();
  $.get(
      're-cart-p-api.php',
      {sid,qty},
      function(data){
          console.log(data);
          // showCartCount(data);
          // updatePrices();
      },
      'json');
}
function updatePrices(){
  let total = 0; // 總價

  $('.pcart-item').each(function(){
      const tr = $(this);
      const td_price = tr.find('.price');
      const td_sub = tr.find('.sub-total');
      
      const price = +td_price.attr('data-val'); // +轉換成數字
      const qty = +tr.find('.qty-yu').text();

      // console.log('price',price);
      // console.log('qty',qty);

      td_price.html(price);
      td_sub.html(price * qty);
      total += price * qty;

      // console.log('TOTAL',total);
  });
  $('#total-price').html(total);

}
updatePrices(); //一進來就要先執行一次

// 行程---------------------------------------------------------------------------------
//--------數量遞增按鈕--------------

// const priceUnit = $('#total_price_ba').text().trim();

const TpriceUnit = 707; //一定要寫死嗎
const Tqtyminus = $("input.tqtyminus");
const Tqtyplus = $("input.tqtyplus");
const Tnumbertotal_yu = $("#tnumbertotal_yu");

const TlittlePrice = $("h6.tlittlePriceYu");
// console.log("littlePrice", littlePrice);

Tqtyplus.on("click", function () {
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

  // calTotal(); //呼叫
  updateTPrices();
  updataTItem(this);

});

Tqtyminus.on("click", function () {
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
      updateTPrices();
      updataTItem(this);

  }
});



// function removeTItem(sid){

//   console.log('刪了');
//   $.get(
//     "re-cart-t-api.php",
//     { sid },
//     function (data) {
//       console.log(data);
//       // showCartCount(data); // 購物車總數量
//       tr.remove();

//       // TODO: 更新小計, 總計,
//       //TODO:總計,

//       updateTPrices(); //刪除後要呼叫函式
//     },
//     "json"
//   );

// }

//----------刪除旅遊清單()--------------
// 移除確認(商品)
function delete_t(event) {
  const a = $(event.currentTarget);
  const name = a.attr('data-name')
  const sid = a.attr('data-sid')

  $("#DEL_T").modal("show");
  $('.modal-body').html(`是否要刪除<br> 「 ${name} 」？`);
  
  $('.del-ba').click(function() {
      console.log(sid,'被按了');
      return removeTItem(sid, a) 
  })
  
}

function removeTItem(sid, a_el){
  // const tr = $(event.currentTarget).closest("tr");
  // console.log(event);
  // console.log('tr',tr);
  $.get(
    "re-cart-t-api.php",
    { sid },
    function (data) {
      console.log(data);
      const modal_backdrop = $('.modal-backdrop');
      if(modal_backdrop.length){
        modal_backdrop.remove();
      }

      // modal-backdrop
      // $("#DEL_P").modal("hide");
      // showCartCount(data); // 購物車總數量
      // tr.remove();
      a_el.closest('tr').remove();
      updateTPrices(); //刪除後要呼叫函式
    },
    "json"
  );

}
// function removeTItem(event) {
//   const tr = $(event.currentTarget).closest("tr");
//   const sid = tr.attr("data-sid");


//   $.get(
//     "re-cart-t-api.php",
//     { sid },
//     function (data) {
//       console.log(data);
//       // showCartCount(data); // 購物車總數量
//       tr.remove();

//       // TODO: 更新小計, 總計,
//       //TODO:總計,

//       updateTPrices(); //刪除後要呼叫函式
//     },
//     "json"
//   );
// }
function updataTItem(btn){
  console.log('hihihi');
  const sid = $(btn).closest('tr').attr('data-sid');
  const qty = $(btn).parent().find('.Tqty-yu').text();
  $.get(
      're-cart-t-api.php',
      {sid,qty},
      function(data){
          console.log(data);
          // showCartCount(data);
          // updatePrices();
      },
      'json');
}
function updateTPrices(){
  let t_total = 0; // 總價

  $('.tcart-item').each(function(){
      const tr = $(this);
      const td_pricet = tr.find('.Tprice');
      const td_subt = tr.find('.Tsub-total');
      
      const pricet = +td_pricet.attr('data-val'); // +轉換成數字
      const qtyt = +tr.find('.Tqty-yu').text();

      console.log('price',pricet);
      console.log('qty',qtyt);

      td_pricet.html(pricet);
      td_subt.html(pricet * qtyt);
      t_total += pricet * qtyt;

      console.log('T_TOTAL',t_total);
  });
  $('#total-price2').html(t_total);

}
updateTPrices(); //一進來就要先執行一次

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



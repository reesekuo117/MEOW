// nav
let lastScroll = 0;
$(window).scroll(function(){
let scrollNow =  $(window).scrollTop();
//console.log('lastScroll:', lastScroll);
//console.log('scrollNow', scrollNow);
if(scrollNow > lastScroll){
$('header').addClass('hidden')
}
else{
$('header').removeClass('hidden')
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


//----------刪除商品清單--------------
// const deleteIYu = $("#deleteIYu");
$("#deleteIYu").click(function(){
    console.log("yes");
    $(this).closest('tr').remove();
    updateTotalPrice();
});
function del() {
    var msg = "您真的確定要刪除嗎喵?";
    if (confirm(msg)===true){
        return true;
    }else{
        return false;
    }
};

//--------數量遞增按鈕--------------

const priceUnit = 707;
const qtyminus = $('input.qtyminus');
const qtyplus = $('input.qtyplus');
const numbertotal_yu = $('#numbertotal_yu');
const totalPriceYu = $('#totalprice_yu');

qtyplus.on('click', function(){
    // 可以用function也可以用箭頭函式，用箭頭函不能用this
    let num = +numbertotal_yu.html();
    // +numbertotal_yu.html()→將.people裡面的文字轉換為數值，原生的用法是將.html()改成.innerText()
    numbertotal_yu.html(num+1);
    qtyminus.removeClass('disabled');
    numChanged();
});

qtyminus.on('click', function(){
    let num = +numbertotal_yu.html();
    if(num>1){
        numbertotal_yu.html(num-1);
    }
    num = +numbertotal_yu.html();
    //為了知道值到底是多少，所以要呼叫num = +numbertotal_yu.html();
    if(num===1){
        qtyminus.addClass('disabled');
    }
    numChanged();
});

function numChanged(){
    let num = +numbertotal_yu.html();
    totalPriceYu.html(num * priceUnit);
}
numChanged();
// 一進來就計算人數*金額




// $(function(){
// //獲得文字框物件
// var oneprice = $("#onepriceYu")
// var t = $(".qty-yu");
// //數量增加操作
// $(".qtyplus").click(function(){
// t.val(parseInt(t.val())+1)
// if (parseInt(t.val())!=1){
// $('.qtyminus').attr('disabled',false);
// }
// setTotal();
// })
// //數量減少操作
// $(".qtyminus").click(function(){
// t.val(parseInt(t.val())-1);
// if (parseInt(t.val())==1){
// $('.qtyminus').attr('disabled',true);
// }
// setTotal();
// })







// //計算操作
// function setTotal(){
//     $("#totalprice_yu").html((t.val()) * 707); //toFixed()是保留小數點的函式
// // $(".total_price_yu").html((t.val()) * ( $('input[name="priceYu "]').val()) ); //toFixed()是保留小數點的函式
// }
// //初始化
// setTotal();
// });


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
$("#checkboxInputYu").click(function () {
    console.log("hihi");
    $("#totalprice_yu").val === $("#TotalpriceYu").val($(this).val());
    });







//全選的checkbox
//獨家商品清單全選 

document.getElementById('check1AllYu').onclick = function() {
var checkboxes = document.getElementsByName('oneCheck1Yu');
for (var checkbox of checkboxes) {
checkbox.checked = this.checked;
};
};


//旅遊行程清單全選 
document.getElementById('check2AllYu').onclick = function() {
var checkboxes = document.getElementsByName('oneCheck2Yu');
for (var checkbox of checkboxes) {
checkbox.checked = this.checked;
};
};










































// //全選
// var ckbox = document.getElementsByClassName("ckbox");
// var ckbtn = document.getElementsByClassName("oneCheck1Yu");
// var btnleft = document.getElementsByClassName("btnleft");
// var txt = document.getElementsByClassName("txt");
// var price=document.getElementsByClassName("priceYu");
// var totle=document.getElementsByClassName("tpriceYu");
// var allprice=document.getElementsByClassName("totalpriceYu")[0];
// var number=document.getElementsByClassName("number")[0];
// var count=0;

// //商品信息前複選框的事件
// for(var i=0;i<ckbtn.length;i++){
//     ckbtn[i].onclick=function(){
//         if(this.checked){
//             count++;
//         }
//         else{
//             count--;
//         }
//         if(count==ckbtn.length){
//             ckbox[0].checked=true;
//             ckbox[1].checked=true;
//         }
//         else{
//             ckbox[0].checked=false;
//             ckbox[1].checked=false;
//         }
//         ischoose();
//     }
// }
// //全選複選框的事件
// for (key in ckbox) {
//     ckbox[key].index = key;  //給index屬性上綁值，綁個索引
//     ckbox[key].onclick = function () {
//         ckbox[this.index == 0 ? 1 : 0].checked = !ckbox[this.index == 0 ? 1 : 0].checked;
//         if(this.checked){
//             for (var i = 0; i < ckbtn.length; i++) {
//                 ckbtn[i].checked = true;
//             }
//         }
//         else{
//             for (var i = 0; i < ckbtn.length; i++) {
//                 ckbtn[i].checked = false;
//             }
//         }
//         ischoose();
//     }
// }
// //購物車數量的增減事件
// for (var i = 0; i < btnleft.length; i++) {
//     btnleft[i].index = i;
//     btnleft[i].onclick = function () {
//         var val = txt[this.index].value;
//         val--;
//         if (val < 1) {
//             val = 1;
//         }
//         txt[this.index].value = val;
//         addprice(this.index,val);
//         ischoose();
//     }
//     btnright[i].index=i;
//     btnright[i].onclick = function () {
//         var val=txt[this.index].value;
//         val++;
//         txt[this.index].value=val;
//         addprice(this.index,val);
//         ischoose();
//     }
// }
// //金額的計算方法
// function addprice(index,value){
//     totle[index].innerHTML="￥"+(price[index].getAttribute("data-price")*value).toFixed(2);
//     totle[index].setAttribute("data-totle",(price[index].getAttribute("data-price")*value).toFixed(2));
// }
// //判斷商品信息前的複選框是否打勾
// function ischoose(){
//     var totleprice=0;
//     var num=0;
//     for(var i=0;i<ckbtn.length;i++){
//         if(ckbtn[i].checked){
//             totleprice+=parseFloat(totle[i].getAttribute("data-totle"));
//             num+=parseInt(txt[i].value);
//         }
//     }
//     allprice.innerHTML="￥"+totleprice.toFixed(2);
//     number.innerHTML=num;
// }
// for (key in ckbox) {
//     ckbox[key].index = key;  //給index屬性上綁值，綁個索引
//     ckbox[key].onclick = function () {
//         ckbox[this.index == 0 ? 1 : 0].checked = true;
//         for (var i = 0; i < ckbtn.length; i++) {
//             ckbtn[i].checked = true;
//         }
//     }
// }


// //全選總價變更
// // const checkAll = document.querySelector('#check1AllYu'); 
// // const checkItems = document.getElementsByName('oneCheck1Yu');

// // checkAll.onchange = ev => {
// //     console.log(ev.target.checked); 
// //     checkItems.forEach(item => item.checked = ev.target.checked); 
// // };
// // checkItems.forEach(item => item.onchange = ev => { 
// //     checkAll.checked = Array.from(checkItems).every(checkItem => checkItem.checked); 
// // });

// // //總金額 = 單價 * 數量
// // // 獲取商品單價組成的數組
// // const priceLists = document.querySelectorAll('.onePriceinputYu'); 
// // const priceArr = Array.from(priceLists).map(item => parseInt(item.textContent)); 

// // //  // 獲取商品數量組成的數組 
// // const numberLists = document.querySelectorAll('body input[name=minusplusname]');
// // const numbersArr = Array.from(numberLists).map(item => parseInt(item.value)); 

// // // // 默認值:[ 1, 1, 1, 1, 1 ]
// // let amountArr = [priceArr, numbersArr].reduce((prev, curr) => prev.map((item, index) => item * curr[index])); 
// // console.log(amountArr); 

// // // 獲取單個商品總金額的元素數組 
// // const amountDOM = document.querySelectorAll('.total_price_yu'); 
// // amountDOM.forEach((item, index) => item.textContent = amountArr[index]);
// // let isChecked = []; 
// // checkItems.forEach(item => isChecked.push(item.checked === true ? 1 : 0)); 

// // // 列印出商品狀態值 
// // console.log(isChecked);

// // // 聲明一個用於存儲商品數量的數組，該數組的作用是用於與對應的商品的狀態值的數組進行相乘，得到實際的被選中的商品的數組。 
// // let checkedNumbers = []; 
// // numbersArr.forEach((item, index) => checkedNumbers.push(item * isChecked[index])); 

// // // 列印被選中的商品的數量
// // console.log(checkedNumbers);
// // let checkedSum = checkedNumbers.reduce((prev, curr) => prev + curr);

// //  // 將獲取的數量結果渲染到頁面中 
// //  document.querySelector('#sumYu').textContent = checkedSum;

// //  // 聲明一個數組用於存儲每一個被選中的商品的總金額 
// //  let checkedPrice = []; 
// //  checkedNumbers.forEach((item, index) => checkedPrice.push(item * priceArr[index])); 

// //  // 列印被選中的每個被選中的商品總金額 
// //  console.log(checkedPrice); 

// //  // 計算被選中的商品總金額 
// //  let totalAmount = checkedPrice.reduce((prev, curr) => prev + curr); 

// //  // 將選中的商品總金額渲染到頁面中 
// //  document.querySelector('#total-amount').textContent = totalAmount;

// // // 頁面第一次加載的時候自動執行一次。 
// // window.onload = autoCalculate;

// 側邊欄切換
const my_pages_re = $(".tab_con_re .item_re");
const myHashChange =  function(){
    const hash = location.hash;
    switch(hash) {
        case '#member-data':
            my_pages_re.eq(0).show().siblings().hide();
            break;
        case '#modify-password':
            my_pages_re.eq(1).show().siblings().hide();
            break;
        case '#my-favorites':
            my_pages_re.eq(2).show().siblings().hide();
            break;
        case '#member-order':
            my_pages_re.eq(3).show().siblings().hide();
            break;
    }
};
window.addEventListener('hashchange', myHashChange);
// #member-data, #modify-password, #my-favorites, #member-order
$(function(){
    $(".tab_list_re li").click(function(){
        const dataVal = $(this).attr('data-val')
        location.href = '#' + dataVal;
    });
    myHashChange();
    //點擊上部的li，當前li添加current類，移除其他
    // $(".tab_list_re li").click(function(){
    //     $(this).addClass("current_re").siblings().removeClass("current_re");
    //     //點擊的同時，得到當前li的索引號
    //     var index = $(this).index();
    //     //讓裡面相應索引號的item顯示，其餘的item隱藏
    //     $(".tab_con_re .item_re").eq(index).show().siblings().hide();
    // })
})
// 列表按鈕貓掌
$('.tab_list_re li.tablist-meowli01_re').click(function() {
    $('.tablist-meowsvg01_re').removeClass('d-none');
    $('.tablist-meowsvg02_re').addClass('d-none');
    $('.tablist-meowsvg03_re').addClass('d-none');
    $('.tablist-meowsvg04_re').addClass('d-none');
    })
$('.tab_list_re li.tablist-meowli02_re').click(function() {
    $('.tablist-meowsvg01_re').addClass('d-none');
    $('.tablist-meowsvg02_re').removeClass('d-none');
    $('.tablist-meowsvg03_re').addClass('d-none');
    $('.tablist-meowsvg04_re').addClass('d-none');
    })
$('.tab_list_re li.tablist-meowli03_re').click(function() {
    $('.tablist-meowsvg01_re').addClass('d-none');
    $('.tablist-meowsvg02_re').addClass('d-none');
    $('.tablist-meowsvg03_re').removeClass('d-none');
    $('.tablist-meowsvg04_re').addClass('d-none');
    })
$('.tab_list_re li.tablist-meowli04_re').click(function() {
    $('.tablist-meowsvg01_re').addClass('d-none');
    $('.tablist-meowsvg02_re').addClass('d-none');
    $('.tablist-meowsvg03_re').addClass('d-none');
    $('.tablist-meowsvg04_re').removeClass('d-none');
    })
// $(".tab_list_re li").click(function(){
//         $(this).addClass("current_re").siblings().removeClass("current_re");
//     });
// $(".tab_list_re li").click(function(){
//         $(this).addClass("active-re").siblings().removeClass("active-re");
//     });

//手機會員/修改頁面
$(function(){
    $(".tab_phonelist_re h5").click(function(){
        $(this).addClass("current_re").siblings().removeClass("current_re");
        var index = $(this).index();
        $(".tab_con_re .item_re").eq(index).show().siblings().hide();
    })
})
// 會員頭像
let picture_re = document.getElementById('pictureChange_re');
window.onclick = function(event) {
    if (event.target == picture_re) {
        picture_re.style.display = "none";
    }
}
// 會員頭像預覽顯示
function readURL_re(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#blah_re').attr('src', e.target.result);
            console.log('e.target.result',e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
    }
}
// 會員頭像
const blah_re = $('#blah_re'); // selected avatar 被選擇的頭像
const blah_md_re = $('#blah_md_re'); // selected avatar 被選擇的頭像
const blah_xs01_re = $('#blah_xs01_re'); // selected avatar 被選擇的頭像
const blah_xs02_re = $('#blah_xs02_re'); // selected avatar 被選擇的頭像

$('.picturewarpChange-re').on('click', function(event){
    const src = $(this).find('img')[0].src;
    blah_re[0].src = src;

})
function saveAvatar() {
    const picture_re = blah_re[0].src;
    $.post('re-picture-api.php', {picture_re}, function(data){
        console.log(data);
        document.getElementById('pictureChange_re').style.display='none';
        if(data.success){
            blah_md_re[0].src = picture_re;
            blah_xs01_re[0].src = picture_re;
            blah_xs02_re[0].src = picture_re;
        }
    }, 'json')
}

// like標籤切換
$(function(){
let $li = $('ul.tab-liketitle-re li');
    $($li. eq(0) .addClass('active-re').find('a').attr('href')).siblings('.tab-inner-re').hide();

    $li.click(function(){
        $($(this).find('a'). attr ('href')).show().siblings ('.tab-inner-re').hide();
        $(this).addClass('active-re'). siblings ('.active-re').removeClass('active-re');
    });
});
// order標籤切換
$(function(){
let $li = $('ul.ordertab-title-re li');
    $($li. eq(0) .addClass('active-re').find('a').attr('href')).siblings('.ordertab-inner-re').hide();

    $li.click(function(){
        $($(this).find('a'). attr ('href')).show().siblings ('.ordertab-inner-re').hide();
        $(this).addClass('active-re'). siblings ('.active-re').removeClass('active-re');
    });
});
// 查詢訂單
$('.orderbtnP-re').on("click", function(){
    $(this).parents().next("div.listslide-re").slideToggle('normal');
    $(this).parents().next().next("div.commentslide-re").slideUp('normal');
    // $('.listslide-re').slideToggle('normal');
    // $('.commentslide-re').slideUp('normal');
});
$('.orderbtnT-re').click(function(){
    $(this).parents().next("div.listslideT-re").slideToggle('normal');
    $(this).parents().next().next("div.commentslideT-re").slideUp('normal');
    // $('.rightslide01-re').slideToggle('normal');
    // $('.rightslide02-re').slideUp('normal');
})
// 給予評價
$('.evaluation-btn-re').on("click", function(){
    const pid = $(this).attr('data-pid');
    const formName = $(this).attr('data-form');
    console.log({pid});

    const form1 = $('#'+formName)[0];
    console.log(form1)
    form1.product_sid.value = pid;

    $(this).parents("div.listslide-re").slideUp('normal');
    // $(this).parents("div.listslide-re").nextUntil("form.commentslide-re").slideDown('normal');
    $(this).parents("div.listslide-re").next("form.commentslide-re").slideDown('normal');
    // $('.listslide-re').slideUp('normal');
    // $('.commentslide-re').slideDown('normal');
});

$('.evaluationT-btn-re').click(function(){
    $(this).parents("div.listslideT-re").slideUp('normal');
    $(this).parents("div.listslideT-re").next("form.commentslideT-re").slideDown('normal');
    // $('.rightslide01-re').slideUp('normal');
    // $('.rightslide02-re').slideDown('normal');
})
// 關閉所有明細
$('.ordercross-re svg').click(function(){
    $('.listslide-re').slideUp('normal');
    $('.commentslide-re').slideUp('normal');
})
$('.ordercrossT-re').click(function(){
    $('.listslideT-re').slideUp('normal');
    $('.commentslideT-re').slideUp('normal');
})
// 星星
$('.pb-3 .star-re').click(function(){
    const form1 = $(this).closest('form')[0];
    form1.star_num.value = + $(this).index() + 1;

    console.log('hi',$(this).index());

    const stars = $(this).closest('.pb-3').find('.star-re')

    for(let i = 0; i < 5; i++ ){
        const color = ($(this).index() >= i)? '#E5A62A' : 'none';
        let color1 ;
        if($(this).index() >= i){
            color1 = '#E5A62A'
        }
        else{
            color1 = 'none' 
        }
        stars.eq(i).css('fill',color)
    }
    // if($(this).index() === 0){
    //     $('.star-re').eq(0).css('fill','#E5A62A')
    //     $('.star-re').eq(1).css('fill','none')
    //     $('.star-re').eq(2).css('fill','none')
    //     $('.star-re').eq(3).css('fill','none')
    //     $('.star-re').eq(4).css('fill','none')
    // }
})
$('.rightstar-re').click(function(){
    console.log('hi',$(this).index());
    for(let i = 0; i <5; i++ ){
        const color = ($(this).index() >= i)? '#E5A62A' : 'none';
        $('.rightstar-re').eq(i).css('fill',color)
    }
})
//評論
function checkFormReviewP(event){
    const form1 = event.currentTarget;
    console.log($(form1).serialize());
    console.log('checkFormReviewP');
    let isPass = true;
    
    // if (!$('').val()) {
    //     genAlert5('請填寫正確資料');
    //     return;
    // }

    if(isPass){
        $.post(
            're-review-api.php', 
            $(form1).serialize(),
            function(data){
                console.log('form_preview_re data',data);
                // if(data.success){
                //     genAlert5('新增評論成功', 'success');
                // }else{
                //     genAlert5(data.error);
                // }
        }, 'json');
    }
}

// 
let districtArray = [
    ['中正區', '大同區', '中山區', '萬華區', '信義區', '松山區', '大安區', '南港區', '北投區', '內湖區', '士林區', '文山區'],
    ['板橋區', '新莊區', '泰山區', '林口區', '淡水區', '金山區', '八里區', '萬里區', '石門區', '三芝區', '瑞芳區', '汐止區', '平溪區', '貢寮區', '雙溪區', '深坑區', '石碇區', '新店區', '坪林區', '烏來區', '中和區', '永和區', '土城區', '三峽區', '樹林區', '鶯歌區', '三重區', '蘆洲區', '五股區'],
    ['仁愛區', '中正區', '信義區', '中山區', '安樂區', '暖暖區', '七堵區'],
];
$('#member_city_re').change(function () {
    const cityNumber = $(this).val();
    const districtData = districtArray[cityNumber-5];
    // 用迴圈會更方便
    // $('#district option').eq(0).text(districtData[0])
    // $('#district option').eq(1).text(districtData[1])
    // $('#district option').eq(2).text(districtData[2])
    // 迴圈 一直要做重複的動作，裡面的索引值可能會改變
    // 1.自己寫規則，for 迴圈，次數自己決定
    // 2.用陣列的方法來寫迴圈，次數就是陣列的資料數量
    //console.log('districtData:', districtData.length);
    $('#member_district_re').empty();
    $(districtData).each(function (index, item) {
        console.log('JQ item:', item);
        console.log('JQ index:', index);
    $('#member_district_re').append(`<option value="${index}">${item}</option>`)
    })
});
// 地址
// var tArray = new Array(); //先宣告一維
// for(var k=0;k<i;k  ){ //一維長度為i,i為變數，可以根據實際情況改變
//     tArray[k]=new Array(); //宣告二維，每一個一維陣列裡面的一個元素都是一個陣列；
// for(var j=0;j<p;j  ){ //一維陣列裡面每個元素陣列可以包含的數量p，p也是一個變數；
//     tArray[k][j]=""; //這裡將變數初始化，我這邊統一初始化為空，後面在用所需的值覆蓋裡面的值
// }
// }



// 會員資料欄位錯誤狀態
const msgc_member = $('#member_msgContainer');
    function genAlert3(msg3, type='danger'){
        const a = $(`
        <div class="alert alert-${type}" role="alert">
            ${msg3}
        </div>
        `);
        msgc_member.append(a);
        setTimeout(()=>{
            a.fadeOut(400, function(){
                a.remove();
            })
        }, 2000);
    }
    $('#member-page-re').click(function(){
        $('.alert').remove();
    })
// 會員資料欄位檢查
function checkFormMember(){
    console.log('checkFormMember');
    let isPass = true;
    if (!$('#member_name_re').val()) {
        genAlert3('請填寫正確資料');
        return;
    }else if (!$('#member_phone_re').val()) {
        genAlert3('請填寫正確資料');
        return;
    }
    if(isPass){
        $.post(
            're-member-api.php', 
            $(document.form_member_re).serialize(),
            function(data){
                console.log('checkFormMember data',data);
                if(data.success){
                    genAlert3('會員資料修改成功，', 'success');
                }else{
                    genAlert3(data.error);
                }
        }, 'json');
    }
}
// 修改密碼欄位錯誤狀態
const msgc_password = $('#password_msgContainer');
    function genAlert4(msg4, type='danger'){
        const a = $(`
        <div class="alert alert-${type}" role="alert">
            ${msg4}
        </div>
        `);
        msgc_password.append(a);
    }
    $('#password-page-re').click(function(){
        $('.alert').remove();
    })
// 修改密碼欄位檢查
function checkFormPassword(){
    console.log('checkFormPassword');
    let isPass = true;
    if (!$('#oldpassword_re').val()) {
        genAlert4('請填寫正確資料');
        return;
    }else if (!$('#newpassword_re').val()) {
        genAlert4('請填寫正確資料');
        return;
    }else if (!$('#againpassword_re').val()) {
        genAlert4('請填寫正確資料');
        return;
    }else if ($('#newpassword_re').val() != $('#againpassword_re').val()) {
        genAlert4('請填寫正確資料');
        return;
    }else if ($('#newpassword_re').val() === $('#oldpassword_re').val()) {
        genAlert4('與現在密碼重複 請輸入正確資料');
        return;
    }
    if(isPass){
        $.post(
            're-changepassword-api.php', 
            $(document.form_forget_re).serialize(),
            function(data){
                console.log('checkFormPassword data',data);
                if(data.success){
                    genAlert4('密碼修改成功', 'success');
                }else{
                    genAlert4(data.error);
                }
        }, 'json');
    }
}
// 最愛 商品
function addToCartP_re(event) {
    const btn = $(event.currentTarget);
    //currentTarget 事件屬性返回其事件偵聽器觸發事件的元素
    // const qty = btn.closest('.card-body-re').find('select').val();
    const qty = '1';
    const sid = btn.attr('data-sid');
    //使用attr叫出自定屬性 data-sid
    // console.log(btn.closest('.card-body').find('select'));
    console.log({sid, qty});
    // $(selector).get(url,data,success(response,status,xhr),dataType)
    $.get(
        're-cart-p-api.php', 
        {sid, qty}, 
        function(data){
            showCartCount(data);
        }, 
        'json');
}

// 移除最愛確認(商品)
function hello_p(event) {
    const a = $(event.currentTarget);
    const name = a.attr('data-name')
    const sid = a.attr('data-sid')

    $("#DEL_P").modal("show");
    $('.modal-body').html(`是否要刪除<br> 「 ${name} 」`);
    
    $('.del-ba').click(function() {
        console.log(sid,'被按了');
        return removeItem_p(sid) 
    })
    
}

function removeItem_p(sid){

    console.log('刪了');
    location.href = `re-del-p.php?sid=${sid}`;

}

// 移除最愛確認(行程)
function hello_t(event) {
    const a = $(event.currentTarget);
    const name = a.attr('data-name')
    const sid = a.attr('data-sid')

    $("#DEL_T").modal("show");
    $('.modal-body').html(`是否要刪除<br> 「 ${name} 」`);
    
    $('.del-ba').click(function() {
        console.log(sid,'被按了');
        return removeItem_t(sid) 
    })
    
}

function removeItem_t(sid){

    console.log('刪了');
    location.href = `re-del-t.php?sid=${sid}`;
    window.location.href = "#tab02-re";

}

// 移除最愛確認(詩籤)
function hello_f(event) {
    const a = $(event.currentTarget);
    const sid = a.attr('data-sid')

    $("#DEL_T").modal("show");
    $('.modal-body').html(`是否要刪除第 「 ${sid} 」`);
    
    $('.del-ba').click(function() {
        console.log(sid,'被按了');
        return removeItem_t(sid) 
    })
    
}

function removeItem_t(sid){

    console.log('刪了');
    location.href = `re-del-t.php?sid=${sid}`;
    window.location.href = "#tab02-re";

}
// 最愛 行程
function addToCartT_re(event) {
    const btn = $(event.currentTarget);
    const qty = '1';
    const sid = btn.attr('data-sid');
    console.log({sid, qty});
    $.get(
        're-cart-t-api.php', 
        {sid, qty}, 
        function(data){
            // showCartCount(data);
        }, 
        'json');
}
// function removeItem_t(sid){
//     // console.log('hi T');
//     $("#exampleModal").modal("show");
//     // if(confirm(`是否要刪除編號為 ${sid} 的資料？`)){
//     //     location.href = `re-del-t.php?sid=${sid}`;
//     // }
// }
function removeItem_d(sid){
    console.log('hi D');
    if(confirm(`是否要刪除編號為 ${sid} 的資料？`)){
        location.href = `re-del-d.php?sid=${sid}`;
    }
}
function removeItem_f(sid){
    console.log('hi F');
    if(confirm(`是否要刪除編號為 ${sid} 的資料？`)){
        location.href = `re-del-f.php?sid=${sid}`;
    }
}
console.log('帳號密碼','999@com/999');


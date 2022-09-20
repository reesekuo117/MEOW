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
            my_page_re.eq(2).show().siblings().hide();
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
$('.orderbtn-re').click(function(){
    $('.slide-re').slideToggle('normal');
    $('.slide2-re').slideUp('normal');
})
$('.orderbtn02-re').click(function(){
    $('.rightslide01-re').slideToggle('normal');
    $('.rightslide02-re').slideUp('normal');
})
// 給予評價
$('#evaluation-btn-re').click(function(){
    $('.slide-re').slideUp('normal');
    $('.slide2-re').slideDown('normal');
})
$('#evaluation02-btn-re').click(function(){
    $('.rightslide01-re').slideUp('normal');
    $('.rightslide02-re').slideDown('normal');
})
// 關閉所以明細
$('.ordercross-re svg').click(function(){
    $('.slide-re').slideUp('normal');
    $('.slide2-re').slideUp('normal');
})
$('.ordercross02-re').click(function(){
    $('.rightslide01-re').slideUp('normal');
    $('.rightslide02-re').slideUp('normal');
})
// 星星
$('.star-re').click(function(){
    console.log('hi',$(this).index());
    for(let i = 0; i < 5; i++ ){
        const color = ($(this).index() >= i)? '#E5A62A' : 'none';
        // let color1 ;
        // if($(this).index() >= i){
        //     color1 = yellow
        // }
        // else{
        //     color1 = none 
        // }
        $('.star-re').eq(i).css('fill',color)
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
//


// 
let districtArray = [
    ['中正區', '大同區', '中山區', '萬華區', '信義區', '松山區', '大安區', '南港區', '北投區', '內湖區', '士林區', '文山區'],
    ['板橋區', '新莊區', '泰山區', '林口區', '淡水區', '金山區', '八里區', '萬里區', '石門區', '三芝區', '瑞芳區', '汐止區', '平溪區', '貢寮區', '雙溪區', '深坑區', '石碇區', '新店區', '坪林區', '烏來區', '中和區', '永和區', '土城區', '三峽區', '樹林區', '鶯歌區', '三重區', '蘆洲區', '五股區'],
    ['仁愛區', '中正區', '信義區', '中山區', '安樂區', '暖暖區', '七堵區'],
];
$('#member_city_re').change(function () {
    const cityNumber = $(this).val();
    const districtData = districtArray[cityNumber];
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
// 會員資料欄位錯誤狀態
const msgc_member = $('#member_msgContainer');
    function genAlert3(msg3, type='danger'){
        const a = $(`
        <div class="alert alert-${type}" role="alert">
            ${msg3}
        </div>
        `);
        msgc_member.append(a);
    }
    $('#member-page-re').click(function(){
        $('.alert').remove();
    })
// 會員資料欄位檢查
function checkFormMember(){
    console.log('checkFormMember');
    let isPass = true;
    // if (!$('#member_name_re').val()) {
    //     genAlert3('請填寫正確會員資料');
    //     return;
    // }else if (!$('#member_phone_re').val()) {
    //     genAlert3('請填寫正確會員資料');
    //     return;
    // }
    if(isPass){
        $.post(
            're-member-api.php', 
            $(document.form_member_re).serialize(),
            function(data){
                console.log('checkFormMember data',data);
                if(data.success){
                    genAlert3('修改成功', 'success');
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
    }else if (!$('#newpassword_re').val() === $('#againpassword_re').val()) {
        genAlert4('請填寫正確資料');
        return;
    }else if (!$('#newpassword_re').val() != $('#oldpassword_re').val()) {
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
                    genAlert4('修改成功', 'success');
                }else{
                    genAlert4(data.error);
                }
        }, 'json');
    }
}



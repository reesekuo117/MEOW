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
// 登入視窗
let modal = document.getElementById('loginCard_re');
window.onclick = function(event) {
    
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
// 分頁切換
$(function(){
var $li = $('ul.tab-title li');
    $($li. eq(0) .addClass('active-re').find('a').attr('href')).siblings('.tab-inner').hide();

    $li.click(function(){
        $($(this).find('a'). attr ('href')).show().siblings ('.tab-inner').hide();
        $(this).addClass('active-re'). siblings ('.active-re').removeClass('active-re');
    });
});
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
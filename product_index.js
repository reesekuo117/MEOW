// DESIGN輪播牆
let nowPage = 0;

$('#next').click(function () {
    if (nowPage < 3) {
        nowPage = nowPage + 1;

    }
    else {
        // 其餘比4大的
        nowPage = 0
    }
    console.log('nowPage:', nowPage);

    // $('ul.train').css('transform', `translateX(${moveX}px)`);
    moveX(nowPage);
})

$('#prev').click(function () {
    if (nowPage > 0) {
        nowPage = nowPage - 1;
    }
    // $('ul.train').css('transform', `translateX(${moveX}px)`);
    moveX(nowPage);
})
function moveX(nowPage) {
    console.log($('.d-img-wrap').width());
    // const movement = (nowPage - $('.d-img-wrap').width());
    const movement = (0 - nowPage * $('.d-img-wrap').width());
    $('ul.train').css('transform', `translateX(${movement}px)`);
}
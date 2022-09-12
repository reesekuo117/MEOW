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

// TODO: nav不要有顏色
// 用一個我自己的 class name 只有我會吃到
// $('.navbar').

// const typeWriter = selector => {
//     const el = document.querySelector(selector)
//     const text = el.innerHTML

//         ; (function _type(i = 0) {
//             if (i === text.length) return

//             el.innerHTML =
//                 text.substring(0, i + 1) + '<span aria-hidden="true"></span>'
//             setTimeout(() => _type(i + 1), 100)
//         })()
// }
// // setTimeout(typeWriter(".js-type-writer"), 5000)

// typeWriter(".js-type-writer")

// const typeWriter2 = selector => {
//     const el = document.querySelector(selector)
//     const text = el.innerHTML

//         ; (function _type(i = 0) {
//             if (i === text.length) return

//             el.innerHTML =
//                 text.substring(0, i + 1) + '<span aria-hidden="true"></span>'
//             setTimeout(() => _type(i + 1), 100)
//         })()
// }

// setTimeout(typeWriter2(".js-type-writer2"), 1000)
// FIXME:

var typed = new Typed('.moonOldSay', {
    strings: ["我好想要去放假...", "", "最近真的太忙了..."],
    typeSpeed: 150,
    backSpeed: 100,
    loop: true,
});

var typed = new Typed('.meowSay', {
    strings: ["就交給我們吧喵！", "", "我們會替人們找到幸福的！"],
    typeSpeed: 150,
    backSpeed: 100,
    loop: true,
});


// 三貓 hover
$('.leftCat').mouseenter(function () {
    $('.leftCatImg img').attr('src', "./imgs/index/7.png");
})
$('.leftCat').mouseleave(function () {
    $('.leftCatImg img').attr('src', "./imgs/index/8.png");
})
$('.middleCat').mouseenter(function () {
    $('.middleCatImg img').attr('src', "./imgs/index/9.png");
})
$('.middleCat').mouseleave(function () {
    $('.middleCatImg img').attr('src', "./imgs/index/10.png");
})
$('.rightCat').mouseenter(function () {
    $('.rightCatImg img').attr('src', "./imgs/index/11.png");
})
$('.rightCat').mouseleave(function () {
    $('.rightCatImg img').attr('src', "./imgs/index/12.png");
})

// 卷軸
$(window).scroll(function () {
    if ($(window).scrollTop() >= ($('.leftReel').offset().top - $(window).height() * 2 / 3)) {
        $('.leftReel').css({
            transform: 'translateX(-500px) scale(1)',
        })

    }
    else {
        $('.leftReel').css({
            transform: 'translateX(-30px) scale(1)',
        })
    }

})

$(window).scroll(function () {
    if ($(window).scrollTop() >= ($('.rightReel').offset().top - $(window).height() * 2 / 3)) {
        $('.rightReel').css({
            transform: 'translateX(500px) scale(1)',
        })

    }
    else {
        $('.rightReel').css({
            transform: 'translateX(30px)scale(1)',
        })
    }

})

$(window).scroll(function () {
    if ($(window).scrollTop() >= ($('.middleReel').offset().top - $(window).height() * 2 / 3)) {
        $('.middleReel').css({
            width: '956px',
        })

    }
    else {
        $('.middleReel').css({
            width: '0px',
        })
    }

})



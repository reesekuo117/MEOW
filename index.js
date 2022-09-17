
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



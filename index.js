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

// mobile

var typed = new Typed('.moonOldSay_m', {
    strings: ["我好想要去放假...", "", "最近真的太忙了..."],
    typeSpeed: 150,
    backSpeed: 100,
    loop: true,
});

var typed = new Typed('.meowSay_m', {
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

// 三貓手機

$(window).scroll(function () {
    if ($(window).scrollTop() >= ($('.firstCat').offset().top - $(window).height() * 1 / 2)) {
        $('.firstCatImg img').attr('src', './imgs/index/7.png')

    }
    else {
        $('.firstCatImg img').attr('src', './imgs/index/8.png')
    }

})

$(window).scroll(function () {
    if ($(window).scrollTop() >= ($('.secondCat').offset().top - $(window).height() * 1 / 2)) {
        $('.secondCatImg img').attr('src', './imgs/index/9.png')

    }
    else {
        $('.secondCatImg img').attr('src', './imgs/index/10.png')
    }

})

$(window).scroll(function () {
    if ($(window).scrollTop() >= ($('.thirdCat').offset().top - $(window).height() * 1 / 2)) {
        $('.thirdCatImg img').attr('src', './imgs/index/11.png')

    }
    else {
        $('.thirdCatImg img').attr('src', './imgs/index/12.png')
    }

})

// 卷軸手機
$(window).scroll(function () {
    if ($(window).scrollTop() >= ($('.leftReelm').offset().top - $(window).height() * 2 / 3)) {
        $('.leftReelm').css({
            transform: 'translateX(-520px) scale(1)',
        })

    }
    else {
        $('.leftReelm').css({
            transform: 'translateX(-30px) scale(1)',
        })
    }

})

$(window).scroll(function () {
    if ($(window).scrollTop() >= ($('.rightReelm').offset().top - $(window).height() * 2 / 3)) {
        $('.rightReelm').css({
            transform: 'translateX(520px) scale(1)',
        })

    }
    else {
        $('.rightReelm').css({
            transform: 'translateX(30px)scale(1)',
        })
    }

})

$(window).scroll(function () {
    if ($(window).scrollTop() >= ($('.middleReelm').offset().top - $(window).height() * 2 / 3)) {
        $('.middleReelm').css({
            width: '956px',
        })

    }
    else {
        $('.middleReelm').css({
            width: '0px',
        })
    }

})
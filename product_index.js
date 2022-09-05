//  品牌聯名浮動
$(window).scroll(function () {
    // console.log('second offsetTop:', $('.second-test > .second').offset().top);
    // console.log('first scrollTop:', $('.second').scrollTop());
    if ($(window).scrollTop() >= ($('.brand_2').offset().top - $(window).height() * 2 / 3)) {
        $('.brand_2').css({
            transform: 'translateY(0px)',
            opacity: 1,
        })

    }
    else {
        $('.brand_2').css({
            transform: 'translateY(100px)',
            opacity: 0,
        })
    }

})
$(window).scroll(function () {
    // console.log('second offsetTop:', $('.second-test > .second').offset().top);
    // console.log('first scrollTop:', $('.second').scrollTop());
    if ($(window).scrollTop() >= ($('.brand_3').offset().top - $(window).height() * 1 / 2)) {
        $('.brand_3').css({
            transform: 'translateY(0px)',
            opacity: 1,
        })

    }
    else {
        $('.brand_3').css({
            transform: 'translateY(100px)',
            opacity: 0,
        })
    }

})
//  文創商品浮動
$(window).scroll(function () {
    // console.log('second offsetTop:', $('.second-test > .second').offset().top);
    // console.log('first scrollTop:', $('.second').scrollTop());
    if ($(window).scrollTop() >= ($('.young_1').offset().top - $(window).height() * 2 / 5)) {
        $('.young_1').css({
            transform: 'translateY(0px)',
            opacity: 1,
        })

    }
    else {
        $('.young_1').css({
            transform: 'translateY(100px)',
            opacity: 0,
        })
    }

})
$(window).scroll(function () {
    // console.log('second offsetTop:', $('.second-test > .second').offset().top);
    // console.log('first scrollTop:', $('.second').scrollTop());
    if ($(window).scrollTop() >= ($('.young_2').offset().top - $(window).height() * 4 / 5)) {
        $('.young_2').css({
            transform: 'translateY(0px)',
            opacity: 1,
        })

    }
    else {
        $('.young_2').css({
            transform: 'translateY(100px)',
            opacity: 0,
        })
    }

})
$(window).scroll(function () {
    // console.log('second offsetTop:', $('.second-test > .second').offset().top);
    // console.log('first scrollTop:', $('.second').scrollTop());
    if ($(window).scrollTop() >= ($('.young_3').offset().top - $(window).height() * 3 / 5)) {
        $('.young_3').css({
            transform: 'translateY(0px)',
            opacity: 1,
        })

    }
    else {
        $('.young_3').css({
            transform: 'translateY(100px)',
            opacity: 0,
        })
    }

})
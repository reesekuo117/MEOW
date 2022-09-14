// $('.backto').mouseenter(function () {
//     $(this).find('svg').attr('fill','white')
// })
// $('.backto').mouseenter(function () {
//     $(this).find('svg').attr('fill','#432A0F')
// })


$('.drawSection02LeftCat').mouseenter(function () {
    $('.secretSection02LeftCat').css({
        transform: 'translate(-50%, -50%) scale(1)'
    });
})
$('.drawSection02LeftCat').mouseleave(function () {
    $('.secretSection02LeftCat').css({
        transform: 'translate(-50%, -50%) scale(0)'
    });
})

$('.drawSection02MidCat').mouseenter(function () {
    $('.secretSection02MidCat').css({
        transform: 'translate(-50%, -50%) scale(1)'
    });
})
$('.drawSection02MidCat').mouseleave(function () {
    $('.secretSection02MidCat').css({
        transform: 'translate(-50%, -50%) scale(0)'
    });
})

$('.drawSection02RightCat').mouseenter(function () {
    $('.secretSection02RightCat').css({
        transform: 'translate(-50%, -50%) scale(1)'
    });
})
$('.drawSection02RightCat').mouseleave(function () {
    $('.secretSection02RightCat').css({
        transform: 'translate(-50%, -50%) scale(0)'
    });
})

// ------------------- draw03 -------------------------

$('.temple01').mouseenter(function () {
    $('.temple01Img img').attr('src', '../imgs/draw/temple01-1.png');
})
$('.temple01').mouseleave(function () {
    $('.temple01Img img').attr('src', '../imgs/draw/temple01.png');
})

$('.temple02').mouseenter(function () {
    $('.temple02Img img').attr('src', '../imgs/draw/temple02-1.png');
})
$('.temple02').mouseleave(function () {
    $('.temple02Img img').attr('src', '../imgs/draw/temple02.png');
})

$('.temple03').mouseenter(function () {
    $('.temple03Img img').attr('src', '../imgs/draw/temple05-1.png');
})
$('.temple03').mouseleave(function () {
    $('.temple03Img img').attr('src', '../imgs/draw/temple05.png');
})

$('.temple04').mouseenter(function () {
    $('.temple04Img img').attr('src', '../imgs/draw/temple06-1.png');
})
$('.temple04').mouseleave(function () {
    $('.temple04Img img').attr('src', '../imgs/draw/temple06.png');
})

$('.temple05').mouseenter(function () {
    $('.temple05Img img').attr('src', '../imgs/draw/temple03-1.png');
})
$('.temple05').mouseleave(function () {
    $('.temple05Img img').attr('src', '../imgs/draw/temple03.png');
})

// ------------------- draw03 -------------------------

// $('body')

// $("body").addEventListener('mousemove', eyeball);
// function eyeball(event) {
//     // console.log(1)
//     const eye = $(".eye_ba");
//     eye.forEach(function (eye) {
//         let x = (eye.getBoundingclientRect().left + eye.clientWidth / 2);
//         let y = (eye.getBoundingclientRect().top + eye.clientHeight / 2);
//         let radian = Math.atan2(event.pageX - x, event.pageY - y);
//         let rot = (radian * (180 / Math.PI) * -1) + 270;
//         eye.style.transform = "rotate(" + rot + "deg)";
//     })
// }


// 'use strict';
var eyes = $('.eye');

$(window).on('mousemove', function(event){
    // document.querySelector('.drawSection07Img').getBoundingClientRect()
    eyes.each(function(){
        const rect = this.getBoundingClientRect();
        var dx = event.pageX - rect.x;
        var dy = event.pageY - rect.y;



        // var dx = event.pageX -405- $(this).position().left;
        // var dy = event.pageY -350- $(this).position().top;

        var ang = Math.atan2(dy, dx)/Math.PI*180; // degree

        $(this).css('transform', 'rotate('+ang+'deg)');
    });
});

// 年紀

$('.howOldbtn').click(function () {
    $(this).toggleClass('howOldbtnToggle')
})


// 貓翻牌
$('.drawSection09 img').mouseenter(function () {
    $(this).css('animation', 'flip .3s forwards');
})
$('.drawSection09 img').mouseleave(function () {
    $(this).css('animation', 'flip_back .3s forwards');
})

$('.drawSection10 img').mouseenter(function () {
    $(this).css('animation', 'flip .3s forwards');
})
$('.drawSection10 img').mouseleave(function () {
    $(this).css('animation', 'flip_back .3s forwards');
})

$('.drawSection11 img').mouseenter(function () {
    $(this).css('animation', 'flip .3s forwards');
})
$('.drawSection11 img').mouseleave(function () {
    $(this).css('animation', 'flip_back .3s forwards');
})

$('.drawSection12 .lionCat img').mouseenter(function () {
    $(this).css('animation', 'flip .3s forwards');
})
$('.drawSection12 .lionCat img').mouseleave(function () {
    $(this).css('animation', 'flip_back .3s forwards');
})

$('.drawSection12 .horobtn').mouseenter(function () {
    $(this).find("img").css('animation', 'flip_horo .3s forwards');
})
$('.drawSection12 .horobtn').mouseleave(function () {
    $(this).find("img").css('animation', 'flip_horo_back .3s forwards');
})

// 興趣

$('.interestbtn').click(function () {
    $(this).toggleClass('interestbtnToggle')
})

// 個性

$('.personalitybtn').click(function () {
    $(this).toggleClass('personalitybtnToggle')
})

// 星座

$('.horobtn').click(function () {
    $(this).toggleClass('horobtnToggle')
})

// 身高

$('.heightbtn').click(function () {
    $(this).toggleClass('heightbtnToggle')
})

// 體格

$('.musclebtn').click(function () {
    $(this).toggleClass('musclebtnToggle')
})

// 臉

$('.facebtn').click(function () {
    $(this).toggleClass('facebtnToggle')
})
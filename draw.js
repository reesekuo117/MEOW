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
    $('.temple01Img img').attr('src', './imgs/draw/temple01-1.png');
})
$('.temple01').mouseleave(function () {
    $('.temple01Img img').attr('src', './imgs/draw/temple01.png');
})

$('.temple02').mouseenter(function () {
    $('.temple02Img img').attr('src', './imgs/draw/temple02-1.png');
})
$('.temple02').mouseleave(function () {
    $('.temple02Img img').attr('src', './imgs/draw/temple02.png');
})

$('.temple03').mouseenter(function () {
    $('.temple03Img img').attr('src', './imgs/draw/temple05-1.png');
})
$('.temple03').mouseleave(function () {
    $('.temple03Img img').attr('src', './imgs/draw/temple05.png');
})

$('.temple04').mouseenter(function () {
    $('.temple04Img img').attr('src', './imgs/draw/temple06-1.png');
})
$('.temple04').mouseleave(function () {
    $('.temple04Img img').attr('src', './imgs/draw/temple06.png');
})

$('.temple05').mouseenter(function () {
    $('.temple05Img img').attr('src', './imgs/draw/temple03-1.png');
})
$('.temple05').mouseleave(function () {
    $('.temple05Img img').attr('src', './imgs/draw/temple03.png');
})

$('.drawdraw').mouseenter(function () {
    $(this).find('img').attr('src', './imgs/draw/53-hover.png');
})
$('.drawdraw').mouseleave(function () {
    $(this).find('img').attr('src', './imgs/draw/53.png');
})

// ------------------- draw07 -------------------------

// 眼睛跟著游標
// 'use strict';
var eyes = $('.eye');

$(window).on('mousemove', function (event) {
    // document.querySelector('.drawSection07Img').getBoundingClientRect()
    eyes.each(function () {
        const rect = this.getBoundingClientRect();
        var dx = event.pageX - rect.x;
        var dy = event.pageY - rect.y;



        // var dx = event.pageX -405- $(this).position().left;
        // var dy = event.pageY -350- $(this).position().top;

        var ang = Math.atan2(dy, dx) / Math.PI * 180; // degree

        $(this).css('transform', 'rotate(' + ang + 'deg)');
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

// 條件

$('.wantbtn').click(function () {
    $(this).toggleClass('drawbtnToggle')
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
    $(this).toggleClass('drawbtnToggle')
})

// 體格

$('.musclebtn').click(function () {
    $(this).toggleClass('musclebtnToggle')
})

// 臉

$('.facebtn').click(function () {
    $(this).toggleClass('facebtnToggle')
})

// 超過五個

$('.wantbtn').click(function () {
    if ($('.drawbtnToggle').length > 5) {
        alert('超過五項囉喵')
        // console.log(this);
        this.click(); // 模擬再點擊一次，讓他變白
    }
})

$('.interestbtn').click(function () {
    if ($('.interestbtnToggle').length > 5) {
        alert('超過五項囉喵')
        this.click(); // 模擬再點擊一次，讓他變白
    }
})

$('.facebtn').click(function () {
    if ($('.facebtnToggle').length > 5) {
        alert('超過五項囉喵')
        this.click(); // 模擬再點擊一次，讓他變白
    }
})

$('.musclebtn').click(function () {
    if ($('.musclebtnToggle').length > 5) {
        alert('超過五項囉喵')
        this.click(); // 模擬再點擊一次，讓他變白
    }
})

$('.personalitybtn').click(function () {
    if ($('.personalitybtnToggle').length > 5) {
        alert('超過五項囉喵')
        this.click(); // 模擬再點擊一次，讓他變白
    }
})

$('.horobtn').click(function () {
    if ($('.horobtnToggle').length > 5) {
        alert('超過五項囉喵')
        this.click(); // 模擬再點擊一次，讓他變白
    }
})

// 貓掌
$('.drawdraw').click(function () {
    // console.log($(this).css('left'));
    // const drawtoleft = $(this).css('left');
    const drawtoleft = $(this).css('left');
    $('.catPaw').css({
        left: drawtoleft,
        animation: 'catPaw 2.5s ease-in-out'
    })
    setTimeout(() => {
        console.log($(this).css('transform'));
        const drawtransform = $(this).css('transform')
        console.log(this);
        $(this).css({
            transform: drawtransform,
            animation: 'drawUp 1.4s ease-in forwards'
        })
    }, 1125);
    setTimeout(() => {
        window.location.href = "draw19.php"
    }, 3000);
    // console.log($('.catPaw').offsetTop);
})


// 沒按不能下一步
$('.wantbtn').click(function () {
    if ($('.drawbtnToggle').length >= 1) {
        // console.log('hi');
        $('.btn_md_next').removeClass('btn_disabled_ba')
        $('.btn_md_next a').attr('href', 'draw08.php')

    } else if ($('.drawbtnToggle').length < 1) {
        // console.log('no');
        // $('.btn_md_next').attr('disabled', true)
        $('.btn_md_next').addClass('btn_disabled_ba')
        $('.btn_md_next a').attr('href', '#')

    }
})

$('.facebtn').click(function () {
    if ($('.drawbtnToggle').length >= 1 &&
        $('.musclebtnToggle').length >= 1 &&
        $('.facebtnToggle').length >= 1) {
        // console.log('hi');
        $('.btn_md_next').removeClass('btn_disabled_ba')
        $('.btn_md_next a').attr('href', 'draw09.php')

    } else if ($('.drawbtnToggle').length < 1 ||
        $('.musclebtnToggle').length < 1 ||
        $('.facebtnToggle').length < 1) {
        // console.log('no');
        // $('.btn_md_next').attr('disabled', true)
        $('.btn_md_next').addClass('btn_disabled_ba')
        $('.btn_md_next a').attr('href', '#')

    }
})

$('.musclebtn').click(function () {
    if ($('.drawbtnToggle').length >= 1 &&
        $('.musclebtnToggle').length >= 1 &&
        $('.facebtnToggle').length >= 1) {
        // console.log('hi');
        $('.btn_md_next').removeClass('btn_disabled_ba')
        $('.btn_md_next a').attr('href', 'draw09.php')

    } else if ($('.drawbtnToggle').length < 1 ||
        $('.musclebtnToggle').length < 1 ||
        $('.facebtnToggle').length < 1) {
        // console.log('no');
        // $('.btn_md_next').attr('disabled', true)
        $('.btn_md_next').addClass('btn_disabled_ba')
        $('.btn_md_next a').attr('href', '#')

    }
})

$('.heightbtn').click(function () {
    if ($('.drawbtnToggle').length >= 1 &&
        $('.musclebtnToggle').length >= 1 &&
        $('.facebtnToggle').length >= 1) {
        // console.log('hi');
        $('.btn_md_next').removeClass('btn_disabled_ba')
        $('.btn_md_next a').attr('href', 'draw09.php')

    } else if ($('.drawbtnToggle').length < 1 ||
        $('.musclebtnToggle').length < 1 ||
        $('.facebtnToggle').length < 1) {
        // console.log('no');
        // $('.btn_md_next').attr('disabled', true)
        $('.btn_md_next').addClass('btn_disabled_ba')
        $('.btn_md_next a').attr('href', '#')

    }
})

$('.howOldbtn').click(function () {
    if ($('.howOldbtnToggle').length >= 1) {
        // console.log('hi');
        $('.btn_md_next').removeClass('btn_disabled_ba')
        $('.btn_md_next a').attr('href', 'draw10.php')

    } else if ($('.howOldbtnToggle').length < 1) {
        // console.log('no');
        // $('.btn_md_next').attr('disabled', true)
        $('.btn_md_next').addClass('btn_disabled_ba')
        $('.btn_md_next a').attr('href', '#')

    }
})

$('.interestbtn').click(function () {
    if ($('.interestbtnToggle').length >= 1) {
        // console.log('hi');
        $('.btn_md_next').removeClass('btn_disabled_ba')
        $('.btn_md_next a').attr('href', 'draw11.php')

    } else if ($('.interestbtnToggle').length < 1) {
        // console.log('no');
        // $('.btn_md_next').attr('disabled', true)
        $('.btn_md_next').addClass('btn_disabled_ba')
        $('.btn_md_next a').attr('href', '#')

    }
})

$('.personalitybtn').click(function () {
    if ($('.personalitybtnToggle').length >= 1) {
        // console.log('hi');
        $('.btn_md_next').removeClass('btn_disabled_ba')
        $('.btn_md_next a').attr('href', 'draw12.php')

    } else if ($('.personalitybtnToggle').length < 1) {
        // console.log('no');
        // $('.btn_md_next').attr('disabled', true)
        $('.btn_md_next').addClass('btn_disabled_ba')
        $('.btn_md_next a').attr('href', '#')

    }
})

$('.horobtn').click(function () {
    if ($('.horobtnToggle').length >= 1) {
        // console.log('hi');
        $('.btn_md_next').removeClass('btn_disabled_ba')
        $('.btn_md_next a').attr('href', 'draw15.php')

    } else if ($('.horobtnToggle').length < 1) {
        // console.log('no');
        // $('.btn_md_next').attr('disabled', true)
        $('.btn_md_next').addClass('btn_disabled_ba')
        $('.btn_md_next a').attr('href', '#')

    }
})


// clearAll 清除
$('.clearAll_ba').click(function () {
    $('.wantbtn').removeClass('drawbtnToggle')
})


// 搖籤
var windowWidth = window.innerWidth;
// console.log(windowWidth);


let prevStat = ''; // '', 'left', 'right'
// 過去狀態
let drawcounter = 0;
// 搖動次數

// const handler = (e) => {
//     //let drawcounter = 0
//     // $('#info').php(e.offsetX) //游標在瀏覽器的 X軸

//     let currentStat; //當前狀態
//     if (e.offsetX > windowWidth) {
//         currentStat = 'right';
//         $('.drawImgWrap img').attr('src', './imgs/draw/draw-r.png')
//         if (prevStat === 'left') {
//             drawcounter++;
//         }
//         prevStat = currentStat;
//     } else if (e.offsetX < windowWidth) {
//         currentStat = 'left';
//         $('.drawImgWrap img').attr('src', './imgs/draw/draw-l.png')
//         if (prevStat === 'right') {
//             drawcounter++;
//         }
//         prevStat = currentStat;
//         // 讓前一狀態等於當前狀態
//     }
//     // console.log({drawcounter});
//     if (drawcounter > 10) {
//         // console.log('next');
//         window.location.href = "draw18.php"
//     }
// }


// $('body').click(function () {
//     const rect = this.getBoundingClientRect();
//     console.log(rect);
// })

/*
window.addEventListener('mousedown', function(){
    window.addEventListener('mousemove', handler);
})
window.addEventListener('mouseup', function(){
    window.removeEventListener('mousemove', handler);
})
*/

// 按了會把 nav 關掉

// $('.navoff_ba').click(function () {
//     console.log('navoff_ba');
//     $('body').addClass('d-none-ba')
// })

$('.navoff_ba').parentsUntil('body').addClass('d-none-ba')

// FIXME: 籤筒會超過範圍
let dragDiv = document.querySelector('.drag');
let dragTitle = document.querySelector('.drag-title') || dragDiv;
let dropArea = document.querySelector('.drop-area');
// console.log(dropArea);
// console.log(dropArea.offsetLeft);
let area;
if (dropArea) {
    area = {
        left: dropArea.offsetLeft,
        right: dropArea.offsetLeft + dropArea.offsetWidth - dragDiv.offsetWidth,
        top: dropArea.offsetTop,
        bottom: dropArea.offsetTop + dropArea.offsetHeight - dragDiv.offsetHeight,
    };
    area.middle = (area.left + area.right) / 2;

    let startX = 0;
    let startY = 0;

    dragTitle.addEventListener('mousedown', dragStart);

    function dragStart(e) {
        e.preventDefault();
        //記錄點擊相對被點擊物件的座標
        startX = e.clientX - dragDiv.offsetLeft;
        startY = e.clientY - dragDiv.offsetTop;
        document.addEventListener('mousemove', move);
        document.addEventListener('mouseup', stop);
    }

    function move(e) {
        //計算出拖曳物件最左上角座標
        x = e.clientX - startX;
        y = e.clientY - startY;
        // console.log('x1: ', x);
        x = Math.max(Math.min(x, area.right), area.left);
        y = Math.max(Math.min(y, area.bottom), area.top);
        // console.log('area.left: ', area.left);
        // console.log('Math.min(x, area.right): ', Math.min(x, area.right));
        // console.log('x2: ', x);
        dragDiv.style.left = x + 'px';
        dragDiv.style.top = y + 'px';
        // console.log({x, y, area});

        let currentStat; //當前狀態
        if (x > area.middle) {
            currentStat = 'right';
            // TODO: 做六張圖隨機
            $('.drawImgWrap img').attr('src', './imgs/draw/draw-r.png')
            if (prevStat === 'left') {
                drawcounter++;
            }
            prevStat = currentStat;
        } else if (x <= area.middle) {
            currentStat = 'left';
            // TODO: 做六張圖隨機
            $('.drawImgWrap img').attr('src', './imgs/draw/draw-l.png')
            if (prevStat === 'right') {
                drawcounter++;
            }
            prevStat = currentStat;
            // 讓前一狀態等於當前狀態
        }
        if (drawcounter > 8) {
            // console.log('next');
            window.location.href = "draw18.php"
        }

    }

    function stop() {
        document.removeEventListener('mousemove', move);
        document.removeEventListener('mouseup', stop)
    }

}

$(window).scroll(function () {
    if ($(window).scrollTop() >= ($('.jadeSay').offset().top - $(window).height() * 3 / 4)) {
        $('.jadeSay').css({
            width: '700px',
        })

    }
    else {
        $('.jadeSay').css({
            width: '0px',
        })
    }

})
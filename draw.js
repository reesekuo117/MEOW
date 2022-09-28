// $('.backto').mouseenter(function () {
//     $(this).find('svg').attr('fill','white')
// })
// $('.backto').mouseenter(function () {
//     $(this).find('svg').attr('fill','#432A0F')
// })

// 音樂

window.onload = function () {
    // var bgm_text=document.queryselector('.bgm_text');
    var bgm_btn_play = document.querySelector('.bgm_btn_play');
    var bgm_btn_stop = document.querySelector('.bgm_btn_stop');
    var bgm = document.getElementById('bgm');
    //播放暂停
    bgm_btn_play.onclick = function () {
        bgm.play();
    }
    bgm_btn_stop.onclick = function () {
        bgm.pause();
    }

    $('.musicSwitch').click(function () {
        return bgm.paused ? bgm.play() : bgm.pause();
    })
    

    if (localStorage.getItem('bgm_gds') != null) {
        bgm.setAttribute('value', localstorage.getItem('bgm_gds'))
        // bgm.setAttribute('value',localstorage.getItem('bgm_gds'));
        bgm.innerHTML = ' <source src="bgm/' + localStorage.getItem('bgm_gds') + '.mp3" type="audio/mpeg">';
        // bgm_text.innerHTML='当前播放第'+localStorage.getItem('bgm_gds')+'首歌曲';
    } else {
        bgm.setAttribute('value', 1);
        bgm.innerHTML = '<source src="/MEOW/music/Kawaii.mp3" type="audio/mpeg">';
        // bgm_text.innerHTML='当前播放第1首歌曲';
    }

    setTimeout(function () {
        if (localStorage.getItem('bgm_time') != null) {
            bgm.currentTime = localStorage.getItem('bgm_time');
            bgm.play();
            // 音量逐漸變大
            bgm.volume = 0;
            v = 0;
            var t = setInterval(function () {
                v += 0.005;
                if (v <= 1) {
                    bgm.volume = v;
                } else {
                    clearInterval(t);
                }
            }, 25);
        }

        // 每 100ms 週期執行播放進度紀錄
        window.setInterval(function () {
            // 檢查瀏覽器是否支援 localStorage
            if (typeof (Storage) !== 'undefined') {
                localStorage.setItem('bgm_time', bgm.currentTime);
            } else {
                var doc_body = document.querySelector('body');
                doc_body.innerHTML = "抱歉瀏覽器過舊"
            }
        }, 100);
        // 初始化後就啟動 bgm
        bgm.play();
        bgm.volume = 0;
        v = 0;
        var t = setInterval(function () {
            v += 0.005;
            if (v <= 1) {
                bgm.volume = v;
            } else {
                clearInterval(t);
            }
        }, 25)
    }, 1000)

}

// function playAudio() {
//     console.log('music');
//     const audio = document.createElement("audio");
//     audio.src = "/MEOW/music/Kawaii.mp3";
//     audio.play();
// }

// function setCookie(music, value, exdays) {
//     var exdate = new Date();
//     exdate.setDate(exdate.getDate() + exdays);
//     var c_value = escape(value) +
//         ((exdays == null) ? "" : "; expires=" + exdate.toUTCString());
//     document.cookie = music + "=" + c_value;
// }

// function getCookie(music) {
//     var i, x, y, ARRcookies = document.cookie.split(";");
//     for (i = 0; i < ARRcookies.length; i++) {
//         x = ARRcookies[i].substr(0, ARRcookies[i].indexOf("="));
//         y = ARRcookies[i].substr(ARRcookies[i].indexOf("=") + 1);
//         x = x.replace(/^\s+|\s+$/g, "");
//         if (x == music) {
//             return unescape(y);
//         }
//     }
// }

// var song = document.getElementsByTagName('audio')[0];
// var played = false;
// var tillPlayed = getCookie('timePlayed');
// function update() {
//     if (!played) {
//         if (tillPlayed) {
//             song.currentTime = tillPlayed;
//             song.play();
//             played = true;
//         }
//         else {
//             song.play();
//             played = true;
//         }
//     }

//     else {
//         setCookie('timePlayed', song.currentTime);
//     }
// }
// setInterval(update, 1000);

// 下一頁
$(".drawSection02").hide();
$(".drawSection03").hide();
$(".drawSection04").hide();
$(".drawSection05").hide();
$(".drawSection06").hide();
$(".drawSection07").hide();
$(".drawSection08").hide();
$(".drawSection09").hide();
$(".drawSection10").hide();
$(".drawSection11").hide();
$(".drawSection12").hide();
$(".drawSection15").hide();
$(".drawSection16").hide();
$(".drawSection17").hide();
$(".drawSection18").hide();
$(".drawSection19").hide();
$(".drawSection20").hide();
$(".drawSection21").hide();
$(".drawSection22").hide();
$(".drawSection23").hide();

$(".musicOn").click(function () {
    $(".drawSection02").show().siblings().hide();
})

$(".musicOff").click(function () {
    $(".drawSection02").show().siblings().hide();
})

$(".toTemple").click(function () {
    $(".drawSection03").show().siblings().hide();
})

$("#backtodraw01").click(function () {
    $(".drawSection01").show().siblings().hide();
})

$("#backtodraw03").click(function () {
    $(".drawSection03").show().siblings().hide();
    $('.body_draw01').css('background','url(./imgs/draw/drawbg.png)');
    $('.navbar_ba').show();
})

$(".templeSelect").click(function () {
    $(".drawSection04").show().siblings().hide();
    $('.body_draw01').css('background','url(./imgs/draw/drawbgblack.png)');
    $('.navbar_ba').hide();
})

$("#backtodraw04").click(function () {
    $(".drawSection04").show().siblings().hide();
})

$(".drawSection04 .btn-xl").click(function () {
    $(".drawSection05").show().siblings().hide();
})

$(".drawSection05 .btn-xl").click(function () {
    $(".drawSection06").show().siblings().hide();
    $('.body_draw01').css('background','url(./imgs/draw/drawbg.png)');
    $('.navbar_ba').show();
})

$(".toWant").click(function () {
    $(".drawSection07").show().siblings().hide();
})

// $(".toBody").click(function () {
//     $(".drawSection08").show().siblings().hide();
// })


$("#backtodraw07").click(function () {
    $(".drawSection07").show().siblings().hide();
})

$(".toHowold").click(function () {
    $(".drawSection09").show().siblings().hide();
})

$("#backtodraw08").click(function () {
    $(".drawSection08").show().siblings().hide();
})

$("#backtodraw09").click(function () {
    $(".drawSection09").show().siblings().hide();
})









// 貓翻牌

$(".drawSection02LeftCat").mouseenter(function () {
    $(".secretSection02LeftCat").css({
        transform: "translate(-50%, -50%) scale(1)",
    });
});
$(".drawSection02LeftCat").mouseleave(function () {
    $(".secretSection02LeftCat").css({
        transform: "translate(-50%, -50%) scale(0)",
    });
});

$(".drawSection02MidCat").mouseenter(function () {
    $(".secretSection02MidCat").css({
        transform: "translate(-50%, -50%) scale(1)",
    });
});
$(".drawSection02MidCat").mouseleave(function () {
    $(".secretSection02MidCat").css({
        transform: "translate(-50%, -50%) scale(0)",
    });
});

$(".drawSection02RightCat").mouseenter(function () {
    $(".secretSection02RightCat").css({
        transform: "translate(-50%, -50%) scale(1)",
    });
});

$(".drawSection02RightCat").mouseleave(function () {
    $(".secretSection02RightCat").css({
        transform: "translate(-50%, -50%) scale(0)",
    });
});

// ------------------- draw03 -------------------------

$(".temple01").mouseenter(function () {
    $(".temple01Img img").attr("src", "./imgs/draw/temple01-1.png");
});
$(".temple01").mouseleave(function () {
    $(".temple01Img img").attr("src", "./imgs/draw/temple01.png");
});

$(".temple02").mouseenter(function () {
    $(".temple02Img img").attr("src", "./imgs/draw/temple02-1.png");
});
$(".temple02").mouseleave(function () {
    $(".temple02Img img").attr("src", "./imgs/draw/temple02.png");
});

$(".temple03").mouseenter(function () {
    $(".temple03Img img").attr("src", "./imgs/draw/temple05-1.png");
});
$(".temple03").mouseleave(function () {
    $(".temple03Img img").attr("src", "./imgs/draw/temple05.png");
});

$(".temple04").mouseenter(function () {
    $(".temple04Img img").attr("src", "./imgs/draw/temple06-1.png");
});
$(".temple04").mouseleave(function () {
    $(".temple04Img img").attr("src", "./imgs/draw/temple06.png");
});

$(".temple05").mouseenter(function () {
    $(".temple05Img img").attr("src", "./imgs/draw/temple03-1.png");
});
$(".temple05").mouseleave(function () {
    $(".temple05Img img").attr("src", "./imgs/draw/temple03.png");
});

$(".drawdraw").mouseenter(function () {
    $(this).find("img").attr("src", "./imgs/draw/53-hover.png");
});
$(".drawdraw").mouseleave(function () {
    $(this).find("img").attr("src", "./imgs/draw/53.png");
});

// ------------------- draw07 -------------------------

// 眼睛跟著游標
// 'use strict';
var eyes = $(".eye");

$(window).on("mousemove", function (event) {
    // document.querySelector('.drawSection07Img').getBoundingClientRect()
    eyes.each(function () {
        const rect = this.getBoundingClientRect();
        var dx = event.pageX - rect.x;
        var dy = event.pageY - rect.y;

        // var dx = event.pageX -405- $(this).position().left;
        // var dy = event.pageY -350- $(this).position().top;

        var ang = (Math.atan2(dy, dx) / Math.PI) * 180; // degree

        $(this).css("transform", "rotate(" + ang + "deg)");
    });
});

// 年紀

$(".howOldbtn").click(function () {
    $(this).toggleClass("howOldbtnToggle");
});

// 貓翻牌
$(".drawSection09 img").mouseenter(function () {
    $(this).css("animation", "flip .3s forwards");
});
$(".drawSection09 img").mouseleave(function () {
    $(this).css("animation", "flip_back .3s forwards");
});

$(".drawSection10 img").mouseenter(function () {
    $(this).css("animation", "flip .3s forwards");
});
$(".drawSection10 img").mouseleave(function () {
    $(this).css("animation", "flip_back .3s forwards");
});

$(".drawSection11 img").mouseenter(function () {
    $(this).css("animation", "flip .3s forwards");
});
$(".drawSection11 img").mouseleave(function () {
    $(this).css("animation", "flip_back .3s forwards");
});

$(".drawSection12 .lionCat img").mouseenter(function () {
    $(this).css("animation", "flip .3s forwards");
});
$(".drawSection12 .lionCat img").mouseleave(function () {
    $(this).css("animation", "flip_back .3s forwards");
});

$(".drawSection12 .horobtn").mouseenter(function () {
    $(this).find("img").css("animation", "flip_horo .3s forwards");
});
$(".drawSection12 .horobtn").mouseleave(function () {
    $(this).find("img").css("animation", "flip_horo_back .3s forwards");
});

// 回到上一步
// const cacheData = localStorage.getItem('my-key');

// if(cacheData){
//     const cacheObj = JSON.parse(cacheData);
//     document.section07.want01.value = cacheObj.want01
// }

// function savedata() {
//     const Arr1 = [
//         document.section07.want01.value
//     ]

// }

// localStorage.setItem('my-key',JSON.stringify(obj))

// location.href = "draw08.php"

// $('.wantbtn').click(function () {
// console.log($(this).value());

// })

// 先把選項存成整列，在轉 Json放入 cookie
// 存入 存成陣列 》轉 Json 〉放入cookies
// 讀取 抓 cookies 》json 轉 陣列

// $('.wantbtn').click(function(){
//     $(this).attr('data-value', 'want01');
// })

// const btnactive = $('.wantbtn').attr('data-value').val();
// console.log(btnactive)

// function savedata(event) {
//     const btn = $(event.currentTarget);
//     // const qty = btn.closest('.card-body').find('select').val();
//     // const sid = btn.attr('data-sid');

//     // console.log({
//     //     sid,
//     //     qty
//     // });

//     $.get(
//         'ba-cart.php',
//         {btnactive},
//         function(data){
//             console.log(data);
//             // showCartCount(data);
//         },
//         'json');
// }

// const btnSelected =[]

// function savedata(event){
//     btnSelected.push($(this));
//     console.log(btnSelected);
// }

// 條件

$(".wantbtn").click(function () {
    $(this).toggleClass("drawbtnToggle");
    const wantArray = [];

    $(".drawbtnToggle h2").each((index, item) => {
        wantArray.push($(item).text());
    });

    localStorage.setItem("wantArray", wantArray);
});

$(".wantbtn").click(function () {
    if ($(".drawbtnToggle").length >= 1) {

        $(".toBody").removeClass("btn_disabled_ba");
        $(".toBody").click(function () {
            $(".drawSection08").show().siblings().hide();
        })

    } else if ($(".drawbtnToggle").length < 1) {

        $(".toBody").addClass("btn_disabled_ba");
    }
});

// function checkWantArray() {
//     const wantArray = localStorage.getItem('wantArray');
//     $('.wantbtn').each(function (index, item) {
//         if (wantArray.includes($(item).text().trim())) {
//             $(item).addClass('drawbtnToggle');
//             $(".btn_md_next").removeClass("btn_disabled_ba");
//             $(".btn_md_next a").attr("href", "draw08.php");
//         }
//     })
// }

// checkWantArray();

// $('.wantbtn').click(function () {
//     $(this).toggleClass('drawbtnToggle')
// })

// const wantArray = [];

// $('#backtodraw07').click(function () {

//     if(wantArray.length < 1){
//         $('.wantbtn').click(function () {
//             $(this).toggleClass('drawbtnToggle')
//             const wantArray = [];

//             $('.drawbtnToggle h2').each((index,item)=>{
//             wantArray.push($(item).text())
//             });

//             localStorage.setItem('wantArray', wantArray);
//         })
//     }else{
//         localStorage.getItem('wantArray')
//         // 有這個陣列的選項都會變黃色
//         $('.clearAll_ba').click(function () {
//             localStorage.removeItem('wantArray');
//         })
//     }

// // })

// if($('.wantbtn').find('h2'))

// 取陣列每一個值

// const wantSelected

// for (i=0 ; i<wantArray.length; i++) {
//     console.log(wantArray[i]);
//     let wantSelected = wantArray[i];
//     return ;
// }

// 興趣

$(".interestbtn").click(function () {
    $(this).toggleClass("interestbtnToggle");
});

// 個性

$(".personalitybtn").click(function () {
    $(this).toggleClass("personalitybtnToggle");
});

// 星座

$(".horobtn").click(function () {
    $(this).toggleClass("horobtnToggle");
});

// 身高

$(".heightbtn").click(function () {
    $(this).toggleClass("drawbtnToggle");
});

// 體格

$(".musclebtn").click(function () {
    $(this).toggleClass("musclebtnToggle");
});

// 臉

$(".facebtn").click(function () {
    $(this).toggleClass("facebtnToggle");
});

// 超過五個

$(".wantbtn").click(function () {
    if ($(".drawbtnToggle").length > 5) {
        $("#exampleModal").modal("show");
        // $('.notlogin').css('display','block')
        // alert('超過五項囉喵')
        // console.log(this);
        this.click(); // 模擬再點擊一次，讓他變白
    }
});

$(".interestbtn").click(function () {
    if ($(".interestbtnToggle").length > 5) {
        $("#exampleModal").modal("show");
        // alert("超過五項囉喵");
        this.click(); // 模擬再點擊一次，讓他變白
    }
});

$(".facebtn").click(function () {
    if ($(".facebtnToggle").length > 5) {
        $("#exampleModal").modal("show");
        // alert("超過五項囉喵");
        this.click(); // 模擬再點擊一次，讓他變白
    }
});

$(".musclebtn").click(function () {
    if ($(".musclebtnToggle").length > 5) {
        $("#exampleModal").modal("show");
        // alert("超過五項囉喵");
        this.click(); // 模擬再點擊一次，讓他變白
    }
});

$(".personalitybtn").click(function () {
    if ($(".personalitybtnToggle").length > 5) {
        $("#exampleModal").modal("show");
        // alert("超過五項囉喵");
        this.click(); // 模擬再點擊一次，讓他變白
    }
});

$(".horobtn").click(function () {
    if ($(".horobtnToggle").length > 5) {
        $("#exampleModal").modal("show");
        // alert("超過五項囉喵");
        this.click(); // 模擬再點擊一次，讓他變白
    }
});

// 貓掌
$(".drawdraw").click(function () {
    // console.log($(this).css('left'));
    // const drawtoleft = $(this).css('left');
    const drawtoleft = $(this).css("left");
    $(".catPaw").css({
        left: drawtoleft,
        animation: "catPaw 2.5s ease-in-out",
    });
    setTimeout(() => {
        console.log($(this).css("transform"));
        const drawtransform = $(this).css("transform");
        console.log(this);
        $(this).css({
            transform: drawtransform,
            animation: "drawUp 1.4s ease-in forwards",
        });
    }, 1125);
    setTimeout(() => {
        window.location.href = "draw19.php";
    }, 3000);
    // console.log($('.catPaw').offsetTop);
});

// 沒按不能下一步


$(".facebtn").click(function () {
    if (
        $(".drawbtnToggle").length >= 1 &&
        $(".musclebtnToggle").length >= 1 &&
        $(".facebtnToggle").length >= 1
    ) {
        // console.log('hi');
        
        $(".toHowold").removeClass("btn_disabled_ba");
        $(".toHowold").click(function () {
            $(".drawSection09").show().siblings().hide();
            })

        // $(".btn_md_next a").attr("href", "draw09.php");
    } else if (
        $(".drawbtnToggle").length < 1 ||
        $(".musclebtnToggle").length < 1 ||
        $(".facebtnToggle").length < 1
    ) {

        $(".toHowold").addClass("btn_disabled_ba");
        // $(".btn_md_next a").attr("href", "#");
    }
});

$(".musclebtn").click(function () {
    if (
        $(".drawbtnToggle").length >= 1 &&
        $(".musclebtnToggle").length >= 1 &&
        $(".facebtnToggle").length >= 1
    ) {
        // console.log('hi');
        $(".toHowold").removeClass("btn_disabled_ba");
        $(".toHowold").click(function () {
            $(".drawSection09").show().siblings().hide();
            })
        // $(".btn_md_next a").attr("href", "draw09.php");
    } else if (
        $(".drawbtnToggle").length < 1 ||
        $(".musclebtnToggle").length < 1 ||
        $(".facebtnToggle").length < 1
    ) {
        // console.log('no');
        // $('.btn_md_next').attr('disabled', true)
        $(".toHowold").addClass("btn_disabled_ba");
        // $(".btn_md_next a").attr("href", "#");
    }
});

$(".heightbtn").click(function () {
    if (
        $(".drawbtnToggle").length >= 1 &&
        $(".musclebtnToggle").length >= 1 &&
        $(".facebtnToggle").length >= 1
    ) {
        $(".toHowold").removeClass("btn_disabled_ba");
        $(".toHowold").click(function () {
        $(".drawSection09").show().siblings().hide();
        })
    } else if (
        $(".drawbtnToggle").length < 1 ||
        $(".musclebtnToggle").length < 1 ||
        $(".facebtnToggle").length < 1
    ) {
        $(".toHowold").addClass("btn_disabled_ba");
    }
});

$(".howOldbtn").click(function () {
    if ($(".howOldbtnToggle").length >= 1) {
        $(".toInterest").removeClass("btn_disabled_ba");
        $(".toInterest").click(function () {
            $(".drawSection10").show().siblings().hide();
            })
    } else if ($(".howOldbtnToggle").length < 1) {

        $(".toInterest").addClass("btn_disabled_ba");
    }
});

$(".interestbtn").click(function () {
    if ($(".interestbtnToggle").length >= 1) {
        $(".topersonality").removeClass("btn_disabled_ba");
        $(".topersonality").click(function () {
            $(".drawSection11").show().siblings().hide();
            })
    } else if ($(".interestbtnToggle").length < 1) {
        $(".topersonality").addClass("btn_disabled_ba");
    }
});

$(".personalitybtn").click(function () {
    if ($(".personalitybtnToggle").length >= 1) {
        // console.log('hi');
        $(".tohoro").removeClass("btn_disabled_ba");
        $(".tohoro").click(function () {
            $(".drawSection12").show().siblings().hide();
            })
        // $(".btn_md_next a").attr("href", "draw12.php");
    } else if ($(".personalitybtnToggle").length < 1) {
        // console.log('no');
        // $('.btn_md_next').attr('disabled', true)
        $(".tohoro").addClass("btn_disabled_ba");
        // $(".btn_md_next a").attr("href", "#");
    }
});

$(".horobtn").click(function () {
    if ($(".horobtnToggle").length >= 1) {
        // console.log('hi');
        $(".btn_md_next").removeClass("btn_disabled_ba");
        // $(".btn_md_next a").attr("href", "draw15.php");
    } else if ($(".horobtnToggle").length < 1) {
        // console.log('no');
        // $('.btn_md_next').attr('disabled', true)
        $(".btn_md_next").addClass("btn_disabled_ba");
        // $(".btn_md_next a").attr("href", "#");
    }
});

// clearAll 清除
$(".clearAll_ba").click(function () {
    $(".wantbtn").removeClass("drawbtnToggle");
});

// 搖籤
var windowWidth = window.innerWidth;
// console.log(windowWidth);

let prevStat = ""; // '', 'left', 'right'
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

// $('.navoff_ba').parentsUntil('.navbar').addClass('d-none-ba')

// FIXME: 籤筒會超過範圍
let dragDiv = document.querySelector(".drag");
let dragTitle = document.querySelector(".drag-title") || dragDiv;
let dropArea = document.querySelector(".drop-area");
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

    dragTitle.addEventListener("mousedown", dragStart);

    function dragStart(e) {
        e.preventDefault();
        //記錄點擊相對被點擊物件的座標
        startX = e.clientX - dragDiv.offsetLeft;
        startY = e.clientY - dragDiv.offsetTop;
        document.addEventListener("mousemove", move);
        document.addEventListener("mouseup", stop);
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
        dragDiv.style.left = x + "px";
        dragDiv.style.top = y + "px";
        // console.log({x, y, area});

        let currentStat; //當前狀態
        if (x > area.middle) {
            currentStat = "right";
            // TODO: 做六張圖隨機
            $(".drawImgWrap img").attr("src", "./imgs/draw/draw-r.png");
            if (prevStat === "left") {
                drawcounter++;
            }
            prevStat = currentStat;
        } else if (x <= area.middle) {
            currentStat = "left";
            // TODO: 做六張圖隨機
            $(".drawImgWrap img").attr("src", "./imgs/draw/draw-l.png");
            if (prevStat === "right") {
                drawcounter++;
            }
            prevStat = currentStat;
            // 讓前一狀態等於當前狀態
        }
        if (drawcounter > 8) {
            // console.log('next');
            window.location.href = "draw18.php";
        }
    }

    function stop() {
        document.removeEventListener("mousemove", move);
        document.removeEventListener("mouseup", stop);
    }
}

$(window).scroll(function () {
    if (
        $(window).scrollTop() >=
        $(".jadeSay").offset().top - (window.screen.height * 3) / 4
    ) {
        $(".jadeSay").css({
            width: "700px",
        });
    } else {
        $(".jadeSay").css({
            width: "0px",
        });
    }
});

// console.log($('.drawCard').html());
const randDrawArr = [9, 12, 57, 63, 64, 74, 75, 81, 92, 95];

const randDraw = Math.floor(Math.random() * randDrawArr.length);
const drawValue = randDrawArr[randDraw];
// console.log(drawValue)

$(".drawCard").html(
    '<img class="w-100 " src="./imgs/draw/draw' +
    drawValue +
    '.png" alt=""></img>'
);

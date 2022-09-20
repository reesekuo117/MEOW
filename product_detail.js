        // 輪播牆+小換大+愛心被點擊
        let nowPage = 0;
        $('.carousel-control-next').click(function(e){
            console.log('click');
            e.preventDefault();
            if(nowPage < 4){
                nowPage = nowPage + 1;
            }else{
                nowPage = 0;
            }

            moveX(nowPage);
        })
        $('.carousel-control-prev').click(function(e){
            console.log('click');
            e.preventDefault();
            if(nowPage > 0){
                nowPage = nowPage - 1;
            }else{
                nowPage = 0;
            }

            moveX(nowPage);
        })

        function moveX(nowPage){
            // $('.img-demo img').eq(nowPage).css('opacity','1').siblings().not('.icon_heart').css('opacity','0')
            // 當demo的那一張(eq)圖片透明度1時，他的平輩透明度是0，但也是平輩的愛心透明度不改變（因為icon_heart也是那五張圖的平輩，但是它不能被調整透明度，所以將他寫在siblings之間）

            $('.img-demo img').css('opacity','0').eq(nowPage).css('opacity','1')
        }

        $('.icon_heart').click(function(){
            console.log('.icon_heart clicked');
        })


        // 滑鼠左鍵點擊事件 .click()
        // 回呼函式 callback function
        // 事件裡面的主角是誰? 誰被點擊了? 可以用 this 來代替

        $('.img-wrap').click(function(){
            console.log('img clicked.', $(this).index());
            nowPage = $(this).index();
            moveX(nowPage);
            
            // console.log('img clicked.', $(this).attr('src'));
        })

        // 規格表:
        // [功能1] 點擊小圖，大圖要換成小圖的圖片
        // 1.時機點: 點擊小圖的時候 (事件)
        // 2.誰要換圖片? 大圖
        // 3.換成甚麼圖片? 誰被點，就換誰的圖片(抽象)
        // 4.我怎麼知道誰被點? 被點擊的那一刻，瀏覽器會告訴你答案($(this))
        // 5.我可不可以拿到那個被點擊的小圖? 誰被點就拿誰($(this))

        // DO-1.用事件來代表要執行的時間點:
        // $('.img-wrap > img').click(function(){
            // 先實驗換圖片的功能是否能實現。
            // 主詞(大圖):我想改變圖片的那個人是誰?能在這裡得到他嗎?
            // $('.img-demo img').attr('src', './imgs/product5.jpg');

            // DO-1-1.拿到被點擊的小圖
            // console.log('img clicked.', $(this).attr('src'));
            // const imgClickedSrc = $(this).attr('src');
            // DO-1-2.修改 DEMO 的大圖
            // $('.img-demo img').attr('src', imgClickedSrc);
        // })

        // ----------------小換大結束-------------------

        $(window).scroll(function () {
            if ($(window).scrollTop() >= ($('.detail_box').offset().top)) {
                // 視窗超過detail_box就出現undernav
                $('.undernav').css({
                    transform: 'translateY(0px)',
                    opacity: 1,
                    transition: '.5s',
                });
        
            }
            else {
                $('.undernav').css({
                    // 這兩個在原本的css就要下，不然第一次打開還是會出現
                    transform: 'translateY(40px)',
                    opacity: 0,
                });
            };
        
        });

        // ----------------訂購數量和總額-------------------
        // 1.按+的時候input的value++
        // 2.按-的時候input的value-1
        // 3.當value的值是1時，-的按鈕是灰色，且不能再向下減
        // 4.當value的值不是1時，-的按鈕是咖啡色
        // 5.按下購買按鈕後，會記住按過的值跳轉到結帳頁面`→記在參數/記在session傳給後端(要再寫一支PHP)/記在localstorage(結帳頁面要來localstorage)
        
        const minusBtn = $('button.minus');
        const plusBtn = $('button.plus');
        const productDiv = $('.product_q');

        plusBtn.on('click', function(){
            // 可以用function也可以用箭頭函式，用箭頭不能用this
            let num = +productDiv.html();
            // +productDiv.html()→將.people裡面的文字轉換為數值，原生的用法是將.html()改成.innerText()
            productDiv.html(num+1);
            minusBtn.removeClass('disabled');
        });

        minusBtn.on('click', function(){
            let num = +productDiv.html();
            if(num>1){
                productDiv.html(num-1);
            }
            num = +productDiv.html();
            //為了知道值到底是多少，所以要呼叫num = +productDiv.html();
            if(num===1){
                minusBtn.addClass('disabled');
            }
        });

        // ----------------下方列結束-------------------


        // 愛心變色(輪播牆+卡片)

$('.icon_heart').click(function(e){
    e.preventDefault();
    $(this).find('.heart_line').toggleClass('color')
});

//下方列愛心變色
$('.favorite').click(function(){
    $('.icon_heart_nav > svg').toggleClass('color')
});
// 手機footer愛心變色
$('.icon_heart_mb').click(function(){
    $('.heart_line').toggleClass('footercolor')
});
        // ----------------愛心變色結束-------------------

// ??按收藏後真的進入收藏頁面&沒登入會跳出提示窗


// 側邊欄變色
const sectionsOffsetTop = [];

// $('.details > div').eq(0).offset().top

// sectionsOffsetTop.push($('.details > div').eq(0).offset().top)
// sectionsOffsetTop.push($('.details > div').eq(1).offset().top)
// sectionsOffsetTop.push($('.details > div').eq(2).offset().top)
// sectionsOffsetTop.push($('.details > div').eq(3).offset().top)
$(function(){
    sectionsOffsetTop.length = 0;
    //先清空?
    for(let i = 0; i < 4; i ++){
        sectionsOffsetTop.push($('.details > div').eq(i).offset().top)
    }
})

$(window).resize(function(){
    sectionsOffsetTop.length = 0;
    for(let i = 0; i < 4; i ++){
        sectionsOffsetTop.push($('.details > div').eq(i).offset().top)
    }
})

// console.log('sectionsOffsetTop array:',sectionsOffsetTop);
// console.log('sectionsOffsetTop array:',sectionsOffsetTop[0]);

// $('.links a').eq(3).css('color','red')

$(window).scroll(function () {
        const nowScroll = $(window).scrollTop();
        console.log(' now scroll', nowScroll);

        for(let i = 0; i < 4; i++){
            if(nowScroll >= sectionsOffsetTop[i]){
                $('.links a').eq(i).css('color','var(--color-orange)').siblings().css('color','var(--color-text87)')
            }
            // 手機需要多寫這條，不然會相衝
            if(nowScroll >= sectionsOffsetTop[i] && $(window).width() < 768){
                console.log('hihi i',sectionsOffsetTop[i]);
                $('.pdnav_mb a small').eq(i).css('color','var(--color-orange)').closest('div').siblings().find('small').css('color','var(--color-text87)')
        }
    }
})


// $(window).scroll(function () {
//     const nowScroll = $(window).scrollTop();
//     console.log('mobile now  scroll', nowScroll);
//     console.log('sectionsOffsetTop', sectionsOffsetTop);  

//     for(let i = 0; i < 4; i++){
//         if(nowScroll >= sectionsOffsetTop[i]){
//             console.log('mobile nav',  $('.pdnav_mb').eq(i));
//             $('.pdnav_mb a').eq(i).css('color', 'var(--color-orange)').siblings().css('color', 'var(--color-text87)')
//             }
//         }
//     })

//往下滑消失，上滑才出現
// let lastScroll = 0;

// $(window).scroll(function () {
//     let scrollNow = $(window).scrollTop();

//     console.log('lastScroll:', lastScroll);
//     console.log('scrollNow', scrollNow);

//     if (scrollNow > lastScroll) {
//         $('.pdnav_mb').addClass('hidden')
//     }
//     else {
//         $('.pdnav_mb').removeClass('hidden')
//     }

//     lastScroll = scrollNow;

// })




        // ----------------側邊攔變色結束-------------------


// $(function() {
    // This button will increment the value
    // $('.plus').click(function() {
    // Stop acting like a button
    // e.preventDefault();
    // Get the field name
    // fieldName = $(this).attr('field');
    // Get its current value
    // var currentVal = parseInt($('input[name=' + fieldName + ']').val());
    // If is not undefined
    // if (!isNaN(currentVal)) {
      // Increment
        // $('input[name=' + fieldName + ']').val(currentVal + 1);
    // } else {
      // Otherwise put a 0 there
       //  $('input[name=' + fieldName + ']').val(0);
    // }
    // });

    // This button will decrement the value till 0
        // $(".minus").click(function() {
        // Stop acting like a button
        // e.preventDefault();
        // Get the field name
        // fieldName = $(this).attr('field');
        // Get its current value
        // var currentVal = parseInt($('input[name=' + fieldName + ']').val());
        // If it isn't undefined or its greater than 0
        // if (!isNaN(currentVal) && currentVal > 0) {
        // Decrement one
            // $('input[name=' + fieldName + ']').val(currentVal - 1);
        // } else {
        // Otherwise put a 0 there
            // $('input[name=' + fieldName + ']').val(0);
        // }
        // });
    // });
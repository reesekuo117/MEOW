        // 輪播牆+小換大
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
            $('.img-demo img').eq(nowPage).css('opacity','1').siblings().not('.icon_favorite').css('opacity','0')
        }

        $('.icon_favorite').click(function(){
            console.log('icon_favorite clicked');
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



        // 愛心變色

$('.icon_favorite').click(function(){
    $('.heart_line').toggleClass('color')
});

// ??按收藏後真的進入收藏頁面&沒登入會跳出提示窗


// 側邊欄變色

$(window).scroll(function () {
    if ($(window).scrollTop() >= ($('.detail_box').offset().top)) {
        // 視窗超過detail_box就出現undernav
        $('.links').css({
            color: 'var(--color-orange)',
        });

    }
    else {
        $('.undernav').css({
            // 這兩個在原本的css就要下，不然第一次打開還是會出現
            color: 'var(--color-text87)',

        });
    };

});



const sectionsOffsetTop = [];

// $('.details > div').eq(0).offset().top

// sectionsOffsetTop.push($('.details > div').eq(0).offset().top)
// sectionsOffsetTop.push($('.details > div').eq(1).offset().top)
// sectionsOffsetTop.push($('.details > div').eq(2).offset().top)
// sectionsOffsetTop.push($('.details > div').eq(3).offset().top)

for(let i = 0; i < 4; i ++){
    sectionsOffsetTop.push($('.details > div').eq(i).offset().top)
}

// console.log('sectionsOffsetTop array:',sectionsOffsetTop);
// console.log('sectionsOffsetTop array:',sectionsOffsetTop[0]);

// $('.links a').eq(3).css('color','red')

$(window).scroll(function () {
        const nowScroll = $(window).scrollTop();
        // console.log(' now scroll', nowScroll);

        for(let i = 0; i < 4; i++){
            if(nowScroll >= sectionsOffsetTop[i]){
                $('.links a').eq(i).css('color','red').siblings().css('color','black')
            }
        }

        // if(nowScroll >= sectionsOffsetTop[0]){
        //     $('.links a').eq(0).css('color','red').siblings().css('color','black')
        // }

        // if(nowScroll >= sectionsOffsetTop[1]){
        //     $('.links a').eq(1).css('color','red').siblings().css('color','black')
        // }

    }
)
        // 滑鼠左鍵點擊事件 .click()
        // 回呼函式 callback function
        // 事件裡面的主角是誰? 誰被點擊了? 可以用 this 來代替

        $('.img-wrap > img').click(function(){
            // console.log('img clicked.', $(this));
            console.log('img clicked.', $(this).attr('src'));
        })

        // 規格表:
        // [功能1] 點擊小圖，大圖要換成小圖的圖片
        // 1.時機點: 點擊小圖的時候 (事件)
        // 2.誰要換圖片? 大圖
        // 3.換成甚麼圖片? 誰被點，就換誰的圖片(抽象)
        // 4.我怎麼知道誰被點? 被點擊的那一刻，瀏覽器會告訴你答案($(this))
        // 5.我可不可以拿到那個被點擊的小圖? 誰被點就拿誰($(this))

        // DO-1.用事件來代表要執行的時間點:
        $('.img-wrap > img').click(function(){
            // 先實驗換圖片的功能是否能實現。
            // 主詞(大圖):我想改變圖片的那個人是誰?能在這裡得到他嗎?
            // $('.img-demo img').attr('src', './imgs/product5.jpg');

            // DO-1-1.拿到被點擊的小圖
            // console.log('img clicked.', $(this).attr('src'));
            const imgClickedSrc = $(this).attr('src');
            // DO-1-2.修改 DEMO 的大圖
            $('.img-demo img').attr('src', imgClickedSrc);
        })

        // ----------------小換大結束-------------------

        $(window).scroll(function () {
            // console.log('second offsetTop:', $('.second-test > .second').offset().top);
            // console.log('first scrollTop:', $('.second').scrollTop());
            if ($(window).scrollTop() >= ($('.pd_head').offset().top - $('.undernav').height() * 1 / 3)) {
                $('.undernav').css({
                    transform: 'translateY(0px)',
                    opacity: 1,
                })
        
            }
            else {
                $('.undernav').css({
                    transform: 'translateY(40px)',
                    opacity: 0,
                })
            }
        
        })


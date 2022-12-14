        
        // ----------------下方列-------------------

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
        // ----------------下方列結束-------------------

        // ----------------訂購數量和總額-------------------
        // 1.按+的時候input的value++
        // 2.按-的時候input的value-1
        // 3.當value的值是1時，-的按鈕是灰色，且不能再向下減
        // 4.當value的值不是1時，-的按鈕是咖啡色
        // 5.總金額會隨著+1的數量改變
        // 6.按下購買按鈕後，會記住按過的值跳轉到結帳頁面`→記在參數/記在session傳給後端(要再寫一支PHP)/記在localstorage(結帳頁面要來localstorage)


        const priceUnit = $('#total_price_ba').text().trim();

        const minusBtn = $('button.minus');
        const plusBtn = $('button.plus');
        const peopleDiv = $('.people');
        const totalDiv = $('.total_price');

        plusBtn.on('click', function(){
            // 可以用function也可以用箭頭函式，用箭頭函式不能用this
            let num = +peopleDiv.html();
            // +peopleDiv.html()→將.people裡面的文字轉換為數值，原生的用法是將.html()改成.innerText()
            peopleDiv.html(num+1);
            minusBtn.removeClass('disabled');
            numChanged();
        });

        minusBtn.on('click', function(){
            let num = +peopleDiv.html();
            if(num>1){
                peopleDiv.html(num-1);
            }
            num = +peopleDiv.html();
            //為了知道值到底是多少，所以要呼叫num = +peopleDiv.html();
            if(num===1){
                minusBtn.addClass('disabled');
            }
            numChanged();
        });

        function numChanged(){
            let num = +peopleDiv.html();
            totalDiv.html(num * priceUnit);
        }
        numChanged();
        // // 一進來就計算人數*金額

        // ----------------愛心變色(輪播牆+卡片)----------------
        // $('.icon_heart').click(function(e){
        //     e.preventDefault();
        //     $(this).find('.heart_line').toggleClass('color')
        // });

        //下方列+卡片輪播愛心變色
        // $('.favorite').click(function(){
        //     $(this).find('.icon_heart_nav > svg').toggleClass('color')
        // });
        // ----------------愛心變色結束-------------------

// ??按收藏後真的進入收藏頁面&沒登入會跳出提示窗→包PHP用session判斷

// ----------------側邊欄變色----------------
const sectionsOffsetTop = [];

// $('.details > div').eq(0).offset().top

// sectionsOffsetTop.push($('.details > div').eq(0).offset().top)
// sectionsOffsetTop.push($('.details > div').eq(1).offset().top)
// sectionsOffsetTop.push($('.details > div').eq(2).offset().top)
// sectionsOffsetTop.push($('.details > div').eq(3).offset().top)
$(function(){
    sectionsOffsetTop.length = 0;
    for(let i = 0; i < 5; i ++){
        // console.log('hi',$('.details > div').eq(i).offset().top);
        sectionsOffsetTop.push($('.details > div').eq(i).offset().top)
    }
})

$(window).resize(function(){
    sectionsOffsetTop.length = 0;
    for(let i = 0; i < 5; i ++){
        // console.log('hi',$('.details > div').eq(i).offset().top);
        sectionsOffsetTop.push($('.details > div').eq(i).offset().top)
        // 多了一區手機版div才會讓迴圈壞掉
    }
})


// console.log('sectionsOffsetTop array:',sectionsOffsetTop);
// console.log('sectionsOffsetTop array:',sectionsOffsetTop[0]);

// $('.links a').eq(3).css('color','red')

$(window).scroll(function () {
        const nowScroll = $(window).scrollTop();
        // console.log(' now scroll123', nowScroll);

        for(let i = 0; i < 5; i++){
            if(nowScroll >= sectionsOffsetTop[i]){
                $('.links a').eq(i).css('color','var(--color-orange)').siblings().css('color','var(--color-text87)')
            }
            if(nowScroll >= sectionsOffsetTop[i]-50 && $(window).width() < 768){
                // console.log('hihi i',sectionsOffsetTop[i]);
                $('.tdnav_mb a small').eq(i).css('color','var(--color-orange)').closest('div').siblings().find('small').css('color','var(--color-text87)')
                // 結構不一樣(手機板多了一個small的div)所以找法不一樣，改成找最接近的直系血親的平輩的small
            }
        }
    }
)
        // ----------------側邊攔變色結束-------------------

        $('.td_footer_mb .buy').click(function(){
            // $('.choiceandbuy_mb').toggleClass('hidden_choicemb');
            // console.log($(document).height());
            $("html, body").animate({ scrollTop: $(document).height() }, 0);
            // $("html, body").animate({ scrollTop: $(document).height() }, 200);
            // 視窗移動到$(document).height()整個視窗的底端
            
            // setTimeout(() => {
            //     console.log($(window).scrollTop())
            // }, 1000)
        });

        // $(document).on('scroll', () => {
        //     console.log($(document).scrollTop());
        //     console.log($(window).height());
        // });


        //------------------商品立即購買--------------
        // function addToCart_T_Yu(event) {
        //     const btn = $(event.currentTarget);
        //     const qty = btn.closest(".purchase_travel").find(".total_price").val();
        //     console.log(btn);
        //     const sid = btn.attr('data-sid');
        //     console.log({sid, qty});
        //     $.get(
        //         're-cart-t-api.php', 
        //         {sid, qty}, 
        //         function(data){
        //             // showCartCountT(data);
        //         }, 
        //         'json');
        // }


// 回到上一頁
    $('#backtoTravelList').click(function () {
        history.back()
    })

// 往下滑
    $('#btnBuy2').click(function () {
        $('html, body').animate({
            scrollTop: 1200
        },100)
    })
    $('#btnBuy').click(function () {
        $('html, body').animate({
            scrollTop: 1200
        },100)
    })

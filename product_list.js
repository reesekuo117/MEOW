// 價格篩選
let sliderOne = document.querySelector('.filter-range-1')
let sliderTwo = document.querySelector('.filter-range-2')

let SliderValOne = document.querySelector('.range-1-value')
let SliderValTwo = document.querySelector('.range-2-value')

// 篩選範圍怎麼跟資料庫連結
let minGap = 100;
let delArrayLength = 0;

function slideOne() {
    if (parseInt(sliderTwo.value) - parseInt(sliderOne.value) <= minGap) {
        sliderOne.value = parseInt(sliderTwo.value) - minGap;
    }
    // let a = parseInt(sliderOne.value)*10
    SliderValOne.textContent = `NT$${sliderOne.value}`


    // this is only if the price range doesn't start at 0 like in this case, in the project I was working on. Otherwise the logic would be far simpler 
    // let sliderOnePercentage = sliderOne.attributes.min.nodeValue;
    // console.log(sliderOnePercentage);
    // let sliderMovementOne = sliderOne.value - sliderOnePercentage;
    // console.log(sliderMovementOne);
    // console.log(sliderMovementOne /2900  * 5.862);
    // SliderValOne.style.left = `${sliderMovementOne /2900 * 70}px`;

    const delArray = productData.filter( (item)=>{
        return +item.product_price < sliderOne.value
        // 選低價格的拉霸的值小於商品價格時
    });

    
    const newArray = productData.filter( (item)=>{
        return +item.product_price > sliderOne.value
        // 選低價格的拉霸的值小於商品價格時
    });

    

    // console.log('delArray',delArray);

    // console.log('delArray.length',delArray.length);
    // console.log('delArrayLength',delArrayLength);
    // if(delArray.length > delArrayLength){
    //     delArray.forEach(element => {
    //         console.log($(`.card[data-sid="${element.id}"]`).length);
    //         $(`.card[data-sid="${element.id}"]`).parent().remove();
    //     });
    // }
    // else if (delArray.length < delArrayLength){
    //     let htmlStr = '';
    //     productData.forEach( (item,index)=>{
    //         if(index > delArray.length && index < delArrayLength){
    //             htmlStr += `<div class="col-12 col-md-4">
    //                 <div class="card" data-sid="${item.id}">
    //                     <a href="product_detail.php">
    //                         <div class="p_img">
    //                             <img src="./imgs/product/cards/${item.product_card_img}.jpg" class="card-img-top" alt="...">
    //                         </div>
    //                     </a>
    //                     <div class="card-body">
    //                         <a href="product_detail.php">
    //                             <div class="card_title pb-1">
    //                                 <h5 class="card-text" style="height: 56px;">
    //                                 ${item.product_name}</h5>
    //                             </div>
    //                         </a>
    //                         <div class="icon_heart">
    //                             <svg class="heart_line" width="32" height="32" viewBox="0 0 32 32" fill="none" stroke="#fff" xmlns="http://www.w3.org/2000/svg">
    //                                 <path d="M15.2855 9.22197C12.9704 6.90689 9.21692 6.90689 6.90184 9.22197C4.58676 11.537 4.58676 15.2905 6.90184 17.6056L13.2503 23.9532C14.8378 25.5407 17.4116 25.5407 18.9991 23.9532L24.5083 18.444L24.5074 18.4431L25.3449 17.6056C27.66 15.2905 27.66 11.5371 25.3449 9.22197C23.0298 6.90689 19.2763 6.90689 16.9612 9.22197L16.1234 10.0598L15.2855 9.22197Z" stroke-width="2.66667"></path>
    //                             </svg>
    //                         </div>
    //                         <div class="row card_under justify-content-between align-items-baseline">
    //                             <small class="xs card-text d-flex align-items-center pr-0">
    //                                 <div class="icon_star pr-1">
    //                                     <i class="fa-solid fa-star"></i>
    //                                 </div>
    //                                 <span>${item.product_comment}</span>
    //                             </small>
    //                             <small class="xs card-text d-flex align-items-center">
    //                                 <div class="icon_fire pr-1">
    //                                     <i class="fa-solid fa-fire"></i>
    //                                 </div>
    //                                 <span>${item.product_popular}K+個已訂購</span>
    //                             </small>
    //                             <h4 class="card-text price">
    //                             ${item.product_price}</h4>
    //                         </div>
    //                     </div>
    //                 </div>
    //             </div>`
    //         }
    //     })

    //     $('.product_list > .row').prepend(htmlStr);
    // }
    

    // delArrayLength = delArray.length;

    let htmlStr = '';

    for (let i = 0; i < newArray.length ; i++){
        htmlStr += `<div class="col-12 col-md-4">
        <div class="card">
            <a href="product_detail.php">
                <div class="p_img">
                    <img src="./imgs/product/cards/${newArray[i].product_card_img}.jpg" class="card-img-top" alt="...">
                </div>
            </a>
            <div class="card-body">
                <a href="product_detail.php">
                    <div class="card_title pb-1">
                        <h5 class="card-text" style="height: 56px;">
                        ${newArray[i].product_name}</h5>
                    </div>
                </a>
                <div class="icon_heart">
                    <svg class="heart_line" width="32" height="32" viewBox="0 0 32 32" fill="none" stroke="#fff" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.2855 9.22197C12.9704 6.90689 9.21692 6.90689 6.90184 9.22197C4.58676 11.537 4.58676 15.2905 6.90184 17.6056L13.2503 23.9532C14.8378 25.5407 17.4116 25.5407 18.9991 23.9532L24.5083 18.444L24.5074 18.4431L25.3449 17.6056C27.66 15.2905 27.66 11.5371 25.3449 9.22197C23.0298 6.90689 19.2763 6.90689 16.9612 9.22197L16.1234 10.0598L15.2855 9.22197Z" stroke-width="2.66667"></path>
                    </svg>
                </div>
                <div class="row card_under justify-content-between align-items-baseline">
                    <small class="xs card-text d-flex align-items-center pr-0">
                        <div class="icon_star pr-1">
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <span>${newArray[i].product_comment}</span>
                    </small>
                    <small class="xs card-text d-flex align-items-center">
                        <div class="icon_fire pr-1">
                            <i class="fa-solid fa-fire"></i>
                        </div>
                        <span>${newArray[i].product_popular}K+個已訂購</span>
                    </small>
                    <h4 class="card-text price">
                    ${newArray[i].product_price}</h4>
                </div>
            </div>
        </div>
    </div>`
    }

    $('.product_list .row').html(htmlStr)
}

function slideTwo() {
    if (parseInt(sliderTwo.value) - parseInt(sliderOne.value) <= minGap) {
        sliderTwo.value = parseInt(sliderOne.value) + minGap;
    }
    SliderValTwo.textContent = `NT$${sliderTwo.value}`

    // let sliderTwoPercentage = sliderTwo.attributes.max.nodeValue;
    // let sliderMovementTwo = Math.abs(sliderTwo.value - sliderTwoPercentage);
    // SliderValTwo.style.right = `${sliderMovementTwo /2900 * 40 }%`;
}

// sliderOne.addEventListener('input', slideOne)
// sliderTwo.addEventListener('input', slideTwo)

// 排序會亮
$('.product_sort a').click(function(){
    // e.preventDefault();
    //為什麼加了preventDefault還會跳轉頁面
    // console.log($(this).closest('div').siblings());
    $(this).closest('div').find('a').addClass('sort_active').siblings().removeClass('sort_active');
});
// 側邊欄篩選
$('.product_cate').click(function(){
    // e.preventDefault();
    // console.log($(this).closest('div').siblings());
    $(this).addClass('btncolor_active').siblings().removeClass('btncolor_active');
});
// $('.product_cate > a').click(function(e){
    // e.preventDefault();
    // $(this).css('color', 'var(--color-orange)')
// });

// 手機版篩選
$('.psort_mb').click(function(){
    console.log('hello');
    // $('.travel_cate_mb').removeClass('d-none').addClass('d-block')
    $(this).parents().next('.timesort_mb').toggleClass('ptsmbhz')
})


// 愛心
/*
$('.icon_heart').click(function(){
    // $('.heart_line').eq(0).toggleClass('color')
    // $(this).find('.heart_line').toggleClass('color')
    $(this).toggleClass('color')
});
$('.icon_heart_mb').click(function(){
    $(this).find('.heart_line').toggleClass('color')
});
// 按收藏後真的進入收藏頁面&沒登入會跳出提示窗
*/
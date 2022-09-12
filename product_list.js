// 價格篩選
let sliderOne = document.querySelector('.filter-range-1')
let sliderTwo = document.querySelector('.filter-range-2')

let SliderValOne = document.querySelector('.range-1-value')
let SliderValTwo = document.querySelector('.range-2-value')

// 篩選範圍怎麼跟資料庫連結

let minGap = 100;

function slideOne() {
    if (parseInt(sliderTwo.value) - parseInt(sliderOne.value) <= minGap) {
        sliderOne.value = parseInt(sliderTwo.value) - minGap;
    }
    // let a = parseInt(sliderOne.value)*10
    SliderValOne.textContent = `NT$${sliderOne.value}`


    // this is only if the price range doesn't start at 0 like in this case, in the project I was working on. Otherwise the logic would be far simpler 
    let sliderOnePercentage = sliderOne.attributes.min.nodeValue;
    // console.log(sliderOnePercentage);
    let sliderMovementOne = sliderOne.value - sliderOnePercentage;
    console.log(sliderMovementOne);
    console.log(sliderMovementOne /2900  * 5.862);
    SliderValOne.style.left = `${sliderMovementOne /2900 * 70}px`;
}

function slideTwo() {
    if (parseInt(sliderTwo.value) - parseInt(sliderOne.value) <= minGap) {
        sliderTwo.value = parseInt(sliderOne.value) + minGap;
    }
    SliderValTwo.textContent = `NT$${sliderTwo.value}`

    let sliderTwoPercentage = sliderTwo.attributes.max.nodeValue;
    let sliderMovementTwo = Math.abs(sliderTwo.value - sliderTwoPercentage);
    SliderValTwo.style.right = `${sliderMovementTwo /2900 * 40 }%`;
}

sliderOne.addEventListener('input', slideOne)
sliderTwo.addEventListener('input', slideTwo)

// 愛心

$('.icon_heart').click(function(){
    // $('.heart_line').eq(0).toggleClass('color')
    $(this).find('.heart_line').toggleClass('color')
});

// 按收藏後真的進入收藏頁面&沒登入會跳出提示窗
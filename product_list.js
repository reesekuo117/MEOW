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
    // console.log(sliderMovementOne);
    SliderValOne.style.left = `${sliderMovementOne * 0.01}%`;
}

function slideTwo() {
    if (parseInt(sliderTwo.value) - parseInt(sliderOne.value) <= minGap) {
        sliderTwo.value = parseInt(sliderOne.value) + minGap;
    }
    SliderValTwo.textContent = `NT$${sliderTwo.value}`

    let sliderTwoPercentage = sliderTwo.attributes.max.nodeValue;
    let sliderMovementTwo = Math.abs(sliderTwo.value - sliderTwoPercentage);
    SliderValTwo.style.right = `${sliderMovementTwo * 0.01}%`;
}

sliderOne.addEventListener('input', slideOne)
sliderTwo.addEventListener('input', slideTwo)
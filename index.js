// const typeWriter = selector => {
//     const el = document.querySelector(selector)
//     const text = el.innerHTML

//         ; (function _type(i = 0) {
//             if (i === text.length) return

//             el.innerHTML =
//                 text.substring(0, i + 1) + '<span aria-hidden="true"></span>'
//             setTimeout(() => _type(i + 1), 100)
//         })()
// }
// // setTimeout(typeWriter(".js-type-writer"), 5000)

// typeWriter(".js-type-writer")

// const typeWriter2 = selector => {
//     const el = document.querySelector(selector)
//     const text = el.innerHTML

//         ; (function _type(i = 0) {
//             if (i === text.length) return

//             el.innerHTML =
//                 text.substring(0, i + 1) + '<span aria-hidden="true"></span>'
//             setTimeout(() => _type(i + 1), 100)
//         })()
// }

// setTimeout(typeWriter2(".js-type-writer2"), 1000)
// FIXME:

var typed = new Typed('.moonOldSay', {
    strings: ["我最近想去放假...", "", "最近真的太忙了..."],
    typeSpeed: 150,
    backSpeed: 100,
    loop: true,
});


// 三貓 hover
$('.leftCat').mouseenter(function () {
    $('.leftCatImg img').attr('src', "./imgs/index/7.png");
})
$('.leftCat').mouseleave(function () {
    $('.leftCatImg img').attr('src', "./imgs/index/8.png");
})
$('.middleCat').mouseenter(function () {
    $('.middleCatImg img').attr('src', "./imgs/index/9.png");
})
$('.middleCat').mouseleave(function () {
    $('.middleCatImg img').attr('src', "./imgs/index/10.png");
})
$('.rightCat').mouseenter(function () {
    $('.rightCatImg img').attr('src', "./imgs/index/11.png");
})
$('.rightCat').mouseleave(function () {
    $('.rightCatImg img').attr('src', "./imgs/index/12.png");
})

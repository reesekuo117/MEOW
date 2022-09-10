const typeWriter = selector => {
    const el = document.querySelector(selector)
    const text = el.innerHTML

        ; (function _type(i = 0) {
            if (i === text.length) return

            el.innerHTML =
                text.substring(0, i + 1) + '<span aria-hidden="true"></span>'
            setTimeout(() => _type(i + 1), 100)
        })()
}
// setTimeout(typeWriter(".js-type-writer"), 5000)

typeWriter(".js-type-writer")

const typeWriter2 = selector => {
    const el = document.querySelector(selector)
    const text = el.innerHTML

        ; (function _type(i = 0) {
            if (i === text.length) return

            el.innerHTML =
                text.substring(0, i + 1) + '<span aria-hidden="true"></span>'
            setTimeout(() => _type(i + 1), 100)
        })()
}

setTimeout(typeWriter2(".js-type-writer2"), 1000)
// FIXME:


// 三貓 hover
// FIXME: 現在是怎樣
$('.leftCatImg').mouseenter(function () {
    $('.leftCat img').attr('src', "./imgs/index/7.png");
})

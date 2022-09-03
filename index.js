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

typeWriter(".js-type-writer")

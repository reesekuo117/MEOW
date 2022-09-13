let Carousel = function Carousel() {
    const increment = 80;
    let totalImages;
    let $images;
    let $carousel;
    let carouselWidth;

    let on = function () {
        $carousel = $('.carousel__container');
        $images = $('.carousel__container img');
        carouselWidth = $carousel.width();
        totalImages = $images.length;
        position();
    }

    let position = function () {
        let number;
        let currentImage = $('.carousel__container--active').index();
        let x = 0;
        let z = 0;
        let zindex;
        let scaleX = 1;
        let scaleY = 1;
        let transformOrigin;

        $images.each(function (index, element) {
            scaleX = scaleY = 0.9;
            transformOrigin = carouselWidth / 2;
            if (index < currentImage) {
                number = 1;
                zindex = index + 1;
                x = carouselWidth / 2 - increment * (currentImage - index + 1);
                z = -increment * (currentImage - index + 1);
            } else if (index > currentImage) {
                number = -1
                zindex = totalImages - index;
                x = carouselWidth / 2 + increment * (index - currentImage + 1);
                z = -increment * (index - currentImage + 1);
            } else {
                number = 0;
                zindex = totalImages;
                x = carouselWidth / 2;
                z = 1;
                scaleX = scaleY = 1;
                transformOrigin = 'initial';
            }
            $(element).css(
                {
                    'transform': 'translate3d(' + calculateX(x, number, 780) + 'px, 0,' + z + 'px) scale3d(' + scaleX + ',' + scaleY + ', 1)',
                    'z-index': zindex,
                    'transform-origin-x': transformOrigin
                }
            );
        });
    };

    let calculateX = function (position, number, width) {
        switch (number) {
            case 1:
            case 0: return position - width / 2;
            case -1: return position - width / 2;
        }
    }

    let imageSize = function () {
        return $carousel.width() / 3;
    }

    let recalculateSizes = function () {
        carouselWidth = $carousel.width();
        position();
    }

    let clickedImage = function () {
        let activeImage = $(this);
        let activeImageNumber = $(this).index();

        $('.carousel__container--active').removeClass('carousel__container--active');
        activeImage.addClass('carousel__container--active');
        $('.carousel__dot-nav li').removeClass('carousel__dot-nav--active');
        $('.carousel__dot-nav li[data-target=' + activeImageNumber + ']').addClass('carousel__dot-nav--active');
        position();
    }

    let clickedDot = function () {
        let target = $(this).index();

        $('.carousel__container img[data-target=' + target + ']').click();
    }

    let prevNext = function () {
        let getClass = $(this).attr('class');

        if (getClass === 'carousel__arrow carousel__arrow--right') {
            $('.carousel__container--active').next().click();
        } else {
            $('.carousel__container--active').prev().click();
        }
    }

    let addEvents = function () {
        $(window).resize(recalculateSizes);
        $(document).on('click', 'img', clickedImage);
        $(document).on('click', 'li', clickedDot);
        $(document).on('click', '.carousel__arrow', prevNext);
    }

    return {
        init: function () {
            on();
            addEvents();
        }
    };
}();

$(function () {
    const carousel = Carousel.init();
})
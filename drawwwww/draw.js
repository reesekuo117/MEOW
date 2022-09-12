$('.drawSection02LeftCat').mouseenter(function () {
    $('.secretSection02LeftCat').css({
        transform:'translate(-50%, -50%) scale(1)'
    });
})
$('.drawSection02LeftCat').mouseleave(function () {
    $('.secretSection02LeftCat').css({
        transform:'translate(-50%, -50%) scale(0)'
    });
})

$('.drawSection02MidCat').mouseenter(function () {
    $('.secretSection02MidCat').css({
        transform:'translate(-50%, -50%) scale(1)'
    });
})
$('.drawSection02MidCat').mouseleave(function () {
    $('.secretSection02MidCat').css({
        transform:'translate(-50%, -50%) scale(0)'
    });
})

$('.drawSection02RightCat').mouseenter(function () {
    $('.secretSection02RightCat').css({
        transform:'translate(-50%, -50%) scale(0.8)'
    });
})
$('.drawSection02RightCat').mouseleave(function () {
    $('.secretSection02RightCat').css({
        transform:'translate(-50%, -50%) scale(0)'
    });
})

// ------------------- draw03 -------------------------

$('.temple01').mouseenter(function () {
    $('.temple01Img img').attr('src','../imgs/draw/temple01-1.png');
})
$('.temple01').mouseleave(function () {
    $('.temple01Img img').attr('src','../imgs/draw/temple01.png');
})

$('.temple02').mouseenter(function () {
    $('.temple02Img img').attr('src','../imgs/draw/temple02-1.png');
})
$('.temple02').mouseleave(function () {
    $('.temple02Img img').attr('src','../imgs/draw/temple02.png');
})

$('.temple03').mouseenter(function () {
    $('.temple03Img img').attr('src','../imgs/draw/temple05-1.png');
})
$('.temple03').mouseleave(function () {
    $('.temple03Img img').attr('src','../imgs/draw/temple05.png');
})

$('.temple04').mouseenter(function () {
    $('.temple04Img img').attr('src','../imgs/draw/temple06-1.png');
})
$('.temple04').mouseleave(function () {
    $('.temple04Img img').attr('src','../imgs/draw/temple06.png');
})

$('.temple05').mouseenter(function () {
    $('.temple05Img img').attr('src','../imgs/draw/temple03-1.png');
})
$('.temple05').mouseleave(function () {
    $('.temple05Img img').attr('src','../imgs/draw/temple03.png');
})

    //PC:側邊欄FIXED
    $(window).scroll(function() {
        if ($(window).scrollTop() >= ($('.section1-content_lb').offset().top - $(window).height() * 1 / 3)) {
            $('.sidebar_lb').css({
                transform: 'translateY(0px)',
                opacity: 1,
            })
        } else {
            $('.sidebar_lb').css({
                transform: 'translateY(50px)',
                opacity: 0,
            })
        }
    })

    //MB:nav fixed
    const navOffsetTop = $('.mbnavbar_lb').offset().top;

    $(window).scroll(function() {

        if ($(window).scrollTop() >= navOffsetTop) {
            $('.mbnavbar_lb').addClass('mbnavbar_fixed')
        } else {
            // console.log('nav remove fixed');
            $('.mbnavbar_lb').removeClass('mbnavbar_fixed')
        }
    })

//關於月老
//桌機
    $(window).scroll(function () {
      if ($(window).scrollTop() >= ($('.section1_lb').offset().top - $(window).height() * 2 / 3)) {
        $('.section1-content_lb').css({
          transform: 'translateY(0px)',
          opacity: 1,
        })
      }
      else {
        $('.section1-content_lb').css({
          transform: 'translateY(30px)',
          opacity: 0,
        })
      }
    })
    $(window).scroll(function () {
      if ($(window).scrollTop() >= ($('.section1-content_lb').offset().top - $(window).height() * 1 / 10)) {
        $('.section1-content2_lb').css({
          transform: 'translateY(0px)',
          opacity: 1,
        })
      }
      else {
        $('.section1-content2_lb').css({
          transform: 'translateY(30px)',
          opacity: 0,
        })
      }
    })
    //mb

    // $(window).scroll(function () {
    //     if ($(window).scrollTop() >= ($('.    mb-title_lb').offset().top - $(window).height() * 2/ 5)) {
    //       $('.mb-title_lb ').css({
    //         transform: 'translateY(0px)',
    //         opacity: 1,
    //       })
    //     }
    //     else {
    //       $('.mb-title_lb').css({
    //         transform: 'translateY(30px)',
    //         opacity: 0,
    //       })
    //     }
    //   })

    $(window).scroll(function () {
        if ($(window).scrollTop() >= ($('.mb-section1_lb').offset().top - $(window).height() * 1 / 3)) {
          $('.mb-section1-top_lb').css({
            transform: 'translateX(0px)',
            opacity: 1,
          })
        }
        else {
          $('.mb-section1-top_lb').css({
            transform: 'translateX(-30px)',
            opacity: 0,
          })
        }
      })
    $(window).scroll(function () {
        if ($(window).scrollTop() >= ($('.mb-section1-bottom_lb').offset().top - $(window).height() * 1 / 3)) {
          $('.mb-section1-bottom_lb').css({
            transform: 'translateX(0px)',
            opacity: 1,
          })
        }
        else {
          $('.mb-section1-bottom_lb').css({
            transform: 'translateX(30px)',
            opacity: 0,
          })
        }
      })




    //廟照片滑動
    $(window).scroll(function() {
        if ($(window).scrollTop() >= ($('.pic-group_lb').offset().top - $(window).height() * 2 / 3)) {
            $('.tmp-pic1_lb').css({
                transform: 'translateX(100px)',
                opacity: 1,
            })
        } else {
            $('.tmp-pic1_lb').css({
                transform: 'translateX(0px)',
                opacity: 0,
            })
        }
    })

    $(window).scroll(function() {
        if ($(window).scrollTop() >= ($('.tmp-pic2_lb').offset().top - $(window).height() * 2 / 3)) {
            $('.tmp-pic2_lb').css({
                transform: 'translateX(100px)',
                opacity: 1,
            })
        } else {
            $('.tmp-pic2_lb').css({
                transform: 'translateX(0px)',
                opacity: 0,
            })
        }
    })

    $(window).scroll(function() {
        if ($(window).scrollTop() >= ($('.tmp-pic2_lb').offset().top - $(window).height() * 1 / 3)) {
            $('.tmp-pic3_lb').css({
                transform: 'translateX(100px)',
                opacity: 1,
            })
        } else {
            $('.tmp-pic3_lb').css({
                transform: 'translateX(0px)',
                opacity: 0,
            })
        }
    })

    // 捲動視窗觸發紅線svg動畫
    $(window).scroll(function() {
        if ($(window).scrollTop() >= ($('.section2_box').offset().top - $(window).height() * 1 / 3)) {
            $('#rdLine-1').addClass('rdLine-1 d-md-block')
        } else {
            $('#rdLine-1').removeClass('rdLine-1 d-md-block')
        }
    })

    $(window).scroll(function() {
        if ($(window).scrollTop() >= ($('.step1_lb').offset().top - $(window).height() * 1 / 3)) {
            $('#rdLine-2').addClass('rdLine-2 d-md-block')
        } else {
            $('#rdLine-2').removeClass('rdLine-2 d-md-block')
        }
    })
    $(window).scroll(function() {
        if ($(window).scrollTop() >= ($('.step2_lb').offset().top - $(window).height() * 1 / 3)) {
            $('#rdLine-3').addClass('rdLine-3 d-md-block')
        } else {
            $('#rdLine-3').removeClass('rdLine-3 d-md-block')
        }
    })
    $(window).scroll(function() {
        if ($(window).scrollTop() >= ($('.step3_lb').offset().top - $(window).height() * 1 / 3)) {
            $('#rdLine-4').addClass('rdLine-4 d-md-block')
        } else {
            $('#rdLine-4').removeClass('rdLine-4 d-md-block')
        }
    })
    $(window).scroll(function() {
        if ($(window).scrollTop() >= ($('.step4_lb').offset().top - $(window).height() * 1 / 3)) {
            $('#rdLine-5').addClass('rdLine-5 d-md-block')
        } else {
            $('#rdLine-5').removeClass('rdLine-5 d-md-block')
        }
    })
    $(window).scroll(function() {
        if ($(window).scrollTop() >= ($('.step5_lb').offset().top - $(window).height() * 1 / 3)) {
            $('#rdLine-6').addClass('rdLine-6 d-md-block')
        } else {
            $('#rdLine-6').removeClass('rdLine-6 d-md-block')
        }
    })





    $(window).scroll(function () {
      if ($(window).scrollTop() >= ($('.step1_lb').offset().top - $(window).height() * 1 / 3)) {
        $('.step2_lb').css({
          transform: 'translateY(0px)',
          opacity: 1,
        })
      }
      else {
        $('.step2_lb').css({
          transform: 'translateY(50px)',
          opacity: 0,
        })
      }
    })

    $(window).scroll(function () {
      if ($(window).scrollTop() >= ($('.step2_lb').offset().top - $(window).height() * 1 / 3)) {
        $('.step3_lb').css({
          transform:'translateY(0px)',
          opacity: 1,
        })
      }
      else {
        $('.step3_lb').css({
          transform: 'translateY(50px)',
          opacity: 0,
        })
      }
    })

    $(window).scroll(function () {
      if ($(window).scrollTop() >= ($('.step3_lb').offset().top - $(window).height() * 1 / 3)) {
        $('.step4_lb').css({
          transform: 'translateY(0px)',
          opacity: 1,
        })
      }
      else {
        $('.step4_lb').css({
          transform: 'translateY(50px)',
          opacity: 0,
        })
      }
    })

    $(window).scroll(function () {
      if ($(window).scrollTop() >= ($('.step4_lb').offset().top - $(window).height() * 1 / 3)) {
        $('.step5_lb').css({
          transform: 'translateY(0px)',
          opacity: 1,
        })
      }
      else {
        $('.step5_lb').css({
          transform: 'translateY(50px)',
          opacity: 0,
        })
      }
    })

    $(window).resize(function() {
        const windowWidth = $(window).width();

        if (windowWidth <= 768) {
            $('.left-cat-animation_lb').css({
                transform: `translateX(${0}px)`,
                transition: 'none',
                opacity: 1,
            });
            $('.right-cat-animation_lb').css({
                transform: `translateX(-${0}px)`,
                transition: 'none',
                opacity: 1,
            });
        }

    })

    // cp貓PC相遇
    $(window).scroll(function() {

        if ($(window).scrollTop() >= ($('.cp-cat-move').offset().top - $(window).height() * 2 / 3)) {
            const windowWidth = $(window).width();

            const catParentDom = $('.left-cat-animation_lb').parent().width();
            const leftCatWidth = $('.left-cat-animation_lb').width();

            const leftCatMovement = catParentDom / 2 - leftCatWidth;

            if (windowWidth > 768) {
                $('.left-cat-animation_lb').css({
                    transform: `translateX(${leftCatMovement}px)`,
                    transition: '2s',
                    opacity: 1,
                });
                $('.right-cat-animation_lb').css({
                    transform: `translateX(-${leftCatMovement}px)`,
                    transition: '2s',
                    opacity: 1,
                });

                const leftCatTrans = $('.left-cat-animation_lb').css('transform');
                setTimeout(function() {
                    $('.heart-animation_lb').css({
                        opacity: 1
                    });
                }, (leftCatTrans === 'none') ? 1300 : 200);

            } else {
                $('.heart-animation_lb').css({
                    opacity: 1
                });
            }


        } else {
            $('.left-cat-animation_lb').css({
                // transform: 'translateX(-30px)',
                opacity: 1,
            });
            $('.right-cat-animation_lb').css({
                // transform: 'translateX(800px)',
                opacity: 1,
            });
            $('.heart-animation_lb').css({
                opacity: 0,
            })
        }
    })




    //全台月老廟篩選
    let itemLbArray = [
        ['祈求姻緣', '斬桃花、小三'],
        ['祈求姻緣'],
        ['祈求姻緣', '幸福美滿', '斬桃花、小三'],
    ];

    $('#area_lb').change(function() {
        const areaLbNumber = $(this).val();
        const itemLbData = itemLbArray[areaLbNumber];
        //   console.log('hi',document.querySelector('.middle'));
        // $('#north-group_lb').addClass('d-none');
        // $('#middle-group_lb').removeClass('d-none');
        // $('#south-group_lb').addClass('d-none');

        // $('.middle').css({
        //   "fill":"#E5A62A",
        //    "-webkit-transform":"translate(-5px,-5px)",
        // });

        $('#item_lb').empty();
        $(itemLbData).each(function(index, item) {
            $('#item_lb').append(`<option value="${index}">${item}</option>`);
        });
    });



    //當點擊哪一區地圖會變色加位移
    /*
    $('.path_lb').on({
      click: function (){
        $('.path_lb').removeAttr('style');
        $(this).css({
          "fill":"#E5A62A",
           "-webkit-transform":"translate(-5px,-5px)",
        });
        }
    });
    */
    //預設北部
    $('.path_lb').eq(0).css({
        "fill": "#E5A62A",
        "-webkit-transform": "translate(-5px,-5px)",
    });

    //點擊出現地標卡片  
    const northClicked = function() {
        $('.path_lb').removeAttr('style');
        $('.north').css({
            "fill": "#E5A62A",
            "-webkit-transform": "translate(-5px,-5px)",
        });
        $('#north-group_lb').removeClass('d-none');
        $('#middle-group_lb').addClass('d-none');
        $('#south-group_lb').addClass('d-none');
        $('#area_lb').val('0')
    }

    $('.north').click(northClicked);

    const middleClicked = function() {
        $('.path_lb').removeAttr('style');
        $('.middle').css({
            "fill": "#E5A62A",
            "-webkit-transform": "translate(-5px,-5px)",
        });
        $('#north-group_lb').addClass('d-none');
        $('#middle-group_lb').removeClass('d-none');
        $('#south-group_lb').addClass('d-none');
        $('#area_lb').val('1')
    }
    $('.middle').click(middleClicked)

    const southClicked = function() {
        $('.path_lb').removeAttr('style');
        $('.south').css({
            "fill": "#E5A62A",
            "-webkit-transform": "translate(-5px,-5px)",
        });
        $('#north-group_lb').addClass('d-none');
        $('#middle-group_lb').addClass('d-none');
        $('#south-group_lb').removeClass('d-none');
        $('#area_lb').val('2')
    }
    $('.south').click(southClicked);

    $('#area_lb').on('change', function() {

        const val = $(this).val();
        //   console.log({val});
        const areas = [northClicked, middleClicked, southClicked];
        areas[val]();

    })


    $('.C01').click(function() {
        $('#c01-info-card_lb').removeClass('d-none');
        $('#c06-info-card_lb').addClass('d-none');

    })

    $('.C06').click(function() {
        $('#c06-info-card_lb').removeClass('d-none');
        $('#c01-info-card_lb').addClass('d-none');

    })




    //側邊欄滾到該區域會變色
    const scrollLink = document.querySelectorAll(
        '.sidebar_lb a[href^="#"]'
    );
    const section = document.querySelectorAll(".targetScrollSection");
    const sections = {};
    let identCounter = 0;

    scrollLink.forEach((item) => {
        item.addEventListener("click", (e) => {
            const hash = e.currentTarget.hash;
            // console.log({hash})


            let targetBlock = document.querySelector(e.currentTarget.hash);
            console.log({
                targetBlock,
                top: targetBlock.offsetTop
            });
            e.preventDefault();
            // console.log(targetBlock.offsetTop);

            window.scrollTo({
                top: $(targetBlock).offset().top - ((e.currentTarget.hash === "#moonold_lb") ? 400 : 50),
                behavior: "smooth",
            });
        });
    });

    $(function() {
        setTimeout(() => {
            for (let i = 0; i < section.length; i++) {
                sections[section[i].id] = $(section[i]).offset().top;
                // console.log(section[i].id,  $(section[i]).offset().top);
            }
        }, 3000);
    })


    // Array.prototype.forEach.call(section, (e) => {
    //   sections[e.id] = e.offsetTop;
    // });
    // $(window).resize( ()=>{
    //   // Array.prototype.forEach.call(section, (e) => {
    //   //   sections[e.id] = e.offsetTop;
    //   // });
    //   /*
    //   for(let i =0; i<section.length; i++){
    //     sections[section[i].id] = section[i].offsetTop;
    //   }
    //   */
    // })

    window.onscroll = () => {
        let scrollPosition =
            document.documentElement.scrollTop || document.body.scrollTop;
        // let scrollPosition = window.pageYOffset;
        for (identCounter in sections) {
            if (sections[identCounter] <= (scrollPosition + $(window).height() * 1 / 3) || (sections[0] <= scrollPosition)) {
                // console.log(identCounter, sections[identCounter], scrollPosition);
                document.querySelector(".active_lb").removeAttribute("class");
                document
                    .querySelector("a[href*=" + identCounter + "]")
                    .setAttribute("class", "active_lb");
            }
        }
    };


    // const mbscrollLink = document.querySelectorAll(
    //     '.mbnavbar_lb a[href^="#"]'
    // );
    // const mbsection = document.querySelectorAll(".mbtargetScrollSection");
    // const mbsections = {};
    // let mbidentCounter = 0;

    // scrollLink.forEach((item) => {
    //     item.addEventListener("click", (e) => {
    //         const hash = e.currentTarget.hash;
    //         // console.log({hash})


    //         let targetBlock = document.querySelector(e.currentTarget.hash);
    //         console.log({
    //             targetBlock,
    //             top: targetBlock.offsetTop
    //         });
    //         e.preventDefault();
    //         // console.log(targetBlock.offsetTop);

    //         window.scrollTo({
    //             top: $(targetBlock).offset().top - ((e.currentTarget.hash === "#moonold_lb") ? 400 : 50),
    //             behavior: "smooth",
    //         });
    //     });
    // });

    // $(function() {
    //     setTimeout(() => {
    //         for (let i = 0; i < mbsection.length; i++) {
    //             mbsections[mbsection[i].id] = $(mbsection[i]).offset().top;
    //             // console.log(section[i].id,  $(section[i]).offset().top);
    //         }
    //     }, 3000);
    // })


    // window.onscroll = () => {
    //     let scrollPosition =
    //         document.documentElement.scrollTop || document.body.scrollTop;
    //     // let scrollPosition = window.pageYOffset;
    //     for (mbidentCounter in mbsections) {
    //         if (mbsections[mbidentCounter] <= (scrollPosition + $(window).height() * 1 / 3) || (mbsections[0] <= scrollPosition)) {
    //             // console.log(identCounter, sections[identCounter], scrollPosition);
    //             document.querySelector(".mbactive_lb").removeAttribute("class");
    //             document
    //                 .querySelector("a[href*=" + mbidentCounter + "]")
    //                 .setAttribute("class", "mbactive_lb");
    //         }
    //     }
    // };








    $('#mbTemCard-c01').click(function() {
        $('#c01-mbdetail-card').removeClass('d-none');
         $('#c01-mbdetail-card').css({
            transform: 'translateY(-580px)',
            opacity: 1,
        })
    });

    $('.prepage_lb').click(function () {
        $('.mbdetail-card_lb').addClass('d-none')
        
    });
    $('#mbTemCard-c06').click(function() {
        $('#c06-mbdetail-card').removeClass('d-none');
         $('#c06-mbdetail-card').css({
            transform: 'translateY(-580px)',
            opacity: 1,
        })
    });

    $('.prepage_lb').click(function () {
        $('.mbdetail-card_lb').addClass('d-none')
        
    });



    // 愛心變色(卡片)

    $('.icon_heart').click(function(e) {
        e.preventDefault();
        $(this).find('.heart_line').toggleClass('color')
    });

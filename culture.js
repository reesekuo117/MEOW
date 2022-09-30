//PC:側邊欄FIXED
$(window).scroll(function () {
  if ($(window).scrollTop() >=
    ($(".section1-content_lb").offset().top - window.screen.height * 1 / 3)){
    $(".sidebar_lb").css({
      transform: "translateY(0px)",
      opacity: 1,
    });
  } 
  else {
    $(".sidebar_lb").css({
      transform: "translateY(50px)",
      opacity: 0,
    });
  }
});

//MB:nav fixed
const navOffsetTop = $(".mbnavbar_lb").offset().top;

$(window).scroll(function () {
  if ($(window).scrollTop() >= navOffsetTop) {
    $(".mbnavbar_lb").addClass("mbnavbar_fixed");
  } else {
    // console.log('nav remove fixed');
    $(".mbnavbar_lb").removeClass("mbnavbar_fixed");
  }
});

//關於月老
//桌機
// $(window).scroll(function () {
//   if ($(window).scrollTop() >=
//     ($(".section1_lb").offset().top - window.screen.height * 2 / 3)) {
//     $(".section1-content_lb").css({
//       transform: "translateY(0px)",
//       opacity: 1,
//     });
//   } 
//   else {
//     $(".section1-content_lb").css({
//       transform: "translateY(10px)",
//       opacity: 0,
//     });
//   }
// });
// $(window).scroll(function () {
//   if (
//     $(window).scrollTop() >=
//     $(".section1-content_lb").offset().top - ($(window).height() * 1) / 10
//   ) {
//     $(".section1-content2_lb").css({
//       transform: "translateY(0px)",
//       opacity: 1,
//     });
//   } else {
//     $(".section1-content2_lb").css({
//       transform: "translateY(30px)",
//       opacity: 0,
//     });
//   }
// });
//mb

// $(window).scroll(function () {
//     if ($(window).scrollTop() >= ($('.mb-section1_lb').offset().top - $(window).height() * 1/ 3)) {
//       $('.mb-title_lb ').css({
//         // transform: 'translateY(0px)',
//         opacity: 1,
//       })
//     }
//     else {
//       $('.mb-title_lb').css({
//         // transform: 'translateY(30px)',
//         opacity: 0,
//       })
//     }
//   })

// $(window).scroll(function () {
//   if (
//     $(window).scrollTop() >=
//     $(".mb-section1_lb").offset().top - ($(window).height() * 1/ 3)
//   ) {
//     $(".mb-section1-top_lb").css({
//       transform: "translateY(-10px)",
//       opacity: 1,
//     });
//   } else {
//     $(".mb-section1-top_lb").css({
//       transform: "translateY(0px)",
//       opacity: 0,
//     });
//   }
// });
$(window).scroll(function () {
  if (
    $(window).scrollTop() >=
    $(".mb-section1-bottom_lb").offset().top - ($(window).height() * 3 / 4)
  ) {
    $(".mb-section1-bottom_lb").css({
      transform: "translateY(-20px)",
      opacity: 1,
    });
  } else {
    $(".mb-section1-bottom_lb").css({
      transform: "translateY(0px)",
      opacity: 0,
    });
  }
});

//廟照片滑動
$(window).scroll(function () {
  if (
    $(window).scrollTop() >=
    $(".pic-group_lb").offset().top - ($(window).height() * 2 / 3)
  ) {
    $(".tmp-pic1_lb").css({
      transform: "translateX(100px)",
      opacity: 1,
    });
  } else {
    $(".tmp-pic1_lb").css({
      transform: "translateX(0px)",
      opacity: 0,
    });
  }
});

$(window).scroll(function () {
  if (
    $(window).scrollTop() >=
    $(".tmp-pic2_lb").offset().top - ($(window).height() * 2 / 3)
  ) {
    $(".tmp-pic2_lb").css({
      transform: "translateX(100px)",
      opacity: 1,
    });
  } else {
    $(".tmp-pic2_lb").css({
      transform: "translateX(0px)",
      opacity: 0,
    });
  }
});

$(window).scroll(function () {
  if (
    $(window).scrollTop() >=
    $(".tmp-pic2_lb").offset().top - ($(window).height() * 1 / 3)
  ) {
    $(".tmp-pic3_lb").css({
      transform: "translateX(100px)",
      opacity: 1,
    });
  } else {
    $(".tmp-pic3_lb").css({
      transform: "translateX(0px)",
      opacity: 0,
    });
  }
});

// 捲動視窗觸發紅線svg動畫
$(window).scroll(function () {
  if (
    $(window).scrollTop() >=
    $(".section2_box").offset().top - ($(window).height() * 1 / 3)
  ) {
    $("#rdLine-1").addClass("rdLine-1 d-md-block");
  } else {
    $("#rdLine-1").removeClass("rdLine-1 d-md-block");
  }
});

$(window).scroll(function () {
  if (
    $(window).scrollTop() >=
    $(".step1_lb").offset().top - ($(window).height() * 1 / 3)
  ) {
    $("#rdLine-2").addClass("rdLine-2 d-md-block");
  } else {
    $("#rdLine-2").removeClass("rdLine-2 d-md-block");
  }
});
$(window).scroll(function () {
  if (
    $(window).scrollTop() >=
    $(".step2_lb").offset().top - ($(window).height() * 1 / 3)
  ) {
    $("#rdLine-3").addClass("rdLine-3 d-md-block");
  } else {
    $("#rdLine-3").removeClass("rdLine-3 d-md-block");
  }
});
$(window).scroll(function () {
  if (
    $(window).scrollTop() >=
    $(".step3_lb").offset().top - ($(window).height() * 1 / 3)
  ) {
    $("#rdLine-4").addClass("rdLine-4 d-md-block");
  } else {
    $("#rdLine-4").removeClass("rdLine-4 d-md-block");
  }
});
$(window).scroll(function () {
  if (
    $(window).scrollTop() >=
    $(".step4_lb").offset().top - ($(window).height() * 1 / 3)
  ) {
    $("#rdLine-5").addClass("rdLine-5 d-md-block");
  } else {
    $("#rdLine-5").removeClass("rdLine-5 d-md-block");
  }
});
$(window).scroll(function () {
  if (
    $(window).scrollTop() >=
    $(".step5_lb").offset().top - ($(window).height() * 1 / 3)
  ) {
    $("#rdLine-6").addClass("rdLine-6 d-md-block");
  } else {
    $("#rdLine-6").removeClass("rdLine-6 d-md-block");
  }
});

$(window).scroll(function () {
  if (
    $(window).scrollTop() >=
    $(".step1_lb").offset().top - ($(window).height() * 1 / 3)
  ) {
    $(".step2_lb").css({
      //   transform: "translateY(0px)",
      opacity: 1,
    });
  } else {
    $(".step2_lb").css({
      //   transform: "translateY(50px)",
      opacity: 0,
    });
  }
});

$(window).scroll(function () {
  if (
    $(window).scrollTop() >=
    $(".step2_lb").offset().top - ($(window).height() * 1 / 3)
  ) {
    $(".step3_lb").css({
      //   transform: "translateY(0px)",
      opacity: 1,
    });
  } else {
    $(".step3_lb").css({
      //   transform: "translateY(50px)",
      opacity: 0,
    });
  }
});

$(window).scroll(function () {
  if (
    $(window).scrollTop() >=
    $(".step3_lb").offset().top - ($(window).height() * 1 / 3)
  ) {
    $(".step4_lb").css({
      //   transform: "translateY(0px)",
      opacity: 1,
    });
  } else {
    $(".step4_lb").css({
      //   transform: "translateY(50px)",
      opacity: 0,
    });
  }
});

$(window).scroll(function () {
  if (
    $(window).scrollTop() >=
    $(".step4_lb").offset().top - ($(window).height() * 1 / 3)
  ) {
    $(".step5_lb").css({
      //   transform: "translateY(0px)",
      opacity: 1,
    });
  } else {
    $(".step5_lb").css({
      //   transform: "translateY(50px)",
      opacity: 0,
    });
  }
});

$(window).resize(function () {
  const windowWidth = $(window).width();

  if (windowWidth <= 768) {
    $(".left-cat-animation_lb").css({
      transform: `translateX(${0}px)`,
      transition: "none",
      opacity: 1,
    });
    $(".right-cat-animation_lb").css({
      transform: `translateX(-${0}px)`,
      transition: "none",
      opacity: 1,
    });
  }
});

// cp貓PC相遇
$(window).scroll(function () {
  if (
    $(window).scrollTop() >=
    $(".cp-cat-move").offset().top - ($(window).height() * 2 / 3)
  ) {
    const windowWidth = $(window).width();

    const catParentDom = $(".left-cat-animation_lb").parent().width();
    const leftCatWidth = $(".left-cat-animation_lb").width();

    const leftCatMovement = catParentDom / 2 - leftCatWidth;

    if (windowWidth > 768) {
      $(".left-cat-animation_lb").css({
        transform: `translateX(${leftCatMovement}px)`,
        transition: "2s",
        opacity: 1,
      });
      $(".right-cat-animation_lb").css({
        transform: `translateX(-${leftCatMovement}px)`,
        transition: "2s",
        opacity: 1,
      });

      const leftCatTrans = $(".left-cat-animation_lb").css("transform");
      setTimeout(
        function () {
          $(".heart-animation_lb").css({
            opacity: 1,
          });
        },
        leftCatTrans === "none" ? 1300 : 200
      );
    } else {
      $(".heart-animation_lb").css({
        opacity: 1,
      });
    }
  } else {
    $(".left-cat-animation_lb").css({
      // transform: 'translateX(-30px)',
      opacity: 1,
    });
    $(".right-cat-animation_lb").css({
      // transform: 'translateX(800px)',
      opacity: 1,
    });
    $(".heart-animation_lb").css({
      opacity: 0,
    });
  }
});

//桌機參拜禁忌卡片
$(window).scroll(function () {
  if (
    $(window).scrollTop() >=
    $(".section3_lb ").offset().top - ($(window).height() * 1 / 3)
  ) {
    $(".ban-card").css({
      transform: "translateX(0px)",
      opacity: 1,
    });
  } else {
    $(".ban-card").css({
      transform: "translateX(50px)",
      opacity: 0,
    });
  }
});

//桌機如何還願 devo-content

//   $(window).scroll(function () {
//     if (
//       $(window).scrollTop() >=
//       $(".section4_lb").offset().top - ($(window).height() * 1/ 3)
//     ) {
//       $(".section4_lb ").css({
//         transform: "translateY(0px)",
//         opacity: 1,
//       });
//     } else {
//       $(".section4_lb ").css({
//         transform: "translateY(30px)",
//         opacity: 0,
//       });
//     }
//   });

$(window).scroll(function () {
  if (
    $(window).scrollTop() >=
    $(".section4_lb").offset().top - ($(window).height() * 1 / 3)
  ) {
    $(".devo-content").css({
      transform: "translateY(0px)",
      opacity: 1,
    });
  } else {
    $(".devo-content").css({
      transform: "translateY(30px)",
      opacity: 0,
    });
  }
});

//側邊欄滾到該區域會變色
const scrollLink = document.querySelectorAll('.sidebar_lb a[href^="#"]');
const section = document.querySelectorAll(".targetScrollSection");
let sections = {};
let identCounter = 0;

scrollLink.forEach((item) => {
  item.addEventListener("click", (e) => {
    const hash = e.currentTarget.hash;
    // console.log({hash})

    let targetBlock = document.querySelector(e.currentTarget.hash);
    console.log({
      targetBlock,
      top: targetBlock.offsetTop,
    });
    e.preventDefault();
    // console.log(targetBlock.offsetTop);

    window.scrollTo({
      top:
        $(targetBlock).offset().top -
        (e.currentTarget.hash === "#moonold_lb" ? 400 : 50),
      behavior: "smooth",
    });
  });
});



//mbnavbar變色
const mbscrollLink = document.querySelectorAll('.mbnavbar_lb a[href^="#"]');
const mbsection = document.querySelectorAll(".mbtargetScrollSection");
let mbsections = {};
let mbidentCounter = 0;

scrollLink.forEach((item) => {
  item.addEventListener("click", (e) => {
    const hash = e.currentTarget.hash;
    console.log({ hash });

    let targetBlock = document.querySelector(e.currentTarget.hash);
    console.log({
      targetBlock,
      top: targetBlock.offsetTop,
    });
    e.preventDefault();
    console.log(targetBlock.offsetTop);

    window.scrollTo({
      top:
        $(targetBlock).offset().top -
        (e.currentTarget.hash === "#moonold_lb" ? 400 : 50),
      behavior: "smooth",
    });
  });
});

$(function () {
    
    //   for (let i = 0; i < section.length; i++) {
    //     sections[section[i].id] = $(section[i]).offset().top;
    //     // console.log(section[i].id,  $(section[i]).offset().top);
    //   }
   
        // for (let i = 0; i < mbsection.length; i++) {
        //   mbsections[mbsection[i].id] = $(mbsection[i]).offset().top;
        //   // console.log(section[i].id,  $(section[i]).offset().top);
        // }

        sections = {"moonold_lb":1066,"byebye_lb":3582.59375,"notice_lb":6939.703125,"givebk_lb":7815.703125,"selected-temple_lb":8189.703125}

        mbsections = {"mbmoonold_lb":271.59375,"byebye_lb":1478.375,"mbnotice_lb":4357.234375,"mbsection4_lb":5003.15625,"mbselected-temple_lb":5294.734375}
     
});

$(window).resize(function(){
     changeLinkColor();
})

function changeLinkColor(){
    // console.log('changeLinkColor');
    let scrollPosition =
    document.documentElement.scrollTop || document.body.scrollTop;
  // let scrollPosition = window.pageYOffset;

  if ($(window).width() < 768) {
    for (mbidentCounter in mbsections) {
      if (
        mbsections[mbidentCounter] <=
          scrollPosition + ($(window).height() * 1 / 3) ||
        mbsections[0] <= scrollPosition
      ) {
        // console.log(mbidentCounter, mbsections[mbidentCounter], scrollPosition);
        document.querySelectorAll(".mbactive_lb").forEach((item)=>{
            // console.log('item',item);
            item.removeAttribute("class");
        })

        

        const length = document.querySelectorAll(
          "a[href*=" + mbidentCounter + "]"
        ).length;

        // console.log('length',length);
        // console.log(document
        //     .querySelectorAll("a[href*=" + mbidentCounter + "]")
        //     [length - 1]);
        document
          .querySelectorAll("a[href*=" + mbidentCounter + "]")
          [length - 1].setAttribute("class", "mbactive_lb");
        }
    }
  } else {
    for (identCounter in sections) {
      if (
        sections[identCounter] <=
        scrollPosition + ($(window).height() * 1 / 3)
      ) {
        // console.log(identCounter, sections[identCounter], scrollPosition);
        document.querySelector(".active_lb").removeAttribute("class");
        document
          .querySelector("a[href*=" + identCounter + "]")
          .setAttribute("class", "active_lb");
      }
    }
  }
}


window.onscroll = () => {
    changeLinkColor()
};




// 愛心變色(卡片)

$(".icon_heart").click(function (e) {
  e.preventDefault();
  $(this).find(".heart_line").toggleClass("color");
});


const cardsContainer = document.querySelectorAll(".card-carousel");
const cardsController = document.querySelector(".card-carousel + .card-controller")

class DraggingEvent {
    constructor(target = undefined) {
        this.target = target;
    }

    event(callback) {
        let handler;

        this.target.addEventListener("mousedown", e => {
            e.preventDefault()

            handler = callback(e)

            window.addEventListener("mousemove", handler)

            document.addEventListener("mouseleave", clearDraggingEvent)

            window.addEventListener("mouseup", clearDraggingEvent)

            function clearDraggingEvent() {
                window.removeEventListener("mousemove", handler)
                window.removeEventListener("mouseup", clearDraggingEvent)

                document.removeEventListener("mouseleave", clearDraggingEvent)

                handler(null)
            }
        })

        this.target.addEventListener("touchstart", e => {
            handler = callback(e)

            window.addEventListener("touchmove", handler)

            window.addEventListener("touchend", clearDraggingEvent)

            document.body.addEventListener("mouseleave", clearDraggingEvent)

            function clearDraggingEvent() {
                window.removeEventListener("touchmove", handler)
                window.removeEventListener("touchend", clearDraggingEvent)

                handler(null)
            }
        })
    }

    // Get the distance that the user has dragged
    getDistance(callback) {
        function distanceInit(e1) {
            let startingX, startingY;

            if ("touches" in e1) {
                startingX = e1.touches[0].clientX
                startingY = e1.touches[0].clientY
            } else {
                startingX = e1.clientX
                startingY = e1.clientY
            }


            return function (e2) {
                if (e2 === null) {
                    return callback(null)
                } else {

                    if ("touches" in e2) {
                        return callback({
                            x: e2.touches[0].clientX - startingX,
                            y: e2.touches[0].clientY - startingY
                        })
                    } else {
                        return callback({
                            x: e2.clientX - startingX,
                            y: e2.clientY - startingY
                        })
                    }
                }
            }
        }

        this.event(distanceInit)
    }
}


class CardCarousel extends DraggingEvent {
    constructor(container, controller = undefined) {
        super(container)

        // DOM elements
        this.container = container
        this.controllerElement = controller
        this.cards = container.querySelectorAll(".card")

        // Carousel data
        this.centerIndex = (this.cards.length - 1) / 2;
        this.cardWidth = this.cards[0].offsetWidth / this.container.offsetWidth * 100
        this.xScale = {};

        // Resizing
        window.addEventListener("resize", this.updateCardWidth.bind(this))

        if (this.controllerElement) {
            this.controllerElement.addEventListener("keydown", this.controller.bind(this))
        }


        // Initializers
        this.build()

        // Bind dragging event
        super.getDistance(this.moveCards.bind(this))
    }

    updateCardWidth() {
        this.cardWidth = this.cards[0].offsetWidth / this.container.offsetWidth * 100

        this.build()
    }

    build(fix = 0) {
        for (let i = 0; i < this.cards.length; i++) {
            const x = i - this.centerIndex;
            const scale = this.calcScale(x)
            const scale2 = this.calcScale2(x)
            const zIndex = -(Math.abs(i - this.centerIndex))

            const leftPos = this.calcPos(x, scale2)


            this.xScale[x] = this.cards[i]

            this.updateCards(this.cards[i], {
                x: x,
                scale: scale,
                leftPos: leftPos,
                zIndex: zIndex
            })
        }
    }


    controller(e) {
        const temp = { ...this.xScale };

        if (e.keyCode === 39) {
            // Left arrow
            for (let x in this.xScale) {
                const newX = (parseInt(x) - 1 < -this.centerIndex) ? this.centerIndex : parseInt(x) - 1;

                temp[newX] = this.xScale[x]
            }
        }

        if (e.keyCode == 37) {
            // Right arrow
            for (let x in this.xScale) {
                const newX = (parseInt(x) + 1 > this.centerIndex) ? -this.centerIndex : parseInt(x) + 1;

                temp[newX] = this.xScale[x]
            }
        }

        this.xScale = temp;

        for (let x in temp) {
            const scale = this.calcScale(x),
                scale2 = this.calcScale2(x),
                leftPos = this.calcPos(x, scale2),
                zIndex = -Math.abs(x)

            this.updateCards(this.xScale[x], {
                x: x,
                scale: scale,
                leftPos: leftPos,
                zIndex: zIndex
            })
        }
    }

    calcPos(x, scale) {
        let formula;

        if (x < 0) {
            formula = (scale * 100 - this.cardWidth) / 2

            return formula

        } else if (x > 0) {
            formula = 100 - (scale * 100 + this.cardWidth) / 2

            return formula
        } else {
            formula = 100 - (scale * 100 + this.cardWidth) / 2

            return formula
        }
    }

    updateCards(card, data) {
        if (data.x || data.x == 0) {
            card.setAttribute("data-x", data.x)
        }

        if (data.scale || data.scale == 0) {
            card.style.transform = `scale(${data.scale})`

            if (data.scale == 0) {
                card.style.opacity = data.scale
            } else {
                card.style.opacity = 1;
            }
        }

        if (data.leftPos) {
            card.style.left = `${data.leftPos}%`
        }

        if (data.zIndex || data.zIndex == 0) {
            if (data.zIndex == 0) {
                card.classList.add("highlight")
            } else {
                card.classList.remove("highlight")
            }

            card.style.zIndex = data.zIndex
        }
    }

    calcScale2(x) {
        let formula;

        if (x <= 0) {
            formula = 1 - -1 / 5 * x

            return formula
        } else if (x > 0) {
            formula = 1 - 1 / 5 * x

            return formula
        }
    }

    calcScale(x) {
        const formula = 1 - 1 / 5 * Math.pow(x, 2)

        if (formula <= 0) {
            return 0
        } else {
            return formula
        }
    }

    checkOrdering(card, x, xDist) {
        const original = parseInt(card.dataset.x)
        const rounded = Math.round(xDist)
        let newX = x

        if (x !== x + rounded) {
            if (x + rounded > original) {
                if (x + rounded > this.centerIndex) {

                    newX = ((x + rounded - 1) - this.centerIndex) - rounded + -this.centerIndex
                }
            } else if (x + rounded < original) {
                if (x + rounded < -this.centerIndex) {

                    newX = ((x + rounded + 1) + this.centerIndex) - rounded + this.centerIndex
                }
            }

            this.xScale[newX + rounded] = card;
        }

        const temp = -Math.abs(newX + rounded)

        this.updateCards(card, { zIndex: temp })

        return newX;
    }

    moveCards(data) {
        let xDist;

        if (data != null) {
            this.container.classList.remove("smooth-return")
            xDist = data.x / 250;
        } else {


            this.container.classList.add("smooth-return")
            xDist = 0;

            for (let x in this.xScale) {
                this.updateCards(this.xScale[x], {
                    x: x,
                    zIndex: Math.abs(Math.abs(x) - this.centerIndex)
                })
            }
        }

        for (let i = 0; i < this.cards.length; i++) {
            const x = this.checkOrdering(this.cards[i], parseInt(this.cards[i].dataset.x), xDist),
                scale = this.calcScale(x + xDist),
                scale2 = this.calcScale2(x + xDist),
                leftPos = this.calcPos(x + xDist, scale2)


            this.updateCards(this.cards[i], {
                scale: scale,
                leftPos: leftPos
            })
        }
    }
}

const carousel = new CardCarousel(cardsContainer[0])
const carousel2 = new CardCarousel(cardsContainer[1])
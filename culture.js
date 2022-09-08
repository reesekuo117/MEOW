//TODO:側邊欄FIXED
$(window).scroll(function () {
      if ($(window).scrollTop() >= ($('.section1-content_lb').offset().top - $(window).height() * 1 / 3)) {
        $('.sidebar_lb').css({
          transform: 'translateY(0px)',
          opacity: 1,
        })
      }
      else {
        $('.sidebar_lb').css({
          transform: 'translateY(50px)',
          opacity: 0,
        })
      }
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
          console.log({hash})


          let targetBlock = document.querySelector(e.currentTarget.hash);
          console.log({targetBlock, top: targetBlock.offsetTop});
          e.preventDefault();
          console.log(targetBlock.offsetTop);
          window.scrollTo({
            top: targetBlock.offsetTop,
            behavior: "smooth",
          });
        });
      });

      $(function(){
        for(let i =0; i<section.length; i++){
          sections[section[i].id] = section[i].offsetTop;
          console.log(section[i].id, section[i].offsetTop);
        }
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
          if (sections[identCounter] <= scrollPosition) {
            console.log(identCounter, sections[identCounter], scrollPosition);
            document.querySelector(".active_lb").removeAttribute("class");
            document
              .querySelector("a[href*=" + identCounter + "]")
              .setAttribute("class", "active_lb");
          }
        }
      };


    // cp貓相遇
    $(window).scroll(function () {
      if ($(window).scrollTop() >= ($('.cp-cat-move').offset().top - $(window).height() * 2/ 3)) {
        $('.left-cat-animation_lb').css({
          transform: 'translateX(400px)',
          opacity: 1,
        });
        $('.right-cat-animation_lb').css({
          transform: 'translateX(450px)',
          opacity: 1,
        });

        setTimeout(function(){
           $('.heart-animation_lb').css({
            opacity:1}); 
        },1300);
        
      }
      else {
        $('.left-cat-animation_lb').css({
          transform: 'translateX(-30px)',
          opacity: 1,
        });
        $('.right-cat-animation_lb').css({
          transform: 'translateX(800px)',
          opacity: 1,
        });
        $('.heart-animation_lb').css({
            opacity:0,
        })
      }
    })


    //全台月老廟篩選

    let itemLbArray = [
        ['祈求姻緣','斬桃花、小三'],
        ['祈求姻緣'],
        ['祈求姻緣','幸福美滿','斬桃花、小三'],
    ];

    $('#area_lb').change(function() {
        const areaLbNumber = $(this).val();
        const itemLbData = itemLbArray [areaLbNumber];
        
        $('#item_lb').empty();
        
        $(itemLbData).each(function(index,item){
            $('#item_lb').append(`<option value="${index}">${item}</option>`);
        });
});
    
   


//當點擊哪一區地圖會變色加位移
$('.path_lb').on({
  click: function (){
    $('.path_lb').removeAttr('style');
    $(this).css({
      "fill":"#E5A62A",
       "-webkit-transform":"translate(-5px,-5px)",
    });
    
    }


}); 

//點擊出現地標卡片  
$('.north').click(function(){
  $('#north-group_lb').removeClass('d-none');
  $('#middle-group_lb').addClass('d-none');
  $('#south-group_lb').addClass('d-none');
})
  
$('.middle').click(function(){
  $('#north-group_lb').addClass('d-none');
  $('#middle-group_lb').removeClass('d-none');
  $('#south-group_lb').addClass('d-none');
})
  
$('.south').click(function(){
  $('#north-group_lb').addClass('d-none');
  $('#middle-group_lb').addClass('d-none');
  $('#south-group_lb').removeClass('d-none');
})
  
$('.C01').click(function () {
  $('#c01-info-card_lb').removeClass('d-none');
  $('#c06-info-card_lb').addClass('d-none');
  
})
  
$('.C06').click(function () {
  $('#c06-info-card_lb').removeClass('d-none');
  $('#c01-info-card_lb').addClass('d-none');
  
})
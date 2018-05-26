function animasiRoket(){
  $('#roket').velocity({
    bottom: "15px"
  }, {duration: 1500, loop: true
  });
}

function animasiTombol(){
  $(".btn-selengkapnya a").mouseenter(function (){
    $(this).velocity({
      padding: "5px 31px"
    });
  });


  $(".btn-selengkapnya a").mouseleave(function (){
    $(this).velocity({
      padding: "5px 15px"
    });
  });

  $("nav ul a li").mouseenter(function (){
    $("this hr").velocity({
      width: "100%"
    });
  });
}

function slider(num){
  $('.slide-item-container').animate({marginLeft: num});
}

function showMenu(){
  $('.menu-smarthphone').velocity("transition.slideRightBigIn");
}

function hideMenu(){
  $('.menu-smarthphone').velocity("transition.slideRightBigOut");
}

$(document).ready(function(){

  animasiRoket();
  animasiTombol();
//mencari lebar window
  // $(window).on('resize',function(){
  //   var resize = $(this).width();
  //   console.log(resize);
  // });


  $("#owl-demo").owlCarousel({
    itemsDesktopSmall:[979,3],
    navigation : true,
  });

});


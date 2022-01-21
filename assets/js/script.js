
$(document).ready(function(){

  $closed1 = false;
  $closed2 = false;
  var oldSrc = 'assets/img/shrink.svg';
  var newSrc = 'assets/img/normal.svg';
  $(".close1").click(function(){
    if($closed1 == false) {
      $(this).parent().animate({height:'10vh'},"slow");
      $(this).attr('src', newSrc);
      $(this).parent().find("p, button").animate({display:'none'},"slow");
      $(this).parent().find("h1").css({"position":"absolute","top":"-0.5rem"});

    }
    else {
      $(this).parent().animate({height:'40vh'},"slow");
      $(this).attr('src', oldSrc);
      $(this).parent().find("p, button").animate({display:'block'},"slow");
       $(this).parent().find("h1").css({"position":"initial","top":"1rem"});
    }
    $closed1 = !$closed1;
  })
  $(".close2").click(function(){
    if($closed2 == false) {
      $(this).parent().animate({height:'10vh'},"slow");
      $(this).attr('src', newSrc);
      $(".newswrapper").animate({display:'none'},"slow");
      $(this).parent().find("h1").animate({position:'absolute',top:'-0.5rem'},"slow");

    }
    else {
      $(this).parent().animate({height:'40vh'},"slow");
      $(this).attr('src', oldSrc);
      $(".newswrapper").animate({display:'block'},"slow");
       $(this).parent().find("h1").animate({position:'initial',top:'1rem'},"slow");
    }
    $closed2 = !$closed2;
  })
  /*
  $(this).attr('src', 'assets/img/normal.svg').addClass("normal");
  })
$(".normal").click(function(){
  $(this).parent().removeClass("shrink").addClass("normal");
  $(this).attr('src', 'assets/img/normal.svg')
})
*/
  $(".projekt-text").click(function(){
    $(".projekt-image").css('flex','0.5');
    $(".projekt-text").css('flex','1');
  })

  $(".projekt-image").click(function(){
    $(".projekt-text").css('flex','0.3');
    $(".projekt-image").css('flex','1');
  })

  $(".impressum").click(function(){
    $(".datenschutz").css('flex','0.5');
    $(".impressum").css('flex','1');
  })

  $(".datenschutz").click(function(){
    $(".impressum").css('flex','0.3');
    $(".datenschutz").css('flex','1');
  })

  // $("#comarts").addClass("highlighted")
  //
  // $(".menu-item").click(function(){
  //   $(".menu-item").removeClass("highlighted")
  //   $(this).addClass("highlighted")
  // })

  var all_links = document.querySelectorAll('a');
  for (var i = 0; i < all_links.length; i++){
         var a = all_links[i];
         if(a.hostname != location.hostname) {
                 a.rel = 'noopener';
                 a.target = '_blank';
         }
  }


 })

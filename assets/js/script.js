
$(document).ready(function(){

  $closed1 = false;
  $closed2 = false;
  var oldSrc = 'assets/img/shrink.svg';
  var newSrc = 'assets/img/normal.svg';
  $(".close1").click(function(){
    if($closed1 == false) {
      $(this).parent().css("height","10vh");
      $(this).attr('src', newSrc);
      $(this).parent().find("p, button").css("display","none");
      $(this).parent().find(".content").css("display":"inline-block","position":"absolute","top":"0.5rem")

    }
    else {
      $(this).parent().css("height","29vh");
      $(this).attr('src', oldSrc);
      $(this).parent().find("p, button").css("display","block");
      // $(this).parent().find(".content").css();
    }
    $closed1 = !$closed1;
  })
  $(".close2").click(function(){
    if($closed2 == false) {
      $(this).parent().css("height","10vh");
      $(this).attr('src', newSrc);
      $(this).parent().find("p, button").css("display","none");
      //$(this).parent().find(".content").css("display":"inline-block","position":"absolute","left":"9%","top":"-20%")

    }
    else {
      $(this).parent().css("height","29vh");
      $(this).attr('src', oldSrc);
      $(this).parent().find("p, button").css("display","block");
      // $(this).parent().find(".content").css();
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

  // $("#comarts").addClass("highlighted")
  //
  // $(".menu-item").click(function(){
  //   $(".menu-item").removeClass("highlighted")
  //   $(this).addClass("highlighted")
  // })




 })

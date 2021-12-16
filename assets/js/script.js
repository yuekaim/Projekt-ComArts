
$(document).ready(function(){

  $closed = false;
  $(".close").click(function(){
    if($closed == false) {
      $(this).parent().css("height","10vh");
    }
    else {
      $(this).parent().css("height","29vh");
    }
    $closed = !$closed;
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

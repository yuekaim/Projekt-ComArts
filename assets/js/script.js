
$(document).ready(function(){

  // $("#canvas").click(function(){
  //   $("div.paperjs").hide();
  //   $("div.menu").css("display","flex");
  //   $(".short-about, .headline, .news").css("display","block");
  // })

  $(function(){
      $(".close").on('click', function(){
          $(this).parent().addClass("shrink")
     });
  });
  /*
  $(".close").click(function(){
    //$(this).parent().hide(200);
    $(this).parent().css("height","10vh");
    //$(this).parent().toggleClass("shrink");
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

  $("#comarts").addClass("highlighted")

  $(".menu-item").click(function(){
    $(".menu-item").removeClass("highlighted")
    $(this).addClass("highlighted")
  })
 })


$(document).ready(function(){

  // $("#canvas").click(function(){
  //   $("div.paperjs").hide();
  //   $("div.menu").css("display","flex");
  //   $(".short-about, .headline, .news").css("display","block");
  // })
/*
  $(function(){
      $(".close").on('click', function(){
          $(this).parent().addClass("shrink")
     });
  });
*/
  $(".close").click(function(){

    //$(this).parent().hide(200);
  $(this).parent().removeClass("normal").addClass("shrink");
  $(this).attr('src', 'assets/img/normal.svg').addClass("normal");
  })
$(".normal").click(function(){
  $(this).parent().removeClass("shrink").addClass("normal");
  $(this).attr('src', 'assets/img/normal.svg')
})
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

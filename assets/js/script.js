
$(document).ready(function(){

  $("#canvas").click(function(){
    $("div.paperjs").hide();
    $("div.menu").css("display","flex");
    $(".short-about, .headline, .news").css("display","block");
  })

  $(".close").click(function(){
    $(this).parent().hide(200);
  })

  $(".projekt-text").click(function(){
    $(".projekt-image").css('flex','0.5');
    $(".projekt-text").css('flex','1');
  })

  $(".projekt-image").click(function(){
    $(".projekt-text").css('flex','0.3');
    $(".projekt-image").css('flex','1');
  })

 })

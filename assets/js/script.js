
$(document).ready(function(){

  $("#canvas").click(function(){
    $("div.paperjs").hide();
    $("div.menu").css("display","flex");
    $(".short-about, .headline, .news").css("display","block");
  })

  $(".close").click(function(){
    $(this).parent().hide(200);
  })

 })

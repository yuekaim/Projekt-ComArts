$(document).ready(function(){
  $('.expand').click(function(){
    // $(".projekt-text").css("width");
    $(".projekt-text").show();

  })

  $(".projekt-text").click(function(){
    $(this).hide(300);
  })

});

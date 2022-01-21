$(document).ready(function(){
  $expanded = false;
  $('.expand').click(function(){
    // $(".projekt-text").css("width");
    if ($expanded == false) {
      $(".projekt-text").show();
      $expanded = true;
      $('.expand').html('-');
    }else{
      $('.projekt-text').hide();
      $expanded = false;
      $('.expand').html('+');
    }
  })


});

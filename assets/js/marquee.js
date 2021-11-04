window.requestAnimationFrame = (function(){
  return  window.requestAnimationFrame       ||
          window.webkitRequestAnimationFrame ||
          window.mozRequestAnimationFrame    ||
          function( callback ){
            window.setTimeout(callback, 1000 / 60);
          };
})();

var speed = 5000;
(function currencySlide(){
    var currencyPairWidth = $('span:first-child').outerWidth();
    $(".marquee").animate({marginLeft:-currencyPairWidth},speed, 'linear', function(){
      $(this).css({marginLeft:0}).find("span:last").after($(this).find("span:first"));
        });
        requestAnimationFrame(currencySlide);
})();

/*
function makeMarquee (){
  if(document.querySelector('#top').innerText != null){
    const titleTop = document.querySelector('#top').innerText|| element.textContent
    const textTop = new Array(50).fill(titleTop).join('-')
    const marqueeTop =document.querySelector('#top')
    marqueeTop.innerHTML = textTop
}
if(document.querySelector('#bottom').innerText != null){
    const titleBottom = document.querySelector('#bottom').innerText|| element.textContent
    const textBottom = new Array(50).fill(titleBottom).join('-')
    const marqueeBottom =document.querySelector('#bottom')
    marqueeBottom.innerHTML = textBottom
  }
}
makeMarquee()
*/
$(document).ready(function(){

   // 开始写 jQuery 代码...
   function makeMarquee (){
    const titleTop = $('.top span').text()
   // alert(titleTop)

    const textTop = new Array(50).fill(titleTop).join('-')
     //alert(textTop)
    $('.top span').text(textTop)
    //const marqueeTop =$('.top span')
    //marqueeTop.innerHTML = textTop

  }
  makeMarquee()
});

function makeMarquee (){
  if(document.querySelector('.top span').innerText != null){
    const titleTop = document.querySelector('.top span').innerText|| element.textContent
    const textTop = new Array(50).fill(titleTop).join('-')
    const marqueeTop =document.querySelector('.top span')
    marqueeTop.innerHTML = textTop
}
if(document.querySelector('.bottom span').innerText != null){
    const titleBottom = document.querySelector('.bottom span').innerText|| element.textContent
    const textBottom = new Array(50).fill(titleBottom).join('-')
    const marqueeBottom =document.querySelector('.bottom span')
    marqueeBottom.innerHTML = textBottom
  }
}
makeMarquee()

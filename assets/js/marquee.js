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

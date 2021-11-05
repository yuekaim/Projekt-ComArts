function makeMarquee (){
  const titleTop = document.querySelector('.top span').innerText
  const textTop = new Array(50).fill(titleTop).join('-')
  const marqueeTop =document.querySelector('.top span')
  marqueeTop.innerHTML = textTop
  const titleBottom = document.querySelector('.bottom span').innerText
  const textBottom = new Array(50).fill(titleBottom).join('-')
  const marqueeBottom =document.querySelector('.bottom span')
  marqueeBottom.innerHTML = textBottom
}
makeMarquee()

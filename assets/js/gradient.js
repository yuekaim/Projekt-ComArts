let layer1 = document.querySelector('div.layer1')
let layer2 = document.querySelector('div.layer2')
let button = document.querySelector("button")

function makeColor() {
  let h = Math.random() * 360
  let s = 50 + Math.random() * 50
  let l = 40 + Math.random() * 50
  return `hsl(${h}, ${s}%, ${l}%)`
}

function makeGradient() {
  let c1 = makeColor()
  let c2 = makeColor()
  let angle = Math.random() * 360
  return `linear-gradient(${angle}deg,${c1}, ${c2})`
}
function changeBg() {
  layer1.style.backgroundImage = makeGradient()
  layer2.style.nackgroundImage = makeGradient()
}

changeBg()

$(document).ready(function(){
  $("div.menu a").click(function(){
    changeBg()
  })

});

const element = document.getElementById("next__linkValue");
const barValue = document.querySelector(".bar__value")
const style = document.createElement("style")

let contador = 11
let contadorBar = 25

setInterval(() => {
  contador -= 1
  contador < 0 ? contador = -1 : element.innerHTML = contador
}
, 1000);

setInterval(()=> {
  contadorBar += 25
  contadorBar > 100 ? contadorBar = 100 : barValue.style.width = `${contadorBar}%`

}, 1000)


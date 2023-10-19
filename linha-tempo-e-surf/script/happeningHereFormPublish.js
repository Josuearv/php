const closeModalExit = document.querySelector(".closeModalPublish")
const sectionModalPublish = document.querySelector(".section__timeLine--mobile")

let txtAreas = document.querySelectorAll('.autoTxtArea');
for(x=0;x<txtAreas.length;x++){
   txtAreas[x].addEventListener('input', function(){
        if(this.scrollHeight > this.offsetHeight) this.rows += 1;
   });
}

function limite_textarea(valor) {
  quant = 156;
  total = valor.length;
  if(total <= quant) {
    resto = quant - total;
    document.getElementById('cont').innerHTML = resto;
  } else {
    document.getElementById('texto').value = valor.substr(0,quant);
  }
}


closeModalExit.addEventListener("click", ()=>{
  sectionModalPublish.classList.remove("active__buttonPublish")
})
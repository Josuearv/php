const withdraw = document.querySelector(".withdraw__interest")
const upNell = document.querySelector(".score__upNell")

withdraw.addEventListener("click", ()=>{
  console.log("hello")
  let box = event.target.parentElement.parentElement.parentElement;
  if(box.classList.contains('box-saques-aberto')){
    box.classList.remove('box-saques-aberto');
    box.classList.add('box-saques-fechado');
    event.currentTarget.style.transform = 'rotate(180deg)';
  }
  else {
    box.classList.remove('box-saques-fechado');
    box.classList.add('box-saques-aberto');
    event.currentTarget.style.transform = 'rotate(0deg)';
  }

})

upNell.addEventListener("click", ()=>{
  let box = event.target.parentElement.parentElement.parentElement;
  if(box.classList.contains('box-subir-escore-aberto')){
      box.classList.remove('box-subir-escore-aberto');
      box.classList.add('box-subir-escore-fechado');
      event.currentTarget.style.transform = 'rotate(180deg)';
  } else {
      box.classList.remove('box-subir-escore-fechado');
      box.classList.add('box-subir-escore-aberto');
      event.currentTarget.style.transform = 'rotate(0deg)';
  }
})
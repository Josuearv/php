const modalliActive = document.querySelectorAll(".li__askedQuestions-element")
const modalNavBlock = document.querySelectorAll(".li__askedQuestions-element")
const modalLiTable = document.querySelectorAll(".primary__border-element ")
const modalLiTableAc = document.querySelectorAll(".primary__border-element ")
const buttonOpenModalAllic = document.querySelectorAll(".localizationModal")
const buttonModalCompareAllic = document.querySelectorAll(".localizationModal")
const modalUlPerfil = document.querySelector(".border__pieces-element")


console.log(modalLiTable)
let modalLi = false 
let setModalLi = (p) => (modalLi = !p)

modalliActive.forEach((item, index)=> {
    item.addEventListener("click", () => {
      
        setModalLi(modalLi)
        for (let i = 0; i <= modalNavBlock.length; i++) {
            if (index === i && modalLi)
                modalNavBlock[i].setAttribute('id', 'open__view-cards')
            if (!modalLi) {
                modalNavBlock[i].removeAttribute('id')
            }
        }
    })
})


// index-3Company.html Modal

let stateModalAlic = false 
let setStateModalAlic = (p) => (stateModalAlic = !p)

buttonOpenModalAllic.forEach((item, index)=> {
  item.addEventListener("click", () => {
      setStateModalAlic(stateModalAlic)
      console.log("cliquei")
      for (let i = 0; i <= buttonModalCompareAllic.length; i++) {
          if (index === i && stateModalAlic)
              buttonModalCompareAllic[i].setAttribute('id', 'open__view-modal')
          if (!stateModalAlic) {
              buttonModalCompareAllic[i].removeAttribute('id')
          }
      }
  })
})

// Buttons-nav 


let modalLiTab = false 
let setModalTab = (p) => (modalLiTab = !p)

modalLiTable.forEach((item, index)=> {
  item.addEventListener("click", () => {
      setModalTab(modalLiTab)
      for (let i = 0; i <= modalLiTableAc.length; i++) {
          if (index === i && modalLiTab)
             modalLiTableAc[i].setAttribute('id', 'open__view-cards')
          if (!modalLiTab) {
              modalLiTableAc[i].removeAttribute('id')
          }
      }
  })
})

const rangeInputs = document.querySelectorAll('input[type="range"]')
const numberInput = document.querySelector('input[type="number"]')

function handleInputChange(e) {
  let target = e.target
  if (e.target.type !== 'range') {
    target = document.getElementById('range')
  } 
  const min = target.min
  const max = target.max
  const val = target.value
  
  target.style.backgroundSize = (val - min) * 100 / (max - min) + '% 100%'
}

rangeInputs.forEach(input => {
  input.addEventListener('input', handleInputChange)
})

numberInput.addEventListener('input', handleInputChange)

//##############################################


// close modal perfil 




const controls = document.querySelectorAll(".control");
let currentItem = 0;
const items = document.querySelectorAll(".item");
const maxItems = items.length;


controls.forEach((control) => {
  control.addEventListener("click", (e) => {
    isLeft = e.target.classList.contains("arrow-left");

    if (isLeft) {
      currentItem -= 1;
    } else {
      currentItem += 1;
    }

    if (currentItem >= maxItems) {
      currentItem = 0;
    }

    if (currentItem < 0) {
      currentItem = maxItems - 1;
    }

    items.forEach((item) => item.classList.remove("current-item"));

    items[currentItem].scrollIntoView({
      behavior: "smooth",
      inline: "center"
    });

    items[currentItem].classList.add("current-item");
  });
});

let modalUlBlock = false 
let setModalUlBlock = (p) => (modalUlBlock = !p)

modalUlPerfil.addEventListener("click", () => {
  setModalUlBlock(modalUlBlock)
  if(modalUlBlock) modalUlPerfil.setAttribute("id", "open__modalUl")
  if(!modalUlBlock) modalUlPerfil.removeAttribute("id")
})
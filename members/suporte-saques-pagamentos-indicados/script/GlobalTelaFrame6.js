const answer = document.querySelector(".button__protocol--active")
const headerFooter = document.querySelector(".footer__headerProtocol-block")
const openModal = document.querySelectorAll(".openModal")
const setModalId = document.querySelectorAll(".modal__active-element")

if(answer){
  let answerResp = false 
  const setAnswer = (value) => (answerResp = !value)
  
  answer.addEventListener("click", () => {
    setAnswer(answerResp)
    answerResp ? headerFooter.setAttribute("id", "active__form") : headerFooter.removeAttribute("id")
  })
}



//filter for the header

const pai = document.querySelector('.filter__search')
const filterResult = document.querySelector('#result__filter')
const list = ['Investimentos', 'landingPage'] //added it aqui ira inserir direto no filter

const filterCreate = list.filter((text) => {
    const el = document.createElement('li')
    el.setAttribute('name', text)
    el.className = 'filter__li-element'
    el.addEventListener('click', () => {
        filterResult.innerHTML = text
    })
    el.innerHTML = text
    return pai.appendChild(el)
})

// click arrowDownHeaderFilter
let clickArrowDown = false 
let setClickArrowDown = (value) => (clickArrowDown = !value)

$('.filter__seta').click(() => {
  setClickArrowDown(clickArrowDown)
  clickArrowDown ? $('.nav__filter').css({ display: 'flex' }) : $('.nav__filter').css({ display: 'none' })
})


let openModalValue = false 
const setModalIdHeader = (value) => (openModalValue = !value)

openModal.forEach((item, index)=> {
  item.addEventListener("click", () => {
      setModalIdHeader(openModalValue)

      for (let i = 0; i <= setModalId.length; i++) {
          if (index === i && openModalValue)
            console.log(openModal[i].classList.add("active"))
          if (!openModalValue) {
            openModal[i].classList.remove('active')
          }
      }
  })
})





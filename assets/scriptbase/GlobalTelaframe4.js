const imageActive = document.querySelectorAll("#modal__get")
const modalH = document.querySelectorAll(".modal__h")
const modalliActive = document.querySelectorAll("#li__text-block")
const modalNavBlock = document.querySelectorAll(".li__modal-active")

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



let propostAc = false 
let setOpenPropostActive = (p) => (propostAc = !p)

imageActive.forEach((item, index)=> {
    item.addEventListener("click", () => {
        setOpenPropostActive(propostAc)
        for (let i = 0; i <= modalH.length; i++) {
            if (index === i && propostAc)
                modalH[i].setAttribute('id', 'open__view-card')
            if (!propostAc) {
                modalH[i].removeAttribute('id')
            }
        }
    })
})


let FilterSearch = false

const pai = document.querySelector('.filter__search')
const filterResult = document.querySelector('#result__filter')
const list = ['Investimentos', 'landingPage'] //add algo aqui ira inserir direto no filter

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

//##############################################


let imageConfig = document.querySelector("#input__aside-element")

imageConfig.addEventListener("click", ()=> {

    $(".aside__block").attr("id", "aside__block--active")
    $(".aside__background-opactiy").attr("id", "add__background--active")
    $(".aside__background-opactiy").click(()=> $(".aside__background-opactiy, .aside__block").removeAttr("id"))
})

let FiltersSearch = false
const filterSeach = (p) => (FiltersSearch = !p)

$('.filter__seta').click(() => {
    filterSeach(FiltersSearch)
    if (FiltersSearch) {
        $('.nav__filter').css({ display: 'flex' })
    }
    if (!FiltersSearch) {
        $('.nav__filter').css({ display: 'none' })
    }
})

// close modal perfil 

$("#close__element-perfil").click(()=> $(".leave__modal-block").css({display: "none"}))

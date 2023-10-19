
const listProjects = document.querySelectorAll('.card__information-propost')
const menuOpenProjects = document.querySelectorAll("#menu__projects-open")
const listCardBlock = document.querySelectorAll('.card__main')
const propostActive = document.querySelectorAll(".menu__proposal-active")
const cardList = document.querySelectorAll(".card__informaition-titles")
const cardListBall = document.querySelectorAll("#card-menu")

console.log(cardListBall)

let propostAc = false 
let setOpenPropostActive = (p) => (propostAc = !p)

propostActive.forEach((item, index)=> {
    item.addEventListener('click', () => {
        setOpenPropostActive(propostAc)
        for (let i = 0; i <= cardListBall.length; i++) {
            if (index === i && propostAc)
                cardListBall[i].setAttribute('id', 'open__view-card')
            if (!propostAc) {
                cardListBall[i].removeAttribute('id')
            }
        }
    })
})


let listProject = false
const setProject = (p) => (listProject = !p)

menuOpenProjects.forEach((item, index) => {
    item.addEventListener('click', () => {
        setProject(listProject)
        console.log("oi")
        for (let i = 0; i <= listProjects.length; i++) {
            if (index === i && listProject)
                listProjects[i].setAttribute('id', 'open__view-card-two')
            if (!listProject ) {
                listProjects[i].removeAttribute('id')
            }
        }
    })
})

let handleMenuButton = false
const setOPenCard = (p) => (handleMenuButton = !p)

listCardBlock.forEach((item, index) => {
    item.addEventListener('click', () => {
        setOPenCard(handleMenuButton)
        for (let i = 0; i <= listCardBlock.length; i++) {
            if (index === i && handleMenuButton)
                listCardBlock[i].setAttribute('id', 'open__view')
            if (!handleMenuButton) listCardBlock[i].removeAttribute('id')
        }
    })
})

let valuOpen = false
let valueAsideMenu = false
let clicouNotification = false
let clicouPerfil = false
let FilterSearch = false
let openMenu = false
let openFilters = false
let AsideStatus = false
let AsideMensager = false

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
const filterSeach = (p) => (FilterSearch = !p)
const esChange = (p) => (valuOpen = !p)
const handlePerfil = (p) => (clicouPerfil = !p)
const esChangeNotification = (p) => (clicouNotification = !p)
const esChangesAside = (p) => (valueAsideMenu = !p)
const modalBalls = (p) => (openModalBalls = !p)
const openMenuBalls = (p) => (openMenu = !p)
const openFilter = (p) => (openFilters = !p)
const openAsideStatus = (p) => (AsideStatus = !p)
const openAsideMensager = (p) => (AsideMensager = !p)

$('.title__filters').click(() => {
    openFilter(openFilters)
    if (openFilters) {
        $('.aside-container').attr('id', 'open__aside-wrap')
        $('.aside-background').attr('id', 'open__aside-background')
    }
    if (!openFilters) {
        $('.aside-container').removeAttr('id', 'open__aside-wrap')
    }
    console.log('cliquei')
})

$('.title__aside').click(() => {
    openAsideStatus(AsideStatus)
    if (AsideStatus) {
        $('.select__options').css({ display: 'flex' })
        $('#image__top').css({ transform: 'rotateX(180deg)' })
    }
    if (!AsideStatus) {
        $('.select__options').css({ display: 'none' })
        $('#image__top').css({ transform: 'rotateX(0deg)' })
    }
})

$('.filter__seta').click(() => {
    filterSeach(FilterSearch)
    if (FilterSearch) {
        $('.nav__filter').css({ display: 'flex' })
    }
    if (!FilterSearch) {
        $('.nav__filter').css({ display: 'none' })
    }
})

$('.title__aside-mensager').click(() => {
    console.log('cliquei')
    openAsideMensager(AsideMensager)
    if (AsideMensager) {
        $('.filter__propost').css({ display: 'flex' })
        $('#image__mensager-top').css({ transform: 'rotateX(180deg)' })
    }
    if (!AsideMensager) {
        $('.filter__propost').css({ display: 'none' })
        $('#image__mensager-top').css({ transform: 'rotateX(0deg)' })
    }
})


$('#menu__balls').click(() => {
    modalBalls(openModalBalls)
    if (openModalBalls) $('#menu__balls').css({ display: 'flex' })
    if (!openModalBalls) $('#menu__balls').css({ display: 'none' })
})

$('#menu').click(() => {
    // Abri o menu-mobile
    esChangesAside(valueAsideMenu)
    if (valueAsideMenu) {
        $('#menu-mobile').css({ display: 'inline', transition: '.35s' })
    }
    if (!valueAsideMenu) {
        $('#menu-mobile').css({ display: 'none' })
    }
})

//abri o menu-mobile

$('.icon__exit').click(() => {
    //// Fecha o menu
    $('#menu-mobile').css({ display: 'none' })
})

$('.message').click(() => {
    esChange(valuOpen)
    if (clicouNotification) {
        $('.messageNotification').css({ display: 'none' })
    }
    if (valuOpen) {
        $('.messageModalss').css({ display: 'inline' })
    }
    if (!valuOpen) {
        $('.messageModalss').css({ display: 'none' })
    }
    if (clicouPerfil) {
        handlePerfil(clicouPerfil)
        $('.perfil__modal').css({ display: 'none' })
    }
})

/////////////// MODAL NOTIFICATION //////////////

$('.button__nav').click(() => {
    esChangeNotification(clicouNotification)
    if (clicouNotification) {
        $('.messageNotification').css({ display: 'inline' })
    }
    if (valuOpen) {
        esChange(valuOpen)
        $('.messageModalss').css({ display: 'none' })
    }
    if (!clicouNotification) {
        $('.messageNotification').css({ display: 'none' })
    }
    if (clicouPerfil) {
        $('.perfil__modal').css({ display: 'none' })
    }
})

/////////////// MODAL PERFIL ///////////////////////////

$('.tb__perfil').click(() => {
    handlePerfil(clicouPerfil)

    if (clicouPerfil) {
        $('.perfil__modal').css({ display: 'flex' })
    }
    if (valuOpen && clicouNotification) {
        $('.messageModalss').css({ display: 'none' })
    }
    if (valuOpen) {
        esChange(valuOpen)
        $('.messageModalss').css({ display: 'none' })
    }
    if (clicouNotification) {
        esChangeNotification(clicouNotification)
        $('.messageNotification').css({ display: 'none' })
    }
    if (!clicouPerfil) {
        $('.perfil__modal').css({ display: 'none' })
    }
})
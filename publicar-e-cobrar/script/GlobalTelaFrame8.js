const footerShow = document.querySelector(".footer__codeHtml")
const openConfig = document.querySelector(".configOpen")
const backgroundConfig = document.querySelector(".add__background--active")
const asideMobile = document.querySelector(".aside__mobile")
const asideOpen = document.querySelectorAll(".li__name")
const asideOpenModal = document.querySelectorAll(".selectMobile")
const closeBackground = document.querySelector(".aside__background-opactiy")
const showInfoFooter = document.querySelector(".show__information")
const headerCode = document.querySelector(".header__codeHtml")

const openModal = document.querySelectorAll(".openModal")
const setModalId = document.querySelectorAll(".modal__active-element")

let openModalValue = false 
const setModalIdHeader = (value) => (openModalValue = !value)

openModal.forEach((item, index)=> {
  item.addEventListener("click", () => {
    setModalIdHeader(openModalValue)
    for (let i = 0; i <= setModalId.length; i++) {
      index === i && openModalValue ? openModal[i].classList.add("active") : openModal[i].classList.remove('active')
    }
  })
})

if(footerShow){
  let footerShowOpen = false 
  const setFooterShow = (value) => (footerShowOpen = !value)
  
  footerShow.addEventListener("click", ()=> {
    setFooterShow(footerShowOpen)
    
    if(footerShowOpen){
      showInfoFooter.classList.add("activeShow")
      headerCode.classList.add("imgRotate")
    }
  })

   headerCode.addEventListener("click", () => {
    showInfoFooter.classList.remove("activeShow")
    headerCode.classList.remove("imgRotate")
  })
}

let asideOpenShow = false 
const setAsideOpenShow = (value) => (asideOpenShow = !value)

if(asideOpen){
  asideOpen.forEach((item, index)=> {
    item.addEventListener("click", () => {
      setAsideOpenShow(asideOpenShow)
      for (let i = 0; i <= asideOpenModal.length; i++) {
        if(index === i && asideOpenShow){
          asideOpenModal[i].classList.add("activeElement")
          asideOpen[i].classList.add("activeImg") 
        } 
        if(!asideOpenShow){
          asideOpenModal[i].classList.remove('activeElement')
          asideOpen[i].classList.remove("activeImg")
        }
      }
    })
  })
}

let openConfigShow = false 
const setOpenConfigShow = (value) => (openConfigShow = !value)

openConfig.addEventListener("click", ()=> {
  setOpenConfigShow(openConfigShow)
  
  if(openConfigShow){
    backgroundConfig.classList.add("activeShow") 
    asideMobile.classList.add("activeAsideMobile")
  }

  closeBackground.addEventListener("click", ()=> {
    openConfigShow = false 
    if(!openConfigShow){
      asideMobile.classList.remove("activeAsideMobile")
      closeBackground.classList.remove("activeShow")

    }
  })

})


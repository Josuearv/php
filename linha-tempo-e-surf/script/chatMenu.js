const modalMessage = document.querySelectorAll(".activMessageModal")
const modalAnswers = document.querySelectorAll(".answers__order")
const modalChatPeople = document.querySelectorAll(".ul__chatAnswers")
const buttonMessageOpen = document.querySelectorAll(".button__reply")
const showBarSearchChat = document.querySelectorAll(".input__sendChat")
const arrowSubChat = document.querySelectorAll(".sub__chatAnswers")
const subCardsChatMensager = document.querySelectorAll(".sub__chatAnsWersCard")
const likeClickModal = document.querySelector(".activeLikeModal")
const BackgroundModalActive = document.querySelectorAll(".activeLikeModal")
const backgroundIcon = document.querySelectorAll(".background__messageIcon")
const modalEyesOpen = document.querySelectorAll(".modal__openEyes")
const modalCardEyesOpen = document.querySelectorAll(".modalCardEyes")
const modalBackgroundClose = document.querySelectorAll(".background__modalCard")

let modalValueEyes = false 
const ChooseModalValueEyes = (value) => (modalValueEyes = !value)

modalEyesOpen.forEach((item, index)=> {
  item.addEventListener("click", ()=> {
    ChooseModalValueEyes(modalValueEyes)
    for (let i = 0; i <= modalCardEyesOpen.length; i++) index === i  && modalCardEyesOpen[i].classList.add("activeModalEyes")
  })
})

modalBackgroundClose.forEach((item, index)=> {
  item.addEventListener("click", ()=> {
    for (let i = 0; i <= modalBackgroundClose.length; i++) index === i  && modalCardEyesOpen[i].classList.remove("activeModalEyes")
  })
})

let backgroundActive = false 
const ChooseBackgroundActive = (value) => (backgroundActive = !value)

BackgroundModalActive.forEach((item, index)=> {
  item.addEventListener("click", ()=> {
    ChooseBackgroundActive(backgroundActive)
    for (let i = 0; i <= backgroundIcon.length; i++) index === i && backgroundActive ? 
    BackgroundModalActive[i].classList.add("activeBackground") : 
    BackgroundModalActive[i].classList.remove('activeBackground')
  })
})


let modalValueChatMensagens = false 
const ChooseValueChatMensagens = (value) => (modalValueChatMensagens = !value)
    
modalMessage.forEach((item, index)=> {
  item.addEventListener("click", () => {
    ChooseValueChatMensagens(modalValueChatMensagens)
    for (let i = 0; i <= modalAnswers.length; i++){
      if(index === i && modalValueChatMensagens){
        modalAnswers[i].classList.add("activeMensagens")
        modalChatPeople[i].classList.add("activePeoplesMensager")
        modalMessage[i].classList.add("background__activeIcon")
      }
      if(!modalValueChatMensagens){
        modalAnswers[i].classList.remove('activeMensagens')
        modalChatPeople[i].classList.remove("activePeoplesMensager")
        modalMessage[i].classList.remove("background__activeIcon")


      }
    }
    })
})

let modalValueSearchChat = false 
const chooseValueSearchChat = (value) => (modalValueSearchChat = !value)

buttonMessageOpen.forEach((item, index)=> {
  item.addEventListener("click", ()=> {
    chooseValueSearchChat(modalValueSearchChat)
    for (let i = 0; i <= showBarSearchChat.length; i++) index === i && modalValueSearchChat ? showBarSearchChat[i].classList.add("activeSearch") : showBarSearchChat[i].classList.remove('activeSearch')
  })
})

// open sub mensager 

let arrowValueChat = false 
const setArrowValueChat = (value) => (arrowValueChat = !value)

arrowSubChat.forEach((item, index)=> {
  item.addEventListener("click", ()=> {
    console.log('hello')
    setArrowValueChat(arrowValueChat)
    for (let i = 0; i <= subCardsChatMensager.length; i++) index === i && arrowValueChat ? arrowSubChat[i].classList.add("activeSubChat") : arrowSubChat[i].classList.remove('activeSubChat')
  })
})

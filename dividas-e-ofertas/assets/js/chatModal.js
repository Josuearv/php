const personChat = document.querySelectorAll(".li__peopleMessage")
const messageModal = document.querySelectorAll(".card__message")
const personContact = document.querySelectorAll(".li__peopleContact")
const cardContact = document.querySelectorAll(".card__contact")
const exitMessage = document.querySelectorAll(".exitMessage")
const exitContacts = document.querySelectorAll(".exitContacts")
const style = document.querySelector("style")
let windowWidth = window.innerWidth;

if (windowWidth <= 650) {
  console.log("entrei")
    // open config folks 
  const openMessageMobile = document.querySelectorAll(".li__peopleMessageMobile")
  const openModalMessage = document.querySelectorAll(".card__messageTwo")
  const exitMessageMobile = document.querySelectorAll(".exitMessageMobile")
  const cardMobile = document.querySelectorAll(".card__versionMobile")

  let openMobileChatValue = false 
  const setOpenMobileChatValue = (value) => (openMobileChatValue = !value)
  
  openMessageMobile.forEach((item, index)=> {
    item.addEventListener("click", () => {
      setOpenMobileChatValue(openMobileChatValue)
      for (let i = 0; i <= openModalMessage.length; i++)
       index === i && openMobileChatValue &&
       openMessageMobile[i].classList.add("activeChat")
    })
  })

    exitMessageMobile.forEach((item, index)=> {
    item.addEventListener("click", ()=>{
      for (let i = 0; i <= cardMobile.length; i++) {
        index === i ? cardMobile[i].classList.add("activeMobile") + openMessageMobile[i].classList.remove("activeChat"): ""
      }     
    })
  })
  
  
}

if(window.matchMedia("(min-width: 650px)").matches){

    const desktopChat = document.querySelectorAll(".card__chatDesktop")    

    personChat.forEach((item, index) => {
      item.addEventListener("click", () => {
        for (let i = 0; i <= desktopChat.length; i++) {
          if(index === i){
            personChat[i].classList.add(`activeMessage${index}`)
            desktopChat[i].classList.add("activeDesktop")
          }
        }
      })
    })
     
    personContact.forEach((item, index) => {
      item.addEventListener("click", () => {
        for (let i = 0; i <= cardContact.length; i++) {
          if(index === i){
            personContact[i].classList.add(`activeMessage${index}`)
            cardContact[i].style.display = "block"
          }
        }
      })
    })
  

    exitMessage.forEach((item, index)=> {
      item.addEventListener("click", ()=>{
        for (let i = 0; i <= desktopChat.length; i++) {
          index === i && desktopChat[i].classList.add("removeChatDesktop") + desktopChat[i].classList.remove("activeDesktop")
        }     
      })
    })
    
    exitContacts.forEach((item, index)=> {
      item.addEventListener("click", ()=>{
        for (let i = 0; i <= cardContact.length; i++) {
          if(index === i){
            cardContact[i].style.display = "none"
          }
        }     
      })
    })
    
    // Open modal config 
    
}
    // open config folks 
const openModal = document.querySelectorAll(".settings__messageFolks")
const setModalId = document.querySelectorAll(".card__messageTwo")
    
let openModalValue = false 
const setModalIdHeader = (value) => (openModalValue = !value)
    
openModal.forEach((item, index)=> {
  item.addEventListener("click", () => {
    setModalIdHeader(openModalValue)
    for (let i = 0; i <= setModalId.length; i++) index === i && openModalValue ? openModal[i].classList.add("active") : openModal[i].classList.remove('active')
    })
})
    
    
const buttonConfig = document.querySelector(".settingsButton")
const settingsConfig = document.querySelector(".section__config")
  
let modalValueConfig = false 
const setModalValueConfig = (value) => (modalValueConfig = !value)
  
buttonConfig.addEventListener("click", ()=> {
    setModalValueConfig(modalValueConfig)
    modalValueConfig ? settingsConfig.classList.add("activeConfig") : settingsConfig.classList.remove("activeConfig")
})
  
// open chat 

const chatOpen = document.querySelector(".active__chatName")
const projectChatMain = document.querySelector(".section__projectsMessage")
const projectInput = document.querySelector(".input")
const buttonsMain = document.querySelector(".icons__buttons")
const backgroundChat = document.querySelector(".background__chat")

chatOpen.addEventListener("click", ()=> {
  projectChatMain.classList.add("activeProject")
  projectInput.classList.add("inputShow")
  buttonsMain.classList.add("inputShow")
  chatOpen.classList.add("normal__class")
  backgroundChat.classList.add("normal__back")
})

//close modal 

const exitChat = document.querySelector(".exit__mensager")

exitChat.addEventListener("click", ()=> {
  projectChatMain.classList.remove("activeProject")
  projectInput.classList.remove("inputShow")
  buttonsMain.classList.remove("inputShow")
  chatOpen.classList.remove("normal__class")
  backgroundChat.classList.remove("normal__back")
  settingsConfig.classList.remove("activeConfig")
})

  // close Chat ul 
  
const openUlChat = document.querySelectorAll(".project__nameAbout")
const setOpenUlChat = document.querySelectorAll(".ul__peoplesMessage")
  
let openUlChatValue = false 
const setOpenUlChatValue = (value) => (openUlChatValue = !value)

openUlChat.forEach((item, index)=> {
    item.addEventListener("click", () => {
      setOpenUlChatValue(openUlChatValue)
      for (let i = 0; i <= setOpenUlChat.length; i++) {
        index === i && openUlChatValue ? setOpenUlChat[i].classList.add("noneChat") + openUlChat[i].classList.add("activeMoveArrow")   : setOpenUlChat[i].classList.remove('noneChat') + openUlChat[i].classList.remove("activeMoveArrow")  
      }
    })
})
  
const openNameContacts = document.querySelectorAll(".project__nameContacts")
const ulNameContacts = document.querySelectorAll(".ul__contacts")
  
let nameContacts = false 
const setUlNameContacts = (value) => (nameContacts = !value)
  
openNameContacts.forEach((item, index)=> {
    item.addEventListener("click", () => {
      setUlNameContacts(nameContacts)
      for (let i = 0; i <= ulNameContacts.length; i++) {
        index === i && nameContacts ? ulNameContacts[i].classList.add("moveArrow") + openNameContacts[i].classList.add("activeMoveArrow")   : ulNameContacts[i].classList.remove('moveArrow') + openNameContacts[i].classList.remove("activeMoveArrow")  
      }
    })
})
  
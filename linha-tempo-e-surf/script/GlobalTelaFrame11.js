const cardNameProject = document.querySelectorAll(".card__aboutNameProject")
const heart = document.querySelectorAll(".heart__red")
const exitImage = document.querySelectorAll(".exit__cardAboutNameProject")
const imageButton = document.querySelectorAll(".menu__informationImage")
const modalInformationMenu = document.querySelectorAll(".ul__listInformationModalComment")
const buttonPublishOpinion = document.querySelector(".button__publishOpinion")
const sectionTimeLine = document.querySelector(".section__timeLine--mobile")
const offersSearchCategory = document.querySelector(".title__searchOffers")
const contentCategorySearch = document.querySelector(".ul__categoryProducts")
const imageFilterAdd = document.querySelector(".add__imageFilter")
const contentCardState = document.querySelector(".border__filterProducts")
const backgroundModalConfigPublish = document.querySelector(".background__modalConfigPublish")
const restAsideMenu = document.querySelector(".main__allRestContent")


if(offersSearchCategory){

  let openModalSearchCategory = false 
  const setOpenModalSearchCategory = (value) => (openModalSearchCategory = !value)

  offersSearchCategory.addEventListener("click", ()=>{
    setOpenModalSearchCategory(openModalSearchCategory)
    openModalSearchCategory ? 
    contentCategorySearch.classList.add("activeListCategory") 
    + offersSearchCategory.classList.add("activeImageCategory") 
    + restAsideMenu.classList.add("activeFastMenu"): 
    contentCategorySearch.classList.remove("activeListCategory") + 
    offersSearchCategory.classList.remove("activeImageCategory") + 
    restAsideMenu.classList.remove("activeFastMenu")
  })
}

if(imageFilterAdd){
  let openContentCardState = false 
  const setOpencontentCardState = (value) => (openContentCardState = !value)

  imageFilterAdd.addEventListener("click", ()=>{
    setOpencontentCardState(openContentCardState)
    openContentCardState ? 
    contentCardState.classList.add("activeListState") + 
    imageFilterAdd.classList.add("activeImagesSelector"): 
    contentCardState.classList.remove("activeListState") + 
    imageFilterAdd.classList.remove("activeImagesSelector")
  })
}

let openModalConfigMenu = false 
const setOpenModalConfigMenu = (value) => (openModalConfigMenu = !value)

imageButton.forEach((item, index)=> {
  item.addEventListener("click", () => {
    console.log("hello")
    setOpenModalConfigMenu(openModalConfigMenu)
    for (let i = 0; i <= modalInformationMenu.length; i++) 
    index === i && openModalConfigMenu ? modalInformationMenu[i].classList.add("activeModalMenu") : modalInformationMenu[i].classList.remove('activeModalMenu')
  })
})

heart.forEach((item, index)=> {
  item.addEventListener("click", () => {
    for (let i = 0; i <= heart.length; i++){
      index === i ? heart[i].classList.add("checkHeart") +  
      cardNameProject[i].classList.add("active__cardProject") + 
      cardNameProject[i].classList.remove("none__cardProject")
      : 
      heart[i].classList.remove("checkHeart") +
      cardNameProject[i].classList.remove("active__cardProject")
    }
  })
})

exitImage.forEach((item, index)=> {
  item.addEventListener("click", () => {
    for (let i = 0; i <= cardNameProject.length; i++) index === i && cardNameProject[i].classList.add("none__cardProject")
  })
})

backgroundModalConfigPublish.addEventListener("click", () => sectionTimeLine.classList.remove("active__buttonPublish"))

if(sectionTimeLine) buttonPublishOpinion.addEventListener("click", ()=> sectionTimeLine.classList.add("active__buttonPublish"))


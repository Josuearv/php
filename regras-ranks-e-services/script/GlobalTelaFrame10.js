const openModalConfig = document.querySelectorAll(".open__modalConfig")
const contentModalConfig = document.querySelectorAll(".modal__configOptionsBackground")

let openModalConfigValue = false 
const setModalConfigOpen = (value) => (openModalConfigValue = !value)

openModalConfig.forEach((item, index)=> {
  item.addEventListener("click", () => {
    console.log("entrei")
    setModalConfigOpen(openModalConfigValue)
    for (let i = 0; i <= contentModalConfig.length; i++) 
    index === i && openModalConfigValue ? 
    contentModalConfig[i].classList.add("active") : 
    contentModalConfig[i].classList.remove('active')
  })
})

const moreOptions = document.querySelectorAll(".more__options")
const paymentOptions = document.querySelectorAll(".payment__options")

let modalOptionsValue = false 
const setModalOptionsValue = (value) => (modalOptionsValue = !value)

// open modals header

const openModal = document.querySelectorAll(".openModal")
const setModalId = document.querySelectorAll(".modal__active-element")

let openModalValue = false 
const setModalIdHeader = (value) => (openModalValue = !value)

openModal.forEach((item, index)=> {
  item.addEventListener("click", () => {
    setModalIdHeader(openModalValue)
    for (let i = 0; i <= setModalId.length; i++) index === i && openModalValue ? openModal[i].classList.add("active") : openModal[i].classList.remove('active')
  })
})

//########################## 

moreOptions.forEach((item, index)=> {
    item.addEventListener("click", ()=> {
        setModalOptionsValue(modalOptionsValue)
        console.log("hello")
        for (let i = 0; i <= paymentOptions.length; i++) 
            index === i && modalOptionsValue ? 
            paymentOptions[i].classList.add("activeMoreOptions") + moreOptions[i].classList.add("activeH") : 
            paymentOptions[i].classList.remove('activeMoreOptions') +  moreOptions[i].classList.remove("activeH")

    } )
})  

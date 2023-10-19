let btAbrirMenuMobile = document.querySelector('#bt-abrir-menu-mobile');
let btFecharMenuMobile = document.querySelector('#fechar-menu-mobile');
let btsFecharMenuMobile = document.querySelectorAll('.fechar-menu-mobile');

btAbrirMenuMobile.addEventListener('click', event => {
    document.querySelector('#menu-mobile').classList.remove('menu-mobile-fecado');
});

btFecharMenuMobile.addEventListener('click', event => {
    document.querySelector('#menu-mobile').classList.add('menu-mobile-fecado');
});

btsFecharMenuMobile.forEach((element) => {
    element.addEventListener('click', () => {
        document.querySelector('#menu-mobile').classList.add('menu-mobile-fecado');
    })
})

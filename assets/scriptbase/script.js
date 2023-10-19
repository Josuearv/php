let vmApp = new Vue({
  el: '#App',
  data: {},
  methods: {
    ocultarMenusNotificacoes(event) {
      let elemento = event.target
      if (!elemento.classList.contains('icone-notificacao')) {
        let menus_notificacoes = document.querySelectorAll(
          '.box-lista-notificacoes'
        )
        for (let i = 0; i < menus_notificacoes.length; i++) {
          menus_notificacoes[i].classList.remove('mostrar')
        }
      }

      if (!elemento.classList.contains('menu-usuario')) {
        let menu_usuario = document.querySelector('#box-menu-usuario')
        menu_usuario.classList.remove('mostrar')
      }
    },

    toggleNotificacoes(event) {
      let menu_usuario = document.querySelector('#box-menu-usuario')
      menu_usuario.classList.remove('mostrar')

      let menus_notificacoes = document.querySelectorAll(
        '.box-lista-notificacoes'
      )
      for (let i = 0; i < menus_notificacoes.length; i++) {
        if (menus_notificacoes[i].classList.contains('mostrar')) {
          menus_notificacoes[i].classList.remove('mostrar')
        }
      }

      let elemento = event.currentTarget
      let notificacoes = elemento.querySelector('.box-lista-notificacoes')

      if (notificacoes.classList.contains('mostrar')) {
        notificacoes.classList.remove('mostrar')
      } else {
        notificacoes.classList.add('mostrar')
      }
    },

    toggleMenuUsuario() {
      let menu_usuario = document.querySelector('#box-menu-usuario')

      if (!menu_usuario.classList.contains('mostrar')) {
        menu_usuario.classList.add('mostrar')
      } else {
        menu_usuario.classList.remove('mostrar')
      }
    },
  },
})

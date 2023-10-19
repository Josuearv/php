let vmDuvidas = new Vue({
    el: '#secao-duvidas-frequentes',
    data: {},
    methods: {

        toggleRespostaHeader(event){

            event.currentTarget.parentElement.querySelector('.toggle-resposta').click();

        },

        toggleResposta(event){

            let pergunta = event.currentTarget.dataset.idResposta;
            if(document.querySelector(`#resposta-${pergunta}`).classList.contains('mostrar-resposta')){
                event.currentTarget.classList.remove('resposta-aberta');
                document.querySelector(`#resposta-${pergunta}`).classList.remove('mostrar-resposta')
            } else {
                event.currentTarget.classList.add('resposta-aberta');
                document.querySelector(`#resposta-${pergunta}`).classList.add('mostrar-resposta')
            }

        },
    },
    mounted(){}
});
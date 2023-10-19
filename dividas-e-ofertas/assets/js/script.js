

let vmApp = new Vue({
    el: '#App',
    data: {},
    methods: {
        ocultarMenusNotificacoes(event)
        {

            let elemento = event.target;
            if(!elemento.classList.contains('icone-notificacao')){
                let menus_notificacoes = document.querySelectorAll('.box-lista-notificacoes');
                for (let i = 0; i < menus_notificacoes.length; i++){
                    menus_notificacoes[i].classList.remove('mostrar');
                }
            }

            if(!elemento.classList.contains('menu-usuario')){
                let menu_usuario = document.querySelector('#box-menu-usuario');
                menu_usuario.classList.remove('mostrar');
            }

        },

        toggleNotificacoes(event)
        {
            let menu_usuario = document.querySelector('#box-menu-usuario');
            menu_usuario.classList.remove('mostrar');

            let menus_notificacoes = document.querySelectorAll('.box-lista-notificacoes');
            for (let i = 0; i < menus_notificacoes.length; i++){
                if(menus_notificacoes[i].classList.contains('mostrar')){
                    menus_notificacoes[i].classList.remove('mostrar');
                }
            }

            let elemento = event.currentTarget;
            let notificacoes = elemento.querySelector('.box-lista-notificacoes');

            if(notificacoes.classList.contains('mostrar')){
                notificacoes.classList.remove('mostrar');
            } else {
                notificacoes.classList.add('mostrar');
            }
        },

        toggleMenuUsuario()
        {
            let menu_usuario = document.querySelector('#box-menu-usuario');

            if(!menu_usuario.classList.contains('mostrar')){
                menu_usuario.classList.add('mostrar')
            } else {
                menu_usuario.classList.remove('mostrar')
            }
        },

        graficoRendimentos()
        {

            const labels = [1,3,6,9,12,15,18,21,24,27,30];
            const data = {
                labels: labels,
                datasets: [{
                    label: 'My First Dataset',
                    data: [0,5,10,15,20,25,30,35,40,45,50],
                    fill: false,
                    borderColor: '#5283ff',
                    tension: 0.1
                },{
                    label: 'My Secund Dataset',
                    data: [0,5,7,12,27,40,31,25,27,47,50],
                    fill: false,
                    borderColor: '#f3992e',
                    tension: 0.1
                }]
            };

            const config = {
                type: 'line',
                data: data,
                options: {
                    plugins:{
                        legend:{
                            display: false,
                        }
                    },
                    scales: {
                        yAxisValores:{
                            position: 'left',
                            title: {
                                display: true,
                                font: {
                                    size: 14
                                },
                                text: 'Quanto dinheiro você ganhou',
                            },
                        },
                        xAxisValores:{
                            position: 'bottom',
                            title: {
                                display: true,
                                font: {
                                    size: 14
                                },
                                text: 'Dias do mês',
                            },
                        }
                    }
                }

            };

            const grafico = new Chart(
                document.getElementById('grafico-rendimentos'),
                config
            );

        },

        graficoVisualizacoes()
        {

            const labels = [1,3,6,9,12,15,18,21,24,27,30];
            const data = {
                labels: labels,
                datasets: [{
                    label: 'Registros',
                    data: [0,5,10,15,20,25,30,35,40,45,50],
                    fill: false,
                    borderColor: '#5283ff',
                    tension: 0.1
                },{
                    label: 'Visualizações',
                    data: [0,5,7,12,27,40,31,25,27,47,50],
                    fill: false,
                    borderColor: '#f3992e',
                    tension: 0.1
                },{
                    label: 'Ganhos',
                    data: [0,15,3,20,27,40,31,18,27,38,47],
                    fill: false,
                    borderColor: '#5edd2d',
                    tension: 0.1
                }]
            };

            const config = {
                type: 'line',
                data: data,
                options: {
                    plugins:{
                        legend:{
                            display: false,
                        }
                    },
                    scales: {
                        yAxisValores:{
                            position: 'left',
                            title: {
                                display: true,
                                font: {
                                    size: 14
                                },
                                text: 'Quanto dinheiro você ganhou',
                            },
                        },
                        xAxisValores:{
                            position: 'bottom',
                            title: {
                                display: true,
                                font: {
                                    size: 14
                                },
                                text: 'Dias do mês',
                            },
                        }
                    }
                }

            };

            const grafico = new Chart(
                document.getElementById('grafico-visualizacoes'),
                config
            );

        },

        boxSlides(){
            const swiper = new Swiper('.swiper', {
                // Optional parameters
                direction: 'horizontal',
                loop: true,

                // If we need pagination
                pagination: {
                    el: '.swiper-pagination',
                },

                // Navigation arrows
                navigation: {
                    nextEl: '#bt-proximo',
                    prevEl: '#bt-anteior',
                },

                // And if we need scrollbar
                scrollbar: {
                    el: '.swiper-scrollbar',
                },
            });
        },

        graficoScore(){

            const data = {
                labels: [
                    'Pontuação Atual',
                    'Pontuação Faltante Para Atingir o Máximo',
                ],
                datasets: [{
                    label: 'My First Dataset',
                    data: [266, 5000],
                    backgroundColor: [
                        '#ec7000',
                        '#efefef',
                    ],
                    hoverOffset: 4,
                    cutout: '93%',
                    circumference: 180,
                    rotation: 270,
                }]
            };

            const grafico = new Chart(
                document.getElementById('grafico-score'),
                {
                    type: 'doughnut',
                    data: data,
                    options: {
                        plugins: {
                            legend: {
                                display: false,
                            }
                        },
                    },
                    plugins:[{
                        id: "text",
                        beforeDraw: (chart, config) => {
                            let width = chart.width;
                            let height = chart.height;
                            let ctx = chart.ctx;

                            ctx.restore();
                            let fontSize = (height / 114).toFixed(2);
                            ctx.font = "2.5em 'Open Sans'";
                            ctx.fontWeight = '900';
                            ctx.textBaseline = "middle";

                            let text = "266";
                            let textX = Math.round((width - ctx.measureText(text).width) / 2);
                            let textY = height / 2.2;

                            ctx.fillText(text, textX, textY);

                            let ctx2 = chart.ctx;

                            ctx2.restore();
                            ctx.font = "1.2em 'Open Sans'";
                            ctx.fontWeight = '900';
                            ctx.textBaseline = "middle";

                            let text2 = "de 5000";
                            let textX2 = Math.round((width - ctx.measureText(text).width) / 2.25);
                            let textY2 = (height / 2.2)+35;
                            ctx.fillText(text2, textX2, textY2);

                            let ctx3 = chart.ctx;

                            ctx3.restore();
                            ctx.font = "1.2em 'Open Sans'";
                            ctx.fontWeight = '900';
                            ctx.textBaseline = "middle";

                            let text3 = "NellBux Score 3.0";
                            let textX3 = Math.round((width - ctx.measureText(text).width) / 3.2);
                            let textY3 = (height / 2.2)+80;

                            ctx.fillText(text3, textX3, textY3);
                            ctx.save();
                        },
                    }]
                }
            );

        },

        carregaGraficoBarra(elemento, valor_atual, valor_maximo, formatacao_valor = 'inteiro', texto_complementar_totalizador)
        {
            let porcentagem = (parseFloat(valor_atual)/parseFloat(valor_maximo)*100);
            document.querySelector(`#${elemento}`).querySelector('.barra-grafico').style.width = porcentagem+'%';

            switch (formatacao_valor) {
                case 'monetario':
                    document.querySelector(`#${elemento}`).querySelector('.totalizador').textContent = valor_atual.toLocaleString('pt-br', {minimumFractionDigits: 2, maximumFractionDigits: 2, currency: 'BRL'}) +' / '+valor_maximo.toLocaleString('pt-br', {minimumFractionDigits: 2, maximumFractionDigits: 2, currency: 'BRL'}) + ' ' +texto_complementar_totalizador;
                    break;

                case 'inteiro':
                    document.querySelector(`#${elemento}`).querySelector('.totalizador').textContent = valor_atual +' / '+valor_maximo + ' ' +texto_complementar_totalizador;
                    break;
            }

        },

        toggleBoxScore(event){
            let box = event.target.parentElement.parentElement.parentElement;
            if(box.classList.contains('box-subir-escore-aberto')){
                box.classList.remove('box-subir-escore-aberto');
                box.classList.add('box-subir-escore-fechado');
                event.currentTarget.style.transform = 'rotate(180deg)';
            } else {
                box.classList.remove('box-subir-escore-fechado');
                box.classList.add('box-subir-escore-aberto');
                event.currentTarget.style.transform = 'rotate(0deg)';
            }
        }
    },

    mounted(){
        this.graficoRendimentos();
        this.graficoVisualizacoes();
        this.boxSlides();
        this.graficoScore();

        this.carregaGraficoBarra('grafico-porcentagem-rendimento', 98, 250, 'monetario', 'BRL');
        this.carregaGraficoBarra('grafico-porcentagem-investimentos', 135.5, 200, 'monetario','BRL');
        this.carregaGraficoBarra('grafico-porcentagem-movimentacoes', 498.95, 750, 'monetario','BRL');
        this.carregaGraficoBarra('grafico-porcentagem-investidores', 0, 1, 'inteiro','clientes');
        this.carregaGraficoBarra('grafico-porcentagem-perfil', 3, 10, 'inteiro','itens');
    }
});


let vmChat = new Vue({
    el: '#box-conversa-chat',
    data: {
        tela: 'lista',
        menu: 'nao_mostrar'
    },
    methods: {
        fecharChat()
        {
            document.querySelector('#box-conversa-chat').classList.add('oculto');
        }
    },
    mounted() {
    }
});
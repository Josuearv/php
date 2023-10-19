<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
    <link rel="stylesheet" href="./assets/stylebase/cssStyleModal/boot.css" />
    <link rel="stylesheet" href="./assets/stylebase/cssStyleModal/estilo.css" />
    <link rel="stylesheet" href="./assets/stylebase/cssStyleModal/grid.css" />


    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Poppins:ital,wght@0,200;0,300;0,400;0,500;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/style/header.css?id=xccc" />
    <link rel="stylesheet" href="./assets/style/flex.css" />
    <link rel="stylesheet" href="./assets/style/index-1worthit.css" />
    <link rel="stylesheet" href="./assets/style/index-2BigNellbux.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>NellBux</title>
    <script src="./assets/scriptbase/jquery.js"></script>

</head>
<body>


    <!-- Aside #menu-mobile  -->

    <aside id="menu-mobile" class="menu-mobile-fecado">
              
        <div class="container">
  
          <div id="fechar-menu-mobile">
              <span class="material-icons">cancel</span>
          </div>
  
        </div>
  
        <ul id="menu-principal">
          <li><a href="#">Area Membro</a></li>
          <li><a href="#">Meus Projetos</a></li>
          <li><a href="#">Minhas Finanças</a></li>
        </ul>
  
        <div class="espaco20"></div>
  
        <a href="#pesquisa-modal" rel="modal:open" class="botao-menu-mobile fechar-menu-mobile">
          <div class="flex-centro-centro justifyContentCenter alignItemsCenter">
            <span class="material-icons">search</span>
            <div>Pesquisar</div>
          </div>
        </a>
        
        <a href="#notificacoes-modal" rel="modal:open" class="botao-menu-mobile fechar-menu-mobile">
          <div class="flex-centro-centro justifyContentCenter alignItemsCenter">
            <span class="material-icons">notifications</span> 
            <div>Notificações</div>
          </div>
        </a>
  
        <a href="#mensagens-modal" rel="modal:open" class="botao-menu-mobile fechar-menu-mobile">
            <div class="flex-centro-centro justifyContentCenter alignItemsCenter">
              <span class="material-icons">sms</span> 
              <div>Mensagens</div>
          </div>
        </a>
  
        <a href="#usuario-modal" rel="modal:open" class="botao-menu-mobile fechar-menu-mobile">
          <div class="flex-centro-centro justifyContentCenter alignItemsCenter">
              <div id="logo-tb" class="menu-usuario">TB</div>
          </div>
        </a>
  
  
    </aside>

    <header class="header__block">
        <div class="header__container-block">
            <img src="./assets/images/imagesHeader/logo.png" alt="logo"/>
            <nav class="nav__block">
                <ul class="ul__block">
                    <li class="li__primary-element dropDown-block">
                        <a href="#">
                            Ṕrincipal
                        </a>
                        <img src="./assets/images/imagesHeader/setaBottom.png" alt="arrow down" width="15" height="15"/>
                        <div class="dropDown-content">
                          <ul class="dropDown-ul-block">
                            <li>
                                <a href="#">Teste 1</a>
                            </li>
                            <li>
                                <a href="#">Teste 2</a>
                            </li>
                            <li>
                                <a href="#">Teste 3</a>
                            </li>
                            <li>
                                <a href="#">Teste 4</a>
                            </li>
                            <li>
                                <a href="#">Teste 5</a>
                            </li>
                            <li>
                                <a href="#">Teste 6</a>
                            </li>
                          </ul>
                        </div>
                    </li>
                        <li>
                            <a href="#">Abrir conta poupança</a>
                        </li>
                        <li>
                            <a href="#">Regras de uso</a>
                        </li>
                        <li>
                            <a href="#">Ranks</a>
                        </li>
                        <li>
                            <a href="#">Contato</a>
                        </li>
                </ul>
                <button class="button button--bo"><i class="fa fa-user-o"></i>&nbsp; Entrar</button>
            </nav>

            <div id="bt-abrir-menu-mobile" class="exit__menu">
                <span class="material-icons">menu</span>
              </div>
        </div>
    </header>
    
    <main class="main__block justifyContentCenter">
        <div class="main__container flexDirectionColumn">
            <nav class="nav__linksActive-block">
                <ul class="ul__liActive-block justifyContentSpaceBetween ">
                    <li>
                        <a href="simulation.php">NellBux vale apena</a>
                    </li>
                    <li  class="li__active-element">
                        <a href="simile.php">NellBux vs Tesouro Selic</a>
                    </li>
                    <li>
                        <a href="#">NellBux vs Poupança</a>
                    </li>
                    <li>
                        <a href="#">NellBux vs Concorrentes</a>
                    </li>
                </ul>
            </nav>
            <section class="section__asides-block justifyContentSpaceBetween">
                <aside class="aside__forStarting-block">
                    
                    <div class="space__card-block">
                        <h2 class="title__element">Para começar qual valor você gostaria de investir?</h2>
                        <div class="value__money-element justifyContentSpaceBetween">
                            <span class="title__valueMoney--element">R$ 5.250,00</span>
                            <div class="value__alterar-block">
                                <div class="alterar__value-element AlignItemsCenter justifyContentCenter">-</div>
                                <div class="alterar__value-element AlignItemsCenter justifyContentCenter">+</div>
                            </div>
                        </div>
                    </div>

                    <div class="space__card-block">
                        <h2 class="title__element">E por mês quanto gostaria de depositar?</h2>
                        <div class="value__money-element justifyContentSpaceBetween">
                            <span class="title__valueMoney--element ">R$ 5.250,00</span>
                            <div class="value__alterar-block">
                                <span class="alterar__value-element AlignItemsCenter justifyContentCenter">-</span>
                                <span class="alterar__value-element AlignItemsCenter justifyContentCenter">+</span>
                            </div>
                        </div>
                    </div>

                    <div class="space__card-block flexDirectionColumn">
                        <h2 class="title__element title__element--width">Quanto tempo deixaria seu dinheiro investido?</h2>
                        <span class="time__moneyInvestment-element">24 meses</span>
                        <input id="input__type-element" type="range">
                    </div>

                    <footer class="button__toMeet-element button__toMeet-element--padding  justifyContentEnd">
                        <button class="button button--orangeMeet button--modifer">Conheça esse produto</button>
                    </footer>
                </aside>

                <aside class="aside__graph-block">
                    <div class="table__investments-block justifyContentEnd flexDirectionColumn AlignItemsEnd">
                        <table class="table__investment-block">
                                <tr class="table__tr">
                                    <th class="table__borderTransparent-element"></th>
                                    <th class="title__table title__table--orange">Nellbux</th>
                                    <th class="title__table title__table--blue">Tesouro Selic</th>
                                </tr>

                                <tr class="table__tr">
                                    <td class="title__tablePrimary-element">Valor investido</td>
                                    <td class="title__table title__table--orange">100,00</td>
                                    <td class="title__table title__table--blue">100,00</td>
                                </tr>

                                <tr class="table__tr">
                                    <td class="title__tablePrimary-element">Rendimento</td>
                                    <td class="title__table title__table--orange">0,6%</td>
                                    <td class="title__table title__table--blue">0,6%</td>
                                </tr>

                                <tr class="table__tr">
                                    <td class="title__tablePrimary-element">Valor Total</td>
                                    <td class="title__table title__table--orange">102,60</td>
                                    <td class="title__table title__table--blue">102,60</td>
                                </tr>
                        </table>

                        <div class="graph__canvas-element">
                            <canvas id="myChart"></canvas>
                        </div>

                        <div class="result__graph-block justifyContentSpaceBetween ali">
                            <div class="names__graph-block">
                                <span class="title__names-element">
                                    <div class="line__names-element line__names-element--orange"></div>
                                    NellBux
                                </span>

                                <span class="title__names-element">
                                    <div class="line__names-element line__names-element--blue"></div>
                                    Tesouro Selic
                                </span>
                            </div>

                            <div class="money__resultGraph-block flexDirectionColumn AlignItemsEnd">
                                <span class="title__nameResult-element">
                                    NellBux
                                    <div class="title__table title__table--orange title__space">R$ 51,78</div>
                                </span>

                                <span class="title__nameResult-element title__table--blue">
                                    Tesouro Selic 
                                    <div class="title__table title__table--blue title__space">R$ 51,78</div>
                                </span>
                            </div>
                        </div>

                        <footer class="investmentRedirect--element">
                            <a href="#" class="text__button-orange">Conheça esse produto</a>
                            <a href="#" class="text__footer-orange">Veja todas as opções investidas ></a>
                        </footer>
                        
                        </div>
                </aside>

            </section>
        </div>
    </main>
        
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!--

    -->

    <!-- jQuery Modal -->
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />      
    <script type="module" src="./assets/scriptbase/menu-mobile.js"></script>  
                
    <div id="pesquisa-modal" class="modal">
                                <div class="modal-header">
                                    <span class="material-icons">search</span>
                                </div>
                                <div class="modal-body">
                            
                                    <input type="text" name="campo-pesquisa-modal" id="campo-pesquisa-modal" value="" placeholder="O que você está procurando?">
                            
                                </div>
                                <div class="modal-buttons">
                                    <a href="#" rel="modal:close" class="botao-modal">Sair</a>
                                </div>
    </div>
                            
    <div id="notificacoes-modal" class="modal">
                                <div class="modal-header">
                                    <span class="material-icons">notifications</span>
                                </div>
                                <div class="modal-body">
                            
                                    <div class="lista">
                            
                                        <div class="item-notificacao">
                                            <div class="mensagem">
                                                <div class="titulo">Rejeitamos seu projeto</div>
                                                <div class="descricao">Em criar plataforma para reclamação</div>
                                            </div>
                                            <div class="icone">
                                                <span class="material-icons">delete</span>
                                            </div>
                                        </div>
                            
                                        <div class="item-notificacao">
                                            <div class="mensagem">
                                                <div class="titulo">Rejeitamos seu projeto</div>
                                                <div class="descricao">Em criar plataforma para reclamação</div>
                                            </div>
                                            <div class="icone">
                                                <span class="material-icons">delete</span>
                                            </div>
                                        </div>
                            
                                        <div class="item-notificacao">
                                            <div class="mensagem">
                                                <div class="titulo">Rejeitamos seu projeto</div>
                                                <div class="descricao">Em criar plataforma para reclamação</div>
                                            </div>
                                            <div class="icone">
                                                <span class="material-icons">delete</span>
                                            </div>
                                        </div>
                            
                                    </div>
                            
                                </div>
                                <div class="modal-buttons">
                                    <a href="#" rel="modal:close" class="botao-modal margin-right5">Ver todos</a>
                                    <a href="#" rel="modal:close" class="botao-modal">Sair</a>
                                </div>
    </div>
                            
    <div id="mensagens-modal" class="modal">
                                <div class="modal-header">
                                    <span class="material-icons">sms</span>
                                </div>
                                <div class="modal-body">
                            
                                    <div class="lista">
                            
                                        <div class="item-mensagem">
                                            <div class="avatar"></div>
                                            <div class="mensagem">
                                                <div class="titulo">Rejeitamos seu projeto</div>
                                                <div class="descricao">Em criar plataforma para reclamação</div>
                                            </div>
                                            <div class="icone">
                                                <span class="material-icons">delete</span>
                                            </div>
                                        </div>
                            
                                        <div class="item-mensagem">
                                            <div class="avatar"></div>
                                            <div class="mensagem">
                                                <div class="titulo">Rejeitamos seu projeto</div>
                                                <div class="descricao">Em criar plataforma para reclamação</div>
                                            </div>
                                            <div class="icone">
                                                <span class="material-icons">delete</span>
                                            </div>
                                        </div>
                            
                                    </div>
                            
                                </div>
                                <div class="modal-buttons">
                                    <a href="#" rel="modal:close" class="botao-modal margin-right5">Ver todos</a>
                                    <a href="#" rel="modal:close" class="botao-modal">Sair</a>
                                </div>
    </div>
                            
    <div id="usuario-modal" class="modal">
                                <div class="modal-header">
                                    <div id="logo-tb" class="menu-usuario">
                                        TB
                                    </div>
                                </div>
                                <div class="modal-body">
                            
                                    <div id="box-menu-usuario-modal">
                            
                                        <div class="dados">
                                            Olá <span class="font-bold">Marcos</span>, seja Bem-Vindo.
                                        </div>
                            
                                        <div class="dados">
                                            <ul>
                                                <li><a href="#">Configurações da Conta</a></li>
                                                <li><a href="#">Meu Perfil</a></li>
                                                <li><a href="#">Rank do Dia</a></li>
                                            </ul>
                                        </div>
                            
                                        <div class="dados">
                                            <div class="header">Ofertas e Pedidos</div>
                            
                                            <ul>
                                                <li><a href="#">Abrir Uma Oferta de Investimento</a></li>
                                                <li><a href="#">Encontrar Pedidos</a></li>
                                                <li><a href="#">Abrir um Pedido de Crédito</a></li>
                                            </ul>
                                        </div>
                            
                                        <div class="dados">
                                            <div class="header">Informações da Conta</div>
                            
                                            <ul>
                                                <li><a href="#">Lista de Indicativos</a></li>
                                                <li><a href="#">Lista de Seguidores</a></li>
                                                <li><a href="#">Histórico de Conta</a></li>
                                                <li><a href="#">Faça uma Pergunta</a></li>
                                                <li><a href="#">Minhas Apostas</a></li>
                                            </ul>
                                        </div>
                            
                                        <div class="dados">
                                            <div class="header">Informações da Conta</div>
                            
                                            <ul>
                                                <li>Conta NellBux</li>
                                                <li>Meu Usuário</li>
                                                <li>1211451-1</li>
                                                <li>@eduardoon</li>
                                            </ul>
                                        </div>
                            
                                    </div>
                            
                                </div>
                                <div class="modal-buttons">
                                    <a href="#" rel="modal:close" class="botao-modal">Sair</a>
                                </div>
    </div>

    <!-- PATHS scripts -->
    <script src="./assets/scriptbase/GlobalTelaFrame5.js?id=xccc"></script>


    <script>
            const ctx = document.getElementById('myChart');
                      
            new Chart(ctx, {
                type: "line",
                data: {
                    labels: ["1", "3", "6", "9", "12", "15", "18", "21", "24", "27", "30"],
                    datasets: [

                        {
                            label: "NellBux",
                            data: [1, 2, 3, 7, 12, 15,18, 20, 25, 30, 50, 60],
                            borderColor: "#F3992E",
                            background: "transparent",
                        },
                        {
                            label: "Tesouro Selic",
                            data: [1, 2, 3, 6, 9, 10, 10,15, 20, 20,30],
                            borderColor: "#5283FF",
                            background: "transparent",
                        }
                        ]
                }
                })
                      
    </script>
    
</body>
</html>
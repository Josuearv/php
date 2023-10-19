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
    <link rel="stylesheet" href="./assets/style/header.css" />
    <link rel="stylesheet" href="./assets/style/flex.css" />
    <link rel="stylesheet" href="./assets/style/index-1worthit.css?id=cvv" />

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
                <button class="button button--bo">Entrar</button>
            </nav>

            <div id="bt-abrir-menu-mobile" class="exit__menu justifyContentCenter AlignItemsCenter">
                <span class="material-icons">menu</span>
              </div>
        </div>
    </header>
    
    <main class="main__block justifyContentCenter">
        <div class="main__container flexDirectionColumn">
            <nav class="nav__linksActive-block">
                <ul class="ul__liActive-block justifyContentSpaceBetween ">
                    <li class="li__active-element">
                        <a href="simulation.php">NellBux vale apena</a>
                    </li>
                    <li>
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

                    <footer class="button__toMeet-element justifyContentEnd">
                        <a href="/plans.php" target="_blank" class="button button--orangeMeet" style="text-decoration:none;">Conheça esse serviço</a>
                    </footer>
                </aside>

                <aside class="aside__investmentInformation-block">
                    <h2 class="title__element title__element--padding">Em 2 anos você teria</h2>
                    <h1 class="title__moneyInvestment--element">R$ 14.158,57</h1>
                    <p class="zero__fee-element">
                        Valor líquido com zero taxa de corretagem Total investido:
                        <span class="zero__feeOrange--element">R$12.450,00</span>
                    </p>
                    
                    <div class="spans__investment--block flexDirectionColumn">
                        <span class="span__text-element">Na poupança seu dinheiro renderia: R$ 1.097,18</span>
                        <span class="span__text-element">No tesouro prefixado, seu dinheiro renderia R$ 1.708,57 ao ano</span>
                        <span class="span__text-element">Em outras corretoras seu dinheiro renderia R$ 1.308,57 ao ano</span>
                    </div>

                    <h2 class="title__element title__elemenet--space">Como se aposentar?</h2>
                    <h3 class="investmentTitle-element">Investindo +R$ 8.000,00 OU 20x de R$ 500,00</h3>
                    <h4 class="span__text-element">Você ganha uma aposentadoria vitalícia R$ 600,00 mensais</h4>
                
                    <div class="about__investmentInformation">
                        <p class="text__aboutInvestment-element">
                            <img src="./assets/images/index-1.worthit/about.png" style="float: left;margin-right: 15px;" alt="bottomless border with a question mark symbol in the middle" width="21" height="21"/>
                            Aposentadoria do NellBux um serviço vitalíco é fixo ficando disponivel apenas para titular do investimento sendo aplicado em casos específicos de valores pré-determinados no sistema
                        </p>

                        <li class="text__profitability--element">O NellBux NÃO deve ser usado curto prazo ou como reserva de emergência!</li>
                    </div>

                    <footer class="text__footerInvestment-block">
                        <a href="/plans.php" class="text__button-orange" target="_blank">Conheça esse serviço</a>
                
                    </footer>
                </aside>

            </section>
        </div>
    </main>

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
    <script src="./assets/scriptbase/GlobalTelaFrame5.js"></script>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />

    <title>Title</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet"/>

        
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Poppins:ital,wght@0,200;0,300;0,400;0,500;1,400&display=swap" rel="stylesheet">
  

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Poppins:ital,wght@0,200;0,300;0,400;0,500;1,400&display=swap" rel="stylesheet">
  

    <link rel="stylesheet" href="../assets/css/boot.css" media="screen" />
    <link rel="stylesheet" href="../assets/css/grid.css" media="screen" />
    <link rel="stylesheet" href="../assets/css/estilo.css" media="screen" />
    <link rel="stylesheet" href="../assets/css/icones/icones.css" media="screen"/>

    <link rel="stylesheet" href="../assets/css/headerTwo.css" />
    <link rel="stylesheet" href="../assets/css/flex.css" />
    <link rel="stylesheet" href="../assets/css/index.css" />

    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/vue2/vue.js"></script>
    
     <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
    
  </head>

  <body>
      <div class="background__loader"  id="loading" style="display: block">
        <div class="loader"></div>    
      </div>

      <div class="conteudo">
        <aside id="menu-mobile" class="menu-mobile-fecado">
          <div class="container">
            <div id="fechar-menu-mobile">
              <span class="material-icons">cancel</span>
            </div>
          </div>
  
          <ul id="menu-principal">
            <li>
              <a href="#">
                <div class="flex-centro">
                  <span class="icon-home margin-right10"></span>
                  <div>Área de Membros</div>
                </div>
              </a>
            </li>
  
            <li>
              <a href="#">
                <div class="flex-centro">
                  <span class="icon-financas margin-right10"></span>
                  <div>Minhas Finanças</div>
                </div>
              </a>
            </li>
  
            <li>
              <a href="#">
                <div class="flex-centro">
                  <span class="icon-investimentos margin-right10"></span>
                  <div>Investimentos</div>
                </div>
              </a>
            </li>
  
            <li>
              <a href="#">
                <div class="flex-centro">
                  <span class="icon-ofertas margin-right10"></span>
                  <div>Ofertas</div>
                </div>
              </a>
            </li>
  
            <li>
              <a href="#">
                <div class="flex-centro">
                  <span class="icon-comunidade margin-right10"></span>
                  <div>Comunidade</div>
                </div>
              </a>
            </li>
  
            <li>
              <a href="#">
                <div class="flex-centro">
                  <span class="icon-suporte margin-right10"></span>
                  <div>Suporte</div>
                </div>
              </a>
            </li>
  
            <li>
              <a href="#">
                <div class="flex-centro">
                  <span class="icon-servicos margin-right10"></span>
                  <div>Serviços</div>
                </div>
              </a>
            </li>
          </ul>
          <div class="espaco20"></div>
  
          <div
            id="box-investimento-menu-mobile"
            style="display: flex; justify-content: center"
          >
            <div class="flex-centro">
              <div class="dados margin-right10">
                <div>Total investido</div>
                <div>carregabdo..</div>
              </div>
              <span class="icon-olho-fechado size2-5 icone"></span>
            </div>
          </div>
          <div class="espaco20"></div>
  
          <a
            href="#pesquisa-modal"
            rel="modal:open"
            class="botao-menu-mobile fechar-menu-mobile"
          >
            <div class="flex-centro-centro">
              <span class="material-icons">search</span>
              <div>Pesquisar</div>
            </div>
          </a>
  
          <a
            href="#notificacoes-modal"
            rel="modal:open"
            class="botao-menu-mobile fechar-menu-mobile"
          >
            <div class="flex-centro-centro">
              <span class="material-icons">notifications</span>
              <div>Notificações</div>
            </div>
          </a>
  
          <a
            href="#mensagens-modal"
            rel="modal:open"
            class="botao-menu-mobile fechar-menu-mobile"
          >
            <div class="flex-centro-centro">
              <span class="material-icons">sms</span>
              <div>Mensagens</div>
            </div>
          </a>
  
          <a
            href="#usuario-modal"
            rel="modal:open"
            class="botao-menu-mobile fechar-menu-mobile"
          >
            <div class="flex-centro-centro">
              <div id="logo-tb" class="menu-usuario">TB</div>
            </div>
          </a>
  
          <a
            href="#mensagens-modal"
            rel="modal:open"
            style="text-decoration: none; color: #fff"
          >
            <div class="flex-centro-centro">
              <div>SAIR</div>
            </div>
          </a>
        </aside>
  
      <!--Header -->
      <header class="header justifyContentCenter alignItemsCenter">
        <div class="container justifyContentBetween alignItemsCenter">
          
          <img
            id="logo"
            src="../assets/images/imagesHeader/logo.png"
            alt="nell bux logo image"
            width="120"
            height="40"
          />
  
          <nav class="nav">
  
            <div class="search__nav justifyContentBetween alignItemsCenter">
              <div class="search__container"></div>
              <input
                type="text"
                placeholder="Pesquisar no nellbux     "
                name="search"
              />
  
              <div class="filter__result justifyContentBetween">
                <span id="result__filter" value="">Investidores</span>
              </div>
  
              <img
                class="filter__seta"
                src="../assets/images/imagesHeader/seta.png"
                alt="arrow that looks like a downward facing triangle"
                width="15px"
                height="15px"
              />
              <img
                src="../assets/images/imagesHeader/search.png"
                alt="lupa de pesquisa"
                width="25px"
                height="25px"
              />
              
              <div class="nav__filter">
                <ul class="filter__search justifyContentBetween directionColumn alignItemsEnd">
                </ul>
              </div>          
                        
            </div>
          
  
            <div class="hrefs-blocks justifyContentBetween alignItemsCenter">
              <div class="block__Communication justifyContentEvenly alignItemsCenter">
  
                <li class="button__nav localizationModal openModal li__remove-list">
  
                  <a href="#notification">
                    <span>
                        <img
                          
                          src="../assets/images/imagesHeader/sino.png"
                          alt="orange bell icon receive notification"
                          width="30"
                          height="30"
                        />
                    </span>
                  </a>
  
                  <div class="messageNotification flexDirectionColumn modal__active-element">
                    
                    <header
                      class="header__notification header__messageModal justifyContentSpaceBetween AlignItemsCenter"
                    >
                      <span class="text__message">Notificações</span>
                      <span class="text__message">Ver todos</span>
                    </header>
                    
                    <nav class="nav__notification flexDirectionColumn AlignItemsCenter">
                      
                      <li class="card__notification justifyContentCenter">
                        <div class="block__text__notification flexDirectionColumn justifyContentCenter">
                          
                          <a class="card__notificationt__text card__notificationt__text--weight" >
                            Rejeitamos seu projeto
                            <span class="card__notificationt__text card__notificationt__text--margin">Ontem</span>
                          </a>
  
                          <a class="notifications__about justifyContentSpaceBetween AlignItemsCenter"
                            >Em criar uma plataforma para reclamação
                            <img
                              src="../assets/images/imagesHeader/trash.png"
                              alt="trash can"
                              width="35"
                              height="35"
                            />
                          </a>
  
                        </div>
                      </li>
                                 
                      <li class="card__notification justifyContentCenter">
                        <div class="block__text__notification flexDirectionColumn justifyContentCenter">
                          
                          <a class="card__notificationt__text card__notificationt__text--weight" >
                            Rejeitamos seu projeto
                            <span class="card__notificationt__text card__notificationt__text--margin">Ontem</span>
                          </a>
  
                          <a class="notifications__about justifyContentSpaceBetween AlignItemsCenter"
                            >Em criar uma plataforma para reclamação
                            <img
                              src="../assets/images/imagesHeader/trash.png"
                              alt="trash can"
                              width="35"
                              height="35"
                            />
                          </a>
  
                        </div>
                      </li>
  
                      <li class="card__notification justifyContentCenter">
                        <div class="block__text__notification flexDirectionColumn justifyContentCenter">
                          
                          <a class="card__notificationt__text card__notificationt__text--weight" >
                            Rejeitamos seu projeto
                            <span class="card__notificationt__text card__notificationt__text--margin">Ontem</span>
                          </a>
  
                          <a class="notifications__about justifyContentSpaceBetween AlignItemsCenter"
                            >Em criar uma plataforma para reclamação
                            <img
                              src="../assets/images/imagesHeader/trash.png"
                              alt="trash can"
                              width="35"
                              height="35"
                            />
                          </a>
  
                        </div>
                      </li>
  
                    </nav>
  
                  </div>
  
                </li>
  
  
                <li class="message localizationModal openModal li__remove-list">
  
                  <a href="#message">
                    <div class="message__mobile">
                      <img
                        src="../assets/images/imagesHeader/message.png"
                        alt="message icon, orange color with 3 dots in the middle"
                        width="30"
                        height="30"
                      />
                      <div class="voice__message justifyContentCenter alignItemsCenter">2</div>
                    </div>
                  </a>
  
                  <div class="messageModalss flexDirectionColumn modal__active-element">
                    <header class="header__notification header__messageModal justifyContentSpaceBetween AlignItemsCenter">
                      <span class="text__message">Mensagens</span>
                      <span class="text__message">Ver todos</span>
                    </header>
                    <nav class="nav__notification AlignItemsCenter flexDirectionColumn">
                      
                      <li class="messager__card justifyContentCenter">
                        <img
                          src="../assets/images/imagesHeader/avatar.png"
                          alt="faceless person with border"
                          width="40"
                          height="40"
                        />
                        <div class="messager__block__text block__text__notification">
                          <div class="text__card__mensager justifyContentSpaceBetween">
                            <span>Repasso Franquia - Oportunidade...</span>
                            <span id="text__new__mensager">Nova Mensagem</span>
                          </div>
      
                          <span class="text__faq"
                            >Em criar uma plataforma para reclamação
                          </span>
                        </div>
  
                      </li>
  
                      <li class="messager__card justifyContentCenter">
                        <img
                          src="../assets/images/imagesHeader/avatar.png"
                          alt="faceless person with border"
                          width="40"
                          height="40"
                        />
                        <div class="messager__block__text block__text__notification">
                          <div class="text__card__mensager justifyContentSpaceBetween">
                            <span>Repasso Franquia - Oportunidade...</span>
                            <span id="text__new__mensager">Nova Mensagem</span>
                          </div>
      
                          <span class="text__faq"
                            >Em criar uma plataforma para reclamação
                          </span>
                        </div>
  
                      </li>
  
                      <li class="messager__card justifyContentCenter">
                        <img
                          src="../assets/images/imagesHeader/avatar.png"
                          alt="faceless person with border"
                          width="40"
                          height="40"
                        />
                        <div class="messager__block__text block__text__notification">
                          <div class="text__card__mensager justifyContentSpaceBetween">
                            <span>Repasso Franquia - Oportunidade...</span>
                            <span id="text__new__mensager">Nova Mensagem</span>
                          </div>
      
                          <span class="text__faq"
                            >Em criar uma plataforma para reclamação
                          </span>
                        </div>
  
                  </div>
  
                </li>
                      
          
            </div>
  
              <div class="total__investment-block alignItemsCenter">
                
                <span class="total__investment-element">Total investido carregando...</span>
                
                <button class="modal__h perfil__button openModal">
  
                  <div class="modal__eyes">
                    <span id="balance">Saldo: R$ 0,00</span>
                  </div>
                  
                  <img src="../assets/images/imagesHeader/eyes.png"  id="modal__get" alt="eyes" width="35" height="35" />
                </button>
  
                <hr id="row__separator">
              </div>
              
  
              <div class="perfil__account-block total__investment-block alignItemsCenter">
            
                <button class="modal__h perfil__button openModal">
  
                  <span class="tb__perfil">tb</span>
                
                  <div class="perfil__modal modal__active-element justifyContentCenter alignItemsCenter">
                    <div class="perfil__container">
                      <div class="perfil__title__block">
                        <span class="perfil__title">
                          olá,
                          <span class="perfil__title__bold">marcos,</span>
                          seja bem-vindo.
                        </span>
                      </div>
      
                      <div class="account__config flexDirectionColumn justifyContentSpaceEvenly">
                        <span class="account__title justifyContentBetween">
                          Configurações Conta
                          <span> Meu perfil </span>
                        </span>
                        <span class="account__title justifyContentBetween"> Rank do Dia </span>
                      </div>
      
                      <div class="block__offers justifyContentSpaceEvenly flexDirectionColumn">
                        <span class="title__offers__primary">Ofertas e pedidos</span>
                        <div class="block__text__offers justifyContentBetween">
                          <span class="block__text__offers__invest"
                            >Abrir uma oferta de investimento</span
                          >
                          <span class="block__text__offers__invest"
                            >Encontrar Pedidos</span
                          >
                        </div>
                        <span
                          class="block__text__offers__invest block__text__offers__invest--text"
                          >Abrir um pedido de credito</span
                        >
                      </div>
      
                      <div class="block__Information__offers flexDirectionColumn justifyContentSpaceEvenly">
                        <span class="title__offers__primary"
                          >Informações da Conta</span
                        >
                        <div class="block__text__offers__account justifyContentSpaceBetween">
                          <div class="block__text__offers__text flexDirectionColumn">
                            <span class="block__text__offers__invest"
                              >Lista de Indicados</span
                            >
                            <span class="block__text__offers__invest"
                              >Histórico de Conta</span
                            >
                          </div>
      
                          <div class="block__end__offers  flexDirectionColumn">
                            <span class="block__text__offers__invest"
                              >Lista de Seguidores</span
                            >
                            <span class="block__text__offers__invest"
                              >Faças uma pergunta</span
                            >
                          </div>
                        </div>
                        <span class="block__text__offers__invest"
                          >Minhas Apostas</span
                        >
                      </div>
      
                      <div class="user__offers justifyContentSpaceBetween AlignItemsCenter">
                        <div class="block__title__user justifyContentSpaceBetween flexDirectionColumn">
                          <span class="block__text__offers__invest"
                            >Conta Nell bux</span
                          >
                          <span class="perfil__title__bold">1211451-1</span>
                        </div>
                        <div class="block__title__user justifyContentSpaceBetween flexDirectionColumn">
                          <span class="block__text__offers__invest block__text__user"
                            >Meu Usuario</span
                          >
                          <span class="perfil__title__bold">@eduardoon</span>
                        </div>
                      </div>
  
                  </div>
  
                
                </button>
  
                <span class="perfil__name-element">
                    Olá Tássio 
                    <span class="perfil__code-element">55077188</span>
                </span>
  
                <hr id="row__separator">    
              </div>
  
                
              <span class="leave__element">SAIR</span>      
          </nav>
            
            
            
          <div class="exit__menu alignItemsCenter">
            <span id="bt-abrir-menu-mobile" class="material-icons color__orange">menu</span>
          </div>
  
  
        </div>
      </header>
      
    <!--Navegação -->
      <nav class="nav__hrefs-block justifyContentCenter">
            <ul class="nav__links-container justifyContentBetween alignItemsCenter">
              <li class="nav__links-element">
                <img src="../assets/images/imagesNav/home.png" alt="home color orange" width="20" height="20"/>
                <a href="index.php">
                  Área de Membro
                </a>
              </li>
  
              <li>
                <img src="../assets/images/imagesNav/money.png" alt="orange money bag with s in the middle" width="20" height="20"/>
                <a href="moves.php" target="_blank">Minhas finanças</a>
              </li>
  
              <li>
                <img src="../assets/images/imagesNav/investiment.png" alt="investment growing" width="20" height="20" />
                <a href="investments.php">Investimentos</a>
              </li>
  
              <li>
                <img src="../assets/images/imagesNav/handmoney.png" alt="hand on top has a coin floating" width="20" height="20" />
                <a href="#">Ofertas</a>
              </li>
  
              <li>
                <img src="../assets/images/imagesNav/groupPeoples.png" alt="several people one after the other"  width="20" height="20" />
                <a href="society.php">Comunidade</a>
              </li>
  
              <li>
                <img src="../assets/images/imagesNav/foneOuvido.png" alt="Earphone" width="20" height="20"/>
                <a href="#">Suporte</a>
              </li>
  
              <li>
                <img src="../assets/images/imagesNav/jornal.png" alt="several sheets of newspaper stacked" width="20" height="20"/>
                <a href="#">Serviços</a>
              </li>
  
            </ul>
      </nav>
  
        <div class="container">
          <div id="mensagem-confirmacao-email">
            <div id="mensagem">
              Por favor, confirme seu e-mail, caso não tenha recebido
              <a href="#">clique aqui</a> para reenvia-lo
            </div>
            <div class="botao-fechar-mensagem">
              <span class="material-icons">clear</span>
            </div>
          </div>
        </div>
  
        <section id="corpo">
          <div class="container">
            <!-- -------------------------------------- -->
            <!-- Coluna 1 -->
            <article class="coluna1">
              <div id="box-recebimentos">
                <div class="item">
                  <div class="titulo">
                    Juros <br />
                    Recebidos
                  </div>
                  <div class="valor">R$ 0,00</div>
                </div>
  
                <div class="item">
                  <div class="titulo">
                    Publicidade <br />
                    Ganhos
                  </div>
                  <div class="valor">R$ 0,00</div>
                </div>
  
                <div class="item">
                  <div class="titulo">
                    Remuneração <br />
                    Total
                  </div>
                  <div class="valor">R$ 0,00</div>
                </div>
              </div>
  
              <div id="box-grafico-rendimentos">
                <canvas id="grafico-rendimentos"></canvas>
                <div class="dados-grafico">
                  <div>
                    <div class="item-legenda">
                      <div class="legenda-mes mes-atual"></div>
                      <div>Mês atual</div>
                    </div>
  
                    <div class="item-legenda">
                      <div class="legenda-mes mes-passado"></div>
                      <div>Mês passado</div>
                    </div>
                  </div>
  
                  <div>
                    <div class="item-legenda mes-passado">
                      <div class="font-bold margin-right5">Mês atual</div>
                      <div class="font-bold texto-laranja">R$ 51,78</div>
                    </div>
  
                    <div class="item-legenda mes-passado">
                      <div class="font-bold margin-right5">Mês passado</div>
                      <div class="font-bold texto-azul">R$ 51,78</div>
                    </div>
                  </div>
                </div>
              </div>
  
              <div id="box-grafico-visualizacoes">
                <canvas id="grafico-visualizacoes"></canvas>
                <div class="dados-grafico">
                  <div>
                    <div class="item-legenda">
                      <div class="legenda-mes visualizacoes"></div>
                      <div>Visalizações</div>
                    </div>
  
                    <div class="item-legenda">
                      <div class="legenda-mes registros"></div>
                      <div>Registros</div>
                    </div>
  
                    <div class="item-legenda">
                      <div class="legenda-mes ganhos"></div>
                      <div>Ganhos</div>
                    </div>
                  </div>
  
                  <div>
                    <div class="item-legenda mes-passado">
                      <div class="font-bold margin-right5">Visualizações</div>
                      <div class="font-bold texto-laranja">798</div>
                    </div>
  
                    <div class="item-legenda mes-passado">
                      <div class="font-bold margin-right5">Registros</div>
                      <div class="font-bold texto-azul">16</div>
                    </div>
  
                    <div class="item-legenda">
                      <div class="font-bold margin-right5">Ganhos</div>
                      <div class="font-bold texto-verde">30</div>
                    </div>
                  </div>
                </div>
              </div>
            </article>
  
            <!-- -------------------------------------- -->
            <!-- Coluna 2 -->
            <article class="coluna2">
              <div id="box-nao-perca-nada">
                <div class="botao-fechar">
                  <span class="material-icons">clear</span>
                </div>
                <div class="titulo">Não perca nada!</div>
                <p class="texto text__weigth">
                  Habilite as notificações e receba instataneamente novas
                  mensagens e avisos pendentes.
                </p>
                <a href="#" class="botao">Ativar</a>
              </div>
  
              <div id="box-chat">
                <div class="linha1">
                  <div class="estrelas-chat">
                    <div class="icone icon-sorriso"></div>
                    <div>
                      <div class="nome">Eduardo</div>
                      <div class="box-estrelas">
                        <div class="material-icons">star</div>
                        <div class="material-icons">star</div>
                        <div class="material-icons">star</div>
                        <div class="material-icons">star</div>
                        <div class="material-icons">star</div>
                      </div>
                    </div>
                  </div>
  
                    <button class="botao botao__activeModalMensager button__surf alignItemsCenter">
                      <img src="../assets/images/globosurf.png" alt="" width="25" height="25"/>
                      <span class="title__surf">INICIAR SURF</span>
                    </button>
                </div>
  
                <div class="linha2">
                  <div>
                    <div class="font-bold">R$ 0,00</div>
                    <div class="descricao-pequena">
                      Total de ganhos com a NellBux
                    </div>
                  </div>
  
                  <div>
                    <div class="font-bold">0</div>
                    <div class="flex-centro">
                      <div class="descricao-pequena margin-right5">
                        Projetos em execução
                      </div>
                      <div class="icon-info-circulo"></div>
                    </div>
                  </div>
                </div>
              </div>
  
              <div id="box-tempo-aposentar">
                <div class="box-grafico">
                  <div class="texto-centro font-bold title__timeN">
                    Tempo para se aposentar com NellBux
                  </div>
                  <div class="container-grafico">
                    <div class="barra-grafico"></div>
                  </div>
                  <div class="descricao-grafico">6 anos e 5 meses</div>
                </div>
  
                <div id="box-simulacao">
                  <h3>Faça uma simulação</h3>
                  <div class="form-simulacao">
                    <div>
                      <div class="label">Saldo:</div>
                      <div>
                        <input type="text" name="saldo" value="" />
                      </div>
                    </div>
  
                    <div></div>
  
                    <div>
                      <div class="label">Aportes Mensais:</div>
                      <div>
                        <input type="text" name="aportes" value="" />
                      </div>
                    </div>
                  </div>
                </div>
  
                <div id="tempo-aposentadoria">
                  <h3>Você se aposentará com a NellBux em:</h3>
                  <h3>-- anos, --meses e --dias</h3>
                </div>
              </div>
  
              <div id="box-saldos">
                <div class="linha1">
                  <div class="item">
                    <div class="titulo">Indicação</div>
                    <div class="valor texto-laranja">R$: 570,87</div>
                  </div>
  
                  <div class="item">
                    <div class="titulo">Plano</div>
                    <div class="valor texto-laranja">BRONZE</div>
                  </div>
  
                  <div class="item">
                    <div class="titulo">Juros ao mês</div>
                    <div class="valor color__gray">0,50 %</div>
                  </div>
                </div>
  
                <div class="linha2">
                  <div class="item">
                    <div class="titulo">Visualizações</div>
                    <div class="valor color__gray">980</div>
                  </div>
  
                  <div class="item">
                    <div class="titulo">Registros</div>
                    <div class="valor color__gray">50</div>
                  </div>
  
                  <div class="item">
                    <div class="titulo">Rendimento</div>
                    <div class="valor color__gray">R$ 30,54</div>
                  </div>
                </div>
  
                <div class="linha-botoes flex-centro">
                  <a href="#" class="botao-verde margin-right5">
                    <div class="flex-centro">
                      <span class="material-icons">attach_money</span>
                      <div>Adicionar saldo</div>
                    </div>
                  </a>
  
                  <a href="#" class="botao-azul">
                    <div class="flex-centro">
                      <span class="material-icons">settings</span>
                      <div>Configurações</div>
                    </div>
                  </a>
                </div>
              </div>
            </article>
          </div>
        </section>
  
        <section id="corpo-parte2">
          <div class="container">
            <!-- -------------------------------------- -->
            <!-- Coluna 1 -->
            <article class="coluna1">
              <div id="box-ganhe-moedas">
                <div class="tag-novo">Novo</div>
  
                <h3>
                  Ganhe Moedas de <br />
                  Forma Ilimitada!
                </h3>
  
                <p>
                  Comece a divulgar nosso aplicativo e receba por cada
                  visualização, registro ou venda.
                </p>
  
                <a href="a" class="botao">Programa de afiliados</a>
              </div>
  
              <div id="box-score">
                <h3 class="font-bold">NellBux Score 3.0</h3>
                <h3>Seu scoreestá baixo</h3>
  
                <div id="box-grafico-score" class="justifyContentCenter">
                  <div class="boxScore">
                      <div style="margin: 15px 0px; display: flex; justify-content: center; gap: 5px; align-items: center;">
                        <p class="nivelScore">Score Atual <span>GOLD</span></p>
                        <svg width="11" height="10" viewBox="0 0 11 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <rect x="0.5" width="10" height="10" rx="5" fill="#3A7FFF"></rect>
                            <path d="M5.43497 6.46289H5.0578C5.0578 6.26845 5.09971 6.04514 5.18353 5.79297C5.27023 5.5408 5.37428 5.2947 5.49566 5.05469C5.61705 4.81163 5.73699 4.57161 5.85549 4.33464C5.97688 4.09766 6.07948 3.86372 6.16329 3.63281C6.25 3.40191 6.29335 3.20443 6.29335 3.04036C6.29046 2.75174 6.20231 2.53754 6.0289 2.39779C5.85549 2.25803 5.6185 2.18815 5.31792 2.18815C4.94509 2.18815 4.57081 2.3112 4.19509 2.55729L4 1.94206C4.35549 1.64735 4.83381 1.5 5.43497 1.5C5.90318 1.5 6.28035 1.63064 6.56647 1.89193C6.85549 2.15017 7 2.51172 7 2.97656C7 3.2105 6.96676 3.43837 6.90029 3.66016C6.83671 3.88194 6.74711 4.09918 6.6315 4.31185C6.5159 4.52148 6.39451 4.72656 6.26734 4.92708C6.14306 5.12457 6.00145 5.36306 5.84249 5.64258C5.68642 5.92209 5.55058 6.19553 5.43497 6.46289ZM4.88439 8.32227C4.78324 8.20074 4.73266 8.05946 4.73266 7.89844C4.73266 7.73741 4.78324 7.59766 4.88439 7.47917C4.98844 7.35764 5.13006 7.29688 5.30925 7.29688C5.49133 7.29688 5.63295 7.35612 5.7341 7.47461C5.83526 7.5931 5.88584 7.73438 5.88584 7.89844C5.88584 8.0625 5.83526 8.20378 5.7341 8.32227C5.63295 8.44075 5.49133 8.5 5.30925 8.5C5.13006 8.5 4.98844 8.44075 4.88439 8.32227Z" fill="white"></path>
                        </svg>
                      </div>
                      <svg xmlns="http://www.w3.org/2000/svg" width="220" height="110.454" viewBox="0 0 220 110.454">
                        <g id="Score_2" data-name="Score 2" transform="translate(-200 -246.548)">
                          <g id="Grade_principal" data-name="Grade principal" transform="translate(200 247)">
                            <path id="Grade" d="M-175-137h-25a110.809,110.809,0,0,1,2.235-22.169,109.442,109.442,0,0,1,6.41-20.648A110.011,110.011,0,0,1-181.213-198.5a110.784,110.784,0,0,1,13.432-16.28,110.785,110.785,0,0,1,16.28-13.432,110.01,110.01,0,0,1,18.685-10.142,109.449,109.449,0,0,1,20.648-6.409A110.812,110.812,0,0,1-90-247a110.812,110.812,0,0,1,22.169,2.235,109.448,109.448,0,0,1,20.648,6.409A110.009,110.009,0,0,1-28.5-228.214a110.787,110.787,0,0,1,16.28,13.432A110.789,110.789,0,0,1,1.214-198.5a110.011,110.011,0,0,1,10.142,18.685,109.443,109.443,0,0,1,6.41,20.648A110.813,110.813,0,0,1,20-137H-5a84.427,84.427,0,0,0-24.924-60.076A84.423,84.423,0,0,0-90-222a85.1,85.1,0,0,0-85,85Z" transform="translate(200 247)" fill="#f2f1f1"></path>
                          </g>
                            <path id="Vermelho" d="M200,357h24.894s.846-18.165,7.023-33.074,17.686-26.56,17.686-26.56L231.839,279.61s-15.232,15.585-23.192,34.933S200,357,200,357Z" fill="#f85b4a"></path>
                            <path id="Amarelo" d="M-4.19.817a106.759,106.759,0,0,1,35.9-5.694,104.064,104.064,0,0,1,37.908,8.16L65.107,13.335A91.824,91.824,0,0,0,32.808,6.2,93.294,93.294,0,0,0-.217,11.143Z" transform="matrix(0.914, -0.407, 0.407, 0.914, 243.085, 279.348)" fill="#ffd500" opacity="0.43"></path>
                            <path id="Verde" d="M.407,12.372a103.808,103.808,0,0,0,35.614,5.706C56.6,17.867,74.166,9.892,74.166,9.892L69.68-.152a96.133,96.133,0,0,1-32.79,7.174,88.3,88.3,0,0,1-32.523-5Z" transform="matrix(-0.914, -0.407, 0.407, -0.914, 375.702, 293.234)" fill="#00ca4a" opacity="0.43"></path>
                            <path id="Azul" d="M759.7,348.006h11.112a102.371,102.371,0,0,0-29.564-65.418l-7.819,7.816s9.859,8.595,17.832,25.369A89.7,89.7,0,0,1,759.7,348.006Z" transform="translate(-358 2)" fill="#0a62ae" opacity="0.43"></path>
                          </g>
                      </svg>
                      <div class="infoScore">
                        <p class="numScore">266</p>
                        <p class="title__numScoreInfo">de 5000</p>
                        <p class="title__numScoreInfo">NellBux Score 3.0</p>
                      </div> 
                      <div class="boxIconsNivel">
                        <img src="../assets/images/nivel1.png" alt="" class="imgNivel">
                          <img src="../assets/images/nivel2.png" alt="" class="imgNivelAtual">
                          <img src="../assets/images/nivel3.png" alt="" class="imgNivel">
                          <img src="../assets/images/nivel4.png" alt="" class="imgNivel">
                          <img src="../assets/images/nivel5.png" alt="" class="imgNivel">
                      </div>
                  </div>    
                </div>
  
                <h4>Meu nível de Perfil</h4>
  
                <div class="font-bold texto-laranja">Bronze</div>
                <div class="lista-niveis">
                  <div class="nivel">
                    <figure>
                      <img src="../assets/images/score/bronze.png" alt="" />
                    </figure>
                  </div>
                  <div class="nivel nao-atingido">
                    <figure>
                      <img src="../assets/images/score/prata.png" alt="" />
                    </figure>
                  </div>
                  <div class="nivel nao-atingido">
                    <figure>
                      <img src="../assets/images/score/ouro.png" alt="" />
                    </figure>
                  </div>
                  <div class="nivel nao-atingido">
                    <figure>
                      <img src="../assets/images/score/super.png" alt="" />
                    </figure>
                  </div>
                  <div class="nivel nao-atingido">
                    <figure>
                      <img src="../assets/images/score/hero.png" alt="" />
                    </figure>
                  </div>
                </div>
  
                <div class="font-bold descricao">
                  Pontos de score: <span class="texto-verde font-bold">60</span>
                </div>
                <div class="font-bold descricao">
                  Pontos que faltam para o próximo nível:
                  <span class="title__colorRed font-bold">90</span>
                </div>
                <div class="font-bold descricao">Pedidos semanais: 2</div>
              </div>
            </article>
  
            <!-- -------------------------------------- -->
            <!-- Coluna 2 -->
            <article class="coluna2">
              <h2>Meus Pedidos de Crédito</h2>
  
              <div id="box-pedidos-creditos">
                <div class="size0-9 header">
                  <div>
                    <div class="text__weigth">
                      Procuro Sócio Investidor para Oficina de Conversão de
                      Veículos
                    </div>
                    <div class="espaco5"></div>
                    <div class="title__twoPropost">2 propostas Empréstimos de $25.000,00</div>
                  </div>
  
                  <div class="texto-direita tooltiples__primary">
                    <div class="material-icons open__moreCard">more_vert</div>
  
                    <div class="toltiples__cardPrimary">
                      <ul class="ul__toltiples">
                        <li class="titles__tooltiples">
                          <a href="#" class="title__tooltiples--green">Destacar Projeto</a>
                        </li>
                        <li>
                          <a href="#">Convidar Investidores</a>
                        </li>
                        <li>
                          <a href="#">Estabelecer como privado</a>
                        </li>
                        <li>
                          <a href="#">Editar</a>
                        </li>
                        <li>
                          <a href="#">Cancelar Projeto</a>
                        </li>
                        <li>
                          <a href="#">Propostas</a>
                        </li>
                        <li>
                          <a href="#">Criar um projeto semelhante</a>
                        </li>
                      </ul>
                    </div>
  
  
                  </div>
                </div>
  
                <div class="texto-direita font__weight title__pubs">
                  Publicado há 3 dias
                </div>
                <div class="texto-direita">
                  <div class="tag-amarela">Analisando propostas</div>
                </div>
                <a href="#" class="link"
                  >Ver todos os investidores interessados</a
                >
              </div>
  
              <h2>Minhas Pospostas de Investimento</h2>
  
              <div id="box-minhas-propostas">
                <div class="header size0-9">
                  <div>
                    <div class="text__weigth">
                      Repasso Franquia - Oportunidade de negócio com lucro
                    </div>
                    <div class="espaco5"></div>
                    <div class="text__weigth">
                      <span class="texto-azul text__weigth">Proposta</span>
                      Rentabilidade 35% a.a
                    </div>
                    <div class="espaco5"></div>
                    <div class="text__weigth">
                      1 Mensagens
                      <span class="texto-azul text__weigth"
                        >Enviar uma mensagem curta</span
                      >
                    </div>
                  </div>
  
                  <div class="texto-direita tooltiples__secondary">
                    <div class="material-icons open__moreCard">more_vert</div>
                      
                    <div class="toltiples__cardPrimary toltiples__cardSecondary">
                      <ul class="ul__toltiplesSecondary">
                        <li class="titles__tooltiples">
                          <a href="#">Cancelar Projeto</a>
                        </li>
                        <li>
                          <a href="#">Criar um projeto semelhante</a>
                        </li>
                        <li>
                          <a href="#">Garantir Proposta</a>
                        </li>
                        <li>
                          <a href="#">Ir para caixa de entrada</a>
                        </li>
                        <li>
                          <a href="#">Escolher outro empresario</a>
                        </li>
  
                      </ul>
                    </div>
                  </div>
                </div>
  
                <div class="texto-direita text__weigth title__companyName">
                  Empresário: <a href='business.php' target='_blank' class='texto-azul' style='text-decoration:none'>Guilherme Costa Lopes</a>
                </div>
                <div class="texto-direita">
                  <div class="tag-vermelha">
                    Você deve realizar o investimento
                  </div>
                </div>
                <a href="#" class="link">Garantir Proposta</a>
              </div>
  
              <div class="subcolunas">
                <div class="subcolun1">
                  <div id="box-saques" class="box-saques-aberto">
                    <div class="header">
                      <div class="titulo">Fazer Saque do Juros</div>
                      <div
                        class="cursor-pointer withdraw__interest"
                      >
                        <div class="material-icons">arrow_forward_ios</div>
                      </div>
                    </div>
  
                    <div class="opcoes-saque">
                      <div class="icon-exclamacao"></div>
                      <div class="texto">
                        Configurar suas
                        <span class="texto-azul">opções de saque</span>
                      </div>
                    </div>
  
                    <div class="infos">
                      <div>Ultima atualização</div>
                      <div class="font-bold">Hoje</div>
                    </div>
  
                    <div class="infos">
                      <div>Juros Disponíveis para saque</div>
                      <div class="font-bold">R$ 0,00</div>
                    </div>
  
                    <a href="#" class="botao botao__gray">Sacar Agora</a>
                  </div>
  
                  <div id="box-slides">
                    <!-- Slider main container -->
                    <div class="swiper">
                      <!-- Additional required wrapper -->
                      <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                          <div class="imagem"></div>
                          <h5>
                            Obtenha qualificações positivas, elas possuem muito
                            valor
                          </h5>
                          <p>
                            cumpra e exceda as expectativas de cada trabalho e
                            forneça uma boa experiência para continuar subindo de
                            nivel.
                          </p>
                        </div>
  
                        <div class="swiper-slide">
                          <div class="imagem"></div>
                          <h5>
                            Obtenha qualificações positivas, elas possuem muito
                            valor
                          </h5>
                          <p>
                            cumpra e exceda as expectativas de cada trabalho e
                            forneça uma boa experiência para continuar subindo de
                            nivel.
                          </p>
                        </div>
  
                        <div class="swiper-slide">
                          <div class="imagem"></div>
                          <h5>
                            Obtenha qualificações positivas, elas possuem muito
                            valor
                          </h5>
                          <p>
                            cumpra e exceda as expectativas de cada trabalho e
                            forneça uma boa experiência para continuar subindo de
                            nivel.
                          </p>
                        </div>
                      </div>
                      <!-- If we need pagination -->
  
                      <div class="navegacao-slides">
                        <div class="bt-nav" id="bt-anteior">Anterior</div>
                        <div class="swiper-pagination"></div>
                        <div class="bt-nav" id="bt-proximo">Próxima</div>
                      </div>
  
                      <!-- If we need navigation buttons -->
                    </div>
                  </div>
                </div>
  
                <div class="subcoluna2">
                  <div id="box-subir-escore" class="box-subir-escore-aberto">
                    <div class="header header__typeN">
                      <div class="titulo">Como Subir Meu Score no NellBux</div>
                      <div class="cursor-pointer score__upNell">
                        <div class="material-icons">arrow_forward_ios</div>
                      </div>
                    </div>
  
                    <a href="" class="link">Descubra como se tornar Hero</a>
  
                    <div
                      class="box-granfico-porcentagem"
                      id="grafico-porcentagem-rendimento"
                    >
                      <h5>Rendimento</h5>
                      <p>Valor total ganho em juros com NellBux</p>
  
                      <div class="box-grafico">
                        <div class="barra-grafico"></div>
                      </div>
  
                      <div class="totalizador">98.00 / 200 BRL</div>
                    </div>
  
                    <div
                      class="box-granfico-porcentagem"
                      id="grafico-porcentagem-investimentos"
                    >
                      <h5>Investimentos</h5>
                      <p>Valor total investido com NellBux</p>
  
                      <div class="box-grafico">
                        <div class="barra-grafico"></div>
                      </div>
  
                      <div class="totalizador">98.00 / 200 BRL</div>
                    </div>
  
                    <div
                      class="box-granfico-porcentagem"
                      id="grafico-porcentagem-movimentacoes"
                    >
                      <h5>Movimentações</h5>
                      <p>Valor total movimentando com NellBux</p>
  
                      <div class="box-grafico">
                        <div class="barra-grafico"></div>
                      </div>
  
                      <div class="totalizador">98.00 / 200 BRL</div>
                    </div>
  
                    <div
                      class="box-granfico-porcentagem"
                      id="grafico-porcentagem-investidores"
                    >
                      <h5>Investidores satisfeitos</h5>
                      <p>Clientes que te qualificam com 5 estrelas</p>
  
                      <div class="box-grafico">
                        <div class="barra-grafico"></div>
                      </div>
  
                      <div class="totalizador">98.00 / 200 BRL</div>
                    </div>
  
                    <div
                      class="box-granfico-porcentagem"
                      id="grafico-porcentagem-perfil"
                    >
                      <h5>Completar Perfil</h5>
                      <p>Complete ou atualize seu perfil</p>
  
                      <div class="box-grafico">
                        <div class="barra-grafico"></div>
                      </div>
  
                      <div class="totalizador">98.00 / 200 BRL</div>
                    </div>
  
                    <div class="flex-centro">
                      <div class="text__weigth size0-8 margin-right10">
                        Tenha seguidores
                      </div>
                      <span class="material-icons texto-verde">done</span>
                    </div>
                    <div class="espaco10"></div>
  
                    <div class="flex-centro">
                      <div class="text__weigth size0-8 margin-right10">
                        Tenha seguidores
                      </div>
                      <span class="material-icons texto-verde">done</span>
                    </div>
                    <div class="espaco10"></div>
  
                    <p class="size0-8 text__weigth">
                      Faça um bom trabalho e aumente as possibilidades de atrair
                      mais investidores. Leia mais no
                      <a
                        href="#"
                        class="link size1 texto-azul"
                        style="display: unset"
                        >Centro de Ajuda</a
                      >
                    </p>
                  </div>
                </div>
              </div>
            </article>
  
            <div class="espaco60"></div>
          </div>
        </section>
        <div class="chat alignItemsEnd">
    
    
            <div class="painel__chat">
    
                <div class="background__chat alignItemsCenter justifyContentBetween">
        
                    <div class="active__chatName alignItemsCenter">
                        <span class="active__chat"></span>
                        <h3 class="title__chat">Chat</h3>
                        <div class="total__message justifyContentCenter alignItemsCenter">2</div>
                    </div>
        
                    <div class="icons__buttons">
                        <span class="material-icons cursor-pointer exit__mensager">arrow_upward</span>
                        <span class="material-icons cursor-pointer settingsButton">settings</span>
                    </div>
                </div>
    
                <section class="section__projectsMessage">
                    <div class="projects__name">
                        <div class="project__nameAbout justifyContentBetween">
                            <h3 class="title__nameProject">Projetos</h3>
                            <img src="../assets/images/setaDown.png"  alt="" width="20" height="20"/>
                        </div>
                        <ul class="ul__peoplesMessage">
    
                            <li class="li__peopleMessage li__peopleMessageMobile">
    
                              <div class="info__message alignItemsStart">
                                  <img src="../assets/images/feliz.png" alt="" width="25" height="25"/>
                                  <h3 class="span__title">Desenvolvedor Front End com experiencia</h3>
                              </div>
                                
                                <div class="message__amount amount__right alignItemsCenter justifyContentCenter">1</div>
    
                                <div class="card__messages card__messageTwos card__versionMobile card__versionMobile--position">
                                    <header class="background__message justifyContentBetween alignItemsCenter">
    
                        <div class="name__message alignItemsCenter ">
                            <img src="../assets/images/felizBranco.png" alt="" width="30" height="30" />
                            <span class="title__chat title__chatFont">User1</span>
                        </div>
    
                        <div class="buttons__message">
                            <button>
                                <span class="material-icons color__white settings__messageFolks">
                                  settings
                                  <section class="config__messagePerson">
                                    <ul class="ul___messagePerson">
                                      <li>
                                        <a href="#">
                                          Ir para caixa de Entrada
                                        </a>
                                      </li>
                                      <li>
                                        <a href="#">
                                          Ir para caixa de Entrada
                                        </a>
                                      </li>
                                      <li>
                                        <a href="#">
                                          Ver Projeto
                                        </a>
                                      </li>
                                      <li>
                                        <a href="#">
                                          Silenciar
                                        </a>
                                        <span class="material-icons color__white">volume_off</span>
                                      </li>
                                      <li>
                                        <a href="#">Ver perfil Completo</a>
                                      </li>
                                      <li>
                                        <a href="#">Bloquear Contato</a>
                                      </li>
                                    </ul>
                                  </section>
                                </span>
                                
                            </button>
                            <button>
                                <span class="material-icons color__white exitMessageMobile">clear</span>
                            </button>
                        </div>
    
                                    </header>
    
                                  <section class="section__aboutMessage section__messageAboutMobile">
                                      Desenvolvedor Front End com habilidades
                                  </section>
                            
                                  <section class="message__andSend messageAndSendMobile">
                                      <div class="message__all messageAllChatMobile">
                                          <div class="message__received">
                                              <p>Uma mensagem aqui da outra pessoa</p>
                                              <div>User a cerca de uma hora atrás</div>
                                          </div>
    
                                          <div class="message__sendWidth justifyContentEnd">
                                              <div class="message__send">
                                                  <p>Olá como eu faço para mudar meu plano?</p>
                                                  <div>User a cerca de uma hora atrás</div>
                                              </div>
                                          </div>
    
                                          <div class="message__received">
                                              <p>Uma mensagem aqui da outra pessoa</p>
                                              <div>User a cerca de uma hora atrás</div>
                                          </div>
    
                                          <div class="message__sendWidth justifyContentEnd">
                                              <div class="message__send">
                                                  <p>Olá como eu faço para mudar meu plano?</p>
                                                  <div>User a cerca de uma hora atrás</div>
                                              </div>
                                          </div>
    
                                          <div class="message__received">
                                              <p>Uma mensagem aqui da outra pessoa</p>
                                              <div>User a cerca de uma hora atrás</div>
                                          </div>
    
                                          <div class="message__sendWidth justifyContentEnd">
                                              <div class="message__send">
                                                  <p>Olá como eu faço para mudar meu plano?</p>
                                                  <div>User a cerca de uma hora atrás</div>
                                              </div>
                                          </div>
                                          
                                          <div class="message__received">
                                              <p>Uma mensagem aqui da outra pessoa</p>
                                              <div>User a cerca de uma hora atrás</div>
                                          </div>
    
                                          <div class="message__sendWidth justifyContentEnd">
                                              <div class="message__send">
                                                  <p>Olá como eu faço para mudar meu plano?</p>
                                                  <div>User a cerca de uma hora atrás</div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="input__message input__messageMobile justifyContentBetween alignItemsCenter">
                                          <input type="text" placeholder="Envia uma mensagem" />
                                          <img src="../assets/images/clipe.png" alt="" width="25" height="25"/>
                                      </div>
                                  </section>
                                  
                                </div>
                            </li>
    
                            <li class="li__peopleMessage li__peopleMessageMobile">
    
                                <div class="info__message alignItemsStart">
                                  <img src="../assets/images/feliz.png" alt="" width="25" height="25"/>
                                  <h3 class="span__title">Desenvolvedor Front End com experiencia</h3>
                                </div>
    
                                <div class="message__amount amount__right alignItemsCenter justifyContentCenter">1</div>
    
                                <div class="card__message card__messageTwo card__versionMobile card__versionMobile--postionTwo">
                                    <header class="background__message justifyContentBetween alignItemsCenter">
    
                        <div class="name__message alignItemsCenter ">
                            <img src="../assets/images/felizBranco.png" alt="" width="30" height="30" />
                            <span class="title__chat title__chatFont">User2</span>
                        </div>
    
                        <div class="buttons__message">
                            <button>
                                <span class="material-icons color__white settings__messageFolks">
                                  settings
                                  <section class="config__messagePerson">
                                    <ul class="ul___messagePerson">
                                      <li>
                                        <a href="#">
                                          Ir para caixa de Entrada
                                        </a>
                                      </li>
                                      <li>
                                        <a href="#">
                                          Ir para caixa de Entrada
                                        </a>
                                      </li>
                                      <li>
                                        <a href="#">
                                          Ver Projeto
                                        </a>
                                      </li>
                                      <li>
                                        <a href="#">
                                          Silenciar
                                        </a>
                                        <span class="material-icons color__white">volume_off</span>
                                      </li>
                                      <li>
                                        <a href="#">Ver perfil Completo</a>
                                      </li>
                                      <li>
                                        <a href="#">Bloquear Contato</a>
                                      </li>
                                    </ul>
                                  </section>
                                </span>
                                
                            </button>
                            <button>
                                <span class="material-icons color__white exitMessageMobile">clear</span>
                            </button>
                        </div>
    
                                    </header>
    
                                  <section class="section__aboutMessage section__messageAboutMobile">
                                      Desenvolvedor Front End com habilidades
                                  </section>
                            
                                  <section class="message__andSend messageAndSendMobile">
                                      <div class="message__all messageAllChatMobile">
                                          <div class="message__received">
                                              <p>Uma mensagem aqui da outra pessoa</p>
                                              <div>User a cerca de uma hora atrás</div>
                                          </div>
    
                                          <div class="message__sendWidth justifyContentEnd">
                                              <div class="message__send">
                                                  <p>Olá como eu faço para mudar meu plano?</p>
                                                  <div>User a cerca de uma hora atrás</div>
                                              </div>
                                          </div>
    
                                          <div class="message__received">
                                              <p>Uma mensagem aqui da outra pessoa</p>
                                              <div>User a cerca de uma hora atrás</div>
                                          </div>
    
                                          <div class="message__sendWidth justifyContentEnd">
                                              <div class="message__send">
                                                  <p>Olá como eu faço para mudar meu plano?</p>
                                                  <div>User a cerca de uma hora atrás</div>
                                              </div>
                                          </div>
    
                                          <div class="message__received">
                                              <p>Uma mensagem aqui da outra pessoa</p>
                                              <div>User a cerca de uma hora atrás</div>
                                          </div>
    
                                          <div class="message__sendWidth justifyContentEnd">
                                              <div class="message__send">
                                                  <p>Olá como eu faço para mudar meu plano?</p>
                                                  <div>User a cerca de uma hora atrás</div>
                                              </div>
                                          </div>
                                          
                                          <div class="message__received">
                                              <p>Uma mensagem aqui da outra pessoa</p>
                                              <div>User a cerca de uma hora atrás</div>
                                          </div>
    
                                          <div class="message__sendWidth justifyContentEnd">
                                              <div class="message__send">
                                                  <p>Olá como eu faço para mudar meu plano?</p>
                                                  <div>User a cerca de uma hora atrás</div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="input__message input__messageMobile justifyContentBetween alignItemsCenter">
                                          <input type="text" placeholder="Envia uma mensagem" />
                                          <img src="../assets/images/clipe.png" alt="" width="25" height="25"/>
                                      </div>
                                  </section>
                                  
                                </div>
    
                            </li>
    
                            <li class="li__peopleMessage li__peopleMessageMobile">
                              <img src="../assets/images/feliz.png" alt="" width="25" height="25"/>
                              Desenvolvedor Front End com experiencia
                                <div class="card__message card__messageTwo card__versionMobile card__versionMobile--positionthree">
                                  <header class="background__message justifyContentBetween alignItemsCenter">
    
                        <div class="name__message alignItemsCenter ">
                            <img src="../assets/images/felizBranco.png" alt="" width="30" height="30" />
                            <span class="title__chat title__chatFont">User3</span>
                        </div>
    
                        <div class="buttons__message">
                            <button>
                                <span class="material-icons color__white settings__messageFolks">
                                  settings
                                  <section class="config__messagePerson">
                                    <ul class="ul___messagePerson">
                                      <li>
                                        <a href="#">
                                          Ir para caixa de Entrada
                                        </a>
                                      </li>
                                      <li>
                                        <a href="#">
                                          Ir para caixa de Entrada
                                        </a>
                                      </li>
                                      <li>
                                        <a href="#">
                                          Ver Projeto
                                        </a>
                                      </li>
                                      <li>
                                        <a href="#">
                                          Silenciar
                                        </a>
                                        <span class="material-icons color__white">volume_off</span>
                                      </li>
                                      <li>
                                        <a href="#">Ver perfil Completo</a>
                                      </li>
                                      <li>
                                        <a href="#">Bloquear Contato</a>
                                      </li>
                                    </ul>
                                  </section>
                                </span>
                                
                            </button>
                            <button>
                                <span class="material-icons color__white exitMessageMobile">clear</span>
                            </button>
                        </div>
    
                                    </header>
    
                                  <section class="section__aboutMessage section__messageAboutMobile">
                                      Desenvolvedor Front End com habilidades
                                  </section>
                            
                                  <section class="message__andSend messageAndSendMobile">
                                      <div class="message__all messageAllChatMobile">
                                          <div class="message__received">
                                              <p>Uma mensagem aqui da outra pessoa</p>
                                              <div>User a cerca de uma hora atrás</div>
                                          </div>
    
                                          <div class="message__sendWidth justifyContentEnd">
                                              <div class="message__send">
                                                  <p>Olá como eu faço para mudar meu plano?</p>
                                                  <div>User a cerca de uma hora atrás</div>
                                              </div>
                                          </div>
    
                                          <div class="message__received">
                                              <p>Uma mensagem aqui da outra pessoa</p>
                                              <div>User a cerca de uma hora atrás</div>
                                          </div>
    
                                          <div class="message__sendWidth justifyContentEnd">
                                              <div class="message__send">
                                                  <p>Olá como eu faço para mudar meu plano?</p>
                                                  <div>User a cerca de uma hora atrás</div>
                                              </div>
                                          </div>
    
                                          <div class="message__received">
                                              <p>Uma mensagem aqui da outra pessoa</p>
                                              <div>User a cerca de uma hora atrás</div>
                                          </div>
    
                                          <div class="message__sendWidth justifyContentEnd">
                                              <div class="message__send">
                                                  <p>Olá como eu faço para mudar meu plano?</p>
                                                  <div>User a cerca de uma hora atrás</div>
                                              </div>
                                          </div>
                                          
                                          <div class="message__received">
                                              <p>Uma mensagem aqui da outra pessoa</p>
                                              <div>User a cerca de uma hora atrás</div>
                                          </div>
    
                                          <div class="message__sendWidth justifyContentEnd">
                                              <div class="message__send">
                                                  <p>Olá como eu faço para mudar meu plano?</p>
                                                  <div>User a cerca de uma hora atrás</div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="input__message input__messageMobile justifyContentBetween alignItemsCenter">
                                          <input type="text" placeholder="Envia uma mensagem" />
                                          <img src="../assets/images/clipe.png" alt="" width="25" height="25"/>
                                      </div>
                                  </section>
                                  
                                </div>
                            </li>
    
                        </ul>
                      </div>
                    
                    <div class="projects__name">
                        <div class="project__nameContacts justifyContentBetween">
                            <h3 class="title__nameProject">Contatos</h3>
                            <img src="../assets/images/setaDown.png"  alt="" width="20" height="20"/>
                        </div>
                        <ul class="ul__contacts">
                            <li class="li__peopleMessage li__peopleContact li__peopleMessageMobile">
                                <div class="alignItemsCenter">
                                  <img src="../assets/images/feliz.png" alt="" width="25" height="25"/>
                                  User
                                </div>
                                <div class="card__message card__messageTwo card__versionMobile card__versionMobile--positionContact">
                                    <header class="background__message justifyContentBetween alignItemsCenter">
    
                        <div class="name__message alignItemsCenter ">
                            <img src="../assets/images/felizBranco.png" alt="" width="30" height="30" />
                            <span class="title__chat title__chatFont">contact</span>
                        </div>
    
                        <div class="buttons__message">
                            <button>
                                <span class="material-icons color__white settings__messageFolks">
                                  settings
                                  <section class="config__messagePerson">
                                    <ul class="ul___messagePerson">
                                      <li>
                                        <a href="#">
                                          Ir para caixa de Entrada
                                        </a>
                                      </li>
                                      <li>
                                        <a href="#">
                                          Ir para caixa de Entrada
                                        </a>
                                      </li>
                                      <li>
                                        <a href="#">
                                          Ver Projeto
                                        </a>
                                      </li>
                                      <li>
                                        <a href="#">
                                          Silenciar
                                        </a>
                                        <span class="material-icons color__white">volume_off</span>
                                      </li>
                                      <li>
                                        <a href="#">Ver perfil Completo</a>
                                      </li>
                                      <li>
                                        <a href="#">Bloquear Contato</a>
                                      </li>
                                    </ul>
                                  </section>
                                </span>
                                
                            </button>
                            <button>
                                <span class="material-icons color__white exitMessageMobile">clear</span>
                            </button>
                        </div>
    
                                    </header>
    
                            
                                  <section class="message__andSend messageAndSendMobile">
                                      <div class="message__all">
                                          <div class="message__received">
                                              <p>Uma mensagem aqui da outra pessoa</p>
                                              <div>User a cerca de uma hora atrás</div>
                                          </div>
    
                                          <div class="message__sendWidth justifyContentEnd">
                                              <div class="message__send">
                                                  <p>Olá como eu faço para mudar meu plano?</p>
                                                  <div>User a cerca de uma hora atrás</div>
                                              </div>
                                          </div>
    
                                          <div class="message__received">
                                              <p>Uma mensagem aqui da outra pessoa</p>
                                              <div>User a cerca de uma hora atrás</div>
                                          </div>
    
                                          <div class="message__sendWidth justifyContentEnd">
                                              <div class="message__send">
                                                  <p>Olá como eu faço para mudar meu plano?</p>
                                                  <div>User a cerca de uma hora atrás</div>
                                              </div>
                                          </div>
    
                                          <div class="message__received">
                                              <p>Uma mensagem aqui da outra pessoa</p>
                                              <div>User a cerca de uma hora atrás</div>
                                          </div>
    
                                          <div class="message__sendWidth justifyContentEnd">
                                              <div class="message__send">
                                                  <p>Olá como eu faço para mudar meu plano?</p>
                                                  <div>User a cerca de uma hora atrás</div>
                                              </div>
                                          </div>
                                          
                                          <div class="message__received">
                                              <p>Uma mensagem aqui da outra pessoa</p>
                                              <div>User a cerca de uma hora atrás</div>
                                          </div>
    
                                          <div class="message__sendWidth justifyContentEnd">
                                              <div class="message__send">
                                                  <p>Olá como eu faço para mudar meu plano?</p>
                                                  <div>User a cerca de uma hora atrás</div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="input__message input__messageMobile justifyContentBetween alignItemsCenter">
                                          <input type="text" placeholder="Envia uma mensagem" />
                                          <img src="../assets/images/clipe.png" alt="" width="25" height="25"/>
                                      </div>
                                  </section>
                                  
                                </div>
                            </li>
                        </ul>
                    </div>
    
                </section>
    
                <section class="section__config flexDirectionColumn">
                    <label class="title__sound alignItemsCenter">
                        <input type="checkbox" />
                        Sons
                    </label>
                    <span class="show__chatwindow">Mostrar novas janelas de chat</span>
    
                    <div class="select__radioInput">
    
                        <div class="input__radio alignItemsStart">
                            <label for="radioForever">
                                <input type="radio" id="radioForever" name="radio"/>
                            </label>
                            Sempre
                        </div>
    
                        <div class="input__radio alignItemsStart">
                            <label for="radioRecommended">
                                <input type="radio" id="radioRecommended" name="radio"/>
                            </label>
                            Somente recomendados e conversas em curso
                        </div>
                    
                        <div class="input__radio alignItemsStart">
                            <label for="radioNever">
                                <input type="radio" name="radio" id="radioNever"/>
                            </label>
                            Nunca
                        </div>   
                    
                    </div>
                    <span class="title__disconnect">Desconectar</span>
                </section>
    
                <div class="input justifyContentSpaceBetween alignItemsCenter">
                    <input type="text" placeholder="Buscar" />
                    <img src="../assets/images/imagesHeader/search.png" alt="" width="30" height="30" />
                </div>
            </div>
            
            <div class="chat__message">
    
              
                <li class="card__contact card__messageTwo">
                    <header class="background__message justifyContentBetween alignItemsCenter">
    
                        <div class="name__message alignItemsCenter ">
                            <img src="../assets/images/felizBranco.png" alt="" width="30" height="30" />
                            <span class="title__chat title__chatFont">User3</span>
                        </div>
    
                        <div class="buttons__message">
                            <button>
                                <span class="material-icons color__white settings__messageFolks">
                                  settings
                                  <section class="config__messagePerson">
                                    <ul class="ul___messagePerson">
                                      <li>
                                        <a href="#">
                                          Ir para caixa de Entrada
                                        </a>
                                      </li>
                                      <li>
                                        <a href="#">
                                          Ir para caixa de Entrada
                                        </a>
                                      </li>
                                      <li>
                                        <a href="#">
                                          Ver Projeto
                                        </a>
                                      </li>
                                      <li>
                                        <a href="#">
                                          Silenciar
                                        </a>
                                        <span class="material-icons color__white">volume_off</span>
                                      </li>
                                      <li>
                                        <a href="#">Ver perfil Completo</a>
                                      </li>
                                      <li>
                                        <a href="#">Bloquear Contato</a>
                                      </li>
                                    </ul>
                                  </section>
                                </span>
                            </button>
                            <button>
                                <span class="material-icons color__white exitContacts">clear</span>
                            </button>
                        </div>
    
                    </header>
    
    
                    <section class="message__andSend">
                        <div class="message__all">
                            <div class="message__received">
                                <p>Uma mensagem aqui da outra pessoa</p>
                                <div>User a cerca de uma hora atrás</div>
                            </div>
    
                            <div class="message__sendWidth justifyContentEnd">
                                <div class="message__send">
                                    <p>Olá como eu faço para mudar meu plano?</p>
                                    <div>User a cerca de uma hora atrás</div>
                                </div>
                            </div>
    
                            <div class="message__received">
                                <p>Uma mensagem aqui da outra pessoa</p>
                                <div>User a cerca de uma hora atrás</div>
                            </div>
    
                            <div class="message__sendWidth justifyContentEnd">
                                <div class="message__send">
                                    <p>Olá como eu faço para mudar meu plano?</p>
                                    <div>User a cerca de uma hora atrás</div>
                                </div>
                            </div>
    
                            <div class="message__received">
                                <p>Uma mensagem aqui da outra pessoa</p>
                                <div>User a cerca de uma hora atrás</div>
                            </div>
    
                            <div class="message__sendWidth justifyContentEnd">
                                <div class="message__send">
                                    <p>Olá como eu faço para mudar meu plano?</p>
                                    <div>User a cerca de uma hora atrás</div>
                                </div>
                            </div>
                            
                            <div class="message__received">
                                <p>Uma mensagem aqui da outra pessoa</p>
                                <div>User a cerca de uma hora atrás</div>
                            </div>
    
                            <div class="message__sendWidth justifyContentEnd">
                                <div class="message__send">
                                    <p>Olá como eu faço para mudar meu plano?</p>
                                    <div>User a cerca de uma hora atrás</div>
                                </div>
                            </div>
                        </div>
                        <div class="input__message justifyContentBetween alignItemsCenter">
                            <input type="text" placeholder="Envia uma mensagem" />
                            <img src="../assets/images/clipe.png" alt="" width="25" height="25"/>
                        </div>
                    </section>
                </li>
    
                <li class="card__message card__messageTwo card__chatDesktop">
                    <header class="background__message justifyContentBetween alignItemsCenter">
    
                        <div class="name__message alignItemsCenter ">
                            <img src="../assets/images/felizBranco.png" alt="" width="30" height="30" />
                            <span class="title__chat title__chatFont">User1</span>
                        </div>
    
                        <div class="buttons__message">
                            <button>
                                <span class="material-icons color__white settings__messageFolks">
                                  settings
                                  <section class="config__messagePerson">
                                    <ul class="ul___messagePerson">
                                      <li>
                                        <a href="#">
                                          Ir para caixa de Entrada
                                        </a>
                                      </li>
                                      <li>
                                        <a href="#">
                                          Ir para caixa de Entrada
                                        </a>
                                      </li>
                                      <li>
                                        <a href="#">
                                          Ver Projeto
                                        </a>
                                      </li>
                                      <li>
                                        <a href="#">
                                          Silenciar
                                        </a>
                                        <span class="material-icons color__white">volume_off</span>
                                      </li>
                                      <li>
                                        <a href="#">Ver perfil Completo</a>
                                      </li>
                                      <li>
                                        <a href="#">Bloquear Contato</a>
                                      </li>
                                    </ul>
                                  </section>
                                </span>
                                
                            </button>
                            <button>
                                <span class="material-icons color__white exitMessage">clear</span>
                            </button>
                        </div>
    
                    </header>
    
                    <section class="section__aboutMessage">
                        Desenvolvedor Front End com habilidades
                    </section>
              
                    <section class="message__andSend">
                        <div class="message__all">
                            <div class="message__received">
                                <p>Uma mensagem aqui da outra pessoa</p>
                                <div>User a cerca de uma hora atrás</div>
                            </div>
    
                            <div class="message__sendWidth justifyContentEnd">
                                <div class="message__send">
                                    <p>Olá como eu faço para mudar meu plano?</p>
                                    <div>User a cerca de uma hora atrás</div>
                                </div>
                            </div>
    
                            <div class="message__received">
                                <p>Uma mensagem aqui da outra pessoa</p>
                                <div>User a cerca de uma hora atrás</div>
                            </div>
    
                            <div class="message__sendWidth justifyContentEnd">
                                <div class="message__send">
                                    <p>Olá como eu faço para mudar meu plano?</p>
                                    <div>User a cerca de uma hora atrás</div>
                                </div>
                            </div>
    
                            <div class="message__received">
                                <p>Uma mensagem aqui da outra pessoa</p>
                                <div>User a cerca de uma hora atrás</div>
                            </div>
    
                            <div class="message__sendWidth justifyContentEnd">
                                <div class="message__send">
                                    <p>Olá como eu faço para mudar meu plano?</p>
                                    <div>User a cerca de uma hora atrás</div>
                                </div>
                            </div>
                            
                            <div class="message__received">
                                <p>Uma mensagem aqui da outra pessoa</p>
                                <div>User a cerca de uma hora atrás</div>
                            </div>
    
                            <div class="message__sendWidth justifyContentEnd">
                                <div class="message__send">
                                    <p>Olá como eu faço para mudar meu plano?</p>
                                    <div>User a cerca de uma hora atrás</div>
                                </div>
                            </div>
                        </div>
                        <div class="input__message justifyContentBetween alignItemsCenter">
                            <input type="text" placeholder="Envia uma mensagem" />
                            <img src="../assets/images/clipe.png" alt="" width="25" height="25"/>
                        </div>
                    </section>
                </li>
    
                <li class="card__message card__messageTwo card__chatDesktop">
                    <header class="background__message justifyContentBetween alignItemsCenter">
    
                        <div class="name__message alignItemsCenter ">
                            <img src="../assets/images/felizBranco.png" alt="" width="30" height="30" />
                            <span class="title__chat title__chatFont">User2</span>
                        </div>
    
                        <div class="buttons__message">
                            <button>
                                <span class="material-icons color__white settings__messageFolks">
                                  settings
                                  <section class="config__messagePerson">
                                    <ul class="ul___messagePerson">
                                      <li>
                                        <a href="#">
                                          Ir para caixa de Entrada
                                        </a>
                                      </li>
                                      <li>
                                        <a href="#">
                                          Ir para caixa de Entrada
                                        </a>
                                      </li>
                                      <li>
                                        <a href="#">
                                          Ver Projeto
                                        </a>
                                      </li>
                                      <li>
                                        <a href="#">
                                          Silenciar
                                        </a>
                                        <span class="material-icons color__white">volume_off</span>
                                      </li>
                                      <li>
                                        <a href="#">Ver perfil Completo</a>
                                      </li>
                                      <li>
                                        <a href="#">Bloquear Contato</a>
                                      </li>
                                    </ul>
                                  </section>
                                </span>
                            </button>
                            <button>
                                <span class="material-icons color__white exitMessage">clear</span>
                            </button>
                        </div>
    
                    </header>
    
                    <section class="section__aboutMessage">
                        Desenvolvedor Front End com habilidades
                    </section>
    
                    <section class="config__messagePerson">
                      <ul class="ul___messagePerson">
                        <li>
                          <a href="#">
                            Ir para caixa de Entrada
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            Ir para caixa de Entrada
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            Ver Projeto
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            Silenciar
                          </a>
                          <span class="material-icons color__white">volume_off</span>
                        </li>
                        <li>
                          <a href="#">Ver perfil Completo</a>
                        </li>
                        <li>
                          <a href="#">Bloquear Contato</a>
                        </li>
                      </ul>
                    </section>
    
                    <section class="message__andSend">
                        <div class="message__all">
                            <div class="message__received">
                                <p>Uma mensagem aqui da outra pessoa</p>
                                <div>User a cerca de uma hora atrás</div>
                            </div>
    
                            <div class="message__sendWidth justifyContentEnd">
                                <div class="message__send">
                                    <p>Olá como eu faço para mudar meu plano?</p>
                                    <div>User a cerca de uma hora atrás</div>
                                </div>
                            </div>
    
                            <div class="message__received">
                                <p>Uma mensagem aqui da outra pessoa</p>
                                <div>User a cerca de uma hora atrás</div>
                            </div>
    
                            <div class="message__sendWidth justifyContentEnd">
                                <div class="message__send">
                                    <p>Olá como eu faço para mudar meu plano?</p>
                                    <div>User a cerca de uma hora atrás</div>
                                </div>
                            </div>
    
                            <div class="message__received">
                                <p>Uma mensagem aqui da outra pessoa</p>
                                <div>User a cerca de uma hora atrás</div>
                            </div>
    
                            <div class="message__sendWidth justifyContentEnd">
                                <div class="message__send">
                                    <p>Olá como eu faço para mudar meu plano?</p>
                                    <div>User a cerca de uma hora atrás</div>
                                </div>
                            </div>
                            
                            <div class="message__received">
                                <p>Uma mensagem aqui da outra pessoa</p>
                                <div>User a cerca de uma hora atrás</div>
                            </div>
    
                            <div class="message__sendWidth justifyContentEnd">
                                <div class="message__send">
                                    <p>Olá como eu faço para mudar meu plano?</p>
                                    <div>User a cerca de uma hora atrás</div>
                                </div>
                            </div>
                        </div>
                        <div class="input__message justifyContentBetween alignItemsCenter">
                            <input type="text" placeholder="Envia uma mensagem" />
                            <img src="../assets/images/clipe.png" alt="" width="25" height="25"/>
                        </div>
                    </section>
    
    
                </li>
    
                <li class="card__message card__messageTwo card__chatDesktop">
                    <header class="background__message justifyContentBetween alignItemsCenter">
    
                        <div class="name__message alignItemsCenter ">
                            <img src="../assets/images/felizBranco.png" alt="" width="30" height="30" />
                            <span class="title__chat title__chatFont">User3</span>
                        </div>
    
                        <div class="buttons__message">
                            <button>
                                <span class="material-icons color__white settings__messageFolks">
                                  settings
                                  <section class="config__messagePerson">
                                    <ul class="ul___messagePerson">
                                      <li>
                                        <a href="#">
                                          Ir para caixa de Entrada
                                        </a>
                                      </li>
                                      <li>
                                        <a href="#">
                                          Ir para caixa de Entrada
                                        </a>
                                      </li>
                                      <li>
                                        <a href="#">
                                          Ver Projeto
                                        </a>
                                      </li>
                                      <li>
                                        <a href="#">
                                          Silenciar
                                        </a>
                                        <span class="material-icons color__white">volume_off</span>
                                      </li>
                                      <li>
                                        <a href="#">Ver perfil Completo</a>
                                      </li>
                                      <li>
                                        <a href="#">Bloquear Contato</a>
                                      </li>
                                    </ul>
                                  </section>
                                </span>
                            </button>
                            <button>
                                <span class="material-icons color__white exitMessage">clear</span>
                            </button>
                        </div>
    
                    </header>
    
                    <section class="section__aboutMessage">
                        Desenvolvedor Front End com habilidades
                    </section>
    
                    <section class="config__messagePerson">
                      <ul class="ul___messagePerson">
                        <li>
                          <a href="#">
                            Ir para caixa de Entrada
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            Ir para caixa de Entrada
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            Ver Projeto
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            Silenciar
                          </a>
                          <span class="material-icons color__white">volume_off</span>
                        </li>
                        <li>
                          <a href="#">Ver perfil Completo</a>
                        </li>
                        <li>
                          <a href="#">Bloquear Contato</a>
                        </li>
                      </ul>
                    </section>
    
                    <section class="message__andSend">
                        <div class="message__all">
                            <div class="message__received">
                                <p>Uma mensagem aqui da outra pessoa</p>
                                <div>User a cerca de uma hora atrás</div>
                            </div>
    
                            <div class="message__sendWidth justifyContentEnd">
                                <div class="message__send">
                                    <p>Olá como eu faço para mudar meu plano?</p>
                                    <div>User a cerca de uma hora atrás</div>
                                </div>
                            </div>
    
                            <div class="message__received">
                                <p>Uma mensagem aqui da outra pessoa</p>
                                <div>User a cerca de uma hora atrás</div>
                            </div>
    
                            <div class="message__sendWidth justifyContentEnd">
                                <div class="message__send">
                                    <p>Olá como eu faço para mudar meu plano?</p>
                                    <div>User a cerca de uma hora atrás</div>
                                </div>
                            </div>
    
                            <div class="message__received">
                                <p>Uma mensagem aqui da outra pessoa</p>
                                <div>User a cerca de uma hora atrás</div>
                            </div>
    
                            <div class="message__sendWidth justifyContentEnd">
                                <div class="message__send">
                                    <p>Olá como eu faço para mudar meu plano?</p>
                                    <div>User a cerca de uma hora atrás</div>
                                </div>
                            </div>
                            
                            <div class="message__received">
                                <p>Uma mensagem aqui da outra pessoa</p>
                                <div>User a cerca de uma hora atrás</div>
                            </div>
    
                            <div class="message__sendWidth justifyContentEnd">
                                <div class="message__send">
                                    <p>Olá como eu faço para mudar meu plano?</p>
                                    <div>User a cerca de uma hora atrás</div>
                                </div>
                            </div>
                        </div>
                        <div class="input__message justifyContentBetween alignItemsCenter">
                            <input type="text" placeholder="Envia uma mensagem" />
                            <img src="../assets/images/clipe.png" alt="" width="25" height="25"/>
                        </div>
                    </section>
                </li>
    
    
            </div>
        </div>
        
        
            <script type="module" src="../assets/js/openModalsHeader.js"></script>
            <script src="../assets/js/chatModal.js"></script>
            <script src="../assets/js/scores.js"></script>
            
            <!-- jQuery Modal -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
            <link
              rel="stylesheet"
              href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css"
            />
            
            <link
              rel="stylesheet"
              href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
            />
            <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
            
            <script type="module" src="../assets/js/script.js"></script>
            <script type="module" src="../assets/js/menu-mobile.js"></script>
            
            <div id="pesquisa-modal" class="modal">
              <div class="modal-header">
                <span class="material-icons">search</span>
              </div>
              <div class="modal-body">
                <input
                  type="text"
                  name="campo-pesquisa-modal"
                  id="campo-pesquisa-modal"
                  value=""
                  placeholder="O que você está procurando?"
                />
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
                <a href="#" rel="modal:close" class="botao-modal margin-right5"
                  >Ver todos</a
                >
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
                <a href="#" rel="modal:close" class="botao-modal margin-right5"
                  >Ver todos</a
                >
                <a href="#" rel="modal:close" class="botao-modal">Sair</a>
              </div>
            </div>
            
            <div id="usuario-modal" class="modal">
              <div class="modal-header">
                <div id="logo-tb" class="menu-usuario">TB</div>
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
      </div>
  </body>
</html>
    
<script>
  var i = setInterval(function () {
      
      clearInterval(i);
    
      // O código desejado é apenas isto:
      document.getElementById("loading").style.display = "none";
      document.getElementById("conteudo").style.display = "inline";

  }, 1000);
</script>
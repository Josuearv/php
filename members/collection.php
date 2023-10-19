<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Poppins:ital,wght@0,200;0,300;0,400;0,500;1,400&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="../assets/stylebase/cssStyleModal/boot.css" />
    <link rel="stylesheet" href="../assets/stylebase/cssStyleModal/grid.css" />
    <link rel="stylesheet" href="../assets/stylebase/cssStyleModal/estilo.css" />
    
    <link rel="stylesheet" href="../assets/stylebase/index-1.css" />
    <link rel="stylesheet" href="../assets/style/receipts.css?id=<?php echo rand();?>" />
    <link rel="stylesheet" href="../assets/style/collection.css" />


   <script src="../assets/scriptbase/jquery.js"></script>
    <script src="./assets/js/vue2/vue.js"></script>
    <title>Nell bux</title>
</head>
<body>

  <div @click="ocultarMenusNotificacoes($event)" id="App">

    <aside id="menu-mobile" class="menu-mobile-fecado">
  
        <div class="container">
  
          <div id="fechar-menu-mobile">
              <span class="material-icons">cancel</span>
          </div>
  
        </div>
  
        <ul id="menu-principal">
          <li><a href="dashboard.php">Area Membro</a></li>
          <li><a href="my_projects.php">Meus Projetos</a></li>
          <li><a href="moves.php">Minhas Finanças</a></li>
        </ul>
  
        <div class="espaco20"></div>
  
        <a href="#pesquisa-modal" rel="modal:open" class="botao-menu-mobile fechar-menu-mobile">
          <div class="flex-centro-centro">
            <span class="material-icons">search</span>
            <div>Pesquisar</div>
          </div>
        </a>
        
        <a href="#notificacoes-modal" rel="modal:open" class="botao-menu-mobile fechar-menu-mobile">
          <div class="flex-centro-centro">
            <span class="material-icons">notifications</span> 
            <div>Notificações</div>
          </div>
        </a>

        <a href="#mensagens-modal" rel="modal:open" class="botao-menu-mobile fechar-menu-mobile">
            <div class="flex-centro-centro">
              <span class="material-icons">sms</span> 
              <div>Mensagens</div>
          </div>
        </a>
  
        <a href="#usuario-modal" rel="modal:open" class="botao-menu-mobile fechar-menu-mobile">
          <div class="flex-centro-centro">
              <div id="logo-tb" class="menu-usuario">TB</div>
          </div>
        </a>
  
  
    </aside>

    <header class="header fJustifyCenter">
        <div class="container fJustifyBetween">
          <img
            id="logo"
            src="../assets/images/imagesHeader/logo.png"
            alt="nell bux logo image"
            width="120"
            height="40"
          />
  
          <nav class="nav fJustifyBetween">
            <ul class="nav__ul fJustifyBetween">
           <li><a href="dashboard.php">Area Membro</a></li>
           <li><a href="my_projects.php">Meus Projetos</a></li>
           <li><a href="moves.php">Minhas Finanças</a></li>
            </ul>
  
            <div class="search__nav fJustifyBetween">
              <div class="search__container"></div>
              <input
                type="text"
                placeholder="Pesquisar no nellbux     "
                name="search"
              />
  
              <div class="filter__result">
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
  
                        
            </div>
          
            <div class="nav__filter">
              <ul class="filter__search">
              </ul>
            </div>
              
          
            </nav>
  
            <div class="block__Communication">
              <button class="button__nav">
                <img
                  
                  src="../assets/images/imagesHeader/sino.png"
                  alt="orange bell icon receive notification"
                  width="30"
                  height="30"
                />
                <div class="messageNotification fColumn">
                  <header
                    class="header__notification header__messageModal fJustifyBetween"
                  >
                    <span class="text__message">Notificações</span>
                    <span class="text__message">Ver todos</span>
                  </header>
                  
                  <nav class="nav__notification">
                    <div class="card__notification">
                      <div class="block__text__notification">
                        <span
                          class="card__notificationt__text card__notificationt__text--weight"
                        >
                          Rejeitamos seu projeto
                          <span
                            class="card__notificationt__text card__notificationt__text--margin"
                            >Ontem</span
                          >
                        </span>
                        <span class="notifications__about"
                          >Em criar uma plataforma para reclamação
                          <img
                            src="../assets/images/trash.png"
                            alt="trash can"
                            width="35"
                            height="35"
                          />
                        </span>
                      </div>
                    </div>
                    <div class="card__notification">
                      <div class="block__text__notification">
                        <span
                          class="card__notificationt__text card__notificationt__text--weight"
                        >
                          Rejeitamos seu projeto
                          <span
                            class="card__notificationt__text card__notificationt__text--margin"
                            >Ontem</span
                          >
                        </span>
                        <span class="notifications__about"
                          >Em criar uma plataforma para reclamação
                          <img
                            src="../assets/images/trash.png"
                            alt="trash can"
                            width="35"
                            height="35"
                          />
                        </span>
                      </div>
                    </div>
                    <div class="card__notification">
                      <div class="block__text__notification">
                        <span
                          class="card__notificationt__text card__notificationt__text--weight"
                        >
                          Rejeitamos seu projeto
                          <span
                            class="card__notificationt__text card__notificationt__text--margin"
                            >Ontem</span
                          >
                        </span>
                        <span class="notifications__about"
                          >Em criar uma plataforma para reclamação
                          <img
                            src="../assets/images/trash.png"
                            alt="trash can"
                            width="35"
                            height="35"
                          />
                        </span>
                      </div>
                    </div>
                  </nav>

                </div>
              </button>
  
  
  
              <button class="message">
                <img
                  src="../assets/images/imagesHeader/message.png"
                  alt="message icon, orange color with 3 dots in the middle"
                  width="40"
                  height="40"
                />
              </button>
              
  
              <hr id="row__separator"/>
  
              <div class="messageModalss fColumn">
                <header
                  class="header__notification header__messageModal fJustifyBetween"
                >
                  <span class="text__message">Mensagens</span>
                  <span class="text__message">Ver todos</span>
                </header>
                <nav class="nav__notification">
                  <div class="messager__card">
                    <img
                      src="../assets/images/avatar.png"
                      alt="faceless person with border"
                      width="40"
                      height="40"
                    />
                    <div class="messager__block__text block__text__notification">
                      <div class="text__card__mensager fFlexBetween">
                        <span>Repasso Franquia - Oportunidade...</span>
                        <span id="text__new__mensager">Nova Mensagem</span>
                      </div>
  
                      <span class="text__faq"
                        >Em criar uma plataforma para reclamação
                      </span>
                    </div>
                  </div>
                </nav>
              </div>
  
              <span class="fJustifyCenter tb__perfil"> tb </span>
  
              <div class="perfil__modal">
                <div class="perfil__container">
                  <div class="perfil__title__block">
                    <span class="perfil__title">
                      olá,
                      <span class="perfil__title__bold">marcos,</span>
                      seja bem-vindo.
                    </span>
                  </div>
  
                  <div class="account__config">
                    <span class="account__title">
                      Configurações Conta
                      <span> Meu perfil </span>
                    </span>
                    <span class="account__title"> Rank do Dia </span>
                  </div>
  
                  <div class="block__offers">
                    <span class="title__offers__primary">Ofertas e pedidos</span>
                    <div class="block__text__offers">
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
  
                  <div class="block__Information__offers">
                    <span class="title__offers__primary"
                      >Informações da Conta</span
                    >
                    <div class="block__text__offers__account">
                      <div class="block__text__offers__text">
                        <span class="block__text__offers__invest"
                          >Lista de Indicados</span
                        >
                        <span class="block__text__offers__invest"
                          >Histórico de Conta</span
                        >
                      </div>
  
                      <div class="block__end__offers">
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
  
                  <div class="user__offers">
                    <div class="block__title__user">
                      <span class="block__text__offers__invest"
                        >Conta Nell bux</span
                      >
                      <span class="perfil__title__bold">1211451-1</span>
                    </div>
                    <div class="block__title__user">
                      <span class="block__text__offers__invest block__text__user"
                        >Meu Usuario</span
                      >
                      <span class="perfil__title__bold">@eduardoon</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </nav>
  
          <div id="bt-abrir-menu-mobile" class="exit__menu">
            <span class="material-icons">menu</span>
          </div>
        </div>
    </header>

    <section class="section__account-background">

        <div class="account__received--background account__received--background--orange">
            <div class="account__received--container">
                <img src="../assets/images/index2/moeda.png" alt="Coin with a transparent background with a white border and in the middle it has the dollar sign"  width="25" height="25"/>
                <span class="receipts__text">investimentos</span>
            </div>
        </div>

        <div class="account-background">
          <div class="account__background-container">
              <div class="account-container">
                  <section class="select__block">
                    
                      <div class="select select__primary--width">
                          <select>
                              <option value>06 de abr de 2022 - 19 de abr de 2022</option>
                          </select>
                          <img src="../assets/images/index4/seta.png" alt="image of a blue color down arrow" width="25" height="25"/>
                      </div>

                      <div class="select select--width">
                          <select>
                              <option value>contatos</option>
                          </select>
                          <img src="../assets/images/index4/seta.png" alt="image of a blue color down arrow" width="25" height="25"/>
                      </div>

                      <div class="select select__secondary--width">
                          <select>
                              <option value>modalidade</option>
                          </select>
                          <img src="../assets/images/index4/seta.png" alt="image of a blue color down arrow" width="25" height="25"/>
                      </div>

                      <div class="select select__tri--width">
                          <select>
                              <option value>status</option>
                          </select>
                          <img src="../assets/images/index4/seta.png" alt="image of a blue color down arrow" width="25" height="25"/>
                      </div>

                  </section>
              </div>
  
              <div class="money__account">
                  <div class="money__account-container">
                      <div class="money__block net__received">
                          <span class="title__money">total emprestado</span>
                          <span class="money__result">
                              R$ 239,60
                          </span>
                      </div>
  
                      <div class="money__block period__charges">
                          <span class="title__money">Multa e juros por atraso</span>
                          <span class="money__result">
                              - R$ 8,40
                          </span>
                      </div>
  
                      <div class="money__block receive__period">
                          <span class="title__money">total a receber</span>
                          <span class="money__result">
                              R$ 231,20
                          </span>
                      </div>
  
                      <div class="money__block money__moviment">
                          <span class="title__money title__moviment">total pendente</span>
                          <span class="money__result title__result--moviment">
                              R$ 0,00
                          </span>
                          <div class="card__text-information">
                            <img src="../assets/images/index4/info.png" alt="" width="25" height="25" />
                            <p>cobranças atrasadas com mais de 40 dias já podem ser negativas
                                <a href="#">Saiba mais</a>
                            </p>
                          </div>
                      </div>
                  </div>

              </div>

              <footer class="nav-background-visibled">
                <div class="nav-background-container">

                    <div class="block__confirms" onclick="window.location.href='receipts.php';">
                        <input type="radio" name="sizesz" id="Receiveds"/>
                        <label for="Receiveds">recebido</label>
                    </div>

                    <div class="block__confirms" onclick="window.location.href='when.php';">
                        <input type="radio" name="sizesz" id="receivables" />
                        <label for="receivables">a receber</label>
                    </div>

                    <div class="block__confirms" onclick="window.location.href='collection.php';">
                        <input type="radio" name="sizesz" id="chargess" checked/>
                        <label for="chargess">cobranças</label>
                    </div>
                  
                    <div class="nav-background-button">
                      <button>calendário de recebimento</button>
                    </div>

                </div>
            </footer>
          </div>
        </div>

        <footer class="nav-background">
            <div class="nav-container">
                <div class="nav-container-block">
                    <div class="block__confirm" onclick="window.location.href='receipts.php';">
                        <input type="radio" name="sizes" id="Received"/>
                        <label for="Received">recebido</label>
                    </div>
    
                    <div class="block__confirm" onclick="window.location.href='when.php';">
                        <input type="radio" name="sizes" id="receivable" />
                        <label for="receivable">a receber</label>
                    </div>
    
                    <div class="block__confirm" onclick="window.location.href='collection.php';">
                        <input type="radio" name="sizes" id="charges" checked/>
                        <label for="charges">cobranças</label>
                    </div>
                </div>
                <div class="nav-background-button" style="padding-right: 70px;">
                    <button>calendário de recebimento</button>
                </div>
            </div>
        </footer>

    </section>
    <div class="nav-background-buttons">
      <button>calendário de recebimento</button>
   </div>
    <section class="no__receipts-background">
        <div class="no__receipts-container">
            <div class="warning warning--disable">
                <span class="text__warning">8 cobranças de 05 abr 2022 - 12 2022</span>
                <div class="nav-text">
                    <span>exportar relatório</span>
                    <nav>
                        <a href="#">excel</a>
                        <hr>
                        <a href="#">.csv</a>
                    </nav>
                </div>
            </div>
            <div class="information__money-background">
                <aside class="date__time">
                    <div class="date__time-block">
                        <span class="date__title-time">hoje</span>
                        <span class="title__date">terça-feira</span>
                    </div>
                    
                    <div class="date__time-block">
                        <span class="date__title-time">11/abr</span>
                        <span>segunda-feira</span>
                        <span class="date__title-time date__title-time--size">0 solicitações</span>
                    </div>

                    <div class="date__time-block">
                        <span class="date__title-time">10/abr</span>
                        <span>domingo</span>
                        <span class="date__title-time date__title-time--size">3 solicitações</span>
                    </div>

                </aside>
                <section class="section__transaction-background">
                    <section class="section__today-request">
                        <img src="../assets/images/index3/telefone.png" alt="bottomless border phone" width="35" height="35">
                        <span class="date__title-time date__title-time--size date__title-time--padding">solicitação de hoje</span>
                        <hr>
                        <span class="real__time-charges">
                            acompanhe suas cobranças do dia em tempo real.
                            <a href="#">acesse aqui</a>
                        </span>
                    </section>
                    <section class="investment__card">
                        <h1>Não houve cobranças nesse dia</h1>
                        <div class="card__background">
                            <div class="card__container-main">
                                <div class="card__main">

                                  <span class="charges__textt">
                                    cobranças
                                    <img src="../assets/images/index4/setaLaranja.png" class="image__left-image" alt="image of a blue color down arrow"  width="25" height="25"/>

                                  </span>

                                  <div class="block__card-mains">

                                    <div class="card__block-text">
                                      <span class="card__block-title">total investido</span>
                                      <span class="card__block-money">R$0,00</span>
                                  </div>
          
                                  <div class="card__block-text">
                                      <span class="card__block-title">total cobrado desse dia</span>
                                      <span class="card__block-money">R$89,85</span>
                                  </div>
                                  
                                  <div class="card__block-text">
                                      <span class="card__block-title">total cobrado desse dia</span>
                                      <span class="card__block-money">R$0,00</span>
                                  </div>
                                  
                                  <div class="card__block-text">
                                      <span class="card__block-title">Multa e juros</span>
                                      <span class="card__block-money">R$0,00</span>
                                  </div>
          
                                  <div class="card__block-text">
                                      <span class="card__block-title">total que foi pago</span>
                                      <span class="card__block-money">R$86,70</span>
                                  </div>
          
                                  <div class="card__block-text">
                                      <span class="card__block-title">valor pendente</span>
                                      <span class="card__block-money">R$0,00</span>
                                  </div>
                                  </div>

                                        <div class="card__block-textt">
                                            <span class="card__block-title">total investido</span>
                                            <span class="card__block-money">R$0,00</span>
                                        </div>
                
                                        <div class="card__block-textt">
                                            <span class="card__block-title">total cobrado desse dia</span>
                                            <span class="card__block-money">R$89,85</span>
                                        </div>
                                        
                                        <div class="card__block-textt">
                                            <span class="card__block-title">total cobrado desse dia</span>
                                            <span class="card__block-money">R$0,00</span>
                                        </div>
                                        
                                        <div class="card__block-textt">
                                            <span class="card__block-title">Multa e juros</span>
                                            <span class="card__block-money">R$0,00</span>
                                        </div>
                
                                        <div class="card__block-textt">
                                            <span class="card__block-title">total que foi pago</span>
                                            <span class="card__block-money">R$86,70</span>
                                        </div>
                
                                        <div class="card__block-textt">
                                            <span class="card__block-title">valor pendente</span>
                                            <span class="card__block-money">R$0,00</span>
                                        </div>
                                        <img src="../assets/images/index4/setaLaranja.png" class="image-none" alt="image of a blue color down arrow"  width="25" height="25"/>
                                </div>

                                <hr>

                                <div class="card__main">
                                  <span class="charges__textt">
                                    cobranças
                                    <img src="../assets/images/index4/setaLaranja.png" class="image__left-image" alt="image of a blue color down arrow"  width="25" height="25"/>

                                  </span>
                                    <div class="card__block-text">
                                        <span class="card__block-title">29h39</span>
                                    </div>
            
                                    <div class="card__block-text">
                                        <span class="card__block-title">Firmado 12/03/22</span>
                                        <span class="card__block-money card__block-money--size">Contrato: 259805921</span>
                                    </div>
                                    
                                    <div class="card__block-text">
                                        <span class="card__block-title">5 x de 60 - R$ 29,95</span>
                                    </div>
                                    
                                    <div class="card__block-text">
                                        <span class="card__block-title">- R$1,05</span>
                                    </div>
            
                                    <div class="card__block-text">
                                        <span class="card__block-title">R$28,90</span>
                                    </div>
            
                                    <div class="card__block-text">
                                        <span class="card__block-title card__block-align">
                                            <img src="../assets/images/index4/iconCerto.png" alt="" width="25" height="25" /> 
                                            Pago
                                        </span>
                                    </div>

                                    <button class="button__block-text">ver projeto</button>
                                    <img src="../assets/images/index4/setaLaranja.png" class="image-nones" alt="image of a blue color down arrow"  width="25" height="25"/>

                            </div>
                            </div>
                        </div>
                    </section>
                </section>
            </div>
        </div>
    </section>
    <!-- jQuery Modal -->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />      
        <script type="module" src="../assets/scriptbase/script.js"></script>
        <script type="module" src="../assets/scriptbase/menu-mobile.js"></script>
        
    <!--
    <div id="pesquisa-modal" class="modal">
        <div class="modal-header">
      
        </div>
        <div class="modal-body">
      
         </div>
    </div>
    -->
      
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

    <script src="../assets/scriptbase/Global.js"></script>
    
</div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Poppins:ital,wght@0,200;0,300;0,400;0,500;1,400&display=swap" rel="stylesheet">
  
  <link rel="stylesheet" href="../assets/stylebase/cssStyleModal/estilo.css" />

  <link rel="stylesheet" href="../assets/style/headerTwo.css" />
  <link rel="stylesheet" href="../assets/style/flex.css" />
  <link rel="stylesheet" href="../assets/style/index-2movimentAccount.css?id=rands" />

  <title>Nell bux</title>
  <script src="../assets/scriptbase/jquery.js"></script>

</head>
<body>
    <!-- aside -->
    <aside id="menu-mobile" class="menu-mobile-fecado">
        
          <div class="container">
      
            <div id="fechar-menu-mobile">
                <span class="material-icons">cancel</span>
            </div>
      
          </div>
      
          <ul id="menu-principal">
            <li><a href="index.php">Area Membro</a></li>
            <li><a href="#">Meus Projetos</a></li>
            <li><a href="#">Minhas Finanças</a></li>
          </ul>
      
          <div class="espaco20"></div>
      
          <a href="#pesquisa-modal" rel="modal:open" class="botao-menu-mobile fechar-menu-mobile">
            <div class="flex-centro-centro AlignItemsCenter justifyContentCenter">
              <span class="material-icons">search</span>
              <div>Pesquisar</div>
            </div>
          </a>
          
          <a href="#notificacoes-modal" rel="modal:open" class="botao-menu-mobile fechar-menu-mobile">
            <div class="flex-centro-centro AlignItemsCenter justifyContentCenter">
              <span class="material-icons">notifications</span> 
              <div>Notificações</div>
            </div>
          </a>
      
          <a href="#mensagens-modal" rel="modal:open" class="botao-menu-mobile fechar-menu-mobile">
              <div class="flex-centro-centro AlignItemsCenter justifyContentCenter">
                <span class="material-icons">sms</span> 
                <div>Mensagens</div>
            </div>
          </a>
      
          <a href="#usuario-modal" rel="modal:open" class="botao-menu-mobile fechar-menu-mobile">
            <div class="flex-centro-centro  AlignItemsCenter justifyContentCenter">
                <div id="logo-tb" class="menu-usuario">TB</div>
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
                  <span>
                    <img
                      src="../assets/images/imagesHeader/message.png"
                      alt="message icon, orange color with 3 dots in the middle"
                      width="30"
                      height="30"
                    />
                  </span>
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
          
          
          
        <div id="bt-abrir-menu-mobile" class="exit__menu">
          <span class="material-icons">menu</span>
        </div>


      </div>
    </header>
    
    <!--Navegação -->
    <nav class="nav__hrefs-block justifyContentCenter">
          <ul class="nav__links-container justifyContentBetween alignItemsCenter">
            <li>
              <img src="../assets/images/imagesNav/home.png" alt="home color orange" width="20" height="20"/>
              <a href="index.php">
                Área de Membro
              </a>
            </li>

            <li class="nav__links-element nav__links-element">
              <img src="../assets/images/imagesNav/money.png" alt="orange money bag with s in the middle" width="20" height="20"/>
              <a href="moves.php">Minhas finanças</a>
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

    <!--Main -->
    <main class="main__movimentAccount-block justifyContentCenter">
      <div class="container__movimentAccount-block">

        <header class="header__confirmEmail-element alignItemsCenter justifyContentCenter">
          <strong>
            Por favor, confirme seu e-mail, caso não tenha recebido 
            <a href="#">clique aqui</a>
            para enviar
          </strong>
          <img id="exit__menus-element" src="../assets/images/cancelar.png" alt="" width="25" height="25"/>
        </header>

        <section class="section__movimentAccountBg-block">
          <header class="header__movimentAccountBg-block justifyContentBetween">

            <h1 class="title__movimentAccountBg-element">Movimentações</h1>

            <div class="information__moneyInvestment-block">
              
              <div class="card__moneyInvestment-block directionColumn">
                <h2 class="card__titleMoneyInvestment-element" style="margin-top:0px;">R$ 0,00</h2>
                <span class="card__titleSecondary-element">REMUNERAÇÃO</span>
                <button class="card__buttonMoneyInvestment-element">CONFIGURAÇÕES DE RETIRADA</button>
              </div>

              <div class="card__moneyInvestment-block directionColumn">
                <h2  class="card__titleMoneyInvestment-element card__titleMoneyInvestment-element--blue" style="margin-top:0px;">R$ 0,00</h2>
                <span class="card__titleSecondary-element">SALDO INVESTIDO</span>
                <button class="card__buttonMoneyInvestment-element card__buttonMoneyInvestment-element--blue">ADICIONAR</button>
              </div>

            </div>

          </header>

          <nav class="nav__table-block">
            <ul class="ul__navTable-block">

              <li>
                <a class="alignItemsCenter justifyContentBetween" href="#">
                  DATA
                </a>
                <span class="text__valueNavTable-element">
                  04 de Março de 2022
                </span>
              </li>

              <li>
                <a class="alignItemsCenter justifyContentBetween" href="#">
                  DESCRIÇÃO
                </a>
                <span class="text__valueNavTable-element">
                  Adição de investimento
                </span>
              </li>

              <li>                
                <a class="alignItemsCenter justifyContentBetween" href="#">
                  VALOR
              </a>
              <span class="text__valueNavTable-element">
                <b class="title__span-element--green">+R$ 990,00</b><br>
                [ imposto: 0% de:R$ 990,00]<br>
                
                </li>
                <li style="text-align: center;">  
                <img src="../assets/images/inboxDownload.png" id="move__download-element" alt="" width="25px"/>
                
              </span>
              </li>
            </ul>
          </nav>

          <table class="table__block">
            <tr class="tr__header">
              <th class="border__left-element">DATA</th>
              <th>DESCRIÇÃO</th>
              <th>VALOR</th>
              <th class="border__right-element"></th>
            </tr>
            <tr class="table__trow">
              <td>04 de Março de 2022</td>
              <td>Adição de investimento</td>
              <td>
                <span class="span__tdcolumn-element directionColumn ">
                  <b class="title__span-element--green">+R$ 990,00</b>
                  [ imposto: 0% de:R$ 990,00]
                </span>
              </td>
              <td>
                <img src="../assets/images/inboxDownload.png" id="move__download-element" alt="" width="25px"/>

              </td>

            </tr>
          </table>

          <nav class="nav__links-block">

            <ul class="ul__pages-block justifyContentCenter alignItemsCenter flexWrap">
              <li>
                <a href="#" class="alignItemsCenter">
                  <img src="../assets/images/imagesMainNav/right.png" alt="left seta" width="20" height="20">
                  Anterior
                </a>
              </li>
              <li class="li__primary-element justifyContentCenter alignItemsCenter">
                <a href="#">1</a>
              </li>
              
              <li>
                <a href="#">2</a>
              </li>

              <li>
                <a href="#">3</a>
              </li>

              <li>
                <a href="#">4</a>
              </li>
              
              <li>
                <a href="#">5</a>
              </li>

              <li>
                <a href="#">...</a>
              </li>

              <li>
                <a href="#">312</a>
              </li>
              <li>
                <a href="#" class="alignItemsCenter">
                  Próxima
                  <img src="../assets/images/imagesMainNav/left.png" id="right__image" alt="left seta" width="20" height="20">
                </a>

              </li>

            </ul>
          </nav>

        </section>

      </div>
    </main>

            <!--
    -->

    <!-- jQuery Modal -->
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />      
    <script type="module" src="../assets/scriptbase/menu-mobile.js"></script>  
                
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

    <script src="../assets/scriptbase/GlobalTelaFrame6.js"></script>
  </body>
</html>
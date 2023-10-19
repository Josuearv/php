<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="../assets/stylebase/cssStyleModal/boot.css" />
    <link rel="stylesheet" href="../assets/stylebase/cssStyleModal/grid.css" />
    <link rel="stylesheet" href="../assets/stylebase/cssStyleModal/estilo.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Poppins:ital,wght@0,200;0,300;0,400;0,500;1,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../assets/stylebase/index.css" />
    <link rel="stylesheet" href="../assets/stylebase/index-2.css" />
    <script src="../assets/scriptbase/jquery.js"></script>
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
           <li><a href="dashboard.php">Area de Membro</a></li>
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

      <section class="section__plain-background">
          <div class="section__plain-container">
              <img src="../assets/images/imagesPageInbox-2/signing_plan/rocket.png" alt="rocket and money" width="60" height="60" />
              <h1>
                  assinando um plano
                  <span>silver ou gold</span>
                  você obterá estes benefícios pela metade do preço
              </h1>
              <div class="button__elements">
                  <a href="/plans.php" target="_blank"><button>Eu quero</button></a>
              </div>
          </div>
      </section>

      <section class="featured__Prices-background">
          <div class="featured__Prices-container">
              <h2>Destaque Melhore sua vibilidade na plataforma</h2>
              <div class="card__background">

                  <div class="card__background-main card__background-main--radius">
                      <div class="card__container-main">
                          <div class="card__block-information">
                              <div class="card__block-title">
                                  <h3 class="card__block-title--blue">Padrão</h3>
                              </div>
                              <p>Seu projeto terá visibilidade padrão</p>
                              <span class="free__title">Grátis</span>
                              <button class="button__card button__card--green">Selecionar</button>
                              <div class="information__type">
                                <span class="open__type-list">
                                  Ver detalhes 
                                  <img src="../assets/images/imageRIght.png" alt="" id="seta__detailsList"/>
                                </span>
                              </div>
                            </div>
                          
                            <ul class="card__ul-information card__ul-information-list">
                                  <li>Visibilidade padrão</li>
                                  <li>Número de proposta padrão</li>
                                  <li class="padding__li">Propostas padrão</li>
                                  <li class="padding__li">Sem assistência</li>
                                  <li>Velocidade de contratação padrão</li>
                                  <li class="end__row">Proteção NellBux</li>
              
                            </ul>
                      </div>
                  </div>


                  <div class="card__background-main">
                    <div class="card__container-main">
                        <div class="card__block-information">
                            <div class="card__block-title">
                                <h3 class="card__block-title--yellow">Promovido por NellBux</h3>
                                <img src="../assets/images/imagesPageInbox-2/cards/estrela.png" alt="" width="40" height="40"/>
                            </div>
                            <p>Receba mais propostas em menos tempo</p>
                            <span class="card__after-price">BRL
                              <span class="children__after-price">59</span>
                            </span>
                            <button class="button__card button__card--yellow">Selecionar</button>
                            
                            <div class="information__type">
                              <span class="open__type-price">
                                Ver detalhes 
                                <img src="../assets/images/imageRIght.png" alt="" id="seta__details-price"/>
                              </span>
                            </div>

                          </div>
                        
                          <ul class="card__ul-information--price">
                                <li>Destaque nas pesquisas e e-mails</li>
                                <li>50% a mais de propostas</li>
                                <li class="padding__li">Melhores investidores</li>
                                <li class="padding__li">Sem assistência</li>
                                <li>Alta velocidade de contratação</li>
                                <li class="end__row">Proteção NellBux</li>
            
                          </ul>
                    </div>
                  </div>


                  <div class="card__background-main">
                  <div class="card__container-main">
                      <div class="card__block-information">
                          <div class="card__block-title">
                              <h3 class="card__block-title--blueSecondary">Assistência da NellBux</h3>
                              <img src="../assets/images/imagesPageInbox-2/cards/mensagem.png" alt="" width="40" height="40"/>
                          </div>
                          <p>A NellBux te ajuda a concretizar seu projeto</p>
                          <span class="card__after-price">BRL
                            <span class="children__after-price">79</span>
                          </span>
                          <button class="button__card button__card--blueTercery">Selecionar</button>
                          
                          <div class="information__type">
                            <span class="open__type-assistance">
                              Ver detalhes 
                              <img src="../assets/images/imageRIght.png" alt="" id="seta__assistance"/>
                            </span>
                          </div>

                        </div>
                      
                        <ul class="card__ul-information-assistance card__ul-information">
                              <li>Visibilidade padrão</li>
                              <li>Número de proposta padrão</li>
                              <li class="padding__li">investidores selecionados pela NellBux</li>
                              <li class="padding__li">Lista de candidatos personalizada Assistencia NellBux</li>
                              <li>Alta velocidade de contratação</li>
                              <li class="end__row">Proteção NellBux</li>
          
                        </ul>
                  </div>
                  </div>

                  <div class="card__background-main card__background-main--orange">
                <div class="card__container-main">
                    <div class="card__block-information card__block-information--edit">
                        <div class="card__block-title">
                            <h3 class="card__block-title--white">Combo Serviço Completo</h3>
                            <img src="../assets/images/imagesPageInbox-2/cards/presente.png" alt="" width="40" height="40"/>
                        </div>
                        <p class="title__color-white">A melhor opção! Receba mais beneficios com um preço promocional</p>
                        <span class="card__after-price card__after-price-white">BRL
                          <span class="children__after-price card__after-price-white">79</span>
                        </span>
                        <button class="button__card button__card--white">Selecionar</button>
                        <div class="information__type">
                          <span class="open__type-combo">
                            Ver detalhes 
                            <img src="../assets/images/imageRIght.png" alt="" id="seta__details-combo"/>
                          </span>
                        </div>
                      </div>
                    
                      <ul class="card__ul-information card__ul-combo">
                            <li>Destaque nas pesquisas e e-mails</li>
                            <li>50% a mais de propostas</li>
                            <li class="padding__li">Seleção personalizada dos melhores investidores</li>
                            <li class="padding__li">Lista de candidatos personalizada Assistência NellBux</li>
                            <li>Alta velocidade de contratação</li>
                            <li class="end__row">Proteção NellBux</li>
        
                      </ul>
                </div>
                  </div>

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

      <script>
        let valuOpen = false
        let valueAsideMenu = false
        let clicouNotification = false
        let clicouPerfil = false
        let FilterSearch = false
        let detailsProject = false 
        let detailsProjectSilver = false
        let detailsProjectGolds = false
        let detailsCombo = false

        const pai = document.querySelector(".filter__search")
        const filterResult = document.querySelector("#result__filter")
        const list = ["Investimentos", "landingPage"] //add algo aqui ira inserir direto no filter      

        const filterCreate = list.filter((text)=> {
          const el = document.createElement("li")
          el.setAttribute("name", text)
          el.className = "filter__li-element"
          el.addEventListener("click", ()=> {
            filterResult.innerHTML = text
          })
          el.innerHTML = text;
          return pai.appendChild(el)
        })

        //############################################## 
        
        const filterSeach = (p) => (FilterSearch = !p)
        const esChange = (p) => (valuOpen = !p)
        const handlePerfil = (p) => (clicouPerfil = !p)
        const esChangeNotification = (p) => (clicouNotification = !p)
        const esChangesAside = (p) => (valueAsideMenu = !p)
        const modalBalls = (p) => (openModalBalls = !p)
        const setOpenDetailsProject = (p) => (detailsProject = !p)
        const setOpenSecondaryDetailsProject = (p) => (detailsProjectSilver = !p)
        const setOpenPlanGolds = (p) => (detailsProjectGolds = !p)
        const setOpenCombo = (p) => (detailsCombo = !p)

        //##############################################3

        $(".open__type-list").click(()=> {
          setOpenDetailsProject(detailsProject)
          if(detailsProject){
            $("#seta__detailsList").css({transform: "rotateX(180deg)"})
            $(".card__ul-information-list").css({display: "flex"})
          }
          if(!detailsProject){
            $("#seta__detailsList").css({transform: "rotateX(0deg)"})
            $(".card__ul-information-list").css({display: "none"})
          }
        })

        /* Plan Silver */ 
        $(".open__type-price").click(()=> {
          setOpenSecondaryDetailsProject(detailsProjectSilver)
          if(detailsProjectSilver){
            $("#seta__details-price").css({transform: "rotateX(180deg)"})
            $(".card__ul-information--price").css({display: "flex"})
          }
          if(!detailsProjectSilver){
            $("#seta__details-price").css({transform: "rotateX(0deg)"})
            $(".card__ul-information--price").css({display: "none"})             
          }
        })

        /* Plan gold */

        $(".open__type-assistance").click(()=> {
          setOpenPlanGolds(detailsProjectGolds)
          console.log("helo", detailsProjectGolds)
          if(detailsProjectGolds){
            $("#seta__assistance").css({transform: "rotateX(180deg)"})
            $(".card__ul-information-assistance").css({display: "flex"})
          }
          if(!detailsProjectGolds){
            $("#seta__assistance").css({transform: "rotateX(0deg)"})
            $(".card__ul-information-assistance").css({display: "none"})
          }

        })

        /* Plan combo */

        $(".open__type-combo").click(()=> {
          setOpenCombo(detailsCombo)
          if(detailsCombo){
            $("#seta__details-combo").css({transform: "rotateX(180deg)"})
            $(".card__ul-combo").css({display: "flex"})
          }
          if(!detailsCombo){
            $("#seta__details-combo").css({transform: "rotateX(0deg)"})
            $(".card__ul-combo").css({display: "none"})
          }

        })

        $(".filter__seta").click(() => {
          filterSeach(FilterSearch)
          if(FilterSearch){
            $(".nav__filter").css({display: "flex"} )
          }
          if(!FilterSearch){
            $(".nav__filter").css({display: "none"})
          }
        })
        
        $("#menu__balls").click(()=> {
          modalBalls(openModalBalls)
          if(openModalBalls) $("#menu__balls").css({display: "flex"})
          if(!openModalBalls) $("#menu__balls").css({display: "none"})
        })


        $("#menu").click(() => {
          // Abri o menu-mobile
          esChangesAside(valueAsideMenu)
          if (valueAsideMenu) {
            $("#menu-mobile").css({ display: "inline", transition: ".35s" })
          }
          if (!valueAsideMenu) {
            $("#menu-mobile").css({ display: "none" })
          }
        })
        //abri o menu-mobile
        $(".icon__exit").click(() => {
          //// Fecha o menu
          $("#menu-mobile").css({ display: "none" })
        })

        $(".message").click(() => {
          esChange(valuOpen)
          if (clicouNotification) {
            $(".messageNotification").css({ display: "none" })
          }
          if (valuOpen) {
            $(".messageModalss").css({ display: "inline" })
          }
          if (!valuOpen) {
            $(".messageModalss").css({ display: "none" })
          }
          if (clicouPerfil) {
            handlePerfil(clicouPerfil)
            $(".perfil__modal").css({ display: "none" })
          }
        })
        /////////////// MODAL NOTIFICATION //////////////

        $(".button__nav").click(() => {
          esChangeNotification(clicouNotification)
          if (clicouNotification) {
            $(".messageNotification").css({ display: "inline" })
          }
          if (valuOpen) {
            esChange(valuOpen)
            $(".messageModalss").css({ display: "none" })
          }
          if (!clicouNotification) {
            $(".messageNotification").css({ display: "none" })
          }
          if (clicouPerfil) {
            $(".perfil__modal").css({ display: "none" })
          }
        })

        /////////////// MODAL PERFIL ///////////////////////////

        $(".tb__perfil").click(() => {
          handlePerfil(clicouPerfil)

          if (clicouPerfil) {
            $(".perfil__modal").css({ display: "flex" })
          }
          if (valuOpen && clicouNotification) {
            $(".messageModalss").css({ display: "none" })
          }
          if (valuOpen) {
            esChange(valuOpen)
            $(".messageModalss").css({ display: "none" })
          }
          if (clicouNotification) {
            esChangeNotification(clicouNotification)
            $(".messageNotification").css({ display: "none" })
          }
          if (!clicouPerfil) {
            $(".perfil__modal").css({ display: "none" })
          }
        })
      </script>
  </div>
</body>
</html>
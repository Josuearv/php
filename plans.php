<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap"
            rel="stylesheet"
        />
        <link rel="stylesheet" href="./assets/stylebase/cssStyleModal/boot.css" />
        <link rel="stylesheet" href="./assets/stylebase/cssStyleModal/grid.css" />
        <link rel="stylesheet" href="./assets/stylebase/cssStyleModal/estilo.css" />


        <link rel="stylesheet" href="./assets/stylebase/index.css?id=cv" />
        <script src="./assets/scriptbase/jquery.js"></script>
        <!--<script src="./assets/scriptbase/vue2/vue.js"></script>-->


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
                  <li><a href="#">Area Membro</a></li>
                  <li><a href="#">Meus Projetos</a></li>
                  <li><a href="#">Minhas Finanças</a></li>
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
                    src="./assets/images/imagesHeader/logo.png"
                    alt="nell bux logo image"
                    width="120"
                    height="40"
                  />
          
                  <nav class="nav fJustifyBetween">
                    <ul class="nav__ul fJustifyBetween">
                 <li><a href="/members/dashboard.php">Area Membro</a></li>
                 <li><a href="/members/my_projects.php">Meus Projetos</a></li>
                 <li><a href="/members/moves.php">Minhas Finanças</a></li>
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
                        src="./assets/images/imagesHeader/seta.png"
                        alt="arrow that looks like a downward facing triangle"
                        width="15px"
                        height="15px"
                      />
                      <img
                        src="./assets/images/imagesHeader/search.png"
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
                          
                          src="./assets/images/imagesHeader/sino.png"
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
                                    src="./assets/images/trash.png"
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
                                    src="./assets/images/trash.png"
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
                                    src="./assets/images/trash.png"
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
                          src="./assets/images/imagesHeader/message.png"
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
                              src="./assets/images/avatar.png"
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

            <section class="section__text-background fJustifyCenter">
                <div class="container-text-background">
                    <h1>Consiga mais beneficios ao aderir uma assinatura</h1>
                    <span class="text__block">Invista diretamente conosco 
                        <span class="text__title-blue text__block">sem riscos</span> recomendado para conservadores
                    </span>
                    <div class="simulation__block">
                        <span>faça uma simulação</span>
                        <button onclick="window.location.href='/simulation.php';">calcular agora</button>
                    </div>
                </div>
            </section>

            <section class="card__block-background">
                <div class="card__block-container">

                    <div class="card__block card__block--padding">
                        <div class="card__container">
                            <div class="block__card-element">
                                <div class="card__text-element">
                                    <h2 class="title__element-name title__element-name--orange">plano bronze</h2>
                                    <img src="./assets/images/images__card/shield.png" alt="shield" width="60" height="60" />
                                </div>
                                <span class="title-element-card title__element-name--orange">15<b>%</b> a.a</span>
                                <span class="title-element-card title-element-card--size title__element-name--orange">Apartir de R$25,00</span>
                                <i class="title__element-name--orange">Ideal para quem está começando na NellBux e deseja multiplicar as suas oportunidades.</i>
                            </div>
                            <button class="button button--white">Selecionado</button>
                            <div class="information__type">
                              <span class="open__type-list">
                                Ver detalhes 
                                <img src="./assets/images/imageRIght.png" alt="" id="seta__details-secundary"/>
                              </span>
                            </div>
                            <ul class="information__type-list-plan information__type-list-none">
                              <li>5 conexões</li>
                              <li>Ver investidores que se candidataram a um projeto</li>
                              <li>Ver os seguidores favoritos escolhido nos projetos que você se candidatou</li>
                              <li>Conferir se sua proposta foi lida ou não</li>
                              <li>Buscas salvas 3</li>
                              <li>2 projetos em execução</li>
                              <li>40 minutos depois de publicado</li>
                               <li>Taxa de arbitragem até 6.99% </li>
                              <li>1 categoria do perfil</li>
                              <li>1 categoria de perfil</li>
                              <li>5 atividades de cliente</li>
                              <li>5 habilidades adicionais em seu perfil</li>
                              <li>1 cada mês</li>
                              <li>Saque mensal</li>
                              <li>10% de ganho sobre indicados</li>   
                            </ul>
                        </div>
                    </div>

                    <div class="card__block card__block--background">
                        <div class="card__container">
                            <div class="block__card-element">
                                <div class="card__text-element card__text-element--justify">
                                    <h2 class="title__element-name title__element-name--gray">plano silver</h2>
                                    <img src="./assets/images/images__card/shield2.png" alt="shield silver" width="60" height="60"  />
                                </div>
                                <span class="title-element-card title__element-name--gray">18<b>%</b> a.a</span>
                                <span class="title-element-card  title-element-card--size title__element-name--gray">Apartir de R$25,00</span>
                                <i class="title__element-name--gray">Ideal para quem está começando na NellBux e deseja multiplicar as suas oportunidades.</i>
                            </div>
                            <button class="button button--gray">upgrade</button>
                            <div class="information__type">
                              <span class="open__type-list_secondary">
                                Ver detalhes 
                                <img src="./assets/images/imageRIght.png" alt="" id="seta__details-silver"/>
                              </span>
                            </div>
                            <ul class="information__type-secondary  information__type-list-plan information__type-list-plan--line">
                              <li>15 conexões</li>
                              <li>Ver investidores que se candidataram a um projeto</li>
                              <li>Ver os seguidores favoritos escolhido nos projetos que você se candidatou</li>
                              <li>Conferir se sua proposta foi lida ou não</li>
                              <li>Status de propostas dos seus concorrentes(sugerido, em negociação, favoritos, convidados ou eliminados)</li>
                              <li>Buscas salvas 5</li>
                              <li>5 projetos em execução</li>
                              <li>20 minutos depois de publicado</li>
                              <li>Taxa de arbitragem até 3.99% </li>
                              <li>2 categoria do perfil</li>
                              <li>2 categoria de perfil</li>
                              <li>10 seguir atividades de cliente</li>
                              <li>10 habilidades adicionais em seu perfil</li>
                              <li>Saque Semanal</li>
                              <li>15% de ganho sobre indicados</li>   
                            </ul>
                        </div>
                    </div>

                    <div class="card__block card__block--background card__block--radius">
                      <div class="card__container">
                            <div class="block__card-element">
                                <div class="card__text-element card__text-element--justify">
                                    <h2 class="title__element-name title__element-name--yellow">plano gold</h2>
                                    <img src="./assets/images/images__card/shield3.png" alt="shield gold" width="60" height="60" />
                                </div>
                                <span class="title-element-card title__element-name--yellow">15<b>%</b> a.a</span>
                                <span class="title-element-card title__element-name--yellow title-element-card--size">Apartir de R$25,00</span>
                                <i class="title__element-name--gray">Ideal para quem está começando na NellBux e deseja multiplicar as suas oportunidades.</i>
                            </div>
                            <button class="button button--yellow">upgrade</button>
                            <div class="information__type">
                              <span class="open__type-list_tertiary">
                                Ver detalhes 
                                <img src="./assets/images/imageRIght.png" alt="" id="seta__details-gold"/>
                              </span>
                            </div>
                            <ul class="information__type-tertiary  information__type-list-plan information__type-list-gold">
                              <li>50 conexões</li>
                              <li>Ver investidores que se candidataram a um projeto</li>
                              <li>Ver os seguidores favoritos escolhido nos projetos que você se candidatou</li>
                              <li>Conferir se sua proposta foi lida ou não</li>
                              <li>Status de propostas dos seus concorrentes(sugerido, em negociação, favoritos, convidados ou eliminados)</li>
                              <li>Valor médio das propostas de seus concorrentes</li>
                              <li>Buscas salvas 10</li>
                              <li>projetos em execução ilimitado</li>
                              <li>instantâneo a publicação</li>
                              <li>Taxa de arbitragem até 0.99% </li>
                              <li>4 categoria do perfil</li>
                              <li>20 seguir atividades de clientes</li>
                              <li>20 habilidades adicionais em seu perfil</li>
                              <li>Destaques ilimitado</li>
                              <li>Saque Diario</li>
                              <li>20% de ganho sobre indicados</li>
                              <li>Funções extra ou exclusiva</li>  
                              <li>Atendimento premium</li>
                              <li>Recomendações</li>
                              <li>Selo do investidor premium</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </section>

            <section class="type__Proposal">
                <div class="containerType__proposal">
                    <table class="table">

                        <tr class="row__primary row__primary--weight">
                            <td id="row__primary-width">&nbsp;</td>
                            <td class="row__center">Bronze</td>
                            <td class="row__center">Silver</td>
                            <td class="row__center">Gold</td>
                        </tr>

                        <tr class="row__primary--background">
                            <td class="row__primary-help row__end-text">
                               <span class="preader">Propostas semanais</span>

                               <span class="row__href">
                                 <img class="propost__semanais" src="./assets/images/imageTable/faqMensagem.png" alt="blue round ball and in the middle with the question symbol" width="17" height="17" />
                                 <div class="modal__propost-semanal">
                                      <div class="triangle"></div>
                                      Você teá os contatos dispníveis com base no sistema de conquistas, além dos contatos adicionais oferecidos pelo plano que você adquirir.
                                    </div>
                                </span>
                            </td>
                            <td  class="row__center">5 conexões</td>
                            <td  class="row__center">15 conexões</td>
                            <td  class="row__center">50 conexões</td>
                        </tr>

                        <tr class="row__primary">
                            <td class="row__end-text" >
                              <span class="row__max">Ver investidores que se candidataram a um projeto</span>
                            </td>
                            <td>
                                <img src="./assets/images/imageTable/concluido.png" alt="round ball with a green background and an inverted white triangle" width="30" height="30" />
                            </td>
                            <td>
                                <img src="./assets/images/imageTable/concluido.png" alt="round ball with a green background and an inverted white triangle" width="30" height="30" />
                            </td>
                            <td>
                                <img src="./assets/images/imageTable/concluido.png" alt="round ball with a green background and an inverted white triangle"  width="30" height="30"/>
                            </td>
                        </tr>

                        <tr  class="row__primary row__primary--background">
                            <td class="row__end-text" >
                              <span  class="row__max">Ver os seguidores favoritos escolhido nos projetos que você se candidatou</span>
                            </td>
                            <td>
                                <img src="./assets/images/imageTable/concluido.png" alt="round ball with a green background and an inverted white triangle" width="30" height="30" />
                            </td>
                            <td>
                                <img src="./assets/images/imageTable/concluido.png" alt="round ball with a green background and an inverted white triangle" width="30" height="30" />
                            </td>
                            <td>
                                <img src="./assets/images/imageTable/concluido.png" alt="round ball with a green background and an inverted white triangle"  width="30" height="30"/>
                            </td>
                        </tr>

                        <tr class="row__primary">
                            <td class="row__end-text">
                              <span class="row__max">Conferir se sua proposta foi lida ou não</span>
                              </td>
                            <td>
                                <img src="./assets/images/imageTable/concluido.png" alt="round ball with a green background and an inverted white triangle" width="30" height="30" />
                            </td>
                            <td>
                                <img src="./assets/images/imageTable/concluido.png" alt="round ball with a green background and an inverted white triangle" width="30" height="30" />
                            </td>
                            <td>
                                <img src="./assets/images/imageTable/concluido.png" alt="round ball with a green background and an inverted white triangle"  width="30" height="30"/>
                            </td>
        
                        </tr>
        
                        <tr  class="row__primary row__primary--background">
                            <td  class="row__end-text" >
                              <span class="row__max">Status de propostas dos seus concorrentes (sugerido, em  negociação, favoritos, convidados ou eliminados)</span>
                              </td>
                            <td>
                                <img src="./assets/images/imageTable/delete.png" alt="round ball with a red background and a white x in the middle" width="30" height="30" />
                            </td>
                            <td>
                                <img src="./assets/images/imageTable/concluido.png" alt="round ball with a green background and an inverted white triangle" width="30" height="30" />
                            </td>
                            <td>
                                <img src="./assets/images/imageTable/concluido.png" alt="round ball with a green background and an inverted white triangle"  width="30" height="30"/>
                            </td>
                        </tr>
                        
        
                        <tr class="row__primary">
                            <td class="row__end-text" >
                              <span class="row__max">
                                Valor médio das propostas de seus concorrentes
                              </span>
                            </td>
                            <td>
                                <img src="./assets/images/imageTable/delete.png" alt="round ball with a red background and a white x in the middle" width="30" height="30" />
                            </td>
                            <td>
                                <img src="./assets/images/imageTable/delete.png" alt="round ball with a red background and a white x in the middle" width="30" height="30" />
                            </td>
                            <td>
                                <img src="./assets/images/imageTable/concluido.png" alt="round ball with a green background and an inverted white triangle"  width="30" height="30"/>
                            </td>
                        </tr>
        
                        <tr class="row__primary--background">
                            <td class="row__primary-help row__end-text">
                              <span>
                                Buscas salvas
                              </span>
                            </td>
                            <td class="row__center">3</td>
                            <td class="row__center">5</td>
                            <td class="row__center">10</td>
                        </tr>
        
                        <tr class="row__primary">
                            <td  class="row__end-text" >
                              <span class="row__max">Projetos em execução</span>
                            </td>
                            <td>2 projetos em execução</td>
                            <td>5 projetos em execução</td>
                            <td>ilimitado</td>
                        </tr>
        
                        <tr class="row__primary--background">
                            <td class="row__primary-help row__end-text">
                              <span>
                                Projetos publicados
                              </span>
                            </td>
                            <td class="row__center">Até 40 minutos</td>
                            <td class="row__center">Até 20 minutos</td>
                             <td class="row__center">
                                <img src="./assets/images/imageTable/concluido.png" alt="round ball with a green background and an inverted white triangle"  width="30" height="30"/>
                             </td>
                        </tr>
        
                        <tr class="row__primary--background row__primary-bacgroundGray">
                            <td class="row__primary-help row__end-text">
                                <span>Taxa de arbitragem</span>
                                <span class="open__modal--video">
                                  <img src="./assets/images/imageTable/faqMensagem.png" alt="blue round ball and in the middle with the question symbol" width="17" height="17" />
                                  <div class="modal__propost__weekly modal__propost-semanal">
                                    <div class="triangle"></div>
                                    Tarifa de intermediação para projetos ou ofertas publicada na plataforma.
                                 </div>

                                </span>
                            </td>
                            <td  class="row__center">6.99%</td>
                            <td  class="row__center">
                                3.99%
                             </td>
                             <td  class="row__center">
                                0.99%
                             </td>
                        </tr>
        
                        <tr class="row__primary--background">
                            <td class="row__primary-help  row__end-text">
                                
                                <span>
                                  Categorias do perfil
                                </span>
                                <span class="open__modal-perfil">
                                  <img src="./assets/images/imageTable/faqMensagem.png" alt="blue round ball and in the middle with the question symbol" width="17" height="17" />
                                  <div class="modal__propost__perfil modal__propost-semanal">
                                    <div class="triangle"></div>
                                    Cada vez que um cliente busca freelancers com uma atividade específica, seu perfil será recomendado, caso você faça parte das categorias que ele está buscando. Quanto mais categorias você tiver, mais vezes você será recomendado.
                                  </div>
                                </span>

                            </td>
                            <td class="row__center">1</td>
                            <td class="row__center">2</td>
                            <td class="row__center">4</td>
                        </tr>
        
                        <tr class="row__primary--background row__primary-bacgroundGray">
                            <td class="row__primary-help row__end-text">
                              <span>
                                Seguir atividade de clientes
                              </span>
                              <span class="open__modal-client-activit">
                                <img src="./assets/images/imageTable/faqMensagem.png" alt="blue round ball and in the middle with the question symbol" width="17" height="17" />
                                <div class="modal__propost__client-activit modal__propost-semanal">
                                  <div class="triangle"></div>
                                  Enviaremos a você um e-mail e uma notificação cada vez que o cliente criar um projeto.
                                </div>
                              </span>

                            </td>
                            <td class="row__center">5</td>
                            <td class="row__center">10</td>
                            <td class="row__center">20</td>
                        </tr>
                        
                        <tr class="row__primary--background">
                            <td class="row__primary-help row__end-text">
                              <span>
                                Habilidades adicionais em seu perfil
                              </span>
                            </td>
                            <td class="row__center">5</td>
                            <td class="row__center">10</td>
                            <td class="row__center">20</td>
                        </tr>
        
                        <tr class="row__primary--background row__primary-bacgroundGray">
                            <td class="row__primary-help row__end-text">
                                <span>
                                  Destaques
                                </span>
                                <span class="open__modal-emphasis">
                                  <img src="./assets/images/imageTable/faqMensagem.png" alt="blue round ball and in the middle with the question symbol" width="17" height="17" />
                                  <div class="modal__propost__emphasis modal__propost-semanal">
                                    <div class="triangle"></div>
                                    Colocar algum texto aqui no destaque, 
                                    Colocar algum texto aqui no destaque, 
                                    Colocar algum texto aqui no destaque, 
                                  </div>
                                </span>
                            </td>
                            <td class="row__center">1 cada mês</td>
                            <td class="row__center">ilimitado</td>
                            <td class="row__center">ilimitado</td>
                        </tr>
        
        
                        <tr class="row__primary--background">
                            <td class="row__primary-help row__end-text">
                                <span>
                                  Saques
                                </span>
                                <span class="open__modal-withdrawals">
                                  <img src="./assets/images/imageTable/faqMensagem.png" alt="blue round ball and in the middle with the question symbol" width="17" height="17" />
                                  <div class="modal__propost__withdrawals modal__propost-semanal">
                                    <div class="triangle"></div>
                                    Você poderá decidir receber pagamentos duas vezes por mês,
                                    Você poderá pedir um saque por semana. Os pagamentos serão realizados sempre às quartas-feiras. O pedido deverá ser realizado através do seu perfil em "Movimentação de minha conta". Lembre-se que o prazo de recebimento será o estabelecido pelo Processador.
                                  </div>
                                </span>
                            </td>
                            <td class="row__center">Mensal</td>
                            <td class="row__center">Semanal</td>
                            <td class="row__center">Diario</td>
                        </tr>
        
                        <tr class="row__primary--background row__primary-bacgroundGray">
                            <td class="row__primary-help row__end-text">
                                <span>
                                  Ganhos sobre indicados
                                </span>
                                <span class="open__modal-indicated">
                                  <img src="./assets/images/imageTable/faqMensagem.png" alt="blue round ball and in the middle with the question symbol" width="17" height="17" />
                                  <div class="modal__propost__indicated modal__propost-semanal">
                                    <div class="triangle"></div>
                                    Colocar algum texto aqui, 
                                    Colocar algum texto aqui, 
                                    Colocar algum texto aqui, 
                                  </div>
                                </span>
                            </td>
                            <td class="row__center">10<b>%</b></td>
                            <td class="row__center">15<b>%</b></td>
                            <td class="row__center">20<b>%</b></td>
                        </tr>
        
                        <tr class="row__primary--background">
                            <td class="row__primary-help row__end-text">
                                <span>
                                  Funções Ocultas
                                </span>
                                <span class="open__modal-hidden">
                                  <img src="./assets/images/imageTable/faqMensagem.png" alt="blue round ball and in the middle with the question symbol" width="17" height="17" />
                                  <div class="modal__propost__hidden modal__propost-semanal">
                                    <div class="triangle"></div>
                                    Colocar algum texto aqui, 
                                    Colocar algum texto aqui, 
                                    Colocar algum texto aqui, 
                                  </div>
                                </span>
                            </td>
        
                            <td class="row__center">
                                <img src="./assets/images/imageTable/delete.png" alt="round ball with a red background and a white x in the middle" width="30" height="30" />
                            </td>
        
                            <td class="row__center">
                                <img src="./assets/images/imageTable/delete.png" alt="round ball with a red background and a white x in the middle" width="30" height="30" />
                            </td>
        
                            <td class="row__center">
                                <img src="./assets/images/imageTable/concluido.png" alt="round ball with a green background and an inverted white triangle"  width="30" height="30"/>
                            </td>
                        </tr>
                        
                        <tr class="row__primary--background row__primary-bacgroundGray">
                            <td class="row__primary-help row__end-text">
                                <span>
                                  Atendimento premium
                                </span>
                                <span class="open__modal-premium">
                                  <img src="./assets/images/imageTable/faqMensagem.png" alt="blue round ball and in the middle with the question symbol" width="17" height="17" />
                                  <div class="modal__propost__premium modal__propost-semanal">
                                    <div class="triangle"></div>
                                    Você terá acesso direto à nossa equipe de suporte, tanto por e-mail como por nosso sistema de chat, com um limite de 5 consultas mensais por chat.
                                  </div>
                                </span>
                            </td>
                            
                            <td class="row__center">
                                <img src="./assets/images/imageTable/delete.png" alt="round ball with a red background and a white x in the middle" width="30" height="30" />
                            </td>
        
                            <td class="row__center">
                                <img src="./assets/images/imageTable/delete.png" alt="round ball with a red background and a white x in the middle" width="30" height="30" />
                            </td>
        
                            <td class="row__center">
                                <img src="./assets/images/imageTable/concluido.png" alt="round ball with a green background and an inverted white triangle"  width="30" height="30"/>
                            </td>
                        </tr>

                        <tr class="row__primary--background">

                            <td class="row__primary-help row__end-text">
                                <span>
                                  Recomendações
                                </span>
                                <span class="open__modal-recommendations">
                                  <img src="./assets/images/imageTable/faqMensagem.png" alt="blue round ball and in the middle with the question symbol" width="17" height="17" />
                                  <div class="modal__propost__recommendations modal__propost-semanal">
                                    <div class="triangle"></div>
                                    Colocar algum texto aqui, 
                                    Colocar algum texto aqui, 
                                    Colocar algum texto aqui, 
                                  </div>
                                </span>
                            </td>
                            
                            <td class="row__center">
                                <img src="./assets/images/imageTable/delete.png" alt="round ball with a red background and a white x in the middle" width="30" height="30" />
                            </td>
        
                            <td class="row__center">
                                <img src="./assets/images/imageTable/delete.png" alt="round ball with a red background and a white x in the middle" width="30" height="30" />
                            </td>
        
                            <td class="row__center">
                                <img src="./assets/images/imageTable/concluido.png" alt="round ball with a green background and an inverted white triangle"  width="30" height="30"/>
                            </td>
                        </tr>
        
                        <tr class="row__primary--background row__primary-bacgroundGray">
                            <td class="row__primary-help row__end-text">
                                <span>
                                  Selo do investidor Premium
                                </span>
                                <span class="open__modal-stamp">
                                  <img src="./assets/images/imageTable/faqMensagem.png" alt="blue round ball and in the middle with the question symbol" width="17" height="17" />
                                  <div class="modal__propost__stamp modal__propost-semanal">
                                    <div class="triangle"></div>
                                    Colocar algum texto aqui, 
                                    Colocar algum texto aqui, 
                                    Colocar algum texto aqui,   
                                  </div>

                                </span>
                            </td>
                            
                            <td class="row__center">
                                <img src="./assets/images/imageTable/delete.png" alt="round ball with a red background and a white x in the middle" width="30" height="30" />
                            </td>
        
                            <td class="row__center">
                                <img src="./assets/images/imageTable/delete.png" alt="round ball with a red background and a white x in the middle" width="30" height="30" />
                            </td>
        
                            <td class="row__center">
                                <img src="./assets/images/imageTable/concluido.png" alt="round ball with a green background and an inverted white triangle"  width="30" height="30"/>
                            </td>
                        </tr>
        
                        <tr class="row__primary--background">
                            <td>&nbsp;</td>

                            <td >
                              <div class="block__payments-information">
                                <button>Selecionar</button>
                                <span>apartir R$25,00</span>

                              </div>
                            </td>
                            <td>
                              <div class="block__payments-information">
                                <button>Selecionar</button>
                                <span>apartir R$1.000,00</span>
                              </div>
                            </td>
                            <td >
                              <div class="block__payments-information">
                                <button>Selecionar</button>
                                <span>apartir R$5.000,00</span>
                              </div>
                            </td>
                        </tr>

                    </table>
                </div>
            </section>

            <footer class="footer">
              <div class="footer__container">
                <a href="/members/upsell.php">
                  Para conhecer planos de destaques, clique aqui.
                </a>
              </div>
            </footer>



        <!-- jQuery Modal -->
          <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
          
          <script type="module" src="./assets/scriptbase/script.js"></script>
          <script type="module" src="./assets/scriptbase/menu-mobile.js"></script>
      
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
          
        </div>
        <script>
          let valuOpen = false
          let valueAsideMenu = false
          let clicouNotification = false
          let clicouPerfil = false
          let FilterSearch = false
          let detailsProject = false 
          let detailsProjectSilver = false
          let detailsProjectGold = false

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
          const setOpenPlanGold = (p) => (detailsProjectGold = !p)
          //##############################################3

          $(".open__type-list").click(()=> {
            setOpenDetailsProject(detailsProject)
            if(detailsProject){
              $("#seta__details-secundary").css({transform: "rotateX(180deg)"})
              $(".information__type-list-plan").css({display: "flex"})
            }
            if(!detailsProject){
              $("#seta__details-secundary").css({transform: "rotateX(0deg)"})
              $(".information__type-list-plan").css({display: "none"})
            }
          })

          /* Plan Silver */ 
          $(".open__type-list_secondary").click(()=> {
            setOpenSecondaryDetailsProject(detailsProjectSilver)
            if(detailsProjectSilver){
              $("#seta__details-silver").css({transform: "rotateX(180deg)"})
              $(".information__type-secondary").css({display: "flex"})
            }
            if(!detailsProjectSilver){
              $("#seta__details-silver").css({transform: "rotateX(0deg)"})
              $(".information__type-secondary").css({display: "none"})             
            }
          })

          /* Plan gold */

          $(".open__type-list_tertiary").click(()=> {
            setOpenPlanGold(detailsProjectGold)
            console.log("cliquei")
            if(detailsProjectGold){
              $("#seta__details-gold").css({transform: "rotateX(180deg)"})
              $(".information__type-tertiary ").css({display: "flex"})
            }
            if(!detailsProjectGold){
              $("#seta__details-gold").css({transform: "rotateX(0deg)"})
              $(".information__type-tertiary ").css({display: "none"})
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
            console.log("Cliquei")
            modalBalls(openModalBalls)
            if(openModalBalls) $("#menu__balls").css({display: "flex"})
            if(!openModalBalls) $("#menu__balls").css({display: "none"})
          })
    
          /*
          $(".filter__seta").click(() => {
            console.log("Cliquei")
            filterSeach(FilterSearch)
            if(FilterSearch){
              $(".nav__filter").css({display: "flex"} )
            }
            if(!FilterSearch){
              $(".nav__filter").css({display: "none"})
            }
          })
    
          $(".filter__setas").click(() => {
            console.log("Cliquei")
            filterSeach(FilterSearch)
            if(FilterSearch){
              $(".nav__filter").css({display: "flex"} )
            }
            if(!FilterSearch){
              $(".nav__filter").css({display: "none"})
            }
          })
          */
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
    </body>
</html>

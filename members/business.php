<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="../assets/stylebase/cssStyleModal/boot.css" />
    <link rel="stylesheet" href="../assets/stylebase/cssStyleModal/estilo.css" />
    <link rel="stylesheet" href="../assets/stylebase/cssStyleModal/grid.css" />

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Poppins:ital,wght@0,200;0,300;0,400;0,500;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/style/flex.css" />
    <link rel="stylesheet" href="../assets/style/index-3Company.css" />


    <title>NellBux</title>
    
    <script src="../assets/scriptbase/jquery.js"></script>
    <script src="../assets/scriptbase/vue2/vue.js"></script>
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

    <!-- Header -->

    <header class="header justifyContentCenter">
        <div class="containerHeader__block justifyContentSpaceBetween AlignItemsCenter">
          <img
            id="logo"
            src="../assets/images/imagesHeader/logo.png"
            alt="nell bux logo image"
            width="120"
            height="40"
          />
  
          <nav class="nav justifyContentSpaceBetween">
            <ul class="nav__ul justifyContentSpaceBetween">
              <li><a href="#">area membro</a></li>
              <li><a href="#">meus projetos</a></li>
              <li><a href="#">minhas finanças</a></li>
            </ul>
  
            <div class="search__nav justifyContentSpaceBetween AlignItemsCenter">
              <div class="search__container"></div>
              <input
                type="text"
                placeholder="Pesquisar no nellbux"
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


              <button class="button__nav localizationModal">
                <img
                  
                  src="../assets/images/imagesHeader/sino.png"
                  alt="orange bell icon receive notification"
                  width="30"
                  height="30"
                />

                <div class="messageNotification flexDirectionColumn modal__active-block">
                  
                  <header
                    class="header__notification header__messageModal justifyContentSpaceBetween AlignItemsCenter"
                  >
                    <span class="text__message">Notificações</span>
                    <span class="text__message">Ver todos</span>
                  </header>
                  
                  <nav class="nav__notification flexDirectionColumn AlignItemsCenter">
                    
                    <div class="card__notification justifyContentCenter">
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
                    </div>
                               
                    <div class="card__notification justifyContentCenter">
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
                    </div>

                    <div class="card__notification justifyContentCenter">
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
                    </div>

                  </nav>

                </div>

              </button>
  
  
  
              <button class="message localizationModal">
                <img
                  src="../assets/images/imagesHeader/message.png"
                  alt="message icon, orange color with 3 dots in the middle"
                  width="40"
                  height="40"
                />

                <div class="messageModalss flexDirectionColumn modal__active-block">
                  <header class="header__notification header__messageModal justifyContentSpaceBetween AlignItemsCenter">
                    <span class="text__message">Mensagens</span>
                    <span class="text__message">Ver todos</span>
                  </header>
                  <nav class="nav__notification AlignItemsCenter flexDirectionColumn">
                    <div class="messager__card justifyContentCenter">
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
                  </nav>
                </div>

              </button>
              
  
              <hr id="row__separator"/>

              <button class="perfil__tb-element localizationModal">
                <span class="justifyContentCenter AlignItemsCenter tb__perfil"> tb </span>
    
                <div class="perfil__modal justifyContentCenter AlignItemsCenter modal__active-block">
                  <div class="perfil__container">
                    <div class="perfil__title__block">
                      <span class="perfil__title">
                        olá,
                        <span class="perfil__title__bold">marcos,</span>
                        seja bem-vindo.
                      </span>
                    </div>
    
                    <div class="account__config flexDirectionColumn justifyContentSpaceEvenly">
                      <span class="account__title justifyContentSpaceBetween">
                        Configurações Conta
                        <span> Meu perfil </span>
                      </span>
                      <span class="account__title justifyContentSpaceBetween"> Rank do Dia </span>
                    </div>
    
                    <div class="block__offers justifyContentSpaceEvenly flexDirectionColumn">
                      <span class="title__offers__primary">Ofertas e pedidos</span>
                      <div class="block__text__offers justifyContentSpaceBetween">
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
                          <span class="block__text__offers__invest block__textListIndi-element"
                            >Lista de Indicados</span
                          >
                          <span class="block__text__offers__invest"
                            >Histórico de Conta</span
                          >
                        </div>
    
                        <div class="block__end__offers flexDirectionColumn">
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
                </div>
              </button>

            </div>
          </nav>
  
          <div id="bt-abrir-menu-mobile" class="exit__menu">
            <span class="material-icons">menu</span>
          </div>
          
        </div>
    </header> 

    <!-- -->

    <!-- nav__companyLinks -->

    <nav class="nav__companyLinks-block">
        <div class="nav__companyContainer-block">
          <ul class="ul__companyLinks-block">
              <li>
                  <a href="#">NellBux</a>
                  <img src="../assets/images/index-3Company/right__seta.png" alt="right arrow gray color" width="15" height="15"  />
              </li>
              <li>
                  <a href="#">empresas</a>
                  <img src="../assets/images/index-3Company/right__seta.png" alt="right arrow gray color" width="15" height="15"  />
              </li>
              <li>
                  <a href="#">empresas do Brasil</a>
                  <img src="../assets/images/index-3Company/right__seta.png" alt="right arrow gray color" width="15" height="15"  />
              </li>
              <li>
                  <a href="#">tecnologia</a>
                  <img src="../assets/images/index-3Company/right__seta.png" alt="right arrow gray color" width="15" height="15"  />
              </li>
              <li>
                  <a href="#">apple</a>
              </li>
          </ul>

        </div>
    </nav>

    
    <!-- -->

    <!-- main__block -->

    <main class="main__block justifyContentCenter">
      <div class="main__container-block justifyContentSpaceBetween ">
          <div class="company__background-block">
                

                <section class="background__perfil-block flexDirectionColumn">
                    <div class="perfil__informations-block">
                        <div class="avatar__photo-block">
                            <div class="avatar__photoAll-block">
                                
                                <div class="avatar__photoBorder-block">
                                    <div class="avatar__image-element">
                                        <img src="../assets/images/index-3Company/macos.png" alt="" width="80" height="80"/>
                                        <div class="border__green-element"></div>
                                    </div>
                                </div>

                                <nav class="nav__avatarPerfil-block justifyContentCenter AlignItemsCenter">
                                    <div class="border__pieces-element justifyContentCenter AlignItemsCenter">
                                        
                                        <img src="../assets/images/index-3Company/3bolinhas.png" alt="three balls" width="30" height="30"/>
                                        <div class="modal__Perfil-block">
                                          <ul class="modal__ulPerfil-block">
                                            <li>Bloquear</li>
                                            <li>Denunciar</li>
                                          </ul>
                                        </div>
                                        
                                      </div>
                                    <button class="button__avatar-element">Seguir</button>
                                </nav>
                            </div>
                        </div>
                        <section class="wrapTexts-info-block justifyContentSpaceBetween ali">
                            <div class="names__perfil-block">
                                                      <h1 class="title__perfilPrimary-element">
                                                          Apple
                                                          <img src="../assets/images/index-3Company/bandeira.png" alt="gray flag" width="35" height="35"/>
                                                      </h1>
                                                      <span class="title__perfilSecondary-element">Pense diferente</span>
                          
                                                      <div class="star__evaluation-block AlignItemsCenter">
                                                          <img src="../assets/images/index-3Company/star.png" alt="star orange" width="20" height="20"/>
                                                          <img src="../assets/images/index-3Company/star.png" alt="star orange" width="20" height="20"/>
                                                          <img src="../assets/images/index-3Company/star.png" alt="star orange" width="20" height="20"/>
                                                          <img src="../assets/images/index-3Company/star.png" alt="star orange" width="20" height="20"/>
                                                          <img src="../assets/images/index-3Company/estrelameia.png" alt="star and gray" width="20" height="20"/>
                                                          <span class="title__starEvaluation-element">4.58 / 5</span>
                                                          <img src="../assets/images/index-3Company/brasil.png" alt="frag brazil" width="20" height="20"/>
                                                          <span class="name__country-element title__starEvaluation-element">Brasil</span>
                                                      </div>
                          
                                                      <h3 class="text__company-element">Empresas cotada em bolsa</h3>
                          
                                                      <button class="button__timeline-element" style="margin-bottom:20px;">Linha do tempo</button>
                            </div>
                            <div class="market__value-block flexDirectionColumn AlignItemsEnd">
                                                      <h3 class="title__marketValue-element">Valor de mercado</h3>
                                                      <span class="title__marketValueMoney-element">BRL 80.000,00</span>
                                                      
                            </div>
                        </section>
                    </div>
                    
                    <section class="list__typeActivities-block">
                        <h4 class="title__Activities-element">Principais Atividades</h4>
                        <div class="buttons__row-block">
                            <button class="buttons__ActivitiesOrange-element">Hardware de Computador</button>
                            <button class="buttons__ActivitiesOrange-element">Eletrônicos de Consumo</button>
                            <button class="buttons__ActivitiesOrange-element">Software de Computador</button>
                        </div>
                    </section>

                </section>

                <section class="people__following-block">
                    <h2 class="title__peopleFollowing-element">Pessoas seguindo essa empresa</h2>
                    
                    <div class="peoples__followingImages-block justifyContentSpaceBetween AlignItemsCenter">
                        
                        <div class="image__people-block">
                            <div class="image__people-element">
                                <img src="../assets/images/index-3Company/pessoa.jpg" alt="image of a person with blue rouap and under a white shirt" width="90" height="90"/>
                                <span class="time__people-active time__people-active--active"></span>
                            </div>
                        </div>
                        <div class="image__people-block">
                            <div class="image__people-element">
                                <img src="../assets/images/index-3Company/pessoa.jpg" alt="image of a person with blue rouap and under a white shirt" width="90" height="90" />
                                <span class="time__people-active time__people-active--active"></span>

                            </div>
                        </div>
                        <div class="image__people-block">
                            <div class="image__people-element">
                                <img src="../assets/images/index-3Company/pessoa.jpg" alt="image of a person with blue rouap and under a white shirt" width="90" height="90"/>
                                <span class="time__people-active time__people-active--active"></span>
                            </div>
                        </div>
                        <div class="image__people-block">
                            <div class="image__people-element">
                                <img src="../assets/images/index-3Company/pessoa.jpg" alt="image of a person with blue rouap and under a white shirt" width="90" height="90"/>
                                <span class="time__people-active time__people-active--active"></span>

                            </div>
                        </div>
                        <div class="image__people-block">
                            <div class="image__people-element">
                                <img src="../assets/images/index-3Company/pessoa.jpg" alt="image of a person with blue rouap and under a white shirt" width="90" height="90"/>
                                <span class="time__people-active time__people-active--absent"></span>

                            </div>
                        </div>
                        <div class="image__people-block">
                            <div class="image__people-element">
                                <img src="../assets/images/index-3Company/pessoa.jpg" alt="image of a person with blue rouap and under a white shirt" width="90" height="90" />
                                <span class="time__people-active time__people-active--absent"></span>

                            </div>
                        </div>
                        <div class="image__people-block image__people-block--top">
                            <span class="title__restImages-element">+348</span>
                            <div class="image__people-element image__people-block--bottom ">
                                <img src="../assets/images/index-3Company/pessoa.jpg" alt="image of a person with blue rouap and under a white shirt" width="90" height="90"/>
                            </div>
                        </div>
                        
                    </div>
                </section>

                <article class="article_aboutPerfil-block justifyContentSpaceBetween">
                  
                  <div class="perfil__level-block">
                    
                    <div class="perfil__levelImageText-block justifyContentCenter AlignItemsCenter">
                      <img 
                        src="../assets/images/index-3Company/escudo.png" 
                        alt="yellow shield with a keyhole in the middle of gray color" 
                        width="60"
                        height="60"
                        >
                      <span class="texts__Primary-block">
                        <h2 class="title__namePrimary-element">O QUE É UM PERFIL NÍVEL GOLD</h2>
                        <p class="text__nameSecondary-element">Um freelancer Gold(Ouro) já trabalhou com pelo menos quatro</p>
                      </span>
                    </div>
                    <p class="text__restLevelInformation-element text__nameSecondary-element">
                      clientes diferentes, conseguindo ótimos resultados. Para esses profissionais, a reputação 
                      é muito importante. Não perca a oportunidade de reconhecer seu talento no seu próximo projeto! Leia mais 
                    </p>

                  </div>

                  <div class="perfil__level-block">
                    
                    <div class="perfil__levelImageText-block justifyContentCenter AlignItemsCenter">
                      <img 
                        src="../assets/images/index-3Company/info.png" 
                        alt="red background violation image with a ! gray in the middle" 
                        width="60"
                        height="60"
                        >
                      <span class="texts__Primary-block">
                        <h2 class="title__namePrimary-element">O QUE É UMA VIOLAÇÃO</h2>
                        <p class="text__nameSecondary-element">Uma violção é uma classificação negativa dada pela nellbux, a um</p>
                      </span>
                    </div>
                    <p class="text__restLevelInformation-element text__nameSecondary-element">
                      usuário (depois de uma arbitragrem), como resultado do descupimento de usuário com algum ou todos os temos do projeto.
                    </p>

                  </div>

                </article>

                <section class="product__table-block">
                  <h2 class="title__productPrimary-element">Produtos, serviços ou mercadorias</h2>
                  <table class="table__block">
                    
                    <tr class="table__header-block">
                      <th width="300" class="Tableborder__top-element">Atividades</th>
                      <th class="type__theader-element">tipo</th>
                      <th class="Tableborder__right-element">Anos de experiência</th>
                    </tr>

                    <tr class="table__tr-block table__tr-block--grayLight" >
                      <td width="300">
                        <span class="span__backgroundOrange-element">Mac</span>
                      </td>
                      <td class="product">produto</td>
                      <td class="tdRow-element">
                        <div class="textTime-year-element">3 a 5 anos</div>
                        <img id="td__imageNone-element" src="../assets/images/imagesHeader/seta.png" alt="arrow bottom color orange" width="30" height="30"/>
                        
                      </td>
                      
                    </tr>

                    <tr class="table__tr-block table__tr-block--grayWhite">
                      <td width="300">
                        <span class="span__backgroundOrange-element">Mac</span>
                      </td>
                      <td class="product">produto</td>
                      <td class="tdRow-element">
                        <div class="textTime-year-element">3 a 5 anos</div>
                        <img id="td__imageNone-element" src="../assets/images/imagesHeader/seta.png" alt="arrow bottom color orange" width="30" height="30"/>
                      </td>
                    </tr>

                    <tr class="table__tr-block table__tr-block--grayLight">
                      <td width="300">
                        <span class="span__backgroundOrange-element">Mac</span>
                      </td>
                      <td class="product">produto</td>
                      <td class="tdRow-element">
                        <div class="textTime-year-element">3 a 5 anos</div>
                        <img id="td__imageNone-element" src="../assets/images/imagesHeader/seta.png" alt="arrow bottom color orange" width="30" height="30"/>
                      </td>
                    </tr>
                  </table>

                  <div class="table__res-block ">
                    <h2 class="table__liText-element ">Atividades</h2>
                    <ul class="table__resultUl-block">

                      <li class="primary__border-element AlignItemsStart flexDirectionColumn">

                        <div class="res__text-block justifyContentSpaceBetween AlignItemsCenter">
                          <span class="span__backgroundOrange-element">mac</span>
                          <img src="../assets/images/imagesHeader/seta.png" alt="arrow bottom color orange" width="25" height="25" />
                        </div>

                        <div class="result__table">
                          <ul class="result__tableRes-block">
                            <li>
                              Produto
                              <span class="resultSpanRes-element">3 a 5 anos</span>
                            </li>
                          </ul>
                        
                        </div>

                      </li>

                      <li class="primary__border-element AlignItemsStart flexDirectionColumn">

                        <div class="res__text-block justifyContentSpaceBetween AlignItemsCenter">
                          <span class="span__backgroundOrange-element">mac</span>
                          <img src="../assets/images/imagesHeader/seta.png" alt="arrow bottom color orange" width="25" height="25" />
                        </div>

                        <div class="result__table">
                          <ul class="result__tableRes-block">
                            <li>
                              Produto
                              <span class="resultSpanRes-element">3 a 5 anos</span>
                            </li>
                          </ul>
                        
                        </div>

                      </li>

                      <li class="primary__border-element AlignItemsStart flexDirectionColumn">

                        <div class="res__text-block justifyContentSpaceBetween AlignItemsCenter">
                          <span class="span__backgroundOrange-element">mac</span>
                          <img src="../assets/images/imagesHeader/seta.png" alt="arrow bottom color orange" width="25" height="25" />
                        </div>

                        <div class="result__table">
                          <ul class="result__tableRes-block">
                            <li>
                              Produto
                              <span class="resultSpanRes-element">3 a 5 anos</span>
                            </li>
                          </ul>
                        
                        </div>

                      </li>
                      
                    </ul>
                  </div>
                  
                  <div class="Tablelearn__more-block">
                    <a href="#">Ver mais</a>
                  </div>
                </section>

                <section class="projects__highlights-block">
                  <h2 class="title__projects-element">Projetos em destaque</h2>
                  <div class="projects__images-block justifyContentSpaceBetween flexWrap">

                    <div class="project__image-block">

                      <div class="added__imageHighlights-elemnet AlignItemsCenter justifyContentCenter">+</div>
                    </div>

                    <div class="project__image-block">

                      <div class="added__imageHighlights-elemnet AlignItemsCenter justifyContentCenter">+</div>
                    </div>

                    <div class="project__image-block">

                      <div class="added__imageHighlights-elemnet AlignItemsCenter justifyContentCenter">+</div>
                    </div>


                  </div>
                </section>

                <section class="Classified__poeples-block">
                  
                  <header class="header__Classifield-block justifyContentSpaceBetween AlignItemsCenter">
                    <h2 class="header__titleClassifield-element">Classificação por investidores (370)</h2>
                    <span class="return__investment-element AlignItemsCenter">
                      <img src="../assets/images/index-3Company/medals.png" alt="medals" width="30" height="30" />
                      4 investidores contrataram apple mais de uma vez.
                    </span>
                  </header>

                  <div class="card__classifeld-block">
                    <h3 class="title__cardName-element">Procuro socio para empresa Startup De transporte de luxo a 6 anos no mercado</h3>

                    <span class="perfil__informationTIme-block AlignItemsCenter">
                      <img src="../assets/images/index-3Company/avatar.png" alt="border perfil" width="30" height="30"/>
                      <b class="b__titleNamePerfil-element">P.S.</b> 
                       há 29 dias
                    </span>

                    <div class="buttons__classifield-block">
                      <button class="button__classifield button__classifield--blue">Financiamento</button>
                      <button class="button__classifield button__classifield--orange">Capital de giro</button>
                    </div>
                  </div>

                  <div class="card__classifeld-block">
                    <h3 class="title__cardName-element">Procuro socio para empresa Startup De transporte de luxo a 6 anos no mercado</h3>

                    <span class="perfil__informationTIme-block AlignItemsCenter">
                      <img src="../assets/images/index-3Company/avatar.png" alt="border perfil" width="30" height="30"/>
                      <b class="b__titleNamePerfil-element">P.S.</b> 
                       há 29 dias
                       <div class="AddedMore-block AlignItemsCenter justifyContentCenter">+</div>
                       <div class="stars">
                        <div class="AddedMore-block AddedMoreVisibled AlignItemsCenter justifyContentCenter">+</div>
                        <img src="../assets/images/index-3Company/star.png" alt="star orange" width="20" height="20"/>
                        <img src="../assets/images/index-3Company/star.png" alt="star orange" width="20" height="20"/>
                        <img src="../assets/images/index-3Company/star.png" alt="star orange" width="20" height="20"/>
                        <img src="../assets/images/index-3Company/star.png" alt="star orange" width="20" height="20"/>
                        <img src="../assets/images/index-3Company/estrelameia.png" alt="star and gray" width="20" height="20"/> 
                       </div>
                       <img src="../assets/images/index-3Company/star.png" id="star__timeHidden-element" alt="star orange" width="20" height="20"/>
                       <img src="../assets/images/index-3Company/star.png" id="star__timeHidden-element" alt="star orange" width="20" height="20"/>
                       <img src="../assets/images/index-3Company/star.png" id="star__timeHidden-element" alt="star orange" width="20" height="20"/>
                       <img src="../assets/images/index-3Company/star.png" id="star__timeHidden-element" alt="star orange" width="20" height="20"/>
                       <img src="../assets/images/index-3Company/estrelameia.png"id="star__timeHidden-element" alt="star and gray" width="20" height="20"/>

                    </span>

                    <p class="title__descriptionPeople-element">Ótimo profissional, super atencioso</p>
                    <div class="buttons__classifield-block">
                      <button class="button__classifield button__classifield--blue">Financiamento</button>
                      <button class="button__classifield button__classifield--orange">Capital de giro</button>
                    </div>
                  </div>

                  <div class="card__classifeld-block">
                    <h3 class="title__cardName-element">Procuro socio para empresa Startup De transporte de luxo a 6 anos no mercado</h3>

                    <span class="perfil__informationTIme-block AlignItemsCenter">
                      <img src="../assets/images/index-3Company/avatar.png" alt="border perfil" width="30" height="30"/>
                      <b class="b__titleNamePerfil-element">P.S.</b> 
                       há 29 dias
                       <div class="stars">
                        <img src="../assets/images/index-3Company/star.png" alt="star orange" width="20" height="20"/>
                        <img src="../assets/images/index-3Company/star.png" alt="star orange" width="20" height="20"/>
                        <img src="../assets/images/index-3Company/star.png" alt="star orange" width="20" height="20"/>
                        <img src="../assets/images/index-3Company/star.png" alt="star orange" width="20" height="20"/>
                        <img src="../assets/images/index-3Company/estrelameia.png" alt="star and gray" width="20" height="20"/> 
                       </div>
                       <img src="../assets/images/index-3Company/star.png" id="star__timeHidden-element" alt="star orange" width="20" height="20"/>
                       <img src="../assets/images/index-3Company/star.png" id="star__timeHidden-element" alt="star orange" width="20" height="20"/>
                       <img src="../assets/images/index-3Company/star.png" id="star__timeHidden-element" alt="star orange" width="20" height="20"/>
                       <img src="../assets/images/index-3Company/star.png" id="star__timeHidden-element" alt="star orange" width="20" height="20"/>
                       <img src="../assets/images/index-3Company/estrelameia.png" id="star__timeHidden-element" alt="star and gray" width="20" height="20"/>

                    </span>

                    <div class="buttons__classifield-block">
                      <button class="button__classifield button__classifield--blue">Financiamento</button>
                      <button class="button__classifield button__classifield--orange">Capital de giro</button>
                    </div>
                  </div>

                  <footer class="footer__cardClasifield-block justifyContentCenter AlignItemsCenter">
                    <button class="button__classifield button__classifield--blue">Mais classificações</button>
                  </footer>

                </section>

                <section class="certificate_perfil-block">
                  <h2 class="title__projects-element">Certificações</h2>

                  <table class="table__certificate-block">
                    <tr class="theader__certificate-block">
                      <th width="100" class="titlte__yearTable-element">Ano</th>
                      <th class="certificate">certificão</th>
                      <th class="pontuation">Pontuação</th>
                      <th class="status">Status</th>
                    </tr>

                    <tr class="tr__certificate-block">
                      <td width="100" class="titlte__yearTable-element">2020</td>
                      <td class="titlte__yearTable-element titlte__yearTable-element--blue">Comprovação de bens e patrimonios</td>
                      <td class="titlte__yearTable-element titlte__yearTable-element--green">63%</td>
                      <td class="titleConfirm-element AlignItemsCenter">
                        <img src="../assets/images/index-3Company/certo.png" alt="circle where have background green" width="20" height="20"/>
                        <div class="confirmation">confirmado</div>
                      </td>
                    </tr>

                    <tr class="tr__certificate-block">
                      <td width="100" class="titlte__yearTable-element">2020</td>
                      <td class="titlte__yearTable-element titlte__yearTable-element--blue">Comprovação de bens e patrimonios</td>
                      <td class="titlte__yearTable-element titlte__yearTable-element--green">63%</td>
                      <td class="titleConfirm-element AlignItemsCenter"> 
                        <img src="../assets/images/index-3Company/certo.png" alt="circle where have background green" width="20" height="20"/>
                        <div class="confirmation">confirmado</div>
                      </td>
                    </tr>

                    <tr class="tr__certificate-block">
                      <td width="100" class="titlte__yearTable-element">2020</td>
                      <td class="titlte__yearTable-element titlte__yearTable-element--blue">Comprovação de bens e patrimonios</td>
                      <td class="titlte__yearTable-element titlte__yearTable-element--green">63%</td>
                      <td class="titleConfirm-element AlignItemsCenter">
                        <img src="../assets/images/index-3Company/certo.png" alt="circle where have background green" width="20" height="20"/>
                        <div class="confirmation">confirmado</div>
                      </td>
                    </tr>

                    <tr class="tr__certificate-block">
                      <td width="100" class="titlte__yearTable-element">2020</td>
                      <td class="titlte__yearTable-element titlte__yearTable-element--blue">Comprovação de bens e patrimonios</td>
                      <td class="titlte__yearTable-element titlte__yearTable-element--green">63%</td>
                      <td class="titleConfirm-element AlignItemsCenter">
                        <img src="../assets/images/index-3Company/certo.png" alt="circle where have background green" width="20" height="20"/>
                        <div class="confirmation">confirmado</div>
                      </td>
                    </tr>

                  </table>
                </section>

                <footer class="localization__company-block">
                  <h4 class="footer__titleLocalization-element">Localização</h4>
                  <p class="about__CompanyAdders-element">Sede Cupertino, Condado de Santa Clara, Califórnia, Estados Unidos 453 lojas de varejo em 16 países</p>
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d914.2953570279516!2d-46.65676703188678!3d-23.561926601554557!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce59ceb1eb771f%3A0xe904f6a669744da1!2sMuseu%20de%20Arte%20de%20S%C3%A3o%20Paulo%20Assis%20Chateaubriand!5e0!3m2!1spt-BR!2sbr!4v1668633486338!5m2!1spt-BR!2sbr" width="100%" height="350" class="map__loading-element" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </footer>
        
          </div>
            <aside class="aside__bar">

              <section class="send__credit-block">
                
                <header class="header__hero-block AlignItemsCenter justifyContentCenter">
                  
                  <div class="background__trophy-element AlignItemsCenter justifyContentCenter">
                    <img src="../assets/images/index-3Company/aside__bar/trofeu.png" alt="yellow trophy"  width="25" height="25"/>
                  </div>

                  <h2 class="title__hero-element">HERO</h2>
                  
                </header>

                <section class="information__asideBar-block flexDirectionColumn">
                  <button class="send__message-button AlignItemsCenter justifyContentCenter">
                    <img src="../assets/images/index-3Company/aside__bar/mensagem.png" alt="mensager background white" width="25" height="25" />
                    Enviar mensagem
                  </button>

                  <nav class="activities__block">
                    <h3 class="title__activities-element">Atividade</h3>
                    
                    <div class="activities__divs-block AlignItemsCenter justifyContentSpaceBetween">
                     
                      <ul class="activites__cards-block flexDirectionColumn">
                        <li class="name__activites-element">Receita</li>
                        <li class="name__activites-element">Lucro</li>
                        <li class="name__activites-element">Faturamento</li>
                      
                      </ul>

                      <div class="span__texts-block">
                        <ul>
                          <li>
                            <img src="../assets/images/index-3Company/aside__bar/trianguloGreen.png" alt="green triangle icon" width="10" height="10" />
                            US$ 182,795 bilhões
                          </li>
                          <li>
                            <img src="../assets/images/index-3Company/aside__bar/trianguloRed.png" alt="red triangle icon" width="10" height="10" />
                            US$ 42,687 bilhões
                          </li>
                          <li>
                            <img src="../assets/images/index-3Company/aside__bar/trianguloRed.png" alt="red triangle icon" width="10" height="10" />
                            US$ 14,01 bilhões
                          </li>
                        </ul>
                      </div>


                    </div>
                  </nav>

                  <span class="title__webisteOficial-element AlignItemsCenter">
                    Website Oficial
                    <img src="../assets/images/index-3Company/aside__bar/setaBaixo.png" alt="gray color down arrow" width="15" height="15" />
                  </span>

                  <a href="#" class="title__hrefSite-element AlignItemsCenter">
                    Apple.com
                    <img src="../assets/images/index-3Company/aside__bar/globo.png" alt="globe" width="20" height="20"/>
                  </a>

                  <nav class="activities__block">
                    <h3 class="title__activities-element title__activities-element--weight">Informação</h3>
                    
                    <div class="title__spacing-element justifyContentSpaceBetween AlignItemsCenter">
                      <span class="title__activities-element title__activities-element--weight title__activites-elemnet--padding">Empregados</span>
                      <span class="number__blue-element">37</span>
                    </div>

                    
                    <div class="title__spacing-element justifyContentSpaceBetween AlignItemsCenter">
                      <span class="title__activities-element title__activities-element--weight title__activites-elemnet--padding ">Violações</span>
                      <span class="number__blue-element number__blue-element--red">1</span>
                    </div>

                    <div class="title__spacing-element justifyContentSpaceBetween AlignItemsCenter">
                      <span class="title__activities-element title__activities-element--weight title__activites-elemnet--padding">Certificações</span>
                      <span class="number__blue-element">37</span>
                    </div>


                    <div class="title__spacing-element justifyContentSpaceBetween AlignItemsCenter">
                      <span class="title__activities-element title__activities-element--weight title__activites-elemnet--padding">Último login</span>
                      <span class="title__yearActivites-element">há 15 horas</span>
                    </div>


                    <div class="title__spacing-element justifyContentSpaceBetween AlignItemsCenter">
                      <span class="title__activities-element title__activities-element--weight title__activites-elemnet--padding">FUndação</span>
                      <span class="title__yearActivites-element">há 8 anos</span>
                    </div>


                  </nav>

                  <button class="send__message-button send__message-button--green AlignItemsCenter justifyContentCenter">
                    <img src="../assets/images/index-3Company/aside__bar/papel.png" alt="paper white" width="25" height="25" />
                    Enviar proposta de crédito
                  </button>

                </section>
                
              </section>
              
              <section class="score__current-block flexDirectionColumn AlignItemsCenter">
                
                <div class="boxScore">
                  <div style="margin: 15px 0px; display: flex; justify-content: center; gap: 5px; align-items: center;">
                    <p class="nivelScore">Score Atual <span>GOLD</span></p>
                       <svg width="11" height="10" viewBox="0 0 11 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <rect x="0.5" width="10" height="10" rx="5" fill="#3A7FFF"></rect>
                          <path d="M5.43497 6.46289H5.0578C5.0578 6.26845 5.09971 6.04514 5.18353 5.79297C5.27023 5.5408 5.37428 5.2947 5.49566 5.05469C5.61705 4.81163 5.73699 4.57161 5.85549 4.33464C5.97688 4.09766 6.07948 3.86372 6.16329 3.63281C6.25 3.40191 6.29335 3.20443 6.29335 3.04036C6.29046 2.75174 6.20231 2.53754 6.0289 2.39779C5.85549 2.25803 5.6185 2.18815 5.31792 2.18815C4.94509 2.18815 4.57081 2.3112 4.19509 2.55729L4 1.94206C4.35549 1.64735 4.83381 1.5 5.43497 1.5C5.90318 1.5 6.28035 1.63064 6.56647 1.89193C6.85549 2.15017 7 2.51172 7 2.97656C7 3.2105 6.96676 3.43837 6.90029 3.66016C6.83671 3.88194 6.74711 4.09918 6.6315 4.31185C6.5159 4.52148 6.39451 4.72656 6.26734 4.92708C6.14306 5.12457 6.00145 5.36306 5.84249 5.64258C5.68642 5.92209 5.55058 6.19553 5.43497 6.46289ZM4.88439 8.32227C4.78324 8.20074 4.73266 8.05946 4.73266 7.89844C4.73266 7.73741 4.78324 7.59766 4.88439 7.47917C4.98844 7.35764 5.13006 7.29688 5.30925 7.29688C5.49133 7.29688 5.63295 7.35612 5.7341 7.47461C5.83526 7.5931 5.88584 7.73438 5.88584 7.89844C5.88584 8.0625 5.83526 8.20378 5.7341 8.32227C5.63295 8.44075 5.49133 8.5 5.30925 8.5C5.13006 8.5 4.98844 8.44075 4.88439 8.32227Z" fill="white">
                            
                          </path>
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
                     <p>de 5000</p>
                     <p>NellBux Score 3.0</p>
                  </div>

                  <div class="boxIconsNivel">
                    <img src="../assets/images/index-3Company/aside__bar/Nivel (1).png" alt="" class="imgNivel"/>
                    <img src="../assets/images/index-3Company/aside__bar/Nivel (2).png" alt="" class="imgNivelAtual"/>
                    <img src="../assets/images/index-3Company/aside__bar/Nivel (3).png" alt="" class="imgNivel"/>
                    <img src="../assets/images/index-3Company/aside__bar/Nivel (4).png" alt="" class="imgNivel"/>
                    <img src="../assets/images/index-3Company/aside__bar/Nivel (5).png" alt="" class="imgNivel" />
                  </div>
               </div>

              </section>

              <article class="article__shareLinks-block">
                <h2 class="title__sharePerfil-element">Compartilhar Perfil</h2>
                <nav class="navs__links-block">
                  <ul class="ul__shares-block justifyContentSpaceBetween AlignItemsCenter">
                    <li class="li__backgroundBlue-element">
                      <a href="#">
                        <img src="../assets/images/index-3Company/aside__bar/email.png" alt="email background white" width="30" height="30" />
                      </a>
                    </li>
              
                    <li class="li__backgroundBlueLight-element">
                      <a href="#">
                        <img src="../assets/images/index-3Company/aside__bar/facebook.png" alt="f color white and background white" width="30" height="30" />
                      </a>
                    </li>
                    <li class="li__backgroundBabyBlue-element">
                      <a href="#">
                        <img src="../assets/images/index-3Company/aside__bar/twitter.png" alt="twitter bird all white" width="30" height="30" />
                      </a>
                    </li>
                  </ul>
                </nav>
              </article>

              <article class="article__aboutCompany-block">
                <h3 class="title__articlesName-element">Sobre a empresa</h3>
                <p class="text__haveProfessionals-element">
                  Somos a Américo Tecnologia, estamos a 10 anos 
                  no mercado de tecnologia. Na nossa equipe 
                  temos profissionais que já 
                  trabalharam em grandes empresas, como: 
                  Schicariol, Petrobras, Stefanini entre outras.
                </p>

                <p class="text__haveProfessionals-element">
                  Trabalhamos com criação, manutenção e customização de sites, lojas virtuais... 
                  <a href="#">Ver mais detalhes</a>
                </p>
              </article>

              <section class="subsidiaries__block">
                <h3 class="title__articlesName-element">Subsidiárias</h3>
                <ul class="ul__subsidiaries-block">
                  <li>empresa</li>
                  <li>empresa</li>
                  <li>empresa</li>

                </ul>
              </section>

            </aside>
        </div>
    </main>

<!--

    -->

    <!-- jQuery Modal -->
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />      
    <script type="module" src="../assets/scriptbase/script.js"></script>
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

    <!-- PATHS scripts -->
    <script src="../assets/scriptbase/GlobalTelaFrame54.js"></script>

  </body>
</html>
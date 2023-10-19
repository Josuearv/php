<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Poppins:ital,wght@0,200;0,300;0,400;0,500;1,400&display=swap" rel="stylesheet">
    
    
    <link rel="stylesheet" href="../assets/stylebase/cssStyleModal/greed.css" />
    <link rel="stylesheet" href="../assets/style/index-1Home.css?=test4" />
   

     <script src="../assets/scriptbase/jquery.js"></script>
    <!--<script src="./assets/js/vue2/vue.js"></script>-->

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
      
            <ul id="menu-principal">
              <li id="border__leave"><a href="#">SAIR</a></li>
            </ul>

      
        </aside>

        <!--
          Header  
        -->

        <header class="header justifyContentCenter alignItemsCenter">
            <div class="container justifyContentBetween">
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
                    <button class="modal__h button__nav">
                      <img
                        
                        src="../assets/images/imagesHeader/sino.png"
                        alt="orange bell icon receive notification"
                        width="30"
                        height="30"
                        id="modal__get"
                      />
                      <div class="messageNotification fColumn">
                        <header
                          class="header__notification header__messageModal fJustifyBetween"
                        >
                          <span class="text__message">Notificações</span>
                          <span class="text__message">Ver todos</span>
                        </header>
                        
                        <nav class="nav__notification directionColumn alignItemsCenter">
                          <div class="card__notification justifyContentCenter">
                            
                            <div class="block__text__notification justifyContentCenter directionColumn">
                              <span
                                class="card__notificationt__text card__notificationt__text--weight"
                              >
                                Rejeitamos seu projeto
                                <span
                                  class="card__notificationt__text card__notificationt__text--margin"
                                  >Ontem</span
                                >
                              </span>
                              <span class="notifications__about justifyContentBetween alignItemsCenter"
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

                          <div class="card__notification justifyContentCenter">
                            <div class="block__text__notification">
                              <span
                                class="card__notificationt__text card__notificationt__text--weight "
                              >
                                Rejeitamos seu projeto
                                <span
                                  class="card__notificationt__text card__notificationt__text--margin"
                                  >Ontem</span
                                >
                              </span>
                              <span class="notifications__about justifyContentBetween alignItemsCenter"
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
        
        
        
                    <button class="modal__h message">
                      <img
                        src="../assets/images/imagesHeader/message.png"
                        alt="message icon, orange color with 3 dots in the middle"
                        width="30"
                        height="30"
                        id="modal__get"
                      />
                      <div class="messageModalss directionColumn">
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
                    </button>
                          
              
                  </div>
  
                  <div class="total__investment-block alignItemsCenter">
                    <span class="total__investment-element">Total investido carregando...</span>
                    <button class="modal__h perfil__button">
                      <div class="modal__eyes">
                        <span id="balance">Saldo: R$ 0,00</span>
                      </div>
                      <img src="../assets/images/imagesHeader/eyes.png"  id="modal__get" alt="eyes" width="35" height="35" />
                    </button>
                    <hr id="row__separator">
                  </div>
                  
  
                  <div class="perfil__account-block total__investment-block alignItemsCenter">
                    <button class=" modal__h perfil__button">
                      <span class=" tb__perfil" id="modal__get">tb</span>
                    
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
                    </button>
                    <span class="perfil__name-element">
                      Olá Tássio 
                      <span class="perfil__code-element">55077188</span>
                    </span>
                    <hr id="row__separator">
                
                        

                  
                </nav>
                <span class="leave__element">SAIR</span>
                
                
                <div id="bt-abrir-menu-mobile" class="exit__menu">
                <span class="material-icons">menu</span>
              </div>


            </div>
        </header>
        
        
        <!--
          Navegação 
        -->
        <nav class="nav__hrefs-block justifyContentCenter">
          <ul class="nav__links-container justifyContentBetween alignItemsCenter">
            <li>
              <img src="../assets/images/imagesNav/home.png" alt="home color orange" width="20" height="20"/>
              <a href="#">
                Área de Membro
              </a>
            </li>

            <li>
              <img src="../assets/images/imagesNav/money.png" alt="orange money bag with s in the middle" width="20" height="20"/>
              <a href="moves.php">Minhas finanças</a>
            </li>

            <li class="nav__links-element nav__links-element">
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


        <!--
          Main 
        -->
        <main class="main__block justifyContentCenter">
          <div class="main__container justifyContentBetween">
            <div class="aside__background-opactiy"></div>
            <aside class="aside__block justifyContentCenter alignItemsCenter">
              <div class="aside__container">
                  <div class="aside__text-block">
                    <h1 class="aside__title-element">Precisando de Crédito?</h1>
                    <button class="button button--orange">Publique um projeto. É gratis</button>
                  </div>
    
                  <h3 class="aside__weBorrow-element">Ganhe dinheiro com emprestimos</h4>
                  <p class="aside__texting-element">Empreste dinheiro para terceiros com segurança usando garantia do NellBux.</p>
                
                  <div class="checkboxs-blocks">
                    <label class="contianer_label-block">Todas as Categorias
                      <input type="checkbox" checked="checked">
                      <span class="checkmark"></span>
                    </label>
    
                    <label class="contianer_label-block">Empréstimo para pagar dívidas
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label>
    
                    <label class="contianer_label-block">Empréstimo para reforma ou mudanças
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label>
    
                    <label class="contianer_label-block">Empréstimo para débito em conta
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label>
    
                    <label class="contianer_label-block">Empréstimo para negativados
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label>
                    
                    <label class="contianer_label-block">Empréstimo para casamento
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label>
    
                    <label class="contianer_label-block">Empréstimo para aposentado
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label>
    
                    <label class="contianer_label-block">Empréstimo para assalariado
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label>
    
                    <label class="contianer_label-block">Empréstimo para autônomo
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label>
    
                    <label class="contianer_label-block">Empréstimo para functionário público
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label>
    
                  </div>
    
                  <div class="budget-block">
                    <div class="title__budget-block">
                      <h3 class="primary__buget-element">Valor do investimento? Orçamento (Preço fixo)</h3>
                      <span class="secondary__buget-element">Todas</span>
                    </div>
    
                    <div class="money__amount">
    
                      <div class="money__amount-block">
                        <div class="money__title-element">R$</div>
                        <input type="number" placeholder="0,00"/> 
                      </div>
    
                      <div class="money__amount-block">
                        <div class="money__title-element">R$</div>
                        <input type="number" placeholder="150.000,00"/> 
                      </div>
    
                    </div>
    
                  </div>
    
                  <div class="data__Publication-block">
                    <h3 class="primary__buget-element">Data publicação</h3>
    
    
                    <div class="select-block">
    
                      <select>
                        <option value>Em qualquer momento</option>
                        <option>teste1</option>
                        <option>teste2</option>
                        <option>teste3</option>
                        <option>teste4</option>
                        <option>teste5</option>
                      </select>
    
                      <div class="right"></div>
                    </div>
    
                  </div>
    
                  <div class="invest-block data__Publication-block">
                    <h3 class="primary__buget-element">Quero investir em</h3>
                    <div class="block__radius justifyContentBetween flexWrap">
    
                      <div class="radius__block">
                        <input type="radio" name="sizes" id="todas" checked/>
                        <label for="todas">Todas</label>
                      </div>
    
                      <div class="radius__block">
                        <input type="radio" name="sizes" id="pessoaF" />
                        <label for="pessoaF">Pessoa Física</label>
                      </div>
    
                      <div class="radius__block">
                        <input type="radio" name="sizes" id="pessoaJ" />
                        <label for="pessoaJ">Pessoa Jurídica</label>
                      </div>
    
                    </div>
                  </div>
    
                  <div class="modality-block">
                    <h3 class="primary__buget-element primary__buget-element--black">Modalidade de juros</h3>
                    
                    <label class="contianer_label-block contianer__label-block--text">Todas as Categorias
                      <input type="checkbox" checked="checked">
                      <span class="checkmark"></span>
                    </label>
    
                    <label class="contianer_label-block contianer__label-block--text">
                      Quero com garantia
                      <p class="label__text-element">emprestimos com garantia possui taxas de juros mais baixas sendo imóveis. veiculos e outros bens.</p>
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label>
    
                    <label class="contianer_label-block contianer__label-block--text">
                      Sem garantia
                      <p class="label__text-element">emprestimos sem garantia possui taxas de juros altas chegando até 30% ao mês</p>
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label>
    
                  </div>
    
    
                  <div class="data__time-block data__Publication-block">
                    <h3 class="primary__buget-element">Em quanto tempo?</h3>
                    <p class="label__text-element label__text-element--size">emprestimos sem garantia possui taxas de juros altas chegando até 30% do mês</p>
    
    
                    <div class="select-block">
    
                      <select>
                        <option value>Todos</option>
                        <option>teste1</option>
                        <option>teste2</option>
                        <option>teste3</option>
                        <option>teste4</option>
                        <option>teste5</option>
                      </select>
    
                      <div class="right"></div>
                    </div>
    
                  </div>
    
                  <div class="data__portion-block data__Publication-block">
                    <h3 class="primary__buget-element">Em quantas parcelas?</h3>
                    <p class="label__text-element label__text-element--size">marque o parcelamento que você deseja emprestar lembrando quando o menor parcelamento menor será o rendimento</p>
    
    
                    <div class="select-block">
    
                      <select>
                        <option value>Todos</option>
                        <option>teste1</option>
                        <option>teste2</option>
                        <option>teste3</option>
                        <option>teste4</option>
                        <option>teste5</option>
                      </select>
    
                      <div class="right"></div>
                    </div>
    
                  </div>
    
                  <div class="invest-block data__Publication-block">
                    <h3 class="primary__buget-element">Quero investir em</h3>
                    <div class="block__radius block__radius--wrap justifyContentBetween flexWrap">
    
                      <div class="radius__blocks">
                        <input type="radio" name="sizess" id="todoss" checked/>
                        <label for="todoss">Todas</label>
                      </div>
    
                      <div class="radius__blocks">
                        <input type="radio" name="sizess" id="INSS" />
                        <label for="INSS">INSS</label>
                      </div>
    
                      <div class="radius__blocks">
                        <input type="radio" name="sizess" id="Publico" />
                        <label for="Publico">Publico</label>
                      </div>
                      
                      <div class="radius__blocks">
                        <input type="radio" name="sizess" id="Privado" />
                        <label for="Privado">Privado</label>
                      </div>
    
    
                      <div class="radius__blocks">
                        <input type="radio" name="sizess" id="FGTS" />
                        <label for="FGTS">FGTS em Garantia</label>
                      </div>
    
                    </div>
                  </div>
    
                  <div class="data__localization-block data__Publication-block">
                    <h3 class="primary__buget-element">Localização?</h3>
    
                    <div class="select-block">
    
                      <select>
                        <option value>Todos os estados brasileiros</option>
                        <option>teste1</option>
                        <option>teste2</option>
                        <option>teste3</option>
                        <option>teste4</option>
                        <option>teste5</option>
                      </select>
    
                      <div class="right"></div>
                    </div>
    
                    <div class="select-block">
    
                      <select>
                        <option value>Todas cidades e municipios</option>
                        <option>teste1</option>
                        <option>teste2</option>
                        <option>teste3</option>
                        <option>teste4</option>
                        <option>teste5</option>
                      </select>
    
                      <div class="right"></div>
                    </div>
    
                  </div>
    
                  <div class="reputation-block">
                    <h3 class="primary__buget-element--black">Reputação</h3>
                    <div class="reputation__filter-block">
                      <div class="reputatation__stars-block">
                        <input type="radio" name="stars" id="stars5" checked/>
                        
                        <label class="reputation__stars-block" for="stars5">
                          5
                          <img src="../assets/images/imagesAside/star.png" alt="start" width="20" height="20"/>
                          <img src="../assets/images/imagesAside/star.png" alt="start" width="20" height="20"/>
                          <img src="../assets/images/imagesAside/star.png" alt="start" width="20" height="20"/>
                          <img src="../assets/images/imagesAside/star.png" alt="start" width="20" height="20"/>
                          <img src="../assets/images/imagesAside/star.png" alt="start" width="20" height="20"/>
                        </label>
    
                      </div>
      
                      <div class="reputatation__stars-block">
                        <input type="radio" name="stars" id="stars4"/>
    
                        <label class="reputation__stars-block" for="stars4">
                          4
                          <img src="../assets/images/imagesAside/star.png" alt="start" width="20" height="20"/>
                          <img src="../assets/images/imagesAside/star.png" alt="start" width="20" height="20"/>
                          <img src="../assets/images/imagesAside/star.png" alt="start" width="20" height="20"/>
                          <img src="../assets/images/imagesAside/star.png" alt="start" width="20" height="20"/>
                          <img src="../assets/images/imagesAside/starOpacity.png" alt="starOpacity" width="20" height="20" />
                        </label>
                      </div>
                    
                      <div class="reputatation__stars-block">
                        <input type="radio" name="stars" id="stars3"/>
                        <label class="reputation__stars-block" for="stars3">
                          3
                          <img src="../assets/images/imagesAside/star.png" alt="start" width="20" height="20"/>
                          <img src="../assets/images/imagesAside/star.png" alt="start" width="20" height="20"/>
                          <img src="../assets/images/imagesAside/star.png" alt="start" width="20" height="20"/>
                          <img src="../assets/images/imagesAside/starOpacity.png" alt="starOpacity" width="20" height="20" />
                          <img src="../assets/images/imagesAside/starOpacity.png" alt="starOpacity" width="20" height="20" />
                        </label>
                      </div>
                    </div>
    
                  </div>
    
                  <div class="offers__received-block data__Publication-block">
                    <h3 class="primary__buget-element">Ofertas recebidas</h3>
                    <div class="block__radius justifyContentBetween flexWrap">
    
                      <div class="radius__block">
                        <input type="radio" name="invest" id="invest__todas" />
                        <label for="invest__todas">Todas</label>
                      </div>
    
                      <div class="radius__block">
                        <input type="radio" name="invest" id="invest__propostas4" />
                        <label for="invest__propostas4">0-4 propostas</label>
                      </div>
    
                      <div class="radius__block">
                        <input type="radio" name="invest" id="invest__propostas5" />
                        <label for="invest__propostas5">5+ propostas</label>
                      </div>
    
                    </div>
                  </div>
    
    
                  <div class="invest-secondary-block data__Publication-block">
                    <h3 class="primary__buget-element">Quero investir em</h3>
                    <div class="block__radius block__radius--wrap justifyContentBetween flexWrap">
    
                      <div class="radius__blocks">
                        <input type="radio" name="invest__secondary" id="invest__propost--todas" />
                        <label for="invest__propost--todas">Todas</label>
                      </div>
    
                      <div class="radius__blocks">
                        <input type="radio" name="invest__secondary" id="invest__propost--0-10" />
                        <label for="invest__propost--0-10">0 - 10</label>
                      </div>
    
                      <div class="radius__blocks">
                        <input type="radio" name="invest__secondary" id="invest__propost--10" />
                        <label for="invest__propost--10">+10</label>
                      </div>
    
                    </div>
                  </div>
    
                  <div class="invest-tertiary-block data__Publication-block">
                    <h3 class="primary__buget-element">Usuário certificados</h3>
                    <p class="label__text-element">usuarios certificados são aqueles que comprovaram documentos exigidos pela NellBux</p>
                    <div class="block__radius-size flexWrap">
    
                      <div class="radius__blocks--primary">
                        <input type="radio" name="invest__secondarys" id="invest__allUser-element" checked/>
                        <label for="invest__allUser-element">Todaos os usuarios</label>
                      </div>
    
                      <div class="radius__blocks--primary">
                        <input type="radio" name="invest__secondarys" id="invest__allCertificate-element" />
                        <label for="invest__allCertificate-element">Somente usuarios certificados</label>
                      </div>
    
    
                    </div>
                  </div>
    
                  <button class="button button--orange">Salvar busca</button>
                </div>
            </aside>

            <section class="project__block">
              <div class="project__container-block">
                  <header class="header__filter-block">
                    <div class="input__block">
                      <input type="text" placeholder="Pesquise e filtre os melhores projetos para investir" name="search__projects"/>
                      <img id="input__aside-element" src="../assets/images/imagesMain/config.png" alt="config" width="35" height="35"/>
                      <img id="image__search-element"src="../assets/images/imagesIndex5/lupa.png" alt="lupa" width="35" height="35" />                                                                      
                    </div>
                    <div class="filter__card-block">
                      <div class="filter__element">
                        SC(joinville, Blumenau)
                        <img src="../assets/images/imagesMain/excluir.png" alt="exit delete filter" width="15" height="15" />
                      </div>
    
                      <div class="filter__element">
                        SC(joinville, Blumenau)
                        <img src="../assets/images/imagesMain/excluir.png" alt="exit delete filter" width="15" height="15" />
                      </div>
    
                      <div class="filter__element">
                        SC(joinville, Blumenau)
                        <img src="../assets/images/imagesMain/excluir.png" alt="exit delete filter" width="15" height="15" />
                      </div>
    
                    </div>
                  </header>
    
                  <article class="article__profitability">
                    <h2 class="article__title-primary article__title-primary--red">Rentabilidade até 30% ao mês</h2>
                    <p class="article__text-secondary">
                      Antes de fechar alguma oferta lembre-se sempre de avaliar a reputação de cada 
                      perfil individualmente principalmente o score, não faça empréstimos em dinheiro fora da plataforma 
                      NellBux e não esqueça de solicitar garantia NellBux 
                    </p>
                    <nav class="nav__profitability-block justifyContentBetween alignItemsCenter">
                      <button class="button button--red">Como funciona a garantia?</button>
                      <a href="#" class="text__links-element text__links-element--red">
                        <img src="../assets/images/imagesMain/about.png" alt="round information with red background with an i in the middle" width="30" height="30"/>
                        garantia sujeita a aprovação 
                      </a>
                    </nav>
                  </article>
    
                  <nav class="nav__pages-block justifyContentBetween alignItemsCenter flexWrap">
    
                    <div class="nav__page-block">
                      <h2 class="article__title-primary article__title-primary--gray">Emprestimos para terceiros</h2>
                      <p class="article__text-secondary article__text-secondary--size">727 ofertas foram para investir</p>
                    </div>
    
                    <ul class="ul__pages-block">
                      <li class="li__primary-element">
                        <a href="#">1</a>
                      </li>
                      
                      <li>
                        <a href="#">2</a>
                      </li>
    
                      <li>
                        <a href="#">3</a>
                      </li>
    
                      <li>
                        <a href="#">
                          ... Próxima
                          <img src="../assets/images/imagesMain/setaright.png" id="seta__r" alt="seta right gray" width="15" height="15" />
                        </a>
                      </li>
  
    
                    </ul>
    
                  </nav>
    
                  <article class="article__profitability">
                    <h2 class="article__title-primary article__title-primary--green">Rentabilidade até 30% ao mês</h2>
                    <p class="article__text-secondary">
                      Para aqueles investidores conservadores temos uma solução perfeita com 
                      segurança e rentabilidade acima da inflação invista diretamente conosco, veja 
                      nossos planos
                    </p>
                    <nav class="nav__profitability-block justifyContentBetween alignItemsCenter">
                      <button class="button  button--gren">Rendimentos até 25% a.a</button>
                      <a href="#" class="text__links-element text__links-element--green">
                        <img src="../assets/images/imagesMain/calculator.png" alt="round information with red background with an i in the middle" width="25" height="25"/>
                        FAZER UMA SIMULAÇÃO?
                      </a>
                    </nav>
                  </article>
    
                  <div class="premium__card">
    
                    <header class="header__premium-block justifyContentBetween">
    
                        <h2 class="premium__title-element">
                          Procuro sociedade franquia de café to go itaim bibi
                        </h2>
                      <div class="make__proposal-block">
                        <button class="button button--orangePropost">Fazer uma proposta</button>
                        <div class="title__prices-element alignItemsCenter">
                          R$ 100.000 - 130.000
                          <img src="../assets/images/imagesMain/info.png" alt="info color white background blue" width="25" height="25"/>
                        </div>
                      </div>
    
                    </header>
    
                    <ul class="ul__list-project ul__list-project--padding">
                      <li>Publicado: há 2 horas</li>
                      <li>Segmento(s) Loja Comércio</li>
                      <li>Propostas: 1</li>
                      <li>Ultima resposta: há 1 hora</li>
                    </ul>
    
                    <p class="article__text-secondary article__text-secondary--padding">
                      Descrição da promoção aqui, um texto de normalmente três linhas explicando a
                      promoção, falando mais sobre ela etc, normalmente 3 linhas. Descrição da 
                      promoção aqui, um texto de normalmente três linhas explicando promoção, 
                      falando...
                    </p>
    
                    <div class="type__propost-block flexWrap">
                      <div class="background__blue-element">capital de giro</div>
                      <div class="background__blue-element">financiamento</div>
                      <div class="background__blue-element">Empréstimo para assalariado</div>
    
                    </div>
    
                    <footer class="perfil__card-block">
    
                      <div class="perfiL__card-information-block">
                        <img src="../assets/images/avatar.png" alt="profile image" width="40" height="40" />
                        <span class="perfil__name-element">P.P</span>
                        <img src="../assets/images/imagesMain/starsProfile.png" alt="stars__evaluation" width="25" height="25"/>
                        <img src="../assets/images/imagesMain/starsProfile.png" alt="stars__evaluation" width="25" height="25"/>
                        <img src="../assets/images/imagesMain/starsProfile.png" alt="stars__evaluation" width="25" height="25"/>
                        <img src="../assets/images/imagesMain/starsProfile.png" alt="stars__evaluation" width="25" height="25"/>
                        <img src="../assets/images/imagesMain/estrelameia.png" alt="stars__evaluation" width="25" height="25"/>
                        <span class="text__evaluation-element">4.58 / 5</span>
                        <img src="../assets/images/imagesMain/brasil.png" alt="image with a green background with a yellow center inside this yellow center with a blue globe with stars inside, represents the flag of Brazil" width="25" height="25" />
                        <span class="text__evaluation-element">Brasil</span>
                      </div>
                      
                      <span class="inappropriate--block">
                        <img src="../assets/images/imagesMain/infoGray.png" alt="background gray color white" width="25" height="25"/>
                        Marcar como inapropriado
                      </span>
    
                    </footer>
                  </div>
    
                  <div class="card__project-block">
    
                    <header class="header__premium-block justifyContentBetween">
    
                        <h2 class="premium__title-elements">
                          Procuro sociedade franquia de café to go itaim bibi
                        </h2>
                      <div class="make__proposal-block">
                        <button class="button button--orangePropost">Fazer uma proposta</button>
                        <div class="title__prices-element alignItemsCenter">
                          R$ 100.000 - 130.000
                          <img src="../assets/images/imagesMain/info.png" alt="info color white background blue" width="25" height="25"/>
                        </div>
                      </div>
    
                    </header>
    
                    <ul class="ul__list-project ul__list-project--padding">
                      <li>Publicado: há 2 horas</li>
                      <li>Segmento(s) Empresa</li>
                      <li>Propostas: 0</li>
                    </ul>
    
                    <p class="article__text-secondary article__text-secondary--padding">
                      Descrição da promoção aqui, um texto de normalmente três linhas explicando a
                      promoção, falando mais sobre ela etc, normalmente 3 linhas. Descrição da 
                      promoção aqui, um texto de normalmente três linhas explicando promoção, 
                      falando...
                    </p>
    
    
                    <div class="list__about-block justifyContentBetween alignItemsStart flexWrap">
    
                      <ul class="ul__about-block">
                        <li>categoria:</li>
                        <li>subcategoria:</li>
                        <li>documentação:</li>
                        <li>estágio da empresa:</li>
                        <li>parcelamento:</li>
                        <li>justificativa:</li>
                      </ul>
                      <img src="../assets/images/imagesMain/home.webp" alt="home" width="250" height="200" />
                    </div>
                    <a href="#" class="collpsar">colappsar:</a>
    
    
                    <div class="type__propost-block type__propost-block--padding flexWrap">
                      <div class="background__blue-element">capital de giro</div>
                      <div class="background__blue-element">financiamento</div>
                      <div class="background__blue-element">Empréstimo para assalariado</div>
    
                    </div>
    
                    <footer class="perfil__card-block">
    
                      <div class="perfiL__card-information-block">
                        <img src="../assets/images//avatar.png" alt="profile image" width="40" height="40" />
                        <span class="perfil__name-element">P.P</span>
                        <img src="../assets/images/imagesMain/starsProfile.png" alt="stars__evaluation" width="25" height="25"/>
                        <img src="../assets/images/imagesMain/starsProfile.png" alt="stars__evaluation" width="25" height="25"/>
                        <img src="../assets/images/imagesMain/starsProfile.png" alt="stars__evaluation" width="25" height="25"/>
                        <img src="../assets/images/imagesMain/starsProfile.png" alt="stars__evaluation" width="25" height="25"/>
                        <img src="../assets/images/imagesMain/estrelameia.png" alt="stars__evaluation" width="25" height="25"/>
                        <span class="text__evaluation-element">4.58 / 5</span>
                        <img src="../assets/images/imagesMain/brasil.png" alt="image with a green background with a yellow center inside this yellow center with a blue globe with stars inside, represents the flag of Brazil" width="25" height="25" />
                        <span class="text__evaluation-element">Brasil</span>
                      </div>
                      
                      <span class="inappropriate--block">
                        <img src="../assets/images/imagesMain/infoGray.png" alt="background gray color white" width="25" height="25"/>
                        Marcar como inapropriado
                      </span>
    
                    </footer>
                  </div>
    
                  <nav class="nav__links-block">
    
                    <ul class="ul__pages-block justifyContentCenter flexWrap">
                      <li>
                        <a href="#">
                          <img src="../assets/images/imagesMain/right.png" alt="left seta" width="25" height="15" />
                          Anterior
                        </a>
                      </li>
                      <li class="li__primary-element">
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
                        <a href="#">
                          Próxima
                          <img src="../assets/images/imagesMain/right.png" id="right__image" alt="left seta" width="25" height="15" />
                        </a>
    
                      </li>
    
                    </ul>
                  </nav>
              </div>
            </section>

          </div>
        </main>


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


                
        <!--
          Modal create perfil
        -->
        <footer class="leave__modal-block directionColumn alignItemsCenter justifyContentCenter">

          <div class="image__leave-element">
            <img id="close__element-perfil" src="../assets/images/leaveModal.png" alt="leave modal" width="30" height="30" />
          </div>

          <div class="fill__profile-block directionColumn alignItemsCenter">
            <button class="fill__button-element">Prencha seu perfil</button>
            <span class="fill__text-element">Com seu perfil completo e aprovado você poderá começar a enviar propostas</span>
          </div>
        </footer>
        <script src="../assets/scriptbase/GlobalTelaframe4.js"></script>
    </div>
</body>
</html>
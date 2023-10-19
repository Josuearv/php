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

        <section class="type__propost-background">
            <div class="type__propost-container">
                <div class="type__propost-block">
                    <div class="chip chip-filter">
                        <input type="radio" name="sizes" id="mensagens"  checked/>
                        <label for="mensagens">Projeto como investidor</label>
                    </div>
                    <div class="chip chip-filter">
                        <input type="radio" name="sizes" id="chat"/>
                        <label for="chat">Projeto como  credor</label>
                    </div>
                </div>
                <button>Publique um projeto</button>
            </div>
        </section>
        
        <section class="invest-background">
            <div class="invest-container">
                <h1>Quanto você quer investir?</h1>
                <div class="card__block">
                    <aside class="aside-background">
                        <div class="aside-container">

                          <span class="title__asides">
                            Status
                          </span>

                            <span class="title__aside">
                              Status
                              <img src="../assets/images/imageRIght.png" id="image__top" alt="image__right-bottom" width="10" height="10"/>
                            </span>
                            
                            <select class="select__options">
                                <option value>Todas</option>
                                <option>teste1</option>
                                <option>teste2</option>
                                <option>teste3</option>
                                <option>teste4</option>
                                <option>teste5</option>
                            </select>

                            <span class="title__asides">
                              Mensagens
                            </span>

                            <span class="title__aside-mensager">
                              Mensagens
                              <img src="../assets/images/imageRIght.png" id="image__mensager-top" alt="image__mensagem-bottom" width="10" height="10"/>
                            </span>
                            
                            <div class="filter__propost">
                                <div class="filter__propost-flex">
                                    <div class="mchip propost__f">
                                        <input type="radio" name="size" id="todoss"  checked/>
                                        <label for="todoss">Todos</label>
                                    </div>
    
                                    <div class="mchip propost__f propost__f-read">
                                        <input type="radio" name="size" id="read"/>
                                        <label for="read">Sem ler</label>
                                    </div>
                                </div>

                                <div class="mchip propost__f propost__f--fixed propost__f--margin">
                                    <input type="radio" name="size" id="project__mensagem"/>
                                    <label for="project__mensagem">Em conversa</label>
                                </div>
                            </div>
                            
                            <span class="block__text-inadimplentes">
                                <input type="checkbox" />
                                <label>Inadimplentes</label>
                            </span>

                        </div>
                        <span class="title__filters">Filtros</span>
                    </aside>

                    <section class="list__propost-background">
                      <div class="list__propost-container">

                        <div class="card__information-propost">
                          <span class="text__title-none">
                            Procuro Sócio Investidor para Oficina de Conversão
                            <img src="../assets/images/imageRIght.png" id="menu__projects-open" alt="" width="15" height="15"/>
                          </span>
                          <div class="card__informaition-titles">
                            <h3>Procuro Sócio Investidor para Oficina de Conversão</h3>
                            <span class="title__mensagem">
                              19 mensagens 
                              ( <a class="link__ref" href="#">0 novo</a> ) - tipo: preço fixo
                            </span>
                            <span class="title__mensagem title__mensagem-margin">Publicado: há 3 semanas</span>
                            <a class="link__ref link__ref--underline" href="#">Enviar mensagem para todos os investidores</a>
                            <div class="analyzing__proposal-backgrounds">Analisando propostas</div>

                          </div>

                          <div class="analyzing__propost-information">
                            <div class="information__propost-menu">
                              <div class="analyzing__proposal-background">Analisando propostas</div>
                              <img 
                                src="../assets/images/menu.png" 
                                alt="3 black round polka dots" 
                                width="30" 
                                height="30"
                                class="menu__proposal-active"
                                name="analisandoProposta"
                                />
                            </div>
                            <div class="link__ref link__ref-max">Ver todos os investidores interessados</div>
                            
                            <div class="card__menu card__primary" id="card-menu">
                              <div class="right"></div>
                              <ul class="card__menu-container">
                                 <li>Abrir abritagem</li>
                                 <li>Solicitar Cobrança</li>
                                 <li>Parcelas Pagas</li>
                                 <li>Ir para a caixa de entrada</li>
                                 <li>Avaliar Empresario</li>
                              </ul>
                           </div>
                          </div>

                          
                        </div>


                        <div class="card__information-propost">
                          <span class="text__title-none">
                            Procuro Sócio Investidor para Oficina de Conversão
                            <img src="../assets/images/imageRIght.png" id="menu__projects-open" alt="" width="15" height="15"/>
                          </span>
                          <div class="card__informaition-titles">
                            <h3>Procuro Sócio Investidor para Oficina de Conversão</h3>
                            <span class="title__mensagem">
                              19 mensagens 
                              ( <a class="link__ref" href="#">0 novo</a> ) - tipo: preço fixo
                            </span>
                            <span class="title__mensagem title__mensagem-margin">Publicado: há 3 semanas</span>
                            <a class="link__ref link__ref--underline" href="#">Enviar mensagem para todos os investidores</a>
                            <div class="analyzing__proposal-red analyzing__proposal-red--none">Não listado</div>

                          </div>

                          <div class="analyzing__propost-information">
                            <div class="information__propost-menu">
                              <div class="analyzing__proposal-red">Não listado</div>
                              <img 
                                src="../assets/images/menu.png" 
                                alt="3 black round polka dots" 
                                width="30" 
                                height="30"
                                name="naoListado"
                                class="menu__proposal-active"
                                />
                            </div>
                            <div class="link__ref link__ref-max">Postar novamente</div>
                            
                            <div class="card__menu card__secondary" id="card-menu">
                              <div class="right"></div>
                              <ul class="card__menu-container">
                                 <li>Abrir abritagem</li>
                                 <li>Solicitar Cobrança</li>
                                 <li>Parcelas Pagas</li>
                                 <li>Ir para a caixa de entrada</li>
                                 <li>Avaliar Empresario</li>
                              </ul>
                           </div>

                          </div>

                        </div>

                        <div class="card__information-propost">
                          <span class="text__title-none">
                            Procuro Sócio Investidor para Oficina de Conversão
                            <img src="../assets/images/imageRIght.png" id="menu__projects-open" alt="" width="15" height="15"/>
                          </span>
                          <div class="card__informaition-titles">
                            <h3>Procuro Sócio Investidor para Oficina de Conversão</h3>
                            <span class="title__mensagem">
                              19 mensagens 
                              ( <a class="link__ref" href="#">0 novo</a> ) - tipo: preço fixo
                            </span>
                            <span class="title__mensagem title__mensagem-margin">Publicado: há 3 semanas</span>
                            <a class="link__ref link__ref--underline" href="#">Enviar mensagem para todos os investidores</a>
                            <div class="analyzing__proposal-red analyzing__proposal-red--padding analyzing__proposal-red--opacity">Rejeitado</div>
                          </div>

                          <div class="analyzing__propost-information">
                            <div class="information__propost-menu">
                              <div class="analyzing__proposal-red analyzing__proposal-red--padding">Rejeitado</div>
                              <img 
                                src="../assets/images/menu.png" 
                                alt="3 black round polka dots"
                                width="30" 
                                height="30"
                                name="rejeitado"
                                class="menu__proposal-active"
                                />
                            </div>
                            <div class="link__ref link__ref-max">Ver projeto</div>
                            
                            <div class="card__menu card__reject" id="card-menu">
                              <div class="right"></div>
                              <ul class="card__menu-container">
                                 <li>Abrir abritagem</li>
                                 <li>Solicitar Cobrança</li>
                                 <li>Parcelas Pagas</li>
                                 <li>Ir para a caixa de entrada</li>
                                 <li>Avaliar Empresario</li>
                              </ul>
                           </div>

                          </div>

                        </div>

                        <div class="card__information-propost">
                          <span class="text__title-none">
                            Procuro Sócio Investidor para Oficina de Conversão
                            <img src="../assets/images/imageRIght.png" id="menu__projects-open" alt="" width="15" height="15"/>
                          </span>
                          <div class="card__informaition-titles">
                            <h3>Procuro Sócio Investidor para Oficina de Conversão</h3>
                            <div class="analyzing__proposal-red analyzing__proposal-red--purple">Promovido por nellbux</div>
                            <span class="title__mensagem">
                              19 mensagens 
                              ( <a class="link__ref" href="#">0 novo</a> ) - tipo: preço fixo
                            </span>
                            <span class="title__mensagem title__mensagem-margin">Publicado: há 3 semanas</span>
                          </div>

                          <div class="analyzing__propost-information">
                            <div class="information__propost-menu">
                              <div class="analyzing__proposal-red analyzing__proposal-red--margin">Cancelado</div>
                              <img 
                                src="../assets/images/menu.png"
                                alt="3 black round polka dots" 
                                width="30" 
                                height="30"
                                name="cancelado"
                                class="menu__proposal-active"
                                />
                            </div>
                            <div class="link__ref link__ref-max">Criar projeto semelhante</div>
                            <div class="card__menu card__cancel" id="card-menu">
                              <div class="right"></div>
                              <ul class="card__menu-container">
                                 <li>Abrir abritagem</li>
                                 <li>Solicitar Cobrança</li>
                                 <li>Parcelas Pagas</li>
                                 <li>Ir para a caixa de entrada</li>
                                 <li>Avaliar Empresario</li>
                              </ul>
                           </div>
                          </div>

                        </div>

                        


                        
                      </div>
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
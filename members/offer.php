<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="../assets/stylebase/cssStyleModal/boot.css" />
    <link rel="stylesheet" href="../assets/stylebase/cssStyleModal/grid.css" />
    <link rel="stylesheet" href="../assets/stylebase/cssStyleModal/estilo.css" />
    
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap"
        rel="stylesheet"
    />

    <link rel="stylesheet" href="../assets/stylebase/index.css" />
    <link rel="stylesheet" href="../assets/stylebase/index-3.css" />

    <script src="../assets/scriptbase/jquery.js"></script>
    <script src="../assets/scriptbase/vue2/vue.js"></script>
    <title>Nell bux</title>
</head>
<body>

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

    <section class="look__people">
        <div class="look__peoples-container">
            
            
          <h1 class="text__bold-color text__bold-size">Procuro sócio Investidor para Oficina de Conversão de Veículos</h1>
            
          <div class="block__information-medals">
                <div class="block__information-medals-container">

                    <div class="block__imagesS">
  
                        <div class="block__logo-name">
                          <div class="background__apple">
                            <img src="../assets/images/imagesPageIndex-3/apple.png" alt="bitten apple" width="15" height="15"/>
                          </div>
                          <span class="text__bold-name">Américo T.</span>
                          <img src="../assets/images/imagesPageIndex-3/brasil.png" alt="flag" width="20" height="20"/>
                          <img src="../assets/images/imagesPageIndex-3/flags.png" alt="flags" width="20" height="20"/>
                        </div>
  
                        <div class="honor__block">
                          <img 
                            src="../assets/images/imagesPageIndex-3/trofeu.png" 
                            alt="medals" 
                            width="40" 
                            height="40" />
                          <div class="title__block-honor">
                            <span class="honor__titleBold">Gold</span>
                            <span class="honor__titleOpaci">Score</span>
                          </div>
                        </div>
  
                        <div class="evaluation__block">
                          <picture>
                            <img 
                              src="../assets/images/imagesPageIndex-3/star.png" 
                              alt="star rating" 
                              width="20"
                              height="20"
                              />
                            <img 
                              src="../assets/images/imagesPageIndex-3/star.png"
                              alt="star rating" 
                              width="20"
                              height="20"
                            />
                            <img 
                              src="../assets/images/imagesPageIndex-3/star.png"
                              alt="star rating" 
                              width="20"
                              height="20"
                              />
                            <img 
                              src="../assets/images/imagesPageIndex-3/star.png"
                              alt="star rating" 
                              width="20"
                              height="20"
                              />
                            <img
                              src="../assets/images/imagesPageIndex-3/estrelameia.png"
                              alt="star rating"
                              width="20"
                              height="20"
                              />
          
                            </picture>
                            <span class="honor__titleOpaci honor__titleOpaci--padding">Avaliação</span>
                        </div>
  
                        <div class="sucess__project-all">
                          <img src="../assets/images/imagesPageIndex-3/circulo.png" alt="bottomless circle with orange border" width="40" height="40" />
                          <div class="title__block-honor">
                            <span class="honor__titleBold">66%</span>
                            <span class="honor__titleOpaci">projetados bem sucedidos</span>
                          </div>
                        </div>

                        <span id="end__text-block">Ultimo acesso há 13 horas Registrado desde Fevereiro de 2022</span>
  
                    </div>
                    <hr>
                    <div class="details__block">
                      <span class="title__details-color title__details-color--yellow">Analisando propostas</span>
                      <span class="title__details-color title__details-color--blue">Ampliar detalhes</span>
                    </div>

                </div>
          </div>

          <div class="block__button-questions">
                <button class="button__questions button__questions--orange">
                    <img src="../assets/images/imagesPageIndex-3/iconFolha.png" alt="document sheet to write something down" width="25" height="25" />
                    Realizar uma proposta
                </button>
                <button class="button__questions button__questions--gray">
                    <img src="../assets/images/imagesPageIndex-3/iconFolha.png.png" alt="faq suggestion and question"  width="25" height="25"/>
                    Fazer pergunta
                </button>
          </div>

        </div>
    </section>

    <main class="main__information">
      <div class="main__information-container">
        <section class="main__information-sections">

          <section class="proposal__background">
            <div class="proposal__background-container">
              <h2 class="text__bold-color text__bold-color--proposal">Proposta</h2>
              <p>
                Somos  Américo Tecnologia, estamos a 10 anos no mercado de tecnologia. Na nossa equipe temos profissionaisque já trabalharam em grandes empresas, como: Schincariol, Petrobras, Stefanini entre outras.
                Trabalhamos com criação, manutenção e customização de sites, lojas virtuais...
              </p>
            </div>
          </section>


          <section class="budget__background">
            <div class="budget__background-container">
              <h2 class="text__bold-color text__bold-color--proposal">Orçamento</h2>
              <p>Faça seu orçamento estimando as horas necessárias para realizar o projeto ou inserindo o valor totoal a ser cobrado do cliente.</p>
              <h3 class="text__bold-color text__bold-color-budget--size">Eu quero contratar a garantia do Nellbux para esse projeto</h3>
              
              <div class="button__active-block">
                <input type="checkbox" />
                <div class="text__information-button-active">
                  <p>Se você habilitar essa ação, a garantia nellbux será incluida caso jonas não pague o seu empréstimo. sendo reembolsado o valor total do empréstimo</p>
                </div>
              </div>


              <div class="block__taxa-money">

                <div class="input_set-money">

                  <div class="input-set-money-information">
                    <h4 class="text__bold-color text_-bold-color-money--size">Taxa de juros</h4>
                    <a href="#">como estimar?</a>
                  </div>

                  <div class="input__money-align">
                    <div class="input__money-align-before">
                      <span>%</span>
                    </div>
                    <input type="number" placeholder="0,00" />
                  </div>

                </div>

                <div class="input_set-money">

                  <div class="input-set-money-information">
                    <h4 class="text__bold-color text_-bold-color-money--size">Quantas parecelas</h4>
                    <a href="#">como estimar?</a>
                  </div>

                  <div class="input__money-align">
                    <div class="input__money-align-before">
                      <span>x</span>
                    </div>
                    <input type="number" placeholder="0,00" />
                  </div>

                </div>

                <div class="input_set-money">

                  <div class="input-set-money-information">
                    <h4 class="text__bold-color text_-bold-color-money--size">Valor da parcela</h4>
                    <a href="#">como estimar?</a>
                  </div>

                  <div class="input__money-align">
                    <div class="input__money-align-before">
                      <span>R$</span>
                    </div>
                    <input type="number" placeholder="0,00" />
                  </div>

                </div>


              </div>

              <div class="block__taxa-money">

                <div class="input_set-money">

                  <div class="input-set-money-information">
                    <h4 class="text__bold-color text_-bold-color-money--size">Valor total do empréstimo</h4>
                  </div>

                  <div class="input__money-align">
                    <div class="input__money-align-before">
                      <span>R$</span>
                    </div>
                    <input type="number" placeholder="0,00" />
                  </div>

                </div>

                <div class="input_set-money">

                  <div class="input-set-money-information">
                    <h4 class="text__bold-color text_-bold-color-money--size">Custo do serviço</h4>
                    <a href="#">como estimar?</a>
                  </div>

                  <div class="input__money-align">
                    <div class="input__money-align-before">
                      <span>x</span>
                    </div>
                    <input type="number" placeholder="0,00" />
                  </div>

                </div>

                <div class="input_set-money">

                  <div class="input-set-money-information">
                    <h4 class="text__bold-color text_-bold-color-money--size">Você vai receber</h4>
                    <a href="#">como estimar?</a>
                  </div>

                  <div class="input__money-align">
                    <div class="input__money-align-before">
                      <span>R$</span>
                    </div>
                    <input type="number" placeholder="0,00" />
                  </div>

                </div>


              </div>

              <div class="text__information-value">
                <p>Este é o valor que mateus visualizará em sua proposta.</p>
                <a href="#">O que é isso</a>
              </div>
              
              <span id="title__lance-minum">Lance minimo: R$ 760,00</span>

            </div>
          </section>

          <form class="proposed__detail-background">
            <div class="proposed__detail-container">
                <h2 class="text__bold-color text__bold-color--proposal">Detalhes da proposta</h2>
                <h3 class="text__bold-color">Minha proposta</h3>
                <textarea id="area__proposed" name="my__propost" placeholder="Exemplo: OLá joão, meu nome é Carolina, sou designer gráfico especializada na criação de logos com mais de 10 anos de experiência, No meu perfil você poderá encontrar alguns trabalhos em destaquecomo: XXX, XXX, XXX. Além disso também poderá ver que tenho recebido somente 5 estrelas em minhasavaliações. Tenho disponibilidade para te entregar a proposta em 10 dias e fazer até 3 revisões. tambémfarei a entrega dos arquivos editáveis. Si quieres hablamos ahora mismo para poner en marcha el proyecto. Estamos en contacto"></textarea>
                <a href="#">como acionar?</a>

                <div class="send__file-single">
                  <h3 class="text__bold-color">Enviar arquivo avulso</h3>
                  <div class="block__send-file-single">
                    <span class="block__send-file-span">
                      <img src="../assets/images/imagesPageIndex-3/anexar__file.png" alt="" width="25" height="25"/>
                      Anexar um arquivo
                    </span>
                    <span class="block__send-file-span">
                      <img src="../assets/images/imagesPageIndex-3/file__favoritos.png" alt="" width="25" height="25"/>
                      Arquivos Favoritos
                    </span>
                  </div>
                </div>

                <h3 class="text__bold-color">Por quanto tempo você vai fazer esse empréstimo</h3>
                <input class="input__text-place" type="text" placeholder="Exemplo: 2 dias ou 3 meses" />

                <h3 class="text__bold-color">Qual o dia do vencimento da fatura</h3>
                <input class="input__text-place" type="text" placeholder="A data da fatura" />
            </div>
            <div class="button__block--submit">
              <button class="submit__button submit__button--orange">Enviar orçamento</button>
              <button class="submit__button submit__button--gray">Cancelar</button>
            </div>
          </form>
          
        </section>
        <aside class="bar__lateral-about">

          <div class="bar__lateral-container">
            
            <div class="bar__lateral__title">
              <h2 class="text__bold-color text__bold-color--orange">Como Funciona?</h2>
            </div>

            <span class="bar__lateral-align text__bold-color text__bold-color--lateral">
              <img id="margin__image--lateeral" src="../assets/images/imagesPageIndex-3/rosto.png" alt="" width="40" height="40" />
              Apresente-se
            </span>

            <p>É o seu momento de brilhar! conte ao..... considere....  credito ideal credito ideal credito ideal credito ideal</p>
            
            <button>
              <img src="../assets/images/imagesPageIndex-3/mensagemButton-100.png" alt="" width="40" height="40"/>
              CHAT
            </button>


            <span class="bar__lateral-align text__bold-color text__bold-color--lateral">
              <img id="margin__image--lateeral" src="../assets/images/imagesPageIndex-3/analise.png" alt="" width="40" height="40" />
              Analise o projeto
            </span>

            <p>Evite problemas desnecessarios. Deixe tudo bem claro ao alcance com valores, prazos e recursos necessários para liberação do investimento. Se você tem dúvidas sobre o mesmo. pode realizar uma consulta prévia.</p>
            
            <span class="bar__lateral-align text__bold-color text__bold-color--lateral">
              <img id="margin__image--lateeral" src="../assets/images/imagesPageIndex-3/mensagem.png" alt="" width="40" height="40" />
              Fale sobre seu investimento
            </span>

            <p>É muito importante que você dialogue com mateus dentro da plataforma isso servira como prova extra, mantenha todos feeds becks atualizados antes fechar proposta</p>
            
            
                        
            <span class="bar__lateral-align text__bold-color text__bold-color--lateral">
              <img id="margin__image--lateeral" src="../assets/images/imagesPageIndex-3/calendario.png" alt="" width="40" height="40" />
              Estipule um prazo
            </span>

            <p>O mais importante: não se esqueça de propor uma data do emprestimo com um dia de vencimento fatura</p>
            


          </div>

        </aside>
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
    <script>
      let valuOpen = false
      let valueAsideMenu = false
      let clicouNotification = false
      let clicouPerfil = false
      let FilterSearch = false

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
</body>
</html>
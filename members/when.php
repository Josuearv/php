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
    <link rel="stylesheet" href="../assets/style/when.css?id=<?php echo rand();?>" />
    
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
                  <li><a href="dashboard.php">Area de Membro</a></li>
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
            
            <div class="account__received--background">
                <div class="account__received--container">
                    <img src="../assets/images/index2/moeda.png" alt="Coin with a transparent background with a white border and in the middle it has the dollar sign"  width="25" height="25"/>
                    <span class="receipts__text">recebimentos.</span>
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
                              <img src="../assets/images/index2/seta.png" alt="image of a blue color down arrow" width="20" height="20"/>
                          </div>

                          <div class="select select--width">
                              <select>
                                  <option value>contatos</option>
                              </select>
                              <img src="../assets/images/index2/seta.png" alt="image of a blue color down arrow" width="20" height="20"/>
                          </div>

                          <div class="select select__secondary--width">
                              <select>
                                  <option value>modalidade</option>
                              </select>
                              <img src="../assets/images/index2/seta.png" alt="image of a blue color down arrow" width="20" height="20"/>
                          </div>

                          <div class="select select__tri--width">
                              <select>
                                  <option value>status</option>
                              </select>
                              <img src="../assets/images/index2/seta.png" alt="image of a blue color down arrow" width="20" height="20"/>
                          </div>

                      </section>
                  </div>
      
                  <div class="money__account">
                      <div class="money__account-container">
                          <div class="money__block net__received">
                              <span class="title__money">líquido recebido no período</span>
                              <span class="money__result">
                                  R$ 0,00
                              </span>
                          </div>
      
                          <div class="money__block period__charges">
                              <span class="title__money">cobranças no periodo</span>
                              <span class="money__result">
                                  R$ 0,00
                              </span>
                          </div>
      
                          <div class="money__block receive__period">
                              <span class="title__money">a receber no período</span>
                              <span class="money__result">
                                  R$ 0,00
                              </span>
                          </div>
      
                          <div class="money__block money__moviment">
                              <span class="title__money title__moviment">saldo depositado</span>
                              <span class="money__result title__result--moviment">
                                  R$ 780,30
                              </span>
                              <a href="moves.php">consultar movimentações</a>
                          </div>
                      </div>

                  </div>
            
           
           
           <footer class="nav-background-visibled">
                    <div class="nav-background-container">
    
                        <div class="block__confirms" onclick="window.location.href='receipts.php';">
                            <input type="radio" name="sizesz" id="Receiveds" />
                            <label for="Receiveds">recebido</label>
                        </div>
    
                        <div class="block__confirms" onclick="window.location.href='when.php';">
                            <input type="radio" name="sizesz" id="receivables" checked/>
                            <label for="receivables">a receber</label>
                        </div>
    
                        <div class="block__confirms" onclick="window.location.href='collection.php';">
                            <input type="radio" name="sizesz" id="chargess" />
                            <label for="chargess">cobranças</label>
                        </div>
                    </div>
                </footer>
           
              </div>
            </div>
            
             <footer class="nav-background" style="height: inherit !important;border-top: 1px solid #EEEEEE;">
                <div class="nav-container">

                    <div class="block__confirm" onclick="window.location.href='receipts.php';">
                        <input type="radio" name="sizes" id="Received"/>
                        <label for="Received">recebido</label>
                    </div>

                    <div class="block__confirm" onclick="window.location.href='when.php';">
                        <input type="radio" name="sizes" id="receivable" checked/>
                        <label for="receivable">a receber</label>
                    </div>

                    <div class="block__confirm" onclick="window.location.href='collection.php';">
                        <input type="radio" name="sizes" id="charges" />
                        <label for="charges">cobranças</label>
                    </div>
                </div>
            </footer>
            
            
             
            <footer class="nav-background" style="margin-top: 25px;">
                
                
                 <div class="nav-container">
                    <img src="../assets/images/index3/faq.png" alt="round ball of black color with an i in the middle with transparent background" width="25" height="25"/>
                    <span>As cobranças realizadas pelo NellBux são feita apenas em dias uteis</span>
                </div>
                
            </footer>
            

        </section>

        <section class="no__receipts-background">
          <div class="no__receipts-container">
            <div class="calender">
              <div class="calender__container">
                
                <header class="header__calender">
                  
                  <div class="select__calender">
                    <select>
                      <option>abril/2022</option>
                    </select> 
                     <img src="../assets/images/index3/seta.png" alt="image of a blue color down arrow" width="20" height="20" />
                  </div>

                  <nav class="nav__calender">
                    <a href="receipts.php">acessar relatorio</a>
                    <div class="handle__choice">
                      <div class="chip__calender">
                        <input type="radio" name="sizess" id="charges__calender" checked/>
                        <label for="charges__calender">cobranças</label>
                      </div>
                      <div class="chip__calender">
                        <input type="radio" name="sizess" id="receipts__calender"/>
                        <label for="receipts__calender">recebimentos</label>
                      </div>
                    </div>
                  </nav>

                </header>

                <table class="table__calender">
                    <tr class="row__top">
                      <td>dom</td>
                      <td>seg</td>
                      <td>ter</td>
                      <td>qua</td>
                      <td>qui</td>
                      <td>sex</td>
                      <td>sab</td>
                    </tr>
  
                    <tr class="dary__row-calender dary__row-top dary__row-top--margin">
                      <td class="dary__background-red dary__color-gray">27</td>
                      <td class="dary__color-gray">28</td>
                      <td class="dary__color-gray">29</td>
                      <td class="dary__color-gray">30</td>
                      <td class="dary__color-gray">31</td>
                      <td class="dary__block-money">
                        1 abril
                        <div class="dary__block--left">R$0,00</div>
                      </td>
                      <td class="dary__background-red">2</td>
                    </tr>
  
                    <tr class="dary__row-calender dary__row-top">
                      <td class="dary__background-red">3</td>
                      <td class="dary__block-money">
                        4
                        <div class="dary__block--left">R$ 0,00</div>
                      </td>
                      <td class="dary__block-money">
                        5
                        <div class="dary__block--top">R$ 789,85 <br>2 emprestimos</div>
                      </td>
                      <td  class="dary__block-money">
                        6
                        <div class="dary__block--left">R$ 0,00</div>
                      </td>
                      <td  class="dary__block-money">
                        7
                        <div class="dary__block--top">R$ 2059,90 <br>5 emprestimos</div>
                      </td>
                      <td class="dary__block-money">
                        8
                        <div class="dary__block--left">R$ 0,00</div>
                      </td>
                      <td class="dary__background-red dary__color-gray">9</td>
                    </tr>
                    <tr class="dary__row-calender dary__row-top">
                      <td class="dary__background-red  dary__color-gray">10</td>
                      <td class="dary__block-money">
                        11
                        <div class="dary__block--left">R$ 0,00</div>
                      </td>
                      <td class="border__orange--active">
                        <div class="bary__border-radius">
                            12
                        </div>
                        <div class="dary__image-left">
                          <img src="../assets/images/index3/telefone.png" alt="bottomless border phone" width="20" height="20" />
                          sem cobranças
                        </div>
                      </td>
                      <td class=" dary__color-gray">13</td>
                      <td class=" dary__color-gray">14</td>
                      <td class=" dary__color-gray">15</td>
                      <td class="dary__background-red  dary__color-gray">16</td>
                    </tr>
                    <tr class="dary__row-calender dary__row-top">
                      <td class="dary__background-red dary__color-gray">17</td>
                      <td class="dary__color-gray">18</td>
                      <td class="dary__color-gray">19</td>
                      <td class="dary__color-gray">20</td>
                      <td class="dary__block-money dary__color-gray">
                        21
                        <div class="children__color-gray dary__block--top">Tiradentes</div>
                      </td>
                      <td class="dary__color-gray">22</td>
                      <td class="dary__background-red dary__color-gray">23</td>
                    </tr>
                    <tr class="dary__row-calender dary__row-top">
                      <td class="dary__background-red dary__color-gray">24</td>
                      <td class="dary__color-gray">25</td>
                      <td class="dary__color-gray">26</td>
                      <td class="dary__color-gray">27</td>
                      <td class="dary__color-gray">28</td>
                      <td class="dary__color-gray">29</td>
                      <td class="dary__background-red dary__color-gray" >30</td>
                    </tr>
                </table>

                <footer class="block__buttons-calender">
                  <a href="#">
                    <img src="../assets/images/index3/seta__left.png" alt="image of a blue color down arrow" width="20" height="20" />
                    anterior
                  </a>
                  <a href="#" class="color--gray">
                    próximo
                    <img src="../assets/images/index3/seta__right.png" alt="image of a blue color down arrow" width="20" height="20" />
                  </a>
                </footer>

              </div>
            </div>
            <aside class="aside__bar">
              
              <div class="aside__details-tel">
                <span class="text__details-weight">12 abril 2022</span>
                
                <hr class="aside__row">
                
                <div class="bloc__day-tel">
                  <img src="../assets/images/index3/telefone.png" alt="bottomless border phone" width="20" height="20" />
                  <span class="text__charges">cobranças de hoje</span>
                </div>

                <hr class="aside__row">


                <div class="text__checkout">Confira suas cobranças realizadas hoje.</div>
              </div>

              <footer>
                <a href="#" class="color-green">acessar mais detalhes</a>
              </footer>

              
            </aside>
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
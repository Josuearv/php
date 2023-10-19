<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Poppins:ital,wght@0,200;0,300;0,400;0,500;1,400&display=swap" rel="stylesheet">

     <link rel="stylesheet" href="./assets/stylebase/cssStyleModal/boot.css" />
     <link rel="stylesheet" href="./assets/stylebase/cssStyleModal/grid.css" />
     <link rel="stylesheet" href="./assets/stylebase/cssStyleModal/estilo.css" />


    <link rel="stylesheet" href="./assets/style/machines.css" />
    <link rel="stylesheet" href="./assets/style/boxheader.css" />
    
    <script src="./assets/scriptbase/jquery.js"></script>
   
    
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
          
          
        </aside>
    
        <header class="header__block">
            <div class="header__container-block">
                <img src="./assets/images/imagesHeader/logo.png" alt="logo"/>
                <nav class="nav__block">
                    <ul class="ul__block">
                            <li class="li__primary-element">
                                <a href="#">Ṕrincipal</a>
                                <img src="./assets/images/imagesIndex3/setaBottom.png" alt="arrow down" width="15" height="15"/>
                            </li>
                            <li>
                                <a href="#">Abrir conta poupança</a>
                            </li>
                            <li>
                                <a href="#">Regras de uso</a>
                            </li>
                            <li>
                                <a href="#">Ranks</a>
                            </li>
                            <li>
                                <a href="#">Contato</a>
                            </li>
                    </ul>
                    <button class="button button--bo">Entrar</button>
                </nav>

                <div id="bt-abrir-menu-mobile" class="exit__menu">
                    <span class="material-icons">menu</span>
                  </div>
            </div>
        </header>
    
        <section class="section__business-block">
            <div class="business__container-block">
                <h1 class="business__text-element">uma maquininha livre de taxas para seu negocio</h1>
                <div class="cards__blocks">
                    <div class="card__block">
                        <div class="image__text-block">
                            <img src="./assets/images/imagesIndex2/seo.png" alt=""  width="60" height="60"/>
                        </div>
                        Taxa zero
                    </div>
                    <div class="card__block">
                        <div class="image__text-block">
                            <img src="./assets/images/imagesIndex2/circulado.png" alt="" width="60" height="60" />
                        </div>
                        Maquininhas com 5 anos de garantia
                    </div>
                    <div class="card__block">
                        <div class="image__text-block">
                            <img src="./assets/images/imagesIndex2/box.png" alt="" width="60" height="60"/>
                            <span class="text__image-element">FRETE</span>
                        </div>
                        Entregar rápida garantida
                    </div>
                    <div class="card__block">
                        <div class="image__text-block">
                            <img src="./assets/images/imagesIndex2/carao.png" alt="" width="60" height="60"/>
                            <span class="text__image-element--mod">CARTÃO DA CONTA</span>
                        </div>
                        Ao adquirir Qualquer maquininha
                    </div>
                </div>
            </div>
        </section>
        
        <section class="section__machine-block">
            <div class="machine__container-block">
    
                <div class="card__machine-block">
                    <div class="card__machine-container">
                        <div class="off__price">
                            <div class="border__of-price">
                                <span class="off__text">64</span>
                            </div>
                        </div>
                        <img src="./assets/images/imagesIndex2/maquininha.png" alt="" width="300" height="300" />
                        <hr>
                        <div class="information__mini">
                            <h2 class="information__text">
                                <i class="italic__texts">minizinha</i>
                            3
                            </h2>
                            <span class="money__text">
                                <span class="title__money-element">12</span>
                                <span class="money__text--green">
                                    R$
                                    <b class="b__size">8</b>
                                    <b class="b__size b__size-size">,90</b>
                                </span>
        
                            </span>
        
                            <span class="text__orange">à vista por R$ 106,80</span>
                            <span class="text__blue-size">disponivel apenas investidores Gold</span>
                            <button class="button--size">Peça já</button>
                            <a href="#" class="about__more">Saiba Mais</a>
                        </div>
                    </div>
                </div>
    
                <div class="card__machine-block">
                    <div class="card__machine-container">
                        <div class="off__price">
                            <div class="border__of-price">
                                <span class="off__text">50</span>
                            </div>
                        </div>
                        <img src="./assets/images/imagesIndex2/maquininha.png" alt="" width="300" height="300" />
                        <hr>
                        <div class="information__mini">
                            <h2 class="information__text">
                                <i class="italic__textsS">minizinha NFC</i>
                            
                            </h2>
                            <span class="money__text">
                                <span class="title__money-element">12</span>
                                <span class="money__text--green">
                                    R$
                                    <b class="b__size">4</b>
                                    <b class="b__size b__size-size">,90</b>
                                </span>
        
                            </span>
        
                            <span class="text__orange">à vista por R$ 58,80</span>
                            <span class="text__blue-size">disponivel apenas investidores Gold</span>
                            <button class="button--size">Peça já</button>
                            <a href="#" class="about__more">Saiba Mais</a>
                        </div>
                    </div>
                    <footer class="footer__machine-block">
                        <span class="text__cell-phone">
                            <img src="./assets/images/imagesIndex2/celular.png" alt="cell" width="30" height="30" />
                            Necessita de celular ou tablet com internet
                        </span> 
                    </footer>
                </div>
                
    
            </div>
        </section>
    
    
        <footer class="footer__information-block">
            <div class="information-container">
                <span>* Maquinha não possui aluguel ou taxas sobre vendas o valor será depositado integral no final prazo.</span>
               <ul class="ul__information">
                   <li>1. Válido para vendas de debito e credito não há taxas ou aluguel sobre as vendas"PRAZO DE RECEBIMENTO" até 40 dias uteis para debito e credito em sua conta nellbux</li>
               
                   <li>2. Importante: Condição é válida apenas para as investidores Gold</li>
               </ul>
            </div>
        </footer>

               <!-- jQuery Modal -->

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
                
       
                
        
                
        

    </div>

</body>
</html>
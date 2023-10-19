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
    
    <link rel="stylesheet" href="./assets/style/affiliated.css?xc=esdy" />
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

        <header class="header__block header__block--position">
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
    
        <main class="main__block">
            <div class="container__main-block">
                <div class="information__affiliate-block">
                    <h1 class="information__title-element">Programa de afliados</h1>
                    <p class="information__text-element">Recomendo o NellBux, para seus amigos e familiares, ganhe moedas de forma ilimitada pelos novos usuários que você indicar</p>
                     <a href="signup.php"><button class="button__participate">cadastre-se agora</button></a>
                </div>
                <iframe width="850" height="400" src="https://www.youtube.com/embed/4pLl0xUU3eg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </main>
    
        <section class="section__cards-block">
            <div class="cards__container-block">
                
                <div class="card-block">
                    <img src="./assets/images/imagesIndex4/listaTarefa.png" alt="task" width="40" height="40"/>
                    <a href="signup.php"><span class="card__title-element">Participar</span></a>
                    <p class="card__text-element">
                        Faça seu registro, preencha
                        <a href="#">este formulário</a>
                        com todas as informações
                    </p>
                </div>
    
                <div class="card-block">
                    <img src="./assets/images/imagesIndex4/star.png" alt="task" width="40" height="40"/>
                    <span class="card__title-element">Enchaminhar</span>
                    <p class="card__text-element">
                        Compartilhe seu link de indicação exclusivo nas redes sociais
                    </p>
                </div>
    
                <div class="card-block">
                    <img src="./assets/images/imagesIndex4/box.png" alt="task" width="40" height="40"/>
                    <span class="card__title-element">Receber</span>
                    <p class="card__text-element">
                        Receber moedas pelos acessos e registros dos usuários indicados
                    </p>
                </div>
            
            </div>
        </section>
    
        <section class="list__nell">
            <div class="list__nell-container">
                <ul class="ul__nell-block">
                    <li>
                        <img src="./assets/images/imagesIndex4/certo.png" alt="certo" width="20" height="20"/>
                        Ganhe moedas por indicar novos usuários do NellBux. Os ganhos são ilimitados confia os valores
                    </li>
                    
                    <li class="li__element-spacing">- Até R$ 0,05 por clique único (CPC)</li>
                    <li class="li__element-spacing">- Até R$ 0,20 para cada 1000 views (CPM)</li>
                    <li class="li__element-spacing">- Até R$ 10,00 de comissão (CPA)</li>
                   
                    <li>
                        <img src="./assets/images/imagesIndex4/certo.png" alt="certo" width="20" height="20"/>
                        As faça seus saques apartir de R$ 0,01 centavo :)
                    </li>
    
                    <li>
                        <img src="./assets/images/imagesIndex4/certo.png" alt="certo" width="20" height="20"/>
                        Oferece descontos no primeiro ano para os usuários que você indicar
                    </li>
                </ul>
            </div>
        </section>
    
        <section class="frenquently__asked-block">
            <div class="frenquently__container-block">
                <h2 class="frenquently__title-element">Perguntas frequentes sobre indicações</h2>
    
                <ul class="ul__about-block">

                    <li class="li__border-element li__modal-active">
                        <div id="li__text-block">
                            O programa de indicações esta disponivel em quais paises/regiões?
                            <img src="./assets/images/imagesIndex4/seta.png" alt="seta" width="25" height="25"/>
                        </div>

                        <div class="open__modal-nav">
                            <ul class="ul__openModal-block">
                                <li>teste teste teste teste teste teste teste</li>
                            </ul>
                        </div>

                    </li>

                    <li class="li__modal-active">
                        <div id="li__text-block">
                            Onde está meu link de indicação
                            <img src="./assets/images/imagesIndex4/seta.png" alt="seta" width="25" height="25"/>
                        </div>

                        <div class="open__modal-nav">
                            <ul class="ul__openModal-block">
                                <li>teste teste teste teste teste teste teste</li>
                            </ul>
                        </div>

                    </li>

                    <li class="li__modal-active">
                        <div id="li__text-block">
                            Quanto posso ganhar?
                            <img src="./assets/images/imagesIndex4/seta.png" alt="seta" width="25" height="25"/>
                        </div>

                        <div class="open__modal-nav">
                            <ul class="ul__openModal-block">
                                <li>teste teste teste teste teste teste teste</li>
                            </ul>
                        </div>

                    </li>

                    <li class="li__modal-active">
                        <div id="li__text-block">
                            Quando vou receber?
                            <img src="./assets/images/imagesIndex4/seta.png" alt="seta" width="25" height="25"/>                        
                        </div>
                        <div class="open__modal-nav">
                            <ul class="ul__openModal-block">
                                <li>teste teste teste teste teste teste teste</li>
                            </ul>
                        </div>

                    </li>

                    <li class="li__modal-active">
                        <div id="li__text-block">
                            Posso monetizar meu website ou blog com programa de afiliados?
                            <img src="./assets/images/imagesIndex4/seta.png" alt="seta" width="25" height="25"/>
                        </div>
                       
                        <div class="open__modal-nav">
                            <ul class="ul__openModal-block">
                                <li>teste teste teste teste teste teste teste</li>
                            </ul>
                        </div>

                    </li>
                </ul>
            </div>
        </section>
    
        <footer class="footer__block">
            <p class="footer__text-element">
                Para mais informações, acesse
                <a href="#">central de suporte</a>
                veja também os 
                <a href="#">termos</a>, se preferir entre 
                em contato diretamente <a href="#">conosco</a>
            </p>
            <a href="signup.php"><button class="button__go">cadastre-se agora</button></a>
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
        
        
        <script src="./assets/scriptbase/GlobalTelaframe4.js"></script>
    </div>
</body>
</html>
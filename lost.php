<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" href="./assets/stylebase/cssStyleModal/estilo.css" />

  <link rel="stylesheet" href="./assets/style/index-9forgotPassword.css?xc=c1" />
  <link rel="stylesheet" href="./assets/style/flex.css" />

  <title>Nell bux</title>

  <script src="./assets/scriptbase/jquery.js"></script>

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
          <li><a href="#">Area Membro</a></li>
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

    <!-- Header -->
     <header class="header__block header__block--height">
      <div class="header__container-block header__block--width">
          <img src="./assets/images/imagesHeader/logo.png" alt="logo"/>
          <nav class="nav__block">
              <ul class="ul__block">
                      <li class="li__primary-element dropDown-block">
                          <a href="#">
                              Ṕrincipal
                          </a>
                          <img src="./assets/images/imagesHeader/setaBottom.png" alt="arrow down" width="15" height="15"/>
                          <div class="dropDown-content">
                            <ul class="dropDown-ul-block">
                              <li>
                                  <a href="#">Teste 1</a>
                              </li>
                              <li>
                                  <a href="#">Teste 2</a>
                              </li>
                              <li>
                                  <a href="#">Teste 3</a>
                              </li>
                              <li>
                                  <a href="#">Teste 4</a>
                              </li>
                              <li>
                                  <a href="#">Teste 5</a>
                              </li>
                              <li>
                                  <a href="#">Teste 6</a>
                              </li>
                            </ul>
                          </div>
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

          <div id="bt-abrir-menu-mobile" class="exit__menu AlignItemsCenter justifyContentCenter">
              <span class="material-icons">menu</span>
          </div>
      </div>
    </header>

    <form class="main__forgotPassword-block flexDirectionColumn AlignItemsCenter">
        <h1 class="title__forgotPassword-element">Esqueceu sua senha?</h1>
        <span class="text__forgotPassoword-element">informe seu email e enviaremos para você as instruções para redefinir sua senha</span>
        <input class="input__getEmail-element" type="email" placeholder="Email" required/>
        <button class="button__submit-element">Enviar Link <img src="./assets/images/seta.png" class="iconseta" alt="Enviar Link" style="width: 22px;margin-left: 5px;margin-top: 4px;float: right;"></button>
    </form>

    <!-- -->
    <!-- jQuery Modal -->
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />      
    <script type="module" src="./assets/scriptbase/menu-mobile.js"></script>  
                  
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

</body>
</html>
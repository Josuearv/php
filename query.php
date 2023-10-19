<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulte CPF</title>
    
    <link rel="stylesheet" href="./assets/stylebase/cssStyleModal/boot.css" />
     <link rel="stylesheet" href="./assets/stylebase/cssStyleModal/grid.css" />
     <link rel="stylesheet" href="./assets/stylebase/cssStyleModal/estilo.css" />
    <link rel="stylesheet" href="./assets/style/query.css?id=<?php echo rand();?>">
       <link rel="stylesheet" href="./assets/style/machines.css" />
      <link rel="stylesheet" href="./assets/style/boxheader.css" />
    
    <script src="./assets/scriptbase/jquery.js"></script>
    
</head>
<body>
    

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
    
    
    <!-- Primeira Sessão da Página - Consultar CPFs e CNPJs -->
    <div class="containerBlue">
        <div class="marginContainer">
            <div class="displayBlue">
                <div class="blueText">
                    <h3>Consulte <b>CPFs ou CNPJs</b> de terceiros antes de fazer algum emprestimo ou negocio.</h3>
                </div>
                <div class="boxInfo">
                    <div class="boxCPF">
                        <img src="./assets/images/consultaCPF.png" alt="" class="iconsBlue">
                        <h4>CPF de terceiro<br><span>Grátis</span></h4>
                        <br><p>Saiba se score do prestador de serviços que você quer contratar é de confiança.</p>
                        <a href="" class="btnConsulta">Consulte</a>
                        <a href="#openModal" class="btnExemplo">Veja o Exemplo</a>
                    </div>
                    <div class="boxCNPJ">
                    <img src="./assets/images/consultaCNPJ.png" alt="" class="iconsBlue">
                        <h4>CPF de terceiro<br><span>Grátis</span></h4>
                        <br><p>Antes de fechar negócio com alguma empresa confira se o score dela pode trazer dores de cabeça.</p>
                        <a href="" class="btnConsulta">Consulte</a>
                        <a href="" class="btnExemplo">Veja o Exemplo</a>
                    </div>
                    <div class="infoblue">
                        <p class="pBranco">Os scores exibidos aqui são dados internos do aplicativo NellBux.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Segunda Sessão da Página - Como funciona -->
    <div class="containerSeg">
        <div class="marginSeg">
            <div class="boxContent">
                <h2>Como funciona a consulta?</h2>
                <p>Em poucos passos você já tem acesso ao relatório completo com todas as pendências financeiras de qeum você consultar.</p>
                <div class="contentSeg">
                    <div>
                        <img src="./assets/images/lupa.png" alt="" class="iconsContent">
                        <p>Escolha se quer consultar CPF ou CNPJ</p>
                    </div>
                    <div>
                        <img src="./assets/images/documento.png" alt="" class="iconsContent">
                        <p>Analise todos os dados e informações</p>
                    </div>
                    <div>
                        <img src="./assets/images/email.png" alt="" class="iconsContent">
                        <p>Encaminhe uma proposta com base grau de risco</p>
                    </div>
                    <div>
                        <img src="../assets/images/arquivo.png" alt="" class="iconsContent">
                        <p>Baixe ou envie ao seu e-mail o relatório</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="segImg">
        <img src="./assets/images/imgContent.png" alt="" class="imgContent">
    </div>

    <div class="containerPopup" id="openModal">
        <div class="contentPopup">
            <a href="" class="close">
                <div class="boxClose">X</div>
            </a>
            <div class="PopupBoxContent">
                <h4>Exemplo de Relatório</h4>
                <hr>
                <h2>Você consulta pessoa</h2>
                <p>DATA E HORA 18 DE MARÇO DE 2018, 16:00:00</p>
                <div class="boxInfoPopup">
                    <div>
                        <h4>NOME</h4>
                        <p>Luiza Pereira Silva</p>
                    </div>
                    <div>
                        <h4>CPF</h4>
                        <p>000.000.000-00</p>
                    </div>
                    <div>
                        <h4>Endereço</h4>
                        <p>Endereço aqui neste campo</p>
                    </div>
                    <div>
                        <h4>TELEFONE CELULAR</h4>
                        <p>(99) 9 6666-6666</p>
                    </div>
                </div>
                <h4><b>RESUMO</b></h4>
                <div class="boxDividas">
                    <p><b>3 Dívidas</b></p>
                </div>
                <h4>3 | Dívidas</h4>
                <div class="contentDivida">
                    <div class="boxEmpresa">
                        <h4>Empresa</h4>
                        <p>Empresa que negativou</p>
                    </div>
                    <div class="displayDividas">
                        <div>
                            <h4>DATA</h4>
                            <p>06/10/2017</p>
                        </div>
                        <div>
                            <h4>VALOR</h4>
                            <p>R$ 22.000,000</p>
                        </div>
                        <div>
                            <h4>CONTRATO/TÍTULO</h4>
                            <p>55555555555</p>
                        </div>
                    </div>
                </div>
                <div class="contentDivida">
                    <div class="boxEmpresa">
                        <h4>Empresa</h4>
                        <p>Empresa que negativou</p>
                    </div>
                    <div class="displayDividas">
                        <div>
                            <h4>DATA</h4>
                            <p>06/10/2017</p>
                        </div>
                        <div>
                            <h4>VALOR</h4>
                            <p>R$ 22.000,000</p>
                        </div>
                        <div>
                            <h4>CONTRATO/TÍTULO</h4>
                            <p>55555555555</p>
                        </div>
                    </div>
                </div>
                <div class="contentDivida">
                    <div class="boxEmpresa">
                        <h4>Empresa</h4>
                        <p>Empresa que negativou</p>
                    </div>
                    <div class="displayDividas">
                        <div>
                            <h4>DATA</h4>
                            <p>06/10/2017</p>
                        </div>
                        <div>
                            <h4>VALOR</h4>
                            <p>R$ 22.000,000</p>
                        </div>
                        <div>
                            <h4>CONTRATO/TÍTULO</h4>
                            <p>55555555555</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>









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
                
       
                
        
                
        

   

</body>
</html>
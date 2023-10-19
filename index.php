<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;700&display=swap" rel="stylesheet">

    
    <link rel="stylesheet" href="./assets/stylebase/cssStyleModal/boot.css" />
    <link rel="stylesheet" href="./assets/stylebase/cssStyleModal/estilo.css" />
    <link rel="stylesheet" href="./assets/stylebase/cssStyleModal/grid.css" />
    
    
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
    />

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Poppins:ital,wght@0,200;0,300;0,400;0,500;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/style/header.css?id=xccc" />
    <link rel="stylesheet" href="./assets/style/flex.css" />
    <link rel="stylesheet" href="./assets/style/index-4PrimaryHome.css?id=xcczzyy" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Nell bux</title>

    <script src="./assets/scriptbase/jquery.js"></script>
    <script src="./assets/scriptbase/vue2/vue.js"></script>

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

    <header class="header__block header__block--height">
        <div class="header__container-block header__block--width">
            <img src="./assets/images/imagesHeader/logo.png" alt="logo"/>
            <nav class="nav__block">
                <ul class="ul__block">
                        <li class="li__primary-element dropDown-block">
                            <a href="#">
                                Para você 
                            </a>
                            <img src="./assets/images/imagesHeader/setaBottom.png" alt="arrow down" width="15" height="15"/>
                            <div class="dropDown-content">
                              <ul class="dropDown-ul-block">
                                <li>
                                    <a href="plans.php" target="_blank">Investimentos</a>
                                </li>
                                <li>
                                    <a href="#">Emprestimos</a>
                                </li>
                                <li>
                                    <a href="#">Seguros</a>
                                </li>
                                <li>
                                    <a href="#">Cartões</a>
                                </li>
                                <li>
                                    <a href="machine.php" target="_blank">Maquinhas</a>
                                </li>
                                <li>
                                    <a href="#">Para Empresas</a>
                                </li>
                              </ul>
                            </div>
                        </li>
                        <li>
                            <a href="what.php" target="_blank">Abrir uma Conta </a>
                        </li>
                        <li>
                            <a href="terms.php" target="_blank">Regras de uso</a>
                        </li>
                        <li>
                            <a href="ranks.php" target="_blank">Ranks</a>
                        </li>
                        <li>
                            <a href="contact.php" target="_blank">Contato</a>
                        </li>
                </ul>
                <a href="login.php" target="_blank"><button class="button button--bo"><i class="fa fa-user-o"></i>&nbsp; Login</button></a>
            </nav>

            <div id="bt-abrir-menu-mobile" class="exit__menu AlignItemsCenter justifyContentCenter">
                <span class="material-icons">menu</span>
            </div>
        </div>
    </header>

    <!--

    -->
    
    <!-- Main__investment-block -->
    <main class="main__investment-block justifyContentCenter">
        <div class="main__investmentContainer-block">
            <h2 class="text__primaryHome-element">
                <span class="text__attencion-element">Atenção!</span>
                 O Nellbux 
                <span class="text__primary-home-elemnet--yellow">não cobra taxas de corretagem</span>
                para investimento ou retirada.
            </h2>
            <section class="investmentTime__day-block AlignItemsStart justifyContentSpaceBetween">
                
                <div class="investment__informationDay-block">
                    <h1 class="title__investmentTimeDay-element">Invista ainda hoje!</h1>
                    <p class="text__aboutInvestmentTimeDay-element">Um novo jeito de negociar no setor de finanças. Empreste, invista para terceiros com segurança e garantia.</p>
                    <nav class="nav__aplication-block flexWrap AlignItemsCenter">
                        <a href="#">
                            <img src="./assets/images/index-4PrimaryHome/appleStore.png" alt="google play" width="170px" />      
                        </a>
                        <a href="#">
                            <img src="./assets/images/index-4PrimaryHome/googleplay.png" alt="app store" width="170px" />
                        </a>

                    </nav>
                </div>

                <form class="calc__investment-block flexDirectionColumn" action="/simulation.php" method="POST">
                    <h2 class="form__titleInvestment-element">Quanto você quer investir?</h2>
                    <input type="range" min="1000" max="250000" />
                    <div class="money justifyContentSpaceBetween">
                        <span class="money__minMax-element">R$ 1.000</span>
                        <span class="money__minMax-element">R$ 250.000</span>
                    </div>

                    <input class="input__number-element" type="number" placeholder="R$ 10.000" />
                    <span class="title__nameTime-element">Em quanto tempo?</span>
                    
                    <div class="select__block justifyContentSpaceBetween AlignItemsCenter">
                        <select class="select__options-block">
                            <option value>R$: 10.000</option>
                            <option value>texto 1</option>
                            <option value>texto 2</option>
                            <option value>texto 3</option>
    
                        </select>
                        <div class="arrow__selectBlue-element">
                            <img src="./assets/images/index-4PrimaryHome/arrowBlue.png" alt="arrow blue down" width="20" height="20"/>
                        </div>
                    </div>

                    <span class="title__nameTime-element">Aporte mensal?(opcional)</span>
                    <input class="input__number-element" type="number" placeholder="Digite o valor" />
                    <label class="container__checkbox-block AlignItemsCenter">Aceito que os valores apresentando são apenas uma estimativa.
                        <input type="checkbox">
                        <span class="checkmark"></span>
                      </label>
                      <label class="container__checkbox-block AlignItemsCenter">
                          Eu concordo e aceito as condições impostas das <span class="text__orangeNe-block">Regras de Uso</span> do NellBux.
                        <input type="checkbox">
                        <span class="checkmark"></span>
                      </label>
                    <button class="calc__now-element">Simular Agora!</button>
                </form>

            </section>
        </div>
    </main>

    <!--

    -->

    <!-- advantage__nellbux -->

    <section class="advantage__nellbux-block justifyContentCenter AlignItemsCenter">
        <div class="container-advantage-block justifyContentCenter">
            <img src="./assets/images/index-4PrimaryHome/phone.png" alt="phone nellbux about investment" width="200" height="400"/>
            <div class="advantage__nellbuxList-block">
                <h2 class="text__whyChooseNellbux-element">Vantagens do NellBux</h2>
                <ul class="advantage__ulList-block">
                    <li>
                        <img src="./assets/images/index-4PrimaryHome/ok.png" alt="orange arrow" width="25" height="25" />
                        Várias ofertar para você investir e solicitar
                    </li>
                    <li>
                        <img src="./assets/images/index-4PrimaryHome/ok.png" alt="orange arrow" width="25" height="25" />
                        Programa de Afiliados com remuneração diária
                    </li>
                    <li>
                        <img src="./assets/images/index-4PrimaryHome/ok.png" alt="orange arrow" width="25" height="25" />
                        Rentabilidade Acima da Inflação
                    </li>
                    <li>
                        <img src="./assets/images/index-4PrimaryHome/ok.png" alt="orange arrow" width="25" height="25" />
                        Segurança e Garantia para Aplicações
                    </li>
                    <li>
                        <img src="./assets/images/index-4PrimaryHome/ok.png" alt="orange arrow" width="25" height="25" />
                        Saques sem Taxas
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!--

    -->

    <!-- how__itWorks-block -->

    <section class="how__itWorks-block justifyContentCenter">
        <div class="container__itWorks-block flexDirectionColumn AlignItemsCenter">
            <h2 class="title__itWorkds-element">Como funciona?</h2>
            <div class="cards__itWorkds-block justifyContentSpaceBetween AlignItemsCenter flexWrap">

                <div class="card__itWorks-block flexDirectionColumn">
                    <img src="./assets/images/index-4PrimaryHome/contract.png" alt="paper with blue writing and a blue border with a yellow mechanical pencil" width="50" height="50" />
                    <span class="text__cardItWorks-element text__afterRegistration-element">1. Faça seu</span>
                    <p class="text__informationCardItWorkds-element">Precisamos de algumas informações suas para podermos consultar nossos parceiros. Aqui os seus dados estão seguros.</p>
                </div>

                <div class="card__itWorks-block flexDirectionColumn">
                    <img src="./assets/images/index-4PrimaryHome/compare.png" alt="cupboard with a round glass and the other door with a square glass under them has a yellow arrow and on the square glass
                    below it a yellow arrow and other rich blue" width="50" height="50" />
                    <span class="text__cardItWorks-element text__afterOffers-element">2. Compare as</span>
                    <p class="text__informationCardItWorkds-element">Analise o total liberado, valor das parcelas e taxas de juros e escolha a que cabe no seu bolso.</p>
                </div>

                <div class="card__itWorks-block flexDirectionColumn">
                    <img src="./assets/images/index-4PrimaryHome/curriculo.png" alt="paper on a blue person" width="50" height="50" />
                    <span class="text__cardItWorks-element text__afterdata-element">3. Comprove seus</span>
                    <p class="text__informationCardItWorkds-element">Você precisará comprovar as informações cadastradas e publicadas na plataforma</p>
                </div>

                <div class="card__itWorks-block flexDirectionColumn">
                    <img src="./assets/images/index-4PrimaryHome/transfer.png" alt="blue paper with a money siphon in the middle" width="50" height="50" />
                    <span class="text__cardItWorks-element ">4. 
                        <b class="text__cardItWorks-element--bold">Dinheiro</b>
                        na conta
                    </span>
                    <p class="text__informationCardItWorkds-element">Após escolha da oferta e assinatura do serviço, o dinheiro será liberado em até 2 dias úteis.</p>
                </div>


            </div>
        </div>
    </section>

    <!--

    -->

    <!-- get__loans-block -->

    <section class="get__loans-block justifyContentCenter">
        <div class="container__getLoans-block">
            <div class="card__informationGetLoans-block justifyContentSpaceBetween">
                <div class="card__textsInformationGetLoans-block">
                    <h2 class="card__textGetLoans-element">Ganhe com empréstimos</h2>
                    <ul class="list__textInformationGetLoans-block">
                        <li>Empreste o seu dinheiro de forma segura e garanta seu futuro com a NellBux, veja a seguir</li>
                        <li>Nossos planos de renda extra são os melhores, a partir de R$ 25,00 reais.</li>
                        <li>Tenha a melhor plataforma de investimentos sempre com você.</li>
                    </ul>
                </div>
                <img src="./assets/images/index-4PrimaryHome/porquinho.png" alt=""/>
            </div>

            <p>E veja em 2022 seu dinheiro rendendo onde você estiver, com toda segurança e garantia.</p>
            <p>Todo processo é automático geramos sua rentabilidade fixa e igualmente todos os meses em sua conta poupança.</p>
            <p>Faça um teste rápido sem compromisso. Se você não gostar de investir com a NellBux devolvemos seu dinheiro.</p>
        </div>
    </section>

    <!--

    -->

    <!-- nellbux__warranty -->

    <section class="nellbux__warranty justifyContentCenter AlignItemsCenter">
            <h2 class="card__textGetLoans-element card__textGetLoans-element--white">Garanta seu futuro com a NellBux</h2>
            <button class="button__openAcount-element">Como Investir?</button>
    </section>

    <!--

    -->

    <!-- nellbux__IsSafe-block -->

    <section class="nellbux__IsSafe-block flexDirectionColumn AlignItemsCenter">
        <span class="title__primary-element">A rentabilidade é gerada diariamente incluindo feriados e finais de semana, na sua conta NellBux</span>
        <h3 class="title__secondary-element">NellBux é Seguro?</h3>
        <img src="./assets/images/index-4PrimaryHome/nellBuxSafe.png" alt="" />
        <p class="text__nellbuxSafe-element">
            Sim nossa plataforma é <strong>Segura</strong> possuímos Certificação Digital <strong>(SSL)</strong> com Criptografia de dados. Atualmente somos a única plataforma que assegura uma <strong>renda fixa</strong> de forma <strong>honesta</strong> com rentabilidade todos os meses semelhante uma aposentadoria.
        </p>
    </section>

    <!--

    -->

    <!-- people__opinios-block -->

    <section class="people__opinions-block justifyContentCenter">
        <div class="container__peopleOpnions-block">
            <header class="header__peopleOpnions-block justifyContentSpaceBetween AlignItemsCenter">
                <h2 class="title__headerOpnios-element">" A opnião de quem já conhece e confia no nosso trabalho:</h2>
                <div class="evaluation__play-block flexDirectionColumn AlignItemsEnd">
                    <span class="text__evalution-element">Avaliações no Google Play</span>
                    <span  class="text__evalution-element text__evalution-element--bold">
                        4.5
                        <img src="./assets/images/index-4PrimaryHome/stars.png" alt="" >
                    </span>
                </div>
            </header>

            
       <!-- Swiper -->
       <div class="slide-container swiper">
        <div class="slide-content">
            <div class="card-wrapper swiper-wrapper">

                <div class="swiper-slide card__peoplesOpnies-block flexDirectionColumn justifyContentSpaceBetween ">
                    <header class="header__cardPeoples-block AlignItemsStart">
                        <img src="./assets/images/index-4PrimaryHome/user.png" alt="" width="60" height="60" />
                        <div class="informationPeoplesOpnies__profile-block flexDirectionColumn">
                            <span class="title__perfilInformationPeoplesOpnies-element">Naty Soares</span>
                            <span  class="text__evalution-element text__evalution-element--bold text__evalution-element--marginNone">
                                5.0
                                <img src="./assets/images/index-4PrimaryHome/star5.png" alt="" >
                            </span>
                        </div>
                    </header>
    
                    <div class="start__text-element">❝</div>
                    <p class="text__messagerMe-element">Atendimento excelente, resolveram o meu problema de forma imediata e o dinheiro caiu na conta antes do prazo esperado. Super recomendo, todas as vezes que preciso, estão prontos para me ajudar. Nota 10!!!Atendimento excelente, resolveram o meu problema de forma imediata e o dinheiro caiu na conta antes do prazo esperado. Super recomendo, todas as vezes que preciso, estão prontos para me ajudar. Nota 10!!!Atendimento excelente, resolveram o meu problema de forma imediata e o dinheiro caiu na conta antes do prazo esperado. Super recomendo, todas as vezes que preciso, estão prontos para me ajudar. Nota 10!!!Atendimento excelente, resolveram o meu problema de forma imediata e o dinheiro caiu na conta antes do prazo esperado. Super recomendo, todas as vezes que preciso, estão prontos para me ajudar. Nota 10!!!Atendimento excelente, resolveram o meu problema de forma imediata e o dinheiro caiu na conta antes do prazo esperado. Super recomendo, todas as vezes que preciso, estão prontos para me ajudar. Nota 10!!!</p>
                    <a href="#" class="checkout__href-element AlignItemsCenter">
                        <img src="./assets/images/index-4PrimaryHome/facebook.png" alt="" width="40" height="40"/>
                        Confira todas as avaliações
                    </a>
                </div>

                <div class="swiper-slide card__peoplesOpnies-block flexDirectionColumn justifyContentSpaceBetween ">
                    <header class="header__cardPeoples-block AlignItemsStart">
                        <img src="./assets/images/index-4PrimaryHome/user.png" alt="" width="60" height="60" />
                        <div class="informationPeoplesOpnies__profile-block flexDirectionColumn">
                            <span class="title__perfilInformationPeoplesOpnies-element">Naty Soares</span>
                            <span  class="text__evalution-element text__evalution-element--bold text__evalution-element--marginNone">
                                5.0
                                <img src="./assets/images/index-4PrimaryHome/star5.png" alt="" >
                            </span>
                        </div>
                    </header>
    
                    <div class="start__text-element">❝</div>
                    <p class="text__messagerMe-element">Atendimento excelente, resolveram o meu problema de forma imediata e o dinheiro caiu na conta antes do prazo esperado. Super recomendo, todas as vezes que preciso, estão prontos para me ajudar. Nota 10!!!Atendimento excelente, resolveram o meu problema de forma imediata e o dinheiro caiu na conta antes do prazo esperado. Super recomendo, todas as vezes que preciso, estão prontos para me ajudar. Nota 10!!!Atendimento excelente, resolveram o meu problema de forma imediata e o dinheiro caiu na conta antes do prazo esperado. Super recomendo, todas as vezes que preciso, estão prontos para me ajudar. Nota 10!!!Atendimento excelente, resolveram o meu problema de forma imediata e o dinheiro caiu na conta antes do prazo esperado. Super recomendo, todas as vezes que preciso, estão prontos para me ajudar. Nota 10!!!Atendimento excelente, resolveram o meu problema de forma imediata e o dinheiro caiu na conta antes do prazo esperado. Super recomendo, todas as vezes que preciso, estão prontos para me ajudar. Nota 10!!!</p>
                    <a href="#" class="checkout__href-element AlignItemsCenter">
                        <img src="./assets/images/index-4PrimaryHome/facebook.png" alt="" width="40" height="40"/>
                        Confira todas as avaliações
                    </a>
                </div>

                <div class="swiper-slide card__peoplesOpnies-block flexDirectionColumn justifyContentSpaceBetween ">
                    <header class="header__cardPeoples-block AlignItemsStart">
                        <img src="./assets/images/index-4PrimaryHome/user.png" alt="" width="60" height="60" />
                        <div class="informationPeoplesOpnies__profile-block flexDirectionColumn">
                            <span class="title__perfilInformationPeoplesOpnies-element">Naty Soares</span>
                            <span  class="text__evalution-element text__evalution-element--bold text__evalution-element--marginNone">
                                5.0
                                <img src="./assets/images/index-4PrimaryHome/star5.png" alt="" >
                            </span>
                        </div>
                    </header>
    
                    <div class="start__text-element">❝</div>
                    <p class="text__messagerMe-element">Atendimento excelente, resolveram o meu problema de forma imediata e o dinheiro caiu na conta antes do prazo esperado. Super recomendo, todas as vezes que preciso, estão prontos para me ajudar. Nota 10!!!Atendimento excelente, resolveram o meu problema de forma imediata e o dinheiro caiu na conta antes do prazo esperado. Super recomendo, todas as vezes que preciso, estão prontos para me ajudar. Nota 10!!!Atendimento excelente, resolveram o meu problema de forma imediata e o dinheiro caiu na conta antes do prazo esperado. Super recomendo, todas as vezes que preciso, estão prontos para me ajudar. Nota 10!!!Atendimento excelente, resolveram o meu problema de forma imediata e o dinheiro caiu na conta antes do prazo esperado. Super recomendo, todas as vezes que preciso, estão prontos para me ajudar. Nota 10!!!Atendimento excelente, resolveram o meu problema de forma imediata e o dinheiro caiu na conta antes do prazo esperado. Super recomendo, todas as vezes que preciso, estão prontos para me ajudar. Nota 10!!!</p>
                    <a href="#" class="checkout__href-element AlignItemsCenter">
                        <img src="./assets/images/index-4PrimaryHome/facebook.png" alt="" width="40" height="40"/>
                        Confira todas as avaliações
                    </a>
                </div>

                <div class="swiper-slide card__peoplesOpnies-block flexDirectionColumn justifyContentSpaceBetween ">
                    <header class="header__cardPeoples-block AlignItemsStart">
                        <img src="./assets/images/index-4PrimaryHome/user.png" alt="" width="60" height="60" />
                        <div class="informationPeoplesOpnies__profile-block flexDirectionColumn">
                            <span class="title__perfilInformationPeoplesOpnies-element">Naty Soares</span>
                            <span  class="text__evalution-element text__evalution-element--bold text__evalution-element--marginNone">
                                5.0
                                <img src="./assets/images/index-4PrimaryHome/star5.png" alt="" >
                            </span>
                        </div>
                    </header>
    
                    <div class="start__text-element">❝</div>
                    <p class="text__messagerMe-element">Atendimento excelente, resolveram o meu problema de forma imediata e o dinheiro caiu na conta antes do prazo esperado. Super recomendo, todas as vezes que preciso, estão prontos para me ajudar. Nota 10!!!Atendimento excelente, resolveram o meu problema de forma imediata e o dinheiro caiu na conta antes do prazo esperado. Super recomendo, todas as vezes que preciso, estão prontos para me ajudar. Nota 10!!!Atendimento excelente, resolveram o meu problema de forma imediata e o dinheiro caiu na conta antes do prazo esperado. Super recomendo, todas as vezes que preciso, estão prontos para me ajudar. Nota 10!!!Atendimento excelente, resolveram o meu problema de forma imediata e o dinheiro caiu na conta antes do prazo esperado. Super recomendo, todas as vezes que preciso, estão prontos para me ajudar. Nota 10!!!Atendimento excelente, resolveram o meu problema de forma imediata e o dinheiro caiu na conta antes do prazo esperado. Super recomendo, todas as vezes que preciso, estão prontos para me ajudar. Nota 10!!!</p>
                    <a href="#" class="checkout__href-element AlignItemsCenter">
                        <img src="./assets/images/index-4PrimaryHome/facebook.png" alt="" width="40" height="40"/>
                        Confira todas as avaliações
                    </a>
                </div>

                <div class="swiper-slide card__peoplesOpnies-block flexDirectionColumn justifyContentSpaceBetween ">
                    <header class="header__cardPeoples-block AlignItemsStart">
                        <img src="./assets/images/index-4PrimaryHome/user.png" alt="" width="60" height="60" />
                        <div class="informationPeoplesOpnies__profile-block flexDirectionColumn">
                            <span class="title__perfilInformationPeoplesOpnies-element">Naty Soares</span>
                            <span  class="text__evalution-element text__evalution-element--bold text__evalution-element--marginNone">
                                5.0
                                <img src="./assets/images/index-4PrimaryHome/star5.png" alt="" >
                            </span>
                        </div>
                    </header>
    
                    <div class="start__text-element">❝</div>
                    <p class="text__messagerMe-element">Atendimento excelente, resolveram o meu problema de forma imediata e o dinheiro caiu na conta antes do prazo esperado. Super recomendo, todas as vezes que preciso, estão prontos para me ajudar. Nota 10!!!Atendimento excelente, resolveram o meu problema de forma imediata e o dinheiro caiu na conta antes do prazo esperado. Super recomendo, todas as vezes que preciso, estão prontos para me ajudar. Nota 10!!!Atendimento excelente, resolveram o meu problema de forma imediata e o dinheiro caiu na conta antes do prazo esperado. Super recomendo, todas as vezes que preciso, estão prontos para me ajudar. Nota 10!!!Atendimento excelente, resolveram o meu problema de forma imediata e o dinheiro caiu na conta antes do prazo esperado. Super recomendo, todas as vezes que preciso, estão prontos para me ajudar. Nota 10!!!Atendimento excelente, resolveram o meu problema de forma imediata e o dinheiro caiu na conta antes do prazo esperado. Super recomendo, todas as vezes que preciso, estão prontos para me ajudar. Nota 10!!!</p>
                    <a href="#" class="checkout__href-element AlignItemsCenter">
                        <img src="./assets/images/index-4PrimaryHome/facebook.png" alt="" width="40" height="40"/>
                        Confira todas as avaliações
                    </a>
                </div>

                <div class="swiper-slide card__peoplesOpnies-block flexDirectionColumn justifyContentSpaceBetween ">
                    <header class="header__cardPeoples-block AlignItemsStart">
                        <img src="./assets/images/index-4PrimaryHome/user.png" alt="" width="60" height="60" />
                        <div class="informationPeoplesOpnies__profile-block flexDirectionColumn">
                            <span class="title__perfilInformationPeoplesOpnies-element">Naty Soares</span>
                            <span  class="text__evalution-element text__evalution-element--bold text__evalution-element--marginNone">
                                5.0
                                <img src="./assets/images/index-4PrimaryHome/star5.png" alt="" >
                            </span>
                        </div>
                    </header>
    
                    <div class="start__text-element">❝</div>
                    <p class="text__messagerMe-element">Atendimento excelente, resolveram o meu problema de forma imediata e o dinheiro caiu na conta antes do prazo esperado. Super recomendo, todas as vezes que preciso, estão prontos para me ajudar. Nota 10!!!Atendimento excelente, resolveram o meu problema de forma imediata e o dinheiro caiu na conta antes do prazo esperado. Super recomendo, todas as vezes que preciso, estão prontos para me ajudar. Nota 10!!!Atendimento excelente, resolveram o meu problema de forma imediata e o dinheiro caiu na conta antes do prazo esperado. Super recomendo, todas as vezes que preciso, estão prontos para me ajudar. Nota 10!!!Atendimento excelente, resolveram o meu problema de forma imediata e o dinheiro caiu na conta antes do prazo esperado. Super recomendo, todas as vezes que preciso, estão prontos para me ajudar. Nota 10!!!Atendimento excelente, resolveram o meu problema de forma imediata e o dinheiro caiu na conta antes do prazo esperado. Super recomendo, todas as vezes que preciso, estão prontos para me ajudar. Nota 10!!!</p>
                    <a href="#" class="checkout__href-element AlignItemsCenter">
                        <img src="./assets/images/index-4PrimaryHome/facebook.png" alt="" width="40" height="40"/>
                        Confira todas as avaliações
                    </a>
                </div>

                <div class="swiper-slide card__peoplesOpnies-block flexDirectionColumn justifyContentSpaceBetween ">
                    <header class="header__cardPeoples-block AlignItemsStart">
                        <img src="./assets/images/index-4PrimaryHome/user.png" alt="" width="60" height="60" />
                        <div class="informationPeoplesOpnies__profile-block flexDirectionColumn">
                            <span class="title__perfilInformationPeoplesOpnies-element">Naty Soares</span>
                            <span  class="text__evalution-element text__evalution-element--bold text__evalution-element--marginNone">
                                5.0
                                <img src="./assets/images/index-4PrimaryHome/star5.png" alt="" >
                            </span>
                        </div>
                    </header>
    
                    <div class="start__text-element">❝</div>
                    <p class="text__messagerMe-element">Atendimento excelente, resolveram o meu problema de forma imediata e o dinheiro caiu na conta antes do prazo esperado. Super recomendo, todas as vezes que preciso, estão prontos para me ajudar. Nota 10!!!Atendimento excelente, resolveram o meu problema de forma imediata e o dinheiro caiu na conta antes do prazo esperado. Super recomendo, todas as vezes que preciso, estão prontos para me ajudar. Nota 10!!!Atendimento excelente, resolveram o meu problema de forma imediata e o dinheiro caiu na conta antes do prazo esperado. Super recomendo, todas as vezes que preciso, estão prontos para me ajudar. Nota 10!!!Atendimento excelente, resolveram o meu problema de forma imediata e o dinheiro caiu na conta antes do prazo esperado. Super recomendo, todas as vezes que preciso, estão prontos para me ajudar. Nota 10!!!Atendimento excelente, resolveram o meu problema de forma imediata e o dinheiro caiu na conta antes do prazo esperado. Super recomendo, todas as vezes que preciso, estão prontos para me ajudar. Nota 10!!!</p>
                    <a href="#" class="checkout__href-element AlignItemsCenter">
                        <img src="./assets/images/index-4PrimaryHome/facebook.png" alt="" width="40" height="40"/>
                        Confira todas as avaliações
                    </a>
                </div>

                <div class="swiper-slide card__peoplesOpnies-block flexDirectionColumn justifyContentSpaceBetween ">
                    <header class="header__cardPeoples-block AlignItemsStart">
                        <img src="./assets/images/index-4PrimaryHome/user.png" alt="" width="60" height="60" />
                        <div class="informationPeoplesOpnies__profile-block flexDirectionColumn">
                            <span class="title__perfilInformationPeoplesOpnies-element">Naty Soares</span>
                            <span  class="text__evalution-element text__evalution-element--bold text__evalution-element--marginNone">
                                5.0
                                <img src="./assets/images/index-4PrimaryHome/star5.png" alt="" >
                            </span>
                        </div>
                    </header>
    
                    <div class="start__text-element">❝</div>
                    <p class="text__messagerMe-element">Atendimento excelente, resolveram o meu problema de forma imediata e o dinheiro caiu na conta antes do prazo esperado. Super recomendo, todas as vezes que preciso, estão prontos para me ajudar. Nota 10!!!Atendimento excelente, resolveram o meu problema de forma imediata e o dinheiro caiu na conta antes do prazo esperado. Super recomendo, todas as vezes que preciso, estão prontos para me ajudar. Nota 10!!!Atendimento excelente, resolveram o meu problema de forma imediata e o dinheiro caiu na conta antes do prazo esperado. Super recomendo, todas as vezes que preciso, estão prontos para me ajudar. Nota 10!!!Atendimento excelente, resolveram o meu problema de forma imediata e o dinheiro caiu na conta antes do prazo esperado. Super recomendo, todas as vezes que preciso, estão prontos para me ajudar. Nota 10!!!Atendimento excelente, resolveram o meu problema de forma imediata e o dinheiro caiu na conta antes do prazo esperado. Super recomendo, todas as vezes que preciso, estão prontos para me ajudar. Nota 10!!!</p>
                    <a href="#" class="checkout__href-element AlignItemsCenter">
                        <img src="./assets/images/index-4PrimaryHome/facebook.png" alt="" width="40" height="40"/>
                        Confira todas as avaliações
                    </a>
                </div>

                <div class="swiper-slide card__peoplesOpnies-block flexDirectionColumn justifyContentSpaceBetween ">
                    <header class="header__cardPeoples-block AlignItemsStart">
                        <img src="./assets/images/index-4PrimaryHome/user.png" alt="" width="60" height="60" />
                        <div class="informationPeoplesOpnies__profile-block flexDirectionColumn">
                            <span class="title__perfilInformationPeoplesOpnies-element">Naty Soares</span>
                            <span  class="text__evalution-element text__evalution-element--bold text__evalution-element--marginNone">
                                5.0
                                <img src="./assets/images/index-4PrimaryHome/star5.png" alt="" >
                            </span>
                        </div>
                    </header>
    
                    <div class="start__text-element">❝</div>
                    <p class="text__messagerMe-element">Atendimento excelente, resolveram o meu problema de forma imediata e o dinheiro caiu na conta antes do prazo esperado. Super recomendo, todas as vezes que preciso, estão prontos para me ajudar. Nota 10!!!Atendimento excelente, resolveram o meu problema de forma imediata e o dinheiro caiu na conta antes do prazo esperado. Super recomendo, todas as vezes que preciso, estão prontos para me ajudar. Nota 10!!!Atendimento excelente, resolveram o meu problema de forma imediata e o dinheiro caiu na conta antes do prazo esperado. Super recomendo, todas as vezes que preciso, estão prontos para me ajudar. Nota 10!!!Atendimento excelente, resolveram o meu problema de forma imediata e o dinheiro caiu na conta antes do prazo esperado. Super recomendo, todas as vezes que preciso, estão prontos para me ajudar. Nota 10!!!Atendimento excelente, resolveram o meu problema de forma imediata e o dinheiro caiu na conta antes do prazo esperado. Super recomendo, todas as vezes que preciso, estão prontos para me ajudar. Nota 10!!!</p>
                    <a href="#" class="checkout__href-element AlignItemsCenter">
                        <img src="./assets/images/index-4PrimaryHome/facebook.png" alt="" width="40" height="40"/>
                        Confira todas as avaliações
                    </a>
                </div>

            </div>
        </div>

        <div class="swiper-button-next swiper-navBtn"></div>
        <div class="swiper-button-prev swiper-navBtn"></div>
        <div class="swiper-pagination"></div>
    </div>
    

    </div>




    </section>

    <!--

    -->

    <!-- frequen__askedQuestiion-block -->

    <section class="frequently__askedQuestiion-block justifyContentCenter">
        <div class="container__askedQuestion-block flexDirectionColumn">
            <header class="header__askedQuestion justifyContentCenter">
                <h2>Perguntas frequentes</h2>
            </header>
            <ul class="ul__askedQuestions">

                <li class="li__askedQuestions-element">
                    <div class="li__namesQuestions-element justifyContentSpaceBetween AlignItemsCenter">
                        O que é Nellbux?
                        <img src="./assets/images/imagesHeader/setaBottom.png" alt="down arrow" width="15" height="15"/>
                        <div class="close__element">-</div>
                    </div>
                    <span class="li__active-element">NellBux é um financeira digital de consignados, focado especialmente em pequenos emprestimos, pagamos rentabilidade sobre os fundos de sua conta nellbux.</span>
                </li>

                <li class="li__askedQuestions-element">
                    <div class="li__namesQuestions-element justifyContentSpaceBetween AlignItemsCenter">
                        No que especificamente a Nellbux trabalha?
                        <img src="./assets/images/imagesHeader/setaBottom.png" alt="down arrow" width="15" height="15"/>
                        <div class="close__element">-</div>
                    </div>
                    <span class="li__active-element">Trabalhamos com emprestimos , especialmente consignados, remuneramos nossos membros com Renda Fixa acima da inflação todos os meses com toda segurança.</span>
                </li>

                <li class="li__askedQuestions-element">
                    <div class="li__namesQuestions-element justifyContentSpaceBetween AlignItemsCenter">
                        Quanto custa para se cadastrar?
                        <img src="./assets/images/imagesHeader/setaBottom.png" alt="down arrow" width="15" height="15"/>
                        <div class="close__element">-</div>
                    </div>
                    <span class="li__active-element">Absolutamente NADA, o cadastro é totalmente GRATUITO, entretanto é necessário você adicionar um saldo de investimento.
                    Mas não se preocupe, o saldo é devolvido, pagamos juros em cima do seu dinheiro diariamente em sua conta NellBux.</span>
                </li>


                <li class="li__askedQuestions-element">
                    <div class="li__namesQuestions-element justifyContentSpaceBetween AlignItemsCenter">
                        Por que é necessario adicionar saldo?
                        <img src="./assets/images/imagesHeader/setaBottom.png" alt="down arrow" width="15" height="15"/>
                        <div class="close__element">-</div>
                    </div>
                    <span class="li__active-element">O saldo é aplicado como FORMA DE INVESTIMENTO para divulgar nossa marca Durante esse tempo trabalhamos com seu dinheiro e PAGAMOS JUROS sobre fundos em sua conta poupança no NellBux.</span>
                </li>


                <li class="li__askedQuestions-element">
                    <div class="li__namesQuestions-element justifyContentSpaceBetween AlignItemsCenter">
                        E antes do ciclo eu posso sacar?
                        <img src="./assets/images/imagesHeader/setaBottom.png" alt="down arrow" width="15" height="15"/>                    
                        <div class="close__element">-</div>
                    </div>
                    <span class="li__active-element">
                        Sim você pode sacar QUALQUER MOMENTO o montante total ou somente valor do JUROS, conforme for o seu progresso a sua RENTABILIDADE será maior.</span>
                </li>


                <li class="li__askedQuestions-element">
                    <div class="li__namesQuestions-element justifyContentSpaceBetween AlignItemsCenter">
                        Eu quero trabalhar com Nellbux como faço?
                        <img src="./assets/images/imagesHeader/setaBottom.png" alt="down arrow" width="15" height="15"/>
                        <div class="close__element">-</div>
                    </div>
                    <span class="li__active-element">Há diversas formas de como conseguir ganhar uma RENDA EXTRA mensal com NELLBUX e as principais formas são: - Ganhando com tráfego de seu site ou blog com programa de afiliados , PAGAMOS por clique ou visualizações em anúncios - Indicando novos usuários através do seu link de indicado , PAGAMOS ATÉ 20% sobre os GANHOS de CADA indicado - Através de juros fazendo DEPÓSITOS em nosso sistema, com RENTABILIDADE de até 2% ao mês. Essas são as principais formas, há outras funções ocultas que são desbloqueadas de acordo com o progresso do usuário.</span>
                </li>


                <li class="li__askedQuestions-element">
                    <div class="li__namesQuestions-element justifyContentSpaceBetween AlignItemsCenter">
                        O que é um indicado?
                        <img src="./assets/images/imagesHeader/setaBottom.png" alt="down arrow" width="15" height="15"/>
                        <div class="close__element">-</div>
                    </div>
                    <span class="li__active-element">Indicado é a pessoa que se cadastrou em nosso sistema através de seu link ou banner de indicação.</span>
                </li>


                <li class="li__askedQuestions-element">
                    <div class="li__namesQuestions-element justifyContentSpaceBetween AlignItemsCenter">
                        Como faço para indicar?
                        <img src="./assets/images/imagesHeader/setaBottom.png" alt="down arrow" width="15" height="15"/>
                        <div class="close__element">-</div>
                    </div>
                    <span class="li__active-element">Após logar-se em sua página restrita, clique em "LISTA DE INDICADOS" e na parte superior terá o link de indicação de cada membro. Copie esse link e divulgue-o em qualquer lugar que desejar. Também poderá utilizar os banners personalizados (banners com seu link de indicação inserido). Você pode também inserir em sites, blogs, fóruns e redes sociais como Youtube, Twitter, Facebook, cada novo indicado registrado é contabilizado um valor pelo registro e pela porcentagem dos lucros dele em sua conta</span>
                </li>

                <li class="li__askedQuestions-element">
                    <div class="li__namesQuestions-element justifyContentSpaceBetween AlignItemsCenter">
                        Como me cadastrar agora, quais as formas de pagamento são aceitas?
                        <img src="./assets/images/imagesHeader/setaBottom.png" alt="down arrow" width="15" height="15"/>
                        <div class="close__element">-</div>
                    </div>
                    <span class="li__active-element">Trabalhamos com as principais bandeiras de cartões de créditos como Visa, Mastercard, Elo e Hipercard, além de boleto bancário, usamos também Mercado Pago e Paypal.</span>
                </li>

                <li class="li__askedQuestions-element">
                    <div class="li__namesQuestions-element justifyContentSpaceBetween AlignItemsCenter">
                        Qual prazo de aprovação do pagamento?
                        <img src="./assets/images/imagesHeader/setaBottom.png" alt="down arrow" width="15" height="15"/>
                        <div class="close__element">-</div>

                    </div>
                    <span class="li__active-element">Para pagamentos via boleto são confirmados no prazo de 1 dia útil, as demais formas são aprovadas automaticamente pelo sistema. Todas as transações realizadas no NellBux estão garantidas com um seguro avulso! Ainda Com Dúvidas? Aguardamos seu contato via email: support@nellbux.com ou pelo Whatsapp</span>
                </li>


            </ul>
        </div>
    </section>

    <!--

    -->

    <!-- footer__aboutNellb-block -->

    <footer class="footer__aboutNellb-block justifyContentCenter">
        <div class="container__aboutNellb-block">
            <nav class="nav__aboutNellb-block justifyContentSpaceBetween">
                <ul class="ul__widthAboutNell-b">
                    <li class="text__primaryli-element"><br>Atendimento</li>
                    <hr class="border__orangeLi-element">
                    <li class="li__boldText-element">suporte@nellbux.com</li>
                    <li>Whatsapp: (47) 99659-0077</li>
                    <li>Atendimento 24H</li>

                    <li class="text__spacing-element">Rua aveiro, 812 sala 12</li>
                    <li class="text__spacing-element">Aventureiro Joinville/SC - 89226-420</li>
                    
                    <li>Parcerias de contéudo e assesoria de impressa:</li>
                    <li class="li__boldText-element">redaao@nellbux.com</li>
                    <li class="text__spacing-element text__followingNetwork-element">Siga-nos nas rede sociais</li>
                    <div class="social__networkFollowing-block">
                        <img src="./assets/images/index-4PrimaryHome/facebookFooter.png" alt="blue background with an f in the middle facebook symbol" width="30" height="30"/>
                        <img src="./assets/images/index-4PrimaryHome/instagram.png" alt="rainbow background with a square in the middle and inside the square an instagram symbol ball" width="30" height="30"/>
                        <img src="./assets/images/index-4PrimaryHome/twitter.png" alt="baby blue background with a little bird in the middle twitter symbol" width="30" height="30"/>
                        <img src="./assets/images/index-4PrimaryHome/whatsapp.png" alt="green background with a round ball with a whatssap phone simbo image" width="30" height="30"/>
                        <img src="./assets/images/index-4PrimaryHome/youtube.png" alt="background red with a square in the middle and inside the square a triangle facing right red triangle color" width="30" height="30"/>
                    </div>

                </ul>
                <ul>
                    <li class="text__primaryli-element"><br>O NellBux</li>
                    <hr class="border__orangeLi-element">
                    <a href='query.php' target='_blank' class='salink'><li>Consulta de Credito</li></a>
                    <a href='affiliated.php' target='_blank' class='salink'><li>Programas de afiliados</li></a>
                    <li>Suporte</li>
                    <li>Link de cobrança</li>
                    <li>Quero ser um investidor</li>
                    <li>Comunidade</li>
                    <li class="text__spacing-element li__boldText-element">Links úteis</li>

                    <a href='affiliated.php' target='_blank' class='salink'><li>Planos de investimento</li></a>
                    <li>Emprestimos</li>
                    <li>Seguros</li>
                    <a href='machine.php' target='_blank' class='salink'><li>Maquininhas</li></a>
                    <li>Para empresas</li>
                    <li>Cartões de crédito</li>
                </ul>
                <ul>
                    <li class="text__primaryli-element"><br>Para você</li>
                    <hr class="border__babyBlueLi-element">

                    <li>Empréstimo para pagar dívidas</li>
                    <li>Emprestimo para reforma ou mudança</li>
                    <li>Empréstimo sem burocracia</li>
                    <li>Empréstimo urgente</li>
                    <li>Empréstimo com débito em conta</li>
                    <li>Empréstimo com nome sujo</li>
                    <li>Empréstimo rápido</li>
                    <li>Empréstimo para microempreendedor individual</li>
                    <li>Empréstimo para casamento</li>
                    <li>Empréstimo para aposentado</li>
                    <li>Empréstimo para assalariado</li>
                    <li>Empréstimo para autônomo</li>
                    <li>Empréstimo para funcionário público</li>
                    <li>Empréstimo sem comprovação de renda</li>
                </ul>

                <ul>
                    <li class="text__primaryli-element"><br>Outras Soluções</li>
                    <hr class="border__babyBlueLi-element">
                    <li>Hipoteca</li>
                    <li>Refinanciamento de imóvel</li>
                    <li>Refinanciamento de veiculo</li>
                    <li>Empréstimo consignado privado</li>
                    <li>Empréstimo consignado para funcionário público</li>
                    <li>Empréstimo consignado INSS</li>
                    <li>Tipos de crédito PF</li>
                    <li>Tipos de crédito PJ</li>

                </ul>
            </nav>
            <div class="nellbux__companyFooter-block">
                <hr class="border__babyBlueLi-element">
                <header class="header__nellbux-comapanyFooter justifyContentSpaceBetween">
                    <span class="title__nellbuxHeader-element text__sac-element">O NellBux é uma empresa intemediadora do processo de concessão de crédito e investimento entre terceiros. Somos uma financeira. Atualmente atuamos apenas em território Brasileiro.</span>
                    <div class="header__termsNellbux-block" style="width: 100%;">
                        <strong class="li__boldText-element">Termos e condições | Privacidade</strong><br>
                        <span>Copyright ©2022 NB - Todos Direitos Reservados</span>
                    </div>
                </header>
                 <!--<footer class="footer__sac-block  justifyContentSpaceBetween">

                    <span class="text__sac-element">SAC: (47) 3278-0748 | Todos planos de investimento do NellBux são asegurados.</span>
                
                   <div class="payment__platform-element">
                        <img src="./assets/images/imagesHeader/logo.png" alt="logo header company nellbux" id="fotter__logoCompany-element" width="120"/>
                        <img src="./assets/images/index-4PrimaryHome/payments.png" alt="paymentos platform accpet" width="200"/>
                    </div>
                    
                </footer>-->
            </div>
        </div>
    </footer>

    <!--

    -->

    <!-- jQuery Modal -->
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />      
    <script type="module" src="./assets/scriptbase/script.js"></script>
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

    <!-- PATHS scripts -->
    <script type="module" src="./assets/scriptbase/menu-mobile.js"></script>
    <script src="./assets/scriptbase/GlobalTelaFrame5.js?id=xccc"></script>


    
    <!-- Initialize Swiper -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    
    <script>

        window.addEventListener("scroll", () => {
            let headerActive = document.querySelector(".header__block")
            let width = window.screen.width
            console.log(width)
            if(width <= 994){
                headerActive.classList.toggle('sticky', window.scrollY > 1100)
            }
            if(width <= 520) headerActive.classList.toggle('sticky', window.scrollY > 1150)
            
            if(width <= 339)  headerActive.classList.toggle('sticky', window.scrollY > 1250)
            else if(width > 994){
                headerActive.classList.toggle('sticky', window.scrollY > 850)
            }
        
        })

        var swiper = new Swiper(".slide-content", {
            slidesPerView: 3,
            spaceBetween: 25,
            loop: true,
            centerSlide: 'true',
            fade: 'true',
            grabCursor: 'true',
            pagination: {
            el: ".swiper-pagination",
            clickable: true,
            dynamicBullets: true,
            },
            navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
            },

            breakpoints:{
                0: {
                    slidesPerView: 1,
                },
                520: {
                    slidesPerView: 2,
                },
                950: {
                    slidesPerView: 3,
                },
            },
        });
    </script>

</body>
</html>
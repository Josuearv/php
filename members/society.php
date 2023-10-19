<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Comunidade - Para você</title>
	
	
	 <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Poppins:ital,wght@0,200;0,300;0,400;0,500;1,400&display=swap" rel="stylesheet">
    
	
	 <link rel="stylesheet" href="../assets/stylebase/cssStyleModal/greed.css" />
	 <link rel="stylesheet" href="../assets/style/index-1Home.css?=test5" />
	<link rel="stylesheet" type="text/css" href="../assets/style/society.css?test=10">
	
	<script src="../assets/scriptbase/jquery.js"></script>
	
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

            <li>
              <img src="../assets/images/imagesNav/investiment.png" alt="investment growing" width="20" height="20" />
              <a href="investments.php">Investimentos</a>
            </li>

            <li>
              <img src="../assets/images/imagesNav/handmoney.png" alt="hand on top has a coin floating" width="20" height="20" />
              <a href="#">Ofertas</a>
            </li>

            <li  class="nav__links-element nav__links-element">
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
    
    
    
    
	<div class="div_container">
		<div class="div_margin">
			<div class="div_display">

				<!-- INICIO DA PRIMEIRA COLUNA DA PAGINA -->

				<div class="div_box_col">

					<!-- PEQUENO MENU COM ITENS -->

					<div class="div_box_itens">
						<div class="box_itens_ativo">
							<div class="itens_icons">
								<img src="../assets/images/para_voce.png" class="img_itens">
							</div>
							<div class="itens_links">
								<a href="">Para você</a>
							</div>
						</div>
						<div class="box_itens">
							<div class="itens_icons">
								<img src="../assets/images/linha_tempo.png" class="img_itens">
							</div>
							<div class="itens_links">
								<a href="">Linha do tempo</a>
							</div>
						</div>
						<div class="box_itens">
							<div class="itens_icons">
								<img src="../assets/images/melhores_respostas.png" class="img_itens">
							</div>
							<div class="itens_links">
								<a href="">Descubra</a>
							</div>
						</div>
					</div>

					<!-- SESSÃO DE GANHAR MAIS MOEDAS -->

					<div class="div_box_ganhe">
						<img src="../assets/images/balao_check.png" class="img_balao_check">
						<h5>Ganhe por responder!</h5>
						<img src="../assets/images/ganhe_moedas.png" class="img_ganhe_moedas">
					</div>
				</div>

				<!-- SEGUNDA COLUNA DA PAGINA SESSÃO FEED -->

				<div class="div_box_feed">
					<div class="box_fed">
						<h2>O que está acontecendo?</h2>
						<div class="div_feed_perfil">
							<div class="div_perfil_status">
								<img src="../assets/images/img-user.png" class="img_perfil">
								<div class="div_status"></div>
							</div>
							<div class="perfil_info">
								<p>O que está acontecendo?</p>
								<div class="container_qualquer" id="espac">
									<div>
										<img src="../assets/images/globo.png" class="img_globo">
										<span class="gloobi">Qualquer pessoa pode responder</span>
									</div>
								</div>
							</div>
						</div>
						<div class="icons_perfil_feed">
							<div class="box_perfil_icons">
								<img src="../assets/images/img.png" class="icons_feed">
								<img src="../assets/images/pdf.png" class="icons_feed">
								<img src="../assets/images/grafico.png" class="icons_feed">
								<img src="../assets/images/emoji.png" class="icons_feed">
								<img src="../assets/images/calendario.png" class="icons_feed">
								<img src="../assets/images/local.png" class="icons_feed">
							</div>
							<div class="box_perfil_cta">
								<a href="" class="cta_responder">Responder</a>
							</div>
						</div>
						<div class="categoria_feed">
							<p>Categoria:
								<span>Internet</span>
								<span>Governo e política</span>
							</p>
						</div>
					</div>

					<!-- SESSÃO DE PERGUNTAS DA PÁGINA -->

					<div class="container_pergunta">
						<div class="perfil_autor">
							<div class="div_perfil_status">
								<img src="../assets/images/img-user.png" class="img_perfil">
								<div class="div_status"></div>
							</div>
							<div class="detalhes_autor">
								<div>
									<h3>Nome do Autor<a href="">- Seguir</a></h3>
									<h4>Infos complementares</h4>
								</div>
							</div>
							<div class="box_respostas">
								<div>
									<p><span>7</span> Respostas</p>
									<hr>
								</div>
							</div>
						</div>
						<div class="box_titulo">
							<h3>Título da pergunta<span> - há 8 meses</span></h3>
						</div>
						<div class="box_legenda">
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised...<a href=""> Leia mais</a></p>
						</div>
						<!-- IMAGEM ATRAVÉS DO BACKGROUND -->
						<div class="box_capa">
							<div></div>
						</div>
						<div class="box_responder">
							<div class="div_responder">
								<label>
									<a href="" class="a_responder"><img src="../assets/images/responder.png" class="icon_responder">Responder</a>
								</label>
							</div>
							<div class="div_comentar">
								<div>
									<label>
										<a href="" class="a_like"><img src="../assets/images/like.png" class="icon_like">96</a>
									</label>
								</div>
								<div>
									<label>
										<a href="" class="a_dislike"><img src="../assets/images/dislike.png" class="icon_dislike">96</a>
									</label>
								</div>
								<div>
									<label>
										<a href="" class="a_compartilhar"><img src="../assets/images/compartilhar.png" class="icon_compartilhar">37</a>
									</label>
								</div>
								<div>
									<label>
										<a href="" class="a_comentar"><img src="../assets/images/comentarios.png" class="icon_comentar">37</a>
									</label>
								</div>
							</div>
							<div class="div_mais">
								<label>
									<a href="">
										<div></div>
										<div></div>
										<div></div>
									</a>
								</label>
							</div>
						</div>
					</div>

					<!-- SESSÃO DE COMENTARIOS -->

					<div class="container_comentarios">
						<div class="ordenar_comentario">
							<div>
								<form action="" method="">
									<select>
										<option>Ordernar por</option>
										<option value="">Mais Recentes</option>
										<option value="">Mais Antigos</option>
									</select>
								</form>
							</div>
						</div>

						<div class="box_comentarios">
							<div class="div_perfil_comentarios">
								<img src="../assets/images/img-user.png" class="img_perfil">
								<div class="div_status_comentario"></div>
							</div>
							<div class="dados_resposta">
								<h3>Nome de quem respondeu<span> - há 8 meses</span></h3>
								<p>Este fator representa o quanto uma pessoa conseguiu acumular de recursos. Podemos falar de dinheiro propriamente dito ou terras. Com estes fatores do texto gerado nesse campo.</p>
								<div class="div_comentar">
									<div>
										<label>
											<a href="" class="a_like"><img src="../assets/images/like.png" class="icon_like">96</a>
										</label>
									</div>
									<div>
										<label>
											<a href="" class="a_dislike"><img src="../assets/images/dislike.png" class="icon_dislike">96</a>
										</label>
									</div>
									<div>
										<label>
											<a href="" class="a_comentar">RESPONDER</a>
										</label>
									</div>
								</div>
								<div class="ocultar_comentarios">
									<div class="box_svg">
										<svg width="13" height="8" viewBox="0 0 13 8" fill="none" style="margin-bottom: auto;margin-top: auto;">
<path fill-rule="evenodd" clip-rule="evenodd" d="M6.5 0.884766L13 7.88476L0 7.88476L6.5 0.884766Z" fill="#375398"/>
</svg>
									</div>
									<div class="box_ocultar">
										<p>Ocultar 2 comentários</p>
									</div>
								</div>
							</div>
						</div>

						<!-- SESSÃO DE RESPOSTAS DOS COMENTARIOS -->

						<div class="div_justify">
							<div class="box_respostas_comentarios">
								<div class="div_perfil_respostas_comentarios">
									<img src="../assets/images/img-user.png" class="img_perfil_respostas">
									<div class="div_status_comentario"></div>
								</div>
								<div class="dados_resposta">
									<h3>Nome do Autor <span class="autor">AUTOR DA PERGUNTA</span><span> - há 8 meses (editado)</span></h3>
									<p>Este fator representa o quanto uma pessoa conseguiu acumular de recursos. Podemos falar de dinheiro propriamente dito ou terras. Com estes fatores do texto gerado nesse campo.</p>
									<div class="div_comentar">
										<div>
											<label>
												<a href="" class="a_like"><img src="../assets/images/like.png" class="icon_like">96</a>
											</label>
										</div>
										<div>
											<label>
												<a href="" class="a_dislike"><img src="../assets/images/dislike.png" class="icon_dislike">96</a>
											</label>
										</div>
										<div>
											<label>
												<a href="" class="a_comentar">RESPONDER</a>
											</label>
										</div>
									</div>
									<div class="ocultar_comentarios">
										<div class="box_svg">
											<svg width="13" height="8" viewBox="0 0 13 8" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M6.5 7.88477L-3.41715e-07 0.884765L13 0.884767L6.5 7.88477Z" fill="#375398"/>
</svg>
										</div>
										<div class="box_ocultar">
											<p>Ver 2 comentários</p>
										</div>
									</div>
								</div>
							</div>	
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

  <!-- jQuery Modal -->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />      
        <script type="module" src="../assets/scriptbase/script.js"></script>
        <script type="module" src="../assets/scriptbase/menu-mobile.js"></script>



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


<script src="../assets/scriptbase/GlobalTelaframe4.js"></script>

</body>
</html>
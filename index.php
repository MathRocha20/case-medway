<?php
$nomepagina ='Desenvolvedor Front-End';
$description = 'Olá! Eu me chamo Matheus Rocha, sou Desenvolvedor Front-End há mais de 3 anos e possuo experiência principalmente no desenvolvimento de lojas virtuais, sites, landing pages e blogs';
 include 'includes/head.php';
?>
</head>
<body>
	<?php include 'includes/topo.php'; ?>
	<?php include 'includes/banner.php'; ?>
	<main>
		<div class="bloco-qs" id="quem-somos">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="ajusta-titulo-qs">
							<h2 class="titulo-qs">Quem sou eu?</h2>
						</div>
					</div>
					<div class="col-md-6 col-12 d-flex align-items-center justify-content-center">
						<div class="ajusta-img-qs">
							<img src="img/matheus.webp" class="img-qs" title="Desenvolvedor Front-End - <?=$nomesite?>" alt="Desenvolvedor Front-End - <?=$nomesite?>">
						</div>
					</div>
					<div class="col-md-6 col-12 d-flex align-items-center justify-content-center">
						<div class="ajusta-texto-qs">
							<p class="texto-qs">Olá! Eu me chamo Matheus Rochas, sou <strong>Desenvolvedor Front-End</strong> há mais de 3 anos e possuo experiência principalmente no desenvolvimento de lojas virtuais, sites, landing pages e blogs.</p>

							<p class="texto-qs">Minha trajetória para tornar-me <strong>desenvolvedor front-end</strong> iniciou-se em 2015, ao ingressar em um curso técnico em Informatica, pelo SENAI, onde tive contato com diversos profissionais da área, participei de projetos práticos e, concluí em 2017. Em 2018 ingressei no curso Tecnologia em Sistemas para Internet, da Uninove, ao qual concluí em 2020.</p>

							<p class="texto-qs">Minha abordagem combina criatividade e técnica para produzir soluções que não apenas atendam, mas excedam as expectativas dos usuários. Estou sempre em busca de aprendizado contínuo, mantendo-me atualizado com as últimas tendências e melhores práticas do universo front-end. Trabalhar em equipe é essencial para mim, pois acredito que as melhores ideias surgem da colaboração. Estou animado para enfrentar novos desafios e contribuir para projetos que deixem uma marca digital memorável.</p>

							<p class="texto-qs">Com mais de 7 anos de estudos nessa àrea, sou capaz de te oferecer soluções responsivas, otimizadas, com boa performance e bom desempenho em mecanismos de busca. Quer me conhecer melhor?</p>

							<div class="btn-padrao-vb2">
								<a href="https://www.linkedin.com/in/matheus-r-936a64113/" target="_blank" title="Linkedin - <?=$nomesite?>"><i class="fab fa-linkedin"></i> Conheça meu Linkedin</a>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>

		<div class="bloco-skills" id="servicos">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-6">
						<div class="titulo-skills">
							<h3>Minhas principais Skills</h3>
						</div>
						<div class="ajusta-skills">
							<div class="ajusta-item-conhecimento">
								<p class="lbl-conhecimento">SEO <span>(90%)</span></p>
								<div class="barra-conhecimento seo"></div>
							</div>
							<div class="ajusta-item-conhecimento">
								<p class="lbl-conhecimento">Wordpress <span>(90%)</span></p>
								<div class="barra-conhecimento wp"></div>
							</div>
							<div class="ajusta-item-conhecimento">
								<p class="lbl-conhecimento">JS <span>(85%)</span></p>
								<div class="barra-conhecimento js"></div>
							</div>
							<div class="ajusta-item-conhecimento">
								<p class="lbl-conhecimento">PHP <span>(75%)</span></p>
								<div class="barra-conhecimento php"></div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="titulo-skills">
							<h3>Serviços como
								<br> <strong>Desenvolvedor Front-End</strong></h3>
						</div>
						<div class="row justify-content-center">
							<div class="col-md-5 col-6">
								<div class="card-servicos">
									<i class="fas fa-code"></i>
									<p class="titulo-card-servicos">Sites & <br> Landing Pages</p>
								</div>
							</div>
							<div class="col-md-5 col-6">
								<div class="card-servicos">
									<i class="fas fa-shopping-cart"></i>
									<p class="titulo-card-servicos">Lojas <br> Virtuais</p>
								</div>
							</div>
							<div class="col-md-5 col-6">
								<div class="card-servicos">
									<i class="fab fa-wordpress"></i>
									<p class="titulo-card-servicos">Blogs</p>
								</div>
							</div>
							<div class="col-md-5 col-6">
								<div class="card-servicos">
									<i class="fas fa-search"></i>
									<p class="titulo-card-servicos">Otimização <br> para SEO</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-12">
					<div class="btn-padrao-vb2">
						<a href="https://api.whatsapp.com/send?phone=5511949547480" target="_blank" title="Whatsapp - <?=$nomesite?>"><i class="fab fa-whatsapp"></i> Entre em contato</a>
					</div>
				</div>
			</div>
		</div>
		<div class="bloco-projetos" id="projetos">
			<div class="container-fluid">
				<div class="row justify-content-center">
					<div class="col-md-12">
						<h3 class="titulo-qs">Projetos</h3>
					</div>
					<div class="col-md-12">
						<div class="slider-projetos">
							<a href="https://matheusrochadev.com.br/reistips/" class="ajusta-card-projeto"  target="_blank" title="Desenvolvedor Front-End - <?=$nomesite?>">
								<div class="card-projeto">
									<div>
										<h5 class="titulo-card-projeto">Reis Tips</h5>
										<span>Acessar</span>
									</div>
								</div>
								<img title="Desenvolvedor Front-End - <?=$nomesite?>" alt="Desenvolvedor Front-End - <?=$nomesite?>" src="img/reis.webp" class="img-card-projeto">
							</a>
							<a href="https://oraculodastips.com.br/" class="ajusta-card-projeto" target="_blank" title="Desenvolvedor Front-End - <?=$nomesite?>">
								<div class="card-projeto">
									<div>
										<h5 class="titulo-card-projeto">Oráculo das Tips</h5>
										<span>Acessar</span>
									</div>
								</div>
								<img title="Desenvolvedor Front-End - <?=$nomesite?>" alt="Desenvolvedor Front-End - <?=$nomesite?>" src="img/odt.webp" class="img-card-projeto">
							</a>
							<a href="https://www.matheusrochadev.com.br/cfcsite/" class="ajusta-card-projeto" target="_blank" title="Desenvolvedor Front-End - <?=$nomesite?>">
								<div class="card-projeto">
									<div>
										<h5 class="titulo-card-projeto">Cartoleiros Fanáticos</h5>
										<span>Acessar</span>
									</div>
								</div>
								<img title="Desenvolvedor Front-End - <?=$nomesite?>" alt="Desenvolvedor Front-End - <?=$nomesite?>" src="img/cfc.webp" class="img-card-projeto">
							</a>
							<a href="https://matheusrochadev.com.br/sports-store/" class="ajusta-card-projeto" target="_blank" title="Desenvolvedor Front-End - <?=$nomesite?>">
								<div class="card-projeto">
									<div>
										<h5 class="titulo-card-projeto">Sports Store</h5>
										<span>Acessar</span>
									</div>
								</div>
								<img title="Desenvolvedor Front-End - <?=$nomesite?>" alt="Desenvolvedor Front-End - <?=$nomesite?>" src="img/sports.webp" class="img-card-projeto">
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="bloco-telegram" id="experiencia">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<h3 class="titulo-qs">Experiências Profissionais</h3>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-lg-3 col-md-4 col-6">
						<div class="card-xp">
							<img title="Desenvolvedor Front-End - <?=$nomesite?>" alt="Desenvolvedor Front-End - <?=$nomesite?>" src="img/pfizer.webp">
							<h3 class="titulo-card-xp">Laboratórios <br> Pfizer</h3>
							<h4 class="texto-card-xp">Aprendiz Administrativo</h4>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-6">
						<div class="card-xp">
							<img title="Desenvolvedor Front-End - <?=$nomesite?>" alt="Desenvolvedor Front-End - <?=$nomesite?>" src="img/close.webp">
							<h3 class="titulo-card-xp">Close-Up <br> International</h3>
							<h4 class="texto-card-xp">Estagiário de Suporte</h4>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-6">
						<div class="card-xp">
							<img title="Desenvolvedor Front-End - <?=$nomesite?>" alt="Desenvolvedor Front-End - <?=$nomesite?>" src="img/digitall.webp">
							<h3 class="titulo-card-xp">Digitall <br> Evolution</h3>
							<h4 class="texto-card-xp"><strong>Desenvolvedor Front-End</strong></h4>
						</div>
					</div>
				</div>
			</div>
		</div>	
		<div class="contato" id="contato">
			<div class="container-fluid">
				<div class="row justify-content-center">
					<div class="col-md-12">
						<div class="col-md-12">
							<h3 class="titulo-qs">Vamos bater um papo?</h3>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="titulo-redes">
							<h6 class="titulo-rodape">Minhas Redes Sociais</h6>
						</div>
						<div class="redes-sociais-rodape">
							<a href="https://www.instagram.com/mathszczesny/" target="_blank"  title="Instagram - <?=$nomesite?>"><i class="fab fa-instagram"></i></a>
							<a href="https://www.linkedin.com/in/matheus-r-936a64113/"  target="_blank" title="Linkedin - <?=$nomesite?>"><i class="fab fa-linkedin-in"></i></a>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="titulo-redes">
							<h6 class="titulo-rodape">E-mail</h6>
						</div>
						<div class="links-rodape">
							<a href="mailto:mateusrs99@gmail.com" target="_blank" title="Email - <?=$nomesite?>"><i class="fas fa-envelope"></i> mateusrs99@gmail.com</a>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="titulo-redes">
							<h6 class="titulo-rodape">Telefone / Whatsapp</h6>
						</div>
						<div class="links-rodape">
							<a href="https://api.whatsapp.com/send?phone=5511949547480" target="_blank" title="Whatsapp - <?=$nomesite?>"><i class="fab fa-whatsapp"></i> (11) 94954-7480</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
	<?php include 'includes/rodape.php'; ?>
</body>
</html>
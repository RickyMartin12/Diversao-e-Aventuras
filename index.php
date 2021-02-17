
<!DOCTYPE html>
<html lang="en">
<head>
<title>Aqui & Agora!| Home :: w3layouts</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="icon" href="favicon.ico" type="image/x-icon"/>

<meta name="keywords" content="wanderlust Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<!-- bootstrap-css -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<!-- flexslider -->
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<!-- //flexslider -->
<!-- carousel slider -->  
<link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="all"> 
<!-- //carousel slider -->  
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!--// css -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<link href="//fonts.googleapis.com/css?family=Aladin" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<link rel="stylesheet" href="admin/css/bootstrap-datetimepicker.css">
<link rel="stylesheet" href="admin/css/bootstrap-datetimepicker-standalone.css">


<!-- //font-awesome icons -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<style type="text/css">
	.justify
	{
		text-align: justify;
	}
	.content.show {
    z-index: 10000;
}
</style>
<!-- Supportive-JavaScript -->
<script src="js/modernizr.js"></script>
<!-- //Supportive-JavaScript -->
</head> 
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">  
	<?php include 'modals.php'; ?>
	<!-- banner -->
	<div id="home" class="w3ls-banner"> 
		<!-- header -->
		<div class="header-w3layouts"> 
			<!-- Navigation -->
			<nav class="navbar navbar-default navbar-fixed-top">
				<div class="container">
					<div class="navbar-header page-scroll">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
							<span class="sr-only">travel</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<img class="img-responsive imager" style="margin-top: -5px;" src="logo/aa.png">
					</div> 
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-ex1-collapse">
						<ul class="nav navbar-nav navbar-right">
							<!-- Hidden li included to remove active class from about link when scrolled up past about section -->
							<li class="hidden"><a class="page-scroll" href="#page-top"></a>	</li>
							<li><a class="page-scroll scroll" href="#home">Inicio</a></li>
							<li><a class="page-scroll scroll" href="#sobre">Acerca</a></li>
							<li><a class="page-scroll scroll" href="#actividade">Atividades</a></li>
							<li><a class="page-scroll scroll" href="#reserva">Reservas</a></li>
							<li><a class="page-scroll scroll" href="#sugestoes">Sugestões</a></li>
							<li><a class="page-scroll scroll" href="#contactos">Contactos</a></li>
							<li><a class="" href="admin">Login</a></li>
						</ul>
					</div>
					<!-- /.navbar-collapse -->
				</div>
				<!-- /.container -->
			</nav>  
		</div>	
	<div class="banner-top">
		<div class="slider">
			<div class="callbacks_container">
				<ul class="rslides callbacks callbacks1" id="slider4">
					<li>
						<div class="w3layouts-banner-top">
							<div class="container">
								<div class="agileits-banner-info jarallax">
									<h3 class="agile-title">Aventure-se</h3>
								</div>	
							</div>
						</div>
					</li>
					<li>
						<div class=" w3layouts-banner-top1">
							<div class="container">
								<div class="agileits-banner-info jarallax">
									<h3 class="agile-title">Passeios Inesqueciveis</h3>
								</div>	
							</div>
						</div>
					</li>
					<li>
						<div class=" w3layouts-banner-top2">
							<div class="container">
								<div class="agileits-banner-info2 jarallax">
									<h3 class="agile-title">Disfrute da Natureza</h3>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class=" w3layouts-banner-top3">
							<div class="container">
								<div class="agileits-banner-info3 jarallax">
									<h3 class="agile-title">Colecione Momentos</h3>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class=" w3layouts-banner-top4">
							<div class="container">
								<div class="agileits-banner-info3 jarallax">
									<h3 class="agile-title">Tempos Livres de Qualidade</h3>
								</div>
							</div>
						</div>
					</li>
					
				</ul>
			</div>
			<div class="clearfix"> </div>
			<script src="js/responsiveslides.min.js"></script>
			<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						  // Slideshow 4
						  $("#slider4").responsiveSlides({
							auto: true,
							pager:true,
							nav:false,
							speed: 500,
							namespace: "callbacks",
							before: function () {
							  $('.events').append("<li>before event fired.</li>");
							},
							after: function () {
							  $('.events').append("<li>after event fired.</li>");
							}
						  });
					
						});
			</script>
			<!--banner Slider starts Here-->
		</div>
	</div>
<!-- about -->
<div class="w3layouts-about" id="sobre">
	<div class="container">
		<div class="w3-about-grids">
			<div class="col-md-6 w3-about-left">
				  <section class="slider">
					<div id="slider" class="flexslider">
					  <ul class="slides">
						<li>
							<video controls id="video_aud" style="width: 100%; height: 279px;">
      							<source src="algarve.mp4" type="video/mp4">
    						</video>
						</li>
						<li>
							<img src="images/Intro/Albufeira.jpg" alt="Albufeira" />
						</li>
						<li>
							<img src="images/Intro/Farol-2-628x420.jpg" alt="Farol" />
						</li>
						<li>
							<img src="images/Intro/Monte-Rei-Golf-Course-658x420.jpg" alt="Monte Rei Golfe" />
						</li>
						<li>
							<img src="images/Intro/Praia-da-Arrifana-2.jpg" alt="Praia da Arrifana" />
						</li>
						<li>
							<img src="images/Intro/praiavalecovo-Copiar-1-747x420.jpg" alt="Praia Vale Covo" />
						</li>
						
					  </ul>
					</div>
					
				  </section>
			</div>
			<div class="col-md-6 w3-about-left">
				<h1>Sobre Nós</h1>
				<br>
				<p class="justify">Esta página pretende divulgar diversas atividades para fazer, aventuras divertidas, pode escolher um dos 16 concelhos do Algarve. Escolha o concelho e veja as atividades que pode selecionar. Aqui &amp; Agora oferece-lhe diferentes sugestões, dicas de aventuras em grupo, atividades para fazer em família. Oferece também conteúdos úteis para Educação e Tempos Livres. Registe-se também para a nossa newsletter semanal e fique a par das últimas novidades</span></p>
				<div class="w3l-button">
					<a href="#" data-toggle="modal" data-target="#myModal">Saber Mais</a>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- //about -->
<!-- modal -->
	<div class="modal about-modal fade" id="myModal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header"> 
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						<h4 class="modal-title">Objectivos</h4>
				</div> 
				<div class="modal-body">
					<div class="agileits-w3layouts-info">
						<video controls id="video_aud2" style="width: 100%; height: 279px;">
      							<source src="algarve.mp4" type="video/mp4">
    					</video>
						<p class="justify">Estimular Atividades em família, apresentando um leque de opções para todos os gostos de forma a ir ao encontro de um maior número de famílias, para que estas possam aproveitar inteiramente os momentos de lazer e disfrutá-los.</p>
						<p class="justify">Queremos proporcionar oportunidades únicas pois é importante aproveitar o presente, esquecer a azafama diária e criar memórias inesquecíveis.</p>
						<p class="justify">Em família ou com amigos o fundamental é aventurar-se, procuramos indicar sítios de interesse, conteúdos relevantes, e tudo o que seja necessário para simplificar e contribuir para o bem-estar da vida da comunidade.</p>
						<p class="justify">Queremos facilitar a tarefa de decidir o que fazer e onde ir, com incidência no distrito do Algarve. Apresentamos também outras sugestões que pensamos ser interessantes: Locais a visitar em todo o mundo, sítios onde comer bem, conteúdos informativos e educativos.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //modal -->
<!-- Locations -->
<div class="wthreelocationsaits" id="actividade">
		<div class="container">
			<h3 class="w3l-head text-center">Atividades</h3>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<p class="bl justify">Passeios inesquecíveis ao longo do rio Guadiana, poder observar as amendoeiras em flor, as aves em locais privilegiados. Venha conhecer locais históricos e vestígios arqueológicos.</p>
						<p class="bl justify">Aventuras sem limites: Slide, passeios de barco, BTT, canoagem, passeios a cavalo, sofcoasteerning, surf, bodybording, passadiços, grutas e vistas magnificas. Escolha a sua aventura, eleja o local e disfrute de diferentes atividades!</p>
					</div>
				</div>
			</div>
			<section class="grid3d vertical" id="grid3d">
				<div class="grid-wrap">
					<div class="grid">
						<figure class="col-md-4 effect-zoe"><img src="images/actividades/arborismo.jpg" alt="Arborismo"><figcaption><h4>Arborismo</h4></figcaption></figure>
						<figure class="col-md-4 effect-zoe"><img src="images/actividades/aves.jpg" alt="Observação de Aves"><figcaption><h4>Observação de Aves</h4></figcaption></figure>
						<figure class="col-md-4 effect-zoe"><img src="images/actividades/btt.jpg" alt="Fun River - BTT"><figcaption><h4>BTT</h4></figcaption></figure>
						<figure class="col-md-4 effect-zoe"><img src="images/actividades/cavalo.jpg" alt="Passeio a Cavalo"><figcaption><h4>Passeio a Cavalo</h4></figcaption></figure>
						<figure class="col-md-4 effect-zoe"><img src="images/actividades/kaiak.jpg" alt="Fun River - Kaiak"><figcaption><h4>Kaiak</h4></figcaption></figure>
						<figure class="col-md-4 effect-zoe"><img src="images/actividades/mira.jpg" alt="Passeios de Kayaks no Rio Mira"><figcaption><h4>Passeios no Ria Mira</h4></figcaption></figure>
						<figure class="col-md-4 effect-zoe"><img src="images/actividades/paintball.jpg" alt="PaintBall"><figcaption><h4>Paintball</h4></figcaption></figure>
						<figure class="col-md-4 effect-zoe"><img src="images/actividades/passeio_barco.jpg" alt="Passeios de Barco"><figcaption><h4>Passeios de Barco</h4></figcaption></figure>
						<figure class="col-md-4 effect-zoe"><img src="images/actividades/slide_alcoutim.jpg" alt="Slide - Limite Zero"><figcaption><h4>Slide</h4></figcaption></figure>
						<figure class="col-md-4 effect-zoe"><img src="images/actividades/softcoasteering.jpg" alt="Sofcoastering"><figcaption><h4>Sofcoastering</h4></figcaption></figure>
						<figure class="col-md-4 effect-zoe"><img src="images/actividades/surf.jpg" alt="Aulas de Surf e de Bodyboard"><figcaption><h4>Aulas Surf Bodyboard</h4></figcaption></figure>
					</div>
				</div>
				<div class="content">
					<div>
						<div class="dummy-img dummy-img-1"><img src="images/actividades/arborismo.jpg" alt="wanderlust" class="img-responsive"></div>
						<p class="dummy-text aitsheadingw3">Arborismo</p>
						<p class="dummy-text">Aventuras em contato com a natureza, andando de árvore em árvore em plena floresta. Ideal para todas as idades pois os passeios em trilhas instaladas nas árvores são assegurados por equipamentos portáteis de segurança.</p>
					</div>
					<div>
						<div class="dummy-img dummy-img-2"><img src="images/actividades/aves.jpg" alt="Observação de Aves" class="img-responsive"></div>
						<p class="dummy-text aitsheadingw3">Observação de Aves</p>
						<p class="dummy-text">A Lagoa dos Salgados, é parte do património regional do Algarve, é um local excelente para quem gosta de estar em contacto com a natureza. A observação de aves é mais um atrativo.</p>
					</div>
					<div>
						<div class="dummy-img dummy-img-3"><img src="images/actividades/btt.jpg" alt="Fun River - BTT" class="img-responsive"></div>
						<p class="dummy-text aitsheadingw3">Fun River - BTT</p>
						<p class="dummy-text">A Fun River disponibiliza várias atividades em plena natureza, pode alugar as bicicletas todo o terreno para passeios junto ao rio ou mar para disfrutar de momentos únicos em família.</p>
					</div>
					<div>
						<div class="dummy-img dummy-img-4"><img src="images/actividades/cavalo.jpg" alt="Passeios do Cavalo - Ilha do Pesegueiro" class="img-responsive"></div>
						<p class="dummy-text aitsheadingw3">Passeios do Cavalo - Ilha do Pesegueiro</p>
						<p class="dummy-text">Na Herdade do Pessegueiro pode realizar passeios a cavalo à beira mar, por trilhos sobre as dunas, ou em serras e vales ao longo da costa alentejana. Pode optar por passeios de uma hora ou semana a cavalo.</p>
					</div>
					<div>
						<div class="dummy-img dummy-img-5"><img src="images/actividades/kaiak.jpg" alt="Fun River - Kaiak" class="img-responsive"></div>
						<p class="dummy-text aitsheadingw3">Fun River - Kayak</p>
						<p class="dummy-text">Experimente passeios de Kayak, escolhendo o percurso que mais lhe agradar, no rio Guadiana com saída em Alcoutim com possibilidade de passar por Guerreiros do Rio, San Lúcar de Guadiana, Mértola, Vila Real de St. António, Foz de Odeleite entre outros locais interessantes na região. Em grupos ou alugue o equipamento.</p>
					</div>
					<div>
						<div class="dummy-img dummy-img-6"><img src="images/actividades/mira.jpg" alt="Passeios de Barco no Rio Mira" class="img-responsive"></div>
						<p class="dummy-text aitsheadingw3">Passeios de barco e actividades no Rio Mira</p>
						<p class="dummy-text">Em comunhão com a natureza num ambiente natural da zona ribeirinha experimente os passeios de barco ou outras atividades que lhe permitam usufruir da biodiversidade marinha do rio Mira, uma vivência inesquecível.</p>
					</div>
					<div>
						<div class="dummy-img dummy-img-7"><img src="images/actividades/paintball.jpg" alt="Paintball" class="img-responsive"></div>
						<p class="dummy-text aitsheadingw3">Paintball</p>
						<p class="dummy-text">Disputado em plena natureza, o Paintball é um jogo divertido de estratégia para resistir aos invasores e surpreender nos ataques. Para atingir os adversários deve marcar as roupas deles com tinta, sem causar dano ou lesão corporal.</p>
						<p class="dummy-text">Existem vários tipos de jogos de Paintball: um contra um, grupo contra grupo, contagem de pontos, captura de líder, defesa de território, captura de bandeira, como em qualquer outro jogo de simulação de combate. O participante usará uma máscara facial protetora, camuflado, protetor de peito e bolas. </p>
					</div>
					<div>
						<div class="dummy-img dummy-img-8"><img src="images/actividades/passeio_barco.jpg" alt="Passeio de Barco" class="img-responsive"></div>
						<p class="dummy-text aitsheadingw3">Passeio de Barco</p>
						<p class="dummy-text">Pode escolher o passeio de barco/cruzeiro que mais lhe agradar em família ou em grupo de amigos. Em Albufeira pode fazer um passeio ao longo da costa Algarvia, ver grutas e procurar golfinhos.</p>
						<p class="dummy-text">A sair de Portimão, pode fazer um passeio de duas horas e visitar o interior das magnificas Grutas de Benagil, paragem numa praia paradisíaca para procurar golfinhos.</p>
						<p class="dummy-text">Imperdível é também, o magnifico passeio que atravessa os canais do parque natural da Ria Formosa a bordo de um catamarã. Com visita às 4 diferentes ilhas pode optar por um almoço na tradicional ilha piscatória da Culatra.</p>
					</div>
					<div>
						<div class="dummy-img dummy-img-9"><img src="images/actividades/slide_alcoutim.jpg" alt="Slide - Limite Zero" class="img-responsive"></div>
						<p class="dummy-text aitsheadingw3">Slide - Limite Zero</p>
						<p class="dummy-text">Disfrute de uma experiência única, com uma vista fantástica cruza o Rio Guadiana de Espanha até Portugal através da primeira Tirolesa transfronteiriça do mundo. Lance-se num voo com um comprimento de 720 metros, numa velocidade entre os 70 e 80 quilómetros por hora. Os grupos podem ser até 8 pessoas, e são transportados com o equipamento e os capacetes num veículo 4×4 até à plataforma de saída. No fim, já em Portugal, caminhe até o cais de Alcoutim e apanhe o Ferry regressar a Espanha.</p>
					</div>
					<div>
						<div class="dummy-img dummy-img-10"><img src="images/actividades/softcoasteering.jpg" alt="Slide - Limite Zero" class="img-responsive"></div>
						<p class="dummy-text aitsheadingw3">Sofcoastering</p>
						<p class="dummy-text">Experimente algo novo, uma atividade que consiste em progredir pela costa marítima, através de escarpa rochosa ou do mar, recorrendo à natação, mergulho, snorkeling, escalada, caminhada, espeleologia e saltos para a água. Venha explorar as grutas e fendas, subir as rochas e nadar.</p>
					</div>
					<div>
						<div class="dummy-img dummy-img-11"><img src="images/actividades/surf.jpg" alt="Aulas de Surf e de Bodyboard" class="img-responsive"></div>
						<p class="dummy-text aitsheadingw3">Aulas de Surf e de Bodyboard</p>
						<p class="dummy-text">A Surf Seixe Academy, escola de surf, bodyboard, na maravilhosa praia de Odeceixe. Nas férias venha experimentar aulas de surf ou bodyboard num espírito lúdico e de diversão, mas com profissionais de excelência. Oferece também, iniciação ao treino com uma vertente técnica e ainda o acompanhamento e aperfeiçoamento do nível de surf para aqueles que já praticam a modalidade.</p>
					</div>
					<span class="loading"></span>
					<span class="icon close-content"><i class="fa fa-times" aria-hidden="true"></i></span>
				</div>
			</section>
		</div>
	</div>
	<!-- //Locations -->	

<!-- blog -->	
<div class="blog jarallax" id="reserva">
	<div class="container">
			<h3 class="w3l-head text-center">Reserva</h3>
			<div class="w3-blog-grids">
				<form id="submit_reserva">
				<div class="container">
					<div class="row" style="background: #87CEEB; padding: 10px;">


						<div class="col-xs-12 col-sm-6 col-md-4">
	                     <div class="form-group">
	                        <i class="fas fa-user"></i> - <label for="modelo">Nome:</label>
	                        <input type="text" class="form-control" name="nome_reserva" id="nome_reserva" placeholder="Nome da Pessoa">
	                      </div>
	                    </div>

	                    <div class="col-xs-12 col-sm-6 col-md-4">
	                     <div class="form-group">
	                        <i class="fas fa-id-card"></i> - <label for="modelo">Email:</label>
	                        <input type="email" class="form-control" id="email" name="email" placeholder="Endereço Electrónico">
	                      </div>
	                    </div>

	                    <div class="col-xs-12 col-sm-6 col-md-4">
	                     <div class="form-group">
		                      <span class="glyphicon glyphicon-calendar"></span> - <label for="data_reserva">Data de Reserva:</label>
		                      <div class='input-group date' id='data_reseva_dt'>
		                          <input type='text' readonly class="form-control" name="data_reserva" id="data_reserva" placeholder="Data de Reserva" />
		                          <span class="input-group-addon">
		                              <span class="glyphicon glyphicon-calendar"></span>
		                          </span>
		                      </div>
		                  </div>
	                    </div>

	                    <div class="col-xs-12 col-sm-6 col-md-4">
	                    	<div class="form-group">
		                        <i class="fas fa-flag"></i> - <label for="localidade">Localidade:</label>
		                        <select class="form-control" name="cidades" id="cidades" onchange="getActividades(this.value);">
								</select>
	                      	</div>

	                    </div>

	                    <div class="col-xs-12 col-sm-6 col-md-4">
	                    	<div class="form-group">
		                        <i class="fas fa-hiking"></i> - <label for="actividades">Atividades:</label>
		                        <select class="form-control" id="actividades" name="actividades" onchange="getIdReservaActividade($('#cidades').val(), this.value);">
		                        	
		                        </select>
	                      	</div>

	                    </div>

	                    <input type="hidden" id="id_reserva_actividade">

	                    <div class="col-xs-12 col-sm-6 col-md-4">
	                    	<div class="form-group">
		                        <i class="fas fa-male"></i> - <label for="actividades">Numero de Pessoas:</label>
		                        <input type="number" class="form-control" name="n_pessoas" id="n_pessoas" placeholder="Numero de Pessoas">
	                      	</div>

	                    </div>

	                    <div class="col-xs-12 col-md-12">
                     		<div class="form-group">
                        		<i class="fas fa-file"></i> - <label for="modelo">Comentario:</label>
                        		<textarea class="form-control" rows="5" name="observacao" id="observacao" placeholder="Deixa a tua opinião"></textarea>
                      		</div>
                    	</div>

                    	<div class="col-xs-12 col-md-12">
                     		<div class="form-group">

		                    	<button type="reset" class="btn btn-default btn-clear"><i class="fa fa-eraser"></i><font class="hidden-xs"> Limpar</font></button>
		                        <button type="submit" id="submit-new" class="btn btn-success"><i class="fas fa-save"></i><font class="hidden-xs"> Guardar</font></button>

		                    </div>
		                </div>








					</div>


				</div>
			</form>

				
				<div class="clearfix"></div>
			</div>
        </div>	
    </div>
</div>	
<!-- //blog -->	


<!-- testimonials -->
	<div class="testimonials jarallax" id="sugestoes">
		<div class="container">
			<h3 class="w3l-head text-center">Sujestões</h3>
		</div>
		<div class="w3_testimonials_grids w3_testimonials_grids">
			<div id="owl-demo" class="owl-carousel"> 

				<div class="item w3_agileits_testimonials_grid" id="post">
					<img src="images/sugestoes/1.jpg" alt=" " class="img-responsive" />
					<h4>Aproveite, a vida acontece Aqui e Agora!</h4>
					<p>Desligue os pensamentos e disfrute do que está ao seu redor, muitas vezes estamos no num modo chamado “piloto automático”. Siga o mindfulness, que é a capacidade de estarmos presentes, de tomar consciência do que nos rodeia e das emoções do nosso corpo.</p>
				</div>
				<div class="item w3_agileits_testimonials_grid">
					<img src="images/sugestoes/2.jpg" alt=" " class="img-responsive" id="post" />
					<h4>Damos-lhe sugestões de atividades a fazer com as crianças, programas que pode adaptar, etc.</h4>
					<p>Indicamos, também links úteis onde pode encontrar atividades para fazer com as crianças, locais e monumentos a visitar.</p>
				</div>
				<div class="item w3_agileits_testimonials_grid">
					<img src="images/sugestoes/3.jpg" alt=" " class="img-responsive" id="post" />
					<h4>Sugerimos workshops, formações, programas educativos, passeios lúdicos, entre outros</h4>
					<p>Informamos acerca de espetáculos, eventos e passatempos.</p>
					<p><a href="flip/info.html" target="_blank">Fotografia // Monumentos // Onde comer bem</a></p>
				</div>

			</div>
		</div>
	</div>
<!-- //testimonials -->
<!--contact -->
<div class="contact jarallax" id="contactos">
		<div class="container">
			<h3 class="w3l-head text-center">Contacte-nos</h3>
			<div class="agileits_w3layouts-contact">
				<div class="col-md-6 col-sm-12 agileinfo-contact-left">
					<div class="w3ls-address">
						<span class="fa fa-map-marker icon" aria-hidden="true"></span>
						<h6>Address:</h6><p>Aqui &amp; Agora Rua da Liberdade, nº27 8</p>
					</div>
					<div class="w3ls-address mail">
						<span class="fa fa-envelope icon" aria-hidden="true"></span>
						<h6>Mail:</h6><a href="mailto:info@example.com">elisadias8@gmail.com</a>
					</div>
					<div class="w3ls-address">
						<span class="fa fa-phone icon" aria-hidden="true"></span>
						<h6>Phone:</h6><p><a href="tel: +351925016594">925016594</a></p>
					</div>
					<form id="submit_info">
						<input type="text" class="name" name="nome" placeholder="Nome" id="input-25">
						<input type="email" class="mail" name="email" placeholder="Email" id="input-26">
						<textarea placeholder="Sua Mensagem" name="mensagem"></textarea>
						<input type="submit" value="ENVIAR">
						<input type="reset" value="LIMPAR">
					</form>	
				</div>
				<div class="col-md-6 col-sm-12  agileits_w3layouts-map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3185.2712154287983!2d-7.845468385088543!3d37.02717916259016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd0554cf61e3da35%3A0x683d5486a914f9b6!2sR.+da+Liberdade%2C+Olh%C3%A3o!5e0!3m2!1spt-PT!2spt!4v1555279587093!5m2!1spt-PT!2spt" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
</div>		
<!-- //contact -->
<script src="js/owl.carousel.js"></script>  
	<script>
		$(document).ready(function() { 
			$("#owl-demo").owlCarousel({
			  autoPlay: true, //Set AutoPlay to 3 seconds
			  items :1,
			  itemsDesktop : [640,2],
			  itemsDesktopSmall : [414,1],
			  navigation : true,
			  // THIS IS THE NEW PART
				afterAction: function(el){
					//remove class active
					this
					.$owlItems
					.removeClass('active')
					//add class active
					this
					.$owlItems //owl internal $ object containing items
					.eq(this.currentItem + 1)
					.addClass('active')
					}
			// END NEW PART
		 
			});
			
		}); 
	</script>
	

<!-- copyright -->
<div class="copyright">
		<p>© 2019 Aqui e Agora. All Rights Reserved | Design by <a href="/carros_toyota_reserva/" target="=_blank"> Elisa Dias & Ricardo Peleira </a></p>
</div>
<!-- //copyright -->
<!--//footer -->				
<!-- FlexSlider -->
  <script defer src="js/jquery.flexslider.js"></script>
	<script type="text/javascript">
    $(window).load(function(){
      $('#carousel').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: true,
        slideshow: false,
        itemWidth: 102,
        itemMargin: 5,
        asNavFor: '#slider'
      });

      $('#slider').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: true,
        slideshow: true,
        sync: "#carousel",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });

    $("#video_aud").on('mousemove', function(e)
	{
	   $('#video_aud').trigger('play');
	});

	$("#video_aud").on('mouseleave', function(e)
	{
	   $('#video_aud').trigger('pause');
	});

	$('#myModal').on('hidden.bs.modal', function () {
					$('#video_aud2').trigger('pause');
				});

	

  </script>
<!-- //FlexSlider -->
<!-- Tour-Locations-JavaScript -->
			<script src="js/classie.js"></script>
			<script src="js/helper.js"></script>
			<script src="js/grid3d.js"></script>
			<script>
				new grid3D( document.getElementById( 'grid3d' ) );
			</script>
<!-- //Tour-Locations-JavaScript -->
<script src="js/jarallax.js"></script>
<script type="text/javascript">
	/* init Jarallax */
	$('.jarallax').jarallax({
		speed: 0.5,
		imgWidth: 1366,
		imgHeight: 768
	})
</script><!-- //js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- here starts scrolling icon -->
		<script type="text/javascript">
			$(document).ready(function() {
				/*
					var defaults = {
					containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
					};
				*/
										
				$().UItoTop({ easingType: 'easeOutQuart' });
									
				});
		</script>

<!-- start-smoth-scrolling -->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
		<script src="admin/js/bootbox.min.js"></script>
		<script src="admin/js/momentjs/moment-with-locales.min.js"></script>
		<script src="admin/js/bootstrap-datetimepicker.min.js"></script>
		<!-- /ends-smoth-scrolling -->
	<!-- //here ends scrolling icon -->

		<script type="text/javascript">

				var date = new Date();
          d = date.setDate(date.getDate());
          h = date.setHours(date.getHours());
			
			$("#data_reseva_dt").datetimepicker({ ignoreReadonly: true, format: 'DD/MM/YYYY', 
    locale: 'pt', showTodayButton: true, minDate: h, defaultDate: h, widgetPositioning: { horizontal: 'right', vertical: 'bottom' }});

			getCidades();

function getCidades()
{
	var s = '';
	var s1 = '';
	$("#actividades").prop('disabled', true);


	s += '<option value ="">Escolhe a Cidade...</option>';
	s1 += '<option value ="">Escolhe a Atividade...</option>';


	$("#actividades").html(s1);
	$("#cidades").html(s);
  setTimeout(function(){ 
  dataValue='action=1';
    $.ajax({ url:'../web/reserva_actividades/action_reserva.php',
    data:dataValue,
    type:'POST', 
    cache:false,
    success: function(data){
      $('.back').fadeOut();

      arr = JSON.parse(data);

          if (arr.length == null || arr.length < 1 )
          {
            
            console.log('nada');
          }
          else 
          {
            console.log(arr);
            for(i=0;i<arr.length;i++)
            {								
				
				s +='<option value="'+arr[i].nome_local+'">'+arr[i].nome_local+'</option>';

			}
						
			$("#cidades").html(s);


            
            
            
          }
        },
        error:function(data){
           console.log('erro');
       		}
        });
    
    }, 1000);
}


function getActividades(cidade)
{
	var s1 = '';
	$("#actividades").prop('disabled', false);

	s1 += '<option value ="">Escolhe a Atividade...</option>';


	$("#actividades").html(s1);
  setTimeout(function(){ 
  dataValue='action=2&cidade='+cidade;
    $.ajax({ url:'../web/reserva_actividades/action_reserva.php',
    data:dataValue,
    type:'POST', 
    cache:false,
    success: function(data){
      $('.back').fadeOut();

      arr = JSON.parse(data);

          if (arr.length == null || arr.length < 1 )
          {
            
            console.log('nada');
          }
          else 
          {
            console.log(arr);
            for(i=0;i<arr.length;i++)
            {								
				
				s1 +='<option value="'+arr[i].actividade+'">'+arr[i].actividade+'</option>';


			}
						
			$("#actividades").html(s1);

			console.log($("#actividades").val());




            
            
            
          }
        },
        error:function(data){
           console.log('erro');
       		}
        });
    
    }, 1000);
}

function getIdReservaActividade(cidade, actividade)
{
  setTimeout(function(){ 
  dataValue='action=3&cidade='+cidade+'&actividade='+actividade;
  console.log(dataValue);
    $.ajax({ url:'../web/reserva_actividades/action_reserva.php',
    data:dataValue,
    type:'POST', 
    cache:false,
    success: function(data){
      $('.back').fadeOut();

      arr = JSON.parse(data);

          if (arr.length == null || arr.length < 1 )
          {
            
            console.log('nada');
          }
          else 
          {
            console.log(arr);
            for(i=0;i<arr.length;i++)
            {								
				$("#id_reserva_actividade").val(arr[0].id);

			}
						

            
            
            
          }
        },
        error:function(data){
           console.log('erro');
       		}
        });
    
    }, 1000);
}

$("#submit_reserva").submit(function(e){
$(".back").show();
$(".load").show();
e.preventDefault();
dataValue = "action=4&nome="+$("#nome_reserva").val()+"&email="+$("#email").val()+"&data_reserva="+$("#data_reserva").val()+"&id_reserva_actividade="+$("#id_reserva_actividade").val()+"&n_pessoas="+$("#n_pessoas").val()+"&observacao="+$("#observacao").val()+"&localidade="+$("#cidades").val()+"&actividade="+$("#actividades").val();
console.log(dataValue);
$.ajax({ url:'../web/reserva_actividades/action_reserva.php',
data:dataValue,
    type:'POST', 
    cache: false,
    success:function(data){
    	arr = JSON.parse(data);
       if (arr.error)
                    {
                            $(".back").hide();
                            $(".load").show();
                        jQuery(".debug-url").html("Por favor, verifique:<br><br>"+arr.error+"<br> Retifique o Erro e tente novamente.");
                        $('#Modalko').modal();
                    }
                    else if (arr.success == 0)
                    {
                            $(".back").hide();
                            $(".load").show();
                            
                        $('.debug-url').html('A Criação da Reserva nao foi adicionado com sucesso');
                        $("#mensagem_ko").trigger('click');
                    }
                    else if (arr.success == 1)
                    {
                    	updateVagasReservas($("#n_pessoas").val(), $("#id_reserva_actividade").val());
                            $(".back").hide();
                            $(".load").show();
                        $('.debug-url').html('A Criação da Reserva foi adicionado com sucesso');
                        
                        $("#mensagem_ok").trigger('click');
                        $("#submit_reserva")[0].reset();

                        


                        
                    }
                    else if(data == 100)
                    {
				      $('.debug-url').html('O Numero de Vagas acabaram-se. Já não há mais vagas para esta actividade.');
				      $("#mensagem_ko").trigger('click');
				     }
                    
     
   },
 error:function(){
     $(".back").hide();
     $(".load").show();
     $('.debug-url').html("O Adição de Reservas  não foi submtido com sucesso. Verifique a conexão WI-FI e tente novamente.");
        $('#Modalko3').modal();
    }
  });
});




function updateVagasReservas (n_pessoas, id_reserva_actividade)
{
	setTimeout(function(){ 
      
  dataValue='&action=5&num='+n_pessoas+'&id_reserva_actividade='+id_reserva_actividade;
  console.log(dataValue);
    $.ajax({ url:'../web/reserva_actividades/action_reserva.php',
    data:dataValue,
    type:'POST', 
    cache:false,
    success: function(data){
      	$('.back').fadeOut();
	    if (data == 0){
	        $('.debug-url').html('Erro, ao modificar o Numero de Vagas </b>!');
	        $("#mensagem_ko").trigger('click');
	     }
	    else if(data == 1){
	      $('.debug-url').html('O Numero de Vagas foi modificado com sucesso.');
	      $("#mensagem_ok").trigger('click');
	      setTimeout(function(){  $('#Modalok').modal('hide');}, 2500);
	     }
	     else if(data == 100){
	      $('.debug-url').html('O Numero de Vagas acabaram-se. Já não há mais vagas para esta actividade');
	      $("#mensagem_ko").trigger('click');
	      setTimeout(function(){  $('#Modalok').modal('hide');}, 2500);
	     }
	    },
    error:function(data){
        $('#Modalko .debug-url').html('Não foi possivel obter dados do Numero de Vagas, verifique a ligação Wi-Fi.');
        $("#mensagem_ko").trigger('click');
         $('.back').fadeOut();
      }
    });

}, 1000);
}

$("#submit_info").submit(function(e){
$(".back").show();
$(".load").show();
e.preventDefault();
dataValue = $(this).serialize();
console.log(dataValue);
$.ajax({ url:'info/resp.php',
data:dataValue,
    type:'POST', 
    cache: false,
    success:function(data){
    	console.log(data);
       if(data == 0)
      {
          $(".back").hide();
          $(".load").show();
        $('.debug-url').html("O Pedido de Informações foi submtido com sucesso. Verifique a mensagem no email: <b>"+$("#input-26").val()+"</b>.");
          $('#submit_info')[0].reset();
          $("#mensagem_ok").trigger('click');
          setTimeout(function(){
          $('#Modalok').modal('hide');},2500);
     }
     else
     {
      $(".back").hide();
      $(".load").show();
      $('.debug-url').html("Por favor verifique os seguintes campos:<br><br>"+data+"<br> e tente novamente.");
        $('#Modalko').modal();
     }
     
   },
 error:function(){
     $(".back").hide();
     $(".load").show();
     $('.debug-url').html("O Pedido de Informações não foi submtido com sucesso. Verifique a conexão WI-FI e tente novamente.");
        $('#Modalko').modal();
    }
  });
});

</script>


</body>	
</html>


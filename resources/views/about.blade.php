@extends('templates.layout')

@section('extra_meta')
	<meta name="description" content="Conheça a história do melhor restaurante da região sul do RN."/>
	<link rel="canonical" href="http://restaurantetupi.com.br/sobre" />
@endsection

@section('title')
Sobre Nós
@endsection

@section('page_content')
	<!-- Title Page -->
	<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(images/1800px/gramado.jpg);">
		<h2 class="tit6 t-center">
			Sobre Nós
		</h2>
	</section>


	<!-- Our Story -->
	<section class="bg2-pattern p-t-70 p-b-70 t-center p-l-15 p-r-15">
		<span class="tit2 t-center">
			Restaurante Tupi
		</span>

		<h3 class="tit3 t-center m-b-35 m-t-5">
			Quem somos
		</h3>

		<p class="size32 m-l-r-auto">
			&emsp;&emsp;Somos uma empresa familiar atuando no mercado gastronômico há onze anos, 
			objetivando serviços de qualidade e padrão, aliado a preço justo, porque acreditamos que, 
			comida boa e saborosa com atendimento eficaz não precisa ser caro.
			<br>
			&emsp;&emsp;O Tupi foi pensado e criado para oferecer aos clientes refeições saborosas em 
			mbiente agradável, tranquilo e diferenciado, com acessibilidade e segurança. O espaço 
			proporciona às famílias momentos de paz e bem-estar em meio à natureza. A proposta da 
			casa é, comer bem e relaxar, fugir da agitação do dia a dia, conversar e se envolver com 
			a natureza ao redor. Meditar, colocar o pé no chão, sentir a brisa fresca, ouvir o canto 
			dos pássaros e desfrutar das belas paisagens.
			<br>
			&emsp;&emsp;Estamos situados dentro de uma propriedade familiar (Fazenda Pituba), às 
			margens da Mata Atlântica. Nosso ambiente se configura em amplo estacionamento, lugares 
			para 120 pessoas, um redário para uma soneca após o almoço, mirante para fotos únicas, 
			<span style="color:#43A906">banheiro com acessibiladade, fraldário, espaço kids</span>, aquário, jardins, muito verde e 
			uma pequena trilha que leva ao rio Pituba. Este com águas cristalinas, garante um banho 
			gelado e cheio de energia positiva. Aqui no Tupi os clientes podem desfrutar de um 
			delicioso <span style="color:#43A906">banho de bica, dentro da Mata</span>, recarregando 
			as energias em contato com um pequeno paraíso.
			<br>
			&emsp;&emsp;Oferecemos um cardápio variado de culinária regional com variações em pratos 
			para (duas e quatro pessoas) de: carne de sol, paçoca, peixes, camarões, moquecas, 
			galinha caipira e petiscos variados. Sucos de frutas e de polpas, drinques, cervejas, 
			refrigerantes, café espresso e sobremesas. Dispomos de pratos individuais de terça a 
			sexta e oferecemos buffet para eventos.
			<br>
			&emsp;&emsp;Localização - onze quilomêtros após Goianinha na BR 101, Km 157, sentido 
			Paraíba. Distante 600 metros após a entrada. Temos placas sinalizando.

		</p>
	</section>

	<section>
		<div class="header-intro the-best parallax100 t-center p-t-135 p-b-158">
			<span class="tit2 p-l-15 p-r-15" style="color: #fff;">
				O melhor
			</span>
			<h3 class="tit4 t-center p-l-15 p-r-15 p-t-3">
				Região sul do RN
			</h3>
		</div>
	</section>

	<!-- Why Tupi -->
	<section class="bg2-pattern p-t-70 p-b-70 t-center p-l-15 p-r-15">
		<span class="tit2 t-center">
			Significado
		</span>

		<h3 class="tit3 t-center m-b-35 m-t-5">
			Por quê Tupi
		</h3>

		<p class="size32 m-l-r-auto">
			&emsp;&emsp;O interesse pela língua tupi representa o sentimento de brasilidade e de 
			identificação com a nossa cultura primária. O tupi foi a maior língua nativa do Brasil e 
			podemos até dizer, o primeiro idioma do nosso páís, mas infelizmente é esquecido por 
			muitos. A culturra e a filosofia indígenas ainda são muito desvalorizadas em nosso país, 
			e estamos esquecendo que os índios contribuíram e muito para a formação dos nossos 
			hábitos, costumes e da nossa cultura.
			<br>
			&emsp;&emsp;Portanto, escolher esse nome é uma forma de relembrar e homenagear, 
			mesmo que pouco, o primeiro idioma do Brasil, os primeiros habitantes das nossas 
			terras e a cultura indígena que na sua essência é belíssima e muito rica.
		</p>
	</section>

	<section class="bg1-pattern">
		<div class="container">
			<div class="row">
				<div class="wrap-text-welcome container t-center m-t-60">
					<span class="tit2 p-l-15 p-r-15">
						Conheça
					</span>
					<h3 class="tit3 m-t-5 contact-footer">
						Nossas instalações
					</h3>
				</div>
				<div class="col-md-4 p-t-30">
					<div class="blo1">
						<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom">
							<a href="{{ asset('images/original/salao.jpg') }}" data-lightbox="gallery">
								<img src="{{ asset('images/thumbs/salao.jpg') }}" alt="Salão Tupi">
							</a>
						</div>

						<div class="wrap-text-blo1 p-t-35">
							<h4 class="txt5 color0-hov trans-0-4 m-b-13 text-center">
								Salão Principal
							</h4>

							<p class="m-b-20">
								O Restaurante tupi dispõe de um vasto espaço com 120 lugares para atendermos nossos clientes
							</p>
						</div>
					</div>
				</div>

				<div class="col-md-4 p-t-30">
					<div class="blo1">
						<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom">
							<a href="{{ asset('images/original/parque.jpg') }}" data-lightbox="gallery">
								<img src="{{ asset('images/thumbs/parque.jpg') }}" alt="Playground Tupi">
							</a>
						</div>
						<div class="wrap-text-blo1 p-t-35">
							<h4 class="txt5 color0-hov trans-0-4 m-b-13 text-center">
								Espaço Kids
							</h4>

							<p class="m-b-20">
								O Restaurante Tupi possui um playground, no qual as crianças podem brincar etc....
							</p>
						</div>
					</div>
				</div>

				<div class="col-md-4 p-t-30">
					<div class="blo1">
						<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom">
							<a href="{{ asset('images/original/redario.jpg') }}" data-lightbox="gallery">
								<img src="{{ asset('images/thumbs/redario.jpg') }}" alt="Redário Tupi">
							</a>
						</div>

						<div class="wrap-text-blo1 p-t-35">
							<h4 class="txt5 color0-hov trans-0-4 m-b-13 text-center">
								Redário
							</h4>

							<p class="m-b-20">
								Nosso Restaurante dispõe de um local mais afastado direcionado ao repouso e relaxamento dos clientes.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Modal Video 01-->
	<div class="modal fade" id="modal-video-01" tabindex="-1" role="dialog" aria-hidden="true">

		<div class="modal-dialog" role="document" data-dismiss="modal">
			<div class="close-mo-video-01 trans-0-4" data-dismiss="modal" aria-label="Close">&times;</div>

			<div class="wrap-video-mo-01">
				<div class="w-full wrap-pic-w op-0-0"><img src="images/icons/video-16-9.jpg" alt="IMG"></div>
				<div class="video-mo-01">
					<iframe src="https://www.youtube.com/embed/5k1hSu2gdKE?rel=0&amp;showinfo=0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>

@endsection

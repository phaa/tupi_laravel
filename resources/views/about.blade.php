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
	<section class="bg2-pattern p-t-116 p-b-110 t-center p-l-15 p-r-15">
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

	<!-- Video --
	<section class="section-video parallax100" style="background-image: url(images/header-menu-01.jpg);">
		<div class="content-video t-center p-t-225 p-b-250">
			<span class="tit2 p-l-15 p-r-15">
				Discover
			</span>

			<h3 class="tit4 t-center p-l-15 p-r-15 p-t-3">
				Our Video
			</h3>

			<div class="btn-play ab-center size16 hov-pointer m-l-r-auto m-t-43 m-b-33" data-toggle="modal" data-target="#modal-video-01">
				<div class="flex-c-m sizefull bo-cir bgwhite color1 hov1 trans-0-4">
					<i class="fa fa-play fs-18 m-l-2" aria-hidden="true"></i>
				</div>
			</div>
		</div>
	</section-->

	<section class="bg1-pattern p-t-120 p-b-105">
		<div class="container">

			<!-- Salão Principal-->
			<div id="salao-principal" class="row">
				<div class="col-md-6 p-t-45 p-b-30 ">
					<div class="wrap-text-delicious t-center rustic-bg">
						<span class="tit2 t-center">
							O Salão
						</span>

						<h3 class="tit3 t-center m-b-35 m-t-5">
							Principal
						</h3>

						<p class="t-center m-b-22 size3 m-l-r-auto">
							O Restaurante tupi dispõe de um vasto espaço interno no qual os clientes podem se acomodar...
						</p>
					</div>
				</div>

				<div class="col-md-6 p-b-30">
					<div class="wrap-pic-delicious size2 bo-rad-10 hov-img-zoom m-l-r-auto">
						<a href="{{ asset('images/original/salao.jpg') }}" data-lightbox="gallery">
                            <img src="{{ asset('images/thumbs/salao.jpg') }}" alt="Salão Tupi">
                        </a>
					</div>
				</div>
			</div>

			<!-- Parquinho -->
			<div id="parquinho" class="row p-t-50">
				<div class="col-md-6 p-b-30">
					<div class="wrap-pic-romantic size2 bo-rad-10 hov-img-zoom m-l-r-auto">
						<a href="{{ asset('images/original/parque.jpg') }}" data-lightbox="gallery">
                            <img src="{{ asset('images/thumbs/parque.jpg') }}" alt="Parque Tupi">
                        </a>
					</div>
				</div>

				<div class="col-md-6 p-t-45 p-b-30">
					<div class="wrap-text-romantic t-center">
						<span class="tit2 t-center">
							Espaço
						</span>

						<h3 class="tit3 t-center m-b-35 m-t-5">
							Kids
						</h3>

						<p class="t-center m-b-22 size3 m-l-r-auto">
							O Restaurante Tupi possui um playground, no qual as crianças podem brincar etc....
						</p>
					</div>
				</div>
			</div>

			<!-- Redário -->
			<div id="salao-principal" class="row p-t-50">
				<div class="col-md-6 p-t-45 p-b-30">
					<div class="wrap-text-delicious t-center">
						<span class="tit2 t-center">
							Descanço no
						</span>

						<h3 class="tit3 t-center m-b-35 m-t-5">
							Redário
						</h3>

						<p class="t-center m-b-22 size3 m-l-r-auto">
							Nosso Restaurante dispõe de um local mais afastado direcionado ao repouso e relaxamento dos clientes.
						</p>
					</div>
				</div>

				<div class="col-md-6 p-b-30">
					<div class="wrap-pic-delicious size2 bo-rad-10 hov-img-zoom m-l-r-auto">
						<a href="{{ asset('images/original/redario.jpg') }}" data-lightbox="gallery">
                            <img src="{{ asset('images/thumbs/redario.jpg') }}" alt="Redário Tupi">
                        </a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our Story -->
	<section class="bg2-pattern p-t-116 p-b-110 t-center p-l-15 p-r-15">
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
	<!-- Banner 
	<div class="parallax0 parallax100" style="background-image: url(images/bg-cover-video-02.jpg);">
		<div class="overlay0-parallax t-center size33"></div>
	</div>-->


	<!-- Chef -->
	<section class="section-chef bgwhite p-t-115 p-b-95">
		<div class="container t-center">
			<span class="tit2 t-center">
				Meet Our
			</span>

			<h3 class="tit5 t-center m-b-50 m-t-5">
				Chef
			</h3>

			<div class="row">
				<div class="col-md-8 col-lg-4 m-l-r-auto p-b-30">
					<!-- -Block5 -->
					<div class="blo5 pos-relative p-t-60">
						<div class="pic-blo5 size14 bo4 wrap-cir-pic hov-img-zoom ab-c-t">
							<a href="#"><img src="images/avatar-05.jpg" alt="IGM-AVATAR"></a>
						</div>

						<div class="text-blo5 size34 t-center bo-rad-10 bo7 p-t-90 p-l-35 p-r-35 p-b-30">
							<a href="#" class="txt34 dis-block p-b-6">
								Peter Hart
							</a>

							<span class="dis-block t-center txt35 p-b-25">
								Chef
							</span>

							<p class="t-center">
								Donec porta eleifend mauris ut effici-tur. Quisque non velit vestibulum, lob-ortis mi eget, rhoncus nunc
							</p>
						</div>
					</div>
				</div>

				<div class="col-md-8 col-lg-4 m-l-r-auto p-b-30">
					<!-- -Block5 -->
					<div class="blo5 pos-relative p-t-60">
						<div class="pic-blo5 size14 bo4 wrap-cir-pic hov-img-zoom ab-c-t">
							<a href="#"><img src="images/avatar-05.jpg" alt="IGM-AVATAR"></a>
						</div>

						<div class="text-blo5 size34 t-center bo-rad-10 bo7 p-t-90 p-l-35 p-r-35 p-b-30">
							<a href="#" class="txt34 dis-block p-b-6">
								Joyce Bowman
							</a>

							<span class="dis-block t-center txt35 p-b-25">
								Chef
							</span>

							<p class="t-center">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ultricies felis a sem tempus tempus.
							</p>
						</div>
					</div>
				</div>

				<div class="col-md-8 col-lg-4 m-l-r-auto p-b-30">
					<!-- -Block5 -->
					<div class="blo5 pos-relative p-t-60">
						<div class="pic-blo5 size14 bo4 wrap-cir-pic hov-img-zoom ab-c-t">
							<a href="#"><img src="images/avatar-05.jpg" alt="IGM-AVATAR"></a>
						</div>

						<div class="text-blo5 size34 t-center bo-rad-10 bo7 p-t-90 p-l-35 p-r-35 p-b-30">
							<a href="#" class="txt34 dis-block p-b-6">
								Peter Hart
							</a>

							<span class="dis-block t-center txt35 p-b-25">
								Chef
							</span>

							<p class="t-center">
								Phasellus aliquam libero a nisi varius, vitae placerat sem aliquet. Ut at velit nec ipsum iaculis posuere quis in sapien
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

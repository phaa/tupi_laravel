@extends('templates.layout')

@section('extra_meta')
	<meta name="description" content="O melhor sabor nordestino na região sul do RN."/>
	<link rel="canonical" href="http://restaurantetupi.com.br/" />
@endsection

@section('title')
Restaurante Tupi
@endsection

<!-- Index blade -->
@section('page_content')
<!-- Carousel -->
<section class="section-slide">
    <div class="wrap-slick1">
        <div class="slick1">
            <div class="item-slick1 slide1 item1-slick1">
                <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
                    <p class="caption1-slide1 txt0 t-center animated visible-false m-b-15" data-appear="fadeInDown">
                        Restaurante Tupi
                    </p>

                    <p class="caption2-slide1 tit1 t-center animated visible-false" data-appear="fadeInUp" style="">
                        Bem vindo!
                    </p>
                </div>
            </div>

            <div class="item-slick1 slide2 item2-slick1">
                <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
                    <h3 class="caption1-slide1 txt0 t-center animated visible-false m-b-15" data-appear="rollIn">
                        Amplo espaço para famílias
                    </h3>

                    <h3 class="caption2-slide1 tit1 t-center animated visible-false" data-appear="lightSpeedIn">
                        Conforto
                    </h3>
                </div>
            </div>

            <div class="item-slick1 slide3 item3-slick1">
                <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
                    <h3 class="caption1-slide1 txt0 t-center animated visible-false m-b-15" data-appear="rotateInDownLeft">
						Ambiente sossegado <br>
						Vista incrível
                    </h3>

                    <h3 class="caption2-slide1 tit1 t-center animated visible-false" data-appear="rotateInUpRight">
                        Natureza
                    </h3>
                </div>
            </div>

            <div class="item-slick1 slide4 item4-slick1">
                <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
                    <h3 class="caption1-slide1 txt0 t-center animated visible-false m-b-15" data-appear="lightSpeedIn">
						Espaço Kids <br>
						Próximo aos pais
                    </h3>

                    <h3 class="caption2-slide1 tit1 t-center animated visible-false" data-appear="fadeInUp">
                        Segurança
                    </h3>
                </div>
            </div>

        </div>

        <div class="wrap-slick1-dots"></div>
    </div>
</section>

<!-- Welcome -->
<section class="section-welcome bg1-pattern p-t-70 p-b-70">
	<div class="container">
		<!-- A little about -->
		<div class="row">
			<div class="col-md-6 p-t-35 p-b-30">
				<div class="wrap-text-welcome t-center">
					<span class="tit2 t-center">
						Restaurante Tupi
					</span>
                    <br>
					<span class="tit3 t-center m-t-5">
						Bem Vindo!
					</span>
                    <h1 class="tit3 t-center m-t-5">
						Restaurante de culinária tipica nordestina 
					</h1>
                    <!--presentation-footer-->
					<p class="m-b-22 size3 p-t-20 m-l-r-auto ">
                        &emsp;&emsp;Somos uma restaurante familiar atuando no mercado gastronômico há onze 
                        anos, objetivando serviços de qualidade e padrão, aliado a preço 
                        justo, porque acreditamos que, comida boa e saborosa com atendimento 
                        eficaz não precisa ser caro.
	                    <br>
                        &emsp;&emsp;O Tupi foi pensado e criado para oferecer aos clientes refeições 
                        saborosas em um ambiente agradável, tranquilo e diferenciado, com 
                        acessibilidade e segurança. O espaço proporciona às famílias momentos
                        de paz e bem-estar em meio à natureza. A proposta da casa é, comer
                        bem e relaxar, fugir da agitação do dia a dia, conversar e se 
                        envolver com a natureza ao redor. Meditar, colocar o pé no chão, 
                        sentir a brisa fresca, ouvir o canto dos pássaros e desfrutar das 
                        belas paisagens.
					</p>
                    <a href="#contact" class="txt38"> PAGAMENTO</a>
                    •<a href="#feedbacks" class="txt38"> OPNIÕES</a>
                    •<a href="#contact" class="txt38"> CONTATOS</a>
				</div>
			</div>

			<div class="col-md-6 p-b-30">
                <div style="height: 100%;" class="bo-rad-10 hov-img-zoom m-l-r-auto">
                    <a href="{{ asset('images/original/entrada.jpg') }}" data-lightbox="gallery">
                        <img style="object-fit: cover;" src="{{ asset('images/thumbs/entrada.jpg') }}" alt="Entrada Restaurante Tupi">
                    </a>
                </div>
			</div>
            
		</div>
        <h2 class="txt14 t-center m-t-30">
            <i style="font-size: 30px; color: #222;" class="fas fa-clock dis-inline-block size19 m-r-10" aria-hidden="true"></i>
            Terça a Domingo das 11:00 às 16:00
        </h2>
	</div>
</section>

<!-- Intro -->
<section>
    <div class="header-intro meet-us parallax100 t-center p-t-135 p-b-158">
		<span class="tit2 p-l-15 p-r-15" style="color: #fff;">
			Conheça o
		</span>
		<h2 class="tit4 t-center p-l-15 p-r-15 p-t-3">
			Vale da Gruta do Bode
		</h2>
	</div>
</section>

<!-- Reviews -->
<section id="feedbacks" class="section-review p-t-70 p-b-30">
    <div class="container title-review t-center">
        <div id="salao-principal" class="row">
			<div class="col-md-6 p-t-30 p-b-30 ">
				<div class="wrap-text-delicious t-center">
					<span class="tit2 t-center">
						Experiências <i style="font-size: 35px;" class="fas fa-comment"></i>
					</span>

					<h3 class="tit3 t-center m-b-20 m-t-5">
						Dos clientes
					</h3>

					<p class="t-center m-b-22 size3 m-l-r-auto">
						Veja como eles ficaram contentes conosco.
                        <br>Olhe as experiências que eles compartilharam daqui.<i style="color:#dc3545;" class="fa fa-heart"></i>
					</p>
				</div>
			</div>

			<div class="col-md-6 p-b-30">
				<!-- Google Reviews -->
                <div class="elfsight-app-b836c5c8-bac0-4c36-9c38-7f572ecaa01b"></div>
			</div>
		</div>
	</div>
</section>

<!-- Intro -->
<section>
    <div class="header-intro rustic t-center p-t-135 p-b-135">
		<span class="tit2 p-l-15 p-r-15" style="color: #fff;">
			Simplicidade e elegância
		</span>
        <h2 class="tit4 t-center p-l-15 p-r-15 p-t-3">
			Ambiente rústico
		</h2>
	</div>
</section>

<!-- Social -->
<section class="p-t-60">
    <div class="wrap-text-welcome container t-center">
        <span class="tit2 p-l-15 p-r-15">
			Siga-nos 
		</span>
        <br>
        <p class="tit3 m-b-5 m-t-5 t-center contact-footer">
            Acompanhe nosso trabalho
        </p>
        <br>
    </div>
    <div>  
        <div class="elfsight-app-a1a5d7ce-bd3d-49f6-8f13-6d796c99b226"></div>
    </div>
</section>

<!-- Maps -->
<section class="p-t-60 p-b-60">
    <div class="wrap-text-welcome container t-center">
        <span class="tit2 p-l-15 p-r-15">
			Encontre a gente!
		</span>
        <h3 class="tit3 m-b-25 m-t-5 contact-footer">
            Veja o mapa<i style="font-size: 30px;" class="fas fa-map-marker dis-inline-block" aria-hidden="true"></i>
        </h3>
        <div class="bo8 bo-rad-10 of-hidden p-t-7" style="background-color: #222;">
            <iframe width="100%" height="600" src="https://maps.google.com/maps?q=restaurante%20tupi%20goianinha&t=k&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
        </div>
    </div>
</section>

@include('components/contact-footer')

@endsection

@section('additional_scripts')
<!-- The only script that needs to be loaded before the DOM -->
<script src="https://apps.elfsight.com/p/platform.js" async defer></script>
<script src="{{ asset("vendor/slick/slick.min.js") }}"></script>
<script src="{{ asset("js/slick-custom.js") }}"></script>
@endsection

@extends('templates.layout')

@section('extra_meta')
    <meta name="description" content="Bem-vindo ao Tupi. Restaurante de culinária nordestina a 600 metros da BR-101 no caminho entre Natal e João Pessoa. Ambiente rústico e confortável em meio à mata atlântica">
    <meta name="language" content="Portuguese">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="dns-prefetch" href="https://apps.elfsight.com">
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Restaurant",
            "image": [
                "https://1.kekantoimg.com/_7n_51x_h9MdWIAveaXiF9z74Vc=/fit-in/600x600/s3.amazonaws.com/kekanto_pics/pics/757/293757.jpg",
                "https://example.com/photos/4x3/photo.jpg",
                "https://example.com/photos/16x9/photo.jpg"
            ],
            "@id": "http://restaurantetupi.com.br/sobre",
            "name": "Restaurante Tupi",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "km 157 BR-101 sentido Paraíba - Fazenda Pituba",
                "addressLocality": "Goianinha",
                "addressRegion": "RN",
                "postalCode": "59173-000",
                "addressCountry": "BR"
            },
            "aggregateRating": {
                "@type": "AggregateRating",
                "reviewCount": "109",
                "ratingValue": "4.7"
            },
            "geo": {
                "@type": "GeoCoordinates",
                "latitude": -6.3496198,
                "longitude": -35.1668902
            },
            "url": "http://www.restaurantetupi.com.br",
            "telephone": "+5584991432723",
            "servesCuisine": "Nordestina",
            "priceRange": "$$",
            "openingHoursSpecification": [
                {
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": [
                    "Tuesday",
                    "Wednesday",
                    "Thursday",
                    "Friday",
                    "Saturday",
                    "Sunday"
                ],
                "opens": "11:00",
                "closes": "16:00"
                }
            ],
            "menu": "http://www.restaurantetupi.com.br/cardapio",
            "acceptsReservations": "False"
        }
    </script>
@endsection

@section('title')
Restaurante Tupi - Comer bem com a natureza
@endsection

<!-- Index blade -->
@section('page_content')
<!-- Carousel -->
<section class="section-slide">
    <div class="wrap-slick1">
        <div class="slick1">
            <div class="item-slick1 slide1 item1-slick1">
                <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
                    <h2 class="caption1-slide1 txt0 t-center animated visible-false m-b-15" data-appear="fadeInDown">
                        Restaurante Tupi
                    </h2>
                    <span class="caption2-slide1 tit1 t-center animated visible-false" data-appear="fadeInUp">
                        Bem Vindo!
                    </span>
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
		<div class="row">
			<div class="col-md-6 p-t-35 p-b-30 v-centralized">
				<div class="wrap-text-welcome t-center">
                    <h1 class="t-center size3 m-l-r-auto">
						<span class="tit2">Restaurante de culinária nordestina</span><br>
                        <span class="tit3">Entre Natal e João Pessoa</span><i style="font-size: 30px;" class="fas fa-map-marker dis-inline-block" aria-hidden="true"></i>
                    </h1>
                    
                    <!--presentation-footer-->
					<p class="m-b-22 size3 p-t-20 m-l-r-auto">
                        &emsp;&emsp;Atuando no mercado gastronômico há onze 
                        anos, somos uma empresa familiar que acredita que comida saborosa e 
                        atendimento eficiente não precisam ser caros. Por isso, objetivamos
                        proporcionar serviços com alto padrão de qualidade aliados a um preço justo.
                        Clique <a href="{{ route('about') }}">aqui</a> e saiba mais!
					</p>
                    <a href="#localization" class="txt38">MAPA</a>
                    •<a href="#feedbacks" class="txt38"> OPNIÕES</a>
                    •<a href="#contact" class="txt38"> CONTATOS</a>
				</div>
			</div>
			<div class="col-md-6 p-b-30">
                <div style="height: 100%;" class="bo-rad-10 hov-img-zoom m-l-r-auto">
                    <a href="{{ asset('images/original/entrada.jpg') }}" data-lightbox="gallery">
                        <img src="{{ asset('images/thumbs/entrada.jpg') }}" alt="Entrada Restaurante Tupi">
                    </a>
                </div>
			</div>
            
		</div>
        <h2 class="txt14 t-center m-t-30">
            <i style="font-size: 30px; color: #222;" class="fas fa-clock dis-inline-block size19 m-r-10" aria-hidden="true"></i>
            Terça a Domingo 11:00 às 16:00
        </h2>
	</div>
</section>

<!-- Intro -->
<section>
    <div class="header-intro meet-us parallax100 t-center p-t-135 p-b-158">
		<span class="tit2 p-l-15 p-r-15" style="color: #fff;">
			Conheça o
		</span>
		<h3 class="tit4 t-center p-l-15 p-r-15 p-t-3">
			Vale da Gruta do Bode
		</h3>
	</div>
</section>

<!-- Reviews -->
<section id="feedbacks" class="section-review p-t-70 p-b-30">
    <div class="container title-review t-center">
        <div id="salao-principal" class="row">
			<div class="col-md-6 p-t-30 p-b-30 ">
				<div class="wrap-text-delicious t-center">
					<h3 class="tit2 t-center">
						Experiências <i style="font-size: 35px;" class="fas fa-comment"></i>
                    </h3>

					<span class="tit3 t-center m-b-20 m-t-5">
						Dos clientes
                    </span>

					<p class="t-center m-b-22 size3 m-l-r-auto">
						Veja como eles ficaram contentes conosco.
                        <br>Olhe as experiências que eles compartilharam daqui<i style="color:#dc3545;" class="fa fa-heart"></i>
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
        <h3 class="tit4 t-center p-l-15 p-r-15 p-t-3">
			Ambiente rústico
		</h3>
	</div>
</section>

<!-- Social -->
<section class="p-t-60">
    <div class="wrap-text-welcome container t-center">
        <span class="tit2 p-l-15 p-r-15">
			Siga-nos 
		</span>
        <br>
        <p class="tit3 m-b-5 m-t-5 t-center contact-footer" style="text-transform:lowercase;">
            @restaurante_tupi
        </p>
        <br>
    </div>
    <div>  
        <div class="elfsight-app-a1a5d7ce-bd3d-49f6-8f13-6d796c99b226"></div>
    </div>
</section>

<!-- Maps -->
<section id="localization" class="p-t-60 p-b-60">
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

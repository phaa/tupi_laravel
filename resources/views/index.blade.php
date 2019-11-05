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
                    <span class="caption1-slide1 txt0 t-center animated visible-false m-b-15" data-appear="fadeInDown">
                        Bem Vindo ao
                    </span>

                    <h2 class="caption2-slide1 tit1 t-center animated visible-false" data-appear="fadeInUp">
                        Restaurante Tupi
                    </h2>
                </div>
            </div>

            <div class="item-slick1 slide2 item2-slick1">
                <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
                    <span class="caption1-slide1 txt0 t-center animated visible-false m-b-15" data-appear="rollIn">
                        Amplo espaço para famílias
                    </span>

                    <h2 class="caption2-slide1 tit1 t-center animated visible-false" data-appear="lightSpeedIn">
                        Conforto
                    </h2>
                </div>
            </div>

            <div class="item-slick1 slide3 item3-slick1">
                <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
                    <span class="caption1-slide1 txt0 t-center animated visible-false m-b-15" data-appear="rotateInDownLeft">
						Ambiente sossegado <br>
						Vista incrível
                    </span>

                    <h2 class="caption2-slide1 tit1 t-center animated visible-false" data-appear="rotateInUpRight">
                        Natureza
                    </h2>
                </div>
            </div>

            <div class="item-slick1 slide4 item4-slick1">
                <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
                    <span class="caption1-slide1 txt0 t-center animated visible-false m-b-15" data-appear="lightSpeedIn">
						Espaço Kids <br>
						Próximo aos pais
                    </span>

                    <h2 class="caption2-slide1 tit1 t-center animated visible-false" data-appear="fadeInUp">
                        Segurança
                    </h2>
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

					<h3 class="tit3 t-center m-t-5">
						Bem Vindo
					</h3>

					<p class="m-b-22 size3 p-t-25 m-l-r-auto presentation-footer">
						&emsp;&emsp;O Tupi foi pensado e criado com o intuito de oferecer aos clientes refeições de boa qualidade aliadas
						a um ambiente tranquilo e agradável sem abrir mão, porém, do preço acessível.
                        <br>
						&emsp;&emsp;
                        Oferecemos um cardápio regional que vai desde a carne de sol na brasa, galinha e paçoca até
						peixes e camarões. Todos servidos em pratos para duas ou quatro pessoas, além dos individuais.
						<br>
						&emsp;&emsp;
                        A proposta da casa é comer bem e relaxar. O espaço também conta com um amplo espaço para as famílias,
                        um espaço kids à vista dos pais, bem como um redário, no qual é possível descançar da viagem,
					</p>
					<a href="{{ route('about') }}" class="txt5">
						Ler Mais
						<i class="fas fa-long-arrow-alt-right m-l-10" aria-hidden="true"></i>
					</a>
				</div>
			</div>

			<div class="col-md-6 p-b-30">
                <div style="height: 100%;" class="bo-rad-10 hov-img-zoom m-l-r-auto">
                    <a href="{{ asset('images/original/entrada.jpg') }}" data-lightbox="gallery">
                        <img style="object-fit: cover;" src="{{ asset('images/thumbs/entrada.jpg') }}" alt="Entrada Tupi">
                    </a>
                </div>
			</div>
		</div>
	</div>
</section>

<!-- Intro -->
<section>
    <div class="header-intro rustic t-center p-t-135 p-b-158">
		<h3 class="tit4 t-center p-l-15 p-r-15 p-t-3">
			Ambiente rústico
		</h3>
	</div>
</section>

<!-- Maps -->
<section class="p-t-60 p-b-105">
    <div class="wrap-text-welcome container t-center">
        <span class="tit2 p-l-15 p-r-15">
			Encontre a gente!
		</span>
        <h3 class="tit3 m-b-25 m-t-5 contact-footer">
            Veja o mapa
        </h3>
        <div class="bo8 bo-rad-10 of-hidden p-t-7" style="background-color: #222;">
            <iframe width="100%" height="600" src="https://maps.google.com/maps?q=restaurante%20tupi%20goianinha&t=k&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
        </div>
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

<!-- Review -->
<section class="section-review p-t-70">
    <div class="container title-review t-center m-b-2">
		<span class="tit2 p-l-15 p-r-15">
			Veja o que o pessoal diz
		</span>

		<h3 class="tit8 t-center p-l-20 p-r-15 p-t-3 contact-footer">
			Avalie também!
		</h3>
	</div>

	<!-- Google Reviews -->
	<script src="https://apps.elfsight.com/p/platform.js" defer></script>
	<div class="elfsight-app-b836c5c8-bac0-4c36-9c38-7f572ecaa01b"></div>
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

<!-- Social -->
<section class="p-t-70">
    <div class="wrap-text-welcome container t-center">
        <span class="tit2 p-l-15 p-r-15">
			Siga-nos 
		</span>
        <h3 class="tit3 m-b-25 m-t-5 contact-footer">
            Acompanhe nosso trabalho
        </h3>
    </div>
    <div>
        <script src="https://apps.elfsight.com/p/platform.js" defer></script>
        <div class="elfsight-app-a1a5d7ce-bd3d-49f6-8f13-6d796c99b226"></div>
    </div>
</section>

@include('components/contact-footer')

@endsection

@section('additional_scripts')
<script src="{{ asset("vendor/slick/slick.min.js") }}"></script>
<script src="{{ asset("js/slick-custom.js") }}"></script>
<script type="text/javascript">
    window.onload = function() {
        $(".eapps-remove-link").parent().hide();
    };
</script>
@endsection

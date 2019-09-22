@extends('templates.layout')

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

                    <h2 class="caption2-slide1 tit1 t-center animated visible-false m-t-37" data-appear="fadeInUp">
                        Restaurante Tupi
                    </h2>
                </div>
            </div>

            <div class="item-slick1 slide2 item2-slick1">
                <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
                    <span class="caption1-slide1 txt0 t-center animated visible-false m-b-15" data-appear="rollIn">
                        Amplo espaço para toda a família
                    </span>

                    <h2 class="caption2-slide1 tit1 t-center animated visible-false m-t-37" data-appear="lightSpeedIn">
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

                    <h2 class="caption2-slide1 tit1 t-center animated visible-false m-t-37" data-appear="rotateInUpRight">
                        Natureza
                    </h2>
                </div>
            </div>

        </div>

        <div class="wrap-slick1-dots"></div>
    </div>
</section>

<!-- Welcome -->
<section class="section-welcome bg1-pattern p-t-120 p-b-70">
	<div class="container">
		<div class="row">
			<div class="col-md-6 p-t-35 p-b-30">
				<div class="wrap-text-welcome t-center">
					<span class="tit2 t-center">
						Restaurante Tupi
					</span>

					<h3 class="tit3 t-center m-t-5">
						Quem somos
					</h3>

					<p class="m-b-22 size3 p-t-25 m-l-r-auto presentation-footer">
						&emsp;&emsp;O Tupi foi pensado e criado com o intuito de oferecer aos clientes refeições de boa qualidade aliadas
						a um ambiente tranquilo e agradável, porém sem abrir mão do preço acessível.
                        <br>
						&emsp;&emsp;
                        Oferecemos um cardápio regional com pratos desde a carne de sol na brasa, galinha e paçoca até
						peixes e camarões, preparados em moquecas ou na brasa, todos servidos em pratos para duas ou quatro pessoas, além dos individuais.
						<br>
						&emsp;&emsp;
                        A proposta da casa é comer bem e relaxar. O espaço proporciona às
						famílias momentos de paz e bem-estar em meio à natureza enquanto desfrutam de nossos preparos.
					</p>

				</div>
			</div>

			<div class="col-md-6 p-b-30">
                <div class="bo-rad-10 hov-img-zoom m-l-r-auto">
                    <a href="{{ asset('images/original/entrada.jpg') }}" data-lightbox="gallery">
                        <img src="{{ asset('images/thumbs/entrada.jpg') }}" alt="Entrada Tupi">
                    </a>
                </div>
				<div class="text-right p-b-30 m-t-25">
					<a href="{{ route('about') }}" class="txt5" style="font-size: 28px;">
						Leia Mais
						<i class="fas fa-arrow-right m-l-10" aria-hidden="true"></i>
					</a>
				</div>
			</div>
		</div>

        <div class="row">
			<div class="wrap-text-welcome container t-center">
				<span class="tit2 p-l-15 p-r-15">
					Conheça um pouco
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
                            O Restaurante tupi dispõe de um vasto espaço interno no qual os clientes podem se acomodar...
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 p-t-30">
                <div class="blo1">
                    <div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom">
                        <a href="{{ asset('images/original/parque.jpg') }}" data-lightbox="gallery">
                            <img src="{{ asset('images/thumbs/parque.jpg') }}" alt="Parque Tupi">
                        </a>
                    </div>
                    <div class="wrap-text-blo1 p-t-35">
                        <h4 class="txt5 color0-hov trans-0-4 m-b-13 text-center">
                            Playground Infantil
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
                            Nosso Restaurante dispõe de um local mais afastado direcionado ao repouso e relaxamento de nossos clientes.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-right m-t-25">
                <a href="{{ route('about') }}" class="txt5" style="font-size: 28px;">
                    Ler Mais
                    <i class="fas fa-arrow-right m-l-10" aria-hidden="true"></i>
                </a>
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
<section class="p-t-105 p-b-105">
    <div class="wrap-text-welcome container t-center">
        <span class="tit2 p-l-15 p-r-15">
			Siga o mapa e
		</span>
        <h3 class="tit3 m-b-25 m-t-5 contact-footer">
            Encontre a gente!
        </h3>
        <div class="bo8 bo-rad-10 of-hidden p-t-7" style="background-color: #222;">
            <!--iframe width="100%" height="600" src="https://maps.google.com/maps?q=restaurante%20tupi%20goianinha&t=k&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe-->
        </div>
    </div>
</section>

<!-- Intro -->
<section>
    <div class="header-intro meet-us parallax100 t-center p-t-135 p-b-158">
		<span class="tit2 p-l-15 p-r-15" style="color: #fff;">
			Venha nos conhecer no
		</span>
		<h3 class="tit4 t-center p-l-15 p-r-15 p-t-3">
			Vale da Gruta do Bode
		</h3>
	</div>
</section>

<!-- Review -->
<section class="section-review p-t-115">
    <div class="title-review t-center m-b-2">
		<span class="tit2 p-l-15 p-r-15">
			Veja o que o pessoal diz
		</span>

		<h3 class="tit8 t-center p-l-20 p-r-15 p-t-3 contact-footer container">
			Nos avalie também!
		</h3>
	</div>

	<!-- - -->
	<div class="wrap-slick3">
		<div class="slick3">
			<div class="item-slick3 item1-slick3">
				<div class="wrap-content-slide3 p-b-50 p-t-50">
					<div class="container">
						<div class="pic-review size14 bo4 wrap-cir-pic m-l-r-auto animated visible-false" data-appear="zoomIn">
							<img src="images/avatar-01.jpg" alt="IGM-AVATAR">
						</div>

						<div class="content-review m-t-33 animated visible-false" data-appear="fadeInUp">
							<p class="t-center txt12 size15 m-l-r-auto">
								“ We are lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean tellus sem, mattis in pre-tium nec, fermentum viverra dui ”
							</p>

							<div class="star-review fs-18 color-yellow flex-c-m m-t-12">
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star p-l-1" aria-hidden="true"></i>
								<i class="fa fa-star p-l-1" aria-hidden="true"></i>
								<i class="fa fa-star p-l-1" aria-hidden="true"></i>
								<i class="fa fa-star p-l-1" aria-hidden="true"></i>
							</div>

							<div class="more-review txt4 t-center animated visible-false m-t-32" data-appear="fadeInUp">
								Marie Simmons ˗ New York
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="item-slick3 item2-slick3">
				<div class="wrap-content-slide3 p-b-50 p-t-50">
					<div class="container">
						<div class="pic-review size14 bo4 wrap-cir-pic m-l-r-auto animated visible-false" data-appear="zoomIn">
							<img src="images/avatar-04.jpg" alt="IGM-AVATAR">
						</div>

						<div class="content-review m-t-33 animated visible-false" data-appear="fadeInUp">
							<p class="t-center txt12 size15 m-l-r-auto">
								“ We are lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean tellus sem, mattis in pre-tium nec, fermentum viverra dui ”
							</p>

							<div class="star-review fs-18 color-yellow flex-c-m m-t-12">
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star p-l-1" aria-hidden="true"></i>
								<i class="fa fa-star p-l-1" aria-hidden="true"></i>
								<i class="fa fa-star p-l-1" aria-hidden="true"></i>
								<i class="fa fa-star p-l-1" aria-hidden="true"></i>
							</div>

							<div class="more-review txt4 t-center animated visible-false m-t-32" data-appear="fadeInUp">
								Marie Simmons ˗ New York
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="item-slick3 item3-slick3">
				<div class="wrap-content-slide3 p-b-50 p-t-50">
					<div class="container">
						<div class="pic-review size14 bo4 wrap-cir-pic m-l-r-auto animated visible-false" data-appear="zoomIn">
							<img src="images/avatar-05.jpg" alt="IGM-AVATAR">
						</div>

						<div class="content-review m-t-33 animated visible-false" data-appear="fadeInUp">
							<p class="t-center txt12 size15 m-l-r-auto">
								“ We are lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean tellus sem, mattis in pre-tium nec, fermentum viverra dui ”
							</p>

							<div class="star-review fs-18 color-yellow flex-c-m m-t-12">
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star p-l-1" aria-hidden="true"></i>
								<i class="fa fa-star p-l-1" aria-hidden="true"></i>
								<i class="fa fa-star p-l-1" aria-hidden="true"></i>
								<i class="fa fa-star p-l-1" aria-hidden="true"></i>
							</div>

							<div class="more-review txt4 t-center animated visible-false m-t-32" data-appear="fadeInUp">
								Marie Simmons ˗ New York
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="wrap-slick3-dots m-t-30"></div>
	</div>
</section>

<section>
    <div class="header-intro the-best parallax100 t-center p-t-135 p-b-158">
		<span class="tit2 p-l-15 p-r-15" style="color: #fff;">
			O melhor
		</span>
		<h3 class="tit4 t-center p-l-15 p-r-15 p-t-3">
			Da região sul do RN
		</h3>
	</div>
</section>

<!-- Social -->
<section class="p-t-115">
    <div class="wrap-text-welcome container t-center">
        <span class="tit2 p-l-15 p-r-15">
			Veja nossas redes sociais
		</span>
        <h3 class="tit3 m-b-25 m-t-5 contact-footer">
            Siga a gente!
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

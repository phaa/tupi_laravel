@extends('templates.layout')

@section('extra_meta')
	<meta name="description" content="Confira os nossos preparos."/>
	<link rel="canonical" href="http://restaurantetupi.com.br/cardápio" />
@endsection

@section('title')
Cardápio
@endsection

<!-- Menu -->
@section('page_content')
	<!-- Title Page -->
	<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url({{ asset('images/menu/cardapio.jpg') }});">
		<h2 class="tit6 t-center">
			Cardápio Tupi
		</h2>
	</section>

	<!-- Main menu -->
	<section class="section-mainmenu p-t-60 p-b-10 bg1-pattern">
		<div class="container">
			<div class="row justify-content-md-center m-b-50">
				<div class="col text-center">
					<span class="tit2 p-l-15 p-r-15">Nossos pratos</span>
					<h1 class="txt1 contact-footer">Mais pedidos</h1>
				</div>
      		</div>
			<div class="row p-b-70">
				<div class="col-md-8 col-lg-6 m-l-r-auto">
					<!-- Block3 -->
					<div class="blo3 flex-w flex-col-l-sm m-b-30">
						<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
							<a href="{{ asset('images/menu/oca.jpg') }}" data-lightbox="gallery">
								<img src="{{ asset("images/menu/oca.jpg") }}" alt="Camarão Oca">
							</a>
						</div>

						<div class="text-blo3 size21 flex-col-l-m">
							<span class="txt21b m-b-3">
								Camarão na Oca
							</span>

							<span class="txt23">
								Camarão empanado com arroz cremoso e fritas
							</span>
						</div>
					</div>

					<!-- Block3 -->
					<div class="blo3 flex-w flex-col-l-sm m-b-30">
						<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
							<a href="{{ asset('images/menu/seridoense.jpg') }}" data-lightbox="gallery">
								<img src="{{ asset("images/menu/seridoense.jpg") }}" alt="Camarão Seridoense">
							</a>
						</div>

						<div class="text-blo3 size21 flex-col-l-m">
							<a href="#" class="txt21b m-b-3">
								Camarão Seridoense
							</a>

							<span class="txt23">
								Camarão salteado com creme de macaxeira. Acompanha arroz, farofa e macaxeira frita
							</span>
						</div>
					</div>

					<!-- Block3 -->
					<div class="blo3 flex-w flex-col-l-sm m-b-30">
						<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
							<a href="{{ asset('images/menu/pituba.jpg') }}" data-lightbox="gallery">
								<img src="{{ asset("images/menu/pituba.jpg") }}" alt="Carne de Sol Pituba">
							</a>
						</div>

						<div class="text-blo3 size21 flex-col-l-m">
							<a href="#" class="txt21b m-b-3">
								Carne de Sol Pituba
							</a>

							<span class="txt23">
								Acompanha baião de dois, farofa e vinagrete
							</span>
						</div>
					</div>
				</div>

				<div class="col-md-8 col-lg-6 m-l-r-auto">
					<!-- Block3 -->
					<div class="blo3 flex-w flex-col-l-sm m-b-30">
						<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
							<a href="{{ asset('images/menu/croquete.jpg') }}" data-lightbox="gallery">
								<img src="{{ asset("images/menu/croquete.jpg") }}" alt="Croquete de Charque">
							</a>
						</div>

						<div class="text-blo3 size21 flex-col-l-m">
							<a href="#" class="txt21b m-b-3">
								Croquete de Charque
							</a>

							<span class="txt23">
								Croquete de Charque com Jerimun 
							</span>
						</div>
					</div>

					<!-- Block3 -->
					<div class="blo3 flex-w flex-col-l-sm m-b-30">
						<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
							<a href="{{ asset('images/menu/moqueca_peixe.jpg') }}" data-lightbox="gallery">
								<img src="{{ asset("images/menu/moqueca_peixe.jpg") }}" alt="Moqueca de Peixe e Camarão">
							</a>
						</div>

						<div class="text-blo3 size21 flex-col-l-m">
							<a href="#" class="txt21b m-b-3">
								Moqueca de Peixe e Camarão
							</a>

							<span class="txt23">
								Acompanha arroz, farofa e pirão
							</span>
						</div>
					</div>

					<!-- Block3 -->
					<div class="blo3 flex-w flex-col-l-sm m-b-30">
						<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
							<a href="{{ asset('images/menu/ratas.jpg') }}" data-lightbox="gallery">
								<img src="{{ asset("images/menu/ratas.jpg") }}" alt="Moqueca de Peixe e Camarão">
							</a>
						</div>

						<div class="text-blo3 size21 flex-col-l-m">
							<a href="#" class="txt21b m-b-3">
								Ratas e Ratinhas
							</a>

							<span class="txt23">
								Um prato que ainda não tem nome
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<!-- Complete Tupi Menu -->
	<section class="section-lunch bg1-pattern">
		<div class="header-lunch parallax100" style="background-image: url({{ asset('images/menu/cardapio.jpg') }});">
			<div class="t-center p-t-170 p-b-165">
				<h2 class="tit4 t-center">
					Cardápio completo
				</h2>
			</div>
		</div>

		<div class="container">
			<div class="row justify-content-md-center m-t-60 m-b-50">
            <div class="col text-center">
                <span class="tit2 p-l-15 p-r-15">Dê mais uma olhada</span>
                <h1 class="txt1 contact-footer">Todos os pratos</h1>
            </div>
      	</div>
			<div class="row">
				<div class="col-md-10 col-lg-6 p-r-35 p-r-15-lg m-l-r-auto">
					<div class="wrap-item-mainmenu p-b-22">
						<h3 class="tit-mainmenu tit10 p-b-25">
							Bebidas
						</h3>
						<div class="item-mainmenu m-b-36">
							<div class="flex-w flex-b m-b-3">
								<a href="#" class="name-item-mainmenu txt21">
								Camarão Seridoense
								</a>
								<div class="line-item-mainmenu bg3-pattern"></div>
								<div class="price-item-mainmenu txt22">
									R$29,79
								</div>
							</div>
							<span class="info-item-mainmenu txt23">
							Sed fermentum eros vitae eros
							</span>
						</div>
						<div class="item-mainmenu m-b-36">
							<div class="flex-w flex-b m-b-3">
								<a href="#" class="name-item-mainmenu txt21">
								Peixe Potiguar
								</a>
								<div class="line-item-mainmenu bg3-pattern"></div>
								<div class="price-item-mainmenu txt22">
									R$19,35
								</div>
							</div>
							<span class="info-item-mainmenu txt23">
							Feugiat maximus neque pharetra
							</span>
						</div>
						<div class="item-mainmenu m-b-36">
							<div class="flex-w flex-b m-b-3">
								<a href="#" class="name-item-mainmenu txt21">
								Sed feugiat
								</a>
								<div class="line-item-mainmenu bg3-pattern"></div>
								<div class="price-item-mainmenu txt22">
									$12.19
								</div>
							</div>
							<span class="info-item-mainmenu txt23">
							Proin lacinia nisl ut ultricies posuere nulla
							</span>
						</div>
						<div class="item-mainmenu m-b-36">
							<div class="flex-w flex-b m-b-3">
								<a href="#" class="name-item-mainmenu txt21">
								Consectetur
								</a>
								<div class="line-item-mainmenu bg3-pattern"></div>
								<div class="price-item-mainmenu txt22">
									$21.89
								</div>
							</div>
							<span class="info-item-mainmenu txt23">
							Etiam cursus facilisis tortor
							</span>
						</div>
					</div>

				</div>

				<!-- Second row -->

				<div class="col-md-10 col-lg-6 p-r-35 p-r-15-lg m-l-r-auto">
					<div class="wrap-item-mainmenu p-b-22">
						<h3 class="tit-mainmenu tit10 p-b-25">
							Drinks
						</h3>
						<div class="item-mainmenu m-b-36">
							<div class="flex-w flex-b m-b-3">
								<a href="#" class="name-item-mainmenu txt21">
								Pine nut sbrisalona
								</a>
								<div class="line-item-mainmenu bg3-pattern"></div>
								<div class="price-item-mainmenu txt22">
									$29.79
								</div>
							</div>
							<span class="info-item-mainmenu txt23">
							Sed fermentum eros vitae eros
							</span>
						</div>
						<div class="item-mainmenu m-b-36">
							<div class="flex-w flex-b m-b-3">
								<a href="#" class="name-item-mainmenu txt21">
								Aenean eu
								</a>
								<div class="line-item-mainmenu bg3-pattern"></div>
								<div class="price-item-mainmenu txt22">
									$19.35
								</div>
							</div>
							<span class="info-item-mainmenu txt23">
							Feugiat maximus neque pharetra
							</span>
						</div>
						<div class="item-mainmenu m-b-36">
							<div class="flex-w flex-b m-b-3">
								<a href="#" class="name-item-mainmenu txt21">
								Sed feugiat
								</a>
								<div class="line-item-mainmenu bg3-pattern"></div>
								<div class="price-item-mainmenu txt22">
									$12.19
								</div>
							</div>
							<span class="info-item-mainmenu txt23">
							Proin lacinia nisl ut ultricies posuere nulla
							</span>
						</div>
						<div class="item-mainmenu m-b-36">
							<div class="flex-w flex-b m-b-3">
								<a href="#" class="name-item-mainmenu txt21">
								Consectetur
								</a>
								<div class="line-item-mainmenu bg3-pattern"></div>
								<div class="price-item-mainmenu txt22">
									$21.89
								</div>
							</div>
							<span class="info-item-mainmenu txt23">
							Etiam cursus facilisis tortor
							</span>
						</div>
					</div>

				</div>

			</div>
		</div>
	</section>

@endsection

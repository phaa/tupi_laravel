@extends('templates.layout')

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
	<section class="section-mainmenu p-t-110 p-b-10 bg1-pattern">
		<div class="container">
			<div class="row justify-content-md-center m-b-50">
            <div class="col text-center">
                <span class="tit2 p-l-15 p-r-15">Veja nossos pratos</span>
                <h1 class="txt1 contact-footer">Os mais pedidos</h1>
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
							<span class="txt21 m-b-3">
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
							<a href="#" class="txt21 m-b-3">
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
							<a href="#" class="txt21 m-b-3">
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
							<a href="#" class="txt21 m-b-3">
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
							<a href="#" class="txt21 m-b-3">
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
							<a href="#" class="txt21 m-b-3">
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


	<!-- Lunch -->
	<section class="section-lunch bg1-pattern">
		<div class="header-lunch parallax0 parallax100" style="background-image: url({{ asset('images/menu/cardapio.jpg') }});">
			<div class="t-center p-t-170 p-b-165">
				<h2 class="tit4 t-center">
					Cardápio completo
				</h2>
			</div>
		</div>

		<div class="container">
			<div class="row justify-content-md-center m-t-110 m-b-50">
            <div class="col text-center">
                <span class="tit2 p-l-15 p-r-15">Dê mais uma olhada</span>
                <h1 class="txt1 contact-footer">Todos os pratos</h1>
            </div>
      </div>
			<div class="row">
				<div class="col-md-10 col-lg-6 p-r-35 p-r-15-lg m-l-r-auto">
					<div class="wrap-item-mainmenu p-b-22">
						<h3 class="tit-mainmenu tit10 p-b-25">
							Petiscos
						</h3>

						<!-- Item mainmenu -->
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

					</div>

					<div class="wrap-item-mainmenu p-b-22">
						<h3 class="tit-mainmenu tit10 p-b-25">
							Bebidas
						</h3>

						<!-- Item mainmenu -->
						<div class="item-mainmenu m-b-36">
							<div class="flex-w flex-b m-b-3">
								<a href="#" class="name-item-mainmenu txt21">
									Vivamus pretium
								</a>

								<div class="line-item-mainmenu bg3-pattern"></div>

								<div class="price-item-mainmenu txt22">
									$29.79
								</div>
							</div>

							<span class="info-item-mainmenu txt23">

							</span>
						</div>

					</div>

					<div class="wrap-item-mainmenu p-b-22">
						<h3 class="tit-mainmenu tit10 p-b-25">
							Carnes
						</h3>

						<!-- Item mainmenu -->
						<div class="item-mainmenu m-b-36">
							<div class="flex-w flex-b m-b-3">
								<a href="#" class="name-item-mainmenu txt21">
									Carne de sol na brasa
								</a>

								<div class="line-item-mainmenu bg3-pattern"></div>

								<div class="price-item-mainmenu txt22">
									R$40,00
								</div>
							</div>

							<span class="info-item-mainmenu txt23">
								Carne de sol feita na brasa
							</span>
						</div>

					</div>
				</div>

				<div class="col-md-10 col-lg-6 p-l-35 p-l-15-lg m-l-r-auto">
					<div class="wrap-item-mainmenu p-b-22">
						<h3 class="tit-mainmenu tit10 p-b-25">
							Carnes
						</h3>

						<!-- Item mainmenu -->
						<div class="item-mainmenu m-b-36">
							<div class="flex-w flex-b m-b-3">
								<a href="#" class="name-item-mainmenu txt21">
									Duis sed aliquet
								</a>

								<div class="line-item-mainmenu bg3-pattern"></div>

								<div class="price-item-mainmenu txt22">
									$31.18
								</div>
							</div>

							<span class="info-item-mainmenu txt23">
								Proin lacinia nisl ut ultricies posuere nulla
							</span>
						</div>

					</div>

					<div class="wrap-item-mainmenu p-b-22">
						<h3 class="tit-mainmenu tit10 p-b-25">
							Peixes
						</h3>

						<!-- Item mainmenu -->
						<div class="item-mainmenu m-b-36">
							<div class="flex-w flex-b m-b-3">
								<a href="#" class="name-item-mainmenu txt21">
									tempus aliquet
								</a>

								<div class="line-item-mainmenu bg3-pattern"></div>

								<div class="price-item-mainmenu txt22">
									$9.79
								</div>
							</div>

							<span class="info-item-mainmenu txt23">
								Proin lacinia nisl ut ultricies posuere nulla
							</span>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>

@endsection

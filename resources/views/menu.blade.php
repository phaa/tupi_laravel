@extends('templates.layout') @section('extra_meta')
<meta name="description" content="Confira os nossos preparos." />
<link rel="canonical" href="http://restaurantetupi.com.br/cardápio" /> @endsection @section('title') Cardápio @endsection

<!-- Menu -->
@section('page_content')
<!-- Title Page -->
<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url({{ asset('images/menu/cardapio.jpg') }});">
    <h2 class="tit6 t-center">
			Nossa Culinária
		</h2>
</section>

<!-- Main menu -->
<section class="section-mainmenu p-t-60 p-b-10 bg1-pattern">
    <div class="container">
        <div class="row justify-content-md-center m-b-30">
            <div class="col text-center">
                <span class="tit2">Especialidades</span>
                <h1 class="txt1 contact-footer">Da casa</h1>
                <span class="txt23">(Clique nas imagens para ampliar)</span>
            </div>
        </div>
        <div class="row p-b-70">
            <div class="col-md-8 col-lg-6 m-l-r-auto">
                <!-- Block3 -->
                <div class="blo3 flex-w flex-col-l-sm m-b-30">
                    <div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
                        <a href="{{ asset('images/menu/oca.jpg') }}" data-lightbox="gallery">
                            <img src="{{ asset("images/menu/thumbs/oca.jpg ") }}" alt="Camarão Oca">
                        </a>
                    </div>

                    <div class="text-blo3 size21 flex-col-l-m">
                        <span class="txt21b m-b-3">
							Camarão na Oca
						</span>

                        <span class="txt23">
							Camarão empanado com arroz cremoso e fritas.
						</span>
                    </div>
                </div>

                <!-- Block3 -->
                <div class="blo3 flex-w flex-col-l-sm m-b-30">
                    <div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
                        <a href="{{ asset('images/menu/seridoense.jpg') }}" data-lightbox="gallery">
                            <img src="{{ asset("images/menu/thumbs/seridoense.jpg ") }}" alt="Camarão Seridoense">
                        </a>
                    </div>

                    <div class="text-blo3 size21 flex-col-l-m">
                        <span class="txt21b m-b-3">
							Camarão Seridoense
						</span>

                        <span class="txt23">
							Camarão salteado com creme de macaxeira.
                            Acompanha arroz, farofa e macaxeira frita.
						</span>
                    </div>
                </div>

                <!-- Block3 -->
                <div class="blo3 flex-w flex-col-l-sm m-b-30">
                    <div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
                        <a href="{{ asset('images/menu/pituba.jpg') }}" data-lightbox="gallery">
                            <img src="{{ asset("images/menu/thumbs/pituba.jpg ") }}" alt="Carne de Sol Pituba">
                        </a>
                    </div>

                    <div class="text-blo3 size21 flex-col-l-m">
                        <span class="txt21b m-b-3">
							Carne de Sol Pituba
						</span>

                        <span class="txt23">
							Acompanha baião de dois, farofa e vinagrete.
						</span>
                    </div>
                </div>

                <div class="blo3 flex-w flex-col-l-sm m-b-30">
                    <div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
                        <a href="{{ asset('images/menu/pacoca.jpg') }}" data-lightbox="gallery">
                            <img src="{{ asset("images/menu/thumbs/pacoca.jpg ") }}" alt="Paçoca">
                        </a>
                    </div>

                    <div class="text-blo3 size21 flex-col-l-m">
                        <span class="txt21b m-b-3">
							Paçoca Tupi
						</span>

                        <span class="txt23">
							Acompanha arroz de leite, feijão verde e macaxeira frita.
						</span>
                    </div>
                </div>
            </div>

            <div class="col-md-8 col-lg-6 m-l-r-auto">
                <!-- Block3 -->
                <div class="blo3 flex-w flex-col-l-sm m-b-30">
                    <div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
                        <a href="{{ asset('images/menu/potiguar.jpg') }}" data-lightbox="gallery">
                            <img src="{{ asset("images/menu/thumbs/potiguar.jpg ") }}" alt="Croquete de Charque">
                        </a>
                    </div>

                    <div class="text-blo3 size21 flex-col-l-m">
                        <span class="txt21b m-b-3">
							Peixe Potiguar
						</span>

                        <span class="txt23">
							Peixe grelhado com arroz cremoso de camarão.
                            Acompanha macaxeira frita.
						</span>
                    </div>
                </div>

                <!-- Block3 -->
                <div class="blo3 flex-w flex-col-l-sm m-b-30">
                    <div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
                        <a href="{{ asset('images/menu/moqueca_peixe.jpg') }}" data-lightbox="gallery">
                            <img src="{{ asset("images/menu/thumbs/moqueca_peixe.jpg ") }}" alt="Moqueca de Peixe e Camarão">
                        </a>
                    </div>

                    <div class="text-blo3 size21 flex-col-l-m">
                        <span class="txt21b m-b-3">
							Moqueca de Peixe e Camarão
						</span>

                        <span class="txt23">
							Acompanha arroz, farofa e pirão.
						</span>
                    </div>
                </div>

                <!-- Block3 -->
                <div class="blo3 flex-w flex-col-l-sm m-b-30">
                    <div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
                        <a href="{{ asset('images/menu/galinha.jpg') }}" data-lightbox="gallery">
                            <img src="{{ asset("images/menu/thumbs/galinha.jpg ") }}" alt="Moqueca de Peixe e Camarão">
                        </a>
                    </div>

                    <div class="text-blo3 size21 flex-col-l-m">
                        <span class="txt21b m-b-3">
							Galinha Tupi
						</span>

                        <span class="txt23">
                            Acompanha arroz, feijão verde, pirão, vinagrete, macaxeira e farofa.
						</span>
                    </div>
                </div>

                <div class="blo3 flex-w flex-col-l-sm m-b-30">
                    <div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
                        <a href="{{ asset('images/menu/croquete.jpg') }}" data-lightbox="gallery">
                            <img src="{{ asset("images/menu/thumbs/croquete.jpg ") }}" alt="Croquete">
                        </a>
                    </div>

                    <div class="text-blo3 size21 flex-col-l-m">
                        <span class="txt21b m-b-3">
							Croquete Tupi
						</span>

                        <span class="txt23">
							Empanado a base de carne de charque e jerimum temperado.
						</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
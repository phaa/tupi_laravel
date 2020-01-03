@extends('templates.layout')

@section('title')
Galeria
@endsection

<!-- Menu -->
@section('page_content')
	<section>
		<!-- Title Page -->
		<div class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url({{ asset('images/1800px/planta2.jpg') }});">
			<h2 class="tit6 t-center">
				Galeria Tupi
			</h2>
		</div>

		<!-- Gallery -->
		<div class="section-gallery p-t-70 p-b-50 bg1-pattern">
			<div class="t-center">
				<span class="tit2 p-l-15 p-r-15">
					Filtros
				</span>
			</div>
			
			<div class="wrap-label-gallery filter-tope-group flex-w flex-sb-m m-l-r-auto flex-col-c-sm text-center">
				<div class="wrap-labels m-l-r-auto">
					<button class="label-gallery txt26 trans-0-4 is-actived" data-filter="*">
						Todas
					</button>

					<button class="label-gallery txt26 trans-0-4" data-filter=".ambientes">
						Ambientes
					</button>

					<!--button class="label-gallery txt26 trans-0-4" data-filter=".pratos">
						Pratos
					</button-->

					<button class="label-gallery txt26 trans-0-4" data-filter=".eventos">
						Eventos
					</button>

					<button class="label-gallery txt26 trans-0-4" data-filter=".natureza">
						Natureza
					</button>
				</div>
			</div>

			<div class="wrap-gallery isotope-grid flex-w p-l-25 p-r-25">
				<!-- - -->
				<div class="item-gallery isotope-item bo-rad-10 hov-img-zoom eventos natureza">
					<img src="{{ asset('images/original/redario.jpg') }}" alt="IMG-GALLERY">

					<div class="overlay-item-gallery trans-0-4 flex-c-m">
						<a class="btn-show-gallery flex-c-m fa fa-search" href="{{ asset('images/original/redario.jpg') }}" data-lightbox="gallery"></a>
					</div>
				</div>

				<!-- - -->
				<div class="item-gallery isotope-item bo-rad-10 hov-img-zoom pratos">
					<img src="{{ asset('images/original/redario.jpg') }}" alt="IMG-GALLERY">

					<div class="overlay-item-gallery trans-0-4 flex-c-m">
						<a class="btn-show-gallery flex-c-m fa fa-search" href="{{ asset('images/original/redario.jpg') }}" data-lightbox="gallery"></a>
					</div>
				</div>

				<!-- - -->
				<div class="item-gallery isotope-item bo-rad-10 hov-img-zoom eventos">
					<img src="{{ asset('images/original/redario.jpg') }}" alt="IMG-GALLERY">

					<div class="overlay-item-gallery trans-0-4 flex-c-m">
						<a class="btn-show-gallery flex-c-m fa fa-search" href="{{ asset('images/original/redario.jpg') }}" data-lightbox="gallery"></a>
					</div>
				</div>

				<!-- - -->
				<div class="item-gallery isotope-item bo-rad-10 hov-img-zoom pratos">
					<img src="{{ asset('images/original/redario.jpg') }}" alt="IMG-GALLERY">

					<div class="overlay-item-gallery trans-0-4 flex-c-m">
						<a class="btn-show-gallery flex-c-m fa fa-search" href="{{ asset('images/original/redario.jpg') }}" data-lightbox="gallery"></a>
					</div>
				</div>

				<!-- - -->
				<div class="item-gallery isotope-item bo-rad-10 hov-img-zoom pratos">
					<img src="{{ asset('images/original/redario.jpg') }}" alt="IMG-GALLERY">

					<div class="overlay-item-gallery trans-0-4 flex-c-m">
						<a class="btn-show-gallery flex-c-m fa fa-search" href="{{ asset('images/original/redario.jpg') }}" data-lightbox="gallery"></a>
					</div>
				</div>

				<!-- - -->
				<div class="item-gallery isotope-item bo-rad-10 hov-img-zoom ambientes natureza">
					<img src="{{ asset('images/original/redario.jpg') }}" alt="IMG-GALLERY">

					<div class="overlay-item-gallery trans-0-4 flex-c-m">
						<a class="btn-show-gallery flex-c-m fa fa-search" href="{{ asset('images/original/redario.jpg') }}" data-lightbox="gallery"></a>
					</div>
				</div>

				<!-- - -->
				<div class="item-gallery isotope-item bo-rad-10 hov-img-zoom ambientes">
					<img src="{{ asset('images/original/redario.jpg') }}" alt="IMG-GALLERY">

					<div class="overlay-item-gallery trans-0-4 flex-c-m">
						<a class="btn-show-gallery flex-c-m fa fa-search" href="{{ asset('images/original/redario.jpg') }}" data-lightbox="gallery"></a>
					</div>
				</div>

				<!-- - -->
				<div class="item-gallery isotope-item bo-rad-10 hov-img-zoom ambientes">
					<img src="{{ asset('images/original/redario.jpg') }}" alt="IMG-GALLERY">

					<div class="overlay-item-gallery trans-0-4 flex-c-m">
						<a class="btn-show-gallery flex-c-m fa fa-search" href="{{ asset('images/original/redario.jpg') }}" data-lightbox="gallery"></a>
					</div>
				</div>

				<!-- - -->
				<div class="item-gallery isotope-item bo-rad-10 hov-img-zoom eventos">
					<img src="{{ asset('images/original/redario.jpg') }}" alt="IMG-GALLERY">

					<div class="overlay-item-gallery trans-0-4 flex-c-m">
						<a class="btn-show-gallery flex-c-m fa fa-search" href="{{ asset('images/original/redario.jpg') }}" data-lightbox="gallery"></a>
					</div>
				</div>
			</div>

			<!--div class="pagination flex-c-m flex-w p-l-15 p-r-15 m-t-24 m-b-50">
				<a href="#" class="item-pagination flex-c-m trans-0-4 active-pagination">1</a>
				<a href="#" class="item-pagination flex-c-m trans-0-4">2</a>
				<a href="#" class="item-pagination flex-c-m trans-0-4">3</a>
			</div-->
		</div>
	</section>

@endsection

@section('additional_scripts')
	<script type="text/javascript" src="{{ asset("vendor/isotope/isotope.pkgd.min.js") }}"></script>
@endsection

@extends('templates.layout')

@section('title')
Galeria
@endsection

<!-- Menu -->
@section('page_content')
	<section>
		<!-- Title Page -->
		<div class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url({{ asset('images/1800px/planta2.jpg') }});">
			<h1 class="tit6 t-center">
				Galeria Tupi
			</h1>
		</div>

		<!-- Gallery -->
		<div class="section-gallery p-t-70 p-b-50 bg1-pattern container">
			<div class="t-center">
				<span class="tit2 p-l-15 p-r-15">
					Filtros
				</span>
			</div>
			
			<!--div class="wrap-label-gallery filter-tope-group flex-w flex-sb-m m-l-r-auto flex-col-c-sm text-center">
				<div class="wrap-labels m-l-r-auto">
					<button class="label-gallery txt26 trans-0-4 is-actived" data-filter="*">
						Todas
					</button>

					<button class="label-gallery txt26 trans-0-4" data-filter=".ambientes">
						Ambientes
					</button>

					<button class="label-gallery txt26 trans-0-4" data-filter=".pratos">
						Pratos
					</button>

					<button class="label-gallery txt26 trans-0-4" data-filter=".eventos">
						Eventos
					</button>

					<button class="label-gallery txt26 trans-0-4" data-filter=".natureza">
						Natureza
					</button>
				</div>
			</div deica para um container externo p-l-25 p-r-25 p-b-115   -->

			<div class="grid are-images-unloaded">
				<div class="grid__col-sizer"></div>
  				<div class="grid__gutter-sizer"></div>
				@foreach ($images as $image)
					<div class="grid__item bo-rad-10 hov-img-zoom">
						<img src="{{ asset('images/uploads/'.$image->filename) }}" alt="{{ $image->alt_text }}">

						<div class="overlay-grid__item trans-0-4 flex-c-m">
							<a class="btn-show-gallery flex-c-m fa fa-search" href="{{ asset('images/uploads/'.$image->filename) }}" data-lightbox="gallery"></a>
						</div>
					</div>
				@endforeach
				{{ $images->links() }}
			</div>
			<div class="page-load-status">
			<div class="loader-ellips infinite-scroll-request">
				<span class="loader-ellips__dot"></span>
				<span class="loader-ellips__dot"></span>
				<span class="loader-ellips__dot"></span>
				<span class="loader-ellips__dot"></span>
			</div>
			<p class="infinite-scroll-last">Fim das fotos</p>
			<p class="infinite-scroll-error">Nenhum dado para carregar</p>
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
<script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
<script src="https://unpkg.com/infinite-scroll@3/dist/infinite-scroll.pkgd.min.js"></script>
<script type="text/javascript">
	

$(function() {
    $('ul.pagination').css('opacity', '0');
    // init Masonry

    var $grid = $('.grid').masonry({
        itemSelector: 'none', // select none at first
        columnWidth: '.grid__col-sizer',
        gutter: '.grid__gutter-sizer',
        percentPosition: true,
        stagger: 30,
        // nicer reveal transition
        visibleStyle: { transform: 'translateY(0)', opacity: 1 },
        hiddenStyle: { transform: 'translateY(100px)', opacity: 0 },
    });
    
    // get Masonry instance
    var msnry = $grid.data('masonry');
    
    // initial items reveal
    $grid.imagesLoaded( function() {
        $grid.removeClass('are-images-unloaded');
        $grid.masonry( 'option', { itemSelector: '.grid__item' });
        var $items = $grid.find('.grid__item');
        $grid.masonry( 'appended', $items );
		$('ul.pagination').css('opacity', '0');
    });
    
    //-------------------------------------//
    // hack CodePen to load pens as pages
    
    var nextPenSlugs = [
        '202252c2f5f192688dada252913ccf13',
        'a308f05af22690139e9a2bc655bfe3ee',
        '6c9ff23039157ee37b3ab982245eef28',
    ];
    
    function getPenPath() {
        var slug = nextPenSlugs[ this.loadCount ];
        if ( slug ) {
        return 'https://s.codepen.io/desandro/debug/' + slug;
        }
    }
    
    //-------------------------------------//
    // init Infinte Scroll
    
    $grid.infiniteScroll({
        path: '.pagination li.active + li a',
        append: '.grid__item',
        outlayer: msnry,
        status: '.page-load-status',
    });

	$('ul.pagination').css('opacity', '0');

});

</script>
	<!--script type="text/javascript" src="{{ asset("vendor/isotope/isotope.pkgd.min.js") }}"></script-->

@endsection

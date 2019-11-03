<aside class="sidebar trans-0-3">
    <!-- Button Hide sidebar -->
    <button id="sidebarHamburger" style="" class="hamburger hamburger--collapse trans-0-4" type="button">
        <span class="hamburger-box">
            <span class="hamburger-inner"></span>
        </span>
    </button>

    <ul class="menu-sidebar" style="margin-top:1%;">
        <div class="p-l-30 p-r-30">
            <img style="width: 100%;" src="{{ asset("images/icons/tupi_logo_completa.png") }}" alt="IMG-LOGO">
        </div>
        <li class="t-center m-t-15 {{ Route::current()->getName() == 'index' ? 'active_link' : '' }}">
            <a href="{{ route('index') }}" class="txt12 link-hover">Início</a>
        </li>

        <li class="t-center {{ Route::current()->getName() == 'menu' ? 'active_link' : '' }}">
            <a href="{{ route('menu') }}" class="txt12 link-hover">Cardápio</a>
        </li>

        <li class="t-center {{ Route::current()->getName() == 'gallery' ? 'active_link' : '' }}">
            <a href="{{ route('gallery') }}" class="txt12 link-hover">Galeria</a>
        </li>

        <li class="t-center {{ Route::current()->getName() == 'about' ? 'active_link' : '' }}">
            <a href="{{ route('about') }}" class="txt12 link-hover">Sobre</a>
        </li>

        <li class="t-center {{ Route::current()->getName() == 'blog' ? 'active_link' : '' }}">
            <a href="{{ route('blog') }}" class="txt12 link-hover">Blog</a>
        </li>

        <li class="t-center {{ Route::current()->getName() == 'contact' ? 'active_link' : '' }}">
            <a href="{{ route('contact') }}" class="txt12 link-hover">Contato</a>
        </li>
    </ul>

    <div class="social flex-w flex-l-m p-r-20">
        <div style="margin: 20px auto;"> 
            <a target="_blank" href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
            <a target="_blank" href="https://www.instagram.com/restaurante_tupi"><i class="fab fa-instagram m-l-15" aria-hidden="true"></i></a>
            <a target="_blank" href="https://www.google.com/maps/place/Restaurante+Tupi+-+km+157+BR-101+sentido+Para%C3%ADba+-+Fazenda+Pituba,+Goianinha+-+RN,+59173-000,+Brasil/@-6.34919,-35.167183,17z/data=!3m1!1e3!4m2!3m1!1s0x7b281c9d2336989:0x912c932229897073?hl=pt-BR&gl=US"><i class="fas fa-map-marker-alt m-l-15"></i></a>
            <a target="_blank" href="https://www.tripadvisor.com.br/ShowUserReviews-g4136730-d5752688-r452110872-Restaurante_Tupi-Goianinha_State_of_Rio_Grande_do_Norte.html"><i class="fab fa-tripadvisor m-l-15" aria-hidden="true"></i></a>
        </div>
    </div>
</aside>

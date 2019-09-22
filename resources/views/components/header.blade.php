<!-- Header -->
<header>
    <!-- Header desktop -->
    <div class="wrap-menu-header gradient1 trans-0-4">
        <div class="container h-full">
            <div class="wrap_header trans-0-3">
                <!-- Logo -->
                <div class="logo">
                    <a href="/">
                        <img src="{{ asset("images/icons/tupi_logo.png") }}" alt="IMG-LOGO">
                    </a>
                </div>

                <!-- Menu -->
                <div class="wrap_menu p-l-45 p-l-0-xl">
                    <nav class="menu">
                        <ul class="main_menu">
                            <li class="{{ Route::current()->getName() == 'index' ? 'active_link' : '' }}">
                                <a href="{{ route('index') }}">Início</a>
                            </li>

                            <li class="{{ Route::current()->getName() == 'menu' ? 'active_link' : '' }}">
                                <a href="{{ route('menu') }}" class="">Cardápio</a>
                            </li>

                            <li class="{{ Route::current()->getName() == 'gallery' ? 'active_link' : '' }}">
                                <a href="{{ route('gallery') }}" class="">Galeria</a>
                            </li>

                            <li class="{{ Route::current()->getName() == 'about' ? 'active_link' : '' }}">
                                <a href="{{ route('about') }}" class="">Sobre</a>
                            </li>

                            <li class="{{ Route::current()->getName() == 'blog' ? 'active_link' : '' }}">
                                <a href="{{ route('blog') }}" class="">Blog</a>
                            </li>

                            <li class="{{ Route::current()->getName() == 'contact' ? 'active_link' : '' }}">
                                <a href="{{ route('contact') }}" class="">Contato</a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <!-- Social -->
                <div class="social flex-w flex-l-m p-r-20">
                    <a target="_blank" href="https://www.tripadvisor.com.br/ShowUserReviews-g4136730-d5752688-r452110872-Restaurante_Tupi-Goianinha_State_of_Rio_Grande_do_Norte.html"><i class="fab fa-tripadvisor" aria-hidden="true"></i></a>
                    <a target="_blank" href="#"><i class="fab fa-facebook-f m-l-21" aria-hidden="true"></i></a>
                    <a target="_blank" href="https://www.instagram.com/restaurante_tupi"><i class="fab fa-instagram m-l-21" aria-hidden="true"></i></a>
                    <button class="hamburger hamburger--collapse" type="button" style="color: #fff;">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Sidebar -->
<aside class="sidebar trans-0-3">
    <!-- Button Hide sidebar -->
    <button id="sidebarHamburger" style="" class="hamburger hamburger--collapse trans-0-4" type="button">
        <span class="hamburger-box">
            <span class="hamburger-inner"></span>
        </span>
    </button>

    <ul class="menu-sidebar" style="margin-top:1%;">
        <div style="padding: 25px;">
            <img style="width: 100%;" src="{{ asset("images/icons/tupi_logo_completa.png") }}" alt="IMG-LOGO">
        </div>
        <li class="t-center m-b-13">
            <a href="{{ route('index') }}" class="txt12 link-hover">Início</a>
        </li>

        <li class="t-center m-b-13">
            <a href="{{ route('menu') }}" class="txt12 link-hover">Cardápio</a>
        </li>

        <li class="t-center m-b-13">
            <a href="{{ route('gallery') }}" class="txt12 link-hover">Galeria</a>
        </li>

        <li class="t-center m-b-13">
            <a href="{{ route('about') }}" class="txt12 link-hover">Sobre</a>
        </li>

        <li class="t-center m-b-13">
            <a href="{{ route('blog') }}" class="txt12 link-hover">Blog</a>
        </li>

        <li class="t-center m-b-33">
            <a href="{{ route('contact') }}" class="txt12 link-hover">Contato</a>
        </li>
    </ul>
</aside>

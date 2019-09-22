<!-- Sidebar -->
<aside class="sidebar trans-0-4">
    <!-- Button Hide sidebar -->
    <button class="btn-hide-sidebar ti-close color0-hov trans-0-4"></button>

    <ul class="menu-sidebar" style="margin-top:15%;">
        <div style="padding: 40px;">
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
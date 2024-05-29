<!-- ======= Header ======= -->
<section id="topbar" class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
            <i class="bi bi-envelope d-flex align-items-center"><a
                    href="mailto:contact@example.com">castanedaelisayes@gmail.com</a></i>
            <i class="bi bi-phone d-flex align-items-center ms-4"><span>+51 921 674 886</span></i>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
        </div>
    </div>
</section><!-- End Top Bar -->

{{-- <style>
    .active li{
        color: aqua !important;
    }
</style> --}}
<header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        <a href="/" class="logo d-flex align-items-center">
            <h1>Empresa<span>.</span></h1>
        </a>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="{{setActive('home')}}" href="/">Home</a></li>
                <li><a class="{{setActive('nosotros')}}" href="/nosotros">Nosotros</a></li>
                <li><a class="{{setActive('persona')}}" href="/persona">Persona</a></li>
                <li><a class="{{setActive('servicios')}}" href="/servicios">Servicios</a></li>
                <li><a class="{{setActive('contacto')}}" href="/contacto">Contacto</a></li>               
            </ul>
        </nav><!-- .navbar -->

        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
</header><!-- End Header -->

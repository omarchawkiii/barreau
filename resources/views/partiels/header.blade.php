<header class="header-area">
    <!-- Start Top Header -->
    <div class="top-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-10">
                    <ul class="header-left-content">
                        <li>
                            <i class="bx bx-home"></i>
                            Palais de justice 10, Rue Abane Remdane - Alger
                        </li>
                        <li>
                            <i class="bx bx-phone-call"></i>
                            <a href="tel:+213 (0) 21 74 14 80">+213 (0) 21 74 14 80</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-2">
                    <div class="header-right-content">
                        <ul class="flag-area">
                            <li class="flag-item-top">
                                <a href="javascript:;" class="flag-bar">
                                    <img src="assets/img/flag/globe.png" alt="Image">
                                    <span>FR</span>
                                </a>

                                <ul class="flag-item-bottom">
                                    <li class="flag-item">
                                        <a href="javascript:;" class="flag-link">
                                           AR
                                        </a>
                                    </li>
                                    <li class="flag-item">
                                        <a href="javascript:;" class="flag-link">

                                            EN
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Top Header -->

    <!-- Start Navbar Area -->
    <div class="navbar-area">
        <div class="mobile-nav">
            <div class="container">
                <div class="mobile-menu">
                    <div class="logo">
                        <a href="index.html">
                            <img src="assets/img/logo.png" alt="logo">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="desktop-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="index.html">
                        <img src="assets/img/logo.png" alt="logo">
                    </a>

                    <div class="collapse navbar-collapse mean-menu">
                        <ul class="navbar-nav m-auto">
                            <li class="nav-item">
                                <a href="{{route('front.home')}}" class="nav-link {{ Route::currentRouteName() == 'front.home' ? 'active' : '' }}">
                                    Accueil
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{route('front.lawyers')}}" class="nav-link {{ Route::currentRouteName() == 'front.lawyers' ? 'active' : '' }}">
                                    Tableau des avocats
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    C.A.P.R.A
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Centre des Avocats Pour l'Observation des Elections
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="company.html" class="nav-link">Contactez-nous</a>
                            </li>

                        </ul>


                    </div>
                </nav>
            </div>
        </div>


    </div>
    <!-- End Navbar Area -->
</header>

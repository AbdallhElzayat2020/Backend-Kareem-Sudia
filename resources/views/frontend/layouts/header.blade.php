<header class="theme-header transparent-header">
    <!-- header Navigation -->
    <div class="header-navigation navigation-style-v2">
        <div class="nav-overlay"></div>
        <div class="container-fluid">
            <div class="primary-menu">
                <div class="site-branding">
                    <a href="{{route('home')}}" class="brand-logo">
                        <img src="{{asset('assets/frontend/assets/images/logo/logo-1.png')}}" alt="Site Logo">
                    </a>
                </div>
                <div class="nav-menu nav-ml-auto">
                    <!-- Navbar Close -->
                    <div class="navbar-close"><i class="far fa-times"></i></div>

                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <ul>
                            <li class="menu-item">
                                <a href="#home" class="page-scroll active nav-link">Home</a>
                            </li>
                            <li class="menu-item">
                                <a href="#services" class="page-scroll nav-link">Services</a>
                            </li>
                            <li class="menu-item">
                                <a href="#about" class="page-scroll nav-link">About</a></li>
                            <li class="menu-item">
                                <a href="#testimonial" class="page-scroll nav-link">Testimonial</a>
                            </li>
                            <li class="menu-item">
                                <a href="#pricing" class="page-scroll nav-link">pricing</a>
                            </li>
                            <li class="menu-item">
                                <a href="#contact" class="page-scroll nav-link">Contact</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('login') }}" class="nav-link">Login</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('register') }}" class="nav-link">Register</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="header-right-nav">
                    <ul>
                        <li class="bar-item"><a href="#"><img src="{{asset('assets/frontend/assets/images/dot.png')}}"
                                                              alt="Dots Logo"></a>
                        </li>
                        <li class="navbar-toggle-btn">
                            <div class="navbar-toggler">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>

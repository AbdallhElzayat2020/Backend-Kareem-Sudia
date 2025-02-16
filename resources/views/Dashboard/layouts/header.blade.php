    {{-- navbar --}}
    <div class="navbar-bg"></div>
    <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
            <ul class="navbar-nav mr-3">
                <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a>
                </li>

            </ul>
            <div class="search-element">
                <div class="search-backdrop"></div>
                <div class="search-result">
                    <div class="search-header">
                        Histories
                    </div>
                    <div class="search-item">
                        <a href="#">How to hack NASA using CSS</a>
                        <a href="#" class="search-close"><i class="fas fa-times"></i></a>
                    </div>
                    <div class="search-item">
                        <a href="#">Kodinger.com</a>
                        <a href="#" class="search-close"><i class="fas fa-times"></i></a>
                    </div>
                    <div class="search-item">
                        <a href="#">#PLC</a>
                        <a href="#" class="search-close"><i class="fas fa-times"></i></a>
                    </div>
                    <div class="search-header">
                        Result
                    </div>
                    <div class="search-item">
                        <a href="#">
                            <img class="mr-3 rounded" width="30"
                                src="{{ asset('assets/Dashboard/img/products/product-3-50.png') }}" alt="product">
                            oPhone S9 Limited Edition
                        </a>
                    </div>
                    <div class="search-item">
                        <a href="#">
                            <img class="mr-3 rounded" width="30"
                                src="{{ asset('assets/Dashboard/img/products/product-2-50.png') }}" alt="product">
                            Drone X2 New Gen-7
                        </a>
                    </div>
                    <div class="search-item">
                        <a href="#">
                            <img class="mr-3 rounded" width="30"
                                src="{{ asset('assets/Dashboard/img/products/product-1-50.png') }}" alt="product">
                            Headphone Blitz
                        </a>
                    </div>
                    <div class="search-header">
                        Projects
                    </div>
                    <div class="search-item">
                        <a href="#">
                            <div class="search-icon bg-danger text-white mr-3">
                                <i class="fas fa-code"></i>
                            </div>
                            Stisla Admin Template
                        </a>
                    </div>
                    <div class="search-item">
                        <a href="#">
                            <div class="search-icon bg-primary text-white mr-3">
                                <i class="fas fa-laptop"></i>
                            </div>
                            Create a new Homepage Design
                        </a>
                    </div>
                </div>
            </div>
        </form>
        <ul class="navbar-nav navbar-right">
            <li class="dropdown"><a href="#" data-toggle="dropdown"
                    class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                    <img alt="image" src="{{ asset('assets/Dashboard/img/avatar/avatar-1.png') }}"
                        class="rounded-circle mr-1">
                    @auth

                        <div class="d-sm-none d-lg-inline-block">{{ Auth::user()->name }} </div>
                    @endauth
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    @auth
                        <div class="dropdown-title">
                            {{ Auth::user()->email }}
                        </div>
                    @endauth

                    <div class="dropdown-divider"></div>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="dropdown-item has-icon text-danger">
                            <i class="fas fa-sign-out-alt"></i> Logout
                        </button>
                    </form>
                </div>
            </li>
        </ul>
    </nav>

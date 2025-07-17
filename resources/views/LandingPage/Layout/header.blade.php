    <header class="main_header_area">
        {{-- <div class="topbar-wrap">
            <div class="container">
                <div class="top-info d-flex justify-content-between align-items-center">
                    <ul class="t-address">
                        <li><i class="fas fa-phone-alt"></i> 974 8845246937</li>
                        <li><i class="far fa-envelope"></i> <a
                                href="https://htmldesigntemplates.com/cdn-cgi/l/email-protection" class="__cf_email__"
                                data-cfemail="c9a0a7afa689acb9a8bda1baa8a5a8e7aaa6a4">[email&#160;protected]</a></li>
                        <li><i class="fas fa-map-marker-alt"></i> 24th street, California</li>
                    </ul>
                    <ul class="t-social">
                        <li>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li>
                            <span class="ct-search-link"><a href="#"><i class="fa fa-search"></i></a></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div> --}}

        <!-- Navigation Bar -->
        <div class="header_menu">
            <nav class="navbar navbar-default">
                <div class="container">
                    <div class="navbar-flex d-flex align-items-center justify-content-between w-100">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <a class="navbar-brand text-center" href="index.html">
                                <img src="{{ asset('LandingPageOri/assets/images/Logo/Pakukerto.png') }}" alt="image" />
                            </a>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="navbar-collapse1 w-100" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav" id="responsive-menu">
                                <li class="dropdown submenu {{ request()->is('/') ? 'active' : '' }}">
                                    <a href="/" aria-haspopup="true">Home</a>
                                </li>
                                <li class="dropdown submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                        aria-haspopup="true" aria-expanded="false">PROFILE <i
                                            class="fas fa-chevron-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="gallery.html">Sejarah Desa</a></li>
                                        <li><a href="instructors.html">Visi & Misi</a></li>
                                        <li><a href="pricing.html">Kelembagaan</a></li>
                                        <li><a href="testimonial.html">Letak Geografis</a></li>
                                        <li><a href="faq.html">Data Demografi</a></li>
                                        <li><a href="faq.html">Potensi Desa</a></li>
                                    </ul>
                                </li>
                                <li><a href="about.html">About Us</a></li>
                                <li class="dropdown submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                        aria-haspopup="true" aria-expanded="false">UMKM<i
                                            class="fas fa-chevron-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="course-1.html">Course List 1</a></li>
                                        <li><a href="course-2.html">Course List 2</a></li>
                                        <li><a href="course-detail.html">Course Detail</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                        aria-haspopup="true" aria-expanded="false">Events <i
                                            class="fas fa-chevron-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="event.html">Event List</a></li>
                                        <li><a href="event-detail.html">Event Detail</a></li>
                                    </ul>
                                </li>
                                <li class="{{ request()->is('blog') ? 'active' : '' }}">
                                    <a href="/blog">Blog</a>
                                </li>
                                <li class="{{ request()->is('contact') ? 'active' : '' }}"><a href="/contact">HUBUNGI KAMI</a></li>
                                <li class="{{ request()->is('persuratan') ? 'active' : '' }}">
                                    <a href="/persuratan">Administrasi Persuratan</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.navbar-collapse -->
                        <div id="slicknav-mobile"></div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </nav>
        </div>
        <!-- Navigation Bar Ends -->
    </header>

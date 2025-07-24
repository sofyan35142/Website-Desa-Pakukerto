            <div class="vertical-menu">

                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <a href="index.html" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="{{ asset('assetsAdmin/images/logo-sm.png') }}" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="{{ asset('assetsAdmin/images/logo-dark.png') }}" alt="" height="20">
                        </span>
                    </a>

                    <a href="index.html" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="{{ asset('assetsAdmin/images/logo-sm.png') }}" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="{{ asset('assetsAdmin/images/logo-light.png') }}" alt="" height="20">
                        </span>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
                    <i class="fa fa-fw fa-bars"></i>
                </button>

                <div data-simplebar class="sidebar-menu-scroll">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title">Beranda</li>

                            <li>
                                <a href="index.html">
                                    <i class="uil-home-alt"></i><span class="badge rounded-pill bg-primary float-end"></span>
                                    <span>Sambutan Kades</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="fas fa-info-circle"></i>
                                    <span>Profile</span>
                                    <i class="fas fa-angle-down float-end"></i>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="ecommerce-products.html">Sejarah Desa</a></li>
                                    <li><a href="ecommerce-product-detail.html">Visi & Misi</a></li>
                                    <li><a href="ecommerce-orders.html">Kelembagaan</a></li>
                                    <li><a href="ecommerce-customers.html">Letak Geografis</a></li>
                                    <li><a href="ecommerce-cart.html">Data Demografis</a></li>
                                    <li><a href="ecommerce-checkout.html">Potensi Desa</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="waves-effect">
                                    <i class="fas fa-store"></i>
                                    <span class="badge rounded-pill bg-primary float-end"></span>
                                    <span>UMKM</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="waves-effect">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span class="badge rounded-pill bg-primary float-end"></span>
                                    <span>EVENT</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.blogs.view') }}" class="waves-effect">
                                    <i class="fas fa-blog"></i>
                                    <span class="badge rounded-pill bg-primary float-end"></span>
                                    <span>Blog</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="waves-effect">
                                    <i class="fas fa-envelope"></i>
                                    <span class="badge rounded-pill bg-primary float-end"></span>
                                    <span>Hubungi kami</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="waves-effect">
                                    <i class="fas fa-file-alt"></i>
                                    <span class="badge rounded-pill bg-primary float-end"></span>
                                    <span>Administrasi Persuratan</span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <!-- Sidebar -->
                </div>
            </div>

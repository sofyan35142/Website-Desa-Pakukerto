<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

@include('LandingPage.Layout.head')
<body>
    <div id="preloader">
        <div id="status"></div>
    </div>
    @include('LandingPage.Layout.header')
    <section class="breadcrumb-main">
        <div class="container">
            <div class="breadcrumb-inner">
                <h2>DAFTAR UMKM DESA PAKUKERTO</h2>
            </div>
        </div>
        <div class="sl-overlay"></div>
    </section>
    <section class="home-3 courses news-events">
        <div class="container">
            <div class="wrap-customize">
                <div class="row">
                    <div class="col-lg-8 col-md-12 customize-wrap wow fadeInUp">
                        <div class="course-single-wp">
                            <div class="customize-item d-flex mb-3">
                                <div class="sv-image pr-3">
                                    <img src="{{asset('LandingPageOri/assets/images/courses/event-1.jpg')}}" alt="Produk Keripik Tempe" />
                                </div>
                                <div class="customize-ct m-0">
                                    <h4>
                                        <a href="/umkm/detail">UMKM Keripik Tempe "Gurih Jaya"</a>
                                    </h4>
                                    <p>
                                        Menyediakan berbagai varian keripik tempe renyah dengan rasa original, pedas, dan balado. Cocok sebagai camilan sehat keluarga atau oleh-oleh khas Pakukerto.
                                    </p>
                                </div>
                            </div>
                            <div class="customize-item d-flex mb-3">
                                <div class="sv-image pr-3">
                                    <img src="{{asset('LandingPageOri/assets/images/courses/course-2.jpg')}}" alt="Produk Batik Tulis" />
                                </div>
                                <div class="customize-ct m-0">
                                    <h4>
                                        <a href="#">Batik Tulis "Sekar Jagat"</a>
                                    </h4>
                                    <p>
                                        Pengrajin batik tulis tradisional dengan motif khas lokal Desa Pakukerto. Tersedia dalam bentuk kain, pakaian jadi, dan aksesoris. Menerima pesanan custom.
                                    </p>
                                </div>
                            </div>
                            <div class="customize-item d-flex mb-3">
                                <div class="sv-image pr-3">
                                    <img src="{{asset('LandingPageOri/assets/images/courses/course-3.jpg')}}" alt="Produk Olahan Jahe" />
                                </div>
                                <div class="customize-ct m-0">
                                    <h4>
                                        <a href="#">Minuman Herbal "Jahe Wangi"</a>
                                    </h4>
                                    <p>
                                        Memproduksi minuman instan berbahan dasar jahe merah murni yang menyehatkan. Tersedia dalam kemasan sachet dan botol siap minum.
                                    </p>
                                </div>
                            </div>
                            <div class="customize-item d-flex mb-3">
                                <div class="sv-image pr-3">
                                    <img src="{{asset('LandingPageOri/assets/images/courses/course-4.jpg')}}" alt="Produk Anyaman Bambu" />
                                </div>
                                <div class="customize-ct m-0">
                                    <h4>
                                        <a href="#">Kerajinan Anyaman Bambu "Kriya Lestari"</a>
                                    </h4>
                                    <p>
                                        Menghasilkan berbagai produk anyaman bambu seperti topi, tas, tempat tisu, dan dekorasi rumah. Semua dibuat secara manual dengan kualitas terbaik.
                                    </p>
                                </div>
                            </div>
                            <div class="customize-item d-flex mb-3">
                                <div class="sv-image pr-3">
                                    <img src="{{asset('LandingPageOri/assets/images/courses/event-1.jpg')}}" alt="Produk Abon Sapi" />
                                </div>
                                <div class="customize-ct m-0">
                                    <h4>
                                        <a href="#">Abon Sapi "Lezat Nikmat"</a>
                                    </h4>
                                    <p>
                                        Abon sapi dengan resep turun-temurun, bumbu rempah asli, dan tanpa pengawet. Tersedia dalam berbagai ukuran kemasan, cocok untuk lauk pauk atau bekal perjalanan.
                                    </p>
                                </div>
                            </div>
                            <div class="customize-item d-flex">
                                <div class="sv-image pr-3">
                                    <img src="{{asset('LandingPageOri/assets/images/courses/course-3.jpg')}}" alt="Produk Aneka Kue Tradisional" />
                                </div>
                                <div class="customize-ct m-0">
                                    <h4>
                                        <a href="#">Aneka Kue Tradisional "Dapur Nenek"</a>
                                    </h4>
                                    <p>
                                        Menyediakan berbagai macam kue basah dan kering tradisional khas Indonesia, seperti lemper, klepon, nagasari, dan kue lapis. Menerima pesanan untuk acara.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 customize-wrap aside-sidebar wow fadeInUp">
                        <div class="sidebar-search mb-3">
                            <div class="input-group">
                                <div class="form-outline">
                                    <input type="search" id="form1" class="form-control" placeholder="Cari UMKM..." />
                                </div>
                                <button type="button" class="btn btn-primary">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>

                        <div class="sidebar-course mb-3">
                            <div class="sidebar-title">
                                <h4>UMKM Terbaru</h4>
                            </div>
                            <div class="customize-item d-flex mb-3">
                                <div class="sv-image pr-3">
                                    <img src="{{asset('LandingPageOri/assets/images/courses/course-2.jpg')}}" alt="UMKM Terbaru 1" />
                                </div>
                                <div class="customize-ct m-0">
                                    <h6 class="mb-0">
                                        <a href="/umkm/detail">UMKM Keripik Tempe "Gurih Jaya"</a>
                                    </h6>
                                    <span class="cust-meta"> Didaftarkan: 15 Juni 2025</span>
                                </div>
                            </div>
                            <div class="customize-item d-flex mb-3">
                                <div class="sv-image pr-3">
                                    <img src="{{asset('LandingPageOri/assets/images/courses/event-1.jpg')}}" alt="UMKM Terbaru 2" />
                                </div>
                                <div class="customize-ct m-0">
                                    <h6 class="mb-0">
                                        <a href="#">Batik Tulis "Sekar Jagat"</a>
                                    </h6>
                                    <span class="cust-meta"> Didaftarkan: 10 Mei 2025</span>
                                </div>
                            </div>
                            <div class="customize-item d-flex mb-3">
                                <div class="sv-image pr-3">
                                    <img src="{{asset('LandingPageOri/assets/images/courses/course-4.jpg')}}" alt="UMKM Terbaru 3" />
                                </div>
                                <div class="customize-ct m-0">
                                    <h6 class="mb-0">
                                        <a href="#">Minuman Herbal "Jahe Wangi"</a>
                                    </h6>
                                    <span class="cust-meta"> Didaftarkan: 2 April 2025</span>
                                </div>
                            </div>
                            <div class="customize-item d-flex">
                                <div class="sv-image pr-3">
                                    <img src="{{asset('LandingPageOri/assets/images/courses/course-3.jpg')}}" alt="UMKM Terbaru 4" />
                                </div>
                                <div class="customize-ct m-0">
                                    <h6 class="mb-0">
                                        <a href="#">Kerajinan Anyaman Bambu "Kriya Lestari"</a>
                                    </h6>
                                    <span class="cust-meta"> Didaftarkan: 1 Maret 2025</span>
                                </div>
                            </div>
                        </div>

                        <div class="sidebar-contact">
                            <div class="sidebar-title">
                                <h4>Informasi Kontak Desa</h4>
                            </div>
                            <div class="side-contact-wp text-center">
                                <h5 class="cl-blue">Pusat Informasi UMKM Desa Pakukerto</h5>
                                <ul class="d-flex flex-column mb-3">
                                    <li>Kantor Kepala Desa Pakukerto</li>
                                    <li>Kecamatan Sukorejo, Kabupaten Pasuruan</li>
                                    <li>Jawa Timur, Indonesia</li>
                                </ul>
                                <ul class="d-flex flex-column mb-3">
                                    <li>+62 812-3456-7890 (Kantor Desa)</li>
                                    <li><a href="mailto:info@desapakukerto.go.id"
                                            class="__cf_email__"
                                            data-cfemail="dab8a9b8bb9ab1afafb4b3acbfa8f4bfbeaf">info@desapakukerto.go.id</a>
                                    </li>
                                </ul>
                                <p class="cl-orange mb-3">Jam Pelayanan: Senin – Jumat 08:00 – 16:00 WIB</p>
                                <ul class="sidebar-social mb-3">
                                    <li>
                                        <a href="#" class="bg-fb"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="bg-twitter"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="bg-linkedin"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                </ul>
                                <button class="btn">Hubungi Kami</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('LandingPage.Layout.footer')
    <form action="#" class="ct-searchForm">
        <div class="inner">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-8">
                        <div class="form-group">
                            <input id="cf-search-form" type="text" placeholder="Search ..." required
                                class="form-control" />
                            <button type="submit" class="ct-search-btn"><i class="fa fa-search"></i></button>
                        </div>
                        <div class="form-group">
                            <a href="#" class="ct-searchForm-close">
                                <i class="fas fa-times"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div id="back-to-top">
        <a href="#"></a>
    </div>
    @include('LandingPage.Layout.script')
</body>

</html>

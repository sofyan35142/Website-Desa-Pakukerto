<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">
<!-- Start Head -->
@include('LandingPage.Layout.head')
<!-- End Head -->

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div id="status"></div>
    </div>
    <!-- Preloader Ends -->

    <!-- header starts -->
    @include('LandingPage.Layout.header')
    <!-- header ends -->


    <!-- content main start -->
    <section class="services-main pb-0">
        <div class="container">
            <div class="service-full wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <div class="service-main d-flex align-items-center">
                            <div class="service-inner">
                                <h4 class="top-title mb-4">POTENSI DESA</h4>
                                <h3 class="mb-3 pb-3">BERAGAM KEKAYAAN DESA PAKUKERTO</h3>
                                <p class="mb-4">
                                    Desa Pakukerto, Kecamatan Sukorejo, Kabupaten Pasuruan, memiliki potensi luar biasa
                                    yang siap dikembangkan. Dari hasil pertanian melimpah hingga kekayaan budaya lokal,
                                    kami berupaya mengelola dan memperkenalkan setiap aset desa untuk kesejahteraan
                                    bersama.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <div class="row service-list-wrap">
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="service-ct-list mb-4 h-90">
                                    <i class="fas fa-leaf"></i>
                                    <h4>PERTANIAN UNGGULAN</h4>
                                    <p class="m-0">Hasil bumi melimpah seperti padi, jagung, dan aneka sayuran segar.
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="service-ct-list mb-4 h-90">
                                    <i class="fas fa-store-alt"></i>
                                    <h4>PRODUK UMKM LOKAL</h4>
                                    <p class="m-0">Berbagai olahan makanan ringan dan kerajinan tangan khas desa.</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="service-ct-list mb-4 h-90">
                                    <i class="fas fa-mountain"></i>
                                    <h4>POTENSI WISATA ALAM</h4>
                                    <p class="m-0">Pemandangan indah dan udara sejuk pegunungan yang menenangkan.</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="service-ct-list h-100">
                                    <i class="fas fa-handshake"></i>
                                    <h4>SUMBER DAYA MANUSIA</h4>
                                    <p class="m-0">Masyarakat yang ramah, kreatif, dan bergotong royong.</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="service-ct-list h-100">
                                    <i class="fas fa-seedling"></i>
                                    <h4>KELESTARIAN LINGKUNGAN</h4>
                                    <p class="m-0">Program menjaga kebersihan dan kelestarian alam desa.</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="service-ct-list h-100">
                                    <i class="fas fa-landmark"></i>
                                    <h4>ADAT DAN BUDAYA</h4>
                                    <p class="m-0">Tradisi dan kesenian lokal yang terus dilestarikan.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End content main -->

    <!-- Counter main -->
    <section class="counter">
        <div class="container">
            <div class="counter-wrap wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                <div class="content d-flex justify-content-between">
                    <div class="value-pin">
                        <span class="countfect value" data-num="30">30</span>
                        <h5>JUMLAH KELOMPOK TANI/USAHA</h5>
                    </div>
                    <div class="value-pin">
                        <span class="countfect value" data-num="75">75</span>
                        <h5>JUMLAH UMKM LOKAL</h5>
                    </div>
                    <div class="value-pin">
                        <span class="countfect value" data-num="250">250</span>
                        <h5>HEKTAR LAHAN PERTANIAN</h5>
                    </div>
                    <div class="value-pin">
                        <span class="countfect value" data-num="5">5</span>
                        <h5>OBJEK WISATA ALAM</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Counter main -->

    <!-- Courses start -->
    <section class="courses p-0">
        <div class="container">
            <div class="section-title borderline">
                <div class="title-top">
                    <h3>PRODUK UNGGULAN & KEGIATAN MASYARAKAT</h3>
                    <p>Jelajahi berbagai karya dan aktivitas terbaik dari warga Desa Pakukerto.</p>
                </div>
            </div>
            <div class="wrap-customize">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 customize-wrap mb-4 wow fadeInUp">
                        <div class="customize-item h-100">
                            <div class="sv-image">
                                <img src="{{ asset('LandingPageOri/assets/images/courses/course-1.jpg') }}"
                                    alt="Keripik Tempe Gurih Jaya" />
                            </div>
                            <div class="customize-ct">
                                <h4>
                                    <a href="{{ url('/umkm/keripik-tempe-gurih-jaya') }}">KERIPIK TEMPE "GURIH JAYA"</a>
                                </h4>
                                <div class="review-ct d-flex justify-content-start">
                                    <p class="m-0">Camilan renyah aneka rasa, favorit keluarga.</p>
                                </div>
                            </div>
                            <div class="customize-bottom">
                                <ul class="d-flex justify-content-between">
                                    <li><i class="fas fa-cookie-bite"></i> Snack Desa</li>
                                    <li><i class="fas fa-tag"></i> Harga Terjangkau</li>
                                    <li><i class="fas fa-map-marker-alt"></i> UMKM Lokal</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 customize-wrap mb-4 wow fadeInUp">
                        <div class="customize-item h-100">
                            <div class="sv-image">
                                <img src="{{ asset('LandingPageOri/assets/images/courses/course-2.jpg') }}"
                                    alt="Kerajinan Anyaman Bambu" />
                            </div>
                            <div class="customize-ct">
                                <h4>
                                    <a href="#">KERAJINAN ANYAMAN BAMBU</a>
                                </h4>
                                <div class="review-ct d-flex justify-content-start">
                                    <p class="m-0">Produk anyaman berkualitas tinggi dari bambu pilihan.</p>
                                </div>
                            </div>
                            <div class="customize-bottom">
                                <ul class="d-flex justify-content-between">
                                    <li><i class="fas fa-brush"></i> Seni Tradisi</li>
                                    <li><i class="fas fa-box-open"></i> Aneka Bentuk</li>
                                    <li><i class="fas fa-star"></i> Kualitas Terbaik</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 customize-wrap mb-4 wow fadeInUp">
                        <div class="customize-item h-100">
                            <div class="sv-image">
                                <img src="{{ asset('LandingPageOri/assets/images/courses/course-3.jpg') }}"
                                    alt="Hasil Panen Sayur Mayur" />
                            </div>
                            <div class="customize-ct">
                                <h4>
                                    <a href="#">HASIL PERTANIAN SEGAR</a>
                                </h4>
                                <div class="review-ct d-flex justify-content-start">
                                    <p class="m-0">Sayur dan buah-buahan segar langsung dari kebun desa.</p>
                                </div>
                            </div>
                            <div class="customize-bottom">
                                <ul class="d-flex justify-content-between">
                                    <li><i class="fas fa-carrot"></i> Panen Rutin</li>
                                    <li><i class="fas fa-tractor"></i> Pertanian Sehat</li>
                                    <li><i class="fas fa-leaf"></i> Organik</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 customize-wrap wow fadeInUp">
                        <div class="customize-item h-100">
                            <div class="sv-image">
                                <img src="{{ asset('LandingPageOri/assets/images/courses/course-4.jpg') }}"
                                    alt="Kopi Khas Sukorejo" />
                            </div>
                            <div class="customize-ct">
                                <h4>
                                    <a href="#">KOPI KHAS SUKOREJO</a>
                                </h4>
                                <div class="review-ct d-flex justify-content-start">
                                    <p class="m-0">Biji kopi pilihan dengan cita rasa istimewa daerah Sukorejo.</p>
                                </div>
                            </div>
                            <div class="customize-bottom">
                                <ul class="d-flex justify-content-between">
                                    <li><i class="fas fa-coffee"></i> Aroma Kuat</li>
                                    <li><i class="fas fa-mug-hot"></i> Cocok untuk Santai</li>
                                    <li><i class="fas fa-certificate"></i> Premium</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 customize-wrap wow fadeInUp">
                        <div class="customize-item h-100">
                            <div class="sv-image">
                                <img src="{{ asset('LandingPageOri/assets/images/courses/course-5.jpg') }}"
                                    alt="Olahan Singkong Lokal" />
                            </div>
                            <div class="customize-ct">
                                <h4>
                                    <a href="#">OLAHAN SINGKONG LOKAL</a>
                                </h4>
                                <div class="review-ct d-flex justify-content-start">
                                    <p class="m-0">Berbagai inovasi camilan dari singkong khas Desa Pakukerto.</p>
                                </div>
                            </div>
                            <div class="customize-bottom">
                                <ul class="d-flex justify-content-between">
                                    <li><i class="fas fa-utensils"></i> Lezat & Bergizi</li>
                                    <li><i class="fas fa-plus-circle"></i> Varian Baru</li>
                                    <li><i class="fas fa-heart"></i> Buatan Ibu Rumah Tangga</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 customize-wrap wow fadeInUp">
                        <div class="customize-item h-100">
                            <div class="sv-image">
                                <img src="{{ asset('LandingPageOri/assets/images/courses/course-6.jpg') }}"
                                    alt="Pemandangan Sungai Desa" />
                            </div>
                            <div class="customize-ct">
                                <h4>
                                    <a href="#">JELAJAHI SUNGAI & AIR TERJUN</a>
                                </h4>
                                <div class="review-ct d-flex justify-content-start">
                                    <p class="m-0">Petualangan menyusuri sungai dan menemukan air terjun
                                        tersembunyi.</p>
                                </div>
                            </div>
                            <div class="customize-bottom">
                                <ul class="d-flex justify-content-between">
                                    <li><i class="fas fa-water"></i> Aliran Jernih</li>
                                    <li><i class="fas fa-tree"></i> Asri</li>
                                    <li><i class="fas fa-camera"></i> Spot Foto</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Courses ends -->

    <!-- Testimonial feedback -->

    <!-- Testimonial ends -->

    <!-- Packages news start -->
    <section class="packages">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="d-flex align-items-center h-100">
                        <div class="service-inner">
                            <span class="top-title cl-blue">INOVASI DAN PENGEMBANGAN DESA</span>
                            <h3 class="mb-3 pb-3">PILAR UTAMA MENUJU DESA PAKUKERTO YANG MANDIRI DAN MAJU.</h3>
                            <p class="mb-4">
                                Desa Pakukerto berkomitmen untuk terus berinovasi dan mengembangkan berbagai sektor demi
                                kesejahteraan masyarakat dan pelestarian lingkungan. Kami fokus pada inisiatif strategis
                                yang membentuk masa depan desa.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="pkg-container bg-white">
                        <div class="pg-title">
                            <i class="fas fa-leaf"></i>
                            <h3 class="cl-orange">PELESTARIAN LINGKUNGAN</h3>
                            <p>Inisiatif keberlanjutan untuk menjaga dan mengembangkan kekayaan alam desa.</p>
                        </div>
                        <div class="pg-main">
                            <p class="cl-orange"><i class="fas fa-seedling"></i><span>Fokus Pada Lingkunga Asri</span></p>
                            <ul>
                                <li><i class="fas fa-check"></i> Pengelolaan Sampah Mandiri</li>
                                <li><i class="fas fa-check"></i> Reboisasi Kawasan Hutan Desa</li>
                                <li><i class="fas fa-check"></i> Edukasi Konservasi Sumber Daya Air</li>
                                <li><i class="fas fa-check"></i> Pengembangan Pertanian Organik</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="pkg-container">
                        <div class="pg-title">
                            <i class="fas fa-lightbulb"></i>
                            <h3 class="cl-blue">INKUBATOR KREATIF MASYARAKAT</h3>
                            <p>Wadah pengembangan ide dan keterampilan untuk menghasilkan produk inovatif.</p>
                        </div>
                        <div class="pg-main">
                            <p class="cl-blue"><i class="fas fa-users-cog"></i><span> Untuk Semua Kalangan</span></p>
                            <ul>
                                <li><i class="fas fa-check"></i> Workshop Kerajinan Tangan Lokal</li>
                                <li><i class="fas fa-check"></i> Pelatihan Desain Produk UMKM</li>
                                <li><i class="fas fa-check"></i> Bimbingan Pemanfaatan Teknologi</li>
                                <li><i class="fas fa-check"></i> Ruang Kolaborasi dan Diskusi</li>
                                <li><i class="fas fa-check"></i> Promosi Produk Inovatif Desa</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Packages news end -->

    <!-- News/Events news start -->
    <section class="courses news-events pt-0">
        <div class="container">
            <div class="section-title sc-center justify-content-center borderline text-center">
                <div class="title-top">
                    <div class="title-quote">
                        <span>Capaian Kami</span>
                    </div>
                    <h3>KISAH INSPIRATIF & <span class="cl-blue">PRESTASI DESA</span> PAKUKERTO</h3>
                </div>
            </div>
            <div class="wrap-customize">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 customize-wrap wow fadeInUp">
                        <div class="customize-item h-100">
                            <div class="sv-image">
                                <img src="{{ asset('LandingPageOri/assets/images/courses/event-1.jpg') }}"
                                    alt="Kelompok Tani Juara Nasional" />
                                <span>Sejak 2005</span>
                            </div>
                            <div class="customize-ct">
                                <h4>
                                    <a href="event-detail.html">KELOMPOK TANI SUMBERSARI JUARA NASIONAL</a>
                                </h4>
                                <div class="review-ct d-flex justify-content-start">
                                    <p class="mb-0">Mengukir sejarah sebagai juara nasional agribisnis padi dari hulu
                                        ke hilir.</p>
                                </div>
                            </div>
                            <div class="customize-bottom">
                                <ul class="d-flex justify-content-start">
                                    <li class="mr-3"><i class="fas fa-award"></i> Penghargaan Presiden</li>
                                    <li><i class="fas fa-seedling"></i> Sektor Pertanian</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 customize-wrap wow fadeInUp">
                        <div class="customize-item h-100">
                            <div class="sv-image">
                                <img src="{{ asset('LandingPageOri/assets/images/courses/event-2.jpg') }}"
                                    alt="UMKM Tas Kulit Desa Pakukerto" />
                                <span>Berdiri 1982</span>
                            </div>
                            <div class="customize-ct">
                                <h4>
                                    <a href="event-detail.html">UMKM TAS KULIT: KUALITAS DIKENAL NASIONAL</a>
                                </h4>
                                <div class="review-ct d-flex justify-content-start">
                                    <p class="mb-0">Produk tas kulit lokal dipercaya toko emas seluruh Indonesia,
                                        buatan tangan terampil warga.</p>
                                </div>
                            </div>
                            <div class="customize-bottom">
                                <ul class="d-flex justify-content-start">
                                    <li class="mr-3"><i class="fas fa-hand-holding-usd"></i> Ekonomi Kreatif</li>
                                    <li><i class="fas fa-map-marker-alt"></i> Pusat Produksi</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 customize-wrap wow fadeInUp">
                        <div class="customize-item h-100">
                            <div class="sv-image">
                                <img src="{{ asset('LandingPageOri/assets/images/courses/event-3.jpg') }}"
                                    alt="Inisiatif Bank Sampah Desa" />
                                <span>Dimulai 2023</span>
                            </div>
                            <div class="customize-ct">
                                <h4>
                                    <a href="event-detail.html">PROGRAM BANK SAMPAH BERKELANJUTAN</a>
                                </h4>
                                <div class="review-ct d-flex justify-content-start">
                                    <p class="mb-0">Gerakan sadar lingkungan warga mengubah sampah menjadi berkah,
                                        mengurangi limbah desa.</p>
                                </div>
                            </div>
                            <div class="customize-bottom">
                                <ul class="d-flex justify-content-start">
                                    <li class="mr-3"><i class="fas fa-leaf"></i> Lingkungan Bersih</li>
                                    <li><i class="fas fa-recycle"></i> Pengelolaan Mandiri</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- News/Events news start -->

    <!--  Blog to action start -->
    {{-- <section class="blog-article">
        <div class="container">
            <div class="section-title sc-center justify-content-center text-center borderline wow fadeInLeft">
                <div class="title-top">
                    <div class="title-quote">
                        <span>Our Blogs</span>
                    </div>
                    <h3>LATEST <span class="cl-blue">BLOG</span> & <span class="cl-blue">EVENTS</span></h3>
                </div>
            </div>
            <div class="blog-wrap">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInRight">
                        <div class="article-list">
                            <div class="at-thumbnail">
                                <a href="blog-detail.html">
                                    <img src="{{ asset('LandingPageOri/assets/images/blog/blog-1.jpg') }}"
                                        alt="" />
                                </a>
                                <span class="blog-tag"> Education </span>
                            </div>
                            <div class="article-content">
                                <img src="{{ asset('LandingPageOri/assets/images/team/user-4.jpg') }}" alt=""
                                    class="article-avatar" />
                                <div class="artl-detail text-center">
                                    <a href="blog-detail.html">
                                        <h4>NEW CHICAGO SCHOOL BUDGET RELIES ON PENSION</h4>
                                    </a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                                </div>
                                <div class="artl-bottom">
                                    <ul class="d-flex justify-content-center">
                                        <li>June 12, 2021</li>
                                        <li><a href="#">2 Comments</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInRight">
                        <div class="article-list">
                            <div class="at-thumbnail">
                                <a href="blog-detail.html">
                                    <img src="{{ asset('LandingPageOri/assets/images/blog/blog-2.jpg') }}"
                                        alt="" />
                                </a>
                                <span class="blog-tag"> Education </span>
                            </div>
                            <div class="article-content">
                                <img src="{{ asset('LandingPageOri/assets/images/team/user-5.jpg') }}" alt=""
                                    class="article-avatar" />
                                <div class="artl-detail text-center">
                                    <a href="blog-detail.html">
                                        <h4>NEW CHICAGO SCHOOL BUDGET RELIES ON PENSION</h4>
                                    </a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                                </div>
                                <div class="artl-bottom">
                                    <ul class="d-flex justify-content-center">
                                        <li>June 12, 2021</li>
                                        <li><a href="#">2 Comments</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInRight">
                        <div class="article-list">
                            <div class="at-thumbnail">
                                <a href="blog-detail.html">
                                    <img src="{{ asset('LandingPageOri/assets/images/blog/blog-3.jpg') }}"
                                        alt="" />
                                </a>
                                <span class="blog-tag"> Education </span>
                            </div>
                            <div class="article-content">
                                <img src="{{ asset('LandingPageOri/assets/images/team/user-6.jpg') }}" alt=""
                                    class="article-avatar" />
                                <div class="artl-detail text-center">
                                    <a href="blog-detail.html">
                                        <h4>NEW CHICAGO SCHOOL BUDGET RELIES ON PENSION</h4>
                                    </a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                                </div>
                                <div class="artl-bottom">
                                    <ul class="d-flex justify-content-center">
                                        <li>June 12, 2021</li>
                                        <li><a href="#">2 Comments</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--  Blog to action end -->

    <!-- Footer starts -->
    @include('LandingPage.Layout.footer')
    <!-- Footer ends -->
    <!-- Back to top start -->
    <div id="back-to-top">
        <a href="#"></a>
    </div>
    <!-- Back to top ends -->
    <!-- *Scripts* -->
    @include('LandingPage.Layout.script')
</body>

</html>

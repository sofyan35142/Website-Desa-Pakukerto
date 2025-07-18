<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

@include('LandingPage.Layout.head')

<body>
    <div id="preloader">
        <div id="status"></div>
    </div>
    @include('LandingPage.Layout.header')
    <section class="blog-top-title">
        <div class="bg_bar_title">
            <h1 class="cl-white">UMKM Keripik Tempe "Gurih Jaya"</h1>
            <p class="cl-white">Cita Rasa Tempe Lokal Sejati dari Desa Pakukerto</p>
        </div>
        <div class="bg__bar_image">
            {{-- Ganti gambar ini dengan gambar banner UMKM jika ada, atau gambar keripik tempe --}}
            <img src="{{ asset('LandingPageOri/assets/images/inner/modern-education-business-startup-friendship-an-2021-07-27-05-12-15-utc-1.jpg') }}"
                alt="Banner UMKM Keripik Tempe Gurih Jaya" />
        </div>
    </section>
    <section class="blog__details p-0">
        <div class="container">
            <div class="bg__author d-flex align-items-center">
                {{-- Gambar pemilik/logo UMKM --}}
                <img src="{{ asset('LandingPageOri/assets/images/team/user-2.jpg') }}" alt="Logo Gurih Jaya" />
                <div class="bg__author_name">
                    <h4>Gurih Jaya</h4>
                    <span>Pusat Keripik Tempe Aneka Rasa Khas Sukorejo</span>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="bg__contents">
                        <div class="author__datetime">
                            <ul>
                                <li>
                                    <a href="#"><i class="fas fa-store-alt"></i> UMKM Unggulan Desa Pakukerto</a>
                                </li>
                                <li><i class="far fa-calendar"></i> Berdiri Sejak Mei 2021</li> {{-- Tanggal disesuaikan kembali ke contoh sebelumnya --}}
                                <li><i class="fas fa-map-marker-alt"></i> Desa Pakukerto, Sukorejo, Pasuruan</li>
                                {{-- <li>
                                    <a href="#kontak"><i class="fas fa-phone-alt"></i> Kontak Kami</a>
                                </li> --}}
                            </ul>
                        </div>
                        <div class="bg__only_detail">
                            <h3>Tentang Keripik Tempe "Gurih Jaya"</h3>
                            <p>
                                Keripik Tempe "Gurih Jaya" adalah UMKM kebanggaan Desa Pakukerto, Kecamatan Sukorejo, Kabupaten Pasuruan, yang berdedikasi menghadirkan camilan keripik tempe berkualitas tinggi dengan cita rasa otentik dan inovatif. Berkomitmen mengolah tempe pilihan menjadi keripik renyah dan lezat yang cocok untuk segala suasana, setiap keping keripik kami dibuat dengan cinta, menggunakan bahan-bahan segar terbaik, dan diproses secara higienis untuk menjamin kualitas dan kepuasan pelanggan.
                            </p>
                            <p>
                                Kami percaya bahwa tempe, sebagai warisan kuliner Indonesia, memiliki potensi tak terbatas. Melalui "Gurih Jaya", kami ingin mengangkat citra keripik tempe menjadi camilan modern yang digemari semua kalangan, sembari tetap mempertahankan nilai gizi dan keaslian rasanya. Kami bangga dapat menjadi bagian dari kekayaan kuliner Desa Pakukerto.
                            </p>

                            {{-- Akordeon untuk Produk Gurih Jaya (sekarang sebagai "Varian & Daftar Produk") --}}
                            <div class="accordion md-accordion mt-3" id="accordionProdukGurihJaya" role="tablist"
                                aria-multiselectable="true">
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingProdukGurihJaya">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordionProdukGurihJaya" href="#collapseProdukGurihJaya"
                                            aria-expanded="false" aria-controls="collapseProdukGurihJaya">
                                            <h5 class="mb-0">VARIAN & DAFTAR PRODUK GURIH JAYA <i class="fas fa-plus"></i></h5>
                                        </a>
                                    </div>

                                    <div id="collapseProdukGurihJaya" class="collapse" role="tabpanel"
                                        aria-labelledby="headingProdukGurihJaya" data-parent="#accordionProdukGurihJaya">
                                        <div class="card-body">
                                            <p>Temukan beragam pilihan rasa keripik tempe dari Gurih Jaya:</p>
                                            <ul class="list-unstyled">
                                                <li>Original: Rasa klasik gurih tempe yang renyah, pas untuk penikmat tempe sejati.</li>
                                                <li>Pedas Nampol: Sensasi pedas yang menggigit, cocok untuk pecinta tantangan rasa pedas.</li>
                                                <li>Daun Jeruk: Aroma segar daun jeruk yang khas, menambah kenikmatan dan kesegaran di setiap gigitan.</li>
                                                <li>Balado: Perpaduan rasa manis, pedas, dan gurih khas bumbu balado yang meresap sempurna.</li>
                                                <li>Rumput Laut: Inovasi rasa unik dengan sentuhan gurih dan aroma laut yang istimewa.</li>
                                                <li>Keju Parmesan: Rasa keju creamy dan gurih yang disukai anak-anak hingga dewasa, cocok sebagai camilan keluarga.</li>
                                                <li>Barbeque: Sensasi gurih dan aroma panggang yang khas, cocok untuk suasana santai.</li>
                                                <li>Jagung Bakar: Perpaduan rasa manis dan gurih jagung bakar yang unik dan menggugah selera.</li>
                                            </ul>
                                            <p class="mt-3">"Gurih Jaya" sangat cocok untuk teman ngopi, teman belajar, oleh-oleh khas Sukorejo, atau camilan kapan saja Anda butuhkan. Kami juga menerima pesanan dalam jumlah besar untuk acara, reseller, atau kemitraan.</p>
                                            <p>Untuk melihat foto produk dan detail harga, silakan hubungi kami atau kunjungi toko online kami.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Akordeon untuk Keunggulan Produk (diperbaiki isinya) --}}
                            <div class="accordion md-accordion mt-3" id="accordionEx1" role="tablist"
                                aria-multiselectable="true">
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingOne1">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapseOne1"
                                            aria-expanded="false" aria-controls="collapseOne1">
                                            <h5 class="mb-0">KEUNGGULAN PRODUK GURIH JAYA <i class="fas fa-plus"></i></h5>
                                        </a>
                                    </div>

                                    <div id="collapseOne1" class="collapse show" role="tabpanel"
                                        aria-labelledby="headingOne1" data-parent="#accordionEx1">
                                        <div class="card-body">
                                            <ol>
                                                <li>Kualitas Terjamin: Diproduksi dari tempe kedelai pilihan dan bahan baku berkualitas tinggi.</li>
                                                <li>Renyah Sempurna: Tekstur yang kriuk dan tidak keras, memberikan pengalaman mengunyah yang memuaskan.</li>
                                                <li>Tanpa Pengawet: Aman dikonsumsi karena diolah secara alami dan higienis.</li>
                                                <li>Kemasan Premium: Menggunakan kemasan ziplock atau standing pouch yang menarik dan menjaga kerenyahan serta kualitas produk lebih lama.</li>
                                                <li>Varian Rasa Inovatif: Pilihan rasa yang beragam dan terus berinovasi untuk memenuhi selera pasar.</li>
                                                <li>Dukungan UMKM Lokal: Dengan membeli produk Gurih Jaya, Anda turut mendukung produsen tempe lokal dan UMKM di Desa Pakukerto.</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <blockquote>
                                <span>
                                    "Kami bertekad untuk menjadi pelopor keripik tempe dengan inovasi rasa dan kualitas terbaik, membawa kebanggaan kuliner lokal Desa Pakukerto ke kancah nasional."
                                </span>
                                <p>Tim Manajemen Gurih Jaya</p>
                                <a href="https://wa.me/6281234567890?text=Halo%2C%20saya%20tertarik%20dengan%20Keripik%20Tempe%20Gurih%20Jaya." target="_blank" class="btn btn-curve"><i class="fab fa-whatsapp"></i> Pesan Sekarang</a>
                            </blockquote>
                        </div>

                        <div class="prev-next-page d-flex justify-content-between align-items-center mt-4">
                            <div class="prev-navlink-page">
                                <a href="{{ url('/') }}">
                                    <i class="fas fa-angle-double-left"></i>
                                    <div class="prevnext__nav">
                                        <p>Kembali ke Beranda</p>
                                        <h5>Jelajahi UMKM Lainnya</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="next-navlink-page">
                                <a href="{{ url('/galeri-umkm') }}">
                                    <i class="fas fa-angle-double-right"></i>
                                    <div class="prevnext__nav">
                                        <p>Lihat Lainnya</p>
                                        <h5>Galeri UMKM Desa Pakukerto</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 aside-sidebar customize-wrap wow fadeInUp">
                    <div class="sidebar-course mb-4">
                        <div class="sidebar-title">
                            <h4>UMKM LAINNYA DI DESA PAKUKERTO</h4>
                        </div>
                        {{-- Placeholder untuk UMKM lain yang relevan (gunakan gambar yang sesuai) --}}
                        <div class="customize-item d-flex mb-3">
                            <div class="sv-image pr-3">
                                <img src="{{ asset('LandingPageOri/assets/images/courses/course-1.jpg') }}" alt="UMKM Batik" />
                            </div>
                            <div class="customize-ct m-0">
                                <h6 class="mb-0">
                                    <a href="#">UMKM Batik Tulis "Karya Lestari"</a>
                                </h6>
                                <span class="cust-meta"> Produk Kerajinan</span>
                            </div>
                        </div>
                        <div class="customize-item d-flex mb-3">
                            <div class="sv-image pr-3">
                                <img src="{{ asset('LandingPageOri/assets/images/courses/course-2.jpg') }}" alt="UMKM Kopi" />
                            </div>
                            <div class="customize-ct m-0">
                                <h6 class="mb-0">
                                    <a href="#">Kopi Bubuk "Khas Sukorejo"</a>
                                </h6>
                                <span class="cust-meta"> Produk Minuman</span>
                            </div>
                        </div>
                        <div class="customize-item d-flex mb-3">
                            <div class="sv-image pr-3">
                                <img src="{{ asset('LandingPageOri/assets/images/courses/course-3.jpg') }}" alt="UMKM Anyaman" />
                            </div>
                            <div class="customize-ct m-0">
                                <h6 class="mb-0">
                                    <a href="#">Kerajinan Anyaman "Desa Makmur"</a>
                                <h6>
                                <span class="cust-meta"> Produk Kerajinan</span>
                            </div>
                        </div>
                        <div class="customize-item d-flex">
                            <div class="sv-image pr-3">
                                <img src="{{ asset('LandingPageOri/assets/images/courses/course-4.jpg') }}" alt="UMKM Makanan Ringan" />
                            </div>
                            <div class="customize-ct m-0">
                                <h6 class="mb-0">
                                    <a href="#">Aneka Olahan Singkong "Bu RT"</a>
                                </h6>
                                <span class="cust-meta"> Produk Makanan</span>
                            </div>
                        </div>
                        <div class="text-center mt-4">
                            <a href="{{ url('/daftar-umkm') }}" class="btn btn-primary btn-sm">Lihat Semua UMKM</a>
                        </div>
                    </div>

                    <div class="sidebar-links">
                        <div class="sidebar-title">
                            <h4>IKUTI KAMI</h4>
                        </div>
                        <div class="side-contact-wp text-center mb-4">
                            <ul class="sidebar-social mb-3">
                                <li>
                                    <a href="https://www.facebook.com/gurihjaya" target="_blank" class="bg-fb"><i class="fab fa-facebook-f"></i> Facebook</a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/gurihjaya" target="_blank" class="bg-instagram"><i class="fab fa-instagram"></i> Instagram</a>
                                </li>
                                <li>
                                    <a href="https://wa.me/6281234567890?text=Halo%2C%20saya%20tertarik%20dengan%20Keripik%20Tempe%20Gurih%20Jaya." target="_blank" class="bg-whatsapp"><i class="fab fa-whatsapp"></i> WhatsApp</a>
                                </li>
                                <li>
                                    <a href="#" class="bg-linkedin"><i class="fab fa-linkedin-in"></i> LinkedIn</a>
                                </li>
                                <li>
                                    <a href="#" class="bg-dribble"><i class="fab fa-tiktok"></i> TikTok</a>
                                </li>
                                <li>
                                    <a href="https://www.youtube.com/@NamaChannelGurihJaya" target="_blank" class="bg-youtube"><i class="fab fa-youtube"></i> YouTube</a>
                                </li>
                            </ul>
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
                            <input id="cf-search-form" type="text" placeholder="Cari di website desa..." required
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

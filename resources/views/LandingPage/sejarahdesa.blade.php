<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

@include('LandingPage.Layout.head')

<body>
    <div id="preloader">
        <div id="status"></div>
    </div>
    @include('LandingPage.Layout.header')
    <section class="course-detail shape_big2">
        <div class="container">
            <div class="row pb-5">
                <div class="col-lg-6">
                    <div class="cs-detail-im">
                        <img src="{{ asset('LandingPageOri/assets/images/banner/education-PHW33SU.jpg') }}"
                            alt="Pemandangan Desa Pakukerto" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="cs-detail-info d-flex flex-column justify-content-center align-items-start h-100">
                        <div class="review-ct mb-3 d-flex justify-content-start">
                            {{-- Anda bisa mengganti ini dengan info relevan, misal jumlah pembaca atau tanggal update terakhir --}}
                            <a href="#">Diperbarui: 17 Juli 2025</a>
                            {{-- Bintang ini bisa dihilangkan atau diganti ikon lain jika tidak relevan --}}
                            <ul class="ml-2">
                                <li><i class="fas fa-eye"></i></li> {{-- Ikon mata untuk 'dilihat' --}}
                                <li><i class="fas fa-heart"></i></li> {{-- Ikon hati untuk 'disukai' --}}
                                <li><i class="fas fa-share-alt"></i></li> {{-- Ikon berbagi --}}
                                {{-- <li><i class="fas fa-star"></i></li> --}}
                                {{-- <li><i class="fas fa-star-half-alt"></i></li> --}}
                            </ul>
                        </div>
                        <h3>Sejarah Desa Pakukerto</h3>
                        <div class="customize-bottom">
                            <ul class="d-flex justify-content-start">
                                <li class="mr-3"><i class="far fa-user"></i> Tim Redaksi Desa</li>
                                <li><i class="far fa-calendar-alt"></i> 06 Juni 2021 (Pertama Diterbitkan)</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="course-content">
                        <div class="cs-title">
                            <h3>Selayang Pandang Sejarah Desa</h3>
                        </div>
                        <div class="cs-contents">
                            <p>
                                Desa Pakukerto, sebuah nama yang tak terpisahkan dari lembaran sejarah Kabupaten [Nama
                                Kabupaten Anda], memiliki akar yang kuat dalam budaya dan perjuangan masa lalu. Konon,
                                nama "Pakukerto" sendiri berasal dari gabungan kata "Paku" dan "Kerto". Kata "Paku"
                                diyakini merujuk pada [jelaskan arti atau filosofi "Paku" dalam konteks desa, contoh:
                                tanaman paku yang tumbuh subur di awal pembentukan desa, atau simbol kekuatan dan
                                kemapanan]. Sementara itu, "Kerto" berasal dari kata "Kertha" yang dalam bahasa Jawa
                                Kuno berarti kemakmuran, ketenteraman, atau keberkahan.
                            </p>
                            <p>
                                Dengan demikian, Pakukerto dapat diartikan sebagai "desa yang makmur dan tenteram" atau
                                "tempat yang diberkahi dengan kemakmuran." Sejarah mencatat bahwa sejak [perkiraan tahun
                                berdiri atau awal pemukiman jika ada, contoh: abad ke-18 atau era Kerajaan Majapahit],
                                para leluhur Desa Pakukerto telah membangun fondasi kehidupan yang harmonis, mengolah
                                tanah subur, dan melestarikan nilai-nilai gotong royong yang masih kami pegang teguh
                                hingga kini.
                            </p>
                            <blockquote>
                                <span>
                                    "Sebuah desa bukan hanya tentang tanah, tetapi tentang kisah dan semangat yang terus
                                    hidup di setiap generasi."
                                </span>
                                <p>Petuah Leluhur Pakukerto</p>
                                {{-- Jika ada akun media sosial resmi desa, bisa tautkan di sini --}}
                                <button class="btn btn-curve"><i class="fab fa-facebook"></i> Bagikan</button>
                            </blockquote>
                            <div class="cs-title">
                                <h3>Mozaik Sejarah Dusun-Dusun Pakukerto</h3>
                            </div>

                            <div class="accordion md-accordion" id="accordionEx1" role="tablist"
                                aria-multiselectable="true">
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingDusun1">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1"
                                            href="#collapseDusun1" aria-expanded="false" aria-controls="collapseDusun1">
                                            <h5 class="mb-0">Dusun [Nama Dusun 1]: Jejak Awal dan Perkembangan <i
                                                    class="fas fa-plus"></i></h5>
                                        </a>
                                    </div>
                                    <div id="collapseDusun1" class="collapse" role="tabpanel"
                                        aria-labelledby="headingDusun1" data-parent="#accordionEx1">
                                        <div class="card-body">
                                            Dusun [Nama Dusun 1] merupakan salah satu dusun tertua di Pakukerto, yang
                                            konon didirikan oleh [sebutkan tokoh/kelompok awal jika ada, misal: Mbah
                                            Kerto atau rombongan pendatang pertama]. Awalnya, dusun ini dikenal sebagai
                                            [sebutkan nama lama jika ada, atau ciri khas geografis awal, misal: daerah
                                            persawahan yang subur]. Perkembangan dusun ini tak lepas dari [jelaskan
                                            faktor pendorong, misal: pembangunan irigasi, atau keberadaan pasar
                                            tradisional]. Hingga kini, [sebutkan satu ciri khas/tradisi yang masih kuat
                                            di dusun ini].
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingDusun2">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1"
                                            href="#collapseDusun2" aria-expanded="false" aria-controls="collapseDusun2">
                                            <h5 class="mb-0">Dusun [Nama Dusun 2]: Kisah dan Potensi <i
                                                    class="fas fa-plus"></i>
                                            </h5>
                                        </a>
                                    </div>
                                    <div id="collapseDusun2" class="collapse" role="tabpanel"
                                        aria-labelledby="headingDusun2" data-parent="#accordionEx1">
                                        <div class="card-body">
                                            Dusun [Nama Dusun 2] memiliki sejarah yang unik, sering dikaitkan dengan
                                            [sebutkan legenda/peristiwa penting, misal: keberadaan mata air keramat,
                                            atau tempat persinggahan para pejuang]. Masyarakat di dusun ini dikenal
                                            dengan [sebutkan ciri khas masyarakat, misal: kerajinan tangan, atau
                                            keahlian bertani buah]. Perkembangan dusun ini banyak dipengaruhi oleh
                                            [sebutkan faktor, misal: pembangunan jalan, atau inisiatif komunitas].
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingDusun3">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1"
                                            href="#collapseDusun3" aria-expanded="false" aria-controls="collapseDusun3">
                                            <h5 class="mb-0">Dusun [Nama Dusun 3]: Warisan dan Inovasi <i
                                                    class="fas fa-plus"></i>
                                            </h5>
                                        </a>
                                    </div>
                                    <div id="collapseDusun3" class="collapse" role="tabpanel"
                                        aria-labelledby="headingDusun3" data-parent="#accordionEx1">
                                        <div class="card-body">
                                            Sejarah Dusun [Nama Dusun 3] erat kaitannya dengan [sebutkan aspek sejarah,
                                            misal: pusat keagamaan, atau daerah pertahanan]. Dusun ini juga menjadi
                                            saksi [sebutkan peristiwa penting, misal: pembangunan sekolah pertama, atau
                                            masuknya teknologi baru]. Meskipun menjaga warisan leluhur, dusun ini juga
                                            aktif dalam [sebutkan inovasi/perkembangan modern, misal: pengembangan
                                            pariwisata, atau pertanian modern].
                                        </div>
                                    </div>
                                </div>
                                {{-- Tambahkan Accordion Card lainnya jika ada lebih banyak dusun --}}
                                {{-- Contoh:
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingDusun4">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1"
                                            href="#collapseDusun4" aria-expanded="false" aria-controls="collapseDusun4">
                                            <h5 class="mb-0">Dusun [Nama Dusun 4]: [Judul Singkat] <i class="fas fa-plus"></i></h5>
                                        </a>
                                    </div>
                                    <div id="collapseDusun4" class="collapse" role="tabpanel"
                                        aria-labelledby="headingDusun4" data-parent="#accordionEx1">
                                        <div class="card-body">
                                            [Isi sejarah Dusun 4]
                                        </div>
                                    </div>
                                </div>
                                --}}

                            </div>
                            <div class="prev-next-page d-flex justify-content-between align-items-center mt-5">
                                <div class="prev-navlink-page">
                                    <a href="#">
                                        <i class="fas fa-angle-double-left"></i>
                                        <div class="prevnext__nav">
                                            <p>Kembali ke</p>
                                            <h5>Profil Desa</h5>
                                        </div>
                                    </a>
                                </div>
                                <div class="next-navlink-page">
                                    <a href="#">
                                        <i class="fas fa-angle-double-right"></i>
                                        <div class="prevnext__nav">
                                            <p>Selanjutnya</p>
                                            <h5>Visi & Misi</h5>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="course-content-side text-center">
                        <img src="{{ asset('LandingPageOri/assets/images/banner/education-2021-04-04-14-25-07-utc.jpg') }}"
                            alt="Pemandangan Desa Pakukerto" />
                        <div class="img_sidebar_ct bg-darkblue p-3">
                            <h5 class="cl-white mb-0">Fakta Singkat Sejarah Desa Pakukerto</h5>
                        </div>
                        <ul class="d-flex flex-column">
                            <li><i class="far fa-building"></i> Jumlah Dusun : <span>[Jumlah Dusun di Pakukerto]</span>
                            </li>
                            <li><i class="fas fa-book"></i> Sumber Sejarah : <span>[Cerita Rakyat / Catatan Lama /
                                    Sesepuh]</span></li>
                            <li><i class="fas fa-user-friends"></i> Tokoh Lokal : <span>[Nama Tokoh Penting dari
                                    Dusun-Dusun, jika ada]</span></li>
                            <li><i class="far fa-clock"></i> Ciri Khas Sejarah : <span>[Gotong Royong, Pertanian,
                                    Kesenian]</span></li>
                            <li><i class="fas fa-globe-europe"></i> Warisan Utama : <span>[Tradisi Adat / Bangunan
                                    Bersejarah]</span></li>
                        </ul>
                        <a href="galeri-sejarah.html" class="btn">Lihat Galeri Sejarah</a>
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

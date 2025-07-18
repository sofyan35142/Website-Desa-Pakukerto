<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

@include('LandingPage.Layout.head')

<body>
    <div id="preloader">
        <div id="status"></div>
    </div>
    @include('LandingPage.Layout.header')
    <section class="course-detail shape_big2"> {{-- Menggunakan class yang sama, namun kontennya berbeda --}}
        <div class="container">
            <div class="row pb-5">
                <div class="col-lg-6">
                    <div class="cs-detail-im">
                        {{-- Ganti gambar ini dengan gambar yang mencerminkan kemajuan, kebersamaan, atau masa depan desa --}}
                        <img src="{{ asset('LandingPageOri/assets/images/inner/visimisi.png') }}"
                            alt="Masyarakat Desa Pakukerto Bergotong Royong" height="380" width="570"/>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="cs-detail-info d-flex flex-column justify-content-center align-items-start h-100">
                        {{-- <div class="review-ct mb-3 d-flex justify-content-start">
                            <a href="#">Ditetapkan: 15 Januari 2024</a>
                            <ul class="ml-2">
                                <li><i class="fas fa-file-alt"></i></li>
                                <li><i class="fas fa-check-circle"></i></li>
                                <li><i class="fas fa-share-alt"></i></li>
                            </ul>
                        </div> --}}
                        <h3>Visi & Misi Desa Pakukerto</h3>
                        <div class="customize-bottom">
                            <ul class="d-flex justify-content-start">
                                <li class="mr-3"><i class="far fa-building"></i> Pemerintahan Desa</li>
                                <li><i class="far fa-calendar-alt"></i> Periode [Tahun Awal] - [Tahun Akhir]</li> {{-- Misal: 2024-2029 --}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="course-content">
                        <div class="cs-title">
                            <h3>Visi Desa Pakukerto</h3>
                        </div>
                        <div class="cs-contents">
                            <p>
                                "Terwujudnya Desa Pakukerto yang Mandiri, Sejahtera, Berbudaya, dan Berkelanjutan Berbasis Potensi Lokal."
                            </p>
                            <p>
                                Visi ini adalah cita-cita luhur kami, gambaran masa depan yang ingin kami raih bersama seluruh elemen masyarakat Desa Pakukerto. Ini mencerminkan komitmen kami untuk membangun desa yang mampu mengelola sumber daya dan potensi secara optimal, menciptakan kemakmuran yang merata, melestarikan nilai-nilai budaya luhur, serta menjamin keberlangsungan lingkungan untuk generasi mendatang.
                            </p>

                            <div class="cs-title mt-5"> {{-- Tambahkan margin-top agar tidak terlalu rapat --}}
                                <h3>Misi Desa Pakukerto</h3>
                            </div>

                            <div class="description-content">
                                <p>Untuk mencapai visi tersebut, Desa Pakukerto akan melaksanakan misi-misi berikut:</p>
                                <ul class="list-unstyled why-choose-item"> {{-- Menggunakan list untuk poin misi --}}
                                    <li>
                                        <div class="icon_box">
                                            <i class="fas fa-seedling"></i> {{-- Ikon untuk pertanian/ekonomi --}}
                                        </div>
                                        <div class="content_box">
                                            <h4>Meningkatkan Perekonomian dan Kesejahteraan Masyarakat</h4>
                                            <p>Mengembangkan potensi pertanian organik, ekowisata berbasis alam dan budaya, serta mendorong pertumbuhan UMKM kerajinan bambu lokal melalui pelatihan, pendampingan, dan akses pasar.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon_box">
                                            <i class="fas fa-hand-holding-heart"></i> {{-- Ikon untuk budaya/sosial --}}
                                        </div>
                                        <div class="content_box">
                                            <h4>Melestarikan Budaya dan Memperkuat Nilai Sosial</h4>
                                            <p>Menjaga dan mengembangkan seni, budaya, dan adat istiadat sebagai identitas Desa Pakukerto, serta memperkuat nilai-nilai gotong royong, kebersamaan, dan toleransi di tengah masyarakat.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon_box">
                                            <i class="fas fa-user-graduate"></i> {{-- Ikon untuk pendidikan/SDM --}}
                                        </div>
                                        <div class="content_box">
                                            <h4>Meningkatkan Kualitas Sumber Daya Manusia (SDM)</h4>
                                            <p>Meningkatkan akses dan kualitas pendidikan, serta menyelenggarakan pelatihan keterampilan yang relevan dengan kebutuhan pasar kerja dan potensi desa bagi seluruh warga.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon_box">
                                            <i class="fas fa-tree"></i> {{-- Ikon untuk lingkungan --}}
                                        </div>
                                        <div class="content_box">
                                            <h4>Menjaga Keberlanjutan Lingkungan Hidup</h4>
                                            <p>Melaksanakan pengelolaan lingkungan dan sumber daya alam secara bijaksana, menerapkan praktik berkelanjutan, dan menciptakan lingkungan desa yang bersih, sehat, dan nyaman.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon_box">
                                            <i class="fas fa-gavel"></i> {{-- Ikon untuk tata kelola --}}
                                        </div>
                                        <div class="content_box">
                                            <h4>Mewujudkan Tata Kelola Pemerintahan Desa yang Profesional</h4>
                                            <p>Menciptakan pemerintahan desa yang profesional, transparan, akuntabel, dan partisipatif dengan memanfaatkan teknologi informasi untuk pelayanan publik yang prima.</p>
                                        </div>
                                    </li>
                                    {{-- Tambahkan poin misi lainnya sesuai kebutuhan --}}
                                </ul>
                            </div>

                            <div class="prev-next-page d-flex justify-content-between align-items-center mt-5">
                                <div class="prev-navlink-page">
                                    <a href="sejarah-desa.html"> {{-- Ganti dengan link ke halaman sejarah --}}
                                        <i class="fas fa-angle-double-left"></i>
                                        <div class="prevnext__nav">
                                            <p>Kembali ke</p>
                                            <h5>Sejarah Desa</h5>
                                        </div>
                                    </a>
                                </div>
                                <div class="next-navlink-page">
                                    <a href="struktur-organisasi.html"> {{-- Ganti dengan link ke halaman struktur organisasi atau profil lain --}}
                                        <i class="fas fa-angle-double-right"></i>
                                        <div class="prevnext__nav">
                                            <p>Selanjutnya</p>
                                            <h5>Kelembagaan</h5>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="course-content-side text-center">
                        <img src="{{ asset('LandingPageOri/assets/images/inner/prinsipdannilai.png') }}"
                            alt="Simbol Kebersamaan Warga Desa" height="256px" width="383px"/> {{-- Ganti dengan gambar relevan --}}
                        <div class="img_sidebar_ct bg-darkblue p-3">
                            <h5 class="cl-white mb-0">Prinsip & Nilai Kami</h5> {{-- Judul sidebar baru --}}
                        </div>
                        <ul class="d-flex flex-column">
                            <li><i class="fas fa-hands-helping"></i> Gotong Royong <span>Semangat kebersamaan</span></li>
                            <li><i class="fas fa-leaf"></i> Keberlanjutan <span>Untuk masa depan</span></li>
                            <li><i class="fas fa-lightbulb"></i> Inovasi <span>Terus berkembang</span></li>
                            <li><i class="fas fa-users"></i> Partisipasi <span>Peran aktif masyarakat</span></li>
                            <li><i class="fas fa-award"></i> Kualitas <span>Pelayanan terbaik</span></li>
                        </ul>
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

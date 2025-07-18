<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

@include('LandingPage.Layout.head')
<body>
    <div id="preloader">
        <div id="status"></div>
    </div>
    @include('LandingPage.Layout.header')
    <section class="breadcrumb-main" style="margin-top: 5rem;">
        <div class="container">
            <div class="breadcrumb-inner">
                <h2>PEMERINTAH DESA</h2>
            </div>
        </div>
        <div class="sl-overlay"></div>
    </section>
    <section class="instructors pb-0">
        <div class="container">
            <div class="row instruct-main wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="ins-main-list">
                        <img src="http://127.0.0.1:8000/LandingPageOri/assets/images/team/team-1.jpg" alt="Foto Kepala Desa">
                        <div class="ins-names">
                            <h4>H. Surateman</h4>
                            <span class="cl-orange">Kepala Desa</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="ins-main-list">
                        <img src="http://127.0.0.1:8000/LandingPageOri/assets/images/team/team-2.jpg" alt="Foto Sekretaris Desa">
                        <div class="ins-names">
                            <h4>[Nama Sekretaris Desa]</h4>
                            <span class="cl-orange">Sekretaris Desa</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="ins-main-list">
                        <img src="http://127.0.0.1:8000/LandingPageOri/assets/images/team/team-3.jpg" alt="Foto Kepala Urusan Keuangan">
                        <div class="ins-names">
                            <h4>[Nama Kaur Keuangan]</h4>
                            <span class="cl-orange">Kepala Urusan Keuangan</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="ins-main-list">
                        <img src="http://127.0.0.1:8000/LandingPageOri/assets/images/team/team-4.jpg" alt="Foto Kepala Urusan Tata Usaha dan Umum">
                        <div class="ins-names">
                            <h4>[Nama Kaur TU & Umum]</h4>
                            <span class="cl-orange">Kepala Urusan Tata Usaha & Umum</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="ins-main-list mt-5">
                        <img src="http://127.0.0.1:8000/LandingPageOri/assets/images/team/test-1.jpg" alt="Foto Kepala Seksi Pemerintahan">
                        <div class="ins-names">
                            <h4>[Nama Kasi Pemerintahan]</h4>
                            <span class="cl-orange">Kepala Seksi Pemerintahan</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="ins-main-list mt-5">
                        <img src="http://127.0.0.1:8000/LandingPageOri/assets/images/team/test-2.jpg" alt="Foto Kepala Seksi Pelayanan">
                        <div class="ins-names">
                            <h4>[Nama Kasi Pelayanan]</h4>
                            <span class="cl-orange">Kepala Seksi Pelayanan</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="ins-main-list mt-5">
                        <img src="http://127.0.0.1:8000/LandingPageOri/assets/images/team/test-3.jpg" alt="Foto Kepala Seksi Kesejahteraan">
                        <div class="ins-names">
                            <h4>[Nama Kasi Kesejahteraan]</h4>
                            <span class="cl-orange">Kepala Seksi Kesejahteraan</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="ins-main-list mt-5">
                        <img src="http://127.0.0.1:8000/LandingPageOri/assets/images/team/test-5.jpg" alt="Foto Kepala Dusun">
                        <div class="ins-names">
                            <h4>[Nama Kepala Dusun]</h4>
                            <span class="cl-orange">Kepala Dusun [Nama Dusun]</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- gambar struktur --}}
    <section class="contact-main">
        <div class="container">
            <div class="contact-map text-center">
                <img src="{{ asset('LandingPageOri/assets/struktural1.png') }}" alt="Struktur Organisasi"
                    width="900" height="auto" style="max-width: 100%; height: auto;">
            </div>
        </div>
    </section>
    @include('LandingPage.Layout.footer')
    <div id="back-to-top">
        <a href="#"></a>
    </div>
    @include('LandingPage.Layout.script')
    </body>

</html>

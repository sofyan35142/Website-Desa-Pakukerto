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
                        {{-- <div class="review-ct mb-3 d-flex justify-content-start">
                            <a href="#">Diperbarui: 18 Juli 2025</a>
                            <ul class="ml-2">
                                <li><i class="fas fa-eye"></i></li>
                                <li><i class="fas fa-heart"></i></li>
                                <li><i class="fas fa-share-alt"></i></li>
                            </ul>
                        </div> --}}
                        <h3>Sejarah Desa Pakukerto</h3>
                        <div class="customize-bottom">
                            <ul class="d-flex justify-content-start">
                                <li class="mr-3"><i class="far fa-user"></i> Tim Redaksi Desa</li>
                                {{-- <li><i class="far fa-calendar-alt"></i> 06 Juni 2021 (Pertama Diterbitkan)</li> --}}
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
                                Desa Pakukerto, sebuah nama yang tak terpisahkan dari lembaran sejarah Kabupaten Pasuruan, memiliki akar yang kuat dalam budaya dan perjuangan masa lalu. Konon, nama "Pakukerto" sendiri berasal dari gabungan kata "Paku" dan "Kerto". Kata "Paku" diyakini merujuk pada pohon paku (pakis) yang banyak tumbuh subur di wilayah ini pada masa awal pembentukan desa, melambangkan kesuburan dan kemapanan alam. Sementara itu, "Kerto" berasal dari kata "Kertha" yang dalam bahasa Jawa Kuno berarti kemakmuran, ketenteraman, atau keberkahan.
                            </p>
                            <p>
                                Dengan demikian, Pakukerto dapat diartikan sebagai "desa yang makmur dan tenteram berkat kesuburan alamnya." Sejarah mencatat bahwa sejak sekitar tahun 1870, para leluhur Desa Pakukerto telah membangun fondasi kehidupan yang harmonis, mengolah tanah subur untuk pertanian, dan melestarikan nilai-nilai gotong royong yang masih kami pegang teguh hingga kini. Desa ini juga dikenal sebagai daerah yang resisten terhadap penjajahan, banyak menyimpan kisah perjuangan lokal.
                            </p>
                            <blockquote>
                                <span>
                                    "Sebuah desa bukan hanya tentang tanah, tetapi tentang kisah dan semangat yang terus hidup di setiap generasi."
                                </span>
                                <p>Petuah Leluhur Pakukerto</p>
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
                                            <h5 class="mb-0">Dusun Kemiri: Jejak Awal dan Kekuatan Pertanian <i
                                                    class="fas fa-plus"></i></h5>
                                        </a>
                                    </div>
                                    <div id="collapseDusun1" class="collapse" role="tabpanel"
                                        aria-labelledby="headingDusun1" data-parent="#accordionEx1">
                                        <div class="card-body">
                                            Dusun Kemiri merupakan salah satu dusun tertua di Pakukerto, yang konon didirikan oleh leluhur awal yang membuka lahan pertanian. Awalnya, dusun ini dikenal sebagai daerah dengan pohon kemiri yang tumbuh subur dan menjadi salah satu komoditas utama. Perkembangan dusun ini tak lepas dari tradisi gotong royong dalam mengelola sawah dan kebun. Hingga kini, Dusun Kemiri masih menjadi sentra pertanian padi dan palawija di Desa Pakukerto.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingDusun2">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1"
                                            href="#collapseDusun2" aria-expanded="false" aria-controls="collapseDusun2">
                                            <h5 class="mb-0">Dusun Gendol: Kisah Air dan Kesejahteraan Masyarakat <i
                                                    class="fas fa-plus"></i>
                                            </h5>
                                        </a>
                                    </div>
                                    <div id="collapseDusun2" class="collapse" role="tabpanel"
                                        aria-labelledby="headingDusun2" data-parent="#accordionEx1">
                                        <div class="card-body">
                                            Dusun Gendol memiliki sejarah yang unik, sering dikaitkan dengan keberadaan sumber mata air alami atau aliran sungai kecil (gendol) yang menjadi penopang kehidupan pertanian dan kebutuhan air masyarakat. Masyarakat di dusun ini dikenal dengan kemampuannya dalam mengelola sumber daya air dan mengembangkan sistem irigasi sederhana. Perkembangan dusun ini banyak dipengaruhi oleh peningkatan akses terhadap air bersih dan pertanian hortikultura.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingDusun3">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1"
                                            href="#collapseDusun3" aria-expanded="false" aria-controls="collapseDusun3">
                                            <h5 class="mb-0">Dusun Janti: Warisan Spiritual dan Keterbukaan <i
                                                    class="fas fa-plus"></i>
                                            </h5>
                                        </a>
                                    </div>
                                    <div id="collapseDusun3" class="collapse" role="tabpanel"
                                        aria-labelledby="headingDusun3" data-parent="#accordionEx1">
                                        <div class="card-body">
                                            Sejarah Dusun Janti erat kaitannya dengan tokoh spiritual atau punden (tempat keramat) yang diyakini sebagai cikal bakal pemukiman. Konon nama Janti berasal dari nama seorang pertapa bernama Mbah Janati. Dusun ini juga menjadi saksi perkembangan kerukunan antar umat beragama dan menjadi dusun dengan masyarakat yang terbuka terhadap perubahan positif. Meskipun menjaga warisan leluhur, dusun ini juga aktif dalam pengembangan potensi ekonomi lokal dan kegiatan sosial-keagamaan.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingDusun4">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1"
                                            href="#collapseDusun4" aria-expanded="false" aria-controls="collapseDusun4">
                                            <h5 class="mb-0">Dusun Mojolengko: Sentra Budaya dan Pertumbuhan Penduduk <i class="fas fa-plus"></i></h5>
                                        </a>
                                    </div>
                                    <div id="collapseDusun4" class="collapse" role="tabpanel"
                                        aria-labelledby="headingDusun4" data-parent="#accordionEx1">
                                        <div class="card-body">
                                            Dusun Mojolengko memiliki sejarah yang dinamis, seringkali menjadi pusat kegiatan kebudayaan dan kesenian tradisional di Desa Pakukerto. Dusun ini juga mengalami pertumbuhan penduduk yang signifikan seiring dengan kemajuan desa. Banyak inisiatif pembangunan fasilitas umum, seperti sekolah dan puskesmas pembantu, pertama kali muncul di dusun ini, menunjukkan perannya sebagai motor penggerak perubahan di desa.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingDusun5">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1"
                                            href="#collapseDusun5" aria-expanded="false" aria-controls="collapseDusun5">
                                            <h5 class="mb-0">Dusun Pakunden: Penjaga Tradisi dan Kearifan Lokal <i class="fas fa-plus"></i></h5>
                                        </a>
                                    </div>
                                    <div id="collapseDusun5" class="collapse" role="tabpanel"
                                        aria-labelledby="headingDusun5" data-parent="#accordionEx1">
                                        <div class="card-body">
                                            Nama Dusun Pakunden konon berasal dari kata "Pepunden" yang berarti makam leluhur atau tempat yang dikeramatkan. Sejarah dusun ini sangat erat kaitannya dengan penjagaan tradisi dan kearifan lokal yang diwariskan secara turun-temurun. Masyarakat di Dusun Pakunden dikenal sangat menjaga adat istiadat, sering menjadi tuan rumah berbagai upacara adat dan bersih desa yang masih lestari hingga kini.
                                        </div>
                                    </div>
                                </div>

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
                            <li><i class="far fa-building"></i> Jumlah Dusun : <span>5 Dusun</span>
                            </li>
                            <li><i class="fas fa-book"></i> Sumber Sejarah : <span>Cerita Rakyat / Catatan Lama /
                                        Sesepuh Desa</span></li>
                            <li><i class="fas fa-user-friends"></i> Tokoh Lokal : <span>Mbah Janati (Dusun Janti), Sesepuh Pendiri Dusun</span></li>
                            <li><i class="far fa-clock"></i> Ciri Khas Sejarah : <span>Gotong Royong, Pertanian Tradisional,
                                        Kesenian Rakyat, Adat Bersih Desa</span></li>
                            <li><i class="fas fa-globe-europe"></i> Warisan Utama : <span>Tradisi Adat Bersih Desa / Punden Keramat di Tiap Dusun</span></li>
                        </ul>
                        {{-- <a href="galeri-sejarah.html" class="btn">Lihat Galeri Sejarah</a> --}}
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

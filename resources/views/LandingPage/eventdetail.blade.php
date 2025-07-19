
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

<!-- Mirrored from htmldesigntemplates.com/html/epathsala/event-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Jul 2025 15:38:28 GMT -->
@include('LandingPage.Layout.head')
  <body>
    <!-- Preloader -->
    <div id="preloader">
      <div id="status"></div>
    </div>
    <!-- Preloader Ends -->

    <!-- header starts -->
@include('LandingPage.Layout.header')
    <!-- header ends -->

    <!-- Breadcrumb starts -->
    <section class="breadcrumb-main">
      <div class="container">
        <div class="breadcrumb-inner">
          <h2>Event Detail</h2>
        </div>
      </div>
      <div class="sl-overlay"></div>
    </section>
    <!-- Breadcrumb end -->

    <section class="event-detail-cn pb-0">
      <div class="container">
        <div class="ev-detail-info d-flex flex-column justify-content-center align-items-center text-center h-100">
          <h3>Kerja Bakti Bersama Warga Dusun Kemiri</h3>
          <div class="customize-bottom">
            <ul class="d-flex justify-content-start">
              <li class="mr-3"><i class="far fa-user"></i>Sekertaris Desa</li>
              <li><i class="far fa-calendar-alt"></i> 10 Juli 2025</li>
            </ul>
          </div>
          <div class="ev-image">
            <img src="{{ asset('LandingPageOri/assets/images/courses/Kerja-Bakti.png') }}" alt="" />
          </div>
        </div>
        <div class="ev-detail-content">
          <div class="evt__section">
            <h3>Deskripsi Kegiatan</h3>
            <p>
              Dalam semangat kebersamaan dan kepedulian terhadap lingkungan, Pemerintah Desa Pakukerto mengajak seluruh warga Dusun Kemiri untuk turut serta dalam kegiatan Kerja Bakti Bersama pada Rabu, 30 Juli 2025, mulai pukul 09.00 WIB di depan SDN 2 Pakukerto. Kegiatan ini bertujuan menciptakan lingkungan yang bersih, sehat, dan nyaman, dengan fokus utama pada pembersihan area publik, seperti jalan desa, saluran air, dan sekitar sekolah. Selain itu, warga juga akan diberi edukasi tentang pemilahan sampah, pentingnya daur ulang, serta pengurangan penggunaan plastik sekali pakai.
            </p>
            <p>
              Dalam aksi ini, setiap peserta akan dilengkapi dengan perlengkapan kebersihan dan diberikan informasi mengenai pengelolaan sampah rumah tangga yang ramah lingkungan. Kerja bakti ini menjadi momentum untuk membangun kesadaran kolektif bahwa menjaga kebersihan adalah tanggung jawab bersama. Mari bersama-sama kita wujudkan Dusun Kemiri yang lebih hijau, sehat, dan nyaman untuk generasi sekarang dan yang akan datang.
            </p>
          </div>
          {{-- <div class="evt__section">
            <h3>THIS EVENTS WILL ALLOW PARTICIPANTS TO:</h3>
            <ul class="d-flex flex-column">
              <li><i class="fas fa-check"></i> Business's managers, leaders</li>
              <li><i class="fas fa-check"></i> Downloadable lectures, code and design assets for all projects</li>
              <li><i class="fas fa-check"></i> Anyone who is finding a chance to get the promotion</li>
            </ul>
          </div> --}}
          {{-- <div class="evt__section row mt-3 pb-0">
            <div class="col-lg-6">
              <div class="event-logo">
                <img src="images/cropped-epathsala_favicon-300x300.png" alt="" />
              </div>
            </div>
            <div class="col-lg-6">
              <div class="event-form">
                <span class="cl-blue">Feel free to register your name</span>
                <h3>Join Now</h3>
                <form>
                  <!-- 2 column grid layout with text inputs for the first and last names -->
                  <div class="row mb-3">
                    <div class="col">
                      <div class="form-outline">
                        <input type="text" id="form6Example1" class="form-control" placeholder="Name" />
                      </div>
                    </div>
                  </div>

                  <!-- Email input -->
                  <div class="form-outline mb-3">
                    <input type="email" id="form6Example5" class="form-control" placeholder="Email" />
                  </div>

                  <!-- Number input -->
                  <div class="form-outline mb-3">
                    <input type="number" id="form6Example6" class="form-control" placeholder="Phone No." />
                  </div>

                  <!-- Message input -->
                  <div class="form-outline mb-3">
                    <textarea class="form-control" id="form6Example7" placeholder="Message" rows="4"></textarea>
                  </div>

                  <!-- Submit button -->
                  <button type="submit" class="btn mb-4">Submit Now</button>
                </form>
              </div>
            </div>
          </div> --}}
        </div>
      </div>
    </section>

    <!-- News/Events news start -->
    <section class="courses news-events">
      <div class="container">
        <div class="section-title sc-center justify-content-center text-center borderline">
          <div class="title-top">
            <div class="title-quote">
              <span>KEGIATAN DESA</span>
            </div>
            <h2>KEGIATAN LAIN DESA <span class="cl-blue">PAKUKERTO</span></h2>
          </div>
        </div>
        <div class="wrap-customize">
          <div class="row">
            <div class="col-lg-4 col-md-6 mb-4 customize-wrap wow fadeInUp">
              <div class="customize-item">
                <div class="sv-image">
                  <img src="{{ asset('LandingPageOri/assets/images/courses/Kerja-Bakti.png') }}" alt="" />
                </div>
                <div class="customize-ct">
                  <h4>
                    <a href="event-detail.html">Kerja Bakti Bersama Warga Dusun Kemiri</a>
                  </h4>
                </div>
                <div class="customize-bottom">
                  <ul class="d-flex justify-content-start">
                    <li class="mr-3"><i class="far fa-calendar-alt"></i> 30 July</li>
                    <li class="mr-3"><i class="far fa-clock"></i> 09.00 - Selesai</li>
                    <li><i class="fas fa-map-marker-alt"></i> Depan SDN 2 Pakukerto</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 customize-wrap wow fadeInUp">
              <div class="customize-item">
                <div class="sv-image">
                  <img src="{{ asset('LandingPageOri/assets/images/courses/Bazar.png') }}" alt="" />
                </div>
                <div class="customize-ct">
                  <h4>
                    <a href="event-detail.html">Bazar Produk UMKM & Hasil Tani</a>
                  </h4>
                </div>
                <div class="customize-bottom">
                  <ul class="d-flex justify-content-start">
                    <li class="mr-3"><i class="far fa-calendar-alt"></i> 20 Agustus 2025</li>
                    <li class="mr-3"><i class="far fa-clock"></i> 10.00-15.00</li>
                    <li><i class="fas fa-map-marker-alt"></i> Pasar Desa Pakukerto</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 customize-wrap wow fadeInUp">
              <div class="customize-item">
                <div class="sv-image">
                  <img src="{{ asset('LandingPageOri/assets/images/courses/upacara.png') }}" alt="" />
                </div>
                <div class="customize-ct">
                  <h4>
                    <a href="event-detail.html">Upacara Memperingati HUT 80 RI</a>
                  </h4>
                </div>
                <div class="customize-bottom">
                  <ul class="d-flex justify-content-start">
                    <li class="mr-3"><i class="far fa-calendar-alt"></i> 17 Agustus 2025</li>
                    <li class="mr-3"><i class="far fa-clock"></i> 10.15 - Selesai</li>
                    <li><i class="fas fa-map-marker-alt"></i> Pasar Desa Pakukerto</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 customize-wrap wow fadeInUp">
              <div class="customize-item">
                <div class="sv-image">
                  <img src="{{ asset('LandingPageOri/assets/images/courses/Gerak-Jalan.png') }}" alt="" />
                </div>
                <div class="customize-ct">
                  <h4>
                    <a href="event-detail.html">Gerak Jalan Memperingati HUT RI 2025</a>
                  </h4>
                </div>
                <div class="customize-bottom">
                  <ul class="d-flex justify-content-start">
                    <li class="mr-3"><i class="far fa-calendar-alt"></i> 30 Agustus 2025</li>
                    <li class="mr-3"><i class="far fa-clock"></i> 07.00 - selesai</li>
                    <li><i class="fas fa-map-marker-alt"></i> Lapangan Desa Pakukerto</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 customize-wrap wow fadeInUp">
              <div class="customize-item">
                <div class="sv-image">
                  <img src="{{ asset('LandingPageOri/assets/images/courses/pelatihan.png') }}" alt="" />
                </div>
                <div class="customize-ct">
                  <h4>
                    <a href="event-detail.html">Pelatihan Digital Marketing untuk UMKM</a>
                  </h4>
                </div>
                <div class="customize-bottom">
                  <ul class="d-flex justify-content-start">
                    <li class="mr-3"><i class="far fa-calendar-alt"></i> 25 Agustus 2025</li>
                    <li class="mr-3"><i class="far fa-clock"></i> 08.00 - 12.00</li>
                    <li><i class="fas fa-map-marker-alt"></i> Balai Desa Pakukerto</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 customize-wrap wow fadeInUp">
              <div class="customize-item">
                <div class="sv-image">
                  <img src="{{ asset('LandingPageOri/assets/images/courses/kesehatan.png') }}" alt="" />
                </div>
                <div class="customize-ct">
                  <h4>
                    <a href="event-detail.html">Layanan Kesehatan Gratis untuk Warga</a>
                  </h4>
                </div>
                <div class="customize-bottom">
                  <ul class="d-flex justify-content-start">
                    <li class="mr-3"><i class="far fa-calendar-alt"></i> 21 Agustus 2025</li>
                    <li class="mr-3"><i class="far fa-clock"></i> 08.00 - 13.00</li>
                    <li><i class="fas fa-map-marker-alt"></i>  Balai Desa Pakukerto</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- News/Events news start -->

    <!--  Newsletter start -->
    {{-- <section class="newsletter">
      <div class="container">
        <div class="news-headding text-center">
          <h2>SIGN UP TO OUR NEWSLETTER</h2>
          <p>
            Subscribe to our newsletter and get many <br />
            interesting things every week
          </p>
          <form>
            <div class="form-group">
              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Your Email" />
              <button class="btn"><i class="fas fa-envelope-open-text"></i> Subscribe</button>
            </div>
          </form>
        </div>
      </div>
    </section> --}}
    <!--  Newsletter end -->

    <!-- Footer starts -->
@include('LandingPage.Layout.footer')
    <!-- Footer ends -->

    <!-- Search form popup -->
    <form action="#" class="ct-searchForm">
      <div class="inner">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-sm-8">
              <div class="form-group">
                <input id="cf-search-form" type="text" placeholder="Search ..." required class="form-control" />
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
    <!-- Search form popup end -->

    <!-- Back to top start -->
    <div id="back-to-top">
      <a href="#"></a>
    </div>
    <!-- Back to top ends -->

    <!-- *Scripts* -->
    @include('LandingPage.Layout.script')
</body>

<!-- Mirrored from htmldesigntemplates.com/html/epathsala/event-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Jul 2025 15:38:30 GMT -->
</html>

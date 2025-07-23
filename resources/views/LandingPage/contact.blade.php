<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

<!-- Mirrored from htmldesigntemplates.com/html/epathsala/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Jul 2025 15:38:39 GMT -->


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

    <!-- Breadcrumb starts -->
    <section class="breadcrumb-main" style="margin-top: 5rem;">
        <div class="container">
            <div class="breadcrumb-inner">
                <h2>Contact Us</h2>
            </div>
        </div>
        <div class="sl-overlay"></div>
    </section>
    <!-- Breadcrumb end -->

    <!-- Contact start -->
    <section class="contact-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="contact-info text-center">
                        <i class="far fa-clock"></i>
                        <h3>Jam Buka Kami</h3>
                        <div class="ct__atdetail">
                            <p>08:00 AM – 22.00 PM</p>
                            <p>Senin – Sabtu</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="contact-info text-center">
                        <i class="far fa-map"></i>
                        <h3>LOKASI</h3>
                        <div class="ct__atdetail">
                            <p>Desa Pakukerto</p>
                            <p>Kecamatan Sukorejo</p>
                            <p>Kabupaten Pasuruan</p>
                            <p>Jawa Timur 67161</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 text-center">
                    <div class="contact-info">
                        <i class="fas fa-phone-alt"></i>
                        <h3>HUBUNGI KAMI</h3>
                        <div class="ct__atdetail">
                            <p>Telepon: 0812 5455 7260</p>
                            <p>Email: <a href="https://htmldesigntemplates.com/cdn-cgi/l/email-protection"
                                    class="__cf_email__"
                                    data-cfemail="1b7874756f7a786f5b7874766b7a756235787476">[email&#160;protected]</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="contact-map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26069.26444533244!2d112.68584829536974!3d-7.722518030077664!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7d6d1cb7927af%3A0x2572fe71bc723997!2sPakukerto%2C%20Kec.%20Sukorejo%2C%20Pasuruan%2C%20Jawa%20Timur!5e1!3m2!1sid!2sid!4v1752473890035!5m2!1sid!2sid"
                    width="900" height="450" style="border: 0" allowfullscreen="" loading="lazy"></iframe>
            </div> --}}
            {{-- <div class="contact-form">
                <form class="m-auto text-center">
                    <!-- 2 column grid layout with text inputs for the first and last names -->
                    <div class="row mb-4">
                        <div class="col">
                            <div class="form-outline">
                                <input type="text" id="form6Example1" class="form-control" placeholder="Name" />
                            </div>
                        </div>
                    </div>
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input type="email" id="form6Example5" class="form-control" placeholder="Email" />
                    </div>

                    <!-- Number input -->
                    <div class="form-outline mb-4">
                        <input type="number" id="form6Example6" class="form-control" placeholder="Phone No." />
                    </div>

                    <!-- Message input -->
                    <div class="form-outline mb-4">
                        <textarea class="form-control" id="form6Example7" placeholder="Message" rows="4"></textarea>
                    </div>

                    <!-- Submit button -->
                    <button type="submit" class="btn">Send Message</button>
                </form>
            </div> --}}
        </div>
    </section>
    <!-- Contact end -->


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
    <!-- Search form popup end -->

    <!-- Back to top start -->
    <div id="back-to-top">
        <a href="#"></a>
    </div>
    <!-- Back to top ends -->

    <!-- *Scripts Start* -->
    @include('LandingPage.Layout.script')
    <!-- *Scripts End* -->
</body>

<!-- Mirrored from htmldesigntemplates.com/html/epathsala/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Jul 2025 15:38:39 GMT -->

</html>

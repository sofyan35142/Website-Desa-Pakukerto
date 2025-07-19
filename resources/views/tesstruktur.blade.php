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
    <section class="contact-main pb-0">
        <div class="container">

            {{-- <div class="contact-map">
                <iframe src="https://www.w3.org/WAI/ER/tests/xhtml/testfiles/resources/pdf/dummy.pdf" width="900"
                    height="450" style="border: 0;">
                </iframe>

            </div> --}}


            <div class="contact-map text-center">
                <img src="{{ asset('LandingPageOri/assets/struktural1.png') }}" alt="Struktur Organisasi"
                    width="900" height="auto" style="max-width: 100%; height: auto;">
            </div>

        </div>
    </section>
    <!-- Contact end -->

    <!--  Newsletter start -->

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

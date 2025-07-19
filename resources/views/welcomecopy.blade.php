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
    <section class="services-main">
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
                                <div class="service-ct-list mb-4">
                                    <i class="fas fa-leaf"></i>
                                    <h4>PERTANIAN UNGGULAN</h4>
                                    <p class="m-0">Hasil bumi melimpah seperti padi, jagung, dan aneka sayuran segar.
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="service-ct-list mb-4">
                                    <i class="fas fa-store-alt"></i>
                                    <h4>PRODUK UMKM LOKAL</h4>
                                    <p class="m-0">Berbagai olahan makanan ringan dan kerajinan tangan khas desa.</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="service-ct-list mb-4">
                                    <i class="fas fa-mountain"></i>
                                    <h4>POTENSI WISATA ALAM</h4>
                                    <p class="m-0">Pemandangan indah dan udara sejuk pegunungan yang menenangkan.</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="service-ct-list">
                                    <i class="fas fa-handshake"></i>
                                    <h4>SUMBER DAYA MANUSIA</h4>
                                    <p class="m-0">Masyarakat yang ramah, kreatif, dan bergotong royong.</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="service-ct-list">
                                    <i class="fas fa-seedling"></i>
                                    <h4>KELESTARIAN LINGKUNGAN</h4>
                                    <p class="m-0">Program menjaga kebersihan dan kelestarian alam desa.</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="service-ct-list">
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
            <div class="counter-wrap wow fadeInUp">
                <div class="content d-flex justify-content-between">
                    <div class="value-pin">
                        <span class="countfect value" data-num="233"></span>
                        <h5>COURSES & VIDEOS</h5>
                    </div>
                    <div class="value-pin">
                        <span class="countfect value" data-num="410"></span>
                        <h5>EXPERT TEACHERS</h5>
                    </div>
                    <div class="value-pin">
                        <span class="countfect value" data-num="2299"></span>
                        <h5>TOTAL STUDENTS</h5>
                    </div>
                    <div class="value-pin">
                        <span class="countfect value" data-num="368"></span>
                        <h5>CLASSES COMPLETE</h5>
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
                    <h3>ALL COURSES OF EPATHSHALA</h3>
                    <p>Online learning offers a new way to explore subjects you’re passionate about.</p>
                </div>
            </div>
            <div class="wrap-customize">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 customize-wrap mb-4 wow fadeInUp">
                        <div class="customize-item">
                            <div class="sv-image">
                                <img src="{{ asset('LandingPageOri/assets/images/courses/course-1.jpg') }}"
                                    alt="" />
                            </div>
                            <div class="customize-ct">
                                <h4>
                                    <a href="course-detail.html">DIGITAL MARKETING | SOCIAL MEDIA MARKETING
                                        BUSINESS</a>
                                </h4>
                                <div class="review-ct d-flex justify-content-start">
                                    <a href="#">21 Reviews</a>
                                    <ul class="ml-2">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star-half-alt"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="customize-bottom">
                                <ul class="d-flex justify-content-between">
                                    <li><i class="far fa-user"></i> 2k+ Students</li>
                                    <li><i class="far fa-clock"></i> 2h 45mins</li>
                                    <li><i class="far fa-star"></i> 4.5 Reviews</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 customize-wrap mb-4 wow fadeInUp">
                        <div class="customize-item">
                            <div class="sv-image">
                                <img src="{{ asset('LandingPageOri/assets/images/courses/course-2.jpg') }}"
                                    alt="" />
                            </div>
                            <div class="customize-ct">
                                <h4>
                                    <a href="course-detail.html">BUILD BRAND INTO MARKETING: TACKLING NEW MARKETING</a>
                                </h4>
                                <div class="review-ct d-flex justify-content-start">
                                    <a href="#">21 Reviews</a>
                                    <ul class="ml-2">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star-half-alt"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="customize-bottom">
                                <ul class="d-flex justify-content-between">
                                    <li><i class="far fa-user"></i> 2k+ Students</li>
                                    <li><i class="far fa-clock"></i> 2h 45mins</li>
                                    <li><i class="far fa-star"></i> 4.5 Reviews</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 customize-wrap mb-4 wow fadeInUp">
                        <div class="customize-item">
                            <div class="sv-image">
                                <img src="{{ asset('LandingPageOri/assets/images/courses/course-3.jpg') }}"
                                    alt="" />
                            </div>
                            <div class="customize-ct">
                                <h4>
                                    <a href="course-detail.html">CULTURE & STRATEGIES FOR A SUCCESSFUL BUSINESS</a>
                                </h4>
                                <div class="review-ct d-flex justify-content-start">
                                    <a href="#">21 Reviews</a>
                                    <ul class="ml-2">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star-half-alt"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="customize-bottom">
                                <ul class="d-flex justify-content-between">
                                    <li><i class="far fa-user"></i> 2k+ Students</li>
                                    <li><i class="far fa-clock"></i> 2h 45mins</li>
                                    <li><i class="far fa-star"></i> 4.5 Reviews</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 customize-wrap wow fadeInUp">
                        <div class="customize-item">
                            <div class="sv-image">
                                <img src="{{ asset('LandingPageOri/assets/images/courses/course-4.jpg') }}"
                                    alt="" />
                            </div>
                            <div class="customize-ct">
                                <h4>
                                    <a href="course-detail.html">GROW YOUR BUSINESS BY MASTERED IN SOME TECHNIQUE</a>
                                </h4>
                                <div class="review-ct d-flex justify-content-start">
                                    <a href="#">21 Reviews</a>
                                    <ul class="ml-2">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star-half-alt"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="customize-bottom">
                                <ul class="d-flex justify-content-between">
                                    <li><i class="far fa-user"></i> 2k+ Students</li>
                                    <li><i class="far fa-clock"></i> 2h 45mins</li>
                                    <li><i class="far fa-star"></i> 4.5 Reviews</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 customize-wrap wow fadeInUp">
                        <div class="customize-item">
                            <div class="sv-image">
                                <img src="{{ asset('LandingPageOri/assets/images/courses/course-5.jpg') }}"
                                    alt="" />
                            </div>
                            <div class="customize-ct">
                                <h4>
                                    <a href="course-detail.html">GROW UP AUDIENCE TO PROGRESS BUSINESS</a>
                                </h4>
                                <div class="review-ct d-flex justify-content-start">
                                    <a href="#">21 Reviews</a>
                                    <ul class="ml-2">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star-half-alt"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="customize-bottom">
                                <ul class="d-flex justify-content-between">
                                    <li><i class="far fa-user"></i> 2k+ Students</li>
                                    <li><i class="far fa-clock"></i> 2h 45mins</li>
                                    <li><i class="far fa-star"></i> 4.5 Reviews</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 customize-wrap wow fadeInUp">
                        <div class="customize-item">
                            <div class="sv-image">
                                <img src="{{ asset('LandingPageOri/assets/images/courses/course-6.jpg') }}"
                                    alt="" />
                            </div>
                            <div class="customize-ct">
                                <h4>
                                    <a href="course-detail.html">JAVA PROGRAMMING A-Z FULLY CLASSES WITH FULL TASK</a>
                                </h4>
                                <div class="review-ct d-flex justify-content-start">
                                    <a href="#">21 Reviews</a>
                                    <ul class="ml-2">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star-half-alt"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="customize-bottom">
                                <ul class="d-flex justify-content-between">
                                    <li><i class="far fa-user"></i> 2k+ Students</li>
                                    <li><i class="far fa-clock"></i> 2h 45mins</li>
                                    <li><i class="far fa-star"></i> 4.5 Reviews</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Courses ends -->

    <!-- Instructors start -->
    <section class="instructors">
        <div class="container">
            <div class="section-title sc-center justify-content-center text-center borderline">
                <div class="title-top">
                    <div class="title-quote">
                        <span>Meet Our Instructors</span>
                    </div>
                    <h3>LEARN FROM EXPERT <span class="cl-blue">INSTRUCTORS</span></h3>
                </div>
            </div>
            <div class="row instruct-main wow fadeInLeft">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="ins-main-list">
                        <img src="{{ asset('LandingPageOri/assets/images/team/team-1.jpg') }}" alt="" />
                        <div class="ins-names">
                            <h4>William Smith</h4>
                            <span class="cl-orange">CEO / Founder</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="ins-main-list">
                        <img src="{{ asset('LandingPageOri/assets/images/team/team-2.jpg') }}" alt="" />
                        <div class="ins-names">
                            <h4>Nicole Kiyl</h4>
                            <span class="cl-orange">Project Manager</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="ins-main-list">
                        <img src="{{ asset('LandingPageOri/assets/images/team/team-3.jpg') }}" alt="" />
                        <div class="ins-names">
                            <h4>John Melton</h4>
                            <span class="cl-orange">Instructor</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="ins-main-list">
                        <img src="{{ asset('LandingPageOri/assets/images/team/team-4.jpg') }}" alt="" />
                        <div class="ins-names">
                            <h4>Ketti Helson</h4>
                            <span class="cl-orange">Business Analyst</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Instructors ends -->

    <!-- Testimonial feedback -->
    <section class="testimonial p-0">
        <div class="container">
            <div class="section-title sc-center justify-content-center text-center borderline">
                <div class="title-top">
                    <div class="title-quote">
                        <span>Customers reviews</span>
                    </div>
                    <h3>WHAT PEOPLE <span class="cl-blue">SAY</span></h3>
                </div>
            </div>
            <div class="row review-slider feedback-main wow fadeInUp">
                <div class="col-md-6">
                    <div class="feedback-inner">
                        <div class="consult-content mb-4">
                            <p class="mb-0">
                                I am slide content. Click edit button to change this text. Lorem ipsum dolor sit amet,
                                consectetur adipiscing elit. Ut elit tellus, luctus nec
                                ullamcorper mattis, pulvinar dapibus leo.
                            </p>
                        </div>
                        <div class="consult-title d-flex justify-content-start">
                            <img src="{{ asset('LandingPageOri/assets/images/team/user-1.jpg') }}" alt="" />
                            <div class="ps-name">
                                <h5 class="mb-0">Adam Cheis</h5>
                                <span class="cl-orange">Graphic Designer</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="feedback-inner">
                        <div class="consult-content mb-4">
                            <p class="mb-0">
                                I am slide content. Click edit button to change this text. Lorem ipsum dolor sit amet,
                                consectetur adipiscing elit. Ut elit tellus, luctus nec
                                ullamcorper mattis, pulvinar dapibus leo.
                            </p>
                        </div>
                        <div class="consult-title d-flex justify-content-start">
                            <img src="{{ asset('LandingPageOri/assets/images/team/user-2.jpg') }}" alt="" />
                            <div class="ps-name">
                                <h5 class="mb-0">Amanda Lee</h5>
                                <span class="cl-orange">CEO & Founder Crix</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="feedback-inner">
                        <div class="consult-content mb-4">
                            <p class="mb-0">
                                I am slide content. Click edit button to change this text. Lorem ipsum dolor sit amet,
                                consectetur adipiscing elit. Ut elit tellus, luctus nec
                                ullamcorper mattis, pulvinar dapibus leo.
                            </p>
                        </div>
                        <div class="consult-title d-flex justify-content-start">
                            <img src="{{ asset('LandingPageOri/assets/images/team/user-1.jpg') }}" alt="" />
                            <div class="ps-name">
                                <h5 class="mb-0">Adam Cheis</h5>
                                <span class="cl-orange">Graphic Designer</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="feedback-inner">
                        <div class="consult-content mb-4">
                            <p class="mb-0">
                                I am slide content. Click edit button to change this text. Lorem ipsum dolor sit amet,
                                consectetur adipiscing elit. Ut elit tellus, luctus nec
                                ullamcorper mattis, pulvinar dapibus leo.
                            </p>
                        </div>
                        <div class="consult-title d-flex justify-content-start">
                            <img src="{{ asset('LandingPageOri/assets/images/team/user-2.jpg') }}" alt="" />
                            <div class="ps-name">
                                <h5 class="mb-0">Amanda Lee</h5>
                                <span class="cl-orange">CEO & Founder Crix</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial ends -->

    <!-- Packages news start -->
    <section class="packages">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="d-flex align-items-center h-100">
                        <div class="service-inner">
                            <span class="top-title cl-blue">AWESOME PACKAGES</span>
                            <h3 class="mb-3 pb-3">WE OFFER GREAT PRICES, PREMIUM ABD QUALITY PRODUCTS FOR YOUR
                                BUSINESS.</h3>
                            <p class="mb-4">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum impedit itaque dolorem.
                                Adipisci deleniti nostrum tempore aspernatur,
                                veritatis, reiciendis voluptatibus dolore expedita saepe enim similique vero beatae
                                ducimus autem cum.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="pkg-container bg-white">
                        <div class="pg-title">
                            <i class="fas fa-server"></i>
                            <h3 class="cl-orange">RECOMMENDED</h3>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium perspiciatis</p>
                        </div>
                        <div class="pg-main">
                            <p class="cl-orange"><i class="fas fa-dollar-sign"></i> 5.99<span>/Month</span></p>
                            <ul>
                                <li><i class="fas fa-check"></i> Create and host custom content</li>
                                <li><i class="fas fa-check"></i> Create custom learning paths</li>
                                <li><i class="fas fa-check"></i> Custom Categories</li>
                                <li><i class="fas fa-check"></i> Native courses in English</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="pkg-container">
                        <div class="pg-title">
                            <i class="fas fa-cog"></i>
                            <h3 class="cl-blue">STANDARD</h3>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium perspiciatis</p>
                        </div>
                        <div class="pg-main">
                            <p class="cl-blue"><i class="fas fa-dollar-sign"></i> 25.99<span>/Month</span></p>
                            <ul>
                                <li><i class="fas fa-check"></i> Create and host custom content</li>
                                <li><i class="fas fa-check"></i> Create custom learning paths</li>
                                <li><i class="fas fa-check"></i> Custom Categories</li>
                                <li><i class="fas fa-check"></i> Native courses in all Langauges</li>
                                <li><i class="fas fa-check"></i> 24/7 customer support</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Packages news end -->

    <!-- News/Events news start -->
    <section class="courses news-events p-0">
        <div class="container">
            <div class="section-title sc-center justify-content-center borderline text-center">
                <div class="title-top">
                    <div class="title-quote">
                        <span>Our Events</span>
                    </div>
                    <h3>UPCOMING <span class="cl-blue">EVENTS</span> & <span class="cl-blue">COMPETITIONS</span></h3>
                </div>
            </div>
            <div class="wrap-customize">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 customize-wrap wow fadeInUp">
                        <div class="customize-item">
                            <div class="sv-image">
                                <img src="{{ asset('LandingPageOri/assets/images/courses/event-1.jpg') }}"
                                    alt="" />
                                <span>28 June</span>
                            </div>
                            <div class="customize-ct">
                                <h4>
                                    <a href="event-detail.html">TED TALKS AT UCF COLLEGE OF EDUCATION</a>
                                </h4>
                                <div class="review-ct d-flex justify-content-start">
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                </div>
                            </div>
                            <div class="customize-bottom">
                                <ul class="d-flex justify-content-start">
                                    <li class="mr-3"><i class="far fa-clock"></i> 9AM</li>
                                    <li><i class="fas fa-map-marker-alt"></i> Melbourne</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 customize-wrap wow fadeInUp">
                        <div class="customize-item">
                            <div class="sv-image">
                                <img src="{{ asset('LandingPageOri/assets/images/courses/event-2.jpg') }}"
                                    alt="" />
                                <span>5 Aug</span>
                            </div>
                            <div class="customize-ct">
                                <h4>
                                    <a href="event-detail.html">IMPORTANCES OF RESEARCH SEMINAR 2021</a>
                                </h4>
                                <div class="review-ct d-flex justify-content-start">
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                </div>
                            </div>
                            <div class="customize-bottom">
                                <ul class="d-flex justify-content-start">
                                    <li class="mr-3"><i class="far fa-clock"></i> 9AM</li>
                                    <li><i class="fas fa-map-marker-alt"></i> Melbourne</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 customize-wrap wow fadeInUp">
                        <div class="customize-item">
                            <div class="sv-image">
                                <img src="{{ asset('LandingPageOri/assets/images/courses/event-3.jpg') }}"
                                    alt="" />
                                <span>17 Sep</span>
                            </div>
                            <div class="customize-ct">
                                <h4>
                                    <a href="event-detail.html">NEWLY SUMMER COURSE STARTS FROM JUNE</a>
                                </h4>
                                <div class="review-ct d-flex justify-content-start">
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                </div>
                            </div>
                            <div class="customize-bottom">
                                <ul class="d-flex justify-content-start">
                                    <li class="mr-3"><i class="far fa-clock"></i> 9AM</li>
                                    <li><i class="fas fa-map-marker-alt"></i> Melbourne</li>
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
    <section class="blog-article">
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
    </section>
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

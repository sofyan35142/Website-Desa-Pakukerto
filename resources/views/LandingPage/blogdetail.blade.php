<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

<!-- Mirrored from htmldesigntemplates.com/html/epathsala/blog-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Jul 2025 15:38:39 GMT -->
@include('LandingPage.layout.head')

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div id="status"></div>
    </div>
    <!-- Preloader Ends -->

    <!-- header starts -->
    @include('LandingPage.layout.header')
    <!-- header ends -->

    <!-- Blog title starts -->
    <section class="blog-top-title">
        <div class="bg_bar_title">
            <h1 class="cl-white">Remaja Desa Pakukerto Ikuti Pelatihan Keterampilan Digital</h1>
            <p class="cl-white">September 21, 2025</p>
        </div>
        <div class="bg__bar_image">
            <img src="{{ asset('LandingPageOri/assets/images/inner/modern-education-business-startup-friendship-an-2021-07-27-05-12-15-utc-1.jpg') }}"
                alt="" />
        </div>
    </section>
    <!-- Blog title end -->

    <!--  Blog to action start -->
    <section class="blog__details p-0">
        <div class="container">
            <div class="bg__author d-flex align-items-center">
                <img src="{{ asset('LandingPageOri/assets/images/team/user-2.jpg') }}" alt="" />
                <div class="bg__author_name">
                    <h4>Marta Fleming</h4>
                    <span>Founder and Co-owner</span>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="bg__contents">
                        <div class="author__datetime">
                            <ul>
                                <li>
                                    <a href="#"><i class="far fa-user-circle"></i> html_design</a>
                                </li>
                                <li><i class="far fa-calendar"></i> August 11, 2025</li>
                                <li><i class="far fa-clock"></i> 6:47 am</li>
                                <li>
                                    <a href="#"><i class="fas fa-comment-dots"></i> No Comments</a>
                                </li>
                            </ul>
                        </div>
                        <div class="bg__only_detail">
                            <p>
                                Dalam rangka meningkatkan kapasitas dan keterampilan generasi muda di era digital,
                                Pemerintah Desa Pakukerto menyelenggarakan pelatihan keterampilan digital yang diikuti
                                oleh para remaja dari berbagai dusun. Kegiatan ini berlangsung pada Sabtu, 13 Juli 2025,
                                bertempat di Balai Desa Pakukerto dan menghadirkan narasumber dari komunitas teknologi
                                lokal. <br>
                                Pelatihan ini mencakup beberapa materi dasar seperti:
                            </p>
                            <ul class="">
                                <li>Pengantar desain grafis menggunakan Canva dan Photoshop</li>
                                <li>Dasar pengelolaan media sosial secara produktif</li>
                                <li>Pengenalan dunia digital marketing untuk UMKM</li>
                                <li>Tips membuat konten kreatif dan menarik</li>
                                {{-- <li>Ipsum eros quaerat deserunt proin porttitor, fugit ultrices.</li>
                                <li>Volutpat, justo mollit ullamco sagittis duis enim labore, ullamcorper dicta.</li> --}}
                            </ul>
                            <p>
                                Antusiasme peserta sangat tinggi, terlihat dari jumlah peserta yang melebihi target
                                awal. Para peserta aktif berdiskusi dan mempraktikkan langsung materi yang diberikan.
                                Kegiatan ini juga menjadi ajang kolaborasi antar remaja lintas dusun, serta menjadi
                                sarana membangun semangat berkarya di bidang digital. <br>

                                Kepala Desa Pakukerto dalam sambutannya menyampaikan bahwa kegiatan ini bertujuan
                                memberi bekal keterampilan yang bermanfaat, tidak hanya untuk pribadi peserta, tetapi
                                juga untuk mendukung potensi ekonomi digital desa di masa depan.
                            </p>

                            <!--Accordion wrapper-->
                            {{-- <div class="accordion md-accordion mt-3" id="accordionEx1" role="tablist"
                                aria-multiselectable="true">
                                <!-- Accordion card -->
                                <div class="card">
                                    <!-- Card header -->
                                    <div class="card-header" role="tab" id="headingTwo1">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1"
                                            href="#collapseTwo1" aria-expanded="false" aria-controls="collapseTwo1">
                                            <h5 class="mb-0">TABLE OF CONTENTS <i class="fas fa-plus"></i></h5>
                                        </a>
                                    </div>

                                    <!-- Card body -->
                                    <div id="collapseTwo1" class="collapse show" role="tabpanel"
                                        aria-labelledby="headingTwo1" data-parent="#accordionEx1">
                                        <div class="card-body">
                                            <ol>
                                                <li><a href="#">JACK GRANT</a></li>
                                                <li>
                                                    <a href="#">Leave a Reply Cancel reply</a>
                                                    <ol>
                                                        <li><a href="#">YOU MIGHT ALSO ENJOY</a></li>
                                                        <li><a href="#">NEW CHICAGO SCHOOL BUDGET RELIES ON
                                                                PENSION</a></li>
                                                        <li><a href="#">THE CHALLENGE OF LEARNING IN PUBLIC
                                                                EDUCATION</a></li>
                                                        <li><a href="#">EXACTLY HOW TECHNOLOGY CAN MAKE READING
                                                                BETTER</a></li>
                                                        <li><a href="#">GROW YOUR BUSINESS BY MASTERED
                                                                TECHNIQUE</a></li>
                                                        <li><a href="#">LEADERSHIP: STRATEGIES FOR A SUCCESSFUL
                                                                BUSINESS</a></li>
                                                        <li><a href="#">FOLLOW US</a></li>
                                                    </ol>
                                                </li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                                <!-- Accordion card -->
                            </div> --}}
                            <!-- Accordion wrapper -->

                            <blockquote>
                                <span>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec
                                    ullamcorper mattis, pulvinar dapibus leo.Lorem ipsum
                                    dolor sit amet consectetur adipiscing elit dolor</span>
                                <p>John Doe</p>
                                <button class="btn btn-curve"><i class="fab fa-twitter"></i> Tweet</button>
                            </blockquote>
                        </div>
                        {{-- <div class="blg__ct_form">
                            <h3>Leave a Reply</h3>
                            <p>Your email address will not be published. Required fields are marked *</p>
                            <form class="mt-4">
                                <!-- Message input -->
                                <div class="form-outline mb-4">
                                    <label>Comment</label>
                                    <textarea class="form-control" id="form6Example7" rows="4"></textarea>
                                </div>

                                <!-- 2 column grid layout with text inputs for the first and last names -->
                                <div class="row mb-3">
                                    <div class="col">
                                        <div class="form-outline">
                                            <label>Name *</label>
                                            <input type="text" id="form6Example1" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <!-- Email input -->
                                <div class="form-outline mb-3">
                                    <label>Email *</label>
                                    <input type="email" id="form6Example5" class="form-control" />
                                </div>

                                <!-- Number input -->
                                <div class="form-outline mb-3">
                                    <label>Website</label>
                                    <input type="text" id="form6Example6" class="form-control" />
                                </div>
                                <!-- Checkbox -->
                                <div class="form-check d-flex justify-content-start mb-4">
                                    <input class="form-check-input me-2" type="checkbox" value=""
                                        id="form6Example8" checked />
                                    <label class="form-check-label" for="form6Example8"> Save my name, email, and
                                        website in this browser for the next time I comment. </label>
                                </div>
                                <!-- Submit button -->
                                <button type="submit" class="btn">Post Comment</button>
                            </form>
                        </div> --}}
                        <div class="prev-next-page d-flex justify-content-between align-items-center mt-4">
                            <div class="prev-navlink-page">
                                <a href="#">
                                    <i class="fas fa-angle-double-left"></i>
                                    <div class="prevnext__nav">
                                        <p>Previous</p>
                                        <h5>FITTECH & KEY INVESTMENT CONFERENCE</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="next-navlink-page">
                                <a href="#">
                                    <i class="fas fa-angle-double-right"></i>
                                    <div class="prevnext__nav">
                                        <p>Next</p>
                                        <h5>THE NEXT GENERATION OF BUSINESS LEADERS</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 aside-sidebar customize-wrap wow fadeInUp">
                    <div class="sidebar-course mb-4">
                        <div class="sidebar-title">
                            <h4>YOU MIGHT ALSO ENJOY</h4>
                        </div>
                        <div class="customize-item d-flex mb-3">
                            <div class="sv-image pr-3">
                                <img src="{{ asset('LandingPageOri/assets/images/courses/course-2.jpg') }}"
                                    alt="" />
                            </div>
                            <div class="customize-ct m-0">
                                <h6 class="mb-0">
                                    <a href="blog-detail.html">EPATHSHALA’S ALUMNI HOT AIR BALLON TRIP IN TURKEY</a>
                                </h6>
                                <span class="cust-meta"> August 20, 2025</span>
                            </div>
                        </div>
                        <div class="customize-item d-flex mb-3">
                            <div class="sv-image pr-3">
                                <img src="{{ asset('LandingPageOri/assets/images/courses/event-1.jpg') }}"
                                    alt="" />
                            </div>
                            <div class="customize-ct m-0">
                                <h6 class="mb-0">
                                    <a href="blog-detail.html">THE NEXT GENERATION OF BUSINESS LEADERS</a>
                                </h6>
                                <span class="cust-meta"> August 20, 2025</span>
                            </div>
                        </div>
                        <div class="customize-item d-flex mb-3">
                            <div class="sv-image pr-3">
                                <img src="{{ asset('LandingPageOri/assets/images/courses/course-4.jpg') }}"
                                    alt="" />
                            </div>
                            <div class="customize-ct m-0">
                                <h6 class="mb-0">
                                    <a href="blog-detail.html">REUNION EVENT: EPATHSHALA’S ALUMNI GOLF TOUR</a>
                                </h6>
                                <span class="cust-meta"> August 20, 2025</span>
                            </div>
                        </div>
                        <div class="customize-item d-flex">
                            <div class="sv-image pr-3">
                                <img src="{{ asset('LandingPageOri/assets/images/courses/course-3.jpg') }}"
                                    alt="" />
                            </div>
                            <div class="customize-ct m-0">
                                <h6 class="mb-0">
                                    <a href="blog-detail.html">EPATHSHALA’S ALUMNI HOT AIR BALLON TRIP IN TURKEY</a>
                                </h6>
                                <span class="cust-meta"> August 20, 2025</span>
                            </div>
                        </div>
                    </div>

                    <div class="sidebar-links">
                        <div class="sidebar-title">
                            <h4>follow us</h4>
                        </div>
                        <div class="side-contact-wp text-center mb-4">
                            <ul class="sidebar-social mb-3">
                                <li>
                                    <a href="#" class="bg-fb"><i class="fab fa-facebook-f"></i> Facebook</a>
                                </li>
                                <li>
                                    <a href="#" class="bg-twitter"><i class="fab fa-twitter"></i> Twitter</a>
                                </li>
                                <li>
                                    <a href="#" class="bg-pin"><i class="fab fa-pinterest-p"></i> Pinterest</a>
                                </li>
                                <li>
                                    <a href="#" class="bg-linkedin"><i class="fab fa-linkedin-in"></i>
                                        LinkedIn</a>
                                </li>
                                <li>
                                    <a href="#" class="bg-dribble"><i class="fab fa-dribbble"></i> Dribble</a>
                                </li>
                                <li>
                                    <a href="#" class="bg-youtube"><i class="fab fa-youtube"></i> YouTube</a>
                                </li>
                            </ul>
                        </div>
                        {{-- <img src="{{ asset('LandingPageOri/assets/images/inner/education-2025-04-09-20-17-44-utc.jpg') }}"
                            alt="" /> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  Blog to action end -->

    <!--  Newsletter start -->

    <!--  Newsletter end -->

    <!-- Footer starts -->
    @include('LandingPage.layout.footer')
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

    <!-- *Scripts* -->
    @include('LandingPage.layout.script')
</body>

<!-- Mirrored from htmldesigntemplates.com/html/epathsala/blog-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Jul 2025 15:38:39 GMT -->

</html>

<footer class="wow fadeInUp" id="footer">
    <div class="footer-upper">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="f-maincontent">
                        <img src="{{ asset('LandingPageOri/assets/images/Logo/Pakukerto_footer-removebg.png') }}"
                            alt="Logo Desa Pakukerto" />
                        <p>Website Resmi Desa Pakukerto, Kecamatan Sukorejo, Kabupaten Pasuruan, Provinsi Jawa Timur
                        </p>
                        {{-- Sosial Media Icons --}}
                        <ul>
                            <li class="pr-2">
                                <a href="#" class="bg-linkedin"><i class="fab fa-linkedin-in"></i></a>
                            </li>
                            <li class="pr-2">
                                <a href="#" class="bg-twitter"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li class="pr-2">
                                <a href="#" class="bg-fb"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li class="pr-2">
                                <a href="#" class="bg-dribble"><i class="fab fa-dribbble"></i></a>
                            </li>
                            <li class="pr-2">
                                <a href="#" class="bg-youtube"><i class="fab fa-youtube"></i></a>
                            </li>
                            <li>
                                <a href="#" class="bg-pin"><i class="fab fa-pinterest-p"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4">
                    <div class="ft-lists">
                        <h4>DESA PAKUKERTO</h4> {{-- Diubah dari COMPANY --}}
                        <ul>
                            <li><a href="#">Profil Desa</a></li>
                            <li><a href="#">Visi Misi</a></li>
                            <li><a href="{{ route('admin.blogs.view') }}">Berita & Artikel</a></li> {{-- Mengarah ke daftar blog --}}
                            <li><a href="#">Perangkat Desa</a></li>
                            <li><a href="#">Galeri Foto</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4">
                    <div class="ft-lists">
                        <h4>LAYANAN</h4> {{-- Diubah dari CATEGORY --}}
                        <ul>
                            <li><a href="#">Layanan Surat</a></li>
                            <li><a href="#">Data Penduduk</a></li>
                            <li><a href="#">Program Desa</a></li>
                            <li><a href="#">UMKM Desa</a></li>
                            <li><a href="#">Pariwisata Desa</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4">
                    <div class="ft-lists">
                        <h4>TAUTAN CEPAT</h4> {{-- Diubah dari QUICK LINKS --}}
                        <ul>
                            <li><a href="#">Kebijakan Privasi</a></li>
                            <li><a href="#">Kontak Kami</a></li>
                            <li><a href="#">Syarat & Ketentuan</a></li>
                            <li><a href="#">Lapor Aduan</a></li>
                            <li><a href="#">FAQ</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-main">
            <div class="container">
                <div class="copyright-text d-flex justify-content-center">
                    <p class="m-0">© 2025 PMM-KKN 01 | UNIVERSITAS MUHAMMADIYAH MALANG</p> {{-- Tahun sudah 2025 --}}
                </div>
            </div>
        </div>
    </div>
</footer>

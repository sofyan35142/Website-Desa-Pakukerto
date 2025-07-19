<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

<!-- Mirrored from htmldesigntemplates.com/html/epathsala/course-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Jul 2025 15:38:28 GMT -->
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

    <!-- Course Detail start -->
    <section class="course-detail shape_big2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="course-content">
                        <div class="cs-contents">
                            <div class="cs-title">
                                <h3>Administrasi</h3>
                            </div>
                            <div class="accordion md-accordion" id="accordionAdministrasi" role="tablist"
                                aria-multiselectable="true">
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingAdm1">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordionAdministrasi"
                                            href="#collapseAdm1" aria-expanded="false" aria-controls="collapseAdm1">
                                            <h5 class="mb-0">SURAT PENGANTAR IZIN KERAMAIAN <i
                                                    class="fas fa-plus"></i>
                                            </h5>
                                        </a>
                                    </div>
                                    <div id="collapseAdm1" class="collapse" role="tabpanel"
                                        aria-labelledby="headingAdm1" data-parent="#accordionAdministrasi">
                                        <div class="card-body">
                                            <form class="mt-4">
                                                <div class="form-outline mb-4">
                                                    <label for="formKeteranganAdm1">Keterangan</label>
                                                    <textarea class="form-control form-shadow" id="formKeteranganAdm1" rows="4"></textarea>
                                                </div>

                                                <div class="row mb-3">
                                                    <div class="col-lg-6">
                                                        <div class="form-outline">
                                                            <label for="formNamaAdm1">Nama Lengkap *</label>
                                                            <input type="text" id="formNamaAdm1"
                                                                class="form-control form-shadow">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-outline">
                                                            <label for="formEmailAdm1">Email *</label>
                                                            <input type="email" id="formEmailAdm1"
                                                                class="form-control form-shadow">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-lg-6">
                                                        <div class="form-outline">
                                                            <label for="formTeleponAdm1">No. Telepon/WhatsApp</label>
                                                            <input type="text" id="formTeleponAdm1"
                                                                class="form-control form-shadow">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 text-center">
                                                        <div class="form-outline">
                                                            <button type="submit" class="btn btn-primary btn-surat mt-3 ">Ajukan
                                                                Permohonan</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingAdm2">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordionAdministrasi"
                                            href="#collapseAdm2" aria-expanded="false" aria-controls="collapseAdm2">
                                            <h5 class="mb-0">SURAT KETERANGAN KEMATIAN <i class="fas fa-plus"></i>
                                            </h5>
                                        </a>
                                    </div>
                                    <div id="collapseAdm2" class="collapse" role="tabpanel"
                                        aria-labelledby="headingAdm2" data-parent="#accordionAdministrasi">
                                        <div class="card-body">
                                            <form class="mt-4">
                                                <div class="form-outline mb-4">
                                                    <label for="formKeteranganAdm2">Keterangan</label>
                                                    <textarea class="form-control form-shadow" id="formKeteranganAdm2" rows="4"></textarea>
                                                </div>

                                                <div class="row mb-3">
                                                    <div class="col-lg-6">
                                                        <div class="form-outline">
                                                            <label for="formNamaAdm2">Nama Lengkap *</label>
                                                            <input type="text" id="formNamaAdm2"
                                                                class="form-control form-shadow">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-outline">
                                                            <label for="formEmailAdm2">Email *</label>
                                                            <input type="email" id="formEmailAdm2"
                                                                class="form-control form-shadow">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-lg-6">
                                                        <div class="form-outline">
                                                            <label for="formTeleponAdm2">No. Telepon/WhatsApp</label>
                                                            <input type="text" id="formTeleponAdm2"
                                                                class="form-control form-shadow">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-outline">
                                                            <label for="formTeleponAdm2">No. Telepon/WhatsApp</label>
                                                            <input type="text" id="formTeleponAdm2"
                                                                class="form-control form-shadow">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 text-center">
                                                        <div class="form-outline">
                                                            <button type="submit" class="btn btn-primary btn-surat mt-3">Ajukan
                                                                Permohonan</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingAdm3">
                                        <a class="collapsed" data-toggle="collapse"
                                            data-parent="#accordionAdministrasi" href="#collapseAdm3"
                                            aria-expanded="false" aria-controls="collapseAdm3">
                                            <h5 class="mb-0">SURAT KETERANGAN AHLI WARIS <i class="fas fa-plus"></i>
                                            </h5>
                                        </a>
                                    </div>
                                    <div id="collapseAdm3" class="collapse" role="tabpanel"
                                        aria-labelledby="headingAdm3" data-parent="#accordionAdministrasi">
                                        <div class="card-body">
                                            <form class="mt-4">
                                                <div class="form-outline mb-4">
                                                    <label for="formKeteranganAdm3">Keterangan</label>
                                                    <textarea class="form-control form-shadow" id="formKeteranganAdm3" rows="4"></textarea>
                                                </div>

                                                <div class="row mb-3">
                                                    <div class="col-lg-6">
                                                        <div class="form-outline">
                                                            <label for="formNamaAdm3">Nama Lengkap *</label>
                                                            <input type="text" id="formNamaAdm3"
                                                                class="form-control form-shadow">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-outline">
                                                            <label for="formEmailAdm3">Email *</label>
                                                            <input type="email" id="formEmailAdm3"
                                                                class="form-control form-shadow">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-lg-6">
                                                        <div class="form-outline">
                                                            <label for="formTeleponAdm3">No. Telepon/WhatsApp</label>
                                                            <input type="text" id="formTeleponAdm3"
                                                                class="form-control form-shadow">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 text-center">
                                                        <div class="form-outline">
                                                            <button type="submit" class="btn btn-primary btn-surat mt-3">Ajukan
                                                                Permohonan</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingAdm4">
                                        <a class="collapsed" data-toggle="collapse"
                                            data-parent="#accordionAdministrasi" href="#collapseAdm4"
                                            aria-expanded="false" aria-controls="collapseAdm4">
                                            <h5 class="mb-0">SURAT KETERANGAN PINDAH <i class="fas fa-plus"></i>
                                            </h5>
                                        </a>
                                    </div>
                                    <div id="collapseAdm4" class="collapse" role="tabpanel"
                                        aria-labelledby="headingAdm4" data-parent="#accordionAdministrasi">
                                        <div class="card-body">
                                            <form class="mt-4">
                                                <div class="form-outline mb-4">
                                                    <label for="formKeteranganAdm4">Keterangan</label>
                                                    <textarea class="form-control form-shadow" id="formKeteranganAdm4" rows="4"></textarea>
                                                </div>

                                                <div class="row mb-3">
                                                    <div class="col-lg-6">
                                                        <div class="form-outline">
                                                            <label for="formNamaAdm4">Nama Lengkap *</label>
                                                            <input type="text" id="formNamaAdm4"
                                                                class="form-control form-shadow">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-outline">
                                                            <label for="formEmailAdm4">Email *</label>
                                                            <input type="email" id="formEmailAdm4"
                                                                class="form-control form-shadow">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-lg-6">
                                                        <div class="form-outline">
                                                            <label for="formTeleponAdm4">No. Telepon/WhatsApp</label>
                                                            <input type="text" id="formTeleponAdm4"
                                                                class="form-control form-shadow">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 text-center">
                                                        <div class="form-outline">
                                                            <button type="submit" class="btn btn-primary btn-surat mt-3">Ajukan
                                                                Permohonan</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="course-content">
                        <div class="cs-contents">
                            <div class="cs-title">
                                <h3>Persuratan</h3>
                            </div>
                            <div class="accordion md-accordion" id="accordionPersuratan" role="tablist"
                                aria-multiselectable="true">
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingPersurat1">
                                        <a class="collapsed" data-toggle="collapse"
                                            data-parent="#accordionPersuratan" href="#collapsePersurat1"
                                            aria-expanded="false" aria-controls="collapsePersurat1">
                                            <h5 class="mb-0">SURAT PENGANTAR KK & KTP <i class="fas fa-plus"></i>
                                            </h5>
                                        </a>
                                    </div>
                                    <div id="collapsePersurat1" class="collapse" role="tabpanel"
                                        aria-labelledby="headingPersurat1" data-parent="#accordionPersuratan">
                                        <div class="card-body">
                                            <form class="mt-4">
                                                <div class="form-outline mb-4">
                                                    <label for="formKeteranganPersurat1">Keterangan</label>
                                                    <textarea class="form-control form-shadow" id="formKeteranganPersurat1" rows="4"></textarea>
                                                </div>

                                                <div class="row mb-3">
                                                    <div class="col-lg-6">
                                                        <div class="form-outline">
                                                            <label for="formNamaPersurat1">Nama Lengkap *</label>
                                                            <input type="text" id="formNamaPersurat1"
                                                                class="form-control form-shadow">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-outline">
                                                            <label for="formEmailPersurat1">Email *</label>
                                                            <input type="email" id="formEmailPersurat1"
                                                                class="form-control form-shadow">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-lg-6">
                                                        <div class="form-outline">
                                                            <label for="formTeleponPersurat1">No.
                                                                Telepon/WhatsApp</label>
                                                            <input type="text" id="formTeleponPersurat1"
                                                                class="form-control form-shadow">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 text-center">
                                                        <div class="form-outline">
                                                            <button type="submit" class="btn btn-primary btn-surat mt-3">Ajukan
                                                                Permohonan</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingPersurat2">
                                        <a class="collapsed" data-toggle="collapse"
                                            data-parent="#accordionPersuratan" href="#collapsePersurat2"
                                            aria-expanded="false" aria-controls="collapsePersurat2">
                                            <h5 class="mb-0">SURAT KETERANGAN BEDA NAMA & NIK <i
                                                    class="fas fa-plus"></i>
                                            </h5>
                                        </a>
                                    </div>
                                    <div id="collapsePersurat2" class="collapse" role="tabpanel"
                                        aria-labelledby="headingPersurat2" data-parent="#accordionPersuratan">
                                        <div class="card-body">
                                            <form class="mt-4">
                                                <div class="form-outline mb-4">
                                                    <label for="formKeteranganPersurat2">Keterangan</label>
                                                    <textarea class="form-control form-shadow" id="formKeteranganPersurat2" rows="4"></textarea>
                                                </div>

                                                <div class="row mb-3">
                                                    <div class="col-lg-6">
                                                        <div class="form-outline">
                                                            <label for="formNamaPersurat2">Nama Lengkap *</label>
                                                            <input type="text" id="formNamaPersurat2"
                                                                class="form-control form-shadow">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-outline">
                                                            <label for="formEmailPersurat2">Email *</label>
                                                            <input type="email" id="formEmailPersurat2"
                                                                class="form-control form-shadow">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-lg-6">
                                                        <div class="form-outline">
                                                            <label for="formTeleponPersurat2">No.
                                                                Telepon/WhatsApp</label>
                                                            <input type="text" id="formTeleponPersurat2"
                                                                class="form-control form-shadow">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 text-center">
                                                        <div class="form-outline">
                                                            <button type="submit" class="btn btn-primary btn-surat mt-3">Ajukan
                                                                Permohonan</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingPersurat3">
                                        <a class="collapsed" data-toggle="collapse"
                                            data-parent="#accordionPersuratan" href="#collapsePersurat3"
                                            aria-expanded="false" aria-controls="collapsePersurat3">
                                            <h5 class="mb-0">SURAT KETERANGAN DOMISILI <i class="fas fa-plus"></i>
                                            </h5>
                                        </a>
                                    </div>
                                    <div id="collapsePersurat3" class="collapse" role="tabpanel"
                                        aria-labelledby="headingPersurat3" data-parent="#accordionPersuratan">
                                        <div class="card-body">
                                            <form class="mt-4">
                                                <div class="form-outline mb-4">
                                                    <label for="formKeteranganPersurat3">Keterangan</label>
                                                    <textarea class="form-control form-shadow" id="formKeteranganPersurat3" rows="4"></textarea>
                                                </div>

                                                <div class="row mb-3">
                                                    <div class="col-lg-6">
                                                        <div class="form-outline">
                                                            <label for="formNamaPersurat3">Nama Lengkap *</label>
                                                            <input type="text" id="formNamaPersurat3"
                                                                class="form-control form-shadow">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-outline">
                                                            <label for="formEmailPersurat3">Email *</label>
                                                            <input type="email" id="formEmailPersurat3"
                                                                class="form-control form-shadow">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-lg-6">
                                                        <div class="form-outline">
                                                            <label for="formTeleponPersurat3">No.
                                                                Telepon/WhatsApp</label>
                                                            <input type="text" id="formTeleponPersurat3"
                                                                class="form-control form-shadow">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 text-center">
                                                        <div class="form-outline">
                                                            <button type="submit" class="btn btn-primary btn-surat mt-3">Ajukan
                                                                Permohonan</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingPersurat4">
                                        <a class="collapsed" data-toggle="collapse"
                                            data-parent="#accordionPersuratan" href="#collapsePersurat4"
                                            aria-expanded="false" aria-controls="collapsePersurat4">
                                            <h5 class="mb-0">SURAT KETERANGAN PINDAH <i class="fas fa-plus"></i>
                                            </h5>
                                        </a>
                                    </div>
                                    <div id="collapsePersurat4" class="collapse" role="tabpanel"
                                        aria-labelledby="headingPersurat4" data-parent="#accordionPersuratan">
                                        <div class="card-body">
                                            <form class="mt-4">
                                                <div class="form-outline mb-4">
                                                    <label for="formKeteranganPersurat4">Keterangan</label>
                                                    <textarea class="form-control form-shadow" id="formKeteranganPersurat4" rows="4"></textarea>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-lg-6">
                                                        <div class="form-outline">
                                                            <label for="formNamaPersurat4">Nama Lengkap *</label>
                                                            <input type="text" id="formNamaPersurat4"
                                                                class="form-control form-shadow">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-outline">
                                                            <label for="formEmailPersurat4">Email *</label>
                                                            <input type="email" id="formEmailPersurat4"
                                                                class="form-control form-shadow">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-lg-6">
                                                        <div class="form-outline">
                                                            <label for="formTeleponPersurat4">No.
                                                                Telepon/WhatsApp</label>
                                                            <input type="text" id="formTeleponPersurat4"
                                                                class="form-control form-shadow">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 text-center">
                                                        <button type="submit" class="btn btn-primary btn-surat mt-3">Ajukan
                                                            Permohonan</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                </div>
            </div>
        </div>
    </section>
    <!-- Courses Detail end -->

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

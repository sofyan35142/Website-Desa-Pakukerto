<!doctype html>
<html lang="en">

@include('Admin.LayoutAdmin.head')


<body>

    <div id="layout-wrapper">


        @include('Admin.LayoutAdmin.header')
        @include('Admin.LayoutAdmin.sidebar')


        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0">Manajemen Blog</h4>

                                <div class="page-title-right d-flex align-items-center"> {{-- Tambahkan d-flex dan align-items-center di sini --}}
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Konten</a></li>
                                        <li class="breadcrumb-item active">Blog</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">DATA BLOG PAKUKERTO</h4>
                                    <a href="{{route('admin.blogs.form')}}"><button class="btn btn-primary"> Tambah Data
                                            Blog</button></a>
                                    <p class="card-title-desc">Kelola semua postingan blog yang ada di website Anda.</p>
                                    {{-- @if (session('success'))
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            {{ session('success') }}
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @endif --}}
                                    {{-- @if ($blogs->isEmpty())
                                        <div class="alert alert-info text-center" role="alert">
                                            Belum ada data blog yang tersedia.
                                        </div>
                                    @else --}}
                                    <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Nama Blog</th>
                                                <th>Penulis</th>
                                                <th>Deskripsi</th> {{-- Kolom Deskripsi --}}
                                                <th>Kategori</th> {{-- Kolom Kategori --}}
                                                <th>Gambar</th>
                                                <th>Tanggal Publikasi</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($blogs as $key => $blog)
                                                <tr>
                                                    <td>{{ $key + 1 }}</td>
                                                    <td>{{ $blog->nama_blog }}</td>
                                                    <td>{{ $blog->penulis }}</td>
                                                    <td>{{ Str::limit($blog->deskripsi, 50) }}</td>
                                                    {{-- Tampilkan deskripsi, batasi 50 karakter --}}
                                                    <td>{{ $blog->kategori }}</td> {{-- Tampilkan kategori --}}
                                                    <td>
                                                        @if ($blog->gambar)
                                                            <img src="{{ asset($blog->gambar) }}"
                                                                alt="{{ $blog->nama_blog }}" class="img-thumbnail"
                                                                style="width: 80px; height: auto; object-fit: cover;">
                                                        @else
                                                            Tidak ada gambar
                                                        @endif
                                                    </td>
                                                    <td>{{ $blog->created_at->format('d M Y H:i') }}</td>
                                                    <td>
                                                        <a href="{{ route('admin.blogs.edit', $blog->id) }}"
                                                            class="btn btn-info btn-sm">Edit</a>
                                                        <form action="{{ route('admin.blogs.destroy', $blog->id) }}"
                                                            method="POST" style="display:inline;"
                                                            onsubmit="return confirm('Apakah Anda yakin ingin menghapus blog ini?');">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                class="btn btn-danger btn-sm">Hapus</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    {{-- @endif --}}
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © Minible.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Crafted with <i class="mdi mdi-heart text-danger"></i> by <a
                                    href="https://themesbrand.com/" target="_blank" class="text-reset">Themesbrand</a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

    </div>


    <div class="right-bar">
        <div data-simplebar class="h-100">
            <div class="rightbar-title d-flex align-items-center p-3">

                <h5 class="m-0 me-2">Settings</h5>

                <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                    <i class="mdi mdi-close noti-icon"></i>
                </a>
            </div>

            <hr class="m-0" />

            <div class="p-4">
                <h6 class="mb-3">Layout</h6>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout" id="layout-vertical" value="vertical">
                    <label class="form-check-label" for="layout-vertical">Vertical</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout" id="layout-horizontal"
                        value="horizontal">
                    <label class="form-check-label" for="layout-horizontal">Horizontal</label>
                </div>

                <h6 class="mt-4 mb-3 pt-2">Layout Mode</h6>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-mode" id="layout-mode-light"
                        value="light">
                    <label class="form-check-label" for="layout-mode-light">Light</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-mode" id="layout-mode-dark"
                        value="dark">
                    <label class="form-check-label" for="layout-mode-dark">Dark</label>
                </div>

                <h6 class="mt-4 mb-3 pt-2">Layout Width</h6>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-width" id="layout-width-fuild"
                        value="fuild" onchange="document.body.setAttribute('data-layout-size', 'fluid')">
                    <label class="form-check-label" for="layout-width-fuild">Fluid</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-width" id="layout-width-boxed"
                        value="boxed" onchange="document.body.setAttribute('data-layout-size', 'boxed')">
                    <label class="form-check-label" for="layout-width-boxed">Boxed</label>
                </div>

                <h6 class="mt-4 mb-3 pt-2">Topbar Color</h6>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="topbar-color" id="topbar-color-light"
                        value="light" onchange="document.body.setAttribute('data-topbar', 'light')">
                    <label class="form-check-label" for="topbar-color-light">Light</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="topbar-color" id="topbar-color-dark"
                        value="dark" onchange="document.body.setAttribute('data-topbar', 'dark')">
                    <label class="form-check-label" for="topbar-color-dark">Dark</label>
                </div>

                <h6 class="mt-4 mb-3 pt-2 sidebar-setting">Sidebar Size</h6>

                <div class="form-check sidebar-setting">
                    <input class="form-check-input" type="radio" name="sidebar-size" id="sidebar-size-default"
                        value="default" onchange="document.body.setAttribute('data-sidebar-size', 'lg')">
                    <label class="form-check-label" for="sidebar-size-default">Default</label>
                </div>
                <div class="form-check sidebar-setting">
                    <input class="form-check-input" type="radio" name="sidebar-size" id="sidebar-size-compact"
                        value="compact" onchange="document.body.setAttribute('data-sidebar-size', 'small')">
                    <label class="form-check-label" for="sidebar-size-compact">Compact</label>
                </div>
                <div class="form-check sidebar-setting">
                    <input class="form-check-input" type="radio" name="sidebar-size" id="sidebar-size-small"
                        value="small" onchange="document.body.setAttribute('data-sidebar-size', 'sm')">
                    <label class="form-check-label" for="sidebar-size-small">Small (Icon View)</label>
                </div>

                <h6 class="mt-4 mb-3 pt-2 sidebar-setting">Sidebar Color</h6>

                <div class="form-check sidebar-setting">
                    <input class="form-check-input" type="radio" name="sidebar-color" id="sidebar-color-light"
                        value="light" onchange="document.body.setAttribute('data-sidebar', 'light')">
                    <label class="form-check-label" for="sidebar-color-light">Light</label>
                </div>
                <div class="form-check sidebar-setting">
                    <input class="form-check-input" type="radio" name="sidebar-color" id="sidebar-color-dark"
                        value="dark" onchange="document.body.setAttribute('data-sidebar', 'dark')">
                    <label class="form-check-label" for="sidebar-color-dark">Dark</label>
                </div>
                <div class="form-check sidebar-setting">
                    <input class="form-check-input" type="radio" name="sidebar-color" id="sidebar-color-colored"
                        value="colored" onchange="document.body.setAttribute('data-sidebar', 'colored')">
                    <label class="form-check-label" for="sidebar-color-colored">Colored</label>
                </div>

                <h6 class="mt-4 mb-3 pt-2">Direction</h6>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-direction" id="layout-direction-ltr"
                        value="ltr">
                    <label class="form-check-label" for="layout-direction-ltr">LTR</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-direction" id="layout-direction-rtl"
                        value="rtl">
                    <label class="form-check-label" for="layout-direction-rtl">RTL</label>
                </div>

            </div>

        </div>
    </div>

    <div class="rightbar-overlay"></div>

    @include('Admin.LayoutAdmin.scripts')

</body>

</html>

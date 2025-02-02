@extends('admin.layout-admin.main')

@section('internal-css')
    <link rel="stylesheet" href="{{ asset('dashboard-assets/css/custom.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@include('admin.layout-admin.sidebar')

@section('content')
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
        <div class="container-fluid">
            <div class="navbar-wrapper">
                <div class="navbar-toggle d-inline">
                    <button type="button" class="navbar-toggler">
                        <span class="navbar-toggler-bar bar1"></span>
                        <span class="navbar-toggler-bar bar2"></span>
                        <span class="navbar-toggler-bar bar3"></span>
                    </button>
                </div>
                <a class="navbar-brand" href="javascript:void(0)">Tamu Undangan</a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar navbar-kebab"></span>
                <span class="navbar-toggler-bar navbar-kebab"></span>
                <span class="navbar-toggler-bar navbar-kebab"></span>
            </button>
            <div class="collapse navbar-collapse" id="navigation">
                <ul class="navbar-nav ml-auto">
                    <li class="dropdown nav-item">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                            <div class="photo">
                                <img src="{{ asset('dashboard-assets') }}/img/anime3.png" alt="Profile Photo">
                            </div>
                            {{-- <b class="caret d-none d-lg-block d-xl-block"></b> --}}
                            <p class="d-lg-none">
                                Log out
                            </p>
                        </a>
                        <ul class="dropdown-menu dropdown-navbar">
                            <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Log out</a>
                            </li>
                        </ul>
                    </li>
                    <li class="separator d-lg-none"></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="SEARCH">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="tim-icons icon-simple-remove"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Navbar -->

    {{-- Table Content --}}
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Daftar Tamu Undangan</h4>
                        <div class="add-button" data-toggle="modal" data-target="#add-modal">
                            <i class="tim-icons icon-simple-add"></i>
                            Undang tamu
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table tablesorter " id="">
                                <thead class=" text-primary">
                                    <tr>
                                        <th>
                                            Nama
                                        </th>
                                        <th>
                                            Email
                                        </th>
                                        <th>
                                            Institusi
                                        </th>
                                        <th>
                                            URL Undangan
                                        </th>
                                        <th class="text-center">
                                            Status Kehadiran
                                        </th>
                                        <th class="text-center">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tamus as $tamu)
                                        <tr>
                                            <td>
                                                {{ $tamu->name }}
                                            </td>
                                            <td>
                                                @if ($tamu->status == 'proses')
                                                    Belum dikonfirmasi
                                                @else
                                                    {{ $tamu->email }}
                                                @endif
                                            </td>
                                            <td>
                                                {{ $tamu->institusi }}
                                            </td>
                                            <td class="td-links">
                                                <div class="copy-url" data-url="{{ $tamu->url }}">
                                                    <i class="tim-icons icon-link-72"></i>
                                                    <div class="text">
                                                        Copy Url
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="wrap-status">
                                                    @if ($tamu->status == 'proses')
                                                        <div class="stat proses">
                                                            Belum dikonfirmasi
                                                        </div>
                                                    @elseif ($tamu->status == 'dapat_hadir')
                                                        <div class="stat dapat-hadir">
                                                            Dapat Hadir
                                                        </div>
                                                    @elseif ($tamu->status == 'tidak_hadir')
                                                        <div class="stat tidak-hadir">
                                                            Tidak Hadir
                                                        </div>
                                                    @elseif($tamu->status == 'hadir')
                                                        <div class="stat hadir">
                                                            Tamu Hadir
                                                        </div>
                                                    @endif
                                                </div>
                                            </td>
                                            <td class="td-act">
                                                <div class="wrapper-act">
                                                    <div class="wrap-act" data-toggle="modal"
                                                        data-target="#update-modal-{{ $tamu->id }}">

                                                        <div class="act">
                                                            <i class="bi bi-pencil-square"></i>
                                                        </div>
                                                    </div>

                                                    <div class="wrap-act delete-data" data-id="{{ $tamu->id }}">
                                                        <div class="act">
                                                            <i class="bi bi-trash3"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Table Content --}}

    {{-- Modal --}}
    <div class="modal fade" tabindex="-1" id="add-modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    TAMBAH DATA TAMU
                </div>
                <form action="/add-guest" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="wrap-content">
                            <label class="form-label">Nama</label>
                            <input type="text" class="form-control" placeholder="nama lengkap.." name="name">
                        </div>
                        <div class="wrap-content">
                            <label class="form-label">institusi</label>
                            <input type="text" class="form-control" placeholder="Institusi.." name="institusi">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div></div>
                        <button type="submit" class="btn btn-primary">TAMBAH DATA</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @foreach ($tamus as $modal)
        <div class="modal fade" tabindex="-1" id="update-modal-{{ $modal->id }}">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        UPDATE DATA TAMU
                    </div>
                    <form action="/update-guest" method="post">
                        @csrf
                        <div class="modal-body">
                            <div class="wrap-content">
                                <label class="form-label">Nama</label>
                                <input type="hidden" value="{{ $modal->id }}" name="id">
                                <input type="text" class="form-control" placeholder="nama lengkap.." name="name"
                                    value="{{ $modal->name }}">
                            </div>
                            <div class="wrap-content">
                                <label class="form-label">institusi</label>
                                <input type="text" class="form-control" placeholder="Institusi.." name="institusi"
                                    value="{{ $modal->institusi }}">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div></div>
                            <button type="submit" class="btn btn-primary">Kirim Undangan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
    {{-- Modal --}}
@endsection


@section('internal-js')
    @if (session('success'))
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: '{{ session('success') }}',
                    showConfirmButton: false,
                });
            });
        </script>
    @endif
    @if (session('error'))
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                Swal.fire({
                    icon: 'error',
                    title: 'Error!',
                    html: 'Tamu dengan email <span>{{ session('error') }}</span> sudah ada!',
                    showConfirmButton: false,
                });
            });
        </script>
    @endif

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelectorAll(".copy-url").forEach(button => {
                button.addEventListener("click", function() {
                    let url = this.getAttribute("data-url");

                    // Salin URL ke clipboard
                    navigator.clipboard.writeText(url).then(() => {
                        // Tampilkan Toastify
                        Toastify({
                            text: "URL berhasil disalin!",
                            duration: 2000,
                            gravity: "bottom",
                            position: "center",
                            stopOnFocus: true
                        }).showToast();
                    }).catch(err => {
                        console.error("Gagal menyalin: ", err);
                    });
                });
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const deleteButtons = document.querySelectorAll('.delete-data');

            deleteButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const itemId = button.getAttribute('data-id'); // Ambil ID item

                    // Tampilkan SweetAlert konfirmasi
                    Swal.fire({
                        title: 'Apakah Anda yakin?',
                        text: 'Data ini akan dihapus secara permanen!',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonText: 'Ya, hapus!',
                        cancelButtonText: 'Batal',
                        // cancelButtonColor: "#DD6B55",
                        confirmButtonColor: "#e14eca",
                        reverseButtons: true
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // Buat form delete secara dinamis
                            const form = document.createElement('form');
                            form.method = 'POST';
                            form.action = '/delete-guest';

                            // Tambahkan token CSRF untuk melindungi dari serangan CSRF
                            const csrfToken = document.createElement('input');
                            csrfToken.type = 'hidden';
                            csrfToken.name = '_token';
                            csrfToken.value = document.querySelector(
                                'meta[name="csrf-token"]').getAttribute('content');
                            form.appendChild(csrfToken);

                            // Tambahkan input untuk ID item
                            const idInput = document.createElement('input');
                            idInput.type = 'hidden';
                            idInput.name = 'id';
                            idInput.value = itemId;
                            form.appendChild(idInput);

                            // Kirim form
                            document.body.appendChild(form);
                            form.submit();
                        }
                    });
                });
            });
        });
    </script>
@endsection

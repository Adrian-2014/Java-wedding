@extends('layout.main')

@section('title', 'Guest Registration')

@section('internal-css')
    <link rel="stylesheet" href="{{ asset('css/guest-registration.css') }}">
@endsection

<section class="landing-page">
    <div class="wrap-background">
        <img src="{{ asset('images/batik.jpg') }}">
    </div>

    <div class="pengantin-photo" data-aos="fade-up" data-aos-delay="0">
        <img class="main-pengantin" src="{{ asset('images/pengantin.png') }}">
    </div>

    <div class="title">
        <div class="pengantin pria" data-aos="fade-up" data-aos-delay="200">
            Bagus Bripda Anjar
        </div>
        <div class="and" data-aos="fade-up" data-aos-delay="400">
            &
        </div>
        <div class="pengantin wanita" data-aos="fade-up" data-aos-delay="600">
            Ginanjar Murwani
        </div>
    </div>
    <div class="date-time">
        <div class="date" data-aos="fade-up" data-aos-delay="800">
            04 Februari 2025
        </div>
        <div class="time" data-aos="fade-up" data-aos-delay="900">
            09:00 - 13:00 WIB
        </div>
    </div>
    <div class="scroll">
        <a href="#form" data-aos="fade-up" data-aos-delay="1000">
            <i class="bi bi-chevron-down"></i>
        </a>
    </div>

    {{-- ornamen --}}
    <div class="ornamen orn-1">
        <img src="{{ asset('images/kembang.png') }}" data-aos="fade-right" data-aos-delay="1100">
    </div>
    <div class="ornamen orn-2">
        <img src="{{ asset('images/kembang-right.png') }}" data-aos="fade-left" data-aos-delay="1100">
    </div>

    <div class="ornamen orn-3">
        <img src="{{ asset('images/awan-akatsuki.png') }}" data-aos="fade-right" data-aos-delay="1100">
    </div>
    <div class="ornamen orn-4">
        <img src="{{ asset('images/awan-akatsuki-2.png') }}" data-aos="fade-left" data-aos-delay="1100">
    </div>
    {{-- ornamen --}}

</section>

<div class="separation">
    <img src="{{ asset('images/corak jawir.png') }}">
</div>

<section class="form" id="form">
    <div class="form-title">
        <div class="sub-title" data-aos="fade-up">
            SELAMAT DATANG!
        </div>
        <div class="sub-desc" data-aos="fade-up">
            Mohon isi formulir berikut sebelum menghadiri Resepsi Pernikahan kami.
        </div>
    </div>

    <form action="/registrasi" method="POST">
        @csrf
        <div class="for-wrap" data-aos="fade-right">
            <label>Nama Lengkap</label>
            <input type="text" name="name" required>
        </div>
        <div class="for-wrap" data-aos="fade-right">
            <label>Alamat Email</label>
            <input type="email" name="email" required>
        </div>
        <div class="for-submit">
            <button type="submit" data-aos="fade-up">KIRIM FORMULIR</button>
        </div>
    </form>

    <div class="ornamen-star or-one">
        <img src="{{ asset('images/star.png') }}">
    </div>
    <div class="ornamen-star or-two">
        <img src="{{ asset('images/star.png') }}">
    </div>
    <div class="ornamen-star or-three">
        <img src="{{ asset('images/star.png') }}">
    </div>
</section>

@section('internal-js')
    <script>
        AOS.init({
            duration: 1000, // Durasi animasi dalam milidetik
            easing: 'ease', // Fungsi easing animasi
            once: true, // Apakah animasi hanya dijalankan sekali
        });
    </script>

    @if (session('success'))
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                Swal.fire({
                    icon: 'success',
                    title: 'Registrasi Berhasil!',
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
                    title: 'Registrasi Gagal!',
                    text: '{{ session('error') }}',
                    showConfirmButton: false,
                });
            });
        </script>
    @endif
@endsection

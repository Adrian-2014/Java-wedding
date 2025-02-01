@extends('layout.main')

@section('title', 'Guest Invitation')

@section('internal-css')
    <link rel="stylesheet" href="{{ asset('css/guest-invitation.css') }}">
@endsection

<section class="landing-page">
    <div class="wrap-background">
        <img src="{{ asset('images/batik.jpg') }}">
    </div>


    <div class="pengantin-photo" data-aos="fade-up">
        <img class="main-pengantin" src="{{ asset('images/pengantin.png') }}">
    </div>

    <div class="title">
        <div class="pengantin pria" data-aos="fade-up" data-aos-delay="300">
            Bagus Bripda Anjar
        </div>
        <div class="and" data-aos="fade-up" data-aos-delay="500">
            &
        </div>
        <div class="pengantin wanita" data-aos="fade-up" data-aos-delay="700">
            Ginanjar Murwani
        </div>
    </div>
    <div class="scroll">
        <a href="#form" data-aos="fade-up" data-aos-delay="1000">
            KONFIRMASI KEHADIRAN
        </a>
    </div>

    {{-- ornamen --}}
    <div class="ornamen jawir-1">
        <img src="{{ asset('images/gunungan-jawir.png') }}" data-aos="fade-up" data-aos-delay="1000"
            data-aos-offset="75">
    </div>
    <div class="ornamen jawir-2">
        <img src="{{ asset('images/gunungan-jawir.png') }}" data-aos="fade-up" data-aos-delay="1000"
            data-aos-offset="75">
    </div>

    {{-- ornamen --}}

</section>

<div class="separation" data-aos="fade-up">
    <img src="{{ asset('images/corak jawir.png') }}">
</div>

<section class="acara-section">

    <div class="sub-content hope">
        <div class="for-img" data-aos="fade-right">
            <img src="{{ asset('images/married-img.jpg') }}">
        </div>
        <div class="text-content">
            <div class="title" data-aos="fade-up" data-aos-delay="0">Kami Menunggu Kehadiranmu!</div>
            <div class="sub-title" data-aos="fade-up" data-aos-delay="250">04 Februari 2025</div>
            <div class="isi" data-aos="fade-up" data-aos-delay="500">
                Kami mengapresiasi kedatangan anda di acara kami.
            </div>
        </div>

        {{-- ornament --}}
        <div class="ornament-wrap orn-1">
            <img src="{{ asset('images/kembang-right.png') }}" data-aos="fade-left">
        </div>
        <div class="ornament-wrap orn-2">
            <img src="{{ asset('images/corak jawir.png') }}" data-aos="fade-right">
        </div>
        {{-- ornament --}}
    </div>

    <div class="sub-content loc">
        <div class="text-content">
            <div class="title" data-aos="fade-up" data-aos-delay="0">Lokasi</div>
            <div class="sub-title" data-aos="fade-up" data-aos-delay="250">SMK 17 Agustus 1945 Surabaya</div>
            <div class="isi" data-aos="fade-up" data-aos-delay="500">
                Siti inggil Restaurant menjadi tempat dilaksanakannya acara kami.
            </div>
        </div>
        <div class="for-img" data-aos="fade-left">
            <img src="{{ asset('images/wedding-img.jpg') }}">
        </div>

        {{-- ornament --}}
        <div class="ornament-wrap orn-1">
            <img src="{{ asset('images/kembang.png') }}" data-aos="fade-right">
        </div>
        <div class="ornament-wrap orn-2">
            <img src="{{ asset('images/corak jawir.png') }}" data-aos="fade-left">
        </div>
        {{-- ornament --}}
    </div>

    <div class="rundown">
        <div class="title" data-aos="fade">Rundown Acara</div>

        <div class="list">
            <div class="item" data-aos="fade-up">
                <div class="time">
                    09:00
                </div>
                <div class="strip"></div>
                <div class="function">
                    Registrasi Tamu & Welcome Drink.
                </div>
            </div>
            <div class="item" data-aos="fade-up">
                <div class="time">
                    10:00
                </div>
                <div class="strip"></div>
                <div class="function">
                    Pembukaan Acara.
                </div>
            </div>
            <div class="item" data-aos="fade-up">
                <div class="time">
                    10:15
                </div>
                <div class="strip"></div>
                <div class="function">
                    Pembukaan Gedang Rojo.
                </div>
            </div>
            <div class="item" data-aos="fade-up">
                <div class="time">
                    10:25
                </div>
                <div class="strip"></div>
                <div class="function">
                    Tukar Kembang Mayang.
                </div>
            </div>
            <div class="item" data-aos="fade-up">
                <div class="time">
                    10:35
                </div>
                <div class="strip"></div>
                <div class="function">
                    Upacara Panggih.
                </div>
            </div>
            <div class="item" data-aos="fade-up">
                <div class="time">
                    10:45
                </div>
                <div class="strip"></div>
                <div class="function">
                    Kacar Kucur.
                </div>
            </div>
            <div class="item" data-aos="fade-up">
                <div class="time">
                    10:55
                </div>
                <div class="strip"></div>
                <div class="function">
                    Upacara Dulangan.
                </div>
            </div>
            <div class="item" data-aos="fade-up">
                <div class="time">
                    11:05
                </div>
                <div class="strip"></div>
                <div class="function">
                    Sungkeman.
                </div>
            </div>
            <div class="item" data-aos="fade-up">
                <div class="time">
                    11:15
                </div>
                <div class="strip"></div>
                <div class="function">
                    Sambutan dari Pengantin.
                </div>
            </div>
            <div class="item" data-aos="fade-up">
                <div class="time">
                    11:25
                </div>
                <div class="strip"></div>
                <div class="function">
                    Live Cooking & Makan Siang.
                </div>
            </div>
        </div>
    </div>

</section>

<div class="separation" data-aos="fade">
    <img src="{{ asset('images/corak jawir.png') }}">
</div>

<section class="form" id="form">
    <div class="form-title">
        <div class="sub-title" data-aos="fade-up">
            SELAMAT DATANG!
        </div>
        <div class="sub-desc" data-aos="fade-up">
            Konfirmasi kehadrian anda dengan mengisi Formulir dibawah.
        </div>
    </div>

    <form action="/konfirmasi" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{ $guest->id }}">
        <input type="hidden" name="name" value="{{ $guest->name }}">

        <div class="for-wrap" data-aos="fade-right">
            <label>Alamat Email</label>
            <input type="email" name="email" required>
        </div>
        <div class="for-wrap" data-aos="fade-right">
            <label>Apakah anda berkenan Hadir?</label>
            <div class="wrapping">
                <div class="radios">
                    <input type="radio" class="form-check-input" name="status" value="dapat_hadir" required>
                    <span>Ya, Saya berkenan untuk hadir</span>
                </div>
                <div class="radios">
                    <input type="radio" class="form-check-input" name="status" value="tidak_hadir" required>
                    <span>Tidak, Saya tidak berkenan untuk hadir</span>
                </div>
            </div>
        </div>

        <div class="for-submit" data-aos="fade-up" data-aos-offset="75">
            <button type="submit">KIRIM FORMULIR</button>
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
            once: true,
            offset: 100,
        });
    </script>

    @if (session('success'))
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil!',
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
                    title: 'Gagal!',
                    text: '{{ session('error') }}',
                    showConfirmButton: false,
                });
            });
        </script>
    @endif
@endsection

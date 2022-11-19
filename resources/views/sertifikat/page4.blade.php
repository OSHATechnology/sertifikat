@extends('layouts.index')
@section('title', 'Sertifikat Magenta BUMN Page 4')
@section('content')

    <div class="container">
        <section class="logo-container">
            <div class="d-flex justify-content-center align-items-center">
                <div><img src="assets/images/magenta1.png" alt="logo" class="logo" /></div>
                <div><img src="assets/images/magenta2.png" alt="logo" class="logo" /></div>
                <div><img src="assets/images/magenta3.png" alt="logo" class="logo" /></div>
                <div><img src="assets/images/magenta4.png" alt="logo" class="logo" /></div>
                <div><img src="assets/images/magenta5.png" alt="logo" class="logo" /></div>
            </div>
        </section>
        <section class="title-container">
            <div class="d-flex flex-column align-items-center">
                <h1 class="title">SERTIFIKAT</h1>
                <span class="subtitle">Nomor : 12345678910</span>
            </div>
        </section>
        <section class="content-container">
            <div class="d-flex flex-column align-items-center">
                <h5 class='given-to'>Diberikan Kepada</h5>
                <h2 class="name">Bagus Adi Gautama</h2>
                <p class="content-title">Telah Melaksanakan</p>
                <p class="content">
                    MAGANG GENERASI BERTALENTA BUMN (MAGENTA BUMN) di <b>PT Telkom Indonesia (Persero) Tbk</b> pada posisi
                    <b>UI Designer</b>, mulai dari tanggal 21 Oktober 2022 sampai tanggal 21 Januari 2023 dengan hasil
                    <b>A</b>
                </p>
                <p class="content-end mt-3 mb-3">Jakarta, 10 November 2022</p>
            </div>
        </section>
        <section class="footer-container">
            <div class="d-flex justify-content-center">
                <div class="d-flex flex-column align-items-center">
                    <p class="from">Kementrian BUMN</p>
                    <p class="who">Erick Thohir</p>
                    <p class="role">Menteri BUMN</p>
                </div>
            </div>
        </section>
    </div>
    <section class="code">
        <div class="d-flex flex-column align-items-end">
            <span class='qr-code-text'>QR Code Verifikasi Sertifikat</span>
            <img src="assets/images/qr-code.png" alt="qr-code" class='qr-code' />
        </div>
    </section>

@endsection

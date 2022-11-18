@extends('layouts.index')
@section('title','Sertifikat Magenta BUMN Page 1')
@section('content')

<div class="container">
    <section class="logo-container">
        <div class="d-flex gap-5 justify-content-center">
            <div><img src="assets/images/magenta1.png" alt="magenta1" class="logo"></div>
            <div><img src="assets/images/magenta2.png" alt="magenta2" class="logo"></div>
            <div><img src="assets/images/magenta3.png" alt="magenta3" class="logo"></div>
            <div><img src="assets/images/magenta4.png" alt="magenta4" class="logo"></div>
            <div><img src="assets/images/magenta5.png" alt="magenta5" class="logo"></div>
        </div>
    </section>
    <section class="title-container mt-3 mb-5">
        <div class="d-flex flex-column align-items-center">
            <h3 class="title">SERTIFIKAT</h3>
            <span>Nomor : 12345678910</span>
        </div>
    </section>
    <section class="content-container">
        <div class="d-flex flex-column align-items-center">
            <h5>Diberikan Kepada :</h5>
            <h2 class="name w-100">Bagus Adi Gautama</h2>
            <p class="content-title">Telah Melaksanakan :</p>
            <p class="content">MAGANG GENERASI BERTALENTA BUMN (MAGENTA BUMN) di <b>PT Telkom Indonesia (Persero) Tbk</b> pada posisi <b>UI Designer</b>, mulai dari tanggal 21 Oktober 2022 sampai tanggal 21 Januari 2023 dengan hasil <b>A</b></p>
            <p class="content-end mt-3">Jakarta, 10 November 2022</p>
        </div>
    </section>
    <section class="footer-container">
        <div class="d-flex justify-content-between">
            <div class="d-flex flex-column align-items-center">
                <p class="from">Kementrian BUMN</p>
                <p class="who">Erick Thohir</p>
                <p class="role">Menteri BUMN</p>
            </div>
            <div class="d-flex flex-column align-items-center">
                <p class="from">FHCI</p>
                <p class="who">Alexandra Askandar</p>
                <p class="role">Ketua Umum</p>
            </div>
        </div>
    </section>
</div>
<section class="code">
    <img src="/assets/images/qr-code.png" alt="qr-code">
</section>

@endsection
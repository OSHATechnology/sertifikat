@extends('layouts.index')
@section('title', 'Sertifikat Magenta BUMN Page 1')
@section('content')


<div class="container">
    <section class="header-container">
        <div class="header">
            <h3 class="title">Daftar Nilai Magang Generasi Bertalenta</h3>
            <div class="logo-container">
                <img src="assets/images/magenta1.png" alt="magenta1" class="logo">
                <img src="assets/images/magenta2.png" alt="magenta2" class="logo">
                <img src="assets/images/magenta3.png" alt="magenta3" class="logo">
                <img src="assets/images/magenta4.png" alt="magenta4" class="logo">
                <img src="assets/images/magenta5.png" alt="magenta5" class="logo">
            </div>
        </div>
        <h3 class="company">PT Telkom Indonesia (Persero) Tbk</h3>
    </section>
    <section class="profile">
        <div class="profile-name">
            <div class="name">
                <h5 class="question">Nama Mahasiswa
                    <h5 class="colon">:</h5>
                    <h5 class="answername">Bagus Adi Gautama</h5>
                </h5>
                <h5 class="question">NIM
                    <h5 class="colon">:</h5>
                    <h5 class="answernim">1234567890</h5>
                </h5>
            </div>
            <div class="nim">
                <h5 class="question">Fakultas/Jurusan
                    <h5 class="colon">:</h5>
                    <h5 class="answer">Informatika/S1 Informatika</h5>
                </h5>
                <h5 class="question">Perguruan Tinggi
                    <h5 class="colon">:</h5>
                    <h5 class="answer">Universitas Telkom</h5>
                </h5>
                <h5 class="question">Posisi Magang
                    <h5 class="colon">:</h5>
                    <h5 class="answer">UI Designer</h5>
                </h5>
            </div>
        </div>
        <div class="profile-univ"></div>
        {{-- <div class="d-flex flex-column align-items-left">
            <table>
                <tr>
                    <td>Nama Mahasiswa    : Bagus Adi Gautama</td>
                    <td>Fakultas/Jurusan  : Informatika/S1 Informatika</td>
                </tr>
                <tr>
                    <td>NIM               : 1234567890</td>
                    <td>Perguruan Tinggi  : Universitas Telkom</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Posisi Magang     : UI Designer</td>
                </tr>
            </table>
        </div> --}}
    </section>
    {{-- <section class="content-container">
        <div class="d-flex flex-column align-items-center">
            <table>
                <tr>
                    <th rowspan="2">No</th>
                    <th rowspan="2">Komponen</th>
                    <th colspan="2">Daftar Isi</th>
                </tr>
                <tr>
                    <th>Angka</th>
                    <th>Huruf</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Integritas (Etika, Moral, dan Kesungguhan)</td>
                    <td>89</td>
                    <td><i>Delapan puluh sembilan</i></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Ketepatan waktu dalam bekerja</td>
                    <td>80</td>
                    <td><i>Delapan puluh</i></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Keahlian berdasarkan bidang ilmu</td>
                    <td>90</td>
                    <td><i>Sembilan puluh</i></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Kerjasama dalam tim</td>
                    <td>88</td>
                    <td><i>Delapan puluh delapan</i></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Komunikasi</td>
                    <td>86</td>
                    <td><i>Delapan puluh enam</i></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Penggunaan teknologi informasi</td>
                    <td>87</td>
                    <td><i>Delapan puluh tujuh</i></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Pengembangan diri</td>
                    <td>90</td>
                    <td><i>Sembilan puluh</i></td>
                </tr>
                <tr>
                    <th colspan="2">Total Nilai Pengembangan (A)</th>
                    <td>610</td>
                    <td></td>
                </tr>
                <tr>
                    <th colspan="2">Banyak Komponen (B)</th>
                    <td>7</td>
                    <td></td>
                </tr>
                <tr>
                    <th colspan="2">Rata - Rata Nilai (Q=A/B)</th>
                    <td>87</td>
                    <td></td>
                </tr>
            </table>
        </div>
    </section>
    <section class="footer-container">
        <div class="row">
            <div class="d-flex justify-content-between">
                <div class="d-flex flex-column align-items-center">
                    <p>Kriteria Total Nilai Pembimbing Perusahaan</p>
                    <table>
                        <tr>
                            <td>86-100  : Sangat Memuaskan (A)</td>
                            <td>71-85   : Memuaskan (B)</td>
                            <td><=70    : Cukup Memuaskan (C)</td>
                        </tr>
                    </table>
                </div>
                <div class="d-flex flex-column align-items-center">
                    <p class="from">Jakarta, 10 November 2022</p>
                    <p class="who">Pembimbing</p>
                    <p class="role">Andrian</p>
                </div>
                <div class="d-flex flex-column align-items-center code">
                    <p>Sertifikat ini dapat diverifikasi pada QR Code berikut</p>
                    <img src="/assets/images/qr-code.png" alt="qr-code">
                </div>
            </div>
        </div>
    </section> --}}
</div>
                
@endsection

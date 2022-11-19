@extends('layouts.index')
@section('title', 'Sertifikat Magenta BUMN Page 3')
@section('content')


    <div class="container">
        <section class="header-container">
            <div class="header">
                <h3 class="header-title w-50">Daftar Nilai Magang Generasi Bertalenta PT Telkom Indonesia (Persero) Tbk</h3>
                <div class="logo-container">
                    <img src="assets/images/magenta1.png" alt="magenta1" class="header-logo">
                    <img src="assets/images/magenta2.png" alt="magenta2" class="header-logo">
                    <img src="assets/images/magenta3.png" alt="magenta3" class="header-logo">
                    <img src="assets/images/magenta4.png" alt="magenta4" class="header-logo">
                    <img src="assets/images/magenta5.png" alt="magenta5" class="header-logo">
                </div>
            </div>
        </section>
        <section class="profile mb-3">
            <div class="profile-container">
                <div class="profile-univ">
                    <div class="d-flex align-items-left">
                        <div class="w-50">
                            <table>
                                <tr>
                                    <td>Nama Mahasiswa</td>
                                    <td>&nbsp;&nbsp;&nbsp;:&nbsp;</td>
                                    <td>Bagus Adi Gautama</td>
                                </tr>
                                <tr>
                                    <td>NIM</td>
                                    <td>&nbsp;&nbsp;&nbsp;:&nbsp;</td>
                                    <td>1234567890</td>
                                </tr>
                            </table>
                        </div>
                        <div class="w-50">
                            <table>
                                <tr>
                                    <td>Fakultas/Jurusan</td>
                                    <td>&nbsp;&nbsp;&nbsp;:&nbsp;</td>
                                    <td>Informatika/S1 Informatika</td>
                                </tr>
                                <tr>
                                    <td>Perguruan Tinggi</td>
                                    <td>&nbsp;&nbsp;&nbsp;:&nbsp;</td>
                                    <td>Universitas Telkom</td>
                                </tr>
                                <tr>
                                    <td>Posisi Magang</td>
                                    <td>&nbsp;&nbsp;&nbsp;:&nbsp;</td>
                                    <td>UI Designer</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
        </section>
        <section class="content-container">
            <table class="w-100 table table-bordered border-dark table-centered">
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
                    <td class="content-summary">610</td>
                    <td></td>
                </tr>
                <tr>
                    <th colspan="2">Banyak Komponen (B)</th>
                    <td class="content-summary">7</td>
                    <td></td>
                </tr>
                <tr>
                    <th colspan="2">Rata - Rata Nilai (Q=A/B)</th>
                    <td class="content-summary">87</td>
                    <td class="content-summary">Delapan puluh tujuh</td>
                </tr>
            </table>
        </section>
        <section class="w-100 mt-3">
            <div class="row align-items-start">
                <div class="col">
                    <div class="d-flex flex-column align-items-start">
                        <p class="m-0 pb-3">Kriteria Total Nilai Pembimbing Perusahaan</p>
                        <table>
                            <tr>
                                <td>86-100 : Sangat Memuaskan (A)</td>
                            </tr>
                            <tr>
                                <td>71-85 : Memuaskan (B)</td>
                            </tr>
                            <tr>
                                <td>
                                    <=70 : Cukup Memuaskan (C)</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col">
                    <div class="d-flex flex-column align-items-center">
                        <p class="place-1">Jakarta, 10 November 2022</p>
                        <p class="role-1">Pembimbing</p>
                        <p class="who-1">Andrian</p>
                    </div>
                </div>
                <div class="col align-self-center">
                    <div class="d-flex align-items-center justify-content-end">
                        <p class="qr-code-text-1 me-3">Sertifikat ini dapat diverifikasi pada QR Code berikut</p>
                        <img src="/assets/images/qr-code.png" alt="qr-code" class="qr-code">
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection

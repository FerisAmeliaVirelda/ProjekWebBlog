@extends('layouts.app')
@section('content')
    <div id="carouselExampleCaptions" class="carousel slide mx-auto p-4" style="width: 1100px;">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/stiker.png" style="x-index-1" class="d-block w-100" alt="stiker">
                <div class="carousel-caption d-none d-md-block text-black">
                    <h5>Hati-hati! Bikin Stiker Whatsapp Pakai Foto Orang Bisa Dipenjara & Denda Rp 2 Miliar</h5>
                    <p>WhatsApp adalah aplikasi yang sangat populer dengan berbagai fitur menarik, salah satunya adalah
                        stiker WhatsApp. Stiker ini memungkinkan...</p>
                    <a href="/stiker" class="btn btn-outline-dark" tabindex="-1" role="button" aria-disabled="true">Learn
                        More</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/docs.png" class="d-block w-100" alt="docs">
                <div class="carousel-caption d-none d-md-block text-black">
                    <h5>Google Docs Sempat Kena Blokir, Kominfo Beri Penjelasan</h5>
                    <p>Pengguna Google Docs di Indonesia baru-baru ini mengalami masalah akses ke layanan tersebut. Beberapa
                        pengguna mengeluhkan masalah ini di media sosial seperti Twitter. Keluhan men...</p>
                    <a href="/docs" class="btn btn-outline-dark" tabindex="-1" role="button" aria-disabled="true">Learn
                        More</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/kereta.png" class="d-block w-100" alt="kereta">
                <div class="carousel-caption d-none d-md-block text-black">
                    <h5>Kereta Cepat Jakarta-Bandung Resmi Dinamai 'Whoosh', Ini Artinya</h5>
                    <p>Pemerintah telah mengumumkan nama baru untuk Kereta Cepat Jakarta-Bandung (KCJB), yaitu "Whoosh."
                        Pengumuman resmi ini dibuat dalam Press Conference Kandidat Nama dan Logo Kereta Cepat Indonesia
                        pada Kamis, 21 September 2023. Presiden Joko Widodo, bersama... </p>
                    <a href="/kereta" class="btn btn-outline-dark" tabindex="-1" role="button" aria-disabled="true">Learn
                        More</a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="card mb-3 me-2 bg-body-tertiary">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="img/hallow.png" class="img-fluid rounded-start" alt="hallowyellow">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">HaloYelow, Solusi Digital Contact Center Dengan Fitur CRM & Tanpa
                                    Nomor
                                    Telepon</h5>
                                <a href="/yellow" class="btn btn-outline-dark" tabindex="-1" role="button"
                                    aria-disabled="true">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card mb-3 me-2 bg-body-tertiary">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="img/hallodoc1.png" class="img-fluid rounded-start" alt="hallodoc">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Perjuangan Jonathan Sudharta Membangun Halodoc, Gagal Hingga 200 Kali
                                </h5>
                                <a href="halodoc" class="btn btn-outline-dark" tabindex="-1" role="button"
                                    aria-disabled="true">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="card mb-3 me-2 bg-body-tertiary">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="img/mark.png" class="img-fluid rounded-start" alt="mark">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Mark Zuckerberg Berencana Musnahkan Penyakit Manusia Pakai AI,
                                    Begini Caranya</h5>
                                <a href="/mark" class="btn btn-outline-dark" tabindex="-1" role="button"
                                    aria-disabled="true">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card mb-3 me-2 bg-body-tertiary">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="img/tiktokshop.png" class="img-fluid rounded-start" alt="tiktok">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">TikTok Buka Suara Soal Platform Medsos Dilarang Jualan</h5>
                                <a href="#" class="btn btn-outline-dark" tabindex="-1" role="button"
                                    aria-disabled="true">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="card mb-3 me-2 bg-body-tertiary">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="img/whatsapp.png" class="img-fluid rounded-start" alt="whatsapp">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Mudah dan Praktis! Ini 2 Cara Backup Kontak WhatsApp pada HP Android
                                </h5>
                                <a href="#" class="btn btn-outline-dark" tabindex="-1" role="button"
                                    aria-disabled="true">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card mb-3 me-2 bg-body-tertiary">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="img/ai.png" class="img-fluid rounded-start" alt="ai">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Perkembangan Teknologi Kecerdasan Buatan (AI) dalam Bisnis</h5>
                                <a href="#" class="btn btn-outline-dark" tabindex="-1" role="button"
                                    aria-disabled="true">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 

    <div class="container text-center mb-4">
        <div class="row">
            <div class="col">
                <div class="card bg-body-tertiary" style="width: 21.8rem;">
                    <img src="img/iphone.png" class="card-img-top" alt="iphone">
                    <div class="card-body">
                        <h5 class="card-title">Cara Hitung Pajak dan Daftar IMEI Jika Ingin Beli iPhone 15 di Luar Negeri
                        </h5>
                        <br>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card bg-body-tertiary" style="width: 21.8rem;">
                    <img src="img/tekAI.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Apa Itu Teknologi AI dan Bagaimana Itu Mengubah Dunia Kita</h5>
                        <br>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card bg-body-tertiary" style="width: 21.8rem;">
                    <img src="img/business.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">WhatsApp Business Luncurkan Fitur Baru “Flows”, Bisa Belanja Langsung di WA
                        </h5>
                        <br>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

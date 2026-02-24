@extends('layouts.app')

@section('content')
    <main class="container py-4">

        {{-- Header --}}
        <header class="border-bottom pb-3 mb-4">
            <div class="row align-items-center">
                <div class="col">
                    <h1 class="h3 fw-bold mb-0">Berita RS Azalia</h1>
                    <p class="text-muted mb-0">Informasi terbaru seputar layanan, kegiatan, dan edukasi kesehatan.</p>
                </div>
                <div class="col-auto">
                    <a href="#daftar-berita" class="btn btn-primary fw-bold">Lihat Berita</a>
                </div>
            </div>
        </header>

        {{-- Featured / Headline --}}
        <section class="p-4 p-md-5 mb-4 rounded bg-light">
            <div class="row align-items-center g-4">
                <div class="col-md-7">
                    <h2 class="fw-bold">Headline: Layanan Baru & Peningkatan Fasilitas</h2>
                    <p class="lead mb-3">
                        RS Azalia terus meningkatkan kualitas layanan untuk kenyamanan pasien dan keluarga.
                    </p>
                    <a href="#" class="fw-bold text-decoration-none">Baca selengkapnya →</a>
                </div>
                <div class="col-md-5">
                    <img class="img-fluid rounded" src="https://via.placeholder.com/600x360" alt="Headline Berita">
                </div>
            </div>
        </section>

        <div class="row g-5">
            {{-- Konten Berita --}}
            <div class="col-md-8" id="daftar-berita">

                <h3 class="fw-bold mb-3">Berita Terbaru</h3>

                {{-- Card list berita --}}
                <article class="card mb-4 shadow-sm">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="https://via.placeholder.com/500x350"
                                class="img-fluid h-100 w-100 object-fit-cover rounded-start" alt="Berita 1">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <small class="text-muted">15 Feb 2026 • Kegiatan</small>
                                <h4 class="card-title fw-bold mt-1">Seminar Kesehatan Gratis untuk Masyarakat</h4>
                                <p class="card-text text-muted mb-3">
                                    RS Azalia mengadakan seminar edukasi kesehatan dengan narasumber dokter spesialis.
                                </p>
                                <a href="#" class="btn btn-outline-primary fw-bold">Baca</a>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="card mb-4 shadow-sm">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="https://via.placeholder.com/500x350"
                                class="img-fluid h-100 w-100 object-fit-cover rounded-start" alt="Berita 2">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <small class="text-muted">10 Feb 2026 • Layanan</small>
                                <h4 class="card-title fw-bold mt-1">Pelayanan Poli Diperluas pada Jam Tertentu</h4>
                                <p class="card-text text-muted mb-3">
                                    Penyesuaian jadwal layanan untuk memudahkan pasien melakukan konsultasi.
                                </p>
                                <a href="#" class="btn btn-outline-primary fw-bold">Baca</a>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="card mb-4 shadow-sm">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="https://via.placeholder.com/500x350"
                                class="img-fluid h-100 w-100 object-fit-cover rounded-start" alt="Berita 3">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <small class="text-muted">02 Feb 2026 • Edukasi</small>
                                <h4 class="card-title fw-bold mt-1">Tips Menjaga Imunitas di Musim Hujan</h4>
                                <p class="card-text text-muted mb-3">
                                    Edukasi singkat untuk membantu keluarga tetap sehat dan waspada penyakit musiman.
                                </p>
                                <a href="#" class="btn btn-outline-primary fw-bold">Baca</a>
                            </div>
                        </div>
                    </div>
                </article>

                {{-- Pagination (dummy) --}}
                <nav aria-label="Pagination berita">
                    <ul class="pagination">
                        <li class="page-item disabled"><span class="page-link">Sebelumnya</span></li>
                        <li class="page-item active"><span class="page-link">1</span></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">Berikutnya</a></li>
                    </ul>
                </nav>
            </div>

            {{-- Sidebar --}}
            <div class="col-md-4">
                <div class="position-sticky" style="top: 2rem;">

                    <div class="p-4 mb-3 bg-light rounded">
                        <h4 class="fw-bold">Tentang Berita</h4>
                        <p class="mb-0 text-muted">
                            Halaman ini memuat update layanan, jadwal kegiatan, dan edukasi kesehatan dari RS Azalia.
                        </p>
                    </div>

                    <div class="p-4">
                        <h4 class="fw-bold">Kategori</h4>
                        <ol class="list-unstyled mb-0">
                            <li><a href="#" class="text-decoration-none">Kegiatan</a></li>
                            <li><a href="#" class="text-decoration-none">Layanan</a></li>
                            <li><a href="#" class="text-decoration-none">Edukasi</a></li>
                            <li><a href="#" class="text-decoration-none">Pengumuman</a></li>
                        </ol>
                    </div>

                    <div class="p-4">
                        <h4 class="fw-bold">Arsip</h4>
                        <ol class="list-unstyled mb-0">
                            <li><a href="#" class="text-decoration-none">Februari 2026</a></li>
                            <li><a href="#" class="text-decoration-none">Januari 2026</a></li>
                            <li><a href="#" class="text-decoration-none">Desember 2025</a></li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
    </main>
@endsection

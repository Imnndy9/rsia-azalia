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

            @if ($headline)
                <h2 class="fw-bold">{{ $headline->title }}</h2>

                <p class="lead mb-3">
                    {{ $headline->excerpt ?? \Illuminate\Support\Str::limit(strip_tags($headline->content), 140) }}
                </p>

                <a href="{{ route('news', $headline->slug) }}" class="fw-bold text-decoration-none">
                    Baca selengkapnya →
                </a>
            @else
                <h2 class="fw-bold">Headline</h2>
                <p class="lead mb-3">Belum ada headline yang dipilih.</p>
            @endif

        </div>

        <div class="col-md-5">
            @if ($headline && $headline->image)
                <img class="img-fluid rounded" src="{{ asset('storage/' . $headline->image) }}" alt="{{ $headline->title }}">
            @else
                <img class="img-fluid rounded" src="https://via.placeholder.com/600x360" alt="Headline Berita">
            @endif
        </div>
    </div>
</section>

        <div class="row g-5">
            {{-- Konten Berita --}}
            <div class="col-md-8" id="daftar-berita">

                <h3 class="fw-bold mb-3">Berita Terbaru</h3>

                {{-- Card list berita (dinamis dari DB) --}}
{{-- Card list berita --}}
@if ($news->count())
    @foreach ($news as $item)
        <article class="card mb-4 shadow-sm">
            <div class="row g-0">
                <div class="col-md-4">
                    <img
                        src="{{ $item->image ? asset('storage/' . $item->image) : 'https://via.placeholder.com/500x350' }}"
                        class="img-fluid h-100 w-100 object-fit-cover rounded-start"
                        alt="{{ $item->title }}"
                    >
                </div>

                <div class="col-md-8">
                    <div class="card-body">
                        <small class="text-muted">
                            {{ optional($item->published_at)->format('d M Y') ?? '-' }}
                            • {{ $item->category ?? 'Umum' }}
                        </small>

                        <h4 class="card-title fw-bold mt-1">{{ $item->title }}</h4>

                        <p class="card-text text-muted mb-3">
                            {{ $item->excerpt ?? \Illuminate\Support\Str::limit(strip_tags($item->content), 120) }}
                        </p>

                        <a href="{{ route('news.show', $item->slug) }}" class="btn btn-outline-primary fw-bold">
                        Baca
                        </a>
                    </div>
                </div>
            </div>
        </article>
    @endforeach
@else
    <div class="alert alert-warning">Belum ada berita.</div>
@endif

                {{-- Pagination (dummy) --}}
                <div class="mt-3">
    {{ $news->links() }}
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

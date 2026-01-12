<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'RSIA AZALIA')</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
 <style>
  .nav-shadow { box-shadow: 0 8px 30px rgba(0,0,0,.06); }
  .btn-round { border-radius: 999px; }

  /* background supaya tidak polos */
  body{
    background: radial-gradient(circle at 20% 0%, rgba(16,185,129,.10), transparent 35%),
                radial-gradient(circle at 80% 10%, rgba(59,130,246,.10), transparent 40%),
                #f8fafc;
  }

  /* card lebih halus */
  .card-soft{
    border: 1px solid rgba(0,0,0,.08);
    border-radius: 18px;
    background: rgba(255,255,255,.92);
    backdrop-filter: blur(6px);
  }

  /* section spacing */
  .section{
    padding: 48px 0;
  }
</style>
</head>
<body>

@php
  $waNumber = config('app.hospital_wa');
  $waDefaultText = config('app.hospital_wa_default_text');

  // link WA default (untuk tombol umum)
  $waLink = "https://wa.me/$waNumber?text=" . urlencode($waDefaultText);

  // fungsi kecil untuk bikin link WA dengan teks custom
  $wa = function(string $text) use ($waNumber) {
      return "https://wa.me/$waNumber?text=" . urlencode($text);
  };
@endphp


<nav class="navbar navbar-expand-lg bg-white sticky-top nav-shadow">
  <div class="container py-2">
    <a class="navbar-brand fw-bold" href="{{ route('home') }}">
      RSIA AZALIA <div class="small text-muted fw-normal" style="margin-top:-2px;">Rumah Sakit Ibu & Anak</div>
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navMenu">
      <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-1">
        <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Beranda</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">Tentang</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('services') }}">Layanan</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('doctors') }}">Dokter</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Kontak</a></li>
        <li class="nav-item ms-lg-2 mt-2 mt-lg-0">
          <a class="btn btn-success btn-sm btn-round" target="_blank" rel="noopener" href="{{ $waLink }}">
            Janji Temu (WA)
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<main class="container my-4">
  @yield('content')
</main>

<footer class="border-top py-4 mt-5">
  <div class="container">
    <div class="text-muted small">© {{ date('Y') }} RSIA AZALIA</div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

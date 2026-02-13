{{-- 1-2 Memberitahu browser halaman ini menggunakan HTML 5 & Bahasa Dokumen indonesia --}}
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
    background: rgba(255, 255, 255, 0.76);
    backdrop-filter: blur(6px);
    }

    /* section spacing dari Card */
   .section{
    padding: 48px 0;
    }

  </style>

</head>

<body>

  {{-- Sintaks untuk mengambil data Navbar dari partials --}}
  @include('layouts.partials.navbar')

  <main class="container my-3">
    @yield('content')
  </main>

  {{-- Sintaks mengambil data Footbar dari Partials --}}
  @include('layouts.partials.footbar')

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

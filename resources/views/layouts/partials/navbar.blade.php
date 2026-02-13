{{-- Mengambil Nomor Telepon Untuk WA --}}
@php
  $waNumber = config('app.hospital_wa');
  $waDefaultText = config('app.hospital_wa_default_text');

  $waLink = $waNumber
      ? "https://wa.me/$waNumber?text=" . urlencode($waDefaultText)
      : null;
@endphp


{{-- Start - Untuk Membuat Navbar Menu Header --}}

<nav class="navbar navbar-expand-lg bg-white sticky-top nav-shadow">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center gap-2 fw-bold" href="{{ route('home') }}">
        
            {{-- Logo --}}
            <img src="{{ asset('images/LOGOO LAGIIII.png') }}" alt="Logo RS Azalia" style="height:40px; width:auto" loading="lazy">

            <div>
                RSIA AZALIA <div class="small text-muted fw-normal" style="margin-top:-2px;">Rumah Sakit Ibu & Anak Azalia</div>
            </div>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu" aria-controls="navMenu" aria-expanded="false" aria-label="Toogle navigation"">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navMenu">
            <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-1">
                <li class="nav-item"><a class="nav-link" href="{{ route('home') }} ">Beranda</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">Tentang</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('services') }}">Layanan</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('news') }}">Berita</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('doctors') }}">Dokter</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Kontak</a></li>
                <li class="nav-item ms-lg-3">

                    @if ($waLink)
                        <a class="btn btn-success btn-sm btn-round" target="_blank" rel="noopener" href="{{ $waLink }}">
                            Janji Temu (WA)
                        </a>  
                    @endif
                </li>
            </ul>
        </div>
    </div>
</nav>
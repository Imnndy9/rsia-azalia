@extends('layouts.app')

@section('title', 'Beranda - RSIA AZALIA')

@section('content')
@php
  $heroImg = asset('images/hero.jpg'); // path gambar hero di folder public/images
@endphp



<div class="card-soft overflow-hidden">
  <div class="p-4 p-lg-5 text-white"
       style="background:
              linear-gradient(90deg, rgba(0,0,0,.55), rgba(0,0,0,.25)),
              url('{{ $heroImg }}');
              background-size: cover;
              background-position: center;">
    <div class="row align-items-center g-4">
      <div class="col-lg-7">
        <div class="badge bg-success bg-opacity-75 mb-3">Rumah Sakit Ibu & Anak</div>
        <h1 class="display-5 fw-bold">RSIA AZALIA</h1>
        <p class="lead mb-4">
          Layanan cepat dan ramah untuk kesehatan ibu, bayi, dan anak.
        </p>
        <div class="d-flex gap-2 flex-wrap">
          <a class="btn btn-success btn-round px-4" target="_blank" rel="noopener"
                href="{{ 'https://wa.me/' . config('app.hospital_wa') . '?text=' . urlencode(config('app.hospital_wa_default_text')) }}">
                Janji Temu (WA)
            </a>
          <a class="btn btn-outline-light btn-round px-4" href="{{ route('services') }}">
            Lihat Layanan
          </a>
        </div>
      </div>

      <div class="col-lg-5">
        <div class="card-soft p-4 text-dark">
          <div class="fw-semibold mb-2">Jam Layanan</div>
          <div class="text-muted small">Informasi ringkas</div>
          <hr>
          <div class="d-flex justify-content-between">
            <span class="text-muted">IGD</span>
            <span class="fw-semibold">24 Jam</span>
          </div>
          <div class="d-flex justify-content-between mt-2">
            <span class="text-muted">Rawat Jalan</span>
            <span class="fw-semibold">Senin–Sabtu</span>
          </div>
          <div class="d-flex justify-content-between mt-2">
            <span class="text-muted">Janji Temu</span>
            <span class="fw-semibold">via WhatsApp</span>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

<div class="section">
  <div class="d-flex justify-content-between align-items-end mb-3">
    <div>
      <h2 class="fw-bold mb-1">Layanan Unggulan</h2>
      <div class="text-muted">Pelayanan terbaik untuk ibu, bayi, dan anak.</div>
    </div>
    <a class="text-decoration-none" href="{{ route('services') }}">Lihat semua →</a>
  </div>

  <div class="row g-3">
    @foreach ([
      ['Poli Kebidanan & Kandungan', 'Konsultasi kehamilan, pemeriksaan rutin, dan penanganan kesehatan ibu.'],
      ['Poli Anak', 'Konsultasi kesehatan anak, tumbuh kembang, dan pemeriksaan umum.'],
      ['Persalinan & Rawat Inap', 'Layanan persalinan dan kamar rawat yang nyaman.'],
    ] as $svc)
      <div class="col-md-4">
        <div class="card-soft p-4 h-100">
          <div class="fw-semibold fs-5">{{ $svc[0] }}</div>
          <div class="text-muted mt-2">{{ $svc[1] }}</div>
          <a class="btn btn-outline-success btn-sm btn-round mt-3" href="{{ route('services') }}">Detail</a>
        </div>
      </div>
    @endforeach 
  </div>
</div>

<div class="card-soft p-4 p-lg-5">
  <div class="row align-items-center g-3">
    <div class="col-lg-8">
      <h3 class="fw-bold mb-1">Butuh Janji Temu?</h3>
      <div class="text-muted">
        Klik tombol WhatsApp, tim kami akan membantu menyusun jadwal kunjungan Anda dengan cepat.
      </div>
    </div>
    <div class="col-lg-4 text-lg-end">
      <a class="btn btn-success btn-round px-4" target="_blank" rel="noopener"
   href="{{ 'https://wa.me/' . config('app.hospital_wa') . '?text=' . urlencode(config('app.hospital_wa_default_text')) }}">
  Janji Temu (WhatsApp)
</a>
    </div>
  </div>
</div>
@endsection

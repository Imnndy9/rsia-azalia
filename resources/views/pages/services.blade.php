@extends('layouts.app')

@section('title', 'Layanan - RSIA AZALIA')

@section('content')
<h1 class="fw-bold mb-2">Layanan RSIA AZALIA</h1>
<p class="text-muted mb-4">
  Berikut layanan utama untuk ibu, bayi, dan anak. Untuk informasi dan janji temu, silakan via WhatsApp.
</p>

<div class="row g-3">
  @foreach ([
    ['Poli Kebidanan & Kandungan', 'Konsultasi kehamilan, pemeriksaan rutin, dan penanganan kesehatan ibu.'],
    ['Poli Anak', 'Konsultasi kesehatan anak, tumbuh kembang, dan pemeriksaan umum.'],
    ['USG Kehamilan', 'Pemeriksaan USG sesuai jadwal dokter.'],
    ['Persalinan', 'Layanan persalinan dengan pendampingan tenaga medis profesional.'],
    ['Rawat Inap Ibu & Anak', 'Kamar rawat nyaman untuk ibu dan anak.'],
    ['Imunisasi (opsional)', 'Layanan imunisasi sesuai ketersediaan dan jadwal.'],
  ] as $svc)
    <div class="col-md-6 col-lg-4">
      <div class="p-4 border rounded-4 h-100">
        <div class="fw-semibold fs-5">{{ $svc[0] }}</div>
        <div class="text-muted mt-2">{{ $svc[1] }}</div>

        <a class="btn btn-success btn-round px-4" target="_blank" rel="noopener"
   href="{{ 'https://wa.me/' . config('app.hospital_wa') . '?text=' . urlencode(config('app.hospital_wa_default_text')) }}">
  Janji Temu (WhatsApp)
</a>
      </div>
    </div>
  @endforeach
</div>

<div class="mt-4 p-4 bg-light rounded-4">
  <div class="fw-semibold">Catatan</div>
  <div class="text-muted">
    Jadwal layanan dapat berubah. Untuk konfirmasi jadwal dokter dan layanan, silakan hubungi WhatsApp RSIA AZALIA.
  </div>
</div>
@endsection

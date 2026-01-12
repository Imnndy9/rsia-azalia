@extends('layouts.app')

@section('title', 'Kontak - RSIA AZALIA')

@section('content')
<h1 class="fw-bold mb-3">Kontak RSIA AZALIA</h1>
<p class="text-muted mb-4">
  Hubungi kami untuk informasi, pendaftaran, dan janji temu.
</p>

<div class="row g-4">
  <div class="col-lg-6">
    <div class="p-4 border rounded-4 h-100">
      <h5 class="fw-semibold mb-3">Informasi Kontak</h5>

      <div class="mb-3">
        <div class="text-muted small">Alamat</div>
        <div class="fw-semibold">
          (Isi alamat lengkap RSIA AZALIA di sini)
        </div>
      </div>

      <div class="mb-3">
        <div class="text-muted small">Telepon</div>
        <div class="fw-semibold">
          (021) 123-4567
        </div>
      </div>

      <div class="mb-4">
        <div class="text-muted small">WhatsApp Janji Temu</div>
        <a class="btn btn-success btn-round px-4" target="_blank" rel="noopener"
   href="{{ 'https://wa.me/' . config('app.hospital_wa') . '?text=' . urlencode(config('app.hospital_wa_default_text')) }}">
  Chat WhatsApp
</a>
      </div>

      <div class="alert alert-light small mb-0">
        Jam Operasional Rawat Jalan: <b>Senin – Sabtu</b><br>
        IGD: <b>24 Jam</b>
      </div>
    </div>
  </div>

  <div class="col-lg-6">
    <div class="p-4 border rounded-4 h-100">
      <h5 class="fw-semibold mb-3">Lokasi</h5>

      <div class="ratio ratio-16x9 rounded overflow-hidden">
        <!-- GANTI src DENGAN EMBED GOOGLE MAPS RS -->
        <iframe
          src="https://maps.google.com/maps?q=Jakarta&t=&z=13&ie=UTF8&iwloc=&output=embed"
          width="100%" height="100%" style="border:0;"
          allowfullscreen="" loading="lazy">
        </iframe>
      </div>

      <div class="text-muted small mt-2">
        *Nanti bisa diganti dengan lokasi RSIA AZALIA yang sebenarnya.
      </div>
    </div>
  </div>
</div>
@endsection

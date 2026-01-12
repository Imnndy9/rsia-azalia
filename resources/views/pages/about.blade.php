@extends('layouts.app')

@section('title', 'Tentang - RSIA AZALIA')

@section('content')
<div class="row g-4">
  <div class="col-lg-8">
    <h1 class="fw-bold mb-3">Tentang RSIA AZALIA</h1>
    <p class="text-muted">
      RSIA AZALIA adalah Rumah Sakit Ibu dan Anak yang berfokus pada pelayanan kesehatan
      ibu, bayi, dan anak dengan layanan yang aman, nyaman, dan ramah.
    </p>

    <div class="mt-4 p-4 border rounded-4">
      <h5 class="fw-semibold mb-2">Visi</h5>
      <p class="text-muted mb-3">
        Menjadi pilihan utama layanan kesehatan ibu dan anak yang berkualitas dan terpercaya.
      </p>

      <h5 class="fw-semibold mb-2">Misi</h5>
      <ul class="text-muted mb-0">
        <li>Memberikan pelayanan yang cepat, tepat, dan ramah.</li>
        <li>Mengutamakan keselamatan pasien dan kualitas layanan.</li>
        <li>Meningkatkan fasilitas dan kompetensi tenaga medis secara berkelanjutan.</li>
      </ul>
    </div>

    <div class="mt-4 p-4 border rounded-4">
      <h5 class="fw-semibold mb-2">Nilai Kami</h5>
      <div class="row g-3">
        <div class="col-md-4">
          <div class="p-3 bg-light rounded-4 h-100">
            <div class="fw-semibold">Ramah</div>
            <div class="text-muted small">Pelayanan hangat untuk ibu & anak.</div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="p-3 bg-light rounded-4 h-100">
            <div class="fw-semibold">Aman</div>
            <div class="text-muted small">Mengutamakan keselamatan pasien.</div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="p-3 bg-light rounded-4 h-100">
            <div class="fw-semibold">Profesional</div>
            <div class="text-muted small">Tim medis kompeten & berpengalaman.</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-lg-4">
    <div class="p-4 bg-light rounded-4">
      <h5 class="fw-semibold mb-3">Info Singkat</h5>
      <div class="text-muted small">Jenis RS</div>
      <div class="fw-semibold mb-3">Rumah Sakit Ibu & Anak</div>

      <div class="text-muted small">Jam Operasional</div>
      <div class="fw-semibold mb-3">Rawat Jalan: Senin–Sabtu</div>

      <div class="text-muted small">IGD</div>
      <div class="fw-semibold">24 Jam</div>

      <hr>
      <a class="btn btn-success btn-round px-4" target="_blank" rel="noopener"
   href="{{ 'https://wa.me/' . config('app.hospital_wa') . '?text=' . urlencode(config('app.hospital_wa_default_text')) }}">
  Janji Temu (WhatsApp)
</a>
      <div class="text-muted small mt-2">
        *Nanti nomor WA kita samakan otomatis dari layout.
      </div>
    </div>
  </div>
</div>
@endsection

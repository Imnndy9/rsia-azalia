@extends('layouts.app')

@section('title', 'Dokter - RSIA AZALIA')

@section('content')
<h1 class="fw-bold mb-2">Dokter & Jadwal Praktik</h1>
<p class="text-muted mb-4">
  Berikut daftar dokter di RSIA AZALIA. Untuk janji temu, silakan hubungi via WhatsApp.
</p>

<div class="row g-3">
  @foreach ([
    ['dr. Azzahra, Sp.OG', 'Spesialis Obstetri & Ginekologi', 'Senin, Rabu, Jumat', '09:00 – 12:00'],
    ['dr. Bima, Sp.A', 'Spesialis Anak', 'Selasa & Kamis', '10:00 – 13:00'],
    ['dr. Citra, Sp.OG', 'Spesialis Obstetri & Ginekologi', 'Sabtu', '09:00 – 12:00'],
  ] as $doc)
    <div class="col-md-6 col-lg-4">
      <div class="p-4 border rounded-4 h-100">
        <div class="fw-semibold fs-5">{{ $doc[0] }}</div>
        <div class="text-muted">{{ $doc[1] }}</div>

        <hr>

        <div class="small text-muted">Hari Praktik</div>
        <div class="fw-semibold">{{ $doc[2] }}</div>

        <div class="small text-muted mt-2">Jam Praktik</div>
        <div class="fw-semibold">{{ $doc[3] }}</div>

        <a class="btn btn-success btn-round px-4" target="_blank" rel="noopener"
   href="{{ 'https://wa.me/' . config('app.hospital_wa') . '?text=' . urlencode(config('app.hospital_wa_default_text')) }}">
  Janji Temu (WhatsApp)
</a>
      </div>
    </div>
  @endforeach
</div>

<div class="mt-4 text-muted small">
  *Jadwal dapat berubah. Untuk konfirmasi, silakan hubungi WhatsApp RSIA AZALIA.
</div>
@endsection

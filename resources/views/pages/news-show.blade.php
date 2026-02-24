@extends('layouts.app')

@section('content')
<main class="container py-4">
    <a href="{{ route('news') }}" class="text-decoration-none">← Kembali</a>

    <h1 class="fw-bold mt-3">{{ $item->title }}</h1>

    <div class="text-muted mb-3">
        {{ optional($item->published_at)->format('d M Y') ?? '-' }}
        • {{ $item->category ?? 'Umum' }}
    </div>

    <img
        src="{{ $item->image ? asset('storage/' . $item->image) : 'https://via.placeholder.com/900x400' }}"
        class="img-fluid rounded mb-4"
        alt="{{ $item->title }}"
    >

    <article class="prose">
        {!! $item->content !!}
    </article>
</main>
@endsection
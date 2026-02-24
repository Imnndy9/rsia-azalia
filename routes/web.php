<?php

use App\Models\News;
use Illuminate\Support\Facades\Route;

// HALAMAN STATIS (FRONTEND)
Route::view('/', 'pages.home')->name('home');
Route::view('/tentang', 'pages.about')->name('about');
Route::view('/layanan', 'pages.services')->name('services');
Route::view('/dokter', 'pages.doctors')->name('doctors');
Route::view('/kontak', 'pages.contact')->name('contact');

// BERITA (DINAMIS DARI DATABASE)
Route::get('/berita', function () {
    $news = News::latest()->paginate(5);

    // ambil 1 berita yang jadi headline
    $headline = News::where('is_headline', 1)->latest()->first();

    return view('pages.news', compact('news', 'headline'));
})->name('news');

Route::get('/berita/{slug}', function ($slug) {
    $item = News::where('slug', $slug)->firstOrFail();
    return view('pages.news-show', compact('item'));
})->name('news.show');
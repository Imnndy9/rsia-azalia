<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home')->name('home');
Route::view('/tentang', 'pages.about')->name('about');
Route::view('/layanan', 'pages.services')->name('services');
Route::view('/berita', 'pages.news')->name('news');
Route::view('/dokter', 'pages.doctors')->name('doctors');
Route::view('/kontak', 'pages.contact')->name('contact');

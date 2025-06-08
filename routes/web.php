<?php

use App\Livewire\Auth\Login;
use App\Livewire\Dashboard;
use App\Livewire\ListGuru;
use App\Livewire\ListKelas;
use App\Livewire\ListSiswa;
use App\Livewire\ManageGuru;
use App\Livewire\ManageKelas;
use App\Livewire\ManageSiswa;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth'], function() {
    // Kelas
    Route::get('/kelas', ManageKelas::class)->name('kelas');
    Route::get('/kelas-list', ListKelas::class)->name('kelas.list');

    // Siswa
    Route::get('/siswa', ManageSiswa::class)->name('siswa');
    Route::get('/siswa-list', ListSiswa::class)->name('siswa.list');

    // Guru
    Route::get('/guru', ManageGuru::class)->name('guru');
    Route::get('/guru-list', ListGuru::class)->name('guru.list');
});

// Authentication
Route::get('/', Login::class)->name('login')->middleware('guest');
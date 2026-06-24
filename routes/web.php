<?php

use App\Http\Controllers\Auth\LogoutController;
use App\Livewire\Home;
use Illuminate\Support\Facades\Route;

use App\Livewire\RaffleApplication;
use App\Livewire\Page;


Route::get('/login', Page\Auth\Login::class)->middleware('guest')->name('login');

Route::middleware('auth')->group(function () {
    Route::get('/logout', LogoutController::class)->name('logout');
    Route::get('/admin/raffle', Page\Admin\Raffle::class)
        ->middleware('can:admin')
        ->name('admin.raffle');
});

Route::get('/', Home::class)->name('home');
Route::get('/{raffle}', RaffleApplication::class)->name('raffle.application');
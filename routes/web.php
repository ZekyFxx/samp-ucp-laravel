<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Updates;
use App\Livewire\Account;
use App\Livewire\Shop;
use App\Livewire\Vehicles;
use App\Livewire\Coins;

Route::view('/', 'welcome');
Route::get('main/shop', Shop::class)->middleware(['auth'])->name('shop');
Route::get('main/shop/vehicles', Vehicles::class)->middleware(['auth'])->name('vehicles');
Route::get('main/shop/coins', Coins::class)->middleware(['auth'])->name('Coins');

Route::get('main/updates', Updates::class)->name('updates');
Route::get('main/account', Account::class)->middleware(['auth'])->name('account');

Route::view('main', 'main')
    ->middleware(['auth'])
    ->name('main');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';

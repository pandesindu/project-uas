<?php

use App\Http\Livewire\Bank\BankIndex;
use App\Http\Livewire\Depan\Beranda;
use App\Http\Livewire\Home\HomeIndex;
use App\Http\Livewire\Merk\MerkIndex;
use App\Http\Livewire\Motors;
use App\Http\Livewire\Pembelian\PembelianIndex;
use App\Http\Livewire\Penjualan\PenjualanIndex;
use App\Http\Livewire\Type\TypeIndex;
use App\Http\Middleware\CekLevel;
use App\Models\Pembelian;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', Beranda::class)->name('beranda');

Route::group(['middleware'=>['auth:sanctum', 'verified', 'ceklevel']], function(){
 
    Route::get('/dashboard', function () {
        return view('admin.beranda');
    })->name('dashboard');

    Route::get('motors', Motors::class)->name('motors');
    Route::get('/pembelian', PembelianIndex::class)->name('pembelian');
    Route::get('/merk', MerkIndex::class)->name('merk');
    Route::get('/type', TypeIndex::class)->name('type');
    Route::get('/penjualan', PenjualanIndex::class)->name('penjualan');
    Route::get('/rekanan', BankIndex::class)->name('rekanan');
    Route::get('/produk', Beranda::class)->name('produk');
});
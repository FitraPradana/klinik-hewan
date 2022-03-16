<?php

use App\Http\Controllers\DokterController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\KategoriProductController;
use App\Http\Controllers\KelasProductController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PulangPaksaController;
use App\Http\Controllers\RawatInapController;
use App\Http\Controllers\RawatInapDetailController;
use App\Http\Controllers\RekamMedisController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\TransactionDetailController;
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

Route::get('/', function () {
    return view('dashboard.data');
});


Route::resource('dokters', DokterController::class);
Route::get('/dokter/data', [DokterController::class, 'data'])->name('dokter.data');

Route::resource('pasiens', PasienController::class);
Route::get('/pasien/data', [PasienController::class, 'data'])->name('pasien.data');

Route::resource('kategori_products', KategoriProductController::class);
Route::get('/kategori_product/data', [KategoriProductController::class, 'data'])->name('kategori_product.data');

Route::resource('kelas_products', KelasProductController::class);
Route::get('/kelas_product/data', [KelasProductController::class, 'data'])->name('kelas_product.data');

Route::resource('products', ProductController::class);
Route::get('/product/data', [ProductController::class, 'data'])->name('product.data');

Route::resource('rekam_medis', RekamMedisController::class);
Route::get('/rekam_medice/data', [RekamMedisController::class, 'data'])->name('rekam_medice.data');

Route::resource('pulang_paksas', PulangPaksaController::class);
Route::get('/pulang_paksa/data', [PulangPaksaController::class, 'data'])->name('pulang_paksa.data');

Route::get('event', [EventController::class, 'index'])->name('event.index');
Route::post('eventAjax', [EventController::class, 'ajax']);

Route::resource('transactions', TransactionController::class)->except('create');
Route::get('/transaction/{id}/create', [TransactionController::class, 'create'])->name('transaction.create');
Route::get('/transaction/data', [TransactionController::class, 'data'])->name('transaction.data');

Route::get('/transaction_detail/{id}/data', [TransactionDetailController::class, 'data'])->name('transaction_detail.data');
Route::get('/transaction_detail/loadform/{diskon}/{total}', [TransactionDetailController::class, 'loadForm'])->name('transaction_detail.load_form');
Route::resource('/transaction_detail', TransactionDetailController::class)
    ->except('create', 'show', 'edit');

Route::resource('ranaps', RawatInapController::class)->except('create');
Route::get('/ranap/{id_rm}/{id_pasien}/create', [RawatInapController::class, 'create'])->name('ranap.create');
Route::get('/ranap/data', [RawatInapController::class, 'data'])->name('ranap.data');

Route::get('/ranap_detail/{id}/data', [RawatInapDetailController::class, 'data'])->name('ranap_detail.data');
Route::get('/ranap_detail/loadform/{diskon}/{total}', [RawatInapDetailController::class, 'loadForm'])->name('ranap_detail.load_form');
Route::resource('/ranap_detail', RawatInapDetailController::class)
    ->except('create', 'show', 'edit');

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

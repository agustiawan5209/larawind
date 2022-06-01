<?php

use App\Http\Controllers\DatatableController;
use App\Http\Livewire\Laporan\LaporanDataBahanBaku;
use App\Http\Livewire\Laporan\LaporanPenjualanAirMineral;
use App\Http\Livewire\Laporan\LaporanProduksiAirMineral;
use App\Http\Livewire\Laporan\LaporanTransaksiPemesanan;
use App\Http\Livewire\Master\PageCustomer;
use App\Http\Livewire\Master\PageStockBaarang;
use App\Http\Livewire\Master\PageStockBahanBaku;
use App\Http\Livewire\Master\PageSupplier;
use App\Http\Livewire\Transaksi\PageBarangKeluar;
use App\Http\Livewire\Transaksi\PageBarangMasuk;
use App\Http\Livewire\Transaksi\PagePemesesananBarang;
use App\Models\Stock;
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
    $StockPacking = Stock::whereNotNull('bawaan_id')->get();
    $StockAir = Stock::whereNotNull('bahanbaku_air_id')->get();
    // dd($StockPacking);
    return view('welcome',[ 'StockPacking'=> $StockPacking, 'StockAir'=> $StockAir]);
})->name('welcome');

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');


Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
    Route::view('forms', 'forms')->name('forms');
    Route::view('cards', 'cards')->name('cards');
    Route::view('charts', 'charts')->name('charts');
    Route::view('buttons', 'buttons')->name('buttons');
    Route::view('modals', 'modals')->name('modals');
    Route::view('tables', 'tables')->name('tables');
    Route::view('calendar', 'calendar')->name('calendar');
});

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' =>  'role:Admin', 'prefix' => 'Admin', 'as' => 'Admin.'], function () {
        Route::get('/Admin/Master/Produk', PageStockBaarang::class)->name('nav.Barang');
        Route::get('/Admin/Master/Supplier', PageSupplier::class)->name('nav.Supplier');
        Route::get('/Admin/Master/Customer', PageCustomer::class)->name('nav.Customer');
        Route::get('/Admin/Master/Stock-Bahan-Baku', PageStockBahanBaku::class)->name('nav.Bahan-Baku');

        // Route Transaksi
        Route::get('/Transaksi/Barang-Masuk' , PageBarangMasuk::class)->name('nav.BarangMasuk');
        Route::get('/Transaksi/Barang-Keluar' , PageBarangKeluar::class)->name('nav.BarangKeluar');
        Route::get('/Transaksi/Pemesanan-Barang' , PagePemesesananBarang::class)->name('nav.Pemesanan Barang');

        // Route Laporan
        Route::get('/Laporan/Data-Bahan-Baku', LaporanDataBahanBaku::class)->name('Nav.LaporanDataBahanBaku');
        Route::get('/Laporan/Data-Penjualan-Air-Mineral', LaporanPenjualanAirMineral::class)->name('Nav.LaporanenjualanAirMineral');
        Route::get('/Laporan/Data-Produksi-Air-Mineral', LaporanProduksiAirMineral::class)->name('Nav.LaporanProduksiAirMineral');
        Route::get('/Laporan/Data-Transaksi-Pemesanan', LaporanTransaksiPemesanan::class)->name('Nav.LaporanTransaksiPemesanan');
        // Route::get("/table/Supplier", [DatatableController::class, 'SupplierTable'])->name('TabelSupplier');
    });
    Route::group(['middleware' =>  'role:Supplier', 'prefix' => 'Supplier', 'as' => 'Supplier.'], function () {
    });
    Route::group(['middleware' =>  'role:Customer', 'prefix' => 'Customer', 'as' => 'Customer.'], function () {
    });
});

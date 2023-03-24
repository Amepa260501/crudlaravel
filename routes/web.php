<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerKategori;
use App\Http\Controllers\ControllerLogin;
use App\Http\Controllers\ControllerProduk;
use App\Http\Controllers\ControllerPenjualan;
use App\Http\Controllers\ControllerGudang;
use App\Http\Controllers\ControllerOrder;


Route::get('order', [ControllerOrder::class, 'order']);
Route::get('ambil', [ControllerOrder::class, 'ambil']);
Route::get('orderitem', [ControllerOrder::class, 'orderitem']);

Route::get('kategori', [ControllerKategori::class, 'readkategori']);
Route::get('kategori/tambah', [ControllerKategori::class, 'tambahkategori']);
Route::post('kategori/tambah/simpan', [ControllerKategori::class,'simpankategori']);
Route::get('kategori/hapus/{id_kategori}', [ControllerKategori::class, 'hapuskategori']);
Route::get('kategori/edit/{id_kategori}', [ControllerKategori::class, 'editkategori']);
Route::post('kategori/edit/{id_kategori}',[ControllerKategori::class,'edittkategori']);
Route::get('kategori/cari/{cari}',[ControllerKategori::class,'carikategori']); 


Route::get('produk',[ControllerProduk::class,'readproduk']);
Route::get('produk/tambah',[ControllerProduk::class,'tambahproduk']);
Route::post('produk/tambah/simpan',[ControllerProduk::class,'simpanproduk']);
Route::get('produk/hapus/{id_produk}',[ControllerProduk::class,'hapusproduk']);
Route::get('produk/edit/{id_produk}',[ControllerProduk::class,'editproduk']);
Route::post('produk/edit/{id_produk}',[ControllerProduk::class,'edittproduk']);
Route::get('produk/cari/{cari}',[ControllerProduk::class,'cariproduk']);

Route::get('login', [ControllerLogin::class, 'login']);
Route::post('actionlogin', [ControllerLogin::class, 'actionlogin']);
Route::get('registrasi', [ControllerLogin::class, 'registrasi']);
Route::post('postregistrasi', [ControllerLogin::class, 'postregistrasi']);
Route::get('datapenjualan',[ControllerPenjualan::class, 'datapenjualan'])->middleware('checkRole:admin,operator');
Route::get('datagudang',[ControllerGudang::class, 'datagudang'])->middleware('checkRole:admin,gudang');

Route::get('gudang/tambah', [ControllerGudang::class, 'datagudang']);
Route::get('gudang/simpan', [ControllerGudang::class, 'simpangudang']);
Route::get('gudang/getdetailgudang/{id}', [ControllerGudang::class, 'getdetail']);
Route::get('gudangmaster/{kodetr}/{tanggal}/{namasup}/{telp}/{alamat}/{keterangan}/{grandtotal}',[ControllerGudang::class,'gudangmaster']);
Route::get('gudangdetail/{kodetr}/{kodebrg}/{harga}/{jumlah}',[ControllerGudang::class,'gudangdetail']);
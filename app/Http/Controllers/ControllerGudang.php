<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request; 
Use App\Models\GudangModel;
use App\Models\ProdukModel;

class ControllerGudang extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function datagudang() 
    {
    $xx=new ProdukModel();
    $produk=$xx->Readproduk();
    return view('viewgudang.datagudang',['produk'=>$produk]);
    } 

    public function tambahgudang()
    {
        
        return view('viewGudang.tambahdatagudang');
    }

    public function gudangmaster($kodetr,$tanggal,$namasupplier,$telpon,$alamat,$keterangan,$grandtotal) 
    {
        
        $xx=new GudangModel(); 
        $xx->SimpanMasterGudang($kodetr,$tanggal,$namasupplier,$telpon,$alamat,$keterangan,$grandtotal);
    } 

    public function gudangdetail($kodetr,$kodebrg,$harga,$jumlah)
    {
        $xx=new GudangModel(); 
        $xx->SimpanDetailGudang($kodetr,$kodebrg,$harga,$jumlah);
    }
}
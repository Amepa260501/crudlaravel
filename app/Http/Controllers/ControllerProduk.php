<?php
namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use App\Models\ProdukModel;

class ControllerProduk extends BaseController
{

 use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

 public function readproduk()
 {
 $xx=new ProdukModel();
$produk=$xx->Readproduk();                        
return view('viewProduk/dataproduk',['produk'=>$produk]);
 } 

 public function tambahproduk()
{
$data['kategori'] = DB::table('kategori')->get();

return view('viewProduk/tambahproduk', $data);
 }

 public function simpanproduk(Request $x)
 {
 $xx=new ProdukModel();
 $xx->Simpanproduk($x);
 return redirect('/produk');
 }
 public function hapusproduk($id_produk)
 {
 $xx=new ProdukModel();
 $xx->Hapusproduk($id_produk);
return redirect('/produk');
}
 public function editproduk($id_produk)
 {
 $xx=new ProdukModel();
 $produk=$xx->Editproduk($id_produk);
return view('viewProduk/editproduk',['produk'=>$produk]);
}

 public function edittproduk(Request $x)
 {
 $xx=new ProdukModel();
 $xx->Edittproduk($x);
return redirect('/produk');
}

 public function cariproduk($cari)
 {
$xx=new ProdukModel();
$produk=$xx->Cariproduk($cari);
 return view('viewProduk/dataproduk',['produk'=>$produk]);

 }

}
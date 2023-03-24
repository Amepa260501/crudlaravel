<?php
namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use App\Models\KategoriModel;
class ControllerKategori extends BaseController
{
 use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

 public function readkategori()
 {
 $xx=new KategoriModel();
$kategori=$xx->Readkategori();
return view('viewKategori/datakategori',['kategori'=>$kategori]);
 } 
 public function tambahkategori()
{
return view('viewKategori/tambahkategori');
 }

 public function simpankategori(Request $x)
 {
 $xx=new KategoriModel();
 $xx->Simpankategori($x);
 return redirect('/kategori');
 }
 public function hapuskategori($id_kategori)
 {
 $xx=new KategoriModel();
 $xx->Hapuskategori($id_kategori);
return redirect('/kategori');
}
 public function editkategori($id_kategori)
 {
 $xx=new KategoriModel();
 $kategori=$xx->Editkategori($id_kategori);
return view('viewKategori/editkategori',['kategori'=>$kategori]);
}

 public function edittkategori(Request $x)
 {
 $xx=new KategoriModel();
 $xx->Edittkategori($x);
return redirect('/kategori');
}

 public function carikategori($cari)
 {
$xx=new KategoriModel();
$kategori=$xx->Carikategori($cari);
 return view('viewKategori/datakategori',['kategori'=>$kategori]);
 } 

}
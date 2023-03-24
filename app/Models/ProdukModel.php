<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class ProdukModel extends Model
{
public function Readproduk()
 {
 $produk=DB::table('produk')
 ->join('kategori', 'produk.id_kategori', '=', 'kategori.id_kategori')
 ->select('produk.*', 'kategori.nama_kategori')
 ->get();

 return $produk;
}
public function Simpanproduk($x)
 {
 $produk=DB::table('produk')->insert([
 'id_produk'=>$x->id_produk,
'id_kategori'=>$x->id_kategori,
'nama_produk'=>$x->nama_produk,
'harga'=>$x->harga,
 'descripsi'=>$x->descripsi
 ]);
}
public function Hapusproduk($id_produk)
 {
 $produk=DB::table('produk')->
 where('id_produk',$id_produk)->delete();
}
public function Editproduk($id_produk)
 {
 $produk=DB::table('produk')->where('id_produk',$id_produk)->get();
 return $produk;
 }
public function Edittproduk($x)
 {
 DB::table('produk')->where('id_produk',$x->id_produk)->update([
 'id_kategori'=>$x->id_kategori,
 'nama_produk'=>$x->nama_produk,
 'harga'=>$x->harga,
 'descripsi'=>$x->descripsi
 ]);
}
public function Cariproduk($cari)
 {
 $produk=DB::table('produk')->
where('id_produk',$cari)->get();
return $produk;
 }
}
?>

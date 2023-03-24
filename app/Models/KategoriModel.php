<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class KategoriModel extends Model
{
public function Readkategori()
 {
 $kategori=DB::table('kategori')->get();
 return $kategori;
}
public function Simpankategori($x)
 {
 $kategori=DB::table('kategori')->insert([
 'id_kategori'=>$x->id_kategori,
 'nama_kategori'=>$x->nama_kategori,
 'descripsi'=>$x->descripsi
 ]);
}
public function Hapuskategori($id_kategori)
 {
 $kategori=DB::table('kategori')->
 where('id_kategori',$id_kategori)->delete();
}
public function Editkategori($id_kategori)
 {
 $kategori=DB::table('kategori')->where('id_kategori',$id_kategori)->get();
 return $kategori;
 }
public function Edittkategori($x)
 {
 DB::table('kategori')->where('id_kategori',$x->id_kategori)->update([
 'nama_kategori'=>$x->nama_kategori,
 'descripsi'=>$x->descripsi
 ]);
}
public function Carikategori($cari)
 {
 $kategori=DB::table('kategori')->
where('id_kategori',$cari)->get();
return $kategori;
 }
}
?>

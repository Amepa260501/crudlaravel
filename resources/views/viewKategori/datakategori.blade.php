<html>
<head>
<link rel="stylesheet" type="text/css" href="{{asset('/assets/css/bootstrap.min.css')}}">
<script type="text/javascript" src="{{asset('/assets/js/bootstrap.min.js')}}"></script>
</head>
<body>
@include('menu')
<style type="text/css">
.pagination li{
 float:left;
 list-style-type:none;
margin:5px;
}
</style>
<div class="container">
<input type="text" id="cari" name="cari"> <button onclick="MyCari()">Cari</button>
<br>
<button id="tambah" onclick="window.location.href='{{ url()->current()}}/tambah';">Tambah</button>
<table border="1" class="table">
<tr>
<th>kode</th>
<th>Nama Kategori</th>
<th>Descripsi</th>
<th>action</th>
</tr>
@foreach($kategori as $row)
<tr>
<td>{{$row->id_kategori}}</td>
<td>{{$row->nama_kategori}}</td>
<td>{{$row->descripsi}}</td>
<td>
<a href="{{ url()->current() }}/edit/{{$row->id_kategori}}"><button>Edit</button></a>
<a href="{{ url()->current() }}/hapus/{{$row->id_kategori}}"><button>Hapus</button></a>
</td>
</tr>
@endforeach
</table>
<br>
<script>
function MyCari()
{
var x =document.getElementById("cari").value;
window.location.href="{{ url()->current() }}/cari/"+x+"";
}
</script>
</div>
</body>
</html>
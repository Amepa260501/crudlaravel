<html>
<head>
<link rel="stylesheet" type="text/css" href="{{asset('/assets/css/bootstrap.min.css')}}">
<script type="text/javascript" src="{{asset('/assets/js/jquery.min.js')}}"></script>
</head>
<body>
@foreach($produk as $row)
<form action="" method="post">
{{csrf_field()}}
kode <input type="input" name="id_produk" required value="{{$row->id_produk}}"><br>
Nama Kategori <input type="input" name="id_kategori" required value="{{$row->id_kategori}}"><br>
Nama Produk <input type="input" name="nama_produk" required value="{{$row->nama_produk}}"><br>
Harga <input type="input" name="harga" required value="{{$row->harga}}"><br>
Descripsi <input type="input" name="descripsi" required value="{{$row->descripsi}}"><br>
<input type="submit" value="update">
</form>
@endforeach
</body>
</html>
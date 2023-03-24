<html>
<head>
<link rel="stylesheet" type="text/css" href="{{asset('/assets/css/bootstrap.min.css')}}">
<script type="text/javascript" src="{{asset('/assets/js/jquery.min.js')}}"></script>
</head>
<body>
@foreach($kategori as $row)
<form action="" method="post">
{{csrf_field()}}
kode <input type="input" name="id_kategori" required value="{{$row->id_kategori}}"><br>
Nama Kategori <input type="input" name="nama_kategori" required value="{{$row->nama_kategori}}"><br>
Descripsi <input type="input" name="descripsi" required value="{{$row->descripsi}}"><br>
<input type="submit" value="update">
</form>
@endforeach
</body>
</html>
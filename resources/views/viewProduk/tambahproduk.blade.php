<html>
<head>
<link rel="stylesheet" type="text/css" href="{{asset('/assets/css/bootstrap.min.css')}}">
<script type="text/javascript" src="{{asset('/assets/js/jquery.min.js')}}"></script>
</head>
<body>
@if(count($errors)>0)
 <div class="alert alert-danger">
 <ul>
 @foreach ($errors->all() as $error)
<li>{{$error}}</li>
 @endforeach
 </ul>
 </div>
@endif
<br>
<form action="{{ url()->current() }}/simpan" method="post">
{{csrf_field()}}
kode <input type="input" name="id_produk"><br>
Kategori
<select name="id_kategori" id="kategori">
    @foreach ( $kategori as $data)
        <option value="{{ $data->id_kategori }}">{{ $data->nama_kategori }}</option>
    @endforeach
</select><br>
nama produk <input type="input" name="nama_produk"><br>
harga <input type="input" name="harga"><br>
Deskripsi<input type="input" name="descripsi"><br>
<input type="submit" value="simpan">
</form>
</body>
</html>
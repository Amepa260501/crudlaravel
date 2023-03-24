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
kode <input type="input" name="id_kategori" value="{{old('id_kategori')}}"><br>
Nama Kategori <input type="input" name="nama_kategori" value="{{old('nama_kategori')}}"><br>
Descripsi <input type="input" name="descripsi" value="{{old('descripsi')}}"><br>
<input type="submit" value="simpan">
</form>
</body>
</html>
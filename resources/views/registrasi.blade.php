<html>
<body>
<form action="{{url('postregistrasi')}}" method="post">
{{csrf_field()}}
<label>Nama</label>
<input type="text" name="name" required>
<br>
<label>Alamat</label>
<input type="text" name="alamat" required>
<br>
<label>Telp</label>
<input type="text" name="telp" required>
<br>
<label>Jenis kelamin</label>
<input type="radio" name="jeniskelamin" value="laki-laki">Laki-laki
<input type="radio" name="jeniskelamin" value="perempuan">Perempuan
<br>
<label>E-Mail</label>
<input type="email" name="email" required>
<br>
<label>Password</label>
<input type="password" name="password" required>
<br>
<input type="submit" name="kirim">
</form>
</body>
</html>
<html>
<body>
<form action="{{url('actionlogin')}}" method="post">
{{csrf_field()}}
E-mail : <input type="email" name="email" required>
<br>
Password : <input type="password" name="password" required>
<br>
<input type="submit" name="kirim" >
</form>
</body>
</html>
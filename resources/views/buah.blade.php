<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Daftar Buah</h1>
 @foreach ($buah as $data)
 <li>{{($data)}}</li>
@endforeach
</body>
</html>
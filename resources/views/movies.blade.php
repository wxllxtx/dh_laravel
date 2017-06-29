<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	Peliculas de {{$genre->name}}
	<br>
	<ul>
	@foreach ($genre->movies as $movie)
		<li> {{$movie->title}} </li>
	@endforeach
	</ul>
</body>
</html>
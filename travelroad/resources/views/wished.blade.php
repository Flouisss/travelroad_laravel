<html>
	<head>
		<title>Wished Places</title>
	</head>
	<body>
		<h1>Places I'd like to visit</h1>
		<ul>
			@foreach($wished as $place)
				<li>{{ $place->name }}</li>
			@endforeach
		</ul>
		<a href="{{ url('/') }}">Volver atrás <--- <a>
	</body>
</html>

<html>
        <head>
                <title>Visited Places</title>
        </head>
        <body>
                <h1>Places I've Already Been To </h1>
                <ul>
                        @foreach($visited as $place)
                                <li>{{ $place->name }}</li>
                        @endforeach
                </ul>
                <a href="{{ url('/') }}">Volver atrás <--- <a>
        </body>
</html>

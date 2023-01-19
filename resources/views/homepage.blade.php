<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Trains</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <h1>Lista treni:</h1>

    @foreach ($trains as $train)
        
        <ul>
            <li>{{ $train->company }}</li>
            <li>{{ $train->trip_day }}</li>
            <li>{{ $train->departure_station }} - {{ $train->arrival_station }}</li>
            <li>{{ $train->departure_time }} - {{ $train->arrival_time }}</li>
            <li>{{ $train->train_number }}</li>
            <li>{{ $train->carriages_number }}</li>

            @if ($train->in_time == 0)
                <li>In Orario</li>
            @else
                <li>In Ritardo</li>
            @endif

            @if ($train->deleted == 0)
                <li>Attivo</li>
            @else
                <li>Cancellato</li>
            @endif
        </ul>

    @endforeach

</body>

</html>

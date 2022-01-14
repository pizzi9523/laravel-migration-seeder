<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Travel Agency</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->

</head>

<body>
    @foreach($packages as $package)
    <div class="card">
        <h1>{{$package->name}}</h1>
        <p>Partenza da: <strong>{{$package->departure_from}}</strong></p>
        <p>Destinazione: <strong>{{$package->destination}}</strong> </p>
        <p>Data di Partenza: <strong>{{$package->departure_date}}</strong> </p>
        <p>Data di Ritorno: <strong>{{$package->return_date}}</strong> </p>
        <p>Data di Ritorno: <strong>{{$package->price}}€</strong> </p>
    </div>

    @endforeach
</body>

</html>
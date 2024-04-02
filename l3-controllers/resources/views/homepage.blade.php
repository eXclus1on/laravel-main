<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css"/>
    <title>Aula 02-04-2024</title>
</head>

<body>
    <h1>Welcome to my Website!</h1>
    <h2>Here's some movies...</h2>
    <ul>
        @foreach ($movies as $movie)
        <li>{{$movie}}</li>
        @endforeach
    </ul>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Country</th>
                <th>Population</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cities as $city)
            <tr>
                <td>{{$city -> Name}}</td>
                <td>{{$city -> CountryCode}}</td>
                <td>{{$city -> Population}}</td>
            </tr>
            @endforeach
        </tbody>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/pico.min.css" />
    <title>Aula 02-04-2024</title>
</head>

<body>
    <h1> {{ $title }} </h1>
    <h2> Here's some movies...</h2>
    <ul>
        @foreach ($movies as $movie)
        <li> {{ $movie }} </li>
        @endforeach
    </ul>
    <ul>
        @foreach ($cities as $city)
        <li>{{ $city->Name }}</li>
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
            @foreach ($cities as $city)
            <tr>
                <tr> {{ $city->Name }}</tr>
                <tr> {{ $city->CountryCode }}</tr>
                <tr> {{ $city->Population }}</tr>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
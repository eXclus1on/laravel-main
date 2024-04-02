<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
</body>
</html>
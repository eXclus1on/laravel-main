<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Hello my name is {{ $name }}</h1>
    <h2>and I am a {{ $profession }}</h2>

    <ul>
        @foreach ($fruit as $piece)
        <li>{{ $piece }}</li>
        @endforeach
    </ul>
</body>

</html>
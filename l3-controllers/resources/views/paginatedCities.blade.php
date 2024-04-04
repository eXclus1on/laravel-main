<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css" />
</head>

<body>
    <h1>City List</h1>
    <p>Total de resultados disponiveis: {{ $total }}</p>
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
                <td>{{ $city->Name }}</td>
                <td>{{ $city->CountryCode }}</td>
                <td>{{ $city->Population }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    @if ($page == 1)
    <span>Anterior</span>
    @else
    <a href="?page ={{ $page - 1 }}">Anterior</a>
    @endif
    |
    @if ($page == ceil ($total/20))
    <span>Próxima</span>
    @else
    <a href="?page={{ $page + 1 }} ">Seguinte</a>
    @endif

    <p>Página {{$page}} de {{ ceil ($total/20)}}</p>
</body>

</html>
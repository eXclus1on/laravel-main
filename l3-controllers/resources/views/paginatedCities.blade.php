<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css"/>
    <title>Aula 06-04-2024 - Paginação</title>
</head>

<body>
    <h2>List of cities</h2>
    <table border="1">
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
    <span>First</span>
    <span>Previous</span>
    @else
    <a href="?page=1&num_rows={{ $num_rows }}">First</a>
    <a href="?page={{ $page - 1 }}&num_rows={{ $num_rows }}">Previous</a>
    @endif

    &nbsp;
    &nbsp;
    &nbsp;
    &nbsp;
    page {{ $page }} of {{ $lastPage }}
    &nbsp;
    &nbsp;
    &nbsp;
    &nbsp;

    @if ($page == $lastPage)
    <span>Next</span>
    <span>Last</span>
    @else
    <a href="?page={{ $page + 1 }}&num_rows={{ $num_rows }}">Next</a>
    <a href="?page={{ $lastPage }}&num_rows={{ $num_rows }}">Last</a>
    @endif

    <form action="" method="get">
        <select name="num_rows">
            <option>10</option>
            <option>20</option>
            <option>50</option>
            <option>100</option>
        </select>
        <button type="submit">ok</button>
    </form>
</body>

</html>
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
    <form action="" method="GET">
        <!-- <input type="text" placeholder="Search city" name="city" value="{{ $search }}"> -->
        <input type="text" placeholder="Search city" name="city">
        <button type="submit">Filter</button>
    </form>

    @if (count($cities) > 0)
    <h2>List of cities that match: {{ $search }}</h2>
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
    @else
    <h2>No cities matched `{{ $search }}`, why not try another search term? 😇</h2>
    @endif
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

    <div>
        <select name="num_rows" id="selectNumRows">
            <?php $selected = $num_rows == 10 ? "selected" : ""; ?>
            <option {{ $selected }}>10</option>
            <?php $selected = $num_rows == 20 ? "selected" : ""; ?>
            <option {{ $selected }}>20</option>
            <?php $selected = $num_rows == 50 ? "selected" : ""; ?>
            <option {{ $selected }}>50</option>
            <?php $selected = $num_rows == 100 ? "selected" : ""; ?>
            <option {{ $selected }}>100</option>
        </select>
    </div>

    <script>
        const selectNumRows = document.querySelector("#selectNumRows");
        selectNumRows.addEventListener("change", function() {
            window.location.href = `?num_rows=${selectNumRows.value}`;
        });
    </script>
</body>

</html>
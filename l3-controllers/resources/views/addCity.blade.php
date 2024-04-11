<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    @if ($success)
    <div>Inserted with success</div>
    @endif

    @if ($fail)
    <div>Insert failed</div>
    @endif

    <form action="" method="POST">
        @csrf
        <input name="name" placeholder="City name">
        <button>Submit</button>
    </form>
</body>

</html>
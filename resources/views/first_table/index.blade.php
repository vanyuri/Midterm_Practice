<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Table Data</title>
</head>
<body>
    <h1>First Table Data</h1>
    <ul>
        @foreach($data as $row)
            <li>{{ $row->id }} - {{ $row->name }}</li>
        @endforeach
    </ul>
</body>
</html>

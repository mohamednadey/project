<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($studen as $item)

<li><a href="show/{{ $item->id }}">{{$item->name }}</a></li>
        <li>{{ $item->age}}</li>
    @endforeach
</body>
</html>
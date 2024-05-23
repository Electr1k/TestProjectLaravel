<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Главная</title>
</head>
<body>
<div class="container">
    <div>
        @foreach($cities as $city)
            <a href="{{ route('city', $city->name) }}">{{ $city->id }}. {{ $city->name }}</a>
            <br>
        @endforeach
    </div>
</div>
</body>
</html>

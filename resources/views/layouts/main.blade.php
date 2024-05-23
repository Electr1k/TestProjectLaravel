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
    <div class="topnav">
        <a href="" class="main">Главная</a>
        <a href="">О нас</a>
        <a href="">Новости</a>
    </div>
    @yield('content')
</div>
</body>
</html>

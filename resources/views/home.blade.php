<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
      
    </head>
    <header>
        <div class="logo">
            <img src="{{asset('img/logo.png')}}" alt="">
        </div>
        <nav>
            <a href="">Home</a>
            <a href="">Prodotti</a>
            <a href="">Contatti</a>
        </nav>
    </header>


    <body>
        <h1>home</h1>
    </body>
</html>

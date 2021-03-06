<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <title>Laravel 5.4 from Scratch</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    </head>
    <body>
        <h1>Hola, {{ $name }} !</h1>
        <h3>Lista de tareas:</h3>
        <ul>
            @foreach($tasks as $task)
                    <li>{{ $task->body }}</li>
            @endforeach
        </ul>
    </body>
</html>

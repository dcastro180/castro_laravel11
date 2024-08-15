<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Diogo Castro</title>
    </head>
    <body>
        <div>
            <h1>Bem Vindo </h1>
            <p>Data Atual: {{\carbon\carbon:: now() -> format('d/m/Y H:i:s') }}</p><br>
            <p>Primeiro teste no Laravel 11</p>
            <p>Agora esta no github</p>
        </div>
    </body>
</html>

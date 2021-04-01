<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="app.css">
        <title>Alle Produkte</title>
    </head>
    <body>
        <h1>Detailansicht</h1>
        <img src="{{$p ->image}}">
        <p><b>Name:</b> {{$p ->name}}</p>
        <p><b>Preis:</b>{{$p ->price}}</p>
        <p><b>Details:</b>{{$p -> details}}</p>
        <p><b>Manual:</b>{{$p -> manual}}</p>
    </body>
</html>
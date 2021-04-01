<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{asset('/css/style.css')}}">
        <title>Warenkorb</title>
    </head>
    <body>
        <button class="logout">Logout</button>
        <h1>Warenkorb</h1>
        <table>
            <tr>
                <th>Name</th>
                <th>Preis</th>
                <th>Details</th>
            </tr>
            @foreach ($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
                <td><a href="/product/{{ $product->id }}">Detailansicht</a></td>
            </tr>
            @endforeach
            <br>
        </table>
        <button class="form-btn">Bestellung Abschliessen</button>
    </body>
</html>
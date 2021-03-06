<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{asset('/css/style.css')}}">
        <title>Alle Produkte</title>
    </head>
    <body>
        <a href="/basket" class="logout"><button>Warenkorb</button></a>
        <br>
        <br>
        <table>
            <tr>
                <th>Name</th>
                <th>Preis</th>
                <th>Details</th>
                <th>Warenkorb</th>
            </tr>
            @foreach ($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
                <td><a href="/product/{{ $product->id }}">Detailansicht</a></td>
                <td><a href="/addToBasket/{{ $product->id }}"><button>Warenkorb hinzufügen</button></a></td>
            </tr>
            @endforeach
    </table>
    </body>
</html>
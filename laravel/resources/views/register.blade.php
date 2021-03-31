<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>
<body>
    <h1>Registrieren</h1>
    @if ($failed)
    <h1>fehler</h1>
    @endif
    <form method="post" action="/newuser"> 
    @csrf
        <label for="name">Vorname</label>
        <br>
        <input type="text" name="first_name" required>
        <br>
        <label for="lastname">Nachname</label>
        <br>
        <input type="text"name="last_name" required>
        <br>
        <label for="email">Email</label>
        <br>
        <input type="email" name="email"required>
        <br>
        <label for="password">Passwort</label>
        <br>
        <input type="password" name="password"required>
        <br>
        <label for="street">Strasse</label>
        <br>
        <input type="text" name="street" required>
        <br>
        <label for="zip">PLZ</label>
        <br>
        <input type="text" name="zip" required>
        <br>
        <label for="city">Ort</label>
        <br>
        <input type="text" name="city" required>
        <br>
        <label for="phone">Telefon Nr.</label>
        <br>
        <input type="text" name="phone" required>
        <br>
        <button type="submit">Registrieren</button>
    </form>
</body>
</html>
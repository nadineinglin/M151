<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app.css">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form action="/user/{id}" method="post">
        <label for="email">Email</label>
        <br>
        <input type="email" name="email" id="mail">
        <br>
        <label for="password">Passwort</label>
        <br>
        <input type="password" name="password">
        <br>
        <input type="submit" value="Einloggen">
    </form>

    <p>Noch kein Konto?</p>
    <button href="/register">Registrieren</button>

</body>
</html>
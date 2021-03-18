<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/app.css">
    <title>Document</title>
</head>
<body>
    <h1>Registrieren</h1>
    <form method="POST" action="/newuser"> 
        <label for="email">Email</label>
        <br>
        <input type="email" name="email">
        <br>
        <label for="password">Passwort</label>
        <br>
        <input type="password" name="password">
        <br>
        <br>
        <button type="submit">Registrieren</button>
    </form>
</body>
</html>
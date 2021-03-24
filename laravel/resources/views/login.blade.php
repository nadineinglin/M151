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
    {{Form::open('url'=>'getlogin')}}
    <h1>Login</h1>
    <p>
        {{$errors->first('email');}}
        {{$errors ->first('password')}}
    </p>
</body>
</html>
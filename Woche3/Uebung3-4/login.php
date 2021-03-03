<?php
    include_once "./ClassDB.php";
    $db = DB::get(); 
    $result = $db->select('SELECT * FROM logins WHERE username = :username', ['username' => $_POST['username']]);

    $logedin = false;

    if($result[0]) {
        if (password_verify($_POST['password'], $result[0].password)) {
            $logedin = true;
        }        
    }
?>

<form action="?" method="post">
    <input type="text" name="username" id="username" placeholder="Username">
    <input type="password" name="password" id="password" placeholder="Password">
</form>
<a href="register.php">Register</a>
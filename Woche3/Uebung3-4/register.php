<?php
     include_once "./ClassDB.php";
    $db = DB::get(); 
    $result = $db->select('SELECT * FROM logins WHERE username = :username', ['username' => $_POST['username']]);

    if(!$result[0]) {
        $db->query(
            'INSERT INTO logins(username, password, first_name, last_name) VALUES (:username, :password, :first_name, :last_name)', 
            [
                ':username' => $_POST['username'],
                ':password' => password_hash($_POST['password']),
                ':first_name' => $_POST['firstname'],
                ':last_name' => $_POST['lastname']
            ]
        );
    }
?>

<form action="?" method="post">
    <input type="text" name="username" id="username" placeholder="Username">
    <input type="password" name="password" id="password" placeholder="Password">
    <input type="text" name="firstname" id="firstname" placeholder="Firstname">
    <input type="text" name="lastname" id="lastname" placeholder="Lastname">
</form>
<a href="login.php">Login</a>
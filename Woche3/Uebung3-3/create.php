<?php

include_once "ClassDB.php";

$db = DB::get();

error_reporting(E_ALL);
ini_set('error_reporting', E_ALL);


$isNewCustomer = true;
if ($_GET['id'] || $_POST['id']) {
    $customerId = $_GET['id'] ? $_GET['id'] : $_POST['id'];
    $isNewCustomer = false;
    
    $statement =  $db->select('SELECT * FROM customers WHERE id = :id', ['id' => $customerId]);

    $customer = $statement[0];
}



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $last_name = $_POST['last_name'];
    $first_name = $_POST['first_name'];
    $job_title = $_POST['job_title'];

    if ($isNewCustomer) {
        $db->query(
            'INSERT INTO customers(first_name, last_name, job_title) VALUES (:first_name, :last_name, :job_title)', 
            [
                ':first_name' => $first_name,
                ':last_name' => $last_name,
                ':job_title' => $job_title
            ]
        );
    }
    else {
        $db->query('
            UPDATE customers SET first_name = :first_name,
                                last_name = :last_name,
                                job_title = :job_title
            WHERE id = :id
            ',[
                ':first_name' => $first_name,
                ':last_name' => $last_name,
                ':job_title' => $job_title,
                ':id' => intval($_POST['id'])
            ]
        );
    }
    ?>
    Daten einfgefügt!
    <a href="index.php">Zurück zur Liste</a>
    <?php
}
?>

<form action="?" method="POST">
    <?php
        if (! $isNewCustomer) {
            echo "<input name='id' value='".$_GET['id']."' type='hidden' />";
        }
    ?>
    <input type="text" value="<?= $isNewCustomer ? '' : $customer['last_name'] ?>" name="last_name" placeholder="Last Name" />
    <input type="text" value="<?= $isNewCustomer ? '' : $customer['first_name'] ?>" name="first_name" placeholder="First Name" />
    <input type="text" value="<?= $isNewCustomer ? '' : $customer['job_title'] ?>" name="job_title" placeholder="Job Title" />
    <input type="submit" value="Absenden" />
</form>
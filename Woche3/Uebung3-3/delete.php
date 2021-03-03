<?php
include_once "ClassDB.php";

$db = DB::get();

$db->query("DELETE FROM invoices WHERE order_id = :id", array(':id' => $_GET['id']));

$db->query("DELETE FROM order_details WHERE order_id = :id", array(':id' => $_GET['id']));

$db->query("DELETE FROM orders WHERE id = :id", array(':id' => $_GET['id']));

?>
<?php
$servername = "localhost";
$username = "vmadmin";
$password = "sml12345";
$database = "northwind";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully <br />";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

$customerid =$_GET['id'];
$sql ="SELECT * FROM orders WHERE customer_Id = :customerId";

?>
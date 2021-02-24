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

$uebergabeid = $_GET['id'];

$statement = $conn->prepare("SELECT * FROM orders WHERE customer_id =:id");
$statement->execute(array('id' => $uebergabeid));
echo '<table style="border: 1px solid black"> <tr> <th>Lieferdatum</th> <th>Liefername</th> <th>Lieferadresse</th> <th>Lieferkosten</th> </tr>';
while($statement->fetchAll()) {
  echo "<tr> <td>" . $row ['shipped_date']."</td>";
  echo "<td>" . $row ['ship_name']."</td>";
  echo "<td>" . $row ['ship_address']."</td>";
  echo '<td>' . $row ['shipping_fee']. '</td> </tr>';
}
?>

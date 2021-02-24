<?php
$servername = "localhost";
$username = "vmadmin";
$password = "sml12345";
$database = "northwind";

try {
  
  $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

?>

<table>
<th>Mail</th>
<th>Name</th>
<th>Nachname</th>
<?php
$sql = "SELECT last_name,first_name,email_adress FROM customers";
foreach($conn->query($sql)as $row){ 
echo"<tr><td>" . $row ['email_adress']."<td/>";
echo"<td> . $row ['first_name']<td/>";
echo"<td> . $row ['last_name']</td></tr></table>";
} 
?>

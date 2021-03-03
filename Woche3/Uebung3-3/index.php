<?php

include_once "ClassDB.php";

$db = DB::get();

$result = $db->select("SELECT * FROM customers", []);

echo "<table><tr><th>Firstname</th><th>Lastname</th><th>Bestellugen</th><th>Bearbeiten</th></tr>";

foreach ($result as $row) {
    echo "<tr><td>".$row['first_name']."</td><td>".$row['last_name'].'</td><td><a href="/bestellungen.php?id='.$row['id'].'">Bestellungen</a></td><td><a href="/create.php?id='.$row['id'].'">Bearbeiten</a></td></tr>';
}

echo "<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  width: 1000px;
}
</style>";
?>
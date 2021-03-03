<?php
include_once "ClassDB.php";

$db = DB::get();


$result = $db->select("SELECT customers.first_name AS first_name, customers.last_name AS last_name, orders.id AS id FROM orders INNER JOIN customers ON customers.id = orders.customer_id AND orders.customer_id = :id", array(':id' => $_GET['id']));

?>
<table>
    <tr>
        <th>Name</th>
        <th>Bestellungen</th>
        <th>Löschen</th>
    </tr>
<?php

foreach($result as $row) {
    echo "<tr><td>".$row['first_name'].' '.$row['last_name'].'</td><td>'.$row['id'].'</td><td><a href="delete.php?id='.$row['id'] .'">Löschen</a></tr>';
}
echo "</table>";
echo "<style>
    table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    }
</style>";
?>
</table>
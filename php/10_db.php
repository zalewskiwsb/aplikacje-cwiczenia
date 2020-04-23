<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>DataBase</title>
	<link rel="stylesheet" type="text/css" href="../css/4_db.css">
</head>
<body>
<h3>Użytkownicy</h3>
<table>
<tr>
	<th>Id</th>
	<th>Imię</th>
	<th>Nazwisko</th>
	<th>Rok urodzenia</th>
	<th>Miasto</th>
	<th>Województwo</th>
</tr>
<?php

require_once('10_db_connect.php');

$sql = "SELECT * FROM `user` JOIN `city` ON user.city_id=city.id JOIN wojewodztwo ON wojewodztwo.id=city.wojewodztwo_id";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
	echo "<tr>";
	echo "<td>". $row['id']. "</td>";
	echo "<td>". $row['name']. "</td>";
	echo "<td>". $row['surname']. "</td>";
	echo "<td>". $row['birthday']. "</td>";
	echo "<td>". $row['city']. "</td>";
	echo "<td>". $row['wojewodztwo']. "</td>";
	echo "</tr>";
}

?>
</table>
</body>
</html>

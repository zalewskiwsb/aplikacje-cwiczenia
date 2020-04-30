<?php
session_start();
?>
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
	<th>Data urodzenia</th>
	<th>Rok urodzenia</th>
	<th>Miasto</th>
	<th>Województwo</th>
	<th>Usuń</th>
</tr>
<?php

require_once('funkcje.php');
require_once('10_db_connect.php');

$sql = "SELECT user.id uid,
	user.name, user.surname, user.birthday,
	city.city, wojewodztwo.wojewodztwo
   	FROM `user` JOIN `city` ON user.city_id=city.id JOIN wojewodztwo ON wojewodztwo.id=city.wojewodztwo_id";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
	echo "<tr>";
	echo "<td>". $row['uid']. "</td>";
	echo "<td>". $row['name']. "</td>";
	echo "<td>". $row['surname']. "</td>";
	echo "<td>". $row['birthday']. "</td>";
	echo "<td>". year($row['birthday']). "</td>";
	echo "<td>". $row['city']. "</td>";
	echo "<td>". $row['wojewodztwo']. "</td>";
	echo "<td><a href='del_user.php?id=". $row['uid'] ."'>Usuń</a></td>";
	echo "</tr>";
}

?>
</table>
<?php
if (isset($_GET['add_user'])) {
?>
<h3>Dodawanie użytkownika</h3>
<?php
if (isset($_SESSION['error'])) {
	echo $_SESSION['error'];
	unset($_SESSION['error']);
}
?>
<form action="add_user.php" method="post">
<input type="text" name="name" placeholder="Imię">
<input type="text" name="surname" placeholder="Nazwisko">
<input type="date" name="birthday">
<label for="city">Miasto:</label>
<select id="city" name="city">
<?php
	$sql = "SELECT id, city FROM `city`";
	$result = mysqli_query($conn, $sql);

	while ($row = mysqli_fetch_assoc($result)) {
		echo "<option value='".$row['id']."'>".$row['city']."</option>";
	}
?>
</select>
<input type="submit" value="Dodaj!">
</form>
<?php
} else {
	echo '<h3><a href="?add_user=">Dodaj użytkownika</a></h3>';
}
?>

</body>
</html>

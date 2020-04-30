<?php
session_start();

require_once('10_db_connect.php');

$name = $_POST['name'];
$surname = $_POST['surname'];
$date = $_POST['birthday'];
$city = $_POST['city'];

if (empty($name) || empty($surname) ||
	empty($date) || empty($city)) {
	$_SESSION['error'] = 'Wypełnij wszystkie dane';
	header('Location: 10_db.php?add_user=');
}

//$sql = "INSERT into `user` (`city_id`, `name`, `surname`, `birthday`) VALUES (".(int)$city.", '".$name."', '".$surname."', '".$date."')";
//$result = mysqli_query($conn, $sql);

//header('Location: 10_db.php');

?>

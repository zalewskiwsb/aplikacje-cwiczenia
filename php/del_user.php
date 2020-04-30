<?php
require_once('10_db_connect.php');

$id = $_GET['id'];

if (!empty($id)) {
	$sql = "DELETE FROM `user` WHERE `id`=".$id;
	$result = mysqli_query($conn, $sql);
}
header('Location: 10_db.php');

?>

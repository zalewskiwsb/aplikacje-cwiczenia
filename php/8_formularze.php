<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Wizytówka</title>
</head>
<body>
<?php
// utworzyć wizytówkę, w której użytkownik będzie podawał swoje dane, minimum
// imię, nazwisko, data urodzenia, adres email, miasto
// dane wyświetl za pomocą funkcji (wykorzystaj heredoc)
// utwórz funkcję która czyści dane z białych znaków oraz zamienia pierwsze litery
// na duże a pozostałe na małe (imię, nazwisko, miasto)

function cleanup($string) {
	return ucfirst(strtolower(trim($string)));
}

$has_post = boolval(sizeof($_POST));

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$birthday = $_POST['birthday'];
$email = $_POST['email'];
$city = $_POST['city'];

if ($has_post) {
	if (empty($fname) || empty($lname) || empty($birthday)
		|| empty($email) || empty($city)) {
		echo "Wszystkie pola są wymagane!<br>";
	} else {
		echo "Imię: " . cleanup($fname) . "<br>";
		echo "Nazwisko: " . cleanup($lname) . "<br>";
		echo "Data urodzenia: " . $birthday . "<br>";
		echo "Email: " . $email . "<br>";
		echo "Miasto: " . $city . "<br>";
	}
	echo "<hr>";
}
?>

	<form method="post">
		<label for="fname">Imię</label>
		<input type="text" name="fname"><br>

		<label for="lname">Nazwisko</label>
		<input type="text" name="lname"><br>

		<label for="birthday">Data urodzenia</label>
		<input type="text" name="birthday"><br>

		<label for="email">Email</label>
		<input type="text" name="email"><br>

		<label for="city">Miasto</label>
		<input type="text" name="city"><br>

		<input type="submit" value="Wyświetl">
	</form>
</body>
</html>

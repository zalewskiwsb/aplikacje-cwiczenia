<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Wizytówka</title>
</head>
<body>
<?php

// program wyświetlający ile dni pozostało do końca roku oraz do nowego miesiąca
// utwórz funkcję

function ile_zostalo() {
	$ile_w_roku = date("L") + 365;
	echo "Do końca roku zostało ", $ile_w_roku - (date("z") + 1);
	echo "<br>";

	$ile_w_miesiacu = date("t");
	echo "Do końca miesiąca zostało ", $ile_w_miesiacu - date("d");
	echo "<br>";
}

ile_zostalo();


$data = getdate();
$dzien = $data['mday']; // 1-31
$miesiac = $data['mon']; // 1-12
$rok = $data['year'];
$dzienTyg = $data['wday']; // 0-6, starting at Sunday
$dzienRoku = $data['yday']; // 0-365
$dzienTyg1 = $data['weekday']; // human-readable name, i.e. Monday
$miesiac1 = $data['month']; // human-readable name, i.e. April
$znacznikCzasu = $data[0]; // secs since epoch

switch($dzienTyg) {
	case 0:
		$dzienTyg = "niedziela";
		break;
	case 1:
		$dzienTyg = "poniedziałek";
		break;
	case 2:
		$dzienTyg = "wtorek";
		break;
	case 3:
		$dzienTyg = "środa";
		break;
	case 4:
		$dzienTyg = "czwartek";
		break;
	case 5:
		$dzienTyg = "piątek";
		break;
	case 6:
		$dzienTyg = "sobota";
		break;
}

echo $dzienTyg;

echo "<hr>";

// znacznik czasu

$rok1 = 2020;
$miesiac1 = 4;
$dzien1 = 16;

$rok2 = 2010;
$miesiac2 = 2;
$dzien2 = 10;


$czas1 = mktime(0,0,0, $miesiac1, $dzien1, $rok1);

// sprawdź ile czasu minęło od danej daty
// liczba sekund: ...
// liczba dni: ...
// liczba lat: ...

$czas2 = mktime(0,0,0, $miesiac2, $dzien2, $rok2);

$roznica = abs($czas1 - $czas2);

$roznica_dni = $roznica / (60 * 60 * 24);
$roznica_lat = round($roznica / (60 * 60 * 24 * 365));

echo "Liczba sekund: " . $roznica . "<br>";
echo "Liczba dni: " . $roznica_dni . "<br>";
echo "Liczba lat: " . $roznica_lat . "<br>";

?>
</body>
</html>

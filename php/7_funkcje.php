<?php

function value($a) : string {  // return type hint
	if ($a > 0) {
		return "Większa lub równa od zera";
	} elseif ($a == 0) {
		return "Równe zero";
	} else {
		return "Mniejsza od zera";
	}
}

$x = value(-5);
echo $x;

function getValue($a) : string {
	return $a;
}

echo getValue(1);

echo "<hr>";
// zasięg zmiennych

$x = 10;

function show() {
	echo $GLOBALS['x'] . "<br>";
}

show();

function show1() {
	global $x;
	echo "Zmienna globalna: " . $x . "<br>";
}

show1();

function add() {
	$number = 10;
	echo "Zmienna \$number = " . $number . "<br>";
	$number += 5;
}

add(); // 10
add(); // 10

function add1() {
	static $number = 10;
	echo "Zmienna \$number = " . $number . "<br>";
	$number += 5;
}

add1(); // 10
add1(); // 15

// argumenty

function multiplication($x, $y = 1) {
	return $x * $y;
}

echo multiplication(10, 2) . "<br>"; // 20
echo multiplication(10) . "<br>"; // 10

// argumenty i typy danych

function multiplication1(float $x, int $y) {
	return $x * $y;
}

echo multiplication1(10.0, 2) . "<br>"; // 20
echo multiplication1(10, 3.0) . "<br>"; // 30 - typy nie są walidowane

?>

<?php

echo "<h1>Zadanie 1 - tablica trójwymiarowa</h1>";

/* zadanie domowe:
 * Utwórz tablicę 3-wymiarową i napisz dla niej funkcję wyświetlającą zawartość (wykorzystaj w funkcji foreach)
 * Wyślij na moodle
 */

$threedim = [
	[
		["1-1-1", "1-1-2", "1-1-3"],
		["1-2-1", "1-2-2", "1-2-3"],
		["1-3-1", "1-3-2", "1-3-3"],
	],
	[
		["2-1-1", "2-1-2", "2-1-3"],
		["2-2-1", "2-2-2", "2-2-3"],
		["2-3-1", "2-3-2", "2-3-3"],
	],
	[
		["3-1-1", "3-1-2", "3-1-3"],
		["3-2-1", "3-2-2", "3-2-3"],
		["3-3-1", "3-3-2", "3-3-3"],
	],
];

function print_3d($array) {
	foreach ($array as $one) {
		foreach ($one as $two) {
			foreach ($two as $three) {
				echo "$three ";
			}
			echo "<br>";
		}
		echo "<hr>";
	}
}

print_3d($threedim);

echo "<h1>Zadanie 2 - sortowanie</h1>";
// zadanie 2:
// posortuj prawidłowo dane (niemalejąco).
// chcemy uzyskać to:
// Andrzej, Anna, Janina, Krystyna, Zenon
//
// Napisz funkcję sortującą dane
// Wyświetl prawidłowe dane na ekranie za pomocą funkcji 
// do wrzucenia na moodle

$name = ["Janina", "anna", "Zenon", "krystyna", "andrzej"];

function sort_with_case($array) {
	foreach ($array as $key => $value) {
		$array[$key] = ucfirst($value);
	}
	sort($array);
	return $array;
}

$name = sort_with_case($name);

echo "<pre>";
print_r($name);
echo "</pre>";

// lepiej:
$name = ["Janina", "anna", "Zenon", "krystyna", "andrzej"];
sort($name, SORT_STRING | SORT_FLAG_CASE);
echo "<pre>";
print_r($name);
echo "</pre>";
?>


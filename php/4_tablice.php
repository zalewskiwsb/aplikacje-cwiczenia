<?php

$data = array(
	"name" => "Janusz",
	"surname" => "Nowak",
	"birthday" => "20.02.2020",
	"city" => "Poznań",
);


echo <<<TABLE
	Imię: $data[name]<br>
	Nazwisko: {$data["surname"]}<br>

TABLE;


// operowanie na wartościach
foreach ($data as $value) {
	echo "$value<br>\n";
}

// operowanie na kluczach i wartościach - jak {}.items() w Pythonie
foreach ($data as $key => $value) {
	echo "$key ma wartość $value<br>\n";
}


// zmienne wielowymiarowe
echo "\n\n\nzmienne wielowymiarowe:\n";

$student = array(
	array("Anna", "Nowak"),
	array("Paweł"),
	array("Agnieszka", "Nowak", "Poznań"),
);

foreach ($student as $dane_studenta) {
	foreach ($dane_studenta as $dana) {
		echo $dana ." ";
	}
	echo "<br>\n";
}


/* zadanie domowe:
 * Utwórz tablicę 3-wymiarową i napisz dla niej funkcję wyświetlającą zawartość (wykorzystaj w funkcji foreach)
 * Wyślij na moodle
 */

// cyfry i sortowanie

$cyfry = array(
	array(1,2,3,4),
	array(5,6,7),
	array(8),
	array(9,10),
);

foreach ($cyfry as $wartosc) {
	echo "<br>";
	foreach ($wartosc as $x) {
		echo "$x ";
	}
}

// sortowanie
echo "\n\n\nSortowanie:\n";

$tab = array(10, 1, 5, 75, -4, 100);

function show_array($array) {
	foreach ($array as $value) {
		echo $value . "\n";
	}
}

show_array($tab);
echo "po sortowaniu\n";
sort($tab);
show_array($tab);

echo "po r-sortowaniu\n";
rsort($tab);
show_array($tab);

$tab2 = ["Janina", "anna", "Zenon", "krystyna", "1abc"];

print_r($tab2);
sort($tab2);
print_r($tab2);

echo "\n\n\n\n";

$name = ["Janina", "anna", "Zenon", "krystyna", "andrzej"];

// zadanie 2:
// posortuj prawidłowo dane (niemalejąco).
// chcemy uzyskać to:
// Andrzej, Anna, Janina, Krystyna, Zenon
//
// Napisz funkcję sortującą dane
// Wyświetl prawidłowe dane na ekranie za pomocą funkcji 
// do wrzucenia na moodle

function sort_with_case($array) {
	foreach ($array as $key => $value) {
		$array[$key] = ucfirst($value);
	}
	sort($array);
	return $array;
}

$name = sort_with_case($name);
print_r($name);

// lepiej:
$name = ["Janina", "anna", "Zenon", "krystyna", "andrzej"];
sort($name, SORT_STRING | SORT_FLAG_CASE);
print_r($name);
?>

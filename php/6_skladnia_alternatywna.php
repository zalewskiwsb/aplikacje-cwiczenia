<?php

$a = 10;

if ($a > 0) {
	echo "Liczba większa od 0<br>";
}

// zapis alternatywny
if ($a > 0):
	echo "Liczba większa od 0<br>";
endif;

switch ($a):
case 10:
	echo "10";
	break;
default:
	echo "domyślna wartość";
	break;
endswitch;

foreach ([1, 2, 3] as $num):
	if ($num % 2 == 0):
		echo "Parzysta";
	endif;
endforeach;

?>

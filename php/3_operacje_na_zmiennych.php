<?php
$a = 1.0;
$b = 1;

if ($a == $b) {
  echo "Równe";
} else {
  echo "Różne";
}
echo "<br>";

echo '$a: '.gettype($a)."<br>"; // double
echo '$b: '.gettype($b)."<br>"; // int

if ($a === $b) {
  echo "Identyczne";
} else {
  echo "nieidentyczne";
}
echo "<br>";

// operatory rzutowania
// bool, int, float, string, array, object, unset

$text = "123ssd";

$x = (int)$text;
echo "(int)".$text.": ".$x ."<br>";

$x = (bool)$text;
echo "(bool)".$text.": ".$x ."<br>";

$x = (float)$text;
echo "(float)".$text.": ".$x ."<br>";

$x = (string)$text;
echo "(string)".$text.": ".$x ."<br>";

$x = (array)$text;
echo "(array)".$text.": ".$x ."<br>";

$x = (object)$text;
echo "(object)".$text.": ".$x ."<br>";

$x = (unset)$text;
echo "(unset)".$text.": ".$x ."<br>";
 ?>

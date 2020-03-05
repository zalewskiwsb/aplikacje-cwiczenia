<?php
  $zmienna = '42';
  echo <<<HEREDOC
  <p>Tutaj jest sobie tekst</p>
  <p>Zmienna: $zmienna</p>
HEREDOC;

  $data = <<<HEREDOC
  <p>Inny tekst, w zmiennej.</p>
  Pierwsza linia
  druga linia
  trzecia linia
HEREDOC;

  echo $data; ?><br><br>

<?php
  $name = "JanuSZ Kowalski";

  echo strtolower($name); ?><br>

<?php
  echo ucfirst(strtolower($name))."<br>";
  echo ucwords(strtolower($name))."<br>";
?>


<?php
// usuwanie białych znaków
$name = "Filip ";
$name1 = "Filip   \t";

echo strlen(trim($name))."<br>";
echo strlen(trim($name1))."<br>";

// przeszukiwanie stringa
$address = "Poznań, ul. Wolności 8, tel. (61) 123-45-67";
$find = strstr($address, "tel");  // wrażliwy na wielkość liter
echo $find."<br>";

$find = stristr($address, "Tel");  // niewrażliwy na wielkość liter
echo $find."<br>";

$mail = strstr("wsb@poznan.pl", "@");
echo $mail ."<br>";
$mail = strstr("wsb@poznan.pl", 64);  // ASCII codepoint
echo $mail ."<br>";

$domain = substr($mail, 1);
echo $domain ."<br>";

echo substr("🔱", 1); // LOLOLOL@PHP
?><br>

<?php
// przetwarzanie ciągów znaków
$replace = str_replace("***", " zamiana ", "Mam na imię ***, mieszkam w Poznaniu");
echo $replace ."<br>";

$login = "Bączek";
$censored = array("ą", "ć", "ę", "ł", "ń", "ó", "ś", "ż", "ź");
$replace = array("a", "c", "e", "l", "n", "o", "s", "z", "z");

$validlogin = str_replace($censored, $replace, $login);
echo $login. " => " .$validlogin ."<br>";
 ?>

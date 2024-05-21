<?php
1.
$liczba = 10;
$tekst = "Przykładowy tekst";
$bool = true;
$null = null;

2.
echo $liczba . " " . $tekst . " " . $bool . " " . $null;

3.
echo "Liczba: " . $liczba . "\n";
echo "Tekst: " . $tekst . "\n";
echo "Wartość logiczna: " . $bool . "\n";
echo "Wartość null: " . $null . "\n";

4.
// Komentarz jednolioniowy

/*
 Komentarz
 wielolioniowy
 */

5.
$a= 5;
$b=1;
$c=1;
$r=9;
$y=0;
echo "suma a,b,c,r i y wynosi: ". ($a + $b + $c + $r + $y) . "\n";
 echo $liczba . " dni" . "\n";
 echo "Mam " . $liczba . " książek." . "\n";
 echo "Wartość: " . (5 * $liczba) . "\n"; 
 echo "Pole kwadratu o boku " . $liczba . " wynosi: " . ($liczba * $liczba) . "\n";

 6.
 $tablica = array(1, 2, 3, 4, 5);

 echo "Tablica: " . implode(", ", $tablica) . "\n";

 7.
 $tablicaAsocjacyjna = array(
    "klucz1" => "wartość1",
    "klucz2" => "wartość2",
    "klucz3" => 3,
    "klucz4" => true,
    "klucz5" => null
);

foreach ($tablicaAsocjacyjna as $klucz => $wartość) {
    echo $klucz . ": " . $wartość . "\n";
}

8.
$liczba1 = 10;
$liczba2 = 5;

echo "Suma: " . ($liczba1 + $liczba2) . "\n";
echo "Różnica: " . ($liczba1 - $liczba2) . "\n";
echo "Iloczyn: " . ($liczba1 * $liczba2) . "\n";
echo "Iloraz: " . ($liczba1 / $liczba2) . "\n";

9.
function poleKwadratu($bok) {
    return $bok * $bok;
}

echo "Pole kwadratu o boku 5 wynosi: " . poleKwadratu(5) . "\n";

10.
function poleProstokata($bok1, $bok2) {
    return $bok1 * $bok2;
}

echo "Pole prostokąta o bokach 5 i 3 wynosi: " . poleProstokata(5, 3) . "\n";

11.
function poleKola($srednica) {
    $promien = $srednica / 2;
    return pi() * $promien * $promien;
  }
  
  echo "Pole koła o średnicy 10 wynosi: " . poleKola(10) . "\n";
  
  12.
  function obliczenieFarbyDachDwuspadowy($szerokosc, $dlugoscBoku, $wydajnoscFarby) {
    $polePolaci = $szerokosc * $dlugoscBoku / 2;
    $powierzchniaDachu = $polePolaci * 2;
    $zuzycieFarbyWLitrach = $powierzchniaDachu / ($wydajnoscFarby / 1000);
    return $zuzycieFarbyWLitrach;
}


$szerokoscDachu = 12;
$dlugoscBokuDachu = 5;
$wydajnoscFarbyNaM2 = 450;

$zuzycieFarby = obliczenieFarbyDachDwuspadowy($szerokoscDachu, $dlugoscBokuDachu, $wydajnoscFarbyNaM2);

echo "Do pomalowania dachu potrzeba " . $zuzycieFarby . " litrów farby.";

?>
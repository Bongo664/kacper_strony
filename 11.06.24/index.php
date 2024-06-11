<?php
/*
//zadanie 1
    function aaa($a){
if($a <= 1){
    return false;
}
for($i = 2; $i <= sqrt($a); $i++){
    if($a % $i == 0){
        return false;
        }
    }
    return true;
}
$b = 2;
if(aaa($b)){
    echo $b." jest liczbą pierwszą";
}else{
    echo $b." nie jest liczbą pierwszą";
}

//zadanie 2

$liczba1 = 4;
$liczba2 = 2;
$liczba3 = 3;

if ($liczba1 > $liczba2 && $liczba1 > $liczba3) {
    echo "Największa liczba to: $liczba1";
} elseif ($liczba2 > $liczba1 && $liczba2 > $liczba3) {
    echo "Największa liczba to: $liczba2";
} else {
    echo "Największa liczba to: $liczba3";
}

//zadanie 3
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 === 0 && $i % 5 === 0) {
        echo "2CT ";
    } elseif ($i % 3 === 0) {
        echo "Lala ";
    } elseif ($i % 5 === 0) {
        echo "Tralala ";
    } else {
        echo $i . " ";
    }
}

//zadanie 4

function srednia($liczby) {
  $suma = 0;
  $ilosc = count($liczby);

  foreach ($liczby as $liczba) {
    $suma += $liczba;
  }

  if ($ilosc > 0) {
    return $suma / $ilosc;
  } else {
    return 0;
  }
}

$liczby = [22, 434, 3, 4, 9];
$srednia = srednia($liczby);

echo "Średnia liczb: " . $srednia;
// zadanie 5

echo "<table>";

for ($i = 1; $i <= 10; $i++) {
  echo "<tr>";
  for ($j = 1; $j <= 10; $j++) {
    $wynik = $i * $j;
    echo "<td>" . $wynik . "</td>";
  }
  echo "</tr>";
}

echo "</table>";

//zadanie 6
$liczba = 2;

while ($liczba <= 20) {
  if ($liczba % 2 === 0) {
    echo $liczba . " ";
  }
  $liczba++;
}

//zadanie 7
function drawTriangle($n) {
    for ($i = 1; $i <= $n; $i++) {
      for ($j = 1; $j <= $i; $j++) {
        echo "*";
      }
      echo "<br>";
    }
  }
  drawTriangle(6);

//zadanie 8

function czyWTablicy($tablica, $wartosc) {
  foreach ($tablica as $element) {
    if ($element === $wartosc) {
      return true;
    }
  }
  return false;
}

$liczby = [1, 2, 3, 4, 5];
$wartosc = 1;

if (czyWTablicy($liczby, $wartosc)) {
  echo "$wartosc jest w tablicy.\n";
} else {
  echo "$wartosc nie jest w tablicy.\n";
}

//zadanie 9

//zadanie 10
$sześcian = function ($liczba) {
    return $liczba * $liczba * $liczba;
  };
  
  echo $sześcian(2);

//zadanie 11

function pierwiastekKwadratowy($liczba) {
  if (!is_float($liczba)) {
    throw new Exception("Argument musi być typu float.");
  }

  if ($liczba < 0) {
    throw new Exception("Nie można obliczyć pierwiastka kwadratowego z liczby ujemnej.");
  }

  return sqrt($liczba);
}

try {
  echo pierwiastekKwadratowy(4.0) . "\n";
  echo pierwiastekKwadratowy(2.0) . "\n";
} catch (Exception $e) {
  echo "Wyjątek: " . $e->getMessage() . "\n";
}

//zadanie 12
$string = "ala ma kota w domu";
$string = strtoupper($string);
echo $string;

//zadanie 13

$ciag = "Ala ma kota, a kot ma Ale.";
$ciaga = "kota";

$pozycja = strpos($ciag, $ciaga);

if ($pozycja === false) {
  echo "Podciąg $ciaga nie został znaleziony w ciągu $ciag.\n";
} else {
  echo "Podciąg $ciaga został znaleziony w ciągu $ciag na pozycji: $pozycja.\n";
}

//zadanie 14
$tablica1 = [1, 2, 3];
$tablica2 = [4, 5, 6];

$połączonaTablica = array_merge($tablica1, $tablica2);

echo "Połączona tablica: " . implode(", ", $połączonaTablica) . "\n";

//zadanie 15
$tablica1 = [1, 2, 3, 4, 5];
$tablica2 = [3, 4, 5, 6, 7];

$roznica = array_diff($tablica1, $tablica2);

echo "Różnica między tablicami: " . implode(", ", $roznica) . "\n";

//zadanie 16
function odwrocKolejnoscSlow($ciag) {
  $ciag = trim($ciag);
  $slowa = explode(' ', $ciag);
  $odwroconaKolejnosc = array_reverse($slowa);
  $ciagOdwrocony = implode(' ', $odwroconaKolejnosc);
  
  return $ciagOdwrocony;
}

$ciag = "Ala ma kota a, kot ma Ale";
$ciagOdwrocony = odwrocKolejnoscSlow($ciag);
echo "Ciąg z odwróconą kolejnością słów: $ciagOdwrocony\n";

//zadanie 17

function silnia($liczba) {
    if ($liczba < 0) {
        throw new Exception("Nie można obliczyć silni liczby ujemnej.");
    }

    $silnia = 1;
    for ($i = 1; $i <= $liczba; $i++) {
        $silnia *= $i;
    }

    return $silnia;
}
try {
    $liczba = 5;
    $wynikSilni = silnia($liczba);
    echo "Silnia $liczba wynosi: $wynikSilni\n";
} catch (Exception $e) {
    echo "Wyjątek: " . $e->getMessage() . "\n";
}

//zadanie 18


function sprawdzPalindrom($ciag) {

  $ciag = trim(strtolower($ciag));
  return $ciag === strrev($ciag);
}
$ciagi = [
  "kajak",
  "alama",
  "kot ma ok",
  "1234321",
];

foreach ($ciagi as $ciag) {
  $wynik = sprawdzPalindrom($ciag) ? "TAK" : "NIE";
  echo "$ciag: $wynik\n";
}

//zadanie 19
$data = [
"imie" => "Jan",
"nazwisko" => "Kowalski",
"wiek" => 30,
"miasto" => "Kraków"
];

asort($data);

print_r($data);

//zadanie 20
$plik = "qwer.txt";

if (!file_exists($plik) || !is_readable($plik)) {
  echo "Błąd: Nie można odczytać pliku '$plik'\n";
  exit;
}
$zawartosc = file_get_contents($plik);
echo $zawartosc;

//zadanie 21
function odwrocTablice($tablica) {
    if (!is_array($tablica)) {
      throw new Exception("Argument musi być tablicą.");
    }
  
    $dlugosc = count($tablica);
    $odwroconaTablica = [];
  
    for ($i = $dlugosc - 1; $i >= 0; $i--) {
      $odwroconaTablica[] = $tablica[$i];
    }
  
    return $odwroconaTablica;
  }
  
  $tablica = [1, 2, 3, 4, 5];
  $odwroconaTablica = odwrocTablice($tablica);
  

  echo "Odwrócona tablica: " . implode(", ", $odwroconaTablica) . "\n";

  //zadanie 22


    $tablicaAsocjacyjna = array(
    "imie" => "Jan",
    "nazwisko" => "Kowalski",
    "wiek" => 30
);
              
    foreach ($tablicaAsocjacyjna as $klucz => $wartosc) {
    echo $klucz . ": " . $wartosc . "\n";
}

//zadanie 23
function zamienCiagNaSlowa($ciag) {
  $ciag = trim($ciag);
  $slowa = explode(" ", $ciag);
  $slowa = array_filter($slowa, function($slowo) {
    return $slowo !== "";
  });
  return $slowa;
}
$ciag = "Ala ma kota, a kot ma Ale.";
$slowa = zamienCiagNaSlowa($ciag);

echo "Słowa z ciągu: " . implode(", ", $slowa) . "\n";
//zadanie 24

function sprawdzLiczbeDoskonala($liczba) {
  if ($liczba <= 0) {
    return false;
  }
  $sumaDzielnikow = 1;
  for ($i = 2; $i <= sqrt($liczba); $i++) {
    if ($liczba % $i === 0) {
      $sumaDzielnikow += $i; 
      if ($i === $liczba / $i) { 
        break;
      }
      $sumaDzielnikow += $liczba / $i;
    }
  }
  return $sumaDzielnikow === $liczba;
}
$liczba = 29;
if (sprawdzLiczbeDoskonala($liczba)) {
  echo "$liczba jest liczbą doskonałą\n";
} else {
  echo "$liczba nie jest liczbą doskonałą\n";
}
*/
//zadanie 25

?>
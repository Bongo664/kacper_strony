<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $owoce = ["Jabłko", "Banan", "Gruszka", "Wiśnia"];
    $owoce[] = "Pomarańcza";
    foreach ($owoce as $owoc) {
        echo $owoc . "<br>";
    }
    
    $samochod = ["marka" => "audi", "model" => "bbb", "rok" => 2000, "kolor" => "czarny"];
    foreach ($samochod as $klucz => $wartosc) {
        echo "$klucz: $wartosc <br>";
    }

    $liczby = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    if(in_array(10,$liczby)){
        echo "10 jest w tablicy";
    }
    else{
        echo "10 nie ma w tablicy";
    }
    echo "<br>";
    $tab1 = [1, 2, 3];
    $tab2 = [4, 5, 6];
    $polaczone = array_merge($tab1, $tab2);
    foreach($polaczone as $liczba){
        echo $liczba . " ";
    }

    echo "<br>";

    $tablicz = [5,2,7,3,6,1,9,4,8];
    rsort($tablicz);
    foreach($tablicz as $liczba){
        echo $liczba . " ";
    }

    echo "<br>";
    $student = array(
        array("Jan", 18, "3A"),
        array("Anna", 17, "3B"),
        array("Piotr", 19, "3C")
       );
       echo "imie studenta 1 ". $student[0][0]."<br>";

    function sredniaTablicy($tablica) {
        $suma = array_sum($tablica);
        $ilosc = count($tablica);
        return $suma / $ilosc;
    }

    $przykladowaTablica = [1, 2, 3, 4, 5];
    echo "Średnia wartość elementów tablicy: " . sredniaTablicy($przykladowaTablica) . "<br>";

    function znajdzNajwieksza($tablica) {
        return max($tablica);
    }
    echo "Największa liczba w tablicy: " . znajdzNajwieksza($przykladowaTablica) . "<br>";

    function iloscElementow($tablica) {
        return count($tablica);
    }
    echo "Liczba elementów w tablicy: " . iloscElementow($przykladowaTablica) . "<br>";

    $uczestnicy = ["Jan", "Anna", "Piotr"];
    array_pop($uczestnicy);
    foreach($uczestnicy as $uczestnik) {
        echo $uczestnik . " ";
    }
    echo "<br>";

    $produkty = ["Chleb", "Mleko", "Masło"];
    array_unshift($produkty, "Jajka");
    foreach($produkty as $produkt) {
        echo $produkt . " ";
    }
    echo "<br>";

    function usunPowtorzenia($tablica) {
        return array_unique($tablica);
    }
    $tablicaZPowtorzeniami = [1, 2, 2, 3, 4, 4, 5];
    foreach(usunPowtorzenia($tablicaZPowtorzeniami) as $liczba) {
        echo $liczba . " ";
    }
    echo "<br>";

    $samochody = [
        ["marka" => "audi", "model" => "A4", "rok" => 2005],
        ["marka" => "bmw", "model" => "X5", "rok" => 2010],
        ["marka" => "mercedes", "model" => "C200", "rok" => 2008]
    ];
    usort($samochody, function($a, $b) {
        return $a['rok'] <=> $b['rok'];
    });
    
    foreach($samochody as $samochod) {
        echo $samochod['marka'] . " " . $samochod['model'] . " " . $samochod['rok'] . "<br>";
    }
    echo "<br>";
    
    ?>
</body>
</html>
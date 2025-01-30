<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
    <?php
    $imie = "Jan";
    $wiek = 25;
    echo "Imie: $imie, wiek: $wiek <br>";

    $tablica = array("Jabłko", "Banan", "Pomarańcza", "Winogrono");
    foreach ($tablica as $owoc) {
        echo $owoc . "<br>";
    }

    if($wiek > 18){
        echo "Jesteś pełnoletni.<br>";
    }
    else{
        echo "Jesteś niepełnoletni.<br>";   
    }

    $tablica1 = array("Katowice", "Warszawa", "Gdańsk");
    print_r($tablica1);
    echo "<br>";

    $x = 20;
    var_dump($x);
    echo "<br>";

    define("PI", 3.14159);
    echo "Stała PI: " . PI . "<br>";

    $liczba = 10;
    echo "Początkowa wartość liczby: $liczba <br>";

    $liczba += 5;
    echo "Po += 5: $liczba <br>";

    $liczba -= 3;
    echo "Po -= 3: $liczba <br>";

    $liczba *= 2;
    echo "Po *= 2: $liczba <br>";

    $liczba /= 4;
    echo "Po /= 4: $liczba <br>";

    echo "<h1>dynamika</h1>";
    echo "<p>wow</p>";

    if (isset($x)) {
        echo "Wartość zmiennej x: $x <br>";
    }
    else{
        echo "Zmienna x nie istnieje <br>";
    }
    ?>
</body>
</html>

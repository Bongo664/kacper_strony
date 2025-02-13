<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a = 30;
    $b = 20;
    if ($a > $b) {
        echo "Liczba 30 jest większa od 20";
    } else {
        echo "Liczba 30 nie jest większa od 20";
    }
    echo "<br>";

    $dzien = 5;
    switch ($dzien) {
        case 1:
            echo "Poniedziałek";
            break;
        case 2:
            echo "Wtorek";
            break;
        case 3:
            echo "Środa";
            break;
        case 4:
            echo "Czwartek";
            break;
        case 5:
            echo "Piątek";
            break;
        case 6:
            echo "Sobota";
            break;
        case 7:
            echo "Niedziela";
            break;
        default:
            echo "Nie ma takiego dnia tygodnia";
    }
    echo "<br>";

    for ($i = 1; $i <= 20; $i++) {
        echo $i . " ";
    }
    echo "<br>";

    $i = 10;
    while ($i >= 0) {
        echo $i . " ";
        $i--;
    }
    echo "<br>";

    $zwi = ["pies", "kot", "ryba"];
    foreach ($zwi as $zwierze) {
        echo $zwierze . " ";
    }
    echo "<br>";

    for ($i = 1; $i <= 10; $i++) {
        if ($i == 8) {
            break;
        }
        echo $i . " ";
    }
    echo "<br>";

    for ($i = 1; $i <= 10; $i++){
        if ($i == 4){
            continue;
        }
        echo $i . " ";
    }
    echo "<br>";

    function PoleProstokata($a, $b){
        return $a * $b;
    }
    echo PoleProstokata(5, 10);
    echo "<br>";
    
    function srednia($tablica){
        $suma = 0;
        foreach ($tablica as $liczba){
            $suma += $liczba;
        }
        return $suma / count($tablica);
    }
    echo srednia([1, 2, 3, 4, 5]);
    echo "<br>";

    function czyParzysta($liczba){
        if ($liczba % 2 == 0){
            return "True";
        } else {
            return "False";
        }
    }
    echo czyParzysta(4);
    echo "<br>";

    function potega($a,$b){
        return pow($a,$b);
    }
    echo potega(2,3);
    echo "<br>";

    function czyPelnoletni($wiek){
        if ($wiek >= 18){
            return "True";
        }
        else{
            return "False";
        }
    }
    echo czyPelnoletni(20);
    echo "<br>";

    function wieksza($a,$b){
        if ($a > $b){
            return $a;
        }
        else{
            return $b;
        }
    }
    echo wieksza(5,10);
    echo "<br>";

    function silnia($n){
        if ($n == 0){
            return 1;
        }
        else{
            return $n * silnia($n-1);
        }
    }
    echo silnia(5);
    echo "<br>";

    function liczbaZnakow($napis){
        return strlen($napis);
    }
    echo liczbaZnakow("la");
    ?>
    
</body>
</html>
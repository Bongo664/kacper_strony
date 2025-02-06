<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //zadanie1
    $nazwa = "PHP";
    echo($nazwa);
    echo "<br>";
    //zadanie2
    $liczba1 = 15;
    $liczba2 = 5;
    echo $liczba1 + $liczba2;
    echo "<br>";
    echo $liczba1 - $liczba2;
    echo "<br>";
    echo $liczba1 * $liczba2;
    echo "<br>";
    echo $liczba1 / $liczba2;
    echo "<br>";
    echo $liczba1 % $liczba2;
    echo "<br>";
    //zadanie3
    $liczba3 = 10;
    $liczba4 = 5;
    if($liczba3 > $liczba4){
        echo "Liczba 10 jest większa od 5";
    }
    else{
        echo "Liczba 10 nie jest większa od 5";
    }
    echo "<br>";
    //zadanie4
    $kolory = ["czerwony", "zielony", "niebieski"];
    foreach($kolory as $kolor){
        echo $kolor . "<br>";
    }
    //zadanie5
    $x = true;
    $y = false;
    var_dump($x && $y);
    var_dump($x || $y);
    echo "<br>";
    //zadanie6
    for($i = 1; $i <= 10; $i++){
        echo $i . "<br>";
    }
    //zadanie7
    $wiek = 18;
    echo($wiek >= 18 ) ? "Jesteś pełnoletni" : "Jesteś niepełnoletni";
    echo "<br>";
    //zadanie8
    $dzien = date("l");
    if($dzien == "Saturday" || $dzien == "Sunday"){
        echo "Weekend";
    }
    else{
        echo "Dzień roboczy";
    }
    echo "<br>";
    //zadanie9
    $i = 2;
    while($i <= 20){
        echo $i . "<br>";
        $i += 2;
    }
    //zadanie10
    //Stwórz prostą funkcję w PHP, która przyjmuje dwa argumenty i zwraca ich sumę.
    function suma($a, $b){
        return $a + $b;
    }
    echo suma(5, 10);
    ?>
    
</body>
</html>
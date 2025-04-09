<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zadania 6-7 - Operacje na pliku liczby.txt</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            line-height: 1.6;
        }
        .wynik {
            margin: 10px 0;
            padding: 10px;
            background-color: #f0f0f0;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <h2>Zadania 6-7 - Operacje na pliku liczby.txt</h2>

    <h3>6. Tworzenie pliku z liczbami</h3>
    <div class="wynik">
    <?php
    $plik = fopen("liczby.txt", "w");
    for($i = 1; $i <= 10; $i++) {
        fwrite($plik, $i . "\n");
    }
    fclose($plik);
    echo "Utworzono plik z liczbami od 1 do 10";
    ?>
    </div>

    <h3>7. Odczyt liczb większych od 5</h3>
    <div class="wynik">
    <?php
    $liczby = file("liczby.txt");
    echo "Liczby większe od 5:<br>";
    foreach($liczby as $liczba) {
        if(intval($liczba) > 5) {
            echo $liczba;
        }
    }
    ?>
    </div>
</body>
</html>
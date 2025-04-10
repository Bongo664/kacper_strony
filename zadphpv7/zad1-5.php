<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zadania 1-5 - Operacje na plikach</title>
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
    <h2>Zadania 1-5 - Operacje na plikach</h2>

    <h3>1. Tworzenie i zapis do pliku</h3>
    <div class="wynik">
    <?php
    $plik = fopen("test.txt", "w");
    fwrite($plik, "Witaj w PHP");
    fclose($plik);
    echo "Utworzono plik i zapisano tekst";
    ?>
    </div>

    <h3>2. Odczyt z pliku</h3>
    <div class="wynik">
    <?php
    $plik = fopen("test.txt", "r");
    echo "Zawartość pliku: " . fread($plik, filesize("test.txt"));
    fclose($plik);
    ?>
    </div>

    <h3>3. Sprawdzanie czy plik istnieje</h3>
    <div class="wynik">
    <?php
    if(file_exists("test.txt")) {
        echo "Plik istnieje";
    } else {
        echo "Plik nie istnieje";
    }
    ?>
    </div>

    <h3>4. Dopisywanie nowej linii</h3>
    <div class="wynik">
    <?php
    $plik = fopen("test.txt", "a");
    fwrite($plik, "\nNowa linia tekstu");
    fclose($plik);
    echo "Dopisano nową linię";

    $plik = fopen("test.txt", "r");
    echo "<br>Aktualna zawartość pliku:<br>" . nl2br(fread($plik, filesize("test.txt")));
    fclose($plik);
    ?>
    </div>

    <h3>5. Usuwanie pliku</h3>
    <div class="wynik">
   <?php/* 
    if(unlink("test.txt")) {
        echo "Plik został usunięty";
    } else {
        echo "Nie udało się usunąć pliku";
    }
    */?>
    </div>

</body>
</html>
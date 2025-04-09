<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zadania 10-14 - Sesje</title>
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
    <h2>Zadania 10-14 - Sesje</h2>

    <h3>10. Sprawdzanie rozmiaru pliku</h3>
    <div class="wynik">
    <?php
    if(file_exists("test.txt")) {
        echo "Rozmiar pliku test.txt: " . filesize("test.txt") . " bajtów";
    } else {
        echo "Plik test.txt nie istnieje";
    }
    ?>
    </div>

    <h3>11. Tworzenie sesji username</h3>
    <div class="wynik">
    <?php
    session_start();
    $_SESSION['username'] = "Admin";
    echo "Utworzono sesję username z wartością: " . $_SESSION['username'];
    ?>
    </div>

    <h3>12. Odczyt sesji username</h3>
    <div class="wynik">
    <?php
    if(isset($_SESSION['username'])) {
        echo "Wartość sesji username: " . $_SESSION['username'];
    } else {
        echo "Sesja username nie istnieje";
    }
    ?>
    </div>

    <h3>13. Usuwanie zmiennej username z sesji</h3>
    <div class="wynik">
    <?php
    if(isset($_SESSION['username'])) {
        unset($_SESSION['username']);
        echo "Usunięto zmienną username z sesji";
    } else {
        echo "Sesja username już nie istnieje";
    }
    ?>
    </div>

    <h3>14. Licznik odwiedzin strony</h3>
    <div class="wynik">
    <?php
    if(!isset($_SESSION['visits'])) {
        $_SESSION['visits'] = 0;
    }
    $_SESSION['visits']++;
    echo "Liczba odwiedzin strony: " . $_SESSION['visits'];
    ?>
    </div>

</body>
</html>
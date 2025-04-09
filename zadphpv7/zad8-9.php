<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zadania 8-9 - Logowanie i formularz</title>
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
        form {
            margin: 10px 0;
        }
        input {
            margin: 5px 0;
            padding: 5px;
        }
    </style>
</head>
<body>
    <h2>Zadania 8-9 - Logowanie i formularz</h2>

    <h3>8. Logowanie odwiedzin</h3>
    <div class="wynik">
    <?php
    $log = fopen("dziennik.log", "a");
    fwrite($log, date("Y-m-d H:i:s") . "\n");
    fclose($log);
    echo "Zapisano datę i godzinę odwiedzin";
    
    echo "<br>Zawartość pliku dziennik.log:<br>";
    echo nl2br(file_get_contents("dziennik.log"));
    ?>
    </div>

    <h3>9. Formularz zapisu danych</h3>
    <div class="wynik">
    <?php
    if(isset($_POST['submit'])) {
        $plik = fopen("dane.txt", "a");
        fwrite($plik, $_POST['imie'] . " " . $_POST['nazwisko'] . "\n");
        fclose($plik);
        echo "Zapisano dane do pliku";
        
        echo "<br>Zawartość pliku dane.txt:<br>";
        echo nl2br(file_get_contents("dane.txt"));
    }
    ?>
    <form method="post">
        <input type="text" name="imie" placeholder="Imię" required><br>
        <input type="text" name="nazwisko" placeholder="Nazwisko" required><br>
        <input type="submit" name="submit" value="Zapisz">
    </form>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// 1. Stwórz i zapisz do pliku
$plik = fopen("test.txt", "w");
fwrite($plik, "Witaj w PHP");
fclose($plik);

// 2. Odczytaj zawartość pliku
if (file_exists("test.txt")) {
    $zawartosc = file_get_contents("test.txt");
    echo "Zawartość pliku: " . $zawartosc . "<br>";
}

// 3. Sprawdź czy plik istnieje
if (file_exists("test.txt")) {
    echo "Plik test.txt istnieje<br>";
}

// 4. Dopisz nową linię
$plik = fopen("test.txt", "a");
fwrite($plik, "\nNowa linia tekstu");
fclose($plik);

// 5. Usuń plik
unlink("test.txt");

// 6. Stwórz plik z liczbami
$plik = fopen("liczby.txt", "w");
for ($i = 1; $i <= 10; $i++) {
    fwrite($plik, $i . "\n");
}
fclose($plik);

// 7. Odczytaj i wyświetl liczby > 5
$liczby = file("liczby.txt", FILE_IGNORE_NEW_LINES);
foreach ($liczby as $liczba) {
    if ($liczba > 5) {
        echo $liczba . "<br>";
    }
}

// 8. Zapisz datę i godzinę odwiedzin
$log = fopen("dziennik.log", "a");
fwrite($log, date("Y-m-d H:i:s") . "\n");
fclose($log);

// 9. Formularz i zapis do pliku
?>
<form method="post" action="">
    <input type="text" name="imie" placeholder="Imię"><br>
    <input type="text" name="nazwisko" placeholder="Nazwisko"><br>
    <input type="submit" value="Zapisz">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dane = fopen("dane.txt", "a");
    fwrite($dane, $_POST['imie'] . " " . $_POST['nazwisko'] . "\n");
    fclose($dane);
}

// 10. Sprawdź rozmiar pliku
if (file_exists("test.txt")) {
    echo "Rozmiar pliku: " . filesize("test.txt") . " bajtów<br>";
}

// 11-13. Operacje na sesji
session_start();
$_SESSION['username'] = "Admin";
echo "Wartość sesji: " . $_SESSION['username'] . "<br>";
unset($_SESSION['username']);

// 14. Licznik odwiedzin
if (!isset($_SESSION['visits'])) {
    $_SESSION['visits'] = 0;
}
$_SESSION['visits']++;
echo "Liczba odwiedzin: " . $_SESSION['visits'] . "<br>";

// 15-17. Operacje na ciasteczkach
setcookie("preferencje", "ciemny motyw", time() + (7 * 24 * 60 * 60));
if (isset($_COOKIE["preferencje"])) {
    echo "Wartość ciasteczka: " . $_COOKIE["preferencje"] . "<br>";
}
setcookie("preferencje", "", time() - 3600);

// 18. Sprawdź obsługę ciasteczek
?>
<script>
if (navigator.cookieEnabled) {
    document.write("Ciasteczka są włączone<br>");
} else {
    document.write("Ciasteczka są wyłączone<br>");
}
</script>

<?php
// 19. Funkcja zapisu do sesji
function zapiszDoSesji($klucz, $wartosc) {
    $_SESSION[$klucz] = $wartosc;
}

// 20. Strona logowania
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
    if ($_POST['login'] == "admin" && $_POST['haslo'] == "admin") {
        $_SESSION['zalogowany'] = true;
        header("Location: welcome.php");
        exit();
    }
}
?>

<form method="post" action="">
    <input type="text" name="login" placeholder="Login"><br>
    <input type="password" name="haslo" placeholder="Hasło"><br>
    <input type="submit" value="Zaloguj">
</form>

</body>
</html>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zadania 15-20 - Ciasteczka i logowanie</title>
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
    <h2>Zadania 15-20 - Ciasteczka i logowanie</h2>

    <h3>15. Tworzenie ciasteczka</h3>
    <div class="wynik">
    <?php
    setcookie("preferencje", "ciemny motyw", time() + (7 * 24 * 60 * 60));
    echo "Utworzono ciasteczko preferencje";
    ?>
    </div>

    <h3>16. Odczyt ciasteczka</h3>
    <div class="wynik">
    <?php
    if(isset($_COOKIE['preferencje'])) {
        echo "Wartość ciasteczka preferencje: " . $_COOKIE['preferencje'];
    } else {
        echo "Ciasteczko preferencje nie istnieje";
    }
    ?>
    </div>

    <h3>17. Usuwanie ciasteczka</h3>
    <div class="wynik">
    <?php
    setcookie("preferencje", "", time() - 3600);
    echo "Usunięto ciasteczko preferencje";
    ?>
    </div>

    <h3>18. Sprawdzanie obsługi ciasteczek</h3>
    <div class="wynik">
    <?php
    echo isset($_COOKIE) ? "Ciasteczka są włączone" : "Ciasteczka są wyłączone";
    ?>
    </div>

    <h3>19. Funkcja zapisu do sesji</h3>
    <div class="wynik">
    <?php
    session_start();
    function zapiszDoSesji($klucz, $wartosc) {
        $_SESSION[$klucz] = $wartosc;
    }
    
    zapiszDoSesji("testowa", "wartość testowa");
    echo "Zapisano do sesji: " . $_SESSION['testowa'];
    ?>
    </div>

    <h3>20. System logowania</h3>
    <div class="wynik">
    <?php
    if(isset($_POST['login']) && isset($_POST['haslo'])) {
        if($_POST['login'] == "admin" && $_POST['haslo'] == "admin123") {
            $_SESSION['zalogowany'] = true;
            header("Location: witamy.php");
            exit();
        } else {
            echo "Błędny login lub hasło";
        }
    }
    ?>
    <form method="post">
        <input type="text" name="login" placeholder="Login" required><br>
        <input type="password" name="haslo" placeholder="Hasło" required><br>
        <input type="submit" value="Zaloguj">
    </form>
    </div>
</body>
</html>
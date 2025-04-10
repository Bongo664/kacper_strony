<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Witamy</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            line-height: 1.6;
        }
        .komunikat {
            margin: 10px 0;
            padding: 10px;
            background-color: #f0f0f0;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <?php
    session_start();
    if(!isset($_SESSION['zalogowany'])) {
        header("Location: zad15-20.php");
        exit();
    }
    ?>
    <div class="komunikat">
        <h2>Witaj w systemie!</h2>
        <p>Zostałeś pomyślnie zalogowany.</p>
        <a href="zad15-20.php">Powrót do strony logowania</a>
    </div>
</body>
</html>
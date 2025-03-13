<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Dziękujemy</h1><br>
    <a href="index.php">powrót</a><br>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $imie = htmlspecialchars($_POST['imie']);
            $wiek = htmlspecialchars($_POST['wiek']);
            $email = htmlspecialchars($_POST['email']);
            $haslo = htmlspecialchars($_POST['haslo']);
    
            echo "Imię: $imie<br>";
            echo "Wiek: $wiek<br>"; 
            echo "Email: $email<br>";
            echo "Hasło: $haslo<br>";
    
            header("Location: dziekujemy.php");
            exit();
        } else {
            echo "Nieprawidłowe żądanie.";
        }
    ?>
</body>
</html>
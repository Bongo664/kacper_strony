<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="post" action="">
        <label for="imie">Imię:</label>
        <input type="text" id="imie" name="imie"><br>
        <label for="wiek">Wiek:</label>
        <input type="text" id="wiek" name="wiek"><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br>
        <label for="haslo">Hasło:</label>
        <input type="password" id="haslo" name="haslo"><br>
        <input type="radio" name="plec" value="Mężczyzna"> Mężczyzna
        <input type="radio" name="plec" value="Kobieta"> Kobieta<br>
        <select name="miasto">
            <option value="Warszawa">Warszawa</option>
            <option value="Kraków">Kraków</option>
            <option value="Gdańsk">Gdańsk</option>
        </select><br>
        <input type="checkbox" name="zgoda" value="tak"> Akceptuję regulamin<br>
        <label for="telefon">Telefon:</label>
        <input type="text" id="telefon" name="telefon"><br>
        <input type="checkbox" name="opcje[]" value="Opcja 1"> Opcja 1
        <input type="checkbox" name="opcje[]" value="Opcja 2"> Opcja 2
        <input type="checkbox" name="opcje[]" value="Opcja 3"> Opcja 3<br>
        <input type="submit" value="Wyślij">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $errors = [];

        if (empty($_POST['imie'])) {
            $errors[] = "Pole imię jest wymagane.";
        } else {
            $imie = htmlspecialchars($_POST['imie']);
        }

        if (empty($_POST['wiek'])) {
            $errors[] = "Pole wiek jest wymagane.";
        } else {
            $wiek = htmlspecialchars($_POST['wiek']);
            if (!is_numeric($wiek)) {
                $errors[] = "Podany wiek nie jest liczbą.";
            }
        }

        if (empty($_POST['email'])) {
            $errors[] = "Pole email jest wymagane.";
        } else {
            $email = htmlspecialchars($_POST['email']);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors[] = "Niepoprawny adres e-mail.";
            }
        }

        if(empty($_POST['plec'])) {
            $errors[] = "Pole płeć jest wymagane.";
        } else {
            $plec = htmlspecialchars($_POST['plec']);
        }
        if(empty($_POST['miasto'])) {
            $errors[] = "Pole miasto jest wymagane.";
        } else {
            $miasto = htmlspecialchars($_POST['miasto']);
        }
        if(empty($_POST['zgoda'])) {
            $errors[] = "Pole zgoda jest wymagane.";
        } else {
            $zgoda = htmlspecialchars($_POST['zgoda']);
        }

        if (empty($_POST['haslo'])) {
            $errors[] = "Pole hasło jest wymagane.";
        } else {
            $haslo = htmlspecialchars($_POST['haslo']);
            if (strlen($haslo) < 8) {
                $errors[] = "Hasło musi mieć co najmniej 8 znaków.";
            }
        }

        if (empty($_POST['telefon'])) {
            $errors[] = "Pole telefon jest wymagane.";
        } else {
            $telefon = htmlspecialchars($_POST['telefon']);
            if (!preg_match('/^[0-9]{9}$/', $telefon)) {
                $errors[] = "Telefon musi zawierać 9 cyfr.";
            }
        }

        if (empty($errors)) {
            echo "Podane imię: " . $imie . "<br>";
            echo "Podany wiek: " . $wiek . "<br>";
            echo "Twój adres e-mail: " . $email . "<br>";
            echo "Hasło: " . str_repeat('*', strlen($haslo)) . "<br>";
            echo "Telefon: " . $telefon . "<br>";

            if (isset($_POST['opcje'])) {
                echo "Zaznaczone opcje: " . implode(", ", $_POST['opcje']) . "<br>";
            }

            header("Location: dziekujemy.php");
            exit();
        } else {
            foreach ($errors as $error) {
                echo $error . "<br>";
            }
        }
    }
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona 2</title>
</head>
<body>
    <form method="post" action="dziekujemy.php">
        <input type="hidden" name="imie" value="<?php echo htmlspecialchars($_POST['imie']); ?>">
        <input type="hidden" name="wiek" value="<?php echo htmlspecialchars($_POST['wiek']); ?>">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br>
        <label for="haslo">Hasło:</label>
        <input type="password" id="haslo" name="haslo"><br>
        <input type="submit" value="Dalej">
    </form>
</body>
</html>
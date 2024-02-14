<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 300px;
            width: 100%;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<?php
// Simulace uživatelského jména a hesla
$platneUzivJmeno = "uzivatel";
$platneHeslo = "heslo";

$prihlaseniUspesne = false;

// Zpracování formuláře po odeslání
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Získání hodnot z formuláře
    $jmeno = $_POST["jmeno"];
    $heslo = $_POST["heslo"];

    // Kontrola uživatelského jména a hesla
    if ($jmeno === $platneUzivJmeno && $heslo === $platneHeslo) {
        // Nastavení proměnné na úspěšné přihlášení
        $prihlaseniUspesne = true;
    
        // Přesměrování na jinou stránku
        header("Location: uspesne-prihlaseni.php");
        exit(); // Zajistí, že se kód dále neprovede po přesměrování
    } else {
        echo "Neplatné uživatelské jméno nebo heslo. Jméno: $jmeno, Heslo: $heslo, Platné jméno: $platneUzivJmeno, Platné heslo: $platneHeslo";
    }
}
?>

<!-- HTML formulář -->
<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    <label for="jmeno">Uživatelské jméno:</label>
    <input type="text" name="jmeno" required>

    <label for="heslo">Heslo:</label>
    <input type="password" name="heslo" required>

    <input type="submit" value="Přihlásit">
</form>

</body>
</html>

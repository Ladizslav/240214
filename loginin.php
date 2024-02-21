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

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        nav li {
            display: inline;
            margin-right: 15px;
        }

        nav a {
            text-decoration: none;
            color: #fff;
        }

        .logout-btn {
            color: #fff;
            cursor: pointer;
        }

        .logout-btn:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<?php
session_start();
include("header.php");
$credentialsFile = 'users.json';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jmeno = $_POST["jmeno"];
    $heslo = $_POST["heslo"];

    $credentials = json_decode(file_get_contents($credentialsFile), true);

    foreach ($credentials as $credential) {
        if ($jmeno === $credential['username'] && $heslo === $credential['password']) {
            $_SESSION["loggedin"] = true;
            $_SESSION["username"] = $jmeno;
            header("Location: uspesne-prihlaseni.php");
            exit();
        }
    }

    echo "Neplatné uživatelské jméno nebo heslo.";
}
include("footer.php");
?>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    <label for="jmeno">Uživatelské jméno:</label>
    <input type="text" name="jmeno" required>

    <label for="heslo">Heslo:</label>
    <input type="password" name="heslo" required>

    <input type="submit" value="Přihlásit">
</form>

</body>
</html>

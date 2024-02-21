<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Úspěšné přihlášení</title>
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

        .success-message {
            background-color: #4caf50;
            color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .logout-btn {
            color: #fff;
            cursor: pointer;
            text-decoration: underline;
        }

        .logout-btn:hover {
            text-decoration: none;
        }
    </style>
</head>
<body>
<div class="success-message">
    <h1>Úspěšné přihlášení!</h1>
    <p>Vítejte na naší stránce.</p>
    
    <!-- Přidán odkaz na domovskou stránku -->
    <p><a href="index.php" class="logout-btn">Domovská stránka</a></p>

    
</div>
</body>
</html>

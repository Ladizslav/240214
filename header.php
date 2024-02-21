<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website Title</title>
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        <?php
        // Check if the current page is loginin.php or uspesne-prihlaseni.php
        $current_page = basename($_SERVER['PHP_SELF']);
        if ($current_page === 'loginin.php' || $current_page === 'uspesne-prihlaseni.php') {
            echo 'header {
                    background-color: #333;
                    color: #fff;
                    text-align: center;
                    padding: 10px;
                    position: fixed;
                    top: 0;
                    width: 100%;
                }';
        } else {
            echo 'header {
                    background-color: #333;
                    color: #fff;
                    text-align: center;
                    padding: 10px;
                }';
        }
        ?>

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
<header>
        <h1>Your Website Header</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <?php
                // Validace na základě přihlášení
                if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
                    echo '<li><a href="data.php">Data</a></li>';
                    echo '<li><span class="logout-btn" onclick="location.href=\'logout.php\'">Logout</span></li>';
                } else {
                    echo '<li><a href="loginin.php">Login</a></li>';
                }
                ?>
            </ul>
        </nav>
    </header>
    
</body>
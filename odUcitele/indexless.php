<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

<h2>Login</h2>

<form action="login.php" method="post">
    <label for="jmeno">Username:</label>
    <input type="text" id="jmeno" name="jmeno" required><br>

    <label for="heslo">Password:</label>
    <input type="password" id="heslo" name="heslo" required><br>

    <input type="submit" value="Login">
</form>

</body>
</html>

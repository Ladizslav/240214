
<?php
/*
require_once "./classes/User.php"
//print_r($_POST["jmeno"]);
//session_start();

echo "<pre>";

if(empty($_POST["jmeno"]) || empty($_POST["heslo"])){
    header('Location: index.php');
    exit();
}

$connection = DBC::getConnection();

/*$username = $_POST['jmeno'];
$_SESSION['jmeno'] = $username;
header('Location: welcome.php');
*/

///$user = new User(1,$_POST["jmeno"],$_POST["heslo"])
///echo $user;
//echo "You are logged as <b>$username</b>";*/

require_once "./classes/User.php";
require_once "./classes/DBC.php"; 

echo "<pre>";

if (empty($_POST["jmeno"]) || empty($_POST["heslo"])) {
    header('Location: index.php');
    exit();
}

$connection = DBC::getConnection();

$username = mysqli_real_escape_string($connection, $_POST["jmeno"]);
$password = mysqli_real_escape_string($connection, $_POST["heslo"]);
$query = "SELECT * FROM users WHERE name = '$username' AND password = '$password'";
$result = mysqli_query($connection, $query);

if ($result && $user_data = mysqli_fetch_assoc($result)) {
    $user = new User($user_data['id'], $user_data['name'], $user_data['password']);
    $_SESSION['user'] = $user;
    header('Location: welcome.php');
} else {
    echo "Invalid username or password";
}

?>

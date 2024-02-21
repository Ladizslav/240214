<?php
print_r($_POST["jmeno"]);

session_start();

if(empty($_POST["jmeno"]) || empty($_POST["heslo"])){
    header('Location: index.php');
    exit();
}

$username = $_POST['jmeno'];
$_SESSION['jmeno'] = $username;
header('Location: welcome.php');

echo "You are logged as <b>$username</b>";
?>
<?php
session_start();
include("header.php");

if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    echo "<h2>Data Page</h2>";
    echo "<p>This page is visible only to logged-in users.</p>";
} else {
    header("Location: loginin.php");
    exit();
}

include("footer.php");
?>

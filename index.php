<?php
session_start();
include("header.php");

if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    echo "<p>Welcome, " . $_SESSION["username"] . "!</p>";
    echo '<a href="logout.php" class="logout-btn">Logout</a>';
} 

echo "<h2>Home Page</h2>";
echo "<p>Any text you want to display on the Home page.</p>";

include("footer.php");
?>

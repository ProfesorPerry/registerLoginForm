<?php

session_start();

if (!isset($_SESSION['log'])) {
    
    header("Location: index.php");
    exit();
    
} else {
    
    echo "<h1>Witaj " . $_SESSION['log'] . " !</h1>";
    
    echo "<br><br><br>";
    
    echo "<form action=\"logout.php\" method=\"post\">";
    echo "<input name=\"eSubmit\" type=\"submit\" value=\"Logout\">";
    echo "</form>";
    
}

?>
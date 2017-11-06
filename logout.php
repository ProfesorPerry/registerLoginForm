<?php

session_start();

if (!isset($_POST['eSubmit'])) {
    
    header("Location: index.php");
    
} else {

    if (!isset($_SESSION['log'])) {

        header("Location: index.php");
        exit();

    } else {

        unset($_SESSION['log']);
        header("Location: index.php");

    }
    
}

?>
<?php

session_start();

if (isset($_POST['rSubmit'])) {
    
    require_once("dbconnect.php");
    
    $username = mysqli_real_escape_string($connection, $_POST['username']);
    $r_password = mysqli_real_escape_string($connection, $_POST['rPassword']);
    $mail = mysqli_real_escape_string($connection, $_POST['mail']);
    
    $insert_sql = "INSERT INTO users(`login`, `password`, `mail`) VALUES('$username', '$r_password', '$mail');";
    
    if (empty($username) || empty($r_password) || empty($mail)) {
        
        header("Location: index.php");
        exit();
        
    } else {
    
        if ($connection) {

            $query_result = mysqli_query($connection, $insert_sql);

            if ($query_result) {
                echo "Register SUCCESSFULL!";
                echo "<a href=\"index.php\">Return to main page</a>";
            } else {
                echo "ERROR! No records added!";
            }

        } else {

            echo "Connection FAILED!";
            exit();

        }
        
    }
    
} else {
    
    header("Location: index.php");
    
}

?>
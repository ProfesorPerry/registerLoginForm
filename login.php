<?php

session_start();

if (!isset($_SESSION['log'])) {

    if (isset($_POST['lSubmit'])) {

        require_once("dbconnect.php");

        $login = $_POST['login'];
        $lPassword = $_POST['lPassword'];

        $select_sql = "SELECT * FROM `users` WHERE login='$login' AND password='$lPassword';";

        if ($connection) {

            $select_query_result = mysqli_query($connection, $select_sql);
            $rows_result = mysqli_num_rows($select_query_result);

            if ($rows_result > 0) {

                $_SESSION['log'] = $login;
                header("Location: site.php");

            } else {

                echo "Login failed!";
                echo "<br>";
                echo "<a href=\"index.php\">Return to form</a>";

            }

        } else {

            echo "Connection with database FAILED!";

        }

    } else {

        header("Location: index.php");

    }

} else {
    
    echo "You're already logged in!";
    
}
    
?>

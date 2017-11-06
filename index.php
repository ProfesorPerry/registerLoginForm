<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Online shiop</title>
</head>
<body>
    <h1>Register: </h1>
    <form action="register.php" method="post">
        Username: <input name="username" type="text"> <br><br>
        Password: <input name="rPassword" type="text"> <br><br>
        Mail: <input name="mail" type="text"> <br><br>
        <input name="rSubmit" type="submit" value="Register">
    </form>
    
    <br><br>
    
    <h1>Login: </h1>
    <form action="login.php" method="post">
        Login: <input name="login" type="text"> <br><br>
        Password: <input name="lPassword" type="text"> <br><br>
        <input name="lSubmit" type="submit" value="Login">
    </form>

</body>
</html>
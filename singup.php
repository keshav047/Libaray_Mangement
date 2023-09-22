<?php
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="form">
        <h1>SingUp Form</h1>
        <form name="form" action="log.php" method="post">
            <label>Username: </label>
            <input type="text" id="user" name="user"><br><br>
            
            <label>Contact No:</label>
            <input type="number" id="contact" name="contact"><br><br>

            
            <label>Email ID:</label>
            <input type="email" id="email" name="email"><br><br>

            
            <label>Password:</label>
            <input type="password" id="pass" name="pass"><br><br>
            <input type="submit" id="btn" value="SingUp" name="submit"/>

        </form>
    </div>
    
</body>
</html>
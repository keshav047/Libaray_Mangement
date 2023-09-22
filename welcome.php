<?php
    
 session_start();  
include("connection.php");
 if(!isset($_SESSION['Keshav'])) {  
      header("location:login.php");  
      die();  
 }  
 ?>  








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .dashboard {
            width: 300px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .dashboard label {
            display: block;
            margin-bottom: 5px;
        }
        .dashboard input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        .dashboard #display {
            margin-top: 20px;
            border-top: 1px solid #ccc;
            padding-top: 10px;
        }
    </style>
</head>
<body>
    <div class="dashboard">
        <h2>Dashboard</h2>
        <form>
            <label for="name">Name:</label>
            <h1  id="name" name="name" ><?php echo $_SESSION['Keshav'] ; ?> </h1>
            
            <label for="contact">Contact:</label>
            <h1  id="contact" name="contact" > <?php echo $_SESSION['Kesha'] ; ?></h1>
            
            <label for="email">Email:</label>
            <h1  id="email" name="email" > <?php echo $_SESSION['Kesh'] ; ?></h1>
        </form>
        <div id="display">
            <a href="logout.php">Logout</a>
        </div>
    </div>
    
    
</body>
</html>

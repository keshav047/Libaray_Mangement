<?php
session_start();  
    include('connection.php');
    if (isset($_POST['login'])) {
        $username = $_POST['user'];
        $password = $_POST['pass'];

        $sql = "select * from login where username = '$username' and password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
         
        $count = mysqli_num_rows($result);  
        
        if($count == 1){  
            $_SESSION['Keshav']=$row['username'];
            $_SESSION['Kesha']=$row['contact'];
            $_SESSION['Kesh']=$row['email'];
            header("Location: welcome.php");
           
        }  
        else{  
            echo  '<script>
                        window.location.href = "singup.php";
                        alert("Login failed. Invalid username or password!!")
                    </script>';
        }     
    }
    ?>
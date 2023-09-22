<?php
    include('connection.php');
    if (isset($_POST['submit'])) {
        $username = $_POST['user'];
        $contact = $_POST['contact'];
        $email = $_POST['email'];
        $password = $_POST['pass'];

        $sql = "select * from login where email = '$email' ";

        $result = mysqli_query($conn, $sql);  
        
        $row = mysqli_fetch_assoc($result);
         
        $count = mysqli_num_rows($result);  
        
        if($count == 1){  
            echo  '<script>
            window.location.href = "admin.php";
            
            alert("Alredy Exist.'.$row['username'].'")
        </script>';
           
        } 
        else{

        $sq ="INSERT INTO  `login`(`username`,`contact`,`email`,`password`) VALUES('$username','$contact','$email','$password')" ;
        $resul = mysqli_query($conn, $sq);  
        }  
    }
    ?>
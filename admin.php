<?php
include("connection.php");
?>
<!DOCTYPE html>
<html>

<head>

    <title> Libary management </title>
    <link rel="stylesheet" href="style\admin.css">
</head>

<body>

    <table style="width:100%;background-color: white;">

       <tr>
      
                <th><a href="index.html"><img src=Image/logo.jpeg></a></th>
                <th><a href="index.html">Home</a></th>
                <th><a href="admin.html">Admin Login</a></th>
                <th><a href="show">Books</a></th>
                <th><a href="gen.html">Gen Info</a></th>
                <!-- <th><a href="2.html">Login</a></th> -->
            </tr>
        </table>
    form 

     <center>
        <h1> Admin Login </h1>
    </center>
    <form   action="login.php" method="post">
        <div class="container">
            <label>Username : </label>
            <input type="text" placeholder="Enter Username" name="user" id="n1" required>
            <label>Password : </label>
            <input type="password" placeholder="Enter Password" name="pass" id="p1" required>
            <button type="submit" onClick="create_account()" name="login"> Login</button>
            <a href="singup.php"><button type="button" name="submit"> SingUp</button></a>

        </div>

    </form>
    <script type="text/javascript">
        function create_account()
         {
            var n = document.getElementById("n1").value;

            var p = document.getElementById("p1").value;

            //Code for password validation  
            var letters = /^[A-Za-z]+$/;

            //other validations required code  
            if (n == '' || p == '') {
                alert("Enter each details correctly");
            }
            else if (!letters.test(n)) {
                alert('Name is incorrect must contain alphabets only');
            }

            else if (document.getElementById("p1").value.length > 12) {
                alert("Password maximum length is 12");
            }
            else if (document.getElementById("p1").value.length < 6) {
                alert("Password minimum length is 6");
            }
            else {
                
                 

            }
        }  

    </script>
    <section class="page-section" id="login">
        <div class="containe" >
            <div >
                <center>
                    <h2>Contact</h2>
                </center>
            </div>
            <div id="cont">
                <div id="Address" >
                    <h4>Address</h4>
                    <p>
                        NIKHIL SINGH<br>
                        PROJECT LEADER<br>
                        DEPARTMENT OF COMPUTER SCIENCE<br>
                        UNITED COLLAGE OF ENGINEERING &AND; RESEARCH<br>
                        UPSIDC INDUSTRIAL AREA<br>
                        NAINI, PRAYAGRAJ-211010<br>
                    </p>
                </div>
                <div id="email" >
                    <h4>EMAIL</h4>
                    <p>
                       
                        KESHAVRAIAM@GMAIL.COM<br>
                        RITURAJYADAV@GMAIL.COM<br>
                        KRITARTHSHUKLA@GMAIL.COM<br>
                        NIKHILUCERCS@GMAIL.COM<br>
                    </p>
                    <h4>CONTACT NUMBER</h4>
                    <p>
                        +91-123456789<br>
                    </p>
                </div>
            </div>
        </div>


        <center><span class="copyright" >Copyright © library 2022</span> </center>
    
    </section>
</body>

</html>
<?php
    include "connection.php";
    include "navbar.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <link rel="stylesheet" type="text/css" href="style.css ">

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
        
<header style="height: 200px;">
<div class="logo">
    <img src="images/logo.png">
    <h1 style="color: white; font-size: 30px; line-height: 20px; margin-top: 5px;">RTAXT-Librarian-System</h1>
</div>
    <nav>
        <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="books.php">BOOKS</a></li>
            <li><a href="userLogin.php">USER-LOGIN</STUDENT-LOGIN></a></li>
            <li><a href="registration.php">SIGN-UP</a></li>
            <li><a href="feedback.php">HELP</a></li>
        </ul>
    </nav>
 </header>   
 <section>
     <div class="userLog_img">
         <br><br><br>
         <div class="box1">
             <h1 style="text-align:center; font-size: 30px; font-family: Lucida Console;">
             User Login</h1>
             <h1 style="text-align:center; font-size: 20px;">Welcome Back</h1><br>
             <form name="login" action="" method="post">
                
                <div class="login">
                 <input class="form-control" type="text" name="UserName" placeholder="UserName" required=""><br><br>
                 <input class="form-control" type="password" name="password" placeholder="Password" required=""><br>
                 <input class="btn btn-primary" type="submit" name="submit" value="Login" style="color: aquamarine; width: 70px; height: 40px">
                </div>
             
             <p style="color: white; padding-Left: 15px;">
                 <br><br>
                 <a style="color: white;" href="">Forgot Password?</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 New User?<a style="color: white;" href="registration.php">Sign Up</a>
             </p>
             <form>
         </div>
     </div>

 </section>

    <?php

    if(isset($_POST['submit']))
    {
        $count=0;
        $res=mysqli_query($db,"SELECT * FROM `student` WHERE UserName='$_POST[UserName]' && password='$_POST[password]';");
        $count=mysqli_num_rows($res);

        if($count==0)
        {
            ?>
            <script type="text/javascript" >
                 alert("Login unsuccessful. Your credentials could not be verified.");
            </script>
            <?php
        }
        else
        {
            ?>
               <script type="text/javascript" >
                 window.location="index.php"
            </script> 
            <?php
        }
    }

    ?>
 
</body>
</html>
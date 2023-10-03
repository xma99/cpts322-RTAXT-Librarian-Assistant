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
    <title>User Registration</title>
    <link rel="stylesheet" type="text/css" href="style.css ">

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
<header style="height: 210px;">
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
    <div class="userReg_img">
        <br>
        <div class="box2">
            <h1 style="text-align:center; font-size: 30px; font-family: Lucida Console;">
            Library System</h1>
            <h1 style="text-align:center; font-size: 20px;">User Registration Form</h1>
            <form name="Registration" action="" method="post">
                <br>
               <div class="login">
                <input class="form-control" type="text" name="First" placeholder="First Name" required=""><br>
                <input class="form-control" type="text" name="Last" placeholder="Last Name" required=""><br>
                <input class="form-control" type="text" name="UserName" placeholder="UserName" required=""><br>
                <input class="form-control" type="password" name="password" placeholder="Password" required=""><br>
                <input class="form-control" type="text" name="StudentID" placeholder="Student ID" required=""><br>
                <input class="form-control" type="text" name="phone" placeholder="Phone Number" required=""><br>
                <input class="form-control" type="text" name="email" placeholder="Email" required=""><br>

                <input class="btn btn-primary" type="submit" name="submit" value="Sign Up" style="color: aquamarine; width: 90px; height: 40px"></div>
            </form>
            
        </div>
    </div>

</section>
    <?php

    if(isset($_POST['submit']))
    {
        $count=0;
        $sql="SELECT UserName from `student`";
        $res=mysqli_query($db,$sql);

        while($row=mysqli_fetch_assoc($res))
        {
            if($row['UserName']==$_POST['UserName'])
            {
                $count=$count+1;
            }
        }
        if($count==0)
        {mysqli_query($db,"INSERT INTO `STUDENT` VALUES('$_POST[First]', '$_POST[Last]', '$_POST[UserName]', '$_POST[password]', '$_POST[StudentID]', '$_POST[phone]', '$_POST[email]');");
    ?>

    <script type="text/javascript" >
        alert("Sign Up Successful");

    </script>
    <?php

    }

        else
        {
        ?>

        <script type="text/javascript" >
        alert("A user with this username already exist. Please try with another one.");

        </script>
        <?php
        }

        }



    ?>

</body>
</html>
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
    <title>BOOKS</title>
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
 
 <h2 style="color: peachpuff; font-size: 20px; line-height: 20px; margin-top: 5px;">List Of Books</h2>
     
     <?php
        $res=mysqli_query($db,"SELECT * FROM `books`;");

        echo "<table class='table table-bordered table-hover' >";
            echo "<tr style='background-color: white;' >";
                echo "<th>"; echo "ID"; echo "</th>";
                echo "<th>"; echo "BookName"; echo "</th>";
                echo "<th>"; echo "BookAuthors"; echo "</th>";
                echo "<th>"; echo "PublishedDate"; echo "</th>";
                echo "<th>"; echo "Status"; echo "</th>";
                echo "<th>"; echo "Star"; echo "</th>";
            echo "</tr>";

            while($row=mysqli_fetch_assoc($res))
            {
                echo "<tr>";
                echo "<td>"; echo $row['bookID']; echo "</td>";
                echo "<td>"; echo $row['bookName']; echo "</td>";
                echo "<td>"; echo $row['bookAuthors']; echo "</td>";
                echo "<td>"; echo $row['publishedDate']; echo "</td>";
                echo "<td>"; echo $row['status']; echo "</td>";
                echo "<td>"; echo $row['Star']; echo "</td>";

                echo "</tr>";
            }
            echo "</table>"
     ?>
 
 <section>
    <div class="Books_img">
    </div>

</section>

</body>
</html>
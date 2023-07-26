<?php
session_start();
if(!isset($_SESSION["id"]))
{   
    echo"session not found";

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="formstyle.css">
<body>

<!-- <div class="parent">
            <h1>Delete Book</h1>
        <form action="#.php" method="post">
                <input type="number" name="BID" required placeholder="Enter book ID" class="longinput"><br><br>
                 <input type="submit" name="submit" value="Delete" class="btn">
            
            
        </form>
</div> -->
    <?php

    $con=mysqli_connect("localhost","root","","bookdatabase");
    if(!$con){
       die("connection failed".mysqli_connect_error());
    }
        $BID=$_SESSION['id'];
        $sql="DELETE FROM books WHERE BID='$BID'";
            if(mysqli_query($con,$sql))
            {
            echo"deleted successfully";
            }
        
            header("Location:admin.php");


    // if(isset($_POST['submit'])){
    //     $BID=$_POST['BID'];
        
            // $sql="DELETE FROM books WHERE BID='$BID'";
        
            
            //  if(mysqli_query($con,$sql))
            //  {
            //     echo"deleted successfully";
            //  }
            
            //  header("Location:admin.php");
    // }
    
    mysqli_close($con);
    

    ?>
</body>
</html>
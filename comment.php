
<?php

$con=mysqli_connect("localhost","root","","bookdatabase");
if(!$con){
   die("connection failed".mysqli_connect_error());
}

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $comment=$_POST['comment'];


    
        $sql="INSERT INTO comment(name,email,comment)
        VALUES (?,?,?)";
        $stmt=mysqli_prepare($con,$sql);
        mysqli_stmt_bind_param($stmt,"sss",$name,$email,$comment);

         if(mysqli_stmt_execute($stmt))
         {
            echo"successfully registerd";
         }
        mysqli_stmt_close($stmt);
}
mysqli_close($con);
header("Location:home.html");
?>

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

<div class="parent">
            <h1>Edit Book</h1>
        <form action="#.php" method="post">
                <input type="number" name="BID" required placeholder="enter book Id" class="longinput"><br><br>
                <input type="text" name="name" required placeholder="new Title" class="longinput"><br><br>
                <input type="text" name="Author" required placeholder="new Author name" class="shortinput">
                <select name="Type" class="shortinput">
                    <option value="fiction">fiction</option>
                    <option value="biography">biography</option>
                    <option value="educational">educational</option>
                    <option value="novel">novel</option>
                    <option value="kids">kids</option>
                </select><br><br>
               
                <input type="text" name="cover" required placeholder="name of cover image" class="shortinput">
                <input type="number" name="price" required placeholder="price" class="shortinput"><br><br>
                <input type="text" name="description" required placeholder="Description about the book" class="longinput"><br><br>
            <input type="submit" name="submit" value="submit" class="btn">
            
            
        </form>
</div>
    <?php

    $con=mysqli_connect("localhost","root","","bookdatabase");
    if(!$con){
       die("connection failed".mysqli_connect_error());
    }

    if(isset($_POST['submit'])){
        $BID=$_POST['BID'];
        $name=$_POST['name'];
        $author=$_POST['Author'];
        $type=$_POST['Type'];
        $cover=$_POST['cover'];
        $price=$_POST['price'];
        $description=$_POST['description'];

          
            $sql="UPDATE books SET 
                    Name='$name',
                    author='$author',
                    Type=' $type',
                    cover='$cover',
                    price='$price',
                    description='$description',


                     WHERE BID='$BID'";
             if(mysqli_query($con,$sql))
             {
                echo"edited successfully";
             }
        
             header("Location:admin.php");
    }
    
    mysqli_close($con);
    

    ?>
</body>
</html>
<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminPage</title>
    <link rel="stylesheet" href="userstyle.css">
</head>
<body>
<nav class="navbar">
        <div class="brand-name">
            <span style="color: green;">ጥበብ </span>BookStore</div>
    </nav>



    <?php
    $con=mysqli_connect("localhost","root","","bookdatabase");

    if(!$con){
        die("connection failed".mysqli_connect_error());
    }
        echo'<div class="adminfunction">
            <a href="addbook.php" class="adminlink">Add_book/</a>&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="editbook.php" class="adminlink">Edit_book/</a>&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="deletebook.php" class="adminlink">Delete_book/</a>&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="log_out.php" class="adminlink">Log_out</a>
            </div>';

                echo' <div class="adminpage">
                        <h1>All Books</h1>
                        <table>
                        <thead>
                            <tr>
                            <th>#ID</th>
                            <th>Title</th>
                            <th>cover</th>
                            <th>Author</th>
                            <th>Description</th>
                            <th>Category</th>
                            <th>function</th>
                            </tr>
                        </thead><tbody>';
            $sql="SELECT BID,Name,Type,author,cover,description FROM books";
            $result=mysqli_query($con,$sql);
           
            if(mysqli_num_rows($result)>0){
                
            while($row=mysqli_fetch_array($result)){
                
              echo'
                    <tr>
                    <td>'.$row["BID"].'</td>
                    <td>'.$row["Name"].'</td>
                    <td>
                       <img src="'.$row["cover"].'" width="50px" height="50px">
                    </td>
                    <td>'.$row["author"].'</td>
                    <td>'.$row["description"].'</td>
                    <td>'.$row["Type"].'</td>
                    <td>
                    <a href="editbook.php" class="btn edit">Edit</a>
                    <a href="deletebook.php" class="btn delete">Delete</a>
                    </td>
                    </tr>
                
                ';
                 
            }
           
            $_SESSION["id"]=$row["BID"];
            }else{
            echo"o result";
            }
                echo'</tbody></table></div>';

                  
                
                echo' <div class="adminpage">
                <h1>User Comments</h1>
                <table>
                <thead>
                    <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Comment</th>
                    </tr>
                </thead><tbody>';
    $sql1="SELECT name,email,comment FROM comment";
    $result1=mysqli_query($con,$sql1);
    $i=1;
    if(mysqli_num_rows($result1)>0){
    while($row1=mysqli_fetch_assoc($result1)){
      echo'
            <tr>
            <td>'.$i.'</td>
            <td>'.$row1["name"].'</td>
            <td>'.$row1["email"].'</td>
            <td>'.$row1["comment"].'</td>
            </tr>
        
        ';
        $i++;

    }
    }else{
    echo"o result";
    }
        echo'</tbody></table></div>';


        //  if(isset($_POST['submit'])){
        //     $searchedBook=$_POST['search'];

        //     $sql="select * from books where name='$searchedBook'";
        //     $result=mysqli_query($con,$sql);
        //     $row=mysqli_fetch_assoc($result);
        //     echo"<table>
        //                 <tr>
        //                 <td>".$row["BID"]."</td>
        //                 <td> <img src='".$row["cover"]."' width='50px' height='50px'></td>
        //                 <td>".$row["Name"]."</td>
        //                 <td>".$row["Type"]."</td>
        //                 <td>".$row["author"]."</td>
        //                 <td>".$row["description"]."</td>
        //                 </tr>


        //             </table>";

        //  }
         
         mysqli_close($con);
    ?>
    

    
            


    


    
</body>
</html>
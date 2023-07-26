
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UserPage</title>
    <link rel="stylesheet" href="userstyle.css">
</head>
<body>
<nav class="navbar">
        <div class="brand-name">
            <span style="color: green;">ጥበብ </span>BookStore</div>
            <a href="log_in.php"  target="_blank" class="adminlink">Admin_Login</a>
    </nav>
   



    <!-- search option -->
    <!-- <div class="searchcontainer">
        <form action="#.php" method="post">
            <input type="search" name="search" class="searchInput" placeholder="search here for books">
            <button name="submit" class="searchbtn"><img src="search.png" width="100%" height="100%"></button>


        </form>


    </div> -->

    
    

   



    <?php
    $con=mysqli_connect("localhost","root","","bookdatabase");
    if(!$con){
        die("connection failed".mysqli_connect_error());
    }
            echo'<div class="container"> ';

            $sql="SELECT Name,cover,price FROM books";
            $result=mysqli_query($con,$sql);
            if(mysqli_num_rows($result)>0){
            while($row=mysqli_fetch_assoc($result)){
                
                echo'<div class="content">
                        <div class="cover"><img src="'.$row["cover"].'" width="100%" height="100%"></div><br>
                        <div class="description">'.$row["Name"].'&nbsp;&nbsp;'.$row["price"].'ETB  <br> 
                             <a href="description.php">Click for more description</a>
                        </div>
                     </div>';
                
            }
            }else{
            echo"o result";
            }
            echo'</div>';


                    


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
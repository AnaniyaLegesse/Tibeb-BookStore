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
    <title>Description</title>
    <link rel="stylesheet" href="userstyle.css">
</head>
<body>
    <div class="descontainer">
        <div class="bookimage"><img src="book3.jpg"></div>
        <div class="descontent">
            <h1>FIKR ESKE MEKABR</h1>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsa beatae mollitia commodi perferendis labore nam obcaecati facere a minima porro.</p>
        </div>
    </div>
</body>
</html>
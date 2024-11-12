<?php 
include 'connection.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmania</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
<style>

    header
    {
    color: black;
    }
    .logo
    {
        float: left;
        color: white;
        font-size: 34px;
        font-family:fantasy;
        padding: 16px 20px;
        cursor: pointer;
        transition:0.4s;

    }
    .logo:hover
    {
        color: #6C63FF;
        
    }
    .home1
    {
        width: 35%;
        margin-top: -350px;
        margin-left: 80px;
    }
    h2
    {
        color: black;
        font-size: 50px;
        font-family: 'Quicksand', sans-serif;
        text-align:center;
        margin-top:110px;
    }
    p
    {
        color: black;
        padding-top: 20px;
        font-size: 18px;
        font-family: 'Quicksand', sans-serif;
        text-align:center;
        margin-left:100px;
        margin-right:100px;
    }
    .button
    {
  background-color: black;
  border: none;
  color: white;
  padding: 22px 38px;
  cursor: pointer;
  font-family: sans-serif;
  margin-left: 950px;
  margin-top: 20px;
  transition:0.4s;
    }
    .button:hover
    {
        background-color: #6C63FF;
        color: black;
    }
    h2.signup
    {
        color: black;
        font-size: 40px;
        font-family: 'Quicksand', sans-serif;
    }
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    position: fixed;
    top: 0;
    width: 100%;
    background-color: black;
  }
  
  li {
    float: right;
  }
  
  li a {
    display: block;
    color: white;
    text-align: center;
    text-decoration: none;
    padding: 16px 20px;
    font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    margin-top: 8px;
    font-size: 16px;
    transition:0.4s;
  }
  
  li a:hover {
   color: #6C63FF;

  }
  .username
  {
    color:white;
    padding-top:20px;
    padding-right:10px;
    text-transform:capitalize;
    font-family:cursive;
    font-size:22px;
    font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
  }
  .profileimagee
  {
    
    border-radius: 50%;
    width:40px;
    margin-top:15px;
    margin-right:35px;
  }
  .userloginhomeimg
  {
    width:650px;
    margin-top:40px;
    margin-left:380px;
  }
</style>    
</head>
<body>
    <header>
        <ul>
         <a href="userlogin.php">   
        <li class="logo">Filmania</li>
        </a>     
                <li><a href="userprofile.php">PROFILE</a></li>
                <li><a href="logout.php">LOGOUT</a></li>
                <li><a href="merch.php">MERCH</a></li>
                <li><a href="reviews.php">REVIEWS</a></li>
                <li><a href="buzz.php">BUZZ</a></li>
                <li><a href="stories.php">STORIES</a></li>
                <?php
                echo "<li >
 					<img class='profileimagee' src='profileimages/".$_SESSION['profile']."'>
                </li>";
                ?>
                <li class="username"><?php echo $_SESSION['name'] ?></li>

        </ul>
    </header>
    <h2>
        <?php echo "Welcome "; echo $_SESSION['name'] ;echo "!"; ?>
    </h2> 
    
<p>Product Description: Cheer on your favorite red and white team in eye-popping style with these red & white striped game bib overalls! Each pair is made of 100 percent cotton for a comfortable, breathable fit regardless of the weather and includes easily adjustable shoulder straps for fans with long torsos. Whether you’re on rickety bleachers on a Friday night or trying to get on television at the Sunday morning tailgate, our red & white striped game bibs will make you stand out in the crowd and leave an impression. These particular bib overalls are also great as casual Clauswear for any Saint Nicks who might be taking in a game during the holiday offseason!</p>
<img src="userloginimg.svg" class="userloginhomeimg">
</body>

</html>
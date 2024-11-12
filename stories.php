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
    <title>Filmania Stories</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
<style>
    body
    {
      background-color:lightgrey;
    }
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
  h1{
        color: BLACK;
        font-size: 50px;
        font-family: 'Quicksand', sans-serif;
        margin-left:650px;
        margin-top:-30px;
    }  
    nav
    { 
    background-color:grey;
    display: block;
    color: white;
    text-decoration: none;
    padding-top: 30px;
    padding-bottom:10px;
    padding-right:652px;
    font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    font-size: 16px;
    transition:0.4s;
    margin-top:72px;
    border-bottom-left-radius:20px;
    border-bottom-right-radius:20px;
    border-bottom:2px solid black;

    }
    .loginbtn
    {
  background-color: black;
  border: none;
  color: white;
  padding-left: 12px ;
  padding-right: 12px ;
  padding-top:5px;
  padding-bottom:5px;
  cursor: pointer;
  font-family: sans-serif;
  border-radius: 8px;
  transition:0.4s;
  text-decoration:none;
  font-size:20px;
    }
    .loginbtn:hover
    {
        background-color: #6C63FF;
        color: black;
    }

    .reviews
  {
    background-color:lightgrey;
    padding-top:18px;
    height:100%;
    font-family: 'Quicksand', sans-serif;
    padding-bottom:40px;
    overflow-y:scroll;
    max-height:625px;
    border-radius:10px;
    
    
  }  
  .values
  {
    background-color:grey;
    color:white;
    padding-left: 10px;
    margin-top:10px;
    float:left;
    padding-right: 10px;
    font-size:25px;
    width:250px;
    height:360px;
    border-radius:20px;
    margin-bottom:40px;
    margin-left:40px;
    margin-right:20px;
    padding-top:10px;
    color:black;
    text-align:center;
    border:3px solid black;
  }
  .img 
  {
    border-radius:15px;
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
  .search 
    {
        float:right;
        padding:10px 20px;
        text-decoration:none;
        margin-top:-7px;
        margin-right:-600px;
        margin-top:-50px;
        
    }
    .search2 
    {
  background-color: black;
  border: none;
  color: white;
  padding: 12px 20px;
  cursor: pointer;
  font-family: sans-serif;
  transition:0.4s;
  float:right;
  margin-top:-50px;
  margin-right:-395px;

    }
    .search2:hover
    {
        background-color: #6C63FF;
        color: black;
    }
    .video 
    {
      border-radius:20px;
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
    <nav> 
    <h1>STORIES</h1>
    </nav>
    <div class="reviews">
    <div class="reviews">
    <?php 
    
     $query = "SELECT * FROM films WHERE status='approved'";
     $query_run = mysqli_query($conn,$query);

    if(mysqli_num_rows($query_run) > 0)
    {
    foreach($query_run as $row)
    { 
      $thumbnail=$row['thumbnail'];
      echo'<div class="values">';
      echo $row['filmname'];echo"<br>"; 
   ?>
    <img width="210" height="220"class="img" src="<?php echo 'thumbnails/'.$thumbnail;?>"><br><br>
    <a href="filmplayer.php?id=<?= $row['sino'];?>"class="loginbtn">View</a>
    <?php
    echo "</div>";
      }
    }
   else
   {
   echo "<h5> No Record Found </h5>";
   }
                                    
    ?>
   </div>
</body>
</html>
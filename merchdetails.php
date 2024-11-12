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
    body
    {
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
        text-align:center;
        margin-top:70px;
        background-color:grey;
        border-bottom-left-radius:10px;
        border-bottom-right-radius:10px;
    }  
    h1:hover 
    {
        color:#6C63FF;
    }   

    h2{
        color: BLACK;
        font-size: 30px;
        font-family: 'Quicksand', sans-serif;
        text-align:center;
        padding-bottom:15px;
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
    padding-left:20px;
    padding-right:25px;
    padding-top:10px;
    height:100%;
    font-family: 'Quicksand', sans-serif;
    overflow-y:scroll;
    max-height:625px;
    float:left; 
    
  }  
  .values
  {
    background-color:grey;
    color:white;
    padding: 50px;
    padding-top: 20px;
    font-size:25px;
    width:1450px;
    border-radius:20px;
    color:black;
    text-align:center;
    border:3px solid black;
    
    
  }
  .img 
  {
    border-radius:15px;
  }

</style>    
</head>
<body>
<header>
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
    <h1>MERCH</h1>
</body>
</html>
<div class="reviews">
<?php
                        if(isset($_GET['id']))
                        {
                            $merchid = mysqli_real_escape_string($conn, $_GET['id']);
                            $query = "SELECT * FROM merch WHERE mrno='$merchid' ";
                            $query_run = mysqli_query($conn, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {  echo'<div class="values">';
                                $row = mysqli_fetch_array($query_run);
                                $product=$row['product'];
                                echo "Name :";echo"<br>";echo $row['productname'];echo"<br>";
                                ?>
                                            <img width="210" height="220"class="img" src="<?php echo 'merch/'.$product;?>"><br>
                                <?php    
                                 echo "Seller Name :";echo"<br>";echo $row['name'];echo"<br>";
                                 echo "Price :";echo"<br>";echo"$ ";echo $row['price'];echo"<br>";
                                 echo "Description: ";echo"<br>";echo $row['name'];echo"<br>";
                                 echo "Email:";echo"<br>";echo $row['email'];echo"<br>";
    
                                
                                echo "</div>";
                            
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                            echo "</div>";
                        }
                        
                        ?>
                        </div>

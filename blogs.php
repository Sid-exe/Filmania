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
    <title>Filmania Blogs</title>
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
        margin-top:-25px;
    }  
    h1:hover 
    {
        color:#6C63FF;
    }   
    nav
    { 
    background-color:grey;
    display: block;
    color: white;
    text-decoration: none;
    padding: 16px 20px;
    font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    font-size: 16px;
    transition:0.4s;
    margin-top:73px;
    border-bottom-left-radius:20px;
    border-bottom-right-radius:20px;
    border-bottom:2px solid black;

    }
    .loginbtn
    {
  background-color: black;
  border: none;
  color: white;
  padding-left: 32px ;
  padding-right: 32px ;
  padding-top:15px;
  padding-bottom:15px;
  cursor: pointer;
  font-family: sans-serif;
  border-radius: 8px;
  transition:0.4s;
  text-decoration:none;
    }
    .loginbtn:hover
    {
        background-color: #6C63FF;
        color: black;
    }

    .search 
    {
        float:right;
        padding:10px 20px;
        text-decoration:none;
        margin-top:-7px;
        
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
  margin-top:-7px;
    }
    .search2:hover
    {
        background-color: #6C63FF;
        color: black;
    }
  .reviews
  {
    background-color:lightgrey;
    padding:100px;
    height:100%;
    max-height:598px;
    overflow-y:scroll;
    font-family: 'Quicksand', sans-serif;
    padding-left:150px;
    padding-top:10px;
    
  }  
  .values
  {
    background-color:gray;
    color:white;
    padding: 28px 22px;
    margin-top:20px;
    margin-right:55px;
    font-size:20px;
    height: 550px;
    border:2px solid black;
    border-radius:10px;
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
    <form action="blogs.php" method="post">
    <input class="search" type="text" name="namee" placeholder="Enter Genrename" required="">
	<button type="submit" name="submit" class="search2">Search</button>
    <a href="postblog.php" class="loginbtn">WRITE A BLOG</a>
    <a href="reviews.php" class="loginbtn">VIEW REVIEWS</a>
</form>
    <h1>BLOGS</h1>
    </nav>
   <div class="reviews">
        <?php 
       	if(isset($_POST['submit']))
		{   $genrename=$_POST['namee'];
			$sql1="SELECT * from `blog` where genrename like '%$genrename%' ";
            $q=mysqli_query($conn,$sql1);
            if(!$q){
                die(mysqli_error($conn));
            }
			if(mysqli_num_rows($q) == 0)
			{
				echo "Sorry! No book found. Try searching again.";
			}
			else
			{
			while($row=mysqli_fetch_assoc($q))
			{
                echo '<div class="values">';  
                echo "Name: "; 
                echo $row['name'];echo "<br>";
                echo "Genre: "; 
                echo $row['genre'];echo "<br>";
                echo "Genre Name: "; 
                echo $row['genrename'];echo "<br>";echo "<br>";
                echo $row['blog'];echo "<br>";
                echo "</div>";
			}
		echo "</div>";
			}
		}
        else
		{
			$res=mysqli_query($conn,"SELECT * FROM `blog` ORDER BY `blog`.`genre` ASC;");

			while($row=mysqli_fetch_assoc($res))
			{
                echo '<div class="values">';  
                echo "Name: "; 
                echo $row['name'];echo "<br>";
                echo "Genre: "; 
                echo $row['genre'];echo "<br>";
                echo "Genre Name: "; 
                echo $row['genrename'];echo "<br>";echo "<br>";
                echo $row['blog'];echo "<br>";
                echo "</div>";
			}
		echo "</div>";
		} 
    ?>
</body>
</html>
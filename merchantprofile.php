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
        background-color:grey;
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
    h2
    {
        color: black;
        font-size: 50px;
        font-family: 'Quicksand', sans-serif;
        text-align:center;
        margin-top:20px;
        margin-left:-320px;
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
  .profiledetails
  { 
    margin-top:100px;
    border: 3px solid black;
    border-radius: 10px;
    margin-left:300px;
    margin-right:300px;
    padding-bottom:150px;
    background-color:lightgrey;
  }
  form
  {
    font-family:'Quicksand', sans-serif;
    font-size:25px;
    padding-left:300px;
    
  }
  .profilepic
  { 
    margin-left:-320px;
  }
  img 
  {
    border-radius:50%;
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
  margin-top:17px;
  margin-left:100px;
  }

</style>    
</head>
<body>
<header>
<ul>
         <a href="merchantlogin.php">   
        <li class="logo">Filmania Merchant</li>
        </a>     
                <li><a href="merchantprofile.php">PROFILE</a></li>
                <li><a href="logout.php">LOGOUT</a></li>
                <li><a href="uploadmerch.php">UPLOAD MERCH</a></li>
                <li><a href="merchstatus.php">UPLOAD STATUS</a></li>
                <?php
                echo "<li>
 					<img class='profileimagee' src='profileimages/".$_SESSION['profile']."'>
                </li>";
                ?>
                <li class="username"><?php echo $_SESSION['name'] ?></li>

        </ul>
    </header>
   <div class="profiledetails">
    <form action="merchantprofile.php" method="post">
   
<?php
$q=mysqli_query($conn,"SELECT * FROM registration where name='$_SESSION[name]' ;");
?>
<h2 style="text-align: center;">My Profile</h2><br>

<?php
$row=mysqli_fetch_assoc($q);

echo "<div style='text-align: center' class='profilepic'>
    <img height=110 width=120 src='profileimages/".$_SESSION['profile']."'>
</div>";
?>
<br>
<?php
 				if(isset($_POST['submit']))
 				{
 					?>
 						<script type="text/javascript">
 							window.location="editmerchantprofile.php"
 						</script>
 					<?php
 				}

            echo "<b> Name: </b>";

            echo $row['name'];echo "<br>";

            echo "<b> User ID: </b>";

            echo $row['userid'];echo "<br>";

            echo "<b> Email: </b>";

            echo $row['email'];echo "<br>";

            echo "<b>Password: </b>";

            echo $row['password'];echo "<br>";

            echo "<b>Logged in as: </b>";

            echo $row['signupas'];echo "<br>";
         ?>

            <button type="submit" name="submit" class="search2">EDIT</button>

         <?php   
?>
</div>

</html>
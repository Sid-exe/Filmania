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
        margin-left:630px;
        margin-top:-50px;
        padding-top:35px;
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
  margin-left:667px;
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
    padding-left:50px;
    padding-top:18px;
    height:100%;
    max-height:598px;
    overflow-y:scroll;
    font-family: 'Quicksand', sans-serif;
    padding-bottom:40px;
    
  }  
  .values
  {
    background-color:gray;
    color:white;
    padding: 18px 20px;
    margin-top:20px;
    float:left;
    margin-right:55px;
    font-size:20px;
    width:21%;
    height: 200px;
    

  }
  .addreviewbtn
  {
    background-color:lightgrey;
    display: block;
    color: white;
    text-decoration: none;
    font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    transition:0.4s;
    padding-bottom:25px;
    padding-top:20px;
    
  }

  .signupform
{
margin-top:150px;  
border: 5px solid black;
border-radius: 10px;
padding: 40px;
margin-left: 30%;
padding-bottom: 40px;
background-color: white;
margin-right: 32%;
}
input 
{
width: 40%;    
display: inline-block;
border:none;
padding: 12px ;
border-bottom: 2px solid black;
margin-left: 145px;
text-align: center;
padding-bottom:10px;

}
    .button
    {
  background-color: black;
  border: none;
  color: white;
  padding: 16px 32px;
  cursor: pointer;
  font-family: sans-serif;
  border-radius: 8px;
  transition:0.4s;
    }
    .button:hover
    {
        background-color: #6C63FF;
        color: black;
    }
    h2{
        color: BLACK;
        font-size: 30px;
        font-family: 'Quicksand', sans-serif;
        text-align:center;
        padding-bottom:15px;
    } 
    textarea {
  resize: none;
}
textarea
{
    border:1px solid black;
    border-radius:5px;
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
  .img
	{
  font-family: sans-serif;
  color: black;
  border-bottom:none;
  padding-left:0px;
	}
  label 
{
width: 40%;    
display: inline-block;
border:none;
margin-left: 145px;
text-align: center;
font-family:sans-serif;

}
</style>    
</head>
<body>
    <header>
    <ul>
         <a href="merchantlogin.php">   
        <li class="logo">Filmania Creator</li>
        </a>     
                <li><a href="creatorprofile.php">PROFILE</a></li>
                <li><a href="logout.php">LOGOUT</a></li>
                <li><a href="uploadstories.php">UPLOAD STORIES</a></li>
                <li><a href="storystatus.php">STORY STATUS</a></li>
                <?php
                echo "<li >
 					<img class='profileimagee' src='profileimages/".$_SESSION['profile']."'>
                </li>";
                ?>
                <li class="username"><?php echo $_SESSION['name'] ?></li>

        </ul>
    </header>
    <div class="signupform">
    <form method="post" name="stories" action="uploadstories.php" enctype="multipart/form-data">
        <h2>POST YOUR WORK!</h2>
        <label for="img">Select the Film:</label><br>
	   <input type="file" name="file" class="img"><br><br>
     <label for="img">Select Thumbnail:</label><br>
	   <input type="file" name="thumbnail" class="img"><br><br>
        <input type="text" placeholder="Enter ShortFilm Name" name="name" ><br><br>
        <br><br>
          <input type="submit" class="button" name="submit" value="POST!">
    </form>
</div>
</body>
</html>

<?php 
if(isset($_POST['submit']))
{
   $name=$_POST['name'];
   $director=$_SESSION['name'];

   $file_name = $_FILES['file']['name'];
   $file_type = $_FILES['file']['type'];	
   $temp_name = $_FILES['file']['tmp_name'];
   $file_size = $_FILES['file']['size'];
   $file_destination = "films/".$file_name;
   
   $img_name = $_FILES['thumbnail']['name'];
   $img_type = $_FILES['thumbnail']['type'];	
   $imgtemp_name = $_FILES['thumbnail']['tmp_name'];
   $img_size = $_FILES['thumbnail']['size'];
   $img_destination = "thumbnails/".$img_name;
    $mov=move_uploaded_file($temp_name,$file_destination) ;
    $mov1=move_uploaded_file($imgtemp_name,$img_destination) ;

   
   $sql=mysqli_query($conn,"INSERT INTO `films` (`sino`, `film`,`thumbnail`,`filmname`,`director`) VALUES ('', '$file_name','$img_name','$name', '$director');");
   mysqli_fetch_assoc($sql);
}
?>
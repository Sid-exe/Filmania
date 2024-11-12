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
        margin-top:20px;
        margin-left:-120px;
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
  .signupform
{
margin-top:5.5%;  
border: 5px solid black;
border-radius: 10px;
padding-left: 7%;
margin-left: 20%;
padding-bottom: 40px;
background-color: white;
margin-right: 20%;
}
input,textarea
{
width: 50%;    
display: inline-block;
border:none;
padding: 8px ;
border-bottom: 2px solid black;
margin-left: 130px;
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
    .img
	{
  font-family: sans-serif;
  color: black;
  border-bottom:none;
  padding-left:50px;
	}
    label
    {
width: 40%;    
display: inline-block;
border:none;
margin-left:150px;
text-align: center;
font-family:sans-serif;

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
    <div class="signupform">
    <form method="post" name="merch" action="uploadmerch.php" enctype="multipart/form-data">
        <h2>UPLOAD YOUR MERCH!</h2><br>
        <label for="img">Select the Merch Image:</label><br>
	   <input type="file" name="file" class="img"><br><br>
        <input type="text" placeholder="Enter Product Name" name="prname" ><br><br>
        <input type="text" placeholder="Enter Price" name="price" ><br><br>
        <textarea  name="desc" rows="6" cols="100"  placeholder="Description..."></textarea><br><br>
        <input type="email" placeholder="Enter Email" name="email" ><br><br>
        <br><br>
          <input type="submit" class="button" name="submit" value="POST!">
    </form>
</body>
</html>
<?php 
if(isset($_POST['submit']))
{
   $prname=$_POST['prname'];
   $name=$_SESSION['name'];
   $price=$_POST['price'];
   $desc=$_POST['desc'];
   $email=$_POST['email'];

   $file_name = $_FILES['file']['name'];
   $file_type = $_FILES['file']['type'];	
   $temp_name = $_FILES['file']['tmp_name'];
   $file_size = $_FILES['file']['size'];
   $file_destination = "merch/".$file_name;
   
    $mov=move_uploaded_file($temp_name,$file_destination) ;
   $sql=mysqli_query($conn,"INSERT INTO `merch` (`name`, `productname`,`product`,`price`,`description`,`email`) VALUES ('$name', '$prname','$file_name','$price', '$desc','$email');");
mysqli_fetch_assoc($sql);
}
?>

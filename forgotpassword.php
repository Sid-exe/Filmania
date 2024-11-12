<?php include 'connection.php';?>
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
    background-color:black;
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
    padding: 16px 20px;
    text-decoration: none;
    font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    margin-top: 8px;
    font-size: 16px;
    transition:0.4s;
  }
  
  li a:hover {
   color: #6C63FF;
  }
.signupform
{
margin-top:140px;  
border: 5px solid black;
border-radius: 10px;
padding: 60px;
margin-left: 4%;
padding-bottom: 40px;
background-color: white;
margin-right: 50%;
}
input 
{
width: 40%;    
padding: 10px;
display: inline-block;
border:none;
padding: 16px 28px;
border-bottom: 2px solid black;
margin-left: 170px;
text-align: center;
padding-bottom:10px;

}
h1
    {
        color: black;
        text-align: center;
        font-size: 40px;
        font-family: 'Quicksand', sans-serif;
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
    .signup
    {
        width: 40%;
       margin-left: 840px;
       margin-bottom: -530px;
    }

</style>    
</head>
<body>
    <header>
        <ul>
         <a href="index.php">   
        <li class="logo">Filmania</li>
        </a>
                <li><a href="login.php">LOGIN</a></li>
                <li><a href="signup.php">SIGNUP</a></li>
                <li><a href="aboutus.php">ABOUT US</a></li>

        </ul>
    </header>
    <img src="forgotpassword.svg" class="signup">
    <div class="signupform">
        <h1>Update Password</h1><br>
        <form method="post" name="forgotpassword" action="forgotpassword.php">
        
            <input type="email" placeholder="Enter Email" name="email" ><br><br>
            <input type="password" placeholder="Enter New Password" name="newpassword"><br><br>
            <br><br>
            <input type="submit" class="button" name="submit" value="UPDATE PASSWORD">
        </form>
     </div>
</body>
</html>
<?php
if(isset($_POST['submit']))
		{
            $password=$_POST['newpassword'];
            $email=$_POST['email'];
            $sql="UPDATE `registration` SET `password`='$password' WHERE `email`='$email'";
            $q=mysqli_query($conn,$sql);
            if($q)
            {
                echo "Updated successfully";
            }
            else
            {
                echo "not updated";
            }
		}
	?>
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
.loginform
{
margin-top:130px;  
border: 5px solid black;
border-radius: 10px;
padding: 45px;
margin-left: 55%;
padding-bottom: 35px;
margin-right: 9%;
background-color: white;
}
input 
{
width: 40%;    
padding: 8px;
display: inline-block;
border:none;
padding: 13px;
border-bottom: 2px solid black;
margin-left: 135px;
text-align: center;

}
select
{
    width: 40%;
    padding: 8px;
    display: inline-block;
    border-radius: 5px;
    padding: 13px 22px;
    margin-left: 135px;
    text-align: center;

}
h1
    {
        color: black;
        text-align: center;
        font-size: 40px;
        font-family: 'Quicksand', sans-serif;
    }
    .loginbtn
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
    .loginbtn:hover
    {
        background-color: #6C63FF;
        color: black;
    }
    .login
    {
       width: 45%;
       margin-bottom: -530px;
    }
    .forgot
    {
        text-decoration:none;
        font-family: sans-serif;
        margin-left:160px;
        color:black;
    }
    .forgot:hover
    {
     color: #6C63FF;
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
    <img src="login.svg" class="login">
    <div class="loginform">
    <form action="login.php" method="post">
        <h1>Login</h1><br><br>
        <input type="text" placeholder="Enter UserID" name="userid" required class="inputt"><br><br>
        <input type="password" placeholder="Enter Password" name="password" required class="inputt"><br><br>
        <select name="signupas" id="signupas" class="inputt">
            <option value="user">User</option>
            <option value="merchant">Merchant</option>
            <option value="creator">Creator</option>
            <option value="admin">Admin</option>
          </select><br><br>
          <input type="submit" class="loginbtn" name="submit" value="Login"><br><br>

          <a href="forgotpassword.php" class="forgot">Forgot Password?</a>
    </form>
</div>
    </body>
    </html>
    <?php
if(isset($_POST['submit']))
{
$count=0;
$password=$_POST['password'];
$signupas=$_POST['signupas'];
$userid=$_POST['userid'];
$sql="SELECT * FROM `registration` WHERE userid='$userid' AND password='$password' AND signupas='$signupas'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($res);
$count=mysqli_num_rows($res);
if($count==0)
{
?>
<script type="text/javascript">
    alert("Username,Password and Signup does not match");
</script>
<?php
}
elseif($_POST['signupas']=='user')
{   $_SESSION['name']=$row['name'];
    $_SESSION['profile']=$row['profile'];
    
    ?>
    <script type="text/javascript">
    window.location="userlogin.php";
</script>
<?php
}
elseif($_POST['signupas']=='merchant')
{
    $_SESSION['name']=$row['name'];
    $_SESSION['profile']=$row['profile'];
    ?>
    <script type="text/javascript">
    window.location="merchantlogin.php";
</script>
<?php
}
elseif($_POST['signupas']=='creator')
{   $_SESSION['name']=$row['name'];
    $_SESSION['profile']=$row['profile'];
    ?>
    <script type="text/javascript">
    window.location="creatorlogin.php";
</script>
<?php
}
elseif($_POST['signupas']=='admin')
{   $_SESSION['name']=$row['name'];
    $_SESSION['profile']=$row['profile'];
    ?>
    <script type="text/javascript">
    window.location="adminlogin.php";
</script>
<?php
}
}
?>    
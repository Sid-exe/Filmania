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
select
{
    width: 40%;
    padding: 8px;
    display: inline-block;
    border-radius: 5px;
    padding: 13px 22px;
    margin-left: 170px;
    text-align: center;

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
       margin-left: 800px;
       margin-bottom: -600px;
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
    <img src="signup.svg" class="signup">
    <div class="signupform">
        <h1>Sign Up!</h1><br>
        <form method="post" name="registration" action="signup.php">
        
            <input type="text" placeholder="Enter Name" name="name" ><br><br>
            <input type="text" placeholder="Enter UserID" name="userid" ><br><br>
            <input type="email" placeholder="Enter Email" name="email" ><br><br>
            <input type="password" placeholder="Enter Password" name="password" ><br><br>
            <select name="signupas" id="signupas" value="Signup as">
                <option value="user">User</option>
                <option value="merchant">Merchant</option>
                <option value="creator">Creator</option>
              </select>
            <br><br>
              <input type="submit" class="button" name="submit" value="SIGN UP">
        </form>
     </div>
</body>
</html>
<?php

if(isset($_POST['submit']))
{
$name=$_POST['name'];
$userid=$_POST['userid'];
$email=$_POST['email'];
$password=$_POST['password'];
$signupas=$_POST['signupas'];
$sql="SELECT userid FROM `registration`";
$res=mysqli_query($conn,$sql);

$count=0;
while($row=mysqli_fetch_assoc($res))
{
    if($row['userid']==$_POST['userid'])
    {
        $count=$count+1;
    }
}
if($count==0)
{
$sql1="INSERT INTO `registration` (`name`,`userid`,`email`, `password`,`signupas`,`profile`) VALUES ('$name','$userid', '$email', '$password','$signupas','p.jpg')";
$result=mysqli_query($conn,$sql1);
?>
<script type="text/javascript">
    alert("Registration Successfull");
</script>
<?php
}
else
{
    ?>
    <script type="text/javascript">
    alert("Userid already exist");
</script>
<?php
}
}
?>
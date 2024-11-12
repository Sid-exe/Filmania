<?php
	include "connection.php";
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>edit profile</title>
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

  .signupform
{
margin-top:160px;  
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
font-family:sans-serif;

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
  margin-left:195px;
    }
    .button:hover
    {
        background-color: #6C63FF;
        color: black;
    }
    h2{
        color: BLACK;
        font-size: 50px;
        font-family: 'Quicksand', sans-serif;
        text-align:center;
        padding-bottom:15px;
    } 
    .img
	{
  padding-left:55px;
  font-family: sans-serif;
  color: White;
  border-bottom:none;
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
    
    margin-top:15px;
    margin-right:35px;
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
<header>
<ul>
         <a href="creatorlogin.php">   
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
	<?php
		$namee=$_SESSION['name'];
		$sql = "SELECT * FROM registration WHERE name='$namee'";
		$result = mysqli_query($conn,$sql) or die (mysql_error());

		while ($row = mysqli_fetch_assoc($result)) 
		{
			$name=$row['name'];
			$userid=$row['userid'];
			$email=$row['email'];
			$password=$row['password'];
		}

	?>
    <div class="signupform">
	<h2>Edit Your Profile!</h2>
	<form action="editcreatorprofile.php" method="post" enctype="multipart/form-data">
		<label for="img">Choose Profile Pic:</label>
	   <input type="file" name="file" class="img" title=" "><br><br>
        <input type="text" placeholder="Enter name" name="name" value="<?php echo $name; ?>"><br><br>
        <input type="text" placeholder="Enter UserID" name="userid" value="<?php echo $userid; ?>"><br><br>
        <input type="text" placeholder="Email" name="email" value="<?php echo $email; ?>"><br><br>
        <input type="text" placeholder="Password" name="password" value="<?php echo $password; ?>"><br><br>
        <br><br>
		<button type="submit" name="submit" class="button">Save</button>
    </form>
	</div>
	<?php 

		if(isset($_POST['submit']))
		{
			move_uploaded_file($_FILES['file']['tmp_name'],"profileimages/".$_FILES['file']['name']);

			$name=$_POST['name'];
			$userid=$_POST['userid'];
			$email=$_POST['email'];
			$password=$_POST['password'];
            $pic=$_FILES['file']['name'];
            $namee=$_SESSION['name'];
			$sql1= "UPDATE registration SET profile='$pic', name='$name', userid='$userid', email='$email', password='$password' WHERE name='$namee'";

			if(mysqli_query($conn,$sql1))
			{
				?>
					<script type="text/javascript">
						alert("Saved Successfully.");
						window.location="creatorprofile.php";
					</script>
				<?php
			}
		}
 	?>
</body>
</html>
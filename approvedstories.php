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
        margin-top:110px;
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
  .sidenav {
  height: 100%; 
  width: 180px; 
  position: fixed; 
  z-index: 1; 
  top: 0; 
  left: 0;
  background-color: #111; 
  overflow-x: hidden; 
  padding-top: 20px;
  margin-top:73px;
}


.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  font-family: 'Quicksand', sans-serif;
}


.sidenav a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 160px; 
  padding: 0px 10px;
}
h1
{
    margin-left:700px;
    margin-top:100px;
    font-family: 'Quicksand', sans-serif;
}
TH
{  
    text-align: center;
    background-color: black;
    color: white;
	border: 2px solid black;
    padding: 10px;
	align-items:center;
	font-family:verdana;
    

}
TD
{
    text-align: center;
    color: black;
	border: 2px solid black;
    padding: 10px;
	align-items:center;
	font-family:verdana;
    

	
}
TABLE
{   
    width:70%;
	margin-left:auto;
	margin-right:auto;
    margin-top:20px;
    margin-right:170px;
    

}
</style>    
</head>
<body>
    <header>
        <ul>
         <a href="adminlogin.php">   
        <li class="logo">Filmania Admin</li>
        </a>    
                <li><a href="adminprofile.php">PROFILE</a></li>
                <li><a href="logout.php">LOGOUT</a></li>
                <li><a href="adminuser.php">USER</a></li>
                <li><a href="managemerchant.php">MERCHANT</a></li>
                <li><a href="managestories.php">CREATOR</a></li>
              
                <?php
                echo "<li >
 					<img class='profileimagee' src='profileimages/".$_SESSION['profile']."'>
                </li>";
                ?>
                <li class="username"><?php echo $_SESSION['name'] ?></li>
                </ul>
<div class="sidenav">
  <a href="managestories.php">Manage Stories</a>
  <a href="approvedstories.php">Approved Stories</a>
  <a href="rejectstories.php">Rejected Stories</a>
</div>
</body>
<h1>Approved Stories</h1>
</html>
<?php
$sql="SELECT * FROM films WHERE status='approved'";
$q=mysqli_query($conn,$sql);

if($q->num_rows>0) 
	{
			echo "<TABLE>";
			echo "<TR>
					<TH>SI NO</TH>
					<TH>FILMNAME</TH>
                    <TH>DIRECTOR</TH>
				  </TR>";
			while($row=$q->fetch_assoc()) 
			{
				echo "<TR>
						<TD>".$row["sino"]."</TD>
						<TD>".$row["filmname"]."</TD> 
                        <TD>".$row["director"]."</TD> 
					</TR>";
			}
			 
	} 
    else
    {
        echo "<h1>You have not posted anything!</h1>";
    }


?>
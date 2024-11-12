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
        margin-top:135px;
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
{   width:30%;
	margin-left:auto;
	margin-right:auto;
    margin-top:20px;
    

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
    <h1>STATUS</h1>
</body>
</html>
<?php
$sql="SELECT * FROM merch WHERE name='$_SESSION[name]'";
$q=mysqli_query($conn,$sql);

if($q->num_rows>0) 
	{
			echo "<TABLE>";
			echo "<TR>
					<TH>MERCH NAME</TH>
					<TH>STATUS</TH>
				  </TR>";
			while($row=$q->fetch_assoc()) 
			{
				echo "<TR>
						<TD>".$row["productname"]."</TD>
						<TD>".$row["status"]."</TD> 
					</TR>";
			}
			 
	} 
    else
    {
        echo "<h1>You have not posted anything!</h1>";
    }


?>
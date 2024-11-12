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

.search 
    {
        padding:10px ;
        text-decoration:none;
        border-radius:5px;
        margin-top:200px;
        margin-top:80px;
        margin-left:700px;
        margin-bottom:10px;

        
    }
    .search2 
    {
  background-color:black; 
  border: none;
  color: white;
  padding: 12px ;
  cursor: pointer;
  font-family: sans-serif;
  transition:0.4s;
  border-radius:5px;
        


    }
    .search2:hover
    {
        background-color: #6C63FF;
        color: black;
    }
    .reviews
  {
    margin-left:200px;
    background-color:lightgrey;
    padding-top:18px;
    height:100%;
    font-family: 'Quicksand', sans-serif;
    padding-bottom:40px;
    overflow-y:scroll;
    max-height:625px;
    border-radius:10px;
    border:2px solid black;
    
    
  }  
  .values
  {
    background-color:grey;
    color:white;
    padding-left: 10px;
    margin-top:20px;
    float:left;
    padding-right: 10px;
    padding-top: 15px;
    font-size:22px;
    width:250px;
    height:400px;
    border-radius:20px;
    margin-bottom:50px;
    margin-left:40px;
    margin-right:20px;
    color:black;
    text-align:center;
    border:3px solid black;
  }
  .valuess
  {
    color:white;
    font-size:20px;
    margin-top:10px;
    border-radius:20px;
    text-align:center;
    color:black;
    margin-left:-65px;
  }
  .video 
    {
      border-radius:20px;
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
  <a href="managemerchant.php">Manage Merch</a>
  <a href="approvedmerch.php">Approved Merch</a>
  <a href="rejectedmerch.php">Rejected Merch</a>
</div>
<form action="managemerchant.php" method="post">
  <input class="search" type="text" name="mrno" placeholder="Enter the Merch number " required="">
	<button type="submit" name="submit" class="search2">Search</button>
  </form>
</body>
</html>
<div class="reviews">

    <?php 
      if(isset($_POST['submit']))
		  {   
      $mrno=$_POST['mrno'];
			$sql1="SELECT * from `merch` where mrno='$mrno'";
      $q=mysqli_query($conn,$sql1);
      
			while($row=mysqli_fetch_assoc($q))
			{ $_SESSION['productnamee']= $row['productname'];
          $product=$row['product'];
                echo '<div class="valuess">';
                echo"Product Name :";echo $row['productname'];echo "<br>"; echo "<br>";
                echo "Seller name :";echo $row['name'];echo "<br>"; 
                echo "Price :";echo "$";echo $row['price'];echo "<br>";
                ?>
  <img width="180" height="280"  class="img" src="<?php echo 'merch/'.$product;?>">
<form action="managemerchant.php" method="post">
<button type="submit" name="approve" class="search2">APPROVE</button>
<button type="submit" name="reject" class="search2">REJECT</button>
</form>
                <?php   
                
                echo "</div>";
      }
		echo "</div>";
    ?>
    <?php
  }
    else
		{
			$res=mysqli_query($conn,"SELECT * FROM `merch` WHERE status=' ' ORDER BY `merch`.`productname` ASC;");

			while($row1=mysqli_fetch_assoc($res))
			{     $product=$row1['product'];
                echo '<div class="values">';
                echo $row1['productname'];echo "<br>";

      ?>
  <img width="180" height="280" class="img" src="<?php echo 'merch/'.$product;?>">
</video>

      <?php     echo "NO:";echo $row1['mrno'];echo "<br>";
                echo "$";echo $row1['price'];echo "<br>";
                
                ?>
<?php
                echo "</div>";
			}
		echo "</div>";
		} 
    ?>
    </div>

    <?php
        if(isset($_POST['approve']))
        {
          $sql2="UPDATE `merch` SET status='approved' WHERE productname='$_SESSION[productnamee]'";
          $q1=mysqli_query($conn,$sql2);
          unset($_SESSION['productnamee']);
        }
        if(isset($_POST['reject']))
        {
          $sql3="UPDATE `merch` SET status='rejected' WHERE productname='$_SESSION[productnamee]'";
          $q1=mysqli_query($conn,$sql3);
          unset($_SESSION['productnamee']);
        }
        ?>
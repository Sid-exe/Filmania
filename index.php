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
        margin-top: -300px;
        margin-left: 80px;
    }
    h2
    {
        color: black;
        margin-top: 150px;
        margin-left: 700px;
        font-size: 50px;
        font-family: 'Quicksand', sans-serif;
    }
    p
    {
        color: black;
        margin-left: 700px;
        padding-top: 20px;
        font-size: 18px;
        font-family: 'Quicksand', sans-serif;
        margin-right: 70px;
        
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
                <li><a href="aboutus.php">ABOUT US </a></li>

        </ul>
    </header>
    <h2 >WELCOME TO FILMANIA!</h2>
    <p>Product Description: Cheer on your favorite red and white team in eye-popping style with these red & white striped game bib overalls! Each pair is made of 100 percent cotton for a comfortable, breathable fit regardless of the weather and includes easily adjustable shoulder straps for fans with long torsos. Whether you’re on rickety bleachers on a Friday night or trying to get on television at the Sunday morning tailgate, our red & white striped game bibs will make you stand out in the crowd and leave an impression. These particular bib overalls are also great as casual Clauswear for any Saint Nicks who might be taking in a game during the holiday offseason!</p>
    <img src="home1.svg" class="home1">
</body>
</html>
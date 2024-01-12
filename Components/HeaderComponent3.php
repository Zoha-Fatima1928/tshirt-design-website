<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./CSS/HeaderComponent.css">
    <style>
        body{
    margin: 0px;
    padding: 0px;
}
.Header{
 display: flex;
 justify-content: space-between;
 height: 60px;
 
    
}
.Navbar{
    margin-top: 15px;
    margin-right: 50px;
    margin-top: 27px;
}
.NavATag{
    font-size: 20px;
    text-decoration: none;
    color: black;
    margin-left: 20px;
    margin-top: 35px;  
}
.NavATag2{
    background-color: #D26E4C;
    padding: 10px;
    font-size: 15px;
    text-decoration: none;
    color: black;
    border-radius: 10px;
    margin-left: 10px; 
    
}
.Headingh1{
    color: black;
    font-size: 25px;
    text-align: center;
    margin-top: 27px;   
}
.ImageDiv{
    display: flex;
    justify-content: center;
}
    </style>
</head>
<body>
<div class="Header">
    <div style="display:flex ; margin-left:10px">
    <img src="./Images/tshirtlogo1.png" style="margin-top:15px">
    <h1 class="Headingh1">T-SHIRTS</h1>
    </div>
  
    <nav class="Navbar" >
    <a href="Home.php" class="NavATag">Home</a>
        <a href="Gallery.php" class="NavATag">Galllery</a>
        <a href="AboutUs.php" class="NavATag">About Us</a>
        <a href="<?php echo isset($_SESSION['username']) ? 'Tshirtscategory.php' : 'Login.php'; ?>" class="NavATag2">Login</a>
        <a href="<?php echo isset($_SESSION['username']) ? 'Tshirtscategory.php' : 'Registration.php'; ?>" class="NavATag2">Registration</a>
    </nav>
</div>
        <div class="ImageDiv">
          <img src="./Images/Designing/tshirtbanner.jpg"  width="1349px" height="400PX">
         </div>
</body>
</html>
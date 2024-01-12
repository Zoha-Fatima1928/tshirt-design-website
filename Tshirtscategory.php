<?php
require('config.php');
error_reporting(0);
require('auth_collection.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T-SHIRTS Category</title>
    <link rel="stylesheet" href="./CSS/Tshirtscategory.css">
</head>
<body>

<?php require('./Components/HeaderComponent5.php')?>
<!-- Main Heading -->
    <div>
    <h1 style="text-align:center; margin-top:0px">T-SHIRTS CATEGORIES</h1>
</div>
<!-- Welcom User Area -->
<br>
<div style="margin-top:-25px">  
<div>
    <h1 class="WelcomeUser">Welcome !! " <?php   echo $_SESSION["username"]; ?>"</h1>
  <nav style="display:flex ; justify-content:center">
  </nav>
</div>
<br>
<br>
<!-- Cards-->
<div style="display:flex ; justify-content:space-around ; " >

<!-- Men Collection card  -->
    <div style="box-shadow:  1px 2px 3px 4px rgba(20,20,20,0.4);width:200px; border-radius:10px">
        <img src="./Images/Designing/Mens1.jpg" style="width:200px ; height:250px; border-radius:10px" >
        <br><br><br>
        <div style="margin-left:25px" >
        <div class="CollectionButtonDiv">
            <a href="CollectionofTshirts.php" class="CollectionButton"> Mens Collection</a>
          </div>
        </div>
        <br>
    </div>
<!-- Women Collection card  -->
<div style="box-shadow:  1px 2px 3px 4px rgba(20,20,20,0.4);width:200px; border-radius:10px">
        <img src="./Images/Designing/Women1.jpg" style="width:200px ; height:250px; border-radius:10px" >
        <br><br><br>
        <div style="margin-left:25px" >
        <div class="CollectionButtonDiv">
            <a href="WomenCollection.php" class="CollectionButton"> Women Collection</a>
          </div>
        </div>
        <br>
    </div>
<!-- Kids Collection card  -->
<div style="box-shadow:  1px 2px 3px 4px rgba(20,20,20,0.4);width:200px; border-radius:10px">
        <img src="./Images/Designing/Kids1.jpg" style="width:200px ; height:250px; border-radius:10px" >
        <br><br><br>
        <div style="margin-left:25px" >
        <div class="CollectionButtonDiv">
            <a href="KidsCollection.php" class="CollectionButton"> Kids Collection</a>
          </div>
        </div>
        <br>
    </div>
</div>
<br><br>
<!-- Footer Section -->
<?php  require('./Components/FooterComponent.php')?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Women Collection</title>
    <style>
.card {
    box-shadow:  1px 2px 3px 4px rgba(20,20,20,0.4);
  transition: 0.3s;
  width:200px;
  border-radius: 10px;
  height:260px
}

.card2 {
    box-shadow:  1px 2px 3px 4px rgba(20,20,20,0.4);
  transition: 0.3s;
  width:200px;
  border-radius: 10px;
  height:300px
}

.container {
  padding: 2px 16px;
}
.CollectionButtonDiv{
    background-color: black;
    height: 30px;
    width: 150px;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: -20px;
}
.CollectionButton{
    color: white;
    text-decoration: none;
    background-color: black;
    height: 30px;
    width: 150px;
    display: flex;
    justify-content: center;
    align-items: center;
}
</style>
</head>
<body>
     
<!-- Header Component -->
<?php require('./Components/HeaderComponent4.php')?>
<!-- Cards -->
    <!-- Women Summer -->


    <div>
    <h1 style="text-align:center">Women Collection Summer</h1>
   </div>
    <div style="display:flex;justify-content:center">

    <div class="card">
  <img src="./Images/Womens/women1.webp" alt="Avatar" style="width:200px ; border-radius:10px">
 
  <div style="margin-top:-30px">
  <h3 style="text-align:center;">Short Sleeves</h3>
  </div>

    <div style="display:flex; justify-content:center" >
        <div class="CollectionButtonDiv">
            <a href="CustomizationofWomen.php" class="CollectionButton"> CUSTOMIZATION</a>
          </div>
        </div>
</div>


<div class="card" style="margin-left:20px">
  <img src="./Images/Womens/Womens/Summer/shortsleeves2/women1.webp" alt="Avatar" style="width:200px ; border-radius:10px">
 
  <div style="margin-top:-30px">
  <h3 style="text-align:center;">Half Sleeves</h3>
  </div>

    <div style="display:flex; justify-content:center" >
        <div class="CollectionButtonDiv">
            <a href="womensummer1.php" class="CollectionButton"> CUSTOMIZATION</a>
          </div>
        </div>
</div>


<div class="card" style="margin-left:20px">
  <img src="./Images/Womens/Womens/Summer/fullsleeves/women1.webp" alt="Avatar" style="width:200px ; border-radius:10px">
 
  <div style="margin-top:-30px">
  <h3 style="text-align:center;">Full Sleeves</h3>
  </div>

    <div style="display:flex; justify-content:center" >
        <div class="CollectionButtonDiv">
            <a href="womensummer2.php" class="CollectionButton"> CUSTOMIZATION</a>
          </div>
        </div>
</div>
        <br> 
    </div>
</div>



    <!-- Women Winter -->


    <div>
    <h1 style="text-align:center">Women Collection Winter</h1>
   </div>
    <div style="display:flex;justify-content:center">

    <div class="card">
  <img src="./Images/Womens/Womens/winter/FullSleeves/women1.webp" alt="Avatar" style="width:200px ; border-radius:10px">
 
  <div style="margin-top:-30px">
  <h3 style="text-align:center;">Full Sleeves</h3>
  </div>

    <div style="display:flex; justify-content:center" >
        <div class="CollectionButtonDiv">
            <a href="womenwinter1.php" class="CollectionButton"> CUSTOMIZATION</a>
          </div>
        </div>
</div>


<div class="card" style="margin-left:20px">
  <img src="./Images/Womens/Womens/winter/ShortSleeves/women1.webp" alt="Avatar" style="width:200px ; border-radius:10px">
 
  <div style="margin-top:-30px">
  <h3 style="text-align:center;">Short Sleeves</h3>
  </div>

    <div style="display:flex; justify-content:center" >
        <div class="CollectionButtonDiv">
            <a href="womenwinter2.php" class="CollectionButton"> CUSTOMIZATION</a>
          </div>
        </div>
</div>

        <br> 
    </div>
</div>
    <br>
    <br>
    <?php require('./Components/FooterComponent.php')?>
</body>
</html>
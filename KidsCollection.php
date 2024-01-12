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
    <h1 style="text-align:center">Kids Collection Summer</h1>
   </div>
    <div style="display:flex;justify-content:center">

    <div class="card">
  <img src="./Images/Kids/Kids1.webp" alt="Avatar" style="width:200px ; border-radius:10px">
 
  <div style="margin-top:-30px">
  <h3 style="text-align:center;">Without Collar</h3>
  </div>

    <div style="display:flex; justify-content:center" >
        <div class="CollectionButtonDiv">
            <a href="CustomizationofKids.php" class="CollectionButton"> CUSTOMIZATION</a>
          </div>
        </div>
        <br>
    </div>
    <br>
    
        
    <div class="card" style="margin-left:30px">
  <img src="./Images/Kids/Kids11.webp" alt="Avatar" style="width:200px ; border-radius:10px">
 
  <div style="margin-top:-20px">
  <h3 style="text-align:center;">cotton T-shirts </h3>
  </div>

    <div style="display:flex; justify-content:center" >
        <div class="CollectionButtonDiv">
            <a href="kidssummer.php" class="CollectionButton"> CUSTOMIZATION</a>
          </div>
        </div>
        <br>
    </div>
    

    <div class="card" style="margin-left:20px">
  <img src="./Images/wcsummer13.webp" alt="Avatar" style="width:200px ;">
    <h3 style="text-align:center;margin-top:-10px">Kids Quote</h3>
    <div style="display:flex; justify-content:center ;margin-top:60px" >
        <div class="CollectionButtonDiv" style="margin-top:-60px">
            <a href="SummerCustomizedText.php" class="CollectionButton">CUSTOMIZATION</a>
          </div>
        </div>
</div>
</div>

<br>

<!-- Women Summer -->


<div>
    <h1 style="text-align:center">Kids Collection Winter</h1>
   </div>
    <div style="display:flex;justify-content:center">

    
    <div class="card" style="margin-left:30px">
  <img src="./Images/Kids/Hodies/Hodies1.webp" alt="Avatar" style="width:200px ; border-radius:10px">
 
  <div style="margin-top:-20px">
  <h3 style="text-align:center;">Baby Rompers</h3>
  </div>

    <div style="display:flex; justify-content:center" >
        <div class="CollectionButtonDiv">
            <a href="Rompers.php" class="CollectionButton"> CUSTOMIZATION</a>
          </div>
        </div>
        <br>
    </div>

    <div class="card" style="margin-left:30px">
  <img src="./Images/Kids/kids21.webp" alt="Avatar" style="width:200px ; border-radius:10px">
 
  <div style="margin-top:-20px">
  <h3 style="text-align:center;">Full Sleeves</h3>
  </div>

    <div style="display:flex; justify-content:center" >
        <div class="CollectionButtonDiv">
            <a href="Kidsfull1.php" class="CollectionButton"> CUSTOMIZATION</a>
          </div>
        </div>
    </div>
 
        <br>
    
    <br>
</div>
</div>
    <br>
    <br>
    <?php require('./Components/FooterComponent.php')?>
</body>
</html>
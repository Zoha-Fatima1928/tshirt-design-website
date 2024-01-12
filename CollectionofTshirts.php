<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Collection Of Tshirts</title>
    
    <link rel="stylesheet" href="CSS/CollectionofTshirt.css">
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
</style>
</head>
<body>
 
<!-- Header Component -->
<?php require('./Components/HeaderComponent4.php')?>
<!-- Card Area -->
<div>
<h1 style="text-align:center ; text-decoration:underline">Summmer Collections</h1> 
</div>


<div style="display:flex ; justify-content:center">
<div class="card">
  <img src="./Images/bgremover/wcsummer12.png" alt="Avatar" style="width:200px ;">
 
  <div style="margin-top:-30px">
  <h3 style="text-align:center;">Without Collar</h3>
  </div>

    <div style="display:flex; justify-content:center" >
        <div class="CollectionButtonDiv">
            <a href="CustomizationofSummer.php" class="CollectionButton"> CUSTOMIZATION</a>
          </div>
        </div>
        <br>
</div>
<br>
<div style="margin-left:20px">
<div class="card" >
  <img src="./Images/bgremover/csummer1.png" alt="Avatar" style="width:200px ;">
    <h3 style="text-align:center;margin-top:-10px">With Collar</h3>
    <div style="display:flex; justify-content:center ; margin-top:10px" >
        <div class="CollectionButtonDiv">
            <a href="CustomizationofWinter.php" class="CollectionButton"> CUSTOMIZATION</a>
          </div>
        </div>
        <br><br>  
</div>
</div>
<div class="card" style="margin-left:20px">
  <img src="./Images/bgremover/wcsummer12.png" alt="Avatar" style="width:200px ;">
    <h3 style="text-align:center;margin-top:-10px">Write A Quote</h3>
    <div style="display:flex; justify-content:center ;margin-top:60px" >
        <div class="CollectionButtonDiv" style="margin-top:-60px">
            <a href="SummerCustomizedText.php" class="CollectionButton">CUSTOMIZATION</a>
          </div>
        </div>
        <br>
</div>


<!-- T-SHIRT TEMPLATES  SUMMER -->
<div style="display:flex ; justify-content:center">
<div class="card" style="margin-left:20px">
  <img src="./Images/bgremover/template1.png" alt="Avatar" style="width:200px ;">
    <h3 style="text-align:center;margin-top:-5px">Without Collar</h3>
    <div style="display:flex; justify-content:center ; margin-top:5px" >
        <div class="CollectionButtonDiv">
            <a href="logotemplatecustomization.php" class="CollectionButton">CUSTOMIZATION</a>
          </div>
        </div>
        <br>
</div>
<br>
<div style="margin-left:20px">
<div class="card">
  <img src="./Images/bgremover/template11.png" alt="Avatar" style="width:200px ;">
    <h3 style="text-align:center;margin-top:-2px">Without Collar</h3>
    <div style="display:flex; justify-content:center ; margin-top:3px" >
        <div class="CollectionButtonDiv">
            <a href="catlogotemplate.php" class="CollectionButton"> CUSTOMIZATION</a>
          </div>
        </div>
        <br>
</div>    
</div>
</div>
<br>
</div>



<!-- Winter Collection -->
<div >
<h1 style="text-align:center ; text-decoration:underline">Winter Collections</h1> 
</div>
<div style="display:flex ; justify-content:center">
<div class="card">
  <img src="./Images/bgremover/wcwinter1.png" alt="Avatar" style="width:200px ;">
    <h3 style="text-align:center;margin-top:-5px">Without Collar</h3>
    <div style="display:flex; justify-content:center ; margin-top:4px" >
        <div class="CollectionButtonDiv">
            <a href="WcwinterCollection.php" class="CollectionButton"> CUSTOMIZATION</a>
          </div>
        </div>  
</div>

<div style="margin-left:20px">
<div class="card">
  <img src="./Images/bgremover/cwinter1.png" alt="Avatar" style="width:200px ;">
    <h3 style="text-align:center;margin-top:-5px">With Collar</h3>
    <div style="display:flex; justify-content:center" >
        <div class="CollectionButtonDiv">
            <a href="cwinter.php" class="CollectionButton"> CUSTOMIZATION</a>
          </div>
        </div>
    <br>
</div>    
</div>

<!-- T-SHIRT TEMPLATES  WINTER -->
<div style="display:flex ; justify-content:center">
<div class="card" style="margin-left:20px">
  <img src="./Images/TEMPLATES/full01.png" alt="Avatar" style="width:200px ;">
    <h3 style="text-align:center;margin-top:-2px">Without Collar</h3>
    <div style="display:flex; justify-content:center ; margin-top:4px" >
        <div class="CollectionButtonDiv">
            <a href="FullSleevesTemplate1.php" class="CollectionButton"> CUSTOMIZATION</a>
          </div>
        </div>
        <br>
</div>
<br>
<div style="margin-left:20px">
<div class="card">
  <img src="./Images/TEMPLATES/fulla.jpg" alt="Avatar" style="width:200px ; border-radius:10px">
    <h3 style="text-align:center;margin-top:-2px">Without Collar</h3>
    <div style="display:flex; justify-content:center" >
        <div class="CollectionButtonDiv">
            <a href="FullSleevesTemplate2.php" class="CollectionButton"> CUSTOMIZATION</a>
          </div>
        </div>
        <br><br>
</div>    
</div>
</div>

</div>







<!-- ARMY TSHIRTS -->

<div >
<h1 style="text-align:center ; text-decoration:underline">Army Tshirts</h1> 
</div>
<div style="display:flex ; justify-content:center">
<div class="card2">
  <img src="./Images/Army/army1.jpg" alt="Avatar" style="width:200px ;">
    <h3 style="text-align:center;margin-top:-5px">Army Without Collar</h3>
    <div style="display:flex; justify-content:center ; margin-top:20px" >
        <div class="CollectionButtonDiv">
            <a href="Army.php" class="CollectionButton"> CUSTOMIZATION</a>
          </div>
        </div>
        <br>
</div>
<br>

</div>
 <!-- FOOTER  -->
 <br><br>
    <div class="Footer">
        <h3 class="FooterHeading">T-Shirts ! Customized it</h3>
    </div>
  
</body>
</html>
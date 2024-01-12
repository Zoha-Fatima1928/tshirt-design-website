<?php
require('config.php');
error_reporting(0);
require("auth_collection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Gallery</title>
    <link rel="stylesheet" href="./CSS/Gallery.css">
</head>
<body>
<?php require("./Components/HeaderComponent.php")?>
 <br><br>
   <br><br>
   <h1 class="headingGallery">T-SHIRTS GALLERY</h1>

<div class="gallery-image">

<div style="display:flex">
<a  style="color:white " href="./ImageGalleryPreview/Image1.php">
  <div class="img-box">
 
    <img src="./Images/Design/img1.png" alt="" />
    <div class="transparent-box">
      <div class="caption">
        <p>T-SHIRT</p>
      </div>
    </div> 

  </div>
  </a>
  <a  style="color:white" href="./ImageGalleryPreview/Image2.php">
  <div class="img-box">
    <img src="./Images/Design/img2.png" alt="" />
    <div class="transparent-box">
      <div class="caption">
      <p>T-SHIRT</p>
      </div>
    </div>
  </div>
  </a>

  <a  style="color:white" href="./ImageGalleryPreview/Image3.php">
  <div class="img-box">
    <img src="./Images/Design/img3.png" alt="" />
    <div class="transparent-box">
      <div class="caption">
      <p>T-SHIRT</p>
 
      </div>
    </div>
  </div>
  </a>


</div>

<div style="display:flex">
<a  style="color:white " href="./ImageGalleryPreview/Image4.php">
  <div class="img-box">
    <img src="./Images/Design/img4.png" alt="" />
    <div class="transparent-box">
      <div class="caption">
      <p>T-SHIRT</p>
      </div>
    </div> 
  </div>
</a>


<a  style="color:white " href="./ImageGalleryPreview/Image5.php">
  <div class="img-box">
    <img src="./Images/Design/img5.png" alt="" />
    <div class="transparent-box">
      <div class="caption">
      <p>T-SHIRT</p>
     
      </div>
    </div> 
  </div>
</a>

<a  style="color:white " href="./ImageGalleryPreview/Image6.php">
  <div class="img-box">
    <img src="./Images/Design/img6.png" alt="" />
    <div class="transparent-box">
      <div class="caption">
      <p>T-SHIRT</p>
       
      </div>
    </div> 
  </div>
</a>
</div>

 
</div>
    <br>
    <div class="Footer">
        <h3 class="FooterHeading">T-Shirts ! Customized it</h3>
    </div>
</body>
</html>
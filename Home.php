<?php 

require('config.php');



if (isset($_SESSION["username"])) {
  header("Location: Tshirtscategory.php"); // Redirect to T-Shirts category page
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T-Shirts Customization</title>
    <link rel="stylesheet" href="CSS/Home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body> 

   <!-- Header Componentss -->
<?php require("./Components/HeaderComponent.php")?>
 <br><br>
  <!--T-SHIRTS Available Category -->
 <br><br>
      <div style="display:flex;justify-content:space-around">
          
        <div style="margin-left:20px;background-color:#E5C9BB ;height:300px; width:700px ;border-radius:10px">
            <h1 style="font-size:40px; margin-left:170px; text-decoration:underline;margin-top:50px">T-SHIRTS Category</h1>
            <br>
            <div>
        <p class="CollectionParagrapgh" style="margin-left:40px; margin-top:-20px"> We have all kind of T-SHIRTS 
        available here. You Can customized it online and download your customized T-SHIRTS
        We have <b style="font-size:15px">Mens T-SHIRTS Category </b>,
        <b style="font-size:15px">Womens T-SHIRTS Category</b> And <b style="font-size:15px">Kids T-SHIRTS Category</b>
        </p>

        <div style="display:flex; justify-content:center" >
        <div class="CollectionButtonDiv" style="margin-left:-100px">
            <a href="Tshirtscategory.php" class="CollectionButton">T-SHIRTS CATEGORIES</a>
          </div>
        </div>
        </div>
        </div>
        <div style="margin-left:-170px">
                <a ><img src="./Images/Designing/style1.jpg" alt="" 
                style="height:300px; width:400px ; margin-left:-30px ; border-radius:10px "></a>
           </div>
      
</div>


<br><br>
  <!--T-SHIRTS Collection  -->
   <div style="display:flex;justify-content:space-around; margin-left:30px">

   <div class="AvaiableTshirtCard"  style="margin-top:10px;">
        <img src="./Images/Backtshirt2.jpg" class="CardImage">

        <div style="background-color:#576E6A; margin-left:10px ;border-radius:10px">
          <div>
        <h1 style="text-decoration:underline; margin-left:120px;margin-top:80px">T-SHIRTS COLLECTION</h1>
        <div>
        <p class="CollectionParagrapgh" style="margin-left:50px">We have a lot of TSHIRT COLLECTION. You can easily 
            customize them according to your choice. We have summer collection and winter collection t-shirts.
        </p>
        </div>
        </div>
        

        
        </div>
    
   </div>
   </div>
 <br><br>

<!-- T-SHIRTS Gallery -->
   <br><br>
   <h1 class="headingGallery">T-SHIRTS GALLERY</h1>

  <div class="gallery-image">

  <div style="display:flex">
  <a style="color:white " href="./ImageGalleryPreview/Image1.php">
    <div class="img-box">
      <img src="./Images/Design/img1.png" alt="" />
      <div class="transparent-box">
        <div class="caption">
          <p>T-SHIRT</p>
        </div>
      </div> 
    </div>
  </a>
  <a style="color:white" href="./ImageGalleryPreview/Image2.php">
    <div class="img-box">
      <img src="./Images/Design/img2.png" alt="" />
      <div class="transparent-box">
        <div class="caption">
          <p>T-SHIRT</p>
        </div>
      </div>
    </div>
  </a>
  <a style="color:white" href="./ImageGalleryPreview/Image3.php">
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
  <a style="color:white " href="./ImageGalleryPreview/Image4.php">
    <div class="img-box">
      <img src="./Images/Design/img4.png" alt="" />
      <div class="transparent-box">
        <div class="caption">
          <p>T-SHIRT</p>
        </div>
      </div> 
    </div>
  </a>
  <a style="color:white " href="./ImageGalleryPreview/Image5.php">
    <div class="img-box">
      <img src="./Images/Design/img5.png" alt="" />
      <div class="transparent-box">
        <div class="caption">
          <p>T-SHIRT</p>
        </div>
      </div> 
    </div>
  </a>
  <a style="color:white " href="./ImageGalleryPreview/Image6.php">
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


    <!-- Footer Section -->
<br>
    <div class="Footer">
        <h3 class="FooterHeading">T-Shirts! Customize it</h3>
    </div>
 
</body>
</html>

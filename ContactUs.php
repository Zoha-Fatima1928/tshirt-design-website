<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="./CSS/ContactUs2.css">
</head>
<body>
<div class="Header">
    <h1 class="Headingh1">T-SHIRTS</h1>
    <nav class="Navbar" >
        <a href="Home.php" class="NavATag">Home</a>
        <a href="AboutUs.php" class="NavATag">About Us</a>
        <a href="ContactUs.php" class="NavATag">Contact Us</a>
        <a href="CollectionofTshirts.php" class="NavATag">T-SHIRTS</a>
    </nav>
</div>
<div class="ImageDiv">
          <img src="./Images/Backtshirt2.jpg"  width="1500px" height="300PX">
         </div>
         <br><br>
         <div>
        <?php if (isset($message)) : ?>
    <div class="alert alert-success">
        <?= $message ?>
    </div>
<?php endif ?>

<!--Section: Contact v.2-->
<section class="mb-4 " >

    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-center my-4 " style="text-decoration:underline ; text-align:center ;margin-left:100px;font-size:30px">Contact us</h2>
    <!--Section description-->

    <div style="display:flex; justify-content:center">

    <img src="./Images/contactimage.avif" class="ContactUsImage" style="border-radius:10px; margin-left:-80px"height="250px">
    <div class="row">

<!--Grid column-->
<div class="col-md-9 mb-md-0 mb-5" style="margin-top:30px">
    <form id="contact-form"  style="margin-left:350px" name="contact-form" action="" method="POST">

        <!--Grid row-->
        <div class="row">

            <!--Grid column-->
            <div class="col-md-6">
                <div class="md-form mb-0">
                    <input type="text" id="name" name="name" class="form-control"
                    placeholder="Enter Your Name">
                </div>
            </div>
            <br>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-6">
                <div class="md-form mb-0">
                    <input type="text" id="email" name="email" class="form-control"
                    placeholder="Enter Your Email">
                   
                </div>
                <br>
            </div>
            <!--Grid column-->

        </div>
        <!--Grid row-->

        <!--Grid row-->
        <div class="row">
            <div class="col-md-12">
                <div class="md-form mb-0">
                    <input type="text" id="subject" name="subject" class="form-control"
                    placeholder="Subject">
                    
                </div>
            </div>
           
        </div>
        <br>
        <!--Grid row-->

        <!--Grid row-->
        <div class="row">

            <!--Grid column-->
            <div class="col-md-12">

                <div class="md-form">
                    <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea" placeholder="Your Message"></textarea> 
                </div>
            </div>
        </div>
        <!--Grid row-->
    </form>
   <br>
  <div style=" margin-left:350px;background-color:#0D6EFD ; width:100px; height:40px ; display:flex; border-radius:5px;justify-content:center; align-content:center ; align-items:center">
    <a href="#"
    style="background-color:#0D6EFD ; color:white; text-decoration:none ; border-radius:5px; width:100px; height:40px ; display:flex; justify-content:center; align-content:center ; align-items:center">
    Send</a>
  </div>
</div>
<!--Grid column-->
<!--Grid column-->
</div>
</section>
<!--Section: Contact v.2-->
</div>
    </div>  
<br>
<br>
<div class="Footer">
        <h3 class="FooterHeading">T-Shirts ! Customized it</h3>
    </div>
</body>
</html>
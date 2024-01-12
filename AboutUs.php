<?php
require('config.php');
error_reporting(0);
require("auth_collection.php");
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Validate and sanitize the data (you can add your own validation here)

    // Connect to the database (replace host, username, password, and dbname with your actual database credentials)
   
    // Check connection
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    // Prepare and execute the SQL statement to insert the data into the database
    $stmt = $con->prepare("INSERT INTO contacts (name, email, subject, message) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $subject, $message);
    $stmt->execute();

    // Close the statement and connection
    $stmt->close();
    $con->close();

    // Set a success message to be displayed on the next page (you can customize this message)
    $message = "Your message has been sent successfully!";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="./CSS/AboutUs.css">
</head>
<body>
<?php require("./Components/HeaderComponent.php")?>
 <br><br>
<div class="AboutUsDiv">
            <img src="./Images/AboutTshirt.webp" class="AboutSectionImage">
             <div style="margin-top:30px ;" >
             <h1 class="AboutUs">About Us</h1>
<p  class="AboutUsParagrapgh">
Online customized T-shirt designing is a web site where 
a registered user can design his\her own T-shirts 
based on different provided templates. 
A user after registration can select a
tshirt color, t-shirt type and size. After 
that user can start designing the t-shirt.
For T-shirt designing a stage is available to users. 
In designing interface different sticker sizes, templates, 
fonts, shapes etc. are available to user 
using which a user can design a T-shirt.  
</p>
</div>
</div>
<br>
        <?php if (isset($message)) : ?>
            <div class="alert alert-success" style=" color:red ; margin-top:10px ; margin-left:900px"> 
        <?= $message ?>
        </div>
        <script>
        setTimeout(function() {
            document.querySelector('.alert').style.display = 'none';
        }, 1000); // Hide the message after 3 seconds (3000 milliseconds)
    </script>
<?php endif ?>
<!--Section: Contact v.2-->
<section class="mb-4 " >

    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-center my-4 " style="text-decoration:underline ; text-align:center ;margin-left:600px;font-size:30px">Contact us</h2>
    <!--Section description-->

    <div style="display:flex; justify-content:center">

    <img src="./Images/contactimage.avif" class="ContactUsImage" style="border-radius:10px; margin-left:-80px"height="250px">
    <div class="row">

<!--Grid column-->
<div class="col-md-9 mb-md-0 mb-5" style="margin-top:30px">
    <form id="contact-form"  style="margin-left:350px" name="contact-form" action="AboutUs.php" method="POST">

        <!--Grid row-->
        <div class="row">

            <!--Grid column-->
            <div class="col-md-6">
                <div class="md-form mb-0">
                    <input type="text" id="name" name="name" class="form-control" value="<?php echo $_SESSION['username']?>"
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
                    <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"  style="resize:none ; height:100px;width:300px"placeholder="Your Message"></textarea> 
                </div>
            </div>
        </div>
        <!--Grid row-->
        <button type="submit" name="submite">submit</button>
        <br>
        
    </div>
    </form>
   <br>
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
<br>
<div class="Footer">
        <h3 class="FooterHeading">T-Shirts ! Customized it</h3>
    </div>


</body>
</html>
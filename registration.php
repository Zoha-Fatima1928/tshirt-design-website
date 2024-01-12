<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="CSS/style.css"/>
</head>
<body>
<?php
    require('config.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $confirm_password = stripslashes($_REQUEST['confirm_password']);
        $confirm_password = mysqli_real_escape_string($con, $confirm_password);
        
        // Check if the email already exists in the database
        $email_query = "SELECT * FROM `users` WHERE email='$email'";
        $email_result = mysqli_query($con, $email_query);
        $email_count = mysqli_num_rows($email_result);
        
        if ($email_count > 0) {
            echo "<div class='form'>
                  <h3 style='color:white; font-size:30px;'>Email address is already registered.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php' style='color:white;'>register</a> again.</p>
                  </div>";
        } elseif ($password !== $confirm_password) {
            echo "<div class='form'>
                  <h3 style='color:white; font-size:30px;'>Passwords do not match.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php' style='color:white;'>register</a> again.</p>
                  </div>";
        } else {
            $create_datetime = date("Y-m-d H:i:s");
            $query = "INSERT INTO `users` (username, password, email, create_datetime)
                      VALUES ('$username', '" . md5($password) . "', '$email', '$create_datetime')";
            $result = mysqli_query($con, $query);
            if ($result) {
                echo "<div class='form'>
                      <h3 style='color:white; font-size:30px;'>You are registered successfully.</h3><br/>
                      <p class='link'>Click here to <a href='login.php'>Login</a></p>
                      </div>";
            } else {
                echo "<div class='form'>
                      <h3>Required fields are missing.</h3><br/>
                      <p class='link'>Click here to <a href='registration.php'>register</a> again.</p>
                      </div>";
            }
        }
    } else {
?>
    <form class="form" action="" method="post">
        <h1 class="login-title">Registration</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" Required require/>
        <input type="text" class="login-input" name="email" placeholder="abc@gmail.com (email address)" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" Required require>
        <input type="password" class="login-input" name="password" placeholder="Password" Required require>
        <input type="password" class="login-input" name="confirm_password" placeholder="Confirm Password" Required require>
        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link"><a href="login.php">Click to Login</a></p>
    </form>
<?php
    }
?>
</body>
</html>

<?php
    if(isset($_SESSION["username"])) {
        header("Location: Home.php");
        exit();
    }
?>
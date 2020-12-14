<?php
if(isset($_SESSION['user'])){
    if (isset($_SESSION['user']['email'])) {
        $email = $_SESSION['user']['email'];
        echo "<p>Your email: ".$email."</p>";
    }
}
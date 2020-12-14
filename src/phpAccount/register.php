<?php

session_start();
$arr = array("admin@admin.pl" => md5("root"),
             "user@user.pl" => md5("pass"));

if (isset($_POST['conf_registr'])){
    $email = $_POST['email'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    $password_confirmation = $_POST['password_confirmation'];


    similar_text($password, $password_confirmation, $percent);
    if ($percent != 100){
        $_SESSION['message'] = 'Wrong password';
        header("Location: signup.php");
        die();

    } else {

        $password = md5($password);
        $arr[$email] = $password;

        $_SESSION['message'] = 'Success!!!';
        header("Location: login.php");
    }
    
}

if (isset($_POST['conf_log'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = md5($password);

    $check_user = false;
    if (array_key_exists($email, $arr)) {
        if ($arr[$email] === $password) {
            $check_user = true;

        }
    }
    if ($check_user){
        $_SESSION['user'] = ["email" => $email];
        setcookie('email', $email, time() + 60*60*7);
        header('Location: ../index.php');
    } else {
        $_SESSION['message'] = 'Wrong email or password';
        header('Location: login.php');
    }
}
?>
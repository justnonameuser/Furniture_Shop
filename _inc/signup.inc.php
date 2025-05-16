<?php

if(isset($_POST["submit"])) {

    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdRepeat"];
    $email = $_POST["email"];
    $role = $_POST["role"];
    require_once('autoload.php');
    $signup = new SignupContr($uid, $pwd, $pwdRepeat, $email, $role);
    $signup->signupUser();
    header("location: ../login.php?signup=success");
}

?>
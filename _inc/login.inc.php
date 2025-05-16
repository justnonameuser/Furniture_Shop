<?php

if(isset($_POST["submit"])) {

    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];
    
    require_once('autoload.php');
    $login = new loginContr($uid, $pwd);
    $login->loginUser();
    header("location: ../index.php?error=none");
}

?>
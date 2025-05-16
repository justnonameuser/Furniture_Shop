<?php
session_start();
include_once 'php/header.php';

if (!isset($_SESSION["userrole"]) || $_SESSION["userrole"] !== 'admin') {
    header("Location: index.php?error=unauthorized");
    exit();
}
include 'php/footer.php';
?>
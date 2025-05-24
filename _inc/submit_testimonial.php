<?php
include_once "classes/testemonial.php";
$name = $_POST['name'] ?? '';
$role = $_POST['role'] ?? '';
$message = $_POST['message'] ?? '';
$imagePath = 'images/avatar-png.png'; 

$testimonialObj = new Testimonial();
$testimonialObj->addTestimonial($name, $role, $message, $imagePath);

header("Location: ../index.php");
exit();

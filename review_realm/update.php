<?php
include "db.php";
session_start();
$user=$_SESSION['username'];
$book=$_POST['bookname'];
$newreview=$_POST['textarea'];
$sql=mysqli_query($conn,"UPDATE `reviews` set `reviews`='$newreview' WHERE `email`='$user' and `bookname`='$book'");
header("location:home1.php")
?>
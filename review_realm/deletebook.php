<?php
session_start();
$user=$_SESSION['username'];
$bookname=$_POST['bookname'];
include "db.php";
$sql=mysqli_query($conn,"DELETE FROM `reviews` WHERE `email`='$user' And `bookname`='$bookname'");
header("location:book.php");
?>
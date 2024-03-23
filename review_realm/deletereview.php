<?php
include "db.php";
$username=$_POST['email'];
$review=$_POST['review'];
$sql=mysqli_query($conn,"DELETE FROM `reviews` WHERE `email`='$username' AND `bookname`='$review'");
header("location:admin.php");
// echo $username;
?>
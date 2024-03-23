<?php
include "db.php";
$username=$_POST['username'];
$sql=mysqli_query($conn,"DELETE FROM `reviewdata` WHERE `username`='$username'");
header("location:admin.php");
// echo $username;
?>
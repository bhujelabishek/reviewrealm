<?php
$usernam=$_POST['usernam'];
$em=$_POST['emaill'];
$pass=$_POST['pass'];
$cpass=$_POST['cpass'];
// echo" $usernam, $em, $pass";

include"db.php";
if($pass==$cpass){
    $sql=mysqli_query($conn,"INSERT INTO `reviewdata`(`username`,`email`,`password`,`cpassword`)
     VALUES('$usernam','$em','$pass','$cpass')");
    header("location:loginpage.html");
}
?>
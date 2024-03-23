<?php
session_start();

$user=$_POST['user'];
$pass=$_POST['pass'];
// echo $user,$pass;
include "db.php";
if($user=="abishekbhujel23@gmail.com"){
$sqll=mysqli_query($conn,"SELECT `email` FROM `reviewdata` WHERE `email`='$user'");
$sql=mysqli_query($conn,"SELECT `password` FROM `reviewdata` WHERE `email`='$user'");
$row=mysqli_num_rows($sqll);
if($row>0){
    
    $rata=implode(mysqli_fetch_assoc($sql));
    $rataa=implode(mysqli_fetch_assoc($sqll));
    // echo $rata;
    // echo $rataa;
    
    if($rataa=="abishekbhujel23@gmail.com" && $rata==$pass){
        $_SESSION['username']=$user;
        header("location:admin.php");   
    }
    else{ 
        header("location:loginpage.html");
    }
}
}

     else{
        $sqll=mysqli_query($conn,"SELECT `email` FROM `reviewdata` WHERE `email`='$user'");
$sql=mysqli_query($conn,"SELECT `password` FROM `reviewdata` WHERE `email`='$user'");
$row=mysqli_num_rows($sqll);
if($row>0){
    
    $rata=implode(mysqli_fetch_assoc($sql));
    $rataa=implode(mysqli_fetch_assoc($sqll));
        if(($rata == $pass) && ($rataa == $user)){
        $_SESSION['username']=$user;
        header("location:home1.php");
        
    }
    else{
        header("location:loginpage.html");
    }
}
     }
?>

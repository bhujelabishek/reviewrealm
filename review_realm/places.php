<?php
     $category="place";
     $book=$_POST['place'];
    $text=$_POST['textarea'];
    include "db.php";
    session_start();
    $email=$_SESSION['username'];

    $sql=mysqli_query($conn,"INSERT INTO `reviews`(`email`,`category`,`bookname`,`reviews`)values('$email','$category','$book','$text')");
  header("location:place.php");
    ?>


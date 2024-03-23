<?php
session_start();
$userprofile = $_SESSION['username'];
if ($userprofile == true) {
} else {
    header("location:loginpage.html");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review Realm</title>
    <link rel="icon" type="image" href="realm.png">
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        html {
            /* background-image: url(homeback.jpg); */
            background-position: center;
            background-size: cover;
        }   
        body::-webkit-scrollbar{
            width: 0em;
        }

        body {
            
            background-color: #ffffff;
            font-family: Arial, sans-serif;
        }
        nav {
      background-color:#000000;
      display: flex;
      justify-content: space-between;
      /* align-items: center; */
      padding: 0px;
    }
    ul {
      list-style: none;
      margin: 0;
      padding: 0;
      display: flex;
      margin-left: auto; 
      margin-right: 0%;

      
    }

    .dropdown {
      position: relative;
      
    }

    .dropdown button {
      background-color:#ffffff;;
      color: #ffffff;
      padding:20px;
      border: none;
      cursor: pointer;
      font-size: 15px;
      
    }
    .dropdown button:hover{
        background-color: #b2b2b2;;
    }
    .dropdown button a{
        text-decoration: none;
        color: black;
    }
    .dropdown button a{
        text-decoration: none;
        color: black;
    }
    .dropdown-data {
      display: none;
      color: rgb(255, 255, 255);
      position: absolute;
      background-color: #ffffff;
      min-width:100px;
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
      z-index: 0;
    }

    .dropdown:hover .dropdown-data{
      display: block;
      background-color: white;
      color: black;
    }

    .dropdown-data a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
      background-color: white;
    }

    .dropdown-data a:hover {
      background-color:rgb(220, 220, 220);
      text-decoration: underline;
      color: black;
    }
    .navbar {
            position: sticky;
            top: 0;
            padding: 15px;
            background-color: #000000;
            font-size: 100%;
            color: rgb(255, 255, 255);
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-right: 2px;
        }

        .navbar h1 {
            margin: 0%;
            margin-left: -55%;
            color: rgb(245, 245, 245);
        }

        .navbar img {
            height: 40px;
            width: 40px;
            margin-right: 0px;
        }

        .navbar1 {
            padding: 5px;
            margin-top: -0.3%;
            margin-right: 0%;
            margin-left: 18%;
        }

        #loggg a {
            color: white;
            text-decoration: none;
            background-color: transparent;
            margin-left: -50%;
            font-size: 20px;
        }

        #register a {
            color: white;
            text-decoration: none;
            background-color: transparent;
            margin-left: 10%;
            font-size: 20px;
        }

        #loggg a:hover,
        #register a:hover {
            background-color: transparent;
            color: none;
            text-decoration: underline;
        }

        .head1 {
            padding: 20px 0px 20px 10px;
            font-size: 100%;
            margin-left: 0%;
            font-style: italic;
            font-size: 200%;
            background-color: transparent;
        }

        .welcome {
            padding: 20px 0px 20px 10px;
            font-size: 230%;
            font-family: serif;
            color: #259e0d;
        }

        .paragraph {
            padding: 0px 0px 0px 15px;
            text-align: justify;
            font-family: cursive;
            margin: 0% 35% 0% 2%;
            color: #ffffff;
            font-size: larger;
            padding: 10px;
            background-color: #259e0d;
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
            border-bottom-left-radius: 20px;
            border-bottom-right-radius: 20px;

        }
        .boxes{
            padding: 0px 2px 0px 10px;
            margin: 2% 85% -2% 2%;
            background-color: white;
            color:  rgba(0, 0, 0, 0.82);
            border-radius: 20px;
            /* text-align: center; */
            font-size: 30px;
           
        }


        .par {
            color: rgb(255, 255, 255);
            /* border-bottom-left-radius: 0%;
            border-bottom-right-radius: 10%; */
            /* padding-bottom: 0px; */
            background-color: #48a445;
            background-image: radial-gradient(circle, #159300, #0f7a0a, #0c620e, #0b4b0e, #0a350c, #0a2b09, #0a2205, #041900, #041900, #031800, #031800, #031700);
            padding: 10px;
            padding-bottom: 0px;
            margin: 0px;
            padding-top: 50px;
            padding-bottom: 50px;
            border-bottom-left-radius: 20px;
            border-bottom-right-radius: 20px;
        }

        .circular-container {
            height: 330px;
            width: 230px;
            border-radius: 10%;
            overflow: hidden;
            float: right;
            margin-top: 0%;
            margin-right: 1%;
            background-color:transparent;
        }

        .circular-container img {
            width: 260px;
            height: 350px;
            display: block;
        }
        .anotherimage{
            height: 150px;
            width: 150px;
            border-radius: 10%;
            overflow: hidden;
            float: right;
            margin-top: 0%;
            margin-right: 1%;
            background-color: black;
           
        }
        .anotherimage img{
            height: 150px;
            width: 160px;
            
        }

        .anotherimage1{
            height: 150px;
            width: 150px;
            border-radius: 10%;
            overflow: hidden;
            float: right;
            margin-top: 5%;
            margin-right: -5%;
            background-color: black;
        }
        .anotherimage1 img{
            height: 167px;
            width: 150px;
            
        }
        .anotherimage2{
            height: 150px;
            width: 150px;
            border-radius: 10%;
            overflow: hidden;
            float: right;
            margin-top: 12%;
            margin-right: -10.2%;
            background-color: black;
        }
        .anotherimage2 img{
            height: 160px;
            width: 150px;
            
        }

        .boxrow1 {
            display: flex;
            margin-left: 8%;
            flex-direction: row;
            justify-content: space-around;
        }

        .boxbook a,
        .boxres a,
        .boxmovie a,
        .boxapp a {
           
            padding: 20px 100px;
            padding-left: 30px;
            background-color: #ffffff;
            color: rgba(0, 0, 0, 0.872);
            border: 0.1px solid rgba(118, 118, 118, 0.466);
            border-radius: 3px;
            font-size: 17px;
            font-weight: 400;
            text-align: left;
            text-decoration: none;
            box-shadow: 1px 1px 1px 1px rgb(156, 156, 156);

        }

        .boxbook a:hover,
        .boxres a:hover,
        .boxmovie a:hover,
        .boxapp a:hover {
            box-shadow: 2px 2px 2px 2px rgb(156, 156, 156);
            background-color:  #e4e4e4;
            
        }

        .boxbook a:active,
        .boxres a:active,
        .boxmovie a:active,
        .boxapp a:active {
            box-shadow: none;
        }

        /* .boxres a {
            padding: 20px 70px;
            padding-left: 30px;
            background-color:  #cbcccd;
            color:  rgba(0, 0, 0, 0.872);
            border: 0.1px solid rgb(181, 180, 180);
            border-radius: 5px;
            font-size: 17px;
            font-weight: 400;
            text-align: left;
            text-decoration: none;
            box-shadow: 3px 3px 3px 3px rgb(156, 156, 156);
        } */

        .boxrow2 {
            display: flex;
            margin-left: 8%;
            flex-direction: row;
            justify-content: space-around;
        }

        .boxclothing a,
        .boxtravel a,
        .boxplace a, .boxpet a{
            padding: 20px 100px;
            padding-left: 30px;
            background-color:   #ffffff;
            color:  rgba(0, 0, 0, 0.872);
            border: 0.1px solid rgb(181, 180, 180);
            border-radius: 5px;
            font-size: 17px;
            font-weight: 400;
            text-align: left;
            text-decoration: none;
            box-shadow: 1px 1px 1px 1px rgb(156, 156, 156);
        }

        /* .boxpet a {
            padding: 20px;
            padding-left: 30px;
            padding-right: 117px;
            background-color:  #cbcccd;
            color:  rgba(0, 0, 0, 0.872);
            border: 0.1px solid rgb(181, 180, 180);
            border-radius: 5px;
            font-size: 17px;
            font-weight: 400px;
            text-align: left;
            text-decoration: none;
            box-shadow: 3px 3px 3px 3px rgb(156, 156, 156);
        } */
        .boxclothing a:hover,
        .boxtravel a:hover,
        .boxplace a:hover,
        .boxpet a:hover {
            box-shadow: 2px 2px 2px 2px rgb(156, 156, 156);
            background-color:  #e4e4e4;

        }

        .footer {
            padding: 80px;
            padding-top: 20px;
            margin-top: 120px;
            background-color: rgba(0, 0, 0, 0.112);
            display: flex;
            flex-direction: row;
            justify-content: space-evenly;
            color: black;
            font-family:'Times New Roman', Times, serif;
            font-size: small;
        }
        .box3{
            align-self: center;
            font-size: larger;
        }
        .box1 a,
        .box2 a {
            text-decoration: none;
            color: #000000;
            font-size: larger;
        }

        .box1 a:hover,
        .box2 a:hover {
            text-decoration: underline;
        }
        .newme{
            align-self: center;
        }
        #name{
        padding: 8px;
        border: 2px solid black;
        font-size: large;
        border-radius: 3px;
       }
       #area{
        width: 50%;
       }
        .books form{
            display: flex;
            flex-direction: column;
            align-items: center;
            

        }
        #sub{
            padding: 10px;
        }
    </style>
</head>

<body>
    <nav>
        <div><h1 style="color: white; margin: 10% 0% 0% 8%;">ReveiwRealm</h1></div>
        <ul>
            
        <li class="dropdown">
                <button><a href="home1.php">Home</a></button>
                <li class="dropdown">
        <button><a>Explore</a></button>
        <div class="dropdown-data">
          <a href="book.php">Books</a>
          <a href="res.php">Restaurants</a>
          <a href="movie.php">Movies</a>
          <a href="app.php">Apps</a>
          <a href="pet.php">Pets</a>
          <a href="clothing.php">Clothing</a>
          <a href="travel.php">Bank</a>
          <a href="place.php">Place</a>
        </div>
      </li>
              </li>
          <li class="dropdown">
            <button><a href="profile.php">Profile</a></button>
            </div> 
          </li>
         <!-- <li class="dropdown">
            <button><a href="register.html">Register</a></button>
            </div> -->
          </li>
          </li>
        </ul>
      </nav>
        <div style="padding: 20px; background-color: #062900;color: white; text-align: center; align-items: center;
        border-bottom-left-radius: 200px; border-bottom-right-radius: 200px; border-bottom: white;">
            <h1>DELETE USER</h1>
        </div>
        <div class="books">
            <form action="deletereview.php" method="post" class="forms">
               
                <br><br><div class="newme"><label for="textarea">Email:</h1></label><br><br>
                <input type="text" id="name" name="email"><br><br></div>
                <br><br><div class="newme"><label for="textarea">Review of:</h1></label><br><br>
                <input type="text" id="name" name="review"><br><br></div>
                <!-- <textarea id="area" name="textarea" rows="10" cols="150" required placeholder="write your review here......."></textarea><br> -->
                <div class="sub"> <button type="submit" id="sub">Delete Review</button></div>
            </form>
        </div>
   
        <div>
            <?php
//             include "db.php";
//     $fett=mysqli_query($conn,"SELECT `username` from `reviewdata` where `email`='$userprofile'");
//     $feet=mysqli_query($conn,"SELECT `bookname` from `reviews` where `email`='$userprofile'");
//     $fet=mysqli_query($conn,"SELECT `reviews` from `reviews` where `email`='$userprofile'");
//     $row=mysqli_num_rows($fet);
//     if($row>0){
//         $raata=implode(mysqli_fetch_assoc($feet));
//         $rataa=implode(mysqli_fetch_assoc($fett));
//         echo $rataa ."<br>";
//         echo "Review"."\t"."on"."\t".$raata;
//         echo "<br>";
//         for($i =0 ; $i <= $row; $i++){
//         $rata = implode(mysqli_fetch_assoc($fet));
//         echo $rata."\t";
//     }       
// }
?>

<div class="review">
     <?php
            include "db.php";
//     $sql=mysqli_query($conn,"SELECT `email` from `reviews` where `category`='book'");
//     $sqll=mysqli_query($conn,"SELECT `bookname` from `reviews` where  `category`='book'");
//     $sqql=mysqli_query($conn,"SELECT `reviews` from `reviews` where  `category`='book'");
//     $roww=mysqli_num_rows($sqql);
//     if($roww>0){  
//       for($j =0 ; $j <= $roww; $j++){
//         $daata=implode(mysqli_fetch_assoc($sqll));
//         $dataa=implode(mysqli_fetch_assoc($sql));
//         echo $dataa ."<br>";
//         echo "Review"."\t"."on"."\t".$daata;
//         echo "<br>";
//         $data = implode(mysqli_fetch_assoc($sqql));
//         echo $data."\t"."<br><br><br>";
//     }       
// }
?>
        </div>

        <div>
            <!-- <button type="submit">DELETE</button> -->
            <!-- <a href="deletebook.php"><button type="submit">DELETE</button></a> -->
        </div>
    <footer class="footer" style="margin-top:40%">
        <div class="box1">
            <a href="contact1.html">Contact us</a><br>
        </div>
        <div class="box2"> <a href="aboutus.html">About us</a></div>
        <div class="box3">
            <p>Share your thoughts on our website to enhance your experience. <br>Join us on social media and be part of our
                journey to excellence.<br> Thanks for your contribution!</p>
        </div>

    </footer>
</body>

</html>
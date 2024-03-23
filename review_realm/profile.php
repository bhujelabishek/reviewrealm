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
        body::-webkit-scrollbar{
            width: 0.1em;
        }
        html {
            /* background-image: url(homeback.jpg); */
            background-position: center;
            background-size: cover;
        }   

        body {
            /* background-image: radial-gradient(circle, #ffffff, #ffffff, #ffffff, #ffffff, #ffffff, #f2f1f3, #e5e2e7, #dad4db, #c2b4be, #ac959e, #97767c, #805a5a); */
            /* background-color: #ffffff; */
            font-family: Arial, sans-serif;
            height: 10vh;
            box-sizing: border-box;
        }
        .content{
            flex-grow: 1;
        }
        nav {
      background-color:#000000;
      display: flex;
      justify-content: space-between;
      /* align-items: center; */
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
      background-color:#ffffff;
      color: #ffffff;
      padding: 20px;
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
        .profile a{
            text-decoration: none;
            color: white;
            font-size: 20px;
        }
        .profile a:hover{
            text-decoration: underline;
            font-size: 19px;
        }
        .tables{
            /* border: 2px solid white; */
            /* align-self: center; */
            color: black;
            font-size: large;
            padding: 20px;
        }
        .content{
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 80px 50px;
            background-color: whitesmoke;
            margin-top: 3%;
            margin-right: 35%;
            margin-left: 35%;
            border-radius: 80px;
        }
        #logout{
            outline: none;
            border: none;
        }
        #logout a{
        font-size: larger;
        text-decoration: none;
        padding: 8px 15px;
        border-radius: 10px;
        border: 0.5px solid white;
        color: white;
        background-color: #0a350c;
        cursor: pointer;
        }
        #logout a:hover{
        background-color: white;
        color:#000000;
        border: 0.5px solid black;
        }

    </style>
</head>

<body>
<nav>
        <div><h1 style="color: white; margin: 10% 0% 0% 8%;">ReveiwRealm</h1></div>
        
        <ul>
            
        <li class="dropdown">
                <button><a href="home1.php">Home</a></button>
              </li>
      <li class="dropdown">
        <button><a>Explore</a></button>
        <div class="dropdown-data">
          <a href="Write/book.php">Books</a>
          <a href="Write/res.php">Restaurants</a>
          <a href="Write/movie.php">Movies</a>
          <a href="Write/app.php">Apps</a>
          <a href="Write/pet.php">Pets</a>
          <a href="Write/clothing.php">Clothing</a>
          <a href="Write/travel.php">Bank</a>
          <a href="Write/place.php">Place</a>
        </div>
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
            <h1>Your Profile</h1>
        </div>
    
    <div class="content">
    <table class="tables">
        <tr class="tables"><img src="images/User.jpg"  style="height: 180px; width: 200px; border-radius:100%;"></tr>
    <tr class="names">
        <td>
            Name:
        </td>
        <td>
            <?php
            include "db.php";
             $sql=mysqli_query($conn,"SELECT `username` FROM `reviewdata` WHERE `email`='$userprofile'");
             $row=mysqli_num_rows($sql);
             if($row>0){
                $rata=implode(mysqli_fetch_assoc($sql));
                echo $rata;
             }
            ?>
        </td>
    </tr>
    <tr>
        <td>
            Email:
        </td>
        <td>
            <?php
            include "db.php";
             $sql=mysqli_query($conn,"SELECT `email` FROM `reviewdata` WHERE `email`='$userprofile'");
             $row=mysqli_num_rows($sql);
             if($row>0){
                $rata=implode(mysqli_fetch_assoc($sql));
                echo $rata;
             }
            ?>
        </td>
    </tr>
    </table>
  <button type="submit" id="logout"><a href="logout.php">LOGOUT</a></button>

        </div>


      
    <footer class="footer" >
        <div class="box1">
            <a href="contact1.html">Contact us</a><br>
        </div>
        <div class="box2"> <a href="aboutus.html">About us</a></div>
        <div class="box3">
            <p>Share your thoughts on our website to enhance your experience.<br> Join us on social media and be part of our
                journey to excellence.<br> Thanks for your contribution!</p>
        </div>

    </footer>
</body>

</html>
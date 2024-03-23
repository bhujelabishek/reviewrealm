<?php
// session_start();
// $userprofile = $_SESSION['username'];
// if ($userprofile == true) {
// } else {
//     header("location:loginpage.html");
// }
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
        .head a{
            text-decoration: none;
        }
        .head{
          
           display: flex;
           flex-direction: column;
           padding: 200px;
           padding-bottom: 0px;
           padding-top: 2%;
           /* align-items: center; */
           
        }
        .rev{
            /* align-self: flex-start; */
            background-color:#b2b2b2;
            padding: 10px;
            font-style: oblique;
            border-radius: 30px;
            font-size: 17px;
            

        }
        .res{
           /* align-self: flex-end; */
           font-size: 15px;
           float: right;
        }
       
        
    </style>
</head>

<body>
    <nav>
        <div><h1 style="color: white; margin: 10% 0% 0% 8%;">ReveiwRealm</h1></div>
        <ul>
            
        <li class="dropdown">
                <button><a href="home.html">Home</a></button>
               
              <!-- </li>
              <li class="dropdown">
        <button><a>Explore</a></button>
        <div class="dropdown-data">
          <a href="book.php">Books</a>
          <a href="res.php">Restaurants</a>
          <a href="movie.php">Movies</a>
          <a href="app.php">Apps</a>
          <a href="pet.php">Pets</a>
          <a href="clothing.php">Clothing</a>
          <a href="travel.php">Travels</a>
          <a href="place.php">Place</a>
        </div>
      </li> -->
          <li class="dropdown">
            <button><a href="loginpage.html">Login</a></button>
            </div>
          </li>
          <li class="dropdown">
            <button><a href="register.html">Register</a></button>
            </div>
          </li>
          </li>
        </ul>
      </nav>
        <div style="padding: 20px; background-color: #062900;color: white; text-align: center; align-items: center;
        border-bottom-left-radius: 200px; border-bottom-right-radius: 200px; border-bottom: white;">
            <h1>Review on Books</h1>
        </div>
  
<div class="review">
      <?php
            include "db.php";
            $sql = mysqli_query($conn, "SELECT `email`, `bookname`, `reviews` FROM `reviews` WHERE `category`='book'");
            $rows = mysqli_num_rows($sql);
            if ($rows > 0) {
                while ($row = mysqli_fetch_assoc($sql)) {
                    $email = $row['email'];
                    $appname = $row['bookname'];
                    $review = $row['reviews'];
                    echo"<div class='head'>";
                    echo"<div class='rev'>";
                    echo "<h3>"."Review on " . $appname ."</h3>";
                    echo "<p style='font-size:20px'>".$review ."</p>";
                    echo "<p class='res'>"."By:".$email.'</p>'.'<br>';
                    // echo"<a href='deletemain.php'><button type='submit' class='edit' >DELETE</button></a>";
                    // echo"<a href='updatemain.php'><button type='submit' class='edit' >EDIT</button></a>"."</div>";
                    echo"</div>";
                    echo"</div>";
                }

            }
            ?>
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
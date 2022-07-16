<?php
session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="favcon.ico" />
    <link rel="stylesheet" type="text/css" href="../css/homemain.css" />
    <link rel="stylesheet" type="text/css" href="../css/about-us.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="icon" href="#" />
    <link rel="icon" href="../pics/log.png">
    <title>BIBLIOPHILE'S CORNER</title>
  </head>
  <body style="background-color: white;">
    <nav style="background-color: #d9dab0;">
      <div
        class="avgrs_logo"
        style="background-color: rgba(33, 53, 56, 0); height: 60px"
      >
        <img
          style="padding-top: 4px; height: 60px; width: 360px"
          title="COMPANY LOGO"
          src="../pics/logo.png"
        />
      </div>
      <div>
        <ul>
          <li style="width: 70px; border-radius: 50%">
            <a
              style="cursor: pointer; border-radius: 50%; margin-bottom: 5px"
              onclick="show()"
              ><i id="brdr" class="fa fa-user" style="font-size: 36px"></i
            ></a>
          </li>
          <li>
            <a href="notes.php">Add Notes</a>
          </li>
          <li>
            <a href="contact-us.php"
              >Contact&nbspUs<span style="font-size: 25px">&#9990;</span></a
            >
          </li>
          <li><a href="about-us.php">About&nbspUs</a></li>
          <li>
            <a href="search1.php">Search</a>
          </li>
          <li>
            <a href="home.php"
              >Home<i
                class="fa fa-home"
                style="margin-left: 0px; padding: 0px; font-size: 36px"
              ></i
            ></a>
          </li>
        </ul>
      </div>
    </nav>
    <div onclick="hide()" class="main">
      <div id="left">
          <h3><u>Profile</u></h3>
          <?php include 'left.php' ?>
          <div id="notesdiv">
            <a href="index.php"><button id="note">Logout</button></a>
          </div>
      </div>
      <div style="max-height: 807px;" id="right">
      <div class="about-section">
        <h1>BIBLIOPHILE'S CORNER</h1>
        <h3 style="color: black; margin-top: 0px; margin-bottom: 0px">
          About Us
        </h3>
        <p>Sharing knowledge is the most fundamental act of friendship.</p>
        <p>
          Because it is a way you can give something without loosing something.
        </p>
      </div>
      
      <h2 style="text-align: center; margin-top: 5px; margin-bottom: 5px">
        Our Team
      </h2>
      <div class="row">
        <div class="column">
          <div class="card">
            <img src="../pics/anika.jpeg" alt="Anika" style="width: 50%" />
            <div class="container">
              <h2>ANIKA PANDEY</h2>
              <p class="title">DEVELOPER</p>
              <p>The Developer</p>
              <p>ap7481@srmist.edu.in</p>
              <p><button class="button">Contact</button></p>
            </div>
          </div>
        </div>
        
        <div class="column">
          <div class="card">
            <img src="../pics/yashaswi.png" alt="Yashaswi" style="width: 50%" />
            <div class="container">
              <h2>D.YASHASWI</h2>
              <p class="title">DESIGNER</p>
              <p>Developer</p>
              <p>dy6254@srmist.edu.in</p>
              <p><button class="button">Contact</button></p>
            </div>
          </div>
        </div>
        
        <div class="column">
          <div class="card">
            <img src="../pics/navjeet.png" alt="Navjeet" style="width: 50%" />
            <div class="container">
              <h2>NAVJEET KAUR</h2>
              <p class="title">TESTER</p>
              <p>Developer</p>
              <p>ns5735@srmist.edu.in</p>
              <p><button class="button">Contact</button></p>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
      <footer>
      <div style="padding-top: 0px;" id="copyright">
          <p style="top:0;padding-top: 0px; font-size: 19px;text-align: center;">	&#169<u>COPYRIGHT</u><br>bibliophile's corner</p>
      </div>
      <div ></div>
      <div ></div>
      <div id="follow">
          <div id="followus"><p style="text-align: center;">FOLLOW US ON SOCIAL MEDIA</p></div>
          <div id="badges">
              <div></div>
              <div id="symbol1"><a href="#" style="width: 45px;" class="fa fa-facebook"></a></div>
              <div id="symbol2"><a href="#" style="width: 45px;" class="fa fa-twitter"></a></div>
              <div id="symbol3"><a href="#" style="width: 45px;" class="fa fa-linkedin"></a></div>
              <div id="symbol4"><a href="#" style="width: 45px;" class="fa fa-instagram"></a></div>
              <div></div>
          </div>
      </div>
  </footer>
  </body>
</html>
<script src="../js/profile.js"></script>


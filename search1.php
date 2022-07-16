<?php
session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="icon" href="#" />
    <link rel="icon" href="../pics/log.png">
    <title>BIBLIOPHILE'S CORNER</title>
    <link rel="stylesheet" type="text/css" href="../css/homemain.css" />
    <link rel="stylesheet" type="text/css" href="../css/search1.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
  </head>
  <body style="background-color: white;">
    <nav style="background-color: #d9dab0">
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
            <a href="home.php"
            >Home<i
            class="fa fa-home"
            style="margin-left: 0px; padding: 0px; font-size: 36px"
            ></i
            ></a>
          </li>
          <li style="width: 280px;">
            <div class="search-container">
              <form action="/action_page.php">
                <input style="height: 35px;font-size: 18px;" type="text" placeholder="Search.." name="search" />
                <button style="height: 35px;" type="submit"><i style="display: inline;" class="fa fa-search"></i></button>
              </form>
            </div>
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
      <div style="max-height: 807px" id="right">

    <div class="about-section">
      <h1>BIBLIOPHILE'S CORNER</h1>
      <p>Show me a family of readers</p>
      <p>and I will show you the people who move the world.</p>
    </div>

    <h2 style="text-align: center">RECOMMENDATIONS</h2>
    <div class="row">
      <div class="column">
        <div class="card">
          <img src="../pics/book1.jpg" alt="Anika" style="width: 50%; height: 295px" />
          <div class="container">
            <h2>AND THEN THERE WERE NONE</h2>
            <p class="title">AGATHA CHRISTIE</p>
            <p>FICTION / MYSTERY</p>
            <p>
              Ten people are gathered for a weekend on an island off the coast
              of Devon, 7 guests, a new personal secretary and the domestic
              couple running the estate. They were gathered by the mysterious
              Mr. and Mrs.
            </p>
            <p><button class="button">Read</button></p>
          </div>
        </div>
      </div>

      <div class="column">
        <div class="card">
          <img
            src="../pics/book2.jpg"
            alt="Yashaswi"
            style="width: 50%; height: 295px"
          />
          <div class="container">
            <h2>THE ALCHEMIST</h2>
            <p class="title">PAUO COHELO</p>
            <p>FICTION / PHILOSOPHY</p>
            <p>
              The Alchemist follows the journey of an Andalusian shepherd boy
              named Santiago. The woman interprets the dream as a prophecy
              telling the boy that he will discover a treasure at the Egyptian
              pyramids.
            </p>
            <p><button class="button">Read</button></p>
          </div>
        </div>
      </div>

      <div class="column">
        <div class="card">
          <img
            src="../pics/book3.jpg"
            alt="Navjeet"
            style="width: 50%; height: 295px"
          />
          <div class="container">
            <h2>SHERLOCK HOLMES</h2>
            <p class="title">SIR ARTHUR CONAN DOYLE</p>
            <p>FICTION</p>
            <p>
              Sherlock Holmes is a private detective who has keen powers of
              observation. He experiences strong mood swings, plays the violin,
              and is a master of deductive reasoning
            </p>
            <p><button class="button">Read</button></p>
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

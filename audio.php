<?php
session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="../css/homemain.css" />
    <link rel="stylesheet" type="text/css" href="../css/audio.css" />
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

  <body>
    <nav>
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
          <li style="width: 70px;border-radius: 50%;">
            <a style="cursor: pointer;border-radius: 50%;margin-bottom: 5px;" onclick="show()"><i id="brdr" class="fa fa-user" style="font-size:36px"></i></a>
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
                <a href="search1.php"
                  >Search</a
                >
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
        <div id="right">
          <div style="background-image: url();" id="audiopics"></div>
            <div id="audiobox">
                    <div id="names">
                        <h1 id="title">Book Title</h1>                
                        <h2 id="auth">Book Author</h2>
                    </div>
                    <div id="audio">
                        <audio controls id="tags">
                            <source id="source1" src="" type="audio/ogg">
                            <source id="source2" src="" type="audio/mp3">
                        </audio>           
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
              <div id="symbol1"><a href="#" class="fa fa-facebook"></a></div>
              <div id="symbol2"><a href="#" class="fa fa-twitter"></a></div>
              <div id="symbol3"><a href="#" class="fa fa-linkedin"></a></div>
              <div id="symbol4"><a href="#" class="fa fa-instagram"></a></div>
              <div></div>
          </div>
      </div>
  </footer>
  </body>
</html>
<script src="../js/books2.js"></script>
<script src="../js/profile.js"></script>


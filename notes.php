<?php
session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <link rel="icon" href="favcon.ico" />
    <link rel="stylesheet" type="text/css" href="../css/homemain.css" />
    <link rel="stylesheet" type="text/css" href="../css/notes.css" />
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

  <body style="background-color: #ebebeb;">
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
            <h1 id="mainhead">NOTES TAKER</h1>
            <div id="rightbox">
                <h2 id="entryhead">Take your Notes Here</h2>
                <div id="entrytable">
                    <h2 id="notehead">Add a Note</h2>
                    <textarea name="" id="textbox" cols="30" rows="5"></textarea>
                    <button onclick="insert()" id="addbutton">Add Note</button>
                </div>
                <h2 id="libhead">Your Notes</h2>
                <div id="libtable">
                    Nothing to show! Use "Add a Note" section above to add notes.
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

<script src="../js/addnotes.js"></script>
<script src="../js/profile.js"></script>
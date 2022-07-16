<?php
session_start();
?>
<?php
$_SESSION['msg']="";
if(isset($_GET['submit']))
{
  $connect = mysqli_connect('localhost','mskn','test123','feedback');
  if($connect)
  {
      $fname=mysqli_real_escape_string($connect,$_GET['firstname']);
    $lname=mysqli_real_escape_string($connect,$_GET['lastname']);
    $role=mysqli_real_escape_string($connect,$_GET['Role']);
    $comment=mysqli_real_escape_string($connect,$_GET['subject']);
    // echo $fname.' '.$lname.' '.$role.' '.$comment;
    $sql="INSERT INTO feedbacktable(firstname,lastname,role,comments) VALUES('$fname','$lname','$role','$comment')";
    if(mysqli_query($connect,$sql))
    {
      $_SESSION['msg']="Succsessfully Sent Feedback<span id=\"tick\"> &#x2714;</span>";

    }
    mysqli_close($connect);
  }
  else
  {
    echo "Connection error" . mysqli_connect_error();
  }
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="favcon.ico" />
    <link rel="stylesheet" type="text/css" href="../css/homemain.css" />
    <link rel="stylesheet" type="text/css" href="../css/contact-us.css" />
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
  <body style="background-color: #bbbfca;">
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
      <div style="max-height: 807px" id="right">
        <div class="container">
          <div style="text-align: center">
            <h2>Contact Us</h2>
            <p>“Wear the old coat and buy the new book.”</p>
          </div>
          <div class="row">
            <div class="column">
              <img id="img"
                src="../pics/Literature-loving hot mess.jpg"
                style="width: 650px; height: 650px"
              />
            </div>
            <div class="column">
              <form action="contact-us.php" method="GET">
                <label for="fname">First Name</label>
                <input
                  type="text"
                  id="fname"
                  name="firstname"
                  placeholder="Your name.."
                  required
                />
                <label for="lname">Last Name</label>
                <input
                  type="text"
                  id="lname"
                  name="lastname"
                  placeholder="Your last name.."
                  required
                />
                <label for="role">Role</label>
                <select id="role" name="Role">
                  <option value="Faculty">Faculty</option>
                  <option value="Student">Student</option>
                </select>
                <label for="subject">Subject</label>
                <textarea
                  id="subject"
                  name="subject"
                  placeholder="Write something.."
                  style="height: 170px"
                  required
                ></textarea>
                <button id="subbtn" type="submit" name="submit" value="submit">Submit</button>
              </form>
              <div id="done"><?php echo $_SESSION['msg']; ?></div>
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
<script src="../js/submit.js"></script>
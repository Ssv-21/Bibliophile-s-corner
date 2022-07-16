<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="../css/homemain.css" />
    <link rel="stylesheet" type="text/css" href="../css/login.css" />
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
    <nav style="display: block; justify-content: center; text-align: center;">
      <div
        class="avgrs_logo"
        style="background-color: rgba(33, 53, 56, 0); height: 60px; "
      >
        <img
          style="padding-top: 4px; height: 60px; width: 360px"
          title="COMPANY LOGO"
          src="../pics/title3.png"
        />
      </div>
      <div>
        <ul>
          
        </ul>
      </div>
    </nav>
    <h2 id="head">Login to your account</h2>
<!-- <from tagret="myphp.php" method="post"> -->
    <form tagret="main.php" method="GET"  style="border-top-width: 0px">
      <div id="grid">
        <div id="grid1">
          <div class="imgcontainer">
            <!-- <img src="../pics/avatar.jpeg" alt="Avatar" class="avatar" /> -->
          </div>
        </div>
        <div id="grid2">
      <div class="container">
      <div style="min-height: 50px;"><button style="display: block; float: right;" type="button" class="cancelbtn">&#x2715;</button></div>
        <div id="loginmain">
        <label style="margin-left: 50px;" for="uname"><b style="font-size: 22px;">Username</b></label>
        <input
          type="text"
          placeholder="Enter Username"
          name="uname"  
          value="<?php echo $name ?>"
          required
        />
        <div style="padding-left:280px;color:red;font-size: 22px;"><?php echo $errors['name'] ?></div>

        <label for="psw"><b style="font-size: 22px;">Password</b></label>
        <input
          type="password"
          placeholder="Enter Password"
          name="psw"
          value="<?php echo $pass ?>"
          required
        />
        <div style="padding-left:280px;color:red;font-size: 22px;"><?php echo $errors['pass'] ?></div>

        <a>
          <!-- <link  src="index.html"-->
          <button type="submit" name="submit">Login</button></a><br />
        <link rel="stylesheet" href="index.html" />
        <div style="margin-left: 60px; float: left;"><label>
          <input type="checkbox" checked="checked" name="remember" /> Remember
          me
        </label></div>
        <div style="margin:0 65px 15px 0;padding-bottom: 5px; float: right;"><span class="psw"><a href="#">Forgot password?</a></span></div>
      </div>
      </div>
      </div>
      </div>
    </form>
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

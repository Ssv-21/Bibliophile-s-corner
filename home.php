<?php
session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="../css/homemain.css" />
    <link rel="stylesheet" type="text/css" href="../css/home.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="icon" href="favcon.ico" />
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
          src="../pics/title3.png"
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
            <div style="max-height: 650px;" class="slideshow-container">

                <div  class="mySlides fade">
                  <div class="numbertext">1 / 3</div>
                  <img src="../pics/homeimg4.jpeg" style="width:100%">

                </div>

                <div class="mySlides fade">
                    <div class="numbertext">2 / 3</div>
                    <img src="../pics/homeimg1.jpeg" style="width:100%">

                </div>

                <div class="mySlides fade">
                  <div class="numbertext">3 / 3</div>
                  <img src="../pics/homeimg2.jpeg" style="width:100%">

                </div>

                <a class="prev" onclick="plusSlides(-1)">&#10094;&nbsp</a>
                <a class="next" onclick="plusSlides(1)">&nbsp&#10095;</a>

                </div>
                <br>
                <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                  </div>
                <br>

                <h2><u>RECOMMENDATIONS</u></h2>
                <br>
                <div class="recom">
                    <div id="recomblks">
                        <div class="card">
                            <img id="imgs" src="https://annieforest.com/wp-content/uploads/2018/09/annie-daring-greatly-blog.jpg" alt="Denim Jeans" style="width:100%">
                            <h1 style="color:white">Daring <br /> Greatly</h1>

                            <p style="color:white">Some text about the book .As an intellectual object, a book is prototypically a composition of such great length</p>
                            <a href="view.php"><p><button onclick="pdffunc(event)" value="1">View Book</button></p></a>
                          </div>
                    </div>
                    <div id="recomblks">
                        <div class="card">
                            <img id="imgs" src="https://kbimages1-a.akamaihd.net/bfaebf06-9b10-4a1c-90de-09585fa2aceb/353/569/90/False/how-to-change-your-mind-what-the-new-science-of-psychedelics-teaches-us-about-consciousness-dying-addiction-depression-and-transcendence-by-michael-pollan-conversation-starters.jpg" alt="Denim Jeans" style="width:100%">
                            <h1 style="color:white">How To Change Your Mind</h1>

                            <p style="color:white">Some text about the book .As an intellectual object, a book is prototypically a composition of such great length</p>
                            <a href="view.php"><p><button onclick="pdffunc(event)" value="2">View Book</button></p></a>
                          </div>
                    </div>
                    <div id="recomblks">
                        <div class="card">
                            <img id="imgs" src="https://kbimages1-a.akamaihd.net/ad0aee0a-36c0-4dc0-8f51-b269f2027795/1200/1200/False/rich-dad-poor-dad-10.jpg" alt="Denim Jeans" style="width:100%">
                            <h1 style="color:white">Rich Dad , Poor Dad</h1>

                            <p style="color:white">Some text about the book .As an intellectual object, a book is prototypically a composition of such great length</p>
                            <a href="view.php"><p><button onclick="pdffunc(event)" value="3">View Book</button></p></a>
                          </div>
                    </div>
                    <div id="recomblks">
                        <div class="card">
                            <img id="imgs" src="https://kbimages1-a.akamaihd.net/c2cddc29-ddd4-41d7-bb02-c89981b7c652/353/569/90/False/think-and-grow-rich-1937-original-masterpiece-by-napoleon-hill-2015-02-05.jpg" alt="Denim Jeans" style="width:100%">
                            <h1 style="color:white">Think And Grow Rich</h1>

                            <p style="color:white">Some text about the book .As an intellectual object, a book is prototypically a composition of such great length</p>
                            <a href="view.php"><p><button onclick="pdffunc(event)" value="4">View Book</button></p></a>
                          </div>
                    </div>
                    <div id="recomblks">
                        <div class="card">
                            <img id="imgs" src="https://images-na.ssl-images-amazon.com/images/I/51vSKIhO8XL._SX348_BO1,204,203,200_.jpg" alt="Denim Jeans" style="width:100%">
                            <h1 style="color:white">Software Project Management</h1>

                            <p style="color:white">Some text about the book .As an intellectual object, a book is prototypically a composition of such great length</p>
                            <a href="view.php"><p><button onclick="pdffunc(event)" value="5">View Book</button></p></a>
                          </div>
                    </div>
                    <div id="recomblks">
                        <div class="card">
                            <img id="imgs" src="https://images-na.ssl-images-amazon.com/images/I/51z-ZHlPI1L._SX401_BO1,204,203,200_.jpg" alt="Denim Jeans" style="width:100%">
                            <h1 style="color:white">Software Engineering</h1>

                            <p style="color:white">Some text about the book .As an intellectual object, a book is prototypically a composition of such great length</p>
                            <a href="view.php"><p><button onclick="pdffunc(event)" value="6">View Book</button></p></a>
                          </div>
                    </div>
                </div>
                <br>

                <h2><u>AUDIO&nbsp;BOOKS</u></h2>
                <br>
                    <div class="audio">
                        <div id="audblks">
                            <div class="card">
                                <img id="img" src="https://m.media-amazon.com/images/I/41O3AH0L38L.jpg" alt="Denim Jeans" style="width:100%">
                                <h1 style="color:white">12 Rules For Life</h1>
                                <p id="para" style="color:white">Some text about the book .As an intellectual object, a book is prototypically a composition of such great length</p>
                                <a href="audio.php"><p><button onclick="audio(event)" value="1">Listen</button></p></a>
                              </div>
                        </div>
                        <div id="audblks">
                            <div class="card">
                                <img id="img" src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1333059662l/13565963.jpg" alt="Denim Jeans" style="width:100%">
                                <h1 style="font-size: 28px;color:white">Don't Sweat The Small Stuff</h1>
                                <p id="para" style="color:white">Some text about the book .As an intellectual object, a book is prototypically a composition of such great length</p>
                                <a href="audio.php"><p><button onclick="audio(event)" value="2">Listen</button></p></a>
                              </div>
                        </div>
                        <div id="audblks">
                            <div class="card">
                                <img id="img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRfLr_tG8AYA5MK-pp_XBrNthvL_o0PGDev0A&usqp=CAU" alt="Denim Jeans" style="width:100%">
                                <h1 style="color:white">Atomic Habits</h1>
                                <p id="para" style="color:white">Some text about the book .As an intellectual object, a book is prototypically a composition of such great length</p>
                                <a href="audio.php"><p><button onclick="audio(event)" value="3">Listen</button></p></a>
                              </div>
                        </div>
                        <div id="audblks">
                            <div class="card">
                                <img id="img" src="https://images-na.ssl-images-amazon.com/images/I/81Nlt+KjHhL.jpg" alt="Denim Jeans" style="width:100%">
                                <h1 style="color:white">The 5AM Club</h1>
                                <p id="para" style="color:white">Some text about the book .As an intellectual object, a book is prototypically a composition of such great length</p>
                                <a href="audio.php"><p><button onclick="audio(event)" value="4">Listen</button></p></a>
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

<script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      if (n > slides.length) {slideIndex = 1}
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";
      dots[slideIndex-1].className += " active";
    }
    </script>

<script src="../js/books.js"></script>
<script src="../js/books2.js"></script>
<script src="../js/profile.js"></script>
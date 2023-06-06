<?php

session_start();

if(!isset($_SESSION['username'])){
echo "you are logged out";
	header('location:login.php');
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php  include 'css/style.php' ?>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="homestyle.css">
  </head>
  <body>
    <nav>
      <div class="container main-nav flex">
          <h1>GLA EVENTS</h1>
          <div class="nav-links">
          <ul class="flex">
              <li><a href="#h" class="hover-links">Home</a></li>
              <li><a href="#c" class="hover-links">About</a></li>
              <li><a href="#f" class="hover-links">Contact</a></li>
              <li><a href="./new.html" class="hover-links">New</a></li>
          </ul>
        </div>
        </div>
        </nav>
      <div class="container home " id="h">
      <div><img src="event1-college-fests.jpg" class="img"></div>
      
      
      </div>
      <div class="flex event-type">
        <div>
        <b><a href="University.html" class="pri-btn">University Event</a></b>
      </div>
      <div>
      <b><a href="nonuni.html" class="pri-btn">Non University Event</a></b>
    </div>
    </div>


    <div class="container club" id="c">
      <h2 class="heading"> Popular Student Clubs</h2>
      <div class="flex about">
        <div class="des">
          <table cellspacing="10">
            <tr>
              <td><img src="asset 2.jpeg">
              <td class=" abt">
                <h2>BADMINTON</h2>
                <h3>Sports</h3>
                <p>GLAU Badminton Club, established in 2012-13 under the guidance of our respected coach
                  Amit Sharma. We are the family of 45+ students including both boys and girls and about
                  40+ alumini.  We have 6 courts allowing most of the players to practice at a specific time.</p>
              </td>
              </tr>
            </table>
            </div>
            <div class="des">
              <table cellspacing="10">
                <tr>
                  <td><img src="./images/asset 4.jpeg">
                  <td class=" abt">
                    <h2>GLAU CHESS CLUB</h2>
                    <h3>Sports</h3>
                    <p>The club aims to promote chemistry as a subject and bring awareness about the everyday applications of chemical science in engineering and its various branches.</p>
                  </td>
                  </tr>
                </table>
                </div>
                <div class="des">
                  <table cellspacing="20">
                    <tr>
                      <td><img src="./images/asset 6.jpeg">
                      <td class=" abt">
                        <h2>NINAD MUSIC CLUB</h2>
                        <h3>Cultural</h3>
                        <p>GLAU Badminton Club, established in 2012-13 under the guidance of our respected coach Amit Sharma. We are the family of 45+ students including both boys and girls and about 40+ alumini.  We have 6 courts allowing most of the players to practice at a specific time.</p>
                      </td>
                      </tr>
                    </table>
                    </div>
                    <div class="des">
                      <table cellspacing="20">
                        <tr>
                          <td><img src="./images/asset 5.jpeg">
                          <td class="abt">
                            <h2>NATRAJ DANCE CLUB</h2>
                            <h3>Cultural</h3>
                            <p>GLAU Badminton Club, established in 2012-13 under the guidance of our respected coach Amit Sharma. We are the family of 45+ students including both boys and girls and about 40+ alumini.  We have 6 courts allowing most of the players to practice at a specific time.</p>
                          </td>
                          </tr>
                        </table>
                        </div>
                        <div class="des">
                          <table cellspacing="20">
                            <tr>
                              <td><img src="./images/asset 7.jpeg">
                              <td class="abt">
                                <h2>POETRY CLUB</h2>
                                <h3>Cultural</h3>
                                <p >GLAU Badminton Club, established in 2012-13 under the guidance of our respected coach Amit Sharma. We are the family of 45+ students including both boys and girls and about 40+ alumini.  We have 6 courts allowing most of the players to practice at a specific time.</p>
                              </td>
                              </tr>
                            </table>
                            </div>
                            <div class="des">
                              <table cellspacing="20">
                                <tr>
                                  <td><img src="asset 3.jpeg" style="width:150px">
                                  <td class=" abt">
                                    <h2>VIHITI THEATRE CLUB</h2>
                                    <h3>Cultural</h3>
                                    <p>GLAU Badminton Club, established in 2012-13 under the guidance of our respected coach Amit Sharma. We are the family of 45+ students including both boys and girls and about 40+ alumini.  We have 6 courts allowing most of the players to practice at a specific time.</p>
                                  </td>
                                  </tr>
                                </table>
                                </div>
                        <footer id="f">
                     <div class="con1">
                         <h1>SOCIAL MEDIA</h1>
                         <p><a href="https://www.facebook.com/glauniv"><i class="fa-brands fa-facebook"></i></a><a href="https://twitter.com/gla_mathura"><i class="fa-brands fa-twitter"></i></a><a href="https://www.youtube.com/channel/UCzv9lLHktV5HGuDHKvS_zyg"><i class="fa-brands fa-youtube"></i></a><a href="https://in.linkedin.com/school/gla-university"><i class="fa-brands fa-linkedin"></i></a></p>

                     </div>
                     <div class="con3">
                         <h1>GET IN TOUCH</h1>
                         <p>Address: 17km Stone, NH-2,Mathura-Delhi Road, Mathura-281 406 (U.P.) INDIA
                         </p>
                         <p>Phone:+91-5662-250900</p>
                         <p>Email: glausoftwaresupport@gla.ac.in</p>
</div>

                 </footer>
  </body>
</html>

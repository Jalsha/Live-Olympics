<?php

session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>About Live Olympics </title>

    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/Scss/style.css" />
</head>

<body>
  
  <!--####################### Header Starts Here ###################-->
  <header class="continer-fluid ">
            <div class="header-top">
                <div class="container">
                    <div class="row col-det">
                        <div class="col-lg-6 d-none d-lg-block">
                            <ul class="ulleft">
                                <li>
                                    <i class="far fa-envelope"></i>
                                    liveolympicgames@olympics.com
                                    <span>|</span></li>
                             
                            </ul>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <ul class="ulright">
                            <li>
                                    <form>
                                        <input type="text" placeholder="Search.." class="search--form">
                                        <a href="#">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                       </a> 
                                    </form>
                                        
                                    
                                </li>
                                <li> 
                                    <a href="contact_us.php">

                                    <i class="fas fa-mobile-alt"></i>
                                    Support
                                    </a>
                                    
                                    <span>|</span></li>
                                <li>
                                    <a href="#" data-toggle="modal" data-target="#logoutModal">

                                    <i class="fas fa-user-astronaut"></i>
                                    Sign Out</li>
                                    </a>
                                    
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom">
                <div class="container">
                    <div class="row nav-row">
                        <div class="col-md-3 logo">
                            <a href="index.php">
                                <img class="logo_img" src="assets/images/logo1.png" alt="">
                            </a>
                            
                        </div>
                        <div class="cflex col-md-9 nav-col">
                            <nav class="navbar navbar-expand-lg navbar-light">

                                <button
                                    class="navbar-toggler"
                                    type="button"
                                    data-toggle="collapse"
                                    data-target="#navbarNav"
                                    aria-controls="navbarNav"
                                    aria-expanded="false"
                                    aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarNav">
                                    <ul class="navbar-nav">
                                        <li class="nav-item">
                                            <a class="nav-link" href="index.php">Home
                                            </a>
                                        </li>
                                        <li class="nav-item active">
                                            <a class="nav-link" href="about_us.php">About</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="schedule.php">Schedule</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="videos.php">Videos</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="contact_us.php">Contact</a>
                                        </li>
                                    </ul>
                                    <ul class="navbar ml-auto ml-md-0 osahan-right-navbar">
                              
                               
                                        <li class="nav-item dropdown no-arrow osahan-right-navbar-user">
                                           <a class="nav-link dropdown-toggle user-dropdown-link custom-nav-link" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                           <img alt="Avatar" class="user-image mt-0 p-0" src="assets/images/user.png">
                                           <?= htmlspecialchars($user["name"]) ?>
                                           </a>
                                           <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                                              <a class="dropdown-item" href="#"><i class="fas fa-fw fa-user-circle"></i> &nbsp; My Account</a>
                                              <a class="dropdown-item" href="#"><i class="fas fa-fw fa-video"></i> &nbsp; Watch History</a>
                                              <a class="dropdown-item" href="#"><i class="fas fa-fw fa-cog"></i> &nbsp; Settings</a>
                                              <div class="dropdown-divider"></div>
                                              <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal" ><i class="fas fa-fw fa-sign-out-alt"></i> &nbsp; Logout</a> 
                                           </div>
                                        </li>
                                     </ul> 
                                </div>
                            </nav>
                            
                        </div>
                    </div>
                </div>
            </div>
</header>

       <!--  ************************* Page Title Starts Here ************************** -->
     <div class="page-nav no-margin row">
            <div class="container">
                <div class="row">
                    <h2>About Live Olympics Video Streaming Platform</h2>
                    <ul>
                        <li> <a href="index.php"><i class="fas fa-home"></i> Home</a></li>
                        <li><i class="fas fa-angle-double-right"></i> About Us</li>
                    </ul>
                </div>
            </div>
        </div>


        <!--################### About Us Starts Here #######################--->

        <div id="about" class="about-company">
                <div class="container">
                    <div class="row">
                       <div class="col-md-6">
                         <div class="detail">
                             <h3>What is Live Olympics?</h3>
                             <p>Live Olympics is a video streaming platform where hundreds of olympic games' videos are available for the registered user to watch. It includes features like Live Streaming, Search through Categories, Watch from previous Olympic Games, Watch Documentaries, Look for upcoming games, etc.</p>
                             <p>The Summer Olympic Games (French: Jeux olympiques d'été), also known as the Games of the Olympiad, and often referred to as the Summer Olympics, is a major international multi-sport event normally held once every four years. The inaugural Games took place in 1896 in Athens, Greece, and the most recent edition was held in 2021 in Tokyo, Japan. The International Olympic Committee (IOC) is responsible for organising the Games and for overseeing the host city's preparations. The tradition of awarding medals began in 1904; in each Olympic event, gold medals are awarded for first place, silver medals for second place, and bronze medals for third place. The Winter Olympic Games were created out of the success of the Summer Olympic Games, which are regarded as the largest and most prestigious multi-sport international event in the world.</p>
                         </div>
                     </div>
                     <div class="col-md-6">
                         <div class="imag">
                             <img src="assets/images/blog/aboubanner.jpeg" alt="">
                         </div>
                     </div> 
                    </div>
                </div>
                 
             </div>
      

  
  <!--####################### Latest Videos Starts Here ###################-->
  <div class="latest-video latest-video container-fluid">
    <div class="container">
        <div class="row no-margin video-title">
            <h6>
                <i class="fas fa-book"></i>
                Latest Videos</h6>
        </div>
        <div class="video-row row">
            <div class="col-lg-3 col-md-4 col-sm-6 ">
                    <a href="seventh.php">
                <div class="video-card">
                    <img src="assets/images/blog/trending_11.jpeg" alt="">

                    <div class="row details no-margin">
                        <h6>Medal Tally of Tokyo 2020</h6>
                        <div class="col-md-6 col-6 no-padding left">
                            <i class="far fa-eye"></i>
                            <span>334</span>
                        </div>
                        <div class="col-md-6 col-6 no-padding right">

                            <i class="far fa-comments"></i>
                            <span>374</span>
                        </div>
                    </div>

                </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="sixth.php">
                <div class="video-card">
                    <img src="assets/images/blog/trending_8.jpeg" alt="">

                    <div class="row details no-margin">
                        <h6>Beijing Olympic Highlights</h6>
                        <div class="col-md-6 col-6 no-padding left">
                            <i class="far fa-eye"></i>
                            <span>134</span>
                        </div>
                        <div class="col-md-6 col-6 no-padding right">

                            <i class="far fa-comments"></i>
                            <span>304</span>
                        </div>
                    </div>

                </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="eighth.php">
                <div class="video-card">
                    <img src="assets/images/blog/trending_9.jpeg" alt="">

                    <div class="row details no-margin">
                        <h6>Olympic Squats vs Powerlifting</h6>
                        <div class="col-md-6 col-6 no-padding left">
                            <i class="far fa-eye"></i>
                            <span>334</span>
                        </div>
                        <div class="col-md-6 col-6 no-padding right">

                            <i class="far fa-comments"></i>
                            <span>324</span>
                        </div>
                    </div>

                </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="fifth.php">
                <div class="video-card">
                    <img src="assets/images/blog/trending_13.png" alt="">

                    <div class="row details no-margin">
                        <h6>Ana Vazquez (Archer) | Lifestyle</h6>
                        <div class="col-md-6 col-6 no-padding left">
                            <i class="far fa-eye"></i>
                            <span>634</span>
                        </div>
                        <div class="col-md-6 col-6 no-padding right">

                            <i class="far fa-comments"></i>
                            <span>987</span>
                        </div>
                    </div>

                </div>
                </a>
            </div>
        </div>
    </div>
</div>
 
  <!--####################### Ads Starts Here ###################-->
      <div class="ads-cont container-fluid">
          
      </div>
  
    <!--####################### Quote Starts Here ###################-->
    <div class="footer-ablove">
      <div class="container">
        <div class="row">
          <p>
            Best Platform to Watch Live Stream of Olympic Games
            <form action="videos.php">
              <button class="btn btn-default">Start Watching Videos</button>
            </form>
            
          </p>
        </div>
      </div>
    </div>
    <!--####################### Footer Starts Here ###################-->
    <footer class="footer">
      <div class="container">
        <div class="row text-right">
          <div class="col-md-4 about col-sm-12">
            <h2>
              <i class="fas fa-info-circle"></i>
              About Us
            </h2>
            <p>
              This is a really fast and easy platform where you can watch
              hundreds of olympic videos from our vault, along with live
              streaming.
            </p>
          </div>
          <div class="col-md-4 col-sm-12">
            <h2>
              <i class="fas fa-link"></i>
              Useful Links
            </h2>
            <ul class="list-unstyled link-list">
              <li>
                <a ui-sref="about" href="index.php">Home</a>
              </li>
              <li>
                <a ui-sref="portfolio" href="about_us.php">About Us</a>
              </li>
              <li>
                <a ui-sref="products" href="schedule.php">Schedule</a>
              </li>
              <li>
                <a ui-sref="gallery" href="videos.php">Video Gallery</a>
              </li>
              <li>
                <a ui-sref="contact" href="contact_us.php">Contact</a>
              </li>
            </ul>
          </div>
          <div class="col-md-4 col-sm-12 map-img">
            <h2>
              <i class="fas fa-map-marker-alt"></i>
              Contact
            </h2>
            <address class="md-margin-bottom-40">
              Jalsha Gurung
              <br />
              Kathmandu, Nepal
              <br />
              <a href="mailto:gurungjalsha84@gmail.com" class="">Send Email</a><br />
            </address>
          </div>
        </div>
      </div>
    </footer>
<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
       <div class="modal-content">
          <div class="modal-header">
             <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
             <button class="close" type="button" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">×</span>
             </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer d-flex justify-content-center">
             <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
             <a class="btn btn-primary" href="logout.php">Logout</a>
          </div>
       </div>
    </div>
 </div>
</body>
<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
<script src="assets/js/script.js"></script>


</html>
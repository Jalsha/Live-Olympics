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
    <title> Video Streamimg Website Template | Smarteyeapps.com</title>

    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/scss/style.css" />
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
                                        <li class="nav-item">
                                            <a class="nav-link" href="about_us.php">About</a>
                                        </li>
                                        <li class="nav-item active">
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
                    <h2>Schedule</h2>
                    <ul>
                        <li> <a href="index.php"><i class="fas fa-home"></i> Home</a></li>
                        <li><i class="fas fa-angle-double-right"></i> Schedule</li>
                    </ul>
                </div>
            </div>
        </div>


  <!--####################### Category Starts Here ###################-->
      <section class="sesion-type">
  	    <div class="container">
           
  	        <div class="row">
  	            <div class="col-md-4 col-sm-6">
  	                <div class="single-sess img-fluid">
  	                    <img src="assets/images/session/image-1.jpeg" alt="">
  	                    <p>March</p>
  	                </div>
  	            </div>
  	            <div class="col-md-4 col-sm-6">
  	                <div class="single-sess img-fluid">
  	                    <img src="assets/images/session/image-2.jpeg" alt="">
  	                    <p>April</p>
  	                </div>
  	            </div>
  	            <div class="col-md-4 col-sm-6">
  	                <div class="single-sess img-fluid">
  	                    <img src="assets/images/session/image-3.jpeg" alt="">
  	                    <p>May-June</p>
  	                </div>
  	            </div>
  	            <div class="col-md-4 col-sm-6">
  	                <div class="single-sess img-fluid">
  	                    <img src="assets/images/session/image-4.webp" alt="">
  	                    <p>July-August</p>
  	                </div>
  	            </div>
  	            <div class="col-md-4 col-sm-6">
  	                <div class="single-sess img-fluid">
  	                    <img src="assets/images/session/image-5.webp" alt="">
  	                    <p>September</p>
  	                </div>
  	            </div>
  	            <div class="col-md-4 col-sm-6">
  	                <div class="single-sess sess-ok">
                        <h4>Watch from Our Video Gallery</h4>
                        <p>Watch hundreds of Olympic Games in one platform.
                        </p>
                        <form action="videos.php"> <button class="btn btn-primary">View Videos</button></form>
  	                </div>
  	            </div>
  	        </div>
  	    </div>
  	</section>
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
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
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>Watch Video</title>

    <link rel="shortcut icon" href="assets/images/fav.jpg" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css" />
    <link rel="stylesheet" href="assets/css/animate.css" />
    <link rel="stylesheet" type="text/css" href="assets/scss/style.css" />
  </head>

  <body>

<!--header-->
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
                                        <li class="nav-item">
                                            <a class="nav-link" href="schedule.php">Schedule</a>
                                        </li>
                                        <li class="nav-item active">
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

<!--breadcrumb-->
    <div class="page-nav no-margin row">
      <div class="container">
        <div class="row">
          <h2>Videos</h2>
          <ul>
            <li>
              <a href="index.php"><i class="fas fa-home"></i> Home</a>
            </li>
            <li><i class="fas fa-angle-double-right"></i> Videos</li>
          </ul>
        </div>
      </div>
    </div>

    <!--Video Blog-->
    <div class="container-fluid video-blog">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="row no-margin video-title">
              <h6><i class="fas fa-book"></i> All Videos</h6>
            </div>
            <div class="video-ro row">
              <div class="col-sm-4">
                <div class="img">
                    <a href="third.php">
                         <img src="assets/images/blog/trending_1.webp" alt="" />
                    </a>
                 
                </div>
              </div>
              <div class="col-sm-8 detail">
                <a href="third.php">
                    <h6>Swimming Icon Michael Phelps</h6>
               

                </a>
                <div class="counts">
                  <i class="far fa-eye"></i> <span>324</span>
                  <i class="far fa-thumbs-up"></i> <span>36</span>
                  <i class="far fa-comments"></i> <span>122</span>
                </div>
                <p>
                Michael Phelps is the most successful and most decorated Olympian of all time with a total of 28 medals.
                </p>
                <div class="buttons">
                  <a href="third.php" class="btn btn-sm btn-primary">Watch Now</a>
                </div>
              </div>
            </div>
            <div class="video-ro row">
              <div class="col-sm-4">
                <div class="img">
                    <a href="first.php">
                        <img src="assets/images/blog/trending_12.jpeg" alt="" />
                    </a>
                  
                </div>
              </div>
              <div class="col-sm-8 detail">
                <a href="first.php">
<h6>Usain Bolt and his Records</h6>

                </a>
                
                <div class="counts">
                  <i class="far fa-eye"></i> <span>34</span>
                  <i class="far fa-thumbs-up"></i> <span>32</span>
                  <i class="far fa-comments"></i> <span>334</span>
                </div>
                <p>
                Usain Bolt is a retired Jamaican sprinter, widely considered to be the greatest sprinter of all time.
                </p>
                <div class="buttons">
                  <a href="first.php" class="btn btn-sm btn-primary">Watch Now</a>
                </div>
              </div>
            </div>
            <div class="video-ro row">
              <div class="col-sm-4">
                <div class="img">
                    <a href="fourth.php">
                        <img src="assets/images/blog/trending_3.jpeg" alt="" />
                    </a>
                  
                </div>
              </div>
              <div class="col-sm-8 detail">
                <a href="fourth.php">
                    <h6>Hockey Icons of Olympic</h6>
                </a>
                
                <div class="counts">
                  <i class="far fa-eye"></i> <span>241</span>
                  <i class="far fa-thumbs-up"></i> <span>41</span>
                  <i class="far fa-comments"></i> <span>324</span>
                </div>
                <p>
                Ice hockey is a team sport played on ice skates, usually on an ice skating rink with lines and markings specific to the sport. 
                </p>
                <div class="buttons">
                  <a href="fourth.php" class="btn btn-sm btn-primary">Watch Now</a>
                </div>
              </div>
            </div>
            <div class="video-ro row">
              <div class="col-sm-4">
                <div class="img">
                    <a href="second.php">
                           <img src="assets/images/blog/trending_4.jpeg" alt="" />
                    </a>
               
                </div>
              </div>
              <div class="col-sm-8 detail">
                <a href="second.php">
                    <h6>Brazil Wins Olympic Gold</h6>
                </a>
                
                <div class="counts">
                  <i class="far fa-eye"></i> <span>314</span>
                  <i class="far fa-thumbs-up"></i> <span>79</span>
                  <i class="far fa-comments"></i> <span>334</span>
                </div>
                <p>
                  Brazil is the most successful footballing nation in the world with 5 FIFA World Cup titles and numerous Olympic golds.
                </p>
                <div class="buttons">
                  <a href="second.php" class="btn btn-sm btn-primary">Watch Now</a>
                </div>
              </div>
            </div>
            <div class="video-ro row">
              <div class="col-sm-4">
                <div class="img">
                    <a href="sixth.php">
                       <img src="assets/images/blog/trending_8.jpeg" alt="" /> 
                    </a>
                  
                </div>
              </div>
              <div class="col-sm-8 detail">
                <a href="sixth.php">
                    <h6>Beijing Olympic Highlights</h6>
                </a>
                
                <div class="counts">
                  <i class="far fa-eye"></i> <span>134</span>
                  <i class="far fa-thumbs-up"></i> <span>34</span>
                  <i class="far fa-comments"></i> <span>304</span>
                </div>
                <p>
                The 2022 Winter Olympics was officially called the XXIV Olympic Winter Games and is commonly known as Beijing 2022.
                </p>
                <div class="buttons">
                  <a href="sixth.php" class="btn btn-sm btn-primary">Watch Now</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 mt-5 display-none">
            <div class="row">
              <div class="col-sm-12">
                <a href="seventh.php">
                  <div class="video-card">
                    <img src="assets/images/blog/trending_11.jpeg" alt="" />

                    <div class="row details no-margin">
                      <h6>Medal Tally of Tokyo 2020</h6>

                      <div class="col-md-6 col-6 no-padding left">
                        <i class="far fa-thumbs-up"></i>
                        <span>374</span>
                      </div>
                      <div class="col-md-6 col-6 no-padding left">
                        <i class="far fa-comments"></i>
                        <span>374</span>
                      </div>
                    </div>
                  </div>
                </a>
              </div>

              <div class="col-sm-12">
                <a href="eighth.php">
                  <div class="video-card">
                    <img src="assets/images/blog/trending_9.jpeg" alt="" />

                    <div class="row details no-margin">
                      <h6>Olympic Squats vs Powerlifting Squats</h6>

                      <div class="col-md-6 col-6 col-sm-12 no-padding left">
                        <i class="far fa-thumbs-up"></i>
                        <span>304</span>
                       
                      </div>
                      <div class="col-md-6 col-6 col-sm-12 no-padding left">
                        <i class="far fa-comments"></i>
                        <span>304</span>
                      </div>

                    </div>
                  </div>
                </a>
              </div>
              <div class="col-sm-12">
                <a href="fifth.php">
                  <div class="video-card">
                    <img src="assets/images/blog/trending_13.png" alt="" />

                    <div class="row details no-margin">
                      <h6>Anna Vazquez (Archer) | Lifestyle</h6>

                      <div class="col-md-6 col-6 no-padding left">
                        <i class="far fa-thumbs-up"></i>
                        <span>304</span>
                        </div>
                        <div class="col-md-6 col-6 no-padding left">
                        <i class="far fa-comments"></i>
                        <span>304</span>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>


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
    <!--Footer -->
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
    <div
      class="modal fade"
      id="logoutModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button
              class="close"
              type="button"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            Select "Logout" below if you are ready to end your current session.
          </div>
          <div class="modal-footer d-flex justify-content-center">
            <button
              class="btn btn-secondary"
              type="button"
              data-dismiss="modal"
            >
              Cancel
            </button>
            <a class="btn btn-primary" href="homepage.html">Logout</a>
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

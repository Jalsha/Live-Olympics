<?php

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = sprintf("SELECT * FROM user
                    WHERE email = '%s'",
                   $mysqli->real_escape_string($_POST["email"]));
    
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();

    
    if ($user) {
        
        if (password_verify($_POST["password"], $user["password_hash"])) {
            
            session_start();
            
            session_regenerate_id();
            
            $_SESSION["user_id"] = $user["id"];
            
            header("Location: index.php");
            exit;
        }
    }
    
    $is_invalid = true;
}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Login | Live Olympics</title>

    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/scss/style.css" />
<!-- Owl Carousel -->
<link rel="stylesheet" href="assets/vendors/owl-carousel/owl.carousel.css">
<link rel="stylesheet" href="assets/vendors/owl-carousel/owl.theme.css">
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
            </div>
        </div>
    </div>
</header>
<section class="login-main-wrapper">
    <div class="container-fluid pl-0 pr-0">
       <div class="row no-gutters">
          <div class="col-md-12 p-5 bg-white full-height">
             <div class="login-main-left">
                <div class="text-center mb-5 login-main-left-header pt-4">
                    <img class="logo_img" src="assets/images/logo1.png" alt="">
                   <h5 class="mt-3 mb-3">Welcome to Live Olympics Video Streaming Platform</h5>
                   <p>Enter your login credentials to get access to all the features of Live Olympics.</p>
                </div>
                <?php if ($is_invalid): ?>
                  <em>Invalid login</em>
                <?php endif; ?>
              

                <form method="post">
                    <div class="form-group">
<label for="email">Email</label>
        <input type="email" name="email" id="email" class="form-control" placeholder="Enter Your Email"
               value="<?= htmlspecialchars($_POST["email"] ?? "") ?>">
                    </div>
                    <div class="form-group">
        
        <label for="password">Password</label>
        <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                    </div>
        

        
        <button class="btn btn-outline-primary btn-block btn-lg">Log in</button>
    </form>
                <div class="text-center mt-5">
                   <p class="light-gray">Don’t have an account? <a href="signup.html" class="login-link">Sign Up</a></p>
                </div>
                <div class="text-center mt-5">
                    <a href="forgot-pw.html" class="login-link">Forgot Password?</a>
                 </div>
             </div>
          </div>
       </div>
    </div>
 </section>


  <!--####################### Quote Starts Here ###################-->
  <div class="footer-ablove">
    <div class="container">
        <div class="row">
            <p>Best Platform to Watch Live Stream of Olympic Games 
                <button class="btn btn-default">Start Watching Videos</button>
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
                    About Us</h2>
                <p>
                    This is a really fast and easy platform where you can watch hundreds of olympic videos from our vault, along with live streaming.
                </p>

            </div>
            <div class="col-md-4 col-sm-12">
                <h2>
                    <i class="fas fa-link"></i>
                    Useful Links</h2>
                <ul class="list-unstyled link-list">
                    <li>
                        <a ui-sref="about" href="#/index">Home</a>
                        
                    </li>
                    <li>
                        <a ui-sref="portfolio" href="#/teams">Teams</a>
                        
                    </li>
                    <li>
                        <a ui-sref="products" href="#/products">Schedule</a>
                        
                    </li>
                    <li>
                        <a ui-sref="gallery" href="#/gallery">Video Gallery</a>
                        
                    </li>
                    <li>
                        <a ui-sref="contact" href="#/contact">Contact</a>
                        
                    </li>
                </ul>
            </div>
            <div class="col-md-4 col-sm-12 map-img">
                <h2>
                    <i class="fas fa-map-marker-alt"></i>
                    Contact</h2>
                <address class="md-margin-bottom-40">
                    Jalisha Gurung
                    <br>
                    Kathmandu
                    <br>
                    Nepal
                    <br>
                    Phone: 
                    <br>
                    Email:
                    <a href="mailto:" class="">example@gmail.com</a><br>
                    <!-- Web: -->
                    <!-- <a href="smart-eye.html" class="">www.sansic.com</a> -->
                </address>

            </div>
        </div>
    </div>

</footer>

</body>
<script src="assets/js/jquery-3.2.1.min.js"></script>
<!-- <script src="assets/vendors/jquery/jquery.min.js"></script> -->
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
<script src="assets/js/script.js"></script>
<script src="assets/vendors/owl-carousel/owl.carousel.js"></script>

</html>
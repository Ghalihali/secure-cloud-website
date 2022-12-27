<!DOCTYPE php>
<php lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title>secure Cloud</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-host-cloud.css">
    <link rel="stylesheet" href="assets/css/owl.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
            $('#myDropDown').change(function(){
                //Selected value
                var inputValue = $(this).val();
               if(inputValue=="signout.php")
                window.location="signout.php";
else
 if(inputValue=="profile.html")
  window.location="profile.php";
                //Ajax for calling php function
                $.post("signout.php", { dropdownValue: inputValue }, function(data){
                    
                });
            });
        });
        </script>
  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.php"><h2>secure <em>Cloud</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">About Us</a>
              </li>
			 
			   <?php
			   session_start();
		  if(isset($_SESSION['email'])){
              echo ' <li class="nav-item">
               <a class="nav-link" href="UploadFilePage.html">UploadFile</a>
              </li>
               <li class="nav-item">
               <a class="nav-link" href="Showfile.php">ShowFile</a>
              </li>

';
		  }?>
		   <li class="nav-item">
                <a class="nav-link" href="services.php">services Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact Us</a>
              </li>
			   <li class="nav-item">
    <select id="myDropDown" class="combo" style="margin-top: 15px;
    height: 35px;margin-right: -65px;background-color: #00bcd4;color:white">
   <option value=""></option>
<option value="profile.html">Myprofile </option>
<option value="signout.php"><a class="nav-link" href="signout.php">Logout</a></option></select >
			   
              </li>
            </ul>
          </div>
		 
        <div class="functional-buttons">
            <ul>
              <li><a href="login.html">Log in</a></li>
              <li><a href="SignIn.html">Sign Up</a></li>
            </ul>
        </div>
		  
		  
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner">
      <div class="container">
        <div class="row">
          <div class="col-md-8 offset-md-2">
            <div class="header-text caption">
              <h2>Search </h2>
              <div id="search-section">
              	<form id="suggestion_form" name="gs" method="get" action="#">
                <div class="searchText">
                  
                  <input type="text" name="q" class="searchText" placeholder="Enter your Search ..." autocomplete="on">
                  
                </div>
                    <input type="submit" name="results" class="main-button" value="Search Now">
                 </form>
               <div class="advSearch_chkbox">
               </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->

    <!-- Trusted Starts Here -->
    <div class="trusted-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="trusted-section-heading">
              <h4>secure cloud Service</h4>
            </div>
          </div>
          <div class="col-md-12">
            <div class="owl-trusted owl-carousel">
              <div class="trusted-item">
                <img src="assets/images/trusted-01.png" alt="trusted 1">
              </div>
              <div class="trusted-item">
                <img src="assets/images/trusted-01.png" alt="trusted 2">
              </div>
              <div class="trusted-item">
                <img src="assets/images/trusted-01.png" alt="trusted 3">
              </div>
              <div class="trusted-item">
                <img src="assets/images/trusted-01.png" alt="trusted 4">
              </div>
              <div class="trusted-item">
                <img src="assets/images/trusted-01.png" alt="trusted 5">
              </div>
              <div class="trusted-item">
                <img src="assets/images/trusted-01.png" alt="trusted 6">
              </div>
              <div class="trusted-item">
                <img src="assets/images/trusted-01.png" alt="trusted 7">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Trusted Ends Here -->


    <!-- Services Starts Here -->
    <div class="services-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <span>Hosting Services</span>
              <h2>Services we provide</h2>
              <p>secure Cloud is a A professional website that provides many services with technologies and professional security that provides services in a complete and joined way and subject the data to high encryption</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="service-item">
              <i class="fa fa-database"></i>
              <h4>Light Cloud</h4>
              <p>This site provides cloud services in downloading files, photos and videos
It provides easy and flexible navigation to the site and the services it contains</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="service-item">
              <i class="fa fa-database"></i>
              <h4> Cloud security</h4>
              <p>This site was developed to be one of the most important sites that provide cloud services, and all attention was paid to the security that this site provides for files archived in it.</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="service-item">
              <i class="fa fa-database"></i>
              <h4>Fully Dedicated</h4>
              <p>This site is dedicated to uploading and encrypting files using the PA algorithm, which makes the cloud more secure.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Services Ends Here -->


    <!-- Pricing Starts Here -->
    <div class="pricing-section">
      <div class="background-image-pricing">
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 offset-md-2">
            <div class="section-heading">
              <h2>Cloud Hosting Plans</h2>
              <p>soon.</p>
            </div>
          </div>
         
          
              <h4>Advanced Cloud</h4>
              <div class="price">
                <h6>$72.25</h6>
                <span>monthly</span>
              </div>
              <p>soon</p>
              <div class="dev"></div>
              
              <a href="#" class="main-button">Take it now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Pricing Ends Here -->


    <!-- Features Starts Here -->
    <div class="features-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <span>Best Quality for you</span>
              <h2>Cloud Features</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="feature-item">
              <div class="icon">
                <img src="assets/images/feature-01.png" alt="">
              </div>
              <h4>Load Balanced</h4>
              <p>soon.</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="feature-item">
              <div class="icon">
                <img src="assets/images/feature-01.png" alt="">
              </div>
              <h4>99.9% </h4>
              <p>soon.</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="feature-item">
              <div class="icon">
                <img src="assets/images/feature-01.png" alt="">
              </div>
              <h4>Top Reliability</h4>
              <p>soon.</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="feature-item">
              <div class="icon">
                <img src="assets/images/feature-01.png" alt="">
              </div>
              <h4>High Security</h4>
              <p>.</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="feature-item">
              <div class="icon">
                <img src="assets/images/feature-01.png" alt="">
              </div>
              <h4>Quality Hardwares</h4>
              <p>.</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="feature-item">
              <div class="icon">
                <img src="assets/images/feature-01.png" alt="">
              </div>
              <h4>Network Solutions</h4>
              <p>.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Features Ends Here -->


    <!-- Testimonials Starts Here -->
      <div class="testimonials-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <span>Testimonials</span>
              <h2>What they say about us</h2>
            </div>
          </div>
          <div class="col-md-10 offset-md-1">
            <div class="owl-testimonials owl-carousel">
              <div class="testimonial-item">
                <div class="icon">
                  <i class="fa fa-quote-right"></i>
                </div>
                <p>"student in Qassim univristy"</p>
                <h4>Ghaliah</h4>
                <span>CS</span>
              </div>
              <div class="testimonial-item">
                <div class="icon">
                  <i class="fa fa-quote-right"></i>
                </div>
                <p>"student in Qassim univristy"</p>
                <h4>Ameara</h4>
                <span>CS</span>
              </div>
              <div class="testimonial-item">
			  
                <div class="icon">
                  <i class="fa fa-quote-right"></i>
                </div>
                <p>"student in Qassim univristy"</p>
                <h4>Sara</h4>
                <span>CS</span>
              </div>
           <div class="testimonial-item">
			  
                <div class="icon">
                  <i class="fa fa-quote-right"></i>
                </div>
                <p>"student in Qassim univristy"</p>
                <h4>Badriah</h4>
                <span>CS</span>
              </div>
		   </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Testimonials Ends Here -->


    <!-- Footer Starts Here -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="footer-item">
              <div class="footer-heading">
                <h2>About Us</h2>
              </div>
              <p>This site was designed as a graduation project for students of the Qassim University, in which the languages of website design were used professionally and in high security</p>
            </div>
          </div>
          
          
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="footer-item">
              <div class="footer-heading">
                <h2></h2>
              </div>
              <ul class="footer-list">
                
               
              </ul>
          </div></div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="footer-item">
              <div class="footer-heading">
                <h2>Useful Links</h2>
              </div>
              <ul class="footer-list">
                <li><a href="login.html">login page</a></li>
                <li><a href="sinup.html">sinup page</a></li>
                <li><a href="index.php">home page</a></li>
                <li><a href="contact.php">contact page</a></li>
               
              </ul>
            </div>
          </div>
          
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="footer-item">
              <div class="footer-heading">
                <h2>More Information</h2>
              </div>
              <ul class="footer-list">
                <li>Phone: <a href="#">0558634944</a></li>
                <li>Email: <a href="#">secrecloudc@gmail.com</a></li>
                <li>Support: <a href="#">secrecloudc@gmail.com</a></li>
                <li>Website: <a href="#">http://localhost/login_v1/index.php</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-12">
            <div class="sub-footer">
              <p>Copyright &copy; 2020 Cloud Hosting Company
				- Designed by students of  Qassim University</p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer Ends Here -->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/accordions.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

  </body>
</php>
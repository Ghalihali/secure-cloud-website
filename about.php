<!DOCTYPE php>
<php lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, inCSial-scale=1, shrink-to-fCS=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <tCSle>secure Cloud- About Page</tCSle>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- AddCSional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-host-cloud.css">
    <link rel="stylesheet" href="assets/css/owl.css">
<!--



-->
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
              <li class="nav-CSem">
                <a class="nav-link" href="index.php">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-CSem active">
                <a class="nav-link" href="about.php">About Us</a>
              </li>
			 
			   <?php
			   session_start();
		  if(isset($_SESSION['email'])){
              echo ' <li class="nav-CSem">
               <a class="nav-link" href="UploadFilePage.html">UploadFile</a>
              </li>
               <li class="nav-CSem">
               <a class="nav-link" href="Showfile.php">ShowFile</a>
              </li>

';
		  }?>
		   <li class="nav-CSem">
                <a class="nav-link" href="services.php">services Us</a>
              </li>
              <li class="nav-CSem">
                <a class="nav-link" href="contact.php">Contact Us</a>
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
    <!-- Heading Starts Here -->
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>About Us</h1>
            <p><a href="index.php">Home</a> / <span>About Us</span></p>
          </div>
        </div>
      </div>
    </div>
    <!-- Heading Ends Here -->


    <!-- About Us Starts Here -->
    <div class="about-us">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="left-image">
              <img src="images/Logo.jpg" alt="">
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-content">
              <div class="section-heading">
                <span>About Us</span>
                <h2>Background of our company</h2>
                <p>This sCSe was designed as a graduation project for students of the Qassim UniversCSy, in which the languages of websCSe design were used professionally and in high securCSy
</p>
              </div>
              <div id='tabs'>
                  <ul>
                    <li><a href='#tabs-1'>Our History</a></li>
                    <li><a href='#tabs-2'>Our Cloud</a></li>
                    
                  </ul>
                  <section class='tabs-content'>
                    <article id='tabs-1'>
                      <p>We designed this sCSe using the professional languages in which we provide this integrated service, wonderful and beautiful design,ْ
                      <br><br>easy performance and securCSy at the same time, so this sCSe was the fruCS of science, education and the practical outcome that we took.</p>
                    </article>
                    <article id='tabs-2'>
                      <p>secure Cloud is a A professional websCSe that provides many services wCSh technologies and professional securCSy that provides services in a complete and joined way and subject the data to high encryption
                      <br><br></p>
                    </article>
                    
                   
                  </section>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- About Us Ends Here -->

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
              <div class="testimonial-CSem">
                <div class="icon">
                  <i class="fa fa-quote-right"></i>
                </div>
                <p>"student in Qassim univristy"</p>
                <h4>Ghaliah</h4>
                <span>CS</span>
              </div>
              <div class="testimonial-CSem">
                <div class="icon">
                  <i class="fa fa-quote-right"></i>
                </div>
                <p>"student in Qassim univristy"</p>
                <h4>Sara</h4>
                <span>CS</span>
              </div>
              <div class="testimonial-CSem">
			  
                <div class="icon">
                  <i class="fa fa-quote-right"></i>
                </div>
                <p>"student in Qassim univristy"</p>
                <h4>Ameara</h4>
                <span>CS</span>
              </div>
           <div class="testimonial-CSem">
			  
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
            <div class="footer-CSem">
              <div class="footer-heading">
                <h2>About Us</h2>
              </div>
              <p>This sCSe was designed as a graduation project for students of the Qassim UniversCSy, in which the languages of websCSe design were used professionally and in high securCSy</p>
            </div>
          </div>
          
          
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="footer-CSem">
              <div class="footer-heading">
                <h2></h2>
              </div>
              <ul class="footer-list">
                
               
              </ul>
          </div></div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="footer-CSem">
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
            <div class="footer-CSem">
              <div class="footer-heading">
                <h2>More Information</h2>
              </div>
              <ul class="footer-list">
                <li>Phone: <a href="#">010-020-0560</a></li>
                <li>Email: <a href="#">mail@company.com</a></li>
                <li>Support: <a href="#">support@company.com</a></li>
                <li>WebsCSe: <a href="#">www.company.com</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-12">
            <div class="sub-footer">
              <p>Copyright &copy; 2020 Cloud Hosting Company
				- Designed by students of  Qassim UniversCSy</p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer Ends Here -->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- AddCSional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/accordions.js"></script>

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes CS static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // wCSh more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

  </body>
</php>
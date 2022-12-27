<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title>Host Cloud  - Services</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-host-cloud.css">
    <link rel="stylesheet" href="assets/css/owl.css">
<!--

Host Cloud 
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
          <a class="navbar-brand" href="index.php"><h2>Host <em>Cloud</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
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
               <li class="nav-item active">
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
            <h1>Your image upload</h1>
            <p><a href="index.html">Home</a> / <span>show files</span></p>
          </div>
        </div>
      </div>
    </div>
    <!-- Heading Ends Here -->


    <!-- Services Starts Here -->
    <div class="services-section services-page">
      <div class="container">
        <div class="row">
		  <?php

$CaserNotEnc = array('png', 'jpg', 'gif');
require("EncPA.php");
require_once("Connect.php"); 
$stmt = $con -> prepare("SELECT FileUpload,iv,file_Type,FileName,ID  FROM user_upload where user_id=?");
 $stmt -> execute(array($_SESSION['User_ID']));
 $items    = $stmt -> fetchAll();
 foreach( $items as $item){
if(!in_array(strtolower($item[2]), $CaserNotEnc)){

   $img= Decipher_2($item[0],$item[1]);
   $img=Decipher( $img);
}
else {
    $img= Decipher_2($item[0],$item[1]);

}
       echo '<div class="col-md-4 col-sm-6 col-xs-12" >
            <div class="service-item" style="height: 400px;" >
             <img style="width: 100%;max-height: 50%;" src="data:image/jpeg;base64,'. base64_encode($img).'"/>
              <h4>'.$item[3].'</h4>
			  <div class="contact-form">';?>
			  <a href="download_image.php?file_id=<?php echo $item[4] ?>"><?php
            echo' <button class="main-button">download</button></a>';?>
			<a href="delet_image.php?file_id=<?php echo $item[4] ?>"><?php
            echo' <button class="main-button">delete</button></a>
            </div></div>
          </div>';
      
}
?>

         
          
       
            </div>
          </div>
        </div>
     
    <!-- Services Ends Here -->


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
                <p>"student in Qaseem univristy"</p>
                <h4>Ghaliah</h4>
                <span>IT</span>
              </div>
              <div class="testimonial-item">
                <div class="icon">
                  <i class="fa fa-quote-right"></i>
                </div>
                <p>"student in Qaseem univristy"</p>
                <h4>Sara</h4>
                <span>IT</span>
              </div>
              <div class="testimonial-item">
			  
                <div class="icon">
                  <i class="fa fa-quote-right"></i>
                </div>
                <p>"student in Qaseem univristy"</p>
                <h4>Ameara</h4>
                <span>IT</span>
              </div>
           <div class="testimonial-item">
			  
                <div class="icon">
                  <i class="fa fa-quote-right"></i>
                </div>
                <p>"student in Qaseem univristy"</p>
                <h4>Badriah</h4>
                <span>IT</span>
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
              <p>This site was designed as a graduation project for students of the Qaseem University, in which the languages of website design were used professionally and in high security</p>
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
                <li>Phone: <a href="#">010-020-0560</a></li>
                <li>Email: <a href="#">mail@company.com</a></li>
                <li>Support: <a href="#">support@company.com</a></li>
                <li>Website: <a href="#">www.company.com</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-12">
            <div class="sub-footer">
              <p>Copyright &copy; 2020 Cloud Hosting Company
				- Designed by students of  Qaseem University</p>
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
</html>
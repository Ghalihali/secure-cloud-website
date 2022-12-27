<!DOCTYPE html>
<html lang="en">
<head>
	<title>SignIn</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<?php
  require_once("Connect.php"); 
session_start();
$_SESSION['User_ID']=1;
$stmt   = $con -> prepare('SELECT * FROM users WHERE User_ID=?');
            $stmt   -> execute(array($_SESSION['User_ID']));
            $item    = $stmt -> fetch() ;
	?>

	<div class="limiter">
	
		<div class="container-login100">
			<div class="wrap-login100">
			<form class="login100-form validate-form" Method="Post" action="updateProfile.php" target="_blank">
				<div class="login100-pic js-tilt" data-tilt id="drop">
				<span class="login100-form-title">
						
					</span>
				<img src="data:image/jpeg;base64,'. base64_encode($item['User_image']).'" id="preview" alt="IMG">
<a>Input Pic</a>
<input type="file" id="filetag" name="image" multiple />
</div>

				



<span class="login100-form-title">
				
					</span>
				<div class="wrap-input100 validate-input" data-validate = "Requird">
				
					<input class="input100" type="text" name="FristName" placeholder="FristName" value=<?php echo $item['User_Name']?> >
					<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
</div>
<div class="wrap-input100 validate-input" data-validate = "Requird">
						
						<input class="input100" type="text" name="SecondName" placeholder="SecondName" value="<?php echo $item['User_SecondName']?>" >
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
					
					<div id="wrap-input100 validate-input" class="wrap-input100 validate-input" data-validate ="Valid email is required:ex@abc.xyz and Not used to onther person">
						<input class="input100" type="text" name="email" placeholder="Email" disabled="true" value="<?php echo $item['User_Email']?>">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password" value="<?php echo $item['User_password']?>">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							update
						</button>
					</div>

					
						
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
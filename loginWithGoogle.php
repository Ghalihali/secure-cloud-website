<?php

 require_once("Connect.php"); 
require 'google-api/vendor/autoload.php';
require_once("Connect.php"); 
// Creating new google client instance
$client = new Google_Client();

// Enter your Client ID
$client->setClientId('683891749420-hm1mfsc603kq0taarj3rpocqldipirma.apps.googleusercontent.com');
// Enter your Client Secrect
$client->setClientSecret('5-lypE3FSOVJqZq9Tt4rYZSw');
// Enter the Redirect URL
$client->setRedirectUri('http://localhost:81/Login_v1/loginWithGoogle.php');

// Adding those scopes which we want to get (email & profile Information)
$client->addScope("email");
$client->addScope("profile");

if(isset($_GET['code'])){

    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);

    if(!isset($token["error"])){

        $client->setAccessToken($token['access_token']);

        // getting profile information
        $google_oauth = new Google_Service_Oauth2($client);
        $google_account_info = $google_oauth->userinfo->get();
    
        // Storing data into database
        $id =  $google_account_info->id;
        $full_name =  trim($google_account_info->name);
        $email =  $google_account_info->email;
        $profile_pic =  $google_account_info->picture;

        // checking user already exists or not
       $stmt   = $con -> prepare('SELECT * FROM users WHERE User_Email=?');
            $stmt   -> execute(array($email));
            $item    = $stmt -> fetch() ;
            $count  =  $stmt -> rowCount() ;
if( $count>=1)
{
 require_once("SignIn.html");
echo "<script language='javascript'> var d = document.getElementById('wrap-input100 validate-input');
d.className += ' alert-validate';</script>";
//return;

}
		   
 try{
          $stetment = $con -> prepare("select Max(User_ID) as max from users");
                $stetment -> execute();
                $count    = $stetment -> fetch();
            $Max_ID=$count['max']+1;
            
    }
catch(PDOException $e) {
$Max_ID=1;
}

         $stmt = $con -> prepare("insert into users(User_ID,User_Name,User_SecondName,User_password,User_Email)values($Max_ID,'$full_name','$full_name','1','$email')");
        if ($stmt -> execute())
        {
         //header("refresh:0; url=index.php"); 
         
        } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }  
		} 
}
		else{}
		?>
		<a class="login-btn" href="<?php echo $client->createAuthUrl(); ?>">Login</a>


<?php
session_start();
$User_ID=$_SESSION['User_ID'];
// A list of permitted file extensions
$allowed = array('png', 'jpg', 'gif');

if(isset($_FILES['upl']) && $_FILES['upl']['error'] == 0){

	$extension = pathinfo($_FILES['upl']['name'], PATHINFO_EXTENSION);

	if(!in_array(strtolower($extension), $allowed)){
		echo '{"status":"error"}';
		exit;
	}

	if(move_uploaded_file($_FILES['upl']['tmp_name'], 'uploads/'.$_FILES['upl']['name'])){
		
	}

}



$Path='uploads/'.$_FILES['upl']['name'];	
error_reporting(E_ALL);
   $image_binary = file_get_contents($Path);
 $image_binary_2 = file_get_contents( $_SESSION['image_Random']);

    unlink($Path);
if ( $image_binary ==   $image_binary_2) {
header("refresh:0; url=index.php"); 
}else{
include("SetPic.php"); 
echo 'image not equlas';
}


?>







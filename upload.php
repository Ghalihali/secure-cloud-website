<?php
require("EncPA.php");
require_once("Connect.php"); 
session_start();
$User_ID=$_SESSION['User_ID'];
// A list of permitted file extensions
$allowed = array('png', 'jpg', 'gif','zip','html','txt','php','pdf','docx');
$CaserNotEnc = array('png', 'jpg', 'gif');
if(isset($_FILES['upl']) && $_FILES['upl']['error'] == 0){

	$extension = pathinfo($_FILES['upl']['name'], PATHINFO_EXTENSION);

	if(!in_array(strtolower($extension), $allowed)){
		echo '{"status":"error"}';
		exit;
	}

	if(move_uploaded_file($_FILES['upl']['tmp_name'], 'uploads/'.$_FILES['upl']['name'])){
		echo '{"status":"success"}';
		//exit;
	}
}

echo '{"status":"error"}';
//exit;
$Path='uploads/'.$_FILES['upl']['name'];
error_reporting(E_ALL);
   $image_binary = file_get_contents($Path);
if(!in_array(strtolower($extension), $CaserNotEnc))
$NewText= Encipher($image_binary);
else 
    $NewText= Encipher_2($image_binary);
  require_once("Connect.php"); 
  try{
          $stetment = $con -> prepare("select Max(ID) as max from user_upload");
                $stetment -> execute();
                $count    = $stetment -> fetch();
            $Max_ID=$count['max']+1;
            
    }
catch(PDOException $e) {
$Max_ID=1;
}
 $stmt = $con -> prepare("INSERT INTO user_upload (ID, User_ID, FileUpload, file_Type,iv,FileName)
                                                                    VALUES (:ID, :User_ID, :FileUpload, :file_Type,:iv,:FileName );");
                        $stmt -> execute(array(
                                'ID'         => $Max_ID, 
                                'User_ID'      => $User_ID, 
                                'FileUpload'             =>$NewText , 
                                'file_Type'        => $extension,
                                'iv'        =>  $GLOBALS['iv'],
                                'FileName'        => $_FILES['upl']['name']
));

?>







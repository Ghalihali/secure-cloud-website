<?php
$CaserNotEnc = array('png', 'jpg', 'gif');
require("EncPA.php");
require_once("Connect.php"); 
$id = $_GET['file_id'];

$stmt = $con -> prepare("delete  FROM user_upload where ID='$id'");
 $stmt -> execute();
header('Location:ShowFile.php');
exit;
?>
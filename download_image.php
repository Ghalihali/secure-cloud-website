<?php
$CaserNotEnc = array('png', 'jpg', 'gif');
require("EncPA.php");
require_once("Connect.php"); 
$id = $_GET['file_id'];

$stmt = $con -> prepare("SELECT FileUpload,iv,file_Type,FileName FROM user_upload where ID='$id'");
 $stmt -> execute();
 $item    = $stmt -> fetch();
if(!in_array(strtolower($item[2]), $CaserNotEnc)){

   $img= Decipher_2($item[0],$item[1]);
   $img=Decipher( $img);
}
else {
    $img= Decipher_2($item[0],$item[1]);
}
header('Content-Type: "'.$item [2].'"');
header('Content-Disposition: attachment; filename="'.$item [3].'"');
header("Content-Transfer-Encoding: binary");
header('Expires: 0');
header('Pragma: no-cache');
header("Content-Length: ".strlen( $img));
exit($img);
?>
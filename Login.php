<?php
 
 require_once("Connect.php"); 
$FristName=$_POST['FristName'];
$pass=$_POST['pass'];
$email=$_POST['email'];
$stmt   = $con -> prepare('SELECT * FROM users WHERE User_Name=? and User_Password=? and User_Email=?');
            $stmt   -> execute(array($FristName,$pass,$email));
            $item    = $stmt -> fetch() ;
            $count  =  $stmt -> rowCount() ;
if( $count==1){
session_start();
$_SESSION['email']=$item['User_Email'];
$_SESSION['User_Name']= $item['User_Name'];
$_SESSION['User_ID']=$item['User_ID'];



include("gmail.php");
header("refresh:0; url=SetPic.php"); 

  }
else
echo "Erro Nothing Users ";
 require_once("login.php");
?>
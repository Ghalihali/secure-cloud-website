<?php
  require_once("Connect.php"); 
       if(empty($_POST['FristName']) || empty($_POST['SecondName']) || empty($_POST['email']) || empty($_POST['pass'])){
            echo"enter your data";
            } 
       else {

$email=$_POST['email'];


         $stmt = $con -> prepare("update users set User_Name='$_POST[FristName]',User_SecondName='$_POST[SecondName]' ,User_password='$_POST[pass]',User_imag='$image' where User_Email='$_POST[email]'");
        if ($stmt -> execute())
        {
         header('url=index.php'); 
         
        } else {
          echo 'Error: ' . $sql . '<br>' . mysqli_error($con);
      } }
?>
<?php
$Max_ID=0;
  require_once("Connect.php"); 
       if(empty($_POST['FristName']) || empty($_POST['SecondName']) || empty($_POST['email']) || empty($_POST['pass'])){
            echo"enter your data";
            } 
       else {

$email=$_POST['email'];
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

         $stmt = $con -> prepare("insert into users(User_ID,User_Name,User_SecondName,User_password,User_Email)values($Max_ID,'$_POST[FristName]','$_POST[SecondName]','$_POST[pass]','$_POST[email]')");
        if ($stmt -> execute())
        {
         header("refresh:0; url=index.php"); 
         
        } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($con);
        }  } 
?>
<?php
include_once('config.php');
include "table1.php";
?>


<!DOCTYPE html>
<html>
<head>
    
    <title> </title>
 
    
</head>
<body>
 

<?php
if(isset($_POST['register'])){
      $roll=$_POST['roll'];
      $Uname=$_POST['Uname'];
      $pass=$_POST['pass'];
     
     echo "<br>";
    $result=mysqli_query($mysqli,"Insert into liblogin(roll,Uname,pass) VALUES('$roll','$Uname','$pass')");
     
}

?>
</body>
</html>
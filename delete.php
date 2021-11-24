<?php
include_once('config.php');
$id=$_GET['roll'];
$result=mysqli_query($mysqli,"Delete from liblogin where roll=$id");

if($result)
{
    header("Location:table1.php");
}
else{
    echo "failed";
}
?>
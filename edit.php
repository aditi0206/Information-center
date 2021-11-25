<?php
include_once("config.php");
$id=$_GET['roll'];
$result=mysqli_query($mysqli,"select* from liblogin order by roll=$id");
while($res=mysqli_fetch_array($result))
{
    $roll=$res['roll'];
    $Uname=$res['Uname'];
    $pass=$res['pass'];
}

?>

 <!DOCTYPE html>
<html>
<head>
    
    <title> </title>
    <style>
        .login {
    padding: 20px;
    background-color:skyblue;
    border-radius: 20px;
    height: 400px;
    width: 400px;
    
    box-shadow: 10px 10px 10px 10px;
    text-shadow: 1px 1px 1px grey;
    margin-top:70px;
    margin-left:35%;
}
 
    </style>
    
</head>
<a href="table1.php" style="border:10px solid brown;border-style:outset;text-shadow: 1px 1px 1px grey;background-color:skyblue;margin-top:15%;padding:5px;font-size:30px;text-decoration:none">Home</a>
<body style="background-color:wheat">
<div class="login">
<form action="" method="POST">
            <fieldset style="padding: 10px;">

                <legend style="font-size:20px;color:black">LOGIN DETAILS</legend>
                <br>
                <b><p style="font-size:20px;color:black">Univ.roll: <input type="number" name="roll" id="roll" placeholder="univ. rollno" value="<?php echo $roll;?>"autocomplete="off"></p>
                    <br></b>
                <b> <p style="font-size:20px;color:black">Username: <input type="text" name="Uname" id="Uname" placeholder="username" value="<?php echo $Uname;?>" autocomplete="off"></p>
                <br></b>
                <b><p style="font-size:20px;color:black">Password: <input type="password" name="pass" id="pass" placeholder="password" value="<?php echo $pass;?>"autocomplete="off"></p>
                <br>
             <input type="hidden" name="id" value=<?php echo $_GET['roll'];?>>
            </b>
                <input type="submit" name="submit" value="Update" style="border:10px solid red;border-style=outset;padding:10px;background-color:violet;color:white;margin-left:130px">
            </fieldset><br>

            <br>
        </form>
</div>
<?php
 if(isset($_POST['submit'])){
    $roll=$_POST['roll'];
    $Uname=$_POST['Uname'];
    $pass=$_POST['pass'];
    
  $result=mysqli_query($mysqli,"update liblogin set roll='$roll',Uname='$Uname',pass='$pass' where roll=$id");
  if($result){
      header( "location:table1.php");
  }
  else{
      echo "Failed";
  }
}


?>
</body>
</html>

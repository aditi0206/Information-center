<?php
$connect = mysqli_connect("localhost","root","","registration");
if(isset($_POST['register'])){
    
    $name = $_POST['name'];
    $roll = $_POST['roll'];
    $date = $_POST['date'];
    $phno = $_POST['phno'];
    $emailid = $_POST['emailid'];
    $pass = $_POST['pass'];
    
    // $register = $_POST['register'];

    $query = "INSERT INTO users(pin,uname,email,phoneno,passwd,surname,gender) VALUES('$name','$roll','$date','$phno','$emailid','$pass')";

    $result = mysqli_query($connect,$query);

    if($result){
        echo "Login successful";

    }else{
        echo "Login not successful";
    }

}
?>
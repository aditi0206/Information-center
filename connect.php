<?php
$connect = mysqli_connect("localhost","root","","registration");
if(isset($_POST['register'])){
    
    $roll = $_POST['roll'];
    $Uname = $_POST['Uname'];
    $pass = $_POST['pass'];
    
    // $register = $_POST['register'];

    $query = "INSERT INTO users(pin,uname,email,phoneno,passwd,surname,gender) VALUES('$roll','$Uname','$pass')";

    $result = mysqli_query($connect,$query);

    if($result){
        echo "Login successful";

    }else{
        echo "Login not successful";
    }

}
?>
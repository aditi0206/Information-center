<?php
$connect = mysqli_connect("localhost","root","","library");
if(isset($_POST['register'])){
    
    echo $roll = $_POST['roll'];
    echo $Uname = $_POST['Uname'];
    echo $pass = $_POST['pass'];
    
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
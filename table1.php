<?php
include_once('config.php');

$result=mysqli_query($mysqli,"select* from liblogin order by roll desc")
?>


<!DOCTYPE html>
<html>
<head>
    
    <title> </title>
    <style>
        table{
            border-collapse:collapse;
            background-color:pink;
        }
    </style>
    
</head>
<a href="index.html">Add more data</a>
<body>
    <table border="2" width="400">
        <th>Univ. Rollno</th>
        <th>Name</th>
        <th>Password</th>
        <th>Update</th>
<?php
 while($res=mysqli_fetch_array($result)){
     echo '<tr>';
     echo '<td>' .$res['roll'].'</td>';
     echo '<td>' .$res['Uname'].'</td>';
     echo '<td>' .$res['pass'].'</td>';
     echo "<td> <a href=\"edit.php?roll=$res[roll]\"><input type='submit' value='Edit'></a>";

     echo '</tr>';
    }
     

?>
</table>
</body>
</html>
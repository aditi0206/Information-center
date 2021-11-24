<?php
include_once('config.php');

$result=mysqli_query($mysqli,"select* from liblogin order by roll asc")
?>


<!DOCTYPE html>
<html>
<head>
    
    <title> </title>
    <style>
        table{
            border-collapse:collapse;
            background-color:lightgreen;
            width:30%;
            height:50%;
            margin-left:35%;
        }
         table td{
             background-color:wheat;
         }
           
    </style>
    
</head>
 
<body style="background-color:lightpink">
    <h1 style="text-align:center;color:blue"><u>USERS LOGIN DETAILS</u></h1>
   
    <table border="2" width="400">
        <tr>
        <th>Univ. Rollno</th>
        <th>Name</th>
        <th>Password</th>
        <th>Insert</th>
        <th>Update</th>
        <th>Remove</th>
         
    </tr>
    <a href="index.html" style="font-size:20px;border:5px solid brown;padding:10px;color:black;background-color:red;margin-left:30px">&leftarrow; Back</a> 
    <a href="index.html" style="font-size:20px;border:5px solid brown;padding:10px;color:black;background-color:red;margin-left:80%">Insert &downarrow;</a>

    
<?php
 while($res=mysqli_fetch_array($result)){
     echo '<tr>';
     echo '<td>' .$res['roll'].'</td>';
     echo '<td>' .$res['Uname'].'</td>';
     echo '<td>' .$res['pass'].'</td>';
     echo "<td> <a href=\"index.html?roll=$res[roll]\"><input type='submit' value='Insert' ></a>";
     echo "<td> <a href=\"edit.php?roll=$res[roll]\"><input type='submit' value='Edit'></a>";
     echo "<td> <a href=\"delete.php?roll=$res[roll]\" onClick=\"return confirm('Are you sure want to delete?')\"><input type='submit' value='Delete'></a></td>";

     echo '</tr>';
    
    }
    

?>
 
 
</table>

</body>
</html>
<?php
$con = mysqli_connect('localhost','root','','assignment_1');

?>
$query = "INSERT INTO student('name','address')  VALUES ('$name','$address')";
$run = mysqli_query($con,$query); 
if($run == TRUE)
{
    echo "Data inserted";
    
}
else 
    echo"Error";
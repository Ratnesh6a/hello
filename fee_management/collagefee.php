<!doctype html>
<html>
    <head><title>
    student_fee</title>
        <style>
        table, tr, td {
    border: 1px solid blue;
            border-collapse: collapse;
}
        </style>
    </head>
    <body>
        <h1><center>Student Registration</center></h1>
        <form name="f1" method="post" action="">
            <table align="center">
              <tr>  <td>Std id:</td>
                  <td><input type="text" name="std_id"></td></tr>
                <tr> <td>Name</td>
                   <td><input type="text"name="name"></td></tr>
                <tr> <td>Cources</td> <td><select name="cources">
    <option value="b-tech">b-tech</option>
    <option value="bca">bca</option>
    <option value="bba">bba</option>
    <option value="poly">poly</option>
  </select></td></tr>
                <tr><td>Father's_name</td>
                    <td><input type="text" name="fname"></td></tr>
                <tr><td>Select gender</td><td> <input type="radio" name="gender" value="male" checked> Male
                    <input type="radio" name="gender" value="female"> Female
                    <input type="radio" name="gender" value="other"> Other</td></tr>
                <tr><td>total fee</td>
                    <td><input type="text" name="fee" value=50000></td></tr>
                
            </table>
            <input type="submit" name="submit" value="submit" />
            
             <input type="submit" name="edit" value="edit" />
        </form>
    </body>
</html>
<?php
if(isset($_POST['submit']))
{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "feeform";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
    else{
        echo "Conection sucessful ";
    }
    mysqli_close($conn);



}
?>
 <?php
if(isset($_POST['submit']))
{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "feeform";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO feeregistration(std_id,name,fathers_name,cources,total,select_gender)
VALUES ('".$_POST['std_id']."','".$_POST['name']."','".$_POST['fname']."','".$_POST['cources']."','".$_POST['fee']."','".$_POST['gender']."')";
    
    
if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Successfully Save')</script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
    //echo $_POST['submit'];
    if(isset($_POST['edit']))
$num=$_POST['name'];
$sql = "UPDATE  feeregistration SET name='".$num."' WHERE std_id='".$_GET['std_id']."'";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Number Successfully update')</script>";
    
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
}
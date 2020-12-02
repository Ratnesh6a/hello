<form method="POST" action="">
<label>Roll no</label><input type="text" name="roll" />
<label>Sname</label><input type="text" name="sname" />
<input type="submit" value="insert" name="submit" />


</form>



<?php
if(isset($_POST['submit']))
{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_management";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO student_registration(Name)
VALUES ('".$_POST['Name']."','".$_POST['Contact_no']."','"$_POST['Fathers_name']."','".$_POST['Password']."','".$_POST['D.O.B']."','".$_POST['E-mail']."',,'".$_POST['Address']."' )

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Successfully Save')</script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
?>

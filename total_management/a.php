<html>
<style>
h1{
    color: blueviolet;
}
</style>
<h1><center>LOGIN PAGE</center></h1>
<body>
<form name="f1" method="POST" action="">
<center>
<table widht="90px" height="150px"; >
<tr>
<td><label>user_id</label></td><td><input type="text" name="userid"></td>
</tr>
<tr>
<td><label>Password</label></td><td><input type="password" name="password"></td>
</tr>
</table>
<input type="submit" name="submit" value="Submit">
    </center>
</form>
</body>
</html>



<?php
if(isset($_POST['submit'])){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login_student";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT *FROM loginform where user_id='".$_POST['userid']."' AND password='".$_POST['password']."'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) 
     {
    
    session_start();
    $_SESSION['user_id']=$_POST['userid']; 
    
     echo"Login Successfully";
    echo"<script>window.location='register.php'</script>";
    }
else
{
echo"Incorrect user id or password";
}


mysqli_close($conn);
}
?>

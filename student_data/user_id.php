<!Doctype html>
<html>
    <head>
    
    </head>
    <body>
        <form name="stud" method="post" action="">
            <label>User_id</label>
            <input type="text" name="user_id" value="Enter your id"><br>
            <label>Password</label>
            <input  type="text" name="password" value="Enter your password"><br>
            <input type="submit" name="login" value="submit"/>
        </form>
    </body>

</html>

 <?php
if(isset($_POST['login']))
{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demo";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO loginform(User,Password)
VALUES ('".$_POST['user_id']."','".$_POST['password']."')";
if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Successfully Save')</script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
?>
    
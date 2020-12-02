<table border="1" width=100%>
<h1><?php echo date("d/m/Y");  ?></h1>
<th>Name</th><th>Contact_no</th><th>fathers_name</th><th>Password</th><th>dob</th><th>email</th><th>address</th>
<?php
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
$sql = "SELECT *FROM student_registration ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo"<tr><td>".$row['Name'];
        echo"<td>".$row['Contact_no'];
        echo"<td>".$row['Fathers_name'];
        echo"<td>".$row['Password'];
        echo"<td>".$row['dob'];      
        echo"<td>".$row['email'];
        echo"<td>".$row['address'];
        </table>
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
</table>
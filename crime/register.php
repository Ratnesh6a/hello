
<!Doctype html>
<html>
<head>
<title>CRIME REGISTRAION
    
    </title>
    <style>
        body{
 background-color: skyblue;
            height: 100;
                background-image: linear-gradient(to bottom right ,skyblue);
            
        }
        </style>
</head>
<body>
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
 $sql= "SELECT *FROM id";
   $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    

    
    ?>
    <form name="f1" method="POST" action="">
        <h1><center>CRIME REGISTRATION FORM</center></h1>
      <table  align="center"> 
          <tr><td>PRISON id</td>
              
    <td><input type="text" value="<?php echo $row['id']; ?>" name= "std_id"/></td></tr>
<tr><td>
    Name</td>
   <td> <input type="text" name= "sname"/></td></tr>
          <tr><td> Family Contact no</td>
   <td> <input type="number" name="contact"/></td></tr>
          <tr><td>OFFENCE COMMITED</td>
    <td><input type="text" name="f-name"/></td></tr>

          <tr><td>D.O.B</td>
<td><input type="date" name="date"/></td></tr>
          <tr><td>E mail</td>
<td><input type="email" name="email"/></td></tr>
          <tr><td>Address</td>
              <td>
        <input type="text" name="addres"/></td></tr>
<td><input type="Reset" value="Reset"/><td>
 <input type="submit" name="submit" value="Submit"/>
    <td><input type="submit" name="logout" value="logout"/>
        </table>
        
    </form>
</body>
</html>
 <?php
 if(isset($_POST['logout'])){

session_start();
$_SESSION['uname']="";
echo"<script>window.location='a.php'</script>";

}



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_management";
    if(isset($_POST['submit'])){
    
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$uid=$_POST['std_id']+1;
$sql = "INSERT INTO student_registration(std_id,Name,Contact_no,Fathers_name,dob,email,address)
VALUES ('".$_POST['std_id']."','".$_POST['sname']."','".$_POST['contact']."','".$_POST['f-name']."','".$_POST['date']."','".$_POST['email']."','".$_POST['addres']."')";
 $sql1 = "UPDATE  id SET id='".$uid."'";
mysqli_query($conn, $sql1);
    
if (mysqli_query($conn, $sql)) {
    
    echo "<script>alert('Successfully Save')</script>";
    
     echo"<script>window.location='show.php'</script>";
}
     else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
    
   

mysqli_close($conn);
}
// fetch database


?>

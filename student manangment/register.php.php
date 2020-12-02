<!Doctype html>
<html>
<head>
<title>STUDENT REGISTRATION FORM
    
    </title>
    <style>
    .a{
    background-color: aqua;
        text-align:center;
        margin left: 20px;
        
    }
        .b
        {
            margin-left: 25px;
            color:blueviolet;
        }
         .c
        {
            margin-left: -5px;
            color:blueviolet;
            margin-top: -15px;
        }
            .d
        {
            margin-left: -25px;
            color:red;
            
        }
        </style>
</head>
<body>
    <div class="a">
    <form name="f1" method="POST" action="">
        <h1><center>STUDENT REGISTRATION FORM </center></h1>
<div class="b"><lable>Name</lable>
    <input type="text" name= "sname"/></div><br>
<div class="c"><lable>Contact no</lable>
    <input type="number" name="contact"/><br></div>
<div class="d"><lable> Father's name</lable>
    <input type="text" name="f-name"/><br></div>
<lable>Password</lable>
<input type="password" name="p-word"/><br>
<lable>D.O.B</lable>
<input type="date" name="date"/><br>
<lable>E mail</lable>
<input type="email" name="email"/><br>
        <label>Address</label>
        <input type="text" name="addres"/><br> 
<input type="Reset" value="Reset"/>
<a href="show.php"> SUBMIT<input type="submit" name="submit" value="Submit"/></a>
        
    </form>
    </div></body>
</html>
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

$sql = "INSERT INTO student_registration(Name,Contact_no,Fathers_name,Password,dob,email,address)
VALUES ('".$_POST['sname']."','".$_POST['contact']."','".$_POST['f-name']."','".$_POST['p-word']."','".$_POST['date']."','".$_POST['email']."','".$_POST['addres']."')";
if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Successfully Save')</script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}

?>

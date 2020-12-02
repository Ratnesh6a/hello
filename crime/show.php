<!Doctype html>
<html>
    <head>

<title>CRIME CONTROL MANAGEMENT</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <!-- w3.css file for using template -->
        <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>
     
        
<script>

// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}

// When the user clicks anywhere outside of the modal, close it
var modal = document.getElementById('ticketModal');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
<body>
    <div class="w3-top">
  <div class="w3-bar w3-blue w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="" class="w3-bar-item w3-button w3-padding-large">Admin</a>
    <a href="user.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">NEW PRISON</a>
    <a href="#tour" class="w3-bar-item w3-button w3-padding-large w3-hide-small">HISORY</a>
    <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hide-small">PUNISHABLE OFFENCE</a>
        </div>
        
    </div>
    <div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="#band" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">NEW PRISON</a>
  <a href="#tour" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">HISORY</a>
  <a href="#contact" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">PUNISHABLE OFFENCE</a>
 
</div>
<div class="container-">
  
  <img class="img-fluid" src="download.jpeg" alt="Chania" width="100%" height="100%"> 
</div>






<table border="1" width=100%>
<h1><?php echo date("d/m/Y");  ?></h1><th>PRISON ID</th>
<th>Name</th><th> FAMILY contact_no</th><th>OFFENCE COMMITED</th><th>dob</th><th>email</th><th>address</th>
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
        
        echo"<tr><td>".$row['std_id'];
         echo"<td>".$row['Name'];
        echo"<td>".$row['Contact_no'];
        echo"<td>".$row['Fathers_name'];
        
        echo"<td>".$row['dob'];      
        echo"<td>".$row['email'];
        echo"<td>".$row['address'];
       
    
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
</table>
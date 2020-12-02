<!Doctye html>
<html>
<head>
    
    <title> DIATM collage website</title>
    <style>
        h3
        {
        
        
            color :green;
                background-color: aqua;
                text-align: center;
        }
                .a
        {
            color:magenta;
             margin-left: 50%;
            margin-top:-8%;
        }
        .b
        {
            margin-left: 80%;
            margin-top: -5%;
        }
      .c
        {
            margin-top: 10%;
        }
  
    </style>
    </head>
    <body>
    <h3>
        <img src="l1.png" >
         &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp;&nbsp; &nbsp;<a href="a.php">logut</a>  &nbsp; &nbsp; <hr>       </h3>
     <img src="l3.png">	<hr>

<div class="a"> For Admission : +91-9434323131, 8001118877,<br>
8348691547, 9593017111<br>
    Mail : admission@rahul.ac.in </div> 
    <div class="b"><img src="l2.png"></div>
        <div class="c"><img src="l4.jpg" width="100%"></div>
   <input type="submit" name="edit" value="edit"/>
    </body>
    
   </html>







<table border="1" width=100%>
<h1><?php echo date("d/m/Y");  ?></h1>
<th>Name</th><th>Contact_no</th><th>fathers_name</th><th>dob</th><th>email</th><th>address</th>
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
        echo"<td><a href=\"a.php\">edit</a>";
    
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
</table>
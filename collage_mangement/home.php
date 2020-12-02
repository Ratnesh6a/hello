<?php
session_start();
if(!isset($_session['username']))
{
header('location :login.php');
}
?>
<!DOCTYPE HTML>
<html>
    <head>
    <title>
        </title>
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    </head>
<body>
    <div class="container">
    
<h2 class="text-center text-success">WELCOME <?php echo $_SESSION['username']; ?></h2>
        <a href="logout.php">LOGOUT</a>
    </div>
    
    </body>






</html>
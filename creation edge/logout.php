<?php 
session_start();
$_SESSION['user_sess_id']=null;
$_SESSION['user_sess_name']=null;
session_unset(); 
session_destroy(); 
header("Location: index.php");
exit();

?>
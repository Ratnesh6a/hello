<?php
session_start();
include("../connections.php");
$user_id=$_SESSION["user_sess_id"];
$name=$_SESSION["user_sess_name"];
$url=$_POST["url"];
$category=$_SESSION["user_sess_category"];
$sql="INSERT INTO `post`(`user_id`,`url`,`name`,`category`) VALUES ('$user_id','$url','$name','$category')";
$result=mysqli_query($con1,$sql);
if(!$result){
	die(mysqli_error($con1));
}	
header("Location: ../index.php");
exit();
?>
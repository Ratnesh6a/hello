<?php
session_start();
include("../connections.php");
$name=$_POST["name"];
$email=$_POST["email"];
$password=$_POST["password"];
$category=$_POST["category"];
$post_week=$_POST["post_week"];
$sql="INSERT INTO `user`(`name`,`email`,`password`,`category`,`flag1`) VALUES ('$name','$email','$password','$category','$post_week')";
$result=mysqli_query($con1,$sql);
if(!$result){
	die(mysqli_error($con1));
}	
header("Location: ../index.php");
exit();

?>
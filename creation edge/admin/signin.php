<?php
session_start();
include("../connections.php");
$name=$_POST["name"];
$password=$_POST["password"];
if(($name=="gaurav") && ($password=="gaurav@123")){
	header("Location: dashboard.php");
	exit();
}else{
	header("Location: index.php");
	exit();
}

?>
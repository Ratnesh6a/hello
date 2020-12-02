<?php
session_start();
include("../connections.php");
$email=$_POST["email"];
$password=$_POST["password"];
$sql="SELECT * FROM `user` WHERE `email` = '$email' AND `password` = '$password'";
$result=mysqli_query($con1,$sql);
if(!$result){
	die(mysqli_error($con1));
}else{	
	if(mysqli_num_rows($result)>0){
		while($row=mysqli_fetch_assoc($result)){
			$_SESSION["user_sess_id"] = $row["id"];
			$_SESSION["user_sess_name"] = $row["name"];
			$_SESSION["user_sess_category"] = $row["category"];
		}
	}else if(mysqli_num_rows($result)==0){
		header("Location: ../signin.php?status=incorrect");
		exit();
	}
}

//echo $_SESSION["user_sess_name"];
header("Location: ../index.php");
exit();

?>
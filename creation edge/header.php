<?php
session_start();
include "connections.php";
$user_exist = 0;
if(!empty($_SESSION['user_sess_id'])){
  $user_exist = 1;
  $user_id = $_SESSION['user_sess_id'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Creation Edges</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
  <style>
  body{
    background-color:#f9f9f9;
  }
  .navbar {
      margin-bottom: 0;
      background-color: #000000;
      z-index: 1000;
      border: 0;
      font-size: 15px !important;
      line-height: 1.42857143 !important;
      border-radius: 0;
   }
   .navbar li a, .navbar .navbar-brand {
      color: #ffffff !important;
   }
   .navbar-nav li a:hover, .navbar-nav li.active a {
      color: #000000 !important;
      background-color: #fff !important;
   }
   .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #fff !important;
  }
  .post_btn{
    background-color: #3385ff; /* Blue-Green */
    border: none;
    color: white;
    padding: 5px 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 12px;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 2px;
    border: 1px solid #3385ff;
  }
  </style>
</head>
<body>

<!--navigation bar-->
<nav class="navbar navbar-default navbar-fixed-top" id="navi_bar">
  <div class="container-fluid">
    <div class="navbar-header">
   <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php"><font face="Open Sans">Creation Edges</font></a>
    </div>
  
  <?php if($user_exist==1){?>
  <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav navbar-right">
      <li><a href="index.php?cat=fashion"><font face="Open Sans">Fashion</font></a></li>
      <li><a href="index.php?cat=travel"><font face="Open Sans">Travel</font></a></li>
      <li><a href="index.php?cat=photography"><font face="Open Sans">Art & Photography</font></a></li>
  
      <li><a href="me.php"><font face="Open Sans"><?php echo $_SESSION['user_sess_name'];?></font></a></li>
      <li><a href="logout.php"><font face="Open Sans">Log out</font></a></li>
    </ul>
  </div>
  <?php }else{?>
  <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav navbar-right">
      <li><a href="index.php?cat=fashion"><font face="Open Sans">Fashion</font></a></li>
      <li><a href="index.php?cat=travel"><font face="Open Sans">Travel</font></a></li>
      <li><a href="index.php?cat=photography"><font face="Open Sans">Art & Photography</font></a></li>
      <li><a href="signin.php"><font face="Open Sans">Sign In</font></a></li>
    </ul>
  </div>
  <?php }?>

  </div>

</nav>



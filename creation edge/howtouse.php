<?php 
include("header.php");
include("connections.php");

//user array
$users=array();
$sql2="SELECT * FROM `user`";
$result2=mysqli_query($con1,$sql2);
while($row2=mysqli_fetch_assoc($result2)){
  array_push($users,$row2);

}
///

?>

<style>
#desc{
	font-size: 24px;
display:block;
    list-style-type: disc;

}



.about{
    margin-top: 20px;

}
</style>

<div class="container-fluid" style="margin-top: 90px;">
  
  <div class="row">
    
    <div class="col-sm-2" style="background-color:#f9f9f9;">
    <!-- Side Margin-->
    </div>

	<div class="col-sm-8" style="background-color:#f9f9f9;">
    <!-- Side Margin-->
    <h1 align="center">How to Use</h1>
    <ul id="desc"><li class="about"> IF you are new to crationedges.in you will find a signup bottom on top right of the page.</li>
<li class="about">Fill the asked detail in the signup form and hit the sign up bottom. Now you are the part of our “creationedges.in”</li>
<li class="about">For posting your daily blog sign in to “creationedges.in” click on your name displayed in menu bar at top right. Paste your each blog url and hit post and you are ready to go.</li>

    
    </ul>
    </div>


	<div class="col-sm-2" style="background-color:#f9f9f9;">
    <!-- Side Margin-->
    </div>

</div>
</div>
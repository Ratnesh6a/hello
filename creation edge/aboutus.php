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
}

</style>

<div class="container-fluid" style="margin-top: 90px;">
  
  <div class="row">
    
    <div class="col-sm-2" style="background-color:#f9f9f9;">
    <!-- Side Margin-->
    </div>

	<div class="col-sm-8" style="background-color:#f9f9f9;">
    <!-- Side Margin-->
    <h1 align="center">About Us</h1>
    <p id="desc">Once in your life time you must have made a website to write a blog to share your passion for travelling, fashion and many more to the people around you. But due to less networking skill you may not finding regular engagement for your blog.it may discourage you to write a blog hence you may quit writing the blog.
So creation edges is here to help you out. We are building a new ecosystem for a blogger to share and explore blogs all over the world. 

    
    </p>
    </div>


	<div class="col-sm-2" style="background-color:#f9f9f9;">
    <!-- Side Margin-->
    </div>

</div>
</div>
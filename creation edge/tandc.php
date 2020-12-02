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
    <h1 align="center">Terms and Conditions</h1>
    <p><ul id="desc"><li class="about">We do not guarantee any specific position in search engine results for your website. We perform basic search engine optimisation according to current best practice.</li>
<li class="about">Always Post your blog according to your chosen category. If your post is irrelevant, we have the right to delete that post with a prior notice sent to you.</li>  
<li class="about">We do not guarantee to rapid engagement on your blogwebsite its completely on your amount of blog post.</li>
    </ul>
    </p>
    </div>


	<div class="col-sm-2" style="background-color:#f9f9f9;">
    <!-- Side Margin-->
    </div>

</div>
</div>
<?php 
include("header.php");
include("connections.php");
?>

<style>
.sign{
	width:100%;
	float:left;
	text-align:center;
	padding:20px 50px;
	position:static;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	margin-bottom: 10px;
	margin-top: 100px;
	border:1px solid white;
	border-radius: 5px;
	  background-color: white;

}
</style>


<!--body-->
<div class="container-fluid">
  <div class="row">
    
    <div class="col-sm-4" style="background-color:#f9f9f9;">
    </div>
   
   	<div class="col-sm-4" style="background-color:#f9f9f9;">
    
    <div class="sign" style="border:none;">

    	<div><img src="logo_3.png" width="100px"></div>
    	<br>
    	<form class="form-horizontal" method="post" action="post/signin_post.php">
    		
        <?php if(@$_GET["status"]=="incorrect"){?>
        <div class="form-group" style="color:red">
        The Email or password you entered is incorrect.
        </div>
        <?php }?>

        <div class="form-group">
      			<input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    		</div>
    		<div class="form-group">
       			 <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
    		</div>
    		<br>
    		<div class="form-group">        
      			<div class="">
        			<button type="submit" class="btn btn-success">Sign IN</button>
      			</div>
    		</div>
  		</form>

  		
  		<button class="btn btn-primary" onclick="redirect()" >SignUp</button>


  		<script>
  			function redirect(){
  				window.location.href = "signup.php";
  			}
  		</script>


    </div>
  	
  	</div>

  	<div class="col-sm-4" style="background-color:#f9f9f9;">
    </div>
   

  </div>
</div><br>



  
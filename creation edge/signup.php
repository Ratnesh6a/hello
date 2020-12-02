<?php 
include("header.php");
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
    	<form class="form-horizontal" method="post" action="post/signup_post.php">
    		
        <div class="form-group">
            <input type="text" class="form-control" id="name" placeholder="Name" name="name">
        </div>
        
        <div class="form-group">
      			<input type="email" class="form-control" id="email" placeholder="Email" name="email">
    		</div>
    		
        <div class="form-group">
       			 <input type="password" class="form-control" id="pwd" placeholder="Password" name="password">
    		</div>
    		
        <div class="form-group">
        <select class="form-control" name="category">
        <option value="NULL">Choose Category</option>
        <option value="fashion">Fashion</option>
        <option value="photography">Art & Photography</option>
        <option value="travel">Travel</option>
        </select>
        </div>

        <div class="form-group">
             <input type="number" class="form-control" id="post_week" placeholder="Posts per week" name="post_week">
        </div>

        <br>
    		<div class="form-group">        
      			<div class="">
        			<button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Sign Up</button>
      			</div>
    		</div>
  		</form>


    </div>
  	
  	</div>

  	<div class="col-sm-4" style="background-color:#f9f9f9;">
    </div>
   

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog" style="z-index:9999">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-body">
          <p>Welcome to Creation Edges.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>




  </div>
</div><br>

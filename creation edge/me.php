<?php 
include("header.php");


<style>
.self{
  width:100%;
  float:left;
  text-align:center;
  padding:5px 50px;
  position:static;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-bottom: 10px;
  margin-top: 100px;
  border:1px solid white;
  border-radius: 5px;
}
</style>

<!--body-->
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-2" style="background-color:#f9f9f9;">
    <!-- Side Margin-->
    </div>
   
  <div class="col-sm-8" style="background-color:#f9f9f9;">
    <div class="self">
      <h3>Post your Blog</h3>
      <br>
      <form class="form-horizontal" method="post" action="post/blog_post.php">
        <div class="form-group">
            <input type="text" class="form-control" id="url" placeholder="Enter URL" name="url">
        </div>
        <div class="form-group">        
              <button type="submit" class="btn btn-success">Post</button>
        </div>
      </form>
    </div>
  </div>

  <div class="col-sm-2" style="background-color:#f9f9f9;">
    <!-- Side Margin-->
    </div>

  </div>
</div><br>
    ?>


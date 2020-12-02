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

$num = @$_GET["num"];

?>

<style>
.post{
  width:100%;
  text-align:center;
  padding:5px 5px;
  position:relative;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);*/
  border:1px solid white;
  border-radius: 5px;
  background-color: white;
  margin:auto;
  display: block;
}


.bottom-left {
    position: absolute;
    bottom: 8px;
    left: 26px;
    color:#ffffff;
}

* {
    box-sizing: border-box;
}



</style>

<!--body-->





<div class="container-fluid" style="margin-top: 80px;">
    <div class="row">
    
      <div class="col-sm-1" style="background-color:#f9f9f9;">
      <!-- Side Margin-->
      </div>
   
      <div class="col-sm-10" id="abc" style="background-color:#f9f9f9;text-align: center">
    
    <?php 

$sql="SELECT * FROM `post` WHERE `id`='$num' ORDER BY `id` DESC";

  $result=mysqli_query($con1,$sql);
  if(!$result){
    die(mysqli_error($con1));
  }else{

   if(mysqli_num_rows($result)!=0){   
    while($row=mysqli_fetch_assoc($result)){
      $row["id"];
      $row["user_id"];
      $url=$row["url"];
      $name=$row["name"];
      $thumb=$row["thumb"];
      $title=$row["title"];

  foreach($users as $check_array_3){
    if($check_array_3["id"]==$row["user_id"]){
      $email=$check_array_3["email"];
      $image=$check_array_3["profile"];   
    }
  }    


?>

<div class="post">
<iframe width="100%" height="600px" frameBorder="0" src="<?php echo $url?>"></iframe>
</div>




<?php
    }

  }else{
    echo "<h1>No recent Post</h1>";
  }



}

?>
    

  </div>

  <div class="col-sm-1" style="background-color:#f9f9f9;">
    <!-- Side Margin-->
  </div>

  </div>
</div>






<script>

$(document).ready(function(){
  $("#employee_data").DataTable();
});

$('table').dataTable({searching: false,lengthChange: false});

</script>




</body>






<br><br><br><br>


 <!--Footer-->
      <footer class="page-footer font-small stylish-color-dark pt-4 mt-4">
      
          <!--Footer Links-->
          <div class="container text-center text-md-left">
      
              <!-- Footer links -->
              <div class="row text-center text-md-left mt-3 pb-3">
      
                  <!--First column-->
                  <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                      <h6 class="text-uppercase mb-4 font-weight-bold">Creation Edges</h6>
                      <p> We warmly welcome you to india's first online blogging community.Best place for blog lover.Read intresting blog or share your own blog to show to world.Follow your passion we are here for you.</p>
                  </div>
                  <!--/.First column-->
      
                
                  <!--/.Second column-->
      
                  <hr class="w-100 clearfix d-md-none">
      
                  <!--Third column-->
                  <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                      <h6 class="text-uppercase mb-4 font-weight-bold">Useful links</h6>
                      <p><a href="aboutus.php">About Us</a></p>
                      <p><a href="howtouse.php">How to use</a></p>
                      <p><a href="tandc.php">Terms and Conditions</a></p>
                      <p><a href="privacy.php">Privacy</a></p>
                  </div>
                  <!--/.Third column-->
      
                  <hr class="w-100 clearfix d-md-none">
      
                  <!--Fourth column-->
                  <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                      <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                      <p><i class="fa fa-home mr-3"></i> Wisdom campus,usmanpur,New Delhi</p>
                      <p><i class="fa fa-envelope mr-3"></i> creationedges@gmail.com</p>
                      <p><i class="fa fa-phone mr-3"></i> + 91 9711543436</p>
                      <p><i class="fa fa-print mr-3"></i> </p>
                  </div>
                  <!--/.Fourth column-->
      
              </div>
              <!-- Footer links -->
      
              <hr>
      
              <div class="row py-3 d-flex align-items-center">
      
                  <!--Grid column-->
                  <div class="col-md-8 col-lg-8">
      
                      <!--Copyright-->
                      <p class="text-center text-md-left grey-text">© 2018 Copyright: <a href="index.php"><strong> CreationEdges.in</strong></a></p>
                      <!--/.Copyright-->
      
                  </div>
                  <!--Grid column-->
      
                  <!--Grid column-->
                  <div class="col-md-4 col-lg-4 ml-lg-0">
      
                      <!--Social buttons-->
                      <div class="text-center text-md-right">
                          <ul class="list-unstyled list-inline">
                              <li class="list-inline-item"><a class="btn-floating btn-sm rgba-white-slight mx-1"><i class="fa fa-facebook"></i></a></li>
                              <li class="list-inline-item"><a class="btn-floating btn-sm rgba-white-slight mx-1"><i class="fa fa-twitter"></i></a></li>
                              <li class="list-inline-item"><a class="btn-floating btn-sm rgba-white-slight mx-1"><i class="fa fa-instagram"></i></a></li>
                              <li class="list-inline-item"><a class="btn-floating btn-sm rgba-white-slight mx-1"><i class="fa fa-youtube"></i></a></li>
                          </ul>
                      </div>
                      <!--/.Social buttons-->
      
                  </div>
                  <!--Grid column-->
      
              </div>
      
          </div>
      
      </footer>
      <!--/.Footer-->







</html> 
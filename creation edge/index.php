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
.post{
  width:30%;
  float:left;
  text-align:center;
  padding:10px 10px;
  position:relative;
  /*box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);*/
  border:10px solid #f9f9f9;
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

/* Create four equal columns that floats next to each other */
.post {
    float: left;
    width: 25%;
    padding: 20px;
}

/* Clear floats after the columns */
#abc:after {
    content: "";
    display: table;
    clear: both;
}

/* On screens that are 992px wide or less, go from four columns to two columns */



@media screen and (max-width: 992px) {
    .post {
        width: 50%;
    }
}

/* On screens that are 600px wide or less, make the columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
    .post {
        width: 100%;
    }
}


</style>

<!--body-->

<!--carousel-->




  <div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-top:40px">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="NFW.jpg" alt="" style="width:100%;">
        <div class="carousel-caption">
          <h3><b><font color="white">2018 Trends</font></b></h3>
          <p></p>
        </div>
      </div>

      <div class="item">
        <img src="blog1.jpg" alt="" style="width:100%;">
        <div class="carousel-caption">
          <h3>Growing together</b></h3>
          <p></p>
        </div>
      </div>
    
      <div class="item">
        <img src="promo.jpg" alt="" style="width:100%;">
        <div class="carousel-caption">
          <h3></h3>
          <p></p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide= "prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>




<div class="container-fluid" style="margin-top: 30px;">
  <div class="row">
    <div class="col-sm-1" style="background-color:#f9f9f9;">
    <!-- Side Margin-->
    </div>
   
  <div class="col-sm-10" style="background-color:#f9f9f9;">



<div class="container-fluid" style="margin-top: 100px;">
    <div class="row">
    
      <div class="col-sm-1" style="background-color:#f9f9f9;">
      <!-- Side Margin-->
      </div>
   
      <div class="col-sm-10" id="abc" style="background-color:#f9f9f9;text-align: center">
    
      <table id="employee_data" width="100%" class="table table-striped table_bodered">
        <thead>
          <tr>
            <td></td>
          </tr>
        </thead>
 
 <tr>

            <td>
          

  
<?php 

  if(@$_GET["cat"]=='fashion'){
    $sql="SELECT * FROM `post` WHERE `category`='fashion' ORDER BY `id` DESC";
  }else if(@$_GET["cat"]=='travel'){
    $sql="SELECT * FROM `post` WHERE `category`='travel' ORDER BY `id` DESC";
  }else if(@$_GET["cat"]=='photography'){
    $sql="SELECT * FROM `post` WHERE `category`='photography' ORDER BY `id` DESC";
  }else{
    $sql="SELECT * FROM `post` ORDER BY `id` DESC";
  }

  $result=mysqli_query($con1,$sql);
  if(!$result){
    die(mysqli_error($con1));
  }else{

   if(mysqli_num_rows($result)!=0){   
    while($row=mysqli_fetch_assoc($result)){
      $id=$row["id"];
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


              <a href="<?php echo 'blog.php?num='.$id?>">
              <div class="post">
                <span style="float:left;margin-bottom: 10px;">
                  
                  <table>
                    <tr>
                      <td width="10%">
                       <img src="<?php echo "profile/".$image;?>" width="100%">
                      </td>
                      <td style="padding-left: 4%;float:left">
                        <h5 style="font-size: 100%"><?php echo $name;?> | <?php $small = substr($title, 0, 15); 
                                                                                if(strlen($small) > 14){ 
                                                                                  echo $small." ...";
                                                                                }else{ 
                                                                                  echo $small;
                                                                                }?></h5>
                      </td>
                    </tr>
                  </table>
                
                </span>
                
                <img  src="<?php echo $thumb;?>"  width="100%"  style="border:none">
              </div> 
	</a>





<?php
    }

  }else{
    echo "<h1>No recent Post</h1>";
  }



}

?>
    
                </td>
        
          </tr>

    
</table>

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

<right><script id="mNCC" language="javascript">
    medianet_width = "300";
    medianet_height = "250";
    medianet_crid = "238093882";
    medianet_versionId = "3111299"; 
  </script>
<script src="//contextual.media.net/nmedianet.js?cid=8CUD444EI"></script></right>


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
                      <p>We warmly welcome you to india's first online blogging community.Best place for blog lover.Read intresting blog or share your own blog to show to world.Follow your passion we are here for you.</p>
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
                      <p><i class="fa fa-home mr-3"></i> Wisdom pg,usmanpur,New Delhi</p>
                      <p><i class="fa fa-envelope mr-3"></i> creationedges@gmail.com</p>
                      <p><i class="fa fa-phone mr-3"></i> +91 9711543436 </p>
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
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
  width:100%;
  float:left;
  text-align:center;
  padding:20px 50px;
  position:static;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-bottom: 30px;
  border:1px solid white;
  border-radius: 5px;
  background-color: white;
}
.bottom-left {
    position: absolute;
    bottom: 8px;
    left: 26px;
    color:#ffffff;
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
        <img src="fashion.jpg" alt="Los Angeles" style="width:100%;">
        <div class="carousel-caption">
          <h3>new delhi</h3>
          <p>delhi is always so much fun!</p>
        </div>
      </div>

      <div class="item">
        <img src="fashion.jpg" alt="Chicago" style="width:100%;">
        <div class="carousel-caption">
          <h3>Chicago</h3>
          <p>Thank you, Chicago!</p>
        </div>
      </div>
    
      <div class="item">
        <img src="fashion.jpg" alt="New York" style="width:100%;">
        <div class="carousel-caption">
          <h3>New York</h3>
          <p>We love the Big Apple!</p>
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
      $row["id"];
      $row["user_id"];
      $url=$row["url"];
      $name=$row["name"];

  foreach($users as $check_array_3){
    if($check_array_3["id"]==$row["user_id"]){
      $email=$check_array_3["email"];
      $image=$check_array_3["profile"];   
    }
  }    


?>
   
  <div class="post">
    <span style="float:left;margin-bottom: 20px;">
      <table>
        <tr>
          <td>
            <img src="<?php echo "profile/".$image;?>" width="40px">
          </td>
          <td style="padding-left: 10px;">
            <h5><b><?php echo $name;?></b></h5>
          </td>
          </tr>
    </table>

    </span>
    <iframe height="600px" width="100%" src="<?php echo $url;?>" name="iframe_a" style="border:none"></iframe>
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
</div><br>
  
</body>
</html> 
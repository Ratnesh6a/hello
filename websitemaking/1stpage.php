  <!DOCTYPE html>
<html lang="en">
<head>
    <style>
.container-fluid {
    
    text-align: left;
    color: white;
}
        .image{
            width:100%;
        }
        .a1 {
    background-color: blue;
    text-align: left;
    color: white;
            width: 100%;
}
      th,td
        {
            border: 15px white;
  border-collapse: collapse; 
        }
</style>
  <title>Bootstrap 4 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
<body>


    <table border="0" class="a1">
        <tr>
            <td><image src="logo1.png" height="40px" align="right"></image></td>
            <td><a href="www.google.com"><input type="text" placeholder="brands and products" style="width:550px;"></a></td>
         <td>login & signup</td>
            <td>More</td>
            <td color="white"><image src="cart.jpg" height="20px" width="40px"></image>Cart</td>
        </tr>
    </table>
    <div class="row" height="55px" style="margin-top:10px; margin-bottom: 10px; margin-left:10px;">
        <!--  data-toogle="dropdown" is used to to insert dropdown
where as class dropdwn-item is use to add effect in dropdown menu is used to show menu

-->
        
        
      <div class="col-sm dropdown-toggle" data-toggle="dropdown">   Electronics</div>
        <div class="dropdown-menu">
    <a class="dropdown-item" href="#" >Link 1</a>
    <a class="dropdown-item" href="#">Link 2</a>
    <a class="dropdown-item" href="#">Link 3</a>
  </div>
      <div class="col-sm dropdown-toggle" data-toggle="dropdown" >Tv & application</div>
          <div class="dropdown-menu">
    <a class="dropdown-item" href="#">Link 1</a>
    <a class="dropdown-item" href="#">Link 2</a>
    <a class="dropdown-item" href="#">Link 3</a>
  </div>
      <div class="col-sm dropdown-toggle" data-toggle="dropdown" style="margin-left:20px" >Men</div>
          <div class="dropdown-menu">
    <a class="dropdown-item" href="#">Link 1</a>
    <a class="dropdown-item" href="#">Link 2</a>
    <a class="dropdown-item" href="#">Link 3</a>
  </div>
      <div class="col-sm dropdown-toggle"  data-toggle="dropdown" style="margin-right:20px">Woman</div>
          <div class="dropdown-menu">
    <a class="dropdown-item" href="#">Link 1</a>
    <a class="dropdown-item" href="#">Link 2</a>
    <a class="dropdown-item" href="#">Link 3</a>
  </div>
         <div class="col-sm dropdown-toggle" data-toggle="dropdown">Kids</div>
          <div class="dropdown-menu">
    <a class="dropdown-item" href="#">Link 1</a>
    <a class="dropdown-item" href="#">Link 2</a>
    <a class="dropdown-item" href="#">Link 3</a>
  </div>
      <div class="col-sm dropdown-toggle" data-toggle="dropdown" >Flight</div>
          <div class="dropdown-menu">
    <a class="dropdown-item" href="#">Link 1</a>
    <a class="dropdown-item" href="#">Link 2</a>
    <a class="dropdown-item" href="#">Link 3</a>
  </div>
      <div class="col-sm dropdown-toggle" data-toggle="dropdown" >Baby</div>
          <div class="dropdown-menu">
    <a class="dropdown-item" href="#">Link 1</a>
    <a class="dropdown-item" href="#">Link 2</a>
    <a class="dropdown-item" href="#">Link 3</a>
  </div>
      <div class="col-sm dropdown-toggle" data-toggle="dropdown">Home Furniture</div>
          <div class="dropdown-menu">
    <a class="dropdown-item" href="#">Link 1</a>
    <a class="dropdown-item" href="#">Link 2</a>
    <a class="dropdown-item" href="#">Link 3</a>
  </div>
         <div class="col dropdown-toggle" data-toggle="dropdown">Sports and Books</div>
          <div class="dropdown-menu">
    <a class="dropdown-item" href="#">Link 1</a>
    <a class="dropdown-item" href="#">Link 2</a>
    <a class="dropdown-item" href="#">Link 3</a>
  </div>
    </div>
      <!--  Carousel to slide show a image-->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <!--  Carousel indicators-->
            <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
            <!--till here next is carousel body -->
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="img1.jpg" class="d-block" style="height:400px; width:100%;" >
    </div>
    <div class="carousel-item ">
      <img src="image2.jpg" class="d-block" style="height:400px; width:100%;" >
    </div>
    <div class="carousel-item">
     <img src="img3.jpg" class="d-block" style="height:400px; width:100%;" >
    </div>
  </div>
             <!--  Carousel id controls
-->
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    <br>
    <div class="col-sm" style="border-bottom-style: solid; margin-left:20px; 
         margin-bottom: 10px;font-size: 30px;"><span><strong>Buildings</strong></span></div>
    <br>
    
    <table border="0" width="100%" style="margin-left:20px;">
        <tr>
            <td><image src="l4.jpg" width="90%" ></image></td>
            <td><image src="l4.jpg" width="90%"></image></td>
            <td><image src="l4.jpg"  width="90%" ></image></td>
            <td><image src="l4.jpg"  width="90%"></image></td>
        </tr>
             <tr>
                 <td align="center"> Price:599</td>
                        <td align="center"> Price:799</td>
            <td align="center"> Price:899</td>
            <td align="center"> Price:999</td>
        </tr>
        
       
    </table>
    <div class="col-sm" style="border-bottom-style: solid; margin-left:20px; 
         margin-bottom: 10px;font-size: 30px;"><span><strong>Bags</strong></span></div>
    <br>
        

    <table>
    <tr>
        
        <td><image src="bag1.png" width="100%" height="250px;"></image></td>
        <td><image src="bag1.png" width="100%" height="250px;"></image></td>
        <td><image src="bag1.png" width="100%" height="250px;"></image></td>
        <td><image src="bag1.png" width="100%;" height="250px;"></image></td>   
        </tr>
        <tr>
                 <td align="center"> Price:599</td>
                        <td align="center"> Price:799</td>
            <td align="center"> Price:899</td>
            <td align="center"> Price:999</td>
        </tr>
    </table>
    <table>
    <tr>
        
        <td><image src="bag2.png" width="100%" height="250px;"></image></td>
        <td><image src="bag2.png" width="100%" height="250px;"></image></td>
        <td><image src="bag2.png" width="100%" height="250px;"></image></td>
        <td><image src="bag2.png" width="100%;" height="250px;"></image></td>   
        </tr>
        <tr>
                 <td align="center"> Price:599</td>
                        <td align="center"> Price:799</td>
            <td align="center"> Price:899</td>
            <td align="center"> Price:999</td>
        </tr>
    </table>
    <div class="col-sm" style=" margin-left:20px; 
         margin-bottom: 10px;font-size: 30px;"><span><strong>Earphones</strong></span></div>
     <table>
    <tr>
        
        <td><image src="earphone2.png" width="100%" height="250px;"></image></td>
        <td><image src="earphone2.png" width="100%" height="250px;"></image></td>
        <td><image src="earphone2.png" width="100%" height="250px;"></image></td>
        <td><image src="earphone2.png" width="100%;" height="250px;"></image></td>   
        </tr>
        <tr>
                 <td align="center"> Price:599</td>
                        <td align="center"> Price:799</td>
            <td align="center"> Price:899</td>
            <td align="center"> Price:999</td>
        </tr>
    </table> 
    
    
    <table>
    <tr>
        
        <td><image src="earphone1.png" width="100%" height="250px;"></image></td>
        <td><image src="earphone1.png" width="100%" height="250px;"></image></td>
        <td><image src="earphone1.png" width="100%" height="250px;"></image></td>
        <td><image src="earphone1.png" width="100%;" height="250px;" ></image></td>   
        </tr>
        <tr>
                 <td align="center"> Price:599</td>
                        <td align="center"> Price:799</td>
            <td align="center"> Price:899</td>
            <td align="center"> Price:999</td>
        </tr>
    </table>
    
</body>
</html>
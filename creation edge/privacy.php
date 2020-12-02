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
    
    <div class="col-sm-1" style="background-color:#f9f9f9;">
    <!-- Side Margin-->
    </div>

	<div class="col-sm-10" style="background-color:#f9f9f9;">
    <!-- Side Margin-->
    <h1 align="center">Privacy</h1>
    <p id="desc"> What Information Do We Collect?<br>

(a) Personal Information – Personal information is any information that is considered personally identifiable, like your name, email address, phone number, mailing address or payment information, that allows us to identify or contact you. When you create an account with us, edit or update your account information, upload images or other content to our Site, or order or use any of our products or services, we may collect personal information.

We collect additional personal information when volunteered by you, such as information provided in surveys, blog comments, and emails.<br>

You can choose not to provide personal information to us. However, if you do not provide such information, you may not be able to make a purchase or create an account, so your ability to use the Site will be limited.<br>

(b) Uploaded Images & Content –<br> We may collect additional information that you submit to the Site when designing a mailer or other packaging, including text, photographs and other images. We may collect technical information about those photographs and images (such as the file size and aspect ratio).<br>
General Use of Personal Information – <br> We use your personal information for the purpose that it was collected and for other purposes described in this Privacy Policy. For example, we may use personal information to fulfill your requests for products and services, to process payments, to improve our services, to customize the content you see, to contact you, and for business/administrative and marketing/promotional purposes.

 We may store photographs, images and other content uploaded or submitted to the Site - and information about any such photographs and images - in order to provide products and services, improve our products and services, garner insights and information about our users, and to fulfill orders. Our printing and assembly process requires human involvement, so greetabl employees and vendors will see your photographs, images and other content that you submit to the Site. We do not otherwise use the photographs, images or content in a manner that would identify you personally.<br>

(c) Usage Information –<br> We may use usage information in order to analyze trends, generally learn about usage of the Site, help us run and maintain our Site, and provide a better, more customized experience.<br>

Changes/Updates to the Privacy Policy<br>

We reserve the right to revise this policy at any time. When we do, we will give you notice of the revised Privacy Policy by posting the revised Privacy Policy on the Site and by revising the “effective date” at the top of this Privacy Policy. You are responsible for regularly reviewing the current privacy policy.
  
    </p>
    </div>


	<div class="col-sm-1" style="background-color:#f9f9f9;">
    <!-- Side Margin-->
    </div>

</div>
</div>
<?php 
echo "Hello World";


?>

<body>
<form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="text" name="quote" id="quote">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>
</body>
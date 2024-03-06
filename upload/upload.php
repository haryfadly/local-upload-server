<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title></title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <a href="#" class="navbar-brand page-scroll">Hi!</a>
        </div>
        

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#" class="page-scroll">About</a></li>
            <li><a href="/upload" class="page-scroll">Upload</a></li>
            <li><a href="/download" class="page-scroll">Download</a></li>
          </ul>
        </div>

      </div>
    </nav>
    <!-- akhir navbar -->

    <!-- jumbotron -->
    <div class="jumbotron text-center">
      <img src="../img/meow.jpg" class="img-circle">
      <h1>Server</h1>
      <p>Lorem | Ipsum</p>
    </div>
    <!-- akhir jumbotron -->

    <div class="container">
        <!-- <form action="upload.php" method="post" enctype="multipart/form-data">
            Select image to upload:
            <input type="file" class="btn btn-secondary"name="fileToUpload" id="fileToUpload">
            <br>
            <input type="submit" class="btn btn-success" value="Upload Image" name="submit">
        </form> -->
    



<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
// $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
// if(isset($_POST["submit"])) {
//   $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
//   if($check !== false) {
//     echo "File is an image - " . $check["mime"] . ".<br>";
//     $uploadOk = 1;
//   } else {
//     echo "File is not an image.<br>";
//     $uploadOk = 0;
//   }
// }

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists. <br>";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] < 1) {
  echo "Your file is empty. <br>";
  $uploadOk = 0;
}

// Allow certain file formats
// if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
// && $imageFileType != "gif" ) {
//   echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
//   $uploadOk = 0;
// }

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Your file was not uploaded. <br>";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded. <br>";
  } else {
    echo "There was an error uploading your file. <br>";
  }
}

?>


<div style="padding: 10px 10px 40px 10px;"><a href="http://localhost/">Back to </a><a href="http://localhost/">Localhost</a></div>


</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../js/jquery-3.1.1.min.js"></script>
    <script src="../js/jquery.easing.1.3.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>

   <script src="../js/script.js"></script>
</body>
</html>
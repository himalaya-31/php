<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Upload Video</title>
  </head>
  <body>
    <a href="videos.php">videos</a>
    <form class="" action="index.php" method="post" enctype="multipart/form-data">
      <input type="file" name="file" value="">
      <input type="submit" name="submit" value="Upload!">
    </form>
  </body>
</html>

<?php
require 'connect.php';

if(isset($_POST['submit'])){
  $name = $_FILES['file']['name'];
  $temp = $_FILES['file']['tmp_name'];

  move_uploaded_file($temp, 'uploaded/'.$name);
  $url = "http://localhost:8080/php/videos/uploaded/$name";
  $query = "INSERT INTO video values('', '$name', '$url')";
  if($query_run = $db->query($query)){
      echo "<br>$name has been uploaded";
  }
  else {
    echo '<br>Something Wrong';
  }
}
?>

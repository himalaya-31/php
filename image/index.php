

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="index.php" method="post" enctype="multipart/form-data">
      <input type="file" name="myFile" value="Choose File" multiple><br><br>
      <input type="submit" name="upload" value="Upload Image">
    </form>

<?php
include 'connect.php';
//$db = new mysqli('localhost', 'root', '', 'a_database');
echo @$imageName = $db->real_escape_string($_FILES['myFile']['name']);
//@$imageData = $db->real_escape_string(file_get_contents($_FILES['myFile']['tmp_name']));
@$imageData = addslashes(file_get_contents($_FILES['myFile']['tmp_name']));
@$imageType = $db->real_escape_string($_FILES['myFile']['type']);

if (!empty($imageType)) {
  if (substr($imageType, 0, 5) == 'image') {
    $query = "INSERT INTO store VALUES('','$imageName','$imageData')";
    if ($query_run = $db->query($query)) {
      $lastid = $db->insert_id;
      $ref='get.php?id=';
      echo "<br><br>Image Uploaded. <p>Your Image:</p>";
    }
    else {
      echo '<br>Try again later!';
    }
  }
    else {
    echo '<br>Only images are allowed';
  }
}
?>
</body>
</html>

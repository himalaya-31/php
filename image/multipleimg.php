<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Multiple Images</title>
  </head>
  <body>
    <form class="" action="multipleimg.php" method="post" enctype="multipart/form-data">
      <input type="file" name="myfile[]" value="" multiple><br><br>
      <input type="submit" name="" value="Upload"><br><br>
    </form>
  </body>
</html>
<?php
require 'connect.php';
  for ($i=0; $i < count(@$_FILES['myfile']['name']); $i++) {
      $name = $db->real_escape_string($_FILES['myfile']['name'][$i]);
      $image = addslashes(file_get_contents($_FILES['myfile']['tmp_name'][$i]));
      $type = $_FILES['myfile']['type'][$i];

      if(!empty($name) && !empty($image) && !empty($type)){
        if(substr($type, 0, 5) == 'image'){
          $query = "INSERT INTO multimg VALUES('', '$name', '$image')";
          if ($query_run = $db->query($query)) {
            $lastid = $db->insert_id;
            $query = "SELECT * from multimg where id = $lastid";
            $query_run = $db->query($query);
            $query_fetch = $query_run->fetch_assoc();
            $last_image = $query_fetch['image'];
            $last_image_enc = 'data:image/jpeg;base64,'.base64_encode($last_image);

            if ($i == 0) {
              echo 'Images are:<br>';
            }
            echo '<img src="'.$last_image_enc.'"><br>';
          }
        }
        else{
          echo 'Sorry! Can upload images only<br>';
        }
      }
      else {
        echo 'Cannot be empty!<br>';
      }
  }
?>

<?php
@$name = $_FILES['file']['name'];
@$size = $_FILES['file']['size'];
@$type = $_FILES['file']['type'];
$max_size = 1097152;

@$tmp_name = $_FILES['file']['tmp_name'];

//echo $type.'<br>';

if (isset($name)) {
  if(!empty($name)){
    if (($type == 'image/jpg' || $type =='image/jpeg') && $size <= $max_size) {
      $location = 'upload/';

      if (move_uploaded_file($tmp_name, $location.$name)) {
        echo 'Uploaded!';
      }
      else {
        echo 'File cannot be Uploaded';
      }
    }
    else {
      echo 'File must be jpg/jpeg and size must be less than 2mb';
    }
  }
  else {
    echo 'Please choose a File';
  }
}
?>

<form class="" action="file.php" method="post" enctype="multipart/form-data">
  <input type="file" name="file" value=""><br><br>
  <input type="submit" name="" value="Submit">
</form>

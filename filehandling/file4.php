<?php
$filename = 'file.txt';

if(file_exists($filename)){
  echo $filename.' already exists.';
}
else {
  $handle = fopen($filename, 'w');
  fwrite($handle, 'Nothing');
  fclose($handle);
  echo $filename.' has been successfully created.';
}
 ?>

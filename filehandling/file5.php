<?php
$filename = 'filetodelete.txt';

if (@unlink($filename)) {
  echo '<strong>'.$filename.'</strong> has been deleted.';
}
else {
  echo '<strong>'.$filename.'</strong> can\'t be deleted' ;
}

$file = 'filetorename.txt';
$rand = rand(10000, 99999);

if (rename($file, $rand.'.txt')) {
  echo '<br><strong>'.$file.'</strong> has been renamed to '.$rand.'.txt';
}
else {
  echo '<br><strong>'.$file.'</strong> can\'t be renamed.';
}
?>

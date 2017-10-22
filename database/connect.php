<?php
$db = new mysqli('localhost', 'root', '', 'a_database');
if($db->connect_errno){
  echo $db->connect_error;
  die('Sorry, we are having some problems');
}
else {
  //echo 'success';
}
 ?>

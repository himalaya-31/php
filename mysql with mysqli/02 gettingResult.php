<?php
//error_reporting(0);
require '01-connect.php';

if($result = $db->query("SELECT * from people")){
  if($count = $result->num_rows){
    echo '<p>'.$count.'</p>';
  }

  while($row = $result->fetch_assoc()){
    echo $row['first_name'].' '.$row['last_name'].'<br>';
    //echo $row->first_name.' '.$row->last_name.'<br>'; //fetch_object()
  }
  $result->free();
}
?>

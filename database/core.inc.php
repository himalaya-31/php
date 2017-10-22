<?php
ob_start();
session_start();
$current_file = $_SERVER['SCRIPT_NAME'];
@$http_referer = $_SERVER['HTTP_REFERER'];

function loggedin(){
  if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
    return true;
  }
  else {
    return false;
  }
}

function getuserfield($field, $db){
  $query = "SELECT $field from users where id = ".$_SESSION['user_id'];
  if($query_run = $db->query($query)){
    if($query_fetch = $query_run->fetch_object())
      if($query_result = $query_fetch->$field){
        return $query_result;
      }
  }
}
?>

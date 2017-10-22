<?php
function myName(){
  echo 'Himalaya';
}

echo 'My name is ';
myName();

echo '<br><br>';
//we can also return the value from the function

$user_ip = $_SERVER['REMOTE_ADDR']; //shows ip address

function yourIP() {
  global $user_ip;
  $string = 'Your IP address is '.$user_ip;
  echo $string;
}

yourIP();
?>

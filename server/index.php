<?php
include_once 'headerinc.php';
//echo $_SERVER['SCRIPT_NAME'];
echo $_SERVER['HTTP_HOST'];
if(isset($_POST['submit'])){
  echo '<br>Process of index.php';
}

$ip_address = $_SERVER['REMOTE_ADDR'];        //not better way
echo '<br>Your IP address is '.$ip_address;

if($ip_address == '::1'){
  echo '<br>Your ip address has been blocked';
}

/*$http_client_ip = $_SERVER['HTTP_CLIENT_IP'];
$http_x_forwarded_for = $_SERVER['HTTP_X_FOWARDED_FOR'];
$remote_addr = $_SERVER['REMOTE_ADDR'];*/
//better way of getting ip

$http_client_ip = getenv('HTTP_CLIENT_IP');
$http_x_forwarded_for = getenv('HTTP_X_FOWARDED_FOR');
$remote_addr = getenv('REMOTE_ADDR');

if(!empty($http_client_ip)){
  $ip_address = $http_client_ip;
}
elseif(!empty($http_x_forwarded_for)){
  $ip_address = $http_x_forwarded_for;
}
else{
  $ip_address = $remote_addr;
}

echo '<br>'.$ip_address;
 ?>

<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'a_database';

//Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

//check connection
if(!$conn){
  die('Connection failed: '.mysqli_connect_error());
}
$sql = 'SELECT * from food';
if (mysqli_query($conn, $sql)) {
  echo 'Query runs Successfully';
}
else {
  echo 'Error in Query';
}

mysqli_close($conn);
?>

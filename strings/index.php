<?php
$string = 'I Could Be Any Case';
$string_lower = strtolower($string);
$string_upper = strtoupper($string);

echo $string_lower.'<br>'.$string_upper;

if(isset($_GET['name']) && !empty($_GET['name'])){
  $name = $_GET['name'];
  echo '<br><br>'.$name;


 ?>
 <?php }
  echo '<br><br>';
  ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="index.php" method="get">
      Name: <input type="text" name="name" value=""><br><br>
      <input type="submit" name="" value="Submit">
    </form>
  </body>
</html>

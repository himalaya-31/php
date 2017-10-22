<?php
$rand = rand();
$rand_max = getrandmax();

echo $rand.'/'.$rand_max.'<br><hr><br>';
if(isset($_POST['roll'])){
    echo rand(100000, 999999).'<br>';
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="index.php" method="post">
        <input type="submit" name="roll" value="Roll dice">
    </form>
  </body>
</html>

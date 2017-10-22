<?php
$offset = 0;
$text = '';
if(isset($_POST['user_input']) && isset($_POST['searchfor']) && isset($_POST['replacewith'])){
  $text = $_POST['user_input'];
  $search = $_POST['searchfor'];
  $search_length = strlen($search);
  $replace = $_POST['replacewith'];

  if(!empty($text) && !empty($search) &&!empty($replace)){
    /*while ($strpos = strrpos($text, $search, $offset)) {
      # code...
    }*/
    $text = str_replace($search, $replace, $text);
  }
}
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="index1.php" method="post">
      <textarea name="user_input" rows="6" cols="30"><?php echo $text; ?></textarea><br><br>
      Search for:<br>
      <input type="text" name="searchfor" value=""><br><br>
      Replace with:<br>
      <input type="text" name="replacewith" value=""><br><br>
      <input type="submit" name="" value="Find and Replace">
    </form>
  </body>
</html>

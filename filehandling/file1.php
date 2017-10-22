<?php
if(isset($_POST['name'])){
  $name = $_POST['name'];

  if(!empty($name)){
    $handle = fopen('names.txt', 'a');
    fwrite($handle, $name."\n");
    fclose($handle);
    echo 'Written Successfully!';
  }
  else {
    echo 'Please Enter name.';
  }
}
?>

 <form class="" action="file1.php" method="post">
   Name: <input type="text" name="name" value=""><br><br>
   <input type="submit" name="submit" value="Submit">
 </form>

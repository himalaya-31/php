<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    require 'connect.php';
    if(isset($_GET['id'])){
      $id = $_GET['id'];
      $query = "SELECT * from video where id=$id";

      if($query_run = $db->query($query)){
        while($row = $query_run->fetch_object()){
          $name = $row->name;
          $url = $row->url;
        }
        echo "You are watching $name <br>";
        //echo "<embed src='$url' width='560' height='315'></embed>";//download the file
        echo "<video width='' height='' controls>
          <source src='$url' >
        </video>";
      }
    }
    else {
      echo 'Error!';
    }
    ?>
  </body>
</html>

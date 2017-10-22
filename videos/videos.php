<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    require 'connect.php';
    $query = "SELECT * from video";
    if($query_run = $db->query($query)) {

      while ($row = $query_run->fetch_assoc()) {
        $id = $row['id'];
        $name = $row['name'];
        echo "<a href='watch.php?id=$id'>$name</a><br>";
      }
    }
    ?>
  </body>
</html>

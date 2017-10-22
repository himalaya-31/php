<?php
require 'connect.php';

if(isset($_POST['name'])){
  $search_name = $_POST['name'];

  if(!empty($search_name)){
    if(strlen($search_name) >= 4){
      $query = "SELECT name from names where name like '%$search_name%'";
      $query_run = $db->query($query);
      $query_num_rows = $query_run->num_rows;

      if($query_num_rows >= 1){
        echo $query_num_rows.' results found:<br>';

        while ($query_row = $query_run->fetch_object()) {
          echo $query_row->name.'<br>';
        }
      }
      else {
        echo 'No results Found';
      }
    }
    else {
      echo 'Keyword must be of 4 or more characters';
    }
  }
  else {
    echo 'Must enter a keyword';
  }
}
?>

<form class="" action="search.php" method="post">
  Name: <input type="text" name="name" value=""> <input type="submit" name="" value="Search">
</form>

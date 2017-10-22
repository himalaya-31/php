<?php
if (isset($_GET['search_text'])) {
   $search_text = $_GET['search_text'];
}
if (!empty($search_text)) {
  if(@$db = new mysqli('localhost', 'root', '', 'a_database')){
    $query = "SELECT name from names where name like '%".$db->real_escape_string($search_text)."%'";
    $query_run = $db->query($query);

    while($query_row = $query_run->fetch_assoc()){
      echo $name = $query_row['name'].'<br>';
    }
  }
}

?>

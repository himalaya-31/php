<?php
require 'connect.php';

$query = $db->query('Select count from hits_count');
$count = $query->fetch_object();
echo $count->count.' Views';
$count_update = $count->count + 1;
$query_update = $db->query("UPDATE hits_count SET count = $count_update");
?>

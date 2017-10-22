<?php
header("Content-Type: application/json; charset=UTF-8");
$obj = json_decode($_GET["x"], false); //POST can be used also

$conn = new mysqli("localhost", "root", "", "a_database");
$result = $conn->query("SELECT name FROM ".$obj->table." LIMIT ".$obj->limit);
$outp = array();
$outp = $result->fetch_all(MYSQLI_ASSOC);

echo json_encode($outp);
?>

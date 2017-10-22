<?php
include 'connect.php';
@$id = addslashes($_REQUEST['id']);
$image = "SELECT * from store where id = $id";
$image_run = $db->query($image);
$image_fetch = $image_run->fetch_assoc();
$image_real = $image_fetch['image'];
$image_enc = 'data:image/jpeg;base64,'.base64_encode($image_real);
//header('Content-type: image/jpeg');
//echo '<img src = "data:image/jpeg;base64,'.base64_encode($image_real).'">';
//echo $image_real;
echo '<img src="'.$image_enc.'">';
?>

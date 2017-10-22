<?php
class MyClass {

  function __construct(){
    echo 'In a Constructor<br>';
  }

  function myFunction(){
    echo 'In a function<br>';
  }
}

$obj = new MyClass();
$obj->myFunction();
?>

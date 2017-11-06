<?php
  session_start();
  array_splice($_SESSION['myarray'],$_GET['key'],1);
  header('Location: newbooking.php');
 ?>

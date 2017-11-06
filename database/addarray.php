<?php
  session_start();
  array_push($_SESSION['myarray'],$_GET['idroomtype']);
  header('Location: newbooking.php');
 ?>

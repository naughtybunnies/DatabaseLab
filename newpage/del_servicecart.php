<?php
  session_start();
  array_splice($_SESSION['servicecart_item'],$_GET['id'],1);
  array_splice($_SESSION['servicecart_unit'],$_GET['id'],1);
  header('Location: service_staff_charge.php');
 ?>

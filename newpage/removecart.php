<?php
  session_start();
  array_splice($_SESSION['cart'],$_GET['id'],1);
  $_SESSION['selectedcount'] = array('1'=>'0','2'=>'0','3'=>'0');
  foreach ($_SESSION['cart'] as $key => $value) {
    $_SESSION['selectedcount'][$value]+=1;
  }
  header('Location: calprice.php');
 ?>

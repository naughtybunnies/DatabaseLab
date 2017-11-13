<?php
  session_start();
  array_push($_SESSION['cart'],$_GET['idroomtype']);
  $_SESSION['selectedcount'] = array('1'=>'0','2'=>'0','3'=>'0');
  foreach ($_SESSION['cart'] as $key => $value) {
    if ($_SESSION['selectedcount'][$value]+1>$_SESSION['availableroom'][$value]) {
      array_pop($_SESSION['cart']);
      header('Location: selectroom.php?status="NOT ENOUGH ROOM FOR THIS ROOM TYPE PLEASE SELECT OTHER ROOM"');
    }else{
      $_SESSION['selectedcount'][$value]+=1;
      header('Location: calprice.php');
    }
  }
 ?>

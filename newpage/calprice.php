<?php
  require_once('connect.php');
  session_start();
  $_SESSION['price']['total'] = 0;
  $_SESSION['price']['gtotal'] = 0;
  foreach ($_SESSION['cart'] as $key => $value) {
    $q = "SELECT price FROM roomtype WHERE roomtype.idroomtype = '".$value."';";
    $result = $mysqli->query($q);
    if(!$result){
      echo "error";
    }else{
      $row = $result->fetch_array();
      $_SESSION['price']['total'] += $row['price'];
      $_SESSION['price']['gtotal'] += $row['price'];
    }
  }
  header('Location: selectroom.php');

 ?>

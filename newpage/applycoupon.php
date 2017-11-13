<?php
  require_once('connect.php');
  session_start();
  $q = "SELECT calc_coupon(".$_SESSION['price']['total'].", '".$_POST['code']."');";
  $result = $mysqli->query($q);
  if(!$result){
    // echo "error";
    // echo "<br>";
    // echo $mysqli->error;
    // echo "<br>";
    // echo "$q";
  }else{
    $row = $result->fetch_array();
    if(!isset($row['0'])){
        header('Location: confirm.php?status="INCORRECT CODE"');
    }else{
      $_SESSION['price']['gtotal'] = $row['0'];
      $_SESSION['price']['code'] = $_POST['code'];
      header('Location: confirm.php');
    }
    //print_r($_SESSION['userinfo']);

  }
 ?>

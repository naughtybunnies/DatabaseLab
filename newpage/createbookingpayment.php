<?php
  session_start();
  require_once('connect.php');
  $_SESSION['bookingid'] = array();
  $_SESSION['paymentid'] = array();


  $q = "CALL createonlinepayment('".$_SESSION['price']['gtotal']."','".$_SESSION['userinfo']['iduser']."','".$_POST['cardno']."',@out);";
  $result = $mysqli->query($q);
  $q = "SELECT @out;";
  $result = $mysqli->query($q);
  // print_r($_SESSION['userinfo']);
  // echo "<br>";
  // print_r($_SESSION['cart']);
  // echo "<br>";
  // print_r($_SESSION['bookinguser']);
  // echo "<br>";
  // print_r($_SESSION['price']);
  if(!$result){
    echo "error";
    echo "<br>";
    echo $mysqli->error;
  }else{
    if(!isset($_SESSION['price']['code'])){
      $_SESSION['price']['code'] = 'NOCODE';
    }
    $row = $result->fetch_array();
    $mypaymentid = $row['@out'];
    $_SESSION['paymentid'] = $mypaymentid;
    // create booking
    foreach ($_SESSION['cart'] as $key => $value) {
      $q = "CALL `assignroomtobooking`('".$_SESSION['bookinguser']['datefrom']."', '".$_SESSION['bookinguser']['dateto']."', '".$value."', @p3);";
      $result = $mysqli->query($q);
      $row = $result->fetch_array();
      $room = $row['roomid'];

      $q = "CALL createonlinebooking('".$_SESSION['bookinguser']['datefrom']."', '".$_SESSION['bookinguser']['dateto']."', '".$_SESSION['userinfo']['iduser']."', '".$room."', '".$_SESSION['price']['code']."', '".$mypaymentid."', @p6);";
      $mysqli->next_result();
      $result = $mysqli->query($q);
      $row = $result->fetch_array();

      $q =  "SELECT @p6";
      $mysqli->next_result();
      $result = $mysqli->query($q);
      $row = $result->fetch_array();
      array_push($_SESSION['bookingid'],$row['@p6']);
    }
    header('Location: success.php');
    // echo "SUCCESSFULL BOOKING";
    // echo "<br> YOUR PAYMENTID IS : ".$_SESSION['paymentid'];
    // echo "<br> YOUR BOOKING ID ARE : ";
    // foreach ($_SESSION['bookingid'] as $key => $value) {
    //   echo $key." : ".$value."<br>";
    // }
  }

 ?>

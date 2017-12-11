<?php
  session_start();
  require_once('connect.php');
  // print_r($_SESSION['userinfo']);
  // print_r($_SESSION['price']);
  // print_r($_SESSION['cart']);
  // print_r($_SESSION['bookinguser']);
  if(!isset($_POST['cardno'])){
    $cardno = '';
  }else{
    $cardno = $_POST['cardno'];
  }
  if(!isset($_POST['price']['code'])){
    $code = '2';
  }else{
    $code = $_POST['price']['code'];
  }
  $q = "SELECT idstaff FROM staff WHERE staff.user_iduser = ".$_SESSION['userinfo']['iduser'].";";
  $result = $mysqli->query($q);
  if(!$result){
    echo "error";
  }else{
    $row = $result->fetch_assoc();
    $staffid = $row['idstaff'];
    echo "$staffid";
    echo '<br>';
  }
  $q = "CALL assignroomtobooking('".$_SESSION['bookinguser']['datefrom']."','".$_SESSION['bookinguser']['dateto']."','".$_SESSION['cart']['0']."',@p3);";
  $result = $mysqli->query($q);
  $row = $result->fetch_array();
  print_r($row);
  echo '<br>';
  $myroomid = $row['0'];
  echo "$myroomid";
  echo '<br>';


  $q = "CALL `newwalkin`('".$_SESSION['price']['gtotal']."', '".$staffid."' , '".$cardno."' ,'".$_POST['type']."', @p0);";
  echo "$q";
  echo "<br>";
  $mysqli->next_result();
  $result = $mysqli->query($q);
  if(!$result){
    echo "error";
    echo "$q";
    echo $mysqli->error;
  }else{
    $q = "SELECT @p0;";
    echo "$q";
    echo "<br>";
    $mysqli->next_result();
    $result=$mysqli->query($q);
    $row = $result->fetch_array();
    print_r($row);
    echo "<br>";
    $mypaymentid = $row['@p0'];
    print_r($mypaymentid);
    echo "<br>";
    $_SESSION['paymentid'] = $mypaymentid;
    print_r($_SESSION['paymentid']);
    echo "<br>";

    $q = "CALL `newwalkinbooking`('".$_SESSION['bookinguser']['datefrom']."', '".$_SESSION['bookinguser']['dateto']."' , '".$staffid."' , '".$myroomid."' ,'".$code."' ,'".$_SESSION['paymentid']."', @p1 );";
    echo "$q";
    echo "<br>";
    $mysqli->next_result();
    $result = $mysqli->query($q);
    if(!$result)
    {
      echo "error";
      echo "$q";
      echo $mysqli->error;
    }
    else
    {
    $q = "SELECT @p1";
    echo "$q";
    echo "<br>";
    $mysqli->next_result();
    $result=$mysqli->query($q);
    $row2 = $result->fetch_array();
    print_r($row2);
    }
    $_SESSION['bookingid'] = array();
    array_push($_SESSION['bookingid'],$row2['@p1']);
    header('Location: success.php');
  }
 ?>

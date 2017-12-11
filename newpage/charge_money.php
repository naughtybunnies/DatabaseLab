<?php
  require_once('connect.php');
  session_start();
  date_default_timezone_set('Asia/Bangkok');
  $date88 = date('Y-m-d', time());
  $time88 = date('h:i:s a', time());
  $_SESSION['storeDate88'] = $date88;
  $_SESSION['storeTime88'] = $time88;
  $_SESSION['storeDateTime88'] = $date88." ".$time88;


  $q = "SELECT user_iduser , staff_idstaff FROM booking where roomnumber = ".$_SESSION['chargemoney']['roomnumber'].";";
  // echo $q;
  // echo '<br>';
  $result = $mysqli->query($q);
  $row = $result->fetch_assoc();
  // print_r($row);
  // echo '<br>';

  if($row['staff_idstaff'] == '')
  {
  $q = "INSERT INTO `payment` (`idpayment`, `timestamp`, `amount`, `user_iduser`, `method`, `cardno`, `staff_idstaff`, `type`, `remark`)
  VALUES (NULL , '".$_SESSION['storeDateTime88']."' , '".$_SESSION['chargemoney']['amount']."' , '".$row['user_iduser']."' , 'cash', '' , NULL , 'service' , NULL)";
  }
  else
  {
    $q = "INSERT INTO `payment` (`idpayment`, `timestamp`, `amount`, `user_iduser`, `method`, `cardno`, `staff_idstaff`, `type`, `remark`)
    VALUES (NULL , '".$_SESSION['storeDateTime88']."' , '".$_SESSION['chargemoney']['amount']."' , NULL , 'cash', '' , '".$row['staff_idstaff']."' , 'service' , NULL)";
  }
  $result = $mysqli->query($q);
  if(!$result)
  {
    echo 'error';
  }
  else
  {
    header('Location: transaction_staff_view.php?status=Create Sucessful');
  }



?>

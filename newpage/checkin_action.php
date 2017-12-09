<?php
  require_once('connect.php');
  session_start();
  $q = "SELECT * FROM booking WHERE idbooking LIKE '".$_POST['bookingid']."';";
  $result = $mysqli->query($q);
  $row = $result->fetch_assoc();
  if(isset($row) && $row['status'] == 'unchecked')
  {
    $q = "UPDATE booking SET status = 'checked' WHERE booking.idbooking = '".$_POST['bookingid']."';";
    $result = $mysqli->query($q);
    header('Location: booking_staff_checkin.php?status=Done');
  }
  elseif(isset($row) && $row['status'] == 'checked')
  {
    header('Location: booking_staff_checkin.php?status=Already Check');
  }
  else
  {
    header('Location: booking_staff_checkin.php?status=Invalid Idbooking');
  }
 ?>

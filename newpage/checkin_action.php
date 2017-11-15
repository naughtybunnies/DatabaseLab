<?php
  require_once('connect.php');
  session_start();
  $q = "UPDATE booking SET status = 'checked' WHERE booking.idbooking = '".$_POST['bookingid']."';";
  $result = $mysqli->query($q);
  header('Location: booking_staff_checkin.php?status=done');
 ?>

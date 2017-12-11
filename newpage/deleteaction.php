<?php
require_once('connect.php');
session_start();
$q = "SELECT * FROM staff_viewbooking WHERE staff_viewbooking.idbooking = ".$_GET['id'].";";
$result = $mysqli->query($q);
$row = $result->fetch_assoc();
$paymentid = array('paymentid'=>$row['payment_idpayment']);

$q = "DELETE FROM payment WHERE payment.idpayment = ".$paymentid['paymentid']." ;";
$result = $mysqli->query($q);
if(!$result)
{
  echo "error";
}
else
{
header('Location: booking_staff_view.php?status=Delete Sucessful');
}
 ?>

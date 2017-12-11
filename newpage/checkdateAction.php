<?php
require_once('connect.php');
session_start();
$_SESSION['checkdate'] = array('checkin' => $_POST['datein'] , 'checkout' =>  $_POST['dateout'] , 'numadult' => $_POST['adult'] , 'numchildren' => $_POST['children']);
if(($_SESSION['checkdate']['checkin'] == '' || $_SESSION['checkdate']['checkout'] == '' || $_SESSION['checkdate']['checkin'] == $_SESSION['checkdate']['checkout']) && $_SESSION['userinfo']['usergroup_idusergroup'] == '11')
{
  header('Location: booking_staff_create.php?datestatus="Invalid Date!, Check in and Check out date must be choose and cannot be same"');
}
elseif(($_SESSION['checkdate']['checkin'] == '' || $_SESSION['checkdate']['checkout'] == '' || $_SESSION['checkdate']['checkin'] == $_SESSION['checkdate']['checkout']) && ($_SESSION['userinfo']['usergroup_idusergroup'] == '1' || $_SESSION['userinfo']['usergroup_idusergroup'] == '2' || $_SESSION['userinfo']['usergroup_idusergroup'] == '3'))
{
  header('Location: booking.php?datestatus="Invalid Date!, Check in and Check out date must be choose and cannot be same"');
}
elseif(($_SESSION['checkdate']['checkin'] == '' || $_SESSION['checkdate']['checkout'] == '' || $_SESSION['checkdate']['checkin'] == $_SESSION['checkdate']['checkout']) && !isset($_SESSION['userinfo']) )
{
  header('Location: home.php?datestatus="Invalid Date!, Check in and Check out date must be choose and cannot be same"');
}
else
{
  $checkout = $_SESSION['checkdate']['checkout'];
  $checkin = $_SESSION['checkdate']['checkin'];
  $date1=date_create("$checkout");
  $date2=date_create("$checkin");
  $diff=date_diff($date1,$date2);
  $_SESSION['dateinterval'] = $diff->format("%a");
  header('Location: selectroom.php');
}
?>

<?php
  require_once('connect.php');
  switch ($_POST['edittype']) {
    case 'EDITSERVICE':
      // edit query to become something like below
      $q = "UPDATE staff_viewservice WHERE staff_viewservice.idservice = ".$_POST['id'].";";
      $result = $mysqli->query($q);
      header('Location: staff_view_service.php');
      break;

    case 'EDITSTAFF':
      $q = "";
      $result = $mysqli->query($q);
      break;

    case '...':
      $q = "";
      $result = $mysqli->query($q);
      break;

    default:
      header('Location: dashboard.php');
      break;
  }
 ?>

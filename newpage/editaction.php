<?php
  require_once('connect.php');
  switch ($_POST['edittype']) {
    case 'EDITSERVICE':
      // edit query to become something like below
      $q = "UPDATE staff_viewservice SET name = '".$_POST['name']."' , price = '".$_POST['price']."' WHERE staff_viewservice.idservice = ".$_POST['id'].";";
      // echo $q;
      $result = $mysqli->query($q);
      header('Location: service_staff_view.php');
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

<?php
  require_once('connect.php');
  switch ($_POST['edittype']) {
    case 'EDITSERVICE':
      // edit query to become something like below
      $q = "UPDATE staff_viewservice SET name = '".$_POST['name']."' , price = '".$_POST['price']."' WHERE staff_viewservice.idservice = ".$_POST['idservice'].";";
      // echo $q;
      $result = $mysqli->query($q);
      header('Location: service_staff_view.php');
      break;

    case 'EDITSTAFF':
      $q = "UPDATE staff_viewstaff SET salary = '".$_POST['salary']."' , position = '".$_POST['position']."' , status = '".$_POST['status']."' WHERE staff_viewstaff.idstaff = ".$_POST['idstaff'].";";
      $result = $mysqli->query($q);

      $q = "UPDATE staff_viewstaff SET fname = '".$_POST['fname']."' , lname = '".$_POST['lname']."' , address = '".$_POST['address']."' WHERE staff_viewstaff.idstaff = ".$_POST['idstaff'].";";
      $result = $mysqli->query($q);

      header('Location: staff_staff_view.php');
      break;

    case 'EDITUSER':
      $q = "UPDATE staff_viewuser SET usergroup_idusergroup = '".$_POST['usergroup_idusergroup']."' , email = '".$_POST['email']."' , password = '".$_POST['password']."' , fname = '".$_POST['fname']."' , lname = '".$_POST['lname']."' , address = '".$_POST['address']."' WHERE staff_viewuser.iduser = ".$_POST['iduser'].";";
      $result = $mysqli->query($q);

      header('Location: user_staff_view.php');
      break;

    case 'EDITREQUEST':
      $q = "UPDATE request SET status = 'closed' , replytimestamp = '".$_POST['replytimestamp']."' , replymessage = '".$_POST['replymessage']."' WHERE request.idrequest = ".$_POST['idrequest'].";";
      $result = $mysqli->query($q);

      header('Location: request_staff_view.php');
      break;

    case 'EDITMESSAGE':
      $q = "UPDATE staff_viewmessage SET message = '".$_POST['message']."' , timestamp = '".$_POST['timestamp']."' WHERE staff_viewmessage.message_idmessage = ".$_POST['message_idmessage'].";";
      $result = $mysqli->query($q);

      header('Location: message_staff_view.php');
      break;

   case 'EDITBOOKING':
      $q = "UPDATE staff_viewbooking SET fromdate = '".$_POST['fromdate']."' , todate = '".$_POST['todate']."' WHERE staff_viewbooking.idbooking = ".$_POST['idbooking'].";";
      $result = $mysqli->query($q);

      header('Location: booking_staff_view.php');
      break;

    default:
      header('Location: dashboard.php');
      break;
  }
 ?>

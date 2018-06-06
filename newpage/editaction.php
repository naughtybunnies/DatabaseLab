<?php
  require_once('connect.php');
  session_start();
  switch ($_POST['edittype']) {
    case 'EDITSERVICE':
      // edit query to become something like below
      $q = "SELECT * FROM staff_viewservice WHERE name LIKE '".$_POST['name']."' ;";
      $result = $mysqli->query($q);
      $row = $result->fetch_assoc();
      if(isset($row) && $row['idservice'] != $_POST['idservice'])
      {
        header('Location: service_staff_view.php?status=This name already use');
      }
      elseif($_POST['name'] == '' || $_POST['price'] == '')
      {
        header('Location: service_staff_view.php?status=Please Typing Both Information');
      }
      else
      {
        $q = "UPDATE staff_viewservice SET name = '".$_POST['name']."' , price = '".$_POST['price']."' WHERE staff_viewservice.idservice = ".$_POST['idservice'].";";
        $result = $mysqli->query($q);
        header('Location: service_staff_view.php?status=Edit Sucessful');
      }
      break;

    case 'EDITSTAFF':
      if($_POST['fname'] == '' || $_POST['lname'] == '' || $_POST['salary'] == '' || $_POST['position'] == '')
      {
        header('Location: staff_staff_view.php?status=Plese Type FirstName,LastName,Salary,Position');
      }
      else
      {
      $q = "UPDATE staff_viewstaff SET salary = '".$_POST['salary']."' , position = '".$_POST['position']."' , status = '".$_POST['status']."' WHERE staff_viewstaff.idstaff = ".$_POST['idstaff'].";";
      $result = $mysqli->query($q);

      $q = "UPDATE staff_viewstaff SET fname = '".$_POST['fname']."' , lname = '".$_POST['lname']."' , address = '".$_POST['address']."' , dob = '".$_POST['dob']."' , personalid = '".$_POST['personalid']."' WHERE staff_viewstaff.idstaff = ".$_POST['idstaff'].";";
      $result = $mysqli->query($q);

      header('Location: staff_staff_view.php?status=Edit Sucessful');
      }
      break;

    case 'EDITUSER':
    if($_POST['fname'] == '' || $_POST['lname'] == '' || $_POST['password'] == '')
    {
      header('Location: user_staff_view.php?status=Plese Type FirstName,LastName,Password');
    }
    else
    {
      $q = "UPDATE staff_viewuser SET usergroup_idusergroup = '".$_POST['usergroup_idusergroup']."' , email = '".$_POST['email']."' , password = '".$_POST['password']."' , fname = '".$_POST['fname']."' , lname = '".$_POST['lname']."' , address = '".$_POST['address']."' , dob = '".$_POST['dob']."' , personalid = '".$_POST['personalid']."' WHERE staff_viewuser.iduser = ".$_POST['iduser'].";";
      $result = $mysqli->query($q);
      header('Location: user_staff_view.php?status=Edit Sucessful');
    }
      break;

    case 'REPLY':
      $q = "UPDATE request SET status = 'closed' , replytimestamp = '".$_POST['replytimestamp']."' , replymessage = '".$_POST['replymessage']."' WHERE request.idrequest = ".$_POST['idrequest'].";";
      $result = $mysqli->query($q);

      header('Location: request_staff_view.php');
      break;

    case 'EDITMESSAGE':
      $q = "UPDATE staff_viewmessage SET message = '".$_POST['message']."' , timestamp = '".$_POST['timestamp']."' WHERE staff_viewmessage.message_idmessage = ".$_POST['message_idmessage'].";";
      $result = $mysqli->query($q);

      header('Location: message_staff_view.php');
      break;

      case 'EDITROOM':
        // edit query to become something like below
        $q = "SELECT * FROM staff_viewroom WHERE roomname LIKE '".$_POST['roomname']."' ;";
        $result = $mysqli->query($q);
        $row = $result->fetch_assoc();
        if(isset($row) && $row['idroom'] != $_POST['idroom'])
        {
          header('Location: room_staff_view.php?status=This name already use');
        }
        elseif($_POST['roomname'] == '')
        {
          header('Location: room_staff_view.php?status=Please Typing Information');
        }
        else
        {
          $q = "UPDATE staff_viewroom SET roomname = '".$_POST['roomname']."' , status = '".$_POST['status']."' WHERE staff_viewroom.idroom = ".$_POST['idroom'].";";
          $result = $mysqli->query($q);
          header('Location: room_staff_view.php?status=Edit Sucessful');
        }
        break;


    default:
      header('Location: dashboard.php');
      break;
  }
 ?>

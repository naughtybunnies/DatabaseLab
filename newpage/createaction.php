<?php
  require_once('connect.php');
  session_start();
  switch ($_POST['createtype']) {
    case 'CREATESERVICE':
      // edit query to become something like below
      $q = "SELECT * FROM staff_viewservice WHERE name LIKE '".$_POST['name']."' ;";
      $result = $mysqli->query($q);
      $row = $result->fetch_assoc();
      if(isset($row))
      {
        header('Location: service_staff_create.php?status=This name already use');
      }
      elseif($_POST['name'] == '' || $_POST['price'] == '')
      {
        header('Location: service_staff_create.php?status=Please Typing Both Information');
      }
      else
      {
        $q = "INSERT INTO service (idservice, name, price) VALUES (NULL, '".$_POST['name']."', '".$_POST['price']."')";
        $result = $mysqli->query($q);
        header('Location: service_staff_view.php?status=Create Sucessful');
      }
      break;

    case 'CREATESTAFF':
    // edit query to become something like below
    $q = "SELECT * FROM user WHERE email LIKE '".$_POST['email']."' ;";
    $result = $mysqli->query($q);
    $row = $result->fetch_assoc();
    if(isset($row))
    {
      header('Location: staff_staff_create.php?status=This email already use');
    }
    elseif($_POST['email'] == '' || $_POST['password'] == '' || $_POST['fname'] == '' || $_POST['lname'] == '')
    {
      header('Location: staff_staff_create.php?status=Plese Typing Email,Password,FirstName and LastName');
    }
    else
    {
      $q = "INSERT INTO `user` (iduser, usergroup_idusergroup, password, email, fname, lname, address, dob, personalid)
      VALUES (NULL, '11', '".$_POST['password']."' , '".$_POST['email']."' , '".$_POST['fname']."' , '".$_POST['lname']."' , '".$_POST['address']."' , '".$_POST['dob']."' , '".$_POST['personalid']."')";
      $result = $mysqli->query($q);

      $q = "SELECT iduser FROM user WHERE email LIKE '".$_POST['email']."' ;";
      $result = $mysqli->query($q);
      $row2 = $result->fetch_assoc();


      $q = "INSERT INTO `staff` (idstaff , user_iduser , salary , position , status)
      VALUES (NULL, '".$row2['iduser']."' , '".$_POST['salary']."' , '".$_POST['position']."' ,'active')";
      $result = $mysqli->query($q);
      header('Location: staff_staff_view.php?status=Create Sucessful');
    }
    break;

    case 'CREATEUSER':
    // edit query to become something like below
    $q = "SELECT * FROM user WHERE email LIKE '".$_POST['email']."' ;";
    $result = $mysqli->query($q);
    $row = $result->fetch_assoc();
    if(isset($row))
    {
      header('Location: user_staff_create.php?status=This email already use');
    }
    elseif($_POST['email'] == '' || $_POST['password'] == '' || $_POST['fname'] == '' || $_POST['lname'] == '')
    {
      header('Location: user_staff_create.php?status=Plese Typing Email,Password,FirstName and LastName');
    }
    else
    {
      $q = "INSERT INTO `user` (iduser, usergroup_idusergroup, password, email, fname, lname, address, dob, personalid)
      VALUES (NULL, '1', '".$_POST['password']."' , '".$_POST['email']."' , '".$_POST['fname']."' , '".$_POST['lname']."' , '".$_POST['address']."' , '".$_POST['dob']."' , '".$_POST['personalid']."')";
      $result = $mysqli->query($q);
      header('Location: user_staff_view.php?status=Create Sucessful');
    }
    break;

    case 'CREATEMESSAGE':
    // edit query to become something like below
    $q = "INSERT INTO message (idmessage, staff_idstaff, message, `timestamp`)
    VALUES (NULL, '".$_POST['staff_idstaff']."' , '".$_POST['message']."' , '".$_POST['timestamp']."')";
    $result = $mysqli->query($q);

    $q = "SELECT MAX(idmessage) AS MAX FROM message;";
    $result = $mysqli->query($q);
    $row = $result->fetch_assoc();

    $q = "UPDATE usergroup_has_message SET message_idmessage = '".$row['MAX']."' WHERE usergroup_idusergroup = '".$_POST['usergroup_idusergroup']."' ";
    $result = $mysqli->query($q);
    header('Location: message_staff_view.php?status=Create Sucessful');
    break;

    case 'CREATEROOM':
      // edit query to become something like below
      $q = "SELECT * FROM staff_viewroom WHERE roomname LIKE '".$_POST['roomname']."' ;";
      $result = $mysqli->query($q);
      $row = $result->fetch_assoc();
      if(isset($row))
      {
        header('Location: room_staff_create.php?status=This name already use');
      }
      elseif($_POST['roomname'] == '')
      {
        header('Location: room_staff_create.php?status=Please Typing Information');
      }
      else
      {
        $q = "INSERT INTO room (idroom , roomtype_idroomtype , roomname, status) VALUES (NULL, '".$_POST['roomtype_idroomtype']."' ,'".$_POST['roomname']."', 'open')";
        $result = $mysqli->query($q);
        header('Location: room_staff_view.php?status=Create Sucessful');
      }
      break;

    default:
      header('Location: dashboard.php');
      break;
  }
 ?>

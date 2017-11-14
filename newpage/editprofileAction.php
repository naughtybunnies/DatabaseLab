<?php
require_once('connect.php');
session_start();
if(isset($_SESSION['userinfo']))
{
  $q = "UPDATE user SET password = '.$_POST['pass'].' , fname = '.$_POST['fname1'].' , lname = '.$_POST['lname1'].' , address = '.$_POST['address1'].' WHERE iduser = '.$_SESSION['userinfo']['iduser']';";
  $result = $mysqli->query($q);
  if(!$result)
  {
    echo "error";
    header('Location: editprofile.php');
  }
  else
  {
    echo "sucess";
    header('Location: myprofile.php');
  }
}
else
{
  header('Location: login.php');
}
 ?>

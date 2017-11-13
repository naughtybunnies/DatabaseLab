<?php
require_once('connect.php');
session_start();
if(isset($_SESSION['userinfo']))
{
  $q = "INSERT INTO `request` (`idrequest`, `user_iduser`, `staff_idstaff`, `message`, `status`, `replymessage`, `timestamp`, `replytimestamp`)
  VALUES (NULL,'".$_SESSION['userinfo']['iduser']."', NULL,'".$_POST['description']."', 'open', NULL,'".$_SESSION['storeDateTime']."' , NULL)";
  $result = $mysqli->query($q);
  if(!$result)
  {
    echo "error";
    header('Location: sendrequest.php');
  }
  else
  {
    echo "sucess";
    header('Location: viewrequest.php?');
  }
}
else
{
  header('Location: login.php');
}
 ?>

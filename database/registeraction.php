<?php
  require_once('connect.php');
  $email = $_POST['email'];
  $password = $_POST['password'];
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];

  $q = "INSERT INTO `user` (`iduser`, `usergroup_idusergroup`, `password`, `email`, `name`, `surname`) VALUES (NULL, '1', '".$password."', '".$email."', '".$fname."', '".$lname."')";
  $result = $mysqli->query($q);
  if(!$result){
    echo "Failed Registration";
  }else{
    header('Location: notice.php');
  }
 ?>

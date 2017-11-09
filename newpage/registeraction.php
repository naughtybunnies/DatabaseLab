<?php
  require_once('connect.php');
  if(isset($_POST['email']) && isset($_POST['password']) && isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['address']) && isset($_POST['dob']) && isset($_POST['personalid'])){
    $q = "INSERT INTO `user` (`iduser`, `usergroup_idusergroup`, `password`, `email`, `fname`, `lname`, `address`, `dob`, `personalid`) VALUES (NULL, '1', '".$_POST['password']."', '".$_POST['email']."', '".$_POST['fname']."', '".$_POST['lname']."', '".$_POST['address']."', '".$_POST['dob']."', '".$_POST['personalid']."')";
    $result = $mysqli->query($q);
    if(!$result){
      echo "error";
    }else{
      #echo "success";
      header('Location: login.php?regstatus="REGISTER SUCCESS PLEASE LOGIN"');
    }
  }else{
    header('Location: login.php?regstatus="PLEASE FILL IN ALL THE FORM"');
  }
 ?>

<?php
  require_once('connect.php');
  $q = "SELECT * FROM user WHERE email LIKE '".$_POST['email']."' ;";
  $result = $mysqli->query($q);
  $row = $result->fetch_assoc();
  if(isset($row))
  {
    header('Location: login.php?regstatus="THIS EMAIL ALREADY USED"');
  }
  else
  {
      if($_POST['email'] != '' && $_POST['password'] != '' && $_POST['fname'] != '' && $_POST['lname'] != '' && $_POST['address'] != '' && $_POST['dob'] != '' && $_POST['personalid'] != ''){
        $q = "INSERT INTO `user` (`iduser`, `usergroup_idusergroup`, `password`, `email`, `fname`, `lname`, `address`, `dob`, `personalid`) VALUES (NULL, '1', '".$_POST['password']."', '".$_POST['email']."', '".$_POST['fname']."', '".$_POST['lname']."', '".$_POST['address']."', '".$_POST['dob']."', '".$_POST['personalid']."')";
        $result = $mysqli->query($q);
        if(!$result){
          echo "error";
        }else{
          #echo "success";
          header('Location: login.php?regstatus="REGISTER SUCCESS PLEASE LOGIN"');
        }
      }
      else{
        header('Location: login.php?regstatus="PLEASE FILL IN ALL THE FORM"');
      }
  }
 ?>

<?php
  session_start();
  require_once('connect.php');
  $q = "SELECT * FROM user WHERE user.email='".$_POST['email']."' AND user.password='".$_POST['password']."';";
  $result = $mysqli->query($q);
  if(!$result){
    echo "ERROR";
    echo "<br> $q";
  }else{
    $row = $result->fetch_array();
    if($row){
      #echo "login success";
      $_SESSION['user']=$row;
      if($row['usergroup_idusergroup']=='11'){
        echo "STAFF LOGIN";
      }else{
        #echo "CUSTOMER LOGIN";
        if (isset($_SESSION['user'])) {
          header('Location: addguest.php');
        }else{
          header('Location: customer.php');
        }
      }
    }else{
      echo "incorrect";
    }
  }
 ?>

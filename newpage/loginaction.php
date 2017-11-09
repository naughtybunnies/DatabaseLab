<?php
  require_once('connect.php');
  if (isset($_POST['email'])&&isset($_POST['password'])) {
    $q = "SELECT * FROM user WHERE user.email='".$_POST['email']."' AND user.password='".$_POST['password']."';";
    //echo "$q";
    $result = $mysqli->query($q);
    if(!$result){
      echo "error";
    }else{
      $row = $result->fetch_array();
      #print_r($row);
      if(isset($row['iduser'])){
        // correct login
        session_start();
        $_SESSION['userinfo'] = $row;
        header('Location: dashboard.php');
      }else{
        header('Location: login.php?logstatus="INCORRECT EMAIL OR PASSWORD"');
      }

    }
  }
 ?>

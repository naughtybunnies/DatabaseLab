<?php
  require_once('connect.php');
  session_start();
  if(!isset($_GET['id'])){
    header('Location: home.php');
  }else{
    $q = "SELECT * FROM request WHERE request.idrequest = ".$_GET['id'].";";
    $result = $mysqli->query($q);
    if(!$result){
      echo "error <br>";
      echo $q;
    }else{
      $row = $result->fetch_array();
      // this is customer's message
      echo "CUSTOMER's MESSAGE <br><br>";
      echo $row['message'];
      if(isset($row['replymessage'])){
        echo "<br><br>";
        // this is staff's message
        echo "STAFF's RESPONSE <br><br>";
        echo $row['replymessage'];
      }
    }
    echo "<br><br>";
    if($_SESSION['userinfo']['usergroup_idusergroup'] =='11')
    {
      echo "<a href='request_staff_view.php'>GO BACK</a>";
    }
    else
    {
      echo "<a href='viewrequest.php'>GO BACK</a>";
    }
  }
 ?>

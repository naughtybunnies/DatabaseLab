<?php
  require_once('connect.php');
  require_once('helperfunction.php');
  session_start();
  ?>
  <html>
  <head>
    <title>CU@MyPlace</title>
    <link rel="stylesheet" href="default.css">
  </head>

  <body>

      <div class="container">
        <img src="img/home1.jpg" height="600" width="100%" id="tviewpic2">

          <div class="tcontentbox_booking">
        <?php

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
      echo "<h1>CUSTOMER's MESSAGE</h1> <br><br>";
      echo $row['message'];
      if(isset($row['replymessage'])){
        echo "<br><br>";
        // this is staff's message
        echo "<h1>STAFF's RESPONSE</h1> <br><br>";
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
</div>
</div>
 <?php footer(); ?>
</div>

 </body>

</html>

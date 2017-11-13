<?php
  require_once('helperfunction.php');
  require_once('connect.php');
  session_start();
  if (isset($_SESSION['userinfo'])) {
    #print_r($_SESSION['userinfo']);
          // set date and time
          date_default_timezone_set('Asia/Bangkok');
          $date = date('Y-m-d', time());
          $time = date('h:i:s a', time());
    $_SESSION['storeDate'] = $date;
    $_SESSION['storeTime'] = $time;
    $_SESSION['storeDateTime'] = $date." ".$time;
  }else{
    header('Location: login.php');
  }
?>
<html>
<head>
  <title>CU@MyPlace</title>
  <link rel="stylesheet" href="default.css">
</head>

<body>

    <div class="container">
      <?php topbar_logout();?>


      <div id="sendrequest_info">
        <div class="textinsendrequest">
          <p>Request Informations</p>
        <ul>

          <li><b>UserID : <?php echo $_SESSION['userinfo']['iduser']; ?> </b></li>
          <li><b>Name : <?php echo $_SESSION['userinfo']['fname']." ".$_SESSION['userinfo']['lname']; ?></b></li>
          <li><b>Date : <?php echo $_SESSION['storeDate']; ?></b></li>
          <li><b>Time : <?php echo $_SESSION['storeTime']; ?></b></li>
          <li><b>Description :</b></li>
          <textarea name="description"></textarea>

        </ul>
        </div>
        <form action="sendrequestAction.php">
        <input type="submit" value="Confirm">
        </form>
      </div>

      <td><img src="img/home1.jpg" height="600" width="100%"></td>


  <?php footer(); ?>
</div>

  </body>

</html>

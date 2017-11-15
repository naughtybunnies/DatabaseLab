<?php
  require_once('helperfunction.php');
  session_start();
  if (isset($_SESSION['userinfo'])) {
    if ($_SESSION['userinfo']['usergroup_idusergroup']=='11') {
      //header('Location: dashboard_staff.php');
    }else{
      header('Location: dashboard.php');
    }

    #print_r($_SESSION['userinfo']);
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
      <?php topbar_logout_staff(); ?>
      <div id="dashboard_staff">
        <ul>
          <a href="booking_staff.php"><li>Bookings <img src="img/i_booking1.png" style="width:40px;height:40px;" alt="" align="center"></li></a>
          <a href="staff_staff.php"><li>Staffs  <img src="img/i_staff.png" style="width:40px;height:40px;" alt="" align="center"></li></a>
          <a href="message_staff.php"><li>Messages <img src="img/i_message.png" style="width:40px;height:40px;" alt="" align="center"></li></a>
          <a href="room_staff.php"><li>Rooms <img src="img/i_room1.png" style="width:40px;height:40px;" alt="" align="center"></li></a>
          <a href="request_staff.php"><li>Requests <img src="img/i_request.png" style="width:40px;height:40px;" alt="" align="center"></li></a>
          <a href="user_staff.php"><li>Users <img src="img/user.png" style="width:40px;height:40px;" alt="" align="center"></li></a>
          <a href="service_staff.php"><li>Services <img src="img/i_service.png" style="width:40px;height:40px;" alt="" align="center"></li></a>
          <a href="transaction_staff.php"><li>Transactions <img src="img/i_transaction.png" style="width:40px;height:40px;" alt="" align="center"></li></a>

        </ul>
      </div>

      <img src="img/home1.jpg" height="600" width="100%">

  <?php footer(); ?>
</div>

  </body>

</html>
